<?php

declare(strict_types=1);

use DG\BypassFinals;
use Psalm\Internal\Analyzer\ProjectAnalyzer;
use Psalm\Internal\Provider\FileProvider;
use Psalm\Internal\Provider\Providers;
use Psalm\Tests\TestConfig;
use Webmozart\Assert\Assert;

require 'vendor/autoload.php';
require __DIR__ . '/gen_callmap_utils.php';

BypassFinals::enable();

new ProjectAnalyzer(new TestConfig, new Providers(new FileProvider));

$codebase = ProjectAnalyzer::getInstance()->getCodebase();

$allFuncs = [];

// Load+normalize autogenerated maps
$baseMaps = [];
foreach (glob(__DIR__."/../dictionaries/autogen/CallMap_*.php") as $file) {
    Assert::eq(preg_match('/_(\d+)\.php/', $file, $matches), 1);
    $version = $matches[1];

    $baseMaps[$version] = normalizeCallMap(require $file);

    $baseMaps[$version]['debug_zval_dump'] = [
        0 => 'void',
        'value' => 'mixed',
        '...values=' => 'mixed',
    ];
    $baseMaps[$version]['mb_convert_variables'] = [
          0 => 'false|string',
          'to_encoding' => 'string',
          'from_encoding' => 'array<array-key, mixed>|string',
          '&var' => 'array<array-key, mixed>|object|string',
          '...&vars=' => 'array<array-key, mixed>|object|string',
    ];
    $baseMaps[$version]['closure::__invoke'] = [
        0 => 'mixed',
        '...args=' => 'mixed',
    ];
    foreach (['check', 'embed', 'fork', 'prepare'] as $f) {
        $baseMaps[$version]["evloop::$f"] = [
            0 => $baseMaps[$version]["evloop::$f"][0],
            'callback' => 'callable',
            'data=' => 'mixed',
            'priority=' => 'int',
        ];
    }
    if (count($baseMaps[$version]['amqpbasicproperties::__construct']) === 1) {
        $baseMaps[$version]['amqpbasicproperties::__construct'] = [
            0 => 'void',
            'contentType=' => 'null|string',
            'contentEncoding=' => 'null|string',
            'headers=' => 'array<array-key, mixed>',
            'deliveryMode=' => 'int',
            'priority=' => 'int',
            'correlationId=' => 'null|string',
            'replyTo=' => 'null|string',
            'expiration=' => 'null|string',
            'messageId=' => 'null|string',
            'timestamp=' => 'int|null',
            'type=' => 'null|string',
            'userId=' => 'null|string',
            'appId=' => 'null|string',
            'clusterId=' => 'null|string',
        ];
    }
    if (isset($baseMaps[$version]['file_get_contents']['flags='])) {
        unset($baseMaps[$version]['file_get_contents']['flags=']);
        $baseMaps[$version]['file_get_contents']['use_include_path='] = 'bool';
    }
    foreach ($baseMaps[$version]['date_time_set'] as &$t) {
        if ($t === 'mixed') {
            $t = 'int';
        }
    } unset($t);

    $baseMaps[$version] = normalizeCallMap($baseMaps[$version]);
    $allFuncs += $baseMaps[$version];
    writeCallMap($file, $baseMaps[$version]);
}

ksort($baseMaps);
$last = array_key_last($baseMaps);

// Load+normalize hand-written diff maps
$customMaps = [
    84 => require __DIR__."/../dictionaries/override/CallMap.php",
];

$customDiffs = [];
foreach (glob(__DIR__."/../dictionaries/override/CallMap_*.php") as $file) {
    if (!preg_match('/_(\d+)_delta\.php/', $file, $matches)) {
        continue;
    }
    $version = $matches[1];
    $customDiffs[$version] = require $file;
    writeCallMap($file, $customDiffs[$version]);
}
krsort($customDiffs);

$versions = [70, ...array_reverse(array_keys($customDiffs))];

// Merge hand-written diff maps to generate hand-written full maps
foreach ($customDiffs as $version => $customDiff) {
    $customMap = $customMaps[$version];

    foreach ($customDiff['removed'] as $func => $descr) {
        $customMap[$func] = $descr;
    }
    foreach ($customDiff['added'] as $func => $descr) {
        unset($customMap[$func]);
    }
    foreach ($customDiff['changed'] as $func => $sub) {
        $customMap[$func] = $sub['old'];
    }

    $prevVersion = array_search($version, $versions)-1;
    if ($prevVersion < 0) {
        throw new AssertionError("No prevVersion for $version");
    }
    $customMaps[$versions[$prevVersion]] = $customMap;
}
krsort($customMaps);

foreach ($customMaps as $version => &$data) {
    foreach ($data as $func => &$params) {
        if (isset($baseMaps[$version][$func])) {
            $baseParams = $baseMaps[$version][$func];
            $params = assertEntryParameters($func, $baseParams, $params);
        } elseif (!str_contains($func, "'")
            && !str_starts_with($func, 'apache')
            && !str_starts_with($func, 'ftp')
            && !str_starts_with($func, 'db2')
            && isset($allFuncs[$func])
        ) {
            unset($data[$func]);
        }
    } unset($params);
    $data = normalizeCallMap($data);
} unset($data);

$equal = [];
foreach ($baseMaps as $version => $data) {
    foreach ($data as $func => $params) {
        $customParams = $customMaps[$version][$func] ?? null;
        if ($params === $customParams) {
            $equal[$func] ??= true;
        } else {
            $equal[$func] = false;
        }
    }
}

foreach ($equal as $func => $ok) {
    if ($ok) {
        foreach ($customMaps as &$data) {
            unset($data[$func]);
        } unset($data);
    }
}

// Merge hand-written full maps into autogenerated full maps, write to files
foreach ($customMaps as $version => $data) {
    $data = normalizeCallMap(array_replace($baseMaps[$version] ?? [], $data));
    writeCallMap(__DIR__."/../dictionaries/CallMap_$version.php", $data);
}

// Overwrite custom diff maps
writeCallMap(__DIR__."/../dictionaries/override/CallMap.php", $customMaps[$last]);

// Regenerate diff maps from custom maps
foreach ($customMaps as $prevVersion => $prevData) {
    if ($prevVersion === $last) {
        $nextVersion = $prevVersion;
        $nextData = $prevData;
        continue;
    }

    $diff = ['added' => [], 'changed' => [], 'removed' => []];
    foreach ($prevData as $func => $descr) {
        if (!isset($nextData[$func])) {
            $diff['removed'][$func] = $descr;
        } elseif ($nextData[$func] !== $descr) {
            $diff['changed'][$func] = [
                'old' => $descr,
                'new' => $nextData[$func],
            ];
        }
    }
    foreach ($nextData as $func => $descr) {
        if (!isset($prevData[$func])) {
            $diff['added'][$func] = $descr;
        }
    }

    writeCallMap(__DIR__."/../dictionaries/override/CallMap_{$nextVersion}_delta.php", normalizeCallMap($diff));

    $nextVersion = $prevVersion;
    $nextData = $prevData;
}