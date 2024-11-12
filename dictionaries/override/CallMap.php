<?php // phpcs:ignoreFile

return array (
  '_' => 
  array (
    0 => 'string',
    'message' => 'string',
  ),
  '__halt_compiler' => 
  array (
    0 => 'void',
  ),
  'abs' => 
  array (
    0 => 'int<0, max>',
    'num' => 'int',
  ),
  'abs\'1' => 
  array (
    0 => 'float',
    'num' => 'float',
  ),
  'abs\'2' => 
  array (
    0 => 'numeric',
    'num' => 'numeric',
  ),
  'accelerator_get_configuration' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'accelerator_get_scripts' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'accelerator_get_status' => 
  array (
    0 => 'array<array-key, mixed>',
    'fetch_scripts' => 'bool',
  ),
  'accelerator_reset' => 
  array (
    0 => 'mixed',
  ),
  'accelerator_set_status' => 
  array (
    0 => 'void',
    'status' => 'bool',
  ),
  'acos' => 
  array (
    0 => 'float',
    'num' => 'float',
  ),
  'acosh' => 
  array (
    0 => 'float',
    'num' => 'float',
  ),
  'addcslashes' => 
  array (
    0 => 'string',
    'string' => 'string',
    'characters' => 'string',
  ),
  'addslashes' => 
  array (
    0 => 'string',
    'string' => 'string',
  ),
  'amqpbasicproperties::getappid' => 
  array (
    0 => 'null|string',
  ),
  'amqpbasicproperties::getclusterid' => 
  array (
    0 => 'null|string',
  ),
  'amqpbasicproperties::getcontentencoding' => 
  array (
    0 => 'null|string',
  ),
  'amqpbasicproperties::getcontenttype' => 
  array (
    0 => 'null|string',
  ),
  'amqpbasicproperties::getcorrelationid' => 
  array (
    0 => 'null|string',
  ),
  'amqpbasicproperties::getdeliverymode' => 
  array (
    0 => 'int',
  ),
  'amqpbasicproperties::getexpiration' => 
  array (
    0 => 'null|string',
  ),
  'amqpbasicproperties::getheaders' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'amqpbasicproperties::getmessageid' => 
  array (
    0 => 'null|string',
  ),
  'amqpbasicproperties::getpriority' => 
  array (
    0 => 'int',
  ),
  'amqpbasicproperties::getreplyto' => 
  array (
    0 => 'null|string',
  ),
  'amqpbasicproperties::gettimestamp' => 
  array (
    0 => 'int|null',
  ),
  'amqpbasicproperties::gettype' => 
  array (
    0 => 'null|string',
  ),
  'amqpbasicproperties::getuserid' => 
  array (
    0 => 'null|string',
  ),
  'amqpchannel::basicrecover' => 
  array (
    0 => 'void',
    'requeue=' => 'bool',
  ),
  'amqpchannel::committransaction' => 
  array (
    0 => 'void',
  ),
  'amqpchannel::getchannelid' => 
  array (
    0 => 'int',
  ),
  'amqpchannel::getconnection' => 
  array (
    0 => 'AMQPConnection',
  ),
  'amqpchannel::getconsumers' => 
  array (
    0 => 'array<array-key, AMQPQueue>',
  ),
  'amqpchannel::getprefetchcount' => 
  array (
    0 => 'int',
  ),
  'amqpchannel::getprefetchsize' => 
  array (
    0 => 'int',
  ),
  'amqpchannel::isconnected' => 
  array (
    0 => 'bool',
  ),
  'amqpchannel::qos' => 
  array (
    0 => 'void',
    'size' => 'int',
    'count' => 'int',
    'global=' => 'bool',
  ),
  'amqpchannel::rollbacktransaction' => 
  array (
    0 => 'void',
  ),
  'amqpchannel::setconfirmcallback' => 
  array (
    0 => 'void',
    'ackCallback' => 'callable|null',
    'nackCallback=' => 'callable|null',
  ),
  'amqpchannel::setprefetchcount' => 
  array (
    0 => 'void',
    'count' => 'int',
  ),
  'amqpchannel::setprefetchsize' => 
  array (
    0 => 'void',
    'size' => 'int',
  ),
  'amqpchannel::setreturncallback' => 
  array (
    0 => 'void',
    'returnCallback' => 'callable|null',
  ),
  'amqpchannel::starttransaction' => 
  array (
    0 => 'void',
  ),
  'amqpchannel::waitforbasicreturn' => 
  array (
    0 => 'void',
    'timeout=' => 'float',
  ),
  'amqpchannel::waitforconfirm' => 
  array (
    0 => 'void',
    'timeout=' => 'float',
  ),
  'amqpconnection::connect' => 
  array (
    0 => 'void',
  ),
  'amqpconnection::disconnect' => 
  array (
    0 => 'void',
  ),
  'amqpconnection::getcacert' => 
  array (
    0 => 'null|string',
  ),
  'amqpconnection::getcert' => 
  array (
    0 => 'null|string',
  ),
  'amqpconnection::getheartbeatinterval' => 
  array (
    0 => 'int',
  ),
  'amqpconnection::gethost' => 
  array (
    0 => 'string',
  ),
  'amqpconnection::getkey' => 
  array (
    0 => 'null|string',
  ),
  'amqpconnection::getlogin' => 
  array (
    0 => 'string',
  ),
  'amqpconnection::getmaxchannels' => 
  array (
    0 => 'int',
  ),
  'amqpconnection::getmaxframesize' => 
  array (
    0 => 'int',
  ),
  'amqpconnection::getpassword' => 
  array (
    0 => 'string',
  ),
  'amqpconnection::getport' => 
  array (
    0 => 'int',
  ),
  'amqpconnection::getreadtimeout' => 
  array (
    0 => 'float',
  ),
  'amqpconnection::gettimeout' => 
  array (
    0 => 'float',
  ),
  'amqpconnection::getusedchannels' => 
  array (
    0 => 'int',
  ),
  'amqpconnection::getverify' => 
  array (
    0 => 'bool',
  ),
  'amqpconnection::getvhost' => 
  array (
    0 => 'string',
  ),
  'amqpconnection::getwritetimeout' => 
  array (
    0 => 'float',
  ),
  'amqpconnection::isconnected' => 
  array (
    0 => 'bool',
  ),
  'amqpconnection::ispersistent' => 
  array (
    0 => 'bool',
  ),
  'amqpconnection::pconnect' => 
  array (
    0 => 'void',
  ),
  'amqpconnection::pdisconnect' => 
  array (
    0 => 'void',
  ),
  'amqpconnection::preconnect' => 
  array (
    0 => 'void',
  ),
  'amqpconnection::reconnect' => 
  array (
    0 => 'void',
  ),
  'amqpconnection::setcacert' => 
  array (
    0 => 'void',
    'cacert' => 'null|string',
  ),
  'amqpconnection::setcert' => 
  array (
    0 => 'void',
    'cert' => 'null|string',
  ),
  'amqpconnection::sethost' => 
  array (
    0 => 'void',
    'host' => 'string',
  ),
  'amqpconnection::setkey' => 
  array (
    0 => 'void',
    'key' => 'null|string',
  ),
  'amqpconnection::setlogin' => 
  array (
    0 => 'void',
    'login' => 'string',
  ),
  'amqpconnection::setpassword' => 
  array (
    0 => 'void',
    'password' => 'string',
  ),
  'amqpconnection::setport' => 
  array (
    0 => 'void',
    'port' => 'int',
  ),
  'amqpconnection::setreadtimeout' => 
  array (
    0 => 'void',
    'timeout' => 'float',
  ),
  'amqpconnection::settimeout' => 
  array (
    0 => 'void',
    'timeout' => 'float',
  ),
  'amqpconnection::setverify' => 
  array (
    0 => 'void',
    'verify' => 'bool',
  ),
  'amqpconnection::setvhost' => 
  array (
    0 => 'void',
    'vhost' => 'string',
  ),
  'amqpconnection::setwritetimeout' => 
  array (
    0 => 'void',
    'timeout' => 'float',
  ),
  'amqpdecimal::getexponent' => 
  array (
    0 => 'int',
  ),
  'amqpdecimal::getsignificand' => 
  array (
    0 => 'int',
  ),
  'amqpenvelope::getappid' => 
  array (
    0 => 'null|string',
  ),
  'amqpenvelope::getbody' => 
  array (
    0 => 'string',
  ),
  'amqpenvelope::getclusterid' => 
  array (
    0 => 'null|string',
  ),
  'amqpenvelope::getconsumertag' => 
  array (
    0 => 'null|string',
  ),
  'amqpenvelope::getcontentencoding' => 
  array (
    0 => 'null|string',
  ),
  'amqpenvelope::getcontenttype' => 
  array (
    0 => 'null|string',
  ),
  'amqpenvelope::getcorrelationid' => 
  array (
    0 => 'null|string',
  ),
  'amqpenvelope::getdeliverymode' => 
  array (
    0 => 'int',
  ),
  'amqpenvelope::getdeliverytag' => 
  array (
    0 => 'int|null',
  ),
  'amqpenvelope::getexchangename' => 
  array (
    0 => 'null|string',
  ),
  'amqpenvelope::getexpiration' => 
  array (
    0 => 'null|string',
  ),
  'amqpenvelope::getheader' => 
  array (
    0 => 'false|string',
    'headerName' => 'string',
  ),
  'amqpenvelope::getheaders' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'amqpenvelope::getmessageid' => 
  array (
    0 => 'null|string',
  ),
  'amqpenvelope::getpriority' => 
  array (
    0 => 'int',
  ),
  'amqpenvelope::getreplyto' => 
  array (
    0 => 'null|string',
  ),
  'amqpenvelope::getroutingkey' => 
  array (
    0 => 'string',
  ),
  'amqpenvelope::gettimestamp' => 
  array (
    0 => 'int|null',
  ),
  'amqpenvelope::gettype' => 
  array (
    0 => 'null|string',
  ),
  'amqpenvelope::getuserid' => 
  array (
    0 => 'null|string',
  ),
  'amqpenvelope::hasheader' => 
  array (
    0 => 'bool',
    'headerName' => 'string',
  ),
  'amqpenvelope::isredelivery' => 
  array (
    0 => 'bool',
  ),
  'amqpexchange::bind' => 
  array (
    0 => 'void',
    'exchangeName' => 'string',
    'routingKey=' => 'null|string',
    'arguments=' => 'array<array-key, mixed>',
  ),
  'amqpexchange::declareexchange' => 
  array (
    0 => 'void',
  ),
  'amqpexchange::delete' => 
  array (
    0 => 'void',
    'exchangeName=' => 'null|string',
    'flags=' => 'int|null',
  ),
  'amqpexchange::getargument' => 
  array (
    0 => 'false|int|string',
    'argumentName' => 'string',
  ),
  'amqpexchange::getarguments' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'amqpexchange::getchannel' => 
  array (
    0 => 'AMQPChannel',
  ),
  'amqpexchange::getconnection' => 
  array (
    0 => 'AMQPConnection',
  ),
  'amqpexchange::getflags' => 
  array (
    0 => 'int',
  ),
  'amqpexchange::getname' => 
  array (
    0 => 'null|string',
  ),
  'amqpexchange::gettype' => 
  array (
    0 => 'null|string',
  ),
  'amqpexchange::hasargument' => 
  array (
    0 => 'bool',
    'argumentName' => 'string',
  ),
  'amqpexchange::publish' => 
  array (
    0 => 'void',
    'message' => 'string',
    'routingKey=' => 'null|string',
    'flags=' => 'int|null',
    'headers=' => 'array<array-key, mixed>',
  ),
  'amqpexchange::setargument' => 
  array (
    0 => 'void',
    'argumentName' => 'string',
    'argumentValue' => 'int|string',
  ),
  'amqpexchange::setarguments' => 
  array (
    0 => 'void',
    'arguments' => 'array<array-key, mixed>',
  ),
  'amqpexchange::setflags' => 
  array (
    0 => 'void',
    'flags' => 'int|null',
  ),
  'amqpexchange::setname' => 
  array (
    0 => 'void',
    'exchangeName' => 'null|string',
  ),
  'amqpexchange::settype' => 
  array (
    0 => 'void',
    'exchangeType' => 'null|string',
  ),
  'amqpexchange::unbind' => 
  array (
    0 => 'void',
    'exchangeName' => 'string',
    'routingKey=' => 'null|string',
    'arguments=' => 'array<array-key, mixed>',
  ),
  'amqpqueue::ack' => 
  array (
    0 => 'void',
    'deliveryTag' => 'int',
    'flags=' => 'int|null',
  ),
  'amqpqueue::bind' => 
  array (
    0 => 'void',
    'exchangeName' => 'string',
    'routingKey=' => 'null|string',
    'arguments=' => 'array<array-key, mixed>',
  ),
  'amqpqueue::cancel' => 
  array (
    0 => 'void',
    'consumerTag=' => 'string',
  ),
  'amqpqueue::consume' => 
  array (
    0 => 'void',
    'callback=' => 'callable|null',
    'flags=' => 'int|null',
    'consumerTag=' => 'null|string',
  ),
  'amqpqueue::declarequeue' => 
  array (
    0 => 'int',
  ),
  'amqpqueue::delete' => 
  array (
    0 => 'int',
    'flags=' => 'int|null',
  ),
  'amqpqueue::get' => 
  array (
    0 => 'AMQPEnvelope|null',
    'flags=' => 'int|null',
  ),
  'amqpqueue::getargument' => 
  array (
    0 => 'false|int|string',
    'argumentName' => 'string',
  ),
  'amqpqueue::getarguments' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'amqpqueue::getchannel' => 
  array (
    0 => 'AMQPChannel',
  ),
  'amqpqueue::getconnection' => 
  array (
    0 => 'AMQPConnection',
  ),
  'amqpqueue::getconsumertag' => 
  array (
    0 => 'null|string',
  ),
  'amqpqueue::getflags' => 
  array (
    0 => 'int',
  ),
  'amqpqueue::getname' => 
  array (
    0 => 'null|string',
  ),
  'amqpqueue::hasargument' => 
  array (
    0 => 'bool',
    'argumentName' => 'string',
  ),
  'amqpqueue::nack' => 
  array (
    0 => 'void',
    'deliveryTag' => 'int',
    'flags=' => 'int|null',
  ),
  'amqpqueue::purge' => 
  array (
    0 => 'int',
  ),
  'amqpqueue::reject' => 
  array (
    0 => 'void',
    'deliveryTag' => 'int',
    'flags=' => 'int|null',
  ),
  'amqpqueue::setargument' => 
  array (
    0 => 'void',
    'argumentName' => 'string',
    'argumentValue' => 'mixed',
  ),
  'amqpqueue::setarguments' => 
  array (
    0 => 'void',
    'arguments' => 'array<array-key, mixed>',
  ),
  'amqpqueue::setflags' => 
  array (
    0 => 'void',
    'flags' => 'int|null',
  ),
  'amqpqueue::setname' => 
  array (
    0 => 'void',
    'name' => 'string',
  ),
  'amqpqueue::unbind' => 
  array (
    0 => 'void',
    'exchangeName' => 'string',
    'routingKey=' => 'null|string',
    'arguments=' => 'array<array-key, mixed>',
  ),
  'amqptimestamp::__construct' => 
  array (
    0 => 'void',
    'timestamp' => 'float',
  ),
  'amqptimestamp::__tostring' => 
  array (
    0 => 'string',
  ),
  'amqptimestamp::gettimestamp' => 
  array (
    0 => 'float',
  ),
  'apache_child_terminate' => 
  array (
    0 => 'bool',
  ),
  'apache_get_modules' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'apache_get_version' => 
  array (
    0 => 'false|string',
  ),
  'apache_getenv' => 
  array (
    0 => 'false|string',
    'variable' => 'string',
    'walk_to_top=' => 'bool',
  ),
  'apache_lookup_uri' => 
  array (
    0 => 'object',
    'filename' => 'string',
  ),
  'apache_note' => 
  array (
    0 => 'false|string',
    'note_name' => 'string',
    'note_value=' => 'string',
  ),
  'apache_request_headers' => 
  array (
    0 => 'array<array-key, mixed>|false',
  ),
  'apache_reset_timeout' => 
  array (
    0 => 'bool',
  ),
  'apache_response_headers' => 
  array (
    0 => 'array<array-key, mixed>|false',
  ),
  'apache_setenv' => 
  array (
    0 => 'bool',
    'variable' => 'string',
    'value' => 'string',
    'walk_to_top=' => 'bool',
  ),
  'apc_add' => 
  array (
    0 => 'bool',
    'key' => 'string',
    'var' => 'mixed',
    'ttl=' => 'int',
  ),
  'apc_add\'1' => 
  array (
    0 => 'array<array-key, mixed>',
    'values' => 'array<array-key, mixed>',
    'unused=' => 'mixed',
    'ttl=' => 'int',
  ),
  'apc_bin_dump' => 
  array (
    0 => 'false|null|string',
    'files=' => 'array<array-key, mixed>',
    'user_vars=' => 'array<array-key, mixed>',
  ),
  'apc_bin_dumpfile' => 
  array (
    0 => 'false|int',
    'files' => 'array<array-key, mixed>',
    'user_vars' => 'array<array-key, mixed>',
    'filename' => 'string',
    'flags=' => 'int',
    'context=' => 'resource',
  ),
  'apc_bin_load' => 
  array (
    0 => 'bool',
    'data' => 'string',
    'flags=' => 'int',
  ),
  'apc_bin_loadfile' => 
  array (
    0 => 'bool',
    'filename' => 'string',
    'context=' => 'resource',
    'flags=' => 'int',
  ),
  'apc_cache_info' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'cache_type=' => 'string',
    'limited=' => 'bool',
  ),
  'apc_cas' => 
  array (
    0 => 'bool',
    'key' => 'string',
    'old' => 'int',
    'new' => 'int',
  ),
  'apc_clear_cache' => 
  array (
    0 => 'bool',
    'cache_type=' => 'string',
  ),
  'apc_compile_file' => 
  array (
    0 => 'bool',
    'filename' => 'string',
    'atomic=' => 'bool',
  ),
  'apc_dec' => 
  array (
    0 => 'false|int',
    'key' => 'string',
    'step=' => 'int',
    '&w_success=' => 'bool',
  ),
  'apc_define_constants' => 
  array (
    0 => 'bool',
    'key' => 'string',
    'constants' => 'array<array-key, mixed>',
    'case_sensitive=' => 'bool',
  ),
  'apc_delete' => 
  array (
    0 => 'bool',
    'key' => 'APCIterator|array<array-key, string>|string',
  ),
  'apc_delete_file' => 
  array (
    0 => 'array<array-key, string>|bool',
    'keys' => 'mixed',
  ),
  'apc_exists' => 
  array (
    0 => 'bool',
    'keys' => 'string',
  ),
  'apc_exists\'1' => 
  array (
    0 => 'array<array-key, mixed>',
    'keys' => 'array<array-key, string>',
  ),
  'apc_fetch' => 
  array (
    0 => 'false|mixed',
    'key' => 'string',
    '&w_success=' => 'bool',
  ),
  'apc_fetch\'1' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'key' => 'array<array-key, string>',
    '&w_success=' => 'bool',
  ),
  'apc_inc' => 
  array (
    0 => 'false|int',
    'key' => 'string',
    'step=' => 'int',
    '&w_success=' => 'bool',
  ),
  'apc_load_constants' => 
  array (
    0 => 'bool',
    'key' => 'string',
    'case_sensitive=' => 'bool',
  ),
  'apc_sma_info' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'limited=' => 'bool',
  ),
  'apc_store' => 
  array (
    0 => 'bool',
    'key' => 'string',
    'var' => 'mixed',
    'ttl=' => 'int',
  ),
  'apc_store\'1' => 
  array (
    0 => 'array<array-key, mixed>',
    'values' => 'array<array-key, mixed>',
    'unused=' => 'mixed',
    'ttl=' => 'int',
  ),
  'apciterator::__construct' => 
  array (
    0 => 'void',
    'cache' => 'string',
    'search=' => 'array<array-key, string>|null|string',
    'format=' => 'int',
    'chunk_size=' => 'int',
    'list=' => 'int',
  ),
  'apciterator::current' => 
  array (
    0 => 'false|mixed',
  ),
  'apciterator::gettotalcount' => 
  array (
    0 => 'false|int',
  ),
  'apciterator::gettotalhits' => 
  array (
    0 => 'false|int',
  ),
  'apciterator::gettotalsize' => 
  array (
    0 => 'false|int',
  ),
  'apciterator::key' => 
  array (
    0 => 'string',
  ),
  'apciterator::next' => 
  array (
    0 => 'void',
  ),
  'apciterator::rewind' => 
  array (
    0 => 'void',
  ),
  'apciterator::valid' => 
  array (
    0 => 'bool',
  ),
  'apcu_add' => 
  array (
    0 => 'bool',
    'key' => 'string',
    'value=' => 'mixed',
    'ttl=' => 'int',
  ),
  'apcu_add\'1' => 
  array (
    0 => 'array<string, int>',
    'values' => 'array<string, mixed>',
    'unused=' => 'mixed',
    'ttl=' => 'int',
  ),
  'apcu_cache_info' => 
  array (
    0 => 'array<string, mixed>|false',
    'limited=' => 'bool',
  ),
  'apcu_cas' => 
  array (
    0 => 'bool',
    'key' => 'string',
    'old' => 'int',
    'new' => 'int',
  ),
  'apcu_clear_cache' => 
  array (
    0 => 'bool',
  ),
  'apcu_dec' => 
  array (
    0 => 'false|int',
    'key' => 'string',
    'step=' => 'int',
    '&w_success=' => 'bool',
    'ttl=' => 'int',
  ),
  'apcu_delete' => 
  array (
    0 => 'bool',
    'key' => 'APCuIterator|string',
  ),
  'apcu_delete\'1' => 
  array (
    0 => 'list<string>',
    'key' => 'array<array-key, string>',
  ),
  'apcu_enabled' => 
  array (
    0 => 'bool',
  ),
  'apcu_entry' => 
  array (
    0 => 'mixed',
    'key' => 'string',
    'callback' => 'callable(string):mixed',
    'ttl=' => 'int',
  ),
  'apcu_exists' => 
  array (
    0 => 'bool',
    'key' => 'string',
  ),
  'apcu_exists\'1' => 
  array (
    0 => 'array<array-key, mixed>',
    'keys' => 'array<array-key, string>',
  ),
  'apcu_fetch' => 
  array (
    0 => 'false|mixed',
    'key' => 'string',
    '&w_success=' => 'bool',
  ),
  'apcu_fetch\'1' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'key' => 'array<array-key, string>',
    '&w_success=' => 'bool',
  ),
  'apcu_inc' => 
  array (
    0 => 'false|int',
    'key' => 'string',
    'step=' => 'int',
    '&w_success=' => 'bool',
    'ttl=' => 'int',
  ),
  'apcu_key_info' => 
  array (
    0 => 'array<array-key, mixed>|null',
    'key' => 'string',
  ),
  'apcu_sma_info' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'limited=' => 'bool',
  ),
  'apcu_store' => 
  array (
    0 => 'bool',
    'key' => 'string',
    'value=' => 'mixed',
    'ttl=' => 'int',
  ),
  'apcu_store\'1' => 
  array (
    0 => 'array<array-key, mixed>',
    'values' => 'array<array-key, mixed>',
    'unused=' => 'mixed',
    'ttl=' => 'int',
  ),
  'apcuiterator::__construct' => 
  array (
    0 => 'void',
    'search=' => 'array<array-key, string>|null|string',
    'format=' => 'int',
    'chunk_size=' => 'int',
    'list=' => 'int',
  ),
  'apcuiterator::gettotalcount' => 
  array (
    0 => 'int',
  ),
  'apcuiterator::gettotalhits' => 
  array (
    0 => 'int',
  ),
  'apcuiterator::gettotalsize' => 
  array (
    0 => 'int',
  ),
  'apcuiterator::key' => 
  array (
    0 => 'string',
  ),
  'apcuiterator::next' => 
  array (
    0 => 'void',
  ),
  'apcuiterator::rewind' => 
  array (
    0 => 'void',
  ),
  'apcuiterator::valid' => 
  array (
    0 => 'bool',
  ),
  'apd_breakpoint' => 
  array (
    0 => 'bool',
    'debug_level' => 'int',
  ),
  'apd_callstack' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'apd_clunk' => 
  array (
    0 => 'void',
    'warning' => 'string',
    'delimiter=' => 'string',
  ),
  'apd_continue' => 
  array (
    0 => 'bool',
    'debug_level' => 'int',
  ),
  'apd_croak' => 
  array (
    0 => 'void',
    'warning' => 'string',
    'delimiter=' => 'string',
  ),
  'apd_dump_function_table' => 
  array (
    0 => 'void',
  ),
  'apd_dump_persistent_resources' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'apd_dump_regular_resources' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'apd_echo' => 
  array (
    0 => 'bool',
    'output' => 'string',
  ),
  'apd_get_active_symbols' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'apd_set_pprof_trace' => 
  array (
    0 => 'string',
    'dump_directory=' => 'string',
    'fragment=' => 'string',
  ),
  'apd_set_session' => 
  array (
    0 => 'void',
    'debug_level' => 'int',
  ),
  'apd_set_session_trace' => 
  array (
    0 => 'void',
    'debug_level' => 'int',
    'dump_directory=' => 'string',
  ),
  'apd_set_session_trace_socket' => 
  array (
    0 => 'bool',
    'tcp_server' => 'string',
    'socket_type' => 'int',
    'port' => 'int',
    'debug_level' => 'int',
  ),
  'appenditerator::append' => 
  array (
    0 => 'void',
    'iterator' => 'Iterator',
  ),
  'appenditerator::getarrayiterator' => 
  array (
    0 => 'ArrayIterator',
  ),
  'appenditerator::getinneriterator' => 
  array (
    0 => 'Iterator|null',
  ),
  'appenditerator::getiteratorindex' => 
  array (
    0 => 'int|null',
  ),
  'appenditerator::key' => 
  array (
    0 => 'scalar',
  ),
  'appenditerator::next' => 
  array (
    0 => 'void',
  ),
  'appenditerator::rewind' => 
  array (
    0 => 'void',
  ),
  'appenditerator::valid' => 
  array (
    0 => 'bool',
  ),
  'argumentcounterror::__construct' => 
  array (
    0 => 'void',
    'message=' => 'string',
    'code=' => 'int',
    'previous=' => 'Throwable|null',
  ),
  'argumentcounterror::__tostring' => 
  array (
    0 => 'string',
  ),
  'argumentcounterror::__wakeup' => 
  array (
    0 => 'void',
  ),
  'argumentcounterror::getcode' => 
  array (
    0 => 'int',
  ),
  'argumentcounterror::getfile' => 
  array (
    0 => 'string',
  ),
  'argumentcounterror::getline' => 
  array (
    0 => 'int',
  ),
  'argumentcounterror::getmessage' => 
  array (
    0 => 'string',
  ),
  'argumentcounterror::getprevious' => 
  array (
    0 => 'Throwable|null',
  ),
  'argumentcounterror::gettrace' => 
  array (
    0 => 'list<array{args?: array<array-key, mixed>, class?: class-string, file?: string, function: string, line?: int, type?: \'->\'|\'::\'}>',
  ),
  'argumentcounterror::gettraceasstring' => 
  array (
    0 => 'string',
  ),
  'arithmeticerror::__construct' => 
  array (
    0 => 'void',
    'message=' => 'string',
    'code=' => 'int',
    'previous=' => 'Throwable|null',
  ),
  'arithmeticerror::__tostring' => 
  array (
    0 => 'string',
  ),
  'arithmeticerror::__wakeup' => 
  array (
    0 => 'void',
  ),
  'arithmeticerror::getcode' => 
  array (
    0 => 'int',
  ),
  'arithmeticerror::getfile' => 
  array (
    0 => 'string',
  ),
  'arithmeticerror::getline' => 
  array (
    0 => 'int',
  ),
  'arithmeticerror::getmessage' => 
  array (
    0 => 'string',
  ),
  'arithmeticerror::getprevious' => 
  array (
    0 => 'Throwable|null',
  ),
  'arithmeticerror::gettrace' => 
  array (
    0 => 'list<array{args?: array<array-key, mixed>, class?: class-string, file?: string, function: string, line?: int, type?: \'->\'|\'::\'}>',
  ),
  'arithmeticerror::gettraceasstring' => 
  array (
    0 => 'string',
  ),
  'array_change_key_case' => 
  array (
    0 => 'array<array-key, mixed>',
    'array' => 'array<array-key, mixed>',
    'case=' => 'int',
  ),
  'array_chunk' => 
  array (
    0 => 'list<array<array-key, array<array-key, mixed>>>',
    'array' => 'array<array-key, mixed>',
    'length' => 'int',
    'preserve_keys=' => 'bool',
  ),
  'array_column' => 
  array (
    0 => 'array<array-key, mixed>',
    'array' => 'array<array-key, mixed>',
    'column_key' => 'int|null|string',
    'index_key=' => 'int|null|string',
  ),
  'array_combine' => 
  array (
    0 => 'array<array-key, mixed>',
    'keys' => 'array<array-key, int|string>',
    'values' => 'array<array-key, mixed>',
  ),
  'array_count_values' => 
  array (
    0 => 'array<array-key, int>',
    'array' => 'array<array-key, int|string>',
  ),
  'array_diff' => 
  array (
    0 => 'array<array-key, mixed>',
    'array' => 'array<array-key, mixed>',
    '...arrays=' => 'array<array-key, mixed>',
  ),
  'array_diff_assoc' => 
  array (
    0 => 'array<array-key, mixed>',
    'array' => 'array<array-key, mixed>',
    '...arrays=' => 'array<array-key, mixed>',
  ),
  'array_diff_key' => 
  array (
    0 => 'array<array-key, mixed>',
    'array' => 'array<array-key, mixed>',
    '...arrays=' => 'array<array-key, mixed>',
  ),
  'array_diff_uassoc' => 
  array (
    0 => 'array<array-key, mixed>',
    'array' => 'array<array-key, mixed>',
    '...rest=' => 'array<array-key, mixed>',
  ),
  'array_diff_uassoc\'1' => 
  array (
    0 => 'array<array-key, mixed>',
    'array' => 'array<array-key, mixed>',
    'rest' => 'array<array-key, mixed>',
    'arr3' => 'array<array-key, mixed>',
    'arg4' => 'array<array-key, mixed>|callable(mixed, mixed):int',
    '...rest=' => 'array<array-key, mixed>|callable(mixed, mixed):int',
  ),
  'array_diff_ukey' => 
  array (
    0 => 'array<array-key, mixed>',
    'array' => 'array<array-key, mixed>',
    '...rest=' => 'array<array-key, mixed>',
  ),
  'array_diff_ukey\'1' => 
  array (
    0 => 'array<array-key, mixed>',
    'array' => 'array<array-key, mixed>',
    'rest' => 'array<array-key, mixed>',
    'arr3' => 'array<array-key, mixed>',
    'arg4' => 'array<array-key, mixed>|callable(mixed, mixed):int',
    '...rest=' => 'array<array-key, mixed>|callable(mixed, mixed):int',
  ),
  'array_fill' => 
  array (
    0 => 'array<int, mixed>',
    'start_index' => 'int',
    'count' => 'int',
    'value' => 'mixed',
  ),
  'array_fill_keys' => 
  array (
    0 => 'array<array-key, mixed>',
    'keys' => 'array<array-key, mixed>',
    'value' => 'mixed',
  ),
  'array_filter' => 
  array (
    0 => 'array<array-key, mixed>',
    'array' => 'array<array-key, mixed>',
    'callback=' => 'callable(mixed, array-key=):mixed|null',
    'mode=' => 'int',
  ),
  'array_flip' => 
  array (
    0 => 'array<array-key, int|string>',
    'array' => 'array<array-key, int|string>',
  ),
  'array_intersect' => 
  array (
    0 => 'array<array-key, mixed>',
    'array' => 'array<array-key, mixed>',
    '...arrays=' => 'array<array-key, mixed>',
  ),
  'array_intersect_assoc' => 
  array (
    0 => 'array<array-key, mixed>',
    'array' => 'array<array-key, mixed>',
    '...arrays=' => 'array<array-key, mixed>',
  ),
  'array_intersect_key' => 
  array (
    0 => 'array<array-key, mixed>',
    'array' => 'array<array-key, mixed>',
    '...arrays=' => 'array<array-key, mixed>',
  ),
  'array_intersect_uassoc' => 
  array (
    0 => 'array<array-key, mixed>',
    'array' => 'array<array-key, mixed>',
    '...rest=' => 'array<array-key, mixed>',
  ),
  'array_intersect_uassoc\'1' => 
  array (
    0 => 'array<array-key, mixed>',
    'array' => 'array<array-key, mixed>',
    'rest' => 'array<array-key, mixed>',
    'arr3' => 'array<array-key, mixed>',
    'arg4' => 'array<array-key, mixed>|callable(mixed, mixed):int',
    '...rest' => 'array<array-key, mixed>|callable(mixed, mixed):int',
  ),
  'array_intersect_ukey' => 
  array (
    0 => 'array<array-key, mixed>',
    'array' => 'array<array-key, mixed>',
    '...rest=' => 'array<array-key, mixed>',
  ),
  'array_intersect_ukey\'1' => 
  array (
    0 => 'array<array-key, mixed>',
    'array' => 'array<array-key, mixed>',
    'rest' => 'array<array-key, mixed>',
    'arr3' => 'array<array-key, mixed>',
    'arg4' => 'array<array-key, mixed>|callable(mixed, mixed):int',
    '...rest' => 'array<array-key, mixed>|callable(mixed, mixed):int',
  ),
  'array_key_exists' => 
  array (
    0 => 'bool',
    'key' => 'int|string',
    'array' => 'array<array-key, mixed>',
  ),
  'array_key_first' => 
  array (
    0 => 'int|null|string',
    'array' => 'array<array-key, mixed>',
  ),
  'array_key_last' => 
  array (
    0 => 'int|null|string',
    'array' => 'array<array-key, mixed>',
  ),
  'array_keys' => 
  array (
    0 => 'list<int|string>',
    'array' => 'array<array-key, mixed>',
    'filter_value=' => 'mixed',
    'strict=' => 'bool',
  ),
  'array_map' => 
  array (
    0 => 'array<array-key, mixed>',
    'callback' => 'callable|null',
    'array' => 'array<array-key, mixed>',
    '...arrays=' => 'array<array-key, mixed>',
  ),
  'array_merge' => 
  array (
    0 => 'array<array-key, mixed>',
    '...arrays=' => 'array<array-key, mixed>',
  ),
  'array_merge_recursive' => 
  array (
    0 => 'array<array-key, mixed>',
    '...arrays=' => 'array<array-key, mixed>',
  ),
  'array_multisort' => 
  array (
    0 => 'bool',
    '&array' => 'array<array-key, mixed>',
    '&...rest=' => 'array<array-key, mixed>|int',
  ),
  'array_pad' => 
  array (
    0 => 'array<array-key, mixed>',
    'array' => 'array<array-key, mixed>',
    'length' => 'int',
    'value' => 'mixed',
  ),
  'array_pop' => 
  array (
    0 => 'mixed',
    '&array' => 'array<array-key, mixed>',
  ),
  'array_product' => 
  array (
    0 => 'float|int',
    'array' => 'array<array-key, mixed>',
  ),
  'array_push' => 
  array (
    0 => 'int',
    '&array' => 'array<array-key, mixed>',
    '...values=' => 'mixed',
  ),
  'array_rand' => 
  array (
    0 => 'array<int, int|string>|int|string',
    'array' => 'non-empty-array<array-key, mixed>',
    'num=' => 'int',
  ),
  'array_rand\'1' => 
  array (
    0 => 'int|string',
    'array' => 'array<array-key, mixed>',
  ),
  'array_reduce' => 
  array (
    0 => 'mixed',
    'array' => 'array<array-key, mixed>',
    'callback' => 'callable(mixed, mixed):mixed',
    'initial=' => 'mixed',
  ),
  'array_replace' => 
  array (
    0 => 'array<array-key, mixed>',
    'array' => 'array<array-key, mixed>',
    '...replacements=' => 'array<array-key, mixed>',
  ),
  'array_replace_recursive' => 
  array (
    0 => 'array<array-key, mixed>',
    'array' => 'array<array-key, mixed>',
    '...replacements=' => 'array<array-key, mixed>',
  ),
  'array_reverse' => 
  array (
    0 => 'array<array-key, mixed>',
    'array' => 'array<array-key, mixed>',
    'preserve_keys=' => 'bool',
  ),
  'array_search' => 
  array (
    0 => 'false|int|string',
    'needle' => 'mixed',
    'haystack' => 'array<array-key, mixed>',
    'strict=' => 'bool',
  ),
  'array_shift' => 
  array (
    0 => 'mixed|null',
    '&array' => 'array<array-key, mixed>',
  ),
  'array_slice' => 
  array (
    0 => 'array<array-key, mixed>',
    'array' => 'array<array-key, mixed>',
    'offset' => 'int',
    'length=' => 'int|null',
    'preserve_keys=' => 'bool',
  ),
  'array_splice' => 
  array (
    0 => 'array<array-key, mixed>',
    '&array' => 'array<array-key, mixed>',
    'offset' => 'int',
    'length=' => 'int|null',
    'replacement=' => 'array<array-key, mixed>|string',
  ),
  'array_sum' => 
  array (
    0 => 'float|int',
    'array' => 'array<array-key, mixed>',
  ),
  'array_udiff' => 
  array (
    0 => 'array<array-key, mixed>',
    'array' => 'array<array-key, mixed>',
    '...rest=' => 'array<array-key, mixed>',
  ),
  'array_udiff\'1' => 
  array (
    0 => 'array<array-key, mixed>',
    'array' => 'array<array-key, mixed>',
    'rest' => 'array<array-key, mixed>',
    'arr3' => 'array<array-key, mixed>',
    'arg4' => 'array<array-key, mixed>|callable(mixed, mixed):int',
    '...rest=' => 'array<array-key, mixed>|callable(mixed, mixed):int',
  ),
  'array_udiff_assoc' => 
  array (
    0 => 'array<array-key, mixed>',
    'array' => 'array<array-key, mixed>',
    '...rest=' => 'array<array-key, mixed>',
  ),
  'array_udiff_assoc\'1' => 
  array (
    0 => 'array<array-key, mixed>',
    'array' => 'array<array-key, mixed>',
    'rest' => 'array<array-key, mixed>',
    'arr3' => 'array<array-key, mixed>',
    'arg4' => 'array<array-key, mixed>|callable(mixed, mixed):int',
    '...rest=' => 'array<array-key, mixed>|callable(mixed, mixed):int',
  ),
  'array_udiff_uassoc' => 
  array (
    0 => 'array<array-key, mixed>',
    'array' => 'array<array-key, mixed>',
    '...rest=' => 'array<array-key, mixed>',
  ),
  'array_udiff_uassoc\'1' => 
  array (
    0 => 'array<array-key, mixed>',
    'array' => 'array<array-key, mixed>',
    'rest' => 'array<array-key, mixed>',
    'arr3' => 'array<array-key, mixed>',
    'arg4' => 'array<array-key, mixed>|callable(mixed, mixed):int',
    'arg5' => 'array<array-key, mixed>|callable(mixed, mixed):int',
    '...rest=' => 'array<array-key, mixed>|callable(mixed, mixed):int',
  ),
  'array_uintersect' => 
  array (
    0 => 'array<array-key, mixed>',
    'array' => 'array<array-key, mixed>',
    '...rest=' => 'array<array-key, mixed>',
  ),
  'array_uintersect\'1' => 
  array (
    0 => 'array<array-key, mixed>',
    'array' => 'array<array-key, mixed>',
    'rest' => 'array<array-key, mixed>',
    'arr3' => 'array<array-key, mixed>',
    'arg4' => 'array<array-key, mixed>|callable(mixed, mixed):int',
    '...rest=' => 'array<array-key, mixed>|callable(mixed, mixed):int',
  ),
  'array_uintersect_assoc' => 
  array (
    0 => 'array<array-key, mixed>',
    'array' => 'array<array-key, mixed>',
    '...rest=' => 'array<array-key, mixed>',
  ),
  'array_uintersect_assoc\'1' => 
  array (
    0 => 'array<array-key, mixed>',
    'array' => 'array<array-key, mixed>',
    'rest' => 'array<array-key, mixed>',
    'arr3' => 'array<array-key, mixed>',
    'arg4' => 'array<array-key, mixed>|callable',
    '...rest=' => 'array<array-key, mixed>|callable(mixed, mixed):int',
  ),
  'array_uintersect_uassoc' => 
  array (
    0 => 'array<array-key, mixed>',
    'array' => 'array<array-key, mixed>',
    '...rest=' => 'array<array-key, mixed>',
  ),
  'array_uintersect_uassoc\'1' => 
  array (
    0 => 'array<array-key, mixed>',
    'array' => 'array<array-key, mixed>',
    'rest' => 'array<array-key, mixed>',
    'arr3' => 'array<array-key, mixed>',
    'arg4' => 'array<array-key, mixed>|callable(mixed, mixed):int',
    'arg5' => 'array<array-key, mixed>|callable(mixed, mixed):int',
    '...rest=' => 'array<array-key, mixed>|callable(mixed, mixed):int',
  ),
  'array_unique' => 
  array (
    0 => 'array<array-key, mixed>',
    'array' => 'array<array-key, mixed>',
    'flags=' => 'int',
  ),
  'array_unshift' => 
  array (
    0 => 'int',
    '&array' => 'array<array-key, mixed>',
    '...values=' => 'mixed',
  ),
  'array_values' => 
  array (
    0 => 'list<mixed>',
    'array' => 'array<array-key, mixed>',
  ),
  'array_walk' => 
  array (
    0 => 'true',
    '&array' => 'array<array-key, mixed>',
    'callback' => 'callable',
    'arg=' => 'mixed',
  ),
  'array_walk\'1' => 
  array (
    0 => 'bool',
    '&rw_array' => 'object',
    'callback' => 'callable',
    'arg=' => 'mixed',
  ),
  'array_walk_recursive' => 
  array (
    0 => 'true',
    '&array' => 'array<array-key, mixed>',
    'callback' => 'callable',
    'arg=' => 'mixed',
  ),
  'array_walk_recursive\'1' => 
  array (
    0 => 'bool',
    '&rw_array' => 'object',
    'callback' => 'callable',
    'arg=' => 'mixed',
  ),
  'arrayaccess::offsetexists' => 
  array (
    0 => 'bool',
    'offset' => 'int|string',
  ),
  'arrayaccess::offsetget' => 
  array (
    0 => 'mixed',
    'offset' => 'int|string',
  ),
  'arrayaccess::offsetset' => 
  array (
    0 => 'void',
    'offset' => 'int|null|string',
    'value' => 'mixed',
  ),
  'arrayaccess::offsetunset' => 
  array (
    0 => 'void',
    'offset' => 'int|string',
  ),
  'arrayiterator::__construct' => 
  array (
    0 => 'void',
    'array=' => 'array<array-key, mixed>|object',
    'flags=' => 'int',
  ),
  'arrayiterator::append' => 
  array (
    0 => 'void',
    'value' => 'mixed',
  ),
  'arrayiterator::asort' => 
  array (
    0 => 'true',
    'flags=' => 'int',
  ),
  'arrayiterator::count' => 
  array (
    0 => 'int',
  ),
  'arrayiterator::getarraycopy' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'arrayiterator::getflags' => 
  array (
    0 => 'int',
  ),
  'arrayiterator::key' => 
  array (
    0 => 'int|null|string',
  ),
  'arrayiterator::ksort' => 
  array (
    0 => 'true',
    'flags=' => 'int',
  ),
  'arrayiterator::natcasesort' => 
  array (
    0 => 'true',
  ),
  'arrayiterator::natsort' => 
  array (
    0 => 'true',
  ),
  'arrayiterator::next' => 
  array (
    0 => 'void',
  ),
  'arrayiterator::offsetexists' => 
  array (
    0 => 'bool',
    'key' => 'int|string',
  ),
  'arrayiterator::offsetget' => 
  array (
    0 => 'mixed',
    'key' => 'int|string',
  ),
  'arrayiterator::offsetset' => 
  array (
    0 => 'void',
    'key' => 'int|null|string',
    'value' => 'mixed',
  ),
  'arrayiterator::offsetunset' => 
  array (
    0 => 'void',
    'key' => 'int|string',
  ),
  'arrayiterator::rewind' => 
  array (
    0 => 'void',
  ),
  'arrayiterator::seek' => 
  array (
    0 => 'void',
    'offset' => 'int',
  ),
  'arrayiterator::serialize' => 
  array (
    0 => 'string',
  ),
  'arrayiterator::setflags' => 
  array (
    0 => 'void',
    'flags' => 'int',
  ),
  'arrayiterator::uasort' => 
  array (
    0 => 'true',
    'callback' => 'callable(mixed, mixed):int',
  ),
  'arrayiterator::uksort' => 
  array (
    0 => 'true',
    'callback' => 'callable(mixed, mixed):int',
  ),
  'arrayiterator::unserialize' => 
  array (
    0 => 'void',
    'data' => 'string',
  ),
  'arrayiterator::valid' => 
  array (
    0 => 'bool',
  ),
  'arrayobject::__construct' => 
  array (
    0 => 'void',
    'array=' => 'array<array-key, mixed>|object',
    'flags=' => 'int',
    'iteratorClass=' => 'class-string',
  ),
  'arrayobject::append' => 
  array (
    0 => 'void',
    'value' => 'mixed',
  ),
  'arrayobject::asort' => 
  array (
    0 => 'true',
    'flags=' => 'int',
  ),
  'arrayobject::count' => 
  array (
    0 => 'int',
  ),
  'arrayobject::exchangearray' => 
  array (
    0 => 'array<array-key, mixed>',
    'array' => 'array<array-key, mixed>|object',
  ),
  'arrayobject::getarraycopy' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'arrayobject::getflags' => 
  array (
    0 => 'int',
  ),
  'arrayobject::getiterator' => 
  array (
    0 => 'ArrayIterator',
  ),
  'arrayobject::getiteratorclass' => 
  array (
    0 => 'string',
  ),
  'arrayobject::ksort' => 
  array (
    0 => 'true',
    'flags=' => 'int',
  ),
  'arrayobject::natcasesort' => 
  array (
    0 => 'true',
  ),
  'arrayobject::natsort' => 
  array (
    0 => 'true',
  ),
  'arrayobject::offsetexists' => 
  array (
    0 => 'bool',
    'key' => 'int|string',
  ),
  'arrayobject::offsetget' => 
  array (
    0 => 'mixed|null',
    'key' => 'int|string',
  ),
  'arrayobject::offsetset' => 
  array (
    0 => 'void',
    'key' => 'int|null|string',
    'value' => 'mixed',
  ),
  'arrayobject::offsetunset' => 
  array (
    0 => 'void',
    'key' => 'int|string',
  ),
  'arrayobject::serialize' => 
  array (
    0 => 'string',
  ),
  'arrayobject::setflags' => 
  array (
    0 => 'void',
    'flags' => 'int',
  ),
  'arrayobject::setiteratorclass' => 
  array (
    0 => 'void',
    'iteratorClass' => 'class-string',
  ),
  'arrayobject::uasort' => 
  array (
    0 => 'true',
    'callback' => 'callable(mixed, mixed):int',
  ),
  'arrayobject::uksort' => 
  array (
    0 => 'true',
    'callback' => 'callable(mixed, mixed):int',
  ),
  'arrayobject::unserialize' => 
  array (
    0 => 'void',
    'data' => 'string',
  ),
  'arsort' => 
  array (
    0 => 'true',
    '&array' => 'array<array-key, mixed>',
    'flags=' => 'int',
  ),
  'asin' => 
  array (
    0 => 'float',
    'num' => 'float',
  ),
  'asinh' => 
  array (
    0 => 'float',
    'num' => 'float',
  ),
  'asort' => 
  array (
    0 => 'true',
    '&array' => 'array<array-key, mixed>',
    'flags=' => 'int',
  ),
  'assert' => 
  array (
    0 => 'bool',
    'assertion' => 'bool|int|string',
    'description=' => 'Throwable|null|string',
  ),
  'assert_options' => 
  array (
    0 => 'false|mixed',
    'option' => 'int',
    'value=' => 'mixed',
  ),
  'ast\\get_kind_name' => 
  array (
    0 => 'string',
    'kind' => 'int',
  ),
  'ast\\get_metadata' => 
  array (
    0 => 'array<int, ast\\Metadata>',
  ),
  'ast\\get_supported_versions' => 
  array (
    0 => 'array<int, int>',
    'exclude_deprecated=' => 'bool',
  ),
  'ast\\kind_uses_flags' => 
  array (
    0 => 'bool',
    'kind' => 'int',
  ),
  'ast\\node::__construct' => 
  array (
    0 => 'void',
    'kind=' => 'int',
    'flags=' => 'int',
    'children=' => 'array<array-key, ast\\Node|ast\\Node\\Decl|null|scalar>',
    'start_line=' => 'int',
  ),
  'ast\\parse_code' => 
  array (
    0 => 'ast\\Node',
    'code' => 'string',
    'version' => 'int',
    'filename=' => 'string',
  ),
  'ast\\parse_file' => 
  array (
    0 => 'ast\\Node',
    'filename' => 'string',
    'version' => 'int',
  ),
  'atan' => 
  array (
    0 => 'float',
    'num' => 'float',
  ),
  'atan2' => 
  array (
    0 => 'float',
    'y' => 'float',
    'x' => 'float',
  ),
  'atanh' => 
  array (
    0 => 'float',
    'num' => 'float',
  ),
  'badfunctioncallexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'string',
    'code=' => 'int',
    'previous=' => 'Throwable|null',
  ),
  'badfunctioncallexception::__tostring' => 
  array (
    0 => 'string',
  ),
  'badfunctioncallexception::getcode' => 
  array (
    0 => 'int',
  ),
  'badfunctioncallexception::getfile' => 
  array (
    0 => 'string',
  ),
  'badfunctioncallexception::getline' => 
  array (
    0 => 'int',
  ),
  'badfunctioncallexception::getmessage' => 
  array (
    0 => 'string',
  ),
  'badfunctioncallexception::getprevious' => 
  array (
    0 => 'Throwable|null',
  ),
  'badfunctioncallexception::gettrace' => 
  array (
    0 => 'list<array{args?: array<array-key, mixed>, class?: class-string, file?: string, function: string, line?: int, type?: \'->\'|\'::\'}>',
  ),
  'badfunctioncallexception::gettraceasstring' => 
  array (
    0 => 'string',
  ),
  'badmethodcallexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'string',
    'code=' => 'int',
    'previous=' => 'Throwable|null',
  ),
  'badmethodcallexception::__tostring' => 
  array (
    0 => 'string',
  ),
  'badmethodcallexception::getcode' => 
  array (
    0 => 'int',
  ),
  'badmethodcallexception::getfile' => 
  array (
    0 => 'string',
  ),
  'badmethodcallexception::getline' => 
  array (
    0 => 'int',
  ),
  'badmethodcallexception::getmessage' => 
  array (
    0 => 'string',
  ),
  'badmethodcallexception::getprevious' => 
  array (
    0 => 'Throwable|null',
  ),
  'badmethodcallexception::gettrace' => 
  array (
    0 => 'list<array{args?: array<array-key, mixed>, class?: class-string, file?: string, function: string, line?: int, type?: \'->\'|\'::\'}>',
  ),
  'badmethodcallexception::gettraceasstring' => 
  array (
    0 => 'string',
  ),
  'base64_decode' => 
  array (
    0 => 'string',
    'string' => 'string',
    'strict=' => 'false',
  ),
  'base64_decode\'1' => 
  array (
    0 => 'false|string',
    'string' => 'string',
    'strict=' => 'true',
  ),
  'base64_encode' => 
  array (
    0 => 'string',
    'string' => 'string',
  ),
  'base_convert' => 
  array (
    0 => 'string',
    'num' => 'string',
    'from_base' => 'int',
    'to_base' => 'int',
  ),
  'basename' => 
  array (
    0 => 'string',
    'path' => 'string',
    'suffix=' => 'string',
  ),
  'bbcode_add_element' => 
  array (
    0 => 'bool',
    'bbcode_container' => 'resource',
    'tag_name' => 'string',
    'tag_rules' => 'array<array-key, mixed>',
  ),
  'bbcode_add_smiley' => 
  array (
    0 => 'bool',
    'bbcode_container' => 'resource',
    'smiley' => 'string',
    'replace_by' => 'string',
  ),
  'bbcode_create' => 
  array (
    0 => 'resource',
    'bbcode_initial_tags=' => 'array<array-key, mixed>',
  ),
  'bbcode_destroy' => 
  array (
    0 => 'bool',
    'bbcode_container' => 'resource',
  ),
  'bbcode_parse' => 
  array (
    0 => 'string',
    'bbcode_container' => 'resource',
    'to_parse' => 'string',
  ),
  'bbcode_set_arg_parser' => 
  array (
    0 => 'bool',
    'bbcode_container' => 'resource',
    'bbcode_arg_parser' => 'resource',
  ),
  'bbcode_set_flags' => 
  array (
    0 => 'bool',
    'bbcode_container' => 'resource',
    'flags' => 'int',
    'mode=' => 'int',
  ),
  'bcadd' => 
  array (
    0 => 'numeric-string',
    'num1' => 'numeric-string',
    'num2' => 'numeric-string',
    'scale=' => 'int|null',
  ),
  'bccomp' => 
  array (
    0 => 'int',
    'num1' => 'numeric-string',
    'num2' => 'numeric-string',
    'scale=' => 'int|null',
  ),
  'bcdiv' => 
  array (
    0 => 'numeric-string',
    'num1' => 'numeric-string',
    'num2' => 'numeric-string',
    'scale=' => 'int|null',
  ),
  'bcmod' => 
  array (
    0 => 'numeric-string',
    'num1' => 'numeric-string',
    'num2' => 'numeric-string',
    'scale=' => 'int|null',
  ),
  'bcmul' => 
  array (
    0 => 'numeric-string',
    'num1' => 'numeric-string',
    'num2' => 'numeric-string',
    'scale=' => 'int|null',
  ),
  'bcompiler_load' => 
  array (
    0 => 'bool',
    'filename' => 'string',
  ),
  'bcompiler_load_exe' => 
  array (
    0 => 'bool',
    'filename' => 'string',
  ),
  'bcompiler_parse_class' => 
  array (
    0 => 'bool',
    'class' => 'string',
    'callback' => 'string',
  ),
  'bcompiler_read' => 
  array (
    0 => 'bool',
    'filehandle' => 'resource',
  ),
  'bcompiler_write_class' => 
  array (
    0 => 'bool',
    'filehandle' => 'resource',
    'classname' => 'string',
    'extends=' => 'string',
  ),
  'bcompiler_write_constant' => 
  array (
    0 => 'bool',
    'filehandle' => 'resource',
    'constantname' => 'string',
  ),
  'bcompiler_write_exe_footer' => 
  array (
    0 => 'bool',
    'filehandle' => 'resource',
    'startpos' => 'int',
  ),
  'bcompiler_write_file' => 
  array (
    0 => 'bool',
    'filehandle' => 'resource',
    'filename' => 'string',
  ),
  'bcompiler_write_footer' => 
  array (
    0 => 'bool',
    'filehandle' => 'resource',
  ),
  'bcompiler_write_function' => 
  array (
    0 => 'bool',
    'filehandle' => 'resource',
    'functionname' => 'string',
  ),
  'bcompiler_write_functions_from_file' => 
  array (
    0 => 'bool',
    'filehandle' => 'resource',
    'filename' => 'string',
  ),
  'bcompiler_write_header' => 
  array (
    0 => 'bool',
    'filehandle' => 'resource',
    'write_ver=' => 'string',
  ),
  'bcompiler_write_included_filename' => 
  array (
    0 => 'bool',
    'filehandle' => 'resource',
    'filename' => 'string',
  ),
  'bcpow' => 
  array (
    0 => 'numeric-string',
    'num' => 'numeric-string',
    'exponent' => 'numeric-string',
    'scale=' => 'int|null',
  ),
  'bcpowmod' => 
  array (
    0 => 'numeric-string',
    'num' => 'numeric-string',
    'exponent' => 'numeric-string',
    'modulus' => 'numeric-string',
    'scale=' => 'int|null',
  ),
  'bcscale' => 
  array (
    0 => 'int',
    'scale=' => 'int|null',
  ),
  'bcsqrt' => 
  array (
    0 => 'numeric-string',
    'num' => 'numeric-string',
    'scale=' => 'int|null',
  ),
  'bcsub' => 
  array (
    0 => 'numeric-string',
    'num1' => 'numeric-string',
    'num2' => 'numeric-string',
    'scale=' => 'int|null',
  ),
  'bin2hex' => 
  array (
    0 => 'string',
    'string' => 'string',
  ),
  'bind_textdomain_codeset' => 
  array (
    0 => 'string',
    'domain' => 'string',
    'codeset' => 'null|string',
  ),
  'bindec' => 
  array (
    0 => 'float|int',
    'binary_string' => 'string',
  ),
  'bindtextdomain' => 
  array (
    0 => 'string',
    'domain' => 'string',
    'directory' => 'null|string',
  ),
  'birdstep_autocommit' => 
  array (
    0 => 'bool',
    'index' => 'int',
  ),
  'birdstep_close' => 
  array (
    0 => 'bool',
    'id' => 'int',
  ),
  'birdstep_commit' => 
  array (
    0 => 'bool',
    'index' => 'int',
  ),
  'birdstep_connect' => 
  array (
    0 => 'int',
    'server' => 'string',
    'user' => 'string',
    'pass' => 'string',
  ),
  'birdstep_exec' => 
  array (
    0 => 'int',
    'index' => 'int',
    'exec_str' => 'string',
  ),
  'birdstep_fetch' => 
  array (
    0 => 'bool',
    'index' => 'int',
  ),
  'birdstep_fieldname' => 
  array (
    0 => 'string',
    'index' => 'int',
    'col' => 'int',
  ),
  'birdstep_fieldnum' => 
  array (
    0 => 'int',
    'index' => 'int',
  ),
  'birdstep_freeresult' => 
  array (
    0 => 'bool',
    'index' => 'int',
  ),
  'birdstep_off_autocommit' => 
  array (
    0 => 'bool',
    'index' => 'int',
  ),
  'birdstep_result' => 
  array (
    0 => 'mixed',
    'index' => 'int',
    'col' => 'mixed',
  ),
  'birdstep_rollback' => 
  array (
    0 => 'bool',
    'index' => 'int',
  ),
  'blenc_encrypt' => 
  array (
    0 => 'string',
    'plaintext' => 'string',
    'encodedfile' => 'string',
    'encryption_key=' => 'string',
  ),
  'boolval' => 
  array (
    0 => 'bool',
    'value' => 'mixed',
  ),
  'bson_decode' => 
  array (
    0 => 'array<array-key, mixed>',
    'bson' => 'string',
  ),
  'bson_encode' => 
  array (
    0 => 'string',
    'anything' => 'mixed',
  ),
  'bzclose' => 
  array (
    0 => 'bool',
    'bz' => 'resource',
  ),
  'bzcompress' => 
  array (
    0 => 'int|string',
    'data' => 'string',
    'block_size=' => 'int',
    'work_factor=' => 'int',
  ),
  'bzdecompress' => 
  array (
    0 => 'false|int|string',
    'data' => 'string',
    'use_less_memory=' => 'bool',
  ),
  'bzerrno' => 
  array (
    0 => 'int',
    'bz' => 'resource',
  ),
  'bzerror' => 
  array (
    0 => 'array<array-key, mixed>',
    'bz' => 'resource',
  ),
  'bzerrstr' => 
  array (
    0 => 'string',
    'bz' => 'resource',
  ),
  'bzflush' => 
  array (
    0 => 'bool',
    'bz' => 'resource',
  ),
  'bzopen' => 
  array (
    0 => 'false|resource',
    'file' => 'resource|string',
    'mode' => 'string',
  ),
  'bzread' => 
  array (
    0 => 'false|string',
    'bz' => 'resource',
    'length=' => 'int',
  ),
  'bzwrite' => 
  array (
    0 => 'false|int',
    'bz' => 'resource',
    'data' => 'string',
    'length=' => 'int|null',
  ),
  'cachingiterator::__tostring' => 
  array (
    0 => 'string',
  ),
  'cachingiterator::count' => 
  array (
    0 => 'int',
  ),
  'cachingiterator::getcache' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'cachingiterator::getflags' => 
  array (
    0 => 'int',
  ),
  'cachingiterator::getinneriterator' => 
  array (
    0 => 'Iterator|null',
  ),
  'cachingiterator::hasnext' => 
  array (
    0 => 'bool',
  ),
  'cachingiterator::key' => 
  array (
    0 => 'scalar',
  ),
  'cachingiterator::next' => 
  array (
    0 => 'void',
  ),
  'cachingiterator::offsetexists' => 
  array (
    0 => 'bool',
    'key' => 'string',
  ),
  'cachingiterator::offsetget' => 
  array (
    0 => 'mixed',
    'key' => 'string',
  ),
  'cachingiterator::offsetset' => 
  array (
    0 => 'void',
    'key' => 'string',
    'value' => 'mixed',
  ),
  'cachingiterator::offsetunset' => 
  array (
    0 => 'void',
    'key' => 'string',
  ),
  'cachingiterator::rewind' => 
  array (
    0 => 'void',
  ),
  'cachingiterator::setflags' => 
  array (
    0 => 'void',
    'flags' => 'int',
  ),
  'cachingiterator::valid' => 
  array (
    0 => 'bool',
  ),
  'cal_days_in_month' => 
  array (
    0 => 'int',
    'calendar' => 'int',
    'month' => 'int',
    'year' => 'int',
  ),
  'cal_from_jd' => 
  array (
    0 => 'array{abbrevdayname: string, abbrevmonth: string, date: string, day: int, dayname: string, dow: int, month: int, monthname: string, year: int}',
    'julian_day' => 'int',
    'calendar' => 'int',
  ),
  'cal_info' => 
  array (
    0 => 'array<array-key, mixed>',
    'calendar=' => 'int',
  ),
  'cal_to_jd' => 
  array (
    0 => 'int',
    'calendar' => 'int',
    'month' => 'int',
    'day' => 'int',
    'year' => 'int',
  ),
  'calcul_hmac' => 
  array (
    0 => 'string',
    'clent' => 'string',
    'siretcode' => 'string',
    'price' => 'string',
    'reference' => 'string',
    'validity' => 'string',
    'taxation' => 'string',
    'devise' => 'string',
    'language' => 'string',
  ),
  'calculhmac' => 
  array (
    0 => 'string',
    'clent' => 'string',
    'data' => 'string',
  ),
  'call_user_func' => 
  array (
    0 => 'false|mixed',
    'callback' => 'callable',
    '...args=' => 'mixed',
  ),
  'call_user_func_array' => 
  array (
    0 => 'false|mixed',
    'callback' => 'callable',
    'args' => 'list<mixed>',
  ),
  'call_user_method' => 
  array (
    0 => 'mixed',
    'method_name' => 'string',
    'object' => 'object',
    'parameter=' => 'mixed',
    '...args=' => 'mixed',
  ),
  'call_user_method_array' => 
  array (
    0 => 'mixed',
    'method_name' => 'string',
    'object' => 'object',
    'params' => 'list<mixed>',
  ),
  'callbackfilteriterator::__construct' => 
  array (
    0 => 'void',
    'iterator' => 'Iterator',
    'callback' => 'callable(mixed, mixed=, mixed=):bool',
  ),
  'callbackfilteriterator::accept' => 
  array (
    0 => 'bool',
  ),
  'callbackfilteriterator::getinneriterator' => 
  array (
    0 => 'Iterator|null',
  ),
  'callbackfilteriterator::next' => 
  array (
    0 => 'void',
  ),
  'callbackfilteriterator::rewind' => 
  array (
    0 => 'void',
  ),
  'callbackfilteriterator::valid' => 
  array (
    0 => 'bool',
  ),
  'ceil' => 
  array (
    0 => 'float',
    'num' => 'float|int',
  ),
  'chdb::__construct' => 
  array (
    0 => 'void',
    'pathname' => 'string',
  ),
  'chdb::get' => 
  array (
    0 => 'string',
    'key' => 'string',
  ),
  'chdb_create' => 
  array (
    0 => 'bool',
    'pathname' => 'string',
    'data' => 'array<array-key, mixed>',
  ),
  'chdir' => 
  array (
    0 => 'bool',
    'directory' => 'string',
  ),
  'checkdate' => 
  array (
    0 => 'bool',
    'month' => 'int',
    'day' => 'int',
    'year' => 'int',
  ),
  'checkdnsrr' => 
  array (
    0 => 'bool',
    'hostname' => 'string',
    'type=' => 'string',
  ),
  'chgrp' => 
  array (
    0 => 'bool',
    'filename' => 'string',
    'group' => 'int|string',
  ),
  'chmod' => 
  array (
    0 => 'bool',
    'filename' => 'string',
    'permissions' => 'int',
  ),
  'chop' => 
  array (
    0 => 'string',
    'string' => 'string',
    'characters=' => 'string',
  ),
  'chown' => 
  array (
    0 => 'bool',
    'filename' => 'string',
    'user' => 'int|string',
  ),
  'chr' => 
  array (
    0 => 'non-empty-string',
    'codepoint' => 'int',
  ),
  'chroot' => 
  array (
    0 => 'bool',
    'directory' => 'string',
  ),
  'chunk_split' => 
  array (
    0 => 'string',
    'string' => 'string',
    'length=' => 'int',
    'separator=' => 'string',
  ),
  'class_alias' => 
  array (
    0 => 'bool',
    'class' => 'string',
    'alias' => 'string',
    'autoload=' => 'bool',
  ),
  'class_exists' => 
  array (
    0 => 'bool',
    'class' => 'string',
    'autoload=' => 'bool',
  ),
  'class_implements' => 
  array (
    0 => 'array<interface-string, interface-string>|false',
    'object_or_class' => 'object|string',
    'autoload=' => 'bool',
  ),
  'class_parents' => 
  array (
    0 => 'array<class-string, class-string>|false',
    'object_or_class' => 'object|string',
    'autoload=' => 'bool',
  ),
  'class_uses' => 
  array (
    0 => 'array<trait-string, trait-string>|false',
    'object_or_class' => 'object|string',
    'autoload=' => 'bool',
  ),
  'classkit_import' => 
  array (
    0 => 'array<array-key, mixed>',
    'filename' => 'string',
  ),
  'classkit_method_add' => 
  array (
    0 => 'bool',
    'classname' => 'string',
    'methodname' => 'string',
    'args' => 'string',
    'code' => 'string',
    'flags=' => 'int',
  ),
  'classkit_method_copy' => 
  array (
    0 => 'bool',
    'dclass' => 'string',
    'dmethod' => 'string',
    'sclass' => 'string',
    'smethod=' => 'string',
  ),
  'classkit_method_redefine' => 
  array (
    0 => 'bool',
    'classname' => 'string',
    'methodname' => 'string',
    'args' => 'string',
    'code' => 'string',
    'flags=' => 'int',
  ),
  'classkit_method_remove' => 
  array (
    0 => 'bool',
    'classname' => 'string',
    'methodname' => 'string',
  ),
  'classkit_method_rename' => 
  array (
    0 => 'bool',
    'classname' => 'string',
    'methodname' => 'string',
    'newname' => 'string',
  ),
  'classobj::__construct' => 
  array (
    0 => 'void',
    'layer' => 'layerObj',
    'class' => 'classObj',
  ),
  'classobj::addlabel' => 
  array (
    0 => 'int',
    'label' => 'labelObj',
  ),
  'classobj::converttostring' => 
  array (
    0 => 'string',
  ),
  'classobj::createlegendicon' => 
  array (
    0 => 'imageObj',
    'width' => 'int',
    'height' => 'int',
  ),
  'classobj::deletestyle' => 
  array (
    0 => 'int',
    'index' => 'int',
  ),
  'classobj::drawlegendicon' => 
  array (
    0 => 'int',
    'width' => 'int',
    'height' => 'int',
    'im' => 'imageObj',
    'dstX' => 'int',
    'dstY' => 'int',
  ),
  'classobj::free' => 
  array (
    0 => 'void',
  ),
  'classobj::getexpressionstring' => 
  array (
    0 => 'string',
  ),
  'classobj::getlabel' => 
  array (
    0 => 'labelObj',
    'index' => 'int',
  ),
  'classobj::getmetadata' => 
  array (
    0 => 'int',
    'name' => 'string',
  ),
  'classobj::getstyle' => 
  array (
    0 => 'styleObj',
    'index' => 'int',
  ),
  'classobj::gettextstring' => 
  array (
    0 => 'string',
  ),
  'classobj::movestyledown' => 
  array (
    0 => 'int',
    'index' => 'int',
  ),
  'classobj::movestyleup' => 
  array (
    0 => 'int',
    'index' => 'int',
  ),
  'classobj::ms_newclassobj' => 
  array (
    0 => 'classObj',
    'layer' => 'layerObj',
    'class' => 'classObj',
  ),
  'classobj::removelabel' => 
  array (
    0 => 'labelObj',
    'index' => 'int',
  ),
  'classobj::removemetadata' => 
  array (
    0 => 'int',
    'name' => 'string',
  ),
  'classobj::set' => 
  array (
    0 => 'int',
    'property_name' => 'string',
    'new_value' => 'mixed',
  ),
  'classobj::setexpression' => 
  array (
    0 => 'int',
    'expression' => 'string',
  ),
  'classobj::setmetadata' => 
  array (
    0 => 'int',
    'name' => 'string',
    'value' => 'string',
  ),
  'classobj::settext' => 
  array (
    0 => 'int',
    'text' => 'string',
  ),
  'classobj::updatefromstring' => 
  array (
    0 => 'int',
    'snippet' => 'string',
  ),
  'clearstatcache' => 
  array (
    0 => 'void',
    'clear_realpath_cache=' => 'bool',
    'filename=' => 'string',
  ),
  'cli_get_process_title' => 
  array (
    0 => 'null|string',
  ),
  'cli_set_process_title' => 
  array (
    0 => 'bool',
    'title' => 'string',
  ),
  'closedgeneratorexception::__tostring' => 
  array (
    0 => 'string',
  ),
  'closedgeneratorexception::getcode' => 
  array (
    0 => 'int',
  ),
  'closedgeneratorexception::getfile' => 
  array (
    0 => 'string',
  ),
  'closedgeneratorexception::getline' => 
  array (
    0 => 'int',
  ),
  'closedgeneratorexception::getmessage' => 
  array (
    0 => 'string',
  ),
  'closedgeneratorexception::getprevious' => 
  array (
    0 => 'Throwable|null',
  ),
  'closedgeneratorexception::gettrace' => 
  array (
    0 => 'list<array{args?: array<array-key, mixed>, class?: class-string, file?: string, function: string, line?: int, type?: \'->\'|\'::\'}>',
  ),
  'closedgeneratorexception::gettraceasstring' => 
  array (
    0 => 'string',
  ),
  'closedir' => 
  array (
    0 => 'void',
    'dir_handle=' => 'resource',
  ),
  'closelog' => 
  array (
    0 => 'true',
  ),
  'closure::bind' => 
  array (
    0 => 'Closure|null',
    'closure' => 'Closure',
    'newThis' => 'null|object',
    'newScope=' => 'null|object|string',
  ),
  'closure::bindto' => 
  array (
    0 => 'Closure|null',
    'newThis' => 'null|object',
    'newScope=' => 'null|object|string',
  ),
  'closure::call' => 
  array (
    0 => 'mixed',
    'newThis' => 'object',
    '...args=' => 'mixed',
  ),
  'closure::fromcallable' => 
  array (
    0 => 'Closure',
    'callback' => 'callable',
  ),
  'clusterobj::converttostring' => 
  array (
    0 => 'string',
  ),
  'clusterobj::getfilterstring' => 
  array (
    0 => 'string',
  ),
  'clusterobj::getgroupstring' => 
  array (
    0 => 'string',
  ),
  'clusterobj::setfilter' => 
  array (
    0 => 'int',
    'expression' => 'string',
  ),
  'clusterobj::setgroup' => 
  array (
    0 => 'int',
    'expression' => 'string',
  ),
  'collator::__construct' => 
  array (
    0 => 'void',
    'locale' => 'string',
  ),
  'collator::asort' => 
  array (
    0 => 'bool',
    '&array' => 'array<array-key, mixed>',
    'flags=' => 'int',
  ),
  'collator::compare' => 
  array (
    0 => 'false|int',
    'string1' => 'string',
    'string2' => 'string',
  ),
  'collator::create' => 
  array (
    0 => 'Collator|null',
    'locale' => 'string',
  ),
  'collator::getattribute' => 
  array (
    0 => 'false|int',
    'attribute' => 'int',
  ),
  'collator::geterrorcode' => 
  array (
    0 => 'int',
  ),
  'collator::geterrormessage' => 
  array (
    0 => 'string',
  ),
  'collator::getlocale' => 
  array (
    0 => 'string',
    'type' => 'int',
  ),
  'collator::getsortkey' => 
  array (
    0 => 'false|string',
    'string' => 'string',
  ),
  'collator::getstrength' => 
  array (
    0 => 'int',
  ),
  'collator::setattribute' => 
  array (
    0 => 'bool',
    'attribute' => 'int',
    'value' => 'int',
  ),
  'collator::setstrength' => 
  array (
    0 => 'true',
    'strength' => 'int',
  ),
  'collator::sort' => 
  array (
    0 => 'bool',
    '&array' => 'array<array-key, mixed>',
    'flags=' => 'int',
  ),
  'collator::sortwithsortkeys' => 
  array (
    0 => 'bool',
    '&array' => 'array<array-key, mixed>',
  ),
  'collator_asort' => 
  array (
    0 => 'bool',
    'object' => 'collator',
    '&array' => 'array<array-key, mixed>',
    'flags=' => 'int',
  ),
  'collator_compare' => 
  array (
    0 => 'int',
    'object' => 'collator',
    'string1' => 'string',
    'string2' => 'string',
  ),
  'collator_create' => 
  array (
    0 => 'Collator|null',
    'locale' => 'string',
  ),
  'collator_get_attribute' => 
  array (
    0 => 'false|int',
    'object' => 'collator',
    'attribute' => 'int',
  ),
  'collator_get_error_code' => 
  array (
    0 => 'int',
    'object' => 'collator',
  ),
  'collator_get_error_message' => 
  array (
    0 => 'string',
    'object' => 'collator',
  ),
  'collator_get_locale' => 
  array (
    0 => 'string',
    'object' => 'collator',
    'type' => 'int',
  ),
  'collator_get_sort_key' => 
  array (
    0 => 'string',
    'object' => 'collator',
    'string' => 'string',
  ),
  'collator_get_strength' => 
  array (
    0 => 'int',
    'object' => 'collator',
  ),
  'collator_set_attribute' => 
  array (
    0 => 'bool',
    'object' => 'collator',
    'attribute' => 'int',
    'value' => 'int',
  ),
  'collator_set_strength' => 
  array (
    0 => 'true',
    'object' => 'collator',
    'strength' => 'int',
  ),
  'collator_sort' => 
  array (
    0 => 'bool',
    'object' => 'collator',
    '&array' => 'array<array-key, mixed>',
    'flags=' => 'int',
  ),
  'collator_sort_with_sort_keys' => 
  array (
    0 => 'bool',
    'object' => 'collator',
    '&array' => 'array<array-key, mixed>',
  ),
  'collectable::isgarbage' => 
  array (
    0 => 'bool',
  ),
  'collectable::setgarbage' => 
  array (
    0 => 'void',
  ),
  'colorobj::sethex' => 
  array (
    0 => 'int',
    'hex' => 'string',
  ),
  'colorobj::tohex' => 
  array (
    0 => 'string',
  ),
  'com::__call' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
    'args' => 'mixed',
  ),
  'com::__construct' => 
  array (
    0 => 'void',
    'module_name' => 'string',
    'server_name=' => 'mixed',
    'codepage=' => 'int',
    'typelib=' => 'string',
  ),
  'com::__get' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
  ),
  'com::__set' => 
  array (
    0 => 'void',
    'name' => 'mixed',
    'value' => 'mixed',
  ),
  'com_addref' => 
  array (
    0 => 'mixed',
  ),
  'com_create_guid' => 
  array (
    0 => 'string',
  ),
  'com_event_sink' => 
  array (
    0 => 'bool',
    'variant' => 'VARIANT',
    'sink_object' => 'object',
    'sink_interface=' => 'mixed',
  ),
  'com_get_active_object' => 
  array (
    0 => 'VARIANT',
    'prog_id' => 'string',
    'codepage=' => 'int',
  ),
  'com_isenum' => 
  array (
    0 => 'bool',
    'com_module' => 'variant',
  ),
  'com_load_typelib' => 
  array (
    0 => 'bool',
    'typelib_name' => 'string',
    'case_insensitive=' => 'true',
  ),
  'com_message_pump' => 
  array (
    0 => 'bool',
    'timeout_milliseconds=' => 'int',
  ),
  'com_print_typeinfo' => 
  array (
    0 => 'bool',
    'variant' => 'object',
    'dispatch_interface=' => 'string',
    'display_sink=' => 'bool',
  ),
  'commonmark\\cql::__invoke' => 
  array (
    0 => 'mixed',
    'root' => 'CommonMark\\Node',
    'handler' => 'callable',
  ),
  'commonmark\\interfaces\\ivisitable::accept' => 
  array (
    0 => 'void',
    'visitor' => 'CommonMark\\Interfaces\\IVisitor',
  ),
  'commonmark\\interfaces\\ivisitor::enter' => 
  array (
    0 => 'IVisitable|int|null',
    'visitable' => 'IVisitable',
  ),
  'commonmark\\interfaces\\ivisitor::leave' => 
  array (
    0 => 'IVisitable|int|null',
    'visitable' => 'IVisitable',
  ),
  'commonmark\\node::accept' => 
  array (
    0 => 'void',
    'visitor' => 'CommonMark\\Interfaces\\IVisitor',
  ),
  'commonmark\\node::appendchild' => 
  array (
    0 => 'CommonMark\\Node',
    'child' => 'CommonMark\\Node',
  ),
  'commonmark\\node::insertafter' => 
  array (
    0 => 'CommonMark\\Node',
    'sibling' => 'CommonMark\\Node',
  ),
  'commonmark\\node::insertbefore' => 
  array (
    0 => 'CommonMark\\Node',
    'sibling' => 'CommonMark\\Node',
  ),
  'commonmark\\node::prependchild' => 
  array (
    0 => 'CommonMark\\Node',
    'child' => 'CommonMark\\Node',
  ),
  'commonmark\\node::replace' => 
  array (
    0 => 'CommonMark\\Node',
    'target' => 'CommonMark\\Node',
  ),
  'commonmark\\node::unlink' => 
  array (
    0 => 'void',
  ),
  'commonmark\\parse' => 
  array (
    0 => 'CommonMark\\Node',
    'content' => 'string',
    'options=' => 'int',
  ),
  'commonmark\\parser::finish' => 
  array (
    0 => 'CommonMark\\Node',
  ),
  'commonmark\\parser::parse' => 
  array (
    0 => 'void',
    'buffer' => 'string',
  ),
  'commonmark\\render' => 
  array (
    0 => 'string',
    'node' => 'CommonMark\\Node',
    'options=' => 'int',
    'width=' => 'int',
  ),
  'commonmark\\render\\html' => 
  array (
    0 => 'string',
    'node' => 'CommonMark\\Node',
    'options=' => 'int',
  ),
  'commonmark\\render\\latex' => 
  array (
    0 => 'string',
    'node' => 'CommonMark\\Node',
    'options=' => 'int',
    'width=' => 'int',
  ),
  'commonmark\\render\\man' => 
  array (
    0 => 'string',
    'node' => 'CommonMark\\Node',
    'options=' => 'int',
    'width=' => 'int',
  ),
  'commonmark\\render\\xml' => 
  array (
    0 => 'string',
    'node' => 'CommonMark\\Node',
    'options=' => 'int',
  ),
  'compact' => 
  array (
    0 => 'array<string, mixed>',
    'var_name' => 'array<array-key, mixed>|string',
    '...var_names=' => 'array<array-key, mixed>|string',
  ),
  'compersisthelper::__construct' => 
  array (
    0 => 'void',
    'variant' => 'object',
  ),
  'compersisthelper::getcurfile' => 
  array (
    0 => 'string',
  ),
  'compersisthelper::getcurfilename' => 
  array (
    0 => 'string',
  ),
  'compersisthelper::getmaxstreamsize' => 
  array (
    0 => 'int',
  ),
  'compersisthelper::initnew' => 
  array (
    0 => 'int',
  ),
  'compersisthelper::loadfromfile' => 
  array (
    0 => 'bool',
    'filename' => 'string',
    'flags' => 'int',
  ),
  'compersisthelper::loadfromstream' => 
  array (
    0 => 'mixed',
    'stream' => 'mixed',
  ),
  'compersisthelper::savetofile' => 
  array (
    0 => 'bool',
    'filename' => 'string',
    'remember' => 'bool',
  ),
  'compersisthelper::savetostream' => 
  array (
    0 => 'int',
    'stream' => 'mixed',
  ),
  'componere\\abstract\\definition::addinterface' => 
  array (
    0 => 'Componere\\Abstract\\Definition',
    'interface' => 'string',
  ),
  'componere\\abstract\\definition::addmethod' => 
  array (
    0 => 'Componere\\Abstract\\Definition',
    'name' => 'string',
    'method' => 'Componere\\Method',
  ),
  'componere\\abstract\\definition::addtrait' => 
  array (
    0 => 'Componere\\Abstract\\Definition',
    'trait' => 'string',
  ),
  'componere\\abstract\\definition::getreflector' => 
  array (
    0 => 'ReflectionClass',
  ),
  'componere\\cast' => 
  array (
    0 => 'object',
    'arg1' => 'string',
    'object' => 'object',
  ),
  'componere\\cast_by_ref' => 
  array (
    0 => 'object',
    'arg1' => 'string',
    'object' => 'object',
  ),
  'componere\\definition::addconstant' => 
  array (
    0 => 'Componere\\Definition',
    'name' => 'string',
    'value' => 'Componere\\Value',
  ),
  'componere\\definition::addproperty' => 
  array (
    0 => 'Componere\\Definition',
    'name' => 'string',
    'value' => 'Componere\\Value',
  ),
  'componere\\definition::getclosure' => 
  array (
    0 => 'Closure',
    'name' => 'string',
  ),
  'componere\\definition::getclosures' => 
  array (
    0 => 'array<array-key, Closure>',
  ),
  'componere\\definition::isregistered' => 
  array (
    0 => 'bool',
  ),
  'componere\\definition::register' => 
  array (
    0 => 'void',
  ),
  'componere\\method::getreflector' => 
  array (
    0 => 'ReflectionMethod',
  ),
  'componere\\method::setprivate' => 
  array (
    0 => 'Method',
  ),
  'componere\\method::setprotected' => 
  array (
    0 => 'Method',
  ),
  'componere\\method::setstatic' => 
  array (
    0 => 'Method',
  ),
  'componere\\patch::apply' => 
  array (
    0 => 'void',
  ),
  'componere\\patch::derive' => 
  array (
    0 => 'Componere\\Patch',
    'instance' => 'object',
  ),
  'componere\\patch::getclosure' => 
  array (
    0 => 'Closure',
    'name' => 'string',
  ),
  'componere\\patch::getclosures' => 
  array (
    0 => 'array<array-key, Closure>',
  ),
  'componere\\patch::isapplied' => 
  array (
    0 => 'bool',
  ),
  'componere\\patch::revert' => 
  array (
    0 => 'void',
  ),
  'componere\\value::hasdefault' => 
  array (
    0 => 'bool',
  ),
  'componere\\value::isprivate' => 
  array (
    0 => 'bool',
  ),
  'componere\\value::isprotected' => 
  array (
    0 => 'bool',
  ),
  'componere\\value::isstatic' => 
  array (
    0 => 'bool',
  ),
  'componere\\value::setprivate' => 
  array (
    0 => 'Value',
  ),
  'componere\\value::setprotected' => 
  array (
    0 => 'Value',
  ),
  'componere\\value::setstatic' => 
  array (
    0 => 'Value',
  ),
  'cond::broadcast' => 
  array (
    0 => 'bool',
    'condition' => 'long',
  ),
  'cond::create' => 
  array (
    0 => 'long',
  ),
  'cond::destroy' => 
  array (
    0 => 'bool',
    'condition' => 'long',
  ),
  'cond::signal' => 
  array (
    0 => 'bool',
    'condition' => 'long',
  ),
  'cond::wait' => 
  array (
    0 => 'bool',
    'condition' => 'long',
    'mutex' => 'long',
    'timeout=' => 'long',
  ),
  'confirm_pdo_ibm_compiled' => 
  array (
    0 => 'mixed',
  ),
  'connection_aborted' => 
  array (
    0 => 'int',
  ),
  'connection_status' => 
  array (
    0 => 'int',
  ),
  'connection_timeout' => 
  array (
    0 => 'int',
  ),
  'constant' => 
  array (
    0 => 'mixed',
    'name' => 'string',
  ),
  'convert_uudecode' => 
  array (
    0 => 'string',
    'string' => 'string',
  ),
  'convert_uuencode' => 
  array (
    0 => 'string',
    'string' => 'string',
  ),
  'copy' => 
  array (
    0 => 'bool',
    'from' => 'string',
    'to' => 'string',
    'context=' => 'resource',
  ),
  'cos' => 
  array (
    0 => 'float',
    'num' => 'float',
  ),
  'cosh' => 
  array (
    0 => 'float',
    'num' => 'float',
  ),
  'couchbase\\analyticsquery::__construct' => 
  array (
    0 => 'void',
  ),
  'couchbase\\analyticsquery::fromstring' => 
  array (
    0 => 'Couchbase\\AnalyticsQuery',
    'statement' => 'string',
  ),
  'couchbase\\basicdecoderv1' => 
  array (
    0 => 'mixed',
    'bytes' => 'string',
    'flags' => 'int',
    'datatype' => 'int',
    'options' => 'array<array-key, mixed>',
  ),
  'couchbase\\basicencoderv1' => 
  array (
    0 => 'array<array-key, mixed>',
    'value' => 'mixed',
    'options' => 'array<array-key, mixed>',
  ),
  'couchbase\\booleanfieldsearchquery::jsonserialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\booleansearchquery::boost' => 
  array (
    0 => 'Couchbase\\BooleanSearchQuery',
    'boost' => 'float',
  ),
  'couchbase\\booleansearchquery::jsonserialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\bucket::__construct' => 
  array (
    0 => 'void',
  ),
  'couchbase\\bucket::__get' => 
  array (
    0 => 'int',
    'name' => 'string',
  ),
  'couchbase\\bucket::__set' => 
  array (
    0 => 'int',
    'name' => 'string',
    'value' => 'int',
  ),
  'couchbase\\bucket::append' => 
  array (
    0 => 'Couchbase\\Document|array<array-key, mixed>',
    'ids' => 'array<array-key, mixed>|string',
    'value' => 'mixed',
    'options=' => 'array<array-key, mixed>',
  ),
  'couchbase\\bucket::counter' => 
  array (
    0 => 'Couchbase\\Document|array<array-key, mixed>',
    'ids' => 'array<array-key, mixed>|string',
    'delta=' => 'int',
    'options=' => 'array<array-key, mixed>',
  ),
  'couchbase\\bucket::decryptfields' => 
  array (
    0 => 'array<array-key, mixed>',
    'document' => 'array<array-key, mixed>',
    'fieldOptions' => 'mixed',
    'prefix=' => 'string',
  ),
  'couchbase\\bucket::diag' => 
  array (
    0 => 'array<array-key, mixed>',
    'reportId=' => 'string',
  ),
  'couchbase\\bucket::encryptfields' => 
  array (
    0 => 'array<array-key, mixed>',
    'document' => 'array<array-key, mixed>',
    'fieldOptions' => 'mixed',
    'prefix=' => 'string',
  ),
  'couchbase\\bucket::get' => 
  array (
    0 => 'Couchbase\\Document|array<array-key, mixed>',
    'ids' => 'array<array-key, mixed>|string',
    'options=' => 'array<array-key, mixed>',
  ),
  'couchbase\\bucket::getandlock' => 
  array (
    0 => 'Couchbase\\Document|array<array-key, mixed>',
    'ids' => 'array<array-key, mixed>|string',
    'lockTime' => 'int',
    'options=' => 'array<array-key, mixed>',
  ),
  'couchbase\\bucket::getandtouch' => 
  array (
    0 => 'Couchbase\\Document|array<array-key, mixed>',
    'ids' => 'array<array-key, mixed>|string',
    'expiry' => 'int',
    'options=' => 'array<array-key, mixed>',
  ),
  'couchbase\\bucket::getfromreplica' => 
  array (
    0 => 'Couchbase\\Document|array<array-key, mixed>',
    'ids' => 'array<array-key, mixed>|string',
    'options=' => 'array<array-key, mixed>',
  ),
  'couchbase\\bucket::getname' => 
  array (
    0 => 'string',
  ),
  'couchbase\\bucket::insert' => 
  array (
    0 => 'Couchbase\\Document|array<array-key, mixed>',
    'ids' => 'array<array-key, mixed>|string',
    'value' => 'mixed',
    'options=' => 'array<array-key, mixed>',
  ),
  'couchbase\\bucket::listexists' => 
  array (
    0 => 'bool',
    'id' => 'string',
    'value' => 'mixed',
  ),
  'couchbase\\bucket::listget' => 
  array (
    0 => 'mixed',
    'id' => 'string',
    'index' => 'int',
  ),
  'couchbase\\bucket::listpush' => 
  array (
    0 => 'mixed',
    'id' => 'string',
    'value' => 'mixed',
  ),
  'couchbase\\bucket::listremove' => 
  array (
    0 => 'mixed',
    'id' => 'string',
    'index' => 'int',
  ),
  'couchbase\\bucket::listset' => 
  array (
    0 => 'mixed',
    'id' => 'string',
    'index' => 'int',
    'value' => 'mixed',
  ),
  'couchbase\\bucket::listshift' => 
  array (
    0 => 'mixed',
    'id' => 'string',
    'value' => 'mixed',
  ),
  'couchbase\\bucket::listsize' => 
  array (
    0 => 'int',
    'id' => 'string',
  ),
  'couchbase\\bucket::lookupin' => 
  array (
    0 => 'Couchbase\\LookupInBuilder',
    'id' => 'string',
  ),
  'couchbase\\bucket::manager' => 
  array (
    0 => 'Couchbase\\BucketManager',
  ),
  'couchbase\\bucket::mapadd' => 
  array (
    0 => 'mixed',
    'id' => 'string',
    'key' => 'string',
    'value' => 'mixed',
  ),
  'couchbase\\bucket::mapget' => 
  array (
    0 => 'mixed',
    'id' => 'string',
    'key' => 'string',
  ),
  'couchbase\\bucket::mapremove' => 
  array (
    0 => 'mixed',
    'id' => 'string',
    'key' => 'string',
  ),
  'couchbase\\bucket::mapsize' => 
  array (
    0 => 'int',
    'id' => 'string',
  ),
  'couchbase\\bucket::mutatein' => 
  array (
    0 => 'Couchbase\\MutateInBuilder',
    'id' => 'string',
    'cas' => 'string',
  ),
  'couchbase\\bucket::ping' => 
  array (
    0 => 'array<array-key, mixed>',
    'services' => 'int',
    'reportId' => 'string',
  ),
  'couchbase\\bucket::prepend' => 
  array (
    0 => 'Couchbase\\Document|array<array-key, mixed>',
    'ids' => 'array<array-key, mixed>|string',
    'value' => 'mixed',
    'options=' => 'array<array-key, mixed>',
  ),
  'couchbase\\bucket::query' => 
  array (
    0 => 'object',
    'query' => 'Couchbase\\AnalyticsQuery|Couchbase\\N1qlQuery|Couchbase\\SearchQuery|Couchbase\\SpatialViewQuery|Couchbase\\ViewQuery',
    'jsonAsArray=' => 'bool',
  ),
  'couchbase\\bucket::queueadd' => 
  array (
    0 => 'mixed',
    'id' => 'string',
    'value' => 'mixed',
  ),
  'couchbase\\bucket::queueexists' => 
  array (
    0 => 'bool',
    'id' => 'string',
    'value' => 'mixed',
  ),
  'couchbase\\bucket::queueremove' => 
  array (
    0 => 'mixed',
    'id' => 'string',
  ),
  'couchbase\\bucket::queuesize' => 
  array (
    0 => 'int',
    'id' => 'string',
  ),
  'couchbase\\bucket::remove' => 
  array (
    0 => 'Couchbase\\Document|array<array-key, mixed>',
    'ids' => 'array<array-key, mixed>|string',
    'options=' => 'array<array-key, mixed>',
  ),
  'couchbase\\bucket::replace' => 
  array (
    0 => 'Couchbase\\Document|array<array-key, mixed>',
    'ids' => 'array<array-key, mixed>|string',
    'value' => 'mixed',
    'options=' => 'array<array-key, mixed>',
  ),
  'couchbase\\bucket::retrievein' => 
  array (
    0 => 'Couchbase\\DocumentFragment',
    'id' => 'string',
    '...paths=' => 'array<int, string>',
  ),
  'couchbase\\bucket::setadd' => 
  array (
    0 => 'mixed',
    'id' => 'string',
    'value' => 'scalar',
  ),
  'couchbase\\bucket::setexists' => 
  array (
    0 => 'bool',
    'id' => 'string',
    'value' => 'scalar',
  ),
  'couchbase\\bucket::setremove' => 
  array (
    0 => 'mixed',
    'id' => 'string',
    'value' => 'scalar',
  ),
  'couchbase\\bucket::setsize' => 
  array (
    0 => 'int',
    'id' => 'string',
  ),
  'couchbase\\bucket::touch' => 
  array (
    0 => 'Couchbase\\Document|array<array-key, mixed>',
    'ids' => 'array<array-key, mixed>|string',
    'expiry' => 'int',
    'options=' => 'array<array-key, mixed>',
  ),
  'couchbase\\bucket::unlock' => 
  array (
    0 => 'Couchbase\\Document|array<array-key, mixed>',
    'ids' => 'array<array-key, mixed>|string',
    'options=' => 'array<array-key, mixed>',
  ),
  'couchbase\\bucket::upsert' => 
  array (
    0 => 'Couchbase\\Document|array<array-key, mixed>',
    'ids' => 'array<array-key, mixed>|string',
    'value' => 'mixed',
    'options=' => 'array<array-key, mixed>',
  ),
  'couchbase\\bucketmanager::__construct' => 
  array (
    0 => 'void',
  ),
  'couchbase\\bucketmanager::createn1qlindex' => 
  array (
    0 => 'mixed',
    'name' => 'string',
    'fields' => 'array<array-key, mixed>',
    'whereClause=' => 'string',
    'ignoreIfExist=' => 'bool',
    'defer=' => 'bool',
  ),
  'couchbase\\bucketmanager::createn1qlprimaryindex' => 
  array (
    0 => 'mixed',
    'customName=' => 'string',
    'ignoreIfExist=' => 'bool',
    'defer=' => 'bool',
  ),
  'couchbase\\bucketmanager::dropn1qlindex' => 
  array (
    0 => 'mixed',
    'name' => 'string',
    'ignoreIfNotExist=' => 'bool',
  ),
  'couchbase\\bucketmanager::dropn1qlprimaryindex' => 
  array (
    0 => 'mixed',
    'customName=' => 'string',
    'ignoreIfNotExist=' => 'bool',
  ),
  'couchbase\\bucketmanager::getdesigndocument' => 
  array (
    0 => 'array<array-key, mixed>',
    'name' => 'string',
  ),
  'couchbase\\bucketmanager::info' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\bucketmanager::insertdesigndocument' => 
  array (
    0 => 'mixed',
    'name' => 'string',
    'document' => 'array<array-key, mixed>',
  ),
  'couchbase\\bucketmanager::listdesigndocuments' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\bucketmanager::listn1qlindexes' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\bucketmanager::removedesigndocument' => 
  array (
    0 => 'mixed',
    'name' => 'string',
  ),
  'couchbase\\bucketmanager::upsertdesigndocument' => 
  array (
    0 => 'mixed',
    'name' => 'string',
    'document' => 'array<array-key, mixed>',
  ),
  'couchbase\\classicauthenticator::bucket' => 
  array (
    0 => 'mixed',
    'name' => 'string',
    'password' => 'string',
  ),
  'couchbase\\classicauthenticator::cluster' => 
  array (
    0 => 'mixed',
    'username' => 'string',
    'password' => 'string',
  ),
  'couchbase\\cluster::authenticate' => 
  array (
    0 => 'null',
    'authenticator' => 'Couchbase\\Authenticator',
  ),
  'couchbase\\cluster::authenticateas' => 
  array (
    0 => 'null',
    'username' => 'string',
    'password' => 'string',
  ),
  'couchbase\\cluster::manager' => 
  array (
    0 => 'Couchbase\\ClusterManager',
    'username=' => 'string',
    'password=' => 'string',
  ),
  'couchbase\\cluster::openbucket' => 
  array (
    0 => 'Couchbase\\Bucket',
    'name=' => 'string',
    'password=' => 'string',
  ),
  'couchbase\\clustermanager::__construct' => 
  array (
    0 => 'void',
  ),
  'couchbase\\clustermanager::createbucket' => 
  array (
    0 => 'mixed',
    'name' => 'string',
    'options=' => 'array<array-key, mixed>',
  ),
  'couchbase\\clustermanager::getuser' => 
  array (
    0 => 'array<array-key, mixed>',
    'username' => 'string',
    'domain=' => 'int',
  ),
  'couchbase\\clustermanager::info' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\clustermanager::listbuckets' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\clustermanager::listusers' => 
  array (
    0 => 'array<array-key, mixed>',
    'domain=' => 'int',
  ),
  'couchbase\\clustermanager::removebucket' => 
  array (
    0 => 'mixed',
    'name' => 'string',
  ),
  'couchbase\\clustermanager::removeuser' => 
  array (
    0 => 'mixed',
    'name' => 'string',
    'domain=' => 'int',
  ),
  'couchbase\\clustermanager::upsertuser' => 
  array (
    0 => 'mixed',
    'name' => 'string',
    'settings' => 'Couchbase\\UserSettings',
    'domain=' => 'int',
  ),
  'couchbase\\conjunctionsearchquery::boost' => 
  array (
    0 => 'Couchbase\\ConjunctionSearchQuery',
    'boost' => 'float',
  ),
  'couchbase\\conjunctionsearchquery::jsonserialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\daterangesearchfacet::addrange' => 
  array (
    0 => 'Couchbase\\DateRangeSearchFacet',
    'name' => 'string',
    'start=' => 'int|string',
    'end=' => 'int|string',
  ),
  'couchbase\\daterangesearchfacet::jsonserialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\daterangesearchquery::end' => 
  array (
    0 => 'Couchbase\\DateRangeSearchQuery',
    'end' => 'int|string',
    'inclusive=' => 'bool',
  ),
  'couchbase\\daterangesearchquery::jsonserialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\daterangesearchquery::start' => 
  array (
    0 => 'Couchbase\\DateRangeSearchQuery',
    'start' => 'int|string',
    'inclusive=' => 'bool',
  ),
  'couchbase\\defaultdecoder' => 
  array (
    0 => 'mixed',
    'bytes' => 'string',
    'flags' => 'int',
    'datatype' => 'int',
  ),
  'couchbase\\defaultencoder' => 
  array (
    0 => 'array<array-key, mixed>',
    'value' => 'mixed',
  ),
  'couchbase\\disjunctionsearchquery::jsonserialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\docidsearchquery::jsonserialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\fastlzcompress' => 
  array (
    0 => 'string',
    'data' => 'string',
  ),
  'couchbase\\fastlzdecompress' => 
  array (
    0 => 'string',
    'data' => 'string',
  ),
  'couchbase\\geoboundingboxsearchquery::jsonserialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\geodistancesearchquery::jsonserialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\lookupinbuilder::__construct' => 
  array (
    0 => 'void',
  ),
  'couchbase\\lookupinbuilder::execute' => 
  array (
    0 => 'Couchbase\\DocumentFragment',
  ),
  'couchbase\\lookupinbuilder::exists' => 
  array (
    0 => 'Couchbase\\LookupInBuilder',
    'path' => 'string',
    'options=' => 'array<array-key, mixed>',
  ),
  'couchbase\\lookupinbuilder::get' => 
  array (
    0 => 'Couchbase\\LookupInBuilder',
    'path' => 'string',
    'options=' => 'array<array-key, mixed>',
  ),
  'couchbase\\lookupinbuilder::getcount' => 
  array (
    0 => 'Couchbase\\LookupInBuilder',
    'path' => 'string',
    'options=' => 'array<array-key, mixed>',
  ),
  'couchbase\\matchallsearchquery::jsonserialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\matchnonesearchquery::jsonserialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\matchphrasesearchquery::jsonserialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\matchsearchquery::jsonserialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\mutateinbuilder::__construct' => 
  array (
    0 => 'void',
  ),
  'couchbase\\mutateinbuilder::arrayaddunique' => 
  array (
    0 => 'Couchbase\\MutateInBuilder',
    'path' => 'string',
    'value' => 'mixed',
    'options=' => 'array<array-key, mixed>|bool',
  ),
  'couchbase\\mutateinbuilder::arrayappend' => 
  array (
    0 => 'Couchbase\\MutateInBuilder',
    'path' => 'string',
    'value' => 'mixed',
    'options=' => 'array<array-key, mixed>|bool',
  ),
  'couchbase\\mutateinbuilder::arrayappendall' => 
  array (
    0 => 'Couchbase\\MutateInBuilder',
    'path' => 'string',
    'values' => 'array<array-key, mixed>',
    'options=' => 'array<array-key, mixed>|bool',
  ),
  'couchbase\\mutateinbuilder::arrayinsert' => 
  array (
    0 => 'Couchbase\\MutateInBuilder',
    'path' => 'string',
    'value' => 'mixed',
    'options=' => 'array<array-key, mixed>',
  ),
  'couchbase\\mutateinbuilder::arrayinsertall' => 
  array (
    0 => 'Couchbase\\MutateInBuilder',
    'path' => 'string',
    'values' => 'array<array-key, mixed>',
    'options=' => 'array<array-key, mixed>',
  ),
  'couchbase\\mutateinbuilder::arrayprepend' => 
  array (
    0 => 'Couchbase\\MutateInBuilder',
    'path' => 'string',
    'value' => 'mixed',
    'options=' => 'array<array-key, mixed>|bool',
  ),
  'couchbase\\mutateinbuilder::arrayprependall' => 
  array (
    0 => 'Couchbase\\MutateInBuilder',
    'path' => 'string',
    'values' => 'array<array-key, mixed>',
    'options=' => 'array<array-key, mixed>|bool',
  ),
  'couchbase\\mutateinbuilder::counter' => 
  array (
    0 => 'Couchbase\\MutateInBuilder',
    'path' => 'string',
    'delta' => 'int',
    'options=' => 'array<array-key, mixed>|bool',
  ),
  'couchbase\\mutateinbuilder::execute' => 
  array (
    0 => 'Couchbase\\DocumentFragment',
  ),
  'couchbase\\mutateinbuilder::insert' => 
  array (
    0 => 'Couchbase\\MutateInBuilder',
    'path' => 'string',
    'value' => 'mixed',
    'options=' => 'array<array-key, mixed>|bool',
  ),
  'couchbase\\mutateinbuilder::modedocument' => 
  array (
    0 => 'mixed',
    'mode' => 'int',
  ),
  'couchbase\\mutateinbuilder::remove' => 
  array (
    0 => 'Couchbase\\MutateInBuilder',
    'path' => 'string',
    'options=' => 'array<array-key, mixed>',
  ),
  'couchbase\\mutateinbuilder::replace' => 
  array (
    0 => 'Couchbase\\MutateInBuilder',
    'path' => 'string',
    'value' => 'mixed',
    'options=' => 'array<array-key, mixed>',
  ),
  'couchbase\\mutateinbuilder::upsert' => 
  array (
    0 => 'Couchbase\\MutateInBuilder',
    'path' => 'string',
    'value' => 'mixed',
    'options=' => 'array<array-key, mixed>|bool',
  ),
  'couchbase\\mutateinbuilder::withexpiry' => 
  array (
    0 => 'Couchbase\\MutateInBuilder',
    'expiry' => 'Couchbase\\expiry',
  ),
  'couchbase\\mutationstate::from' => 
  array (
    0 => 'Couchbase\\MutationState',
    'source' => 'Couchbase\\Document|Couchbase\\DocumentFragment|array<array-key, mixed>',
  ),
  'couchbase\\mutationtoken::__construct' => 
  array (
    0 => 'void',
  ),
  'couchbase\\mutationtoken::bucketname' => 
  array (
    0 => 'string',
  ),
  'couchbase\\mutationtoken::from' => 
  array (
    0 => 'mixed',
    'bucketName' => 'string',
    'vbucketId' => 'int',
    'vbucketUuid' => 'string',
    'sequenceNumber' => 'string',
  ),
  'couchbase\\mutationtoken::sequencenumber' => 
  array (
    0 => 'string',
  ),
  'couchbase\\mutationtoken::vbucketid' => 
  array (
    0 => 'int',
  ),
  'couchbase\\mutationtoken::vbucketuuid' => 
  array (
    0 => 'string',
  ),
  'couchbase\\n1qlindex::__construct' => 
  array (
    0 => 'void',
  ),
  'couchbase\\n1qlquery::__construct' => 
  array (
    0 => 'void',
  ),
  'couchbase\\n1qlquery::adhoc' => 
  array (
    0 => 'Couchbase\\N1qlQuery',
    'adhoc' => 'bool',
  ),
  'couchbase\\n1qlquery::consistency' => 
  array (
    0 => 'Couchbase\\N1qlQuery',
    'consistency' => 'int',
  ),
  'couchbase\\n1qlquery::consistentwith' => 
  array (
    0 => 'Couchbase\\N1qlQuery',
    'state' => 'Couchbase\\MutationState',
  ),
  'couchbase\\n1qlquery::crossbucket' => 
  array (
    0 => 'Couchbase\\N1qlQuery',
    'crossBucket' => 'bool',
  ),
  'couchbase\\n1qlquery::fromstring' => 
  array (
    0 => 'Couchbase\\N1qlQuery',
    'statement' => 'string',
  ),
  'couchbase\\n1qlquery::maxparallelism' => 
  array (
    0 => 'Couchbase\\N1qlQuery',
    'maxParallelism' => 'int',
  ),
  'couchbase\\n1qlquery::namedparams' => 
  array (
    0 => 'Couchbase\\N1qlQuery',
    'params' => 'array<array-key, mixed>',
  ),
  'couchbase\\n1qlquery::pipelinebatch' => 
  array (
    0 => 'Couchbase\\N1qlQuery',
    'pipelineBatch' => 'int',
  ),
  'couchbase\\n1qlquery::pipelinecap' => 
  array (
    0 => 'Couchbase\\N1qlQuery',
    'pipelineCap' => 'int',
  ),
  'couchbase\\n1qlquery::positionalparams' => 
  array (
    0 => 'Couchbase\\N1qlQuery',
    'params' => 'array<array-key, mixed>',
  ),
  'couchbase\\n1qlquery::profile' => 
  array (
    0 => 'mixed',
    'profileType' => 'string',
  ),
  'couchbase\\n1qlquery::readonly' => 
  array (
    0 => 'Couchbase\\N1qlQuery',
    'readonly' => 'bool',
  ),
  'couchbase\\n1qlquery::scancap' => 
  array (
    0 => 'Couchbase\\N1qlQuery',
    'scanCap' => 'int',
  ),
  'couchbase\\numericrangesearchfacet::jsonserialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\numericrangesearchquery::field' => 
  array (
    0 => 'Couchbase\\NumericRangeSearchQuery',
    'field' => 'string',
  ),
  'couchbase\\numericrangesearchquery::jsonserialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\passthrudecoder' => 
  array (
    0 => 'string',
    'bytes' => 'string',
    'flags' => 'int',
    'datatype' => 'int',
  ),
  'couchbase\\passthruencoder' => 
  array (
    0 => 'array<array-key, mixed>',
    'value' => 'string',
  ),
  'couchbase\\passwordauthenticator::password' => 
  array (
    0 => 'Couchbase\\PasswordAuthenticator',
    'password' => 'string',
  ),
  'couchbase\\passwordauthenticator::username' => 
  array (
    0 => 'Couchbase\\PasswordAuthenticator',
    'username' => 'string',
  ),
  'couchbase\\phrasesearchquery::jsonserialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\prefixsearchquery::jsonserialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\querystringsearchquery::jsonserialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\regexpsearchquery::jsonserialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\searchquery::__construct' => 
  array (
    0 => 'void',
    'indexName' => 'string',
    'queryPart' => 'Couchbase\\SearchQueryPart',
  ),
  'couchbase\\searchquery::addfacet' => 
  array (
    0 => 'Couchbase\\SearchQuery',
    'name' => 'string',
    'facet' => 'Couchbase\\SearchFacet',
  ),
  'couchbase\\searchquery::boolean' => 
  array (
    0 => 'Couchbase\\BooleanSearchQuery',
  ),
  'couchbase\\searchquery::booleanfield' => 
  array (
    0 => 'Couchbase\\BooleanFieldSearchQuery',
    'value' => 'bool',
  ),
  'couchbase\\searchquery::conjuncts' => 
  array (
    0 => 'Couchbase\\ConjunctionSearchQuery',
    '...queries=' => 'array<int, Couchbase\\SearchQueryPart>',
  ),
  'couchbase\\searchquery::consistentwith' => 
  array (
    0 => 'Couchbase\\SearchQuery',
    'state' => 'Couchbase\\MutationState',
  ),
  'couchbase\\searchquery::daterange' => 
  array (
    0 => 'Couchbase\\DateRangeSearchQuery',
  ),
  'couchbase\\searchquery::daterangefacet' => 
  array (
    0 => 'Couchbase\\DateRangeSearchFacet',
    'field' => 'string',
    'limit' => 'int',
  ),
  'couchbase\\searchquery::disjuncts' => 
  array (
    0 => 'Couchbase\\DisjunctionSearchQuery',
    '...queries=' => 'array<int, Couchbase\\SearchQueryPart>',
  ),
  'couchbase\\searchquery::docid' => 
  array (
    0 => 'Couchbase\\DocIdSearchQuery',
    '...documentIds=' => 'array<int, string>',
  ),
  'couchbase\\searchquery::explain' => 
  array (
    0 => 'Couchbase\\SearchQuery',
    'explain' => 'bool',
  ),
  'couchbase\\searchquery::fields' => 
  array (
    0 => 'Couchbase\\SearchQuery',
    '...fields=' => 'array<int, string>',
  ),
  'couchbase\\searchquery::geoboundingbox' => 
  array (
    0 => 'Couchbase\\GeoBoundingBoxSearchQuery',
    'topLeftLongitude' => 'float',
    'topLeftLatitude' => 'float',
    'bottomRightLongitude' => 'float',
    'bottomRightLatitude' => 'float',
  ),
  'couchbase\\searchquery::geodistance' => 
  array (
    0 => 'Couchbase\\GeoDistanceSearchQuery',
    'longitude' => 'float',
    'latitude' => 'float',
    'distance' => 'string',
  ),
  'couchbase\\searchquery::highlight' => 
  array (
    0 => 'Couchbase\\SearchQuery',
    'style' => 'string',
    '...fields=' => 'array<int, string>',
  ),
  'couchbase\\searchquery::jsonserialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\searchquery::limit' => 
  array (
    0 => 'Couchbase\\SearchQuery',
    'limit' => 'int',
  ),
  'couchbase\\searchquery::match' => 
  array (
    0 => 'Couchbase\\MatchSearchQuery',
    'match' => 'string',
  ),
  'couchbase\\searchquery::matchall' => 
  array (
    0 => 'Couchbase\\MatchAllSearchQuery',
  ),
  'couchbase\\searchquery::matchnone' => 
  array (
    0 => 'Couchbase\\MatchNoneSearchQuery',
  ),
  'couchbase\\searchquery::matchphrase' => 
  array (
    0 => 'Couchbase\\MatchPhraseSearchQuery',
    '...terms=' => 'array<int, string>',
  ),
  'couchbase\\searchquery::numericrange' => 
  array (
    0 => 'Couchbase\\NumericRangeSearchQuery',
  ),
  'couchbase\\searchquery::numericrangefacet' => 
  array (
    0 => 'Couchbase\\NumericRangeSearchFacet',
    'field' => 'string',
    'limit' => 'int',
  ),
  'couchbase\\searchquery::prefix' => 
  array (
    0 => 'Couchbase\\PrefixSearchQuery',
    'prefix' => 'string',
  ),
  'couchbase\\searchquery::querystring' => 
  array (
    0 => 'Couchbase\\QueryStringSearchQuery',
    'queryString' => 'string',
  ),
  'couchbase\\searchquery::regexp' => 
  array (
    0 => 'Couchbase\\RegexpSearchQuery',
    'regexp' => 'string',
  ),
  'couchbase\\searchquery::serversidetimeout' => 
  array (
    0 => 'Couchbase\\SearchQuery',
    'serverSideTimeout' => 'int',
  ),
  'couchbase\\searchquery::skip' => 
  array (
    0 => 'Couchbase\\SearchQuery',
    'skip' => 'int',
  ),
  'couchbase\\searchquery::sort' => 
  array (
    0 => 'Couchbase\\SearchQuery',
    '...sort=' => 'array<int, Couchbase\\sort>',
  ),
  'couchbase\\searchquery::term' => 
  array (
    0 => 'Couchbase\\TermSearchQuery',
    'term' => 'string',
  ),
  'couchbase\\searchquery::termfacet' => 
  array (
    0 => 'Couchbase\\TermSearchFacet',
    'field' => 'string',
    'limit' => 'int',
  ),
  'couchbase\\searchquery::termrange' => 
  array (
    0 => 'Couchbase\\TermRangeSearchQuery',
  ),
  'couchbase\\searchquery::wildcard' => 
  array (
    0 => 'Couchbase\\WildcardSearchQuery',
    'wildcard' => 'string',
  ),
  'couchbase\\searchsort::__construct' => 
  array (
    0 => 'void',
  ),
  'couchbase\\searchsort::field' => 
  array (
    0 => 'Couchbase\\SearchSortField',
    'field' => 'string',
  ),
  'couchbase\\searchsort::geodistance' => 
  array (
    0 => 'Couchbase\\SearchSortGeoDistance',
    'field' => 'string',
    'longitude' => 'float',
    'latitude' => 'float',
  ),
  'couchbase\\searchsort::id' => 
  array (
    0 => 'Couchbase\\SearchSortId',
  ),
  'couchbase\\searchsort::score' => 
  array (
    0 => 'Couchbase\\SearchSortScore',
  ),
  'couchbase\\searchsortfield::field' => 
  array (
    0 => 'Couchbase\\SearchSortField',
    'field' => 'string',
  ),
  'couchbase\\searchsortfield::geodistance' => 
  array (
    0 => 'Couchbase\\SearchSortGeoDistance',
    'field' => 'string',
    'longitude' => 'float',
    'latitude' => 'float',
  ),
  'couchbase\\searchsortfield::id' => 
  array (
    0 => 'Couchbase\\SearchSortId',
  ),
  'couchbase\\searchsortfield::score' => 
  array (
    0 => 'Couchbase\\SearchSortScore',
  ),
  'couchbase\\searchsortgeodistance::field' => 
  array (
    0 => 'Couchbase\\SearchSortField',
    'field' => 'string',
  ),
  'couchbase\\searchsortgeodistance::geodistance' => 
  array (
    0 => 'Couchbase\\SearchSortGeoDistance',
    'field' => 'string',
    'longitude' => 'float',
    'latitude' => 'float',
  ),
  'couchbase\\searchsortgeodistance::id' => 
  array (
    0 => 'Couchbase\\SearchSortId',
  ),
  'couchbase\\searchsortgeodistance::score' => 
  array (
    0 => 'Couchbase\\SearchSortScore',
  ),
  'couchbase\\searchsortid::field' => 
  array (
    0 => 'Couchbase\\SearchSortField',
    'field' => 'string',
  ),
  'couchbase\\searchsortid::geodistance' => 
  array (
    0 => 'Couchbase\\SearchSortGeoDistance',
    'field' => 'string',
    'longitude' => 'float',
    'latitude' => 'float',
  ),
  'couchbase\\searchsortid::id' => 
  array (
    0 => 'Couchbase\\SearchSortId',
  ),
  'couchbase\\searchsortid::score' => 
  array (
    0 => 'Couchbase\\SearchSortScore',
  ),
  'couchbase\\searchsortscore::field' => 
  array (
    0 => 'Couchbase\\SearchSortField',
    'field' => 'string',
  ),
  'couchbase\\searchsortscore::geodistance' => 
  array (
    0 => 'Couchbase\\SearchSortGeoDistance',
    'field' => 'string',
    'longitude' => 'float',
    'latitude' => 'float',
  ),
  'couchbase\\searchsortscore::id' => 
  array (
    0 => 'Couchbase\\SearchSortId',
  ),
  'couchbase\\searchsortscore::score' => 
  array (
    0 => 'Couchbase\\SearchSortScore',
  ),
  'couchbase\\spatialviewquery::__construct' => 
  array (
    0 => 'void',
  ),
  'couchbase\\spatialviewquery::bbox' => 
  array (
    0 => 'Couchbase\\SpatialViewQuery',
    'bbox' => 'array<array-key, mixed>',
  ),
  'couchbase\\spatialviewquery::consistency' => 
  array (
    0 => 'Couchbase\\SpatialViewQuery',
    'consistency' => 'int',
  ),
  'couchbase\\spatialviewquery::custom' => 
  array (
    0 => 'mixed',
    'customParameters' => 'array<array-key, mixed>',
  ),
  'couchbase\\spatialviewquery::encode' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\spatialviewquery::endrange' => 
  array (
    0 => 'Couchbase\\SpatialViewQuery',
    'range' => 'array<array-key, mixed>',
  ),
  'couchbase\\spatialviewquery::limit' => 
  array (
    0 => 'Couchbase\\SpatialViewQuery',
    'limit' => 'int',
  ),
  'couchbase\\spatialviewquery::order' => 
  array (
    0 => 'Couchbase\\SpatialViewQuery',
    'order' => 'int',
  ),
  'couchbase\\spatialviewquery::skip' => 
  array (
    0 => 'Couchbase\\SpatialViewQuery',
    'skip' => 'int',
  ),
  'couchbase\\spatialviewquery::startrange' => 
  array (
    0 => 'Couchbase\\SpatialViewQuery',
    'range' => 'array<array-key, mixed>',
  ),
  'couchbase\\termrangesearchquery::jsonserialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\termsearchfacet::jsonserialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\termsearchquery::jsonserialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\usersettings::fullname' => 
  array (
    0 => 'Couchbase\\UserSettings',
    'fullName' => 'string',
  ),
  'couchbase\\usersettings::password' => 
  array (
    0 => 'Couchbase\\UserSettings',
    'password' => 'string',
  ),
  'couchbase\\usersettings::role' => 
  array (
    0 => 'Couchbase\\UserSettings',
    'role' => 'string',
    'bucket=' => 'string',
  ),
  'couchbase\\viewquery::__construct' => 
  array (
    0 => 'void',
  ),
  'couchbase\\viewquery::consistency' => 
  array (
    0 => 'Couchbase\\ViewQuery',
    'consistency' => 'int',
  ),
  'couchbase\\viewquery::custom' => 
  array (
    0 => 'Couchbase\\ViewQuery',
    'customParameters' => 'array<array-key, mixed>',
  ),
  'couchbase\\viewquery::encode' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\viewquery::from' => 
  array (
    0 => 'Couchbase\\ViewQuery',
    'designDocumentName' => 'string',
    'viewName' => 'string',
  ),
  'couchbase\\viewquery::fromspatial' => 
  array (
    0 => 'Couchbase\\SpatialViewQuery',
    'designDocumentName' => 'string',
    'viewName' => 'string',
  ),
  'couchbase\\viewquery::group' => 
  array (
    0 => 'Couchbase\\ViewQuery',
    'group' => 'bool',
  ),
  'couchbase\\viewquery::grouplevel' => 
  array (
    0 => 'Couchbase\\ViewQuery',
    'groupLevel' => 'int',
  ),
  'couchbase\\viewquery::idrange' => 
  array (
    0 => 'Couchbase\\ViewQuery',
    'startKeyDocumentId' => 'string',
    'endKeyDocumentId' => 'string',
  ),
  'couchbase\\viewquery::key' => 
  array (
    0 => 'Couchbase\\ViewQuery',
    'key' => 'mixed',
  ),
  'couchbase\\viewquery::keys' => 
  array (
    0 => 'Couchbase\\ViewQuery',
    'keys' => 'array<array-key, mixed>',
  ),
  'couchbase\\viewquery::limit' => 
  array (
    0 => 'Couchbase\\ViewQuery',
    'limit' => 'int',
  ),
  'couchbase\\viewquery::order' => 
  array (
    0 => 'Couchbase\\ViewQuery',
    'order' => 'int',
  ),
  'couchbase\\viewquery::range' => 
  array (
    0 => 'Couchbase\\ViewQuery',
    'startKey' => 'mixed',
    'endKey' => 'mixed',
    'inclusiveEnd=' => 'bool',
  ),
  'couchbase\\viewquery::reduce' => 
  array (
    0 => 'Couchbase\\ViewQuery',
    'reduce' => 'bool',
  ),
  'couchbase\\viewquery::skip' => 
  array (
    0 => 'Couchbase\\ViewQuery',
    'skip' => 'int',
  ),
  'couchbase\\viewqueryencodable::encode' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\wildcardsearchquery::jsonserialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\zlibcompress' => 
  array (
    0 => 'string',
    'data' => 'string',
  ),
  'couchbase\\zlibdecompress' => 
  array (
    0 => 'string',
    'data' => 'string',
  ),
  'count' => 
  array (
    0 => 'int<0, max>',
    'value' => 'Countable|array<array-key, mixed>',
    'mode=' => 'int',
  ),
  'count_chars' => 
  array (
    0 => 'array<int, int>',
    'string' => 'string',
    'mode=' => '0|1|2',
  ),
  'count_chars\'1' => 
  array (
    0 => 'string',
    'input' => 'string',
    'mode=' => '3|4',
  ),
  'countable::count' => 
  array (
    0 => 'int',
  ),
  'crack_check' => 
  array (
    0 => 'bool',
    'dictionary' => 'mixed',
    'password' => 'string',
  ),
  'crack_closedict' => 
  array (
    0 => 'bool',
    'dictionary=' => 'resource',
  ),
  'crack_getlastmessage' => 
  array (
    0 => 'string',
  ),
  'crack_opendict' => 
  array (
    0 => 'false|resource',
    'dictionary' => 'string',
  ),
  'crash' => 
  array (
    0 => 'mixed',
  ),
  'crc32' => 
  array (
    0 => 'int',
    'string' => 'string',
  ),
  'crypt' => 
  array (
    0 => 'string',
    'string' => 'string',
    'salt' => 'string',
  ),
  'ctype_alnum' => 
  array (
    0 => 'bool',
    'text' => 'string',
  ),
  'ctype_alpha' => 
  array (
    0 => 'bool',
    'text' => 'string',
  ),
  'ctype_cntrl' => 
  array (
    0 => 'bool',
    'text' => 'string',
  ),
  'ctype_digit' => 
  array (
    0 => 'bool',
    'text' => 'string',
  ),
  'ctype_graph' => 
  array (
    0 => 'bool',
    'text' => 'string',
  ),
  'ctype_lower' => 
  array (
    0 => 'bool',
    'text' => 'string',
  ),
  'ctype_print' => 
  array (
    0 => 'bool',
    'text' => 'string',
  ),
  'ctype_punct' => 
  array (
    0 => 'bool',
    'text' => 'string',
  ),
  'ctype_space' => 
  array (
    0 => 'bool',
    'text' => 'string',
  ),
  'ctype_upper' => 
  array (
    0 => 'bool',
    'text' => 'string',
  ),
  'ctype_xdigit' => 
  array (
    0 => 'bool',
    'text' => 'string',
  ),
  'cubrid_affected_rows' => 
  array (
    0 => 'int',
    'req_identifier=' => 'mixed',
  ),
  'cubrid_bind' => 
  array (
    0 => 'bool',
    'req_identifier' => 'resource',
    'bind_param' => 'int',
    'bind_value' => 'mixed',
    'bind_value_type=' => 'string',
  ),
  'cubrid_client_encoding' => 
  array (
    0 => 'string',
    'conn_identifier=' => 'mixed',
  ),
  'cubrid_close' => 
  array (
    0 => 'bool',
    'conn_identifier=' => 'mixed',
  ),
  'cubrid_close_prepare' => 
  array (
    0 => 'bool',
    'req_identifier' => 'resource',
  ),
  'cubrid_close_request' => 
  array (
    0 => 'bool',
    'req_identifier' => 'resource',
  ),
  'cubrid_col_get' => 
  array (
    0 => 'array<array-key, mixed>',
    'conn_identifier' => 'resource',
    'oid' => 'string',
    'attr_name' => 'string',
  ),
  'cubrid_col_size' => 
  array (
    0 => 'int',
    'conn_identifier' => 'resource',
    'oid' => 'string',
    'attr_name' => 'string',
  ),
  'cubrid_column_names' => 
  array (
    0 => 'array<array-key, mixed>',
    'req_identifier' => 'resource',
  ),
  'cubrid_column_types' => 
  array (
    0 => 'array<array-key, mixed>',
    'req_identifier' => 'resource',
  ),
  'cubrid_commit' => 
  array (
    0 => 'bool',
    'conn_identifier' => 'resource',
  ),
  'cubrid_connect' => 
  array (
    0 => 'resource',
    'host' => 'string',
    'port' => 'int',
    'dbname' => 'string',
    'userid=' => 'string',
    'passwd=' => 'string',
  ),
  'cubrid_connect_with_url' => 
  array (
    0 => 'resource',
    'conn_url' => 'string',
    'userid=' => 'string',
    'passwd=' => 'string',
  ),
  'cubrid_current_oid' => 
  array (
    0 => 'string',
    'req_identifier' => 'resource',
  ),
  'cubrid_data_seek' => 
  array (
    0 => 'bool',
    'req_identifier' => 'mixed',
    'row_number' => 'int',
  ),
  'cubrid_db_name' => 
  array (
    0 => 'string',
    'result' => 'array<array-key, mixed>',
    'index' => 'int',
  ),
  'cubrid_db_parameter' => 
  array (
    0 => 'array<array-key, mixed>',
    'conn_identifier' => 'resource',
  ),
  'cubrid_disconnect' => 
  array (
    0 => 'bool',
    'conn_identifier' => 'resource',
  ),
  'cubrid_drop' => 
  array (
    0 => 'bool',
    'conn_identifier' => 'resource',
    'oid' => 'string',
  ),
  'cubrid_errno' => 
  array (
    0 => 'int',
    'conn_identifier=' => 'mixed',
  ),
  'cubrid_error' => 
  array (
    0 => 'string',
    'connection=' => 'mixed',
  ),
  'cubrid_error_code' => 
  array (
    0 => 'int',
  ),
  'cubrid_error_code_facility' => 
  array (
    0 => 'int',
  ),
  'cubrid_error_msg' => 
  array (
    0 => 'string',
  ),
  'cubrid_execute' => 
  array (
    0 => 'bool',
    'conn_identifier' => 'mixed',
    'sql' => 'string',
    'option=' => 'int',
    'request_identifier=' => 'mixed',
  ),
  'cubrid_fetch' => 
  array (
    0 => 'mixed',
    'result' => 'resource',
    'type=' => 'int',
  ),
  'cubrid_fetch_array' => 
  array (
    0 => 'array<array-key, mixed>',
    'result' => 'resource',
    'type=' => 'int',
  ),
  'cubrid_fetch_assoc' => 
  array (
    0 => 'array<array-key, mixed>',
    'result' => 'resource',
  ),
  'cubrid_fetch_field' => 
  array (
    0 => 'object',
    'result' => 'resource',
    'field_offset=' => 'int',
  ),
  'cubrid_fetch_lengths' => 
  array (
    0 => 'array<array-key, mixed>',
    'result' => 'resource',
  ),
  'cubrid_fetch_object' => 
  array (
    0 => 'object',
    'result' => 'resource',
    'class_name=' => 'string',
    'params=' => 'array<array-key, mixed>',
  ),
  'cubrid_fetch_row' => 
  array (
    0 => 'array<array-key, mixed>',
    'result' => 'resource',
  ),
  'cubrid_field_flags' => 
  array (
    0 => 'string',
    'result' => 'resource',
    'field_offset' => 'int',
  ),
  'cubrid_field_len' => 
  array (
    0 => 'int',
    'result' => 'resource',
    'field_offset' => 'int',
  ),
  'cubrid_field_name' => 
  array (
    0 => 'string',
    'result' => 'resource',
    'field_offset' => 'int',
  ),
  'cubrid_field_seek' => 
  array (
    0 => 'bool',
    'result' => 'resource',
    'field_offset=' => 'int',
  ),
  'cubrid_field_table' => 
  array (
    0 => 'string',
    'result' => 'resource',
    'field_offset' => 'int',
  ),
  'cubrid_field_type' => 
  array (
    0 => 'string',
    'result' => 'resource',
    'field_offset' => 'int',
  ),
  'cubrid_free_result' => 
  array (
    0 => 'bool',
    'req_identifier' => 'resource',
  ),
  'cubrid_get' => 
  array (
    0 => 'mixed',
    'conn_identifier' => 'resource',
    'oid' => 'string',
    'attr=' => 'mixed',
  ),
  'cubrid_get_autocommit' => 
  array (
    0 => 'bool',
    'conn_identifier' => 'resource',
  ),
  'cubrid_get_charset' => 
  array (
    0 => 'string',
    'conn_identifier' => 'resource',
  ),
  'cubrid_get_class_name' => 
  array (
    0 => 'string',
    'conn_identifier' => 'resource',
    'oid' => 'string',
  ),
  'cubrid_get_client_info' => 
  array (
    0 => 'string',
  ),
  'cubrid_get_db_parameter' => 
  array (
    0 => 'array<array-key, mixed>',
    'conn_identifier' => 'resource',
  ),
  'cubrid_get_query_timeout' => 
  array (
    0 => 'int',
    'req_identifier' => 'resource',
  ),
  'cubrid_get_server_info' => 
  array (
    0 => 'string',
    'conn_identifier' => 'resource',
  ),
  'cubrid_insert_id' => 
  array (
    0 => 'string',
    'conn_identifier=' => 'resource',
  ),
  'cubrid_is_instance' => 
  array (
    0 => 'int',
    'conn_identifier' => 'resource',
    'oid' => 'string',
  ),
  'cubrid_list_dbs' => 
  array (
    0 => 'array<array-key, mixed>',
    'conn_identifier' => 'resource',
  ),
  'cubrid_load_from_glo' => 
  array (
    0 => 'int',
    'conn_identifier' => 'mixed',
    'oid' => 'string',
    'file_name' => 'string',
  ),
  'cubrid_lob2_bind' => 
  array (
    0 => 'bool',
    'req_identifier' => 'resource',
    'bind_index' => 'int',
    'bind_value' => 'mixed',
    'bind_value_type=' => 'string',
  ),
  'cubrid_lob2_close' => 
  array (
    0 => 'bool',
    'lob_identifier' => 'resource',
  ),
  'cubrid_lob2_export' => 
  array (
    0 => 'bool',
    'lob_identifier' => 'resource',
    'file_name' => 'string',
  ),
  'cubrid_lob2_import' => 
  array (
    0 => 'bool',
    'lob_identifier' => 'resource',
    'file_name' => 'string',
  ),
  'cubrid_lob2_new' => 
  array (
    0 => 'resource',
    'conn_identifier=' => 'resource',
    'type=' => 'string',
  ),
  'cubrid_lob2_read' => 
  array (
    0 => 'string',
    'lob_identifier' => 'resource',
    'length' => 'int',
  ),
  'cubrid_lob2_seek' => 
  array (
    0 => 'bool',
    'lob_identifier' => 'resource',
    'offset' => 'int',
    'origin=' => 'int',
  ),
  'cubrid_lob2_seek64' => 
  array (
    0 => 'bool',
    'lob_identifier' => 'resource',
    'offset' => 'string',
    'origin=' => 'int',
  ),
  'cubrid_lob2_size' => 
  array (
    0 => 'int',
    'lob_identifier' => 'resource',
  ),
  'cubrid_lob2_size64' => 
  array (
    0 => 'string',
    'lob_identifier' => 'resource',
  ),
  'cubrid_lob2_tell' => 
  array (
    0 => 'int',
    'lob_identifier' => 'resource',
  ),
  'cubrid_lob2_tell64' => 
  array (
    0 => 'string',
    'lob_identifier' => 'resource',
  ),
  'cubrid_lob2_write' => 
  array (
    0 => 'bool',
    'lob_identifier' => 'resource',
    'buf' => 'string',
  ),
  'cubrid_lob_close' => 
  array (
    0 => 'bool',
    'lob_identifier_array' => 'array<array-key, mixed>',
  ),
  'cubrid_lob_export' => 
  array (
    0 => 'bool',
    'conn_identifier' => 'resource',
    'lob_identifier' => 'resource',
    'path_name' => 'string',
  ),
  'cubrid_lob_get' => 
  array (
    0 => 'array<array-key, mixed>',
    'conn_identifier' => 'resource',
    'sql' => 'string',
  ),
  'cubrid_lob_send' => 
  array (
    0 => 'bool',
    'conn_identifier' => 'resource',
    'lob_identifier' => 'resource',
  ),
  'cubrid_lob_size' => 
  array (
    0 => 'string',
    'lob_identifier' => 'resource',
  ),
  'cubrid_lock_read' => 
  array (
    0 => 'bool',
    'conn_identifier' => 'resource',
    'oid' => 'string',
  ),
  'cubrid_lock_write' => 
  array (
    0 => 'bool',
    'conn_identifier' => 'resource',
    'oid' => 'string',
  ),
  'cubrid_move_cursor' => 
  array (
    0 => 'int',
    'req_identifier' => 'resource',
    'offset' => 'int',
    'origin=' => 'int',
  ),
  'cubrid_new_glo' => 
  array (
    0 => 'string',
    'conn_identifier' => 'mixed',
    'class_name' => 'string',
    'file_name' => 'string',
  ),
  'cubrid_next_result' => 
  array (
    0 => 'bool',
    'result' => 'resource',
  ),
  'cubrid_num_cols' => 
  array (
    0 => 'int',
    'req_identifier' => 'resource',
  ),
  'cubrid_num_fields' => 
  array (
    0 => 'int',
    'result' => 'resource',
  ),
  'cubrid_num_rows' => 
  array (
    0 => 'int',
    'req_identifier' => 'resource',
  ),
  'cubrid_pconnect' => 
  array (
    0 => 'resource',
    'host' => 'string',
    'port' => 'int',
    'dbname' => 'string',
    'userid=' => 'string',
    'passwd=' => 'string',
  ),
  'cubrid_pconnect_with_url' => 
  array (
    0 => 'resource',
    'conn_url' => 'string',
    'userid=' => 'string',
    'passwd=' => 'string',
  ),
  'cubrid_ping' => 
  array (
    0 => 'bool',
    'conn_identifier=' => 'mixed',
  ),
  'cubrid_prepare' => 
  array (
    0 => 'resource',
    'conn_identifier' => 'resource',
    'prepare_stmt' => 'string',
    'option=' => 'int',
  ),
  'cubrid_put' => 
  array (
    0 => 'bool',
    'conn_identifier' => 'resource',
    'oid' => 'string',
    'attr=' => 'string',
    'value=' => 'mixed',
  ),
  'cubrid_query' => 
  array (
    0 => 'resource',
    'query' => 'string',
    'conn_identifier=' => 'mixed',
  ),
  'cubrid_real_escape_string' => 
  array (
    0 => 'string',
    'unescaped_string' => 'string',
    'conn_identifier=' => 'mixed',
  ),
  'cubrid_result' => 
  array (
    0 => 'string',
    'result' => 'resource',
    'row' => 'int',
    'field=' => 'mixed',
  ),
  'cubrid_rollback' => 
  array (
    0 => 'bool',
    'conn_identifier' => 'resource',
  ),
  'cubrid_save_to_glo' => 
  array (
    0 => 'int',
    'conn_identifier' => 'mixed',
    'oid' => 'string',
    'file_name' => 'string',
  ),
  'cubrid_schema' => 
  array (
    0 => 'array<array-key, mixed>',
    'conn_identifier' => 'resource',
    'schema_type' => 'int',
    'class_name=' => 'string',
    'attr_name=' => 'string',
  ),
  'cubrid_send_glo' => 
  array (
    0 => 'int',
    'conn_identifier' => 'mixed',
    'oid' => 'string',
  ),
  'cubrid_seq_add' => 
  array (
    0 => 'bool',
    'conn_identifier' => 'resource',
    'oid' => 'string',
    'attr_name' => 'string',
    'seq_element' => 'string',
  ),
  'cubrid_seq_drop' => 
  array (
    0 => 'bool',
    'conn_identifier' => 'resource',
    'oid' => 'string',
    'attr_name' => 'string',
    'index' => 'int',
  ),
  'cubrid_seq_insert' => 
  array (
    0 => 'bool',
    'conn_identifier' => 'resource',
    'oid' => 'string',
    'attr_name' => 'string',
    'index' => 'int',
    'seq_element' => 'string',
  ),
  'cubrid_seq_put' => 
  array (
    0 => 'bool',
    'conn_identifier' => 'resource',
    'oid' => 'string',
    'attr_name' => 'string',
    'index' => 'int',
    'seq_element' => 'string',
  ),
  'cubrid_set_add' => 
  array (
    0 => 'bool',
    'conn_identifier' => 'resource',
    'oid' => 'string',
    'attr_name' => 'string',
    'set_element' => 'string',
  ),
  'cubrid_set_autocommit' => 
  array (
    0 => 'bool',
    'conn_identifier' => 'resource',
    'mode' => 'bool',
  ),
  'cubrid_set_db_parameter' => 
  array (
    0 => 'bool',
    'conn_identifier' => 'resource',
    'param_type' => 'int',
    'param_value' => 'int',
  ),
  'cubrid_set_drop' => 
  array (
    0 => 'bool',
    'conn_identifier' => 'resource',
    'oid' => 'string',
    'attr_name' => 'string',
    'set_element' => 'string',
  ),
  'cubrid_set_query_timeout' => 
  array (
    0 => 'bool',
    'req_identifier' => 'resource',
    'timeout' => 'int',
  ),
  'cubrid_unbuffered_query' => 
  array (
    0 => 'resource',
    'query' => 'string',
    'conn_identifier=' => 'mixed',
  ),
  'cubrid_version' => 
  array (
    0 => 'string',
  ),
  'curl_close' => 
  array (
    0 => 'void',
    'handle' => 'CurlHandle',
  ),
  'curl_copy_handle' => 
  array (
    0 => 'CurlHandle|false',
    'handle' => 'CurlHandle',
  ),
  'curl_errno' => 
  array (
    0 => 'int',
    'handle' => 'CurlHandle',
  ),
  'curl_error' => 
  array (
    0 => 'string',
    'handle' => 'CurlHandle',
  ),
  'curl_escape' => 
  array (
    0 => 'false|string',
    'handle' => 'CurlHandle',
    'string' => 'string',
  ),
  'curl_exec' => 
  array (
    0 => 'bool|string',
    'handle' => 'CurlHandle',
  ),
  'curl_file_create' => 
  array (
    0 => 'CURLFile',
    'filename' => 'string',
    'mime_type=' => 'null|string',
    'posted_filename=' => 'null|string',
  ),
  'curl_getinfo' => 
  array (
    0 => 'mixed',
    'handle' => 'CurlHandle',
    'option=' => 'int|null',
  ),
  'curl_init' => 
  array (
    0 => 'CurlHandle|false',
    'url=' => 'null|string',
  ),
  'curl_multi_add_handle' => 
  array (
    0 => 'int',
    'multi_handle' => 'CurlMultiHandle',
    'handle' => 'CurlHandle',
  ),
  'curl_multi_close' => 
  array (
    0 => 'void',
    'multi_handle' => 'CurlMultiHandle',
  ),
  'curl_multi_errno' => 
  array (
    0 => 'int',
    'multi_handle' => 'CurlMultiHandle',
  ),
  'curl_multi_exec' => 
  array (
    0 => 'int',
    'multi_handle' => 'CurlMultiHandle',
    '&w_still_running' => 'int',
  ),
  'curl_multi_getcontent' => 
  array (
    0 => 'null|string',
    'handle' => 'CurlHandle',
  ),
  'curl_multi_info_read' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'multi_handle' => 'CurlMultiHandle',
    '&w_queued_messages=' => 'int',
  ),
  'curl_multi_init' => 
  array (
    0 => 'CurlMultiHandle',
  ),
  'curl_multi_remove_handle' => 
  array (
    0 => 'int',
    'multi_handle' => 'CurlMultiHandle',
    'handle' => 'CurlHandle',
  ),
  'curl_multi_select' => 
  array (
    0 => 'int',
    'multi_handle' => 'CurlMultiHandle',
    'timeout=' => 'float',
  ),
  'curl_multi_setopt' => 
  array (
    0 => 'bool',
    'multi_handle' => 'CurlMultiHandle',
    'option' => 'int',
    'value' => 'mixed',
  ),
  'curl_multi_strerror' => 
  array (
    0 => 'null|string',
    'error_code' => 'int',
  ),
  'curl_pause' => 
  array (
    0 => 'int',
    'handle' => 'CurlHandle',
    'flags' => 'int',
  ),
  'curl_reset' => 
  array (
    0 => 'void',
    'handle' => 'CurlHandle',
  ),
  'curl_setopt' => 
  array (
    0 => 'bool',
    'handle' => 'CurlHandle',
    'option' => 'int',
    'value' => 'callable|mixed',
  ),
  'curl_setopt_array' => 
  array (
    0 => 'bool',
    'handle' => 'CurlHandle',
    'options' => 'array<array-key, mixed>',
  ),
  'curl_share_close' => 
  array (
    0 => 'void',
    'share_handle' => 'CurlShareHandle',
  ),
  'curl_share_errno' => 
  array (
    0 => 'int',
    'share_handle' => 'CurlShareHandle',
  ),
  'curl_share_init' => 
  array (
    0 => 'CurlShareHandle',
  ),
  'curl_share_setopt' => 
  array (
    0 => 'bool',
    'share_handle' => 'CurlShareHandle',
    'option' => 'int',
    'value' => 'mixed',
  ),
  'curl_share_strerror' => 
  array (
    0 => 'null|string',
    'error_code' => 'int',
  ),
  'curl_strerror' => 
  array (
    0 => 'null|string',
    'error_code' => 'int',
  ),
  'curl_unescape' => 
  array (
    0 => 'false|string',
    'handle' => 'CurlHandle',
    'string' => 'string',
  ),
  'curl_version' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'curlfile::__construct' => 
  array (
    0 => 'void',
    'filename' => 'string',
    'mime_type=' => 'null|string',
    'posted_filename=' => 'null|string',
  ),
  'curlfile::getfilename' => 
  array (
    0 => 'string',
  ),
  'curlfile::getmimetype' => 
  array (
    0 => 'string',
  ),
  'curlfile::getpostfilename' => 
  array (
    0 => 'string',
  ),
  'curlfile::setmimetype' => 
  array (
    0 => 'void',
    'mime_type' => 'string',
  ),
  'curlfile::setpostfilename' => 
  array (
    0 => 'void',
    'posted_filename' => 'string',
  ),
  'current' => 
  array (
    0 => 'false|mixed',
    'array' => 'array<array-key, mixed>',
  ),
  'cyrus_authenticate' => 
  array (
    0 => 'void',
    'connection' => 'resource',
    'mechlist=' => 'string',
    'service=' => 'string',
    'user=' => 'string',
    'minssf=' => 'int',
    'maxssf=' => 'int',
    'authname=' => 'string',
    'password=' => 'string',
  ),
  'cyrus_bind' => 
  array (
    0 => 'bool',
    'connection' => 'resource',
    'callbacks' => 'array<array-key, mixed>',
  ),
  'cyrus_close' => 
  array (
    0 => 'bool',
    'connection' => 'resource',
  ),
  'cyrus_connect' => 
  array (
    0 => 'resource',
    'host=' => 'string',
    'port=' => 'string',
    'flags=' => 'int',
  ),
  'cyrus_query' => 
  array (
    0 => 'array<array-key, mixed>',
    'connection' => 'resource',
    'query' => 'string',
  ),
  'cyrus_unbind' => 
  array (
    0 => 'bool',
    'connection' => 'resource',
    'trigger_name' => 'string',
  ),
  'date' => 
  array (
    0 => 'string',
    'format' => 'string',
    'timestamp=' => 'int|null',
  ),
  'date_add' => 
  array (
    0 => 'DateTime',
    'object' => 'DateTime',
    'interval' => 'DateInterval',
  ),
  'date_create' => 
  array (
    0 => 'DateTime|false',
    'datetime=' => 'string',
    'timezone=' => 'DateTimeZone|null',
  ),
  'date_create_from_format' => 
  array (
    0 => 'DateTime|false',
    'format' => 'string',
    'datetime' => 'string',
    'timezone=' => 'DateTimeZone|null',
  ),
  'date_create_immutable' => 
  array (
    0 => 'DateTimeImmutable|false',
    'datetime=' => 'string',
    'timezone=' => 'DateTimeZone|null',
  ),
  'date_create_immutable_from_format' => 
  array (
    0 => 'DateTimeImmutable|false',
    'format' => 'string',
    'datetime' => 'string',
    'timezone=' => 'DateTimeZone|null',
  ),
  'date_date_set' => 
  array (
    0 => 'DateTime',
    'object' => 'DateTime',
    'year' => 'int',
    'month' => 'int',
    'day' => 'int',
  ),
  'date_default_timezone_get' => 
  array (
    0 => 'non-empty-string',
  ),
  'date_default_timezone_set' => 
  array (
    0 => 'bool',
    'timezoneId' => 'non-empty-string',
  ),
  'date_diff' => 
  array (
    0 => 'DateInterval',
    'baseObject' => 'DateTimeInterface',
    'targetObject' => 'DateTimeInterface',
    'absolute=' => 'bool',
  ),
  'date_format' => 
  array (
    0 => 'string',
    'object' => 'DateTimeInterface',
    'format' => 'string',
  ),
  'date_get_last_errors' => 
  array (
    0 => 'array{error_count: int, errors: array<int, string>, warning_count: int, warnings: array<int, string>}|false',
  ),
  'date_interval_create_from_date_string' => 
  array (
    0 => 'DateInterval',
    'datetime' => 'string',
  ),
  'date_interval_format' => 
  array (
    0 => 'string',
    'object' => 'DateInterval',
    'format' => 'string',
  ),
  'date_isodate_set' => 
  array (
    0 => 'DateTime',
    'object' => 'DateTime',
    'year' => 'int',
    'week' => 'int',
    'dayOfWeek=' => 'int',
  ),
  'date_modify' => 
  array (
    0 => 'DateTime|false',
    'object' => 'DateTime',
    'modifier' => 'string',
  ),
  'date_offset_get' => 
  array (
    0 => 'int',
    'object' => 'DateTimeInterface',
  ),
  'date_parse' => 
  array (
    0 => 'array<array-key, mixed>',
    'datetime' => 'string',
  ),
  'date_parse_from_format' => 
  array (
    0 => 'array<array-key, mixed>',
    'format' => 'string',
    'datetime' => 'string',
  ),
  'date_sub' => 
  array (
    0 => 'DateTime',
    'object' => 'DateTime',
    'interval' => 'DateInterval',
  ),
  'date_sun_info' => 
  array (
    0 => 'array<array-key, mixed>',
    'timestamp' => 'int',
    'latitude' => 'float',
    'longitude' => 'float',
  ),
  'date_sunrise' => 
  array (
    0 => 'false|float|int|string',
    'timestamp' => 'int',
    'returnFormat=' => 'int',
    'latitude=' => 'float|null',
    'longitude=' => 'float|null',
    'zenith=' => 'float|null',
    'utcOffset=' => 'float|null',
  ),
  'date_sunset' => 
  array (
    0 => 'false|float|int|string',
    'timestamp' => 'int',
    'returnFormat=' => 'int',
    'latitude=' => 'float|null',
    'longitude=' => 'float|null',
    'zenith=' => 'float|null',
    'utcOffset=' => 'float|null',
  ),
  'date_timestamp_get' => 
  array (
    0 => 'int',
    'object' => 'DateTimeInterface',
  ),
  'date_timestamp_set' => 
  array (
    0 => 'DateTime',
    'object' => 'DateTime',
    'timestamp' => 'int',
  ),
  'date_timezone_get' => 
  array (
    0 => 'DateTimeZone|false',
    'object' => 'DateTimeInterface',
  ),
  'date_timezone_set' => 
  array (
    0 => 'DateTime',
    'object' => 'DateTime',
    'timezone' => 'DateTimeZone',
  ),
  'datefmt_create' => 
  array (
    0 => 'IntlDateFormatter|null',
    'locale' => 'null|string',
    'dateType=' => 'int',
    'timeType=' => 'int',
    'timezone=' => 'DateTimeZone|IntlTimeZone|null|string',
    'calendar=' => 'IntlCalendar|int|null',
    'pattern=' => 'null|string',
  ),
  'datefmt_format' => 
  array (
    0 => 'false|string',
    'formatter' => 'IntlDateFormatter',
    'datetime' => 'DateTime|IntlCalendar|array<array-key, mixed>|int',
  ),
  'datefmt_format_object' => 
  array (
    0 => 'false|string',
    'datetime' => 'object',
    'format=' => 'mixed',
    'locale=' => 'null|string',
  ),
  'datefmt_get_calendar' => 
  array (
    0 => 'int',
    'formatter' => 'IntlDateFormatter',
  ),
  'datefmt_get_calendar_object' => 
  array (
    0 => 'IntlCalendar|false|null',
    'formatter' => 'IntlDateFormatter',
  ),
  'datefmt_get_datetype' => 
  array (
    0 => 'int',
    'formatter' => 'IntlDateFormatter',
  ),
  'datefmt_get_error_code' => 
  array (
    0 => 'int',
    'formatter' => 'IntlDateFormatter',
  ),
  'datefmt_get_error_message' => 
  array (
    0 => 'string',
    'formatter' => 'IntlDateFormatter',
  ),
  'datefmt_get_locale' => 
  array (
    0 => 'false|string',
    'formatter' => 'IntlDateFormatter',
    'type=' => 'int',
  ),
  'datefmt_get_pattern' => 
  array (
    0 => 'string',
    'formatter' => 'IntlDateFormatter',
  ),
  'datefmt_get_timetype' => 
  array (
    0 => 'int',
    'formatter' => 'IntlDateFormatter',
  ),
  'datefmt_get_timezone' => 
  array (
    0 => 'IntlTimeZone|false',
    'formatter' => 'IntlDateFormatter',
  ),
  'datefmt_get_timezone_id' => 
  array (
    0 => 'false|string',
    'formatter' => 'IntlDateFormatter',
  ),
  'datefmt_is_lenient' => 
  array (
    0 => 'bool',
    'formatter' => 'IntlDateFormatter',
  ),
  'datefmt_localtime' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'formatter' => 'IntlDateFormatter',
    'string' => 'string',
    '&offset=' => 'int',
  ),
  'datefmt_parse' => 
  array (
    0 => 'false|float|int',
    'formatter' => 'IntlDateFormatter',
    'string' => 'string',
    '&offset=' => 'int',
  ),
  'datefmt_set_calendar' => 
  array (
    0 => 'bool',
    'formatter' => 'IntlDateFormatter',
    'calendar' => 'IntlCalendar|int|null',
  ),
  'datefmt_set_lenient' => 
  array (
    0 => 'void',
    'formatter' => 'IntlDateFormatter',
    'lenient' => 'bool',
  ),
  'datefmt_set_pattern' => 
  array (
    0 => 'bool',
    'formatter' => 'IntlDateFormatter',
    'pattern' => 'string',
  ),
  'datefmt_set_timezone' => 
  array (
    0 => 'bool',
    'formatter' => 'IntlDateFormatter',
    'timezone' => 'DateTimeZone|IntlTimeZone|null|string',
  ),
  'dateinterval::__construct' => 
  array (
    0 => 'void',
    'duration' => 'string',
  ),
  'dateinterval::__set_state' => 
  array (
    0 => 'DateInterval',
    'array' => 'array<array-key, mixed>',
  ),
  'dateinterval::__wakeup' => 
  array (
    0 => 'void',
  ),
  'dateinterval::createfromdatestring' => 
  array (
    0 => 'DateInterval',
    'datetime' => 'string',
  ),
  'dateinterval::format' => 
  array (
    0 => 'string',
    'format' => 'string',
  ),
  'dateperiod::__construct' => 
  array (
    0 => 'void',
    'start' => 'DateTimeInterface',
    'interval=' => 'DateInterval',
    'end=' => 'int',
    'options=' => 'int',
  ),
  'dateperiod::__construct\'1' => 
  array (
    0 => 'void',
    'start' => 'DateTimeInterface',
    'interval' => 'DateInterval',
    'end' => 'DateTimeInterface',
    'options=' => 'int',
  ),
  'dateperiod::__construct\'2' => 
  array (
    0 => 'void',
    'iso' => 'string',
    'options=' => 'int',
  ),
  'dateperiod::__wakeup' => 
  array (
    0 => 'void',
  ),
  'dateperiod::getdateinterval' => 
  array (
    0 => 'DateInterval',
  ),
  'dateperiod::getenddate' => 
  array (
    0 => 'DateTimeInterface|null',
  ),
  'dateperiod::getstartdate' => 
  array (
    0 => 'DateTimeInterface',
  ),
  'datetime::__construct' => 
  array (
    0 => 'void',
    'datetime=' => 'string',
    'timezone=' => 'DateTimeZone|null',
  ),
  'datetime::__construct\'1' => 
  array (
    0 => 'void',
    'time' => 'null|string',
    'timezone' => 'DateTimeZone|null',
  ),
  'datetime::__wakeup' => 
  array (
    0 => 'void',
  ),
  'datetime::add' => 
  array (
    0 => 'static',
    'interval' => 'DateInterval',
  ),
  'datetime::createfromformat' => 
  array (
    0 => 'false|static',
    'format' => 'string',
    'datetime' => 'string',
    'timezone=' => 'DateTimeZone|null',
  ),
  'datetime::createfromimmutable' => 
  array (
    0 => 'static',
    'object' => 'DateTimeImmutable',
  ),
  'datetime::createfrominterface' => 
  array (
    0 => 'static',
    'object' => 'DateTimeInterface',
  ),
  'datetime::diff' => 
  array (
    0 => 'DateInterval',
    'targetObject' => 'DateTimeInterface',
    'absolute=' => 'bool',
  ),
  'datetime::format' => 
  array (
    0 => 'string',
    'format' => 'string',
  ),
  'datetime::getlasterrors' => 
  array (
    0 => 'array{error_count: int, errors: array<int, string>, warning_count: int, warnings: array<int, string>}|false',
  ),
  'datetime::getoffset' => 
  array (
    0 => 'int',
  ),
  'datetime::gettimestamp' => 
  array (
    0 => 'int',
  ),
  'datetime::gettimezone' => 
  array (
    0 => 'DateTimeZone|false',
  ),
  'datetime::modify' => 
  array (
    0 => 'false|static',
    'modifier' => 'string',
  ),
  'datetime::setdate' => 
  array (
    0 => 'static',
    'year' => 'int',
    'month' => 'int',
    'day' => 'int',
  ),
  'datetime::setisodate' => 
  array (
    0 => 'static',
    'year' => 'int',
    'week' => 'int',
    'dayOfWeek=' => 'int',
  ),
  'datetime::settime' => 
  array (
    0 => 'static',
    'hour' => 'int',
    'minute' => 'int',
    'second=' => 'int',
    'microsecond=' => 'int',
  ),
  'datetime::settimestamp' => 
  array (
    0 => 'static',
    'timestamp' => 'int',
  ),
  'datetime::settimezone' => 
  array (
    0 => 'static',
    'timezone' => 'DateTimeZone',
  ),
  'datetime::sub' => 
  array (
    0 => 'static',
    'interval' => 'DateInterval',
  ),
  'datetimeimmutable::__wakeup' => 
  array (
    0 => 'void',
  ),
  'datetimeimmutable::createfrominterface' => 
  array (
    0 => 'static',
    'object' => 'DateTimeInterface',
  ),
  'datetimeimmutable::getlasterrors' => 
  array (
    0 => 'array{error_count: int, errors: array<int, string>, warning_count: int, warnings: array<int, string>}|false',
  ),
  'datetimeinterface::__serialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'datetimeinterface::__unserialize' => 
  array (
    0 => 'void',
    'data' => 'array<array-key, mixed>',
  ),
  'datetimeinterface::diff' => 
  array (
    0 => 'DateInterval',
    'datetime2' => 'DateTimeInterface',
    'absolute=' => 'bool',
  ),
  'datetimeinterface::format' => 
  array (
    0 => 'string',
    'format' => 'string',
  ),
  'datetimeinterface::getoffset' => 
  array (
    0 => 'int',
  ),
  'datetimeinterface::gettimestamp' => 
  array (
    0 => 'int',
  ),
  'datetimeinterface::gettimezone' => 
  array (
    0 => 'DateTimeZone|false',
  ),
  'datetimezone::__construct' => 
  array (
    0 => 'void',
    'timezone' => 'non-empty-string',
  ),
  'datetimezone::__set_state' => 
  array (
    0 => 'DateTimeZone',
    'array' => 'array<array-key, mixed>',
  ),
  'datetimezone::__wakeup' => 
  array (
    0 => 'void',
  ),
  'datetimezone::getlocation' => 
  array (
    0 => 'array<array-key, mixed>|false',
  ),
  'datetimezone::getname' => 
  array (
    0 => 'non-empty-string',
  ),
  'datetimezone::getoffset' => 
  array (
    0 => 'int',
    'datetime' => 'DateTimeInterface',
  ),
  'datetimezone::gettransitions' => 
  array (
    0 => 'false|list<array{abbr: string, isdst: bool, offset: int, time: string, ts: int}>',
    'timestampBegin=' => 'int',
    'timestampEnd=' => 'int',
  ),
  'datetimezone::listabbreviations' => 
  array (
    0 => 'array<string, list<array{dst: bool, offset: int, timezone_id: null|string}>>',
  ),
  'datetimezone::listidentifiers' => 
  array (
    0 => 'list<string>',
    'timezoneGroup=' => 'int',
    'countryCode=' => 'null|string',
  ),
  'db2_autocommit' => 
  array (
    0 => '0|1|bool',
    'connection' => 'resource',
    'value=' => '0|1|null',
  ),
  'db2_bind_param' => 
  array (
    0 => 'bool',
    'stmt' => 'resource',
    'parameter_number' => 'int',
    'variable_name' => 'string',
    'parameter_type=' => 'int',
    'data_type=' => 'int',
    'precision=' => 'int',
    'scale=' => 'int',
  ),
  'db2_client_info' => 
  array (
    0 => 'false|stdClass',
    'connection' => 'resource',
  ),
  'db2_close' => 
  array (
    0 => 'bool',
    'connection' => 'resource',
  ),
  'db2_column_privileges' => 
  array (
    0 => 'false|resource',
    'connection' => 'resource',
    'qualifier=' => 'null|string',
    'schema=' => 'null|string',
    'table_name=' => 'null|string',
    'column_name=' => 'null|string',
  ),
  'db2_columns' => 
  array (
    0 => 'false|resource',
    'connection' => 'resource',
    'qualifier=' => 'null|string',
    'schema=' => 'null|string',
    'table_name=' => 'null|string',
    'column_name=' => 'null|string',
  ),
  'db2_commit' => 
  array (
    0 => 'bool',
    'connection' => 'resource',
  ),
  'db2_conn_error' => 
  array (
    0 => 'string',
    'connection=' => 'resource',
  ),
  'db2_conn_errormsg' => 
  array (
    0 => 'string',
    'connection=' => 'resource',
  ),
  'db2_connect' => 
  array (
    0 => 'false|resource',
    'database' => 'string',
    'username' => 'null|string',
    'password' => 'null|string',
    'options=' => 'array<array-key, mixed>',
  ),
  'db2_cursor_type' => 
  array (
    0 => 'int',
    'stmt' => 'resource',
  ),
  'db2_exec' => 
  array (
    0 => 'false|resource',
    'connection' => 'resource',
    'statement' => 'string',
    'options=' => 'array<array-key, mixed>',
  ),
  'db2_execute' => 
  array (
    0 => 'bool',
    'stmt' => 'resource',
    'parameters=' => 'array<array-key, mixed>',
  ),
  'db2_fetch_array' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'stmt' => 'resource',
    'row_number=' => 'int|null',
  ),
  'db2_fetch_assoc' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'stmt' => 'resource',
    'row_number=' => 'int|null',
  ),
  'db2_fetch_both' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'stmt' => 'resource',
    'row_number=' => 'int|null',
  ),
  'db2_fetch_object' => 
  array (
    0 => 'false|stdClass',
    'stmt' => 'resource',
    'row_number=' => 'int|null',
  ),
  'db2_fetch_row' => 
  array (
    0 => 'bool',
    'stmt' => 'resource',
    'row_number=' => 'int|null',
  ),
  'db2_field_display_size' => 
  array (
    0 => 'false|int',
    'stmt' => 'resource',
    'column' => 'int|string',
  ),
  'db2_field_name' => 
  array (
    0 => 'false|string',
    'stmt' => 'resource',
    'column' => 'int|string',
  ),
  'db2_field_num' => 
  array (
    0 => 'false|int',
    'stmt' => 'resource',
    'column' => 'int|string',
  ),
  'db2_field_precision' => 
  array (
    0 => 'false|int',
    'stmt' => 'resource',
    'column' => 'int|string',
  ),
  'db2_field_scale' => 
  array (
    0 => 'false|int',
    'stmt' => 'resource',
    'column' => 'int|string',
  ),
  'db2_field_type' => 
  array (
    0 => 'false|string',
    'stmt' => 'resource',
    'column' => 'int|string',
  ),
  'db2_field_width' => 
  array (
    0 => 'false|int',
    'stmt' => 'resource',
    'column' => 'int|string',
  ),
  'db2_foreign_keys' => 
  array (
    0 => 'false|resource',
    'connection' => 'resource',
    'qualifier' => 'null|string',
    'schema' => 'null|string',
    'table_name' => 'string',
  ),
  'db2_free_result' => 
  array (
    0 => 'bool',
    'stmt' => 'resource',
  ),
  'db2_free_stmt' => 
  array (
    0 => 'bool',
    'stmt' => 'resource',
  ),
  'db2_get_option' => 
  array (
    0 => 'false|string',
    'resource' => 'resource',
    'option' => 'string',
  ),
  'db2_last_insert_id' => 
  array (
    0 => 'null|string',
    'resource' => 'resource',
  ),
  'db2_lob_read' => 
  array (
    0 => 'false|string',
    'stmt' => 'resource',
    'colnum' => 'int',
    'length' => 'int',
  ),
  'db2_next_result' => 
  array (
    0 => 'false|resource',
    'stmt' => 'resource',
  ),
  'db2_num_fields' => 
  array (
    0 => 'false|int',
    'stmt' => 'resource',
  ),
  'db2_num_rows' => 
  array (
    0 => 'false|int',
    'stmt' => 'resource',
  ),
  'db2_pclose' => 
  array (
    0 => 'bool',
    'connection' => 'resource',
  ),
  'db2_pconnect' => 
  array (
    0 => 'false|resource',
    'database' => 'string',
    'username' => 'null|string',
    'password' => 'null|string',
    'options=' => 'array<array-key, mixed>',
  ),
  'db2_prepare' => 
  array (
    0 => 'false|resource',
    'connection' => 'resource',
    'statement' => 'string',
    'options=' => 'array<array-key, mixed>',
  ),
  'db2_primary_keys' => 
  array (
    0 => 'false|resource',
    'connection' => 'resource',
    'qualifier' => 'null|string',
    'schema' => 'null|string',
    'table_name' => 'string',
  ),
  'db2_procedure_columns' => 
  array (
    0 => 'false|resource',
    'connection' => 'resource',
    'qualifier' => 'null|string',
    'schema' => 'string',
    'procedure' => 'string',
    'parameter' => 'null|string',
  ),
  'db2_procedures' => 
  array (
    0 => 'false|resource',
    'connection' => 'resource',
    'qualifier' => 'null|string',
    'schema' => 'string',
    'procedure' => 'string',
  ),
  'db2_result' => 
  array (
    0 => 'mixed',
    'stmt' => 'resource',
    'column' => 'int|string',
  ),
  'db2_rollback' => 
  array (
    0 => 'bool',
    'connection' => 'resource',
  ),
  'db2_server_info' => 
  array (
    0 => 'false|stdClass',
    'connection' => 'resource',
  ),
  'db2_set_option' => 
  array (
    0 => 'bool',
    'resource' => 'resource',
    'options' => 'array<array-key, mixed>',
    'type' => 'int',
  ),
  'db2_special_columns' => 
  array (
    0 => 'false|resource',
    'connection' => 'resource',
    'qualifier' => 'null|string',
    'schema' => 'string',
    'table_name' => 'string',
    'scope' => 'int',
  ),
  'db2_statistics' => 
  array (
    0 => 'false|resource',
    'connection' => 'resource',
    'qualifier' => 'null|string',
    'schema' => 'null|string',
    'table_name' => 'string',
    'unique' => 'bool',
  ),
  'db2_stmt_error' => 
  array (
    0 => 'string',
    'stmt=' => 'resource',
  ),
  'db2_stmt_errormsg' => 
  array (
    0 => 'string',
    'stmt=' => 'resource',
  ),
  'db2_table_privileges' => 
  array (
    0 => 'false|resource',
    'connection' => 'resource',
    'qualifier=' => 'null|string',
    'schema=' => 'null|string',
    'table_name=' => 'null|string',
  ),
  'db2_tables' => 
  array (
    0 => 'false|resource',
    'connection' => 'resource',
    'qualifier=' => 'null|string',
    'schema=' => 'null|string',
    'table_name=' => 'null|string',
    'table_type=' => 'null|string',
  ),
  'dba_close' => 
  array (
    0 => 'void',
    'dba' => 'resource',
  ),
  'dba_delete' => 
  array (
    0 => 'bool',
    'key' => 'array<array-key, mixed>|string',
    'dba' => 'resource',
  ),
  'dba_exists' => 
  array (
    0 => 'bool',
    'key' => 'array<array-key, mixed>|string',
    'dba' => 'resource',
  ),
  'dba_fetch' => 
  array (
    0 => 'false|string',
    'key' => 'array<array-key, mixed>|string',
    'skip' => 'int',
    'dba' => 'resource',
  ),
  'dba_fetch\'1' => 
  array (
    0 => 'false|string',
    'key' => 'array<array-key, mixed>|string',
    'skip' => 'resource',
  ),
  'dba_firstkey' => 
  array (
    0 => 'string',
    'dba' => 'resource',
  ),
  'dba_handlers' => 
  array (
    0 => 'array<array-key, mixed>',
    'full_info=' => 'bool',
  ),
  'dba_insert' => 
  array (
    0 => 'bool',
    'key' => 'array<array-key, mixed>|string',
    'value' => 'string',
    'dba' => 'resource',
  ),
  'dba_key_split' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'key' => 'false|null|string',
  ),
  'dba_list' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'dba_nextkey' => 
  array (
    0 => 'string',
    'dba' => 'resource',
  ),
  'dba_open' => 
  array (
    0 => 'resource',
    'path' => 'string',
    'mode' => 'string',
    'handler=' => 'null|string',
    'permission=' => 'int',
    'map_size=' => 'int',
    'flags=' => 'int|null',
  ),
  'dba_optimize' => 
  array (
    0 => 'bool',
    'dba' => 'resource',
  ),
  'dba_popen' => 
  array (
    0 => 'resource',
    'path' => 'string',
    'mode' => 'string',
    'handler=' => 'null|string',
    'permission=' => 'int',
    'map_size=' => 'int',
    'flags=' => 'int|null',
  ),
  'dba_replace' => 
  array (
    0 => 'bool',
    'key' => 'array<array-key, mixed>|string',
    'value' => 'string',
    'dba' => 'resource',
  ),
  'dba_sync' => 
  array (
    0 => 'bool',
    'dba' => 'resource',
  ),
  'dbase_add_record' => 
  array (
    0 => 'bool',
    'dbase_identifier' => 'resource',
    'record' => 'array<array-key, mixed>',
  ),
  'dbase_close' => 
  array (
    0 => 'bool',
    'dbase_identifier' => 'resource',
  ),
  'dbase_create' => 
  array (
    0 => 'false|resource',
    'filename' => 'string',
    'fields' => 'array<array-key, mixed>',
  ),
  'dbase_delete_record' => 
  array (
    0 => 'bool',
    'dbase_identifier' => 'resource',
    'record_number' => 'int',
  ),
  'dbase_get_header_info' => 
  array (
    0 => 'array<array-key, mixed>',
    'dbase_identifier' => 'resource',
  ),
  'dbase_get_record' => 
  array (
    0 => 'array<array-key, mixed>',
    'dbase_identifier' => 'resource',
    'record_number' => 'int',
  ),
  'dbase_get_record_with_names' => 
  array (
    0 => 'array<array-key, mixed>',
    'dbase_identifier' => 'resource',
    'record_number' => 'int',
  ),
  'dbase_numfields' => 
  array (
    0 => 'int',
    'dbase_identifier' => 'resource',
  ),
  'dbase_numrecords' => 
  array (
    0 => 'int',
    'dbase_identifier' => 'resource',
  ),
  'dbase_open' => 
  array (
    0 => 'false|resource',
    'filename' => 'string',
    'mode' => 'int',
  ),
  'dbase_pack' => 
  array (
    0 => 'bool',
    'dbase_identifier' => 'resource',
  ),
  'dbase_replace_record' => 
  array (
    0 => 'bool',
    'dbase_identifier' => 'resource',
    'record' => 'array<array-key, mixed>',
    'record_number' => 'int',
  ),
  'dbplus_add' => 
  array (
    0 => 'int',
    'relation' => 'resource',
    'tuple' => 'array<array-key, mixed>',
  ),
  'dbplus_aql' => 
  array (
    0 => 'resource',
    'query' => 'string',
    'server=' => 'string',
    'dbpath=' => 'string',
  ),
  'dbplus_chdir' => 
  array (
    0 => 'string',
    'newdir=' => 'string',
  ),
  'dbplus_close' => 
  array (
    0 => 'mixed',
    'relation' => 'resource',
  ),
  'dbplus_curr' => 
  array (
    0 => 'int',
    'relation' => 'resource',
    'tuple' => 'array<array-key, mixed>',
  ),
  'dbplus_errcode' => 
  array (
    0 => 'string',
    'errno=' => 'int',
  ),
  'dbplus_errno' => 
  array (
    0 => 'int',
  ),
  'dbplus_find' => 
  array (
    0 => 'int',
    'relation' => 'resource',
    'constraints' => 'array<array-key, mixed>',
    'tuple' => 'mixed',
  ),
  'dbplus_first' => 
  array (
    0 => 'int',
    'relation' => 'resource',
    'tuple' => 'array<array-key, mixed>',
  ),
  'dbplus_flush' => 
  array (
    0 => 'int',
    'relation' => 'resource',
  ),
  'dbplus_freealllocks' => 
  array (
    0 => 'int',
  ),
  'dbplus_freelock' => 
  array (
    0 => 'int',
    'relation' => 'resource',
    'tuple' => 'string',
  ),
  'dbplus_freerlocks' => 
  array (
    0 => 'int',
    'relation' => 'resource',
  ),
  'dbplus_getlock' => 
  array (
    0 => 'int',
    'relation' => 'resource',
    'tuple' => 'string',
  ),
  'dbplus_getunique' => 
  array (
    0 => 'int',
    'relation' => 'resource',
    'uniqueid' => 'int',
  ),
  'dbplus_info' => 
  array (
    0 => 'int',
    'relation' => 'resource',
    'key' => 'string',
    'result' => 'array<array-key, mixed>',
  ),
  'dbplus_last' => 
  array (
    0 => 'int',
    'relation' => 'resource',
    'tuple' => 'array<array-key, mixed>',
  ),
  'dbplus_lockrel' => 
  array (
    0 => 'int',
    'relation' => 'resource',
  ),
  'dbplus_next' => 
  array (
    0 => 'int',
    'relation' => 'resource',
    'tuple' => 'array<array-key, mixed>',
  ),
  'dbplus_open' => 
  array (
    0 => 'resource',
    'name' => 'string',
  ),
  'dbplus_prev' => 
  array (
    0 => 'int',
    'relation' => 'resource',
    'tuple' => 'array<array-key, mixed>',
  ),
  'dbplus_rchperm' => 
  array (
    0 => 'int',
    'relation' => 'resource',
    'mask' => 'int',
    'user' => 'string',
    'group' => 'string',
  ),
  'dbplus_rcreate' => 
  array (
    0 => 'resource',
    'name' => 'string',
    'domlist' => 'mixed',
    'overwrite=' => 'bool',
  ),
  'dbplus_rcrtexact' => 
  array (
    0 => 'mixed',
    'name' => 'string',
    'relation' => 'resource',
    'overwrite=' => 'bool',
  ),
  'dbplus_rcrtlike' => 
  array (
    0 => 'mixed',
    'name' => 'string',
    'relation' => 'resource',
    'overwrite=' => 'int',
  ),
  'dbplus_resolve' => 
  array (
    0 => 'array<array-key, mixed>',
    'relation_name' => 'string',
  ),
  'dbplus_restorepos' => 
  array (
    0 => 'int',
    'relation' => 'resource',
    'tuple' => 'array<array-key, mixed>',
  ),
  'dbplus_rkeys' => 
  array (
    0 => 'mixed',
    'relation' => 'resource',
    'domlist' => 'mixed',
  ),
  'dbplus_ropen' => 
  array (
    0 => 'resource',
    'name' => 'string',
  ),
  'dbplus_rquery' => 
  array (
    0 => 'resource',
    'query' => 'string',
    'dbpath=' => 'string',
  ),
  'dbplus_rrename' => 
  array (
    0 => 'int',
    'relation' => 'resource',
    'name' => 'string',
  ),
  'dbplus_rsecindex' => 
  array (
    0 => 'mixed',
    'relation' => 'resource',
    'domlist' => 'mixed',
    'type' => 'int',
  ),
  'dbplus_runlink' => 
  array (
    0 => 'int',
    'relation' => 'resource',
  ),
  'dbplus_rzap' => 
  array (
    0 => 'int',
    'relation' => 'resource',
  ),
  'dbplus_savepos' => 
  array (
    0 => 'int',
    'relation' => 'resource',
  ),
  'dbplus_setindex' => 
  array (
    0 => 'int',
    'relation' => 'resource',
    'idx_name' => 'string',
  ),
  'dbplus_setindexbynumber' => 
  array (
    0 => 'int',
    'relation' => 'resource',
    'idx_number' => 'int',
  ),
  'dbplus_sql' => 
  array (
    0 => 'resource',
    'query' => 'string',
    'server=' => 'string',
    'dbpath=' => 'string',
  ),
  'dbplus_tcl' => 
  array (
    0 => 'string',
    'sid' => 'int',
    'script' => 'string',
  ),
  'dbplus_tremove' => 
  array (
    0 => 'int',
    'relation' => 'resource',
    'tuple' => 'array<array-key, mixed>',
    'current=' => 'array<array-key, mixed>',
  ),
  'dbplus_undo' => 
  array (
    0 => 'int',
    'relation' => 'resource',
  ),
  'dbplus_undoprepare' => 
  array (
    0 => 'int',
    'relation' => 'resource',
  ),
  'dbplus_unlockrel' => 
  array (
    0 => 'int',
    'relation' => 'resource',
  ),
  'dbplus_unselect' => 
  array (
    0 => 'int',
    'relation' => 'resource',
  ),
  'dbplus_update' => 
  array (
    0 => 'int',
    'relation' => 'resource',
    'old' => 'array<array-key, mixed>',
    'new' => 'array<array-key, mixed>',
  ),
  'dbplus_xlockrel' => 
  array (
    0 => 'int',
    'relation' => 'resource',
  ),
  'dbplus_xunlockrel' => 
  array (
    0 => 'int',
    'relation' => 'resource',
  ),
  'dbx_close' => 
  array (
    0 => 'int',
    'link_identifier' => 'object',
  ),
  'dbx_compare' => 
  array (
    0 => 'int',
    'row_a' => 'array<array-key, mixed>',
    'row_b' => 'array<array-key, mixed>',
    'column_key' => 'string',
    'flags=' => 'int',
  ),
  'dbx_connect' => 
  array (
    0 => 'object',
    'module' => 'mixed',
    'host' => 'string',
    'database' => 'string',
    'username' => 'string',
    'password' => 'string',
    'persistent=' => 'int',
  ),
  'dbx_error' => 
  array (
    0 => 'string',
    'link_identifier' => 'object',
  ),
  'dbx_escape_string' => 
  array (
    0 => 'string',
    'link_identifier' => 'object',
    'text' => 'string',
  ),
  'dbx_fetch_row' => 
  array (
    0 => 'mixed',
    'result_identifier' => 'object',
  ),
  'dbx_query' => 
  array (
    0 => 'mixed',
    'link_identifier' => 'object',
    'sql_statement' => 'string',
    'flags=' => 'int',
  ),
  'dbx_sort' => 
  array (
    0 => 'bool',
    'result' => 'object',
    'user_compare_function' => 'string',
  ),
  'dcgettext' => 
  array (
    0 => 'string',
    'domain' => 'string',
    'message' => 'string',
    'category' => 'int',
  ),
  'dcngettext' => 
  array (
    0 => 'string',
    'domain' => 'string',
    'singular' => 'string',
    'plural' => 'string',
    'count' => 'int',
    'category' => 'int',
  ),
  'deaggregate' => 
  array (
    0 => 'mixed',
    'object' => 'object',
    'class_name=' => 'string',
  ),
  'debug_backtrace' => 
  array (
    0 => 'list<array{args?: list<mixed>, class?: class-string, file?: string, function: string, line?: int, object?: object, type?: string}>',
    'options=' => 'int',
    'limit=' => 'int',
  ),
  'debug_print_backtrace' => 
  array (
    0 => 'void',
    'options=' => 'int',
    'limit=' => 'int',
  ),
  'debugger_connect' => 
  array (
    0 => 'mixed',
  ),
  'debugger_connector_pid' => 
  array (
    0 => 'mixed',
  ),
  'debugger_get_server_start_time' => 
  array (
    0 => 'mixed',
  ),
  'debugger_print' => 
  array (
    0 => 'mixed',
  ),
  'debugger_start_debug' => 
  array (
    0 => 'mixed',
  ),
  'decbin' => 
  array (
    0 => 'string',
    'num' => 'int',
  ),
  'dechex' => 
  array (
    0 => 'string',
    'num' => 'int',
  ),
  'decoct' => 
  array (
    0 => 'string',
    'num' => 'int',
  ),
  'define' => 
  array (
    0 => 'bool',
    'constant_name' => 'string',
    'value' => 'array<array-key, mixed>|null|scalar',
    'case_insensitive=' => 'false',
  ),
  'define_syslog_variables' => 
  array (
    0 => 'void',
  ),
  'defined' => 
  array (
    0 => 'bool',
    'constant_name' => 'string',
  ),
  'deflate_add' => 
  array (
    0 => 'false|string',
    'context' => 'DeflateContext',
    'data' => 'string',
    'flush_mode=' => 'int',
  ),
  'deflate_init' => 
  array (
    0 => 'DeflateContext|false',
    'encoding' => 'int',
    'options=' => 'array<array-key, mixed>',
  ),
  'deg2rad' => 
  array (
    0 => 'float',
    'num' => 'float',
  ),
  'dgettext' => 
  array (
    0 => 'string',
    'domain' => 'string',
    'message' => 'string',
  ),
  'dio_close' => 
  array (
    0 => 'void',
    'fd' => 'resource',
  ),
  'dio_fcntl' => 
  array (
    0 => 'mixed',
    'fd' => 'resource',
    'cmd' => 'int',
    'args=' => 'mixed',
  ),
  'dio_open' => 
  array (
    0 => 'false|resource',
    'filename' => 'string',
    'flags' => 'int',
    'mode=' => 'int',
  ),
  'dio_read' => 
  array (
    0 => 'string',
    'fd' => 'resource',
    'length=' => 'int',
  ),
  'dio_seek' => 
  array (
    0 => 'int',
    'fd' => 'resource',
    'pos' => 'int',
    'whence=' => 'int',
  ),
  'dio_stat' => 
  array (
    0 => 'array<array-key, mixed>|null',
    'fd' => 'resource',
  ),
  'dio_tcsetattr' => 
  array (
    0 => 'bool',
    'fd' => 'resource',
    'options' => 'array<array-key, mixed>',
  ),
  'dio_truncate' => 
  array (
    0 => 'bool',
    'fd' => 'resource',
    'offset' => 'int',
  ),
  'dio_write' => 
  array (
    0 => 'int',
    'fd' => 'resource',
    'data' => 'string',
    'length=' => 'int',
  ),
  'dir' => 
  array (
    0 => 'Directory|false',
    'directory' => 'string',
    'context=' => 'resource',
  ),
  'directory::close' => 
  array (
    0 => 'void',
  ),
  'directory::read' => 
  array (
    0 => 'false|string',
  ),
  'directory::rewind' => 
  array (
    0 => 'void',
  ),
  'directoryiterator::__construct' => 
  array (
    0 => 'void',
    'directory' => 'string',
  ),
  'directoryiterator::__tostring' => 
  array (
    0 => 'string',
  ),
  'directoryiterator::current' => 
  array (
    0 => 'DirectoryIterator',
  ),
  'directoryiterator::getatime' => 
  array (
    0 => 'int',
  ),
  'directoryiterator::getbasename' => 
  array (
    0 => 'string',
    'suffix=' => 'string',
  ),
  'directoryiterator::getctime' => 
  array (
    0 => 'int',
  ),
  'directoryiterator::getextension' => 
  array (
    0 => 'string',
  ),
  'directoryiterator::getfileinfo' => 
  array (
    0 => 'SplFileInfo',
    'class=' => 'class-string|null',
  ),
  'directoryiterator::getfilename' => 
  array (
    0 => 'string',
  ),
  'directoryiterator::getgroup' => 
  array (
    0 => 'int',
  ),
  'directoryiterator::getinode' => 
  array (
    0 => 'int',
  ),
  'directoryiterator::getlinktarget' => 
  array (
    0 => 'string',
  ),
  'directoryiterator::getmtime' => 
  array (
    0 => 'int',
  ),
  'directoryiterator::getowner' => 
  array (
    0 => 'int',
  ),
  'directoryiterator::getpath' => 
  array (
    0 => 'string',
  ),
  'directoryiterator::getpathinfo' => 
  array (
    0 => 'SplFileInfo|null',
    'class=' => 'class-string|null',
  ),
  'directoryiterator::getpathname' => 
  array (
    0 => 'string',
  ),
  'directoryiterator::getperms' => 
  array (
    0 => 'int',
  ),
  'directoryiterator::getrealpath' => 
  array (
    0 => 'non-falsy-string',
  ),
  'directoryiterator::getsize' => 
  array (
    0 => 'int',
  ),
  'directoryiterator::gettype' => 
  array (
    0 => 'string',
  ),
  'directoryiterator::isdir' => 
  array (
    0 => 'bool',
  ),
  'directoryiterator::isdot' => 
  array (
    0 => 'bool',
  ),
  'directoryiterator::isexecutable' => 
  array (
    0 => 'bool',
  ),
  'directoryiterator::isfile' => 
  array (
    0 => 'bool',
  ),
  'directoryiterator::islink' => 
  array (
    0 => 'bool',
  ),
  'directoryiterator::isreadable' => 
  array (
    0 => 'bool',
  ),
  'directoryiterator::iswritable' => 
  array (
    0 => 'bool',
  ),
  'directoryiterator::key' => 
  array (
    0 => 'string',
  ),
  'directoryiterator::next' => 
  array (
    0 => 'void',
  ),
  'directoryiterator::openfile' => 
  array (
    0 => 'SplFileObject',
    'mode=' => 'string',
    'useIncludePath=' => 'bool',
    'context=' => 'null|resource',
  ),
  'directoryiterator::rewind' => 
  array (
    0 => 'void',
  ),
  'directoryiterator::seek' => 
  array (
    0 => 'void',
    'offset' => 'int',
  ),
  'directoryiterator::setfileclass' => 
  array (
    0 => 'void',
    'class=' => 'class-string',
  ),
  'directoryiterator::setinfoclass' => 
  array (
    0 => 'void',
    'class=' => 'class-string',
  ),
  'directoryiterator::valid' => 
  array (
    0 => 'bool',
  ),
  'dirname' => 
  array (
    0 => 'string',
    'path' => 'string',
    'levels=' => 'int<1, max>',
  ),
  'disk_free_space' => 
  array (
    0 => 'false|float',
    'directory' => 'string',
  ),
  'disk_total_space' => 
  array (
    0 => 'false|float',
    'directory' => 'string',
  ),
  'diskfreespace' => 
  array (
    0 => 'false|float',
    'directory' => 'string',
  ),
  'display_disabled_function' => 
  array (
    0 => 'mixed',
  ),
  'dl' => 
  array (
    0 => 'bool',
    'extension_filename' => 'string',
  ),
  'dngettext' => 
  array (
    0 => 'string',
    'domain' => 'string',
    'singular' => 'string',
    'plural' => 'string',
    'count' => 'int',
  ),
  'dns_check_record' => 
  array (
    0 => 'bool',
    'hostname' => 'string',
    'type=' => 'string',
  ),
  'dns_get_mx' => 
  array (
    0 => 'bool',
    'hostname' => 'string',
    '&w_hosts' => 'array<array-key, mixed>',
    '&w_weights=' => 'array<array-key, mixed>',
  ),
  'dns_get_record' => 
  array (
    0 => 'false|list<array<array-key, mixed>>',
    'hostname' => 'string',
    'type=' => 'int',
    '&w_authoritative_name_servers=' => 'array<array-key, mixed>',
    '&w_additional_records=' => 'array<array-key, mixed>',
    'raw=' => 'bool',
  ),
  'dom_document_relaxng_validate_file' => 
  array (
    0 => 'bool',
    'filename' => 'string',
  ),
  'dom_document_relaxng_validate_xml' => 
  array (
    0 => 'bool',
    'source' => 'string',
  ),
  'dom_document_schema_validate' => 
  array (
    0 => 'bool',
    'source' => 'string',
    'flags' => 'int',
  ),
  'dom_document_schema_validate_file' => 
  array (
    0 => 'bool',
    'filename' => 'string',
    'flags' => 'int',
  ),
  'dom_document_xinclude' => 
  array (
    0 => 'int',
    'options' => 'int',
  ),
  'dom_import_simplexml' => 
  array (
    0 => 'DOMElement',
    'node' => 'SimpleXMLElement',
  ),
  'dom_xpath_evaluate' => 
  array (
    0 => 'mixed',
    'expr' => 'string',
    'context' => 'DOMNode',
    'registernodens' => 'bool',
  ),
  'dom_xpath_query' => 
  array (
    0 => 'DOMNodeList',
    'expr' => 'string',
    'context' => 'DOMNode',
    'registernodens' => 'bool',
  ),
  'dom_xpath_register_ns' => 
  array (
    0 => 'bool',
    'prefix' => 'string',
    'uri' => 'string',
  ),
  'dom_xpath_register_php_functions' => 
  array (
    0 => 'mixed',
  ),
  'domainexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'string',
    'code=' => 'int',
    'previous=' => 'Throwable|null',
  ),
  'domainexception::__tostring' => 
  array (
    0 => 'string',
  ),
  'domainexception::__wakeup' => 
  array (
    0 => 'void',
  ),
  'domainexception::getcode' => 
  array (
    0 => 'int',
  ),
  'domainexception::getfile' => 
  array (
    0 => 'string',
  ),
  'domainexception::getline' => 
  array (
    0 => 'int',
  ),
  'domainexception::getmessage' => 
  array (
    0 => 'string',
  ),
  'domainexception::getprevious' => 
  array (
    0 => 'Throwable|null',
  ),
  'domainexception::gettrace' => 
  array (
    0 => 'list<array{args?: array<array-key, mixed>, class?: class-string, file?: string, function: string, line?: int, type?: \'->\'|\'::\'}>',
  ),
  'domainexception::gettraceasstring' => 
  array (
    0 => 'string',
  ),
  'domattr::__construct' => 
  array (
    0 => 'void',
    'name' => 'string',
    'value=' => 'string',
  ),
  'domattr::getlineno' => 
  array (
    0 => 'int',
  ),
  'domattr::getnodepath' => 
  array (
    0 => 'null|string',
  ),
  'domattr::hasattributes' => 
  array (
    0 => 'bool',
  ),
  'domattr::haschildnodes' => 
  array (
    0 => 'bool',
  ),
  'domattr::insertbefore' => 
  array (
    0 => 'DOMNode|false',
    'node' => 'DOMNode',
    'child=' => 'DOMNode|null',
  ),
  'domattr::isdefaultnamespace' => 
  array (
    0 => 'bool',
    'namespace' => 'string',
  ),
  'domattr::isid' => 
  array (
    0 => 'bool',
  ),
  'domattr::issamenode' => 
  array (
    0 => 'bool',
    'otherNode' => 'DOMNode',
  ),
  'domattr::issupported' => 
  array (
    0 => 'bool',
    'feature' => 'string',
    'version' => 'string',
  ),
  'domattr::lookupnamespaceuri' => 
  array (
    0 => 'null|string',
    'prefix' => 'null|string',
  ),
  'domattr::lookupprefix' => 
  array (
    0 => 'null|string',
    'namespace' => 'string',
  ),
  'domattr::normalize' => 
  array (
    0 => 'void',
  ),
  'domattr::removechild' => 
  array (
    0 => 'DOMNode|false',
    'child' => 'DOMNode',
  ),
  'domattr::replacechild' => 
  array (
    0 => 'DOMNode|false',
    'node' => 'DOMNode',
    'child' => 'DOMNode',
  ),
  'domattribute::name' => 
  array (
    0 => 'string',
  ),
  'domattribute::set_value' => 
  array (
    0 => 'bool',
    'content' => 'string',
  ),
  'domattribute::specified' => 
  array (
    0 => 'bool',
  ),
  'domattribute::value' => 
  array (
    0 => 'string',
  ),
  'domcdatasection::__construct' => 
  array (
    0 => 'void',
    'data' => 'string',
  ),
  'domcharacterdata::appenddata' => 
  array (
    0 => 'true',
    'data' => 'string',
  ),
  'domcharacterdata::deletedata' => 
  array (
    0 => 'bool',
    'offset' => 'int',
    'count' => 'int',
  ),
  'domcharacterdata::insertdata' => 
  array (
    0 => 'bool',
    'offset' => 'int',
    'data' => 'string',
  ),
  'domcharacterdata::replacedata' => 
  array (
    0 => 'bool',
    'offset' => 'int',
    'count' => 'int',
    'data' => 'string',
  ),
  'domcharacterdata::substringdata' => 
  array (
    0 => 'string',
    'offset' => 'int',
    'count' => 'int',
  ),
  'domcomment::__construct' => 
  array (
    0 => 'void',
    'data=' => 'string',
  ),
  'domdocument::__construct' => 
  array (
    0 => 'void',
    'version=' => 'string',
    'encoding=' => 'string',
  ),
  'domdocument::createattribute' => 
  array (
    0 => 'DOMAttr|false',
    'localName' => 'string',
  ),
  'domdocument::createattributens' => 
  array (
    0 => 'DOMAttr|false',
    'namespace' => 'null|string',
    'qualifiedName' => 'string',
  ),
  'domdocument::createcdatasection' => 
  array (
    0 => 'DOMCDATASection|false',
    'data' => 'string',
  ),
  'domdocument::createcomment' => 
  array (
    0 => 'DOMComment',
    'data' => 'string',
  ),
  'domdocument::createdocumentfragment' => 
  array (
    0 => 'DOMDocumentFragment',
  ),
  'domdocument::createelement' => 
  array (
    0 => 'DOMElement|false',
    'localName' => 'string',
    'value=' => 'string',
  ),
  'domdocument::createelementns' => 
  array (
    0 => 'DOMElement|false',
    'namespace' => 'null|string',
    'qualifiedName' => 'string',
    'value=' => 'string',
  ),
  'domdocument::createentityreference' => 
  array (
    0 => 'DOMEntityReference|false',
    'name' => 'string',
  ),
  'domdocument::createprocessinginstruction' => 
  array (
    0 => 'DOMProcessingInstruction|false',
    'target' => 'string',
    'data=' => 'string',
  ),
  'domdocument::createtextnode' => 
  array (
    0 => 'DOMText',
    'data' => 'string',
  ),
  'domdocument::getelementbyid' => 
  array (
    0 => 'DOMElement|null',
    'elementId' => 'string',
  ),
  'domdocument::getelementsbytagname' => 
  array (
    0 => 'DOMNodeList',
    'qualifiedName' => 'string',
  ),
  'domdocument::getelementsbytagnamens' => 
  array (
    0 => 'DOMNodeList',
    'namespace' => 'null|string',
    'localName' => 'string',
  ),
  'domdocument::importnode' => 
  array (
    0 => 'DOMNode|false',
    'node' => 'DOMNode',
    'deep=' => 'bool',
  ),
  'domdocument::load' => 
  array (
    0 => 'bool',
    'filename' => 'string',
    'options=' => 'int',
  ),
  'domdocument::loadhtml' => 
  array (
    0 => 'bool',
    'source' => 'non-empty-string',
    'options=' => 'int',
  ),
  'domdocument::loadhtmlfile' => 
  array (
    0 => 'bool',
    'filename' => 'string',
    'options=' => 'int',
  ),
  'domdocument::loadxml' => 
  array (
    0 => 'bool',
    'source' => 'non-empty-string',
    'options=' => 'int',
  ),
  'domdocument::normalizedocument' => 
  array (
    0 => 'void',
  ),
  'domdocument::registernodeclass' => 
  array (
    0 => 'true',
    'baseClass' => 'string',
    'extendedClass' => 'null|string',
  ),
  'domdocument::relaxngvalidate' => 
  array (
    0 => 'bool',
    'filename' => 'string',
  ),
  'domdocument::relaxngvalidatesource' => 
  array (
    0 => 'bool',
    'source' => 'string',
  ),
  'domdocument::save' => 
  array (
    0 => 'false|int',
    'filename' => 'string',
    'options=' => 'int',
  ),
  'domdocument::savehtml' => 
  array (
    0 => 'false|string',
    'node=' => 'DOMNode|null',
  ),
  'domdocument::savehtmlfile' => 
  array (
    0 => 'false|int',
    'filename' => 'string',
  ),
  'domdocument::savexml' => 
  array (
    0 => 'false|string',
    'node=' => 'DOMNode|null',
    'options=' => 'int',
  ),
  'domdocument::schemavalidate' => 
  array (
    0 => 'bool',
    'filename' => 'string',
    'flags=' => 'int',
  ),
  'domdocument::schemavalidatesource' => 
  array (
    0 => 'bool',
    'source' => 'string',
    'flags=' => 'int',
  ),
  'domdocument::validate' => 
  array (
    0 => 'bool',
  ),
  'domdocument::xinclude' => 
  array (
    0 => 'int',
    'options=' => 'int',
  ),
  'domdocumentfragment::appendxml' => 
  array (
    0 => 'bool',
    'data' => 'string',
  ),
  'domelement::__construct' => 
  array (
    0 => 'void',
    'qualifiedName' => 'string',
    'value=' => 'null|string',
    'namespace=' => 'string',
  ),
  'domelement::getattribute' => 
  array (
    0 => 'string',
    'qualifiedName' => 'string',
  ),
  'domelement::getattributenode' => 
  array (
    0 => 'DOMAttr',
    'qualifiedName' => 'string',
  ),
  'domelement::getattributenodens' => 
  array (
    0 => 'DOMAttr',
    'namespace' => 'null|string',
    'localName' => 'string',
  ),
  'domelement::getattributens' => 
  array (
    0 => 'string',
    'namespace' => 'null|string',
    'localName' => 'string',
  ),
  'domelement::getelementsbytagname' => 
  array (
    0 => 'DOMNodeList',
    'qualifiedName' => 'string',
  ),
  'domelement::getelementsbytagnamens' => 
  array (
    0 => 'DOMNodeList',
    'namespace' => 'null|string',
    'localName' => 'string',
  ),
  'domelement::hasattribute' => 
  array (
    0 => 'bool',
    'qualifiedName' => 'string',
  ),
  'domelement::hasattributens' => 
  array (
    0 => 'bool',
    'namespace' => 'null|string',
    'localName' => 'string',
  ),
  'domelement::removeattribute' => 
  array (
    0 => 'bool',
    'qualifiedName' => 'string',
  ),
  'domelement::removeattributenode' => 
  array (
    0 => 'DOMAttr|false',
    'attr' => 'DOMAttr',
  ),
  'domelement::removeattributens' => 
  array (
    0 => 'void',
    'namespace' => 'null|string',
    'localName' => 'string',
  ),
  'domelement::setattribute' => 
  array (
    0 => 'DOMAttr|false',
    'qualifiedName' => 'string',
    'value' => 'string',
  ),
  'domelement::setattributenode' => 
  array (
    0 => 'DOMAttr|null',
    'attr' => 'DOMAttr',
  ),
  'domelement::setattributenodens' => 
  array (
    0 => 'DOMAttr',
    'attr' => 'DOMAttr',
  ),
  'domelement::setattributens' => 
  array (
    0 => 'void',
    'namespace' => 'null|string',
    'qualifiedName' => 'string',
    'value' => 'string',
  ),
  'domelement::setidattribute' => 
  array (
    0 => 'void',
    'qualifiedName' => 'string',
    'isId' => 'bool',
  ),
  'domelement::setidattributenode' => 
  array (
    0 => 'void',
    'attr' => 'DOMAttr',
    'isId' => 'bool',
  ),
  'domelement::setidattributens' => 
  array (
    0 => 'void',
    'namespace' => 'string',
    'qualifiedName' => 'string',
    'isId' => 'bool',
  ),
  'domentityreference::__construct' => 
  array (
    0 => 'void',
    'name' => 'string',
  ),
  'domimplementation::__construct' => 
  array (
    0 => 'void',
  ),
  'domimplementation::createdocument' => 
  array (
    0 => 'DOMDocument',
    'namespace=' => 'null|string',
    'qualifiedName=' => 'string',
    'doctype=' => 'DOMDocumentType|null',
  ),
  'domimplementation::createdocumenttype' => 
  array (
    0 => 'DOMDocumentType|false',
    'qualifiedName' => 'string',
    'publicId=' => 'string',
    'systemId=' => 'string',
  ),
  'domimplementation::hasfeature' => 
  array (
    0 => 'bool',
    'feature' => 'string',
    'version' => 'string',
  ),
  'domnamednodemap::count' => 
  array (
    0 => 'int',
  ),
  'domnamednodemap::getnameditem' => 
  array (
    0 => 'DOMNode|null',
    'qualifiedName' => 'string',
  ),
  'domnamednodemap::getnameditemns' => 
  array (
    0 => 'DOMNode|null',
    'namespace' => 'null|string',
    'localName' => 'string',
  ),
  'domnamednodemap::item' => 
  array (
    0 => 'DOMNode|null',
    'index' => 'int',
  ),
  'domnode::appendchild' => 
  array (
    0 => 'DOMNode|false',
    'node' => 'DOMNode',
  ),
  'domnode::c14n' => 
  array (
    0 => 'false|string',
    'exclusive=' => 'bool',
    'withComments=' => 'bool',
    'xpath=' => 'array<array-key, mixed>|null',
    'nsPrefixes=' => 'array<array-key, mixed>|null',
  ),
  'domnode::c14nfile' => 
  array (
    0 => 'false|int',
    'uri' => 'string',
    'exclusive=' => 'bool',
    'withComments=' => 'bool',
    'xpath=' => 'array<array-key, mixed>|null',
    'nsPrefixes=' => 'array<array-key, mixed>|null',
  ),
  'domnode::clonenode' => 
  array (
    0 => 'DOMNode',
    'deep=' => 'bool',
  ),
  'domnode::getlineno' => 
  array (
    0 => 'int',
  ),
  'domnode::getnodepath' => 
  array (
    0 => 'null|string',
  ),
  'domnode::hasattributes' => 
  array (
    0 => 'bool',
  ),
  'domnode::haschildnodes' => 
  array (
    0 => 'bool',
  ),
  'domnode::insertbefore' => 
  array (
    0 => 'DOMNode|false',
    'node' => 'DOMNode',
    'child=' => 'DOMNode|null',
  ),
  'domnode::isdefaultnamespace' => 
  array (
    0 => 'bool',
    'namespace' => 'string',
  ),
  'domnode::issamenode' => 
  array (
    0 => 'bool',
    'otherNode' => 'DOMNode',
  ),
  'domnode::issupported' => 
  array (
    0 => 'bool',
    'feature' => 'string',
    'version' => 'string',
  ),
  'domnode::lookupnamespaceuri' => 
  array (
    0 => 'null|string',
    'prefix' => 'null|string',
  ),
  'domnode::lookupprefix' => 
  array (
    0 => 'null|string',
    'namespace' => 'string',
  ),
  'domnode::normalize' => 
  array (
    0 => 'void',
  ),
  'domnode::removechild' => 
  array (
    0 => 'DOMNode|false',
    'child' => 'DOMNode',
  ),
  'domnode::replacechild' => 
  array (
    0 => 'DOMNode|false',
    'node' => 'DOMNode',
    'child' => 'DOMNode',
  ),
  'domnodelist::count' => 
  array (
    0 => 'int',
  ),
  'domnodelist::item' => 
  array (
    0 => 'DOMNode|null',
    'index' => 'int',
  ),
  'domprocessinginstruction::__construct' => 
  array (
    0 => 'void',
    'name' => 'string',
    'value=' => 'string',
  ),
  'domtext::__construct' => 
  array (
    0 => 'void',
    'data=' => 'string',
  ),
  'domtext::iselementcontentwhitespace' => 
  array (
    0 => 'bool',
  ),
  'domtext::iswhitespaceinelementcontent' => 
  array (
    0 => 'bool',
  ),
  'domtext::splittext' => 
  array (
    0 => 'DOMText',
    'offset' => 'int',
  ),
  'domxml_new_doc' => 
  array (
    0 => 'DomDocument',
    'version' => 'string',
  ),
  'domxml_open_file' => 
  array (
    0 => 'DomDocument',
    'filename' => 'string',
    'mode=' => 'int',
    'error=' => 'array<array-key, mixed>',
  ),
  'domxml_open_mem' => 
  array (
    0 => 'DomDocument',
    'string' => 'string',
    'mode=' => 'int',
    'error=' => 'array<array-key, mixed>',
  ),
  'domxml_version' => 
  array (
    0 => 'string',
  ),
  'domxml_xmltree' => 
  array (
    0 => 'DomDocument',
    'string' => 'string',
  ),
  'domxml_xslt_stylesheet' => 
  array (
    0 => 'DomXsltStylesheet',
    'xsl_buf' => 'string',
  ),
  'domxml_xslt_stylesheet_doc' => 
  array (
    0 => 'DomXsltStylesheet',
    'xsl_doc' => 'DOMDocument',
  ),
  'domxml_xslt_stylesheet_file' => 
  array (
    0 => 'DomXsltStylesheet',
    'xsl_file' => 'string',
  ),
  'domxml_xslt_version' => 
  array (
    0 => 'int',
  ),
  'domxpath::evaluate' => 
  array (
    0 => 'mixed',
    'expression' => 'string',
    'contextNode=' => 'DOMNode|null',
    'registerNodeNS=' => 'bool',
  ),
  'domxpath::query' => 
  array (
    0 => 'DOMNodeList|false',
    'expression' => 'string',
    'contextNode=' => 'DOMNode|null',
    'registerNodeNS=' => 'bool',
  ),
  'domxpath::registernamespace' => 
  array (
    0 => 'bool',
    'prefix' => 'string',
    'namespace' => 'string',
  ),
  'domxpath::registerphpfunctions' => 
  array (
    0 => 'void',
    'restrict=' => 'array<array-key, mixed>|null|string',
  ),
  'domxsltstylesheet::process' => 
  array (
    0 => 'DomDocument',
    'xml_doc' => 'DOMDocument',
    'xslt_params=' => 'array<array-key, mixed>',
    'is_xpath_param=' => 'bool',
    'profile_filename=' => 'string',
  ),
  'domxsltstylesheet::result_dump_file' => 
  array (
    0 => 'string',
    'xmldoc' => 'DOMDocument',
    'filename' => 'string',
  ),
  'domxsltstylesheet::result_dump_mem' => 
  array (
    0 => 'string',
    'xmldoc' => 'DOMDocument',
  ),
  'dotnet::__call' => 
  array (
    0 => 'mixed',
    'name' => 'string',
    'args' => 'mixed',
  ),
  'dotnet::__construct' => 
  array (
    0 => 'void',
    'assembly_name' => 'string',
    'datatype_name' => 'string',
    'codepage=' => 'int',
  ),
  'dotnet::__get' => 
  array (
    0 => 'mixed',
    'name' => 'string',
  ),
  'dotnet::__set' => 
  array (
    0 => 'void',
    'name' => 'string',
    'value' => 'mixed',
  ),
  'dotnet_load' => 
  array (
    0 => 'int',
    'assembly_name' => 'string',
    'datatype_name=' => 'string',
    'codepage=' => 'int',
  ),
  'doubleval' => 
  array (
    0 => 'float',
    'value' => 'mixed',
  ),
  'ds\\collection::clear' => 
  array (
    0 => 'void',
  ),
  'ds\\collection::copy' => 
  array (
    0 => 'Ds\\Collection',
  ),
  'ds\\collection::isempty' => 
  array (
    0 => 'bool',
  ),
  'ds\\collection::toarray' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'ds\\deque::allocate' => 
  array (
    0 => 'void',
    'capacity' => 'int',
  ),
  'ds\\deque::apply' => 
  array (
    0 => 'void',
    'callback' => 'callable',
  ),
  'ds\\deque::clear' => 
  array (
    0 => 'void',
  ),
  'ds\\deque::get' => 
  array (
    0 => 'void',
    'index' => 'int',
  ),
  'ds\\deque::insert' => 
  array (
    0 => 'void',
    'index' => 'int',
    '...values=' => 'mixed',
  ),
  'ds\\deque::jsonserialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'ds\\deque::push' => 
  array (
    0 => 'void',
    '...values=' => 'mixed',
  ),
  'ds\\deque::reverse' => 
  array (
    0 => 'void',
  ),
  'ds\\deque::rotate' => 
  array (
    0 => 'void',
    'rotations' => 'int',
  ),
  'ds\\deque::set' => 
  array (
    0 => 'void',
    'index' => 'int',
    'value' => 'mixed',
  ),
  'ds\\deque::sort' => 
  array (
    0 => 'void',
    'comparator=' => 'callable|null',
  ),
  'ds\\deque::sum' => 
  array (
    0 => 'float|int',
  ),
  'ds\\deque::unshift' => 
  array (
    0 => 'void',
    '...values=' => 'mixed',
  ),
  'ds\\hashable::equals' => 
  array (
    0 => 'bool',
    'object' => 'mixed',
  ),
  'ds\\hashable::hash' => 
  array (
    0 => 'mixed',
  ),
  'ds\\map::allocate' => 
  array (
    0 => 'void',
    'capacity' => 'int',
  ),
  'ds\\map::apply' => 
  array (
    0 => 'void',
    'callback' => 'callable',
  ),
  'ds\\map::clear' => 
  array (
    0 => 'void',
  ),
  'ds\\map::jsonserialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'ds\\map::ksort' => 
  array (
    0 => 'void',
    'comparator=' => 'callable|null',
  ),
  'ds\\map::put' => 
  array (
    0 => 'void',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'ds\\map::putall' => 
  array (
    0 => 'void',
    'values' => 'mixed',
  ),
  'ds\\map::reverse' => 
  array (
    0 => 'void',
  ),
  'ds\\map::sort' => 
  array (
    0 => 'void',
    'comparator=' => 'callable|null',
  ),
  'ds\\map::sum' => 
  array (
    0 => 'float|int',
  ),
  'ds\\map::union' => 
  array (
    0 => 'Ds\\Map',
    'map' => 'Ds\\Map',
  ),
  'ds\\pair::clear' => 
  array (
    0 => 'void',
  ),
  'ds\\pair::isempty' => 
  array (
    0 => 'bool',
  ),
  'ds\\pair::jsonserialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'ds\\priorityqueue::allocate' => 
  array (
    0 => 'void',
    'capacity' => 'int',
  ),
  'ds\\priorityqueue::clear' => 
  array (
    0 => 'void',
  ),
  'ds\\priorityqueue::jsonserialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'ds\\priorityqueue::push' => 
  array (
    0 => 'void',
    'value' => 'mixed',
    'priority' => 'int',
  ),
  'ds\\queue::allocate' => 
  array (
    0 => 'void',
    'capacity' => 'int',
  ),
  'ds\\queue::clear' => 
  array (
    0 => 'void',
  ),
  'ds\\queue::jsonserialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'ds\\queue::push' => 
  array (
    0 => 'void',
    '...values=' => 'mixed',
  ),
  'ds\\sequence::allocate' => 
  array (
    0 => 'void',
    'capacity' => 'int',
  ),
  'ds\\sequence::apply' => 
  array (
    0 => 'void',
    'callback' => 'callable',
  ),
  'ds\\sequence::capacity' => 
  array (
    0 => 'int',
  ),
  'ds\\sequence::contains' => 
  array (
    0 => 'bool',
    '...values=' => 'mixed',
  ),
  'ds\\sequence::filter' => 
  array (
    0 => 'Ds\\Sequence',
    'callback=' => 'callable',
  ),
  'ds\\sequence::find' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'ds\\sequence::first' => 
  array (
    0 => 'mixed',
  ),
  'ds\\sequence::get' => 
  array (
    0 => 'mixed',
    'index' => 'int',
  ),
  'ds\\sequence::insert' => 
  array (
    0 => 'void',
    'index' => 'int',
    '...values=' => 'mixed',
  ),
  'ds\\sequence::join' => 
  array (
    0 => 'string',
    'glue=' => 'string',
  ),
  'ds\\sequence::last' => 
  array (
    0 => 'void',
  ),
  'ds\\sequence::map' => 
  array (
    0 => 'Ds\\Sequence',
    'callback' => 'callable',
  ),
  'ds\\sequence::merge' => 
  array (
    0 => 'Ds\\Sequence',
    'values' => 'mixed',
  ),
  'ds\\sequence::pop' => 
  array (
    0 => 'mixed',
  ),
  'ds\\sequence::push' => 
  array (
    0 => 'void',
    '...values=' => 'mixed',
  ),
  'ds\\sequence::reduce' => 
  array (
    0 => 'mixed',
    'callback' => 'callable',
    'initial=' => 'mixed',
  ),
  'ds\\sequence::remove' => 
  array (
    0 => 'mixed',
    'index' => 'int',
  ),
  'ds\\sequence::reverse' => 
  array (
    0 => 'void',
  ),
  'ds\\sequence::reversed' => 
  array (
    0 => 'Ds\\Sequence',
  ),
  'ds\\sequence::rotate' => 
  array (
    0 => 'void',
    'rotations' => 'int',
  ),
  'ds\\sequence::set' => 
  array (
    0 => 'void',
    'index' => 'int',
    'value' => 'mixed',
  ),
  'ds\\sequence::shift' => 
  array (
    0 => 'mixed',
  ),
  'ds\\sequence::slice' => 
  array (
    0 => 'Ds\\Sequence',
    'index' => 'int',
    'length=' => 'int|null',
  ),
  'ds\\sequence::sort' => 
  array (
    0 => 'void',
    'comparator=' => 'callable',
  ),
  'ds\\sequence::sorted' => 
  array (
    0 => 'Ds\\Sequence',
    'comparator=' => 'callable',
  ),
  'ds\\sequence::sum' => 
  array (
    0 => 'float|int',
  ),
  'ds\\sequence::unshift' => 
  array (
    0 => 'void',
    '...values=' => 'mixed',
  ),
  'ds\\set::add' => 
  array (
    0 => 'void',
    '...values=' => 'mixed',
  ),
  'ds\\set::allocate' => 
  array (
    0 => 'void',
    'capacity' => 'int',
  ),
  'ds\\set::clear' => 
  array (
    0 => 'void',
  ),
  'ds\\set::join' => 
  array (
    0 => 'string',
    'glue=' => 'string',
  ),
  'ds\\set::jsonserialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'ds\\set::remove' => 
  array (
    0 => 'void',
    '...values=' => 'mixed',
  ),
  'ds\\set::reverse' => 
  array (
    0 => 'void',
  ),
  'ds\\set::sort' => 
  array (
    0 => 'void',
    'comparator=' => 'callable|null',
  ),
  'ds\\set::sum' => 
  array (
    0 => 'float|int',
  ),
  'ds\\stack::allocate' => 
  array (
    0 => 'void',
    'capacity' => 'int',
  ),
  'ds\\stack::clear' => 
  array (
    0 => 'void',
  ),
  'ds\\stack::jsonserialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'ds\\stack::push' => 
  array (
    0 => 'void',
    '...values=' => 'mixed',
  ),
  'ds\\vector::allocate' => 
  array (
    0 => 'void',
    'capacity' => 'int',
  ),
  'ds\\vector::apply' => 
  array (
    0 => 'void',
    'callback' => 'callable',
  ),
  'ds\\vector::clear' => 
  array (
    0 => 'void',
  ),
  'ds\\vector::insert' => 
  array (
    0 => 'void',
    'index' => 'int',
    '...values=' => 'mixed',
  ),
  'ds\\vector::jsonserialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'ds\\vector::push' => 
  array (
    0 => 'void',
    '...values=' => 'mixed',
  ),
  'ds\\vector::reverse' => 
  array (
    0 => 'void',
  ),
  'ds\\vector::rotate' => 
  array (
    0 => 'void',
    'rotations' => 'int',
  ),
  'ds\\vector::set' => 
  array (
    0 => 'void',
    'index' => 'int',
    'value' => 'mixed',
  ),
  'ds\\vector::sort' => 
  array (
    0 => 'void',
    'comparator=' => 'callable|null',
  ),
  'ds\\vector::sum' => 
  array (
    0 => 'float|int',
  ),
  'ds\\vector::unshift' => 
  array (
    0 => 'void',
    '...values=' => 'mixed',
  ),
  'easter_date' => 
  array (
    0 => 'int',
    'year=' => 'int|null',
    'mode=' => 'int',
  ),
  'easter_days' => 
  array (
    0 => 'int',
    'year=' => 'int|null',
    'mode=' => 'int',
  ),
  'echo' => 
  array (
    0 => 'void',
    'arg1' => 'string',
    '...args=' => 'string',
  ),
  'eio_busy' => 
  array (
    0 => 'resource',
    'delay' => 'int',
    'pri=' => 'int',
    'callback=' => 'callable',
    'data=' => 'mixed',
  ),
  'eio_cancel' => 
  array (
    0 => 'void',
    'req' => 'resource',
  ),
  'eio_chmod' => 
  array (
    0 => 'resource',
    'path' => 'string',
    'mode' => 'int',
    'pri=' => 'int',
    'callback=' => 'callable',
    'data=' => 'mixed',
  ),
  'eio_chown' => 
  array (
    0 => 'resource',
    'path' => 'string',
    'uid' => 'int',
    'gid=' => 'int',
    'pri=' => 'int',
    'callback=' => 'callable',
    'data=' => 'mixed',
  ),
  'eio_close' => 
  array (
    0 => 'resource',
    'fd' => 'mixed',
    'pri=' => 'int',
    'callback=' => 'callable',
    'data=' => 'mixed',
  ),
  'eio_custom' => 
  array (
    0 => 'resource',
    'execute' => 'callable',
    'pri' => 'int',
    'callback' => 'callable',
    'data=' => 'mixed',
  ),
  'eio_dup2' => 
  array (
    0 => 'resource',
    'fd' => 'mixed',
    'fd2' => 'mixed',
    'pri=' => 'int',
    'callback=' => 'callable',
    'data=' => 'mixed',
  ),
  'eio_event_loop' => 
  array (
    0 => 'bool',
  ),
  'eio_fallocate' => 
  array (
    0 => 'resource',
    'fd' => 'mixed',
    'mode' => 'int',
    'offset' => 'int',
    'length' => 'int',
    'pri=' => 'int',
    'callback=' => 'callable',
    'data=' => 'mixed',
  ),
  'eio_fchmod' => 
  array (
    0 => 'resource',
    'fd' => 'mixed',
    'mode' => 'int',
    'pri=' => 'int',
    'callback=' => 'callable',
    'data=' => 'mixed',
  ),
  'eio_fchown' => 
  array (
    0 => 'resource',
    'fd' => 'mixed',
    'uid' => 'int',
    'gid=' => 'int',
    'pri=' => 'int',
    'callback=' => 'callable',
    'data=' => 'mixed',
  ),
  'eio_fdatasync' => 
  array (
    0 => 'resource',
    'fd' => 'mixed',
    'pri=' => 'int',
    'callback=' => 'callable',
    'data=' => 'mixed',
  ),
  'eio_fstat' => 
  array (
    0 => 'resource',
    'fd' => 'mixed',
    'pri' => 'int',
    'callback' => 'callable',
    'data=' => 'mixed',
  ),
  'eio_fstatvfs' => 
  array (
    0 => 'resource',
    'fd' => 'mixed',
    'pri' => 'int',
    'callback' => 'callable',
    'data=' => 'mixed',
  ),
  'eio_fsync' => 
  array (
    0 => 'resource',
    'fd' => 'mixed',
    'pri=' => 'int',
    'callback=' => 'callable',
    'data=' => 'mixed',
  ),
  'eio_ftruncate' => 
  array (
    0 => 'resource',
    'fd' => 'mixed',
    'offset=' => 'int',
    'pri=' => 'int',
    'callback=' => 'callable',
    'data=' => 'mixed',
  ),
  'eio_futime' => 
  array (
    0 => 'resource',
    'fd' => 'mixed',
    'atime' => 'float',
    'mtime' => 'float',
    'pri=' => 'int',
    'callback=' => 'callable',
    'data=' => 'mixed',
  ),
  'eio_get_event_stream' => 
  array (
    0 => 'mixed',
  ),
  'eio_get_last_error' => 
  array (
    0 => 'string',
    'req' => 'resource',
  ),
  'eio_grp' => 
  array (
    0 => 'resource',
    'callback' => 'callable',
    'data=' => 'string',
  ),
  'eio_grp_add' => 
  array (
    0 => 'void',
    'grp' => 'resource',
    'req' => 'resource',
  ),
  'eio_grp_cancel' => 
  array (
    0 => 'void',
    'grp' => 'resource',
  ),
  'eio_grp_limit' => 
  array (
    0 => 'void',
    'grp' => 'resource',
    'limit' => 'int',
  ),
  'eio_init' => 
  array (
    0 => 'void',
  ),
  'eio_link' => 
  array (
    0 => 'resource',
    'path' => 'string',
    'new_path' => 'string',
    'pri=' => 'int',
    'callback=' => 'callable',
    'data=' => 'mixed',
  ),
  'eio_lstat' => 
  array (
    0 => 'resource',
    'path' => 'string',
    'pri' => 'int',
    'callback' => 'callable',
    'data=' => 'mixed',
  ),
  'eio_mkdir' => 
  array (
    0 => 'resource',
    'path' => 'string',
    'mode' => 'int',
    'pri=' => 'int',
    'callback=' => 'callable',
    'data=' => 'mixed',
  ),
  'eio_mknod' => 
  array (
    0 => 'resource',
    'path' => 'string',
    'mode' => 'int',
    'dev' => 'int',
    'pri=' => 'int',
    'callback=' => 'callable',
    'data=' => 'mixed',
  ),
  'eio_nop' => 
  array (
    0 => 'resource',
    'pri=' => 'int',
    'callback=' => 'callable',
    'data=' => 'mixed',
  ),
  'eio_npending' => 
  array (
    0 => 'int',
  ),
  'eio_nready' => 
  array (
    0 => 'int',
  ),
  'eio_nreqs' => 
  array (
    0 => 'int',
  ),
  'eio_nthreads' => 
  array (
    0 => 'int',
  ),
  'eio_open' => 
  array (
    0 => 'resource',
    'path' => 'string',
    'flags' => 'int',
    'mode' => 'int',
    'pri' => 'int',
    'callback' => 'callable',
    'data=' => 'mixed',
  ),
  'eio_poll' => 
  array (
    0 => 'int',
  ),
  'eio_read' => 
  array (
    0 => 'resource',
    'fd' => 'mixed',
    'length' => 'int',
    'offset' => 'int',
    'pri' => 'int',
    'callback' => 'callable',
    'data=' => 'mixed',
  ),
  'eio_readahead' => 
  array (
    0 => 'resource',
    'fd' => 'mixed',
    'offset' => 'int',
    'length' => 'int',
    'pri=' => 'int',
    'callback=' => 'callable',
    'data=' => 'mixed',
  ),
  'eio_readdir' => 
  array (
    0 => 'resource',
    'path' => 'string',
    'flags' => 'int',
    'pri' => 'int',
    'callback' => 'callable',
    'data=' => 'string',
  ),
  'eio_readlink' => 
  array (
    0 => 'resource',
    'path' => 'string',
    'pri' => 'int',
    'callback' => 'callable',
    'data=' => 'string',
  ),
  'eio_realpath' => 
  array (
    0 => 'resource',
    'path' => 'string',
    'pri' => 'int',
    'callback' => 'callable',
    'data=' => 'string',
  ),
  'eio_rename' => 
  array (
    0 => 'resource',
    'path' => 'string',
    'new_path' => 'string',
    'pri=' => 'int',
    'callback=' => 'callable',
    'data=' => 'mixed',
  ),
  'eio_rmdir' => 
  array (
    0 => 'resource',
    'path' => 'string',
    'pri=' => 'int',
    'callback=' => 'callable',
    'data=' => 'mixed',
  ),
  'eio_seek' => 
  array (
    0 => 'resource',
    'fd' => 'mixed',
    'offset' => 'int',
    'whence' => 'int',
    'pri=' => 'int',
    'callback=' => 'callable',
    'data=' => 'mixed',
  ),
  'eio_sendfile' => 
  array (
    0 => 'resource',
    'out_fd' => 'mixed',
    'in_fd' => 'mixed',
    'offset' => 'int',
    'length' => 'int',
    'pri=' => 'int',
    'callback=' => 'callable',
    'data=' => 'string',
  ),
  'eio_set_max_idle' => 
  array (
    0 => 'void',
    'nthreads' => 'int',
  ),
  'eio_set_max_parallel' => 
  array (
    0 => 'void',
    'nthreads' => 'int',
  ),
  'eio_set_max_poll_reqs' => 
  array (
    0 => 'void',
    'nreqs' => 'int',
  ),
  'eio_set_max_poll_time' => 
  array (
    0 => 'void',
    'nseconds' => 'float',
  ),
  'eio_set_min_parallel' => 
  array (
    0 => 'void',
    'nthreads' => 'string',
  ),
  'eio_stat' => 
  array (
    0 => 'resource',
    'path' => 'string',
    'pri' => 'int',
    'callback' => 'callable',
    'data=' => 'mixed',
  ),
  'eio_statvfs' => 
  array (
    0 => 'resource',
    'path' => 'string',
    'pri' => 'int',
    'callback' => 'callable',
    'data=' => 'mixed',
  ),
  'eio_symlink' => 
  array (
    0 => 'resource',
    'path' => 'string',
    'new_path' => 'string',
    'pri=' => 'int',
    'callback=' => 'callable',
    'data=' => 'mixed',
  ),
  'eio_sync' => 
  array (
    0 => 'resource',
    'pri=' => 'int',
    'callback=' => 'callable',
    'data=' => 'mixed',
  ),
  'eio_sync_file_range' => 
  array (
    0 => 'resource',
    'fd' => 'mixed',
    'offset' => 'int',
    'nbytes' => 'int',
    'flags' => 'int',
    'pri=' => 'int',
    'callback=' => 'callable',
    'data=' => 'mixed',
  ),
  'eio_syncfs' => 
  array (
    0 => 'resource',
    'fd' => 'mixed',
    'pri=' => 'int',
    'callback=' => 'callable',
    'data=' => 'mixed',
  ),
  'eio_truncate' => 
  array (
    0 => 'resource',
    'path' => 'string',
    'offset=' => 'int',
    'pri=' => 'int',
    'callback=' => 'callable',
    'data=' => 'mixed',
  ),
  'eio_unlink' => 
  array (
    0 => 'resource',
    'path' => 'string',
    'pri=' => 'int',
    'callback=' => 'callable',
    'data=' => 'mixed',
  ),
  'eio_utime' => 
  array (
    0 => 'resource',
    'path' => 'string',
    'atime' => 'float',
    'mtime' => 'float',
    'pri=' => 'int',
    'callback=' => 'callable',
    'data=' => 'mixed',
  ),
  'eio_write' => 
  array (
    0 => 'resource',
    'fd' => 'mixed',
    'string' => 'string',
    'length=' => 'int',
    'offset=' => 'int',
    'pri=' => 'int',
    'callback=' => 'callable',
    'data=' => 'mixed',
  ),
  'empty' => 
  array (
    0 => 'bool',
    'value' => 'mixed',
  ),
  'emptyiterator::current' => 
  array (
    0 => 'never',
  ),
  'emptyiterator::key' => 
  array (
    0 => 'never',
  ),
  'emptyiterator::next' => 
  array (
    0 => 'void',
  ),
  'emptyiterator::rewind' => 
  array (
    0 => 'void',
  ),
  'emptyiterator::valid' => 
  array (
    0 => 'false',
  ),
  'enchant_broker_describe' => 
  array (
    0 => 'array<array-key, mixed>',
    'broker' => 'EnchantBroker',
  ),
  'enchant_broker_dict_exists' => 
  array (
    0 => 'bool',
    'broker' => 'EnchantBroker',
    'tag' => 'string',
  ),
  'enchant_broker_free' => 
  array (
    0 => 'bool',
    'broker' => 'EnchantBroker',
  ),
  'enchant_broker_free_dict' => 
  array (
    0 => 'bool',
    'dictionary' => 'EnchantBroker',
  ),
  'enchant_broker_get_dict_path' => 
  array (
    0 => 'string',
    'broker' => 'EnchantBroker',
    'type' => 'int',
  ),
  'enchant_broker_get_error' => 
  array (
    0 => 'false|string',
    'broker' => 'EnchantBroker',
  ),
  'enchant_broker_init' => 
  array (
    0 => 'EnchantBroker|false',
  ),
  'enchant_broker_list_dicts' => 
  array (
    0 => 'array<int, array{lang_tag: string, provider_desc: string, provider_file: string, provider_name: string}>',
    'broker' => 'EnchantBroker',
  ),
  'enchant_broker_request_dict' => 
  array (
    0 => 'EnchantDictionary|false',
    'broker' => 'EnchantBroker',
    'tag' => 'string',
  ),
  'enchant_broker_request_pwl_dict' => 
  array (
    0 => 'EnchantDictionary|false',
    'broker' => 'EnchantBroker',
    'filename' => 'string',
  ),
  'enchant_broker_set_dict_path' => 
  array (
    0 => 'bool',
    'broker' => 'EnchantBroker',
    'type' => 'int',
    'path' => 'string',
  ),
  'enchant_broker_set_ordering' => 
  array (
    0 => 'bool',
    'broker' => 'EnchantBroker',
    'tag' => 'string',
    'ordering' => 'string',
  ),
  'enchant_dict_add_to_personal' => 
  array (
    0 => 'void',
    'dictionary' => 'EnchantDictionary',
    'word' => 'string',
  ),
  'enchant_dict_add_to_session' => 
  array (
    0 => 'void',
    'dictionary' => 'EnchantDictionary',
    'word' => 'string',
  ),
  'enchant_dict_check' => 
  array (
    0 => 'bool',
    'dictionary' => 'EnchantDictionary',
    'word' => 'string',
  ),
  'enchant_dict_describe' => 
  array (
    0 => 'array<array-key, mixed>',
    'dictionary' => 'EnchantDictionary',
  ),
  'enchant_dict_get_error' => 
  array (
    0 => 'string',
    'dictionary' => 'EnchantDictionary',
  ),
  'enchant_dict_is_in_session' => 
  array (
    0 => 'bool',
    'dictionary' => 'EnchantDictionary',
    'word' => 'string',
  ),
  'enchant_dict_quick_check' => 
  array (
    0 => 'bool',
    'dictionary' => 'EnchantDictionary',
    'word' => 'string',
    '&w_suggestions=' => 'array<int, string>',
  ),
  'enchant_dict_store_replacement' => 
  array (
    0 => 'void',
    'dictionary' => 'EnchantDictionary',
    'misspelled' => 'string',
    'correct' => 'string',
  ),
  'enchant_dict_suggest' => 
  array (
    0 => 'array<array-key, mixed>',
    'dictionary' => 'EnchantDictionary',
    'word' => 'string',
  ),
  'end' => 
  array (
    0 => 'false|mixed',
    '&r_array' => 'array<array-key, mixed>|object',
  ),
  'error::__clone' => 
  array (
    0 => 'void',
  ),
  'error::__construct' => 
  array (
    0 => 'void',
    'message=' => 'string',
    'code=' => 'int',
    'previous=' => 'Throwable|null',
  ),
  'error::__tostring' => 
  array (
    0 => 'string',
  ),
  'error::getcode' => 
  array (
    0 => 'int',
  ),
  'error::getfile' => 
  array (
    0 => 'string',
  ),
  'error::getline' => 
  array (
    0 => 'int',
  ),
  'error::getmessage' => 
  array (
    0 => 'string',
  ),
  'error::getprevious' => 
  array (
    0 => 'Throwable|null',
  ),
  'error::gettrace' => 
  array (
    0 => 'list<array{args?: array<array-key, mixed>, class?: class-string, file?: string, function: string, line?: int, type?: \'->\'|\'::\'}>',
  ),
  'error::gettraceasstring' => 
  array (
    0 => 'string',
  ),
  'error_clear_last' => 
  array (
    0 => 'void',
  ),
  'error_get_last' => 
  array (
    0 => 'array{file: string, line: int, message: string, type: int}|null',
  ),
  'error_log' => 
  array (
    0 => 'bool',
    'message' => 'string',
    'message_type=' => 'int',
    'destination=' => 'null|string',
    'additional_headers=' => 'null|string',
  ),
  'error_reporting' => 
  array (
    0 => 'int',
    'error_level=' => 'int|null',
  ),
  'errorexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'string',
    'code=' => 'int',
    'severity=' => 'int',
    'filename=' => 'null|string',
    'line=' => 'int|null',
    'previous=' => 'Throwable|null',
  ),
  'errorexception::__tostring' => 
  array (
    0 => 'string',
  ),
  'errorexception::getcode' => 
  array (
    0 => 'int',
  ),
  'errorexception::getfile' => 
  array (
    0 => 'string',
  ),
  'errorexception::getline' => 
  array (
    0 => 'int',
  ),
  'errorexception::getmessage' => 
  array (
    0 => 'string',
  ),
  'errorexception::getprevious' => 
  array (
    0 => 'Throwable|null',
  ),
  'errorexception::getseverity' => 
  array (
    0 => 'int',
  ),
  'errorexception::gettrace' => 
  array (
    0 => 'list<array{args?: array<array-key, mixed>, class?: class-string, file?: string, function: string, line?: int, type?: \'->\'|\'::\'}>',
  ),
  'errorexception::gettraceasstring' => 
  array (
    0 => 'string',
  ),
  'escapeshellarg' => 
  array (
    0 => 'string',
    'arg' => 'string',
  ),
  'escapeshellcmd' => 
  array (
    0 => 'string',
    'command' => 'string',
  ),
  'ev::backend' => 
  array (
    0 => 'int',
  ),
  'ev::depth' => 
  array (
    0 => 'int',
  ),
  'ev::embeddablebackends' => 
  array (
    0 => 'int',
  ),
  'ev::feedsignal' => 
  array (
    0 => 'void',
    'signum' => 'int',
  ),
  'ev::feedsignalevent' => 
  array (
    0 => 'void',
    'signum' => 'int',
  ),
  'ev::iteration' => 
  array (
    0 => 'int',
  ),
  'ev::now' => 
  array (
    0 => 'float',
  ),
  'ev::nowupdate' => 
  array (
    0 => 'void',
  ),
  'ev::recommendedbackends' => 
  array (
    0 => 'int',
  ),
  'ev::resume' => 
  array (
    0 => 'void',
  ),
  'ev::run' => 
  array (
    0 => 'void',
    'flags=' => 'int',
  ),
  'ev::sleep' => 
  array (
    0 => 'void',
    'seconds' => 'float',
  ),
  'ev::stop' => 
  array (
    0 => 'void',
    'how=' => 'int',
  ),
  'ev::supportedbackends' => 
  array (
    0 => 'int',
  ),
  'ev::suspend' => 
  array (
    0 => 'void',
  ),
  'ev::time' => 
  array (
    0 => 'float',
  ),
  'ev::verify' => 
  array (
    0 => 'void',
  ),
  'eval' => 
  array (
    0 => 'mixed',
    'code_str' => 'string',
  ),
  'evcheck::__construct' => 
  array (
    0 => 'void',
    'callback' => 'callable',
    'data=' => 'mixed',
    'priority=' => 'int',
  ),
  'evcheck::clear' => 
  array (
    0 => 'int',
  ),
  'evcheck::createstopped' => 
  array (
    0 => 'EvCheck',
    'callback' => 'callable',
    'data=' => 'mixed',
    'priority=' => 'int',
  ),
  'evcheck::feed' => 
  array (
    0 => 'void',
    'revents' => 'int',
  ),
  'evcheck::getloop' => 
  array (
    0 => 'EvLoop|null',
  ),
  'evcheck::invoke' => 
  array (
    0 => 'void',
    'revents' => 'int',
  ),
  'evcheck::keepalive' => 
  array (
    0 => 'bool',
    'value=' => 'bool',
  ),
  'evcheck::setcallback' => 
  array (
    0 => 'void',
    'callback' => 'callable',
  ),
  'evcheck::start' => 
  array (
    0 => 'void',
  ),
  'evcheck::stop' => 
  array (
    0 => 'void',
  ),
  'evchild::__construct' => 
  array (
    0 => 'void',
    'pid' => 'int',
    'trace' => 'bool',
    'callback' => 'callable',
    'data=' => 'mixed',
    'priority=' => 'int',
  ),
  'evchild::clear' => 
  array (
    0 => 'int',
  ),
  'evchild::createstopped' => 
  array (
    0 => 'EvChild',
    'pid' => 'int',
    'trace' => 'bool',
    'callback' => 'callable',
    'data=' => 'mixed',
    'priority=' => 'int',
  ),
  'evchild::feed' => 
  array (
    0 => 'void',
    'revents' => 'int',
  ),
  'evchild::getloop' => 
  array (
    0 => 'EvLoop|null',
  ),
  'evchild::invoke' => 
  array (
    0 => 'void',
    'revents' => 'int',
  ),
  'evchild::keepalive' => 
  array (
    0 => 'bool',
    'value=' => 'bool',
  ),
  'evchild::set' => 
  array (
    0 => 'void',
    'pid' => 'int',
    'trace' => 'bool',
  ),
  'evchild::setcallback' => 
  array (
    0 => 'void',
    'callback' => 'callable',
  ),
  'evchild::start' => 
  array (
    0 => 'void',
  ),
  'evchild::stop' => 
  array (
    0 => 'void',
  ),
  'evembed::__construct' => 
  array (
    0 => 'void',
    'other' => 'EvLoop',
    'callback' => 'callable',
    'data=' => 'mixed',
    'priority=' => 'int',
  ),
  'evembed::clear' => 
  array (
    0 => 'int',
  ),
  'evembed::createstopped' => 
  array (
    0 => 'EvEmbed',
    'other' => 'EvLoop',
    'callback' => 'callable',
    'data=' => 'mixed',
    'priority=' => 'int',
  ),
  'evembed::feed' => 
  array (
    0 => 'void',
    'revents' => 'int',
  ),
  'evembed::getloop' => 
  array (
    0 => 'EvLoop|null',
  ),
  'evembed::invoke' => 
  array (
    0 => 'void',
    'revents' => 'int',
  ),
  'evembed::keepalive' => 
  array (
    0 => 'bool',
    'value=' => 'bool',
  ),
  'evembed::set' => 
  array (
    0 => 'void',
    'other' => 'EvLoop',
  ),
  'evembed::setcallback' => 
  array (
    0 => 'void',
    'callback' => 'callable',
  ),
  'evembed::start' => 
  array (
    0 => 'void',
  ),
  'evembed::stop' => 
  array (
    0 => 'void',
  ),
  'evembed::sweep' => 
  array (
    0 => 'void',
  ),
  'event::__construct' => 
  array (
    0 => 'void',
    'base' => 'EventBase',
    'fd' => 'mixed',
    'what' => 'int',
    'cb' => 'callable',
    'arg=' => 'mixed',
  ),
  'event::add' => 
  array (
    0 => 'bool',
    'timeout=' => 'float',
  ),
  'event::addsignal' => 
  array (
    0 => 'bool',
    'timeout=' => 'float',
  ),
  'event::addtimer' => 
  array (
    0 => 'bool',
    'timeout=' => 'float',
  ),
  'event::del' => 
  array (
    0 => 'bool',
  ),
  'event::delsignal' => 
  array (
    0 => 'bool',
  ),
  'event::deltimer' => 
  array (
    0 => 'bool',
  ),
  'event::free' => 
  array (
    0 => 'void',
  ),
  'event::getsupportedmethods' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'event::pending' => 
  array (
    0 => 'bool',
    'flags' => 'int',
  ),
  'event::set' => 
  array (
    0 => 'bool',
    'base' => 'EventBase',
    'fd' => 'mixed',
    'what=' => 'int',
    'cb=' => 'callable|null',
    'arg=' => 'mixed',
  ),
  'event::setpriority' => 
  array (
    0 => 'bool',
    'priority' => 'int',
  ),
  'event::settimer' => 
  array (
    0 => 'bool',
    'base' => 'EventBase',
    'cb' => 'callable',
    'arg=' => 'mixed',
  ),
  'event::signal' => 
  array (
    0 => 'Event',
    'base' => 'EventBase',
    'signum' => 'int',
    'cb' => 'callable',
    'arg=' => 'mixed',
  ),
  'event::timer' => 
  array (
    0 => 'Event',
    'base' => 'EventBase',
    'cb' => 'callable',
    'arg=' => 'mixed',
  ),
  'event_add' => 
  array (
    0 => 'bool',
    'event' => 'resource',
    'timeout=' => 'int',
  ),
  'event_base_free' => 
  array (
    0 => 'void',
    'event_base' => 'resource',
  ),
  'event_base_loop' => 
  array (
    0 => 'int',
    'event_base' => 'resource',
    'flags=' => 'int',
  ),
  'event_base_loopbreak' => 
  array (
    0 => 'bool',
    'event_base' => 'resource',
  ),
  'event_base_loopexit' => 
  array (
    0 => 'bool',
    'event_base' => 'resource',
    'timeout=' => 'int',
  ),
  'event_base_new' => 
  array (
    0 => 'false|resource',
  ),
  'event_base_priority_init' => 
  array (
    0 => 'bool',
    'event_base' => 'resource',
    'npriorities' => 'int',
  ),
  'event_base_reinit' => 
  array (
    0 => 'bool',
    'event_base' => 'resource',
  ),
  'event_base_set' => 
  array (
    0 => 'bool',
    'event' => 'resource',
    'event_base' => 'resource',
  ),
  'event_buffer_base_set' => 
  array (
    0 => 'bool',
    'bevent' => 'resource',
    'event_base' => 'resource',
  ),
  'event_buffer_disable' => 
  array (
    0 => 'bool',
    'bevent' => 'resource',
    'events' => 'int',
  ),
  'event_buffer_enable' => 
  array (
    0 => 'bool',
    'bevent' => 'resource',
    'events' => 'int',
  ),
  'event_buffer_fd_set' => 
  array (
    0 => 'void',
    'bevent' => 'resource',
    'fd' => 'resource',
  ),
  'event_buffer_free' => 
  array (
    0 => 'void',
    'bevent' => 'resource',
  ),
  'event_buffer_new' => 
  array (
    0 => 'false|resource',
    'stream' => 'resource',
    'readcb' => 'callable|null',
    'writecb' => 'callable|null',
    'errorcb' => 'callable',
    'arg=' => 'mixed',
  ),
  'event_buffer_priority_set' => 
  array (
    0 => 'bool',
    'bevent' => 'resource',
    'priority' => 'int',
  ),
  'event_buffer_read' => 
  array (
    0 => 'string',
    'bevent' => 'resource',
    'data_size' => 'int',
  ),
  'event_buffer_set_callback' => 
  array (
    0 => 'bool',
    'event' => 'resource',
    'readcb' => 'mixed',
    'writecb' => 'mixed',
    'errorcb' => 'mixed',
    'arg=' => 'mixed',
  ),
  'event_buffer_timeout_set' => 
  array (
    0 => 'void',
    'bevent' => 'resource',
    'read_timeout' => 'int',
    'write_timeout' => 'int',
  ),
  'event_buffer_watermark_set' => 
  array (
    0 => 'void',
    'bevent' => 'resource',
    'events' => 'int',
    'lowmark' => 'int',
    'highmark' => 'int',
  ),
  'event_buffer_write' => 
  array (
    0 => 'bool',
    'bevent' => 'resource',
    'data' => 'string',
    'data_size=' => 'int',
  ),
  'event_del' => 
  array (
    0 => 'bool',
    'event' => 'resource',
  ),
  'event_free' => 
  array (
    0 => 'void',
    'event' => 'resource',
  ),
  'event_new' => 
  array (
    0 => 'false|resource',
  ),
  'event_priority_set' => 
  array (
    0 => 'bool',
    'event' => 'resource',
    'priority' => 'int',
  ),
  'event_set' => 
  array (
    0 => 'bool',
    'event' => 'resource',
    'fd' => 'int|resource',
    'events' => 'int',
    'callback' => 'callable',
    'arg=' => 'mixed',
  ),
  'event_timer_add' => 
  array (
    0 => 'bool',
    'event' => 'resource',
    'timeout=' => 'int',
  ),
  'event_timer_del' => 
  array (
    0 => 'bool',
    'event' => 'resource',
  ),
  'event_timer_new' => 
  array (
    0 => 'false|resource',
  ),
  'event_timer_pending' => 
  array (
    0 => 'bool',
    'event' => 'resource',
    'timeout=' => 'int',
  ),
  'event_timer_set' => 
  array (
    0 => 'bool',
    'event' => 'resource',
    'callback' => 'callable',
    'arg=' => 'mixed',
  ),
  'eventbase::__construct' => 
  array (
    0 => 'void',
    'cfg=' => 'EventConfig|null',
  ),
  'eventbase::dispatch' => 
  array (
    0 => 'bool',
  ),
  'eventbase::exit' => 
  array (
    0 => 'bool',
    'timeout=' => 'float',
  ),
  'eventbase::free' => 
  array (
    0 => 'void',
  ),
  'eventbase::getfeatures' => 
  array (
    0 => 'int',
  ),
  'eventbase::getmethod' => 
  array (
    0 => 'string',
  ),
  'eventbase::gettimeofdaycached' => 
  array (
    0 => 'float',
  ),
  'eventbase::gotexit' => 
  array (
    0 => 'bool',
  ),
  'eventbase::gotstop' => 
  array (
    0 => 'bool',
  ),
  'eventbase::loop' => 
  array (
    0 => 'bool',
    'flags=' => 'int',
  ),
  'eventbase::priorityinit' => 
  array (
    0 => 'bool',
    'n_priorities' => 'int',
  ),
  'eventbase::reinit' => 
  array (
    0 => 'bool',
  ),
  'eventbase::stop' => 
  array (
    0 => 'bool',
  ),
  'eventbuffer::add' => 
  array (
    0 => 'bool',
    'data' => 'string',
  ),
  'eventbuffer::addbuffer' => 
  array (
    0 => 'bool',
    'buf' => 'EventBuffer',
  ),
  'eventbuffer::appendfrom' => 
  array (
    0 => 'int',
    'buf' => 'EventBuffer',
    'len' => 'int',
  ),
  'eventbuffer::copyout' => 
  array (
    0 => 'int',
    '&w_data' => 'string',
    'max_bytes' => 'int',
  ),
  'eventbuffer::drain' => 
  array (
    0 => 'bool',
    'len' => 'int',
  ),
  'eventbuffer::enablelocking' => 
  array (
    0 => 'void',
  ),
  'eventbuffer::expand' => 
  array (
    0 => 'bool',
    'len' => 'int',
  ),
  'eventbuffer::freeze' => 
  array (
    0 => 'bool',
    'at_front' => 'bool',
  ),
  'eventbuffer::lock' => 
  array (
    0 => 'void',
    'at_front' => 'bool',
  ),
  'eventbuffer::prepend' => 
  array (
    0 => 'bool',
    'data' => 'string',
  ),
  'eventbuffer::prependbuffer' => 
  array (
    0 => 'bool',
    'buf' => 'EventBuffer',
  ),
  'eventbuffer::pullup' => 
  array (
    0 => 'null|string',
    'size' => 'int',
  ),
  'eventbuffer::read' => 
  array (
    0 => 'string',
    'max_bytes' => 'int',
  ),
  'eventbuffer::readfrom' => 
  array (
    0 => 'int',
    'fd' => 'mixed',
    'howmuch=' => 'int',
  ),
  'eventbuffer::readline' => 
  array (
    0 => 'null|string',
    'eol_style' => 'int',
  ),
  'eventbuffer::search' => 
  array (
    0 => 'false|int',
    'what' => 'string',
    'start=' => 'int',
    'end=' => 'int',
  ),
  'eventbuffer::searcheol' => 
  array (
    0 => 'false|int',
    'start=' => 'int',
    'eol_style=' => 'int',
  ),
  'eventbuffer::substr' => 
  array (
    0 => 'string',
    'start' => 'int',
    'length=' => 'int',
  ),
  'eventbuffer::unfreeze' => 
  array (
    0 => 'bool',
    'at_front' => 'bool',
  ),
  'eventbuffer::unlock' => 
  array (
    0 => 'void',
    'at_front' => 'bool',
  ),
  'eventbuffer::write' => 
  array (
    0 => 'int',
    'fd' => 'mixed',
    'howmuch=' => 'int',
  ),
  'eventbufferevent::__construct' => 
  array (
    0 => 'void',
    'base' => 'EventBase',
    'socket=' => 'mixed',
    'options=' => 'int',
    'readcb=' => 'callable|null',
    'writecb=' => 'callable|null',
    'eventcb=' => 'callable|null',
    'arg=' => 'mixed',
  ),
  'eventbufferevent::close' => 
  array (
    0 => 'void',
  ),
  'eventbufferevent::connect' => 
  array (
    0 => 'bool',
    'addr' => 'string',
  ),
  'eventbufferevent::connecthost' => 
  array (
    0 => 'bool',
    'dns_base' => 'EventDnsBase|null',
    'hostname' => 'string',
    'port' => 'int',
    'family=' => 'int',
  ),
  'eventbufferevent::createpair' => 
  array (
    0 => 'array<array-key, mixed>',
    'base' => 'EventBase',
    'options=' => 'int',
  ),
  'eventbufferevent::disable' => 
  array (
    0 => 'bool',
    'events' => 'int',
  ),
  'eventbufferevent::enable' => 
  array (
    0 => 'bool',
    'events' => 'int',
  ),
  'eventbufferevent::free' => 
  array (
    0 => 'void',
  ),
  'eventbufferevent::getdnserrorstring' => 
  array (
    0 => 'string',
  ),
  'eventbufferevent::getenabled' => 
  array (
    0 => 'int',
  ),
  'eventbufferevent::getinput' => 
  array (
    0 => 'EventBuffer',
  ),
  'eventbufferevent::getoutput' => 
  array (
    0 => 'EventBuffer',
  ),
  'eventbufferevent::read' => 
  array (
    0 => 'null|string',
    'size' => 'int',
  ),
  'eventbufferevent::readbuffer' => 
  array (
    0 => 'bool',
    'buf' => 'EventBuffer',
  ),
  'eventbufferevent::setcallbacks' => 
  array (
    0 => 'void',
    'readcb' => 'callable|null',
    'writecb' => 'callable|null',
    'eventcb' => 'callable|null',
    'arg=' => 'string',
  ),
  'eventbufferevent::setpriority' => 
  array (
    0 => 'bool',
    'priority' => 'int',
  ),
  'eventbufferevent::settimeouts' => 
  array (
    0 => 'bool',
    'timeout_read' => 'float',
    'timeout_write' => 'float',
  ),
  'eventbufferevent::setwatermark' => 
  array (
    0 => 'void',
    'events' => 'int',
    'lowmark' => 'int',
    'highmark' => 'int',
  ),
  'eventbufferevent::sslerror' => 
  array (
    0 => 'string',
  ),
  'eventbufferevent::sslgetcipherinfo' => 
  array (
    0 => 'string',
  ),
  'eventbufferevent::sslgetciphername' => 
  array (
    0 => 'string',
  ),
  'eventbufferevent::sslgetcipherversion' => 
  array (
    0 => 'string',
  ),
  'eventbufferevent::sslgetprotocol' => 
  array (
    0 => 'string',
  ),
  'eventbufferevent::sslrenegotiate' => 
  array (
    0 => 'void',
  ),
  'eventbufferevent::sslsocket' => 
  array (
    0 => 'EventBufferEvent',
    'base' => 'EventBase',
    'socket' => 'mixed',
    'ctx' => 'EventSslContext',
    'state' => 'int',
    'options=' => 'int',
  ),
  'eventbufferevent::write' => 
  array (
    0 => 'bool',
    'data' => 'string',
  ),
  'eventbufferevent::writebuffer' => 
  array (
    0 => 'bool',
    'buf' => 'EventBuffer',
  ),
  'eventconfig::avoidmethod' => 
  array (
    0 => 'bool',
    'method' => 'string',
  ),
  'eventconfig::requirefeatures' => 
  array (
    0 => 'bool',
    'feature' => 'int',
  ),
  'eventconfig::setmaxdispatchinterval' => 
  array (
    0 => 'void',
    'max_interval' => 'int',
    'max_callbacks' => 'int',
    'min_priority' => 'int',
  ),
  'eventdnsbase::__construct' => 
  array (
    0 => 'void',
    'base' => 'EventBase',
    'initialize' => 'bool',
  ),
  'eventdnsbase::addnameserverip' => 
  array (
    0 => 'bool',
    'ip' => 'string',
  ),
  'eventdnsbase::addsearch' => 
  array (
    0 => 'void',
    'domain' => 'string',
  ),
  'eventdnsbase::clearsearch' => 
  array (
    0 => 'void',
  ),
  'eventdnsbase::countnameservers' => 
  array (
    0 => 'int',
  ),
  'eventdnsbase::loadhosts' => 
  array (
    0 => 'bool',
    'hosts' => 'string',
  ),
  'eventdnsbase::parseresolvconf' => 
  array (
    0 => 'bool',
    'flags' => 'int',
    'filename' => 'string',
  ),
  'eventdnsbase::setoption' => 
  array (
    0 => 'bool',
    'option' => 'string',
    'value' => 'string',
  ),
  'eventdnsbase::setsearchndots' => 
  array (
    0 => 'void',
    'ndots' => 'int',
  ),
  'eventhttp::accept' => 
  array (
    0 => 'bool',
    'socket' => 'mixed',
  ),
  'eventhttp::addserveralias' => 
  array (
    0 => 'bool',
    'alias' => 'string',
  ),
  'eventhttp::bind' => 
  array (
    0 => 'bool',
    'address' => 'string',
    'port' => 'int',
  ),
  'eventhttp::removeserveralias' => 
  array (
    0 => 'bool',
    'alias' => 'string',
  ),
  'eventhttp::setallowedmethods' => 
  array (
    0 => 'void',
    'methods' => 'int',
  ),
  'eventhttp::setcallback' => 
  array (
    0 => 'bool',
    'path' => 'string',
    'cb' => 'callable',
    'arg=' => 'string',
  ),
  'eventhttp::setdefaultcallback' => 
  array (
    0 => 'void',
    'cb' => 'callable',
    'arg=' => 'string',
  ),
  'eventhttp::setmaxbodysize' => 
  array (
    0 => 'void',
    'value' => 'int',
  ),
  'eventhttp::setmaxheaderssize' => 
  array (
    0 => 'void',
    'value' => 'int',
  ),
  'eventhttp::settimeout' => 
  array (
    0 => 'void',
    'value' => 'int',
  ),
  'eventhttpconnection::__construct' => 
  array (
    0 => 'void',
    'base' => 'EventBase',
    'dns_base' => 'EventDnsBase|null',
    'address' => 'string',
    'port' => 'int',
    'ctx=' => 'EventSslContext|null',
  ),
  'eventhttpconnection::getbase' => 
  array (
    0 => 'EventBase',
  ),
  'eventhttpconnection::getpeer' => 
  array (
    0 => 'void',
    '&w_address' => 'string',
    '&w_port' => 'int',
  ),
  'eventhttpconnection::makerequest' => 
  array (
    0 => 'bool|null',
    'req' => 'EventHttpRequest',
    'type' => 'int',
    'uri' => 'string',
  ),
  'eventhttpconnection::setclosecallback' => 
  array (
    0 => 'void',
    'callback' => 'callable',
    'data=' => 'mixed',
  ),
  'eventhttpconnection::setlocaladdress' => 
  array (
    0 => 'void',
    'address' => 'string',
  ),
  'eventhttpconnection::setlocalport' => 
  array (
    0 => 'void',
    'port' => 'int',
  ),
  'eventhttpconnection::setmaxbodysize' => 
  array (
    0 => 'void',
    'max_size' => 'int',
  ),
  'eventhttpconnection::setmaxheaderssize' => 
  array (
    0 => 'void',
    'max_size' => 'int',
  ),
  'eventhttpconnection::setretries' => 
  array (
    0 => 'void',
    'retries' => 'int',
  ),
  'eventhttpconnection::settimeout' => 
  array (
    0 => 'void',
    'timeout' => 'int',
  ),
  'eventhttprequest::__construct' => 
  array (
    0 => 'void',
    'callback' => 'callable',
    'data=' => 'mixed',
  ),
  'eventhttprequest::addheader' => 
  array (
    0 => 'bool',
    'key' => 'string',
    'value' => 'string',
    'type' => 'int',
  ),
  'eventhttprequest::cancel' => 
  array (
    0 => 'void',
  ),
  'eventhttprequest::clearheaders' => 
  array (
    0 => 'void',
  ),
  'eventhttprequest::closeconnection' => 
  array (
    0 => 'void',
  ),
  'eventhttprequest::findheader' => 
  array (
    0 => 'null|string',
    'key' => 'string',
    'type' => 'int',
  ),
  'eventhttprequest::free' => 
  array (
    0 => 'void',
  ),
  'eventhttprequest::getbufferevent' => 
  array (
    0 => 'EventBufferEvent|null',
  ),
  'eventhttprequest::getcommand' => 
  array (
    0 => 'int',
  ),
  'eventhttprequest::getconnection' => 
  array (
    0 => 'EventHttpConnection|null',
  ),
  'eventhttprequest::gethost' => 
  array (
    0 => 'string',
  ),
  'eventhttprequest::getinputbuffer' => 
  array (
    0 => 'EventBuffer',
  ),
  'eventhttprequest::getinputheaders' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'eventhttprequest::getoutputbuffer' => 
  array (
    0 => 'EventBuffer',
  ),
  'eventhttprequest::getoutputheaders' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'eventhttprequest::getresponsecode' => 
  array (
    0 => 'int',
  ),
  'eventhttprequest::geturi' => 
  array (
    0 => 'string',
  ),
  'eventhttprequest::removeheader' => 
  array (
    0 => 'bool',
    'key' => 'string',
    'type' => 'int',
  ),
  'eventhttprequest::senderror' => 
  array (
    0 => 'void',
    'error' => 'int',
    'reason=' => 'null|string',
  ),
  'eventhttprequest::sendreply' => 
  array (
    0 => 'void',
    'code' => 'int',
    'reason' => 'string',
    'buf=' => 'EventBuffer|null',
  ),
  'eventhttprequest::sendreplychunk' => 
  array (
    0 => 'void',
    'buf' => 'EventBuffer',
  ),
  'eventhttprequest::sendreplyend' => 
  array (
    0 => 'void',
  ),
  'eventhttprequest::sendreplystart' => 
  array (
    0 => 'void',
    'code' => 'int',
    'reason' => 'string',
  ),
  'eventlistener::__construct' => 
  array (
    0 => 'void',
    'base' => 'EventBase',
    'cb' => 'callable',
    'data' => 'mixed',
    'flags' => 'int',
    'backlog' => 'int',
    'target' => 'mixed',
  ),
  'eventlistener::disable' => 
  array (
    0 => 'bool',
  ),
  'eventlistener::enable' => 
  array (
    0 => 'bool',
  ),
  'eventlistener::getbase' => 
  array (
    0 => 'EventBase',
  ),
  'eventlistener::getsocketname' => 
  array (
    0 => 'bool',
    '&w_address' => 'string',
    '&w_port' => 'mixed',
  ),
  'eventlistener::setcallback' => 
  array (
    0 => 'void',
    'cb' => 'callable',
    'arg=' => 'mixed',
  ),
  'eventlistener::seterrorcallback' => 
  array (
    0 => 'void',
    'cb' => 'callable',
  ),
  'eventsslcontext::__construct' => 
  array (
    0 => 'void',
    'method' => 'int',
    'options' => 'array<array-key, mixed>',
  ),
  'eventutil::getlastsocketerrno' => 
  array (
    0 => 'int',
    'socket=' => 'Socket|null',
  ),
  'eventutil::getlastsocketerror' => 
  array (
    0 => 'string',
    'socket=' => 'mixed',
  ),
  'eventutil::getsocketfd' => 
  array (
    0 => 'int',
    'socket' => 'mixed',
  ),
  'eventutil::getsocketname' => 
  array (
    0 => 'bool',
    'socket' => 'mixed',
    '&w_address' => 'string',
    '&w_port=' => 'mixed',
  ),
  'eventutil::setsocketoption' => 
  array (
    0 => 'bool',
    'socket' => 'mixed',
    'level' => 'int',
    'optname' => 'int',
    'optval' => 'mixed',
  ),
  'eventutil::sslrandpoll' => 
  array (
    0 => 'bool',
  ),
  'evfork::__construct' => 
  array (
    0 => 'void',
    'loop' => 'EvLoop',
    'callback' => 'callable',
    'data=' => 'mixed',
    'priority=' => 'int',
  ),
  'evfork::clear' => 
  array (
    0 => 'int',
  ),
  'evfork::createstopped' => 
  array (
    0 => 'EvFork',
    'loop' => 'EvLoop',
    'callback' => 'callable',
    'data=' => 'string',
    'priority=' => 'int',
  ),
  'evfork::feed' => 
  array (
    0 => 'void',
    'revents' => 'int',
  ),
  'evfork::getloop' => 
  array (
    0 => 'EvLoop|null',
  ),
  'evfork::invoke' => 
  array (
    0 => 'void',
    'revents' => 'int',
  ),
  'evfork::keepalive' => 
  array (
    0 => 'bool',
    'value=' => 'bool',
  ),
  'evfork::setcallback' => 
  array (
    0 => 'void',
    'callback' => 'callable',
  ),
  'evfork::start' => 
  array (
    0 => 'void',
  ),
  'evfork::stop' => 
  array (
    0 => 'void',
  ),
  'evidle::__construct' => 
  array (
    0 => 'void',
    'callback' => 'callable',
    'data=' => 'mixed',
    'priority=' => 'int',
  ),
  'evidle::clear' => 
  array (
    0 => 'int',
  ),
  'evidle::createstopped' => 
  array (
    0 => 'EvIdle',
    'callback' => 'callable',
    'data=' => 'mixed',
    'priority=' => 'int',
  ),
  'evidle::feed' => 
  array (
    0 => 'void',
    'revents' => 'int',
  ),
  'evidle::getloop' => 
  array (
    0 => 'EvLoop|null',
  ),
  'evidle::invoke' => 
  array (
    0 => 'void',
    'revents' => 'int',
  ),
  'evidle::keepalive' => 
  array (
    0 => 'bool',
    'value=' => 'bool',
  ),
  'evidle::setcallback' => 
  array (
    0 => 'void',
    'callback' => 'callable',
  ),
  'evidle::start' => 
  array (
    0 => 'void',
  ),
  'evidle::stop' => 
  array (
    0 => 'void',
  ),
  'evio::__construct' => 
  array (
    0 => 'void',
    'fd' => 'mixed',
    'events' => 'int',
    'callback' => 'callable',
    'data=' => 'mixed',
    'priority=' => 'int',
  ),
  'evio::clear' => 
  array (
    0 => 'int',
  ),
  'evio::createstopped' => 
  array (
    0 => 'EvIo',
    'fd' => 'resource',
    'events' => 'int',
    'callback' => 'callable',
    'data=' => 'mixed',
    'priority=' => 'int',
  ),
  'evio::feed' => 
  array (
    0 => 'void',
    'revents' => 'int',
  ),
  'evio::getloop' => 
  array (
    0 => 'EvLoop|null',
  ),
  'evio::invoke' => 
  array (
    0 => 'void',
    'revents' => 'int',
  ),
  'evio::keepalive' => 
  array (
    0 => 'bool',
    'value=' => 'bool',
  ),
  'evio::set' => 
  array (
    0 => 'void',
    'fd' => 'resource',
    'events' => 'int',
  ),
  'evio::setcallback' => 
  array (
    0 => 'void',
    'callback' => 'callable',
  ),
  'evio::start' => 
  array (
    0 => 'void',
  ),
  'evio::stop' => 
  array (
    0 => 'void',
  ),
  'evloop::__construct' => 
  array (
    0 => 'void',
    'flags=' => 'int',
    'data=' => 'mixed',
    'io_interval=' => 'float',
    'timeout_interval=' => 'float',
  ),
  'evloop::backend' => 
  array (
    0 => 'int',
  ),
  'evloop::child' => 
  array (
    0 => 'EvChild',
    'pid' => 'int',
    'trace' => 'bool',
    'callback' => 'callable',
    'data=' => 'mixed',
    'priority=' => 'int',
  ),
  'evloop::defaultloop' => 
  array (
    0 => 'EvLoop',
    'flags=' => 'int',
    'data=' => 'mixed',
    'io_interval=' => 'float',
    'timeout_interval=' => 'float',
  ),
  'evloop::embed' => 
  array (
    0 => 'EvEmbed',
    'callback' => 'callable',
    'data=' => 'mixed',
    'priority=' => 'int',
  ),
  'evloop::fork' => 
  array (
    0 => 'EvFork',
    'callback' => 'callable',
    'data=' => 'mixed',
    'priority=' => 'int',
  ),
  'evloop::idle' => 
  array (
    0 => 'EvIdle',
    'callback' => 'callable',
    'data=' => 'mixed',
    'priority=' => 'int',
  ),
  'evloop::invokepending' => 
  array (
    0 => 'void',
  ),
  'evloop::io' => 
  array (
    0 => 'EvIo',
    'fd' => 'resource',
    'events' => 'int',
    'callback' => 'callable',
    'data=' => 'mixed',
    'priority=' => 'int',
  ),
  'evloop::loopfork' => 
  array (
    0 => 'void',
  ),
  'evloop::now' => 
  array (
    0 => 'float',
  ),
  'evloop::nowupdate' => 
  array (
    0 => 'void',
  ),
  'evloop::periodic' => 
  array (
    0 => 'EvPeriodic',
    'offset' => 'float',
    'interval' => 'float',
    'reschedule_cb' => 'callable',
    'callback' => 'callable',
    'data=' => 'mixed',
    'priority=' => 'int',
  ),
  'evloop::prepare' => 
  array (
    0 => 'EvPrepare',
    'callback' => 'callable',
    'data=' => 'mixed',
    'priority=' => 'int',
  ),
  'evloop::resume' => 
  array (
    0 => 'void',
  ),
  'evloop::run' => 
  array (
    0 => 'void',
    'flags=' => 'int',
  ),
  'evloop::signal' => 
  array (
    0 => 'EvSignal',
    'signum' => 'int',
    'callback' => 'callable',
    'data=' => 'mixed',
    'priority=' => 'int',
  ),
  'evloop::stat' => 
  array (
    0 => 'EvStat',
    'path' => 'string',
    'interval' => 'float',
    'callback' => 'callable',
    'data=' => 'mixed',
    'priority=' => 'int',
  ),
  'evloop::stop' => 
  array (
    0 => 'void',
    'how=' => 'int',
  ),
  'evloop::suspend' => 
  array (
    0 => 'void',
  ),
  'evloop::timer' => 
  array (
    0 => 'EvTimer',
    'after' => 'float',
    'repeat' => 'float',
    'callback' => 'callable',
    'data=' => 'mixed',
    'priority=' => 'int',
  ),
  'evloop::verify' => 
  array (
    0 => 'void',
  ),
  'evperiodic::__construct' => 
  array (
    0 => 'void',
    'offset' => 'float',
    'interval' => 'float',
    'reschedule_cb' => 'callable',
    'callback' => 'callable',
    'data=' => 'mixed',
    'priority=' => 'int',
  ),
  'evperiodic::again' => 
  array (
    0 => 'void',
  ),
  'evperiodic::at' => 
  array (
    0 => 'float',
  ),
  'evperiodic::clear' => 
  array (
    0 => 'int',
  ),
  'evperiodic::createstopped' => 
  array (
    0 => 'EvPeriodic',
    'offset' => 'float',
    'interval' => 'float',
    'reschedule_cb' => 'callable',
    'callback' => 'callable',
    'data=' => 'mixed',
    'priority=' => 'int',
  ),
  'evperiodic::feed' => 
  array (
    0 => 'void',
    'revents' => 'int',
  ),
  'evperiodic::getloop' => 
  array (
    0 => 'EvLoop|null',
  ),
  'evperiodic::invoke' => 
  array (
    0 => 'void',
    'revents' => 'int',
  ),
  'evperiodic::keepalive' => 
  array (
    0 => 'bool',
    'value=' => 'bool',
  ),
  'evperiodic::set' => 
  array (
    0 => 'void',
    'offset' => 'float',
    'interval' => 'float',
    'reschedule_cb=' => 'mixed',
  ),
  'evperiodic::setcallback' => 
  array (
    0 => 'void',
    'callback' => 'callable',
  ),
  'evperiodic::start' => 
  array (
    0 => 'void',
  ),
  'evperiodic::stop' => 
  array (
    0 => 'void',
  ),
  'evprepare::__construct' => 
  array (
    0 => 'void',
    'callback' => 'string',
    'data=' => 'string',
    'priority=' => 'int',
  ),
  'evprepare::clear' => 
  array (
    0 => 'int',
  ),
  'evprepare::createstopped' => 
  array (
    0 => 'EvPrepare',
    'callback' => 'callable',
    'data=' => 'mixed',
    'priority=' => 'int',
  ),
  'evprepare::feed' => 
  array (
    0 => 'void',
    'revents' => 'int',
  ),
  'evprepare::getloop' => 
  array (
    0 => 'EvLoop|null',
  ),
  'evprepare::invoke' => 
  array (
    0 => 'void',
    'revents' => 'int',
  ),
  'evprepare::keepalive' => 
  array (
    0 => 'bool',
    'value=' => 'bool',
  ),
  'evprepare::setcallback' => 
  array (
    0 => 'void',
    'callback' => 'callable',
  ),
  'evprepare::start' => 
  array (
    0 => 'void',
  ),
  'evprepare::stop' => 
  array (
    0 => 'void',
  ),
  'evsignal::__construct' => 
  array (
    0 => 'void',
    'signum' => 'int',
    'callback' => 'callable',
    'data=' => 'mixed',
    'priority=' => 'int',
  ),
  'evsignal::clear' => 
  array (
    0 => 'int',
  ),
  'evsignal::createstopped' => 
  array (
    0 => 'EvSignal',
    'signum' => 'int',
    'callback' => 'callable',
    'data=' => 'mixed',
    'priority=' => 'int',
  ),
  'evsignal::feed' => 
  array (
    0 => 'void',
    'revents' => 'int',
  ),
  'evsignal::getloop' => 
  array (
    0 => 'EvLoop|null',
  ),
  'evsignal::invoke' => 
  array (
    0 => 'void',
    'revents' => 'int',
  ),
  'evsignal::keepalive' => 
  array (
    0 => 'bool',
    'value=' => 'bool',
  ),
  'evsignal::set' => 
  array (
    0 => 'void',
    'signum' => 'int',
  ),
  'evsignal::setcallback' => 
  array (
    0 => 'void',
    'callback' => 'callable',
  ),
  'evsignal::start' => 
  array (
    0 => 'void',
  ),
  'evsignal::stop' => 
  array (
    0 => 'void',
  ),
  'evstat::__construct' => 
  array (
    0 => 'void',
    'path' => 'string',
    'interval' => 'float',
    'callback' => 'callable',
    'data=' => 'mixed',
    'priority=' => 'int',
  ),
  'evstat::attr' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'evstat::clear' => 
  array (
    0 => 'int',
  ),
  'evstat::createstopped' => 
  array (
    0 => 'EvStat',
    'path' => 'string',
    'interval' => 'float',
    'callback' => 'callable',
    'data=' => 'mixed',
    'priority=' => 'int',
  ),
  'evstat::feed' => 
  array (
    0 => 'void',
    'revents' => 'int',
  ),
  'evstat::getloop' => 
  array (
    0 => 'EvLoop|null',
  ),
  'evstat::invoke' => 
  array (
    0 => 'void',
    'revents' => 'int',
  ),
  'evstat::keepalive' => 
  array (
    0 => 'bool',
    'value=' => 'bool',
  ),
  'evstat::prev' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'evstat::set' => 
  array (
    0 => 'void',
    'path' => 'string',
    'interval' => 'float',
  ),
  'evstat::setcallback' => 
  array (
    0 => 'void',
    'callback' => 'callable',
  ),
  'evstat::start' => 
  array (
    0 => 'void',
  ),
  'evstat::stat' => 
  array (
    0 => 'bool',
  ),
  'evstat::stop' => 
  array (
    0 => 'void',
  ),
  'evtimer::__construct' => 
  array (
    0 => 'void',
    'after' => 'float',
    'repeat' => 'float',
    'callback' => 'callable',
    'data=' => 'mixed',
    'priority=' => 'int',
  ),
  'evtimer::again' => 
  array (
    0 => 'void',
  ),
  'evtimer::clear' => 
  array (
    0 => 'int',
  ),
  'evtimer::createstopped' => 
  array (
    0 => 'EvTimer',
    'after' => 'float',
    'repeat' => 'float',
    'callback' => 'callable',
    'data=' => 'mixed',
    'priority=' => 'int',
  ),
  'evtimer::feed' => 
  array (
    0 => 'void',
    'revents' => 'int',
  ),
  'evtimer::getloop' => 
  array (
    0 => 'EvLoop|null',
  ),
  'evtimer::invoke' => 
  array (
    0 => 'void',
    'revents' => 'int',
  ),
  'evtimer::keepalive' => 
  array (
    0 => 'bool',
    'value=' => 'bool',
  ),
  'evtimer::set' => 
  array (
    0 => 'void',
    'after' => 'float',
    'repeat' => 'float',
  ),
  'evtimer::setcallback' => 
  array (
    0 => 'void',
    'callback' => 'callable',
  ),
  'evtimer::start' => 
  array (
    0 => 'void',
  ),
  'evtimer::stop' => 
  array (
    0 => 'void',
  ),
  'evwatcher::clear' => 
  array (
    0 => 'int',
  ),
  'evwatcher::feed' => 
  array (
    0 => 'void',
    'revents' => 'int',
  ),
  'evwatcher::getloop' => 
  array (
    0 => 'EvLoop|null',
  ),
  'evwatcher::invoke' => 
  array (
    0 => 'void',
    'revents' => 'int',
  ),
  'evwatcher::keepalive' => 
  array (
    0 => 'bool',
    'value=' => 'bool',
  ),
  'evwatcher::setcallback' => 
  array (
    0 => 'void',
    'callback' => 'callable',
  ),
  'evwatcher::start' => 
  array (
    0 => 'void',
  ),
  'evwatcher::stop' => 
  array (
    0 => 'void',
  ),
  'exception::__clone' => 
  array (
    0 => 'void',
  ),
  'exception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'string',
    'code=' => 'int',
    'previous=' => 'Throwable|null',
  ),
  'exception::__tostring' => 
  array (
    0 => 'string',
  ),
  'exception::getcode' => 
  array (
    0 => 'int|string',
  ),
  'exception::getfile' => 
  array (
    0 => 'string',
  ),
  'exception::getline' => 
  array (
    0 => 'int',
  ),
  'exception::getmessage' => 
  array (
    0 => 'string',
  ),
  'exception::getprevious' => 
  array (
    0 => 'Throwable|null',
  ),
  'exception::gettrace' => 
  array (
    0 => 'list<array{args?: array<array-key, mixed>, class?: class-string, file?: string, function: string, line?: int, type?: \'->\'|\'::\'}>',
  ),
  'exception::gettraceasstring' => 
  array (
    0 => 'string',
  ),
  'exec' => 
  array (
    0 => 'false|string',
    'command' => 'string',
    '&w_output=' => 'array<array-key, mixed>',
    '&w_result_code=' => 'int',
  ),
  'exif_imagetype' => 
  array (
    0 => 'false|int',
    'filename' => 'string',
  ),
  'exif_read_data' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'file' => 'resource|string',
    'required_sections=' => 'null|string',
    'as_arrays=' => 'bool',
    'read_thumbnail=' => 'bool',
  ),
  'exif_tagname' => 
  array (
    0 => 'false|string',
    'index' => 'int',
  ),
  'exif_thumbnail' => 
  array (
    0 => 'false|string',
    'file' => 'string',
    '&w_width=' => 'int',
    '&w_height=' => 'int',
    '&w_image_type=' => 'int',
  ),
  'exp' => 
  array (
    0 => 'float',
    'num' => 'float',
  ),
  'expect_expectl' => 
  array (
    0 => 'int',
    'expect' => 'resource',
    'cases' => 'array<array-key, mixed>',
    'match=' => 'array<array-key, mixed>',
  ),
  'expect_popen' => 
  array (
    0 => 'false|resource',
    'command' => 'string',
  ),
  'explode' => 
  array (
    0 => 'list<string>',
    'separator' => 'string',
    'string' => 'string',
    'limit=' => 'int',
  ),
  'expm1' => 
  array (
    0 => 'float',
    'num' => 'float',
  ),
  'extension_loaded' => 
  array (
    0 => 'bool',
    'extension' => 'string',
  ),
  'extract' => 
  array (
    0 => 'int',
    '&array' => 'array<array-key, mixed>',
    'flags=' => 'int',
    'prefix=' => 'string',
  ),
  'fam_cancel_monitor' => 
  array (
    0 => 'bool',
    'fam' => 'resource',
    'fam_monitor' => 'resource',
  ),
  'fam_close' => 
  array (
    0 => 'void',
    'fam' => 'resource',
  ),
  'fam_monitor_collection' => 
  array (
    0 => 'resource',
    'fam' => 'resource',
    'dirname' => 'string',
    'depth' => 'int',
    'mask' => 'string',
  ),
  'fam_monitor_directory' => 
  array (
    0 => 'resource',
    'fam' => 'resource',
    'dirname' => 'string',
  ),
  'fam_monitor_file' => 
  array (
    0 => 'resource',
    'fam' => 'resource',
    'filename' => 'string',
  ),
  'fam_next_event' => 
  array (
    0 => 'array<array-key, mixed>',
    'fam' => 'resource',
  ),
  'fam_open' => 
  array (
    0 => 'false|resource',
    'appname=' => 'string',
  ),
  'fam_pending' => 
  array (
    0 => 'int',
    'fam' => 'resource',
  ),
  'fam_resume_monitor' => 
  array (
    0 => 'bool',
    'fam' => 'resource',
    'fam_monitor' => 'resource',
  ),
  'fam_suspend_monitor' => 
  array (
    0 => 'bool',
    'fam' => 'resource',
    'fam_monitor' => 'resource',
  ),
  'fann_cascadetrain_on_data' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'data' => 'resource',
    'max_neurons' => 'int',
    'neurons_between_reports' => 'int',
    'desired_error' => 'float',
  ),
  'fann_cascadetrain_on_file' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'filename' => 'string',
    'max_neurons' => 'int',
    'neurons_between_reports' => 'int',
    'desired_error' => 'float',
  ),
  'fann_clear_scaling_params' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
  ),
  'fann_copy' => 
  array (
    0 => 'false|resource',
    'ann' => 'resource',
  ),
  'fann_create_from_file' => 
  array (
    0 => 'resource',
    'configuration_file' => 'string',
  ),
  'fann_create_shortcut' => 
  array (
    0 => 'false|resource',
    'num_layers' => 'int',
    'num_neurons1' => 'int',
    'num_neurons2' => 'int',
    '...args=' => 'int',
  ),
  'fann_create_shortcut_array' => 
  array (
    0 => 'false|resource',
    'num_layers' => 'int',
    'layers' => 'array<array-key, mixed>',
  ),
  'fann_create_sparse' => 
  array (
    0 => 'false|resource',
    'connection_rate' => 'float',
    'num_layers' => 'int',
    'num_neurons1' => 'int',
    'num_neurons2' => 'int',
    '...args=' => 'int',
  ),
  'fann_create_sparse_array' => 
  array (
    0 => 'false|resource',
    'connection_rate' => 'float',
    'num_layers' => 'int',
    'layers' => 'array<array-key, mixed>',
  ),
  'fann_create_standard' => 
  array (
    0 => 'false|resource',
    'num_layers' => 'int',
    'num_neurons1' => 'int',
    'num_neurons2' => 'int',
    '...args=' => 'int',
  ),
  'fann_create_standard_array' => 
  array (
    0 => 'false|resource',
    'num_layers' => 'int',
    'layers' => 'array<array-key, mixed>',
  ),
  'fann_create_train' => 
  array (
    0 => 'resource',
    'num_data' => 'int',
    'num_input' => 'int',
    'num_output' => 'int',
  ),
  'fann_create_train_from_callback' => 
  array (
    0 => 'resource',
    'num_data' => 'int',
    'num_input' => 'int',
    'num_output' => 'int',
    'user_function' => 'callable',
  ),
  'fann_descale_input' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'input_vector' => 'array<array-key, mixed>',
  ),
  'fann_descale_output' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'output_vector' => 'array<array-key, mixed>',
  ),
  'fann_descale_train' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'train_data' => 'resource',
  ),
  'fann_destroy' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
  ),
  'fann_destroy_train' => 
  array (
    0 => 'bool',
    'train_data' => 'resource',
  ),
  'fann_duplicate_train_data' => 
  array (
    0 => 'resource',
    'data' => 'resource',
  ),
  'fann_get_activation_function' => 
  array (
    0 => 'false|int',
    'ann' => 'resource',
    'layer' => 'int',
    'neuron' => 'int',
  ),
  'fann_get_activation_steepness' => 
  array (
    0 => 'false|float',
    'ann' => 'resource',
    'layer' => 'int',
    'neuron' => 'int',
  ),
  'fann_get_bias_array' => 
  array (
    0 => 'array<array-key, mixed>',
    'ann' => 'resource',
  ),
  'fann_get_bit_fail' => 
  array (
    0 => 'false|int',
    'ann' => 'resource',
  ),
  'fann_get_bit_fail_limit' => 
  array (
    0 => 'false|float',
    'ann' => 'resource',
  ),
  'fann_get_cascade_activation_functions' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'ann' => 'resource',
  ),
  'fann_get_cascade_activation_functions_count' => 
  array (
    0 => 'false|int',
    'ann' => 'resource',
  ),
  'fann_get_cascade_activation_steepnesses' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'ann' => 'resource',
  ),
  'fann_get_cascade_activation_steepnesses_count' => 
  array (
    0 => 'false|int',
    'ann' => 'resource',
  ),
  'fann_get_cascade_candidate_change_fraction' => 
  array (
    0 => 'false|float',
    'ann' => 'resource',
  ),
  'fann_get_cascade_candidate_limit' => 
  array (
    0 => 'false|float',
    'ann' => 'resource',
  ),
  'fann_get_cascade_candidate_stagnation_epochs' => 
  array (
    0 => 'false|float',
    'ann' => 'resource',
  ),
  'fann_get_cascade_max_cand_epochs' => 
  array (
    0 => 'false|int',
    'ann' => 'resource',
  ),
  'fann_get_cascade_max_out_epochs' => 
  array (
    0 => 'false|int',
    'ann' => 'resource',
  ),
  'fann_get_cascade_min_cand_epochs' => 
  array (
    0 => 'false|int',
    'ann' => 'resource',
  ),
  'fann_get_cascade_min_out_epochs' => 
  array (
    0 => 'false|int',
    'ann' => 'resource',
  ),
  'fann_get_cascade_num_candidate_groups' => 
  array (
    0 => 'false|int',
    'ann' => 'resource',
  ),
  'fann_get_cascade_num_candidates' => 
  array (
    0 => 'false|int',
    'ann' => 'resource',
  ),
  'fann_get_cascade_output_change_fraction' => 
  array (
    0 => 'false|float',
    'ann' => 'resource',
  ),
  'fann_get_cascade_output_stagnation_epochs' => 
  array (
    0 => 'false|int',
    'ann' => 'resource',
  ),
  'fann_get_cascade_weight_multiplier' => 
  array (
    0 => 'false|float',
    'ann' => 'resource',
  ),
  'fann_get_connection_array' => 
  array (
    0 => 'array<array-key, mixed>',
    'ann' => 'resource',
  ),
  'fann_get_connection_rate' => 
  array (
    0 => 'false|float',
    'ann' => 'resource',
  ),
  'fann_get_errno' => 
  array (
    0 => 'false|int',
    'errdat' => 'resource',
  ),
  'fann_get_errstr' => 
  array (
    0 => 'false|string',
    'errdat' => 'resource',
  ),
  'fann_get_layer_array' => 
  array (
    0 => 'array<array-key, mixed>',
    'ann' => 'resource',
  ),
  'fann_get_learning_momentum' => 
  array (
    0 => 'false|float',
    'ann' => 'resource',
  ),
  'fann_get_learning_rate' => 
  array (
    0 => 'false|float',
    'ann' => 'resource',
  ),
  'fann_get_mse' => 
  array (
    0 => 'false|float',
    'ann' => 'resource',
  ),
  'fann_get_network_type' => 
  array (
    0 => 'false|int',
    'ann' => 'resource',
  ),
  'fann_get_num_input' => 
  array (
    0 => 'false|int',
    'ann' => 'resource',
  ),
  'fann_get_num_layers' => 
  array (
    0 => 'false|int',
    'ann' => 'resource',
  ),
  'fann_get_num_output' => 
  array (
    0 => 'false|int',
    'ann' => 'resource',
  ),
  'fann_get_quickprop_decay' => 
  array (
    0 => 'false|float',
    'ann' => 'resource',
  ),
  'fann_get_quickprop_mu' => 
  array (
    0 => 'false|float',
    'ann' => 'resource',
  ),
  'fann_get_rprop_decrease_factor' => 
  array (
    0 => 'false|float',
    'ann' => 'resource',
  ),
  'fann_get_rprop_delta_max' => 
  array (
    0 => 'false|float',
    'ann' => 'resource',
  ),
  'fann_get_rprop_delta_min' => 
  array (
    0 => 'false|float',
    'ann' => 'resource',
  ),
  'fann_get_rprop_delta_zero' => 
  array (
    0 => 'false|float',
    'ann' => 'resource',
  ),
  'fann_get_rprop_increase_factor' => 
  array (
    0 => 'false|float',
    'ann' => 'resource',
  ),
  'fann_get_sarprop_step_error_shift' => 
  array (
    0 => 'false|float',
    'ann' => 'resource',
  ),
  'fann_get_sarprop_step_error_threshold_factor' => 
  array (
    0 => 'false|float',
    'ann' => 'resource',
  ),
  'fann_get_sarprop_temperature' => 
  array (
    0 => 'false|float',
    'ann' => 'resource',
  ),
  'fann_get_sarprop_weight_decay_shift' => 
  array (
    0 => 'false|float',
    'ann' => 'resource',
  ),
  'fann_get_total_connections' => 
  array (
    0 => 'false|int',
    'ann' => 'resource',
  ),
  'fann_get_total_neurons' => 
  array (
    0 => 'false|int',
    'ann' => 'resource',
  ),
  'fann_get_train_error_function' => 
  array (
    0 => 'false|int',
    'ann' => 'resource',
  ),
  'fann_get_train_stop_function' => 
  array (
    0 => 'false|int',
    'ann' => 'resource',
  ),
  'fann_get_training_algorithm' => 
  array (
    0 => 'false|int',
    'ann' => 'resource',
  ),
  'fann_init_weights' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'train_data' => 'resource',
  ),
  'fann_length_train_data' => 
  array (
    0 => 'false|int',
    'data' => 'resource',
  ),
  'fann_merge_train_data' => 
  array (
    0 => 'false|resource',
    'data1' => 'resource',
    'data2' => 'resource',
  ),
  'fann_num_input_train_data' => 
  array (
    0 => 'false|int',
    'data' => 'resource',
  ),
  'fann_num_output_train_data' => 
  array (
    0 => 'false|int',
    'data' => 'resource',
  ),
  'fann_print_error' => 
  array (
    0 => 'void',
    'errdat' => 'string',
  ),
  'fann_randomize_weights' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'min_weight' => 'float',
    'max_weight' => 'float',
  ),
  'fann_read_train_from_file' => 
  array (
    0 => 'resource',
    'filename' => 'string',
  ),
  'fann_reset_errno' => 
  array (
    0 => 'void',
    'errdat' => 'resource',
  ),
  'fann_reset_errstr' => 
  array (
    0 => 'void',
    'errdat' => 'resource',
  ),
  'fann_reset_mse' => 
  array (
    0 => 'bool',
    'ann' => 'string',
  ),
  'fann_run' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'ann' => 'resource',
    'input' => 'array<array-key, mixed>',
  ),
  'fann_save' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'configuration_file' => 'string',
  ),
  'fann_save_train' => 
  array (
    0 => 'bool',
    'data' => 'resource',
    'file_name' => 'string',
  ),
  'fann_scale_input' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'input_vector' => 'array<array-key, mixed>',
  ),
  'fann_scale_input_train_data' => 
  array (
    0 => 'bool',
    'train_data' => 'resource',
    'new_min' => 'float',
    'new_max' => 'float',
  ),
  'fann_scale_output' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'output_vector' => 'array<array-key, mixed>',
  ),
  'fann_scale_output_train_data' => 
  array (
    0 => 'bool',
    'train_data' => 'resource',
    'new_min' => 'float',
    'new_max' => 'float',
  ),
  'fann_scale_train' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'train_data' => 'resource',
  ),
  'fann_scale_train_data' => 
  array (
    0 => 'bool',
    'train_data' => 'resource',
    'new_min' => 'float',
    'new_max' => 'float',
  ),
  'fann_set_activation_function' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'activation_function' => 'int',
    'layer' => 'int',
    'neuron' => 'int',
  ),
  'fann_set_activation_function_hidden' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'activation_function' => 'int',
  ),
  'fann_set_activation_function_layer' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'activation_function' => 'int',
    'layer' => 'int',
  ),
  'fann_set_activation_function_output' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'activation_function' => 'int',
  ),
  'fann_set_activation_steepness' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'activation_steepness' => 'float',
    'layer' => 'int',
    'neuron' => 'int',
  ),
  'fann_set_activation_steepness_hidden' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'activation_steepness' => 'float',
  ),
  'fann_set_activation_steepness_layer' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'activation_steepness' => 'float',
    'layer' => 'int',
  ),
  'fann_set_activation_steepness_output' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'activation_steepness' => 'float',
  ),
  'fann_set_bit_fail_limit' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'bit_fail_limit' => 'float',
  ),
  'fann_set_callback' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'callback' => 'callable',
  ),
  'fann_set_cascade_activation_functions' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'cascade_activation_functions' => 'array<array-key, mixed>',
  ),
  'fann_set_cascade_activation_steepnesses' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'cascade_activation_steepnesses_count' => 'array<array-key, mixed>',
  ),
  'fann_set_cascade_candidate_change_fraction' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'cascade_candidate_change_fraction' => 'float',
  ),
  'fann_set_cascade_candidate_limit' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'cascade_candidate_limit' => 'float',
  ),
  'fann_set_cascade_candidate_stagnation_epochs' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'cascade_candidate_stagnation_epochs' => 'int',
  ),
  'fann_set_cascade_max_cand_epochs' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'cascade_max_cand_epochs' => 'int',
  ),
  'fann_set_cascade_max_out_epochs' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'cascade_max_out_epochs' => 'int',
  ),
  'fann_set_cascade_min_cand_epochs' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'cascade_min_cand_epochs' => 'int',
  ),
  'fann_set_cascade_min_out_epochs' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'cascade_min_out_epochs' => 'int',
  ),
  'fann_set_cascade_num_candidate_groups' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'cascade_num_candidate_groups' => 'int',
  ),
  'fann_set_cascade_output_change_fraction' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'cascade_output_change_fraction' => 'float',
  ),
  'fann_set_cascade_output_stagnation_epochs' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'cascade_output_stagnation_epochs' => 'int',
  ),
  'fann_set_cascade_weight_multiplier' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'cascade_weight_multiplier' => 'float',
  ),
  'fann_set_error_log' => 
  array (
    0 => 'void',
    'errdat' => 'resource',
    'log_file' => 'string',
  ),
  'fann_set_input_scaling_params' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'train_data' => 'resource',
    'new_input_min' => 'float',
    'new_input_max' => 'float',
  ),
  'fann_set_learning_momentum' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'learning_momentum' => 'float',
  ),
  'fann_set_learning_rate' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'learning_rate' => 'float',
  ),
  'fann_set_output_scaling_params' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'train_data' => 'resource',
    'new_output_min' => 'float',
    'new_output_max' => 'float',
  ),
  'fann_set_quickprop_decay' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'quickprop_decay' => 'float',
  ),
  'fann_set_quickprop_mu' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'quickprop_mu' => 'float',
  ),
  'fann_set_rprop_decrease_factor' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'rprop_decrease_factor' => 'float',
  ),
  'fann_set_rprop_delta_max' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'rprop_delta_max' => 'float',
  ),
  'fann_set_rprop_delta_min' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'rprop_delta_min' => 'float',
  ),
  'fann_set_rprop_delta_zero' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'rprop_delta_zero' => 'float',
  ),
  'fann_set_rprop_increase_factor' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'rprop_increase_factor' => 'float',
  ),
  'fann_set_sarprop_step_error_shift' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'sarprop_step_error_shift' => 'float',
  ),
  'fann_set_sarprop_step_error_threshold_factor' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'sarprop_step_error_threshold_factor' => 'float',
  ),
  'fann_set_sarprop_temperature' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'sarprop_temperature' => 'float',
  ),
  'fann_set_sarprop_weight_decay_shift' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'sarprop_weight_decay_shift' => 'float',
  ),
  'fann_set_scaling_params' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'train_data' => 'resource',
    'new_input_min' => 'float',
    'new_input_max' => 'float',
    'new_output_min' => 'float',
    'new_output_max' => 'float',
  ),
  'fann_set_train_error_function' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'error_function' => 'int',
  ),
  'fann_set_train_stop_function' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'stop_function' => 'int',
  ),
  'fann_set_training_algorithm' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'training_algorithm' => 'int',
  ),
  'fann_set_weight' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'from_neuron' => 'int',
    'to_neuron' => 'int',
    'weight' => 'float',
  ),
  'fann_set_weight_array' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'connections' => 'array<array-key, mixed>',
  ),
  'fann_shuffle_train_data' => 
  array (
    0 => 'bool',
    'train_data' => 'resource',
  ),
  'fann_subset_train_data' => 
  array (
    0 => 'resource',
    'data' => 'resource',
    'pos' => 'int',
    'length' => 'int',
  ),
  'fann_test' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'input' => 'array<array-key, mixed>',
    'desired_output' => 'array<array-key, mixed>',
  ),
  'fann_test_data' => 
  array (
    0 => 'false|float',
    'ann' => 'resource',
    'data' => 'resource',
  ),
  'fann_train' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'input' => 'array<array-key, mixed>',
    'desired_output' => 'array<array-key, mixed>',
  ),
  'fann_train_epoch' => 
  array (
    0 => 'false|float',
    'ann' => 'resource',
    'data' => 'resource',
  ),
  'fann_train_on_data' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'data' => 'resource',
    'max_epochs' => 'int',
    'epochs_between_reports' => 'int',
    'desired_error' => 'float',
  ),
  'fann_train_on_file' => 
  array (
    0 => 'bool',
    'ann' => 'resource',
    'filename' => 'string',
    'max_epochs' => 'int',
    'epochs_between_reports' => 'int',
    'desired_error' => 'float',
  ),
  'fannconnection::__construct' => 
  array (
    0 => 'void',
    'from_neuron' => 'int',
    'to_neuron' => 'int',
    'weight' => 'float',
  ),
  'fannconnection::getfromneuron' => 
  array (
    0 => 'int',
  ),
  'fannconnection::gettoneuron' => 
  array (
    0 => 'int',
  ),
  'fannconnection::getweight' => 
  array (
    0 => 'void',
  ),
  'fannconnection::setweight' => 
  array (
    0 => 'bool',
    'weight' => 'float',
  ),
  'fastcgi_finish_request' => 
  array (
    0 => 'bool',
  ),
  'fbsql_affected_rows' => 
  array (
    0 => 'int',
    'link_identifier=' => 'null|resource',
  ),
  'fbsql_autocommit' => 
  array (
    0 => 'bool',
    'link_identifier' => 'resource',
    'onoff=' => 'bool',
  ),
  'fbsql_blob_size' => 
  array (
    0 => 'int',
    'blob_handle' => 'string',
    'link_identifier=' => 'null|resource',
  ),
  'fbsql_change_user' => 
  array (
    0 => 'bool',
    'user' => 'string',
    'password' => 'string',
    'database=' => 'string',
    'link_identifier=' => 'null|resource',
  ),
  'fbsql_clob_size' => 
  array (
    0 => 'int',
    'clob_handle' => 'string',
    'link_identifier=' => 'null|resource',
  ),
  'fbsql_close' => 
  array (
    0 => 'bool',
    'link_identifier=' => 'null|resource',
  ),
  'fbsql_commit' => 
  array (
    0 => 'bool',
    'link_identifier=' => 'null|resource',
  ),
  'fbsql_connect' => 
  array (
    0 => 'resource',
    'hostname=' => 'string',
    'username=' => 'string',
    'password=' => 'string',
  ),
  'fbsql_create_blob' => 
  array (
    0 => 'string',
    'blob_data' => 'string',
    'link_identifier=' => 'null|resource',
  ),
  'fbsql_create_clob' => 
  array (
    0 => 'string',
    'clob_data' => 'string',
    'link_identifier=' => 'null|resource',
  ),
  'fbsql_create_db' => 
  array (
    0 => 'bool',
    'database_name' => 'string',
    'link_identifier=' => 'null|resource',
    'database_options=' => 'string',
  ),
  'fbsql_data_seek' => 
  array (
    0 => 'bool',
    'result' => 'resource',
    'row_number' => 'int',
  ),
  'fbsql_database' => 
  array (
    0 => 'string',
    'link_identifier' => 'resource',
    'database=' => 'string',
  ),
  'fbsql_database_password' => 
  array (
    0 => 'string',
    'link_identifier' => 'resource',
    'database_password=' => 'string',
  ),
  'fbsql_db_query' => 
  array (
    0 => 'resource',
    'database' => 'string',
    'query' => 'string',
    'link_identifier=' => 'null|resource',
  ),
  'fbsql_db_status' => 
  array (
    0 => 'int',
    'database_name' => 'string',
    'link_identifier=' => 'null|resource',
  ),
  'fbsql_drop_db' => 
  array (
    0 => 'bool',
    'database_name' => 'string',
    'link_identifier=' => 'null|resource',
  ),
  'fbsql_errno' => 
  array (
    0 => 'int',
    'link_identifier=' => 'null|resource',
  ),
  'fbsql_error' => 
  array (
    0 => 'string',
    'link_identifier=' => 'null|resource',
  ),
  'fbsql_fetch_array' => 
  array (
    0 => 'array<array-key, mixed>',
    'result' => 'resource',
    'result_type=' => 'int',
  ),
  'fbsql_fetch_assoc' => 
  array (
    0 => 'array<array-key, mixed>',
    'result' => 'resource',
  ),
  'fbsql_fetch_field' => 
  array (
    0 => 'object',
    'result' => 'resource',
    'field_offset=' => 'int',
  ),
  'fbsql_fetch_lengths' => 
  array (
    0 => 'array<array-key, mixed>',
    'result' => 'resource',
  ),
  'fbsql_fetch_object' => 
  array (
    0 => 'object',
    'result' => 'resource',
  ),
  'fbsql_fetch_row' => 
  array (
    0 => 'array<array-key, mixed>',
    'result' => 'resource',
  ),
  'fbsql_field_flags' => 
  array (
    0 => 'string',
    'result' => 'resource',
    'field_offset=' => 'int',
  ),
  'fbsql_field_len' => 
  array (
    0 => 'int',
    'result' => 'resource',
    'field_offset=' => 'int',
  ),
  'fbsql_field_name' => 
  array (
    0 => 'string',
    'result' => 'resource',
    'field_index=' => 'int',
  ),
  'fbsql_field_seek' => 
  array (
    0 => 'bool',
    'result' => 'resource',
    'field_offset=' => 'int',
  ),
  'fbsql_field_table' => 
  array (
    0 => 'string',
    'result' => 'resource',
    'field_offset=' => 'int',
  ),
  'fbsql_field_type' => 
  array (
    0 => 'string',
    'result' => 'resource',
    'field_offset=' => 'int',
  ),
  'fbsql_free_result' => 
  array (
    0 => 'bool',
    'result' => 'resource',
  ),
  'fbsql_get_autostart_info' => 
  array (
    0 => 'array<array-key, mixed>',
    'link_identifier=' => 'null|resource',
  ),
  'fbsql_hostname' => 
  array (
    0 => 'string',
    'link_identifier' => 'resource',
    'host_name=' => 'string',
  ),
  'fbsql_insert_id' => 
  array (
    0 => 'int',
    'link_identifier=' => 'null|resource',
  ),
  'fbsql_list_dbs' => 
  array (
    0 => 'resource',
    'link_identifier=' => 'null|resource',
  ),
  'fbsql_list_fields' => 
  array (
    0 => 'resource',
    'database_name' => 'string',
    'table_name' => 'string',
    'link_identifier=' => 'null|resource',
  ),
  'fbsql_list_tables' => 
  array (
    0 => 'resource',
    'database' => 'string',
    'link_identifier=' => 'null|resource',
  ),
  'fbsql_next_result' => 
  array (
    0 => 'bool',
    'result' => 'resource',
  ),
  'fbsql_num_fields' => 
  array (
    0 => 'int',
    'result' => 'resource',
  ),
  'fbsql_num_rows' => 
  array (
    0 => 'int',
    'result' => 'resource',
  ),
  'fbsql_password' => 
  array (
    0 => 'string',
    'link_identifier' => 'resource',
    'password=' => 'string',
  ),
  'fbsql_pconnect' => 
  array (
    0 => 'resource',
    'hostname=' => 'string',
    'username=' => 'string',
    'password=' => 'string',
  ),
  'fbsql_query' => 
  array (
    0 => 'resource',
    'query' => 'string',
    'link_identifier=' => 'null|resource',
    'batch_size=' => 'int',
  ),
  'fbsql_read_blob' => 
  array (
    0 => 'string',
    'blob_handle' => 'string',
    'link_identifier=' => 'null|resource',
  ),
  'fbsql_read_clob' => 
  array (
    0 => 'string',
    'clob_handle' => 'string',
    'link_identifier=' => 'null|resource',
  ),
  'fbsql_result' => 
  array (
    0 => 'mixed',
    'result' => 'resource',
    'row=' => 'int',
    'field=' => 'mixed',
  ),
  'fbsql_rollback' => 
  array (
    0 => 'bool',
    'link_identifier=' => 'null|resource',
  ),
  'fbsql_rows_fetched' => 
  array (
    0 => 'int',
    'result' => 'resource',
  ),
  'fbsql_select_db' => 
  array (
    0 => 'bool',
    'database_name=' => 'string',
    'link_identifier=' => 'null|resource',
  ),
  'fbsql_set_characterset' => 
  array (
    0 => 'void',
    'link_identifier' => 'resource',
    'characterset' => 'int',
    'in_out_both=' => 'int',
  ),
  'fbsql_set_lob_mode' => 
  array (
    0 => 'bool',
    'result' => 'resource',
    'lob_mode' => 'int',
  ),
  'fbsql_set_password' => 
  array (
    0 => 'bool',
    'link_identifier' => 'resource',
    'user' => 'string',
    'password' => 'string',
    'old_password' => 'string',
  ),
  'fbsql_set_transaction' => 
  array (
    0 => 'void',
    'link_identifier' => 'resource',
    'locking' => 'int',
    'isolation' => 'int',
  ),
  'fbsql_start_db' => 
  array (
    0 => 'bool',
    'database_name' => 'string',
    'link_identifier=' => 'null|resource',
    'database_options=' => 'string',
  ),
  'fbsql_stop_db' => 
  array (
    0 => 'bool',
    'database_name' => 'string',
    'link_identifier=' => 'null|resource',
  ),
  'fbsql_table_name' => 
  array (
    0 => 'string',
    'result' => 'resource',
    'index' => 'int',
  ),
  'fbsql_username' => 
  array (
    0 => 'string',
    'link_identifier' => 'resource',
    'username=' => 'string',
  ),
  'fbsql_warnings' => 
  array (
    0 => 'bool',
    'onoff=' => 'bool',
  ),
  'fclose' => 
  array (
    0 => 'bool',
    'stream' => 'resource',
  ),
  'fdatasync' => 
  array (
    0 => 'bool',
    'stream' => 'resource',
  ),
  'fdf_add_doc_javascript' => 
  array (
    0 => 'bool',
    'fdf_document' => 'resource',
    'script_name' => 'string',
    'script_code' => 'string',
  ),
  'fdf_add_template' => 
  array (
    0 => 'bool',
    'fdf_document' => 'resource',
    'newpage' => 'int',
    'filename' => 'string',
    'template' => 'string',
    'rename' => 'int',
  ),
  'fdf_close' => 
  array (
    0 => 'void',
    'fdf_document' => 'resource',
  ),
  'fdf_create' => 
  array (
    0 => 'resource',
  ),
  'fdf_enum_values' => 
  array (
    0 => 'bool',
    'fdf_document' => 'resource',
    'function' => 'callable',
    'userdata=' => 'mixed',
  ),
  'fdf_errno' => 
  array (
    0 => 'int',
  ),
  'fdf_error' => 
  array (
    0 => 'string',
    'error_code=' => 'int',
  ),
  'fdf_get_ap' => 
  array (
    0 => 'bool',
    'fdf_document' => 'resource',
    'field' => 'string',
    'face' => 'int',
    'filename' => 'string',
  ),
  'fdf_get_attachment' => 
  array (
    0 => 'array<array-key, mixed>',
    'fdf_document' => 'resource',
    'fieldname' => 'string',
    'savepath' => 'string',
  ),
  'fdf_get_encoding' => 
  array (
    0 => 'string',
    'fdf_document' => 'resource',
  ),
  'fdf_get_file' => 
  array (
    0 => 'string',
    'fdf_document' => 'resource',
  ),
  'fdf_get_flags' => 
  array (
    0 => 'int',
    'fdf_document' => 'resource',
    'fieldname' => 'string',
    'whichflags' => 'int',
  ),
  'fdf_get_opt' => 
  array (
    0 => 'mixed',
    'fdf_document' => 'resource',
    'fieldname' => 'string',
    'element=' => 'int',
  ),
  'fdf_get_status' => 
  array (
    0 => 'string',
    'fdf_document' => 'resource',
  ),
  'fdf_get_value' => 
  array (
    0 => 'mixed',
    'fdf_document' => 'resource',
    'fieldname' => 'string',
    'which=' => 'int',
  ),
  'fdf_get_version' => 
  array (
    0 => 'string',
    'fdf_document=' => 'resource',
  ),
  'fdf_header' => 
  array (
    0 => 'void',
  ),
  'fdf_next_field_name' => 
  array (
    0 => 'string',
    'fdf_document' => 'resource',
    'fieldname=' => 'string',
  ),
  'fdf_open' => 
  array (
    0 => 'false|resource',
    'filename' => 'string',
  ),
  'fdf_open_string' => 
  array (
    0 => 'resource',
    'fdf_data' => 'string',
  ),
  'fdf_remove_item' => 
  array (
    0 => 'bool',
    'fdf_document' => 'resource',
    'fieldname' => 'string',
    'item' => 'int',
  ),
  'fdf_save' => 
  array (
    0 => 'bool',
    'fdf_document' => 'resource',
    'filename=' => 'string',
  ),
  'fdf_save_string' => 
  array (
    0 => 'string',
    'fdf_document' => 'resource',
  ),
  'fdf_set_ap' => 
  array (
    0 => 'bool',
    'fdf_document' => 'resource',
    'field_name' => 'string',
    'face' => 'int',
    'filename' => 'string',
    'page_number' => 'int',
  ),
  'fdf_set_encoding' => 
  array (
    0 => 'bool',
    'fdf_document' => 'resource',
    'encoding' => 'string',
  ),
  'fdf_set_file' => 
  array (
    0 => 'bool',
    'fdf_document' => 'resource',
    'url' => 'string',
    'target_frame=' => 'string',
  ),
  'fdf_set_flags' => 
  array (
    0 => 'bool',
    'fdf_document' => 'resource',
    'fieldname' => 'string',
    'whichflags' => 'int',
    'newflags' => 'int',
  ),
  'fdf_set_javascript_action' => 
  array (
    0 => 'bool',
    'fdf_document' => 'resource',
    'fieldname' => 'string',
    'trigger' => 'int',
    'script' => 'string',
  ),
  'fdf_set_on_import_javascript' => 
  array (
    0 => 'bool',
    'fdf_document' => 'resource',
    'script' => 'string',
    'before_data_import' => 'bool',
  ),
  'fdf_set_opt' => 
  array (
    0 => 'bool',
    'fdf_document' => 'resource',
    'fieldname' => 'string',
    'element' => 'int',
    'string1' => 'string',
    'string2' => 'string',
  ),
  'fdf_set_status' => 
  array (
    0 => 'bool',
    'fdf_document' => 'resource',
    'status' => 'string',
  ),
  'fdf_set_submit_form_action' => 
  array (
    0 => 'bool',
    'fdf_document' => 'resource',
    'fieldname' => 'string',
    'trigger' => 'int',
    'script' => 'string',
    'flags' => 'int',
  ),
  'fdf_set_target_frame' => 
  array (
    0 => 'bool',
    'fdf_document' => 'resource',
    'frame_name' => 'string',
  ),
  'fdf_set_value' => 
  array (
    0 => 'bool',
    'fdf_document' => 'resource',
    'fieldname' => 'string',
    'value' => 'mixed',
    'isname=' => 'int',
  ),
  'fdf_set_version' => 
  array (
    0 => 'bool',
    'fdf_document' => 'resource',
    'version' => 'string',
  ),
  'feof' => 
  array (
    0 => 'bool',
    'stream' => 'resource',
  ),
  'fflush' => 
  array (
    0 => 'bool',
    'stream' => 'resource',
  ),
  'ffmpeg_animated_gif::__construct' => 
  array (
    0 => 'void',
    'output_file_path' => 'string',
    'width' => 'int',
    'height' => 'int',
    'frame_rate' => 'int',
    'loop_count=' => 'int',
  ),
  'ffmpeg_animated_gif::addframe' => 
  array (
    0 => 'mixed',
    'frame_to_add' => 'ffmpeg_frame',
  ),
  'ffmpeg_frame::__construct' => 
  array (
    0 => 'void',
    'gd_image' => 'resource',
  ),
  'ffmpeg_frame::crop' => 
  array (
    0 => 'mixed',
    'crop_top' => 'int',
    'crop_bottom=' => 'int',
    'crop_left=' => 'int',
    'crop_right=' => 'int',
  ),
  'ffmpeg_frame::getheight' => 
  array (
    0 => 'int',
  ),
  'ffmpeg_frame::getpresentationtimestamp' => 
  array (
    0 => 'int',
  ),
  'ffmpeg_frame::getpts' => 
  array (
    0 => 'int',
  ),
  'ffmpeg_frame::getwidth' => 
  array (
    0 => 'int',
  ),
  'ffmpeg_frame::resize' => 
  array (
    0 => 'mixed',
    'width' => 'int',
    'height' => 'int',
    'crop_top=' => 'int',
    'crop_bottom=' => 'int',
    'crop_left=' => 'int',
    'crop_right=' => 'int',
  ),
  'ffmpeg_frame::togdimage' => 
  array (
    0 => 'resource',
  ),
  'ffmpeg_movie::__construct' => 
  array (
    0 => 'void',
    'path_to_media' => 'string',
    'persistent' => 'bool',
  ),
  'ffmpeg_movie::getartist' => 
  array (
    0 => 'string',
  ),
  'ffmpeg_movie::getaudiobitrate' => 
  array (
    0 => 'int',
  ),
  'ffmpeg_movie::getaudiochannels' => 
  array (
    0 => 'int',
  ),
  'ffmpeg_movie::getaudiocodec' => 
  array (
    0 => 'string',
  ),
  'ffmpeg_movie::getaudiosamplerate' => 
  array (
    0 => 'int',
  ),
  'ffmpeg_movie::getauthor' => 
  array (
    0 => 'string',
  ),
  'ffmpeg_movie::getbitrate' => 
  array (
    0 => 'int',
  ),
  'ffmpeg_movie::getcomment' => 
  array (
    0 => 'string',
  ),
  'ffmpeg_movie::getcopyright' => 
  array (
    0 => 'string',
  ),
  'ffmpeg_movie::getduration' => 
  array (
    0 => 'int',
  ),
  'ffmpeg_movie::getfilename' => 
  array (
    0 => 'string',
  ),
  'ffmpeg_movie::getframe' => 
  array (
    0 => 'false|ffmpeg_frame',
    'framenumber' => 'int',
  ),
  'ffmpeg_movie::getframecount' => 
  array (
    0 => 'int',
  ),
  'ffmpeg_movie::getframeheight' => 
  array (
    0 => 'int',
  ),
  'ffmpeg_movie::getframenumber' => 
  array (
    0 => 'int',
  ),
  'ffmpeg_movie::getframerate' => 
  array (
    0 => 'int',
  ),
  'ffmpeg_movie::getframewidth' => 
  array (
    0 => 'int',
  ),
  'ffmpeg_movie::getgenre' => 
  array (
    0 => 'string',
  ),
  'ffmpeg_movie::getnextkeyframe' => 
  array (
    0 => 'false|ffmpeg_frame',
  ),
  'ffmpeg_movie::getpixelformat' => 
  array (
    0 => 'mixed',
  ),
  'ffmpeg_movie::gettitle' => 
  array (
    0 => 'string',
  ),
  'ffmpeg_movie::gettracknumber' => 
  array (
    0 => 'int|string',
  ),
  'ffmpeg_movie::getvideobitrate' => 
  array (
    0 => 'int',
  ),
  'ffmpeg_movie::getvideocodec' => 
  array (
    0 => 'string',
  ),
  'ffmpeg_movie::getyear' => 
  array (
    0 => 'int|string',
  ),
  'ffmpeg_movie::hasaudio' => 
  array (
    0 => 'bool',
  ),
  'ffmpeg_movie::hasvideo' => 
  array (
    0 => 'bool',
  ),
  'fgetc' => 
  array (
    0 => 'false|string',
    'stream' => 'resource',
  ),
  'fgetcsv' => 
  array (
    0 => 'array{0?: null|string, ...<int<0, max>, string>}|false',
    'stream' => 'resource',
    'length=' => 'int|null',
    'separator=' => 'string',
    'enclosure=' => 'string',
    'escape=' => 'string',
  ),
  'fgets' => 
  array (
    0 => 'false|string',
    'stream' => 'resource',
    'length=' => 'int|null',
  ),
  'fiber::resume' => 
  array (
    0 => 'mixed',
    'value=' => 'mixed|null',
  ),
  'fiber::suspend' => 
  array (
    0 => 'mixed',
    'value=' => 'mixed|null',
  ),
  'file' => 
  array (
    0 => 'false|list<string>',
    'filename' => 'string',
    'flags=' => 'int',
    'context=' => 'resource',
  ),
  'file_exists' => 
  array (
    0 => 'bool',
    'filename' => 'string',
  ),
  'file_get_contents' => 
  array (
    0 => 'false|string',
    'filename' => 'string',
    'use_include_path=' => 'bool',
    'context=' => 'null|resource',
    'offset=' => 'int',
    'length=' => 'int|null',
  ),
  'file_put_contents' => 
  array (
    0 => 'false|int<0, max>',
    'filename' => 'string',
    'data' => 'array<array-key, string>|resource|string',
    'flags=' => 'int',
    'context=' => 'resource',
  ),
  'fileatime' => 
  array (
    0 => 'false|int',
    'filename' => 'string',
  ),
  'filectime' => 
  array (
    0 => 'false|int',
    'filename' => 'string',
  ),
  'filegroup' => 
  array (
    0 => 'false|int',
    'filename' => 'string',
  ),
  'fileinode' => 
  array (
    0 => 'false|int',
    'filename' => 'string',
  ),
  'filemtime' => 
  array (
    0 => 'false|int',
    'filename' => 'string',
  ),
  'fileowner' => 
  array (
    0 => 'false|int',
    'filename' => 'string',
  ),
  'fileperms' => 
  array (
    0 => 'false|int',
    'filename' => 'string',
  ),
  'filepro' => 
  array (
    0 => 'bool',
    'directory' => 'string',
  ),
  'filepro_fieldcount' => 
  array (
    0 => 'int',
  ),
  'filepro_fieldname' => 
  array (
    0 => 'string',
    'field_number' => 'int',
  ),
  'filepro_fieldtype' => 
  array (
    0 => 'string',
    'field_number' => 'int',
  ),
  'filepro_fieldwidth' => 
  array (
    0 => 'int',
    'field_number' => 'int',
  ),
  'filepro_retrieve' => 
  array (
    0 => 'string',
    'row_number' => 'int',
    'field_number' => 'int',
  ),
  'filepro_rowcount' => 
  array (
    0 => 'int',
  ),
  'filesize' => 
  array (
    0 => 'false|int',
    'filename' => 'string',
  ),
  'filesystemiterator::__construct' => 
  array (
    0 => 'void',
    'directory' => 'string',
    'flags=' => 'int',
  ),
  'filesystemiterator::__tostring' => 
  array (
    0 => 'string',
  ),
  'filesystemiterator::current' => 
  array (
    0 => 'FilesystemIterator|SplFileInfo|string',
  ),
  'filesystemiterator::getatime' => 
  array (
    0 => 'int',
  ),
  'filesystemiterator::getbasename' => 
  array (
    0 => 'string',
    'suffix=' => 'string',
  ),
  'filesystemiterator::getctime' => 
  array (
    0 => 'int',
  ),
  'filesystemiterator::getextension' => 
  array (
    0 => 'string',
  ),
  'filesystemiterator::getfileinfo' => 
  array (
    0 => 'SplFileInfo',
    'class=' => 'class-string|null',
  ),
  'filesystemiterator::getfilename' => 
  array (
    0 => 'string',
  ),
  'filesystemiterator::getflags' => 
  array (
    0 => 'int',
  ),
  'filesystemiterator::getgroup' => 
  array (
    0 => 'int',
  ),
  'filesystemiterator::getinode' => 
  array (
    0 => 'int',
  ),
  'filesystemiterator::getlinktarget' => 
  array (
    0 => 'string',
  ),
  'filesystemiterator::getmtime' => 
  array (
    0 => 'int',
  ),
  'filesystemiterator::getowner' => 
  array (
    0 => 'int',
  ),
  'filesystemiterator::getpath' => 
  array (
    0 => 'string',
  ),
  'filesystemiterator::getpathinfo' => 
  array (
    0 => 'SplFileInfo|null',
    'class=' => 'class-string|null',
  ),
  'filesystemiterator::getpathname' => 
  array (
    0 => 'string',
  ),
  'filesystemiterator::getperms' => 
  array (
    0 => 'int',
  ),
  'filesystemiterator::getrealpath' => 
  array (
    0 => 'non-falsy-string',
  ),
  'filesystemiterator::getsize' => 
  array (
    0 => 'int',
  ),
  'filesystemiterator::gettype' => 
  array (
    0 => 'string',
  ),
  'filesystemiterator::isdir' => 
  array (
    0 => 'bool',
  ),
  'filesystemiterator::isdot' => 
  array (
    0 => 'bool',
  ),
  'filesystemiterator::isexecutable' => 
  array (
    0 => 'bool',
  ),
  'filesystemiterator::isfile' => 
  array (
    0 => 'bool',
  ),
  'filesystemiterator::islink' => 
  array (
    0 => 'bool',
  ),
  'filesystemiterator::isreadable' => 
  array (
    0 => 'bool',
  ),
  'filesystemiterator::iswritable' => 
  array (
    0 => 'bool',
  ),
  'filesystemiterator::key' => 
  array (
    0 => 'string',
  ),
  'filesystemiterator::next' => 
  array (
    0 => 'void',
  ),
  'filesystemiterator::openfile' => 
  array (
    0 => 'SplFileObject',
    'mode=' => 'string',
    'useIncludePath=' => 'bool',
    'context=' => 'null|resource',
  ),
  'filesystemiterator::rewind' => 
  array (
    0 => 'void',
  ),
  'filesystemiterator::seek' => 
  array (
    0 => 'void',
    'offset' => 'int',
  ),
  'filesystemiterator::setfileclass' => 
  array (
    0 => 'void',
    'class=' => 'class-string',
  ),
  'filesystemiterator::setflags' => 
  array (
    0 => 'void',
    'flags' => 'int',
  ),
  'filesystemiterator::setinfoclass' => 
  array (
    0 => 'void',
    'class=' => 'class-string',
  ),
  'filesystemiterator::valid' => 
  array (
    0 => 'bool',
  ),
  'filetype' => 
  array (
    0 => 'false|string',
    'filename' => 'string',
  ),
  'filter_has_var' => 
  array (
    0 => 'bool',
    'input_type' => '0|1|2|4|5',
    'var_name' => 'string',
  ),
  'filter_id' => 
  array (
    0 => 'false|int',
    'name' => 'string',
  ),
  'filter_input' => 
  array (
    0 => 'false|mixed|null',
    'type' => '0|1|2|4|5',
    'var_name' => 'string',
    'filter=' => 'int',
    'options=' => 'array<array-key, mixed>|int',
  ),
  'filter_input_array' => 
  array (
    0 => 'array<array-key, mixed>|false|null',
    'type' => '0|1|2|4|5',
    'options=' => 'array<array-key, mixed>|int',
    'add_empty=' => 'bool',
  ),
  'filter_list' => 
  array (
    0 => 'non-empty-list<non-falsy-string>',
  ),
  'filter_var' => 
  array (
    0 => 'false|mixed',
    'value' => 'mixed',
    'filter=' => 'int',
    'options=' => 'array<array-key, mixed>|int',
  ),
  'filter_var_array' => 
  array (
    0 => 'array<array-key, mixed>|false|null',
    'array' => 'array<array-key, mixed>',
    'options=' => 'array<array-key, mixed>|int',
    'add_empty=' => 'bool',
  ),
  'filteriterator::accept' => 
  array (
    0 => 'bool',
  ),
  'filteriterator::getinneriterator' => 
  array (
    0 => 'Iterator|null',
  ),
  'filteriterator::next' => 
  array (
    0 => 'void',
  ),
  'filteriterator::rewind' => 
  array (
    0 => 'void',
  ),
  'filteriterator::valid' => 
  array (
    0 => 'bool',
  ),
  'finfo::buffer' => 
  array (
    0 => 'false|string',
    'string' => 'string',
    'flags=' => 'int',
    'context=' => 'null|resource',
  ),
  'finfo::file' => 
  array (
    0 => 'false|string',
    'filename' => 'string',
    'flags=' => 'int',
    'context=' => 'null|resource',
  ),
  'finfo::set_flags' => 
  array (
    0 => 'true',
    'flags' => 'int',
  ),
  'finfo_buffer' => 
  array (
    0 => 'false|string',
    'finfo' => 'finfo',
    'string' => 'string',
    'flags=' => 'int',
    'context=' => 'resource',
  ),
  'finfo_close' => 
  array (
    0 => 'bool',
    'finfo' => 'finfo',
  ),
  'finfo_file' => 
  array (
    0 => 'false|string',
    'finfo' => 'finfo',
    'filename' => 'string',
    'flags=' => 'int',
    'context=' => 'resource',
  ),
  'finfo_open' => 
  array (
    0 => 'false|finfo',
    'flags=' => 'int',
    'magic_database=' => 'null|string',
  ),
  'finfo_set_flags' => 
  array (
    0 => 'true',
    'finfo' => 'finfo',
    'flags' => 'int',
  ),
  'floatval' => 
  array (
    0 => 'float',
    'value' => 'mixed',
  ),
  'flock' => 
  array (
    0 => 'bool',
    'stream' => 'resource',
    'operation' => 'int',
    '&w_would_block=' => 'int',
  ),
  'floor' => 
  array (
    0 => 'float',
    'num' => 'float|int',
  ),
  'flush' => 
  array (
    0 => 'void',
  ),
  'fmod' => 
  array (
    0 => 'float',
    'num1' => 'float',
    'num2' => 'float',
  ),
  'fnmatch' => 
  array (
    0 => 'bool',
    'pattern' => 'string',
    'filename' => 'string',
    'flags=' => 'int',
  ),
  'fopen' => 
  array (
    0 => 'false|resource',
    'filename' => 'string',
    'mode' => 'string',
    'use_include_path=' => 'bool',
    'context=' => 'null|resource',
  ),
  'forward_static_call' => 
  array (
    0 => 'false|mixed',
    'callback' => 'callable',
    '...args=' => 'mixed',
  ),
  'forward_static_call_array' => 
  array (
    0 => 'false|mixed',
    'callback' => 'callable',
    'args' => 'list<mixed>',
  ),
  'fpassthru' => 
  array (
    0 => 'int',
    'stream' => 'resource',
  ),
  'fpm_get_status' => 
  array (
    0 => 'array<array-key, mixed>|false',
  ),
  'fprintf' => 
  array (
    0 => 'int',
    'stream' => 'resource',
    'format' => 'string',
    '...values=' => 'float|int|string',
  ),
  'fputcsv' => 
  array (
    0 => 'false|int',
    'stream' => 'resource',
    'fields' => 'array<array-key, Stringable|null|scalar>',
    'separator=' => 'string',
    'enclosure=' => 'string',
    'escape=' => 'string',
    'eol=' => 'string',
  ),
  'fputs' => 
  array (
    0 => 'false|int',
    'stream' => 'resource',
    'data' => 'string',
    'length=' => 'int|null',
  ),
  'fread' => 
  array (
    0 => 'false|string',
    'stream' => 'resource',
    'length' => 'int',
  ),
  'frenchtojd' => 
  array (
    0 => 'int',
    'month' => 'int',
    'day' => 'int',
    'year' => 'int',
  ),
  'fribidi_log2vis' => 
  array (
    0 => 'string',
    'string' => 'string',
    'direction' => 'string',
    'charset' => 'int',
  ),
  'fscanf' => 
  array (
    0 => 'list<mixed>|null',
    'stream' => 'resource',
    'format' => 'string',
    '&...vars=' => 'mixed',
  ),
  'fscanf\'1' => 
  array (
    0 => 'int',
    'stream' => 'resource',
    'format' => 'string',
    '&...w_vars=' => 'float|int|string',
  ),
  'fseek' => 
  array (
    0 => 'int',
    'stream' => 'resource',
    'offset' => 'int',
    'whence=' => 'int',
  ),
  'fsockopen' => 
  array (
    0 => 'false|resource',
    'hostname' => 'string',
    'port=' => 'int',
    '&w_error_code=' => 'int',
    '&w_error_message=' => 'string',
    'timeout=' => 'float|null',
  ),
  'fstat' => 
  array (
    0 => 'array{0: int, 10: int, 11: int, 12: int, 1: int, 2: int, 3: int, 4: int, 5: int, 6: int, 7: int, 8: int, 9: int, atime: int, blksize: int, blocks: int, ctime: int, dev: int, gid: int, ino: int, mode: int, mtime: int, nlink: int, rdev: int, size: int, uid: int}|false',
    'stream' => 'resource',
  ),
  'fsync' => 
  array (
    0 => 'bool',
    'stream' => 'resource',
  ),
  'ftell' => 
  array (
    0 => 'false|int',
    'stream' => 'resource',
  ),
  'ftok' => 
  array (
    0 => 'int',
    'filename' => 'string',
    'project_id' => 'string',
  ),
  'ftp_alloc' => 
  array (
    0 => 'bool',
    'ftp' => 'FTP\\Connection',
    'size' => 'int',
    '&w_response=' => 'string',
  ),
  'ftp_append' => 
  array (
    0 => 'bool',
    'ftp' => 'FTP\\Connection',
    'remote_filename' => 'string',
    'local_filename' => 'string',
    'mode=' => 'int',
  ),
  'ftp_cdup' => 
  array (
    0 => 'bool',
    'ftp' => 'FTP\\Connection',
  ),
  'ftp_chdir' => 
  array (
    0 => 'bool',
    'ftp' => 'FTP\\Connection',
    'directory' => 'string',
  ),
  'ftp_chmod' => 
  array (
    0 => 'false|int',
    'ftp' => 'FTP\\Connection',
    'permissions' => 'int',
    'filename' => 'string',
  ),
  'ftp_close' => 
  array (
    0 => 'bool',
    'ftp' => 'FTP\\Connection',
  ),
  'ftp_connect' => 
  array (
    0 => 'FTP\\Connection|false',
    'hostname' => 'string',
    'port=' => 'int',
    'timeout=' => 'int',
  ),
  'ftp_delete' => 
  array (
    0 => 'bool',
    'ftp' => 'FTP\\Connection',
    'filename' => 'string',
  ),
  'ftp_exec' => 
  array (
    0 => 'bool',
    'ftp' => 'FTP\\Connection',
    'command' => 'string',
  ),
  'ftp_fget' => 
  array (
    0 => 'bool',
    'ftp' => 'FTP\\Connection',
    'stream' => 'resource',
    'remote_filename' => 'string',
    'mode=' => 'int',
    'offset=' => 'int',
  ),
  'ftp_fput' => 
  array (
    0 => 'bool',
    'ftp' => 'FTP\\Connection',
    'remote_filename' => 'string',
    'stream' => 'resource',
    'mode=' => 'int',
    'offset=' => 'int',
  ),
  'ftp_get' => 
  array (
    0 => 'bool',
    'ftp' => 'FTP\\Connection',
    'local_filename' => 'string',
    'remote_filename' => 'string',
    'mode=' => 'int',
    'offset=' => 'int',
  ),
  'ftp_get_option' => 
  array (
    0 => 'false|int',
    'ftp' => 'FTP\\Connection',
    'option' => 'int',
  ),
  'ftp_login' => 
  array (
    0 => 'bool',
    'ftp' => 'FTP\\Connection',
    'username' => 'string',
    'password' => 'string',
  ),
  'ftp_mdtm' => 
  array (
    0 => 'int',
    'ftp' => 'FTP\\Connection',
    'filename' => 'string',
  ),
  'ftp_mkdir' => 
  array (
    0 => 'false|string',
    'ftp' => 'FTP\\Connection',
    'directory' => 'string',
  ),
  'ftp_mlsd' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'ftp' => 'FTP\\Connection',
    'directory' => 'string',
  ),
  'ftp_nb_continue' => 
  array (
    0 => 'int',
    'ftp' => 'FTP\\Connection',
  ),
  'ftp_nb_fget' => 
  array (
    0 => 'int',
    'ftp' => 'FTP\\Connection',
    'stream' => 'resource',
    'remote_filename' => 'string',
    'mode=' => 'int',
    'offset=' => 'int',
  ),
  'ftp_nb_fput' => 
  array (
    0 => 'int',
    'ftp' => 'FTP\\Connection',
    'remote_filename' => 'string',
    'stream' => 'resource',
    'mode=' => 'int',
    'offset=' => 'int',
  ),
  'ftp_nb_get' => 
  array (
    0 => 'int',
    'ftp' => 'FTP\\Connection',
    'local_filename' => 'string',
    'remote_filename' => 'string',
    'mode=' => 'int',
    'offset=' => 'int',
  ),
  'ftp_nb_put' => 
  array (
    0 => 'int',
    'ftp' => 'FTP\\Connection',
    'remote_filename' => 'string',
    'local_filename' => 'string',
    'mode=' => 'int',
    'offset=' => 'int',
  ),
  'ftp_nlist' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'ftp' => 'FTP\\Connection',
    'directory' => 'string',
  ),
  'ftp_pasv' => 
  array (
    0 => 'bool',
    'ftp' => 'FTP\\Connection',
    'enable' => 'bool',
  ),
  'ftp_put' => 
  array (
    0 => 'bool',
    'ftp' => 'FTP\\Connection',
    'remote_filename' => 'string',
    'local_filename' => 'string',
    'mode=' => 'int',
    'offset=' => 'int',
  ),
  'ftp_pwd' => 
  array (
    0 => 'false|string',
    'ftp' => 'FTP\\Connection',
  ),
  'ftp_quit' => 
  array (
    0 => 'bool',
    'ftp' => 'FTP\\Connection',
  ),
  'ftp_raw' => 
  array (
    0 => 'array<array-key, mixed>|null',
    'ftp' => 'FTP\\Connection',
    'command' => 'string',
  ),
  'ftp_rawlist' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'ftp' => 'FTP\\Connection',
    'directory' => 'string',
    'recursive=' => 'bool',
  ),
  'ftp_rename' => 
  array (
    0 => 'bool',
    'ftp' => 'FTP\\Connection',
    'from' => 'string',
    'to' => 'string',
  ),
  'ftp_rmdir' => 
  array (
    0 => 'bool',
    'ftp' => 'FTP\\Connection',
    'directory' => 'string',
  ),
  'ftp_set_option' => 
  array (
    0 => 'bool',
    'ftp' => 'FTP\\Connection',
    'option' => 'int',
    'value' => 'mixed',
  ),
  'ftp_site' => 
  array (
    0 => 'bool',
    'ftp' => 'FTP\\Connection',
    'command' => 'string',
  ),
  'ftp_size' => 
  array (
    0 => 'int',
    'ftp' => 'FTP\\Connection',
    'filename' => 'string',
  ),
  'ftp_ssl_connect' => 
  array (
    0 => 'FTP\\Connection|false',
    'hostname' => 'string',
    'port=' => 'int',
    'timeout=' => 'int',
  ),
  'ftp_systype' => 
  array (
    0 => 'false|string',
    'ftp' => 'FTP\\Connection',
  ),
  'ftruncate' => 
  array (
    0 => 'bool',
    'stream' => 'resource',
    'size' => 'int',
  ),
  'func_get_arg' => 
  array (
    0 => 'false|mixed',
    'position' => 'int',
  ),
  'func_get_args' => 
  array (
    0 => 'list<mixed>',
  ),
  'func_num_args' => 
  array (
    0 => 'int',
  ),
  'function_exists' => 
  array (
    0 => 'bool',
    'function' => 'string',
  ),
  'fwrite' => 
  array (
    0 => 'false|int',
    'stream' => 'resource',
    'data' => 'string',
    'length=' => 'int|null',
  ),
  'gc_collect_cycles' => 
  array (
    0 => 'int',
  ),
  'gc_disable' => 
  array (
    0 => 'void',
  ),
  'gc_enable' => 
  array (
    0 => 'void',
  ),
  'gc_enabled' => 
  array (
    0 => 'bool',
  ),
  'gc_mem_caches' => 
  array (
    0 => 'int',
  ),
  'gc_status' => 
  array (
    0 => 'array{application_time: float, buffer_size: int, collected: int, collector_time: float, destructor_time: float, free_time: float, full: bool, protected: bool, roots: int, running: bool, runs: int, threshold: int}',
  ),
  'gd_info' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'gearman_bugreport' => 
  array (
    0 => 'mixed',
  ),
  'gearman_client_add_options' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
    'option' => 'mixed',
  ),
  'gearman_client_add_server' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
    'host' => 'mixed',
    'port' => 'mixed',
  ),
  'gearman_client_add_servers' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
    'servers' => 'mixed',
  ),
  'gearman_client_add_task' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
    'function_name' => 'mixed',
    'workload' => 'mixed',
    'context' => 'mixed',
    'unique' => 'mixed',
  ),
  'gearman_client_add_task_background' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
    'function_name' => 'mixed',
    'workload' => 'mixed',
    'context' => 'mixed',
    'unique' => 'mixed',
  ),
  'gearman_client_add_task_high' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
    'function_name' => 'mixed',
    'workload' => 'mixed',
    'context' => 'mixed',
    'unique' => 'mixed',
  ),
  'gearman_client_add_task_high_background' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
    'function_name' => 'mixed',
    'workload' => 'mixed',
    'context' => 'mixed',
    'unique' => 'mixed',
  ),
  'gearman_client_add_task_low' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
    'function_name' => 'mixed',
    'workload' => 'mixed',
    'context' => 'mixed',
    'unique' => 'mixed',
  ),
  'gearman_client_add_task_low_background' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
    'function_name' => 'mixed',
    'workload' => 'mixed',
    'context' => 'mixed',
    'unique' => 'mixed',
  ),
  'gearman_client_add_task_status' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
    'job_handle' => 'mixed',
    'context' => 'mixed',
  ),
  'gearman_client_clear_fn' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
  ),
  'gearman_client_clone' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
  ),
  'gearman_client_context' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
  ),
  'gearman_client_create' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
  ),
  'gearman_client_do' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
    'function_name' => 'mixed',
    'workload' => 'mixed',
    'unique' => 'mixed',
  ),
  'gearman_client_do_background' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
    'function_name' => 'mixed',
    'workload' => 'mixed',
    'unique' => 'mixed',
  ),
  'gearman_client_do_high' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
    'function_name' => 'mixed',
    'workload' => 'mixed',
    'unique' => 'mixed',
  ),
  'gearman_client_do_high_background' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
    'function_name' => 'mixed',
    'workload' => 'mixed',
    'unique' => 'mixed',
  ),
  'gearman_client_do_job_handle' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
  ),
  'gearman_client_do_low' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
    'function_name' => 'mixed',
    'workload' => 'mixed',
    'unique' => 'mixed',
  ),
  'gearman_client_do_low_background' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
    'function_name' => 'mixed',
    'workload' => 'mixed',
    'unique' => 'mixed',
  ),
  'gearman_client_do_normal' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
    'function_name' => 'string',
    'workload' => 'string',
    'unique' => 'string',
  ),
  'gearman_client_do_status' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
  ),
  'gearman_client_echo' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
    'workload' => 'mixed',
  ),
  'gearman_client_errno' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
  ),
  'gearman_client_error' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
  ),
  'gearman_client_job_status' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
    'job_handle' => 'mixed',
  ),
  'gearman_client_options' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
  ),
  'gearman_client_remove_options' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
    'option' => 'mixed',
  ),
  'gearman_client_return_code' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
  ),
  'gearman_client_run_tasks' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
  ),
  'gearman_client_set_complete_fn' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
    'callback' => 'mixed',
  ),
  'gearman_client_set_context' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
    'context' => 'mixed',
  ),
  'gearman_client_set_created_fn' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
    'callback' => 'mixed',
  ),
  'gearman_client_set_data_fn' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
    'callback' => 'mixed',
  ),
  'gearman_client_set_exception_fn' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
    'callback' => 'mixed',
  ),
  'gearman_client_set_fail_fn' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
    'callback' => 'mixed',
  ),
  'gearman_client_set_options' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
    'option' => 'mixed',
  ),
  'gearman_client_set_status_fn' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
    'callback' => 'mixed',
  ),
  'gearman_client_set_timeout' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
    'timeout' => 'mixed',
  ),
  'gearman_client_set_warning_fn' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
    'callback' => 'mixed',
  ),
  'gearman_client_set_workload_fn' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
    'callback' => 'mixed',
  ),
  'gearman_client_timeout' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
  ),
  'gearman_client_wait' => 
  array (
    0 => 'mixed',
    'client_object' => 'mixed',
  ),
  'gearman_job_function_name' => 
  array (
    0 => 'mixed',
    'job_object' => 'mixed',
  ),
  'gearman_job_handle' => 
  array (
    0 => 'string',
  ),
  'gearman_job_return_code' => 
  array (
    0 => 'mixed',
    'job_object' => 'mixed',
  ),
  'gearman_job_send_complete' => 
  array (
    0 => 'mixed',
    'job_object' => 'mixed',
    'result' => 'mixed',
  ),
  'gearman_job_send_data' => 
  array (
    0 => 'mixed',
    'job_object' => 'mixed',
    'data' => 'mixed',
  ),
  'gearman_job_send_exception' => 
  array (
    0 => 'mixed',
    'job_object' => 'mixed',
    'exception' => 'mixed',
  ),
  'gearman_job_send_fail' => 
  array (
    0 => 'mixed',
    'job_object' => 'mixed',
  ),
  'gearman_job_send_status' => 
  array (
    0 => 'mixed',
    'job_object' => 'mixed',
    'numerator' => 'mixed',
    'denominator' => 'mixed',
  ),
  'gearman_job_send_warning' => 
  array (
    0 => 'mixed',
    'job_object' => 'mixed',
    'warning' => 'mixed',
  ),
  'gearman_job_status' => 
  array (
    0 => 'array<array-key, mixed>',
    'job_handle' => 'string',
  ),
  'gearman_job_unique' => 
  array (
    0 => 'mixed',
    'job_object' => 'mixed',
  ),
  'gearman_job_workload' => 
  array (
    0 => 'mixed',
    'job_object' => 'mixed',
  ),
  'gearman_job_workload_size' => 
  array (
    0 => 'mixed',
    'job_object' => 'mixed',
  ),
  'gearman_task_data' => 
  array (
    0 => 'mixed',
    'task_object' => 'mixed',
  ),
  'gearman_task_data_size' => 
  array (
    0 => 'mixed',
    'task_object' => 'mixed',
  ),
  'gearman_task_denominator' => 
  array (
    0 => 'mixed',
    'task_object' => 'mixed',
  ),
  'gearman_task_function_name' => 
  array (
    0 => 'mixed',
    'task_object' => 'mixed',
  ),
  'gearman_task_is_known' => 
  array (
    0 => 'mixed',
    'task_object' => 'mixed',
  ),
  'gearman_task_is_running' => 
  array (
    0 => 'mixed',
    'task_object' => 'mixed',
  ),
  'gearman_task_job_handle' => 
  array (
    0 => 'mixed',
    'task_object' => 'mixed',
  ),
  'gearman_task_numerator' => 
  array (
    0 => 'mixed',
    'task_object' => 'mixed',
  ),
  'gearman_task_recv_data' => 
  array (
    0 => 'mixed',
    'task_object' => 'mixed',
    'data_len' => 'mixed',
  ),
  'gearman_task_return_code' => 
  array (
    0 => 'mixed',
    'task_object' => 'mixed',
  ),
  'gearman_task_send_workload' => 
  array (
    0 => 'mixed',
    'task_object' => 'mixed',
    'data' => 'mixed',
  ),
  'gearman_task_unique' => 
  array (
    0 => 'mixed',
    'task_object' => 'mixed',
  ),
  'gearman_verbose_name' => 
  array (
    0 => 'mixed',
    'verbose' => 'mixed',
  ),
  'gearman_version' => 
  array (
    0 => 'mixed',
  ),
  'gearman_worker_add_function' => 
  array (
    0 => 'mixed',
    'worker_object' => 'mixed',
    'function_name' => 'mixed',
    'function' => 'mixed',
    'data' => 'mixed',
    'timeout' => 'mixed',
  ),
  'gearman_worker_add_options' => 
  array (
    0 => 'mixed',
    'worker_object' => 'mixed',
    'option' => 'mixed',
  ),
  'gearman_worker_add_server' => 
  array (
    0 => 'mixed',
    'worker_object' => 'mixed',
    'host' => 'mixed',
    'port' => 'mixed',
  ),
  'gearman_worker_add_servers' => 
  array (
    0 => 'mixed',
    'worker_object' => 'mixed',
    'servers' => 'mixed',
  ),
  'gearman_worker_clone' => 
  array (
    0 => 'mixed',
    'worker_object' => 'mixed',
  ),
  'gearman_worker_create' => 
  array (
    0 => 'mixed',
  ),
  'gearman_worker_echo' => 
  array (
    0 => 'mixed',
    'worker_object' => 'mixed',
    'workload' => 'mixed',
  ),
  'gearman_worker_errno' => 
  array (
    0 => 'mixed',
    'worker_object' => 'mixed',
  ),
  'gearman_worker_error' => 
  array (
    0 => 'mixed',
    'worker_object' => 'mixed',
  ),
  'gearman_worker_grab_job' => 
  array (
    0 => 'mixed',
    'worker_object' => 'mixed',
  ),
  'gearman_worker_options' => 
  array (
    0 => 'mixed',
    'worker_object' => 'mixed',
  ),
  'gearman_worker_register' => 
  array (
    0 => 'mixed',
    'worker_object' => 'mixed',
    'function_name' => 'mixed',
    'timeout' => 'mixed',
  ),
  'gearman_worker_remove_options' => 
  array (
    0 => 'mixed',
    'worker_object' => 'mixed',
    'option' => 'mixed',
  ),
  'gearman_worker_return_code' => 
  array (
    0 => 'mixed',
    'worker_object' => 'mixed',
  ),
  'gearman_worker_set_options' => 
  array (
    0 => 'mixed',
    'worker_object' => 'mixed',
    'option' => 'mixed',
  ),
  'gearman_worker_set_timeout' => 
  array (
    0 => 'mixed',
    'worker_object' => 'mixed',
    'timeout' => 'mixed',
  ),
  'gearman_worker_timeout' => 
  array (
    0 => 'mixed',
    'worker_object' => 'mixed',
  ),
  'gearman_worker_unregister' => 
  array (
    0 => 'mixed',
    'worker_object' => 'mixed',
    'function_name' => 'mixed',
  ),
  'gearman_worker_unregister_all' => 
  array (
    0 => 'mixed',
    'worker_object' => 'mixed',
  ),
  'gearman_worker_wait' => 
  array (
    0 => 'mixed',
    'worker_object' => 'mixed',
  ),
  'gearman_worker_work' => 
  array (
    0 => 'mixed',
    'worker_object' => 'mixed',
  ),
  'gearmanclient::__construct' => 
  array (
    0 => 'void',
  ),
  'gearmanclient::addoptions' => 
  array (
    0 => 'bool',
    'options' => 'int',
  ),
  'gearmanclient::addserver' => 
  array (
    0 => 'bool',
    'host=' => 'string',
    'port=' => 'int',
  ),
  'gearmanclient::addservers' => 
  array (
    0 => 'bool',
    'servers=' => 'string',
  ),
  'gearmanclient::addtask' => 
  array (
    0 => 'GearmanTask|false',
    'function_name' => 'string',
    'workload' => 'string',
    'context=' => 'mixed',
    'unique=' => 'string',
  ),
  'gearmanclient::addtaskbackground' => 
  array (
    0 => 'GearmanTask|false',
    'function_name' => 'string',
    'workload' => 'string',
    'context=' => 'mixed',
    'unique=' => 'string',
  ),
  'gearmanclient::addtaskhigh' => 
  array (
    0 => 'GearmanTask|false',
    'function_name' => 'string',
    'workload' => 'string',
    'context=' => 'mixed',
    'unique=' => 'string',
  ),
  'gearmanclient::addtaskhighbackground' => 
  array (
    0 => 'GearmanTask|false',
    'function_name' => 'string',
    'workload' => 'string',
    'context=' => 'mixed',
    'unique=' => 'string',
  ),
  'gearmanclient::addtasklow' => 
  array (
    0 => 'GearmanTask|false',
    'function_name' => 'string',
    'workload' => 'string',
    'context=' => 'mixed',
    'unique=' => 'string',
  ),
  'gearmanclient::addtasklowbackground' => 
  array (
    0 => 'GearmanTask|false',
    'function_name' => 'string',
    'workload' => 'string',
    'context=' => 'mixed',
    'unique=' => 'string',
  ),
  'gearmanclient::addtaskstatus' => 
  array (
    0 => 'GearmanTask',
    'job_handle' => 'string',
    'context=' => 'string',
  ),
  'gearmanclient::clearcallbacks' => 
  array (
    0 => 'bool',
  ),
  'gearmanclient::clone' => 
  array (
    0 => 'GearmanClient',
  ),
  'gearmanclient::context' => 
  array (
    0 => 'string',
  ),
  'gearmanclient::data' => 
  array (
    0 => 'string',
  ),
  'gearmanclient::do' => 
  array (
    0 => 'string',
    'function_name' => 'string',
    'workload' => 'string',
    'unique=' => 'string',
  ),
  'gearmanclient::dobackground' => 
  array (
    0 => 'string',
    'function_name' => 'string',
    'workload' => 'string',
    'unique=' => 'string',
  ),
  'gearmanclient::dohigh' => 
  array (
    0 => 'string',
    'function_name' => 'string',
    'workload' => 'string',
    'unique=' => 'string',
  ),
  'gearmanclient::dohighbackground' => 
  array (
    0 => 'string',
    'function_name' => 'string',
    'workload' => 'string',
    'unique=' => 'string',
  ),
  'gearmanclient::dojobhandle' => 
  array (
    0 => 'string',
  ),
  'gearmanclient::dolow' => 
  array (
    0 => 'string',
    'function_name' => 'string',
    'workload' => 'string',
    'unique=' => 'string',
  ),
  'gearmanclient::dolowbackground' => 
  array (
    0 => 'string',
    'function_name' => 'string',
    'workload' => 'string',
    'unique=' => 'string',
  ),
  'gearmanclient::donormal' => 
  array (
    0 => 'string',
    'function_name' => 'string',
    'workload' => 'string',
    'unique=' => 'string',
  ),
  'gearmanclient::dostatus' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'gearmanclient::echo' => 
  array (
    0 => 'bool',
    'workload' => 'string',
  ),
  'gearmanclient::error' => 
  array (
    0 => 'string',
  ),
  'gearmanclient::geterrno' => 
  array (
    0 => 'int',
  ),
  'gearmanclient::jobstatus' => 
  array (
    0 => 'array<array-key, mixed>',
    'job_handle' => 'string',
  ),
  'gearmanclient::options' => 
  array (
    0 => 'mixed',
  ),
  'gearmanclient::ping' => 
  array (
    0 => 'bool',
    'workload' => 'string',
  ),
  'gearmanclient::removeoptions' => 
  array (
    0 => 'bool',
    'options' => 'int',
  ),
  'gearmanclient::returncode' => 
  array (
    0 => 'int',
  ),
  'gearmanclient::runtasks' => 
  array (
    0 => 'bool',
  ),
  'gearmanclient::setclientcallback' => 
  array (
    0 => 'void',
    'callback' => 'callable',
  ),
  'gearmanclient::setcompletecallback' => 
  array (
    0 => 'bool',
    'callback' => 'callable',
  ),
  'gearmanclient::setcontext' => 
  array (
    0 => 'bool',
    'context' => 'string',
  ),
  'gearmanclient::setcreatedcallback' => 
  array (
    0 => 'bool',
    'callback' => 'string',
  ),
  'gearmanclient::setdata' => 
  array (
    0 => 'bool',
    'data' => 'string',
  ),
  'gearmanclient::setdatacallback' => 
  array (
    0 => 'bool',
    'callback' => 'callable',
  ),
  'gearmanclient::setexceptioncallback' => 
  array (
    0 => 'bool',
    'callback' => 'callable',
  ),
  'gearmanclient::setfailcallback' => 
  array (
    0 => 'bool',
    'callback' => 'callable',
  ),
  'gearmanclient::setoptions' => 
  array (
    0 => 'bool',
    'options' => 'int',
  ),
  'gearmanclient::setstatuscallback' => 
  array (
    0 => 'bool',
    'callback' => 'callable',
  ),
  'gearmanclient::settimeout' => 
  array (
    0 => 'bool',
    'timeout' => 'int',
  ),
  'gearmanclient::setwarningcallback' => 
  array (
    0 => 'bool',
    'callback' => 'callable',
  ),
  'gearmanclient::setworkloadcallback' => 
  array (
    0 => 'bool',
    'callback' => 'callable',
  ),
  'gearmanclient::timeout' => 
  array (
    0 => 'int',
  ),
  'gearmanclient::wait' => 
  array (
    0 => 'mixed',
  ),
  'gearmanjob::__construct' => 
  array (
    0 => 'void',
  ),
  'gearmanjob::complete' => 
  array (
    0 => 'bool',
    'result' => 'string',
  ),
  'gearmanjob::data' => 
  array (
    0 => 'bool',
    'data' => 'string',
  ),
  'gearmanjob::exception' => 
  array (
    0 => 'bool',
    'exception' => 'string',
  ),
  'gearmanjob::fail' => 
  array (
    0 => 'bool',
  ),
  'gearmanjob::functionname' => 
  array (
    0 => 'string',
  ),
  'gearmanjob::handle' => 
  array (
    0 => 'string',
  ),
  'gearmanjob::returncode' => 
  array (
    0 => 'int',
  ),
  'gearmanjob::sendcomplete' => 
  array (
    0 => 'bool',
    'result' => 'string',
  ),
  'gearmanjob::senddata' => 
  array (
    0 => 'bool',
    'data' => 'string',
  ),
  'gearmanjob::sendexception' => 
  array (
    0 => 'bool',
    'exception' => 'string',
  ),
  'gearmanjob::sendfail' => 
  array (
    0 => 'bool',
  ),
  'gearmanjob::sendstatus' => 
  array (
    0 => 'bool',
    'numerator' => 'int',
    'denominator' => 'int',
  ),
  'gearmanjob::sendwarning' => 
  array (
    0 => 'bool',
    'warning' => 'string',
  ),
  'gearmanjob::setreturn' => 
  array (
    0 => 'bool',
    'gearman_return_t' => 'string',
  ),
  'gearmanjob::status' => 
  array (
    0 => 'bool',
    'numerator' => 'int',
    'denominator' => 'int',
  ),
  'gearmanjob::unique' => 
  array (
    0 => 'string',
  ),
  'gearmanjob::warning' => 
  array (
    0 => 'bool',
    'warning' => 'string',
  ),
  'gearmanjob::workload' => 
  array (
    0 => 'string',
  ),
  'gearmanjob::workloadsize' => 
  array (
    0 => 'int',
  ),
  'gearmantask::__construct' => 
  array (
    0 => 'void',
  ),
  'gearmantask::create' => 
  array (
    0 => 'GearmanTask',
  ),
  'gearmantask::data' => 
  array (
    0 => 'false|string',
  ),
  'gearmantask::datasize' => 
  array (
    0 => 'false|int',
  ),
  'gearmantask::function' => 
  array (
    0 => 'string',
  ),
  'gearmantask::functionname' => 
  array (
    0 => 'string',
  ),
  'gearmantask::isknown' => 
  array (
    0 => 'bool',
  ),
  'gearmantask::isrunning' => 
  array (
    0 => 'bool',
  ),
  'gearmantask::jobhandle' => 
  array (
    0 => 'string',
  ),
  'gearmantask::recvdata' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'data_len' => 'int',
  ),
  'gearmantask::returncode' => 
  array (
    0 => 'int',
  ),
  'gearmantask::senddata' => 
  array (
    0 => 'int',
    'data' => 'string',
  ),
  'gearmantask::sendworkload' => 
  array (
    0 => 'false|int',
    'data' => 'string',
  ),
  'gearmantask::taskdenominator' => 
  array (
    0 => 'false|int',
  ),
  'gearmantask::tasknumerator' => 
  array (
    0 => 'false|int',
  ),
  'gearmantask::unique' => 
  array (
    0 => 'false|string',
  ),
  'gearmantask::uuid' => 
  array (
    0 => 'string',
  ),
  'gearmanworker::__construct' => 
  array (
    0 => 'void',
  ),
  'gearmanworker::addfunction' => 
  array (
    0 => 'bool',
    'function_name' => 'string',
    'function' => 'callable',
    'context=' => 'mixed',
    'timeout=' => 'int',
  ),
  'gearmanworker::addoptions' => 
  array (
    0 => 'bool',
    'option' => 'int',
  ),
  'gearmanworker::addserver' => 
  array (
    0 => 'bool',
    'host=' => 'string',
    'port=' => 'int',
  ),
  'gearmanworker::addservers' => 
  array (
    0 => 'bool',
    'servers' => 'string',
  ),
  'gearmanworker::clone' => 
  array (
    0 => 'void',
  ),
  'gearmanworker::echo' => 
  array (
    0 => 'bool',
    'workload' => 'string',
  ),
  'gearmanworker::error' => 
  array (
    0 => 'string',
  ),
  'gearmanworker::geterrno' => 
  array (
    0 => 'int',
  ),
  'gearmanworker::grabjob' => 
  array (
    0 => 'mixed',
  ),
  'gearmanworker::options' => 
  array (
    0 => 'int',
  ),
  'gearmanworker::register' => 
  array (
    0 => 'bool',
    'function_name' => 'string',
    'timeout=' => 'int',
  ),
  'gearmanworker::removeoptions' => 
  array (
    0 => 'bool',
    'option' => 'int',
  ),
  'gearmanworker::returncode' => 
  array (
    0 => 'int',
  ),
  'gearmanworker::setid' => 
  array (
    0 => 'bool',
    'id' => 'string',
  ),
  'gearmanworker::setoptions' => 
  array (
    0 => 'bool',
    'option' => 'int',
  ),
  'gearmanworker::settimeout' => 
  array (
    0 => 'bool',
    'timeout' => 'int',
  ),
  'gearmanworker::timeout' => 
  array (
    0 => 'int',
  ),
  'gearmanworker::unregister' => 
  array (
    0 => 'bool',
    'function_name' => 'string',
  ),
  'gearmanworker::unregisterall' => 
  array (
    0 => 'bool',
  ),
  'gearmanworker::wait' => 
  array (
    0 => 'bool',
  ),
  'gearmanworker::work' => 
  array (
    0 => 'bool',
  ),
  'gender\\gender::__construct' => 
  array (
    0 => 'void',
    'dsn=' => 'string',
  ),
  'gender\\gender::connect' => 
  array (
    0 => 'bool',
    'dsn' => 'string',
  ),
  'gender\\gender::country' => 
  array (
    0 => 'array<array-key, mixed>',
    'country' => 'int',
  ),
  'gender\\gender::get' => 
  array (
    0 => 'int',
    'name' => 'string',
    'country=' => 'int',
  ),
  'gender\\gender::isnick' => 
  array (
    0 => 'array<array-key, mixed>',
    'name0' => 'string',
    'name1' => 'string',
    'country=' => 'int',
  ),
  'gender\\gender::similarnames' => 
  array (
    0 => 'array<array-key, mixed>',
    'name' => 'string',
    'country=' => 'int',
  ),
  'generator::next' => 
  array (
    0 => 'void',
  ),
  'generator::rewind' => 
  array (
    0 => 'void',
  ),
  'generator::throw' => 
  array (
    0 => 'mixed',
    'exception' => 'Throwable',
  ),
  'generator::valid' => 
  array (
    0 => 'bool',
  ),
  'geoip_asnum_by_name' => 
  array (
    0 => 'false|string',
    'hostname' => 'string',
  ),
  'geoip_continent_code_by_name' => 
  array (
    0 => 'false|string',
    'hostname' => 'string',
  ),
  'geoip_country_code3_by_name' => 
  array (
    0 => 'false|string',
    'hostname' => 'string',
  ),
  'geoip_country_code_by_name' => 
  array (
    0 => 'false|string',
    'hostname' => 'string',
  ),
  'geoip_country_name_by_name' => 
  array (
    0 => 'false|string',
    'hostname' => 'string',
  ),
  'geoip_database_info' => 
  array (
    0 => 'string',
    'database=' => 'int',
  ),
  'geoip_db_avail' => 
  array (
    0 => 'bool',
    'database' => 'int',
  ),
  'geoip_db_filename' => 
  array (
    0 => 'string',
    'database' => 'int',
  ),
  'geoip_db_get_all_info' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'geoip_domain_by_name' => 
  array (
    0 => 'string',
    'hostname' => 'string',
  ),
  'geoip_id_by_name' => 
  array (
    0 => 'int',
    'hostname' => 'string',
  ),
  'geoip_isp_by_name' => 
  array (
    0 => 'false|string',
    'hostname' => 'string',
  ),
  'geoip_netspeedcell_by_name' => 
  array (
    0 => 'false|string',
    'hostname' => 'string',
  ),
  'geoip_org_by_name' => 
  array (
    0 => 'false|string',
    'hostname' => 'string',
  ),
  'geoip_record_by_name' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'hostname' => 'string',
  ),
  'geoip_region_by_name' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'hostname' => 'string',
  ),
  'geoip_region_name_by_code' => 
  array (
    0 => 'false|string',
    'country_code' => 'string',
    'region_code' => 'string',
  ),
  'geoip_setup_custom_directory' => 
  array (
    0 => 'void',
    'path' => 'string',
  ),
  'geoip_time_zone_by_country_and_region' => 
  array (
    0 => 'false|string',
    'country_code' => 'string',
    'region_code=' => 'string',
  ),
  'geosgeometry::__tostring' => 
  array (
    0 => 'string',
  ),
  'geosgeometry::area' => 
  array (
    0 => 'float',
  ),
  'geosgeometry::boundary' => 
  array (
    0 => 'GEOSGeometry',
  ),
  'geosgeometry::buffer' => 
  array (
    0 => 'GEOSGeometry',
    'dist' => 'float',
    'styleArray=' => 'array<array-key, mixed>',
  ),
  'geosgeometry::centroid' => 
  array (
    0 => 'GEOSGeometry',
  ),
  'geosgeometry::checkvalidity' => 
  array (
    0 => 'array{location?: GEOSGeometry, reason?: string, valid: bool}',
  ),
  'geosgeometry::contains' => 
  array (
    0 => 'bool',
    'geom' => 'GEOSGeometry',
  ),
  'geosgeometry::convexhull' => 
  array (
    0 => 'GEOSGeometry',
  ),
  'geosgeometry::coordinatedimension' => 
  array (
    0 => 'int',
  ),
  'geosgeometry::coveredby' => 
  array (
    0 => 'bool',
    'geom' => 'GEOSGeometry',
  ),
  'geosgeometry::covers' => 
  array (
    0 => 'bool',
    'geom' => 'GEOSGeometry',
  ),
  'geosgeometry::crosses' => 
  array (
    0 => 'bool',
    'geom' => 'GEOSGeometry',
  ),
  'geosgeometry::delaunaytriangulation' => 
  array (
    0 => 'GEOSGeometry',
    'tolerance' => 'float',
    'onlyEdges' => 'bool',
  ),
  'geosgeometry::difference' => 
  array (
    0 => 'GEOSGeometry',
    'geom' => 'GEOSGeometry',
  ),
  'geosgeometry::dimension' => 
  array (
    0 => 'int',
  ),
  'geosgeometry::disjoint' => 
  array (
    0 => 'bool',
    'geom' => 'GEOSGeometry',
  ),
  'geosgeometry::distance' => 
  array (
    0 => 'float',
    'geom' => 'GEOSGeometry',
  ),
  'geosgeometry::endpoint' => 
  array (
    0 => 'GEOSGeometry',
  ),
  'geosgeometry::envelope' => 
  array (
    0 => 'GEOSGeometry',
  ),
  'geosgeometry::equals' => 
  array (
    0 => 'bool',
    'geom' => 'GEOSGeometry',
  ),
  'geosgeometry::equalsexact' => 
  array (
    0 => 'bool',
    'geom' => 'GEOSGeometry',
    'tolerance' => 'float',
  ),
  'geosgeometry::exteriorring' => 
  array (
    0 => 'GEOSGeometry',
  ),
  'geosgeometry::extractuniquepoints' => 
  array (
    0 => 'GEOSGeometry',
  ),
  'geosgeometry::geometryn' => 
  array (
    0 => 'GEOSGeometry',
    'num' => 'int',
  ),
  'geosgeometry::getsrid' => 
  array (
    0 => 'int',
  ),
  'geosgeometry::getx' => 
  array (
    0 => 'float',
  ),
  'geosgeometry::gety' => 
  array (
    0 => 'float',
  ),
  'geosgeometry::hasz' => 
  array (
    0 => 'bool',
  ),
  'geosgeometry::hausdorffdistance' => 
  array (
    0 => 'float',
    'geom' => 'GEOSGeometry',
  ),
  'geosgeometry::interiorringn' => 
  array (
    0 => 'GEOSGeometry',
    'num' => 'int',
  ),
  'geosgeometry::interpolate' => 
  array (
    0 => 'GEOSGeometry',
    'dist' => 'float',
    'normalized' => 'bool',
  ),
  'geosgeometry::intersection' => 
  array (
    0 => 'GEOSGeometry',
    'geom' => 'GEOSGeometry',
  ),
  'geosgeometry::intersects' => 
  array (
    0 => 'bool',
    'geom' => 'GEOSGeometry',
  ),
  'geosgeometry::isclosed' => 
  array (
    0 => 'bool',
  ),
  'geosgeometry::isempty' => 
  array (
    0 => 'bool',
  ),
  'geosgeometry::isring' => 
  array (
    0 => 'bool',
  ),
  'geosgeometry::issimple' => 
  array (
    0 => 'bool',
  ),
  'geosgeometry::length' => 
  array (
    0 => 'float',
  ),
  'geosgeometry::node' => 
  array (
    0 => 'GEOSGeometry',
  ),
  'geosgeometry::normalize' => 
  array (
    0 => 'GEOSGeometry',
  ),
  'geosgeometry::numcoordinates' => 
  array (
    0 => 'int',
  ),
  'geosgeometry::numgeometries' => 
  array (
    0 => 'int',
  ),
  'geosgeometry::numinteriorrings' => 
  array (
    0 => 'int',
  ),
  'geosgeometry::numpoints' => 
  array (
    0 => 'int',
  ),
  'geosgeometry::offsetcurve' => 
  array (
    0 => 'GEOSGeometry',
    'dist' => 'float',
    'styleArray' => 'array<array-key, mixed>',
  ),
  'geosgeometry::overlaps' => 
  array (
    0 => 'bool',
    'geom' => 'GEOSGeometry',
  ),
  'geosgeometry::pointn' => 
  array (
    0 => 'GEOSGeometry',
    'num' => 'int',
  ),
  'geosgeometry::pointonsurface' => 
  array (
    0 => 'GEOSGeometry',
  ),
  'geosgeometry::project' => 
  array (
    0 => 'float',
    'other' => 'GEOSGeometry',
    'normalized' => 'bool',
  ),
  'geosgeometry::relate' => 
  array (
    0 => 'bool|string',
    'otherGeom' => 'GEOSGeometry',
    'pattern' => 'string',
  ),
  'geosgeometry::relateboundarynoderule' => 
  array (
    0 => 'string',
    'otherGeom' => 'GEOSGeometry',
    'rule' => 'int',
  ),
  'geosgeometry::setsrid' => 
  array (
    0 => 'void',
    'srid' => 'int',
  ),
  'geosgeometry::simplify' => 
  array (
    0 => 'GEOSGeometry',
    'tolerance' => 'float',
    'preserveTopology=' => 'bool',
  ),
  'geosgeometry::snapto' => 
  array (
    0 => 'GEOSGeometry',
    'geom' => 'GEOSGeometry',
    'tolerance' => 'float',
  ),
  'geosgeometry::startpoint' => 
  array (
    0 => 'GEOSGeometry',
  ),
  'geosgeometry::symdifference' => 
  array (
    0 => 'GEOSGeometry',
    'geom' => 'GEOSGeometry',
  ),
  'geosgeometry::touches' => 
  array (
    0 => 'bool',
    'geom' => 'GEOSGeometry',
  ),
  'geosgeometry::typeid' => 
  array (
    0 => 'int',
  ),
  'geosgeometry::typename' => 
  array (
    0 => 'string',
  ),
  'geosgeometry::union' => 
  array (
    0 => 'GEOSGeometry',
    'otherGeom=' => 'GEOSGeometry',
  ),
  'geosgeometry::voronoidiagram' => 
  array (
    0 => 'GEOSGeometry',
    'tolerance' => 'float',
    'onlyEdges' => 'bool',
    'extent' => 'GEOSGeometry|null',
  ),
  'geosgeometry::within' => 
  array (
    0 => 'bool',
    'geom' => 'GEOSGeometry',
  ),
  'geoslinemerge' => 
  array (
    0 => 'array<array-key, mixed>',
    'geom' => 'GEOSGeometry',
  ),
  'geospolygonize' => 
  array (
    0 => 'array{cut_edges?: array<array-key, GEOSGeometry>, dangles: array<array-key, GEOSGeometry>, invalid_rings: array<array-key, GEOSGeometry>, rings: array<array-key, GEOSGeometry>}',
    'geom' => 'GEOSGeometry',
  ),
  'geosrelatematch' => 
  array (
    0 => 'bool',
    'matrix' => 'string',
    'pattern' => 'string',
  ),
  'geossharedpaths' => 
  array (
    0 => 'GEOSGeometry',
    'geom1' => 'GEOSGeometry',
    'geom2' => 'GEOSGeometry',
  ),
  'geosversion' => 
  array (
    0 => 'string',
  ),
  'geoswkbreader::__construct' => 
  array (
    0 => 'void',
  ),
  'geoswkbreader::read' => 
  array (
    0 => 'GEOSGeometry',
    'wkb' => 'string',
  ),
  'geoswkbreader::readhex' => 
  array (
    0 => 'GEOSGeometry',
    'wkb' => 'string',
  ),
  'geoswkbwriter::__construct' => 
  array (
    0 => 'void',
  ),
  'geoswkbwriter::getbyteorder' => 
  array (
    0 => 'int',
  ),
  'geoswkbwriter::getincludesrid' => 
  array (
    0 => 'bool',
  ),
  'geoswkbwriter::getoutputdimension' => 
  array (
    0 => 'int',
  ),
  'geoswkbwriter::setbyteorder' => 
  array (
    0 => 'void',
    'byteOrder' => 'int',
  ),
  'geoswkbwriter::setincludesrid' => 
  array (
    0 => 'void',
    'inc' => 'bool',
  ),
  'geoswkbwriter::setoutputdimension' => 
  array (
    0 => 'void',
    'dim' => 'int',
  ),
  'geoswkbwriter::write' => 
  array (
    0 => 'string',
    'geom' => 'GEOSGeometry',
  ),
  'geoswkbwriter::writehex' => 
  array (
    0 => 'string',
    'geom' => 'GEOSGeometry',
  ),
  'geoswktreader::__construct' => 
  array (
    0 => 'void',
  ),
  'geoswktreader::read' => 
  array (
    0 => 'GEOSGeometry',
    'wkt' => 'string',
  ),
  'geoswktwriter::__construct' => 
  array (
    0 => 'void',
  ),
  'geoswktwriter::getoutputdimension' => 
  array (
    0 => 'int',
  ),
  'geoswktwriter::setold3d' => 
  array (
    0 => 'void',
    'val' => 'bool',
  ),
  'geoswktwriter::setoutputdimension' => 
  array (
    0 => 'void',
    'dim' => 'int',
  ),
  'geoswktwriter::setroundingprecision' => 
  array (
    0 => 'void',
    'prec' => 'int',
  ),
  'geoswktwriter::settrim' => 
  array (
    0 => 'void',
    'trim' => 'bool',
  ),
  'geoswktwriter::write' => 
  array (
    0 => 'string',
    'geom' => 'GEOSGeometry',
  ),
  'get_browser' => 
  array (
    0 => 'array<array-key, mixed>|false|object',
    'user_agent=' => 'null|string',
    'return_array=' => 'bool',
  ),
  'get_call_stack' => 
  array (
    0 => 'mixed',
  ),
  'get_called_class' => 
  array (
    0 => 'class-string',
  ),
  'get_cfg_var' => 
  array (
    0 => 'array<array-key, mixed>|false|string',
    'option' => 'string',
  ),
  'get_class' => 
  array (
    0 => 'class-string',
    'object=' => 'object',
  ),
  'get_class_methods' => 
  array (
    0 => 'list<non-falsy-string>',
    'object_or_class' => 'class-string|object',
  ),
  'get_class_vars' => 
  array (
    0 => 'array<non-falsy-string, mixed>',
    'class' => 'string',
  ),
  'get_current_user' => 
  array (
    0 => 'string',
  ),
  'get_declared_classes' => 
  array (
    0 => 'list<class-string>',
  ),
  'get_declared_interfaces' => 
  array (
    0 => 'list<class-string>',
  ),
  'get_declared_traits' => 
  array (
    0 => 'list<class-string>',
  ),
  'get_defined_constants' => 
  array (
    0 => 'array<string, array<array-key, mixed>|null|resource|scalar>',
    'categorize=' => 'bool',
  ),
  'get_defined_functions' => 
  array (
    0 => 'array{internal: list<callable-string>, user: list<callable-string>}',
    'exclude_disabled=' => 'bool',
  ),
  'get_defined_vars' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'get_extension_funcs' => 
  array (
    0 => 'false|list<callable-string>',
    'extension' => 'string',
  ),
  'get_headers' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'url' => 'string',
    'associative=' => 'bool',
    'context=' => 'null|resource',
  ),
  'get_html_translation_table' => 
  array (
    0 => 'array<array-key, mixed>',
    'table=' => 'int',
    'flags=' => 'int',
    'encoding=' => 'string',
  ),
  'get_include_path' => 
  array (
    0 => 'string',
  ),
  'get_included_files' => 
  array (
    0 => 'list<string>',
  ),
  'get_loaded_extensions' => 
  array (
    0 => 'list<string>',
    'zend_extensions=' => 'bool',
  ),
  'get_meta_tags' => 
  array (
    0 => 'array<array-key, mixed>',
    'filename' => 'string',
    'use_include_path=' => 'bool',
  ),
  'get_object_vars' => 
  array (
    0 => 'array<string, mixed>',
    'object' => 'object',
  ),
  'get_parent_class' => 
  array (
    0 => 'class-string|false',
    'object_or_class=' => 'class-string|object',
  ),
  'get_required_files' => 
  array (
    0 => 'list<string>',
  ),
  'get_resource_id' => 
  array (
    0 => 'int',
    'resource' => 'resource',
  ),
  'get_resource_type' => 
  array (
    0 => 'string',
    'resource' => 'resource',
  ),
  'get_resources' => 
  array (
    0 => 'array<int, resource>',
    'type=' => 'null|string',
  ),
  'getallheaders' => 
  array (
    0 => 'array<array-key, mixed>|false',
  ),
  'getcwd' => 
  array (
    0 => 'false|non-falsy-string',
  ),
  'getdate' => 
  array (
    0 => 'array{0: int, hours: int<0, 23>, mday: int<1, 31>, minutes: int<0, 59>, mon: int<1, 12>, month: \'April\'|\'August\'|\'December\'|\'February\'|\'January\'|\'July\'|\'June\'|\'March\'|\'May\'|\'November\'|\'October\'|\'September\', seconds: int<0, 59>, wday: int<0, 6>, weekday: \'Friday\'|\'Monday\'|\'Saturday\'|\'Sunday\'|\'Thursday\'|\'Tuesday\'|\'Wednesday\', yday: int<0, 365>, year: int}',
    'timestamp=' => 'int|null',
  ),
  'getenv' => 
  array (
    0 => 'false|string',
    'name=' => 'null|string',
    'local_only=' => 'bool',
  ),
  'getenv\'1' => 
  array (
    0 => 'array<string, string>',
  ),
  'gethostbyaddr' => 
  array (
    0 => 'false|string',
    'ip' => 'string',
  ),
  'gethostbyname' => 
  array (
    0 => 'string',
    'hostname' => 'string',
  ),
  'gethostbynamel' => 
  array (
    0 => 'false|list<string>',
    'hostname' => 'string',
  ),
  'gethostname' => 
  array (
    0 => 'false|string',
  ),
  'getimagesize' => 
  array (
    0 => 'array{0: int, 1: int, 2: int, 3: string, bits?: int, channels?: 3|4, mime: string}|false',
    'filename' => 'string',
    '&w_image_info=' => 'array<array-key, mixed>',
  ),
  'getimagesizefromstring' => 
  array (
    0 => 'array{0: int, 1: int, 2: int, 3: string, bits?: int, channels?: 3|4, mime: string}|false',
    'string' => 'string',
    '&w_image_info=' => 'array<array-key, mixed>',
  ),
  'getlastmod' => 
  array (
    0 => 'false|int',
  ),
  'getmxrr' => 
  array (
    0 => 'bool',
    'hostname' => 'string',
    '&w_hosts' => 'array<int, string>',
    '&w_weights=' => 'array<int, int>',
  ),
  'getmygid' => 
  array (
    0 => 'false|int',
  ),
  'getmyinode' => 
  array (
    0 => 'false|int',
  ),
  'getmypid' => 
  array (
    0 => 'false|int',
  ),
  'getmyuid' => 
  array (
    0 => 'false|int',
  ),
  'getopt' => 
  array (
    0 => 'array<string, false|list<false|string>|string>|false',
    'short_options' => 'string',
    'long_options=' => 'array<array-key, mixed>',
    '&w_rest_index=' => 'int',
  ),
  'getprotobyname' => 
  array (
    0 => 'false|int',
    'protocol' => 'string',
  ),
  'getprotobynumber' => 
  array (
    0 => 'string',
    'protocol' => 'int',
  ),
  'getrandmax' => 
  array (
    0 => 'int<1, max>',
  ),
  'getrusage' => 
  array (
    0 => 'array<array-key, mixed>',
    'mode=' => 'int',
  ),
  'getservbyname' => 
  array (
    0 => 'false|int',
    'service' => 'string',
    'protocol' => 'string',
  ),
  'getservbyport' => 
  array (
    0 => 'false|string',
    'port' => 'int',
    'protocol' => 'string',
  ),
  'gettext' => 
  array (
    0 => 'string',
    'message' => 'string',
  ),
  'gettimeofday' => 
  array (
    0 => 'array<string, int>',
    'as_float=' => 'bool',
  ),
  'gettimeofday\'1' => 
  array (
    0 => 'float',
    'as_float=' => 'true',
  ),
  'gettype' => 
  array (
    0 => 'string',
    'value' => 'mixed',
  ),
  'glob' => 
  array (
    0 => 'false|list{0?: string, ...<non-empty-string>}',
    'pattern' => 'string',
    'flags=' => 'int<0, max>',
  ),
  'globiterator::__construct' => 
  array (
    0 => 'void',
    'pattern' => 'string',
    'flags=' => 'int',
  ),
  'globiterator::count' => 
  array (
    0 => 'int',
  ),
  'globiterator::current' => 
  array (
    0 => 'FilesystemIterator|SplFileInfo|string',
  ),
  'globiterator::getatime' => 
  array (
    0 => 'int',
  ),
  'globiterator::getbasename' => 
  array (
    0 => 'string',
    'suffix=' => 'string',
  ),
  'globiterator::getctime' => 
  array (
    0 => 'int',
  ),
  'globiterator::getextension' => 
  array (
    0 => 'string',
  ),
  'globiterator::getfileinfo' => 
  array (
    0 => 'SplFileInfo',
    'class=' => 'class-string|null',
  ),
  'globiterator::getfilename' => 
  array (
    0 => 'string',
  ),
  'globiterator::getflags' => 
  array (
    0 => 'int',
  ),
  'globiterator::getgroup' => 
  array (
    0 => 'int',
  ),
  'globiterator::getinode' => 
  array (
    0 => 'int',
  ),
  'globiterator::getlinktarget' => 
  array (
    0 => 'false|string',
  ),
  'globiterator::getmtime' => 
  array (
    0 => 'int',
  ),
  'globiterator::getowner' => 
  array (
    0 => 'int',
  ),
  'globiterator::getpath' => 
  array (
    0 => 'string',
  ),
  'globiterator::getpathinfo' => 
  array (
    0 => 'SplFileInfo|null',
    'class=' => 'class-string|null',
  ),
  'globiterator::getpathname' => 
  array (
    0 => 'string',
  ),
  'globiterator::getperms' => 
  array (
    0 => 'int',
  ),
  'globiterator::getrealpath' => 
  array (
    0 => 'false|non-falsy-string',
  ),
  'globiterator::getsize' => 
  array (
    0 => 'int',
  ),
  'globiterator::gettype' => 
  array (
    0 => 'false|string',
  ),
  'globiterator::isdir' => 
  array (
    0 => 'bool',
  ),
  'globiterator::isdot' => 
  array (
    0 => 'bool',
  ),
  'globiterator::isexecutable' => 
  array (
    0 => 'bool',
  ),
  'globiterator::isfile' => 
  array (
    0 => 'bool',
  ),
  'globiterator::islink' => 
  array (
    0 => 'bool',
  ),
  'globiterator::isreadable' => 
  array (
    0 => 'bool',
  ),
  'globiterator::iswritable' => 
  array (
    0 => 'bool',
  ),
  'globiterator::key' => 
  array (
    0 => 'string',
  ),
  'globiterator::next' => 
  array (
    0 => 'void',
  ),
  'globiterator::openfile' => 
  array (
    0 => 'SplFileObject',
    'mode=' => 'string',
    'useIncludePath=' => 'bool',
    'context=' => 'null|resource',
  ),
  'globiterator::rewind' => 
  array (
    0 => 'void',
  ),
  'globiterator::seek' => 
  array (
    0 => 'void',
    'offset' => 'int',
  ),
  'globiterator::setfileclass' => 
  array (
    0 => 'void',
    'class=' => 'class-string',
  ),
  'globiterator::setflags' => 
  array (
    0 => 'void',
    'flags' => 'int',
  ),
  'globiterator::setinfoclass' => 
  array (
    0 => 'void',
    'class=' => 'class-string',
  ),
  'globiterator::valid' => 
  array (
    0 => 'bool',
  ),
  'gmagick::__construct' => 
  array (
    0 => 'void',
    'filename=' => 'string',
  ),
  'gmagick::addimage' => 
  array (
    0 => 'Gmagick',
    'gmagick' => 'gmagick',
  ),
  'gmagick::addnoiseimage' => 
  array (
    0 => 'Gmagick',
    'noise' => 'int',
  ),
  'gmagick::annotateimage' => 
  array (
    0 => 'Gmagick',
    'gmagickdraw' => 'gmagickdraw',
    'x' => 'float',
    'y' => 'float',
    'angle' => 'float',
    'text' => 'string',
  ),
  'gmagick::blurimage' => 
  array (
    0 => 'Gmagick',
    'radius' => 'float',
    'sigma' => 'float',
    'channel=' => 'int',
  ),
  'gmagick::borderimage' => 
  array (
    0 => 'Gmagick',
    'color' => 'gmagickpixel',
    'width' => 'int',
    'height' => 'int',
  ),
  'gmagick::charcoalimage' => 
  array (
    0 => 'Gmagick',
    'radius' => 'float',
    'sigma' => 'float',
  ),
  'gmagick::chopimage' => 
  array (
    0 => 'Gmagick',
    'width' => 'int',
    'height' => 'int',
    'x' => 'int',
    'y' => 'int',
  ),
  'gmagick::clear' => 
  array (
    0 => 'Gmagick',
  ),
  'gmagick::commentimage' => 
  array (
    0 => 'Gmagick',
    'comment' => 'string',
  ),
  'gmagick::compositeimage' => 
  array (
    0 => 'Gmagick',
    'source' => 'gmagick',
    'compose' => 'int',
    'x' => 'int',
    'y' => 'int',
  ),
  'gmagick::cropimage' => 
  array (
    0 => 'Gmagick',
    'width' => 'int',
    'height' => 'int',
    'x' => 'int',
    'y' => 'int',
  ),
  'gmagick::cropthumbnailimage' => 
  array (
    0 => 'Gmagick',
    'width' => 'int',
    'height' => 'int',
  ),
  'gmagick::current' => 
  array (
    0 => 'Gmagick',
  ),
  'gmagick::cyclecolormapimage' => 
  array (
    0 => 'Gmagick',
    'displace' => 'int',
  ),
  'gmagick::deconstructimages' => 
  array (
    0 => 'Gmagick',
  ),
  'gmagick::despeckleimage' => 
  array (
    0 => 'Gmagick',
  ),
  'gmagick::destroy' => 
  array (
    0 => 'bool',
  ),
  'gmagick::drawimage' => 
  array (
    0 => 'Gmagick',
    'gmagickdraw' => 'gmagickdraw',
  ),
  'gmagick::edgeimage' => 
  array (
    0 => 'Gmagick',
    'radius' => 'float',
  ),
  'gmagick::embossimage' => 
  array (
    0 => 'Gmagick',
    'radius' => 'float',
    'sigma' => 'float',
  ),
  'gmagick::enhanceimage' => 
  array (
    0 => 'Gmagick',
  ),
  'gmagick::equalizeimage' => 
  array (
    0 => 'Gmagick',
  ),
  'gmagick::flipimage' => 
  array (
    0 => 'Gmagick',
  ),
  'gmagick::flopimage' => 
  array (
    0 => 'Gmagick',
  ),
  'gmagick::frameimage' => 
  array (
    0 => 'Gmagick',
    'color' => 'gmagickpixel',
    'width' => 'int',
    'height' => 'int',
    'inner_bevel' => 'int',
    'outer_bevel' => 'int',
  ),
  'gmagick::gammaimage' => 
  array (
    0 => 'Gmagick',
    'gamma' => 'float',
  ),
  'gmagick::getcopyright' => 
  array (
    0 => 'string',
  ),
  'gmagick::getfilename' => 
  array (
    0 => 'string',
  ),
  'gmagick::getimagebackgroundcolor' => 
  array (
    0 => 'GmagickPixel',
  ),
  'gmagick::getimageblueprimary' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'gmagick::getimagebordercolor' => 
  array (
    0 => 'GmagickPixel',
  ),
  'gmagick::getimagechanneldepth' => 
  array (
    0 => 'int',
    'channel_type' => 'int',
  ),
  'gmagick::getimagecolors' => 
  array (
    0 => 'int',
  ),
  'gmagick::getimagecolorspace' => 
  array (
    0 => 'int',
  ),
  'gmagick::getimagecompose' => 
  array (
    0 => 'int',
  ),
  'gmagick::getimagedelay' => 
  array (
    0 => 'int',
  ),
  'gmagick::getimagedepth' => 
  array (
    0 => 'int',
  ),
  'gmagick::getimagedispose' => 
  array (
    0 => 'int',
  ),
  'gmagick::getimageextrema' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'gmagick::getimagefilename' => 
  array (
    0 => 'string',
  ),
  'gmagick::getimageformat' => 
  array (
    0 => 'string',
  ),
  'gmagick::getimagegamma' => 
  array (
    0 => 'float',
  ),
  'gmagick::getimagegreenprimary' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'gmagick::getimageheight' => 
  array (
    0 => 'int',
  ),
  'gmagick::getimagehistogram' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'gmagick::getimageindex' => 
  array (
    0 => 'int',
  ),
  'gmagick::getimageinterlacescheme' => 
  array (
    0 => 'int',
  ),
  'gmagick::getimageiterations' => 
  array (
    0 => 'int',
  ),
  'gmagick::getimagematte' => 
  array (
    0 => 'int',
  ),
  'gmagick::getimagemattecolor' => 
  array (
    0 => 'GmagickPixel',
  ),
  'gmagick::getimageprofile' => 
  array (
    0 => 'string',
    'name' => 'string',
  ),
  'gmagick::getimageredprimary' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'gmagick::getimagerenderingintent' => 
  array (
    0 => 'int',
  ),
  'gmagick::getimageresolution' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'gmagick::getimagescene' => 
  array (
    0 => 'int',
  ),
  'gmagick::getimagesignature' => 
  array (
    0 => 'string',
  ),
  'gmagick::getimagetype' => 
  array (
    0 => 'int',
  ),
  'gmagick::getimageunits' => 
  array (
    0 => 'int',
  ),
  'gmagick::getimagewhitepoint' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'gmagick::getimagewidth' => 
  array (
    0 => 'int',
  ),
  'gmagick::getpackagename' => 
  array (
    0 => 'string',
  ),
  'gmagick::getquantumdepth' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'gmagick::getreleasedate' => 
  array (
    0 => 'string',
  ),
  'gmagick::getsamplingfactors' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'gmagick::getsize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'gmagick::getversion' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'gmagick::hasnextimage' => 
  array (
    0 => 'bool',
  ),
  'gmagick::haspreviousimage' => 
  array (
    0 => 'bool',
  ),
  'gmagick::implodeimage' => 
  array (
    0 => 'mixed',
    'radius' => 'float',
  ),
  'gmagick::labelimage' => 
  array (
    0 => 'mixed',
    'label' => 'string',
  ),
  'gmagick::levelimage' => 
  array (
    0 => 'mixed',
    'blackpoint' => 'float',
    'gamma' => 'float',
    'whitepoint' => 'float',
    'channel=' => 'int',
  ),
  'gmagick::magnifyimage' => 
  array (
    0 => 'mixed',
  ),
  'gmagick::mapimage' => 
  array (
    0 => 'Gmagick',
    'gmagick' => 'gmagick',
    'dither' => 'bool',
  ),
  'gmagick::medianfilterimage' => 
  array (
    0 => 'void',
    'radius' => 'float',
  ),
  'gmagick::minifyimage' => 
  array (
    0 => 'Gmagick',
  ),
  'gmagick::modulateimage' => 
  array (
    0 => 'Gmagick',
    'brightness' => 'float',
    'saturation' => 'float',
    'hue' => 'float',
  ),
  'gmagick::motionblurimage' => 
  array (
    0 => 'Gmagick',
    'radius' => 'float',
    'sigma' => 'float',
    'angle' => 'float',
  ),
  'gmagick::newimage' => 
  array (
    0 => 'Gmagick',
    'width' => 'int',
    'height' => 'int',
    'background' => 'string',
    'format=' => 'string',
  ),
  'gmagick::nextimage' => 
  array (
    0 => 'bool',
  ),
  'gmagick::normalizeimage' => 
  array (
    0 => 'Gmagick',
    'channel=' => 'int',
  ),
  'gmagick::oilpaintimage' => 
  array (
    0 => 'Gmagick',
    'radius' => 'float',
  ),
  'gmagick::previousimage' => 
  array (
    0 => 'bool',
  ),
  'gmagick::profileimage' => 
  array (
    0 => 'Gmagick',
    'name' => 'string',
    'profile' => 'string',
  ),
  'gmagick::quantizeimage' => 
  array (
    0 => 'Gmagick',
    'numcolors' => 'int',
    'colorspace' => 'int',
    'treedepth' => 'int',
    'dither' => 'bool',
    'measureerror' => 'bool',
  ),
  'gmagick::quantizeimages' => 
  array (
    0 => 'Gmagick',
    'numcolors' => 'int',
    'colorspace' => 'int',
    'treedepth' => 'int',
    'dither' => 'bool',
    'measureerror' => 'bool',
  ),
  'gmagick::queryfontmetrics' => 
  array (
    0 => 'array<array-key, mixed>',
    'draw' => 'gmagickdraw',
    'text' => 'string',
  ),
  'gmagick::queryfonts' => 
  array (
    0 => 'array<array-key, mixed>',
    'pattern=' => 'string',
  ),
  'gmagick::queryformats' => 
  array (
    0 => 'array<array-key, mixed>',
    'pattern=' => 'string',
  ),
  'gmagick::radialblurimage' => 
  array (
    0 => 'Gmagick',
    'angle' => 'float',
    'channel=' => 'int',
  ),
  'gmagick::raiseimage' => 
  array (
    0 => 'Gmagick',
    'width' => 'int',
    'height' => 'int',
    'x' => 'int',
    'y' => 'int',
    'raise' => 'bool',
  ),
  'gmagick::read' => 
  array (
    0 => 'Gmagick',
    'filename' => 'string',
  ),
  'gmagick::readimage' => 
  array (
    0 => 'Gmagick',
    'filename' => 'string',
  ),
  'gmagick::readimageblob' => 
  array (
    0 => 'Gmagick',
    'imagecontents' => 'string',
    'filename=' => 'string',
  ),
  'gmagick::readimagefile' => 
  array (
    0 => 'Gmagick',
    'fp' => 'resource',
    'filename=' => 'string',
  ),
  'gmagick::reducenoiseimage' => 
  array (
    0 => 'Gmagick',
    'radius' => 'float',
  ),
  'gmagick::removeimage' => 
  array (
    0 => 'Gmagick',
  ),
  'gmagick::removeimageprofile' => 
  array (
    0 => 'string',
    'name' => 'string',
  ),
  'gmagick::resampleimage' => 
  array (
    0 => 'Gmagick',
    'xresolution' => 'float',
    'yresolution' => 'float',
    'filter' => 'int',
    'blur' => 'float',
  ),
  'gmagick::resizeimage' => 
  array (
    0 => 'Gmagick',
    'width' => 'int',
    'height' => 'int',
    'filter' => 'int',
    'blur' => 'float',
    'fit=' => 'bool',
  ),
  'gmagick::rollimage' => 
  array (
    0 => 'Gmagick',
    'x' => 'int',
    'y' => 'int',
  ),
  'gmagick::rotateimage' => 
  array (
    0 => 'Gmagick',
    'color' => 'mixed',
    'degrees' => 'float',
  ),
  'gmagick::scaleimage' => 
  array (
    0 => 'Gmagick',
    'width' => 'int',
    'height' => 'int',
    'fit=' => 'bool',
  ),
  'gmagick::separateimagechannel' => 
  array (
    0 => 'Gmagick',
    'channel' => 'int',
  ),
  'gmagick::setcompressionquality' => 
  array (
    0 => 'Gmagick',
    'quality' => 'int',
  ),
  'gmagick::setfilename' => 
  array (
    0 => 'Gmagick',
    'filename' => 'string',
  ),
  'gmagick::setimagebackgroundcolor' => 
  array (
    0 => 'Gmagick',
    'color' => 'gmagickpixel',
  ),
  'gmagick::setimageblueprimary' => 
  array (
    0 => 'Gmagick',
    'x' => 'float',
    'y' => 'float',
  ),
  'gmagick::setimagebordercolor' => 
  array (
    0 => 'Gmagick',
    'color' => 'gmagickpixel',
  ),
  'gmagick::setimagechanneldepth' => 
  array (
    0 => 'Gmagick',
    'channel' => 'int',
    'depth' => 'int',
  ),
  'gmagick::setimagecolorspace' => 
  array (
    0 => 'Gmagick',
    'colorspace' => 'int',
  ),
  'gmagick::setimagecompose' => 
  array (
    0 => 'Gmagick',
    'composite' => 'int',
  ),
  'gmagick::setimagedelay' => 
  array (
    0 => 'Gmagick',
    'delay' => 'int',
  ),
  'gmagick::setimagedepth' => 
  array (
    0 => 'Gmagick',
    'depth' => 'int',
  ),
  'gmagick::setimagedispose' => 
  array (
    0 => 'Gmagick',
    'disposetype' => 'int',
  ),
  'gmagick::setimagefilename' => 
  array (
    0 => 'Gmagick',
    'filename' => 'string',
  ),
  'gmagick::setimageformat' => 
  array (
    0 => 'Gmagick',
    'imageformat' => 'string',
  ),
  'gmagick::setimagegamma' => 
  array (
    0 => 'Gmagick',
    'gamma' => 'float',
  ),
  'gmagick::setimagegreenprimary' => 
  array (
    0 => 'Gmagick',
    'x' => 'float',
    'y' => 'float',
  ),
  'gmagick::setimageindex' => 
  array (
    0 => 'Gmagick',
    'index' => 'int',
  ),
  'gmagick::setimageinterlacescheme' => 
  array (
    0 => 'Gmagick',
    'interlace' => 'int',
  ),
  'gmagick::setimageiterations' => 
  array (
    0 => 'Gmagick',
    'iterations' => 'int',
  ),
  'gmagick::setimageprofile' => 
  array (
    0 => 'Gmagick',
    'name' => 'string',
    'profile' => 'string',
  ),
  'gmagick::setimageredprimary' => 
  array (
    0 => 'Gmagick',
    'x' => 'float',
    'y' => 'float',
  ),
  'gmagick::setimagerenderingintent' => 
  array (
    0 => 'Gmagick',
    'rendering_intent' => 'int',
  ),
  'gmagick::setimageresolution' => 
  array (
    0 => 'Gmagick',
    'xresolution' => 'float',
    'yresolution' => 'float',
  ),
  'gmagick::setimagescene' => 
  array (
    0 => 'Gmagick',
    'scene' => 'int',
  ),
  'gmagick::setimagetype' => 
  array (
    0 => 'Gmagick',
    'imgtype' => 'int',
  ),
  'gmagick::setimageunits' => 
  array (
    0 => 'Gmagick',
    'resolution' => 'int',
  ),
  'gmagick::setimagewhitepoint' => 
  array (
    0 => 'Gmagick',
    'x' => 'float',
    'y' => 'float',
  ),
  'gmagick::setsamplingfactors' => 
  array (
    0 => 'Gmagick',
    'factors' => 'array<array-key, mixed>',
  ),
  'gmagick::setsize' => 
  array (
    0 => 'Gmagick',
    'columns' => 'int',
    'rows' => 'int',
  ),
  'gmagick::shearimage' => 
  array (
    0 => 'Gmagick',
    'color' => 'mixed',
    'xshear' => 'float',
    'yshear' => 'float',
  ),
  'gmagick::solarizeimage' => 
  array (
    0 => 'Gmagick',
    'threshold' => 'int',
  ),
  'gmagick::spreadimage' => 
  array (
    0 => 'Gmagick',
    'radius' => 'float',
  ),
  'gmagick::stripimage' => 
  array (
    0 => 'Gmagick',
  ),
  'gmagick::swirlimage' => 
  array (
    0 => 'Gmagick',
    'degrees' => 'float',
  ),
  'gmagick::thumbnailimage' => 
  array (
    0 => 'Gmagick',
    'width' => 'int',
    'height' => 'int',
    'fit=' => 'bool',
  ),
  'gmagick::trimimage' => 
  array (
    0 => 'Gmagick',
    'fuzz' => 'float',
  ),
  'gmagick::write' => 
  array (
    0 => 'Gmagick',
    'filename' => 'string',
  ),
  'gmagick::writeimage' => 
  array (
    0 => 'Gmagick',
    'filename' => 'string',
    'all_frames=' => 'bool',
  ),
  'gmagickdraw::annotate' => 
  array (
    0 => 'GmagickDraw',
    'x' => 'float',
    'y' => 'float',
    'text' => 'string',
  ),
  'gmagickdraw::arc' => 
  array (
    0 => 'GmagickDraw',
    'sx' => 'float',
    'sy' => 'float',
    'ex' => 'float',
    'ey' => 'float',
    'sd' => 'float',
    'ed' => 'float',
  ),
  'gmagickdraw::bezier' => 
  array (
    0 => 'GmagickDraw',
    'coordinate_array' => 'array<array-key, mixed>',
  ),
  'gmagickdraw::ellipse' => 
  array (
    0 => 'GmagickDraw',
    'ox' => 'float',
    'oy' => 'float',
    'rx' => 'float',
    'ry' => 'float',
    'start' => 'float',
    'end' => 'float',
  ),
  'gmagickdraw::getfillcolor' => 
  array (
    0 => 'GmagickPixel',
  ),
  'gmagickdraw::getfillopacity' => 
  array (
    0 => 'float',
  ),
  'gmagickdraw::getfont' => 
  array (
    0 => 'false|string',
  ),
  'gmagickdraw::getfontsize' => 
  array (
    0 => 'float',
  ),
  'gmagickdraw::getfontstyle' => 
  array (
    0 => 'int',
  ),
  'gmagickdraw::getfontweight' => 
  array (
    0 => 'int',
  ),
  'gmagickdraw::getstrokecolor' => 
  array (
    0 => 'GmagickPixel',
  ),
  'gmagickdraw::getstrokeopacity' => 
  array (
    0 => 'float',
  ),
  'gmagickdraw::getstrokewidth' => 
  array (
    0 => 'float',
  ),
  'gmagickdraw::gettextdecoration' => 
  array (
    0 => 'int',
  ),
  'gmagickdraw::gettextencoding' => 
  array (
    0 => 'false|string',
  ),
  'gmagickdraw::line' => 
  array (
    0 => 'GmagickDraw',
    'sx' => 'float',
    'sy' => 'float',
    'ex' => 'float',
    'ey' => 'float',
  ),
  'gmagickdraw::point' => 
  array (
    0 => 'GmagickDraw',
    'x' => 'float',
    'y' => 'float',
  ),
  'gmagickdraw::polygon' => 
  array (
    0 => 'GmagickDraw',
    'coordinates' => 'array<array-key, mixed>',
  ),
  'gmagickdraw::polyline' => 
  array (
    0 => 'GmagickDraw',
    'coordinate_array' => 'array<array-key, mixed>',
  ),
  'gmagickdraw::rectangle' => 
  array (
    0 => 'GmagickDraw',
    'x1' => 'float',
    'y1' => 'float',
    'x2' => 'float',
    'y2' => 'float',
  ),
  'gmagickdraw::rotate' => 
  array (
    0 => 'GmagickDraw',
    'degrees' => 'float',
  ),
  'gmagickdraw::roundrectangle' => 
  array (
    0 => 'GmagickDraw',
    'x1' => 'float',
    'y1' => 'float',
    'x2' => 'float',
    'y2' => 'float',
    'rx' => 'float',
    'ry' => 'float',
  ),
  'gmagickdraw::scale' => 
  array (
    0 => 'GmagickDraw',
    'x' => 'float',
    'y' => 'float',
  ),
  'gmagickdraw::setfillcolor' => 
  array (
    0 => 'GmagickDraw',
    'color' => 'string',
  ),
  'gmagickdraw::setfillopacity' => 
  array (
    0 => 'GmagickDraw',
    'fill_opacity' => 'float',
  ),
  'gmagickdraw::setfont' => 
  array (
    0 => 'GmagickDraw',
    'font' => 'string',
  ),
  'gmagickdraw::setfontsize' => 
  array (
    0 => 'GmagickDraw',
    'pointsize' => 'float',
  ),
  'gmagickdraw::setfontstyle' => 
  array (
    0 => 'GmagickDraw',
    'style' => 'int',
  ),
  'gmagickdraw::setfontweight' => 
  array (
    0 => 'GmagickDraw',
    'weight' => 'int',
  ),
  'gmagickdraw::setstrokecolor' => 
  array (
    0 => 'GmagickDraw',
    'color' => 'gmagickpixel',
  ),
  'gmagickdraw::setstrokeopacity' => 
  array (
    0 => 'GmagickDraw',
    'stroke_opacity' => 'float',
  ),
  'gmagickdraw::setstrokewidth' => 
  array (
    0 => 'GmagickDraw',
    'width' => 'float',
  ),
  'gmagickdraw::settextdecoration' => 
  array (
    0 => 'GmagickDraw',
    'decoration' => 'int',
  ),
  'gmagickdraw::settextencoding' => 
  array (
    0 => 'GmagickDraw',
    'encoding' => 'string',
  ),
  'gmagickpixel::__construct' => 
  array (
    0 => 'void',
    'color=' => 'string',
  ),
  'gmagickpixel::getcolor' => 
  array (
    0 => 'mixed',
    'as_array=' => 'bool',
    'normalize_array=' => 'bool',
  ),
  'gmagickpixel::getcolorcount' => 
  array (
    0 => 'int',
  ),
  'gmagickpixel::getcolorvalue' => 
  array (
    0 => 'float',
    'color' => 'int',
  ),
  'gmagickpixel::setcolor' => 
  array (
    0 => 'GmagickPixel',
    'color' => 'string',
  ),
  'gmagickpixel::setcolorvalue' => 
  array (
    0 => 'GmagickPixel',
    'color' => 'int',
    'value' => 'float',
  ),
  'gmdate' => 
  array (
    0 => 'string',
    'format' => 'string',
    'timestamp=' => 'int|null',
  ),
  'gmmktime' => 
  array (
    0 => 'false|int',
    'hour' => 'int',
    'minute=' => 'int|null',
    'second=' => 'int|null',
    'month=' => 'int|null',
    'day=' => 'int|null',
    'year=' => 'int|null',
  ),
  'gmp_abs' => 
  array (
    0 => 'GMP',
    'num' => 'GMP|int|string',
  ),
  'gmp_add' => 
  array (
    0 => 'GMP',
    'num1' => 'GMP|int|string',
    'num2' => 'GMP|int|string',
  ),
  'gmp_and' => 
  array (
    0 => 'GMP',
    'num1' => 'GMP|int|string',
    'num2' => 'GMP|int|string',
  ),
  'gmp_binomial' => 
  array (
    0 => 'GMP',
    'n' => 'GMP|int|string',
    'k' => 'int',
  ),
  'gmp_clrbit' => 
  array (
    0 => 'void',
    'num' => 'GMP',
    'index' => 'int',
  ),
  'gmp_cmp' => 
  array (
    0 => 'int',
    'num1' => 'GMP|int|string',
    'num2' => 'GMP|int|string',
  ),
  'gmp_com' => 
  array (
    0 => 'GMP',
    'num' => 'GMP|int|string',
  ),
  'gmp_div' => 
  array (
    0 => 'GMP',
    'num1' => 'GMP|int|string',
    'num2' => 'GMP|int|string',
    'rounding_mode=' => 'int',
  ),
  'gmp_div_q' => 
  array (
    0 => 'GMP',
    'num1' => 'GMP|int|string',
    'num2' => 'GMP|int|string',
    'rounding_mode=' => 'int',
  ),
  'gmp_div_qr' => 
  array (
    0 => 'array{0: GMP, 1: GMP}',
    'num1' => 'GMP|int|string',
    'num2' => 'GMP|int|string',
    'rounding_mode=' => 'int',
  ),
  'gmp_div_r' => 
  array (
    0 => 'GMP',
    'num1' => 'GMP|int|string',
    'num2' => 'GMP|int|string',
    'rounding_mode=' => 'int',
  ),
  'gmp_divexact' => 
  array (
    0 => 'GMP',
    'num1' => 'GMP|int|string',
    'num2' => 'GMP|int|string',
  ),
  'gmp_export' => 
  array (
    0 => 'string',
    'num' => 'GMP|int|string',
    'word_size=' => 'int',
    'flags=' => 'int',
  ),
  'gmp_fact' => 
  array (
    0 => 'GMP',
    'num' => 'int',
  ),
  'gmp_gcd' => 
  array (
    0 => 'GMP',
    'num1' => 'GMP|int|string',
    'num2' => 'GMP|int|string',
  ),
  'gmp_gcdext' => 
  array (
    0 => 'array<string, GMP>',
    'num1' => 'GMP|int|string',
    'num2' => 'GMP|int|string',
  ),
  'gmp_hamdist' => 
  array (
    0 => 'int',
    'num1' => 'GMP|int|string',
    'num2' => 'GMP|int|string',
  ),
  'gmp_import' => 
  array (
    0 => 'GMP',
    'data' => 'string',
    'word_size=' => 'int',
    'flags=' => 'int',
  ),
  'gmp_init' => 
  array (
    0 => 'GMP',
    'num' => 'int|string',
    'base=' => 'int',
  ),
  'gmp_intval' => 
  array (
    0 => 'int',
    'num' => 'GMP|int|string',
  ),
  'gmp_invert' => 
  array (
    0 => 'GMP|false',
    'num1' => 'GMP|int|string',
    'num2' => 'GMP|int|string',
  ),
  'gmp_jacobi' => 
  array (
    0 => 'int',
    'num1' => 'GMP|int|string',
    'num2' => 'GMP|int|string',
  ),
  'gmp_kronecker' => 
  array (
    0 => 'int',
    'num1' => 'GMP|int|string',
    'num2' => 'GMP|int|string',
  ),
  'gmp_lcm' => 
  array (
    0 => 'GMP',
    'num1' => 'GMP|int|string',
    'num2' => 'GMP|int|string',
  ),
  'gmp_legendre' => 
  array (
    0 => 'int',
    'num1' => 'GMP|int|string',
    'num2' => 'GMP|int|string',
  ),
  'gmp_mod' => 
  array (
    0 => 'GMP',
    'num1' => 'GMP|int|string',
    'num2' => 'GMP|int|string',
  ),
  'gmp_mul' => 
  array (
    0 => 'GMP',
    'num1' => 'GMP|int|string',
    'num2' => 'GMP|int|string',
  ),
  'gmp_neg' => 
  array (
    0 => 'GMP',
    'num' => 'GMP|int|string',
  ),
  'gmp_nextprime' => 
  array (
    0 => 'GMP',
    'num' => 'GMP|int|string',
  ),
  'gmp_or' => 
  array (
    0 => 'GMP',
    'num1' => 'GMP|int|string',
    'num2' => 'GMP|int|string',
  ),
  'gmp_perfect_power' => 
  array (
    0 => 'bool',
    'num' => 'GMP|int|string',
  ),
  'gmp_perfect_square' => 
  array (
    0 => 'bool',
    'num' => 'GMP|int|string',
  ),
  'gmp_popcount' => 
  array (
    0 => 'int',
    'num' => 'GMP|int|string',
  ),
  'gmp_pow' => 
  array (
    0 => 'GMP',
    'num' => 'GMP|int|string',
    'exponent' => 'int',
  ),
  'gmp_powm' => 
  array (
    0 => 'GMP',
    'num' => 'GMP|int|string',
    'exponent' => 'GMP|int|string',
    'modulus' => 'GMP|int|string',
  ),
  'gmp_prob_prime' => 
  array (
    0 => 'int',
    'num' => 'GMP|int|string',
    'repetitions=' => 'int',
  ),
  'gmp_random_bits' => 
  array (
    0 => 'GMP',
    'bits' => 'int',
  ),
  'gmp_random_range' => 
  array (
    0 => 'GMP',
    'min' => 'GMP|int|string',
    'max' => 'GMP|int|string',
  ),
  'gmp_random_seed' => 
  array (
    0 => 'void',
    'seed' => 'GMP|int|string',
  ),
  'gmp_root' => 
  array (
    0 => 'GMP',
    'num' => 'GMP|int|string',
    'nth' => 'int',
  ),
  'gmp_rootrem' => 
  array (
    0 => 'array{0: GMP, 1: GMP}',
    'num' => 'GMP|int|string',
    'nth' => 'int',
  ),
  'gmp_scan0' => 
  array (
    0 => 'int',
    'num1' => 'GMP|int|string',
    'start' => 'int',
  ),
  'gmp_scan1' => 
  array (
    0 => 'int',
    'num1' => 'GMP|int|string',
    'start' => 'int',
  ),
  'gmp_setbit' => 
  array (
    0 => 'void',
    'num' => 'GMP',
    'index' => 'int',
    'value=' => 'bool',
  ),
  'gmp_sign' => 
  array (
    0 => 'int',
    'num' => 'GMP|int|string',
  ),
  'gmp_sqrt' => 
  array (
    0 => 'GMP',
    'num' => 'GMP|int|string',
  ),
  'gmp_sqrtrem' => 
  array (
    0 => 'array{0: GMP, 1: GMP}',
    'num' => 'GMP|int|string',
  ),
  'gmp_strval' => 
  array (
    0 => 'numeric-string',
    'num' => 'GMP|int|string',
    'base=' => 'int',
  ),
  'gmp_sub' => 
  array (
    0 => 'GMP',
    'num1' => 'GMP|int|string',
    'num2' => 'GMP|int|string',
  ),
  'gmp_testbit' => 
  array (
    0 => 'bool',
    'num' => 'GMP|int|string',
    'index' => 'int',
  ),
  'gmp_xor' => 
  array (
    0 => 'GMP',
    'num1' => 'GMP|int|string',
    'num2' => 'GMP|int|string',
  ),
  'gmstrftime' => 
  array (
    0 => 'false|string',
    'format' => 'string',
    'timestamp=' => 'int|null',
  ),
  'gnupg::adddecryptkey' => 
  array (
    0 => 'bool',
    'fingerprint' => 'string',
    'passphrase' => 'string',
  ),
  'gnupg::addencryptkey' => 
  array (
    0 => 'bool',
    'fingerprint' => 'string',
  ),
  'gnupg::addsignkey' => 
  array (
    0 => 'bool',
    'fingerprint' => 'string',
    'passphrase=' => 'string',
  ),
  'gnupg::cleardecryptkeys' => 
  array (
    0 => 'bool',
  ),
  'gnupg::clearencryptkeys' => 
  array (
    0 => 'bool',
  ),
  'gnupg::clearsignkeys' => 
  array (
    0 => 'bool',
  ),
  'gnupg::decrypt' => 
  array (
    0 => 'false|string',
    'text' => 'string',
  ),
  'gnupg::decryptverify' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'text' => 'string',
    '&plaintext' => 'string',
  ),
  'gnupg::encrypt' => 
  array (
    0 => 'false|string',
    'plaintext' => 'string',
  ),
  'gnupg::encryptsign' => 
  array (
    0 => 'false|string',
    'plaintext' => 'string',
  ),
  'gnupg::export' => 
  array (
    0 => 'false|string',
    'fingerprint' => 'string',
  ),
  'gnupg::geterror' => 
  array (
    0 => 'false|string',
  ),
  'gnupg::getprotocol' => 
  array (
    0 => 'int',
  ),
  'gnupg::import' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'keydata' => 'string',
  ),
  'gnupg::keyinfo' => 
  array (
    0 => 'array<array-key, mixed>',
    'pattern' => 'string',
  ),
  'gnupg::setarmor' => 
  array (
    0 => 'bool',
    'armor' => 'int',
  ),
  'gnupg::seterrormode' => 
  array (
    0 => 'void',
    'errormode' => 'int',
  ),
  'gnupg::setsignmode' => 
  array (
    0 => 'bool',
    'signmode' => 'int',
  ),
  'gnupg::sign' => 
  array (
    0 => 'false|string',
    'plaintext' => 'string',
  ),
  'gnupg::verify' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'signed_text' => 'string',
    'signature' => 'string',
    '&plaintext=' => 'string',
  ),
  'gnupg_adddecryptkey' => 
  array (
    0 => 'bool',
    'identifier' => 'resource',
    'fingerprint' => 'string',
    'passphrase' => 'string',
  ),
  'gnupg_addencryptkey' => 
  array (
    0 => 'bool',
    'identifier' => 'resource',
    'fingerprint' => 'string',
  ),
  'gnupg_addsignkey' => 
  array (
    0 => 'bool',
    'identifier' => 'resource',
    'fingerprint' => 'string',
    'passphrase=' => 'string',
  ),
  'gnupg_cleardecryptkeys' => 
  array (
    0 => 'bool',
    'identifier' => 'resource',
  ),
  'gnupg_clearencryptkeys' => 
  array (
    0 => 'bool',
    'identifier' => 'resource',
  ),
  'gnupg_clearsignkeys' => 
  array (
    0 => 'bool',
    'identifier' => 'resource',
  ),
  'gnupg_decrypt' => 
  array (
    0 => 'string',
    'identifier' => 'resource',
    'text' => 'string',
  ),
  'gnupg_decryptverify' => 
  array (
    0 => 'array<array-key, mixed>',
    'identifier' => 'resource',
    'text' => 'string',
    'plaintext' => 'string',
  ),
  'gnupg_encrypt' => 
  array (
    0 => 'string',
    'identifier' => 'resource',
    'plaintext' => 'string',
  ),
  'gnupg_encryptsign' => 
  array (
    0 => 'string',
    'identifier' => 'resource',
    'plaintext' => 'string',
  ),
  'gnupg_export' => 
  array (
    0 => 'string',
    'identifier' => 'resource',
    'fingerprint' => 'string',
  ),
  'gnupg_geterror' => 
  array (
    0 => 'string',
    'identifier' => 'resource',
  ),
  'gnupg_getprotocol' => 
  array (
    0 => 'int',
    'identifier' => 'resource',
  ),
  'gnupg_import' => 
  array (
    0 => 'array<array-key, mixed>',
    'identifier' => 'resource',
    'keydata' => 'string',
  ),
  'gnupg_init' => 
  array (
    0 => 'resource',
  ),
  'gnupg_keyinfo' => 
  array (
    0 => 'array<array-key, mixed>',
    'identifier' => 'resource',
    'pattern' => 'string',
  ),
  'gnupg_setarmor' => 
  array (
    0 => 'bool',
    'identifier' => 'resource',
    'armor' => 'int',
  ),
  'gnupg_seterrormode' => 
  array (
    0 => 'void',
    'identifier' => 'resource',
    'errormode' => 'int',
  ),
  'gnupg_setsignmode' => 
  array (
    0 => 'bool',
    'identifier' => 'resource',
    'signmode' => 'int',
  ),
  'gnupg_sign' => 
  array (
    0 => 'string',
    'identifier' => 'resource',
    'plaintext' => 'string',
  ),
  'gnupg_verify' => 
  array (
    0 => 'array<array-key, mixed>',
    'identifier' => 'resource',
    'signed_text' => 'string',
    'signature' => 'string',
    'plaintext=' => 'string',
  ),
  'gopher_parsedir' => 
  array (
    0 => 'array<array-key, mixed>',
    'dirent' => 'string',
  ),
  'grapheme_extract' => 
  array (
    0 => 'false|string',
    'haystack' => 'string',
    'size' => 'int',
    'type=' => 'int',
    'offset=' => 'int',
    '&w_next=' => 'int',
  ),
  'grapheme_stripos' => 
  array (
    0 => 'false|int',
    'haystack' => 'string',
    'needle' => 'string',
    'offset=' => 'int',
  ),
  'grapheme_stristr' => 
  array (
    0 => 'false|string',
    'haystack' => 'string',
    'needle' => 'string',
    'beforeNeedle=' => 'bool',
  ),
  'grapheme_strlen' => 
  array (
    0 => 'false|int<0, max>|null',
    'string' => 'string',
  ),
  'grapheme_strpos' => 
  array (
    0 => 'false|int',
    'haystack' => 'string',
    'needle' => 'string',
    'offset=' => 'int',
  ),
  'grapheme_strripos' => 
  array (
    0 => 'false|int',
    'haystack' => 'string',
    'needle' => 'string',
    'offset=' => 'int',
  ),
  'grapheme_strrpos' => 
  array (
    0 => 'false|int',
    'haystack' => 'string',
    'needle' => 'string',
    'offset=' => 'int',
  ),
  'grapheme_strstr' => 
  array (
    0 => 'false|string',
    'haystack' => 'string',
    'needle' => 'string',
    'beforeNeedle=' => 'bool',
  ),
  'grapheme_substr' => 
  array (
    0 => 'false|string',
    'string' => 'string',
    'offset' => 'int',
    'length=' => 'int|null',
  ),
  'gregoriantojd' => 
  array (
    0 => 'int',
    'month' => 'int',
    'day' => 'int',
    'year' => 'int',
  ),
  'gridobj::set' => 
  array (
    0 => 'int',
    'property_name' => 'string',
    'new_value' => 'mixed',
  ),
  'grpc\\call::__construct' => 
  array (
    0 => 'void',
    'channel' => 'Grpc\\Channel',
    'method' => 'string',
    'deadline' => 'Grpc\\Timeval',
    'host_override=' => 'mixed',
  ),
  'grpc\\call::getpeer' => 
  array (
    0 => 'string',
  ),
  'grpc\\call::setcredentials' => 
  array (
    0 => 'int',
    'credentials' => 'Grpc\\CallCredentials',
  ),
  'grpc\\call::startbatch' => 
  array (
    0 => 'object',
    'ops' => 'array<array-key, mixed>',
  ),
  'grpc\\callcredentials::createcomposite' => 
  array (
    0 => 'Grpc\\CallCredentials',
    'creds1' => 'Grpc\\CallCredentials',
    'creds2' => 'Grpc\\CallCredentials',
  ),
  'grpc\\callcredentials::createfromplugin' => 
  array (
    0 => 'Grpc\\CallCredentials',
    'callback' => 'Closure',
  ),
  'grpc\\channel::__construct' => 
  array (
    0 => 'void',
    'target' => 'string',
    'args' => 'array<array-key, mixed>',
  ),
  'grpc\\channel::getconnectivitystate' => 
  array (
    0 => 'int',
    'try_to_connect=' => 'bool',
  ),
  'grpc\\channel::gettarget' => 
  array (
    0 => 'string',
  ),
  'grpc\\channel::watchconnectivitystate' => 
  array (
    0 => 'bool',
    'last_state' => 'int',
    'deadline' => 'Grpc\\Timeval',
  ),
  'grpc\\channelcredentials::createcomposite' => 
  array (
    0 => 'Grpc\\ChannelCredentials',
    'channel_creds' => 'Grpc\\ChannelCredentials',
    'call_creds' => 'Grpc\\CallCredentials',
  ),
  'grpc\\channelcredentials::createdefault' => 
  array (
    0 => 'Grpc\\ChannelCredentials',
  ),
  'grpc\\channelcredentials::createinsecure' => 
  array (
    0 => 'null',
  ),
  'grpc\\channelcredentials::createssl' => 
  array (
    0 => 'Grpc\\ChannelCredentials',
    'pem_root_certs=' => 'string',
    'pem_private_key=' => 'string',
    'pem_cert_chain=' => 'string',
  ),
  'grpc\\channelcredentials::setdefaultrootspem' => 
  array (
    0 => 'mixed',
    'pem_roots' => 'string',
  ),
  'grpc\\server::__construct' => 
  array (
    0 => 'void',
    'args=' => 'array<array-key, mixed>',
  ),
  'grpc\\server::addhttp2port' => 
  array (
    0 => 'bool',
    'addr' => 'string',
  ),
  'grpc\\server::addsecurehttp2port' => 
  array (
    0 => 'bool',
    'addr' => 'string',
    'server_creds' => 'Grpc\\ServerCredentials',
  ),
  'grpc\\servercredentials::createssl' => 
  array (
    0 => 'object',
    'pem_root_certs' => 'string',
    'pem_private_key' => 'string',
    'pem_cert_chain' => 'string',
  ),
  'grpc\\timeval::__construct' => 
  array (
    0 => 'void',
    'microseconds' => 'int',
  ),
  'grpc\\timeval::add' => 
  array (
    0 => 'Grpc\\Timeval',
    'timeval' => 'Grpc\\Timeval',
  ),
  'grpc\\timeval::compare' => 
  array (
    0 => 'int',
    'a_timeval' => 'Grpc\\Timeval',
    'b_timeval' => 'Grpc\\Timeval',
  ),
  'grpc\\timeval::inffuture' => 
  array (
    0 => 'Grpc\\Timeval',
  ),
  'grpc\\timeval::infpast' => 
  array (
    0 => 'Grpc\\Timeval',
  ),
  'grpc\\timeval::now' => 
  array (
    0 => 'Grpc\\Timeval',
  ),
  'grpc\\timeval::similar' => 
  array (
    0 => 'bool',
    'a_timeval' => 'Grpc\\Timeval',
    'b_timeval' => 'Grpc\\Timeval',
    'threshold_timeval' => 'Grpc\\Timeval',
  ),
  'grpc\\timeval::subtract' => 
  array (
    0 => 'Grpc\\Timeval',
    'timeval' => 'Grpc\\Timeval',
  ),
  'grpc\\timeval::zero' => 
  array (
    0 => 'Grpc\\Timeval',
  ),
  'gupnp_context_get_host_ip' => 
  array (
    0 => 'string',
    'context' => 'resource',
  ),
  'gupnp_context_get_port' => 
  array (
    0 => 'int',
    'context' => 'resource',
  ),
  'gupnp_context_get_subscription_timeout' => 
  array (
    0 => 'int',
    'context' => 'resource',
  ),
  'gupnp_context_host_path' => 
  array (
    0 => 'bool',
    'context' => 'resource',
    'local_path' => 'string',
    'server_path' => 'string',
  ),
  'gupnp_context_new' => 
  array (
    0 => 'resource',
    'host_ip=' => 'string',
    'port=' => 'int',
  ),
  'gupnp_context_set_subscription_timeout' => 
  array (
    0 => 'void',
    'context' => 'resource',
    'timeout' => 'int',
  ),
  'gupnp_context_timeout_add' => 
  array (
    0 => 'bool',
    'context' => 'resource',
    'timeout' => 'int',
    'callback' => 'mixed',
    'arg=' => 'mixed',
  ),
  'gupnp_context_unhost_path' => 
  array (
    0 => 'bool',
    'context' => 'resource',
    'server_path' => 'string',
  ),
  'gupnp_control_point_browse_start' => 
  array (
    0 => 'bool',
    'cpoint' => 'resource',
  ),
  'gupnp_control_point_browse_stop' => 
  array (
    0 => 'bool',
    'cpoint' => 'resource',
  ),
  'gupnp_control_point_callback_set' => 
  array (
    0 => 'bool',
    'cpoint' => 'resource',
    'signal' => 'int',
    'callback' => 'mixed',
    'arg=' => 'mixed',
  ),
  'gupnp_control_point_new' => 
  array (
    0 => 'resource',
    'context' => 'resource',
    'target' => 'string',
  ),
  'gupnp_device_action_callback_set' => 
  array (
    0 => 'bool',
    'root_device' => 'resource',
    'signal' => 'int',
    'action_name' => 'string',
    'callback' => 'mixed',
    'arg=' => 'mixed',
  ),
  'gupnp_device_info_get' => 
  array (
    0 => 'array<array-key, mixed>',
    'root_device' => 'resource',
  ),
  'gupnp_device_info_get_service' => 
  array (
    0 => 'resource',
    'root_device' => 'resource',
    'type' => 'string',
  ),
  'gupnp_root_device_get_available' => 
  array (
    0 => 'bool',
    'root_device' => 'resource',
  ),
  'gupnp_root_device_get_relative_location' => 
  array (
    0 => 'string',
    'root_device' => 'resource',
  ),
  'gupnp_root_device_new' => 
  array (
    0 => 'resource',
    'context' => 'resource',
    'location' => 'string',
    'description_dir' => 'string',
  ),
  'gupnp_root_device_set_available' => 
  array (
    0 => 'bool',
    'root_device' => 'resource',
    'available' => 'bool',
  ),
  'gupnp_root_device_start' => 
  array (
    0 => 'bool',
    'root_device' => 'resource',
  ),
  'gupnp_root_device_stop' => 
  array (
    0 => 'bool',
    'root_device' => 'resource',
  ),
  'gupnp_service_action_get' => 
  array (
    0 => 'mixed',
    'action' => 'resource',
    'name' => 'string',
    'type' => 'int',
  ),
  'gupnp_service_action_return' => 
  array (
    0 => 'bool',
    'action' => 'resource',
  ),
  'gupnp_service_action_return_error' => 
  array (
    0 => 'bool',
    'action' => 'resource',
    'error_code' => 'int',
    'error_description=' => 'string',
  ),
  'gupnp_service_action_set' => 
  array (
    0 => 'bool',
    'action' => 'resource',
    'name' => 'string',
    'type' => 'int',
    'value' => 'mixed',
  ),
  'gupnp_service_freeze_notify' => 
  array (
    0 => 'bool',
    'service' => 'resource',
  ),
  'gupnp_service_info_get' => 
  array (
    0 => 'array<array-key, mixed>',
    'proxy' => 'resource',
  ),
  'gupnp_service_info_get_introspection' => 
  array (
    0 => 'mixed',
    'proxy' => 'resource',
    'callback=' => 'mixed',
    'arg=' => 'mixed',
  ),
  'gupnp_service_introspection_get_state_variable' => 
  array (
    0 => 'array<array-key, mixed>',
    'introspection' => 'resource',
    'variable_name' => 'string',
  ),
  'gupnp_service_notify' => 
  array (
    0 => 'bool',
    'service' => 'resource',
    'name' => 'string',
    'type' => 'int',
    'value' => 'mixed',
  ),
  'gupnp_service_proxy_action_get' => 
  array (
    0 => 'mixed',
    'proxy' => 'resource',
    'action' => 'string',
    'name' => 'string',
    'type' => 'int',
  ),
  'gupnp_service_proxy_action_set' => 
  array (
    0 => 'bool',
    'proxy' => 'resource',
    'action' => 'string',
    'name' => 'string',
    'value' => 'mixed',
    'type' => 'int',
  ),
  'gupnp_service_proxy_add_notify' => 
  array (
    0 => 'bool',
    'proxy' => 'resource',
    'value' => 'string',
    'type' => 'int',
    'callback' => 'mixed',
    'arg=' => 'mixed',
  ),
  'gupnp_service_proxy_callback_set' => 
  array (
    0 => 'bool',
    'proxy' => 'resource',
    'signal' => 'int',
    'callback' => 'mixed',
    'arg=' => 'mixed',
  ),
  'gupnp_service_proxy_get_subscribed' => 
  array (
    0 => 'bool',
    'proxy' => 'resource',
  ),
  'gupnp_service_proxy_remove_notify' => 
  array (
    0 => 'bool',
    'proxy' => 'resource',
    'value' => 'string',
  ),
  'gupnp_service_proxy_send_action' => 
  array (
    0 => 'array<array-key, mixed>',
    'proxy' => 'resource',
    'action' => 'string',
    'in_params' => 'array<array-key, mixed>',
    'out_params' => 'array<array-key, mixed>',
  ),
  'gupnp_service_proxy_set_subscribed' => 
  array (
    0 => 'bool',
    'proxy' => 'resource',
    'subscribed' => 'bool',
  ),
  'gupnp_service_thaw_notify' => 
  array (
    0 => 'bool',
    'service' => 'resource',
  ),
  'gzclose' => 
  array (
    0 => 'bool',
    'stream' => 'resource',
  ),
  'gzcompress' => 
  array (
    0 => 'false|string',
    'data' => 'string',
    'level=' => 'int',
    'encoding=' => 'int',
  ),
  'gzdecode' => 
  array (
    0 => 'false|string',
    'data' => 'string',
    'max_length=' => 'int',
  ),
  'gzdeflate' => 
  array (
    0 => 'false|string',
    'data' => 'string',
    'level=' => 'int',
    'encoding=' => 'int',
  ),
  'gzencode' => 
  array (
    0 => 'false|string',
    'data' => 'string',
    'level=' => 'int',
    'encoding=' => 'int',
  ),
  'gzeof' => 
  array (
    0 => 'bool',
    'stream' => 'resource',
  ),
  'gzfile' => 
  array (
    0 => 'false|list<string>',
    'filename' => 'string',
    'use_include_path=' => 'int',
  ),
  'gzgetc' => 
  array (
    0 => 'false|string',
    'stream' => 'resource',
  ),
  'gzgets' => 
  array (
    0 => 'false|string',
    'stream' => 'resource',
    'length=' => 'int|null',
  ),
  'gzinflate' => 
  array (
    0 => 'false|string',
    'data' => 'string',
    'max_length=' => 'int',
  ),
  'gzopen' => 
  array (
    0 => 'false|resource',
    'filename' => 'string',
    'mode' => 'string',
    'use_include_path=' => 'int',
  ),
  'gzpassthru' => 
  array (
    0 => 'int',
    'stream' => 'resource',
  ),
  'gzputs' => 
  array (
    0 => 'false|int',
    'stream' => 'resource',
    'data' => 'string',
    'length=' => 'int|null',
  ),
  'gzread' => 
  array (
    0 => 'false|string',
    'stream' => 'resource',
    'length' => 'int',
  ),
  'gzrewind' => 
  array (
    0 => 'bool',
    'stream' => 'resource',
  ),
  'gzseek' => 
  array (
    0 => 'int',
    'stream' => 'resource',
    'offset' => 'int',
    'whence=' => 'int',
  ),
  'gztell' => 
  array (
    0 => 'false|int',
    'stream' => 'resource',
  ),
  'gzuncompress' => 
  array (
    0 => 'false|string',
    'data' => 'string',
    'max_length=' => 'int',
  ),
  'gzwrite' => 
  array (
    0 => 'false|int',
    'stream' => 'resource',
    'data' => 'string',
    'length=' => 'int|null',
  ),
  'haruannotation::setborderstyle' => 
  array (
    0 => 'bool',
    'width' => 'float',
    'dash_on' => 'int',
    'dash_off' => 'int',
  ),
  'haruannotation::sethighlightmode' => 
  array (
    0 => 'bool',
    'mode' => 'int',
  ),
  'haruannotation::seticon' => 
  array (
    0 => 'bool',
    'icon' => 'int',
  ),
  'haruannotation::setopened' => 
  array (
    0 => 'bool',
    'opened' => 'bool',
  ),
  'harudestination::setfit' => 
  array (
    0 => 'bool',
  ),
  'harudestination::setfitb' => 
  array (
    0 => 'bool',
  ),
  'harudestination::setfitbh' => 
  array (
    0 => 'bool',
    'top' => 'float',
  ),
  'harudestination::setfitbv' => 
  array (
    0 => 'bool',
    'left' => 'float',
  ),
  'harudestination::setfith' => 
  array (
    0 => 'bool',
    'top' => 'float',
  ),
  'harudestination::setfitr' => 
  array (
    0 => 'bool',
    'left' => 'float',
    'bottom' => 'float',
    'right' => 'float',
    'top' => 'float',
  ),
  'harudestination::setfitv' => 
  array (
    0 => 'bool',
    'left' => 'float',
  ),
  'harudestination::setxyz' => 
  array (
    0 => 'bool',
    'left' => 'float',
    'top' => 'float',
    'zoom' => 'float',
  ),
  'harudoc::__construct' => 
  array (
    0 => 'void',
  ),
  'harudoc::addpage' => 
  array (
    0 => 'object',
  ),
  'harudoc::addpagelabel' => 
  array (
    0 => 'bool',
    'first_page' => 'int',
    'style' => 'int',
    'first_num' => 'int',
    'prefix=' => 'string',
  ),
  'harudoc::createoutline' => 
  array (
    0 => 'object',
    'title' => 'string',
    'parent_outline=' => 'object',
    'encoder=' => 'object',
  ),
  'harudoc::getcurrentencoder' => 
  array (
    0 => 'object',
  ),
  'harudoc::getcurrentpage' => 
  array (
    0 => 'object',
  ),
  'harudoc::getencoder' => 
  array (
    0 => 'object',
    'encoding' => 'string',
  ),
  'harudoc::getfont' => 
  array (
    0 => 'object',
    'fontname' => 'string',
    'encoding=' => 'string',
  ),
  'harudoc::getinfoattr' => 
  array (
    0 => 'string',
    'type' => 'int',
  ),
  'harudoc::getpagelayout' => 
  array (
    0 => 'int',
  ),
  'harudoc::getpagemode' => 
  array (
    0 => 'int',
  ),
  'harudoc::getstreamsize' => 
  array (
    0 => 'int',
  ),
  'harudoc::insertpage' => 
  array (
    0 => 'object',
    'page' => 'object',
  ),
  'harudoc::loadjpeg' => 
  array (
    0 => 'object',
    'filename' => 'string',
  ),
  'harudoc::loadpng' => 
  array (
    0 => 'object',
    'filename' => 'string',
    'deferred=' => 'bool',
  ),
  'harudoc::loadraw' => 
  array (
    0 => 'object',
    'filename' => 'string',
    'width' => 'int',
    'height' => 'int',
    'color_space' => 'int',
  ),
  'harudoc::loadttc' => 
  array (
    0 => 'string',
    'fontfile' => 'string',
    'index' => 'int',
    'embed=' => 'bool',
  ),
  'harudoc::loadttf' => 
  array (
    0 => 'string',
    'fontfile' => 'string',
    'embed=' => 'bool',
  ),
  'harudoc::loadtype1' => 
  array (
    0 => 'string',
    'afmfile' => 'string',
    'pfmfile=' => 'string',
  ),
  'harudoc::output' => 
  array (
    0 => 'bool',
  ),
  'harudoc::readfromstream' => 
  array (
    0 => 'string',
    'bytes' => 'int',
  ),
  'harudoc::reseterror' => 
  array (
    0 => 'bool',
  ),
  'harudoc::resetstream' => 
  array (
    0 => 'bool',
  ),
  'harudoc::save' => 
  array (
    0 => 'bool',
    'file' => 'string',
  ),
  'harudoc::savetostream' => 
  array (
    0 => 'bool',
  ),
  'harudoc::setcompressionmode' => 
  array (
    0 => 'bool',
    'mode' => 'int',
  ),
  'harudoc::setcurrentencoder' => 
  array (
    0 => 'bool',
    'encoding' => 'string',
  ),
  'harudoc::setencryptionmode' => 
  array (
    0 => 'bool',
    'mode' => 'int',
    'key_len=' => 'int',
  ),
  'harudoc::setinfoattr' => 
  array (
    0 => 'bool',
    'type' => 'int',
    'info' => 'string',
  ),
  'harudoc::setinfodateattr' => 
  array (
    0 => 'bool',
    'type' => 'int',
    'year' => 'int',
    'month' => 'int',
    'day' => 'int',
    'hour' => 'int',
    'min' => 'int',
    'sec' => 'int',
    'ind' => 'string',
    'off_hour' => 'int',
    'off_min' => 'int',
  ),
  'harudoc::setopenaction' => 
  array (
    0 => 'bool',
    'destination' => 'object',
  ),
  'harudoc::setpagelayout' => 
  array (
    0 => 'bool',
    'layout' => 'int',
  ),
  'harudoc::setpagemode' => 
  array (
    0 => 'bool',
    'mode' => 'int',
  ),
  'harudoc::setpagesconfiguration' => 
  array (
    0 => 'bool',
    'page_per_pages' => 'int',
  ),
  'harudoc::setpassword' => 
  array (
    0 => 'bool',
    'owner_password' => 'string',
    'user_password' => 'string',
  ),
  'harudoc::setpermission' => 
  array (
    0 => 'bool',
    'permission' => 'int',
  ),
  'harudoc::usecnsencodings' => 
  array (
    0 => 'bool',
  ),
  'harudoc::usecnsfonts' => 
  array (
    0 => 'bool',
  ),
  'harudoc::usecntencodings' => 
  array (
    0 => 'bool',
  ),
  'harudoc::usecntfonts' => 
  array (
    0 => 'bool',
  ),
  'harudoc::usejpencodings' => 
  array (
    0 => 'bool',
  ),
  'harudoc::usejpfonts' => 
  array (
    0 => 'bool',
  ),
  'harudoc::usekrencodings' => 
  array (
    0 => 'bool',
  ),
  'harudoc::usekrfonts' => 
  array (
    0 => 'bool',
  ),
  'haruencoder::getbytetype' => 
  array (
    0 => 'int',
    'text' => 'string',
    'index' => 'int',
  ),
  'haruencoder::gettype' => 
  array (
    0 => 'int',
  ),
  'haruencoder::getunicode' => 
  array (
    0 => 'int',
    'character' => 'int',
  ),
  'haruencoder::getwritingmode' => 
  array (
    0 => 'int',
  ),
  'harufont::getascent' => 
  array (
    0 => 'int',
  ),
  'harufont::getcapheight' => 
  array (
    0 => 'int',
  ),
  'harufont::getdescent' => 
  array (
    0 => 'int',
  ),
  'harufont::getencodingname' => 
  array (
    0 => 'string',
  ),
  'harufont::getfontname' => 
  array (
    0 => 'string',
  ),
  'harufont::gettextwidth' => 
  array (
    0 => 'array<array-key, mixed>',
    'text' => 'string',
  ),
  'harufont::getunicodewidth' => 
  array (
    0 => 'int',
    'character' => 'int',
  ),
  'harufont::getxheight' => 
  array (
    0 => 'int',
  ),
  'harufont::measuretext' => 
  array (
    0 => 'int',
    'text' => 'string',
    'width' => 'float',
    'font_size' => 'float',
    'char_space' => 'float',
    'word_space' => 'float',
    'word_wrap=' => 'bool',
  ),
  'haruimage::getbitspercomponent' => 
  array (
    0 => 'int',
  ),
  'haruimage::getcolorspace' => 
  array (
    0 => 'string',
  ),
  'haruimage::getheight' => 
  array (
    0 => 'int',
  ),
  'haruimage::getsize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'haruimage::getwidth' => 
  array (
    0 => 'int',
  ),
  'haruimage::setcolormask' => 
  array (
    0 => 'bool',
    'rmin' => 'int',
    'rmax' => 'int',
    'gmin' => 'int',
    'gmax' => 'int',
    'bmin' => 'int',
    'bmax' => 'int',
  ),
  'haruimage::setmaskimage' => 
  array (
    0 => 'bool',
    'mask_image' => 'object',
  ),
  'haruoutline::setdestination' => 
  array (
    0 => 'bool',
    'destination' => 'object',
  ),
  'haruoutline::setopened' => 
  array (
    0 => 'bool',
    'opened' => 'bool',
  ),
  'harupage::arc' => 
  array (
    0 => 'bool',
    'x' => 'float',
    'y' => 'float',
    'ray' => 'float',
    'ang1' => 'float',
    'ang2' => 'float',
  ),
  'harupage::begintext' => 
  array (
    0 => 'bool',
  ),
  'harupage::circle' => 
  array (
    0 => 'bool',
    'x' => 'float',
    'y' => 'float',
    'ray' => 'float',
  ),
  'harupage::closepath' => 
  array (
    0 => 'bool',
  ),
  'harupage::concat' => 
  array (
    0 => 'bool',
    'a' => 'float',
    'b' => 'float',
    'c' => 'float',
    'd' => 'float',
    'x' => 'float',
    'y' => 'float',
  ),
  'harupage::createdestination' => 
  array (
    0 => 'object',
  ),
  'harupage::createlinkannotation' => 
  array (
    0 => 'object',
    'rectangle' => 'array<array-key, mixed>',
    'destination' => 'object',
  ),
  'harupage::createtextannotation' => 
  array (
    0 => 'object',
    'rectangle' => 'array<array-key, mixed>',
    'text' => 'string',
    'encoder=' => 'object',
  ),
  'harupage::createurlannotation' => 
  array (
    0 => 'object',
    'rectangle' => 'array<array-key, mixed>',
    'url' => 'string',
  ),
  'harupage::curveto' => 
  array (
    0 => 'bool',
    'x1' => 'float',
    'y1' => 'float',
    'x2' => 'float',
    'y2' => 'float',
    'x3' => 'float',
    'y3' => 'float',
  ),
  'harupage::curveto2' => 
  array (
    0 => 'bool',
    'x2' => 'float',
    'y2' => 'float',
    'x3' => 'float',
    'y3' => 'float',
  ),
  'harupage::curveto3' => 
  array (
    0 => 'bool',
    'x1' => 'float',
    'y1' => 'float',
    'x3' => 'float',
    'y3' => 'float',
  ),
  'harupage::drawimage' => 
  array (
    0 => 'bool',
    'image' => 'object',
    'x' => 'float',
    'y' => 'float',
    'width' => 'float',
    'height' => 'float',
  ),
  'harupage::ellipse' => 
  array (
    0 => 'bool',
    'x' => 'float',
    'y' => 'float',
    'xray' => 'float',
    'yray' => 'float',
  ),
  'harupage::endpath' => 
  array (
    0 => 'bool',
  ),
  'harupage::endtext' => 
  array (
    0 => 'bool',
  ),
  'harupage::eofill' => 
  array (
    0 => 'bool',
  ),
  'harupage::eofillstroke' => 
  array (
    0 => 'bool',
    'close_path=' => 'bool',
  ),
  'harupage::fill' => 
  array (
    0 => 'bool',
  ),
  'harupage::fillstroke' => 
  array (
    0 => 'bool',
    'close_path=' => 'bool',
  ),
  'harupage::getcharspace' => 
  array (
    0 => 'float',
  ),
  'harupage::getcmykfill' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'harupage::getcmykstroke' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'harupage::getcurrentfont' => 
  array (
    0 => 'object',
  ),
  'harupage::getcurrentfontsize' => 
  array (
    0 => 'float',
  ),
  'harupage::getcurrentpos' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'harupage::getcurrenttextpos' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'harupage::getdash' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'harupage::getfillingcolorspace' => 
  array (
    0 => 'int',
  ),
  'harupage::getflatness' => 
  array (
    0 => 'float',
  ),
  'harupage::getgmode' => 
  array (
    0 => 'int',
  ),
  'harupage::getgrayfill' => 
  array (
    0 => 'float',
  ),
  'harupage::getgraystroke' => 
  array (
    0 => 'float',
  ),
  'harupage::getheight' => 
  array (
    0 => 'float',
  ),
  'harupage::gethorizontalscaling' => 
  array (
    0 => 'float',
  ),
  'harupage::getlinecap' => 
  array (
    0 => 'int',
  ),
  'harupage::getlinejoin' => 
  array (
    0 => 'int',
  ),
  'harupage::getlinewidth' => 
  array (
    0 => 'float',
  ),
  'harupage::getmiterlimit' => 
  array (
    0 => 'float',
  ),
  'harupage::getrgbfill' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'harupage::getrgbstroke' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'harupage::getstrokingcolorspace' => 
  array (
    0 => 'int',
  ),
  'harupage::gettextleading' => 
  array (
    0 => 'float',
  ),
  'harupage::gettextmatrix' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'harupage::gettextrenderingmode' => 
  array (
    0 => 'int',
  ),
  'harupage::gettextrise' => 
  array (
    0 => 'float',
  ),
  'harupage::gettextwidth' => 
  array (
    0 => 'float',
    'text' => 'string',
  ),
  'harupage::gettransmatrix' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'harupage::getwidth' => 
  array (
    0 => 'float',
  ),
  'harupage::getwordspace' => 
  array (
    0 => 'float',
  ),
  'harupage::lineto' => 
  array (
    0 => 'bool',
    'x' => 'float',
    'y' => 'float',
  ),
  'harupage::measuretext' => 
  array (
    0 => 'int',
    'text' => 'string',
    'width' => 'float',
    'wordwrap=' => 'bool',
  ),
  'harupage::movetextpos' => 
  array (
    0 => 'bool',
    'x' => 'float',
    'y' => 'float',
    'set_leading=' => 'bool',
  ),
  'harupage::moveto' => 
  array (
    0 => 'bool',
    'x' => 'float',
    'y' => 'float',
  ),
  'harupage::movetonextline' => 
  array (
    0 => 'bool',
  ),
  'harupage::rectangle' => 
  array (
    0 => 'bool',
    'x' => 'float',
    'y' => 'float',
    'width' => 'float',
    'height' => 'float',
  ),
  'harupage::setcharspace' => 
  array (
    0 => 'bool',
    'char_space' => 'float',
  ),
  'harupage::setcmykfill' => 
  array (
    0 => 'bool',
    'c' => 'float',
    'm' => 'float',
    'y' => 'float',
    'k' => 'float',
  ),
  'harupage::setcmykstroke' => 
  array (
    0 => 'bool',
    'c' => 'float',
    'm' => 'float',
    'y' => 'float',
    'k' => 'float',
  ),
  'harupage::setdash' => 
  array (
    0 => 'bool',
    'pattern' => 'array<array-key, mixed>',
    'phase' => 'int',
  ),
  'harupage::setflatness' => 
  array (
    0 => 'bool',
    'flatness' => 'float',
  ),
  'harupage::setfontandsize' => 
  array (
    0 => 'bool',
    'font' => 'object',
    'size' => 'float',
  ),
  'harupage::setgrayfill' => 
  array (
    0 => 'bool',
    'value' => 'float',
  ),
  'harupage::setgraystroke' => 
  array (
    0 => 'bool',
    'value' => 'float',
  ),
  'harupage::setheight' => 
  array (
    0 => 'bool',
    'height' => 'float',
  ),
  'harupage::sethorizontalscaling' => 
  array (
    0 => 'bool',
    'scaling' => 'float',
  ),
  'harupage::setlinecap' => 
  array (
    0 => 'bool',
    'cap' => 'int',
  ),
  'harupage::setlinejoin' => 
  array (
    0 => 'bool',
    'join' => 'int',
  ),
  'harupage::setlinewidth' => 
  array (
    0 => 'bool',
    'width' => 'float',
  ),
  'harupage::setmiterlimit' => 
  array (
    0 => 'bool',
    'limit' => 'float',
  ),
  'harupage::setrgbfill' => 
  array (
    0 => 'bool',
    'r' => 'float',
    'g' => 'float',
    'b' => 'float',
  ),
  'harupage::setrgbstroke' => 
  array (
    0 => 'bool',
    'r' => 'float',
    'g' => 'float',
    'b' => 'float',
  ),
  'harupage::setrotate' => 
  array (
    0 => 'bool',
    'angle' => 'int',
  ),
  'harupage::setsize' => 
  array (
    0 => 'bool',
    'size' => 'int',
    'direction' => 'int',
  ),
  'harupage::setslideshow' => 
  array (
    0 => 'bool',
    'type' => 'int',
    'disp_time' => 'float',
    'trans_time' => 'float',
  ),
  'harupage::settextleading' => 
  array (
    0 => 'bool',
    'text_leading' => 'float',
  ),
  'harupage::settextmatrix' => 
  array (
    0 => 'bool',
    'a' => 'float',
    'b' => 'float',
    'c' => 'float',
    'd' => 'float',
    'x' => 'float',
    'y' => 'float',
  ),
  'harupage::settextrenderingmode' => 
  array (
    0 => 'bool',
    'mode' => 'int',
  ),
  'harupage::settextrise' => 
  array (
    0 => 'bool',
    'rise' => 'float',
  ),
  'harupage::setwidth' => 
  array (
    0 => 'bool',
    'width' => 'float',
  ),
  'harupage::setwordspace' => 
  array (
    0 => 'bool',
    'word_space' => 'float',
  ),
  'harupage::showtext' => 
  array (
    0 => 'bool',
    'text' => 'string',
  ),
  'harupage::showtextnextline' => 
  array (
    0 => 'bool',
    'text' => 'string',
    'word_space=' => 'float',
    'char_space=' => 'float',
  ),
  'harupage::stroke' => 
  array (
    0 => 'bool',
    'close_path=' => 'bool',
  ),
  'harupage::textout' => 
  array (
    0 => 'bool',
    'x' => 'float',
    'y' => 'float',
    'text' => 'string',
  ),
  'harupage::textrect' => 
  array (
    0 => 'bool',
    'left' => 'float',
    'top' => 'float',
    'right' => 'float',
    'bottom' => 'float',
    'text' => 'string',
    'align=' => 'int',
  ),
  'hash' => 
  array (
    0 => 'non-empty-string',
    'algo' => 'string',
    'data' => 'string',
    'binary=' => 'bool',
    'options=' => 'array{seed: scalar}',
  ),
  'hash_algos' => 
  array (
    0 => 'list<string>',
  ),
  'hash_copy' => 
  array (
    0 => 'HashContext',
    'context' => 'HashContext',
  ),
  'hash_equals' => 
  array (
    0 => 'bool',
    'known_string' => 'string',
    'user_string' => 'string',
  ),
  'hash_file' => 
  array (
    0 => 'false|non-empty-string',
    'algo' => 'string',
    'filename' => 'string',
    'binary=' => 'bool',
    'options=' => 'array{seed: scalar}',
  ),
  'hash_final' => 
  array (
    0 => 'non-empty-string',
    'context' => 'HashContext',
    'binary=' => 'bool',
  ),
  'hash_hkdf' => 
  array (
    0 => 'non-empty-string',
    'algo' => 'string',
    'key' => 'string',
    'length=' => 'int',
    'info=' => 'string',
    'salt=' => 'string',
  ),
  'hash_hmac' => 
  array (
    0 => 'non-empty-string',
    'algo' => 'string',
    'data' => 'string',
    'key' => 'string',
    'binary=' => 'bool',
  ),
  'hash_hmac_algos' => 
  array (
    0 => 'list<string>',
  ),
  'hash_hmac_file' => 
  array (
    0 => 'non-empty-string',
    'algo' => 'string',
    'filename' => 'string',
    'key' => 'string',
    'binary=' => 'bool',
  ),
  'hash_init' => 
  array (
    0 => 'HashContext',
    'algo' => 'string',
    'flags=' => 'int',
    'key=' => 'string',
    'options=' => 'array{seed: scalar}',
  ),
  'hash_pbkdf2' => 
  array (
    0 => 'non-empty-string',
    'algo' => 'string',
    'password' => 'string',
    'salt' => 'string',
    'iterations' => 'int',
    'length=' => 'int',
    'binary=' => 'bool',
    'options=' => 'array<array-key, mixed>',
  ),
  'hash_update' => 
  array (
    0 => 'true',
    'context' => 'HashContext',
    'data' => 'string',
  ),
  'hash_update_file' => 
  array (
    0 => 'bool',
    'context' => 'HashContext',
    'filename' => 'string',
    'stream_context=' => 'null|resource',
  ),
  'hash_update_stream' => 
  array (
    0 => 'int',
    'context' => 'HashContext',
    'stream' => 'resource',
    'length=' => 'int',
  ),
  'hashtableobj::clear' => 
  array (
    0 => 'void',
  ),
  'hashtableobj::get' => 
  array (
    0 => 'string',
    'key' => 'string',
  ),
  'hashtableobj::nextkey' => 
  array (
    0 => 'string',
    'previousKey' => 'string',
  ),
  'hashtableobj::remove' => 
  array (
    0 => 'int',
    'key' => 'string',
  ),
  'hashtableobj::set' => 
  array (
    0 => 'int',
    'key' => 'string',
    'value' => 'string',
  ),
  'header' => 
  array (
    0 => 'void',
    'header' => 'string',
    'replace=' => 'bool',
    'response_code=' => 'int',
  ),
  'header_register_callback' => 
  array (
    0 => 'bool',
    'callback' => 'callable():void',
  ),
  'header_remove' => 
  array (
    0 => 'void',
    'name=' => 'null|string',
  ),
  'headers_list' => 
  array (
    0 => 'list<string>',
  ),
  'headers_sent' => 
  array (
    0 => 'bool',
    '&w_filename=' => 'string',
    '&w_line=' => 'int',
  ),
  'hebrev' => 
  array (
    0 => 'string',
    'string' => 'string',
    'max_chars_per_line=' => 'int',
  ),
  'hex2bin' => 
  array (
    0 => 'false|string',
    'string' => 'string',
  ),
  'hexdec' => 
  array (
    0 => 'float|int',
    'hex_string' => 'string',
  ),
  'highlight_file' => 
  array (
    0 => 'bool|string',
    'filename' => 'string',
    'return=' => 'bool',
  ),
  'highlight_string' => 
  array (
    0 => 'string|true',
    'string' => 'string',
    'return=' => 'bool',
  ),
  'hrtime' => 
  array (
    0 => 'array{0: int, 1: int}|false',
    'as_number=' => 'false',
  ),
  'hrtime\'1' => 
  array (
    0 => 'false|float|int',
    'as_number=' => 'true',
  ),
  'hrtime\\performancecounter::getelapsedticks' => 
  array (
    0 => 'int',
  ),
  'hrtime\\performancecounter::getfrequency' => 
  array (
    0 => 'int',
  ),
  'hrtime\\performancecounter::getlastelapsedticks' => 
  array (
    0 => 'int',
  ),
  'hrtime\\performancecounter::getticks' => 
  array (
    0 => 'int',
  ),
  'hrtime\\performancecounter::gettickssince' => 
  array (
    0 => 'int',
    'start' => 'int',
  ),
  'hrtime\\performancecounter::isrunning' => 
  array (
    0 => 'bool',
  ),
  'hrtime\\performancecounter::start' => 
  array (
    0 => 'void',
  ),
  'hrtime\\performancecounter::stop' => 
  array (
    0 => 'void',
  ),
  'hrtime\\stopwatch::getelapsedticks' => 
  array (
    0 => 'int',
  ),
  'hrtime\\stopwatch::getelapsedtime' => 
  array (
    0 => 'float',
    'unit=' => 'int',
  ),
  'hrtime\\stopwatch::getlastelapsedticks' => 
  array (
    0 => 'int',
  ),
  'hrtime\\stopwatch::getlastelapsedtime' => 
  array (
    0 => 'float',
    'unit=' => 'int',
  ),
  'hrtime\\stopwatch::isrunning' => 
  array (
    0 => 'bool',
  ),
  'hrtime\\stopwatch::start' => 
  array (
    0 => 'void',
  ),
  'hrtime\\stopwatch::stop' => 
  array (
    0 => 'void',
  ),
  'html_entity_decode' => 
  array (
    0 => 'string',
    'string' => 'string',
    'flags=' => 'int',
    'encoding=' => 'null|string',
  ),
  'htmlentities' => 
  array (
    0 => 'string',
    'string' => 'string',
    'flags=' => 'int',
    'encoding=' => 'null|string',
    'double_encode=' => 'bool',
  ),
  'htmlspecialchars' => 
  array (
    0 => 'string',
    'string' => 'string',
    'flags=' => 'int',
    'encoding=' => 'null|string',
    'double_encode=' => 'bool',
  ),
  'htmlspecialchars_decode' => 
  array (
    0 => 'string',
    'string' => 'string',
    'flags=' => 'int',
  ),
  'http\\client::__construct' => 
  array (
    0 => 'void',
    'driver=' => 'string',
    'persistent_handle_id=' => 'string',
  ),
  'http\\client::addcookies' => 
  array (
    0 => 'http\\Client',
    'cookies=' => 'array<array-key, mixed>|null',
  ),
  'http\\client::addssloptions' => 
  array (
    0 => 'http\\Client',
    'ssl_options=' => 'array<array-key, mixed>|null',
  ),
  'http\\client::attach' => 
  array (
    0 => 'void',
    'observer' => 'SplObserver',
  ),
  'http\\client::configure' => 
  array (
    0 => 'http\\Client',
    'settings' => 'array<array-key, mixed>',
  ),
  'http\\client::count' => 
  array (
    0 => 'int',
  ),
  'http\\client::dequeue' => 
  array (
    0 => 'http\\Client',
    'request' => 'http\\Client\\Request',
  ),
  'http\\client::detach' => 
  array (
    0 => 'void',
    'observer' => 'SplObserver',
  ),
  'http\\client::enableevents' => 
  array (
    0 => 'http\\Client',
    'enable=' => 'mixed',
  ),
  'http\\client::enablepipelining' => 
  array (
    0 => 'http\\Client',
    'enable=' => 'mixed',
  ),
  'http\\client::enqueue' => 
  array (
    0 => 'http\\Client',
    'request' => 'http\\Client\\Request',
    'callable=' => 'mixed',
  ),
  'http\\client::getavailableconfiguration' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'http\\client::getavailabledrivers' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'http\\client::getavailableoptions' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'http\\client::getcookies' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'http\\client::gethistory' => 
  array (
    0 => 'http\\Message',
  ),
  'http\\client::getobservers' => 
  array (
    0 => 'SplObjectStorage',
  ),
  'http\\client::getoptions' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'http\\client::getprogressinfo' => 
  array (
    0 => 'null|object',
    'request' => 'http\\Client\\Request',
  ),
  'http\\client::getresponse' => 
  array (
    0 => 'http\\Client\\Response|null',
    'request=' => 'http\\Client\\Request|null',
  ),
  'http\\client::getssloptions' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'http\\client::gettransferinfo' => 
  array (
    0 => 'object',
    'request' => 'http\\Client\\Request',
  ),
  'http\\client::notify' => 
  array (
    0 => 'void',
    'request=' => 'http\\Client\\Request|null',
  ),
  'http\\client::once' => 
  array (
    0 => 'bool',
  ),
  'http\\client::requeue' => 
  array (
    0 => 'http\\Client',
    'request' => 'http\\Client\\Request',
    'callable=' => 'mixed',
  ),
  'http\\client::reset' => 
  array (
    0 => 'http\\Client',
  ),
  'http\\client::send' => 
  array (
    0 => 'http\\Client',
  ),
  'http\\client::setcookies' => 
  array (
    0 => 'http\\Client',
    'cookies=' => 'array<array-key, mixed>|null',
  ),
  'http\\client::setdebug' => 
  array (
    0 => 'http\\Client',
    'callback' => 'callable',
  ),
  'http\\client::setoptions' => 
  array (
    0 => 'http\\Client',
    'options=' => 'array<array-key, mixed>|null',
  ),
  'http\\client::setssloptions' => 
  array (
    0 => 'http\\Client',
    'ssl_option=' => 'array<array-key, mixed>|null',
  ),
  'http\\client::wait' => 
  array (
    0 => 'bool',
    'timeout=' => 'mixed',
  ),
  'http\\client\\curl\\user::init' => 
  array (
    0 => 'mixed',
    'run' => 'callable',
  ),
  'http\\client\\curl\\user::once' => 
  array (
    0 => 'mixed',
  ),
  'http\\client\\curl\\user::send' => 
  array (
    0 => 'mixed',
  ),
  'http\\client\\curl\\user::socket' => 
  array (
    0 => 'mixed',
    'socket' => 'resource',
    'action' => 'int',
  ),
  'http\\client\\curl\\user::timer' => 
  array (
    0 => 'mixed',
    'timeout_ms' => 'int',
  ),
  'http\\client\\curl\\user::wait' => 
  array (
    0 => 'mixed',
    'timeout_ms=' => 'mixed',
  ),
  'http\\client\\request::__construct' => 
  array (
    0 => 'void',
    'method=' => 'mixed',
    'url=' => 'mixed',
    'headers=' => 'array<array-key, mixed>|null',
    'body=' => 'http\\Message\\Body|null',
  ),
  'http\\client\\request::__tostring' => 
  array (
    0 => 'string',
  ),
  'http\\client\\request::addbody' => 
  array (
    0 => 'http\\Message',
    'body' => 'http\\Message\\Body',
  ),
  'http\\client\\request::addheader' => 
  array (
    0 => 'http\\Message',
    'header' => 'string',
    'value' => 'mixed',
  ),
  'http\\client\\request::addheaders' => 
  array (
    0 => 'http\\Message',
    'headers' => 'array<array-key, mixed>',
    'append=' => 'mixed',
  ),
  'http\\client\\request::addquery' => 
  array (
    0 => 'http\\Client\\Request',
    'query_data' => 'mixed',
  ),
  'http\\client\\request::addssloptions' => 
  array (
    0 => 'http\\Client\\Request',
    'ssl_options=' => 'array<array-key, mixed>|null',
  ),
  'http\\client\\request::count' => 
  array (
    0 => 'int',
  ),
  'http\\client\\request::current' => 
  array (
    0 => 'mixed',
  ),
  'http\\client\\request::detach' => 
  array (
    0 => 'http\\Message',
  ),
  'http\\client\\request::getbody' => 
  array (
    0 => 'http\\Message\\Body',
  ),
  'http\\client\\request::getcontenttype' => 
  array (
    0 => 'null|string',
  ),
  'http\\client\\request::getheader' => 
  array (
    0 => 'http\\Header|mixed',
    'header' => 'string',
    'into_class=' => 'mixed',
  ),
  'http\\client\\request::getheaders' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'http\\client\\request::gethttpversion' => 
  array (
    0 => 'string',
  ),
  'http\\client\\request::getinfo' => 
  array (
    0 => 'null|string',
  ),
  'http\\client\\request::getoptions' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'http\\client\\request::getparentmessage' => 
  array (
    0 => 'http\\Message',
  ),
  'http\\client\\request::getquery' => 
  array (
    0 => 'null|string',
  ),
  'http\\client\\request::getrequestmethod' => 
  array (
    0 => 'false|string',
  ),
  'http\\client\\request::getrequesturl' => 
  array (
    0 => 'false|string',
  ),
  'http\\client\\request::getresponsecode' => 
  array (
    0 => 'false|int',
  ),
  'http\\client\\request::getresponsestatus' => 
  array (
    0 => 'false|string',
  ),
  'http\\client\\request::getssloptions' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'http\\client\\request::gettype' => 
  array (
    0 => 'int',
  ),
  'http\\client\\request::ismultipart' => 
  array (
    0 => 'bool',
    '&boundary=' => 'mixed',
  ),
  'http\\client\\request::key' => 
  array (
    0 => 'int|string',
  ),
  'http\\client\\request::next' => 
  array (
    0 => 'void',
  ),
  'http\\client\\request::prepend' => 
  array (
    0 => 'http\\Message',
    'message' => 'http\\Message',
    'top=' => 'mixed',
  ),
  'http\\client\\request::reverse' => 
  array (
    0 => 'http\\Message',
  ),
  'http\\client\\request::rewind' => 
  array (
    0 => 'void',
  ),
  'http\\client\\request::serialize' => 
  array (
    0 => 'string',
  ),
  'http\\client\\request::setbody' => 
  array (
    0 => 'http\\Message',
    'body' => 'http\\Message\\Body',
  ),
  'http\\client\\request::setcontenttype' => 
  array (
    0 => 'http\\Client\\Request',
    'content_type' => 'string',
  ),
  'http\\client\\request::setheader' => 
  array (
    0 => 'http\\Message',
    'header' => 'string',
    'value=' => 'mixed',
  ),
  'http\\client\\request::setheaders' => 
  array (
    0 => 'http\\Message',
    'headers' => 'array<array-key, mixed>',
  ),
  'http\\client\\request::sethttpversion' => 
  array (
    0 => 'http\\Message',
    'http_version' => 'string',
  ),
  'http\\client\\request::setinfo' => 
  array (
    0 => 'http\\Message',
    'http_info' => 'string',
  ),
  'http\\client\\request::setoptions' => 
  array (
    0 => 'http\\Client\\Request',
    'options=' => 'array<array-key, mixed>|null',
  ),
  'http\\client\\request::setquery' => 
  array (
    0 => 'http\\Client\\Request',
    'query_data=' => 'mixed',
  ),
  'http\\client\\request::setrequestmethod' => 
  array (
    0 => 'http\\Message',
    'request_method' => 'string',
  ),
  'http\\client\\request::setrequesturl' => 
  array (
    0 => 'http\\Message',
    'url' => 'string',
  ),
  'http\\client\\request::setresponsecode' => 
  array (
    0 => 'http\\Message',
    'response_code' => 'int',
    'strict=' => 'mixed',
  ),
  'http\\client\\request::setresponsestatus' => 
  array (
    0 => 'http\\Message',
    'response_status' => 'string',
  ),
  'http\\client\\request::setssloptions' => 
  array (
    0 => 'http\\Client\\Request',
    'ssl_options=' => 'array<array-key, mixed>|null',
  ),
  'http\\client\\request::settype' => 
  array (
    0 => 'http\\Message',
    'type' => 'int',
  ),
  'http\\client\\request::splitmultipartbody' => 
  array (
    0 => 'http\\Message',
  ),
  'http\\client\\request::tocallback' => 
  array (
    0 => 'http\\Message',
    'callback' => 'callable',
  ),
  'http\\client\\request::tostream' => 
  array (
    0 => 'http\\Message',
    'stream' => 'resource',
  ),
  'http\\client\\request::tostring' => 
  array (
    0 => 'string',
    'include_parent=' => 'mixed',
  ),
  'http\\client\\request::unserialize' => 
  array (
    0 => 'void',
    'serialized' => 'string',
  ),
  'http\\client\\request::valid' => 
  array (
    0 => 'bool',
  ),
  'http\\client\\response::__construct' => 
  array (
    0 => 'Iterator',
  ),
  'http\\client\\response::__tostring' => 
  array (
    0 => 'string',
  ),
  'http\\client\\response::addbody' => 
  array (
    0 => 'http\\Message',
    'body' => 'http\\Message\\Body',
  ),
  'http\\client\\response::addheader' => 
  array (
    0 => 'http\\Message',
    'header' => 'string',
    'value' => 'mixed',
  ),
  'http\\client\\response::addheaders' => 
  array (
    0 => 'http\\Message',
    'headers' => 'array<array-key, mixed>',
    'append=' => 'mixed',
  ),
  'http\\client\\response::count' => 
  array (
    0 => 'int',
  ),
  'http\\client\\response::current' => 
  array (
    0 => 'mixed',
  ),
  'http\\client\\response::detach' => 
  array (
    0 => 'http\\Message',
  ),
  'http\\client\\response::getbody' => 
  array (
    0 => 'http\\Message\\Body',
  ),
  'http\\client\\response::getcookies' => 
  array (
    0 => 'array<array-key, mixed>',
    'flags=' => 'mixed',
    'allowed_extras=' => 'mixed',
  ),
  'http\\client\\response::getheader' => 
  array (
    0 => 'http\\Header|mixed',
    'header' => 'string',
    'into_class=' => 'mixed',
  ),
  'http\\client\\response::getheaders' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'http\\client\\response::gethttpversion' => 
  array (
    0 => 'string',
  ),
  'http\\client\\response::getinfo' => 
  array (
    0 => 'null|string',
  ),
  'http\\client\\response::getparentmessage' => 
  array (
    0 => 'http\\Message',
  ),
  'http\\client\\response::getrequestmethod' => 
  array (
    0 => 'false|string',
  ),
  'http\\client\\response::getrequesturl' => 
  array (
    0 => 'false|string',
  ),
  'http\\client\\response::getresponsecode' => 
  array (
    0 => 'false|int',
  ),
  'http\\client\\response::getresponsestatus' => 
  array (
    0 => 'false|string',
  ),
  'http\\client\\response::gettransferinfo' => 
  array (
    0 => 'mixed|object',
    'element=' => 'mixed',
  ),
  'http\\client\\response::gettype' => 
  array (
    0 => 'int',
  ),
  'http\\client\\response::ismultipart' => 
  array (
    0 => 'bool',
    '&boundary=' => 'mixed',
  ),
  'http\\client\\response::key' => 
  array (
    0 => 'int|string',
  ),
  'http\\client\\response::next' => 
  array (
    0 => 'void',
  ),
  'http\\client\\response::prepend' => 
  array (
    0 => 'http\\Message',
    'message' => 'http\\Message',
    'top=' => 'mixed',
  ),
  'http\\client\\response::reverse' => 
  array (
    0 => 'http\\Message',
  ),
  'http\\client\\response::rewind' => 
  array (
    0 => 'void',
  ),
  'http\\client\\response::serialize' => 
  array (
    0 => 'string',
  ),
  'http\\client\\response::setbody' => 
  array (
    0 => 'http\\Message',
    'body' => 'http\\Message\\Body',
  ),
  'http\\client\\response::setheader' => 
  array (
    0 => 'http\\Message',
    'header' => 'string',
    'value=' => 'mixed',
  ),
  'http\\client\\response::setheaders' => 
  array (
    0 => 'http\\Message',
    'headers' => 'array<array-key, mixed>',
  ),
  'http\\client\\response::sethttpversion' => 
  array (
    0 => 'http\\Message',
    'http_version' => 'string',
  ),
  'http\\client\\response::setinfo' => 
  array (
    0 => 'http\\Message',
    'http_info' => 'string',
  ),
  'http\\client\\response::setrequestmethod' => 
  array (
    0 => 'http\\Message',
    'request_method' => 'string',
  ),
  'http\\client\\response::setrequesturl' => 
  array (
    0 => 'http\\Message',
    'url' => 'string',
  ),
  'http\\client\\response::setresponsecode' => 
  array (
    0 => 'http\\Message',
    'response_code' => 'int',
    'strict=' => 'mixed',
  ),
  'http\\client\\response::setresponsestatus' => 
  array (
    0 => 'http\\Message',
    'response_status' => 'string',
  ),
  'http\\client\\response::settype' => 
  array (
    0 => 'http\\Message',
    'type' => 'int',
  ),
  'http\\client\\response::splitmultipartbody' => 
  array (
    0 => 'http\\Message',
  ),
  'http\\client\\response::tocallback' => 
  array (
    0 => 'http\\Message',
    'callback' => 'callable',
  ),
  'http\\client\\response::tostream' => 
  array (
    0 => 'http\\Message',
    'stream' => 'resource',
  ),
  'http\\client\\response::tostring' => 
  array (
    0 => 'string',
    'include_parent=' => 'mixed',
  ),
  'http\\client\\response::unserialize' => 
  array (
    0 => 'void',
    'serialized' => 'string',
  ),
  'http\\client\\response::valid' => 
  array (
    0 => 'bool',
  ),
  'http\\cookie::__construct' => 
  array (
    0 => 'void',
    'cookie_string=' => 'mixed',
    'parser_flags=' => 'int',
    'allowed_extras=' => 'array<array-key, mixed>',
  ),
  'http\\cookie::__tostring' => 
  array (
    0 => 'string',
  ),
  'http\\cookie::addcookie' => 
  array (
    0 => 'http\\Cookie',
    'cookie_name' => 'string',
    'cookie_value' => 'string',
  ),
  'http\\cookie::addcookies' => 
  array (
    0 => 'http\\Cookie',
    'cookies' => 'array<array-key, mixed>',
  ),
  'http\\cookie::addextra' => 
  array (
    0 => 'http\\Cookie',
    'extra_name' => 'string',
    'extra_value' => 'string',
  ),
  'http\\cookie::addextras' => 
  array (
    0 => 'http\\Cookie',
    'extras' => 'array<array-key, mixed>',
  ),
  'http\\cookie::getcookie' => 
  array (
    0 => 'null|string',
    'name' => 'string',
  ),
  'http\\cookie::getcookies' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'http\\cookie::getdomain' => 
  array (
    0 => 'string',
  ),
  'http\\cookie::getexpires' => 
  array (
    0 => 'int',
  ),
  'http\\cookie::getextra' => 
  array (
    0 => 'string',
    'name' => 'string',
  ),
  'http\\cookie::getextras' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'http\\cookie::getflags' => 
  array (
    0 => 'int',
  ),
  'http\\cookie::getmaxage' => 
  array (
    0 => 'int',
  ),
  'http\\cookie::getpath' => 
  array (
    0 => 'string',
  ),
  'http\\cookie::setcookie' => 
  array (
    0 => 'http\\Cookie',
    'cookie_name' => 'string',
    'cookie_value=' => 'mixed',
  ),
  'http\\cookie::setcookies' => 
  array (
    0 => 'http\\Cookie',
    'cookies=' => 'mixed',
  ),
  'http\\cookie::setdomain' => 
  array (
    0 => 'http\\Cookie',
    'value=' => 'mixed',
  ),
  'http\\cookie::setexpires' => 
  array (
    0 => 'http\\Cookie',
    'value=' => 'mixed',
  ),
  'http\\cookie::setextra' => 
  array (
    0 => 'http\\Cookie',
    'extra_name' => 'string',
    'extra_value=' => 'mixed',
  ),
  'http\\cookie::setextras' => 
  array (
    0 => 'http\\Cookie',
    'extras=' => 'mixed',
  ),
  'http\\cookie::setflags' => 
  array (
    0 => 'http\\Cookie',
    'value=' => 'mixed',
  ),
  'http\\cookie::setmaxage' => 
  array (
    0 => 'http\\Cookie',
    'value=' => 'mixed',
  ),
  'http\\cookie::setpath' => 
  array (
    0 => 'http\\Cookie',
    'value=' => 'mixed',
  ),
  'http\\cookie::toarray' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'http\\cookie::tostring' => 
  array (
    0 => 'string',
  ),
  'http\\encoding\\stream::__construct' => 
  array (
    0 => 'void',
    'flags=' => 'mixed',
  ),
  'http\\encoding\\stream::done' => 
  array (
    0 => 'bool',
  ),
  'http\\encoding\\stream::finish' => 
  array (
    0 => 'string',
  ),
  'http\\encoding\\stream::flush' => 
  array (
    0 => 'string',
  ),
  'http\\encoding\\stream::update' => 
  array (
    0 => 'string',
    'data' => 'string',
  ),
  'http\\encoding\\stream\\debrotli::__construct' => 
  array (
    0 => 'void',
    'flags=' => 'int',
  ),
  'http\\encoding\\stream\\debrotli::decode' => 
  array (
    0 => 'string',
    'data' => 'string',
  ),
  'http\\encoding\\stream\\debrotli::done' => 
  array (
    0 => 'bool',
  ),
  'http\\encoding\\stream\\debrotli::finish' => 
  array (
    0 => 'string',
  ),
  'http\\encoding\\stream\\debrotli::flush' => 
  array (
    0 => 'string',
  ),
  'http\\encoding\\stream\\debrotli::update' => 
  array (
    0 => 'string',
    'data' => 'string',
  ),
  'http\\encoding\\stream\\dechunk::__construct' => 
  array (
    0 => 'void',
    'flags=' => 'mixed',
  ),
  'http\\encoding\\stream\\dechunk::decode' => 
  array (
    0 => 'false|string',
    'data' => 'string',
    '&decoded_len=' => 'mixed',
  ),
  'http\\encoding\\stream\\dechunk::done' => 
  array (
    0 => 'bool',
  ),
  'http\\encoding\\stream\\dechunk::finish' => 
  array (
    0 => 'string',
  ),
  'http\\encoding\\stream\\dechunk::flush' => 
  array (
    0 => 'string',
  ),
  'http\\encoding\\stream\\dechunk::update' => 
  array (
    0 => 'string',
    'data' => 'string',
  ),
  'http\\encoding\\stream\\deflate::__construct' => 
  array (
    0 => 'void',
    'flags=' => 'mixed',
  ),
  'http\\encoding\\stream\\deflate::done' => 
  array (
    0 => 'bool',
  ),
  'http\\encoding\\stream\\deflate::encode' => 
  array (
    0 => 'string',
    'data' => 'string',
    'flags=' => 'mixed',
  ),
  'http\\encoding\\stream\\deflate::finish' => 
  array (
    0 => 'string',
  ),
  'http\\encoding\\stream\\deflate::flush' => 
  array (
    0 => 'string',
  ),
  'http\\encoding\\stream\\deflate::update' => 
  array (
    0 => 'string',
    'data' => 'string',
  ),
  'http\\encoding\\stream\\enbrotli::__construct' => 
  array (
    0 => 'void',
    'flags=' => 'int',
  ),
  'http\\encoding\\stream\\enbrotli::done' => 
  array (
    0 => 'bool',
  ),
  'http\\encoding\\stream\\enbrotli::encode' => 
  array (
    0 => 'string',
    'data' => 'string',
    'flags=' => 'int',
  ),
  'http\\encoding\\stream\\enbrotli::finish' => 
  array (
    0 => 'string',
  ),
  'http\\encoding\\stream\\enbrotli::flush' => 
  array (
    0 => 'string',
  ),
  'http\\encoding\\stream\\enbrotli::update' => 
  array (
    0 => 'string',
    'data' => 'string',
  ),
  'http\\encoding\\stream\\inflate::__construct' => 
  array (
    0 => 'void',
    'flags=' => 'mixed',
  ),
  'http\\encoding\\stream\\inflate::decode' => 
  array (
    0 => 'string',
    'data' => 'string',
  ),
  'http\\encoding\\stream\\inflate::done' => 
  array (
    0 => 'bool',
  ),
  'http\\encoding\\stream\\inflate::finish' => 
  array (
    0 => 'string',
  ),
  'http\\encoding\\stream\\inflate::flush' => 
  array (
    0 => 'string',
  ),
  'http\\encoding\\stream\\inflate::update' => 
  array (
    0 => 'string',
    'data' => 'string',
  ),
  'http\\env::getrequestbody' => 
  array (
    0 => 'http\\Message\\Body',
    'body_class_name=' => 'mixed',
  ),
  'http\\env::getrequestheader' => 
  array (
    0 => 'array<array-key, mixed>|null|string',
    'header_name=' => 'mixed',
  ),
  'http\\env::getresponsecode' => 
  array (
    0 => 'int',
  ),
  'http\\env::getresponseheader' => 
  array (
    0 => 'array<array-key, mixed>|null|string',
    'header_name=' => 'mixed',
  ),
  'http\\env::getresponsestatusforallcodes' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'http\\env::getresponsestatusforcode' => 
  array (
    0 => 'string',
    'code' => 'int',
  ),
  'http\\env::negotiate' => 
  array (
    0 => 'null|string',
    'params' => 'string',
    'supported' => 'array<array-key, mixed>',
    'primary_type_separator=' => 'mixed',
    '&result_array=' => 'mixed',
  ),
  'http\\env::negotiatecharset' => 
  array (
    0 => 'null|string',
    'supported' => 'array<array-key, mixed>',
    '&result_array=' => 'mixed',
  ),
  'http\\env::negotiatecontenttype' => 
  array (
    0 => 'null|string',
    'supported' => 'array<array-key, mixed>',
    '&result_array=' => 'mixed',
  ),
  'http\\env::negotiateencoding' => 
  array (
    0 => 'null|string',
    'supported' => 'array<array-key, mixed>',
    '&result_array=' => 'mixed',
  ),
  'http\\env::negotiatelanguage' => 
  array (
    0 => 'null|string',
    'supported' => 'array<array-key, mixed>',
    '&result_array=' => 'mixed',
  ),
  'http\\env::setresponsecode' => 
  array (
    0 => 'bool',
    'code' => 'int',
  ),
  'http\\env::setresponseheader' => 
  array (
    0 => 'bool',
    'header_name' => 'string',
    'header_value=' => 'mixed',
    'response_code=' => 'mixed',
    'replace_header=' => 'mixed',
  ),
  'http\\env\\request::__construct' => 
  array (
    0 => 'void',
  ),
  'http\\env\\request::__tostring' => 
  array (
    0 => 'string',
  ),
  'http\\env\\request::addbody' => 
  array (
    0 => 'http\\Message',
    'body' => 'http\\Message\\Body',
  ),
  'http\\env\\request::addheader' => 
  array (
    0 => 'http\\Message',
    'header' => 'string',
    'value' => 'mixed',
  ),
  'http\\env\\request::addheaders' => 
  array (
    0 => 'http\\Message',
    'headers' => 'array<array-key, mixed>',
    'append=' => 'mixed',
  ),
  'http\\env\\request::count' => 
  array (
    0 => 'int',
  ),
  'http\\env\\request::current' => 
  array (
    0 => 'mixed',
  ),
  'http\\env\\request::detach' => 
  array (
    0 => 'http\\Message',
  ),
  'http\\env\\request::getbody' => 
  array (
    0 => 'http\\Message\\Body',
  ),
  'http\\env\\request::getcookie' => 
  array (
    0 => 'mixed',
    'name=' => 'string',
    'type=' => 'mixed',
    'defval=' => 'mixed',
    'delete=' => 'bool',
  ),
  'http\\env\\request::getfiles' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'http\\env\\request::getform' => 
  array (
    0 => 'mixed',
    'name=' => 'string',
    'type=' => 'mixed',
    'defval=' => 'mixed',
    'delete=' => 'bool',
  ),
  'http\\env\\request::getheader' => 
  array (
    0 => 'http\\Header|mixed',
    'header' => 'string',
    'into_class=' => 'mixed',
  ),
  'http\\env\\request::getheaders' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'http\\env\\request::gethttpversion' => 
  array (
    0 => 'string',
  ),
  'http\\env\\request::getinfo' => 
  array (
    0 => 'null|string',
  ),
  'http\\env\\request::getparentmessage' => 
  array (
    0 => 'http\\Message',
  ),
  'http\\env\\request::getquery' => 
  array (
    0 => 'mixed',
    'name=' => 'string',
    'type=' => 'mixed',
    'defval=' => 'mixed',
    'delete=' => 'bool',
  ),
  'http\\env\\request::getrequestmethod' => 
  array (
    0 => 'false|string',
  ),
  'http\\env\\request::getrequesturl' => 
  array (
    0 => 'false|string',
  ),
  'http\\env\\request::getresponsecode' => 
  array (
    0 => 'false|int',
  ),
  'http\\env\\request::getresponsestatus' => 
  array (
    0 => 'false|string',
  ),
  'http\\env\\request::gettype' => 
  array (
    0 => 'int',
  ),
  'http\\env\\request::ismultipart' => 
  array (
    0 => 'bool',
    '&boundary=' => 'mixed',
  ),
  'http\\env\\request::key' => 
  array (
    0 => 'int|string',
  ),
  'http\\env\\request::next' => 
  array (
    0 => 'void',
  ),
  'http\\env\\request::prepend' => 
  array (
    0 => 'http\\Message',
    'message' => 'http\\Message',
    'top=' => 'mixed',
  ),
  'http\\env\\request::reverse' => 
  array (
    0 => 'http\\Message',
  ),
  'http\\env\\request::rewind' => 
  array (
    0 => 'void',
  ),
  'http\\env\\request::serialize' => 
  array (
    0 => 'string',
  ),
  'http\\env\\request::setbody' => 
  array (
    0 => 'http\\Message',
    'body' => 'http\\Message\\Body',
  ),
  'http\\env\\request::setheader' => 
  array (
    0 => 'http\\Message',
    'header' => 'string',
    'value=' => 'mixed',
  ),
  'http\\env\\request::setheaders' => 
  array (
    0 => 'http\\Message',
    'headers' => 'array<array-key, mixed>',
  ),
  'http\\env\\request::sethttpversion' => 
  array (
    0 => 'http\\Message',
    'http_version' => 'string',
  ),
  'http\\env\\request::setinfo' => 
  array (
    0 => 'http\\Message',
    'http_info' => 'string',
  ),
  'http\\env\\request::setrequestmethod' => 
  array (
    0 => 'http\\Message',
    'request_method' => 'string',
  ),
  'http\\env\\request::setrequesturl' => 
  array (
    0 => 'http\\Message',
    'url' => 'string',
  ),
  'http\\env\\request::setresponsecode' => 
  array (
    0 => 'http\\Message',
    'response_code' => 'int',
    'strict=' => 'mixed',
  ),
  'http\\env\\request::setresponsestatus' => 
  array (
    0 => 'http\\Message',
    'response_status' => 'string',
  ),
  'http\\env\\request::settype' => 
  array (
    0 => 'http\\Message',
    'type' => 'int',
  ),
  'http\\env\\request::splitmultipartbody' => 
  array (
    0 => 'http\\Message',
  ),
  'http\\env\\request::tocallback' => 
  array (
    0 => 'http\\Message',
    'callback' => 'callable',
  ),
  'http\\env\\request::tostream' => 
  array (
    0 => 'http\\Message',
    'stream' => 'resource',
  ),
  'http\\env\\request::tostring' => 
  array (
    0 => 'string',
    'include_parent=' => 'mixed',
  ),
  'http\\env\\request::unserialize' => 
  array (
    0 => 'void',
    'serialized' => 'string',
  ),
  'http\\env\\request::valid' => 
  array (
    0 => 'bool',
  ),
  'http\\env\\response::__construct' => 
  array (
    0 => 'void',
  ),
  'http\\env\\response::__invoke' => 
  array (
    0 => 'bool',
    'data' => 'string',
    'ob_flags=' => 'int',
  ),
  'http\\env\\response::__tostring' => 
  array (
    0 => 'string',
  ),
  'http\\env\\response::addbody' => 
  array (
    0 => 'http\\Message',
    'body' => 'http\\Message\\Body',
  ),
  'http\\env\\response::addheader' => 
  array (
    0 => 'http\\Message',
    'header' => 'string',
    'value' => 'mixed',
  ),
  'http\\env\\response::addheaders' => 
  array (
    0 => 'http\\Message',
    'headers' => 'array<array-key, mixed>',
    'append=' => 'mixed',
  ),
  'http\\env\\response::count' => 
  array (
    0 => 'int',
  ),
  'http\\env\\response::current' => 
  array (
    0 => 'mixed',
  ),
  'http\\env\\response::detach' => 
  array (
    0 => 'http\\Message',
  ),
  'http\\env\\response::getbody' => 
  array (
    0 => 'http\\Message\\Body',
  ),
  'http\\env\\response::getheader' => 
  array (
    0 => 'http\\Header|mixed',
    'header' => 'string',
    'into_class=' => 'mixed',
  ),
  'http\\env\\response::getheaders' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'http\\env\\response::gethttpversion' => 
  array (
    0 => 'string',
  ),
  'http\\env\\response::getinfo' => 
  array (
    0 => 'null|string',
  ),
  'http\\env\\response::getparentmessage' => 
  array (
    0 => 'http\\Message',
  ),
  'http\\env\\response::getrequestmethod' => 
  array (
    0 => 'false|string',
  ),
  'http\\env\\response::getrequesturl' => 
  array (
    0 => 'false|string',
  ),
  'http\\env\\response::getresponsecode' => 
  array (
    0 => 'false|int',
  ),
  'http\\env\\response::getresponsestatus' => 
  array (
    0 => 'false|string',
  ),
  'http\\env\\response::gettype' => 
  array (
    0 => 'int',
  ),
  'http\\env\\response::iscachedbyetag' => 
  array (
    0 => 'int',
    'header_name=' => 'string',
  ),
  'http\\env\\response::iscachedbylastmodified' => 
  array (
    0 => 'int',
    'header_name=' => 'string',
  ),
  'http\\env\\response::ismultipart' => 
  array (
    0 => 'bool',
    '&boundary=' => 'mixed',
  ),
  'http\\env\\response::key' => 
  array (
    0 => 'int|string',
  ),
  'http\\env\\response::next' => 
  array (
    0 => 'void',
  ),
  'http\\env\\response::prepend' => 
  array (
    0 => 'http\\Message',
    'message' => 'http\\Message',
    'top=' => 'mixed',
  ),
  'http\\env\\response::reverse' => 
  array (
    0 => 'http\\Message',
  ),
  'http\\env\\response::rewind' => 
  array (
    0 => 'void',
  ),
  'http\\env\\response::send' => 
  array (
    0 => 'bool',
    'stream=' => 'resource',
  ),
  'http\\env\\response::serialize' => 
  array (
    0 => 'string',
  ),
  'http\\env\\response::setbody' => 
  array (
    0 => 'http\\Message',
    'body' => 'http\\Message\\Body',
  ),
  'http\\env\\response::setcachecontrol' => 
  array (
    0 => 'http\\Env\\Response',
    'cache_control' => 'string',
  ),
  'http\\env\\response::setcontentdisposition' => 
  array (
    0 => 'http\\Env\\Response',
    'disposition_params' => 'array<array-key, mixed>',
  ),
  'http\\env\\response::setcontentencoding' => 
  array (
    0 => 'http\\Env\\Response',
    'content_encoding' => 'int',
  ),
  'http\\env\\response::setcontenttype' => 
  array (
    0 => 'http\\Env\\Response',
    'content_type' => 'string',
  ),
  'http\\env\\response::setcookie' => 
  array (
    0 => 'http\\Env\\Response',
    'cookie' => 'mixed',
  ),
  'http\\env\\response::setenvrequest' => 
  array (
    0 => 'http\\Env\\Response',
    'env_request' => 'http\\Message',
  ),
  'http\\env\\response::setetag' => 
  array (
    0 => 'http\\Env\\Response',
    'etag' => 'string',
  ),
  'http\\env\\response::setheader' => 
  array (
    0 => 'http\\Message',
    'header' => 'string',
    'value=' => 'mixed',
  ),
  'http\\env\\response::setheaders' => 
  array (
    0 => 'http\\Message',
    'headers' => 'array<array-key, mixed>',
  ),
  'http\\env\\response::sethttpversion' => 
  array (
    0 => 'http\\Message',
    'http_version' => 'string',
  ),
  'http\\env\\response::setinfo' => 
  array (
    0 => 'http\\Message',
    'http_info' => 'string',
  ),
  'http\\env\\response::setlastmodified' => 
  array (
    0 => 'http\\Env\\Response',
    'last_modified' => 'int',
  ),
  'http\\env\\response::setrequestmethod' => 
  array (
    0 => 'http\\Message',
    'request_method' => 'string',
  ),
  'http\\env\\response::setrequesturl' => 
  array (
    0 => 'http\\Message',
    'url' => 'string',
  ),
  'http\\env\\response::setresponsecode' => 
  array (
    0 => 'http\\Message',
    'response_code' => 'int',
    'strict=' => 'mixed',
  ),
  'http\\env\\response::setresponsestatus' => 
  array (
    0 => 'http\\Message',
    'response_status' => 'string',
  ),
  'http\\env\\response::setthrottlerate' => 
  array (
    0 => 'http\\Env\\Response',
    'chunk_size' => 'int',
    'delay=' => 'float|int',
  ),
  'http\\env\\response::settype' => 
  array (
    0 => 'http\\Message',
    'type' => 'int',
  ),
  'http\\env\\response::splitmultipartbody' => 
  array (
    0 => 'http\\Message',
  ),
  'http\\env\\response::tocallback' => 
  array (
    0 => 'http\\Message',
    'callback' => 'callable',
  ),
  'http\\env\\response::tostream' => 
  array (
    0 => 'http\\Message',
    'stream' => 'resource',
  ),
  'http\\env\\response::tostring' => 
  array (
    0 => 'string',
    'include_parent=' => 'mixed',
  ),
  'http\\env\\response::unserialize' => 
  array (
    0 => 'void',
    'serialized' => 'string',
  ),
  'http\\env\\response::valid' => 
  array (
    0 => 'bool',
  ),
  'http\\header::__construct' => 
  array (
    0 => 'void',
    'name=' => 'mixed',
    'value=' => 'mixed',
  ),
  'http\\header::__tostring' => 
  array (
    0 => 'string',
  ),
  'http\\header::getparams' => 
  array (
    0 => 'http\\Params',
    'param_sep=' => 'mixed',
    'arg_sep=' => 'mixed',
    'val_sep=' => 'mixed',
    'flags=' => 'mixed',
  ),
  'http\\header::match' => 
  array (
    0 => 'bool',
    'value' => 'string',
    'flags=' => 'mixed',
  ),
  'http\\header::negotiate' => 
  array (
    0 => 'null|string',
    'supported' => 'array<array-key, mixed>',
    '&result=' => 'mixed',
  ),
  'http\\header::parse' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'string' => 'string',
    'header_class=' => 'mixed',
  ),
  'http\\header::serialize' => 
  array (
    0 => 'string',
  ),
  'http\\header::tostring' => 
  array (
    0 => 'string',
  ),
  'http\\header::unserialize' => 
  array (
    0 => 'void',
    'serialized' => 'string',
  ),
  'http\\header\\parser::getstate' => 
  array (
    0 => 'int',
  ),
  'http\\header\\parser::parse' => 
  array (
    0 => 'int',
    'data' => 'string',
    'flags' => 'int',
    '&headers' => 'array<array-key, mixed>',
  ),
  'http\\header\\parser::stream' => 
  array (
    0 => 'int',
    'stream' => 'resource',
    'flags' => 'int',
    '&headers' => 'array<array-key, mixed>',
  ),
  'http\\message::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'greedy=' => 'bool',
  ),
  'http\\message::__tostring' => 
  array (
    0 => 'string',
  ),
  'http\\message::addbody' => 
  array (
    0 => 'http\\Message',
    'body' => 'http\\Message\\Body',
  ),
  'http\\message::addheader' => 
  array (
    0 => 'http\\Message',
    'header' => 'string',
    'value' => 'mixed',
  ),
  'http\\message::addheaders' => 
  array (
    0 => 'http\\Message',
    'headers' => 'array<array-key, mixed>',
    'append=' => 'mixed',
  ),
  'http\\message::count' => 
  array (
    0 => 'int',
  ),
  'http\\message::current' => 
  array (
    0 => 'mixed',
  ),
  'http\\message::detach' => 
  array (
    0 => 'http\\Message',
  ),
  'http\\message::getbody' => 
  array (
    0 => 'http\\Message\\Body',
  ),
  'http\\message::getheader' => 
  array (
    0 => 'http\\Header|mixed',
    'header' => 'string',
    'into_class=' => 'mixed',
  ),
  'http\\message::getheaders' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'http\\message::gethttpversion' => 
  array (
    0 => 'string',
  ),
  'http\\message::getinfo' => 
  array (
    0 => 'null|string',
  ),
  'http\\message::getparentmessage' => 
  array (
    0 => 'http\\Message',
  ),
  'http\\message::getrequestmethod' => 
  array (
    0 => 'false|string',
  ),
  'http\\message::getrequesturl' => 
  array (
    0 => 'false|string',
  ),
  'http\\message::getresponsecode' => 
  array (
    0 => 'false|int',
  ),
  'http\\message::getresponsestatus' => 
  array (
    0 => 'false|string',
  ),
  'http\\message::gettype' => 
  array (
    0 => 'int',
  ),
  'http\\message::ismultipart' => 
  array (
    0 => 'bool',
    '&boundary=' => 'mixed',
  ),
  'http\\message::key' => 
  array (
    0 => 'int|string',
  ),
  'http\\message::next' => 
  array (
    0 => 'void',
  ),
  'http\\message::prepend' => 
  array (
    0 => 'http\\Message',
    'message' => 'http\\Message',
    'top=' => 'mixed',
  ),
  'http\\message::reverse' => 
  array (
    0 => 'http\\Message',
  ),
  'http\\message::rewind' => 
  array (
    0 => 'void',
  ),
  'http\\message::serialize' => 
  array (
    0 => 'string',
  ),
  'http\\message::setbody' => 
  array (
    0 => 'http\\Message',
    'body' => 'http\\Message\\Body',
  ),
  'http\\message::setheader' => 
  array (
    0 => 'http\\Message',
    'header' => 'string',
    'value=' => 'mixed',
  ),
  'http\\message::setheaders' => 
  array (
    0 => 'http\\Message',
    'headers' => 'array<array-key, mixed>',
  ),
  'http\\message::sethttpversion' => 
  array (
    0 => 'http\\Message',
    'http_version' => 'string',
  ),
  'http\\message::setinfo' => 
  array (
    0 => 'http\\Message',
    'http_info' => 'string',
  ),
  'http\\message::setrequestmethod' => 
  array (
    0 => 'http\\Message',
    'request_method' => 'string',
  ),
  'http\\message::setrequesturl' => 
  array (
    0 => 'http\\Message',
    'url' => 'string',
  ),
  'http\\message::setresponsecode' => 
  array (
    0 => 'http\\Message',
    'response_code' => 'int',
    'strict=' => 'mixed',
  ),
  'http\\message::setresponsestatus' => 
  array (
    0 => 'http\\Message',
    'response_status' => 'string',
  ),
  'http\\message::settype' => 
  array (
    0 => 'http\\Message',
    'type' => 'int',
  ),
  'http\\message::splitmultipartbody' => 
  array (
    0 => 'http\\Message',
  ),
  'http\\message::tocallback' => 
  array (
    0 => 'http\\Message',
    'callback' => 'callable',
  ),
  'http\\message::tostream' => 
  array (
    0 => 'http\\Message',
    'stream' => 'resource',
  ),
  'http\\message::tostring' => 
  array (
    0 => 'string',
    'include_parent=' => 'mixed',
  ),
  'http\\message::unserialize' => 
  array (
    0 => 'void',
    'serialized' => 'string',
  ),
  'http\\message::valid' => 
  array (
    0 => 'bool',
  ),
  'http\\message\\body::__construct' => 
  array (
    0 => 'void',
    'stream=' => 'resource',
  ),
  'http\\message\\body::__tostring' => 
  array (
    0 => 'string',
  ),
  'http\\message\\body::addform' => 
  array (
    0 => 'http\\Message\\Body',
    'fields=' => 'array<array-key, mixed>|null',
    'files=' => 'array<array-key, mixed>|null',
  ),
  'http\\message\\body::addpart' => 
  array (
    0 => 'http\\Message\\Body',
    'message' => 'http\\Message',
  ),
  'http\\message\\body::append' => 
  array (
    0 => 'http\\Message\\Body',
    'string' => 'string',
  ),
  'http\\message\\body::etag' => 
  array (
    0 => 'false|string',
  ),
  'http\\message\\body::getboundary' => 
  array (
    0 => 'null|string',
  ),
  'http\\message\\body::getresource' => 
  array (
    0 => 'resource',
  ),
  'http\\message\\body::serialize' => 
  array (
    0 => 'string',
  ),
  'http\\message\\body::stat' => 
  array (
    0 => 'int|object',
    'field=' => 'mixed',
  ),
  'http\\message\\body::tocallback' => 
  array (
    0 => 'http\\Message\\Body',
    'callback' => 'callable',
    'offset=' => 'mixed',
    'maxlen=' => 'mixed',
  ),
  'http\\message\\body::tostream' => 
  array (
    0 => 'http\\Message\\Body',
    'stream' => 'resource',
    'offset=' => 'mixed',
    'maxlen=' => 'mixed',
  ),
  'http\\message\\body::tostring' => 
  array (
    0 => 'string',
  ),
  'http\\message\\body::unserialize' => 
  array (
    0 => 'void',
    'serialized' => 'string',
  ),
  'http\\message\\parser::getstate' => 
  array (
    0 => 'int',
  ),
  'http\\message\\parser::parse' => 
  array (
    0 => 'int',
    'data' => 'string',
    'flags' => 'int',
    '&message' => 'http\\Message',
  ),
  'http\\message\\parser::stream' => 
  array (
    0 => 'int',
    'stream' => 'resource',
    'flags' => 'int',
    '&message' => 'http\\Message',
  ),
  'http\\params::__construct' => 
  array (
    0 => 'void',
    'params=' => 'mixed',
    'param_sep=' => 'mixed',
    'arg_sep=' => 'mixed',
    'val_sep=' => 'mixed',
    'flags=' => 'mixed',
  ),
  'http\\params::__tostring' => 
  array (
    0 => 'string',
  ),
  'http\\params::offsetexists' => 
  array (
    0 => 'bool',
    'name' => 'int|string',
  ),
  'http\\params::offsetget' => 
  array (
    0 => 'mixed',
    'name' => 'int|string',
  ),
  'http\\params::offsetset' => 
  array (
    0 => 'void',
    'name' => 'int|null|string',
    'value' => 'mixed',
  ),
  'http\\params::offsetunset' => 
  array (
    0 => 'void',
    'name' => 'int|string',
  ),
  'http\\params::toarray' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'http\\params::tostring' => 
  array (
    0 => 'string',
  ),
  'http\\querystring::__construct' => 
  array (
    0 => 'void',
    'querystring' => 'string',
  ),
  'http\\querystring::__tostring' => 
  array (
    0 => 'string',
  ),
  'http\\querystring::get' => 
  array (
    0 => 'http\\QueryString|mixed|string',
    'name=' => 'string',
    'type=' => 'mixed',
    'defval=' => 'mixed',
    'delete=' => 'bool',
  ),
  'http\\querystring::getarray' => 
  array (
    0 => 'array<array-key, mixed>|mixed',
    'name' => 'string',
    'defval=' => 'mixed',
    'delete=' => 'bool',
  ),
  'http\\querystring::getbool' => 
  array (
    0 => 'bool|mixed',
    'name' => 'string',
    'defval=' => 'mixed',
    'delete=' => 'bool',
  ),
  'http\\querystring::getfloat' => 
  array (
    0 => 'float|mixed',
    'name' => 'string',
    'defval=' => 'mixed',
    'delete=' => 'bool',
  ),
  'http\\querystring::getglobalinstance' => 
  array (
    0 => 'http\\QueryString',
  ),
  'http\\querystring::getint' => 
  array (
    0 => 'int|mixed',
    'name' => 'string',
    'defval=' => 'mixed',
    'delete=' => 'bool',
  ),
  'http\\querystring::getiterator' => 
  array (
    0 => 'IteratorAggregate',
  ),
  'http\\querystring::getobject' => 
  array (
    0 => 'mixed|object',
    'name' => 'string',
    'defval=' => 'mixed',
    'delete=' => 'bool',
  ),
  'http\\querystring::getstring' => 
  array (
    0 => 'mixed|string',
    'name' => 'string',
    'defval=' => 'mixed',
    'delete=' => 'bool',
  ),
  'http\\querystring::mod' => 
  array (
    0 => 'http\\QueryString',
    'params=' => 'mixed',
  ),
  'http\\querystring::offsetexists' => 
  array (
    0 => 'bool',
    'offset' => 'int|string',
  ),
  'http\\querystring::offsetget' => 
  array (
    0 => 'mixed|null',
    'offset' => 'int|string',
  ),
  'http\\querystring::offsetset' => 
  array (
    0 => 'void',
    'offset' => 'int|null|string',
    'value' => 'mixed',
  ),
  'http\\querystring::offsetunset' => 
  array (
    0 => 'void',
    'offset' => 'int|string',
  ),
  'http\\querystring::serialize' => 
  array (
    0 => 'string',
  ),
  'http\\querystring::set' => 
  array (
    0 => 'http\\QueryString',
    'params' => 'mixed',
  ),
  'http\\querystring::toarray' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'http\\querystring::tostring' => 
  array (
    0 => 'string',
  ),
  'http\\querystring::unserialize' => 
  array (
    0 => 'void',
    'serialized' => 'string',
  ),
  'http\\querystring::xlate' => 
  array (
    0 => 'http\\QueryString',
  ),
  'http\\url::__construct' => 
  array (
    0 => 'void',
    'old_url=' => 'mixed',
    'new_url=' => 'mixed',
    'flags=' => 'int',
  ),
  'http\\url::__tostring' => 
  array (
    0 => 'string',
  ),
  'http\\url::mod' => 
  array (
    0 => 'http\\Url',
    'parts' => 'mixed',
    'flags=' => 'float|int|mixed',
  ),
  'http\\url::toarray' => 
  array (
    0 => 'array<array-key, string>',
  ),
  'http\\url::tostring' => 
  array (
    0 => 'string',
  ),
  'http_build_cookie' => 
  array (
    0 => 'string',
    'cookie' => 'array<array-key, mixed>',
  ),
  'http_build_query' => 
  array (
    0 => 'string',
    'data' => 'array<array-key, mixed>|object',
    'numeric_prefix=' => 'string',
    'arg_separator=' => 'null|string',
    'encoding_type=' => 'int',
  ),
  'http_build_str' => 
  array (
    0 => 'string',
    'query' => 'array<array-key, mixed>',
    'prefix=' => 'null|string',
    'arg_separator=' => 'string',
  ),
  'http_build_url' => 
  array (
    0 => 'string',
    'url=' => 'array<array-key, mixed>|string',
    'parts=' => 'array<array-key, mixed>|string',
    'flags=' => 'int',
    'new_url=' => 'array<array-key, mixed>',
  ),
  'http_cache_etag' => 
  array (
    0 => 'bool',
    'etag=' => 'string',
  ),
  'http_cache_last_modified' => 
  array (
    0 => 'bool',
    'timestamp_or_expires=' => 'int',
  ),
  'http_chunked_decode' => 
  array (
    0 => 'false|string',
    'encoded' => 'string',
  ),
  'http_date' => 
  array (
    0 => 'string',
    'timestamp=' => 'int',
  ),
  'http_deflate' => 
  array (
    0 => 'null|string',
    'data' => 'string',
    'flags=' => 'int',
  ),
  'http_get' => 
  array (
    0 => 'string',
    'url' => 'string',
    'options=' => 'array<array-key, mixed>',
    'info=' => 'array<array-key, mixed>',
  ),
  'http_get_request_body' => 
  array (
    0 => 'null|string',
  ),
  'http_get_request_body_stream' => 
  array (
    0 => 'null|resource',
  ),
  'http_get_request_headers' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'http_head' => 
  array (
    0 => 'string',
    'url' => 'string',
    'options=' => 'array<array-key, mixed>',
    'info=' => 'array<array-key, mixed>',
  ),
  'http_inflate' => 
  array (
    0 => 'null|string',
    'data' => 'string',
  ),
  'http_match_etag' => 
  array (
    0 => 'bool',
    'etag' => 'string',
    'for_range=' => 'bool',
  ),
  'http_match_modified' => 
  array (
    0 => 'bool',
    'timestamp=' => 'int',
    'for_range=' => 'bool',
  ),
  'http_match_request_header' => 
  array (
    0 => 'bool',
    'header' => 'string',
    'value' => 'string',
    'match_case=' => 'bool',
  ),
  'http_negotiate_charset' => 
  array (
    0 => 'string',
    'supported' => 'array<array-key, mixed>',
    'result=' => 'array<array-key, mixed>',
  ),
  'http_negotiate_content_type' => 
  array (
    0 => 'string',
    'supported' => 'array<array-key, mixed>',
    'result=' => 'array<array-key, mixed>',
  ),
  'http_negotiate_language' => 
  array (
    0 => 'string',
    'supported' => 'array<array-key, mixed>',
    'result=' => 'array<array-key, mixed>',
  ),
  'http_parse_cookie' => 
  array (
    0 => 'false|stdClass',
    'cookie' => 'string',
    'flags=' => 'int',
    'allowed_extras=' => 'array<array-key, mixed>',
  ),
  'http_parse_headers' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'header' => 'string',
  ),
  'http_parse_message' => 
  array (
    0 => 'object',
    'message' => 'string',
  ),
  'http_parse_params' => 
  array (
    0 => 'stdClass',
    'param' => 'string',
    'flags=' => 'int',
  ),
  'http_persistent_handles_clean' => 
  array (
    0 => 'string',
    'ident=' => 'string',
  ),
  'http_persistent_handles_count' => 
  array (
    0 => 'false|stdClass',
  ),
  'http_persistent_handles_ident' => 
  array (
    0 => 'false|string',
    'ident=' => 'string',
  ),
  'http_post_data' => 
  array (
    0 => 'string',
    'url' => 'string',
    'data' => 'string',
    'options=' => 'array<array-key, mixed>',
    'info=' => 'array<array-key, mixed>',
  ),
  'http_post_fields' => 
  array (
    0 => 'string',
    'url' => 'string',
    'data' => 'array<array-key, mixed>',
    'files=' => 'array<array-key, mixed>',
    'options=' => 'array<array-key, mixed>',
    'info=' => 'array<array-key, mixed>',
  ),
  'http_put_data' => 
  array (
    0 => 'string',
    'url' => 'string',
    'data' => 'string',
    'options=' => 'array<array-key, mixed>',
    'info=' => 'array<array-key, mixed>',
  ),
  'http_put_file' => 
  array (
    0 => 'string',
    'url' => 'string',
    'file' => 'string',
    'options=' => 'array<array-key, mixed>',
    'info=' => 'array<array-key, mixed>',
  ),
  'http_put_stream' => 
  array (
    0 => 'string',
    'url' => 'string',
    'stream' => 'resource',
    'options=' => 'array<array-key, mixed>',
    'info=' => 'array<array-key, mixed>',
  ),
  'http_redirect' => 
  array (
    0 => 'false|int',
    'url=' => 'string',
    'params=' => 'array<array-key, mixed>',
    'session=' => 'bool',
    'status=' => 'int',
  ),
  'http_request' => 
  array (
    0 => 'string',
    'method' => 'int',
    'url' => 'string',
    'body=' => 'string',
    'options=' => 'array<array-key, mixed>',
    'info=' => 'array<array-key, mixed>',
  ),
  'http_request_body_encode' => 
  array (
    0 => 'false|string',
    'fields' => 'array<array-key, mixed>',
    'files' => 'array<array-key, mixed>',
  ),
  'http_request_method_exists' => 
  array (
    0 => 'bool',
    'method' => 'mixed',
  ),
  'http_request_method_name' => 
  array (
    0 => 'false|string',
    'method' => 'int',
  ),
  'http_request_method_register' => 
  array (
    0 => 'false|int',
    'method' => 'string',
  ),
  'http_request_method_unregister' => 
  array (
    0 => 'bool',
    'method' => 'mixed',
  ),
  'http_response_code' => 
  array (
    0 => 'bool|int',
    'response_code=' => 'int',
  ),
  'http_send_content_disposition' => 
  array (
    0 => 'bool',
    'filename' => 'string',
    'inline=' => 'bool',
  ),
  'http_send_content_type' => 
  array (
    0 => 'bool',
    'content_type=' => 'string',
  ),
  'http_send_data' => 
  array (
    0 => 'bool',
    'data' => 'string',
  ),
  'http_send_file' => 
  array (
    0 => 'bool',
    'file' => 'string',
  ),
  'http_send_last_modified' => 
  array (
    0 => 'bool',
    'timestamp=' => 'int',
  ),
  'http_send_status' => 
  array (
    0 => 'bool',
    'status' => 'int',
  ),
  'http_send_stream' => 
  array (
    0 => 'bool',
    'stream' => 'resource',
  ),
  'http_support' => 
  array (
    0 => 'int',
    'feature=' => 'int',
  ),
  'http_throttle' => 
  array (
    0 => 'void',
    'sec' => 'float',
    'bytes=' => 'int',
  ),
  'httpdeflatestream::__construct' => 
  array (
    0 => 'void',
    'flags=' => 'int',
  ),
  'httpdeflatestream::factory' => 
  array (
    0 => 'HttpDeflateStream',
    'flags=' => 'int',
    'class_name=' => 'string',
  ),
  'httpdeflatestream::finish' => 
  array (
    0 => 'string',
    'data=' => 'string',
  ),
  'httpdeflatestream::flush' => 
  array (
    0 => 'false|string',
    'data=' => 'string',
  ),
  'httpdeflatestream::update' => 
  array (
    0 => 'false|string',
    'data' => 'string',
  ),
  'httpinflatestream::__construct' => 
  array (
    0 => 'void',
    'flags=' => 'int',
  ),
  'httpinflatestream::factory' => 
  array (
    0 => 'HttpInflateStream',
    'flags=' => 'int',
    'class_name=' => 'string',
  ),
  'httpinflatestream::finish' => 
  array (
    0 => 'string',
    'data=' => 'string',
  ),
  'httpinflatestream::flush' => 
  array (
    0 => 'false|string',
    'data=' => 'string',
  ),
  'httpinflatestream::update' => 
  array (
    0 => 'false|string',
    'data' => 'string',
  ),
  'httpmessage::__construct' => 
  array (
    0 => 'void',
    'message=' => 'string',
  ),
  'httpmessage::__tostring' => 
  array (
    0 => 'string',
  ),
  'httpmessage::addheaders' => 
  array (
    0 => 'void',
    'headers' => 'array<array-key, mixed>',
    'append=' => 'bool',
  ),
  'httpmessage::count' => 
  array (
    0 => 'int',
  ),
  'httpmessage::current' => 
  array (
    0 => 'mixed',
  ),
  'httpmessage::detach' => 
  array (
    0 => 'HttpMessage',
  ),
  'httpmessage::factory' => 
  array (
    0 => 'HttpMessage|null',
    'raw_message=' => 'string',
    'class_name=' => 'string',
  ),
  'httpmessage::fromenv' => 
  array (
    0 => 'HttpMessage|null',
    'message_type' => 'int',
    'class_name=' => 'string',
  ),
  'httpmessage::fromstring' => 
  array (
    0 => 'HttpMessage|null',
    'raw_message=' => 'string',
    'class_name=' => 'string',
  ),
  'httpmessage::getbody' => 
  array (
    0 => 'string',
  ),
  'httpmessage::getheader' => 
  array (
    0 => 'null|string',
    'header' => 'string',
  ),
  'httpmessage::getheaders' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'httpmessage::gethttpversion' => 
  array (
    0 => 'string',
  ),
  'httpmessage::getinfo' => 
  array (
    0 => 'mixed',
  ),
  'httpmessage::getparentmessage' => 
  array (
    0 => 'HttpMessage',
  ),
  'httpmessage::getrequestmethod' => 
  array (
    0 => 'false|string',
  ),
  'httpmessage::getrequesturl' => 
  array (
    0 => 'false|string',
  ),
  'httpmessage::getresponsecode' => 
  array (
    0 => 'int',
  ),
  'httpmessage::getresponsestatus' => 
  array (
    0 => 'string',
  ),
  'httpmessage::gettype' => 
  array (
    0 => 'int',
  ),
  'httpmessage::guesscontenttype' => 
  array (
    0 => 'false|string',
    'magic_file' => 'string',
    'magic_mode=' => 'int',
  ),
  'httpmessage::key' => 
  array (
    0 => 'int|string',
  ),
  'httpmessage::next' => 
  array (
    0 => 'void',
  ),
  'httpmessage::prepend' => 
  array (
    0 => 'void',
    'message' => 'HttpMessage',
    'top=' => 'bool',
  ),
  'httpmessage::reverse' => 
  array (
    0 => 'HttpMessage',
  ),
  'httpmessage::rewind' => 
  array (
    0 => 'void',
  ),
  'httpmessage::send' => 
  array (
    0 => 'bool',
  ),
  'httpmessage::serialize' => 
  array (
    0 => 'string',
  ),
  'httpmessage::setbody' => 
  array (
    0 => 'void',
    'body' => 'string',
  ),
  'httpmessage::setheaders' => 
  array (
    0 => 'void',
    'headers' => 'array<array-key, mixed>',
  ),
  'httpmessage::sethttpversion' => 
  array (
    0 => 'bool',
    'version' => 'string',
  ),
  'httpmessage::setinfo' => 
  array (
    0 => 'mixed',
    'http_info' => 'mixed',
  ),
  'httpmessage::setrequestmethod' => 
  array (
    0 => 'bool',
    'method' => 'string',
  ),
  'httpmessage::setrequesturl' => 
  array (
    0 => 'bool',
    'url' => 'string',
  ),
  'httpmessage::setresponsecode' => 
  array (
    0 => 'bool',
    'code' => 'int',
  ),
  'httpmessage::setresponsestatus' => 
  array (
    0 => 'bool',
    'status' => 'string',
  ),
  'httpmessage::settype' => 
  array (
    0 => 'void',
    'type' => 'int',
  ),
  'httpmessage::tomessagetypeobject' => 
  array (
    0 => 'HttpRequest|HttpResponse|null',
  ),
  'httpmessage::tostring' => 
  array (
    0 => 'string',
    'include_parent=' => 'bool',
  ),
  'httpmessage::unserialize' => 
  array (
    0 => 'void',
    'serialized' => 'string',
  ),
  'httpmessage::valid' => 
  array (
    0 => 'bool',
  ),
  'httpquerystring::__construct' => 
  array (
    0 => 'void',
    'global=' => 'bool',
    'add=' => 'mixed',
  ),
  'httpquerystring::__tostring' => 
  array (
    0 => 'string',
  ),
  'httpquerystring::factory' => 
  array (
    0 => 'mixed',
    'global' => 'mixed',
    'params' => 'mixed',
    'class_name' => 'mixed',
  ),
  'httpquerystring::get' => 
  array (
    0 => 'mixed',
    'key=' => 'string',
    'type=' => 'mixed',
    'defval=' => 'mixed',
    'delete=' => 'bool',
  ),
  'httpquerystring::getarray' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
    'defval' => 'mixed',
    'delete' => 'mixed',
  ),
  'httpquerystring::getbool' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
    'defval' => 'mixed',
    'delete' => 'mixed',
  ),
  'httpquerystring::getfloat' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
    'defval' => 'mixed',
    'delete' => 'mixed',
  ),
  'httpquerystring::getint' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
    'defval' => 'mixed',
    'delete' => 'mixed',
  ),
  'httpquerystring::getobject' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
    'defval' => 'mixed',
    'delete' => 'mixed',
  ),
  'httpquerystring::getstring' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
    'defval' => 'mixed',
    'delete' => 'mixed',
  ),
  'httpquerystring::mod' => 
  array (
    0 => 'HttpQueryString',
    'params' => 'mixed',
  ),
  'httpquerystring::offsetexists' => 
  array (
    0 => 'bool',
    'offset' => 'int|string',
  ),
  'httpquerystring::offsetget' => 
  array (
    0 => 'mixed',
    'offset' => 'int|string',
  ),
  'httpquerystring::offsetset' => 
  array (
    0 => 'void',
    'offset' => 'int|null|string',
    'value' => 'mixed',
  ),
  'httpquerystring::offsetunset' => 
  array (
    0 => 'void',
    'offset' => 'int|string',
  ),
  'httpquerystring::serialize' => 
  array (
    0 => 'string',
  ),
  'httpquerystring::set' => 
  array (
    0 => 'string',
    'params' => 'mixed',
  ),
  'httpquerystring::singleton' => 
  array (
    0 => 'HttpQueryString',
    'global=' => 'bool',
  ),
  'httpquerystring::toarray' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'httpquerystring::tostring' => 
  array (
    0 => 'string',
  ),
  'httpquerystring::unserialize' => 
  array (
    0 => 'void',
    'serialized' => 'string',
  ),
  'httpquerystring::xlate' => 
  array (
    0 => 'bool',
    'ie' => 'string',
    'oe' => 'string',
  ),
  'httprequest::__construct' => 
  array (
    0 => 'void',
    'url=' => 'string',
    'request_method=' => 'int',
    'options=' => 'array<array-key, mixed>',
  ),
  'httprequest::addbody' => 
  array (
    0 => 'mixed',
    'request_body_data' => 'mixed',
  ),
  'httprequest::addcookies' => 
  array (
    0 => 'bool',
    'cookies' => 'array<array-key, mixed>',
  ),
  'httprequest::addheaders' => 
  array (
    0 => 'bool',
    'headers' => 'array<array-key, mixed>',
  ),
  'httprequest::addpostfields' => 
  array (
    0 => 'bool',
    'post_data' => 'array<array-key, mixed>',
  ),
  'httprequest::addpostfile' => 
  array (
    0 => 'bool',
    'name' => 'string',
    'file' => 'string',
    'content_type=' => 'string',
  ),
  'httprequest::addputdata' => 
  array (
    0 => 'bool',
    'put_data' => 'string',
  ),
  'httprequest::addquerydata' => 
  array (
    0 => 'bool',
    'query_params' => 'array<array-key, mixed>',
  ),
  'httprequest::addrawpostdata' => 
  array (
    0 => 'bool',
    'raw_post_data' => 'string',
  ),
  'httprequest::addssloptions' => 
  array (
    0 => 'bool',
    'options' => 'array<array-key, mixed>',
  ),
  'httprequest::clearhistory' => 
  array (
    0 => 'void',
  ),
  'httprequest::enablecookies' => 
  array (
    0 => 'bool',
  ),
  'httprequest::encodebody' => 
  array (
    0 => 'mixed',
    'fields' => 'mixed',
    'files' => 'mixed',
  ),
  'httprequest::factory' => 
  array (
    0 => 'mixed',
    'url' => 'mixed',
    'method' => 'mixed',
    'options' => 'mixed',
    'class_name' => 'mixed',
  ),
  'httprequest::flushcookies' => 
  array (
    0 => 'mixed',
  ),
  'httprequest::get' => 
  array (
    0 => 'mixed',
    'url' => 'mixed',
    'options' => 'mixed',
    '&info' => 'mixed',
  ),
  'httprequest::getbody' => 
  array (
    0 => 'mixed',
  ),
  'httprequest::getcontenttype' => 
  array (
    0 => 'string',
  ),
  'httprequest::getcookies' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'httprequest::getheaders' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'httprequest::gethistory' => 
  array (
    0 => 'HttpMessage',
  ),
  'httprequest::getmethod' => 
  array (
    0 => 'int',
  ),
  'httprequest::getoptions' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'httprequest::getpostfields' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'httprequest::getpostfiles' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'httprequest::getputdata' => 
  array (
    0 => 'string',
  ),
  'httprequest::getputfile' => 
  array (
    0 => 'string',
  ),
  'httprequest::getquerydata' => 
  array (
    0 => 'string',
  ),
  'httprequest::getrawpostdata' => 
  array (
    0 => 'string',
  ),
  'httprequest::getrawrequestmessage' => 
  array (
    0 => 'string',
  ),
  'httprequest::getrawresponsemessage' => 
  array (
    0 => 'string',
  ),
  'httprequest::getrequestmessage' => 
  array (
    0 => 'HttpMessage',
  ),
  'httprequest::getresponsebody' => 
  array (
    0 => 'string',
  ),
  'httprequest::getresponsecode' => 
  array (
    0 => 'int',
  ),
  'httprequest::getresponsecookies' => 
  array (
    0 => 'array<array-key, stdClass>',
    'flags=' => 'int',
    'allowed_extras=' => 'array<array-key, mixed>',
  ),
  'httprequest::getresponsedata' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'httprequest::getresponseheader' => 
  array (
    0 => 'mixed',
    'name=' => 'string',
  ),
  'httprequest::getresponseinfo' => 
  array (
    0 => 'mixed',
    'name=' => 'string',
  ),
  'httprequest::getresponsemessage' => 
  array (
    0 => 'HttpMessage',
  ),
  'httprequest::getresponsestatus' => 
  array (
    0 => 'string',
  ),
  'httprequest::getssloptions' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'httprequest::geturl' => 
  array (
    0 => 'string',
  ),
  'httprequest::head' => 
  array (
    0 => 'mixed',
    'url' => 'mixed',
    'options' => 'mixed',
    '&info' => 'mixed',
  ),
  'httprequest::methodexists' => 
  array (
    0 => 'mixed',
    'method' => 'mixed',
  ),
  'httprequest::methodname' => 
  array (
    0 => 'mixed',
    'method_id' => 'mixed',
  ),
  'httprequest::methodregister' => 
  array (
    0 => 'mixed',
    'method_name' => 'mixed',
  ),
  'httprequest::methodunregister' => 
  array (
    0 => 'mixed',
    'method' => 'mixed',
  ),
  'httprequest::postdata' => 
  array (
    0 => 'mixed',
    'url' => 'mixed',
    'data' => 'mixed',
    'options' => 'mixed',
    '&info' => 'mixed',
  ),
  'httprequest::postfields' => 
  array (
    0 => 'mixed',
    'url' => 'mixed',
    'data' => 'mixed',
    'options' => 'mixed',
    '&info' => 'mixed',
  ),
  'httprequest::putdata' => 
  array (
    0 => 'mixed',
    'url' => 'mixed',
    'data' => 'mixed',
    'options' => 'mixed',
    '&info' => 'mixed',
  ),
  'httprequest::putfile' => 
  array (
    0 => 'mixed',
    'url' => 'mixed',
    'file' => 'mixed',
    'options' => 'mixed',
    '&info' => 'mixed',
  ),
  'httprequest::putstream' => 
  array (
    0 => 'mixed',
    'url' => 'mixed',
    'stream' => 'mixed',
    'options' => 'mixed',
    '&info' => 'mixed',
  ),
  'httprequest::resetcookies' => 
  array (
    0 => 'bool',
    'session_only=' => 'bool',
  ),
  'httprequest::send' => 
  array (
    0 => 'HttpMessage',
  ),
  'httprequest::setbody' => 
  array (
    0 => 'bool',
    'request_body_data=' => 'string',
  ),
  'httprequest::setcontenttype' => 
  array (
    0 => 'bool',
    'content_type' => 'string',
  ),
  'httprequest::setcookies' => 
  array (
    0 => 'bool',
    'cookies=' => 'array<array-key, mixed>',
  ),
  'httprequest::setheaders' => 
  array (
    0 => 'bool',
    'headers=' => 'array<array-key, mixed>',
  ),
  'httprequest::setmethod' => 
  array (
    0 => 'bool',
    'request_method' => 'int',
  ),
  'httprequest::setoptions' => 
  array (
    0 => 'bool',
    'options=' => 'array<array-key, mixed>',
  ),
  'httprequest::setpostfields' => 
  array (
    0 => 'bool',
    'post_data' => 'array<array-key, mixed>',
  ),
  'httprequest::setpostfiles' => 
  array (
    0 => 'bool',
    'post_files' => 'array<array-key, mixed>',
  ),
  'httprequest::setputdata' => 
  array (
    0 => 'bool',
    'put_data=' => 'string',
  ),
  'httprequest::setputfile' => 
  array (
    0 => 'bool',
    'file=' => 'string',
  ),
  'httprequest::setquerydata' => 
  array (
    0 => 'bool',
    'query_data' => 'mixed',
  ),
  'httprequest::setrawpostdata' => 
  array (
    0 => 'bool',
    'raw_post_data=' => 'string',
  ),
  'httprequest::setssloptions' => 
  array (
    0 => 'bool',
    'options=' => 'array<array-key, mixed>',
  ),
  'httprequest::seturl' => 
  array (
    0 => 'bool',
    'url' => 'string',
  ),
  'httprequestdatashare::__construct' => 
  array (
    0 => 'void',
  ),
  'httprequestdatashare::__destruct' => 
  array (
    0 => 'void',
  ),
  'httprequestdatashare::attach' => 
  array (
    0 => 'mixed',
    'request' => 'HttpRequest',
  ),
  'httprequestdatashare::count' => 
  array (
    0 => 'int',
  ),
  'httprequestdatashare::detach' => 
  array (
    0 => 'mixed',
    'request' => 'HttpRequest',
  ),
  'httprequestdatashare::factory' => 
  array (
    0 => 'mixed',
    'global' => 'mixed',
    'class_name' => 'mixed',
  ),
  'httprequestdatashare::reset' => 
  array (
    0 => 'mixed',
  ),
  'httprequestdatashare::singleton' => 
  array (
    0 => 'mixed',
    'global' => 'mixed',
  ),
  'httprequestpool::__construct' => 
  array (
    0 => 'void',
    'request=' => 'HttpRequest',
  ),
  'httprequestpool::__destruct' => 
  array (
    0 => 'void',
  ),
  'httprequestpool::attach' => 
  array (
    0 => 'bool',
    'request' => 'HttpRequest',
  ),
  'httprequestpool::count' => 
  array (
    0 => 'int',
  ),
  'httprequestpool::current' => 
  array (
    0 => 'mixed',
  ),
  'httprequestpool::detach' => 
  array (
    0 => 'bool',
    'request' => 'HttpRequest',
  ),
  'httprequestpool::enableevents' => 
  array (
    0 => 'mixed',
    'enable' => 'mixed',
  ),
  'httprequestpool::enablepipelining' => 
  array (
    0 => 'mixed',
    'enable' => 'mixed',
  ),
  'httprequestpool::getattachedrequests' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'httprequestpool::getfinishedrequests' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'httprequestpool::key' => 
  array (
    0 => 'int|string',
  ),
  'httprequestpool::next' => 
  array (
    0 => 'void',
  ),
  'httprequestpool::reset' => 
  array (
    0 => 'void',
  ),
  'httprequestpool::rewind' => 
  array (
    0 => 'void',
  ),
  'httprequestpool::send' => 
  array (
    0 => 'bool',
  ),
  'httprequestpool::socketperform' => 
  array (
    0 => 'bool',
  ),
  'httprequestpool::socketselect' => 
  array (
    0 => 'bool',
    'timeout=' => 'float',
  ),
  'httprequestpool::valid' => 
  array (
    0 => 'bool',
  ),
  'httpresponse::capture' => 
  array (
    0 => 'void',
  ),
  'httpresponse::getbuffersize' => 
  array (
    0 => 'int',
  ),
  'httpresponse::getcache' => 
  array (
    0 => 'bool',
  ),
  'httpresponse::getcachecontrol' => 
  array (
    0 => 'string',
  ),
  'httpresponse::getcontentdisposition' => 
  array (
    0 => 'string',
  ),
  'httpresponse::getcontenttype' => 
  array (
    0 => 'string',
  ),
  'httpresponse::getdata' => 
  array (
    0 => 'string',
  ),
  'httpresponse::getetag' => 
  array (
    0 => 'string',
  ),
  'httpresponse::getfile' => 
  array (
    0 => 'string',
  ),
  'httpresponse::getgzip' => 
  array (
    0 => 'bool',
  ),
  'httpresponse::getheader' => 
  array (
    0 => 'mixed',
    'name=' => 'string',
  ),
  'httpresponse::getlastmodified' => 
  array (
    0 => 'int',
  ),
  'httpresponse::getrequestbody' => 
  array (
    0 => 'string',
  ),
  'httpresponse::getrequestbodystream' => 
  array (
    0 => 'resource',
  ),
  'httpresponse::getrequestheaders' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'httpresponse::getstream' => 
  array (
    0 => 'resource',
  ),
  'httpresponse::getthrottledelay' => 
  array (
    0 => 'float',
  ),
  'httpresponse::guesscontenttype' => 
  array (
    0 => 'false|string',
    'magic_file' => 'string',
    'magic_mode=' => 'int',
  ),
  'httpresponse::redirect' => 
  array (
    0 => 'void',
    'url=' => 'string',
    'params=' => 'array<array-key, mixed>',
    'session=' => 'bool',
    'status=' => 'int',
  ),
  'httpresponse::send' => 
  array (
    0 => 'bool',
    'clean_ob=' => 'bool',
  ),
  'httpresponse::setbuffersize' => 
  array (
    0 => 'bool',
    'bytes' => 'int',
  ),
  'httpresponse::setcache' => 
  array (
    0 => 'bool',
    'cache' => 'bool',
  ),
  'httpresponse::setcachecontrol' => 
  array (
    0 => 'bool',
    'control' => 'string',
    'max_age=' => 'int',
    'must_revalidate=' => 'bool',
  ),
  'httpresponse::setcontentdisposition' => 
  array (
    0 => 'bool',
    'filename' => 'string',
    'inline=' => 'bool',
  ),
  'httpresponse::setcontenttype' => 
  array (
    0 => 'bool',
    'content_type' => 'string',
  ),
  'httpresponse::setdata' => 
  array (
    0 => 'bool',
    'data' => 'mixed',
  ),
  'httpresponse::setetag' => 
  array (
    0 => 'bool',
    'etag' => 'string',
  ),
  'httpresponse::setfile' => 
  array (
    0 => 'bool',
    'file' => 'string',
  ),
  'httpresponse::setgzip' => 
  array (
    0 => 'bool',
    'gzip' => 'bool',
  ),
  'httpresponse::setheader' => 
  array (
    0 => 'bool',
    'name' => 'string',
    'value=' => 'mixed',
    'replace=' => 'bool',
  ),
  'httpresponse::setlastmodified' => 
  array (
    0 => 'bool',
    'timestamp' => 'int',
  ),
  'httpresponse::setstream' => 
  array (
    0 => 'bool',
    'stream' => 'resource',
  ),
  'httpresponse::setthrottledelay' => 
  array (
    0 => 'bool',
    'seconds' => 'float',
  ),
  'httpresponse::status' => 
  array (
    0 => 'bool',
    'status' => 'int',
  ),
  'httputil::buildcookie' => 
  array (
    0 => 'mixed',
    'cookie_array' => 'mixed',
  ),
  'httputil::buildstr' => 
  array (
    0 => 'mixed',
    'query' => 'mixed',
    'prefix' => 'mixed',
    'arg_sep' => 'mixed',
  ),
  'httputil::buildurl' => 
  array (
    0 => 'mixed',
    'url' => 'mixed',
    'parts' => 'mixed',
    'flags' => 'mixed',
    '&composed' => 'mixed',
  ),
  'httputil::chunkeddecode' => 
  array (
    0 => 'mixed',
    'encoded_string' => 'mixed',
  ),
  'httputil::date' => 
  array (
    0 => 'mixed',
    'timestamp' => 'mixed',
  ),
  'httputil::deflate' => 
  array (
    0 => 'mixed',
    'plain' => 'mixed',
    'flags' => 'mixed',
  ),
  'httputil::inflate' => 
  array (
    0 => 'mixed',
    'encoded' => 'mixed',
  ),
  'httputil::matchetag' => 
  array (
    0 => 'mixed',
    'plain_etag' => 'mixed',
    'for_range' => 'mixed',
  ),
  'httputil::matchmodified' => 
  array (
    0 => 'mixed',
    'last_modified' => 'mixed',
    'for_range' => 'mixed',
  ),
  'httputil::matchrequestheader' => 
  array (
    0 => 'mixed',
    'header_name' => 'mixed',
    'header_value' => 'mixed',
    'case_sensitive' => 'mixed',
  ),
  'httputil::negotiatecharset' => 
  array (
    0 => 'mixed',
    'supported' => 'mixed',
    '&result' => 'mixed',
  ),
  'httputil::negotiatecontenttype' => 
  array (
    0 => 'mixed',
    'supported' => 'mixed',
    '&result' => 'mixed',
  ),
  'httputil::negotiatelanguage' => 
  array (
    0 => 'mixed',
    'supported' => 'mixed',
    '&result' => 'mixed',
  ),
  'httputil::parsecookie' => 
  array (
    0 => 'mixed',
    'cookie_string' => 'mixed',
  ),
  'httputil::parseheaders' => 
  array (
    0 => 'mixed',
    'headers_string' => 'mixed',
  ),
  'httputil::parsemessage' => 
  array (
    0 => 'mixed',
    'message_string' => 'mixed',
  ),
  'httputil::parseparams' => 
  array (
    0 => 'mixed',
    'param_string' => 'mixed',
    'flags' => 'mixed',
  ),
  'httputil::support' => 
  array (
    0 => 'mixed',
    'feature' => 'mixed',
  ),
  'hw_api::checkin' => 
  array (
    0 => 'bool',
    'parameter' => 'array<array-key, mixed>',
  ),
  'hw_api::checkout' => 
  array (
    0 => 'bool',
    'parameter' => 'array<array-key, mixed>',
  ),
  'hw_api::children' => 
  array (
    0 => 'array<array-key, mixed>',
    'parameter' => 'array<array-key, mixed>',
  ),
  'hw_api::content' => 
  array (
    0 => 'HW_API_Content',
    'parameter' => 'array<array-key, mixed>',
  ),
  'hw_api::copy' => 
  array (
    0 => 'hw_api_content',
    'parameter' => 'array<array-key, mixed>',
  ),
  'hw_api::dbstat' => 
  array (
    0 => 'hw_api_object',
    'parameter' => 'array<array-key, mixed>',
  ),
  'hw_api::dcstat' => 
  array (
    0 => 'hw_api_object',
    'parameter' => 'array<array-key, mixed>',
  ),
  'hw_api::dstanchors' => 
  array (
    0 => 'array<array-key, mixed>',
    'parameter' => 'array<array-key, mixed>',
  ),
  'hw_api::dstofsrcanchor' => 
  array (
    0 => 'hw_api_object',
    'parameter' => 'array<array-key, mixed>',
  ),
  'hw_api::find' => 
  array (
    0 => 'array<array-key, mixed>',
    'parameter' => 'array<array-key, mixed>',
  ),
  'hw_api::ftstat' => 
  array (
    0 => 'hw_api_object',
    'parameter' => 'array<array-key, mixed>',
  ),
  'hw_api::hwstat' => 
  array (
    0 => 'hw_api_object',
    'parameter' => 'array<array-key, mixed>',
  ),
  'hw_api::identify' => 
  array (
    0 => 'bool',
    'parameter' => 'array<array-key, mixed>',
  ),
  'hw_api::info' => 
  array (
    0 => 'array<array-key, mixed>',
    'parameter' => 'array<array-key, mixed>',
  ),
  'hw_api::insert' => 
  array (
    0 => 'hw_api_object',
    'parameter' => 'array<array-key, mixed>',
  ),
  'hw_api::insertanchor' => 
  array (
    0 => 'hw_api_object',
    'parameter' => 'array<array-key, mixed>',
  ),
  'hw_api::insertcollection' => 
  array (
    0 => 'hw_api_object',
    'parameter' => 'array<array-key, mixed>',
  ),
  'hw_api::insertdocument' => 
  array (
    0 => 'hw_api_object',
    'parameter' => 'array<array-key, mixed>',
  ),
  'hw_api::link' => 
  array (
    0 => 'bool',
    'parameter' => 'array<array-key, mixed>',
  ),
  'hw_api::lock' => 
  array (
    0 => 'bool',
    'parameter' => 'array<array-key, mixed>',
  ),
  'hw_api::move' => 
  array (
    0 => 'bool',
    'parameter' => 'array<array-key, mixed>',
  ),
  'hw_api::object' => 
  array (
    0 => 'hw_api_object',
    'parameter' => 'array<array-key, mixed>',
  ),
  'hw_api::objectbyanchor' => 
  array (
    0 => 'hw_api_object',
    'parameter' => 'array<array-key, mixed>',
  ),
  'hw_api::parents' => 
  array (
    0 => 'array<array-key, mixed>',
    'parameter' => 'array<array-key, mixed>',
  ),
  'hw_api::remove' => 
  array (
    0 => 'bool',
    'parameter' => 'array<array-key, mixed>',
  ),
  'hw_api::replace' => 
  array (
    0 => 'hw_api_object',
    'parameter' => 'array<array-key, mixed>',
  ),
  'hw_api::setcommittedversion' => 
  array (
    0 => 'hw_api_object',
    'parameter' => 'array<array-key, mixed>',
  ),
  'hw_api::srcanchors' => 
  array (
    0 => 'array<array-key, mixed>',
    'parameter' => 'array<array-key, mixed>',
  ),
  'hw_api::srcsofdst' => 
  array (
    0 => 'array<array-key, mixed>',
    'parameter' => 'array<array-key, mixed>',
  ),
  'hw_api::unlock' => 
  array (
    0 => 'bool',
    'parameter' => 'array<array-key, mixed>',
  ),
  'hw_api::user' => 
  array (
    0 => 'hw_api_object',
    'parameter' => 'array<array-key, mixed>',
  ),
  'hw_api::userlist' => 
  array (
    0 => 'array<array-key, mixed>',
    'parameter' => 'array<array-key, mixed>',
  ),
  'hw_api_attribute' => 
  array (
    0 => 'HW_API_Attribute',
    'name=' => 'string',
    'value=' => 'string',
  ),
  'hw_api_attribute::key' => 
  array (
    0 => 'string',
  ),
  'hw_api_attribute::langdepvalue' => 
  array (
    0 => 'string',
    'language' => 'string',
  ),
  'hw_api_attribute::value' => 
  array (
    0 => 'string',
  ),
  'hw_api_attribute::values' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'hw_api_content' => 
  array (
    0 => 'HW_API_Content',
    'content' => 'string',
    'mimetype' => 'string',
  ),
  'hw_api_content::mimetype' => 
  array (
    0 => 'string',
  ),
  'hw_api_content::read' => 
  array (
    0 => 'string',
    'buffer' => 'string',
    'length' => 'int',
  ),
  'hw_api_error::count' => 
  array (
    0 => 'int',
  ),
  'hw_api_error::reason' => 
  array (
    0 => 'HW_API_Reason',
  ),
  'hw_api_object' => 
  array (
    0 => 'hw_api_object',
    'parameter' => 'array<array-key, mixed>',
  ),
  'hw_api_object::assign' => 
  array (
    0 => 'bool',
    'parameter' => 'array<array-key, mixed>',
  ),
  'hw_api_object::attreditable' => 
  array (
    0 => 'bool',
    'parameter' => 'array<array-key, mixed>',
  ),
  'hw_api_object::count' => 
  array (
    0 => 'int',
    'parameter' => 'array<array-key, mixed>',
  ),
  'hw_api_object::insert' => 
  array (
    0 => 'bool',
    'attribute' => 'hw_api_attribute',
  ),
  'hw_api_object::remove' => 
  array (
    0 => 'bool',
    'name' => 'string',
  ),
  'hw_api_object::title' => 
  array (
    0 => 'string',
    'parameter' => 'array<array-key, mixed>',
  ),
  'hw_api_object::value' => 
  array (
    0 => 'string',
    'name' => 'string',
  ),
  'hw_api_reason::description' => 
  array (
    0 => 'string',
  ),
  'hw_api_reason::type' => 
  array (
    0 => 'HW_API_Reason',
  ),
  'hw_array2objrec' => 
  array (
    0 => 'string',
    'object_array' => 'array<array-key, mixed>',
  ),
  'hw_changeobject' => 
  array (
    0 => 'bool',
    'link' => 'int',
    'objid' => 'int',
    'attributes' => 'array<array-key, mixed>',
  ),
  'hw_children' => 
  array (
    0 => 'array<array-key, mixed>',
    'connection' => 'int',
    'objectid' => 'int',
  ),
  'hw_childrenobj' => 
  array (
    0 => 'array<array-key, mixed>',
    'connection' => 'int',
    'objectid' => 'int',
  ),
  'hw_close' => 
  array (
    0 => 'bool',
    'connection' => 'int',
  ),
  'hw_connect' => 
  array (
    0 => 'int',
    'host' => 'string',
    'port' => 'int',
    'username=' => 'string',
    'password=' => 'string',
  ),
  'hw_connection_info' => 
  array (
    0 => 'mixed',
    'link' => 'int',
  ),
  'hw_cp' => 
  array (
    0 => 'int',
    'connection' => 'int',
    'object_id_array' => 'array<array-key, mixed>',
    'destination_id' => 'int',
  ),
  'hw_deleteobject' => 
  array (
    0 => 'bool',
    'connection' => 'int',
    'object_to_delete' => 'int',
  ),
  'hw_docbyanchor' => 
  array (
    0 => 'int',
    'connection' => 'int',
    'anchorid' => 'int',
  ),
  'hw_docbyanchorobj' => 
  array (
    0 => 'string',
    'connection' => 'int',
    'anchorid' => 'int',
  ),
  'hw_document_attributes' => 
  array (
    0 => 'string',
    'hw_document' => 'int',
  ),
  'hw_document_bodytag' => 
  array (
    0 => 'string',
    'hw_document' => 'int',
    'prefix=' => 'string',
  ),
  'hw_document_content' => 
  array (
    0 => 'string',
    'hw_document' => 'int',
  ),
  'hw_document_setcontent' => 
  array (
    0 => 'bool',
    'hw_document' => 'int',
    'content' => 'string',
  ),
  'hw_document_size' => 
  array (
    0 => 'int',
    'hw_document' => 'int',
  ),
  'hw_dummy' => 
  array (
    0 => 'string',
    'link' => 'int',
    'id' => 'int',
    'msgid' => 'int',
  ),
  'hw_edittext' => 
  array (
    0 => 'bool',
    'connection' => 'int',
    'hw_document' => 'int',
  ),
  'hw_error' => 
  array (
    0 => 'int',
    'connection' => 'int',
  ),
  'hw_errormsg' => 
  array (
    0 => 'string',
    'connection' => 'int',
  ),
  'hw_free_document' => 
  array (
    0 => 'bool',
    'hw_document' => 'int',
  ),
  'hw_getanchors' => 
  array (
    0 => 'array<array-key, mixed>',
    'connection' => 'int',
    'objectid' => 'int',
  ),
  'hw_getanchorsobj' => 
  array (
    0 => 'array<array-key, mixed>',
    'connection' => 'int',
    'objectid' => 'int',
  ),
  'hw_getandlock' => 
  array (
    0 => 'string',
    'connection' => 'int',
    'objectid' => 'int',
  ),
  'hw_getchildcoll' => 
  array (
    0 => 'array<array-key, mixed>',
    'connection' => 'int',
    'objectid' => 'int',
  ),
  'hw_getchildcollobj' => 
  array (
    0 => 'array<array-key, mixed>',
    'connection' => 'int',
    'objectid' => 'int',
  ),
  'hw_getchilddoccoll' => 
  array (
    0 => 'array<array-key, mixed>',
    'connection' => 'int',
    'objectid' => 'int',
  ),
  'hw_getchilddoccollobj' => 
  array (
    0 => 'array<array-key, mixed>',
    'connection' => 'int',
    'objectid' => 'int',
  ),
  'hw_getobject' => 
  array (
    0 => 'mixed',
    'connection' => 'int',
    'objectid' => 'mixed',
    'query=' => 'string',
  ),
  'hw_getobjectbyquery' => 
  array (
    0 => 'array<array-key, mixed>',
    'connection' => 'int',
    'query' => 'string',
    'max_hits' => 'int',
  ),
  'hw_getobjectbyquerycoll' => 
  array (
    0 => 'array<array-key, mixed>',
    'connection' => 'int',
    'objectid' => 'int',
    'query' => 'string',
    'max_hits' => 'int',
  ),
  'hw_getobjectbyquerycollobj' => 
  array (
    0 => 'array<array-key, mixed>',
    'connection' => 'int',
    'objectid' => 'int',
    'query' => 'string',
    'max_hits' => 'int',
  ),
  'hw_getobjectbyqueryobj' => 
  array (
    0 => 'array<array-key, mixed>',
    'connection' => 'int',
    'query' => 'string',
    'max_hits' => 'int',
  ),
  'hw_getparents' => 
  array (
    0 => 'array<array-key, mixed>',
    'connection' => 'int',
    'objectid' => 'int',
  ),
  'hw_getparentsobj' => 
  array (
    0 => 'array<array-key, mixed>',
    'connection' => 'int',
    'objectid' => 'int',
  ),
  'hw_getrellink' => 
  array (
    0 => 'string',
    'link' => 'int',
    'rootid' => 'int',
    'sourceid' => 'int',
    'destid' => 'int',
  ),
  'hw_getremote' => 
  array (
    0 => 'int',
    'connection' => 'int',
    'objectid' => 'int',
  ),
  'hw_getremotechildren' => 
  array (
    0 => 'mixed',
    'connection' => 'int',
    'object_record' => 'string',
  ),
  'hw_getsrcbydestobj' => 
  array (
    0 => 'array<array-key, mixed>',
    'connection' => 'int',
    'objectid' => 'int',
  ),
  'hw_gettext' => 
  array (
    0 => 'int',
    'connection' => 'int',
    'objectid' => 'int',
    'prefix=' => 'mixed',
  ),
  'hw_getusername' => 
  array (
    0 => 'string',
    'connection' => 'int',
  ),
  'hw_identify' => 
  array (
    0 => 'string',
    'link' => 'int',
    'username' => 'string',
    'password' => 'string',
  ),
  'hw_incollections' => 
  array (
    0 => 'array<array-key, mixed>',
    'connection' => 'int',
    'object_id_array' => 'array<array-key, mixed>',
    'collection_id_array' => 'array<array-key, mixed>',
    'return_collections' => 'int',
  ),
  'hw_info' => 
  array (
    0 => 'string',
    'connection' => 'int',
  ),
  'hw_inscoll' => 
  array (
    0 => 'int',
    'connection' => 'int',
    'objectid' => 'int',
    'object_array' => 'array<array-key, mixed>',
  ),
  'hw_insdoc' => 
  array (
    0 => 'int',
    'connection' => 'mixed',
    'parentid' => 'int',
    'object_record' => 'string',
    'text=' => 'string',
  ),
  'hw_insertanchors' => 
  array (
    0 => 'bool',
    'hwdoc' => 'int',
    'anchorecs' => 'array<array-key, mixed>',
    'dest' => 'array<array-key, mixed>',
    'urlprefixes=' => 'array<array-key, mixed>',
  ),
  'hw_insertdocument' => 
  array (
    0 => 'int',
    'connection' => 'int',
    'parent_id' => 'int',
    'hw_document' => 'int',
  ),
  'hw_insertobject' => 
  array (
    0 => 'int',
    'connection' => 'int',
    'object_rec' => 'string',
    'parameter' => 'string',
  ),
  'hw_mapid' => 
  array (
    0 => 'int',
    'connection' => 'int',
    'server_id' => 'int',
    'object_id' => 'int',
  ),
  'hw_modifyobject' => 
  array (
    0 => 'bool',
    'connection' => 'int',
    'object_to_change' => 'int',
    'remove' => 'array<array-key, mixed>',
    'add' => 'array<array-key, mixed>',
    'mode=' => 'int',
  ),
  'hw_mv' => 
  array (
    0 => 'int',
    'connection' => 'int',
    'object_id_array' => 'array<array-key, mixed>',
    'source_id' => 'int',
    'destination_id' => 'int',
  ),
  'hw_new_document' => 
  array (
    0 => 'int',
    'object_record' => 'string',
    'document_data' => 'string',
    'document_size' => 'int',
  ),
  'hw_objrec2array' => 
  array (
    0 => 'array<array-key, mixed>',
    'object_record' => 'string',
    'format=' => 'array<array-key, mixed>',
  ),
  'hw_output_document' => 
  array (
    0 => 'bool',
    'hw_document' => 'int',
  ),
  'hw_pconnect' => 
  array (
    0 => 'int',
    'host' => 'string',
    'port' => 'int',
    'username=' => 'string',
    'password=' => 'string',
  ),
  'hw_pipedocument' => 
  array (
    0 => 'int',
    'connection' => 'int',
    'objectid' => 'int',
    'url_prefixes=' => 'array<array-key, mixed>',
  ),
  'hw_root' => 
  array (
    0 => 'int',
  ),
  'hw_setlinkroot' => 
  array (
    0 => 'int',
    'link' => 'int',
    'rootid' => 'int',
  ),
  'hw_stat' => 
  array (
    0 => 'string',
    'link' => 'int',
  ),
  'hw_unlock' => 
  array (
    0 => 'bool',
    'connection' => 'int',
    'objectid' => 'int',
  ),
  'hw_who' => 
  array (
    0 => 'array<array-key, mixed>',
    'connection' => 'int',
  ),
  'hwapi_attribute_new' => 
  array (
    0 => 'HW_API_Attribute',
    'name=' => 'string',
    'value=' => 'string',
  ),
  'hwapi_content_new' => 
  array (
    0 => 'HW_API_Content',
    'content' => 'string',
    'mimetype' => 'string',
  ),
  'hwapi_hgcsp' => 
  array (
    0 => 'HW_API',
    'hostname' => 'string',
    'port=' => 'int',
  ),
  'hwapi_object_new' => 
  array (
    0 => 'hw_api_object',
    'parameter' => 'array<array-key, mixed>',
  ),
  'hypot' => 
  array (
    0 => 'float',
    'x' => 'float',
    'y' => 'float',
  ),
  'ibase_add_user' => 
  array (
    0 => 'bool',
    'service_handle' => 'resource',
    'user_name' => 'string',
    'password' => 'string',
    'first_name=' => 'string',
    'middle_name=' => 'string',
    'last_name=' => 'string',
  ),
  'ibase_affected_rows' => 
  array (
    0 => 'int',
    'link_identifier=' => 'resource',
  ),
  'ibase_backup' => 
  array (
    0 => 'mixed',
    'service_handle' => 'resource',
    'source_db' => 'string',
    'dest_file' => 'string',
    'options=' => 'int',
    'verbose=' => 'bool',
  ),
  'ibase_blob_add' => 
  array (
    0 => 'void',
    'blob_handle' => 'resource',
    'data' => 'string',
  ),
  'ibase_blob_cancel' => 
  array (
    0 => 'bool',
    'blob_handle' => 'resource',
  ),
  'ibase_blob_close' => 
  array (
    0 => 'bool|string',
    'blob_handle' => 'resource',
  ),
  'ibase_blob_create' => 
  array (
    0 => 'resource',
    'link_identifier=' => 'resource',
  ),
  'ibase_blob_echo' => 
  array (
    0 => 'bool',
    'link_identifier' => 'mixed',
    'blob_id' => 'string',
  ),
  'ibase_blob_echo\'1' => 
  array (
    0 => 'bool',
    'blob_id' => 'string',
  ),
  'ibase_blob_get' => 
  array (
    0 => 'false|string',
    'blob_handle' => 'resource',
    'length' => 'int',
  ),
  'ibase_blob_import' => 
  array (
    0 => 'false|string',
    'link_identifier' => 'resource',
    'file_handle' => 'resource',
  ),
  'ibase_blob_info' => 
  array (
    0 => 'array<array-key, mixed>',
    'link_identifier' => 'resource',
    'blob_id' => 'string',
  ),
  'ibase_blob_info\'1' => 
  array (
    0 => 'array<array-key, mixed>',
    'blob_id' => 'string',
  ),
  'ibase_blob_open' => 
  array (
    0 => 'false|resource',
    'link_identifier' => 'mixed',
    'blob_id' => 'string',
  ),
  'ibase_blob_open\'1' => 
  array (
    0 => 'resource',
    'blob_id' => 'string',
  ),
  'ibase_close' => 
  array (
    0 => 'bool',
    'link_identifier=' => 'resource',
  ),
  'ibase_commit' => 
  array (
    0 => 'bool',
    'link_identifier=' => 'resource',
  ),
  'ibase_commit_ret' => 
  array (
    0 => 'bool',
    'link_identifier=' => 'resource',
  ),
  'ibase_connect' => 
  array (
    0 => 'false|resource',
    'database=' => 'string',
    'username=' => 'string',
    'password=' => 'string',
    'charset=' => 'string',
    'buffers=' => 'int',
    'dialect=' => 'int',
    'role=' => 'string',
  ),
  'ibase_db_info' => 
  array (
    0 => 'string',
    'service_handle' => 'resource',
    'db' => 'string',
    'action' => 'int',
    'argument=' => 'int',
  ),
  'ibase_delete_user' => 
  array (
    0 => 'bool',
    'service_handle' => 'resource',
    'user_name' => 'string',
    'password=' => 'string',
    'first_name=' => 'string',
    'middle_name=' => 'string',
    'last_name=' => 'string',
  ),
  'ibase_drop_db' => 
  array (
    0 => 'bool',
    'link_identifier=' => 'resource',
  ),
  'ibase_errcode' => 
  array (
    0 => 'false|int',
  ),
  'ibase_errmsg' => 
  array (
    0 => 'false|string',
  ),
  'ibase_execute' => 
  array (
    0 => 'false|resource',
    'query' => 'resource',
    'bind_arg=' => 'mixed',
    '...args=' => 'mixed',
  ),
  'ibase_fetch_assoc' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'result' => 'resource',
    'fetch_flags=' => 'int',
  ),
  'ibase_fetch_object' => 
  array (
    0 => 'false|object',
    'result' => 'resource',
    'fetch_flags=' => 'int',
  ),
  'ibase_fetch_row' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'result' => 'resource',
    'fetch_flags=' => 'int',
  ),
  'ibase_field_info' => 
  array (
    0 => 'array<array-key, mixed>',
    'query_result' => 'resource',
    'field_number' => 'int',
  ),
  'ibase_free_event_handler' => 
  array (
    0 => 'bool',
    'event' => 'resource',
  ),
  'ibase_free_query' => 
  array (
    0 => 'bool',
    'query' => 'resource',
  ),
  'ibase_free_result' => 
  array (
    0 => 'bool',
    'result' => 'resource',
  ),
  'ibase_gen_id' => 
  array (
    0 => 'int|string',
    'generator' => 'string',
    'increment=' => 'int',
    'link_identifier=' => 'resource',
  ),
  'ibase_maintain_db' => 
  array (
    0 => 'bool',
    'service_handle' => 'resource',
    'db' => 'string',
    'action' => 'int',
    'argument=' => 'int',
  ),
  'ibase_modify_user' => 
  array (
    0 => 'bool',
    'service_handle' => 'resource',
    'user_name' => 'string',
    'password' => 'string',
    'first_name=' => 'string',
    'middle_name=' => 'string',
    'last_name=' => 'string',
  ),
  'ibase_name_result' => 
  array (
    0 => 'bool',
    'result' => 'resource',
    'name' => 'string',
  ),
  'ibase_num_fields' => 
  array (
    0 => 'int',
    'query_result' => 'resource',
  ),
  'ibase_num_params' => 
  array (
    0 => 'int',
    'query' => 'resource',
  ),
  'ibase_num_rows' => 
  array (
    0 => 'int',
    'result_identifier' => 'mixed',
  ),
  'ibase_param_info' => 
  array (
    0 => 'array<array-key, mixed>',
    'query' => 'resource',
    'field_number' => 'int',
  ),
  'ibase_pconnect' => 
  array (
    0 => 'false|resource',
    'database=' => 'string',
    'username=' => 'string',
    'password=' => 'string',
    'charset=' => 'string',
    'buffers=' => 'int',
    'dialect=' => 'int',
    'role=' => 'string',
  ),
  'ibase_prepare' => 
  array (
    0 => 'false|resource',
    'link_identifier' => 'mixed',
    'query' => 'string',
    'trans_identifier' => 'mixed',
  ),
  'ibase_query' => 
  array (
    0 => 'false|resource',
    'link_identifier=' => 'resource',
    'string=' => 'string',
    'bind_arg=' => 'int',
    '...args=' => 'mixed',
  ),
  'ibase_restore' => 
  array (
    0 => 'mixed',
    'service_handle' => 'resource',
    'source_file' => 'string',
    'dest_db' => 'string',
    'options=' => 'int',
    'verbose=' => 'bool',
  ),
  'ibase_rollback' => 
  array (
    0 => 'bool',
    'link_identifier=' => 'resource',
  ),
  'ibase_rollback_ret' => 
  array (
    0 => 'bool',
    'link_identifier=' => 'resource',
  ),
  'ibase_server_info' => 
  array (
    0 => 'string',
    'service_handle' => 'resource',
    'action' => 'int',
  ),
  'ibase_service_attach' => 
  array (
    0 => 'resource',
    'host' => 'string',
    'dba_username' => 'string',
    'dba_password' => 'string',
  ),
  'ibase_service_detach' => 
  array (
    0 => 'bool',
    'service_handle' => 'resource',
  ),
  'ibase_set_event_handler' => 
  array (
    0 => 'resource',
    'link_identifier' => 'mixed',
    'callback' => 'callable',
    'event=' => 'string',
    '...args=' => 'mixed',
  ),
  'ibase_set_event_handler\'1' => 
  array (
    0 => 'resource',
    'callback' => 'callable',
    'event' => 'string',
    '...args' => 'mixed',
  ),
  'ibase_timefmt' => 
  array (
    0 => 'bool',
    'format' => 'string',
    'columntype=' => 'int',
  ),
  'ibase_trans' => 
  array (
    0 => 'false|resource',
    'trans_args=' => 'int',
    'link_identifier=' => 'mixed',
    '...args=' => 'mixed',
  ),
  'ibase_wait_event' => 
  array (
    0 => 'string',
    'link_identifier' => 'mixed',
    'event=' => 'string',
    '...args=' => 'mixed',
  ),
  'ibase_wait_event\'1' => 
  array (
    0 => 'string',
    'event' => 'string',
    '...args' => 'mixed',
  ),
  'iconv' => 
  array (
    0 => 'false|string',
    'from_encoding' => 'string',
    'to_encoding' => 'string',
    'string' => 'string',
  ),
  'iconv_get_encoding' => 
  array (
    0 => 'array<array-key, mixed>|false|string',
    'type=' => 'string',
  ),
  'iconv_mime_decode' => 
  array (
    0 => 'false|string',
    'string' => 'string',
    'mode=' => 'int',
    'encoding=' => 'null|string',
  ),
  'iconv_mime_decode_headers' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'headers' => 'string',
    'mode=' => 'int',
    'encoding=' => 'null|string',
  ),
  'iconv_mime_encode' => 
  array (
    0 => 'false|string',
    'field_name' => 'string',
    'field_value' => 'string',
    'options=' => 'array<array-key, mixed>',
  ),
  'iconv_set_encoding' => 
  array (
    0 => 'bool',
    'type' => 'string',
    'encoding' => 'string',
  ),
  'iconv_strlen' => 
  array (
    0 => 'false|int<0, max>',
    'string' => 'string',
    'encoding=' => 'null|string',
  ),
  'iconv_strpos' => 
  array (
    0 => 'false|int',
    'haystack' => 'string',
    'needle' => 'string',
    'offset=' => 'int',
    'encoding=' => 'null|string',
  ),
  'iconv_strrpos' => 
  array (
    0 => 'false|int',
    'haystack' => 'string',
    'needle' => 'string',
    'encoding=' => 'null|string',
  ),
  'iconv_substr' => 
  array (
    0 => 'false|string',
    'string' => 'string',
    'offset' => 'int',
    'length=' => 'int|null',
    'encoding=' => 'null|string',
  ),
  'id3_get_frame_long_name' => 
  array (
    0 => 'string',
    'frameid' => 'string',
  ),
  'id3_get_frame_short_name' => 
  array (
    0 => 'string',
    'frameid' => 'string',
  ),
  'id3_get_genre_id' => 
  array (
    0 => 'int',
    'genre' => 'string',
  ),
  'id3_get_genre_list' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'id3_get_genre_name' => 
  array (
    0 => 'string',
    'genre_id' => 'int',
  ),
  'id3_get_tag' => 
  array (
    0 => 'array<array-key, mixed>',
    'filename' => 'string',
    'version=' => 'int',
  ),
  'id3_get_version' => 
  array (
    0 => 'int',
    'filename' => 'string',
  ),
  'id3_remove_tag' => 
  array (
    0 => 'bool',
    'filename' => 'string',
    'version=' => 'int',
  ),
  'id3_set_tag' => 
  array (
    0 => 'bool',
    'filename' => 'string',
    'tag' => 'array<array-key, mixed>',
    'version=' => 'int',
  ),
  'idate' => 
  array (
    0 => 'int',
    'format' => 'string',
    'timestamp=' => 'int|null',
  ),
  'idn_strerror' => 
  array (
    0 => 'string',
    'errorcode' => 'int',
  ),
  'idn_to_ascii' => 
  array (
    0 => 'false|string',
    'domain' => 'string',
    'flags=' => 'int',
    'variant=' => 'int',
    '&w_idna_info=' => 'array<array-key, mixed>',
  ),
  'idn_to_utf8' => 
  array (
    0 => 'false|string',
    'domain' => 'string',
    'flags=' => 'int',
    'variant=' => 'int',
    '&w_idna_info=' => 'array<array-key, mixed>',
  ),
  'ifx_affected_rows' => 
  array (
    0 => 'int',
    'result_id' => 'resource',
  ),
  'ifx_blobinfile_mode' => 
  array (
    0 => 'bool',
    'mode' => 'int',
  ),
  'ifx_byteasvarchar' => 
  array (
    0 => 'bool',
    'mode' => 'int',
  ),
  'ifx_close' => 
  array (
    0 => 'bool',
    'link_identifier=' => 'resource',
  ),
  'ifx_connect' => 
  array (
    0 => 'resource',
    'database=' => 'string',
    'userid=' => 'string',
    'password=' => 'string',
  ),
  'ifx_copy_blob' => 
  array (
    0 => 'int',
    'bid' => 'int',
  ),
  'ifx_create_blob' => 
  array (
    0 => 'int',
    'type' => 'int',
    'mode' => 'int',
    'param' => 'string',
  ),
  'ifx_create_char' => 
  array (
    0 => 'int',
    'param' => 'string',
  ),
  'ifx_do' => 
  array (
    0 => 'bool',
    'result_id' => 'resource',
  ),
  'ifx_error' => 
  array (
    0 => 'string',
    'link_identifier=' => 'resource',
  ),
  'ifx_errormsg' => 
  array (
    0 => 'string',
    'errorcode=' => 'int',
  ),
  'ifx_fetch_row' => 
  array (
    0 => 'array<array-key, mixed>',
    'result_id' => 'resource',
    'position=' => 'mixed',
  ),
  'ifx_fieldproperties' => 
  array (
    0 => 'array<array-key, mixed>',
    'result_id' => 'resource',
  ),
  'ifx_fieldtypes' => 
  array (
    0 => 'array<array-key, mixed>',
    'result_id' => 'resource',
  ),
  'ifx_free_blob' => 
  array (
    0 => 'bool',
    'bid' => 'int',
  ),
  'ifx_free_char' => 
  array (
    0 => 'bool',
    'bid' => 'int',
  ),
  'ifx_free_result' => 
  array (
    0 => 'bool',
    'result_id' => 'resource',
  ),
  'ifx_get_blob' => 
  array (
    0 => 'string',
    'bid' => 'int',
  ),
  'ifx_get_char' => 
  array (
    0 => 'string',
    'bid' => 'int',
  ),
  'ifx_getsqlca' => 
  array (
    0 => 'array<array-key, mixed>',
    'result_id' => 'resource',
  ),
  'ifx_htmltbl_result' => 
  array (
    0 => 'int',
    'result_id' => 'resource',
    'html_table_options=' => 'string',
  ),
  'ifx_nullformat' => 
  array (
    0 => 'bool',
    'mode' => 'int',
  ),
  'ifx_num_fields' => 
  array (
    0 => 'int',
    'result_id' => 'resource',
  ),
  'ifx_num_rows' => 
  array (
    0 => 'int',
    'result_id' => 'resource',
  ),
  'ifx_pconnect' => 
  array (
    0 => 'resource',
    'database=' => 'string',
    'userid=' => 'string',
    'password=' => 'string',
  ),
  'ifx_prepare' => 
  array (
    0 => 'resource',
    'query' => 'string',
    'link_identifier' => 'resource',
    'cursor_def=' => 'int',
    'blobidarray=' => 'mixed',
  ),
  'ifx_query' => 
  array (
    0 => 'resource',
    'query' => 'string',
    'link_identifier' => 'resource',
    'cursor_type=' => 'int',
    'blobidarray=' => 'mixed',
  ),
  'ifx_textasvarchar' => 
  array (
    0 => 'bool',
    'mode' => 'int',
  ),
  'ifx_update_blob' => 
  array (
    0 => 'bool',
    'bid' => 'int',
    'content' => 'string',
  ),
  'ifx_update_char' => 
  array (
    0 => 'bool',
    'bid' => 'int',
    'content' => 'string',
  ),
  'ifxus_close_slob' => 
  array (
    0 => 'bool',
    'bid' => 'int',
  ),
  'ifxus_create_slob' => 
  array (
    0 => 'int',
    'mode' => 'int',
  ),
  'ifxus_free_slob' => 
  array (
    0 => 'bool',
    'bid' => 'int',
  ),
  'ifxus_open_slob' => 
  array (
    0 => 'int',
    'bid' => 'int',
    'mode' => 'int',
  ),
  'ifxus_read_slob' => 
  array (
    0 => 'string',
    'bid' => 'int',
    'nbytes' => 'int',
  ),
  'ifxus_seek_slob' => 
  array (
    0 => 'int',
    'bid' => 'int',
    'mode' => 'int',
    'offset' => 'int',
  ),
  'ifxus_tell_slob' => 
  array (
    0 => 'int',
    'bid' => 'int',
  ),
  'ifxus_write_slob' => 
  array (
    0 => 'int',
    'bid' => 'int',
    'content' => 'string',
  ),
  'igbinary_serialize' => 
  array (
    0 => 'false|string',
    'value' => 'mixed',
  ),
  'igbinary_unserialize' => 
  array (
    0 => 'mixed',
    'str' => 'string',
  ),
  'ignore_user_abort' => 
  array (
    0 => 'int',
    'enable=' => 'bool|null',
  ),
  'iis_add_server' => 
  array (
    0 => 'int',
    'path' => 'string',
    'comment' => 'string',
    'server_ip' => 'string',
    'port' => 'int',
    'host_name' => 'string',
    'rights' => 'int',
    'start_server' => 'int',
  ),
  'iis_get_dir_security' => 
  array (
    0 => 'int',
    'server_instance' => 'int',
    'virtual_path' => 'string',
  ),
  'iis_get_script_map' => 
  array (
    0 => 'string',
    'server_instance' => 'int',
    'virtual_path' => 'string',
    'script_extension' => 'string',
  ),
  'iis_get_server_by_comment' => 
  array (
    0 => 'int',
    'comment' => 'string',
  ),
  'iis_get_server_by_path' => 
  array (
    0 => 'int',
    'path' => 'string',
  ),
  'iis_get_server_rights' => 
  array (
    0 => 'int',
    'server_instance' => 'int',
    'virtual_path' => 'string',
  ),
  'iis_get_service_state' => 
  array (
    0 => 'int',
    'service_id' => 'string',
  ),
  'iis_remove_server' => 
  array (
    0 => 'int',
    'server_instance' => 'int',
  ),
  'iis_set_app_settings' => 
  array (
    0 => 'int',
    'server_instance' => 'int',
    'virtual_path' => 'string',
    'application_scope' => 'string',
  ),
  'iis_set_dir_security' => 
  array (
    0 => 'int',
    'server_instance' => 'int',
    'virtual_path' => 'string',
    'directory_flags' => 'int',
  ),
  'iis_set_script_map' => 
  array (
    0 => 'int',
    'server_instance' => 'int',
    'virtual_path' => 'string',
    'script_extension' => 'string',
    'engine_path' => 'string',
    'allow_scripting' => 'int',
  ),
  'iis_set_server_rights' => 
  array (
    0 => 'int',
    'server_instance' => 'int',
    'virtual_path' => 'string',
    'directory_flags' => 'int',
  ),
  'iis_start_server' => 
  array (
    0 => 'int',
    'server_instance' => 'int',
  ),
  'iis_start_service' => 
  array (
    0 => 'int',
    'service_id' => 'string',
  ),
  'iis_stop_server' => 
  array (
    0 => 'int',
    'server_instance' => 'int',
  ),
  'iis_stop_service' => 
  array (
    0 => 'int',
    'service_id' => 'string',
  ),
  'image_type_to_extension' => 
  array (
    0 => 'string',
    'image_type' => 'int',
    'include_dot=' => 'bool',
  ),
  'image_type_to_mime_type' => 
  array (
    0 => 'string',
    'image_type' => 'int',
  ),
  'imageaffine' => 
  array (
    0 => 'GdImage|false',
    'image' => 'GdImage',
    'affine' => 'array<array-key, mixed>',
    'clip=' => 'array<array-key, mixed>|null',
  ),
  'imageaffinematrixconcat' => 
  array (
    0 => 'array{0: float, 1: float, 2: float, 3: float, 4: float, 5: float}|false',
    'matrix1' => 'array<array-key, mixed>',
    'matrix2' => 'array<array-key, mixed>',
  ),
  'imageaffinematrixget' => 
  array (
    0 => 'array{0: float, 1: float, 2: float, 3: float, 4: float, 5: float}|false',
    'type' => 'int',
    'options' => 'array<array-key, mixed>|float',
  ),
  'imagealphablending' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'enable' => 'bool',
  ),
  'imageantialias' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'enable' => 'bool',
  ),
  'imagearc' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'center_x' => 'int',
    'center_y' => 'int',
    'width' => 'int',
    'height' => 'int',
    'start_angle' => 'int',
    'end_angle' => 'int',
    'color' => 'int',
  ),
  'imageavif' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'file=' => 'null|resource|string',
    'quality=' => 'int',
    'speed=' => 'int',
  ),
  'imagebmp' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'file=' => 'null|resource|string',
    'compressed=' => 'bool',
  ),
  'imagechar' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'font' => 'int',
    'x' => 'int',
    'y' => 'int',
    'char' => 'string',
    'color' => 'int',
  ),
  'imagecharup' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'font' => 'int',
    'x' => 'int',
    'y' => 'int',
    'char' => 'string',
    'color' => 'int',
  ),
  'imagecolorallocate' => 
  array (
    0 => 'false|int',
    'image' => 'GdImage',
    'red' => 'int',
    'green' => 'int',
    'blue' => 'int',
  ),
  'imagecolorallocatealpha' => 
  array (
    0 => 'false|int',
    'image' => 'GdImage',
    'red' => 'int',
    'green' => 'int',
    'blue' => 'int',
    'alpha' => 'int',
  ),
  'imagecolorat' => 
  array (
    0 => 'false|int',
    'image' => 'GdImage',
    'x' => 'int',
    'y' => 'int',
  ),
  'imagecolorclosest' => 
  array (
    0 => 'int',
    'image' => 'GdImage',
    'red' => 'int',
    'green' => 'int',
    'blue' => 'int',
  ),
  'imagecolorclosestalpha' => 
  array (
    0 => 'int',
    'image' => 'GdImage',
    'red' => 'int',
    'green' => 'int',
    'blue' => 'int',
    'alpha' => 'int',
  ),
  'imagecolorclosesthwb' => 
  array (
    0 => 'int',
    'image' => 'GdImage',
    'red' => 'int',
    'green' => 'int',
    'blue' => 'int',
  ),
  'imagecolordeallocate' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'color' => 'int',
  ),
  'imagecolorexact' => 
  array (
    0 => 'int',
    'image' => 'GdImage',
    'red' => 'int',
    'green' => 'int',
    'blue' => 'int',
  ),
  'imagecolorexactalpha' => 
  array (
    0 => 'int',
    'image' => 'GdImage',
    'red' => 'int',
    'green' => 'int',
    'blue' => 'int',
    'alpha' => 'int',
  ),
  'imagecolormatch' => 
  array (
    0 => 'bool',
    'image1' => 'GdImage',
    'image2' => 'GdImage',
  ),
  'imagecolorresolve' => 
  array (
    0 => 'int',
    'image' => 'GdImage',
    'red' => 'int',
    'green' => 'int',
    'blue' => 'int',
  ),
  'imagecolorresolvealpha' => 
  array (
    0 => 'int',
    'image' => 'GdImage',
    'red' => 'int',
    'green' => 'int',
    'blue' => 'int',
    'alpha' => 'int',
  ),
  'imagecolorset' => 
  array (
    0 => 'false|null',
    'image' => 'GdImage',
    'color' => 'int',
    'red' => 'int',
    'green' => 'int',
    'blue' => 'int',
    'alpha=' => 'int',
  ),
  'imagecolorsforindex' => 
  array (
    0 => 'array<array-key, mixed>',
    'image' => 'GdImage',
    'color' => 'int',
  ),
  'imagecolorstotal' => 
  array (
    0 => 'int',
    'image' => 'GdImage',
  ),
  'imagecolortransparent' => 
  array (
    0 => 'int',
    'image' => 'GdImage',
    'color=' => 'int|null',
  ),
  'imageconvolution' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'matrix' => 'array<array-key, mixed>',
    'divisor' => 'float',
    'offset' => 'float',
  ),
  'imagecopy' => 
  array (
    0 => 'bool',
    'dst_image' => 'GdImage',
    'src_image' => 'GdImage',
    'dst_x' => 'int',
    'dst_y' => 'int',
    'src_x' => 'int',
    'src_y' => 'int',
    'src_width' => 'int',
    'src_height' => 'int',
  ),
  'imagecopymerge' => 
  array (
    0 => 'bool',
    'dst_image' => 'GdImage',
    'src_image' => 'GdImage',
    'dst_x' => 'int',
    'dst_y' => 'int',
    'src_x' => 'int',
    'src_y' => 'int',
    'src_width' => 'int',
    'src_height' => 'int',
    'pct' => 'int',
  ),
  'imagecopymergegray' => 
  array (
    0 => 'bool',
    'dst_image' => 'GdImage',
    'src_image' => 'GdImage',
    'dst_x' => 'int',
    'dst_y' => 'int',
    'src_x' => 'int',
    'src_y' => 'int',
    'src_width' => 'int',
    'src_height' => 'int',
    'pct' => 'int',
  ),
  'imagecopyresampled' => 
  array (
    0 => 'bool',
    'dst_image' => 'GdImage',
    'src_image' => 'GdImage',
    'dst_x' => 'int',
    'dst_y' => 'int',
    'src_x' => 'int',
    'src_y' => 'int',
    'dst_width' => 'int',
    'dst_height' => 'int',
    'src_width' => 'int',
    'src_height' => 'int',
  ),
  'imagecopyresized' => 
  array (
    0 => 'bool',
    'dst_image' => 'GdImage',
    'src_image' => 'GdImage',
    'dst_x' => 'int',
    'dst_y' => 'int',
    'src_x' => 'int',
    'src_y' => 'int',
    'dst_width' => 'int',
    'dst_height' => 'int',
    'src_width' => 'int',
    'src_height' => 'int',
  ),
  'imagecreate' => 
  array (
    0 => 'GdImage|false',
    'width' => 'int',
    'height' => 'int',
  ),
  'imagecreatefrombmp' => 
  array (
    0 => 'GdImage|false',
    'filename' => 'string',
  ),
  'imagecreatefromgd' => 
  array (
    0 => 'GdImage|false',
    'filename' => 'string',
  ),
  'imagecreatefromgd2' => 
  array (
    0 => 'GdImage|false',
    'filename' => 'string',
  ),
  'imagecreatefromgd2part' => 
  array (
    0 => 'GdImage|false',
    'filename' => 'string',
    'x' => 'int',
    'y' => 'int',
    'width' => 'int',
    'height' => 'int',
  ),
  'imagecreatefromgif' => 
  array (
    0 => 'GdImage|false',
    'filename' => 'string',
  ),
  'imagecreatefromjpeg' => 
  array (
    0 => 'GdImage|false',
    'filename' => 'string',
  ),
  'imagecreatefrompng' => 
  array (
    0 => 'GdImage|false',
    'filename' => 'string',
  ),
  'imagecreatefromstring' => 
  array (
    0 => 'GdImage|false',
    'data' => 'string',
  ),
  'imagecreatefromwbmp' => 
  array (
    0 => 'GdImage|false',
    'filename' => 'string',
  ),
  'imagecreatefromwebp' => 
  array (
    0 => 'GdImage|false',
    'filename' => 'string',
  ),
  'imagecreatefromxbm' => 
  array (
    0 => 'GdImage|false',
    'filename' => 'string',
  ),
  'imagecreatefromxpm' => 
  array (
    0 => 'GdImage|false',
    'filename' => 'string',
  ),
  'imagecreatetruecolor' => 
  array (
    0 => 'GdImage|false',
    'width' => 'int',
    'height' => 'int',
  ),
  'imagecrop' => 
  array (
    0 => 'GdImage|false',
    'image' => 'GdImage',
    'rectangle' => 'array<array-key, mixed>',
  ),
  'imagecropauto' => 
  array (
    0 => 'GdImage|false',
    'image' => 'GdImage',
    'mode=' => 'int',
    'threshold=' => 'float',
    'color=' => 'int',
  ),
  'imagedashedline' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'x1' => 'int',
    'y1' => 'int',
    'x2' => 'int',
    'y2' => 'int',
    'color' => 'int',
  ),
  'imagedestroy' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
  ),
  'imageellipse' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'center_x' => 'int',
    'center_y' => 'int',
    'width' => 'int',
    'height' => 'int',
    'color' => 'int',
  ),
  'imagefill' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'x' => 'int',
    'y' => 'int',
    'color' => 'int',
  ),
  'imagefilledarc' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'center_x' => 'int',
    'center_y' => 'int',
    'width' => 'int',
    'height' => 'int',
    'start_angle' => 'int',
    'end_angle' => 'int',
    'color' => 'int',
    'style' => 'int',
  ),
  'imagefilledellipse' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'center_x' => 'int',
    'center_y' => 'int',
    'width' => 'int',
    'height' => 'int',
    'color' => 'int',
  ),
  'imagefilledpolygon' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'points' => 'array<array-key, mixed>',
    'num_points_or_color' => 'int',
    'color=' => 'int|null',
  ),
  'imagefilledrectangle' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'x1' => 'int',
    'y1' => 'int',
    'x2' => 'int',
    'y2' => 'int',
    'color' => 'int',
  ),
  'imagefilltoborder' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'x' => 'int',
    'y' => 'int',
    'border_color' => 'int',
    'color' => 'int',
  ),
  'imagefilter' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'filter' => 'int',
    '...args=' => 'array<array-key, mixed>|bool|float|int',
  ),
  'imageflip' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'mode' => 'int',
  ),
  'imagefontheight' => 
  array (
    0 => 'int',
    'font' => 'int',
  ),
  'imagefontwidth' => 
  array (
    0 => 'int',
    'font' => 'int',
  ),
  'imageftbbox' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'size' => 'float',
    'angle' => 'float',
    'font_filename' => 'string',
    'string' => 'string',
    'options=' => 'array<array-key, mixed>',
  ),
  'imagefttext' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'image' => 'GdImage',
    'size' => 'float',
    'angle' => 'float',
    'x' => 'int',
    'y' => 'int',
    'color' => 'int',
    'font_filename' => 'string',
    'text' => 'string',
    'options=' => 'array<array-key, mixed>',
  ),
  'imagegammacorrect' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'input_gamma' => 'float',
    'output_gamma' => 'float',
  ),
  'imagegd' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'file=' => 'null|string',
  ),
  'imagegd2' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'file=' => 'null|string',
    'chunk_size=' => 'int',
    'mode=' => 'int',
  ),
  'imagegetclip' => 
  array (
    0 => 'array<int, int>',
    'image' => 'GdImage',
  ),
  'imagegif' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'file=' => 'null|resource|string',
  ),
  'imagegrabscreen' => 
  array (
    0 => 'GdImage|false',
  ),
  'imagegrabwindow' => 
  array (
    0 => 'GdImage|false',
    'handle' => 'int',
    'client_area=' => 'int',
  ),
  'imageinterlace' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'enable=' => 'bool|null',
  ),
  'imageistruecolor' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
  ),
  'imagejpeg' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'file=' => 'null|resource|string',
    'quality=' => 'int',
  ),
  'imagelayereffect' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'effect' => 'int',
  ),
  'imageline' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'x1' => 'int',
    'y1' => 'int',
    'x2' => 'int',
    'y2' => 'int',
    'color' => 'int',
  ),
  'imageloadfont' => 
  array (
    0 => 'GdFont|false',
    'filename' => 'string',
  ),
  'imageobj::pasteimage' => 
  array (
    0 => 'void',
    'srcImg' => 'imageObj',
    'transparentColorHex' => 'int',
    'dstX' => 'int',
    'dstY' => 'int',
    'angle' => 'int',
  ),
  'imageobj::saveimage' => 
  array (
    0 => 'int',
    'filename' => 'string',
    'oMap' => 'mapObj',
  ),
  'imageobj::savewebimage' => 
  array (
    0 => 'string',
  ),
  'imageopenpolygon' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'points' => 'array<array-key, mixed>',
    'num_points_or_color' => 'int',
    'color=' => 'int|null',
  ),
  'imagepalettecopy' => 
  array (
    0 => 'void',
    'dst' => 'GdImage',
    'src' => 'GdImage',
  ),
  'imagepalettetotruecolor' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
  ),
  'imagepng' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'file=' => 'null|resource|string',
    'quality=' => 'int',
    'filters=' => 'int',
  ),
  'imagepolygon' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'points' => 'array<array-key, mixed>',
    'num_points_or_color' => 'int',
    'color=' => 'int|null',
  ),
  'imagerectangle' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'x1' => 'int',
    'y1' => 'int',
    'x2' => 'int',
    'y2' => 'int',
    'color' => 'int',
  ),
  'imageresolution' => 
  array (
    0 => 'array<array-key, mixed>|bool',
    'image' => 'GdImage',
    'resolution_x=' => 'int|null',
    'resolution_y=' => 'int|null',
  ),
  'imagerotate' => 
  array (
    0 => 'GdImage|false',
    'image' => 'GdImage',
    'angle' => 'float',
    'background_color' => 'int',
  ),
  'imagesavealpha' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'enable' => 'bool',
  ),
  'imagescale' => 
  array (
    0 => 'GdImage|false',
    'image' => 'GdImage',
    'width' => 'int',
    'height=' => 'int',
    'mode=' => 'int',
  ),
  'imagesetbrush' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'brush' => 'GdImage',
  ),
  'imagesetclip' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'x1' => 'int',
    'y1' => 'int',
    'x2' => 'int',
    'y2' => 'int',
  ),
  'imagesetinterpolation' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'method=' => 'int',
  ),
  'imagesetpixel' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'x' => 'int',
    'y' => 'int',
    'color' => 'int',
  ),
  'imagesetstyle' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'style' => 'non-empty-array<array-key, mixed>',
  ),
  'imagesetthickness' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'thickness' => 'int',
  ),
  'imagesettile' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'tile' => 'GdImage',
  ),
  'imagestring' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'font' => 'int',
    'x' => 'int',
    'y' => 'int',
    'string' => 'string',
    'color' => 'int',
  ),
  'imagestringup' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'font' => 'int',
    'x' => 'int',
    'y' => 'int',
    'string' => 'string',
    'color' => 'int',
  ),
  'imagesx' => 
  array (
    0 => 'int',
    'image' => 'GdImage',
  ),
  'imagesy' => 
  array (
    0 => 'int',
    'image' => 'GdImage',
  ),
  'imagetruecolortopalette' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'dither' => 'bool',
    'num_colors' => 'int',
  ),
  'imagettfbbox' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'size' => 'float',
    'angle' => 'float',
    'font_filename' => 'string',
    'string' => 'string',
    'options=' => 'array<array-key, mixed>',
  ),
  'imagettftext' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'image' => 'GdImage',
    'size' => 'float',
    'angle' => 'float',
    'x' => 'int',
    'y' => 'int',
    'color' => 'int',
    'font_filename' => 'string',
    'text' => 'string',
    'options=' => 'array<array-key, mixed>',
  ),
  'imagetypes' => 
  array (
    0 => 'int',
  ),
  'imagewbmp' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'file=' => 'null|resource|string',
    'foreground_color=' => 'int|null',
  ),
  'imagewebp' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'file=' => 'null|resource|string',
    'quality=' => 'int',
  ),
  'imagexbm' => 
  array (
    0 => 'bool',
    'image' => 'GdImage',
    'filename' => 'null|string',
    'foreground_color=' => 'int|null',
  ),
  'imagick::__construct' => 
  array (
    0 => 'void',
    'files=' => 'array<array-key, string>|null|string',
  ),
  'imagick::__tostring' => 
  array (
    0 => 'string',
  ),
  'imagick::adaptiveblurimage' => 
  array (
    0 => 'bool',
    'radius' => 'float',
    'sigma' => 'float',
    'channel=' => 'int',
  ),
  'imagick::adaptiveresizeimage' => 
  array (
    0 => 'bool',
    'columns' => 'int',
    'rows' => 'int',
    'bestfit=' => 'bool',
    'legacy=' => 'bool',
  ),
  'imagick::adaptivesharpenimage' => 
  array (
    0 => 'bool',
    'radius' => 'float',
    'sigma' => 'float',
    'channel=' => 'int',
  ),
  'imagick::adaptivethresholdimage' => 
  array (
    0 => 'bool',
    'width' => 'int',
    'height' => 'int',
    'offset' => 'int',
  ),
  'imagick::addimage' => 
  array (
    0 => 'bool',
    'image' => 'Imagick',
  ),
  'imagick::addnoiseimage' => 
  array (
    0 => 'bool',
    'noise' => 'int',
    'channel=' => 'int',
  ),
  'imagick::affinetransformimage' => 
  array (
    0 => 'bool',
    'settings' => 'ImagickDraw',
  ),
  'imagick::animateimages' => 
  array (
    0 => 'bool',
    'x_server' => 'string',
  ),
  'imagick::annotateimage' => 
  array (
    0 => 'bool',
    'settings' => 'ImagickDraw',
    'x' => 'float',
    'y' => 'float',
    'angle' => 'float',
    'text' => 'string',
  ),
  'imagick::appendimages' => 
  array (
    0 => 'Imagick',
    'stack' => 'bool',
  ),
  'imagick::autogammaimage' => 
  array (
    0 => 'void',
    'channel=' => 'int|null',
  ),
  'imagick::autolevelimage' => 
  array (
    0 => 'bool',
    'channel=' => 'int',
  ),
  'imagick::autoorient' => 
  array (
    0 => 'void',
  ),
  'imagick::averageimages' => 
  array (
    0 => 'Imagick',
  ),
  'imagick::blackthresholdimage' => 
  array (
    0 => 'bool',
    'threshold_color' => 'ImagickPixel|string',
  ),
  'imagick::blueshiftimage' => 
  array (
    0 => 'bool',
    'factor=' => 'float',
  ),
  'imagick::blurimage' => 
  array (
    0 => 'bool',
    'radius' => 'float',
    'sigma' => 'float',
    'channel=' => 'int',
  ),
  'imagick::borderimage' => 
  array (
    0 => 'bool',
    'border_color' => 'ImagickPixel|string',
    'width' => 'int',
    'height' => 'int',
  ),
  'imagick::brightnesscontrastimage' => 
  array (
    0 => 'bool',
    'brightness' => 'float',
    'contrast' => 'float',
    'channel=' => 'int',
  ),
  'imagick::charcoalimage' => 
  array (
    0 => 'bool',
    'radius' => 'float',
    'sigma' => 'float',
  ),
  'imagick::chopimage' => 
  array (
    0 => 'bool',
    'width' => 'int',
    'height' => 'int',
    'x' => 'int',
    'y' => 'int',
  ),
  'imagick::clampimage' => 
  array (
    0 => 'bool',
    'channel=' => 'int',
  ),
  'imagick::clear' => 
  array (
    0 => 'bool',
  ),
  'imagick::clipimage' => 
  array (
    0 => 'bool',
  ),
  'imagick::clipimagepath' => 
  array (
    0 => 'void',
    'pathname' => 'string',
    'inside' => 'bool',
  ),
  'imagick::clippathimage' => 
  array (
    0 => 'bool',
    'pathname' => 'string',
    'inside' => 'bool',
  ),
  'imagick::clone' => 
  array (
    0 => 'Imagick',
  ),
  'imagick::clutimage' => 
  array (
    0 => 'bool',
    'lookup_table' => 'Imagick',
    'channel=' => 'int',
  ),
  'imagick::coalesceimages' => 
  array (
    0 => 'Imagick',
  ),
  'imagick::colorfloodfillimage' => 
  array (
    0 => 'bool',
    'fill' => 'mixed',
    'fuzz' => 'float',
    'bordercolor' => 'mixed',
    'x' => 'int',
    'y' => 'int',
  ),
  'imagick::colorizeimage' => 
  array (
    0 => 'bool',
    'colorize_color' => 'ImagickPixel|string',
    'opacity_color' => 'ImagickPixel|false|string',
    'legacy=' => 'bool|null',
  ),
  'imagick::colormatriximage' => 
  array (
    0 => 'bool',
    'color_matrix' => 'array<array-key, mixed>',
  ),
  'imagick::combineimages' => 
  array (
    0 => 'Imagick',
    'colorspace' => 'int',
  ),
  'imagick::commentimage' => 
  array (
    0 => 'bool',
    'comment' => 'string',
  ),
  'imagick::compareimagechannels' => 
  array (
    0 => 'list{Imagick, float}',
    'reference' => 'Imagick',
    'channel' => 'int',
    'metric' => 'int',
  ),
  'imagick::compareimagelayers' => 
  array (
    0 => 'Imagick',
    'metric' => 'int',
  ),
  'imagick::compareimages' => 
  array (
    0 => 'list{Imagick, float}',
    'reference' => 'Imagick',
    'metric' => 'int',
  ),
  'imagick::compositeimage' => 
  array (
    0 => 'bool',
    'composite_image' => 'Imagick',
    'composite' => 'int',
    'x' => 'int',
    'y' => 'int',
    'channel=' => 'int',
  ),
  'imagick::compositeimagegravity' => 
  array (
    0 => 'bool',
    'image' => 'Imagick',
    'composite_constant' => 'int',
    'gravity' => 'int',
  ),
  'imagick::contrastimage' => 
  array (
    0 => 'bool',
    'sharpen' => 'bool',
  ),
  'imagick::contraststretchimage' => 
  array (
    0 => 'bool',
    'black_point' => 'float',
    'white_point' => 'float',
    'channel=' => 'int',
  ),
  'imagick::convolveimage' => 
  array (
    0 => 'bool',
    'kernel' => 'ImagickKernel',
    'channel=' => 'int',
  ),
  'imagick::count' => 
  array (
    0 => 'int',
    'mode=' => 'int',
  ),
  'imagick::cropimage' => 
  array (
    0 => 'bool',
    'width' => 'int',
    'height' => 'int',
    'x' => 'int',
    'y' => 'int',
  ),
  'imagick::cropthumbnailimage' => 
  array (
    0 => 'bool',
    'width' => 'int',
    'height' => 'int',
    'legacy=' => 'bool',
  ),
  'imagick::current' => 
  array (
    0 => 'Imagick',
  ),
  'imagick::cyclecolormapimage' => 
  array (
    0 => 'bool',
    'displace' => 'int',
  ),
  'imagick::decipherimage' => 
  array (
    0 => 'bool',
    'passphrase' => 'string',
  ),
  'imagick::deconstructimages' => 
  array (
    0 => 'Imagick',
  ),
  'imagick::deleteimageartifact' => 
  array (
    0 => 'bool',
    'artifact' => 'string',
  ),
  'imagick::deleteimageproperty' => 
  array (
    0 => 'bool',
    'name' => 'string',
  ),
  'imagick::deskewimage' => 
  array (
    0 => 'bool',
    'threshold' => 'float',
  ),
  'imagick::despeckleimage' => 
  array (
    0 => 'bool',
  ),
  'imagick::destroy' => 
  array (
    0 => 'bool',
  ),
  'imagick::displayimage' => 
  array (
    0 => 'bool',
    'servername' => 'string',
  ),
  'imagick::displayimages' => 
  array (
    0 => 'bool',
    'servername' => 'string',
  ),
  'imagick::distortimage' => 
  array (
    0 => 'bool',
    'distortion' => 'int',
    'arguments' => 'array<array-key, mixed>',
    'bestfit' => 'bool',
  ),
  'imagick::drawimage' => 
  array (
    0 => 'bool',
    'drawing' => 'ImagickDraw',
  ),
  'imagick::edgeimage' => 
  array (
    0 => 'bool',
    'radius' => 'float',
  ),
  'imagick::embossimage' => 
  array (
    0 => 'bool',
    'radius' => 'float',
    'sigma' => 'float',
  ),
  'imagick::encipherimage' => 
  array (
    0 => 'bool',
    'passphrase' => 'string',
  ),
  'imagick::enhanceimage' => 
  array (
    0 => 'bool',
  ),
  'imagick::equalizeimage' => 
  array (
    0 => 'bool',
  ),
  'imagick::evaluateimage' => 
  array (
    0 => 'bool',
    'evaluate' => 'int',
    'constant' => 'float',
    'channel=' => 'int',
  ),
  'imagick::evaluateimages' => 
  array (
    0 => 'Imagick',
    'evaluate' => 'int',
  ),
  'imagick::exportimagepixels' => 
  array (
    0 => 'list<int>',
    'x' => 'int',
    'y' => 'int',
    'width' => 'int',
    'height' => 'int',
    'map' => 'string',
    'pixelstorage' => 'int',
  ),
  'imagick::extentimage' => 
  array (
    0 => 'bool',
    'width' => 'int',
    'height' => 'int',
    'x' => 'int',
    'y' => 'int',
  ),
  'imagick::filter' => 
  array (
    0 => 'void',
    'ImagickKernel' => 'ImagickKernel',
    'CHANNEL=' => 'int',
  ),
  'imagick::flattenimages' => 
  array (
    0 => 'Imagick',
  ),
  'imagick::flipimage' => 
  array (
    0 => 'bool',
  ),
  'imagick::floodfillpaintimage' => 
  array (
    0 => 'bool',
    'fill_color' => 'ImagickPixel|string',
    'fuzz' => 'float',
    'border_color' => 'ImagickPixel|string',
    'x' => 'int',
    'y' => 'int',
    'invert' => 'bool',
    'channel=' => 'int|null',
  ),
  'imagick::flopimage' => 
  array (
    0 => 'bool',
  ),
  'imagick::forwardfouriertransformimage' => 
  array (
    0 => 'bool',
    'magnitude' => 'bool',
  ),
  'imagick::frameimage' => 
  array (
    0 => 'bool',
    'matte_color' => 'ImagickPixel|string',
    'width' => 'int',
    'height' => 'int',
    'inner_bevel' => 'int',
    'outer_bevel' => 'int',
  ),
  'imagick::functionimage' => 
  array (
    0 => 'bool',
    'function' => 'int',
    'parameters' => 'array<array-key, mixed>',
    'channel=' => 'int',
  ),
  'imagick::fximage' => 
  array (
    0 => 'Imagick',
    'expression' => 'string',
    'channel=' => 'int',
  ),
  'imagick::gammaimage' => 
  array (
    0 => 'bool',
    'gamma' => 'float',
    'channel=' => 'int',
  ),
  'imagick::gaussianblurimage' => 
  array (
    0 => 'bool',
    'radius' => 'float',
    'sigma' => 'float',
    'channel=' => 'int',
  ),
  'imagick::getcolorspace' => 
  array (
    0 => 'int',
  ),
  'imagick::getcompression' => 
  array (
    0 => 'int',
  ),
  'imagick::getcompressionquality' => 
  array (
    0 => 'int',
  ),
  'imagick::getconfigureoptions' => 
  array (
    0 => 'array<array-key, mixed>',
    'pattern=' => 'string',
  ),
  'imagick::getcopyright' => 
  array (
    0 => 'string',
  ),
  'imagick::getfeatures' => 
  array (
    0 => 'string',
  ),
  'imagick::getfilename' => 
  array (
    0 => 'string',
  ),
  'imagick::getfont' => 
  array (
    0 => 'string',
  ),
  'imagick::getformat' => 
  array (
    0 => 'string',
  ),
  'imagick::getgravity' => 
  array (
    0 => 'int',
  ),
  'imagick::gethdrienabled' => 
  array (
    0 => 'bool',
  ),
  'imagick::gethomeurl' => 
  array (
    0 => 'string',
  ),
  'imagick::getimage' => 
  array (
    0 => 'Imagick',
  ),
  'imagick::getimagealphachannel' => 
  array (
    0 => 'bool',
  ),
  'imagick::getimageartifact' => 
  array (
    0 => 'null|string',
    'artifact' => 'string',
  ),
  'imagick::getimageattribute' => 
  array (
    0 => 'string',
    'key' => 'string',
  ),
  'imagick::getimagebackgroundcolor' => 
  array (
    0 => 'ImagickPixel',
  ),
  'imagick::getimageblob' => 
  array (
    0 => 'null|string',
  ),
  'imagick::getimageblueprimary' => 
  array (
    0 => 'array{x: float, y: float}',
  ),
  'imagick::getimagebordercolor' => 
  array (
    0 => 'ImagickPixel',
  ),
  'imagick::getimagechanneldepth' => 
  array (
    0 => 'int',
    'channel' => 'int',
  ),
  'imagick::getimagechanneldistortion' => 
  array (
    0 => 'float',
    'reference' => 'Imagick',
    'channel' => 'int',
    'metric' => 'int',
  ),
  'imagick::getimagechanneldistortions' => 
  array (
    0 => 'float',
    'reference_image' => 'Imagick',
    'metric' => 'int',
    'channel=' => 'int',
  ),
  'imagick::getimagechannelextrema' => 
  array (
    0 => 'array{maxima: int, minima: int}',
    'channel' => 'int',
  ),
  'imagick::getimagechannelkurtosis' => 
  array (
    0 => 'array{kurtosis: float, skewness: float}',
    'channel=' => 'int',
  ),
  'imagick::getimagechannelmean' => 
  array (
    0 => 'array{mean: float, standardDeviation: float}',
    'channel' => 'int',
  ),
  'imagick::getimagechannelrange' => 
  array (
    0 => 'array{maxima: float, minima: float}',
    'channel' => 'int',
  ),
  'imagick::getimagechannelstatistics' => 
  array (
    0 => 'array<int, array{depth: int, maxima: float, mean: float, minima: float, standardDeviation: float}>',
  ),
  'imagick::getimageclipmask' => 
  array (
    0 => 'Imagick',
  ),
  'imagick::getimagecolormapcolor' => 
  array (
    0 => 'ImagickPixel',
    'index' => 'int',
  ),
  'imagick::getimagecolors' => 
  array (
    0 => 'int',
  ),
  'imagick::getimagecolorspace' => 
  array (
    0 => 'int',
  ),
  'imagick::getimagecompose' => 
  array (
    0 => 'int',
  ),
  'imagick::getimagecompression' => 
  array (
    0 => 'int',
  ),
  'imagick::getimagecompressionquality' => 
  array (
    0 => 'int',
  ),
  'imagick::getimagedelay' => 
  array (
    0 => 'int',
  ),
  'imagick::getimagedepth' => 
  array (
    0 => 'int',
  ),
  'imagick::getimagedispose' => 
  array (
    0 => 'int',
  ),
  'imagick::getimagedistortion' => 
  array (
    0 => 'float',
    'reference' => 'Imagick',
    'metric' => 'int',
  ),
  'imagick::getimageextrema' => 
  array (
    0 => 'array{max: int, min: int}',
  ),
  'imagick::getimagefilename' => 
  array (
    0 => 'string',
  ),
  'imagick::getimageformat' => 
  array (
    0 => 'string',
  ),
  'imagick::getimagegamma' => 
  array (
    0 => 'float',
  ),
  'imagick::getimagegeometry' => 
  array (
    0 => 'array{height: int, width: int}',
  ),
  'imagick::getimagegravity' => 
  array (
    0 => 'int',
  ),
  'imagick::getimagegreenprimary' => 
  array (
    0 => 'array{x: float, y: float}',
  ),
  'imagick::getimageheight' => 
  array (
    0 => 'int',
  ),
  'imagick::getimagehistogram' => 
  array (
    0 => 'list<ImagickPixel>',
  ),
  'imagick::getimageindex' => 
  array (
    0 => 'int',
  ),
  'imagick::getimageinterlacescheme' => 
  array (
    0 => 'int',
  ),
  'imagick::getimageinterpolatemethod' => 
  array (
    0 => 'int',
  ),
  'imagick::getimageiterations' => 
  array (
    0 => 'int',
  ),
  'imagick::getimagelength' => 
  array (
    0 => 'int',
  ),
  'imagick::getimagemagicklicense' => 
  array (
    0 => 'string',
  ),
  'imagick::getimagematte' => 
  array (
    0 => 'bool',
  ),
  'imagick::getimagemattecolor' => 
  array (
    0 => 'ImagickPixel',
  ),
  'imagick::getimagemimetype' => 
  array (
    0 => 'string',
  ),
  'imagick::getimageorientation' => 
  array (
    0 => 'int',
  ),
  'imagick::getimagepage' => 
  array (
    0 => 'array{height: int, width: int, x: int, y: int}',
  ),
  'imagick::getimagepixelcolor' => 
  array (
    0 => 'ImagickPixel',
    'x' => 'int',
    'y' => 'int',
  ),
  'imagick::getimageprofile' => 
  array (
    0 => 'string',
    'name' => 'string',
  ),
  'imagick::getimageprofiles' => 
  array (
    0 => 'array<array-key, mixed>',
    'pattern=' => 'string',
    'include_values=' => 'bool',
  ),
  'imagick::getimageproperties' => 
  array (
    0 => 'array<int|string, string>',
    'pattern=' => 'string',
    'include_values=' => 'bool',
  ),
  'imagick::getimageproperty' => 
  array (
    0 => 'string',
    'name' => 'string',
  ),
  'imagick::getimageredprimary' => 
  array (
    0 => 'array{x: float, y: float}',
  ),
  'imagick::getimageregion' => 
  array (
    0 => 'Imagick',
    'width' => 'int',
    'height' => 'int',
    'x' => 'int',
    'y' => 'int',
  ),
  'imagick::getimagerenderingintent' => 
  array (
    0 => 'int',
  ),
  'imagick::getimageresolution' => 
  array (
    0 => 'array{x: float, y: float}',
  ),
  'imagick::getimagesblob' => 
  array (
    0 => 'string',
  ),
  'imagick::getimagescene' => 
  array (
    0 => 'int',
  ),
  'imagick::getimagesignature' => 
  array (
    0 => 'string',
  ),
  'imagick::getimagesize' => 
  array (
    0 => 'int',
  ),
  'imagick::getimagetickspersecond' => 
  array (
    0 => 'int',
  ),
  'imagick::getimagetotalinkdensity' => 
  array (
    0 => 'float',
  ),
  'imagick::getimagetype' => 
  array (
    0 => 'int',
  ),
  'imagick::getimageunits' => 
  array (
    0 => 'int',
  ),
  'imagick::getimagevirtualpixelmethod' => 
  array (
    0 => 'int',
  ),
  'imagick::getimagewhitepoint' => 
  array (
    0 => 'array{x: float, y: float}',
  ),
  'imagick::getimagewidth' => 
  array (
    0 => 'int',
  ),
  'imagick::getinterlacescheme' => 
  array (
    0 => 'int',
  ),
  'imagick::getiteratorindex' => 
  array (
    0 => 'int',
  ),
  'imagick::getnumberimages' => 
  array (
    0 => 'int',
  ),
  'imagick::getoption' => 
  array (
    0 => 'string',
    'key' => 'string',
  ),
  'imagick::getpackagename' => 
  array (
    0 => 'string',
  ),
  'imagick::getpage' => 
  array (
    0 => 'array{height: int, width: int, x: int, y: int}',
  ),
  'imagick::getpixeliterator' => 
  array (
    0 => 'ImagickPixelIterator',
  ),
  'imagick::getpixelregioniterator' => 
  array (
    0 => 'ImagickPixelIterator',
    'x' => 'int',
    'y' => 'int',
    'columns' => 'int',
    'rows' => 'int',
  ),
  'imagick::getpointsize' => 
  array (
    0 => 'float',
  ),
  'imagick::getquantum' => 
  array (
    0 => 'int',
  ),
  'imagick::getquantumdepth' => 
  array (
    0 => 'array{quantumDepthLong: int, quantumDepthString: string}',
  ),
  'imagick::getquantumrange' => 
  array (
    0 => 'array{quantumRangeLong: int, quantumRangeString: string}',
  ),
  'imagick::getregistry' => 
  array (
    0 => 'false|string',
    'key' => 'string',
  ),
  'imagick::getreleasedate' => 
  array (
    0 => 'string',
  ),
  'imagick::getresource' => 
  array (
    0 => 'int',
    'type' => 'int',
  ),
  'imagick::getresourcelimit' => 
  array (
    0 => 'float',
    'type' => 'int',
  ),
  'imagick::getsamplingfactors' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'imagick::getsize' => 
  array (
    0 => 'array{columns: int, rows: int}',
  ),
  'imagick::getsizeoffset' => 
  array (
    0 => 'int',
  ),
  'imagick::getversion' => 
  array (
    0 => 'array{versionNumber: int, versionString: string}',
  ),
  'imagick::haldclutimage' => 
  array (
    0 => 'bool',
    'clut' => 'Imagick',
    'channel=' => 'int',
  ),
  'imagick::hasnextimage' => 
  array (
    0 => 'bool',
  ),
  'imagick::haspreviousimage' => 
  array (
    0 => 'bool',
  ),
  'imagick::identifyformat' => 
  array (
    0 => 'string',
    'format' => 'string',
  ),
  'imagick::identifyimage' => 
  array (
    0 => 'array<string, mixed>',
    'append_raw_output=' => 'bool',
  ),
  'imagick::identifyimagetype' => 
  array (
    0 => 'int',
  ),
  'imagick::implodeimage' => 
  array (
    0 => 'bool',
    'radius' => 'float',
  ),
  'imagick::importimagepixels' => 
  array (
    0 => 'bool',
    'x' => 'int',
    'y' => 'int',
    'width' => 'int',
    'height' => 'int',
    'map' => 'string',
    'pixelstorage' => 'int',
    'pixels' => 'list<int>',
  ),
  'imagick::inversefouriertransformimage' => 
  array (
    0 => 'bool',
    'complement' => 'Imagick',
    'magnitude' => 'bool',
  ),
  'imagick::key' => 
  array (
    0 => 'int',
  ),
  'imagick::labelimage' => 
  array (
    0 => 'bool',
    'label' => 'string',
  ),
  'imagick::levelimage' => 
  array (
    0 => 'bool',
    'black_point' => 'float',
    'gamma' => 'float',
    'white_point' => 'float',
    'channel=' => 'int',
  ),
  'imagick::linearstretchimage' => 
  array (
    0 => 'bool',
    'black_point' => 'float',
    'white_point' => 'float',
  ),
  'imagick::liquidrescaleimage' => 
  array (
    0 => 'bool',
    'width' => 'int',
    'height' => 'int',
    'delta_x' => 'float',
    'rigidity' => 'float',
  ),
  'imagick::listregistry' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'imagick::localcontrastimage' => 
  array (
    0 => 'bool',
    'radius' => 'float',
    'strength' => 'float',
  ),
  'imagick::magnifyimage' => 
  array (
    0 => 'bool',
  ),
  'imagick::mapimage' => 
  array (
    0 => 'bool',
    'map' => 'Imagick',
    'dither' => 'bool',
  ),
  'imagick::mattefloodfillimage' => 
  array (
    0 => 'bool',
    'alpha' => 'float',
    'fuzz' => 'float',
    'bordercolor' => 'mixed',
    'x' => 'int',
    'y' => 'int',
  ),
  'imagick::medianfilterimage' => 
  array (
    0 => 'bool',
    'radius' => 'float',
  ),
  'imagick::mergeimagelayers' => 
  array (
    0 => 'Imagick',
    'layermethod' => 'int',
  ),
  'imagick::minifyimage' => 
  array (
    0 => 'bool',
  ),
  'imagick::modulateimage' => 
  array (
    0 => 'bool',
    'brightness' => 'float',
    'saturation' => 'float',
    'hue' => 'float',
  ),
  'imagick::montageimage' => 
  array (
    0 => 'Imagick',
    'settings' => 'ImagickDraw',
    'tile_geometry' => 'string',
    'thumbnail_geometry' => 'string',
    'monatgemode' => 'int',
    'frame' => 'string',
  ),
  'imagick::morphimages' => 
  array (
    0 => 'Imagick',
    'number_frames' => 'int',
  ),
  'imagick::morphology' => 
  array (
    0 => 'bool',
    'morphology' => 'int',
    'iterations' => 'int',
    'kernel' => 'ImagickKernel',
    'channel=' => 'int',
  ),
  'imagick::mosaicimages' => 
  array (
    0 => 'Imagick',
  ),
  'imagick::motionblurimage' => 
  array (
    0 => 'bool',
    'radius' => 'float',
    'sigma' => 'float',
    'angle' => 'float',
    'channel=' => 'int',
  ),
  'imagick::negateimage' => 
  array (
    0 => 'bool',
    'gray' => 'bool',
    'channel=' => 'int',
  ),
  'imagick::newimage' => 
  array (
    0 => 'bool',
    'columns' => 'int',
    'rows' => 'int',
    'background_color' => 'ImagickPixel|string',
    'format=' => 'null|string',
  ),
  'imagick::newpseudoimage' => 
  array (
    0 => 'bool',
    'columns' => 'int',
    'rows' => 'int',
    'pseudo_format' => 'string',
  ),
  'imagick::next' => 
  array (
    0 => 'void',
  ),
  'imagick::nextimage' => 
  array (
    0 => 'bool',
  ),
  'imagick::normalizeimage' => 
  array (
    0 => 'bool',
    'channel=' => 'int',
  ),
  'imagick::oilpaintimage' => 
  array (
    0 => 'bool',
    'radius' => 'float',
  ),
  'imagick::opaquepaintimage' => 
  array (
    0 => 'bool',
    'target_color' => 'ImagickPixel|string',
    'fill_color' => 'ImagickPixel|string',
    'fuzz' => 'float',
    'invert' => 'bool',
    'channel=' => 'int',
  ),
  'imagick::optimizeimagelayers' => 
  array (
    0 => 'Imagick',
  ),
  'imagick::orderedposterizeimage' => 
  array (
    0 => 'bool',
    'threshold_map' => 'string',
    'channel=' => 'int',
  ),
  'imagick::paintfloodfillimage' => 
  array (
    0 => 'bool',
    'fill' => 'mixed',
    'fuzz' => 'float',
    'bordercolor' => 'mixed',
    'x' => 'int',
    'y' => 'int',
    'channel=' => 'int',
  ),
  'imagick::paintopaqueimage' => 
  array (
    0 => 'bool',
    'target' => 'mixed',
    'fill' => 'mixed',
    'fuzz' => 'float',
    'channel=' => 'int',
  ),
  'imagick::painttransparentimage' => 
  array (
    0 => 'bool',
    'target' => 'mixed',
    'alpha' => 'float',
    'fuzz' => 'float',
  ),
  'imagick::pingimage' => 
  array (
    0 => 'bool',
    'filename' => 'string',
  ),
  'imagick::pingimageblob' => 
  array (
    0 => 'bool',
    'image' => 'string',
  ),
  'imagick::pingimagefile' => 
  array (
    0 => 'bool',
    'filehandle' => 'resource',
    'filename=' => 'null|string',
  ),
  'imagick::polaroidimage' => 
  array (
    0 => 'bool',
    'settings' => 'ImagickDraw',
    'angle' => 'float',
  ),
  'imagick::posterizeimage' => 
  array (
    0 => 'bool',
    'levels' => 'int',
    'dither' => 'bool',
  ),
  'imagick::previewimages' => 
  array (
    0 => 'bool',
    'preview' => 'int',
  ),
  'imagick::previousimage' => 
  array (
    0 => 'bool',
  ),
  'imagick::profileimage' => 
  array (
    0 => 'bool',
    'name' => 'string',
    'profile' => 'null|string',
  ),
  'imagick::quantizeimage' => 
  array (
    0 => 'bool',
    'number_colors' => 'int',
    'colorspace' => 'int',
    'tree_depth' => 'int',
    'dither' => 'bool',
    'measure_error' => 'bool',
  ),
  'imagick::quantizeimages' => 
  array (
    0 => 'bool',
    'number_colors' => 'int',
    'colorspace' => 'int',
    'tree_depth' => 'int',
    'dither' => 'bool',
    'measure_error' => 'bool',
  ),
  'imagick::queryfontmetrics' => 
  array (
    0 => 'array<array-key, mixed>',
    'settings' => 'ImagickDraw',
    'text' => 'string',
    'multiline=' => 'bool|null',
  ),
  'imagick::queryfonts' => 
  array (
    0 => 'array<array-key, mixed>',
    'pattern=' => 'string',
  ),
  'imagick::queryformats' => 
  array (
    0 => 'list<string>',
    'pattern=' => 'string',
  ),
  'imagick::radialblurimage' => 
  array (
    0 => 'bool',
    'angle' => 'float',
    'channel=' => 'int',
  ),
  'imagick::raiseimage' => 
  array (
    0 => 'bool',
    'width' => 'int',
    'height' => 'int',
    'x' => 'int',
    'y' => 'int',
    'raise' => 'bool',
  ),
  'imagick::randomthresholdimage' => 
  array (
    0 => 'bool',
    'low' => 'float',
    'high' => 'float',
    'channel=' => 'int',
  ),
  'imagick::readimage' => 
  array (
    0 => 'bool',
    'filename' => 'string',
  ),
  'imagick::readimageblob' => 
  array (
    0 => 'bool',
    'image' => 'string',
    'filename=' => 'null|string',
  ),
  'imagick::readimagefile' => 
  array (
    0 => 'bool',
    'filehandle' => 'resource',
    'filename=' => 'null|string',
  ),
  'imagick::readimages' => 
  array (
    0 => 'bool',
    'filenames' => 'array<array-key, mixed>',
  ),
  'imagick::recolorimage' => 
  array (
    0 => 'bool',
    'matrix' => 'list<float>',
  ),
  'imagick::reducenoiseimage' => 
  array (
    0 => 'bool',
    'radius' => 'float',
  ),
  'imagick::remapimage' => 
  array (
    0 => 'bool',
    'replacement' => 'Imagick',
    'dither_method' => 'int',
  ),
  'imagick::removeimage' => 
  array (
    0 => 'bool',
  ),
  'imagick::removeimageprofile' => 
  array (
    0 => 'string',
    'name' => 'string',
  ),
  'imagick::render' => 
  array (
    0 => 'bool',
  ),
  'imagick::resampleimage' => 
  array (
    0 => 'bool',
    'x_resolution' => 'float',
    'y_resolution' => 'float',
    'filter' => 'int',
    'blur' => 'float',
  ),
  'imagick::resetimagepage' => 
  array (
    0 => 'bool',
    'page' => 'string',
  ),
  'imagick::resizeimage' => 
  array (
    0 => 'bool',
    'columns' => 'int',
    'rows' => 'int',
    'filter' => 'int',
    'blur' => 'float',
    'bestfit=' => 'bool',
    'legacy=' => 'bool',
  ),
  'imagick::rewind' => 
  array (
    0 => 'void',
  ),
  'imagick::rollimage' => 
  array (
    0 => 'bool',
    'x' => 'int',
    'y' => 'int',
  ),
  'imagick::rotateimage' => 
  array (
    0 => 'bool',
    'background_color' => 'ImagickPixel|string',
    'degrees' => 'float',
  ),
  'imagick::rotationalblurimage' => 
  array (
    0 => 'bool',
    'angle' => 'float',
    'channel=' => 'int',
  ),
  'imagick::roundcorners' => 
  array (
    0 => 'bool',
    'x_rounding' => 'float',
    'y_rounding' => 'float',
    'stroke_width=' => 'float',
    'displace=' => 'float',
    'size_correction=' => 'float',
  ),
  'imagick::sampleimage' => 
  array (
    0 => 'bool',
    'columns' => 'int',
    'rows' => 'int',
  ),
  'imagick::scaleimage' => 
  array (
    0 => 'bool',
    'columns' => 'int',
    'rows' => 'int',
    'bestfit=' => 'bool',
    'legacy=' => 'bool',
  ),
  'imagick::segmentimage' => 
  array (
    0 => 'bool',
    'colorspace' => 'int',
    'cluster_threshold' => 'float',
    'smooth_threshold' => 'float',
    'verbose=' => 'bool',
  ),
  'imagick::selectiveblurimage' => 
  array (
    0 => 'bool',
    'radius' => 'float',
    'sigma' => 'float',
    'threshold' => 'float',
    'channel=' => 'int',
  ),
  'imagick::separateimagechannel' => 
  array (
    0 => 'bool',
    'channel' => 'int',
  ),
  'imagick::sepiatoneimage' => 
  array (
    0 => 'bool',
    'threshold' => 'float',
  ),
  'imagick::setantialias' => 
  array (
    0 => 'void',
    'antialias' => 'bool',
  ),
  'imagick::setbackgroundcolor' => 
  array (
    0 => 'bool',
    'background_color' => 'ImagickPixel|string',
  ),
  'imagick::setcolorspace' => 
  array (
    0 => 'bool',
    'colorspace' => 'int',
  ),
  'imagick::setcompression' => 
  array (
    0 => 'bool',
    'compression' => 'int',
  ),
  'imagick::setcompressionquality' => 
  array (
    0 => 'bool',
    'quality' => 'int',
  ),
  'imagick::setfilename' => 
  array (
    0 => 'bool',
    'filename' => 'string',
  ),
  'imagick::setfirstiterator' => 
  array (
    0 => 'bool',
  ),
  'imagick::setfont' => 
  array (
    0 => 'bool',
    'font' => 'string',
  ),
  'imagick::setformat' => 
  array (
    0 => 'bool',
    'format' => 'string',
  ),
  'imagick::setgravity' => 
  array (
    0 => 'bool',
    'gravity' => 'int',
  ),
  'imagick::setimage' => 
  array (
    0 => 'bool',
    'image' => 'Imagick',
  ),
  'imagick::setimagealpha' => 
  array (
    0 => 'bool',
    'alpha' => 'float',
  ),
  'imagick::setimagealphachannel' => 
  array (
    0 => 'bool',
    'alphachannel' => 'int',
  ),
  'imagick::setimageartifact' => 
  array (
    0 => 'bool',
    'artifact' => 'string',
    'value' => 'null|string',
  ),
  'imagick::setimageattribute' => 
  array (
    0 => 'void',
    'key' => 'string',
    'value' => 'string',
  ),
  'imagick::setimagebackgroundcolor' => 
  array (
    0 => 'bool',
    'background_color' => 'ImagickPixel|string',
  ),
  'imagick::setimagebias' => 
  array (
    0 => 'bool',
    'bias' => 'float',
  ),
  'imagick::setimagebiasquantum' => 
  array (
    0 => 'void',
    'bias' => 'string',
  ),
  'imagick::setimageblueprimary' => 
  array (
    0 => 'bool',
    'x' => 'float',
    'y' => 'float',
    'z' => 'float',
  ),
  'imagick::setimagebordercolor' => 
  array (
    0 => 'bool',
    'border_color' => 'ImagickPixel|string',
  ),
  'imagick::setimagechanneldepth' => 
  array (
    0 => 'bool',
    'channel' => 'int',
    'depth' => 'int',
  ),
  'imagick::setimagechannelmask' => 
  array (
    0 => 'int',
    'channel' => 'int',
  ),
  'imagick::setimageclipmask' => 
  array (
    0 => 'bool',
    'clip_mask' => 'Imagick',
  ),
  'imagick::setimagecolormapcolor' => 
  array (
    0 => 'bool',
    'index' => 'int',
    'color' => 'ImagickPixel',
  ),
  'imagick::setimagecolorspace' => 
  array (
    0 => 'bool',
    'colorspace' => 'int',
  ),
  'imagick::setimagecompose' => 
  array (
    0 => 'bool',
    'compose' => 'int',
  ),
  'imagick::setimagecompression' => 
  array (
    0 => 'bool',
    'compression' => 'int',
  ),
  'imagick::setimagecompressionquality' => 
  array (
    0 => 'bool',
    'quality' => 'int',
  ),
  'imagick::setimagedelay' => 
  array (
    0 => 'bool',
    'delay' => 'int',
  ),
  'imagick::setimagedepth' => 
  array (
    0 => 'bool',
    'depth' => 'int',
  ),
  'imagick::setimagedispose' => 
  array (
    0 => 'bool',
    'dispose' => 'int',
  ),
  'imagick::setimageextent' => 
  array (
    0 => 'bool',
    'columns' => 'int',
    'rows' => 'int',
  ),
  'imagick::setimagefilename' => 
  array (
    0 => 'bool',
    'filename' => 'string',
  ),
  'imagick::setimageformat' => 
  array (
    0 => 'bool',
    'format' => 'string',
  ),
  'imagick::setimagegamma' => 
  array (
    0 => 'bool',
    'gamma' => 'float',
  ),
  'imagick::setimagegravity' => 
  array (
    0 => 'bool',
    'gravity' => 'int',
  ),
  'imagick::setimagegreenprimary' => 
  array (
    0 => 'bool',
    'x' => 'float',
    'y' => 'float',
    'z' => 'float',
  ),
  'imagick::setimageindex' => 
  array (
    0 => 'bool',
    'index' => 'int',
  ),
  'imagick::setimageinterlacescheme' => 
  array (
    0 => 'bool',
    'interlace' => 'int',
  ),
  'imagick::setimageinterpolatemethod' => 
  array (
    0 => 'bool',
    'method' => 'int',
  ),
  'imagick::setimageiterations' => 
  array (
    0 => 'bool',
    'iterations' => 'int',
  ),
  'imagick::setimagematte' => 
  array (
    0 => 'bool',
    'matte' => 'bool',
  ),
  'imagick::setimagemattecolor' => 
  array (
    0 => 'bool',
    'matte_color' => 'ImagickPixel|string',
  ),
  'imagick::setimageopacity' => 
  array (
    0 => 'bool',
    'opacity' => 'float',
  ),
  'imagick::setimageorientation' => 
  array (
    0 => 'bool',
    'orientation' => 'int',
  ),
  'imagick::setimagepage' => 
  array (
    0 => 'bool',
    'width' => 'int',
    'height' => 'int',
    'x' => 'int',
    'y' => 'int',
  ),
  'imagick::setimageprofile' => 
  array (
    0 => 'bool',
    'name' => 'string',
    'profile' => 'string',
  ),
  'imagick::setimageproperty' => 
  array (
    0 => 'bool',
    'name' => 'string',
    'value' => 'string',
  ),
  'imagick::setimageredprimary' => 
  array (
    0 => 'bool',
    'x' => 'float',
    'y' => 'float',
    'z' => 'float',
  ),
  'imagick::setimagerenderingintent' => 
  array (
    0 => 'bool',
    'rendering_intent' => 'int',
  ),
  'imagick::setimageresolution' => 
  array (
    0 => 'bool',
    'x_resolution' => 'float',
    'y_resolution' => 'float',
  ),
  'imagick::setimagescene' => 
  array (
    0 => 'bool',
    'scene' => 'int',
  ),
  'imagick::setimagetickspersecond' => 
  array (
    0 => 'bool',
    'ticks_per_second' => 'int',
  ),
  'imagick::setimagetype' => 
  array (
    0 => 'bool',
    'image_type' => 'int',
  ),
  'imagick::setimageunits' => 
  array (
    0 => 'bool',
    'units' => 'int',
  ),
  'imagick::setimagevirtualpixelmethod' => 
  array (
    0 => 'bool',
    'method' => 'int',
  ),
  'imagick::setimagewhitepoint' => 
  array (
    0 => 'bool',
    'x' => 'float',
    'y' => 'float',
    'z' => 'float',
  ),
  'imagick::setinterlacescheme' => 
  array (
    0 => 'bool',
    'interlace' => 'int',
  ),
  'imagick::setiteratorindex' => 
  array (
    0 => 'bool',
    'index' => 'int',
  ),
  'imagick::setlastiterator' => 
  array (
    0 => 'bool',
  ),
  'imagick::setoption' => 
  array (
    0 => 'bool',
    'key' => 'string',
    'value' => 'string',
  ),
  'imagick::setpage' => 
  array (
    0 => 'bool',
    'width' => 'int',
    'height' => 'int',
    'x' => 'int',
    'y' => 'int',
  ),
  'imagick::setpointsize' => 
  array (
    0 => 'bool',
    'point_size' => 'float',
  ),
  'imagick::setprogressmonitor' => 
  array (
    0 => 'bool',
    'callback' => 'callable',
  ),
  'imagick::setregistry' => 
  array (
    0 => 'bool',
    'key' => 'string',
    'value' => 'string',
  ),
  'imagick::setresolution' => 
  array (
    0 => 'bool',
    'x_resolution' => 'float',
    'y_resolution' => 'float',
  ),
  'imagick::setresourcelimit' => 
  array (
    0 => 'bool',
    'type' => 'int',
    'limit' => 'int',
  ),
  'imagick::setsamplingfactors' => 
  array (
    0 => 'bool',
    'factors' => 'list<string>',
  ),
  'imagick::setsize' => 
  array (
    0 => 'bool',
    'columns' => 'int',
    'rows' => 'int',
  ),
  'imagick::setsizeoffset' => 
  array (
    0 => 'bool',
    'columns' => 'int',
    'rows' => 'int',
    'offset' => 'int',
  ),
  'imagick::settype' => 
  array (
    0 => 'bool',
    'imgtype' => 'int',
  ),
  'imagick::shadeimage' => 
  array (
    0 => 'bool',
    'gray' => 'bool',
    'azimuth' => 'float',
    'elevation' => 'float',
  ),
  'imagick::shadowimage' => 
  array (
    0 => 'bool',
    'opacity' => 'float',
    'sigma' => 'float',
    'x' => 'int',
    'y' => 'int',
  ),
  'imagick::sharpenimage' => 
  array (
    0 => 'bool',
    'radius' => 'float',
    'sigma' => 'float',
    'channel=' => 'int',
  ),
  'imagick::shaveimage' => 
  array (
    0 => 'bool',
    'columns' => 'int',
    'rows' => 'int',
  ),
  'imagick::shearimage' => 
  array (
    0 => 'bool',
    'background_color' => 'ImagickPixel|string',
    'x_shear' => 'float',
    'y_shear' => 'float',
  ),
  'imagick::sigmoidalcontrastimage' => 
  array (
    0 => 'bool',
    'sharpen' => 'bool',
    'alpha' => 'float',
    'beta' => 'float',
    'channel=' => 'int',
  ),
  'imagick::similarityimage' => 
  array (
    0 => 'Imagick',
    'image' => 'Imagick',
    '&offset=' => 'array<array-key, mixed>',
    '&similarity=' => 'float',
    'threshold=' => 'float',
    'metric=' => 'int',
  ),
  'imagick::sketchimage' => 
  array (
    0 => 'bool',
    'radius' => 'float',
    'sigma' => 'float',
    'angle' => 'float',
  ),
  'imagick::smushimages' => 
  array (
    0 => 'Imagick',
    'stack' => 'bool',
    'offset' => 'int',
  ),
  'imagick::solarizeimage' => 
  array (
    0 => 'bool',
    'threshold' => 'int',
  ),
  'imagick::sparsecolorimage' => 
  array (
    0 => 'bool',
    'sparsecolormethod' => 'int',
    'arguments' => 'array<array-key, mixed>',
    'channel=' => 'int',
  ),
  'imagick::spliceimage' => 
  array (
    0 => 'bool',
    'width' => 'int',
    'height' => 'int',
    'x' => 'int',
    'y' => 'int',
  ),
  'imagick::spreadimage' => 
  array (
    0 => 'bool',
    'radius' => 'float',
  ),
  'imagick::statisticimage' => 
  array (
    0 => 'bool',
    'type' => 'int',
    'width' => 'int',
    'height' => 'int',
    'channel=' => 'int',
  ),
  'imagick::steganoimage' => 
  array (
    0 => 'Imagick',
    'watermark' => 'Imagick',
    'offset' => 'int',
  ),
  'imagick::stereoimage' => 
  array (
    0 => 'bool',
    'offset_image' => 'Imagick',
  ),
  'imagick::stripimage' => 
  array (
    0 => 'bool',
  ),
  'imagick::subimagematch' => 
  array (
    0 => 'Imagick',
    'image' => 'Imagick',
    '&w_offset=' => 'array<array-key, mixed>',
    '&w_similarity=' => 'float',
    'threshold=' => 'float',
    'metric=' => 'int',
  ),
  'imagick::swirlimage' => 
  array (
    0 => 'bool',
    'degrees' => 'float',
  ),
  'imagick::textureimage' => 
  array (
    0 => 'Imagick',
    'texture' => 'Imagick',
  ),
  'imagick::thresholdimage' => 
  array (
    0 => 'bool',
    'threshold' => 'float',
    'channel=' => 'int',
  ),
  'imagick::thumbnailimage' => 
  array (
    0 => 'bool',
    'columns' => 'int|null',
    'rows' => 'int|null',
    'bestfit=' => 'bool',
    'fill=' => 'bool',
    'legacy=' => 'bool',
  ),
  'imagick::tintimage' => 
  array (
    0 => 'bool',
    'tint_color' => 'ImagickPixel|string',
    'opacity_color' => 'ImagickPixel|string',
    'legacy=' => 'bool',
  ),
  'imagick::transformimage' => 
  array (
    0 => 'Imagick',
    'crop' => 'string',
    'geometry' => 'string',
  ),
  'imagick::transformimagecolorspace' => 
  array (
    0 => 'bool',
    'colorspace' => 'int',
  ),
  'imagick::transparentpaintimage' => 
  array (
    0 => 'bool',
    'target_color' => 'ImagickPixel|string',
    'alpha' => 'float',
    'fuzz' => 'float',
    'invert' => 'bool',
  ),
  'imagick::transposeimage' => 
  array (
    0 => 'bool',
  ),
  'imagick::transverseimage' => 
  array (
    0 => 'bool',
  ),
  'imagick::trimimage' => 
  array (
    0 => 'bool',
    'fuzz' => 'float',
  ),
  'imagick::uniqueimagecolors' => 
  array (
    0 => 'bool',
  ),
  'imagick::unsharpmaskimage' => 
  array (
    0 => 'bool',
    'radius' => 'float',
    'sigma' => 'float',
    'amount' => 'float',
    'threshold' => 'float',
    'channel=' => 'int',
  ),
  'imagick::valid' => 
  array (
    0 => 'bool',
  ),
  'imagick::vignetteimage' => 
  array (
    0 => 'bool',
    'black_point' => 'float',
    'white_point' => 'float',
    'x' => 'int',
    'y' => 'int',
  ),
  'imagick::waveimage' => 
  array (
    0 => 'bool',
    'amplitude' => 'float',
    'length' => 'float',
  ),
  'imagick::whitethresholdimage' => 
  array (
    0 => 'bool',
    'threshold_color' => 'ImagickPixel|string',
  ),
  'imagick::writeimage' => 
  array (
    0 => 'bool',
    'filename=' => 'null|string',
  ),
  'imagick::writeimagefile' => 
  array (
    0 => 'bool',
    'filehandle' => 'resource',
    'format=' => 'null|string',
  ),
  'imagick::writeimages' => 
  array (
    0 => 'bool',
    'filename' => 'string',
    'adjoin' => 'bool',
  ),
  'imagick::writeimagesfile' => 
  array (
    0 => 'bool',
    'filehandle' => 'resource',
    'format=' => 'null|string',
  ),
  'imagickdraw::affine' => 
  array (
    0 => 'bool',
    'affine' => 'array<string, float>',
  ),
  'imagickdraw::annotation' => 
  array (
    0 => 'bool',
    'x' => 'float',
    'y' => 'float',
    'text' => 'string',
  ),
  'imagickdraw::arc' => 
  array (
    0 => 'bool',
    'start_x' => 'float',
    'start_y' => 'float',
    'end_x' => 'float',
    'end_y' => 'float',
    'start_angle' => 'float',
    'end_angle' => 'float',
  ),
  'imagickdraw::bezier' => 
  array (
    0 => 'bool',
    'coordinates' => 'list<array{x: float, y: float}>',
  ),
  'imagickdraw::circle' => 
  array (
    0 => 'bool',
    'origin_x' => 'float',
    'origin_y' => 'float',
    'perimeter_x' => 'float',
    'perimeter_y' => 'float',
  ),
  'imagickdraw::clear' => 
  array (
    0 => 'bool',
  ),
  'imagickdraw::clone' => 
  array (
    0 => 'ImagickDraw',
  ),
  'imagickdraw::color' => 
  array (
    0 => 'bool',
    'x' => 'float',
    'y' => 'float',
    'paint' => 'int',
  ),
  'imagickdraw::comment' => 
  array (
    0 => 'bool',
    'comment' => 'string',
  ),
  'imagickdraw::composite' => 
  array (
    0 => 'bool',
    'composite' => 'int',
    'x' => 'float',
    'y' => 'float',
    'width' => 'float',
    'height' => 'float',
    'image' => 'Imagick',
  ),
  'imagickdraw::destroy' => 
  array (
    0 => 'bool',
  ),
  'imagickdraw::ellipse' => 
  array (
    0 => 'bool',
    'origin_x' => 'float',
    'origin_y' => 'float',
    'radius_x' => 'float',
    'radius_y' => 'float',
    'angle_start' => 'float',
    'angle_end' => 'float',
  ),
  'imagickdraw::getbordercolor' => 
  array (
    0 => 'ImagickPixel',
  ),
  'imagickdraw::getclippath' => 
  array (
    0 => 'false|string',
  ),
  'imagickdraw::getcliprule' => 
  array (
    0 => 'int',
  ),
  'imagickdraw::getclipunits' => 
  array (
    0 => 'int',
  ),
  'imagickdraw::getdensity' => 
  array (
    0 => 'null|string',
  ),
  'imagickdraw::getfillcolor' => 
  array (
    0 => 'ImagickPixel',
  ),
  'imagickdraw::getfillopacity' => 
  array (
    0 => 'float',
  ),
  'imagickdraw::getfillrule' => 
  array (
    0 => 'int',
  ),
  'imagickdraw::getfont' => 
  array (
    0 => 'string',
  ),
  'imagickdraw::getfontfamily' => 
  array (
    0 => 'string',
  ),
  'imagickdraw::getfontresolution' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'imagickdraw::getfontsize' => 
  array (
    0 => 'float',
  ),
  'imagickdraw::getfontstretch' => 
  array (
    0 => 'int',
  ),
  'imagickdraw::getfontstyle' => 
  array (
    0 => 'int',
  ),
  'imagickdraw::getfontweight' => 
  array (
    0 => 'int',
  ),
  'imagickdraw::getgravity' => 
  array (
    0 => 'int',
  ),
  'imagickdraw::getopacity' => 
  array (
    0 => 'float',
  ),
  'imagickdraw::getstrokeantialias' => 
  array (
    0 => 'bool',
  ),
  'imagickdraw::getstrokecolor' => 
  array (
    0 => 'ImagickPixel',
  ),
  'imagickdraw::getstrokedasharray' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'imagickdraw::getstrokedashoffset' => 
  array (
    0 => 'float',
  ),
  'imagickdraw::getstrokelinecap' => 
  array (
    0 => 'int',
  ),
  'imagickdraw::getstrokelinejoin' => 
  array (
    0 => 'int',
  ),
  'imagickdraw::getstrokemiterlimit' => 
  array (
    0 => 'int',
  ),
  'imagickdraw::getstrokeopacity' => 
  array (
    0 => 'float',
  ),
  'imagickdraw::getstrokewidth' => 
  array (
    0 => 'float',
  ),
  'imagickdraw::gettextalignment' => 
  array (
    0 => 'int',
  ),
  'imagickdraw::gettextantialias' => 
  array (
    0 => 'bool',
  ),
  'imagickdraw::gettextdecoration' => 
  array (
    0 => 'int',
  ),
  'imagickdraw::gettextdirection' => 
  array (
    0 => 'int',
  ),
  'imagickdraw::gettextencoding' => 
  array (
    0 => 'string',
  ),
  'imagickdraw::gettextinterlinespacing' => 
  array (
    0 => 'float',
  ),
  'imagickdraw::gettextinterwordspacing' => 
  array (
    0 => 'float',
  ),
  'imagickdraw::gettextkerning' => 
  array (
    0 => 'float',
  ),
  'imagickdraw::gettextundercolor' => 
  array (
    0 => 'ImagickPixel',
  ),
  'imagickdraw::getvectorgraphics' => 
  array (
    0 => 'string',
  ),
  'imagickdraw::line' => 
  array (
    0 => 'bool',
    'start_x' => 'float',
    'start_y' => 'float',
    'end_x' => 'float',
    'end_y' => 'float',
  ),
  'imagickdraw::matte' => 
  array (
    0 => 'bool',
    'x' => 'float',
    'y' => 'float',
    'paintmethod' => 'int',
  ),
  'imagickdraw::pathclose' => 
  array (
    0 => 'bool',
  ),
  'imagickdraw::pathcurvetoabsolute' => 
  array (
    0 => 'bool',
    'x1' => 'float',
    'y1' => 'float',
    'x2' => 'float',
    'y2' => 'float',
    'x' => 'float',
    'y' => 'float',
  ),
  'imagickdraw::pathcurvetoquadraticbezierabsolute' => 
  array (
    0 => 'bool',
    'x1' => 'float',
    'y1' => 'float',
    'x_end' => 'float',
    'y' => 'float',
  ),
  'imagickdraw::pathcurvetoquadraticbezierrelative' => 
  array (
    0 => 'bool',
    'x1' => 'float',
    'y1' => 'float',
    'x_end' => 'float',
    'y' => 'float',
  ),
  'imagickdraw::pathcurvetoquadraticbeziersmoothabsolute' => 
  array (
    0 => 'bool',
    'x' => 'float',
    'y' => 'float',
  ),
  'imagickdraw::pathcurvetoquadraticbeziersmoothrelative' => 
  array (
    0 => 'bool',
    'x' => 'float',
    'y' => 'float',
  ),
  'imagickdraw::pathcurvetorelative' => 
  array (
    0 => 'bool',
    'x1' => 'float',
    'y1' => 'float',
    'x2' => 'float',
    'y2' => 'float',
    'x' => 'float',
    'y' => 'float',
  ),
  'imagickdraw::pathcurvetosmoothabsolute' => 
  array (
    0 => 'bool',
    'x2' => 'float',
    'y2' => 'float',
    'x' => 'float',
    'y' => 'float',
  ),
  'imagickdraw::pathcurvetosmoothrelative' => 
  array (
    0 => 'bool',
    'x2' => 'float',
    'y2' => 'float',
    'x' => 'float',
    'y' => 'float',
  ),
  'imagickdraw::pathellipticarcabsolute' => 
  array (
    0 => 'bool',
    'rx' => 'float',
    'ry' => 'float',
    'x_axis_rotation' => 'float',
    'large_arc' => 'bool',
    'sweep' => 'bool',
    'x' => 'float',
    'y' => 'float',
  ),
  'imagickdraw::pathellipticarcrelative' => 
  array (
    0 => 'bool',
    'rx' => 'float',
    'ry' => 'float',
    'x_axis_rotation' => 'float',
    'large_arc' => 'bool',
    'sweep' => 'bool',
    'x' => 'float',
    'y' => 'float',
  ),
  'imagickdraw::pathfinish' => 
  array (
    0 => 'bool',
  ),
  'imagickdraw::pathlinetoabsolute' => 
  array (
    0 => 'bool',
    'x' => 'float',
    'y' => 'float',
  ),
  'imagickdraw::pathlinetohorizontalabsolute' => 
  array (
    0 => 'bool',
    'x' => 'float',
  ),
  'imagickdraw::pathlinetohorizontalrelative' => 
  array (
    0 => 'bool',
    'x' => 'float',
  ),
  'imagickdraw::pathlinetorelative' => 
  array (
    0 => 'bool',
    'x' => 'float',
    'y' => 'float',
  ),
  'imagickdraw::pathlinetoverticalabsolute' => 
  array (
    0 => 'bool',
    'y' => 'float',
  ),
  'imagickdraw::pathlinetoverticalrelative' => 
  array (
    0 => 'bool',
    'y' => 'float',
  ),
  'imagickdraw::pathmovetoabsolute' => 
  array (
    0 => 'bool',
    'x' => 'float',
    'y' => 'float',
  ),
  'imagickdraw::pathmovetorelative' => 
  array (
    0 => 'bool',
    'x' => 'float',
    'y' => 'float',
  ),
  'imagickdraw::pathstart' => 
  array (
    0 => 'bool',
  ),
  'imagickdraw::point' => 
  array (
    0 => 'bool',
    'x' => 'float',
    'y' => 'float',
  ),
  'imagickdraw::polygon' => 
  array (
    0 => 'bool',
    'coordinates' => 'list<array{x: float, y: float}>',
  ),
  'imagickdraw::polyline' => 
  array (
    0 => 'bool',
    'coordinates' => 'list<array{x: float, y: float}>',
  ),
  'imagickdraw::pop' => 
  array (
    0 => 'bool',
  ),
  'imagickdraw::popclippath' => 
  array (
    0 => 'bool',
  ),
  'imagickdraw::popdefs' => 
  array (
    0 => 'bool',
  ),
  'imagickdraw::poppattern' => 
  array (
    0 => 'bool',
  ),
  'imagickdraw::push' => 
  array (
    0 => 'bool',
  ),
  'imagickdraw::pushclippath' => 
  array (
    0 => 'bool',
    'clip_mask_id' => 'string',
  ),
  'imagickdraw::pushdefs' => 
  array (
    0 => 'bool',
  ),
  'imagickdraw::pushpattern' => 
  array (
    0 => 'bool',
    'pattern_id' => 'string',
    'x' => 'float',
    'y' => 'float',
    'width' => 'float',
    'height' => 'float',
  ),
  'imagickdraw::rectangle' => 
  array (
    0 => 'bool',
    'top_left_x' => 'float',
    'top_left_y' => 'float',
    'bottom_right_x' => 'float',
    'bottom_right_y' => 'float',
  ),
  'imagickdraw::render' => 
  array (
    0 => 'bool',
  ),
  'imagickdraw::resetvectorgraphics' => 
  array (
    0 => 'bool',
  ),
  'imagickdraw::rotate' => 
  array (
    0 => 'bool',
    'degrees' => 'float',
  ),
  'imagickdraw::roundrectangle' => 
  array (
    0 => 'bool',
    'top_left_x' => 'float',
    'top_left_y' => 'float',
    'bottom_right_x' => 'float',
    'bottom_right_y' => 'float',
    'rounding_x' => 'float',
    'rounding_y' => 'float',
  ),
  'imagickdraw::scale' => 
  array (
    0 => 'bool',
    'x' => 'float',
    'y' => 'float',
  ),
  'imagickdraw::setbordercolor' => 
  array (
    0 => 'bool',
    'color' => 'ImagickPixel|string',
  ),
  'imagickdraw::setclippath' => 
  array (
    0 => 'bool',
    'clip_mask' => 'string',
  ),
  'imagickdraw::setcliprule' => 
  array (
    0 => 'bool',
    'fillrule' => 'int',
  ),
  'imagickdraw::setclipunits' => 
  array (
    0 => 'bool',
    'pathunits' => 'int',
  ),
  'imagickdraw::setdensity' => 
  array (
    0 => 'bool',
    'density' => 'string',
  ),
  'imagickdraw::setfillalpha' => 
  array (
    0 => 'bool',
    'alpha' => 'float',
  ),
  'imagickdraw::setfillcolor' => 
  array (
    0 => 'bool',
    'fill_color' => 'ImagickPixel|string',
  ),
  'imagickdraw::setfillopacity' => 
  array (
    0 => 'bool',
    'opacity' => 'float',
  ),
  'imagickdraw::setfillpatternurl' => 
  array (
    0 => 'bool',
    'fill_url' => 'string',
  ),
  'imagickdraw::setfillrule' => 
  array (
    0 => 'bool',
    'fillrule' => 'int',
  ),
  'imagickdraw::setfont' => 
  array (
    0 => 'bool',
    'font_name' => 'string',
  ),
  'imagickdraw::setfontfamily' => 
  array (
    0 => 'bool',
    'font_family' => 'string',
  ),
  'imagickdraw::setfontresolution' => 
  array (
    0 => 'bool',
    'x' => 'float',
    'y' => 'float',
  ),
  'imagickdraw::setfontsize' => 
  array (
    0 => 'bool',
    'point_size' => 'float',
  ),
  'imagickdraw::setfontstretch' => 
  array (
    0 => 'bool',
    'stretch' => 'int',
  ),
  'imagickdraw::setfontstyle' => 
  array (
    0 => 'bool',
    'style' => 'int',
  ),
  'imagickdraw::setfontweight' => 
  array (
    0 => 'bool',
    'weight' => 'int',
  ),
  'imagickdraw::setgravity' => 
  array (
    0 => 'bool',
    'gravity' => 'int',
  ),
  'imagickdraw::setopacity' => 
  array (
    0 => 'bool',
    'opacity' => 'float',
  ),
  'imagickdraw::setresolution' => 
  array (
    0 => 'bool',
    'resolution_x' => 'float',
    'resolution_y' => 'float',
  ),
  'imagickdraw::setstrokealpha' => 
  array (
    0 => 'bool',
    'alpha' => 'float',
  ),
  'imagickdraw::setstrokeantialias' => 
  array (
    0 => 'bool',
    'enabled' => 'bool',
  ),
  'imagickdraw::setstrokecolor' => 
  array (
    0 => 'bool',
    'color' => 'ImagickPixel|string',
  ),
  'imagickdraw::setstrokedasharray' => 
  array (
    0 => 'bool',
    'dashes' => 'list<float|int>|null',
  ),
  'imagickdraw::setstrokedashoffset' => 
  array (
    0 => 'bool',
    'dash_offset' => 'float',
  ),
  'imagickdraw::setstrokelinecap' => 
  array (
    0 => 'bool',
    'linecap' => 'int',
  ),
  'imagickdraw::setstrokelinejoin' => 
  array (
    0 => 'bool',
    'linejoin' => 'int',
  ),
  'imagickdraw::setstrokemiterlimit' => 
  array (
    0 => 'bool',
    'miterlimit' => 'int',
  ),
  'imagickdraw::setstrokeopacity' => 
  array (
    0 => 'bool',
    'opacity' => 'float',
  ),
  'imagickdraw::setstrokepatternurl' => 
  array (
    0 => 'bool',
    'stroke_url' => 'string',
  ),
  'imagickdraw::setstrokewidth' => 
  array (
    0 => 'bool',
    'width' => 'float',
  ),
  'imagickdraw::settextalignment' => 
  array (
    0 => 'bool',
    'align' => 'int',
  ),
  'imagickdraw::settextantialias' => 
  array (
    0 => 'bool',
    'antialias' => 'bool',
  ),
  'imagickdraw::settextdecoration' => 
  array (
    0 => 'bool',
    'decoration' => 'int',
  ),
  'imagickdraw::settextdirection' => 
  array (
    0 => 'bool',
    'direction' => 'int',
  ),
  'imagickdraw::settextencoding' => 
  array (
    0 => 'bool',
    'encoding' => 'string',
  ),
  'imagickdraw::settextinterlinespacing' => 
  array (
    0 => 'bool',
    'spacing' => 'float',
  ),
  'imagickdraw::settextinterwordspacing' => 
  array (
    0 => 'bool',
    'spacing' => 'float',
  ),
  'imagickdraw::settextkerning' => 
  array (
    0 => 'bool',
    'kerning' => 'float',
  ),
  'imagickdraw::settextundercolor' => 
  array (
    0 => 'bool',
    'under_color' => 'ImagickPixel|string',
  ),
  'imagickdraw::setvectorgraphics' => 
  array (
    0 => 'bool',
    'xml' => 'string',
  ),
  'imagickdraw::setviewbox' => 
  array (
    0 => 'bool',
    'left_x' => 'int',
    'top_y' => 'int',
    'right_x' => 'int',
    'bottom_y' => 'int',
  ),
  'imagickdraw::skewx' => 
  array (
    0 => 'bool',
    'degrees' => 'float',
  ),
  'imagickdraw::skewy' => 
  array (
    0 => 'bool',
    'degrees' => 'float',
  ),
  'imagickdraw::translate' => 
  array (
    0 => 'bool',
    'x' => 'float',
    'y' => 'float',
  ),
  'imagickkernel::addkernel' => 
  array (
    0 => 'void',
    'kernel' => 'ImagickKernel',
  ),
  'imagickkernel::addunitykernel' => 
  array (
    0 => 'void',
    'scale' => 'float',
  ),
  'imagickkernel::frombuiltin' => 
  array (
    0 => 'ImagickKernel',
    'kernel' => 'int',
    'shape' => 'string',
  ),
  'imagickkernel::frommatrix' => 
  array (
    0 => 'ImagickKernel',
    'matrix' => 'list<list<float>>',
    'origin=' => 'array<array-key, mixed>|null',
  ),
  'imagickkernel::getmatrix' => 
  array (
    0 => 'list<list<false|float>>',
  ),
  'imagickkernel::scale' => 
  array (
    0 => 'void',
    'scale' => 'float',
    'normalize_kernel=' => 'int|null',
  ),
  'imagickkernel::separate' => 
  array (
    0 => 'array<array-key, ImagickKernel>',
  ),
  'imagickkernel::seperate' => 
  array (
    0 => 'void',
  ),
  'imagickpixel::__construct' => 
  array (
    0 => 'void',
    'color=' => 'null|string',
  ),
  'imagickpixel::clear' => 
  array (
    0 => 'bool',
  ),
  'imagickpixel::clone' => 
  array (
    0 => 'void',
  ),
  'imagickpixel::destroy' => 
  array (
    0 => 'bool',
  ),
  'imagickpixel::getcolor' => 
  array (
    0 => 'array{a: float|int, b: float|int, g: float|int, r: float|int}',
    'normalized=' => '0|1|2',
  ),
  'imagickpixel::getcolorasstring' => 
  array (
    0 => 'string',
  ),
  'imagickpixel::getcolorcount' => 
  array (
    0 => 'int',
  ),
  'imagickpixel::getcolorvalue' => 
  array (
    0 => 'float',
    'color' => 'int',
  ),
  'imagickpixel::gethsl' => 
  array (
    0 => 'array{hue: float, luminosity: float, saturation: float}',
  ),
  'imagickpixel::getindex' => 
  array (
    0 => 'int',
  ),
  'imagickpixel::ispixelsimilar' => 
  array (
    0 => 'bool|null',
    'color' => 'ImagickPixel',
    'fuzz' => 'float',
  ),
  'imagickpixel::ispixelsimilarquantum' => 
  array (
    0 => 'bool|null',
    'color' => 'string',
    'fuzz_quantum_range_scaled_by_square_root_of_three' => 'float',
  ),
  'imagickpixel::issimilar' => 
  array (
    0 => 'bool|null',
    'color' => 'ImagickPixel',
    'fuzz_quantum_range_scaled_by_square_root_of_three' => 'float',
  ),
  'imagickpixel::setcolor' => 
  array (
    0 => 'bool',
    'color' => 'string',
  ),
  'imagickpixel::setcolorcount' => 
  array (
    0 => 'bool',
    'color_count' => 'int',
  ),
  'imagickpixel::setcolorfrompixel' => 
  array (
    0 => 'bool',
    'pixel' => 'ImagickPixel',
  ),
  'imagickpixel::setcolorvalue' => 
  array (
    0 => 'bool',
    'color' => 'int',
    'value' => 'float',
  ),
  'imagickpixel::setcolorvaluequantum' => 
  array (
    0 => 'bool',
    'color' => 'int',
    'value' => 'IMAGICK_QUANTUM_TYPE',
  ),
  'imagickpixel::sethsl' => 
  array (
    0 => 'bool',
    'hue' => 'float',
    'saturation' => 'float',
    'luminosity' => 'float',
  ),
  'imagickpixel::setindex' => 
  array (
    0 => 'bool',
    'index' => 'IMAGICK_QUANTUM_TYPE',
  ),
  'imagickpixeliterator::clear' => 
  array (
    0 => 'bool',
  ),
  'imagickpixeliterator::destroy' => 
  array (
    0 => 'bool',
  ),
  'imagickpixeliterator::getcurrentiteratorrow' => 
  array (
    0 => 'array<array-key, mixed>|null',
  ),
  'imagickpixeliterator::getiteratorrow' => 
  array (
    0 => 'int',
  ),
  'imagickpixeliterator::getnextiteratorrow' => 
  array (
    0 => 'array<array-key, mixed>|null',
  ),
  'imagickpixeliterator::getpreviousiteratorrow' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'imagickpixeliterator::key' => 
  array (
    0 => 'int',
  ),
  'imagickpixeliterator::newpixeliterator' => 
  array (
    0 => 'bool',
    'imagick' => 'Imagick',
  ),
  'imagickpixeliterator::newpixelregioniterator' => 
  array (
    0 => 'bool',
    'imagick' => 'Imagick',
    'x' => 'int',
    'y' => 'int',
    'columns' => 'int',
    'rows' => 'int',
  ),
  'imagickpixeliterator::next' => 
  array (
    0 => 'void',
  ),
  'imagickpixeliterator::resetiterator' => 
  array (
    0 => 'bool',
  ),
  'imagickpixeliterator::rewind' => 
  array (
    0 => 'void',
  ),
  'imagickpixeliterator::setiteratorfirstrow' => 
  array (
    0 => 'bool',
  ),
  'imagickpixeliterator::setiteratorlastrow' => 
  array (
    0 => 'bool',
  ),
  'imagickpixeliterator::setiteratorrow' => 
  array (
    0 => 'bool',
    'row' => 'int',
  ),
  'imagickpixeliterator::synciterator' => 
  array (
    0 => 'bool',
  ),
  'imagickpixeliterator::valid' => 
  array (
    0 => 'bool',
  ),
  'imap_8bit' => 
  array (
    0 => 'false|string',
    'string' => 'string',
  ),
  'imap_alerts' => 
  array (
    0 => 'array<array-key, mixed>|false',
  ),
  'imap_append' => 
  array (
    0 => 'bool',
    'imap' => 'IMAP\\Connection',
    'folder' => 'string',
    'message' => 'string',
    'options=' => 'null|string',
    'internal_date=' => 'null|string',
  ),
  'imap_base64' => 
  array (
    0 => 'false|string',
    'string' => 'string',
  ),
  'imap_binary' => 
  array (
    0 => 'false|string',
    'string' => 'string',
  ),
  'imap_body' => 
  array (
    0 => 'false|string',
    'imap' => 'IMAP\\Connection',
    'message_num' => 'int',
    'flags=' => 'int',
  ),
  'imap_bodystruct' => 
  array (
    0 => 'false|stdClass',
    'imap' => 'IMAP\\Connection',
    'message_num' => 'int',
    'section' => 'string',
  ),
  'imap_check' => 
  array (
    0 => 'false|stdClass',
    'imap' => 'IMAP\\Connection',
  ),
  'imap_clearflag_full' => 
  array (
    0 => 'true',
    'imap' => 'IMAP\\Connection',
    'sequence' => 'string',
    'flag' => 'string',
    'options=' => 'int',
  ),
  'imap_close' => 
  array (
    0 => 'true',
    'imap' => 'IMAP\\Connection',
    'flags=' => 'int',
  ),
  'imap_create' => 
  array (
    0 => 'bool',
    'imap' => 'IMAP\\Connection',
    'mailbox' => 'string',
  ),
  'imap_createmailbox' => 
  array (
    0 => 'bool',
    'imap' => 'IMAP\\Connection',
    'mailbox' => 'string',
  ),
  'imap_delete' => 
  array (
    0 => 'true',
    'imap' => 'IMAP\\Connection',
    'message_nums' => 'string',
    'flags=' => 'int',
  ),
  'imap_deletemailbox' => 
  array (
    0 => 'bool',
    'imap' => 'IMAP\\Connection',
    'mailbox' => 'string',
  ),
  'imap_errors' => 
  array (
    0 => 'array<array-key, mixed>|false',
  ),
  'imap_expunge' => 
  array (
    0 => 'true',
    'imap' => 'IMAP\\Connection',
  ),
  'imap_fetch_overview' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'imap' => 'IMAP\\Connection',
    'sequence' => 'string',
    'flags=' => 'int',
  ),
  'imap_fetchbody' => 
  array (
    0 => 'false|string',
    'imap' => 'IMAP\\Connection',
    'message_num' => 'int',
    'section' => 'string',
    'flags=' => 'int',
  ),
  'imap_fetchheader' => 
  array (
    0 => 'false|string',
    'imap' => 'IMAP\\Connection',
    'message_num' => 'int',
    'flags=' => 'int',
  ),
  'imap_fetchmime' => 
  array (
    0 => 'false|string',
    'imap' => 'IMAP\\Connection',
    'message_num' => 'int',
    'section' => 'string',
    'flags=' => 'int',
  ),
  'imap_fetchstructure' => 
  array (
    0 => 'false|stdClass',
    'imap' => 'IMAP\\Connection',
    'message_num' => 'int',
    'flags=' => 'int',
  ),
  'imap_fetchtext' => 
  array (
    0 => 'false|string',
    'imap' => 'IMAP\\Connection',
    'message_num' => 'int',
    'flags=' => 'int',
  ),
  'imap_gc' => 
  array (
    0 => 'true',
    'imap' => 'IMAP\\Connection',
    'flags' => 'int',
  ),
  'imap_get_quota' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'imap' => 'IMAP\\Connection',
    'quota_root' => 'string',
  ),
  'imap_get_quotaroot' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'imap' => 'IMAP\\Connection',
    'mailbox' => 'string',
  ),
  'imap_getacl' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'imap' => 'IMAP\\Connection',
    'mailbox' => 'string',
  ),
  'imap_getmailboxes' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'imap' => 'IMAP\\Connection',
    'reference' => 'string',
    'pattern' => 'string',
  ),
  'imap_getsubscribed' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'imap' => 'IMAP\\Connection',
    'reference' => 'string',
    'pattern' => 'string',
  ),
  'imap_header' => 
  array (
    0 => 'false|stdClass',
    'stream_id' => 'resource',
    'msg_no' => 'int',
    'from_length=' => 'int',
    'subject_length=' => 'int',
    'default_host=' => 'string',
  ),
  'imap_headerinfo' => 
  array (
    0 => 'false|stdClass',
    'imap' => 'IMAP\\Connection',
    'message_num' => 'int',
    'from_length=' => 'int',
    'subject_length=' => 'int',
  ),
  'imap_headers' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'imap' => 'IMAP\\Connection',
  ),
  'imap_is_open' => 
  array (
    0 => 'bool',
    'imap' => 'IMAP\\Connection',
  ),
  'imap_last_error' => 
  array (
    0 => 'false|string',
  ),
  'imap_list' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'imap' => 'IMAP\\Connection',
    'reference' => 'string',
    'pattern' => 'string',
  ),
  'imap_listmailbox' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'imap' => 'IMAP\\Connection',
    'reference' => 'string',
    'pattern' => 'string',
  ),
  'imap_listscan' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'imap' => 'IMAP\\Connection',
    'reference' => 'string',
    'pattern' => 'string',
    'content' => 'string',
  ),
  'imap_listsubscribed' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'imap' => 'IMAP\\Connection',
    'reference' => 'string',
    'pattern' => 'string',
  ),
  'imap_lsub' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'imap' => 'IMAP\\Connection',
    'reference' => 'string',
    'pattern' => 'string',
  ),
  'imap_mail' => 
  array (
    0 => 'bool',
    'to' => 'string',
    'subject' => 'string',
    'message' => 'string',
    'additional_headers=' => 'null|string',
    'cc=' => 'null|string',
    'bcc=' => 'null|string',
    'return_path=' => 'null|string',
  ),
  'imap_mail_compose' => 
  array (
    0 => 'false|string',
    'envelope' => 'array<array-key, mixed>',
    'bodies' => 'array<array-key, mixed>',
  ),
  'imap_mail_copy' => 
  array (
    0 => 'bool',
    'imap' => 'IMAP\\Connection',
    'message_nums' => 'string',
    'mailbox' => 'string',
    'flags=' => 'int',
  ),
  'imap_mail_move' => 
  array (
    0 => 'bool',
    'imap' => 'IMAP\\Connection',
    'message_nums' => 'string',
    'mailbox' => 'string',
    'flags=' => 'int',
  ),
  'imap_mailboxmsginfo' => 
  array (
    0 => 'stdClass',
    'imap' => 'IMAP\\Connection',
  ),
  'imap_mime_header_decode' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'string' => 'string',
  ),
  'imap_msgno' => 
  array (
    0 => 'int',
    'imap' => 'IMAP\\Connection',
    'message_uid' => 'int',
  ),
  'imap_mutf7_to_utf8' => 
  array (
    0 => 'false|string',
    'string' => 'string',
  ),
  'imap_num_msg' => 
  array (
    0 => 'false|int',
    'imap' => 'IMAP\\Connection',
  ),
  'imap_num_recent' => 
  array (
    0 => 'int',
    'imap' => 'IMAP\\Connection',
  ),
  'imap_open' => 
  array (
    0 => 'IMAP\\Connection|false',
    'mailbox' => 'string',
    'user' => 'string',
    'password' => 'string',
    'flags=' => 'int',
    'retries=' => 'int',
    'options=' => 'array<array-key, mixed>',
  ),
  'imap_ping' => 
  array (
    0 => 'bool',
    'imap' => 'IMAP\\Connection',
  ),
  'imap_qprint' => 
  array (
    0 => 'false|string',
    'string' => 'string',
  ),
  'imap_rename' => 
  array (
    0 => 'bool',
    'imap' => 'IMAP\\Connection',
    'from' => 'string',
    'to' => 'string',
  ),
  'imap_renamemailbox' => 
  array (
    0 => 'bool',
    'imap' => 'IMAP\\Connection',
    'from' => 'string',
    'to' => 'string',
  ),
  'imap_reopen' => 
  array (
    0 => 'bool',
    'imap' => 'IMAP\\Connection',
    'mailbox' => 'string',
    'flags=' => 'int',
    'retries=' => 'int',
  ),
  'imap_rfc822_parse_adrlist' => 
  array (
    0 => 'array<array-key, mixed>',
    'string' => 'string',
    'default_hostname' => 'string',
  ),
  'imap_rfc822_parse_headers' => 
  array (
    0 => 'stdClass',
    'headers' => 'string',
    'default_hostname=' => 'string',
  ),
  'imap_rfc822_write_address' => 
  array (
    0 => 'false|string',
    'mailbox' => 'string',
    'hostname' => 'string',
    'personal' => 'string',
  ),
  'imap_savebody' => 
  array (
    0 => 'bool',
    'imap' => 'IMAP\\Connection',
    'file' => 'resource|string',
    'message_num' => 'int',
    'section=' => 'string',
    'flags=' => 'int',
  ),
  'imap_scan' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'imap' => 'IMAP\\Connection',
    'reference' => 'string',
    'pattern' => 'string',
    'content' => 'string',
  ),
  'imap_scanmailbox' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'imap' => 'IMAP\\Connection',
    'reference' => 'string',
    'pattern' => 'string',
    'content' => 'string',
  ),
  'imap_search' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'imap' => 'IMAP\\Connection',
    'criteria' => 'string',
    'flags=' => 'int',
    'charset=' => 'string',
  ),
  'imap_set_quota' => 
  array (
    0 => 'bool',
    'imap' => 'IMAP\\Connection',
    'quota_root' => 'string',
    'mailbox_size' => 'int',
  ),
  'imap_setacl' => 
  array (
    0 => 'bool',
    'imap' => 'IMAP\\Connection',
    'mailbox' => 'string',
    'user_id' => 'string',
    'rights' => 'string',
  ),
  'imap_setflag_full' => 
  array (
    0 => 'true',
    'imap' => 'IMAP\\Connection',
    'sequence' => 'string',
    'flag' => 'string',
    'options=' => 'int',
  ),
  'imap_sort' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'imap' => 'IMAP\\Connection',
    'criteria' => 'int',
    'reverse' => 'bool',
    'flags=' => 'int',
    'search_criteria=' => 'null|string',
    'charset=' => 'null|string',
  ),
  'imap_status' => 
  array (
    0 => 'false|stdClass',
    'imap' => 'IMAP\\Connection',
    'mailbox' => 'string',
    'flags' => 'int',
  ),
  'imap_subscribe' => 
  array (
    0 => 'bool',
    'imap' => 'IMAP\\Connection',
    'mailbox' => 'string',
  ),
  'imap_thread' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'imap' => 'IMAP\\Connection',
    'flags=' => 'int',
  ),
  'imap_timeout' => 
  array (
    0 => 'bool|int',
    'timeout_type' => 'int',
    'timeout=' => 'int',
  ),
  'imap_uid' => 
  array (
    0 => 'false|int',
    'imap' => 'IMAP\\Connection',
    'message_num' => 'int',
  ),
  'imap_undelete' => 
  array (
    0 => 'true',
    'imap' => 'IMAP\\Connection',
    'message_nums' => 'string',
    'flags=' => 'int',
  ),
  'imap_unsubscribe' => 
  array (
    0 => 'bool',
    'imap' => 'IMAP\\Connection',
    'mailbox' => 'string',
  ),
  'imap_utf7_decode' => 
  array (
    0 => 'false|string',
    'string' => 'string',
  ),
  'imap_utf7_encode' => 
  array (
    0 => 'string',
    'string' => 'string',
  ),
  'imap_utf8' => 
  array (
    0 => 'string',
    'mime_encoded_text' => 'string',
  ),
  'imap_utf8_to_mutf7' => 
  array (
    0 => 'false|string',
    'string' => 'string',
  ),
  'implode' => 
  array (
    0 => 'string',
    'separator' => 'string',
    'array=' => 'array<array-key, mixed>|null',
  ),
  'implode\'1' => 
  array (
    0 => 'string',
    'separator' => 'array<array-key, mixed>',
  ),
  'import_request_variables' => 
  array (
    0 => 'bool',
    'types' => 'string',
    'prefix=' => 'string',
  ),
  'in_array' => 
  array (
    0 => 'bool',
    'needle' => 'mixed',
    'haystack' => 'array<array-key, mixed>',
    'strict=' => 'bool',
  ),
  'inclued_get_data' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'inet_ntop' => 
  array (
    0 => 'false|string',
    'ip' => 'string',
  ),
  'inet_pton' => 
  array (
    0 => 'false|string',
    'ip' => 'string',
  ),
  'infiniteiterator::getinneriterator' => 
  array (
    0 => 'Iterator|null',
  ),
  'infiniteiterator::key' => 
  array (
    0 => 'scalar',
  ),
  'infiniteiterator::next' => 
  array (
    0 => 'void',
  ),
  'infiniteiterator::rewind' => 
  array (
    0 => 'void',
  ),
  'infiniteiterator::valid' => 
  array (
    0 => 'bool',
  ),
  'inflate_add' => 
  array (
    0 => 'false|string',
    'context' => 'InflateContext',
    'data' => 'string',
    'flush_mode=' => 'int',
  ),
  'inflate_get_read_len' => 
  array (
    0 => 'int',
    'context' => 'InflateContext',
  ),
  'inflate_get_status' => 
  array (
    0 => 'int',
    'context' => 'InflateContext',
  ),
  'inflate_init' => 
  array (
    0 => 'InflateContext|false',
    'encoding' => 'int',
    'options=' => 'array<array-key, mixed>',
  ),
  'ingres_autocommit' => 
  array (
    0 => 'bool',
    'link' => 'resource',
  ),
  'ingres_autocommit_state' => 
  array (
    0 => 'bool',
    'link' => 'resource',
  ),
  'ingres_charset' => 
  array (
    0 => 'string',
    'link' => 'resource',
  ),
  'ingres_close' => 
  array (
    0 => 'bool',
    'link' => 'resource',
  ),
  'ingres_commit' => 
  array (
    0 => 'bool',
    'link' => 'resource',
  ),
  'ingres_connect' => 
  array (
    0 => 'resource',
    'database=' => 'string',
    'username=' => 'string',
    'password=' => 'string',
    'options=' => 'array<array-key, mixed>',
  ),
  'ingres_cursor' => 
  array (
    0 => 'string',
    'result' => 'resource',
  ),
  'ingres_errno' => 
  array (
    0 => 'int',
    'link=' => 'resource',
  ),
  'ingres_error' => 
  array (
    0 => 'string',
    'link=' => 'resource',
  ),
  'ingres_errsqlstate' => 
  array (
    0 => 'string',
    'link=' => 'resource',
  ),
  'ingres_escape_string' => 
  array (
    0 => 'string',
    'link' => 'resource',
    'source_string' => 'string',
  ),
  'ingres_execute' => 
  array (
    0 => 'bool',
    'result' => 'resource',
    'params=' => 'array<array-key, mixed>',
    'types=' => 'string',
  ),
  'ingres_fetch_array' => 
  array (
    0 => 'array<array-key, mixed>',
    'result' => 'resource',
    'result_type=' => 'int',
  ),
  'ingres_fetch_assoc' => 
  array (
    0 => 'array<array-key, mixed>',
    'result' => 'resource',
  ),
  'ingres_fetch_object' => 
  array (
    0 => 'object',
    'result' => 'resource',
    'result_type=' => 'int',
  ),
  'ingres_fetch_proc_return' => 
  array (
    0 => 'int',
    'result' => 'resource',
  ),
  'ingres_fetch_row' => 
  array (
    0 => 'array<array-key, mixed>',
    'result' => 'resource',
  ),
  'ingres_field_length' => 
  array (
    0 => 'int',
    'result' => 'resource',
    'index' => 'int',
  ),
  'ingres_field_name' => 
  array (
    0 => 'string',
    'result' => 'resource',
    'index' => 'int',
  ),
  'ingres_field_nullable' => 
  array (
    0 => 'bool',
    'result' => 'resource',
    'index' => 'int',
  ),
  'ingres_field_precision' => 
  array (
    0 => 'int',
    'result' => 'resource',
    'index' => 'int',
  ),
  'ingres_field_scale' => 
  array (
    0 => 'int',
    'result' => 'resource',
    'index' => 'int',
  ),
  'ingres_field_type' => 
  array (
    0 => 'string',
    'result' => 'resource',
    'index' => 'int',
  ),
  'ingres_free_result' => 
  array (
    0 => 'bool',
    'result' => 'resource',
  ),
  'ingres_next_error' => 
  array (
    0 => 'bool',
    'link=' => 'resource',
  ),
  'ingres_num_fields' => 
  array (
    0 => 'int',
    'result' => 'resource',
  ),
  'ingres_num_rows' => 
  array (
    0 => 'int',
    'result' => 'resource',
  ),
  'ingres_pconnect' => 
  array (
    0 => 'resource',
    'database=' => 'string',
    'username=' => 'string',
    'password=' => 'string',
    'options=' => 'array<array-key, mixed>',
  ),
  'ingres_prepare' => 
  array (
    0 => 'mixed',
    'link' => 'resource',
    'query' => 'string',
  ),
  'ingres_query' => 
  array (
    0 => 'mixed',
    'link' => 'resource',
    'query' => 'string',
    'params=' => 'array<array-key, mixed>',
    'types=' => 'string',
  ),
  'ingres_result_seek' => 
  array (
    0 => 'bool',
    'result' => 'resource',
    'position' => 'int',
  ),
  'ingres_rollback' => 
  array (
    0 => 'bool',
    'link' => 'resource',
  ),
  'ingres_set_environment' => 
  array (
    0 => 'bool',
    'link' => 'resource',
    'options' => 'array<array-key, mixed>',
  ),
  'ingres_unbuffered_query' => 
  array (
    0 => 'mixed',
    'link' => 'resource',
    'query' => 'string',
    'params=' => 'array<array-key, mixed>',
    'types=' => 'string',
  ),
  'ini_alter' => 
  array (
    0 => 'false|string',
    'option' => 'string',
    'value' => 'null|scalar',
  ),
  'ini_get' => 
  array (
    0 => 'false|string',
    'option' => 'string',
  ),
  'ini_get_all' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'extension=' => 'null|string',
    'details=' => 'bool',
  ),
  'ini_parse_quantity' => 
  array (
    0 => 'int',
    'shorthand' => 'non-empty-string',
  ),
  'ini_restore' => 
  array (
    0 => 'void',
    'option' => 'string',
  ),
  'ini_set' => 
  array (
    0 => 'false|string',
    'option' => 'string',
    'value' => 'null|scalar',
  ),
  'inotify_add_watch' => 
  array (
    0 => 'false|int',
    'inotify_instance' => 'resource',
    'pathname' => 'string',
    'mask' => 'int',
  ),
  'inotify_init' => 
  array (
    0 => 'false|resource',
  ),
  'inotify_queue_len' => 
  array (
    0 => 'int',
    'inotify_instance' => 'resource',
  ),
  'inotify_read' => 
  array (
    0 => 'array<array-key, array{cookie: int, mask: int, name: string, wd: int}>|false',
    'inotify_instance' => 'resource',
  ),
  'inotify_rm_watch' => 
  array (
    0 => 'bool',
    'inotify_instance' => 'resource',
    'watch_descriptor' => 'int',
  ),
  'intdiv' => 
  array (
    0 => 'int',
    'num1' => 'int',
    'num2' => 'int',
  ),
  'interface_exists' => 
  array (
    0 => 'bool',
    'interface' => 'string',
    'autoload=' => 'bool',
  ),
  'intl_error_name' => 
  array (
    0 => 'string',
    'errorCode' => 'int',
  ),
  'intl_get_error_code' => 
  array (
    0 => 'int',
  ),
  'intl_get_error_message' => 
  array (
    0 => 'string',
  ),
  'intl_is_failure' => 
  array (
    0 => 'bool',
    'errorCode' => 'int',
  ),
  'intlbreakiterator::createcharacterinstance' => 
  array (
    0 => 'IntlRuleBasedBreakIterator|null',
    'locale=' => 'null|string',
  ),
  'intlbreakiterator::createcodepointinstance' => 
  array (
    0 => 'IntlCodePointBreakIterator',
  ),
  'intlbreakiterator::createlineinstance' => 
  array (
    0 => 'IntlRuleBasedBreakIterator|null',
    'locale=' => 'null|string',
  ),
  'intlbreakiterator::createsentenceinstance' => 
  array (
    0 => 'IntlRuleBasedBreakIterator|null',
    'locale=' => 'null|string',
  ),
  'intlbreakiterator::createtitleinstance' => 
  array (
    0 => 'IntlRuleBasedBreakIterator|null',
    'locale=' => 'null|string',
  ),
  'intlbreakiterator::createwordinstance' => 
  array (
    0 => 'IntlRuleBasedBreakIterator|null',
    'locale=' => 'null|string',
  ),
  'intlbreakiterator::current' => 
  array (
    0 => 'int',
  ),
  'intlbreakiterator::first' => 
  array (
    0 => 'int',
  ),
  'intlbreakiterator::following' => 
  array (
    0 => 'int',
    'offset' => 'int',
  ),
  'intlbreakiterator::geterrorcode' => 
  array (
    0 => 'int',
  ),
  'intlbreakiterator::geterrormessage' => 
  array (
    0 => 'string',
  ),
  'intlbreakiterator::getlocale' => 
  array (
    0 => 'false|string',
    'type' => 'int',
  ),
  'intlbreakiterator::getpartsiterator' => 
  array (
    0 => 'IntlPartsIterator',
    'type=' => 'string',
  ),
  'intlbreakiterator::gettext' => 
  array (
    0 => 'null|string',
  ),
  'intlbreakiterator::isboundary' => 
  array (
    0 => 'bool',
    'offset' => 'int',
  ),
  'intlbreakiterator::last' => 
  array (
    0 => 'int',
  ),
  'intlbreakiterator::next' => 
  array (
    0 => 'int',
    'offset=' => 'int|null',
  ),
  'intlbreakiterator::preceding' => 
  array (
    0 => 'int',
    'offset' => 'int',
  ),
  'intlbreakiterator::previous' => 
  array (
    0 => 'int',
  ),
  'intlbreakiterator::settext' => 
  array (
    0 => 'bool',
    'text' => 'string',
  ),
  'intlcal_add' => 
  array (
    0 => 'bool',
    'calendar' => 'IntlCalendar',
    'field' => 'int',
    'value' => 'int',
  ),
  'intlcal_after' => 
  array (
    0 => 'bool',
    'calendar' => 'IntlCalendar',
    'other' => 'IntlCalendar',
  ),
  'intlcal_before' => 
  array (
    0 => 'bool',
    'calendar' => 'IntlCalendar',
    'other' => 'IntlCalendar',
  ),
  'intlcal_clear' => 
  array (
    0 => 'true',
    'calendar' => 'IntlCalendar',
    'field=' => 'int|null',
  ),
  'intlcal_create_instance' => 
  array (
    0 => 'IntlCalendar|null',
    'timezone=' => 'mixed',
    'locale=' => 'null|string',
  ),
  'intlcal_equals' => 
  array (
    0 => 'bool',
    'calendar' => 'IntlCalendar',
    'other' => 'IntlCalendar',
  ),
  'intlcal_field_difference' => 
  array (
    0 => 'false|int',
    'calendar' => 'IntlCalendar',
    'timestamp' => 'float',
    'field' => 'int',
  ),
  'intlcal_from_date_time' => 
  array (
    0 => 'IntlCalendar|null',
    'datetime' => 'DateTime|string',
    'locale=' => 'null|string',
  ),
  'intlcal_get' => 
  array (
    0 => 'false|int',
    'calendar' => 'IntlCalendar',
    'field' => 'int',
  ),
  'intlcal_get_actual_maximum' => 
  array (
    0 => 'int',
    'calendar' => 'IntlCalendar',
    'field' => 'int',
  ),
  'intlcal_get_actual_minimum' => 
  array (
    0 => 'int',
    'calendar' => 'IntlCalendar',
    'field' => 'int',
  ),
  'intlcal_get_available_locales' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'intlcal_get_day_of_week_type' => 
  array (
    0 => 'int',
    'calendar' => 'IntlCalendar',
    'dayOfWeek' => 'int',
  ),
  'intlcal_get_first_day_of_week' => 
  array (
    0 => 'int',
    'calendar' => 'IntlCalendar',
  ),
  'intlcal_get_greatest_minimum' => 
  array (
    0 => 'int',
    'calendar' => 'IntlCalendar',
    'field' => 'int',
  ),
  'intlcal_get_keyword_values_for_locale' => 
  array (
    0 => 'IntlIterator|false',
    'keyword' => 'string',
    'locale' => 'string',
    'onlyCommon' => 'bool',
  ),
  'intlcal_get_least_maximum' => 
  array (
    0 => 'int',
    'calendar' => 'IntlCalendar',
    'field' => 'int',
  ),
  'intlcal_get_locale' => 
  array (
    0 => 'string',
    'calendar' => 'IntlCalendar',
    'type' => 'int',
  ),
  'intlcal_get_maximum' => 
  array (
    0 => 'false|int',
    'calendar' => 'IntlCalendar',
    'field' => 'int',
  ),
  'intlcal_get_minimal_days_in_first_week' => 
  array (
    0 => 'int',
    'calendar' => 'IntlCalendar',
  ),
  'intlcal_get_minimum' => 
  array (
    0 => 'int',
    'calendar' => 'IntlCalendar',
    'field' => 'int',
  ),
  'intlcal_get_now' => 
  array (
    0 => 'float',
  ),
  'intlcal_get_repeated_wall_time_option' => 
  array (
    0 => 'int',
    'calendar' => 'IntlCalendar',
  ),
  'intlcal_get_skipped_wall_time_option' => 
  array (
    0 => 'int',
    'calendar' => 'IntlCalendar',
  ),
  'intlcal_get_time' => 
  array (
    0 => 'float',
    'calendar' => 'IntlCalendar',
  ),
  'intlcal_get_time_zone' => 
  array (
    0 => 'IntlTimeZone',
    'calendar' => 'IntlCalendar',
  ),
  'intlcal_get_type' => 
  array (
    0 => 'string',
    'calendar' => 'IntlCalendar',
  ),
  'intlcal_get_weekend_transition' => 
  array (
    0 => 'false|int',
    'calendar' => 'IntlCalendar',
    'dayOfWeek' => 'int',
  ),
  'intlcal_in_daylight_time' => 
  array (
    0 => 'bool',
    'calendar' => 'IntlCalendar',
  ),
  'intlcal_is_equivalent_to' => 
  array (
    0 => 'bool',
    'calendar' => 'IntlCalendar',
    'other' => 'IntlCalendar',
  ),
  'intlcal_is_lenient' => 
  array (
    0 => 'bool',
    'calendar' => 'IntlCalendar',
  ),
  'intlcal_is_set' => 
  array (
    0 => 'bool',
    'calendar' => 'IntlCalendar',
    'field' => 'int',
  ),
  'intlcal_is_weekend' => 
  array (
    0 => 'bool',
    'calendar' => 'IntlCalendar',
    'timestamp=' => 'float|null',
  ),
  'intlcal_roll' => 
  array (
    0 => 'bool',
    'calendar' => 'IntlCalendar',
    'field' => 'int',
    'value' => 'mixed',
  ),
  'intlcal_set' => 
  array (
    0 => 'true',
    'calendar' => 'IntlCalendar',
    'year' => 'int',
    'month' => 'int',
    'dayOfMonth=' => 'int',
    'hour=' => 'int',
    'minute=' => 'int',
    'second=' => 'int',
  ),
  'intlcal_set\'1' => 
  array (
    0 => 'bool',
    'calendar' => 'IntlCalendar',
    'year' => 'int',
    'month' => 'int',
    'dayOfMonth=' => 'int',
    'hour=' => 'int',
    'minute=' => 'int',
    'second=' => 'int',
  ),
  'intlcal_set_first_day_of_week' => 
  array (
    0 => 'true',
    'calendar' => 'IntlCalendar',
    'dayOfWeek' => 'int',
  ),
  'intlcal_set_lenient' => 
  array (
    0 => 'true',
    'calendar' => 'IntlCalendar',
    'lenient' => 'bool',
  ),
  'intlcal_set_repeated_wall_time_option' => 
  array (
    0 => 'true',
    'calendar' => 'IntlCalendar',
    'option' => 'int',
  ),
  'intlcal_set_skipped_wall_time_option' => 
  array (
    0 => 'true',
    'calendar' => 'IntlCalendar',
    'option' => 'int',
  ),
  'intlcal_set_time' => 
  array (
    0 => 'bool',
    'calendar' => 'IntlCalendar',
    'timestamp' => 'float',
  ),
  'intlcal_set_time_zone' => 
  array (
    0 => 'bool',
    'calendar' => 'IntlCalendar',
    'timezone' => 'mixed',
  ),
  'intlcal_to_date_time' => 
  array (
    0 => 'DateTime|false',
    'calendar' => 'IntlCalendar',
  ),
  'intlcalendar::add' => 
  array (
    0 => 'bool',
    'field' => 'int',
    'value' => 'int',
  ),
  'intlcalendar::after' => 
  array (
    0 => 'bool',
    'other' => 'IntlCalendar',
  ),
  'intlcalendar::before' => 
  array (
    0 => 'bool',
    'other' => 'IntlCalendar',
  ),
  'intlcalendar::clear' => 
  array (
    0 => 'true',
    'field=' => 'int|null',
  ),
  'intlcalendar::createinstance' => 
  array (
    0 => 'IntlCalendar|null',
    'timezone=' => 'DateTimeZone|IntlTimeZone|null|string',
    'locale=' => 'null|string',
  ),
  'intlcalendar::equals' => 
  array (
    0 => 'bool',
    'other' => 'IntlCalendar',
  ),
  'intlcalendar::fielddifference' => 
  array (
    0 => 'false|int',
    'timestamp' => 'float',
    'field' => 'int',
  ),
  'intlcalendar::fromdatetime' => 
  array (
    0 => 'IntlCalendar|null',
    'datetime' => 'DateTime|string',
    'locale=' => 'null|string',
  ),
  'intlcalendar::get' => 
  array (
    0 => 'int',
    'field' => 'int',
  ),
  'intlcalendar::getactualmaximum' => 
  array (
    0 => 'int',
    'field' => 'int',
  ),
  'intlcalendar::getactualminimum' => 
  array (
    0 => 'int',
    'field' => 'int',
  ),
  'intlcalendar::getavailablelocales' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'intlcalendar::getdayofweektype' => 
  array (
    0 => 'int',
    'dayOfWeek' => 'int',
  ),
  'intlcalendar::geterrorcode' => 
  array (
    0 => 'int',
  ),
  'intlcalendar::geterrormessage' => 
  array (
    0 => 'string',
  ),
  'intlcalendar::getfirstdayofweek' => 
  array (
    0 => 'int',
  ),
  'intlcalendar::getgreatestminimum' => 
  array (
    0 => 'int',
    'field' => 'int',
  ),
  'intlcalendar::getkeywordvaluesforlocale' => 
  array (
    0 => 'IntlIterator|false',
    'keyword' => 'string',
    'locale' => 'string',
    'onlyCommon' => 'bool',
  ),
  'intlcalendar::getleastmaximum' => 
  array (
    0 => 'int',
    'field' => 'int',
  ),
  'intlcalendar::getlocale' => 
  array (
    0 => 'false|string',
    'type' => 'int',
  ),
  'intlcalendar::getmaximum' => 
  array (
    0 => 'false|int',
    'field' => 'int',
  ),
  'intlcalendar::getminimaldaysinfirstweek' => 
  array (
    0 => 'int',
  ),
  'intlcalendar::getminimum' => 
  array (
    0 => 'int',
    'field' => 'int',
  ),
  'intlcalendar::getnow' => 
  array (
    0 => 'float',
  ),
  'intlcalendar::getrepeatedwalltimeoption' => 
  array (
    0 => 'int',
  ),
  'intlcalendar::getskippedwalltimeoption' => 
  array (
    0 => 'int',
  ),
  'intlcalendar::gettime' => 
  array (
    0 => 'float',
  ),
  'intlcalendar::gettimezone' => 
  array (
    0 => 'IntlTimeZone',
  ),
  'intlcalendar::gettype' => 
  array (
    0 => 'string',
  ),
  'intlcalendar::getweekendtransition' => 
  array (
    0 => 'false|int',
    'dayOfWeek' => 'int',
  ),
  'intlcalendar::indaylighttime' => 
  array (
    0 => 'bool',
  ),
  'intlcalendar::isequivalentto' => 
  array (
    0 => 'bool',
    'other' => 'IntlCalendar',
  ),
  'intlcalendar::islenient' => 
  array (
    0 => 'bool',
  ),
  'intlcalendar::isset' => 
  array (
    0 => 'bool',
    'field' => 'int',
  ),
  'intlcalendar::isweekend' => 
  array (
    0 => 'bool',
    'timestamp=' => 'float|null',
  ),
  'intlcalendar::roll' => 
  array (
    0 => 'bool',
    'field' => 'int',
    'value' => 'bool|int',
  ),
  'intlcalendar::set' => 
  array (
    0 => 'true',
    'year' => 'int',
    'month' => 'int',
    'dayOfMonth=' => 'int',
    'hour=' => 'int',
    'minute=' => 'int',
    'second=' => 'int',
  ),
  'intlcalendar::set\'1' => 
  array (
    0 => 'bool',
    'year' => 'int',
    'month' => 'int',
    'dayOfMonth=' => 'int',
    'hour=' => 'int',
    'minute=' => 'int',
    'second=' => 'int',
  ),
  'intlcalendar::setfirstdayofweek' => 
  array (
    0 => 'true',
    'dayOfWeek' => 'int',
  ),
  'intlcalendar::setlenient' => 
  array (
    0 => 'true',
    'lenient' => 'bool',
  ),
  'intlcalendar::setminimaldaysinfirstweek' => 
  array (
    0 => 'true',
    'days' => 'int',
  ),
  'intlcalendar::setrepeatedwalltimeoption' => 
  array (
    0 => 'true',
    'option' => 'int',
  ),
  'intlcalendar::setskippedwalltimeoption' => 
  array (
    0 => 'true',
    'option' => 'int',
  ),
  'intlcalendar::settime' => 
  array (
    0 => 'bool',
    'timestamp' => 'float',
  ),
  'intlcalendar::settimezone' => 
  array (
    0 => 'bool',
    'timezone' => 'DateTimeZone|IntlTimeZone|null|string',
  ),
  'intlcalendar::todatetime' => 
  array (
    0 => 'DateTime|false',
  ),
  'intlchar::charage' => 
  array (
    0 => 'array<array-key, mixed>|null',
    'codepoint' => 'int|string',
  ),
  'intlchar::chardigitvalue' => 
  array (
    0 => 'int|null',
    'codepoint' => 'int|string',
  ),
  'intlchar::chardirection' => 
  array (
    0 => 'int|null',
    'codepoint' => 'int|string',
  ),
  'intlchar::charfromname' => 
  array (
    0 => 'int|null',
    'name' => 'string',
    'type=' => 'int',
  ),
  'intlchar::charmirror' => 
  array (
    0 => 'int|null|string',
    'codepoint' => 'int|string',
  ),
  'intlchar::charname' => 
  array (
    0 => 'null|string',
    'codepoint' => 'int|string',
    'type=' => 'int',
  ),
  'intlchar::chartype' => 
  array (
    0 => 'int|null',
    'codepoint' => 'int|string',
  ),
  'intlchar::chr' => 
  array (
    0 => 'null|string',
    'codepoint' => 'int|string',
  ),
  'intlchar::digit' => 
  array (
    0 => 'false|int|null',
    'codepoint' => 'int|string',
    'base=' => 'int',
  ),
  'intlchar::enumcharnames' => 
  array (
    0 => 'bool',
    'start' => 'int|string',
    'end' => 'int|string',
    'callback' => 'callable(int, int, int):void',
    'type=' => 'int',
  ),
  'intlchar::enumchartypes' => 
  array (
    0 => 'void',
    'callback' => 'callable(int, int, int):void',
  ),
  'intlchar::foldcase' => 
  array (
    0 => 'int|null|string',
    'codepoint' => 'int|string',
    'options=' => 'int',
  ),
  'intlchar::fordigit' => 
  array (
    0 => 'int',
    'digit' => 'int',
    'base=' => 'int',
  ),
  'intlchar::getbidipairedbracket' => 
  array (
    0 => 'int|null|string',
    'codepoint' => 'int|string',
  ),
  'intlchar::getblockcode' => 
  array (
    0 => 'int|null',
    'codepoint' => 'int|string',
  ),
  'intlchar::getcombiningclass' => 
  array (
    0 => 'int|null',
    'codepoint' => 'int|string',
  ),
  'intlchar::getfc_nfkc_closure' => 
  array (
    0 => 'null|string',
    'codepoint' => 'int|string',
  ),
  'intlchar::getintpropertymaxvalue' => 
  array (
    0 => 'int',
    'property' => 'int',
  ),
  'intlchar::getintpropertyminvalue' => 
  array (
    0 => 'int',
    'property' => 'int',
  ),
  'intlchar::getintpropertyvalue' => 
  array (
    0 => 'int|null',
    'codepoint' => 'int|string',
    'property' => 'int',
  ),
  'intlchar::getnumericvalue' => 
  array (
    0 => 'float|null',
    'codepoint' => 'int|string',
  ),
  'intlchar::getpropertyenum' => 
  array (
    0 => 'int',
    'alias' => 'string',
  ),
  'intlchar::getpropertyname' => 
  array (
    0 => 'false|string',
    'property' => 'int',
    'type=' => 'int',
  ),
  'intlchar::getpropertyvalueenum' => 
  array (
    0 => 'int',
    'property' => 'int',
    'name' => 'string',
  ),
  'intlchar::getpropertyvaluename' => 
  array (
    0 => 'false|string',
    'property' => 'int',
    'value' => 'int',
    'type=' => 'int',
  ),
  'intlchar::getunicodeversion' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'intlchar::hasbinaryproperty' => 
  array (
    0 => 'bool|null',
    'codepoint' => 'int|string',
    'property' => 'int',
  ),
  'intlchar::isalnum' => 
  array (
    0 => 'bool|null',
    'codepoint' => 'int|string',
  ),
  'intlchar::isalpha' => 
  array (
    0 => 'bool|null',
    'codepoint' => 'int|string',
  ),
  'intlchar::isbase' => 
  array (
    0 => 'bool|null',
    'codepoint' => 'int|string',
  ),
  'intlchar::isblank' => 
  array (
    0 => 'bool|null',
    'codepoint' => 'int|string',
  ),
  'intlchar::iscntrl' => 
  array (
    0 => 'bool|null',
    'codepoint' => 'int|string',
  ),
  'intlchar::isdefined' => 
  array (
    0 => 'bool|null',
    'codepoint' => 'int|string',
  ),
  'intlchar::isdigit' => 
  array (
    0 => 'bool|null',
    'codepoint' => 'int|string',
  ),
  'intlchar::isgraph' => 
  array (
    0 => 'bool|null',
    'codepoint' => 'int|string',
  ),
  'intlchar::isidignorable' => 
  array (
    0 => 'bool|null',
    'codepoint' => 'int|string',
  ),
  'intlchar::isidpart' => 
  array (
    0 => 'bool|null',
    'codepoint' => 'int|string',
  ),
  'intlchar::isidstart' => 
  array (
    0 => 'bool|null',
    'codepoint' => 'int|string',
  ),
  'intlchar::isisocontrol' => 
  array (
    0 => 'bool|null',
    'codepoint' => 'int|string',
  ),
  'intlchar::isjavaidpart' => 
  array (
    0 => 'bool|null',
    'codepoint' => 'int|string',
  ),
  'intlchar::isjavaidstart' => 
  array (
    0 => 'bool|null',
    'codepoint' => 'int|string',
  ),
  'intlchar::isjavaspacechar' => 
  array (
    0 => 'bool|null',
    'codepoint' => 'int|string',
  ),
  'intlchar::islower' => 
  array (
    0 => 'bool|null',
    'codepoint' => 'int|string',
  ),
  'intlchar::ismirrored' => 
  array (
    0 => 'bool|null',
    'codepoint' => 'int|string',
  ),
  'intlchar::isprint' => 
  array (
    0 => 'bool|null',
    'codepoint' => 'int|string',
  ),
  'intlchar::ispunct' => 
  array (
    0 => 'bool|null',
    'codepoint' => 'int|string',
  ),
  'intlchar::isspace' => 
  array (
    0 => 'bool|null',
    'codepoint' => 'int|string',
  ),
  'intlchar::istitle' => 
  array (
    0 => 'bool|null',
    'codepoint' => 'int|string',
  ),
  'intlchar::isualphabetic' => 
  array (
    0 => 'bool|null',
    'codepoint' => 'int|string',
  ),
  'intlchar::isulowercase' => 
  array (
    0 => 'bool|null',
    'codepoint' => 'int|string',
  ),
  'intlchar::isupper' => 
  array (
    0 => 'bool|null',
    'codepoint' => 'int|string',
  ),
  'intlchar::isuuppercase' => 
  array (
    0 => 'bool|null',
    'codepoint' => 'int|string',
  ),
  'intlchar::isuwhitespace' => 
  array (
    0 => 'bool|null',
    'codepoint' => 'int|string',
  ),
  'intlchar::iswhitespace' => 
  array (
    0 => 'bool|null',
    'codepoint' => 'int|string',
  ),
  'intlchar::isxdigit' => 
  array (
    0 => 'bool|null',
    'codepoint' => 'int|string',
  ),
  'intlchar::ord' => 
  array (
    0 => 'int|null',
    'character' => 'int|string',
  ),
  'intlchar::tolower' => 
  array (
    0 => 'int|null|string',
    'codepoint' => 'int|string',
  ),
  'intlchar::totitle' => 
  array (
    0 => 'int|null|string',
    'codepoint' => 'int|string',
  ),
  'intlchar::toupper' => 
  array (
    0 => 'int|null|string',
    'codepoint' => 'int|string',
  ),
  'intlcodepointbreakiterator::createcharacterinstance' => 
  array (
    0 => 'IntlRuleBasedBreakIterator|null',
    'locale=' => 'null|string',
  ),
  'intlcodepointbreakiterator::createcodepointinstance' => 
  array (
    0 => 'IntlCodePointBreakIterator',
  ),
  'intlcodepointbreakiterator::createlineinstance' => 
  array (
    0 => 'IntlRuleBasedBreakIterator|null',
    'locale=' => 'null|string',
  ),
  'intlcodepointbreakiterator::createsentenceinstance' => 
  array (
    0 => 'IntlRuleBasedBreakIterator|null',
    'locale=' => 'null|string',
  ),
  'intlcodepointbreakiterator::createtitleinstance' => 
  array (
    0 => 'IntlRuleBasedBreakIterator|null',
    'locale=' => 'null|string',
  ),
  'intlcodepointbreakiterator::createwordinstance' => 
  array (
    0 => 'IntlRuleBasedBreakIterator|null',
    'locale=' => 'null|string',
  ),
  'intlcodepointbreakiterator::current' => 
  array (
    0 => 'int',
  ),
  'intlcodepointbreakiterator::first' => 
  array (
    0 => 'int',
  ),
  'intlcodepointbreakiterator::following' => 
  array (
    0 => 'int',
    'offset' => 'int',
  ),
  'intlcodepointbreakiterator::geterrorcode' => 
  array (
    0 => 'int',
  ),
  'intlcodepointbreakiterator::geterrormessage' => 
  array (
    0 => 'string',
  ),
  'intlcodepointbreakiterator::getlastcodepoint' => 
  array (
    0 => 'int',
  ),
  'intlcodepointbreakiterator::getlocale' => 
  array (
    0 => 'false|string',
    'type' => 'int',
  ),
  'intlcodepointbreakiterator::getpartsiterator' => 
  array (
    0 => 'IntlPartsIterator',
    'type=' => 'string',
  ),
  'intlcodepointbreakiterator::gettext' => 
  array (
    0 => 'null|string',
  ),
  'intlcodepointbreakiterator::isboundary' => 
  array (
    0 => 'bool',
    'offset' => 'int',
  ),
  'intlcodepointbreakiterator::last' => 
  array (
    0 => 'int',
  ),
  'intlcodepointbreakiterator::next' => 
  array (
    0 => 'int',
    'offset=' => 'int|null',
  ),
  'intlcodepointbreakiterator::preceding' => 
  array (
    0 => 'int',
    'offset' => 'int',
  ),
  'intlcodepointbreakiterator::previous' => 
  array (
    0 => 'int',
  ),
  'intlcodepointbreakiterator::settext' => 
  array (
    0 => 'bool',
    'text' => 'string',
  ),
  'intldateformatter::__construct' => 
  array (
    0 => 'void',
    'locale' => 'null|string',
    'dateType=' => 'int',
    'timeType=' => 'int',
    'timezone=' => 'DateTimeZone|IntlTimeZone|null|string',
    'calendar=' => 'IntlCalendar|int|null',
    'pattern=' => 'null|string',
  ),
  'intldateformatter::create' => 
  array (
    0 => 'IntlDateFormatter|null',
    'locale' => 'null|string',
    'dateType=' => 'int',
    'timeType=' => 'int',
    'timezone=' => 'DateTimeZone|IntlTimeZone|null|string',
    'calendar=' => 'IntlCalendar|int|null',
    'pattern=' => 'null|string',
  ),
  'intldateformatter::format' => 
  array (
    0 => 'false|string',
    'datetime' => 'DateTimeInterface|IntlCalendar|array{0?: int, 1?: int, 2?: int, 3?: int, 4?: int, 5?: int, 6?: int, 7?: int, 8?: int, tm_hour?: int, tm_isdst?: int, tm_mday?: int, tm_min?: int, tm_mon?: int, tm_sec?: int, tm_wday?: int, tm_yday?: int, tm_year?: int}|float|int|string',
  ),
  'intldateformatter::formatobject' => 
  array (
    0 => 'false|string',
    'datetime' => 'DateTimeInterface|IntlCalendar',
    'format=' => 'array{0: int, 1: int}|int|null|string',
    'locale=' => 'null|string',
  ),
  'intldateformatter::getcalendar' => 
  array (
    0 => 'false|int',
  ),
  'intldateformatter::getcalendarobject' => 
  array (
    0 => 'IntlCalendar|false|null',
  ),
  'intldateformatter::getdatetype' => 
  array (
    0 => 'false|int',
  ),
  'intldateformatter::geterrorcode' => 
  array (
    0 => 'int',
  ),
  'intldateformatter::geterrormessage' => 
  array (
    0 => 'string',
  ),
  'intldateformatter::getlocale' => 
  array (
    0 => 'false|string',
    'type=' => 'int',
  ),
  'intldateformatter::getpattern' => 
  array (
    0 => 'false|string',
  ),
  'intldateformatter::gettimetype' => 
  array (
    0 => 'false|int',
  ),
  'intldateformatter::gettimezone' => 
  array (
    0 => 'IntlTimeZone|false',
  ),
  'intldateformatter::gettimezoneid' => 
  array (
    0 => 'false|string',
  ),
  'intldateformatter::islenient' => 
  array (
    0 => 'bool',
  ),
  'intldateformatter::localtime' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'string' => 'string',
    '&offset=' => 'int',
  ),
  'intldateformatter::parse' => 
  array (
    0 => 'false|float|int',
    'string' => 'string',
    '&offset=' => 'int',
  ),
  'intldateformatter::setcalendar' => 
  array (
    0 => 'bool',
    'calendar' => 'IntlCalendar|int|null',
  ),
  'intldateformatter::setlenient' => 
  array (
    0 => 'void',
    'lenient' => 'bool',
  ),
  'intldateformatter::setpattern' => 
  array (
    0 => 'bool',
    'pattern' => 'string',
  ),
  'intldateformatter::settimezone' => 
  array (
    0 => 'bool',
    'timezone' => 'DateTimeZone|IntlTimeZone|null|string',
  ),
  'intlexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'string',
    'code=' => 'int',
    'previous=' => 'Throwable|null',
  ),
  'intlexception::__tostring' => 
  array (
    0 => 'string',
  ),
  'intlexception::__wakeup' => 
  array (
    0 => 'void',
  ),
  'intlexception::getcode' => 
  array (
    0 => 'int',
  ),
  'intlexception::getfile' => 
  array (
    0 => 'string',
  ),
  'intlexception::getline' => 
  array (
    0 => 'int',
  ),
  'intlexception::getmessage' => 
  array (
    0 => 'string',
  ),
  'intlexception::getprevious' => 
  array (
    0 => 'Throwable|null',
  ),
  'intlexception::gettrace' => 
  array (
    0 => 'list<array{args?: array<array-key, mixed>, class?: class-string, file?: string, function: string, line?: int, type?: \'->\'|\'::\'}>',
  ),
  'intlexception::gettraceasstring' => 
  array (
    0 => 'string',
  ),
  'intlgregcal_create_instance' => 
  array (
    0 => 'IntlGregorianCalendar|null',
    'timezoneOrYear=' => 'DateTimeZone|IntlTimeZone|null|string',
    'localeOrMonth=' => 'int|null|string',
    'day=' => 'int',
    'hour=' => 'int',
    'minute=' => 'int',
    'second=' => 'int',
  ),
  'intlgregcal_get_gregorian_change' => 
  array (
    0 => 'float',
    'calendar' => 'IntlGregorianCalendar',
  ),
  'intlgregcal_is_leap_year' => 
  array (
    0 => 'bool',
    'calendar' => 'IntlGregorianCalendar',
    'year' => 'int',
  ),
  'intlgregcal_set_gregorian_change' => 
  array (
    0 => 'bool',
    'calendar' => 'IntlGregorianCalendar',
    'timestamp' => 'float',
  ),
  'intlgregoriancalendar::add' => 
  array (
    0 => 'bool',
    'field' => 'int',
    'value' => 'int',
  ),
  'intlgregoriancalendar::after' => 
  array (
    0 => 'bool',
    'other' => 'IntlCalendar',
  ),
  'intlgregoriancalendar::before' => 
  array (
    0 => 'bool',
    'other' => 'IntlCalendar',
  ),
  'intlgregoriancalendar::clear' => 
  array (
    0 => 'true',
    'field=' => 'int|null',
  ),
  'intlgregoriancalendar::createinstance' => 
  array (
    0 => 'IntlGregorianCalendar|null',
    'timezone=' => 'DateTimeZone|IntlTimeZone|null|string',
    'locale=' => 'null|string',
  ),
  'intlgregoriancalendar::equals' => 
  array (
    0 => 'bool',
    'other' => 'IntlCalendar',
  ),
  'intlgregoriancalendar::fielddifference' => 
  array (
    0 => 'false|int',
    'timestamp' => 'float',
    'field' => 'int',
  ),
  'intlgregoriancalendar::fromdatetime' => 
  array (
    0 => 'IntlCalendar|null',
    'datetime' => 'DateTime|string',
    'locale=' => 'null|string',
  ),
  'intlgregoriancalendar::get' => 
  array (
    0 => 'int',
    'field' => 'int',
  ),
  'intlgregoriancalendar::getactualmaximum' => 
  array (
    0 => 'int',
    'field' => 'int',
  ),
  'intlgregoriancalendar::getactualminimum' => 
  array (
    0 => 'int',
    'field' => 'int',
  ),
  'intlgregoriancalendar::getavailablelocales' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'intlgregoriancalendar::getdayofweektype' => 
  array (
    0 => 'int',
    'dayOfWeek' => 'int',
  ),
  'intlgregoriancalendar::geterrorcode' => 
  array (
    0 => 'int',
  ),
  'intlgregoriancalendar::geterrormessage' => 
  array (
    0 => 'string',
  ),
  'intlgregoriancalendar::getfirstdayofweek' => 
  array (
    0 => 'int',
  ),
  'intlgregoriancalendar::getgreatestminimum' => 
  array (
    0 => 'int',
    'field' => 'int',
  ),
  'intlgregoriancalendar::getgregorianchange' => 
  array (
    0 => 'float',
  ),
  'intlgregoriancalendar::getkeywordvaluesforlocale' => 
  array (
    0 => 'IntlIterator|false',
    'keyword' => 'string',
    'locale' => 'string',
    'onlyCommon' => 'bool',
  ),
  'intlgregoriancalendar::getleastmaximum' => 
  array (
    0 => 'int',
    'field' => 'int',
  ),
  'intlgregoriancalendar::getlocale' => 
  array (
    0 => 'false|string',
    'type' => 'int',
  ),
  'intlgregoriancalendar::getmaximum' => 
  array (
    0 => 'int',
    'field' => 'int',
  ),
  'intlgregoriancalendar::getminimaldaysinfirstweek' => 
  array (
    0 => 'int',
  ),
  'intlgregoriancalendar::getminimum' => 
  array (
    0 => 'int',
    'field' => 'int',
  ),
  'intlgregoriancalendar::getnow' => 
  array (
    0 => 'float',
  ),
  'intlgregoriancalendar::getrepeatedwalltimeoption' => 
  array (
    0 => 'int',
  ),
  'intlgregoriancalendar::getskippedwalltimeoption' => 
  array (
    0 => 'int',
  ),
  'intlgregoriancalendar::gettime' => 
  array (
    0 => 'float',
  ),
  'intlgregoriancalendar::gettimezone' => 
  array (
    0 => 'IntlTimeZone',
  ),
  'intlgregoriancalendar::gettype' => 
  array (
    0 => 'string',
  ),
  'intlgregoriancalendar::getweekendtransition' => 
  array (
    0 => 'false|int',
    'dayOfWeek' => 'int',
  ),
  'intlgregoriancalendar::indaylighttime' => 
  array (
    0 => 'bool',
  ),
  'intlgregoriancalendar::isequivalentto' => 
  array (
    0 => 'bool',
    'other' => 'IntlCalendar',
  ),
  'intlgregoriancalendar::isleapyear' => 
  array (
    0 => 'bool',
    'year' => 'int',
  ),
  'intlgregoriancalendar::islenient' => 
  array (
    0 => 'bool',
  ),
  'intlgregoriancalendar::isset' => 
  array (
    0 => 'bool',
    'field' => 'int',
  ),
  'intlgregoriancalendar::isweekend' => 
  array (
    0 => 'bool',
    'timestamp=' => 'float|null',
  ),
  'intlgregoriancalendar::roll' => 
  array (
    0 => 'bool',
    'field' => 'int',
    'value' => 'bool|int',
  ),
  'intlgregoriancalendar::set' => 
  array (
    0 => 'true',
    'year' => 'int',
    'month' => 'int',
    'dayOfMonth=' => 'int',
    'hour=' => 'int',
    'minute=' => 'int',
    'second=' => 'int',
  ),
  'intlgregoriancalendar::set\'1' => 
  array (
    0 => 'bool',
    'year' => 'int',
    'month' => 'int',
    'dayOfMonth=' => 'int',
    'hour=' => 'int',
    'minute=' => 'int',
    'second=' => 'int',
  ),
  'intlgregoriancalendar::setfirstdayofweek' => 
  array (
    0 => 'true',
    'dayOfWeek' => 'int',
  ),
  'intlgregoriancalendar::setgregorianchange' => 
  array (
    0 => 'bool',
    'timestamp' => 'float',
  ),
  'intlgregoriancalendar::setlenient' => 
  array (
    0 => 'true',
    'lenient' => 'bool',
  ),
  'intlgregoriancalendar::setminimaldaysinfirstweek' => 
  array (
    0 => 'true',
    'days' => 'int',
  ),
  'intlgregoriancalendar::setrepeatedwalltimeoption' => 
  array (
    0 => 'true',
    'option' => 'int',
  ),
  'intlgregoriancalendar::setskippedwalltimeoption' => 
  array (
    0 => 'true',
    'option' => 'int',
  ),
  'intlgregoriancalendar::settime' => 
  array (
    0 => 'bool',
    'timestamp' => 'float',
  ),
  'intlgregoriancalendar::settimezone' => 
  array (
    0 => 'bool',
    'timezone' => 'DateTimeZone|IntlTimeZone|null|string',
  ),
  'intlgregoriancalendar::todatetime' => 
  array (
    0 => 'DateTime',
  ),
  'intliterator::__construct' => 
  array (
    0 => 'void',
  ),
  'intliterator::key' => 
  array (
    0 => 'string',
  ),
  'intliterator::next' => 
  array (
    0 => 'void',
  ),
  'intliterator::rewind' => 
  array (
    0 => 'void',
  ),
  'intliterator::valid' => 
  array (
    0 => 'bool',
  ),
  'intlpartsiterator::getbreakiterator' => 
  array (
    0 => 'IntlBreakIterator',
  ),
  'intlrulebasedbreakiterator::__construct' => 
  array (
    0 => 'void',
    'rules' => 'string',
    'compiled=' => 'bool',
  ),
  'intlrulebasedbreakiterator::createcharacterinstance' => 
  array (
    0 => 'IntlRuleBasedBreakIterator|null',
    'locale=' => 'null|string',
  ),
  'intlrulebasedbreakiterator::createcodepointinstance' => 
  array (
    0 => 'IntlCodePointBreakIterator',
  ),
  'intlrulebasedbreakiterator::createlineinstance' => 
  array (
    0 => 'IntlRuleBasedBreakIterator|null',
    'locale=' => 'null|string',
  ),
  'intlrulebasedbreakiterator::createsentenceinstance' => 
  array (
    0 => 'IntlRuleBasedBreakIterator|null',
    'locale=' => 'null|string',
  ),
  'intlrulebasedbreakiterator::createtitleinstance' => 
  array (
    0 => 'IntlRuleBasedBreakIterator|null',
    'locale=' => 'null|string',
  ),
  'intlrulebasedbreakiterator::createwordinstance' => 
  array (
    0 => 'IntlRuleBasedBreakIterator|null',
    'locale=' => 'null|string',
  ),
  'intlrulebasedbreakiterator::current' => 
  array (
    0 => 'int',
  ),
  'intlrulebasedbreakiterator::first' => 
  array (
    0 => 'int',
  ),
  'intlrulebasedbreakiterator::following' => 
  array (
    0 => 'int',
    'offset' => 'int',
  ),
  'intlrulebasedbreakiterator::getbinaryrules' => 
  array (
    0 => 'string',
  ),
  'intlrulebasedbreakiterator::geterrorcode' => 
  array (
    0 => 'int',
  ),
  'intlrulebasedbreakiterator::geterrormessage' => 
  array (
    0 => 'string',
  ),
  'intlrulebasedbreakiterator::getlocale' => 
  array (
    0 => 'false|string',
    'type' => 'int',
  ),
  'intlrulebasedbreakiterator::getpartsiterator' => 
  array (
    0 => 'IntlPartsIterator',
    'type=' => 'string',
  ),
  'intlrulebasedbreakiterator::getrules' => 
  array (
    0 => 'string',
  ),
  'intlrulebasedbreakiterator::getrulestatus' => 
  array (
    0 => 'int',
  ),
  'intlrulebasedbreakiterator::getrulestatusvec' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'intlrulebasedbreakiterator::gettext' => 
  array (
    0 => 'null|string',
  ),
  'intlrulebasedbreakiterator::isboundary' => 
  array (
    0 => 'bool',
    'offset' => 'int',
  ),
  'intlrulebasedbreakiterator::last' => 
  array (
    0 => 'int',
  ),
  'intlrulebasedbreakiterator::next' => 
  array (
    0 => 'int',
    'offset=' => 'int|null',
  ),
  'intlrulebasedbreakiterator::preceding' => 
  array (
    0 => 'int',
    'offset' => 'int',
  ),
  'intlrulebasedbreakiterator::previous' => 
  array (
    0 => 'int',
  ),
  'intlrulebasedbreakiterator::settext' => 
  array (
    0 => 'bool',
    'text' => 'string',
  ),
  'intltimezone::countequivalentids' => 
  array (
    0 => 'false|int',
    'timezoneId' => 'string',
  ),
  'intltimezone::createdefault' => 
  array (
    0 => 'IntlTimeZone',
  ),
  'intltimezone::createenumeration' => 
  array (
    0 => 'IntlIterator|false',
    'countryOrRawOffset=' => 'IntlTimeZone|float|int|null|string',
  ),
  'intltimezone::createtimezone' => 
  array (
    0 => 'IntlTimeZone|null',
    'timezoneId' => 'string',
  ),
  'intltimezone::createtimezoneidenumeration' => 
  array (
    0 => 'IntlIterator|false',
    'type' => 'int',
    'region=' => 'null|string',
    'rawOffset=' => 'int|null',
  ),
  'intltimezone::fromdatetimezone' => 
  array (
    0 => 'IntlTimeZone|null',
    'timezone' => 'DateTimeZone',
  ),
  'intltimezone::getcanonicalid' => 
  array (
    0 => 'false|string',
    'timezoneId' => 'string',
    '&w_isSystemId=' => 'bool',
  ),
  'intltimezone::getdisplayname' => 
  array (
    0 => 'false|string',
    'dst=' => 'bool',
    'style=' => 'int',
    'locale=' => 'null|string',
  ),
  'intltimezone::getdstsavings' => 
  array (
    0 => 'int',
  ),
  'intltimezone::getequivalentid' => 
  array (
    0 => 'false|string',
    'timezoneId' => 'string',
    'offset' => 'int',
  ),
  'intltimezone::geterrorcode' => 
  array (
    0 => 'int',
  ),
  'intltimezone::geterrormessage' => 
  array (
    0 => 'string',
  ),
  'intltimezone::getgmt' => 
  array (
    0 => 'IntlTimeZone',
  ),
  'intltimezone::getid' => 
  array (
    0 => 'string',
  ),
  'intltimezone::getidforwindowsid' => 
  array (
    0 => 'false|string',
    'timezoneId' => 'string',
    'region=' => 'null|string',
  ),
  'intltimezone::getoffset' => 
  array (
    0 => 'bool',
    'timestamp' => 'float',
    'local' => 'bool',
    '&w_rawOffset' => 'int',
    '&w_dstOffset' => 'int',
  ),
  'intltimezone::getrawoffset' => 
  array (
    0 => 'int',
  ),
  'intltimezone::getregion' => 
  array (
    0 => 'false|string',
    'timezoneId' => 'string',
  ),
  'intltimezone::gettzdataversion' => 
  array (
    0 => 'string',
  ),
  'intltimezone::getunknown' => 
  array (
    0 => 'IntlTimeZone',
  ),
  'intltimezone::getwindowsid' => 
  array (
    0 => 'false|string',
    'timezoneId' => 'string',
  ),
  'intltimezone::hassamerules' => 
  array (
    0 => 'bool',
    'other' => 'IntlTimeZone',
  ),
  'intltimezone::todatetimezone' => 
  array (
    0 => 'DateTimeZone|false',
  ),
  'intltimezone::usedaylighttime' => 
  array (
    0 => 'bool',
  ),
  'intltz_count_equivalent_ids' => 
  array (
    0 => 'int',
    'timezoneId' => 'string',
  ),
  'intltz_create_enumeration' => 
  array (
    0 => 'IntlIterator|false',
    'countryOrRawOffset=' => 'IntlTimeZone|float|int|null|string',
  ),
  'intltz_create_time_zone' => 
  array (
    0 => 'IntlTimeZone|null',
    'timezoneId' => 'string',
  ),
  'intltz_from_date_time_zone' => 
  array (
    0 => 'IntlTimeZone|null',
    'timezone' => 'DateTimeZone',
  ),
  'intltz_get_canonical_id' => 
  array (
    0 => 'false|string',
    'timezoneId' => 'string',
    '&isSystemId=' => 'bool',
  ),
  'intltz_get_display_name' => 
  array (
    0 => 'false|string',
    'timezone' => 'IntlTimeZone',
    'dst=' => 'bool',
    'style=' => 'int',
    'locale=' => 'null|string',
  ),
  'intltz_get_dst_savings' => 
  array (
    0 => 'int',
    'timezone' => 'IntlTimeZone',
  ),
  'intltz_get_equivalent_id' => 
  array (
    0 => 'string',
    'timezoneId' => 'string',
    'offset' => 'int',
  ),
  'intltz_get_error_code' => 
  array (
    0 => 'int',
    'timezone' => 'IntlTimeZone',
  ),
  'intltz_get_error_message' => 
  array (
    0 => 'string',
    'timezone' => 'IntlTimeZone',
  ),
  'intltz_get_id' => 
  array (
    0 => 'string',
    'timezone' => 'IntlTimeZone',
  ),
  'intltz_get_offset' => 
  array (
    0 => 'bool',
    'timezone' => 'IntlTimeZone',
    'timestamp' => 'float',
    'local' => 'bool',
    '&rawOffset' => 'int',
    '&dstOffset' => 'int',
  ),
  'intltz_get_raw_offset' => 
  array (
    0 => 'int',
    'timezone' => 'IntlTimeZone',
  ),
  'intltz_get_tz_data_version' => 
  array (
    0 => 'string',
  ),
  'intltz_getgmt' => 
  array (
    0 => 'IntlTimeZone',
  ),
  'intltz_has_same_rules' => 
  array (
    0 => 'bool',
    'timezone' => 'IntlTimeZone',
    'other' => 'IntlTimeZone',
  ),
  'intltz_to_date_time_zone' => 
  array (
    0 => 'DateTimeZone',
    'timezone' => 'IntlTimeZone',
  ),
  'intltz_use_daylight_time' => 
  array (
    0 => 'bool',
    'timezone' => 'IntlTimeZone',
  ),
  'intlz_create_default' => 
  array (
    0 => 'IntlTimeZone',
  ),
  'intval' => 
  array (
    0 => 'int',
    'value' => 'mixed',
    'base=' => 'int',
  ),
  'invalidargumentexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'string',
    'code=' => 'int',
    'previous=' => 'Throwable|null',
  ),
  'invalidargumentexception::__tostring' => 
  array (
    0 => 'string',
  ),
  'invalidargumentexception::getcode' => 
  array (
    0 => 'int',
  ),
  'invalidargumentexception::getfile' => 
  array (
    0 => 'string',
  ),
  'invalidargumentexception::getline' => 
  array (
    0 => 'int',
  ),
  'invalidargumentexception::getmessage' => 
  array (
    0 => 'string',
  ),
  'invalidargumentexception::getprevious' => 
  array (
    0 => 'Throwable|null',
  ),
  'invalidargumentexception::gettrace' => 
  array (
    0 => 'list<array{args?: array<array-key, mixed>, class?: class-string, file?: string, function: string, line?: int, type?: \'->\'|\'::\'}>',
  ),
  'invalidargumentexception::gettraceasstring' => 
  array (
    0 => 'string',
  ),
  'ip2long' => 
  array (
    0 => 'false|int',
    'ip' => 'string',
  ),
  'iptcembed' => 
  array (
    0 => 'bool|string',
    'iptc_data' => 'string',
    'filename' => 'string',
    'spool=' => 'int',
  ),
  'iptcparse' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'iptc_block' => 'string',
  ),
  'is_a' => 
  array (
    0 => 'bool',
    'object_or_class' => 'mixed',
    'class' => 'string',
    'allow_string=' => 'bool',
  ),
  'is_array' => 
  array (
    0 => 'bool',
    'value' => 'mixed',
  ),
  'is_bool' => 
  array (
    0 => 'bool',
    'value' => 'mixed',
  ),
  'is_callable' => 
  array (
    0 => 'bool',
    'value' => 'callable|mixed',
    'syntax_only=' => 'bool',
    '&w_callable_name=' => 'string',
  ),
  'is_countable' => 
  array (
    0 => 'bool',
    'value' => 'mixed',
  ),
  'is_dir' => 
  array (
    0 => 'bool',
    'filename' => 'string',
  ),
  'is_double' => 
  array (
    0 => 'bool',
    'value' => 'mixed',
  ),
  'is_executable' => 
  array (
    0 => 'bool',
    'filename' => 'string',
  ),
  'is_file' => 
  array (
    0 => 'bool',
    'filename' => 'string',
  ),
  'is_finite' => 
  array (
    0 => 'bool',
    'num' => 'float',
  ),
  'is_float' => 
  array (
    0 => 'bool',
    'value' => 'mixed',
  ),
  'is_infinite' => 
  array (
    0 => 'bool',
    'num' => 'float',
  ),
  'is_int' => 
  array (
    0 => 'bool',
    'value' => 'mixed',
  ),
  'is_integer' => 
  array (
    0 => 'bool',
    'value' => 'mixed',
  ),
  'is_iterable' => 
  array (
    0 => 'bool',
    'value' => 'mixed',
  ),
  'is_link' => 
  array (
    0 => 'bool',
    'filename' => 'string',
  ),
  'is_long' => 
  array (
    0 => 'bool',
    'value' => 'mixed',
  ),
  'is_nan' => 
  array (
    0 => 'bool',
    'num' => 'float',
  ),
  'is_null' => 
  array (
    0 => 'bool',
    'value' => 'mixed',
  ),
  'is_numeric' => 
  array (
    0 => 'bool',
    'value' => 'mixed',
  ),
  'is_object' => 
  array (
    0 => 'bool',
    'value' => 'mixed',
  ),
  'is_readable' => 
  array (
    0 => 'bool',
    'filename' => 'string',
  ),
  'is_resource' => 
  array (
    0 => 'bool',
    'value' => 'mixed',
  ),
  'is_scalar' => 
  array (
    0 => 'bool',
    'value' => 'mixed',
  ),
  'is_soap_fault' => 
  array (
    0 => 'bool',
    'object' => 'mixed',
  ),
  'is_string' => 
  array (
    0 => 'bool',
    'value' => 'mixed',
  ),
  'is_subclass_of' => 
  array (
    0 => 'bool',
    'object_or_class' => 'object|string',
    'class' => 'class-string',
    'allow_string=' => 'bool',
  ),
  'is_tainted' => 
  array (
    0 => 'bool',
    'string' => 'string',
  ),
  'is_uploaded_file' => 
  array (
    0 => 'bool',
    'filename' => 'string',
  ),
  'is_writable' => 
  array (
    0 => 'bool',
    'filename' => 'string',
  ),
  'is_writeable' => 
  array (
    0 => 'bool',
    'filename' => 'string',
  ),
  'isset' => 
  array (
    0 => 'bool',
    'value' => 'mixed',
    '...rest=' => 'mixed',
  ),
  'iterator::current' => 
  array (
    0 => 'mixed',
  ),
  'iterator::key' => 
  array (
    0 => 'mixed',
  ),
  'iterator::next' => 
  array (
    0 => 'void',
  ),
  'iterator::rewind' => 
  array (
    0 => 'void',
  ),
  'iterator::valid' => 
  array (
    0 => 'bool',
  ),
  'iterator_apply' => 
  array (
    0 => 'int<0, max>',
    'iterator' => 'Traversable',
    'callback' => 'callable(mixed):bool',
    'args=' => 'array<array-key, mixed>|null',
  ),
  'iterator_count' => 
  array (
    0 => 'int<0, max>',
    'iterator' => 'Traversable|array<array-key, mixed>',
  ),
  'iterator_to_array' => 
  array (
    0 => 'array<array-key, mixed>',
    'iterator' => 'Traversable|array<array-key, mixed>',
    'preserve_keys=' => 'bool',
  ),
  'iteratoraggregate::getiterator' => 
  array (
    0 => 'Traversable',
  ),
  'iteratoriterator::getinneriterator' => 
  array (
    0 => 'Iterator|null',
  ),
  'iteratoriterator::next' => 
  array (
    0 => 'void',
  ),
  'iteratoriterator::rewind' => 
  array (
    0 => 'void',
  ),
  'iteratoriterator::valid' => 
  array (
    0 => 'bool',
  ),
  'java_last_exception_clear' => 
  array (
    0 => 'void',
  ),
  'java_last_exception_get' => 
  array (
    0 => 'object',
  ),
  'java_reload' => 
  array (
    0 => 'array<array-key, mixed>',
    'new_jarpath' => 'string',
  ),
  'java_require' => 
  array (
    0 => 'array<array-key, mixed>',
    'new_classpath' => 'string',
  ),
  'java_set_encoding' => 
  array (
    0 => 'array<array-key, mixed>',
    'encoding' => 'string',
  ),
  'java_set_ignore_case' => 
  array (
    0 => 'void',
    'ignore' => 'bool',
  ),
  'java_throw_exceptions' => 
  array (
    0 => 'void',
    'throw' => 'bool',
  ),
  'javaexception::getcause' => 
  array (
    0 => 'object',
  ),
  'jddayofweek' => 
  array (
    0 => 'int|string',
    'julian_day' => 'int',
    'mode=' => 'int',
  ),
  'jdmonthname' => 
  array (
    0 => 'string',
    'julian_day' => 'int',
    'mode' => 'int',
  ),
  'jdtofrench' => 
  array (
    0 => 'string',
    'julian_day' => 'int',
  ),
  'jdtogregorian' => 
  array (
    0 => 'string',
    'julian_day' => 'int',
  ),
  'jdtojewish' => 
  array (
    0 => 'string',
    'julian_day' => 'int',
    'hebrew=' => 'bool',
    'flags=' => 'int',
  ),
  'jdtojulian' => 
  array (
    0 => 'string',
    'julian_day' => 'int',
  ),
  'jdtounix' => 
  array (
    0 => 'int',
    'julian_day' => 'int',
  ),
  'jewishtojd' => 
  array (
    0 => 'int',
    'month' => 'int',
    'day' => 'int',
    'year' => 'int',
  ),
  'jobqueue_license_info' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'join' => 
  array (
    0 => 'string',
    'separator' => 'string',
    'array=' => 'array<array-key, mixed>|null',
  ),
  'join\'1' => 
  array (
    0 => 'string',
    'separator' => 'array<array-key, mixed>',
  ),
  'json_decode' => 
  array (
    0 => 'mixed',
    'json' => 'string',
    'associative=' => 'bool|null',
    'depth=' => 'int',
    'flags=' => 'int',
  ),
  'json_encode' => 
  array (
    0 => 'false|non-empty-string',
    'value' => 'mixed',
    'flags=' => 'int',
    'depth=' => 'int',
  ),
  'json_last_error' => 
  array (
    0 => 'int',
  ),
  'json_last_error_msg' => 
  array (
    0 => 'string',
  ),
  'json_validate' => 
  array (
    0 => 'bool',
    'json' => 'string',
    'depth=' => 'int<1, max>',
    'flags=' => 'int',
  ),
  'jsonexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'string',
    'code=' => 'int',
    'previous=' => 'Throwable|null',
  ),
  'jsonexception::__tostring' => 
  array (
    0 => 'string',
  ),
  'jsonexception::__wakeup' => 
  array (
    0 => 'void',
  ),
  'jsonexception::getcode' => 
  array (
    0 => 'int',
  ),
  'jsonexception::getfile' => 
  array (
    0 => 'string',
  ),
  'jsonexception::getline' => 
  array (
    0 => 'int',
  ),
  'jsonexception::getmessage' => 
  array (
    0 => 'string',
  ),
  'jsonexception::getprevious' => 
  array (
    0 => 'Throwable|null',
  ),
  'jsonexception::gettrace' => 
  array (
    0 => 'list<array{args?: array<array-key, mixed>, class?: class-string, file?: string, function: string, line?: int, type?: \'->\'|\'::\'}>',
  ),
  'jsonexception::gettraceasstring' => 
  array (
    0 => 'string',
  ),
  'jsonincrementalparser::__construct' => 
  array (
    0 => 'void',
    'depth' => 'mixed',
    'options' => 'mixed',
  ),
  'jsonincrementalparser::get' => 
  array (
    0 => 'mixed',
    'options' => 'mixed',
  ),
  'jsonincrementalparser::geterror' => 
  array (
    0 => 'mixed',
  ),
  'jsonincrementalparser::parse' => 
  array (
    0 => 'mixed',
    'json' => 'mixed',
  ),
  'jsonincrementalparser::parsefile' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'jsonincrementalparser::reset' => 
  array (
    0 => 'mixed',
  ),
  'jsonserializable::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'judy::__construct' => 
  array (
    0 => 'void',
    'judy_type' => 'int',
  ),
  'judy::__destruct' => 
  array (
    0 => 'void',
  ),
  'judy::bycount' => 
  array (
    0 => 'int',
    'nth_index' => 'int',
  ),
  'judy::count' => 
  array (
    0 => 'int',
    'index_start=' => 'int',
    'index_end=' => 'int',
  ),
  'judy::first' => 
  array (
    0 => 'mixed',
    'index=' => 'mixed',
  ),
  'judy::firstempty' => 
  array (
    0 => 'mixed',
    'index=' => 'mixed',
  ),
  'judy::free' => 
  array (
    0 => 'int',
  ),
  'judy::gettype' => 
  array (
    0 => 'int',
  ),
  'judy::last' => 
  array (
    0 => 'mixed',
    'index=' => 'string',
  ),
  'judy::lastempty' => 
  array (
    0 => 'mixed',
    'index=' => 'int',
  ),
  'judy::memoryusage' => 
  array (
    0 => 'int',
  ),
  'judy::next' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'judy::nextempty' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'judy::offsetexists' => 
  array (
    0 => 'bool',
    'offset' => 'int|string',
  ),
  'judy::offsetget' => 
  array (
    0 => 'mixed',
    'offset' => 'int|string',
  ),
  'judy::offsetset' => 
  array (
    0 => 'bool',
    'offset' => 'int|null|string',
    'value' => 'mixed',
  ),
  'judy::offsetunset' => 
  array (
    0 => 'bool',
    'offset' => 'int|string',
  ),
  'judy::prev' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'judy::prevempty' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'judy::size' => 
  array (
    0 => 'int',
  ),
  'judy_type' => 
  array (
    0 => 'int',
    'array' => 'judy',
  ),
  'judy_version' => 
  array (
    0 => 'string',
  ),
  'juliantojd' => 
  array (
    0 => 'int',
    'month' => 'int',
    'day' => 'int',
    'year' => 'int',
  ),
  'kadm5_chpass_principal' => 
  array (
    0 => 'bool',
    'handle' => 'resource',
    'principal' => 'string',
    'password' => 'string',
  ),
  'kadm5_create_principal' => 
  array (
    0 => 'bool',
    'handle' => 'resource',
    'principal' => 'string',
    'password=' => 'string',
    'options=' => 'array<array-key, mixed>',
  ),
  'kadm5_delete_principal' => 
  array (
    0 => 'bool',
    'handle' => 'resource',
    'principal' => 'string',
  ),
  'kadm5_destroy' => 
  array (
    0 => 'bool',
    'handle' => 'resource',
  ),
  'kadm5_flush' => 
  array (
    0 => 'bool',
    'handle' => 'resource',
  ),
  'kadm5_get_policies' => 
  array (
    0 => 'array<array-key, mixed>',
    'handle' => 'resource',
  ),
  'kadm5_get_principal' => 
  array (
    0 => 'array<array-key, mixed>',
    'handle' => 'resource',
    'principal' => 'string',
  ),
  'kadm5_get_principals' => 
  array (
    0 => 'array<array-key, mixed>',
    'handle' => 'resource',
  ),
  'kadm5_init_with_password' => 
  array (
    0 => 'resource',
    'admin_server' => 'string',
    'realm' => 'string',
    'principal' => 'string',
    'password' => 'string',
  ),
  'kadm5_modify_principal' => 
  array (
    0 => 'bool',
    'handle' => 'resource',
    'principal' => 'string',
    'options' => 'array<array-key, mixed>',
  ),
  'key' => 
  array (
    0 => 'int|null|string',
    'array' => 'array<array-key, mixed>',
  ),
  'key_exists' => 
  array (
    0 => 'bool',
    'key' => 'int|string',
    'array' => 'array<array-key, mixed>',
  ),
  'krsort' => 
  array (
    0 => 'true',
    '&array' => 'array<array-key, mixed>',
    'flags=' => 'int',
  ),
  'ksort' => 
  array (
    0 => 'true',
    '&array' => 'array<array-key, mixed>',
    'flags=' => 'int',
  ),
  'ktaglib_id3v2_attachedpictureframe::getdescription' => 
  array (
    0 => 'string',
  ),
  'ktaglib_id3v2_attachedpictureframe::getmimetype' => 
  array (
    0 => 'string',
  ),
  'ktaglib_id3v2_attachedpictureframe::gettype' => 
  array (
    0 => 'int',
  ),
  'ktaglib_id3v2_attachedpictureframe::savepicture' => 
  array (
    0 => 'bool',
    'filename' => 'string',
  ),
  'ktaglib_id3v2_attachedpictureframe::setmimetype' => 
  array (
    0 => 'string',
    'type' => 'string',
  ),
  'ktaglib_id3v2_attachedpictureframe::setpicture' => 
  array (
    0 => 'mixed',
    'filename' => 'string',
  ),
  'ktaglib_id3v2_attachedpictureframe::settype' => 
  array (
    0 => 'mixed',
    'type' => 'int',
  ),
  'ktaglib_id3v2_frame::__tostring' => 
  array (
    0 => 'string',
  ),
  'ktaglib_id3v2_frame::getdescription' => 
  array (
    0 => 'string',
  ),
  'ktaglib_id3v2_frame::getmimetype' => 
  array (
    0 => 'string',
  ),
  'ktaglib_id3v2_frame::getsize' => 
  array (
    0 => 'int',
  ),
  'ktaglib_id3v2_frame::gettype' => 
  array (
    0 => 'int',
  ),
  'ktaglib_id3v2_frame::savepicture' => 
  array (
    0 => 'bool',
    'filename' => 'string',
  ),
  'ktaglib_id3v2_frame::setmimetype' => 
  array (
    0 => 'string',
    'type' => 'string',
  ),
  'ktaglib_id3v2_frame::setpicture' => 
  array (
    0 => 'void',
    'filename' => 'string',
  ),
  'ktaglib_id3v2_frame::settype' => 
  array (
    0 => 'void',
    'type' => 'int',
  ),
  'ktaglib_id3v2_tag::addframe' => 
  array (
    0 => 'bool',
    'frame' => 'KTaglib_ID3v2_Frame',
  ),
  'ktaglib_id3v2_tag::getframelist' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'ktaglib_mpeg_audioproperties::getbitrate' => 
  array (
    0 => 'int',
  ),
  'ktaglib_mpeg_audioproperties::getchannels' => 
  array (
    0 => 'int',
  ),
  'ktaglib_mpeg_audioproperties::getlayer' => 
  array (
    0 => 'int',
  ),
  'ktaglib_mpeg_audioproperties::getlength' => 
  array (
    0 => 'int',
  ),
  'ktaglib_mpeg_audioproperties::getsamplebitrate' => 
  array (
    0 => 'int',
  ),
  'ktaglib_mpeg_audioproperties::getversion' => 
  array (
    0 => 'int',
  ),
  'ktaglib_mpeg_audioproperties::iscopyrighted' => 
  array (
    0 => 'bool',
  ),
  'ktaglib_mpeg_audioproperties::isoriginal' => 
  array (
    0 => 'bool',
  ),
  'ktaglib_mpeg_audioproperties::isprotectionenabled' => 
  array (
    0 => 'bool',
  ),
  'ktaglib_mpeg_file::getaudioproperties' => 
  array (
    0 => 'KTaglib_MPEG_File',
  ),
  'ktaglib_mpeg_file::getid3v1tag' => 
  array (
    0 => 'KTaglib_ID3v1_Tag',
    'create=' => 'bool',
  ),
  'ktaglib_mpeg_file::getid3v2tag' => 
  array (
    0 => 'KTaglib_ID3v2_Tag',
    'create=' => 'bool',
  ),
  'ktaglib_tag::getalbum' => 
  array (
    0 => 'string',
  ),
  'ktaglib_tag::getartist' => 
  array (
    0 => 'string',
  ),
  'ktaglib_tag::getcomment' => 
  array (
    0 => 'string',
  ),
  'ktaglib_tag::getgenre' => 
  array (
    0 => 'string',
  ),
  'ktaglib_tag::gettitle' => 
  array (
    0 => 'string',
  ),
  'ktaglib_tag::gettrack' => 
  array (
    0 => 'int',
  ),
  'ktaglib_tag::getyear' => 
  array (
    0 => 'int',
  ),
  'ktaglib_tag::isempty' => 
  array (
    0 => 'bool',
  ),
  'labelcacheobj::freecache' => 
  array (
    0 => 'bool',
  ),
  'labelobj::__construct' => 
  array (
    0 => 'void',
  ),
  'labelobj::converttostring' => 
  array (
    0 => 'string',
  ),
  'labelobj::deletestyle' => 
  array (
    0 => 'int',
    'index' => 'int',
  ),
  'labelobj::free' => 
  array (
    0 => 'void',
  ),
  'labelobj::getbinding' => 
  array (
    0 => 'string',
    'labelbinding' => 'mixed',
  ),
  'labelobj::getexpressionstring' => 
  array (
    0 => 'string',
  ),
  'labelobj::getstyle' => 
  array (
    0 => 'styleObj',
    'index' => 'int',
  ),
  'labelobj::gettextstring' => 
  array (
    0 => 'string',
  ),
  'labelobj::movestyledown' => 
  array (
    0 => 'int',
    'index' => 'int',
  ),
  'labelobj::movestyleup' => 
  array (
    0 => 'int',
    'index' => 'int',
  ),
  'labelobj::removebinding' => 
  array (
    0 => 'int',
    'labelbinding' => 'mixed',
  ),
  'labelobj::set' => 
  array (
    0 => 'int',
    'property_name' => 'string',
    'new_value' => 'mixed',
  ),
  'labelobj::setbinding' => 
  array (
    0 => 'int',
    'labelbinding' => 'mixed',
    'value' => 'string',
  ),
  'labelobj::setexpression' => 
  array (
    0 => 'int',
    'expression' => 'string',
  ),
  'labelobj::settext' => 
  array (
    0 => 'int',
    'text' => 'string',
  ),
  'labelobj::updatefromstring' => 
  array (
    0 => 'int',
    'snippet' => 'string',
  ),
  'lapack::eigenvalues' => 
  array (
    0 => 'array<array-key, mixed>',
    'a' => 'array<array-key, mixed>',
    'left=' => 'array<array-key, mixed>',
    'right=' => 'array<array-key, mixed>',
  ),
  'lapack::identity' => 
  array (
    0 => 'array<array-key, mixed>',
    'n' => 'int',
  ),
  'lapack::leastsquaresbyfactorisation' => 
  array (
    0 => 'array<array-key, mixed>',
    'a' => 'array<array-key, mixed>',
    'b' => 'array<array-key, mixed>',
  ),
  'lapack::leastsquaresbysvd' => 
  array (
    0 => 'array<array-key, mixed>',
    'a' => 'array<array-key, mixed>',
    'b' => 'array<array-key, mixed>',
  ),
  'lapack::pseudoinverse' => 
  array (
    0 => 'array<array-key, mixed>',
    'a' => 'array<array-key, mixed>',
  ),
  'lapack::singularvalues' => 
  array (
    0 => 'array<array-key, mixed>',
    'a' => 'array<array-key, mixed>',
  ),
  'lapack::solvelinearequation' => 
  array (
    0 => 'array<array-key, mixed>',
    'a' => 'array<array-key, mixed>',
    'b' => 'array<array-key, mixed>',
  ),
  'layerobj::addfeature' => 
  array (
    0 => 'int',
    'shape' => 'shapeObj',
  ),
  'layerobj::applysld' => 
  array (
    0 => 'int',
    'sldxml' => 'string',
    'namedlayer' => 'string',
  ),
  'layerobj::applysldurl' => 
  array (
    0 => 'int',
    'sldurl' => 'string',
    'namedlayer' => 'string',
  ),
  'layerobj::clearprocessing' => 
  array (
    0 => 'void',
  ),
  'layerobj::close' => 
  array (
    0 => 'void',
  ),
  'layerobj::converttostring' => 
  array (
    0 => 'string',
  ),
  'layerobj::draw' => 
  array (
    0 => 'int',
    'image' => 'imageObj',
  ),
  'layerobj::drawquery' => 
  array (
    0 => 'int',
    'image' => 'imageObj',
  ),
  'layerobj::free' => 
  array (
    0 => 'void',
  ),
  'layerobj::generatesld' => 
  array (
    0 => 'string',
  ),
  'layerobj::getclass' => 
  array (
    0 => 'classObj',
    'classIndex' => 'int',
  ),
  'layerobj::getclassindex' => 
  array (
    0 => 'int',
    'shape' => 'mixed',
    'classgroup' => 'mixed',
    'numclasses' => 'mixed',
  ),
  'layerobj::getextent' => 
  array (
    0 => 'rectObj',
  ),
  'layerobj::getfilterstring' => 
  array (
    0 => 'null|string',
  ),
  'layerobj::getgridintersectioncoordinates' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'layerobj::getitems' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'layerobj::getmetadata' => 
  array (
    0 => 'int',
    'name' => 'string',
  ),
  'layerobj::getnumresults' => 
  array (
    0 => 'int',
  ),
  'layerobj::getprocessing' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'layerobj::getprojection' => 
  array (
    0 => 'string',
  ),
  'layerobj::getresult' => 
  array (
    0 => 'resultObj',
    'index' => 'int',
  ),
  'layerobj::getresultsbounds' => 
  array (
    0 => 'rectObj',
  ),
  'layerobj::getshape' => 
  array (
    0 => 'shapeObj',
    'result' => 'resultObj',
  ),
  'layerobj::getwmsfeatureinfourl' => 
  array (
    0 => 'string',
    'clickX' => 'int',
    'clickY' => 'int',
    'featureCount' => 'int',
    'infoFormat' => 'string',
  ),
  'layerobj::isvisible' => 
  array (
    0 => 'bool',
  ),
  'layerobj::moveclassdown' => 
  array (
    0 => 'int',
    'index' => 'int',
  ),
  'layerobj::moveclassup' => 
  array (
    0 => 'int',
    'index' => 'int',
  ),
  'layerobj::ms_newlayerobj' => 
  array (
    0 => 'layerObj',
    'map' => 'mapObj',
    'layer' => 'layerObj',
  ),
  'layerobj::nextshape' => 
  array (
    0 => 'shapeObj',
  ),
  'layerobj::open' => 
  array (
    0 => 'int',
  ),
  'layerobj::querybyattributes' => 
  array (
    0 => 'int',
    'qitem' => 'string',
    'qstring' => 'string',
    'mode' => 'int',
  ),
  'layerobj::querybyfeatures' => 
  array (
    0 => 'int',
    'slayer' => 'int',
  ),
  'layerobj::querybypoint' => 
  array (
    0 => 'int',
    'point' => 'pointObj',
    'mode' => 'int',
    'buffer' => 'float',
  ),
  'layerobj::querybyrect' => 
  array (
    0 => 'int',
    'rect' => 'rectObj',
  ),
  'layerobj::querybyshape' => 
  array (
    0 => 'int',
    'shape' => 'shapeObj',
  ),
  'layerobj::removeclass' => 
  array (
    0 => 'classObj|null',
    'index' => 'int',
  ),
  'layerobj::removemetadata' => 
  array (
    0 => 'int',
    'name' => 'string',
  ),
  'layerobj::set' => 
  array (
    0 => 'int',
    'property_name' => 'string',
    'new_value' => 'mixed',
  ),
  'layerobj::setconnectiontype' => 
  array (
    0 => 'int',
    'connectiontype' => 'int',
    'plugin_library' => 'string',
  ),
  'layerobj::setfilter' => 
  array (
    0 => 'int',
    'expression' => 'string',
  ),
  'layerobj::setmetadata' => 
  array (
    0 => 'int',
    'name' => 'string',
    'value' => 'string',
  ),
  'layerobj::setprojection' => 
  array (
    0 => 'int',
    'proj_params' => 'string',
  ),
  'layerobj::setwktprojection' => 
  array (
    0 => 'int',
    'proj_params' => 'string',
  ),
  'layerobj::updatefromstring' => 
  array (
    0 => 'int',
    'snippet' => 'string',
  ),
  'lcfirst' => 
  array (
    0 => 'string',
    'string' => 'string',
  ),
  'lcg_value' => 
  array (
    0 => 'float',
  ),
  'lchgrp' => 
  array (
    0 => 'bool',
    'filename' => 'string',
    'group' => 'int|string',
  ),
  'lchown' => 
  array (
    0 => 'bool',
    'filename' => 'string',
    'user' => 'int|string',
  ),
  'ldap_8859_to_t61' => 
  array (
    0 => 'string',
    'value' => 'string',
  ),
  'ldap_add' => 
  array (
    0 => 'bool',
    'ldap' => 'LDAP\\Connection',
    'dn' => 'string',
    'entry' => 'array<array-key, mixed>',
    'controls=' => 'array<array-key, mixed>|null',
  ),
  'ldap_add_ext' => 
  array (
    0 => 'LDAP\\Result|false',
    'ldap' => 'LDAP\\Connection',
    'dn' => 'string',
    'entry' => 'array<array-key, mixed>',
    'controls=' => 'array<array-key, mixed>|null',
  ),
  'ldap_bind' => 
  array (
    0 => 'bool',
    'ldap' => 'LDAP\\Connection',
    'dn=' => 'null|string',
    'password=' => 'null|string',
  ),
  'ldap_bind_ext' => 
  array (
    0 => 'LDAP\\Result|false',
    'ldap' => 'LDAP\\Connection',
    'dn=' => 'null|string',
    'password=' => 'null|string',
    'controls=' => 'array<array-key, mixed>|null',
  ),
  'ldap_close' => 
  array (
    0 => 'bool',
    'ldap' => 'LDAP\\Connection',
  ),
  'ldap_compare' => 
  array (
    0 => 'bool|int',
    'ldap' => 'LDAP\\Connection',
    'dn' => 'string',
    'attribute' => 'string',
    'value' => 'string',
    'controls=' => 'array<array-key, mixed>|null',
  ),
  'ldap_connect' => 
  array (
    0 => 'LDAP\\Connection|false',
    'uri=' => 'null|string',
    'port=' => 'int',
    'wallet=' => 'string',
    'password=' => 'string',
    'auth_mode=' => 'int',
  ),
  'ldap_count_entries' => 
  array (
    0 => 'int',
    'ldap' => 'LDAP\\Connection',
    'result' => 'LDAP\\Result',
  ),
  'ldap_delete' => 
  array (
    0 => 'bool',
    'ldap' => 'LDAP\\Connection',
    'dn' => 'string',
    'controls=' => 'array<array-key, mixed>|null',
  ),
  'ldap_delete_ext' => 
  array (
    0 => 'LDAP\\Result|false',
    'ldap' => 'LDAP\\Connection',
    'dn' => 'string',
    'controls=' => 'array<array-key, mixed>|null',
  ),
  'ldap_dn2ufn' => 
  array (
    0 => 'false|string',
    'dn' => 'string',
  ),
  'ldap_err2str' => 
  array (
    0 => 'string',
    'errno' => 'int',
  ),
  'ldap_errno' => 
  array (
    0 => 'int',
    'ldap' => 'LDAP\\Connection',
  ),
  'ldap_error' => 
  array (
    0 => 'string',
    'ldap' => 'LDAP\\Connection',
  ),
  'ldap_escape' => 
  array (
    0 => 'string',
    'value' => 'string',
    'ignore=' => 'string',
    'flags=' => 'int',
  ),
  'ldap_exop' => 
  array (
    0 => 'LDAP\\Result|bool',
    'ldap' => 'LDAP\\Connection',
    'request_oid' => 'string',
    'request_data=' => 'null|string',
    'controls=' => 'array<array-key, mixed>|null',
    '&w_response_data=' => 'string',
    '&w_response_oid=' => 'string',
  ),
  'ldap_exop_passwd' => 
  array (
    0 => 'bool|string',
    'ldap' => 'LDAP\\Connection',
    'user=' => 'string',
    'old_password=' => 'string',
    'new_password=' => 'string',
    '&w_controls=' => 'array<array-key, mixed>|null',
  ),
  'ldap_exop_refresh' => 
  array (
    0 => 'false|int',
    'ldap' => 'LDAP\\Connection',
    'dn' => 'string',
    'ttl' => 'int',
  ),
  'ldap_exop_whoami' => 
  array (
    0 => 'false|string',
    'ldap' => 'LDAP\\Connection',
  ),
  'ldap_explode_dn' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'dn' => 'string',
    'with_attrib' => 'int',
  ),
  'ldap_first_attribute' => 
  array (
    0 => 'false|string',
    'ldap' => 'LDAP\\Connection',
    'entry' => 'LDAP\\ResultEntry',
  ),
  'ldap_first_entry' => 
  array (
    0 => 'LDAP\\ResultEntry|false',
    'ldap' => 'LDAP\\Connection',
    'result' => 'LDAP\\Result',
  ),
  'ldap_first_reference' => 
  array (
    0 => 'LDAP\\ResultEntry|false',
    'ldap' => 'LDAP\\Connection',
    'result' => 'LDAP\\Result',
  ),
  'ldap_free_result' => 
  array (
    0 => 'bool',
    'result' => 'LDAP\\Result',
  ),
  'ldap_get_attributes' => 
  array (
    0 => 'array<array-key, mixed>',
    'ldap' => 'LDAP\\Connection',
    'entry' => 'LDAP\\ResultEntry',
  ),
  'ldap_get_dn' => 
  array (
    0 => 'false|string',
    'ldap' => 'LDAP\\Connection',
    'entry' => 'LDAP\\ResultEntry',
  ),
  'ldap_get_entries' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'ldap' => 'LDAP\\Connection',
    'result' => 'LDAP\\Result',
  ),
  'ldap_get_option' => 
  array (
    0 => 'bool',
    'ldap' => 'LDAP\\Connection',
    'option' => 'int',
    '&w_value=' => 'array<array-key, mixed>|int|string',
  ),
  'ldap_get_values' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'ldap' => 'LDAP\\Connection',
    'entry' => 'LDAP\\ResultEntry',
    'attribute' => 'string',
  ),
  'ldap_get_values_len' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'ldap' => 'LDAP\\Connection',
    'entry' => 'LDAP\\ResultEntry',
    'attribute' => 'string',
  ),
  'ldap_list' => 
  array (
    0 => 'LDAP\\Result|array<array-key, LDAP\\Result>|false',
    'ldap' => 'LDAP\\Connection|array<array-key, LDAP\\Connection>',
    'base' => 'array<array-key, mixed>|string',
    'filter' => 'array<array-key, mixed>|string',
    'attributes=' => 'array<array-key, mixed>',
    'attributes_only=' => 'int',
    'sizelimit=' => 'int',
    'timelimit=' => 'int',
    'deref=' => 'int',
    'controls=' => 'array<array-key, mixed>|null',
  ),
  'ldap_mod_add' => 
  array (
    0 => 'bool',
    'ldap' => 'LDAP\\Connection',
    'dn' => 'string',
    'entry' => 'array<array-key, mixed>',
    'controls=' => 'array<array-key, mixed>|null',
  ),
  'ldap_mod_add_ext' => 
  array (
    0 => 'LDAP\\Result|false',
    'ldap' => 'LDAP\\Connection',
    'dn' => 'string',
    'entry' => 'array<array-key, mixed>',
    'controls=' => 'array<array-key, mixed>|null',
  ),
  'ldap_mod_del' => 
  array (
    0 => 'bool',
    'ldap' => 'LDAP\\Connection',
    'dn' => 'string',
    'entry' => 'array<array-key, mixed>',
    'controls=' => 'array<array-key, mixed>|null',
  ),
  'ldap_mod_del_ext' => 
  array (
    0 => 'LDAP\\Result|false',
    'ldap' => 'LDAP\\Connection',
    'dn' => 'string',
    'entry' => 'array<array-key, mixed>',
    'controls=' => 'array<array-key, mixed>|null',
  ),
  'ldap_mod_replace' => 
  array (
    0 => 'bool',
    'ldap' => 'LDAP\\Connection',
    'dn' => 'string',
    'entry' => 'array<array-key, mixed>',
    'controls=' => 'array<array-key, mixed>|null',
  ),
  'ldap_mod_replace_ext' => 
  array (
    0 => 'LDAP\\Result|false',
    'ldap' => 'LDAP\\Connection',
    'dn' => 'string',
    'entry' => 'array<array-key, mixed>',
    'controls=' => 'array<array-key, mixed>|null',
  ),
  'ldap_modify' => 
  array (
    0 => 'bool',
    'ldap' => 'LDAP\\Connection',
    'dn' => 'string',
    'entry' => 'array<array-key, mixed>',
    'controls=' => 'array<array-key, mixed>|null',
  ),
  'ldap_modify_batch' => 
  array (
    0 => 'bool',
    'ldap' => 'LDAP\\Connection',
    'dn' => 'string',
    'modifications_info' => 'array<array-key, mixed>',
    'controls=' => 'array<array-key, mixed>|null',
  ),
  'ldap_next_attribute' => 
  array (
    0 => 'false|string',
    'ldap' => 'LDAP\\Connection',
    'entry' => 'LDAP\\ResultEntry',
  ),
  'ldap_next_entry' => 
  array (
    0 => 'LDAP\\ResultEntry|false',
    'ldap' => 'LDAP\\Connection',
    'entry' => 'LDAP\\ResultEntry',
  ),
  'ldap_next_reference' => 
  array (
    0 => 'LDAP\\ResultEntry|false',
    'ldap' => 'LDAP\\Connection',
    'entry' => 'LDAP\\ResultEntry',
  ),
  'ldap_parse_exop' => 
  array (
    0 => 'bool',
    'ldap' => 'LDAP\\Connection',
    'result' => 'LDAP\\Result',
    '&w_response_data=' => 'string',
    '&w_response_oid=' => 'string',
  ),
  'ldap_parse_reference' => 
  array (
    0 => 'bool',
    'ldap' => 'LDAP\\Connection',
    'entry' => 'LDAP\\ResultEntry',
    '&w_referrals' => 'array<array-key, mixed>',
  ),
  'ldap_parse_result' => 
  array (
    0 => 'bool',
    'ldap' => 'LDAP\\Connection',
    'result' => 'LDAP\\Result',
    '&w_error_code' => 'int',
    '&w_matched_dn=' => 'string',
    '&w_error_message=' => 'string',
    '&w_referrals=' => 'array<array-key, mixed>',
    '&w_controls=' => 'array<array-key, mixed>',
  ),
  'ldap_read' => 
  array (
    0 => 'LDAP\\Result|array<array-key, LDAP\\Result>|false',
    'ldap' => 'LDAP\\Connection|array<array-key, LDAP\\Connection>',
    'base' => 'array<array-key, mixed>|string',
    'filter' => 'array<array-key, mixed>|string',
    'attributes=' => 'array<array-key, mixed>',
    'attributes_only=' => 'int',
    'sizelimit=' => 'int',
    'timelimit=' => 'int',
    'deref=' => 'int',
    'controls=' => 'array<array-key, mixed>|null',
  ),
  'ldap_rename' => 
  array (
    0 => 'bool',
    'ldap' => 'LDAP\\Connection',
    'dn' => 'string',
    'new_rdn' => 'string',
    'new_parent' => 'string',
    'delete_old_rdn' => 'bool',
    'controls=' => 'array<array-key, mixed>|null',
  ),
  'ldap_rename_ext' => 
  array (
    0 => 'LDAP\\Result|false',
    'ldap' => 'LDAP\\Connection',
    'dn' => 'string',
    'new_rdn' => 'string',
    'new_parent' => 'string',
    'delete_old_rdn' => 'bool',
    'controls=' => 'array<array-key, mixed>|null',
  ),
  'ldap_sasl_bind' => 
  array (
    0 => 'bool',
    'ldap' => 'LDAP\\Connection',
    'dn=' => 'null|string',
    'password=' => 'null|string',
    'mech=' => 'null|string',
    'realm=' => 'null|string',
    'authc_id=' => 'null|string',
    'authz_id=' => 'null|string',
    'props=' => 'null|string',
  ),
  'ldap_search' => 
  array (
    0 => 'LDAP\\Result|array<array-key, LDAP\\Result>|false',
    'ldap' => 'LDAP\\Connection|array<array-key, LDAP\\Connection>',
    'base' => 'array<array-key, mixed>|string',
    'filter' => 'array<array-key, mixed>|string',
    'attributes=' => 'array<array-key, mixed>',
    'attributes_only=' => 'int',
    'sizelimit=' => 'int',
    'timelimit=' => 'int',
    'deref=' => 'int',
    'controls=' => 'array<array-key, mixed>|null',
  ),
  'ldap_set_option' => 
  array (
    0 => 'bool',
    'ldap' => 'LDAP\\Connection|null',
    'option' => 'int',
    'value' => 'mixed',
  ),
  'ldap_set_rebind_proc' => 
  array (
    0 => 'bool',
    'ldap' => 'LDAP\\Connection',
    'callback' => 'callable|null',
  ),
  'ldap_start_tls' => 
  array (
    0 => 'bool',
    'ldap' => 'LDAP\\Connection',
  ),
  'ldap_t61_to_8859' => 
  array (
    0 => 'string',
    'value' => 'string',
  ),
  'ldap_unbind' => 
  array (
    0 => 'bool',
    'ldap' => 'LDAP\\Connection',
  ),
  'leak' => 
  array (
    0 => 'mixed',
    'num_bytes' => 'int',
  ),
  'leak_variable' => 
  array (
    0 => 'mixed',
    'variable' => 'mixed',
    'leak_data' => 'bool',
  ),
  'legendobj::converttostring' => 
  array (
    0 => 'string',
  ),
  'legendobj::free' => 
  array (
    0 => 'void',
  ),
  'legendobj::set' => 
  array (
    0 => 'int',
    'property_name' => 'string',
    'new_value' => 'mixed',
  ),
  'legendobj::updatefromstring' => 
  array (
    0 => 'int',
    'snippet' => 'string',
  ),
  'lengthexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'string',
    'code=' => 'int',
    'previous=' => 'Throwable|null',
  ),
  'lengthexception::__tostring' => 
  array (
    0 => 'string',
  ),
  'lengthexception::getcode' => 
  array (
    0 => 'int',
  ),
  'lengthexception::getfile' => 
  array (
    0 => 'string',
  ),
  'lengthexception::getline' => 
  array (
    0 => 'int',
  ),
  'lengthexception::getmessage' => 
  array (
    0 => 'string',
  ),
  'lengthexception::getprevious' => 
  array (
    0 => 'Throwable|null',
  ),
  'lengthexception::gettrace' => 
  array (
    0 => 'list<array{args?: array<array-key, mixed>, class?: class-string, file?: string, function: string, line?: int, type?: \'->\'|\'::\'}>',
  ),
  'lengthexception::gettraceasstring' => 
  array (
    0 => 'string',
  ),
  'leveldb::__construct' => 
  array (
    0 => 'void',
    'name' => 'string',
    'options=' => 'array<array-key, mixed>',
    'read_options=' => 'array<array-key, mixed>',
    'write_options=' => 'array<array-key, mixed>',
  ),
  'leveldb::close' => 
  array (
    0 => 'mixed',
  ),
  'leveldb::compactrange' => 
  array (
    0 => 'mixed',
    'start' => 'mixed',
    'limit' => 'mixed',
  ),
  'leveldb::delete' => 
  array (
    0 => 'bool',
    'key' => 'string',
    'write_options=' => 'array<array-key, mixed>',
  ),
  'leveldb::destroy' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
    'options=' => 'array<array-key, mixed>',
  ),
  'leveldb::get' => 
  array (
    0 => 'bool|string',
    'key' => 'string',
    'read_options=' => 'array<array-key, mixed>',
  ),
  'leveldb::getapproximatesizes' => 
  array (
    0 => 'mixed',
    'start' => 'mixed',
    'limit' => 'mixed',
  ),
  'leveldb::getiterator' => 
  array (
    0 => 'LevelDBIterator',
    'options=' => 'array<array-key, mixed>',
  ),
  'leveldb::getproperty' => 
  array (
    0 => 'mixed',
    'name' => 'string',
  ),
  'leveldb::getsnapshot' => 
  array (
    0 => 'LevelDBSnapshot',
  ),
  'leveldb::put' => 
  array (
    0 => 'mixed',
    'key' => 'string',
    'value' => 'string',
    'write_options=' => 'array<array-key, mixed>',
  ),
  'leveldb::repair' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
    'options=' => 'array<array-key, mixed>',
  ),
  'leveldb::set' => 
  array (
    0 => 'mixed',
    'key' => 'string',
    'value' => 'string',
    'write_options=' => 'array<array-key, mixed>',
  ),
  'leveldb::write' => 
  array (
    0 => 'mixed',
    'batch' => 'LevelDBWriteBatch',
    'write_options=' => 'array<array-key, mixed>',
  ),
  'leveldbiterator::__construct' => 
  array (
    0 => 'void',
    'db' => 'LevelDB',
    'read_options=' => 'array<array-key, mixed>',
  ),
  'leveldbiterator::current' => 
  array (
    0 => 'mixed',
  ),
  'leveldbiterator::destroy' => 
  array (
    0 => 'mixed',
  ),
  'leveldbiterator::geterror' => 
  array (
    0 => 'mixed',
  ),
  'leveldbiterator::key' => 
  array (
    0 => 'int|string',
  ),
  'leveldbiterator::last' => 
  array (
    0 => 'mixed',
  ),
  'leveldbiterator::next' => 
  array (
    0 => 'void',
  ),
  'leveldbiterator::prev' => 
  array (
    0 => 'mixed',
  ),
  'leveldbiterator::rewind' => 
  array (
    0 => 'void',
  ),
  'leveldbiterator::seek' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'leveldbiterator::valid' => 
  array (
    0 => 'bool',
  ),
  'leveldbsnapshot::__construct' => 
  array (
    0 => 'void',
    'db' => 'LevelDB',
  ),
  'leveldbsnapshot::release' => 
  array (
    0 => 'mixed',
  ),
  'leveldbwritebatch::__construct' => 
  array (
    0 => 'void',
    'name' => 'mixed',
    'options=' => 'array<array-key, mixed>',
    'read_options=' => 'array<array-key, mixed>',
    'write_options=' => 'array<array-key, mixed>',
  ),
  'leveldbwritebatch::clear' => 
  array (
    0 => 'mixed',
  ),
  'leveldbwritebatch::delete' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'write_options=' => 'array<array-key, mixed>',
  ),
  'leveldbwritebatch::put' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
    'write_options=' => 'array<array-key, mixed>',
  ),
  'leveldbwritebatch::set' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
    'write_options=' => 'array<array-key, mixed>',
  ),
  'levenshtein' => 
  array (
    0 => 'int',
    'string1' => 'string',
    'string2' => 'string',
    'insertion_cost=' => 'int',
    'replacement_cost=' => 'int',
    'deletion_cost=' => 'int',
  ),
  'levenshtein\'1' => 
  array (
    0 => 'int',
    'string1' => 'string',
    'string2' => 'string',
    'insertion_cost' => 'int',
    'repetition_cost' => 'int',
    'deletion_cost' => 'int',
  ),
  'libxml_clear_errors' => 
  array (
    0 => 'void',
  ),
  'libxml_disable_entity_loader' => 
  array (
    0 => 'bool',
    'disable=' => 'bool',
  ),
  'libxml_get_errors' => 
  array (
    0 => 'list<LibXMLError>',
  ),
  'libxml_get_external_entity_loader' => 
  array (
    0 => 'callable(string, string, array{directory: null|string, extSubSystem: null|string, extSubURI: null|string, intSubName: null|string}):(null|resource|string)|null',
  ),
  'libxml_get_last_error' => 
  array (
    0 => 'LibXMLError|false',
  ),
  'libxml_set_external_entity_loader' => 
  array (
    0 => 'bool',
    'resolver_function' => 'callable(string, string, array{directory: null|string, extSubSystem: null|string, extSubURI: null|string, intSubName: null|string}):(null|resource|string)|null',
  ),
  'libxml_set_streams_context' => 
  array (
    0 => 'void',
    'context' => 'resource',
  ),
  'libxml_use_internal_errors' => 
  array (
    0 => 'bool',
    'use_errors=' => 'bool|null',
  ),
  'limititerator::__construct' => 
  array (
    0 => 'void',
    'iterator' => 'Iterator',
    'offset=' => 'int',
    'limit=' => 'int',
  ),
  'limititerator::getinneriterator' => 
  array (
    0 => 'Iterator|null',
  ),
  'limititerator::getposition' => 
  array (
    0 => 'int',
  ),
  'limititerator::next' => 
  array (
    0 => 'void',
  ),
  'limititerator::rewind' => 
  array (
    0 => 'void',
  ),
  'limititerator::seek' => 
  array (
    0 => 'int',
    'offset' => 'int',
  ),
  'limititerator::valid' => 
  array (
    0 => 'bool',
  ),
  'lineobj::__construct' => 
  array (
    0 => 'void',
  ),
  'lineobj::add' => 
  array (
    0 => 'int',
    'point' => 'pointObj',
  ),
  'lineobj::addxy' => 
  array (
    0 => 'int',
    'x' => 'float',
    'y' => 'float',
    'm' => 'float',
  ),
  'lineobj::addxyz' => 
  array (
    0 => 'int',
    'x' => 'float',
    'y' => 'float',
    'z' => 'float',
    'm' => 'float',
  ),
  'lineobj::ms_newlineobj' => 
  array (
    0 => 'lineObj',
  ),
  'lineobj::point' => 
  array (
    0 => 'pointObj',
    'i' => 'int',
  ),
  'lineobj::project' => 
  array (
    0 => 'int',
    'in' => 'projectionObj',
    'out' => 'projectionObj',
  ),
  'link' => 
  array (
    0 => 'bool',
    'target' => 'string',
    'link' => 'string',
  ),
  'linkinfo' => 
  array (
    0 => 'false|int',
    'path' => 'string',
  ),
  'litespeed_request_headers' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'litespeed_response_headers' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'locale::acceptfromhttp' => 
  array (
    0 => 'false|string',
    'header' => 'string',
  ),
  'locale::canonicalize' => 
  array (
    0 => 'null|string',
    'locale' => 'string',
  ),
  'locale::composelocale' => 
  array (
    0 => 'string',
    'subtags' => 'array<array-key, mixed>',
  ),
  'locale::filtermatches' => 
  array (
    0 => 'bool|null',
    'languageTag' => 'string',
    'locale' => 'string',
    'canonicalize=' => 'bool',
  ),
  'locale::getallvariants' => 
  array (
    0 => 'array<array-key, mixed>|null',
    'locale' => 'string',
  ),
  'locale::getdefault' => 
  array (
    0 => 'string',
  ),
  'locale::getdisplaylanguage' => 
  array (
    0 => 'string',
    'locale' => 'string',
    'displayLocale=' => 'null|string',
  ),
  'locale::getdisplayname' => 
  array (
    0 => 'string',
    'locale' => 'string',
    'displayLocale=' => 'null|string',
  ),
  'locale::getdisplayregion' => 
  array (
    0 => 'string',
    'locale' => 'string',
    'displayLocale=' => 'null|string',
  ),
  'locale::getdisplayscript' => 
  array (
    0 => 'string',
    'locale' => 'string',
    'displayLocale=' => 'null|string',
  ),
  'locale::getdisplayvariant' => 
  array (
    0 => 'string',
    'locale' => 'string',
    'displayLocale=' => 'null|string',
  ),
  'locale::getkeywords' => 
  array (
    0 => 'array<array-key, mixed>|false|null',
    'locale' => 'string',
  ),
  'locale::getprimarylanguage' => 
  array (
    0 => 'null|string',
    'locale' => 'string',
  ),
  'locale::getregion' => 
  array (
    0 => 'null|string',
    'locale' => 'string',
  ),
  'locale::getscript' => 
  array (
    0 => 'null|string',
    'locale' => 'string',
  ),
  'locale::lookup' => 
  array (
    0 => 'null|string',
    'languageTag' => 'array<array-key, mixed>',
    'locale' => 'string',
    'canonicalize=' => 'bool',
    'defaultLocale=' => 'null|string',
  ),
  'locale::parselocale' => 
  array (
    0 => 'array<array-key, mixed>|null',
    'locale' => 'string',
  ),
  'locale::setdefault' => 
  array (
    0 => 'true',
    'locale' => 'string',
  ),
  'locale_accept_from_http' => 
  array (
    0 => 'false|string',
    'header' => 'string',
  ),
  'locale_canonicalize' => 
  array (
    0 => 'null|string',
    'locale' => 'string',
  ),
  'locale_compose' => 
  array (
    0 => 'false|string',
    'subtags' => 'array<array-key, mixed>',
  ),
  'locale_filter_matches' => 
  array (
    0 => 'bool|null',
    'languageTag' => 'string',
    'locale' => 'string',
    'canonicalize=' => 'bool',
  ),
  'locale_get_all_variants' => 
  array (
    0 => 'array<array-key, mixed>|null',
    'locale' => 'string',
  ),
  'locale_get_default' => 
  array (
    0 => 'string',
  ),
  'locale_get_display_language' => 
  array (
    0 => 'string',
    'locale' => 'string',
    'displayLocale=' => 'null|string',
  ),
  'locale_get_display_name' => 
  array (
    0 => 'string',
    'locale' => 'string',
    'displayLocale=' => 'null|string',
  ),
  'locale_get_display_region' => 
  array (
    0 => 'string',
    'locale' => 'string',
    'displayLocale=' => 'null|string',
  ),
  'locale_get_display_script' => 
  array (
    0 => 'string',
    'locale' => 'string',
    'displayLocale=' => 'null|string',
  ),
  'locale_get_display_variant' => 
  array (
    0 => 'string',
    'locale' => 'string',
    'displayLocale=' => 'null|string',
  ),
  'locale_get_keywords' => 
  array (
    0 => 'array<array-key, mixed>|false|null',
    'locale' => 'string',
  ),
  'locale_get_primary_language' => 
  array (
    0 => 'null|string',
    'locale' => 'string',
  ),
  'locale_get_region' => 
  array (
    0 => 'null|string',
    'locale' => 'string',
  ),
  'locale_get_script' => 
  array (
    0 => 'null|string',
    'locale' => 'string',
  ),
  'locale_lookup' => 
  array (
    0 => 'null|string',
    'languageTag' => 'array<array-key, mixed>',
    'locale' => 'string',
    'canonicalize=' => 'bool',
    'defaultLocale=' => 'null|string',
  ),
  'locale_parse' => 
  array (
    0 => 'array<array-key, mixed>|null',
    'locale' => 'string',
  ),
  'locale_set_default' => 
  array (
    0 => 'true',
    'locale' => 'string',
  ),
  'localeconv' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'localtime' => 
  array (
    0 => 'array<array-key, mixed>',
    'timestamp=' => 'int|null',
    'associative=' => 'bool',
  ),
  'log' => 
  array (
    0 => 'float',
    'num' => 'float',
    'base=' => 'float',
  ),
  'log10' => 
  array (
    0 => 'float',
    'num' => 'float',
  ),
  'log1p' => 
  array (
    0 => 'float',
    'num' => 'float',
  ),
  'logicexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'string',
    'code=' => 'int',
    'previous=' => 'Throwable|null',
  ),
  'logicexception::__tostring' => 
  array (
    0 => 'string',
  ),
  'logicexception::getcode' => 
  array (
    0 => 'int',
  ),
  'logicexception::getfile' => 
  array (
    0 => 'string',
  ),
  'logicexception::getline' => 
  array (
    0 => 'int',
  ),
  'logicexception::getmessage' => 
  array (
    0 => 'string',
  ),
  'logicexception::getprevious' => 
  array (
    0 => 'Throwable|null',
  ),
  'logicexception::gettrace' => 
  array (
    0 => 'list<array{args?: array<array-key, mixed>, class?: class-string, file?: string, function: string, line?: int, type?: \'->\'|\'::\'}>',
  ),
  'logicexception::gettraceasstring' => 
  array (
    0 => 'string',
  ),
  'long2ip' => 
  array (
    0 => 'string',
    'ip' => 'int',
  ),
  'lstat' => 
  array (
    0 => 'array{0: int, 10: int, 11: int, 12: int, 1: int, 2: int, 3: int, 4: int, 5: int, 6: int, 7: int, 8: int, 9: int, atime: int, blksize: int, blocks: int, ctime: int, dev: int, gid: int, ino: int, mode: int, mtime: int, nlink: int, rdev: int, size: int, uid: int}|false',
    'filename' => 'string',
  ),
  'ltrim' => 
  array (
    0 => 'string',
    'string' => 'string',
    'characters=' => 'string',
  ),
  'lua::__call' => 
  array (
    0 => 'mixed',
    'lua_func' => 'callable',
    'args=' => 'array<array-key, mixed>',
    'use_self=' => 'int',
  ),
  'lua::__construct' => 
  array (
    0 => 'void',
    'lua_script_file' => 'string',
  ),
  'lua::assign' => 
  array (
    0 => 'Lua|null',
    'name' => 'string',
    'value' => 'mixed',
  ),
  'lua::call' => 
  array (
    0 => 'mixed',
    'lua_func' => 'callable',
    'args=' => 'array<array-key, mixed>',
    'use_self=' => 'int',
  ),
  'lua::eval' => 
  array (
    0 => 'mixed',
    'statements' => 'string',
  ),
  'lua::getversion' => 
  array (
    0 => 'string',
  ),
  'lua::include' => 
  array (
    0 => 'mixed',
    'file' => 'string',
  ),
  'lua::registercallback' => 
  array (
    0 => 'Lua|false|null',
    'name' => 'string',
    'function' => 'callable',
  ),
  'luaclosure::__invoke' => 
  array (
    0 => 'void',
    'arg' => 'mixed',
    '...args=' => 'mixed',
  ),
  'lzf_compress' => 
  array (
    0 => 'string',
    'data' => 'string',
  ),
  'lzf_decompress' => 
  array (
    0 => 'string',
    'data' => 'string',
  ),
  'lzf_optimized_for' => 
  array (
    0 => 'int',
  ),
  'magic_quotes_runtime' => 
  array (
    0 => 'bool',
    'new_setting' => 'bool',
  ),
  'mail' => 
  array (
    0 => 'bool',
    'to' => 'string',
    'subject' => 'string',
    'message' => 'string',
    'additional_headers=' => 'array<array-key, mixed>|string',
    'additional_params=' => 'string',
  ),
  'mailparse_determine_best_xfer_encoding' => 
  array (
    0 => 'string',
    'fp' => 'resource',
  ),
  'mailparse_msg_create' => 
  array (
    0 => 'resource',
  ),
  'mailparse_msg_extract_part' => 
  array (
    0 => 'void',
    'mimemail' => 'resource',
    'msgbody' => 'string',
    'callbackfunc=' => 'callable',
  ),
  'mailparse_msg_extract_part_file' => 
  array (
    0 => 'string',
    'mimemail' => 'resource',
    'filename' => 'mixed',
    'callbackfunc=' => 'callable',
  ),
  'mailparse_msg_extract_whole_part_file' => 
  array (
    0 => 'string',
    'mimemail' => 'resource',
    'filename' => 'string',
    'callbackfunc=' => 'callable',
  ),
  'mailparse_msg_free' => 
  array (
    0 => 'bool',
    'mimemail' => 'resource',
  ),
  'mailparse_msg_get_part' => 
  array (
    0 => 'resource',
    'mimemail' => 'resource',
    'mimesection' => 'string',
  ),
  'mailparse_msg_get_part_data' => 
  array (
    0 => 'array<array-key, mixed>',
    'mimemail' => 'resource',
  ),
  'mailparse_msg_get_structure' => 
  array (
    0 => 'array<array-key, mixed>',
    'mimemail' => 'resource',
  ),
  'mailparse_msg_parse' => 
  array (
    0 => 'bool',
    'mimemail' => 'resource',
    'data' => 'string',
  ),
  'mailparse_msg_parse_file' => 
  array (
    0 => 'false|resource',
    'filename' => 'string',
  ),
  'mailparse_rfc822_parse_addresses' => 
  array (
    0 => 'array<array-key, mixed>',
    'addresses' => 'string',
  ),
  'mailparse_stream_encode' => 
  array (
    0 => 'bool',
    'sourcefp' => 'resource',
    'destfp' => 'resource',
    'encoding' => 'string',
  ),
  'mailparse_uudecode_all' => 
  array (
    0 => 'array<array-key, mixed>',
    'fp' => 'resource',
  ),
  'mapobj::__construct' => 
  array (
    0 => 'void',
    'map_file_name' => 'string',
    'new_map_path' => 'string',
  ),
  'mapobj::appendoutputformat' => 
  array (
    0 => 'int',
    'outputFormat' => 'outputformatObj',
  ),
  'mapobj::applyconfigoptions' => 
  array (
    0 => 'int',
  ),
  'mapobj::applysld' => 
  array (
    0 => 'int',
    'sldxml' => 'string',
  ),
  'mapobj::applysldurl' => 
  array (
    0 => 'int',
    'sldurl' => 'string',
  ),
  'mapobj::converttostring' => 
  array (
    0 => 'string',
  ),
  'mapobj::draw' => 
  array (
    0 => 'imageObj|null',
  ),
  'mapobj::drawlabelcache' => 
  array (
    0 => 'int',
    'image' => 'imageObj',
  ),
  'mapobj::drawlegend' => 
  array (
    0 => 'imageObj',
  ),
  'mapobj::drawquery' => 
  array (
    0 => 'imageObj|null',
  ),
  'mapobj::drawreferencemap' => 
  array (
    0 => 'imageObj',
  ),
  'mapobj::drawscalebar' => 
  array (
    0 => 'imageObj',
  ),
  'mapobj::embedlegend' => 
  array (
    0 => 'int',
    'image' => 'imageObj',
  ),
  'mapobj::embedscalebar' => 
  array (
    0 => 'int',
    'image' => 'imageObj',
  ),
  'mapobj::free' => 
  array (
    0 => 'void',
  ),
  'mapobj::generatesld' => 
  array (
    0 => 'string',
  ),
  'mapobj::getallgroupnames' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mapobj::getalllayernames' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mapobj::getcolorbyindex' => 
  array (
    0 => 'colorObj',
    'iCloIndex' => 'int',
  ),
  'mapobj::getconfigoption' => 
  array (
    0 => 'string',
    'key' => 'string',
  ),
  'mapobj::getlabel' => 
  array (
    0 => 'labelcacheMemberObj',
    'index' => 'int',
  ),
  'mapobj::getlayer' => 
  array (
    0 => 'layerObj',
    'index' => 'int',
  ),
  'mapobj::getlayerbyname' => 
  array (
    0 => 'layerObj',
    'layer_name' => 'string',
  ),
  'mapobj::getlayersdrawingorder' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mapobj::getlayersindexbygroup' => 
  array (
    0 => 'array<array-key, mixed>',
    'groupname' => 'string',
  ),
  'mapobj::getmetadata' => 
  array (
    0 => 'int',
    'name' => 'string',
  ),
  'mapobj::getnumsymbols' => 
  array (
    0 => 'int',
  ),
  'mapobj::getoutputformat' => 
  array (
    0 => 'null|outputformatObj',
    'index' => 'int',
  ),
  'mapobj::getprojection' => 
  array (
    0 => 'string',
  ),
  'mapobj::getsymbolbyname' => 
  array (
    0 => 'int',
    'symbol_name' => 'string',
  ),
  'mapobj::getsymbolobjectbyid' => 
  array (
    0 => 'symbolObj',
    'symbolid' => 'int',
  ),
  'mapobj::loadmapcontext' => 
  array (
    0 => 'int',
    'filename' => 'string',
    'unique_layer_name' => 'bool',
  ),
  'mapobj::loadowsparameters' => 
  array (
    0 => 'int',
    'request' => 'OwsrequestObj',
    'version' => 'string',
  ),
  'mapobj::movelayerdown' => 
  array (
    0 => 'int',
    'layerindex' => 'int',
  ),
  'mapobj::movelayerup' => 
  array (
    0 => 'int',
    'layerindex' => 'int',
  ),
  'mapobj::ms_newmapobjfromstring' => 
  array (
    0 => 'mapObj',
    'map_file_string' => 'string',
    'new_map_path' => 'string',
  ),
  'mapobj::offsetextent' => 
  array (
    0 => 'int',
    'x' => 'float',
    'y' => 'float',
  ),
  'mapobj::owsdispatch' => 
  array (
    0 => 'int',
    'request' => 'OwsrequestObj',
  ),
  'mapobj::prepareimage' => 
  array (
    0 => 'imageObj',
  ),
  'mapobj::preparequery' => 
  array (
    0 => 'void',
  ),
  'mapobj::processlegendtemplate' => 
  array (
    0 => 'string',
    'params' => 'array<array-key, mixed>',
  ),
  'mapobj::processquerytemplate' => 
  array (
    0 => 'string',
    'params' => 'array<array-key, mixed>',
    'generateimages' => 'bool',
  ),
  'mapobj::processtemplate' => 
  array (
    0 => 'string',
    'params' => 'array<array-key, mixed>',
    'generateimages' => 'bool',
  ),
  'mapobj::querybyfeatures' => 
  array (
    0 => 'int',
    'slayer' => 'int',
  ),
  'mapobj::querybyindex' => 
  array (
    0 => 'int',
    'layerindex' => 'mixed',
    'tileindex' => 'mixed',
    'shapeindex' => 'mixed',
    'addtoquery' => 'mixed',
  ),
  'mapobj::querybypoint' => 
  array (
    0 => 'int',
    'point' => 'pointObj',
    'mode' => 'int',
    'buffer' => 'float',
  ),
  'mapobj::querybyrect' => 
  array (
    0 => 'int',
    'rect' => 'rectObj',
  ),
  'mapobj::querybyshape' => 
  array (
    0 => 'int',
    'shape' => 'shapeObj',
  ),
  'mapobj::removelayer' => 
  array (
    0 => 'layerObj',
    'nIndex' => 'int',
  ),
  'mapobj::removemetadata' => 
  array (
    0 => 'int',
    'name' => 'string',
  ),
  'mapobj::removeoutputformat' => 
  array (
    0 => 'int',
    'name' => 'string',
  ),
  'mapobj::save' => 
  array (
    0 => 'int',
    'filename' => 'string',
  ),
  'mapobj::savemapcontext' => 
  array (
    0 => 'int',
    'filename' => 'string',
  ),
  'mapobj::savequery' => 
  array (
    0 => 'int',
    'filename' => 'string',
    'results' => 'int',
  ),
  'mapobj::scaleextent' => 
  array (
    0 => 'int',
    'zoomfactor' => 'float',
    'minscaledenom' => 'float',
    'maxscaledenom' => 'float',
  ),
  'mapobj::selectoutputformat' => 
  array (
    0 => 'int',
    'type' => 'string',
  ),
  'mapobj::set' => 
  array (
    0 => 'int',
    'property_name' => 'string',
    'new_value' => 'mixed',
  ),
  'mapobj::setcenter' => 
  array (
    0 => 'int',
    'center' => 'pointObj',
  ),
  'mapobj::setconfigoption' => 
  array (
    0 => 'int',
    'key' => 'string',
    'value' => 'string',
  ),
  'mapobj::setextent' => 
  array (
    0 => 'void',
    'minx' => 'float',
    'miny' => 'float',
    'maxx' => 'float',
    'maxy' => 'float',
  ),
  'mapobj::setfontset' => 
  array (
    0 => 'int',
    'fileName' => 'string',
  ),
  'mapobj::setmetadata' => 
  array (
    0 => 'int',
    'name' => 'string',
    'value' => 'string',
  ),
  'mapobj::setprojection' => 
  array (
    0 => 'int',
    'proj_params' => 'string',
    'bSetUnitsAndExtents' => 'bool',
  ),
  'mapobj::setrotation' => 
  array (
    0 => 'int',
    'rotation_angle' => 'float',
  ),
  'mapobj::setsize' => 
  array (
    0 => 'int',
    'width' => 'int',
    'height' => 'int',
  ),
  'mapobj::setsymbolset' => 
  array (
    0 => 'int',
    'fileName' => 'string',
  ),
  'mapobj::setwktprojection' => 
  array (
    0 => 'int',
    'proj_params' => 'string',
    'bSetUnitsAndExtents' => 'bool',
  ),
  'mapobj::zoompoint' => 
  array (
    0 => 'int',
    'nZoomFactor' => 'int',
    'oPixelPos' => 'pointObj',
    'nImageWidth' => 'int',
    'nImageHeight' => 'int',
    'oGeorefExt' => 'rectObj',
  ),
  'mapobj::zoomrectangle' => 
  array (
    0 => 'int',
    'oPixelExt' => 'rectObj',
    'nImageWidth' => 'int',
    'nImageHeight' => 'int',
    'oGeorefExt' => 'rectObj',
  ),
  'mapobj::zoomscale' => 
  array (
    0 => 'int',
    'nScaleDenom' => 'float',
    'oPixelPos' => 'pointObj',
    'nImageWidth' => 'int',
    'nImageHeight' => 'int',
    'oGeorefExt' => 'rectObj',
    'oMaxGeorefExt' => 'rectObj',
  ),
  'max' => 
  array (
    0 => 'mixed',
    'value' => 'non-empty-array<array-key, mixed>',
  ),
  'max\'1' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
    'values' => 'mixed',
    '...args=' => 'mixed',
  ),
  'mb_check_encoding' => 
  array (
    0 => 'bool',
    'value=' => 'array<array-key, mixed>|null|string',
    'encoding=' => 'null|string',
  ),
  'mb_chr' => 
  array (
    0 => 'false|non-empty-string',
    'codepoint' => 'int',
    'encoding=' => 'null|string',
  ),
  'mb_convert_case' => 
  array (
    0 => 'string',
    'string' => 'string',
    'mode' => 'int',
    'encoding=' => 'null|string',
  ),
  'mb_convert_encoding' => 
  array (
    0 => 'false|string',
    'string' => 'string',
    'to_encoding' => 'string',
    'from_encoding=' => 'array<array-key, mixed>|null|string',
  ),
  'mb_convert_encoding\'1' => 
  array (
    0 => 'array<array-key, mixed>',
    'string' => 'array<array-key, mixed>',
    'to_encoding' => 'string',
    'from_encoding=' => 'array<array-key, mixed>|null|string',
  ),
  'mb_convert_kana' => 
  array (
    0 => 'string',
    'string' => 'string',
    'mode=' => 'string',
    'encoding=' => 'null|string',
  ),
  'mb_decode_mimeheader' => 
  array (
    0 => 'string',
    'string' => 'string',
  ),
  'mb_decode_numericentity' => 
  array (
    0 => 'string',
    'string' => 'string',
    'map' => 'array<array-key, mixed>',
    'encoding=' => 'null|string',
  ),
  'mb_detect_encoding' => 
  array (
    0 => 'false|string',
    'string' => 'string',
    'encodings=' => 'array<array-key, mixed>|null|string',
    'strict=' => 'bool',
  ),
  'mb_detect_order' => 
  array (
    0 => 'bool|list<string>',
    'encoding=' => 'array<array-key, mixed>|null|string',
  ),
  'mb_encode_mimeheader' => 
  array (
    0 => 'string',
    'string' => 'string',
    'charset=' => 'null|string',
    'transfer_encoding=' => 'null|string',
    'newline=' => 'string',
    'indent=' => 'int',
  ),
  'mb_encode_numericentity' => 
  array (
    0 => 'string',
    'string' => 'string',
    'map' => 'array<array-key, mixed>',
    'encoding=' => 'null|string',
    'hex=' => 'bool',
  ),
  'mb_encoding_aliases' => 
  array (
    0 => 'list<string>',
    'encoding' => 'string',
  ),
  'mb_ereg' => 
  array (
    0 => 'bool',
    'pattern' => 'string',
    'string' => 'string',
    '&w_matches=' => 'array<array-key, mixed>|null',
  ),
  'mb_ereg_match' => 
  array (
    0 => 'bool',
    'pattern' => 'string',
    'string' => 'string',
    'options=' => 'null|string',
  ),
  'mb_ereg_replace' => 
  array (
    0 => 'false|null|string',
    'pattern' => 'string',
    'replacement' => 'string',
    'string' => 'string',
    'options=' => 'null|string',
  ),
  'mb_ereg_replace_callback' => 
  array (
    0 => 'false|null|string',
    'pattern' => 'string',
    'callback' => 'callable',
    'string' => 'string',
    'options=' => 'null|string',
  ),
  'mb_ereg_search' => 
  array (
    0 => 'bool',
    'pattern=' => 'null|string',
    'options=' => 'null|string',
  ),
  'mb_ereg_search_getpos' => 
  array (
    0 => 'int',
  ),
  'mb_ereg_search_getregs' => 
  array (
    0 => 'array<array-key, string>|false',
  ),
  'mb_ereg_search_init' => 
  array (
    0 => 'bool',
    'string' => 'string',
    'pattern=' => 'null|string',
    'options=' => 'null|string',
  ),
  'mb_ereg_search_pos' => 
  array (
    0 => 'array<array-key, int>|false',
    'pattern=' => 'null|string',
    'options=' => 'null|string',
  ),
  'mb_ereg_search_regs' => 
  array (
    0 => 'array<array-key, string>|false',
    'pattern=' => 'null|string',
    'options=' => 'null|string',
  ),
  'mb_ereg_search_setpos' => 
  array (
    0 => 'bool',
    'offset' => 'int',
  ),
  'mb_eregi' => 
  array (
    0 => 'bool',
    'pattern' => 'string',
    'string' => 'string',
    '&w_matches=' => 'array<array-key, mixed>|null',
  ),
  'mb_eregi_replace' => 
  array (
    0 => 'false|null|string',
    'pattern' => 'string',
    'replacement' => 'string',
    'string' => 'string',
    'options=' => 'null|string',
  ),
  'mb_get_info' => 
  array (
    0 => 'array<array-key, mixed>|false|int|null|string',
    'type=' => 'string',
  ),
  'mb_http_input' => 
  array (
    0 => 'array<array-key, mixed>|false|string',
    'type=' => 'null|string',
  ),
  'mb_http_output' => 
  array (
    0 => 'bool|string',
    'encoding=' => 'null|string',
  ),
  'mb_internal_encoding' => 
  array (
    0 => 'bool|string',
    'encoding=' => 'null|string',
  ),
  'mb_language' => 
  array (
    0 => 'bool|string',
    'language=' => 'null|string',
  ),
  'mb_list_encodings' => 
  array (
    0 => 'list<string>',
  ),
  'mb_ord' => 
  array (
    0 => 'false|int',
    'string' => 'string',
    'encoding=' => 'null|string',
  ),
  'mb_output_handler' => 
  array (
    0 => 'string',
    'string' => 'string',
    'status' => 'int',
  ),
  'mb_parse_str' => 
  array (
    0 => 'bool',
    'string' => 'string',
    '&w_result' => 'array<array-key, mixed>',
  ),
  'mb_preferred_mime_name' => 
  array (
    0 => 'false|string',
    'encoding' => 'string',
  ),
  'mb_regex_encoding' => 
  array (
    0 => 'bool|string',
    'encoding=' => 'null|string',
  ),
  'mb_regex_set_options' => 
  array (
    0 => 'string',
    'options=' => 'null|string',
  ),
  'mb_scrub' => 
  array (
    0 => 'string',
    'string' => 'string',
    'encoding=' => 'null|string',
  ),
  'mb_send_mail' => 
  array (
    0 => 'bool',
    'to' => 'string',
    'subject' => 'string',
    'message' => 'string',
    'additional_headers=' => 'array<array-key, mixed>|string',
    'additional_params=' => 'null|string',
  ),
  'mb_split' => 
  array (
    0 => 'false|list<string>',
    'pattern' => 'string',
    'string' => 'string',
    'limit=' => 'int',
  ),
  'mb_str_split' => 
  array (
    0 => 'list<string>',
    'string' => 'string',
    'length=' => 'int<1, max>',
    'encoding=' => 'null|string',
  ),
  'mb_strcut' => 
  array (
    0 => 'string',
    'string' => 'string',
    'start' => 'int',
    'length=' => 'int|null',
    'encoding=' => 'null|string',
  ),
  'mb_strimwidth' => 
  array (
    0 => 'string',
    'string' => 'string',
    'start' => 'int',
    'width' => 'int',
    'trim_marker=' => 'string',
    'encoding=' => 'null|string',
  ),
  'mb_stripos' => 
  array (
    0 => 'false|int',
    'haystack' => 'string',
    'needle' => 'string',
    'offset=' => 'int',
    'encoding=' => 'null|string',
  ),
  'mb_stristr' => 
  array (
    0 => 'false|string',
    'haystack' => 'string',
    'needle' => 'string',
    'before_needle=' => 'bool',
    'encoding=' => 'null|string',
  ),
  'mb_strlen' => 
  array (
    0 => 'int<0, max>',
    'string' => 'string',
    'encoding=' => 'null|string',
  ),
  'mb_strpos' => 
  array (
    0 => 'false|int',
    'haystack' => 'string',
    'needle' => 'string',
    'offset=' => 'int',
    'encoding=' => 'null|string',
  ),
  'mb_strrchr' => 
  array (
    0 => 'false|string',
    'haystack' => 'string',
    'needle' => 'string',
    'before_needle=' => 'bool',
    'encoding=' => 'null|string',
  ),
  'mb_strrichr' => 
  array (
    0 => 'false|string',
    'haystack' => 'string',
    'needle' => 'string',
    'before_needle=' => 'bool',
    'encoding=' => 'null|string',
  ),
  'mb_strripos' => 
  array (
    0 => 'false|int',
    'haystack' => 'string',
    'needle' => 'string',
    'offset=' => 'int',
    'encoding=' => 'null|string',
  ),
  'mb_strrpos' => 
  array (
    0 => 'false|int',
    'haystack' => 'string',
    'needle' => 'string',
    'offset=' => 'int',
    'encoding=' => 'null|string',
  ),
  'mb_strstr' => 
  array (
    0 => 'false|string',
    'haystack' => 'string',
    'needle' => 'string',
    'before_needle=' => 'bool',
    'encoding=' => 'null|string',
  ),
  'mb_strtolower' => 
  array (
    0 => 'lowercase-string',
    'string' => 'string',
    'encoding=' => 'null|string',
  ),
  'mb_strtoupper' => 
  array (
    0 => 'string',
    'string' => 'string',
    'encoding=' => 'null|string',
  ),
  'mb_strwidth' => 
  array (
    0 => 'int',
    'string' => 'string',
    'encoding=' => 'null|string',
  ),
  'mb_substitute_character' => 
  array (
    0 => 'bool|int|string',
    'substitute_character=' => 'int|null|string',
  ),
  'mb_substr' => 
  array (
    0 => 'string',
    'string' => 'string',
    'start' => 'int',
    'length=' => 'int|null',
    'encoding=' => 'null|string',
  ),
  'mb_substr_count' => 
  array (
    0 => 'int',
    'haystack' => 'string',
    'needle' => 'string',
    'encoding=' => 'null|string',
  ),
  'mcrypt_cbc' => 
  array (
    0 => 'string',
    'cipher' => 'int|string',
    'key' => 'string',
    'data' => 'string',
    'mode' => 'int',
    'iv=' => 'string',
  ),
  'mcrypt_cfb' => 
  array (
    0 => 'string',
    'cipher' => 'int|string',
    'key' => 'string',
    'data' => 'string',
    'mode' => 'int',
    'iv=' => 'string',
  ),
  'mcrypt_create_iv' => 
  array (
    0 => 'false|string',
    'size' => 'int',
    'source=' => 'int',
  ),
  'mcrypt_decrypt' => 
  array (
    0 => 'string',
    'cipher' => 'string',
    'key' => 'string',
    'data' => 'string',
    'mode' => 'string',
    'iv=' => 'string',
  ),
  'mcrypt_ecb' => 
  array (
    0 => 'string',
    'cipher' => 'int|string',
    'key' => 'string',
    'data' => 'string',
    'mode' => 'int',
    'iv=' => 'string',
  ),
  'mcrypt_enc_get_algorithms_name' => 
  array (
    0 => 'string',
    'td' => 'resource',
  ),
  'mcrypt_enc_get_block_size' => 
  array (
    0 => 'int',
    'td' => 'resource',
  ),
  'mcrypt_enc_get_iv_size' => 
  array (
    0 => 'int',
    'td' => 'resource',
  ),
  'mcrypt_enc_get_key_size' => 
  array (
    0 => 'int',
    'td' => 'resource',
  ),
  'mcrypt_enc_get_modes_name' => 
  array (
    0 => 'string',
    'td' => 'resource',
  ),
  'mcrypt_enc_get_supported_key_sizes' => 
  array (
    0 => 'array<array-key, mixed>',
    'td' => 'resource',
  ),
  'mcrypt_enc_is_block_algorithm' => 
  array (
    0 => 'bool',
    'td' => 'resource',
  ),
  'mcrypt_enc_is_block_algorithm_mode' => 
  array (
    0 => 'bool',
    'td' => 'resource',
  ),
  'mcrypt_enc_is_block_mode' => 
  array (
    0 => 'bool',
    'td' => 'resource',
  ),
  'mcrypt_enc_self_test' => 
  array (
    0 => 'false|int',
    'td' => 'resource',
  ),
  'mcrypt_encrypt' => 
  array (
    0 => 'string',
    'cipher' => 'string',
    'key' => 'string',
    'data' => 'string',
    'mode' => 'string',
    'iv=' => 'string',
  ),
  'mcrypt_generic' => 
  array (
    0 => 'string',
    'td' => 'resource',
    'data' => 'string',
  ),
  'mcrypt_generic_deinit' => 
  array (
    0 => 'bool',
    'td' => 'resource',
  ),
  'mcrypt_generic_end' => 
  array (
    0 => 'bool',
    'td' => 'resource',
  ),
  'mcrypt_generic_init' => 
  array (
    0 => 'false|int',
    'td' => 'resource',
    'key' => 'string',
    'iv' => 'string',
  ),
  'mcrypt_get_block_size' => 
  array (
    0 => 'int',
    'cipher' => 'int|string',
    'module' => 'string',
  ),
  'mcrypt_get_cipher_name' => 
  array (
    0 => 'false|string',
    'cipher' => 'int|string',
  ),
  'mcrypt_get_iv_size' => 
  array (
    0 => 'false|int',
    'cipher' => 'int|string',
    'module' => 'string',
  ),
  'mcrypt_get_key_size' => 
  array (
    0 => 'int',
    'cipher' => 'int|string',
    'module' => 'string',
  ),
  'mcrypt_list_algorithms' => 
  array (
    0 => 'array<array-key, mixed>',
    'lib_dir=' => 'string',
  ),
  'mcrypt_list_modes' => 
  array (
    0 => 'array<array-key, mixed>',
    'lib_dir=' => 'string',
  ),
  'mcrypt_module_close' => 
  array (
    0 => 'bool',
    'td' => 'resource',
  ),
  'mcrypt_module_get_algo_block_size' => 
  array (
    0 => 'int',
    'algorithm' => 'string',
    'lib_dir=' => 'string',
  ),
  'mcrypt_module_get_algo_key_size' => 
  array (
    0 => 'int',
    'algorithm' => 'string',
    'lib_dir=' => 'string',
  ),
  'mcrypt_module_get_supported_key_sizes' => 
  array (
    0 => 'array<array-key, mixed>',
    'algorithm' => 'string',
    'lib_dir=' => 'string',
  ),
  'mcrypt_module_is_block_algorithm' => 
  array (
    0 => 'bool',
    'algorithm' => 'string',
    'lib_dir=' => 'string',
  ),
  'mcrypt_module_is_block_algorithm_mode' => 
  array (
    0 => 'bool',
    'mode' => 'string',
    'lib_dir=' => 'string',
  ),
  'mcrypt_module_is_block_mode' => 
  array (
    0 => 'bool',
    'mode' => 'string',
    'lib_dir=' => 'string',
  ),
  'mcrypt_module_open' => 
  array (
    0 => 'false|resource',
    'cipher' => 'string',
    'cipher_directory' => 'string',
    'mode' => 'string',
    'mode_directory' => 'string',
  ),
  'mcrypt_module_self_test' => 
  array (
    0 => 'bool',
    'algorithm' => 'string',
    'lib_dir=' => 'string',
  ),
  'mcrypt_ofb' => 
  array (
    0 => 'string',
    'cipher' => 'int|string',
    'key' => 'string',
    'data' => 'string',
    'mode' => 'int',
    'iv=' => 'string',
  ),
  'md5' => 
  array (
    0 => 'non-falsy-string',
    'string' => 'string',
    'binary=' => 'bool',
  ),
  'md5_file' => 
  array (
    0 => 'false|non-falsy-string',
    'filename' => 'string',
    'binary=' => 'bool',
  ),
  'mdecrypt_generic' => 
  array (
    0 => 'string',
    'td' => 'resource',
    'data' => 'string',
  ),
  'memcache::add' => 
  array (
    0 => 'bool',
    'key' => 'string',
    'var' => 'mixed',
    'flag=' => 'int',
    'expire=' => 'int',
  ),
  'memcache::addserver' => 
  array (
    0 => 'bool',
    'host' => 'string',
    'port=' => 'int',
    'persistent=' => 'bool',
    'weight=' => 'int',
    'timeout=' => 'int',
    'retry_interval=' => 'int',
    'status=' => 'bool',
    'failure_callback=' => 'callable',
    'timeoutms=' => 'int',
  ),
  'memcache::append' => 
  array (
    0 => 'mixed',
  ),
  'memcache::cas' => 
  array (
    0 => 'mixed',
  ),
  'memcache::close' => 
  array (
    0 => 'bool',
  ),
  'memcache::connect' => 
  array (
    0 => 'bool',
    'host' => 'string',
    'port=' => 'int',
    'timeout=' => 'int',
  ),
  'memcache::decrement' => 
  array (
    0 => 'int',
    'key' => 'string',
    'value=' => 'int',
  ),
  'memcache::delete' => 
  array (
    0 => 'bool',
    'key' => 'string',
    'timeout=' => 'int',
  ),
  'memcache::findserver' => 
  array (
    0 => 'mixed',
  ),
  'memcache::flush' => 
  array (
    0 => 'bool',
  ),
  'memcache::get' => 
  array (
    0 => 'array<array-key, mixed>|false|string',
    'key' => 'string',
    'flags=' => 'array<array-key, mixed>',
    'keys=' => 'array<array-key, mixed>',
  ),
  'memcache::get\'1' => 
  array (
    0 => 'array<array-key, mixed>',
    'key' => 'array<array-key, string>',
    'flags=' => 'array<array-key, int>',
  ),
  'memcache::getextendedstats' => 
  array (
    0 => 'array<string, array<string, int|string>|false>|false',
    'type=' => 'string',
    'slabid=' => 'int',
    'limit=' => 'int',
  ),
  'memcache::getserverstatus' => 
  array (
    0 => 'int',
    'host' => 'string',
    'port=' => 'int',
  ),
  'memcache::getstats' => 
  array (
    0 => 'array<array-key, mixed>',
    'type=' => 'string',
    'slabid=' => 'int',
    'limit=' => 'int',
  ),
  'memcache::getversion' => 
  array (
    0 => 'string',
  ),
  'memcache::increment' => 
  array (
    0 => 'int',
    'key' => 'string',
    'value=' => 'int',
  ),
  'memcache::pconnect' => 
  array (
    0 => 'bool',
    'host' => 'string',
    'port=' => 'int',
    'timeout=' => 'int',
  ),
  'memcache::prepend' => 
  array (
    0 => 'string',
  ),
  'memcache::replace' => 
  array (
    0 => 'bool',
    'key' => 'string',
    'var' => 'mixed',
    'flag=' => 'int',
    'expire=' => 'int',
  ),
  'memcache::set' => 
  array (
    0 => 'bool',
    'key' => 'string',
    'var' => 'mixed',
    'flag=' => 'int',
    'expire=' => 'int',
  ),
  'memcache::setcompressthreshold' => 
  array (
    0 => 'bool',
    'threshold' => 'int',
    'min_savings=' => 'float',
  ),
  'memcache::setfailurecallback' => 
  array (
    0 => 'mixed',
  ),
  'memcache::setserverparams' => 
  array (
    0 => 'bool',
    'host' => 'string',
    'port=' => 'int',
    'timeout=' => 'int',
    'retry_interval=' => 'int',
    'status=' => 'bool',
    'failure_callback=' => 'callable',
  ),
  'memcache_add' => 
  array (
    0 => 'bool',
    'memcache_obj' => 'Memcache',
    'key' => 'string',
    'var' => 'mixed',
    'flag=' => 'int',
    'expire=' => 'int',
  ),
  'memcache_add_server' => 
  array (
    0 => 'bool',
    'memcache_obj' => 'Memcache',
    'host' => 'string',
    'port=' => 'int',
    'persistent=' => 'bool',
    'weight=' => 'int',
    'timeout=' => 'int',
    'retry_interval=' => 'int',
    'status=' => 'bool',
    'failure_callback=' => 'callable',
    'timeoutms=' => 'int',
  ),
  'memcache_append' => 
  array (
    0 => 'mixed',
    'memcache_obj' => 'Memcache',
  ),
  'memcache_cas' => 
  array (
    0 => 'mixed',
    'memcache_obj' => 'Memcache',
  ),
  'memcache_close' => 
  array (
    0 => 'bool',
    'memcache_obj' => 'Memcache',
  ),
  'memcache_connect' => 
  array (
    0 => 'Memcache|false',
    'host' => 'string',
    'port=' => 'int',
    'timeout=' => 'int',
  ),
  'memcache_debug' => 
  array (
    0 => 'bool',
    'on_off' => 'bool',
  ),
  'memcache_decrement' => 
  array (
    0 => 'int',
    'memcache_obj' => 'Memcache',
    'key' => 'string',
    'value=' => 'int',
  ),
  'memcache_delete' => 
  array (
    0 => 'bool',
    'memcache_obj' => 'Memcache',
    'key' => 'string',
    'timeout=' => 'int',
  ),
  'memcache_flush' => 
  array (
    0 => 'bool',
    'memcache_obj' => 'Memcache',
  ),
  'memcache_get' => 
  array (
    0 => 'string',
    'memcache_obj' => 'Memcache',
    'key' => 'string',
    'flags=' => 'int',
  ),
  'memcache_get\'1' => 
  array (
    0 => 'array<array-key, mixed>',
    'memcache_obj' => 'Memcache',
    'key' => 'array<array-key, string>',
    'flags=' => 'array<array-key, int>',
  ),
  'memcache_get_extended_stats' => 
  array (
    0 => 'array<array-key, mixed>',
    'memcache_obj' => 'Memcache',
    'type=' => 'string',
    'slabid=' => 'int',
    'limit=' => 'int',
  ),
  'memcache_get_server_status' => 
  array (
    0 => 'int',
    'memcache_obj' => 'Memcache',
    'host' => 'string',
    'port=' => 'int',
  ),
  'memcache_get_stats' => 
  array (
    0 => 'array<array-key, mixed>',
    'memcache_obj' => 'Memcache',
    'type=' => 'string',
    'slabid=' => 'int',
    'limit=' => 'int',
  ),
  'memcache_get_version' => 
  array (
    0 => 'string',
    'memcache_obj' => 'Memcache',
  ),
  'memcache_increment' => 
  array (
    0 => 'int',
    'memcache_obj' => 'Memcache',
    'key' => 'string',
    'value=' => 'int',
  ),
  'memcache_pconnect' => 
  array (
    0 => 'Memcache|false',
    'host' => 'string',
    'port=' => 'int',
    'timeout=' => 'int',
  ),
  'memcache_prepend' => 
  array (
    0 => 'string',
    'memcache_obj' => 'Memcache',
  ),
  'memcache_replace' => 
  array (
    0 => 'bool',
    'memcache_obj' => 'Memcache',
    'key' => 'string',
    'var' => 'mixed',
    'flag=' => 'int',
    'expire=' => 'int',
  ),
  'memcache_set' => 
  array (
    0 => 'bool',
    'memcache_obj' => 'Memcache',
    'key' => 'string',
    'var' => 'mixed',
    'flag=' => 'int',
    'expire=' => 'int',
  ),
  'memcache_set_compress_threshold' => 
  array (
    0 => 'bool',
    'memcache_obj' => 'Memcache',
    'threshold' => 'int',
    'min_savings=' => 'float',
  ),
  'memcache_set_failure_callback' => 
  array (
    0 => 'mixed',
    'memcache_obj' => 'Memcache',
  ),
  'memcache_set_server_params' => 
  array (
    0 => 'bool',
    'memcache_obj' => 'Memcache',
    'host' => 'string',
    'port=' => 'int',
    'timeout=' => 'int',
    'retry_interval=' => 'int',
    'status=' => 'bool',
    'failure_callback=' => 'callable',
  ),
  'memcached::__construct' => 
  array (
    0 => 'void',
    'persistent_id=' => 'null|string',
    'callback=' => 'callable|null',
    'connection_str=' => 'null|string',
  ),
  'memcached::add' => 
  array (
    0 => 'bool',
    'key' => 'string',
    'value' => 'mixed',
    'expiration=' => 'int',
  ),
  'memcached::addbykey' => 
  array (
    0 => 'bool',
    'server_key' => 'string',
    'key' => 'string',
    'value' => 'mixed',
    'expiration=' => 'int',
  ),
  'memcached::addserver' => 
  array (
    0 => 'bool',
    'host' => 'string',
    'port' => 'int',
    'weight=' => 'int',
  ),
  'memcached::addservers' => 
  array (
    0 => 'bool',
    'servers' => 'array<array-key, mixed>',
  ),
  'memcached::append' => 
  array (
    0 => 'bool|null',
    'key' => 'string',
    'value' => 'string',
  ),
  'memcached::appendbykey' => 
  array (
    0 => 'bool|null',
    'server_key' => 'string',
    'key' => 'string',
    'value' => 'string',
  ),
  'memcached::cas' => 
  array (
    0 => 'bool',
    'cas_token' => 'float|int|string',
    'key' => 'string',
    'value' => 'mixed',
    'expiration=' => 'int',
  ),
  'memcached::casbykey' => 
  array (
    0 => 'bool',
    'cas_token' => 'float|int|string',
    'server_key' => 'string',
    'key' => 'string',
    'value' => 'mixed',
    'expiration=' => 'int',
  ),
  'memcached::decrement' => 
  array (
    0 => 'false|int',
    'key' => 'string',
    'offset=' => 'int',
    'initial_value=' => 'int',
    'expiry=' => 'int',
  ),
  'memcached::decrementbykey' => 
  array (
    0 => 'false|int',
    'server_key' => 'string',
    'key' => 'string',
    'offset=' => 'int',
    'initial_value=' => 'int',
    'expiry=' => 'int',
  ),
  'memcached::delete' => 
  array (
    0 => 'bool',
    'key' => 'string',
    'time=' => 'int',
  ),
  'memcached::deletebykey' => 
  array (
    0 => 'bool',
    'server_key' => 'string',
    'key' => 'string',
    'time=' => 'int',
  ),
  'memcached::deletemulti' => 
  array (
    0 => 'array<array-key, mixed>',
    'keys' => 'array<array-key, mixed>',
    'time=' => 'int',
  ),
  'memcached::deletemultibykey' => 
  array (
    0 => 'array<array-key, mixed>',
    'server_key' => 'string',
    'keys' => 'array<array-key, mixed>',
    'time=' => 'int',
  ),
  'memcached::fetch' => 
  array (
    0 => 'array<array-key, mixed>|false',
  ),
  'memcached::fetchall' => 
  array (
    0 => 'array<array-key, mixed>|false',
  ),
  'memcached::flush' => 
  array (
    0 => 'bool',
    'delay=' => 'int',
  ),
  'memcached::flushbuffers' => 
  array (
    0 => 'bool',
  ),
  'memcached::get' => 
  array (
    0 => 'false|mixed',
    'key' => 'string',
    'cache_cb=' => 'callable|null',
    'get_flags=' => 'int',
  ),
  'memcached::getallkeys' => 
  array (
    0 => 'array<array-key, mixed>|false',
  ),
  'memcached::getbykey' => 
  array (
    0 => 'false|mixed',
    'server_key' => 'string',
    'key' => 'string',
    'cache_cb=' => 'callable|null',
    'get_flags=' => 'int',
  ),
  'memcached::getdelayed' => 
  array (
    0 => 'bool',
    'keys' => 'array<array-key, mixed>',
    'with_cas=' => 'bool',
    'value_cb=' => 'callable|null',
  ),
  'memcached::getdelayedbykey' => 
  array (
    0 => 'bool',
    'server_key' => 'string',
    'keys' => 'array<array-key, mixed>',
    'with_cas=' => 'bool',
    'value_cb=' => 'callable|null',
  ),
  'memcached::getlastdisconnectedserver' => 
  array (
    0 => 'array<array-key, mixed>|false',
  ),
  'memcached::getlasterrorcode' => 
  array (
    0 => 'int',
  ),
  'memcached::getlasterrorerrno' => 
  array (
    0 => 'int',
  ),
  'memcached::getlasterrormessage' => 
  array (
    0 => 'string',
  ),
  'memcached::getmulti' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'keys' => 'array<array-key, mixed>',
    'get_flags=' => 'int',
  ),
  'memcached::getmultibykey' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'server_key' => 'string',
    'keys' => 'array<array-key, mixed>',
    'get_flags=' => 'int',
  ),
  'memcached::getoption' => 
  array (
    0 => 'false|mixed',
    'option' => 'int',
  ),
  'memcached::getresultcode' => 
  array (
    0 => 'int',
  ),
  'memcached::getresultmessage' => 
  array (
    0 => 'string',
  ),
  'memcached::getserverbykey' => 
  array (
    0 => 'array<array-key, mixed>',
    'server_key' => 'string',
  ),
  'memcached::getserverlist' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'memcached::getstats' => 
  array (
    0 => 'array<string, array<string, int|string>|false>|false',
    'type=' => 'null|string',
  ),
  'memcached::getversion' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'memcached::increment' => 
  array (
    0 => 'false|int',
    'key' => 'string',
    'offset=' => 'int',
    'initial_value=' => 'int',
    'expiry=' => 'int',
  ),
  'memcached::incrementbykey' => 
  array (
    0 => 'false|int',
    'server_key' => 'string',
    'key' => 'string',
    'offset=' => 'int',
    'initial_value=' => 'int',
    'expiry=' => 'int',
  ),
  'memcached::ispersistent' => 
  array (
    0 => 'bool',
  ),
  'memcached::ispristine' => 
  array (
    0 => 'bool',
  ),
  'memcached::prepend' => 
  array (
    0 => 'bool|null',
    'key' => 'string',
    'value' => 'string',
  ),
  'memcached::prependbykey' => 
  array (
    0 => 'bool|null',
    'server_key' => 'string',
    'key' => 'string',
    'value' => 'string',
  ),
  'memcached::quit' => 
  array (
    0 => 'bool',
  ),
  'memcached::replace' => 
  array (
    0 => 'bool',
    'key' => 'string',
    'value' => 'mixed',
    'expiration=' => 'int',
  ),
  'memcached::replacebykey' => 
  array (
    0 => 'bool',
    'server_key' => 'string',
    'key' => 'string',
    'value' => 'mixed',
    'expiration=' => 'int',
  ),
  'memcached::resetserverlist' => 
  array (
    0 => 'bool',
  ),
  'memcached::set' => 
  array (
    0 => 'bool',
    'key' => 'string',
    'value' => 'mixed',
    'expiration=' => 'int',
  ),
  'memcached::setbucket' => 
  array (
    0 => 'bool',
    'host_map' => 'array<array-key, mixed>',
    'forward_map' => 'array<array-key, mixed>|null',
    'replicas' => 'int',
  ),
  'memcached::setbykey' => 
  array (
    0 => 'bool',
    'server_key' => 'string',
    'key' => 'string',
    'value' => 'mixed',
    'expiration=' => 'int',
  ),
  'memcached::setencodingkey' => 
  array (
    0 => 'bool',
    'key' => 'string',
  ),
  'memcached::setmulti' => 
  array (
    0 => 'bool',
    'items' => 'array<array-key, mixed>',
    'expiration=' => 'int',
  ),
  'memcached::setmultibykey' => 
  array (
    0 => 'bool',
    'server_key' => 'string',
    'items' => 'array<array-key, mixed>',
    'expiration=' => 'int',
  ),
  'memcached::setoption' => 
  array (
    0 => 'bool',
    'option' => 'int',
    'value' => 'mixed',
  ),
  'memcached::setoptions' => 
  array (
    0 => 'bool',
    'options' => 'array<array-key, mixed>',
  ),
  'memcached::setsaslauthdata' => 
  array (
    0 => 'bool',
    'username' => 'string',
    'password' => 'string',
  ),
  'memcached::touch' => 
  array (
    0 => 'bool',
    'key' => 'string',
    'expiration=' => 'int',
  ),
  'memcached::touchbykey' => 
  array (
    0 => 'bool',
    'server_key' => 'string',
    'key' => 'string',
    'expiration=' => 'int',
  ),
  'memcachepool::add' => 
  array (
    0 => 'bool',
    'key' => 'string',
    'var' => 'mixed',
    'flag=' => 'int',
    'expire=' => 'int',
  ),
  'memcachepool::addserver' => 
  array (
    0 => 'bool',
    'host' => 'string',
    'port=' => 'int',
    'persistent=' => 'bool',
    'weight=' => 'int',
    'timeout=' => 'int',
    'retry_interval=' => 'int',
    'status=' => 'bool',
    'failure_callback=' => 'callable|null',
    'timeoutms=' => 'int',
  ),
  'memcachepool::append' => 
  array (
    0 => 'mixed',
  ),
  'memcachepool::cas' => 
  array (
    0 => 'mixed',
  ),
  'memcachepool::close' => 
  array (
    0 => 'bool',
  ),
  'memcachepool::connect' => 
  array (
    0 => 'bool',
    'host' => 'string',
    'port' => 'int',
    'timeout=' => 'int',
  ),
  'memcachepool::decrement' => 
  array (
    0 => 'false|int',
    'key' => 'mixed',
    'value=' => 'int|mixed',
  ),
  'memcachepool::delete' => 
  array (
    0 => 'bool',
    'key' => 'mixed',
    'timeout=' => 'int|mixed',
  ),
  'memcachepool::findserver' => 
  array (
    0 => 'mixed',
  ),
  'memcachepool::flush' => 
  array (
    0 => 'bool',
  ),
  'memcachepool::get' => 
  array (
    0 => 'array<array-key, mixed>|false|string',
    'key' => 'array<array-key, mixed>|string',
    '&flags=' => 'array<array-key, mixed>|int',
  ),
  'memcachepool::getextendedstats' => 
  array (
    0 => 'array<string, array<string, int|string>|false>|false',
    'type=' => 'string',
    'slabid=' => 'int',
    'limit=' => 'int',
  ),
  'memcachepool::getserverstatus' => 
  array (
    0 => 'int',
    'host' => 'string',
    'port=' => 'int',
  ),
  'memcachepool::getstats' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'type=' => 'string',
    'slabid=' => 'int',
    'limit=' => 'int',
  ),
  'memcachepool::getversion' => 
  array (
    0 => 'false|string',
  ),
  'memcachepool::increment' => 
  array (
    0 => 'false|int',
    'key' => 'mixed',
    'value=' => 'int|mixed',
  ),
  'memcachepool::prepend' => 
  array (
    0 => 'string',
  ),
  'memcachepool::replace' => 
  array (
    0 => 'bool',
    'key' => 'string',
    'var' => 'mixed',
    'flag=' => 'int',
    'expire=' => 'int',
  ),
  'memcachepool::set' => 
  array (
    0 => 'bool',
    'key' => 'string',
    'var' => 'mixed',
    'flag=' => 'int',
    'expire=' => 'int',
  ),
  'memcachepool::setcompressthreshold' => 
  array (
    0 => 'bool',
    'thresold' => 'int',
    'min_saving=' => 'float',
  ),
  'memcachepool::setfailurecallback' => 
  array (
    0 => 'mixed',
  ),
  'memcachepool::setserverparams' => 
  array (
    0 => 'bool',
    'host' => 'string',
    'port=' => 'int',
    'timeout=' => 'int',
    'retry_interval=' => 'int',
    'status=' => 'bool',
    'failure_callback=' => 'callable|null',
  ),
  'memory_get_peak_usage' => 
  array (
    0 => 'int',
    'real_usage=' => 'bool',
  ),
  'memory_get_usage' => 
  array (
    0 => 'int',
    'real_usage=' => 'bool',
  ),
  'messageformatter::__construct' => 
  array (
    0 => 'void',
    'locale' => 'string',
    'pattern' => 'string',
  ),
  'messageformatter::create' => 
  array (
    0 => 'MessageFormatter|null',
    'locale' => 'string',
    'pattern' => 'string',
  ),
  'messageformatter::format' => 
  array (
    0 => 'false|string',
    'values' => 'array<array-key, mixed>',
  ),
  'messageformatter::formatmessage' => 
  array (
    0 => 'false|string',
    'locale' => 'string',
    'pattern' => 'string',
    'values' => 'array<array-key, mixed>',
  ),
  'messageformatter::geterrorcode' => 
  array (
    0 => 'int',
  ),
  'messageformatter::geterrormessage' => 
  array (
    0 => 'string',
  ),
  'messageformatter::getlocale' => 
  array (
    0 => 'string',
  ),
  'messageformatter::getpattern' => 
  array (
    0 => 'string',
  ),
  'messageformatter::parse' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'string' => 'string',
  ),
  'messageformatter::parsemessage' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'locale' => 'string',
    'pattern' => 'string',
    'message' => 'string',
  ),
  'messageformatter::setpattern' => 
  array (
    0 => 'bool',
    'pattern' => 'string',
  ),
  'metaphone' => 
  array (
    0 => 'string',
    'string' => 'string',
    'max_phonemes=' => 'int',
  ),
  'method_exists' => 
  array (
    0 => 'bool',
    'object_or_class' => 'class-string|object',
    'method' => 'string',
  ),
  'mhash' => 
  array (
    0 => 'string',
    'algo' => 'int',
    'data' => 'string',
    'key=' => 'null|string',
  ),
  'mhash_count' => 
  array (
    0 => 'int',
  ),
  'mhash_get_block_size' => 
  array (
    0 => 'false|int',
    'algo' => 'int',
  ),
  'mhash_get_hash_name' => 
  array (
    0 => 'false|string',
    'algo' => 'int',
  ),
  'mhash_keygen_s2k' => 
  array (
    0 => 'false|string',
    'algo' => 'int',
    'password' => 'string',
    'salt' => 'string',
    'length' => 'int',
  ),
  'microtime' => 
  array (
    0 => 'string',
    'as_float=' => 'false',
  ),
  'microtime\'1' => 
  array (
    0 => 'float',
    'as_float=' => 'true',
  ),
  'mime_content_type' => 
  array (
    0 => 'false|string',
    'filename' => 'resource|string',
  ),
  'min' => 
  array (
    0 => 'mixed',
    'value' => 'non-empty-array<array-key, mixed>',
  ),
  'min\'1' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
    'values' => 'mixed',
    '...args=' => 'mixed',
  ),
  'ming_keypress' => 
  array (
    0 => 'int',
    'char' => 'string',
  ),
  'ming_setcubicthreshold' => 
  array (
    0 => 'void',
    'threshold' => 'int',
  ),
  'ming_setscale' => 
  array (
    0 => 'void',
    'scale' => 'float',
  ),
  'ming_setswfcompression' => 
  array (
    0 => 'void',
    'level' => 'int',
  ),
  'ming_useconstants' => 
  array (
    0 => 'void',
    'use' => 'int',
  ),
  'ming_useswfversion' => 
  array (
    0 => 'void',
    'version' => 'int',
  ),
  'mkdir' => 
  array (
    0 => 'bool',
    'directory' => 'string',
    'permissions=' => 'int',
    'recursive=' => 'bool',
    'context=' => 'null|resource',
  ),
  'mktime' => 
  array (
    0 => 'false|int',
    'hour' => 'int',
    'minute=' => 'int|null',
    'second=' => 'int|null',
    'month=' => 'int|null',
    'day=' => 'int|null',
    'year=' => 'int|null',
  ),
  'mongo::__construct' => 
  array (
    0 => 'void',
    'server=' => 'string',
    'options=' => 'array<array-key, mixed>',
    'driver_options=' => 'array<array-key, mixed>',
  ),
  'mongo::__get' => 
  array (
    0 => 'MongoDB',
    'dbname' => 'string',
  ),
  'mongo::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongo::close' => 
  array (
    0 => 'bool',
  ),
  'mongo::connect' => 
  array (
    0 => 'bool',
  ),
  'mongo::connectutil' => 
  array (
    0 => 'bool',
  ),
  'mongo::dropdb' => 
  array (
    0 => 'array<array-key, mixed>',
    'db' => 'mixed',
  ),
  'mongo::forceerror' => 
  array (
    0 => 'bool',
  ),
  'mongo::getconnections' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongo::gethosts' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongo::getpoolsize' => 
  array (
    0 => 'int',
  ),
  'mongo::getreadpreference' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongo::getslave' => 
  array (
    0 => 'null|string',
  ),
  'mongo::getslaveokay' => 
  array (
    0 => 'bool',
  ),
  'mongo::getwriteconcern' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongo::killcursor' => 
  array (
    0 => 'mixed',
    'server_hash' => 'string',
    'id' => 'MongoInt64|int',
  ),
  'mongo::lasterror' => 
  array (
    0 => 'array<array-key, mixed>|null',
  ),
  'mongo::listdbs' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongo::pairconnect' => 
  array (
    0 => 'bool',
  ),
  'mongo::pairpersistconnect' => 
  array (
    0 => 'bool',
    'username=' => 'string',
    'password=' => 'string',
  ),
  'mongo::persistconnect' => 
  array (
    0 => 'bool',
    'username=' => 'string',
    'password=' => 'string',
  ),
  'mongo::pooldebug' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongo::preverror' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongo::reseterror' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongo::selectcollection' => 
  array (
    0 => 'MongoCollection',
    'db' => 'string',
    'collection' => 'string',
  ),
  'mongo::selectdb' => 
  array (
    0 => 'MongoDB',
    'name' => 'string',
  ),
  'mongo::setpoolsize' => 
  array (
    0 => 'bool',
    'size' => 'int',
  ),
  'mongo::setreadpreference' => 
  array (
    0 => 'bool',
    'readPreference' => 'string',
    'tags=' => 'array<array-key, mixed>',
  ),
  'mongo::setslaveokay' => 
  array (
    0 => 'bool',
    'ok=' => 'bool',
  ),
  'mongo::switchslave' => 
  array (
    0 => 'string',
  ),
  'mongobindata::__construct' => 
  array (
    0 => 'void',
    'data' => 'string',
    'type=' => 'int',
  ),
  'mongobindata::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongoclient::__construct' => 
  array (
    0 => 'void',
    'server=' => 'string',
    'options=' => 'array<array-key, mixed>',
    'driver_options=' => 'array<array-key, mixed>',
  ),
  'mongoclient::__get' => 
  array (
    0 => 'MongoDB',
    'dbname' => 'string',
  ),
  'mongoclient::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongoclient::close' => 
  array (
    0 => 'bool',
    'connection=' => 'bool|string',
  ),
  'mongoclient::connect' => 
  array (
    0 => 'bool',
  ),
  'mongoclient::dropdb' => 
  array (
    0 => 'array<array-key, mixed>',
    'db' => 'mixed',
  ),
  'mongoclient::getconnections' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongoclient::gethosts' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongoclient::getreadpreference' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongoclient::getwriteconcern' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongoclient::killcursor' => 
  array (
    0 => 'bool',
    'server_hash' => 'string',
    'id' => 'MongoInt64|int',
  ),
  'mongoclient::listdbs' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongoclient::selectcollection' => 
  array (
    0 => 'MongoCollection',
    'db' => 'string',
    'collection' => 'string',
  ),
  'mongoclient::selectdb' => 
  array (
    0 => 'MongoDB',
    'name' => 'string',
  ),
  'mongoclient::setreadpreference' => 
  array (
    0 => 'bool',
    'read_preference' => 'string',
    'tags=' => 'array<array-key, mixed>',
  ),
  'mongoclient::setwriteconcern' => 
  array (
    0 => 'bool',
    'w' => 'mixed',
    'wtimeout=' => 'int',
  ),
  'mongoclient::switchslave' => 
  array (
    0 => 'string',
  ),
  'mongocode::__construct' => 
  array (
    0 => 'void',
    'code' => 'string',
    'scope=' => 'array<array-key, mixed>',
  ),
  'mongocode::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongocollection::__construct' => 
  array (
    0 => 'void',
    'db' => 'MongoDB',
    'name' => 'string',
  ),
  'mongocollection::__get' => 
  array (
    0 => 'MongoCollection',
    'name' => 'string',
  ),
  'mongocollection::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongocollection::aggregate' => 
  array (
    0 => 'array<array-key, mixed>',
    'op' => 'array<array-key, mixed>',
    'op=' => 'array<array-key, mixed>',
    '...args=' => 'array<array-key, mixed>',
  ),
  'mongocollection::aggregate\'1' => 
  array (
    0 => 'array<array-key, mixed>',
    'pipeline' => 'array<array-key, mixed>',
    'options=' => 'array<array-key, mixed>',
  ),
  'mongocollection::aggregatecursor' => 
  array (
    0 => 'MongoCommandCursor',
    'command' => 'array<array-key, mixed>',
    'options=' => 'array<array-key, mixed>',
  ),
  'mongocollection::batchinsert' => 
  array (
    0 => 'array<array-key, mixed>|bool',
    'a' => 'array<array-key, mixed>',
    'options=' => 'array<array-key, mixed>',
  ),
  'mongocollection::count' => 
  array (
    0 => 'int',
    'query=' => 'array<array-key, mixed>',
    'limit=' => 'int',
    'skip=' => 'int',
  ),
  'mongocollection::createdbref' => 
  array (
    0 => 'array<array-key, mixed>',
    'a' => 'array<array-key, mixed>',
  ),
  'mongocollection::createindex' => 
  array (
    0 => 'array<array-key, mixed>',
    'keys' => 'array<array-key, mixed>',
    'options=' => 'array<array-key, mixed>',
  ),
  'mongocollection::deleteindex' => 
  array (
    0 => 'array<array-key, mixed>',
    'keys' => 'array<array-key, mixed>|string',
  ),
  'mongocollection::deleteindexes' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongocollection::distinct' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'key' => 'string',
    'query=' => 'array<array-key, mixed>',
  ),
  'mongocollection::drop' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongocollection::ensureindex' => 
  array (
    0 => 'bool',
    'keys' => 'array<array-key, mixed>',
    'options=' => 'array<array-key, mixed>',
  ),
  'mongocollection::find' => 
  array (
    0 => 'MongoCursor',
    'query=' => 'array<array-key, mixed>',
    'fields=' => 'array<array-key, mixed>',
  ),
  'mongocollection::findandmodify' => 
  array (
    0 => 'array<array-key, mixed>',
    'query' => 'array<array-key, mixed>',
    'update=' => 'array<array-key, mixed>',
    'fields=' => 'array<array-key, mixed>',
    'options=' => 'array<array-key, mixed>',
  ),
  'mongocollection::findone' => 
  array (
    0 => 'array<array-key, mixed>|null',
    'query=' => 'array<array-key, mixed>',
    'fields=' => 'array<array-key, mixed>',
  ),
  'mongocollection::getdbref' => 
  array (
    0 => 'array<array-key, mixed>',
    'ref' => 'array<array-key, mixed>',
  ),
  'mongocollection::getindexinfo' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongocollection::getname' => 
  array (
    0 => 'string',
  ),
  'mongocollection::getreadpreference' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongocollection::getslaveokay' => 
  array (
    0 => 'bool',
  ),
  'mongocollection::getwriteconcern' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongocollection::group' => 
  array (
    0 => 'array<array-key, mixed>',
    'keys' => 'mixed',
    'initial' => 'array<array-key, mixed>',
    'reduce' => 'MongoCode',
    'options=' => 'array<array-key, mixed>',
  ),
  'mongocollection::insert' => 
  array (
    0 => 'array<array-key, mixed>|bool',
    'a' => 'array<array-key, mixed>|object',
    'options=' => 'array<array-key, mixed>',
  ),
  'mongocollection::parallelcollectionscan' => 
  array (
    0 => 'array<array-key, MongoCommandCursor>',
    'num_cursors' => 'int',
  ),
  'mongocollection::remove' => 
  array (
    0 => 'array<array-key, mixed>|bool',
    'criteria=' => 'array<array-key, mixed>',
    'options=' => 'array<array-key, mixed>',
  ),
  'mongocollection::save' => 
  array (
    0 => 'array<array-key, mixed>|bool',
    'a' => 'array<array-key, mixed>|object',
    'options=' => 'array<array-key, mixed>',
  ),
  'mongocollection::setreadpreference' => 
  array (
    0 => 'bool',
    'read_preference' => 'string',
    'tags=' => 'array<array-key, mixed>',
  ),
  'mongocollection::setslaveokay' => 
  array (
    0 => 'bool',
    'ok=' => 'bool',
  ),
  'mongocollection::setwriteconcern' => 
  array (
    0 => 'bool',
    'w' => 'mixed',
    'wtimeout=' => 'int',
  ),
  'mongocollection::toindexstring' => 
  array (
    0 => 'string',
    'keys' => 'mixed',
  ),
  'mongocollection::update' => 
  array (
    0 => 'bool',
    'criteria' => 'array<array-key, mixed>',
    'newobj' => 'array<array-key, mixed>',
    'options=' => 'array<array-key, mixed>',
  ),
  'mongocollection::validate' => 
  array (
    0 => 'array<array-key, mixed>',
    'scan_data=' => 'bool',
  ),
  'mongocommandcursor::__construct' => 
  array (
    0 => 'void',
    'connection' => 'MongoClient',
    'ns' => 'string',
    'command' => 'array<array-key, mixed>',
  ),
  'mongocommandcursor::batchsize' => 
  array (
    0 => 'MongoCommandCursor',
    'batchSize' => 'int',
  ),
  'mongocommandcursor::createfromdocument' => 
  array (
    0 => 'MongoCommandCursor',
    'connection' => 'MongoClient',
    'hash' => 'string',
    'document' => 'array<array-key, mixed>',
  ),
  'mongocommandcursor::current' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongocommandcursor::dead' => 
  array (
    0 => 'bool',
  ),
  'mongocommandcursor::getreadpreference' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongocommandcursor::info' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongocommandcursor::key' => 
  array (
    0 => 'int',
  ),
  'mongocommandcursor::next' => 
  array (
    0 => 'void',
  ),
  'mongocommandcursor::rewind' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongocommandcursor::setreadpreference' => 
  array (
    0 => 'MongoCommandCursor',
    'read_preference' => 'string',
    'tags=' => 'array<array-key, mixed>',
  ),
  'mongocommandcursor::timeout' => 
  array (
    0 => 'MongoCommandCursor',
    'ms' => 'int',
  ),
  'mongocommandcursor::valid' => 
  array (
    0 => 'bool',
  ),
  'mongocursor::__construct' => 
  array (
    0 => 'void',
    'connection' => 'MongoClient',
    'ns' => 'string',
    'query=' => 'array<array-key, mixed>',
    'fields=' => 'array<array-key, mixed>',
  ),
  'mongocursor::addoption' => 
  array (
    0 => 'MongoCursor',
    'key' => 'string',
    'value' => 'mixed',
  ),
  'mongocursor::awaitdata' => 
  array (
    0 => 'MongoCursor',
    'wait=' => 'bool',
  ),
  'mongocursor::batchsize' => 
  array (
    0 => 'MongoCursor',
    'num' => 'int',
  ),
  'mongocursor::count' => 
  array (
    0 => 'int',
    'foundonly=' => 'bool',
  ),
  'mongocursor::current' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongocursor::dead' => 
  array (
    0 => 'bool',
  ),
  'mongocursor::doquery' => 
  array (
    0 => 'void',
  ),
  'mongocursor::explain' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongocursor::fields' => 
  array (
    0 => 'MongoCursor',
    'f' => 'array<array-key, mixed>',
  ),
  'mongocursor::getnext' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongocursor::getreadpreference' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongocursor::hasnext' => 
  array (
    0 => 'bool',
  ),
  'mongocursor::hint' => 
  array (
    0 => 'MongoCursor',
    'key_pattern' => 'array<array-key, mixed>|object|string',
  ),
  'mongocursor::immortal' => 
  array (
    0 => 'MongoCursor',
    'liveforever=' => 'bool',
  ),
  'mongocursor::info' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongocursor::key' => 
  array (
    0 => 'string',
  ),
  'mongocursor::limit' => 
  array (
    0 => 'MongoCursor',
    'num' => 'int',
  ),
  'mongocursor::maxtimems' => 
  array (
    0 => 'MongoCursor',
    'ms' => 'int',
  ),
  'mongocursor::next' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongocursor::partial' => 
  array (
    0 => 'MongoCursor',
    'okay=' => 'bool',
  ),
  'mongocursor::reset' => 
  array (
    0 => 'void',
  ),
  'mongocursor::rewind' => 
  array (
    0 => 'void',
  ),
  'mongocursor::setflag' => 
  array (
    0 => 'MongoCursor',
    'flag' => 'int',
    'set=' => 'bool',
  ),
  'mongocursor::setreadpreference' => 
  array (
    0 => 'MongoCursor',
    'read_preference' => 'string',
    'tags=' => 'array<array-key, mixed>',
  ),
  'mongocursor::skip' => 
  array (
    0 => 'MongoCursor',
    'num' => 'int',
  ),
  'mongocursor::slaveokay' => 
  array (
    0 => 'MongoCursor',
    'okay=' => 'bool',
  ),
  'mongocursor::snapshot' => 
  array (
    0 => 'MongoCursor',
  ),
  'mongocursor::sort' => 
  array (
    0 => 'MongoCursor',
    'fields' => 'array<array-key, mixed>',
  ),
  'mongocursor::tailable' => 
  array (
    0 => 'MongoCursor',
    'tail=' => 'bool',
  ),
  'mongocursor::timeout' => 
  array (
    0 => 'MongoCursor',
    'ms' => 'int',
  ),
  'mongocursor::valid' => 
  array (
    0 => 'bool',
  ),
  'mongocursorexception::__clone' => 
  array (
    0 => 'void',
  ),
  'mongocursorexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'string',
    'code=' => 'int',
    'previous=' => 'Exception|Throwable|null',
  ),
  'mongocursorexception::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongocursorexception::__wakeup' => 
  array (
    0 => 'void',
  ),
  'mongocursorexception::getcode' => 
  array (
    0 => 'int',
  ),
  'mongocursorexception::getfile' => 
  array (
    0 => 'string',
  ),
  'mongocursorexception::gethost' => 
  array (
    0 => 'string',
  ),
  'mongocursorexception::getline' => 
  array (
    0 => 'int',
  ),
  'mongocursorexception::getmessage' => 
  array (
    0 => 'string',
  ),
  'mongocursorexception::getprevious' => 
  array (
    0 => 'Exception|Throwable',
  ),
  'mongocursorexception::gettrace' => 
  array (
    0 => 'list<array{args?: array<array-key, mixed>, class?: class-string, file?: string, function: string, line?: int, type?: \'->\'|\'::\'}>',
  ),
  'mongocursorexception::gettraceasstring' => 
  array (
    0 => 'string',
  ),
  'mongocursorinterface::__construct' => 
  array (
    0 => 'void',
  ),
  'mongocursorinterface::batchsize' => 
  array (
    0 => 'MongoCursorInterface',
    'batchSize' => 'int',
  ),
  'mongocursorinterface::current' => 
  array (
    0 => 'mixed',
  ),
  'mongocursorinterface::dead' => 
  array (
    0 => 'bool',
  ),
  'mongocursorinterface::getreadpreference' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongocursorinterface::info' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongocursorinterface::key' => 
  array (
    0 => 'int|string',
  ),
  'mongocursorinterface::next' => 
  array (
    0 => 'void',
  ),
  'mongocursorinterface::rewind' => 
  array (
    0 => 'void',
  ),
  'mongocursorinterface::setreadpreference' => 
  array (
    0 => 'MongoCursorInterface',
    'read_preference' => 'string',
    'tags=' => 'array<array-key, mixed>',
  ),
  'mongocursorinterface::timeout' => 
  array (
    0 => 'MongoCursorInterface',
    'ms' => 'int',
  ),
  'mongocursorinterface::valid' => 
  array (
    0 => 'bool',
  ),
  'mongodate::__construct' => 
  array (
    0 => 'void',
    'second=' => 'int',
    'usecond=' => 'int',
  ),
  'mongodate::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodate::todatetime' => 
  array (
    0 => 'DateTime',
  ),
  'mongodb::__construct' => 
  array (
    0 => 'void',
    'conn' => 'MongoClient',
    'name' => 'string',
  ),
  'mongodb::__get' => 
  array (
    0 => 'MongoCollection',
    'name' => 'string',
  ),
  'mongodb::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb::authenticate' => 
  array (
    0 => 'array<array-key, mixed>',
    'username' => 'string',
    'password' => 'string',
  ),
  'mongodb::command' => 
  array (
    0 => 'array<array-key, mixed>',
    'command' => 'array<array-key, mixed>',
  ),
  'mongodb::createcollection' => 
  array (
    0 => 'MongoCollection',
    'name' => 'string',
    'capped=' => 'bool',
    'size=' => 'int',
    'max=' => 'int',
  ),
  'mongodb::createdbref' => 
  array (
    0 => 'array<array-key, mixed>',
    'collection' => 'string',
    'a' => 'mixed',
  ),
  'mongodb::drop' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongodb::dropcollection' => 
  array (
    0 => 'array<array-key, mixed>',
    'coll' => 'MongoCollection|string',
  ),
  'mongodb::execute' => 
  array (
    0 => 'array<array-key, mixed>',
    'code' => 'MongoCode|string',
    'args=' => 'array<array-key, mixed>',
  ),
  'mongodb::forceerror' => 
  array (
    0 => 'bool',
  ),
  'mongodb::getcollectioninfo' => 
  array (
    0 => 'array<array-key, mixed>',
    'options=' => 'array<array-key, mixed>',
  ),
  'mongodb::getcollectionnames' => 
  array (
    0 => 'array<array-key, mixed>',
    'options=' => 'array<array-key, mixed>',
  ),
  'mongodb::getdbref' => 
  array (
    0 => 'array<array-key, mixed>',
    'ref' => 'array<array-key, mixed>',
  ),
  'mongodb::getgridfs' => 
  array (
    0 => 'MongoGridFS',
    'prefix=' => 'string',
  ),
  'mongodb::getprofilinglevel' => 
  array (
    0 => 'int',
  ),
  'mongodb::getreadpreference' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongodb::getslaveokay' => 
  array (
    0 => 'bool',
  ),
  'mongodb::getwriteconcern' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongodb::lasterror' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongodb::listcollections' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongodb::preverror' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongodb::repair' => 
  array (
    0 => 'array<array-key, mixed>',
    'preserve_cloned_files=' => 'bool',
    'backup_original_files=' => 'bool',
  ),
  'mongodb::reseterror' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongodb::selectcollection' => 
  array (
    0 => 'MongoCollection',
    'name' => 'string',
  ),
  'mongodb::setprofilinglevel' => 
  array (
    0 => 'int',
    'level' => 'int',
  ),
  'mongodb::setreadpreference' => 
  array (
    0 => 'bool',
    'read_preference' => 'string',
    'tags=' => 'array<array-key, mixed>',
  ),
  'mongodb::setslaveokay' => 
  array (
    0 => 'bool',
    'ok=' => 'bool',
  ),
  'mongodb::setwriteconcern' => 
  array (
    0 => 'bool',
    'w' => 'mixed',
    'wtimeout=' => 'int',
  ),
  'mongodb\\bson\\binary::__construct' => 
  array (
    0 => 'void',
    'data' => 'string',
    'type=' => 'int',
  ),
  'mongodb\\bson\\binary::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\binary::getdata' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\binary::gettype' => 
  array (
    0 => 'int',
  ),
  'mongodb\\bson\\binary::serialize' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\binary::unserialize' => 
  array (
    0 => 'void',
    'data' => 'string',
  ),
  'mongodb\\bson\\binaryinterface::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\binaryinterface::getdata' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\binaryinterface::gettype' => 
  array (
    0 => 'int',
  ),
  'mongodb\\bson\\dbpointer::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\dbpointer::serialize' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\dbpointer::unserialize' => 
  array (
    0 => 'void',
    'data' => 'string',
  ),
  'mongodb\\bson\\decimal128::__construct' => 
  array (
    0 => 'void',
    'value' => 'string',
  ),
  'mongodb\\bson\\decimal128::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\decimal128::serialize' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\decimal128::unserialize' => 
  array (
    0 => 'void',
    'data' => 'string',
  ),
  'mongodb\\bson\\decimal128interface::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\document::fromphp' => 
  array (
    0 => 'MongoDB\\BSON\\Document',
    'value' => 'array<array-key, mixed>|object',
  ),
  'mongodb\\bson\\document::tophp' => 
  array (
    0 => 'array<array-key, mixed>|object',
    'typeMap=' => 'array<array-key, mixed>|null',
  ),
  'mongodb\\bson\\document::unserialize' => 
  array (
    0 => 'void',
    'data' => 'string',
  ),
  'mongodb\\bson\\fromjson' => 
  array (
    0 => 'string',
    'json' => 'string',
  ),
  'mongodb\\bson\\fromphp' => 
  array (
    0 => 'string',
    'value' => 'array<array-key, mixed>|object',
  ),
  'mongodb\\bson\\int64::__construct' => 
  array (
    0 => 'void',
    'value' => 'int|string',
  ),
  'mongodb\\bson\\int64::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\int64::serialize' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\int64::unserialize' => 
  array (
    0 => 'void',
    'data' => 'string',
  ),
  'mongodb\\bson\\iterator::key' => 
  array (
    0 => 'int|string',
  ),
  'mongodb\\bson\\javascript::__construct' => 
  array (
    0 => 'void',
    'code' => 'string',
    'scope=' => 'array<array-key, mixed>|null|object',
  ),
  'mongodb\\bson\\javascript::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\javascript::getcode' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\javascript::getscope' => 
  array (
    0 => 'null|object',
  ),
  'mongodb\\bson\\javascript::serialize' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\javascript::unserialize' => 
  array (
    0 => 'void',
    'data' => 'string',
  ),
  'mongodb\\bson\\javascriptinterface::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\javascriptinterface::getcode' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\javascriptinterface::getscope' => 
  array (
    0 => 'null|object',
  ),
  'mongodb\\bson\\maxkey::serialize' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\maxkey::unserialize' => 
  array (
    0 => 'void',
    'data' => 'string',
  ),
  'mongodb\\bson\\minkey::serialize' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\minkey::unserialize' => 
  array (
    0 => 'void',
    'data' => 'string',
  ),
  'mongodb\\bson\\objectid::__construct' => 
  array (
    0 => 'void',
    'id=' => 'null|string',
  ),
  'mongodb\\bson\\objectid::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\objectid::gettimestamp' => 
  array (
    0 => 'int',
  ),
  'mongodb\\bson\\objectid::serialize' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\objectid::unserialize' => 
  array (
    0 => 'void',
    'data' => 'string',
  ),
  'mongodb\\bson\\objectidinterface::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\objectidinterface::gettimestamp' => 
  array (
    0 => 'int',
  ),
  'mongodb\\bson\\packedarray::tophp' => 
  array (
    0 => 'array<array-key, mixed>|object',
    'typeMap=' => 'array<array-key, mixed>|null',
  ),
  'mongodb\\bson\\packedarray::unserialize' => 
  array (
    0 => 'void',
    'data' => 'string',
  ),
  'mongodb\\bson\\persistable::bsonserialize' => 
  array (
    0 => 'MongoDB\\BSON\\Document|array<array-key, mixed>|stdClass',
  ),
  'mongodb\\bson\\regex::__construct' => 
  array (
    0 => 'void',
    'pattern' => 'string',
    'flags=' => 'string',
  ),
  'mongodb\\bson\\regex::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\regex::getflags' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\regex::getpattern' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\regex::serialize' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\regex::unserialize' => 
  array (
    0 => 'void',
    'data' => 'string',
  ),
  'mongodb\\bson\\regexinterface::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\regexinterface::getflags' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\regexinterface::getpattern' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\serializable::bsonserialize' => 
  array (
    0 => 'MongoDB\\BSON\\Document|MongoDB\\BSON\\PackedArray|array<array-key, mixed>|stdClass',
  ),
  'mongodb\\bson\\symbol::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\symbol::serialize' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\symbol::unserialize' => 
  array (
    0 => 'void',
    'data' => 'string',
  ),
  'mongodb\\bson\\timestamp::__construct' => 
  array (
    0 => 'void',
    'increment' => 'int|string',
    'timestamp' => 'int|string',
  ),
  'mongodb\\bson\\timestamp::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\timestamp::getincrement' => 
  array (
    0 => 'int',
  ),
  'mongodb\\bson\\timestamp::gettimestamp' => 
  array (
    0 => 'int',
  ),
  'mongodb\\bson\\timestamp::serialize' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\timestamp::unserialize' => 
  array (
    0 => 'void',
    'data' => 'string',
  ),
  'mongodb\\bson\\timestampinterface::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\timestampinterface::getincrement' => 
  array (
    0 => 'int',
  ),
  'mongodb\\bson\\timestampinterface::gettimestamp' => 
  array (
    0 => 'int',
  ),
  'mongodb\\bson\\tocanonicalextendedjson' => 
  array (
    0 => 'string',
    'bson' => 'string',
  ),
  'mongodb\\bson\\tojson' => 
  array (
    0 => 'string',
    'bson' => 'string',
  ),
  'mongodb\\bson\\tophp' => 
  array (
    0 => 'array<array-key, mixed>|object',
    'bson' => 'string',
    'typemap=' => 'array<array-key, mixed>|null',
  ),
  'mongodb\\bson\\torelaxedextendedjson' => 
  array (
    0 => 'string',
    'bson' => 'string',
  ),
  'mongodb\\bson\\undefined::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\undefined::serialize' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\undefined::unserialize' => 
  array (
    0 => 'void',
    'data' => 'string',
  ),
  'mongodb\\bson\\unserializable::bsonunserialize' => 
  array (
    0 => 'void',
    'data' => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\utcdatetime::__construct' => 
  array (
    0 => 'void',
    'milliseconds=' => 'DateTimeInterface|float|int|null|string',
  ),
  'mongodb\\bson\\utcdatetime::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\utcdatetime::serialize' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\utcdatetime::todatetime' => 
  array (
    0 => 'DateTime',
  ),
  'mongodb\\bson\\utcdatetime::unserialize' => 
  array (
    0 => 'void',
    'data' => 'string',
  ),
  'mongodb\\bson\\utcdatetimeinterface::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\utcdatetimeinterface::todatetime' => 
  array (
    0 => 'DateTime',
  ),
  'mongodb\\driver\\bulkwrite::count' => 
  array (
    0 => 'int',
  ),
  'mongodb\\driver\\bulkwrite::delete' => 
  array (
    0 => 'void',
    'filter' => 'array<array-key, mixed>|object',
    'deleteOptions=' => 'array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\bulkwrite::insert' => 
  array (
    0 => 'mixed',
    'document' => 'array<array-key, mixed>|object',
  ),
  'mongodb\\driver\\bulkwrite::update' => 
  array (
    0 => 'void',
    'filter' => 'array<array-key, mixed>|object',
    'newObj' => 'array<array-key, mixed>|object',
    'updateOptions=' => 'array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\clientencryption::createdatakey' => 
  array (
    0 => 'MongoDB\\BSON\\Binary',
    'kmsProvider' => 'string',
    'options=' => 'array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\clientencryption::encrypt' => 
  array (
    0 => 'MongoDB\\BSON\\Binary',
    'value' => 'mixed',
    'options=' => 'array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\clientencryption::encryptexpression' => 
  array (
    0 => 'object',
    'expr' => 'array<array-key, mixed>|object',
    'options=' => 'array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\clientencryption::rewrapmanydatakey' => 
  array (
    0 => 'object',
    'filter' => 'array<array-key, mixed>|object',
    'options=' => 'array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\command::__construct' => 
  array (
    0 => 'void',
    'document' => 'array<array-key, mixed>|object',
    'commandOptions=' => 'array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\cursor::current' => 
  array (
    0 => 'array<array-key, mixed>|null|object',
  ),
  'mongodb\\driver\\cursor::getid' => 
  array (
    0 => 'MongoDB\\Driver\\CursorId',
    'asInt64=' => 'bool',
  ),
  'mongodb\\driver\\cursor::getserver' => 
  array (
    0 => 'MongoDB\\Driver\\Server',
  ),
  'mongodb\\driver\\cursor::isdead' => 
  array (
    0 => 'bool',
  ),
  'mongodb\\driver\\cursor::key' => 
  array (
    0 => 'int|null',
  ),
  'mongodb\\driver\\cursor::next' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\cursor::rewind' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\cursor::settypemap' => 
  array (
    0 => 'void',
    'typemap' => 'array<array-key, mixed>',
  ),
  'mongodb\\driver\\cursor::toarray' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongodb\\driver\\cursor::valid' => 
  array (
    0 => 'bool',
  ),
  'mongodb\\driver\\cursorid::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\cursorid::serialize' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\cursorid::unserialize' => 
  array (
    0 => 'void',
    'data' => 'string',
  ),
  'mongodb\\driver\\cursorinterface::getid' => 
  array (
    0 => 'MongoDB\\Driver\\CursorId',
  ),
  'mongodb\\driver\\cursorinterface::getserver' => 
  array (
    0 => 'MongoDB\\Driver\\Server',
  ),
  'mongodb\\driver\\cursorinterface::isdead' => 
  array (
    0 => 'bool',
  ),
  'mongodb\\driver\\cursorinterface::settypemap' => 
  array (
    0 => 'void',
    'typemap' => 'array<array-key, mixed>',
  ),
  'mongodb\\driver\\cursorinterface::toarray' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongodb\\driver\\exception\\authenticationexception::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\exception\\bulkwriteexception::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\exception\\commandexception::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\exception\\commandexception::getresultdocument' => 
  array (
    0 => 'object',
  ),
  'mongodb\\driver\\exception\\connectionexception::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\exception\\connectiontimeoutexception::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\exception\\encryptionexception::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\exception\\exception::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\exception\\executiontimeoutexception::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\exception\\invalidargumentexception::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\exception\\logicexception::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\exception\\runtimeexception::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\exception\\runtimeexception::haserrorlabel' => 
  array (
    0 => 'bool',
    'errorLabel' => 'string',
  ),
  'mongodb\\driver\\exception\\serverexception::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\exception\\sslconnectionexception::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\exception\\unexpectedvalueexception::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\exception\\writeexception::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\exception\\writeexception::getwriteresult' => 
  array (
    0 => 'MongoDB\\Driver\\WriteResult',
  ),
  'mongodb\\driver\\manager::__construct' => 
  array (
    0 => 'void',
    'uri=' => 'null|string',
    'uriOptions=' => 'array<array-key, mixed>|null',
    'driverOptions=' => 'array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\manager::addsubscriber' => 
  array (
    0 => 'void',
    'subscriber' => 'MongoDB\\Driver\\Monitoring\\Subscriber',
  ),
  'mongodb\\driver\\manager::createclientencryption' => 
  array (
    0 => 'MongoDB\\Driver\\ClientEncryption',
    'options' => 'array<array-key, mixed>',
  ),
  'mongodb\\driver\\manager::executebulkwrite' => 
  array (
    0 => 'MongoDB\\Driver\\WriteResult',
    'namespace' => 'string',
    'bulk' => 'MongoDB\\Driver\\BulkWrite',
    'options=' => 'MongoDB\\Driver\\WriteConcern|array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\manager::executecommand' => 
  array (
    0 => 'MongoDB\\Driver\\Cursor',
    'db' => 'string',
    'command' => 'MongoDB\\Driver\\Command',
    'options=' => 'MongoDB\\Driver\\ReadPreference|array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\manager::executequery' => 
  array (
    0 => 'MongoDB\\Driver\\Cursor',
    'namespace' => 'string',
    'query' => 'MongoDB\\Driver\\Query',
    'options=' => 'MongoDB\\Driver\\ReadPreference|array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\manager::executereadcommand' => 
  array (
    0 => 'MongoDB\\Driver\\Cursor',
    'db' => 'string',
    'command' => 'MongoDB\\Driver\\Command',
    'options=' => 'array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\manager::executereadwritecommand' => 
  array (
    0 => 'MongoDB\\Driver\\Cursor',
    'db' => 'string',
    'command' => 'MongoDB\\Driver\\Command',
    'options=' => 'array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\manager::executewritecommand' => 
  array (
    0 => 'MongoDB\\Driver\\Cursor',
    'db' => 'string',
    'command' => 'MongoDB\\Driver\\Command',
    'options=' => 'array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\manager::getencryptedfieldsmap' => 
  array (
    0 => 'array<array-key, mixed>|null|object',
  ),
  'mongodb\\driver\\manager::getreadconcern' => 
  array (
    0 => 'MongoDB\\Driver\\ReadConcern',
  ),
  'mongodb\\driver\\manager::getreadpreference' => 
  array (
    0 => 'MongoDB\\Driver\\ReadPreference',
  ),
  'mongodb\\driver\\manager::getservers' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongodb\\driver\\manager::getwriteconcern' => 
  array (
    0 => 'MongoDB\\Driver\\WriteConcern',
  ),
  'mongodb\\driver\\manager::removesubscriber' => 
  array (
    0 => 'void',
    'subscriber' => 'MongoDB\\Driver\\Monitoring\\Subscriber',
  ),
  'mongodb\\driver\\manager::selectserver' => 
  array (
    0 => 'MongoDB\\Driver\\Server',
    'readPreference=' => 'MongoDB\\Driver\\ReadPreference|null',
  ),
  'mongodb\\driver\\manager::startsession' => 
  array (
    0 => 'MongoDB\\Driver\\Session',
    'options=' => 'array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\monitoring\\addsubscriber' => 
  array (
    0 => 'void',
    'subscriber' => 'MongoDB\\Driver\\Monitoring\\Subscriber',
  ),
  'mongodb\\driver\\monitoring\\commandfailedevent::getcommandname' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\monitoring\\commandfailedevent::getdurationmicros' => 
  array (
    0 => 'int',
  ),
  'mongodb\\driver\\monitoring\\commandfailedevent::geterror' => 
  array (
    0 => 'Exception',
  ),
  'mongodb\\driver\\monitoring\\commandfailedevent::getoperationid' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\monitoring\\commandfailedevent::getreply' => 
  array (
    0 => 'object',
  ),
  'mongodb\\driver\\monitoring\\commandfailedevent::getrequestid' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\monitoring\\commandfailedevent::getserver' => 
  array (
    0 => 'MongoDB\\Driver\\Server',
  ),
  'mongodb\\driver\\monitoring\\commandfailedevent::getserviceid' => 
  array (
    0 => 'MongoDB\\BSON\\ObjectId|null',
  ),
  'mongodb\\driver\\monitoring\\commandstartedevent::getcommand' => 
  array (
    0 => 'object',
  ),
  'mongodb\\driver\\monitoring\\commandstartedevent::getcommandname' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\monitoring\\commandstartedevent::getdatabasename' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\monitoring\\commandstartedevent::getoperationid' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\monitoring\\commandstartedevent::getrequestid' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\monitoring\\commandstartedevent::getserver' => 
  array (
    0 => 'MongoDB\\Driver\\Server',
  ),
  'mongodb\\driver\\monitoring\\commandstartedevent::getserviceid' => 
  array (
    0 => 'MongoDB\\BSON\\ObjectId|null',
  ),
  'mongodb\\driver\\monitoring\\commandsubscriber::commandfailed' => 
  array (
    0 => 'void',
    'event' => 'MongoDB\\Driver\\Monitoring\\CommandFailedEvent',
  ),
  'mongodb\\driver\\monitoring\\commandsubscriber::commandstarted' => 
  array (
    0 => 'void',
    'event' => 'MongoDB\\Driver\\Monitoring\\CommandStartedEvent',
  ),
  'mongodb\\driver\\monitoring\\commandsubscriber::commandsucceeded' => 
  array (
    0 => 'void',
    'event' => 'MongoDB\\Driver\\Monitoring\\CommandSucceededEvent',
  ),
  'mongodb\\driver\\monitoring\\commandsucceededevent::getcommandname' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\monitoring\\commandsucceededevent::getdurationmicros' => 
  array (
    0 => 'int',
  ),
  'mongodb\\driver\\monitoring\\commandsucceededevent::getoperationid' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\monitoring\\commandsucceededevent::getreply' => 
  array (
    0 => 'object',
  ),
  'mongodb\\driver\\monitoring\\commandsucceededevent::getrequestid' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\monitoring\\commandsucceededevent::getserver' => 
  array (
    0 => 'MongoDB\\Driver\\Server',
  ),
  'mongodb\\driver\\monitoring\\commandsucceededevent::getserviceid' => 
  array (
    0 => 'MongoDB\\BSON\\ObjectId|null',
  ),
  'mongodb\\driver\\monitoring\\logsubscriber::log' => 
  array (
    0 => 'void',
    'level' => 'int',
    'domain' => 'string',
    'message' => 'string',
  ),
  'mongodb\\driver\\monitoring\\removesubscriber' => 
  array (
    0 => 'void',
    'subscriber' => 'MongoDB\\Driver\\Monitoring\\Subscriber',
  ),
  'mongodb\\driver\\monitoring\\sdamsubscriber::serverchanged' => 
  array (
    0 => 'void',
    'event' => 'MongoDB\\Driver\\Monitoring\\ServerChangedEvent',
  ),
  'mongodb\\driver\\monitoring\\sdamsubscriber::serverclosed' => 
  array (
    0 => 'void',
    'event' => 'MongoDB\\Driver\\Monitoring\\ServerClosedEvent',
  ),
  'mongodb\\driver\\monitoring\\sdamsubscriber::serverheartbeatfailed' => 
  array (
    0 => 'void',
    'event' => 'MongoDB\\Driver\\Monitoring\\ServerHeartbeatFailedEvent',
  ),
  'mongodb\\driver\\monitoring\\sdamsubscriber::serverheartbeatstarted' => 
  array (
    0 => 'void',
    'event' => 'MongoDB\\Driver\\Monitoring\\ServerHeartbeatStartedEvent',
  ),
  'mongodb\\driver\\monitoring\\sdamsubscriber::serverheartbeatsucceeded' => 
  array (
    0 => 'void',
    'event' => 'MongoDB\\Driver\\Monitoring\\ServerHeartbeatSucceededEvent',
  ),
  'mongodb\\driver\\monitoring\\sdamsubscriber::serveropening' => 
  array (
    0 => 'void',
    'event' => 'MongoDB\\Driver\\Monitoring\\ServerOpeningEvent',
  ),
  'mongodb\\driver\\monitoring\\sdamsubscriber::topologychanged' => 
  array (
    0 => 'void',
    'event' => 'MongoDB\\Driver\\Monitoring\\TopologyChangedEvent',
  ),
  'mongodb\\driver\\monitoring\\sdamsubscriber::topologyclosed' => 
  array (
    0 => 'void',
    'event' => 'MongoDB\\Driver\\Monitoring\\TopologyClosedEvent',
  ),
  'mongodb\\driver\\monitoring\\sdamsubscriber::topologyopening' => 
  array (
    0 => 'void',
    'event' => 'MongoDB\\Driver\\Monitoring\\TopologyOpeningEvent',
  ),
  'mongodb\\driver\\query::__construct' => 
  array (
    0 => 'void',
    'filter' => 'array<array-key, mixed>|object',
    'queryOptions=' => 'array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\readconcern::__construct' => 
  array (
    0 => 'void',
    'level=' => 'null|string',
  ),
  'mongodb\\driver\\readconcern::bsonserialize' => 
  array (
    0 => 'stdClass',
  ),
  'mongodb\\driver\\readconcern::getlevel' => 
  array (
    0 => 'null|string',
  ),
  'mongodb\\driver\\readconcern::isdefault' => 
  array (
    0 => 'bool',
  ),
  'mongodb\\driver\\readconcern::serialize' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\readconcern::unserialize' => 
  array (
    0 => 'void',
    'data' => 'string',
  ),
  'mongodb\\driver\\readpreference::__construct' => 
  array (
    0 => 'void',
    'mode' => 'int|string',
    'tagSets=' => 'array<array-key, mixed>|null',
    'options=' => 'array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\readpreference::bsonserialize' => 
  array (
    0 => 'stdClass',
  ),
  'mongodb\\driver\\readpreference::gethedge' => 
  array (
    0 => 'null|object',
  ),
  'mongodb\\driver\\readpreference::getmaxstalenessseconds' => 
  array (
    0 => 'int',
  ),
  'mongodb\\driver\\readpreference::getmode' => 
  array (
    0 => 'int',
  ),
  'mongodb\\driver\\readpreference::getmodestring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\readpreference::gettagsets' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongodb\\driver\\readpreference::serialize' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\readpreference::unserialize' => 
  array (
    0 => 'void',
    'data' => 'string',
  ),
  'mongodb\\driver\\server::executebulkwrite' => 
  array (
    0 => 'MongoDB\\Driver\\WriteResult',
    'namespace' => 'string',
    'bulkWrite' => 'MongoDB\\Driver\\BulkWrite',
    'options=' => 'MongoDB\\Driver\\WriteConcern|array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\server::executecommand' => 
  array (
    0 => 'MongoDB\\Driver\\Cursor',
    'db' => 'string',
    'command' => 'MongoDB\\Driver\\Command',
    'options=' => 'MongoDB\\Driver\\ReadPreference|array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\server::executequery' => 
  array (
    0 => 'MongoDB\\Driver\\Cursor',
    'namespace' => 'string',
    'query' => 'MongoDB\\Driver\\Query',
    'options=' => 'MongoDB\\Driver\\ReadPreference|array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\server::executereadcommand' => 
  array (
    0 => 'MongoDB\\Driver\\Cursor',
    'db' => 'string',
    'command' => 'MongoDB\\Driver\\Command',
    'options=' => 'array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\server::executereadwritecommand' => 
  array (
    0 => 'MongoDB\\Driver\\Cursor',
    'db' => 'string',
    'command' => 'MongoDB\\Driver\\Command',
    'options=' => 'array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\server::executewritecommand' => 
  array (
    0 => 'MongoDB\\Driver\\Cursor',
    'db' => 'string',
    'command' => 'MongoDB\\Driver\\Command',
    'options=' => 'array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\server::gethost' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\server::getinfo' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongodb\\driver\\server::getlatency' => 
  array (
    0 => 'int|null',
  ),
  'mongodb\\driver\\server::getport' => 
  array (
    0 => 'int',
  ),
  'mongodb\\driver\\server::gettags' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongodb\\driver\\server::gettype' => 
  array (
    0 => 'int',
  ),
  'mongodb\\driver\\server::isarbiter' => 
  array (
    0 => 'bool',
  ),
  'mongodb\\driver\\server::ishidden' => 
  array (
    0 => 'bool',
  ),
  'mongodb\\driver\\server::ispassive' => 
  array (
    0 => 'bool',
  ),
  'mongodb\\driver\\server::isprimary' => 
  array (
    0 => 'bool',
  ),
  'mongodb\\driver\\server::issecondary' => 
  array (
    0 => 'bool',
  ),
  'mongodb\\driver\\serverapi::bsonserialize' => 
  array (
    0 => 'stdClass',
  ),
  'mongodb\\driver\\serverapi::serialize' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\serverapi::unserialize' => 
  array (
    0 => 'void',
    'data' => 'string',
  ),
  'mongodb\\driver\\session::aborttransaction' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\session::advanceclustertime' => 
  array (
    0 => 'void',
    'clusterTime' => 'array<array-key, mixed>|object',
  ),
  'mongodb\\driver\\session::advanceoperationtime' => 
  array (
    0 => 'void',
    'operationTime' => 'MongoDB\\BSON\\TimestampInterface',
  ),
  'mongodb\\driver\\session::committransaction' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\session::endsession' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\session::getclustertime' => 
  array (
    0 => 'null|object',
  ),
  'mongodb\\driver\\session::getlogicalsessionid' => 
  array (
    0 => 'object',
  ),
  'mongodb\\driver\\session::getoperationtime' => 
  array (
    0 => 'MongoDB\\BSON\\Timestamp|null',
  ),
  'mongodb\\driver\\session::getserver' => 
  array (
    0 => 'MongoDB\\Driver\\Server|null',
  ),
  'mongodb\\driver\\session::gettransactionoptions' => 
  array (
    0 => 'array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\session::gettransactionstate' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\session::isintransaction' => 
  array (
    0 => 'bool',
  ),
  'mongodb\\driver\\session::starttransaction' => 
  array (
    0 => 'void',
    'options=' => 'array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\writeconcern::__construct' => 
  array (
    0 => 'void',
    'w' => 'int|string',
    'wtimeout=' => 'int|null',
    'journal=' => 'bool|null',
  ),
  'mongodb\\driver\\writeconcern::bsonserialize' => 
  array (
    0 => 'stdClass',
  ),
  'mongodb\\driver\\writeconcern::getjournal' => 
  array (
    0 => 'bool|null',
  ),
  'mongodb\\driver\\writeconcern::getw' => 
  array (
    0 => 'int|null|string',
  ),
  'mongodb\\driver\\writeconcern::getwtimeout' => 
  array (
    0 => 'int',
  ),
  'mongodb\\driver\\writeconcern::isdefault' => 
  array (
    0 => 'bool',
  ),
  'mongodb\\driver\\writeconcern::serialize' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\writeconcern::unserialize' => 
  array (
    0 => 'void',
    'data' => 'string',
  ),
  'mongodb\\driver\\writeconcernerror::getcode' => 
  array (
    0 => 'int',
  ),
  'mongodb\\driver\\writeconcernerror::getinfo' => 
  array (
    0 => 'null|object',
  ),
  'mongodb\\driver\\writeconcernerror::getmessage' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\writeerror::getcode' => 
  array (
    0 => 'int',
  ),
  'mongodb\\driver\\writeerror::getindex' => 
  array (
    0 => 'int',
  ),
  'mongodb\\driver\\writeerror::getinfo' => 
  array (
    0 => 'null|object',
  ),
  'mongodb\\driver\\writeerror::getmessage' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\writeresult::getdeletedcount' => 
  array (
    0 => 'int|null',
  ),
  'mongodb\\driver\\writeresult::getinsertedcount' => 
  array (
    0 => 'int|null',
  ),
  'mongodb\\driver\\writeresult::getmatchedcount' => 
  array (
    0 => 'int|null',
  ),
  'mongodb\\driver\\writeresult::getmodifiedcount' => 
  array (
    0 => 'int|null',
  ),
  'mongodb\\driver\\writeresult::getserver' => 
  array (
    0 => 'MongoDB\\Driver\\Server',
  ),
  'mongodb\\driver\\writeresult::getupsertedcount' => 
  array (
    0 => 'int|null',
  ),
  'mongodb\\driver\\writeresult::getupsertedids' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongodb\\driver\\writeresult::getwriteconcernerror' => 
  array (
    0 => 'MongoDB\\Driver\\WriteConcernError|null',
  ),
  'mongodb\\driver\\writeresult::getwriteerrors' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongodb\\driver\\writeresult::isacknowledged' => 
  array (
    0 => 'bool',
  ),
  'mongodbref::create' => 
  array (
    0 => 'array<array-key, mixed>',
    'collection' => 'string',
    'id' => 'mixed',
    'database=' => 'string',
  ),
  'mongodbref::get' => 
  array (
    0 => 'array<array-key, mixed>|null',
    'db' => 'MongoDB',
    'ref' => 'array<array-key, mixed>',
  ),
  'mongodbref::isref' => 
  array (
    0 => 'bool',
    'ref' => 'mixed',
  ),
  'mongodeletebatch::__construct' => 
  array (
    0 => 'void',
    'collection' => 'MongoCollection',
    'write_options=' => 'array<array-key, mixed>',
  ),
  'mongoexception::__clone' => 
  array (
    0 => 'void',
  ),
  'mongoexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'string',
    'code=' => 'int',
    'previous=' => 'Exception|Throwable|null',
  ),
  'mongoexception::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongoexception::__wakeup' => 
  array (
    0 => 'void',
  ),
  'mongoexception::getcode' => 
  array (
    0 => 'int',
  ),
  'mongoexception::getfile' => 
  array (
    0 => 'string',
  ),
  'mongoexception::getline' => 
  array (
    0 => 'int',
  ),
  'mongoexception::getmessage' => 
  array (
    0 => 'string',
  ),
  'mongoexception::getprevious' => 
  array (
    0 => 'Exception|Throwable',
  ),
  'mongoexception::gettrace' => 
  array (
    0 => 'list<array{args?: array<array-key, mixed>, class?: class-string, file?: string, function: string, line?: int, type?: \'->\'|\'::\'}>',
  ),
  'mongoexception::gettraceasstring' => 
  array (
    0 => 'string',
  ),
  'mongogridfs::__construct' => 
  array (
    0 => 'void',
    'db' => 'MongoDB',
    'prefix=' => 'string',
    'chunks=' => 'mixed',
  ),
  'mongogridfs::__get' => 
  array (
    0 => 'MongoCollection',
    'name' => 'string',
  ),
  'mongogridfs::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongogridfs::aggregate' => 
  array (
    0 => 'array<array-key, mixed>',
    'pipeline' => 'array<array-key, mixed>',
    'op' => 'array<array-key, mixed>',
    'pipelineOperators' => 'array<array-key, mixed>',
  ),
  'mongogridfs::aggregatecursor' => 
  array (
    0 => 'MongoCommandCursor',
    'pipeline' => 'array<array-key, mixed>',
    'options' => 'array<array-key, mixed>',
  ),
  'mongogridfs::batchinsert' => 
  array (
    0 => 'mixed',
    'a' => 'array<array-key, mixed>',
    'options=' => 'array<array-key, mixed>',
  ),
  'mongogridfs::count' => 
  array (
    0 => 'int',
    'query=' => 'array<array-key, mixed>|stdClass',
  ),
  'mongogridfs::createdbref' => 
  array (
    0 => 'array<array-key, mixed>',
    'a' => 'array<array-key, mixed>',
  ),
  'mongogridfs::createindex' => 
  array (
    0 => 'array<array-key, mixed>',
    'keys' => 'array<array-key, mixed>',
    'options=' => 'array<array-key, mixed>',
  ),
  'mongogridfs::delete' => 
  array (
    0 => 'bool',
    'id' => 'mixed',
  ),
  'mongogridfs::deleteindex' => 
  array (
    0 => 'array<array-key, mixed>',
    'keys' => 'array<array-key, mixed>|string',
  ),
  'mongogridfs::deleteindexes' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongogridfs::distinct' => 
  array (
    0 => 'array<array-key, mixed>|bool',
    'key' => 'string',
    'query=' => 'array<array-key, mixed>|null',
  ),
  'mongogridfs::drop' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongogridfs::ensureindex' => 
  array (
    0 => 'bool',
    'keys' => 'array<array-key, mixed>',
    'options=' => 'array<array-key, mixed>',
  ),
  'mongogridfs::find' => 
  array (
    0 => 'MongoGridFSCursor',
    'query=' => 'array<array-key, mixed>',
    'fields=' => 'array<array-key, mixed>',
  ),
  'mongogridfs::findandmodify' => 
  array (
    0 => 'array<array-key, mixed>',
    'query' => 'array<array-key, mixed>',
    'update=' => 'array<array-key, mixed>|null',
    'fields=' => 'array<array-key, mixed>|null',
    'options=' => 'array<array-key, mixed>|null',
  ),
  'mongogridfs::findone' => 
  array (
    0 => 'MongoGridFSFile|null',
    'query=' => 'mixed',
    'fields=' => 'mixed',
  ),
  'mongogridfs::get' => 
  array (
    0 => 'MongoGridFSFile|null',
    'id' => 'mixed',
  ),
  'mongogridfs::getdbref' => 
  array (
    0 => 'array<array-key, mixed>',
    'ref' => 'array<array-key, mixed>',
  ),
  'mongogridfs::getindexinfo' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongogridfs::getname' => 
  array (
    0 => 'string',
  ),
  'mongogridfs::getreadpreference' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongogridfs::getslaveokay' => 
  array (
    0 => 'bool',
  ),
  'mongogridfs::group' => 
  array (
    0 => 'array<array-key, mixed>',
    'keys' => 'mixed',
    'initial' => 'array<array-key, mixed>',
    'reduce' => 'MongoCode',
    'condition=' => 'array<array-key, mixed>',
  ),
  'mongogridfs::insert' => 
  array (
    0 => 'array<array-key, mixed>|bool',
    'a' => 'array<array-key, mixed>|object',
    'options=' => 'array<array-key, mixed>',
  ),
  'mongogridfs::put' => 
  array (
    0 => 'mixed',
    'filename' => 'string',
    'extra=' => 'array<array-key, mixed>',
  ),
  'mongogridfs::remove' => 
  array (
    0 => 'bool',
    'criteria=' => 'array<array-key, mixed>',
    'options=' => 'array<array-key, mixed>',
  ),
  'mongogridfs::save' => 
  array (
    0 => 'array<array-key, mixed>|bool',
    'a' => 'array<array-key, mixed>|object',
    'options=' => 'array<array-key, mixed>',
  ),
  'mongogridfs::setreadpreference' => 
  array (
    0 => 'bool',
    'read_preference' => 'string',
    'tags' => 'array<array-key, mixed>',
  ),
  'mongogridfs::setslaveokay' => 
  array (
    0 => 'bool',
    'ok=' => 'bool',
  ),
  'mongogridfs::storebytes' => 
  array (
    0 => 'mixed',
    'bytes' => 'string',
    'extra=' => 'array<array-key, mixed>',
    'options=' => 'array<array-key, mixed>',
  ),
  'mongogridfs::storefile' => 
  array (
    0 => 'mixed',
    'filename' => 'string',
    'extra=' => 'array<array-key, mixed>',
    'options=' => 'array<array-key, mixed>',
  ),
  'mongogridfs::storeupload' => 
  array (
    0 => 'mixed',
    'name' => 'string',
    'filename=' => 'string',
  ),
  'mongogridfs::toindexstring' => 
  array (
    0 => 'string',
    'keys' => 'mixed',
  ),
  'mongogridfs::update' => 
  array (
    0 => 'bool',
    'criteria' => 'array<array-key, mixed>',
    'newobj' => 'array<array-key, mixed>',
    'options=' => 'array<array-key, mixed>',
  ),
  'mongogridfs::validate' => 
  array (
    0 => 'array<array-key, mixed>',
    'scan_data=' => 'bool',
  ),
  'mongogridfscursor::__construct' => 
  array (
    0 => 'void',
    'gridfs' => 'MongoGridFS',
    'connection' => 'resource',
    'ns' => 'string',
    'query' => 'array<array-key, mixed>',
    'fields' => 'array<array-key, mixed>',
  ),
  'mongogridfscursor::addoption' => 
  array (
    0 => 'MongoCursor',
    'key' => 'string',
    'value' => 'mixed',
  ),
  'mongogridfscursor::awaitdata' => 
  array (
    0 => 'MongoCursor',
    'wait=' => 'bool',
  ),
  'mongogridfscursor::batchsize' => 
  array (
    0 => 'MongoCursor',
    'batchSize' => 'int',
  ),
  'mongogridfscursor::count' => 
  array (
    0 => 'int',
    'all=' => 'bool',
  ),
  'mongogridfscursor::current' => 
  array (
    0 => 'MongoGridFSFile',
  ),
  'mongogridfscursor::dead' => 
  array (
    0 => 'bool',
  ),
  'mongogridfscursor::doquery' => 
  array (
    0 => 'void',
  ),
  'mongogridfscursor::explain' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongogridfscursor::fields' => 
  array (
    0 => 'MongoCursor',
    'f' => 'array<array-key, mixed>',
  ),
  'mongogridfscursor::getnext' => 
  array (
    0 => 'MongoGridFSFile',
  ),
  'mongogridfscursor::getreadpreference' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongogridfscursor::hasnext' => 
  array (
    0 => 'bool',
  ),
  'mongogridfscursor::hint' => 
  array (
    0 => 'MongoCursor',
    'key_pattern' => 'mixed',
  ),
  'mongogridfscursor::immortal' => 
  array (
    0 => 'MongoCursor',
    'liveForever=' => 'bool',
  ),
  'mongogridfscursor::info' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongogridfscursor::key' => 
  array (
    0 => 'string',
  ),
  'mongogridfscursor::limit' => 
  array (
    0 => 'MongoCursor',
    'num' => 'int',
  ),
  'mongogridfscursor::maxtimems' => 
  array (
    0 => 'MongoCursor',
    'ms' => 'int',
  ),
  'mongogridfscursor::next' => 
  array (
    0 => 'void',
  ),
  'mongogridfscursor::partial' => 
  array (
    0 => 'MongoCursor',
    'okay=' => 'bool',
  ),
  'mongogridfscursor::reset' => 
  array (
    0 => 'void',
  ),
  'mongogridfscursor::rewind' => 
  array (
    0 => 'void',
  ),
  'mongogridfscursor::setflag' => 
  array (
    0 => 'MongoCursor',
    'flag' => 'int',
    'set=' => 'bool',
  ),
  'mongogridfscursor::setreadpreference' => 
  array (
    0 => 'MongoCursor',
    'read_preference' => 'string',
    'tags' => 'array<array-key, mixed>',
  ),
  'mongogridfscursor::skip' => 
  array (
    0 => 'MongoCursor',
    'num' => 'int',
  ),
  'mongogridfscursor::slaveokay' => 
  array (
    0 => 'MongoCursor',
    'okay=' => 'bool',
  ),
  'mongogridfscursor::snapshot' => 
  array (
    0 => 'MongoCursor',
  ),
  'mongogridfscursor::sort' => 
  array (
    0 => 'MongoCursor',
    'fields' => 'array<array-key, mixed>',
  ),
  'mongogridfscursor::tailable' => 
  array (
    0 => 'MongoCursor',
    'tail=' => 'bool',
  ),
  'mongogridfscursor::timeout' => 
  array (
    0 => 'MongoCursor',
    'ms' => 'int',
  ),
  'mongogridfscursor::valid' => 
  array (
    0 => 'bool',
  ),
  'mongogridfsfile::__construct' => 
  array (
    0 => 'void',
    'gridfs' => 'MongoGridFS',
    'file' => 'array<array-key, mixed>',
  ),
  'mongogridfsfile::getbytes' => 
  array (
    0 => 'string',
  ),
  'mongogridfsfile::getfilename' => 
  array (
    0 => 'string',
  ),
  'mongogridfsfile::getresource' => 
  array (
    0 => 'resource',
  ),
  'mongogridfsfile::getsize' => 
  array (
    0 => 'int',
  ),
  'mongogridfsfile::write' => 
  array (
    0 => 'int',
    'filename=' => 'string',
  ),
  'mongoid::__construct' => 
  array (
    0 => 'void',
    'id=' => 'MongoId|string',
  ),
  'mongoid::__set_state' => 
  array (
    0 => 'MongoId',
    'props' => 'array<array-key, mixed>',
  ),
  'mongoid::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongoid::gethostname' => 
  array (
    0 => 'string',
  ),
  'mongoid::getinc' => 
  array (
    0 => 'int',
  ),
  'mongoid::getpid' => 
  array (
    0 => 'int',
  ),
  'mongoid::gettimestamp' => 
  array (
    0 => 'int',
  ),
  'mongoid::isvalid' => 
  array (
    0 => 'bool',
    'value' => 'mixed',
  ),
  'mongoinsertbatch::__construct' => 
  array (
    0 => 'void',
    'collection' => 'MongoCollection',
    'write_options=' => 'array<array-key, mixed>',
  ),
  'mongoint32::__construct' => 
  array (
    0 => 'void',
    'value' => 'string',
  ),
  'mongoint32::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongoint64::__construct' => 
  array (
    0 => 'void',
    'value' => 'string',
  ),
  'mongoint64::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongolog::getcallback' => 
  array (
    0 => 'callable',
  ),
  'mongolog::getlevel' => 
  array (
    0 => 'int',
  ),
  'mongolog::getmodule' => 
  array (
    0 => 'int',
  ),
  'mongolog::setcallback' => 
  array (
    0 => 'void',
    'log_function' => 'callable',
  ),
  'mongolog::setlevel' => 
  array (
    0 => 'void',
    'level' => 'int',
  ),
  'mongolog::setmodule' => 
  array (
    0 => 'void',
    'module' => 'int',
  ),
  'mongopool::getsize' => 
  array (
    0 => 'int',
  ),
  'mongopool::info' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongopool::setsize' => 
  array (
    0 => 'bool',
    'size' => 'int',
  ),
  'mongoregex::__construct' => 
  array (
    0 => 'void',
    'regex' => 'string',
  ),
  'mongoregex::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongoresultexception::__clone' => 
  array (
    0 => 'void',
  ),
  'mongoresultexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'string',
    'code=' => 'int',
    'previous=' => 'Exception|Throwable|null',
  ),
  'mongoresultexception::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongoresultexception::__wakeup' => 
  array (
    0 => 'void',
  ),
  'mongoresultexception::getcode' => 
  array (
    0 => 'int',
  ),
  'mongoresultexception::getdocument' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongoresultexception::getfile' => 
  array (
    0 => 'string',
  ),
  'mongoresultexception::getline' => 
  array (
    0 => 'int',
  ),
  'mongoresultexception::getmessage' => 
  array (
    0 => 'string',
  ),
  'mongoresultexception::getprevious' => 
  array (
    0 => 'Exception|Throwable',
  ),
  'mongoresultexception::gettrace' => 
  array (
    0 => 'list<array{args?: array<array-key, mixed>, class?: class-string, file?: string, function: string, line?: int, type?: \'->\'|\'::\'}>',
  ),
  'mongoresultexception::gettraceasstring' => 
  array (
    0 => 'string',
  ),
  'mongotimestamp::__construct' => 
  array (
    0 => 'void',
    'second=' => 'int',
    'inc=' => 'int',
  ),
  'mongotimestamp::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongoupdatebatch::__construct' => 
  array (
    0 => 'void',
    'collection' => 'MongoCollection',
    'write_options=' => 'array<array-key, mixed>',
  ),
  'mongoupdatebatch::add' => 
  array (
    0 => 'bool',
    'item' => 'array<array-key, mixed>',
  ),
  'mongoupdatebatch::execute' => 
  array (
    0 => 'array<array-key, mixed>',
    'write_options' => 'array<array-key, mixed>',
  ),
  'mongowritebatch::__construct' => 
  array (
    0 => 'void',
    'collection' => 'MongoCollection',
    'batch_type' => 'string',
    'write_options' => 'array<array-key, mixed>',
  ),
  'mongowritebatch::add' => 
  array (
    0 => 'bool',
    'item' => 'array<array-key, mixed>',
  ),
  'mongowritebatch::execute' => 
  array (
    0 => 'array<array-key, mixed>',
    'write_options' => 'array<array-key, mixed>',
  ),
  'mongowriteconcernexception::__clone' => 
  array (
    0 => 'void',
  ),
  'mongowriteconcernexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'string',
    'code=' => 'int',
    'previous=' => 'Exception|Throwable|null',
  ),
  'mongowriteconcernexception::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongowriteconcernexception::__wakeup' => 
  array (
    0 => 'void',
  ),
  'mongowriteconcernexception::getcode' => 
  array (
    0 => 'int',
  ),
  'mongowriteconcernexception::getdocument' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongowriteconcernexception::getfile' => 
  array (
    0 => 'string',
  ),
  'mongowriteconcernexception::getline' => 
  array (
    0 => 'int',
  ),
  'mongowriteconcernexception::getmessage' => 
  array (
    0 => 'string',
  ),
  'mongowriteconcernexception::getprevious' => 
  array (
    0 => 'Exception|Throwable',
  ),
  'mongowriteconcernexception::gettrace' => 
  array (
    0 => 'list<array{args?: array<array-key, mixed>, class?: class-string, file?: string, function: string, line?: int, type?: \'->\'|\'::\'}>',
  ),
  'mongowriteconcernexception::gettraceasstring' => 
  array (
    0 => 'string',
  ),
  'monitor_custom_event' => 
  array (
    0 => 'void',
    'class' => 'string',
    'text' => 'string',
    'severe=' => 'int',
    'user_data=' => 'mixed',
  ),
  'monitor_httperror_event' => 
  array (
    0 => 'void',
    'error_code' => 'int',
    'url' => 'string',
    'severe=' => 'int',
  ),
  'monitor_license_info' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'monitor_pass_error' => 
  array (
    0 => 'void',
    'errno' => 'int',
    'errstr' => 'string',
    'errfile' => 'string',
    'errline' => 'int',
  ),
  'monitor_set_aggregation_hint' => 
  array (
    0 => 'void',
    'hint' => 'string',
  ),
  'move_uploaded_file' => 
  array (
    0 => 'bool',
    'from' => 'string',
    'to' => 'string',
  ),
  'mqseries_back' => 
  array (
    0 => 'void',
    'hconn' => 'resource',
    'compcode' => 'resource',
    'reason' => 'resource',
  ),
  'mqseries_begin' => 
  array (
    0 => 'void',
    'hconn' => 'resource',
    'beginoptions' => 'array<array-key, mixed>',
    'compcode' => 'resource',
    'reason' => 'resource',
  ),
  'mqseries_close' => 
  array (
    0 => 'void',
    'hconn' => 'resource',
    'hobj' => 'resource',
    'options' => 'int',
    'compcode' => 'resource',
    'reason' => 'resource',
  ),
  'mqseries_cmit' => 
  array (
    0 => 'void',
    'hconn' => 'resource',
    'compcode' => 'resource',
    'reason' => 'resource',
  ),
  'mqseries_conn' => 
  array (
    0 => 'void',
    'qmanagername' => 'string',
    'hconn' => 'resource',
    'compcode' => 'resource',
    'reason' => 'resource',
  ),
  'mqseries_connx' => 
  array (
    0 => 'void',
    'qmanagername' => 'string',
    'connoptions' => 'array<array-key, mixed>',
    'hconn' => 'resource',
    'compcode' => 'resource',
    'reason' => 'resource',
  ),
  'mqseries_disc' => 
  array (
    0 => 'void',
    'hconn' => 'resource',
    'compcode' => 'resource',
    'reason' => 'resource',
  ),
  'mqseries_get' => 
  array (
    0 => 'void',
    'hconn' => 'resource',
    'hobj' => 'resource',
    'md' => 'array<array-key, mixed>',
    'gmo' => 'array<array-key, mixed>',
    'bufferlength' => 'int',
    'msg' => 'string',
    'data_length' => 'int',
    'compcode' => 'resource',
    'reason' => 'resource',
  ),
  'mqseries_inq' => 
  array (
    0 => 'void',
    'hconn' => 'resource',
    'hobj' => 'resource',
    'selectorcount' => 'int',
    'selectors' => 'array<array-key, mixed>',
    'intattrcount' => 'int',
    'intattr' => 'resource',
    'charattrlength' => 'int',
    'charattr' => 'resource',
    'compcode' => 'resource',
    'reason' => 'resource',
  ),
  'mqseries_open' => 
  array (
    0 => 'void',
    'hconn' => 'resource',
    'objdesc' => 'array<array-key, mixed>',
    'option' => 'int',
    'hobj' => 'resource',
    'compcode' => 'resource',
    'reason' => 'resource',
  ),
  'mqseries_put' => 
  array (
    0 => 'void',
    'hconn' => 'resource',
    'hobj' => 'resource',
    'md' => 'array<array-key, mixed>',
    'pmo' => 'array<array-key, mixed>',
    'message' => 'string',
    'compcode' => 'resource',
    'reason' => 'resource',
  ),
  'mqseries_put1' => 
  array (
    0 => 'void',
    'hconn' => 'resource',
    'objdesc' => 'resource',
    'msgdesc' => 'resource',
    'pmo' => 'resource',
    'buffer' => 'string',
    'compcode' => 'resource',
    'reason' => 'resource',
  ),
  'mqseries_set' => 
  array (
    0 => 'void',
    'hconn' => 'resource',
    'hobj' => 'resource',
    'selectorcount' => 'int',
    'selectors' => 'array<array-key, mixed>',
    'intattrcount' => 'int',
    'intattrs' => 'array<array-key, mixed>',
    'charattrlength' => 'int',
    'charattrs' => 'array<array-key, mixed>',
    'compcode' => 'resource',
    'reason' => 'resource',
  ),
  'mqseries_strerror' => 
  array (
    0 => 'string',
    'reason' => 'int',
  ),
  'ms_geterrorobj' => 
  array (
    0 => 'errorObj',
  ),
  'ms_getversion' => 
  array (
    0 => 'string',
  ),
  'ms_getversionint' => 
  array (
    0 => 'int',
  ),
  'ms_iogetstdoutbufferbytes' => 
  array (
    0 => 'int',
  ),
  'ms_iogetstdoutbufferstring' => 
  array (
    0 => 'void',
  ),
  'ms_ioinstallstdinfrombuffer' => 
  array (
    0 => 'void',
  ),
  'ms_ioinstallstdouttobuffer' => 
  array (
    0 => 'void',
  ),
  'ms_ioresethandlers' => 
  array (
    0 => 'void',
  ),
  'ms_iostripstdoutbuffercontentheaders' => 
  array (
    0 => 'void',
  ),
  'ms_iostripstdoutbuffercontenttype' => 
  array (
    0 => 'string',
  ),
  'ms_reseterrorlist' => 
  array (
    0 => 'void',
  ),
  'ms_tokenizemap' => 
  array (
    0 => 'array<array-key, mixed>',
    'map_file_name' => 'string',
  ),
  'msession_connect' => 
  array (
    0 => 'bool',
    'host' => 'string',
    'port' => 'string',
  ),
  'msession_count' => 
  array (
    0 => 'int',
  ),
  'msession_create' => 
  array (
    0 => 'bool',
    'session' => 'string',
    'classname=' => 'string',
    'data=' => 'string',
  ),
  'msession_destroy' => 
  array (
    0 => 'bool',
    'name' => 'string',
  ),
  'msession_disconnect' => 
  array (
    0 => 'void',
  ),
  'msession_find' => 
  array (
    0 => 'array<array-key, mixed>',
    'name' => 'string',
    'value' => 'string',
  ),
  'msession_get' => 
  array (
    0 => 'string',
    'session' => 'string',
    'name' => 'string',
    'value' => 'string',
  ),
  'msession_get_array' => 
  array (
    0 => 'array<array-key, mixed>',
    'session' => 'string',
  ),
  'msession_get_data' => 
  array (
    0 => 'string',
    'session' => 'string',
  ),
  'msession_inc' => 
  array (
    0 => 'string',
    'session' => 'string',
    'name' => 'string',
  ),
  'msession_list' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'msession_listvar' => 
  array (
    0 => 'array<array-key, mixed>',
    'name' => 'string',
  ),
  'msession_lock' => 
  array (
    0 => 'int',
    'name' => 'string',
  ),
  'msession_plugin' => 
  array (
    0 => 'string',
    'session' => 'string',
    'value' => 'string',
    'param=' => 'string',
  ),
  'msession_randstr' => 
  array (
    0 => 'string',
    'param' => 'int',
  ),
  'msession_set' => 
  array (
    0 => 'bool',
    'session' => 'string',
    'name' => 'string',
    'value' => 'string',
  ),
  'msession_set_array' => 
  array (
    0 => 'void',
    'session' => 'string',
    'tuples' => 'array<array-key, mixed>',
  ),
  'msession_set_data' => 
  array (
    0 => 'bool',
    'session' => 'string',
    'value' => 'string',
  ),
  'msession_timeout' => 
  array (
    0 => 'int',
    'session' => 'string',
    'param=' => 'int',
  ),
  'msession_uniq' => 
  array (
    0 => 'string',
    'param' => 'int',
    'classname=' => 'string',
    'data=' => 'string',
  ),
  'msession_unlock' => 
  array (
    0 => 'int',
    'session' => 'string',
    'key' => 'int',
  ),
  'msg_get_queue' => 
  array (
    0 => 'SysvMessageQueue|false',
    'key' => 'int',
    'permissions=' => 'int',
  ),
  'msg_queue_exists' => 
  array (
    0 => 'bool',
    'key' => 'int',
  ),
  'msg_receive' => 
  array (
    0 => 'bool',
    'queue' => 'SysvMessageQueue',
    'desired_message_type' => 'int',
    '&w_received_message_type' => 'int',
    'max_message_size' => 'int',
    '&w_message' => 'mixed',
    'unserialize=' => 'bool',
    'flags=' => 'int',
    '&w_error_code=' => 'int',
  ),
  'msg_remove_queue' => 
  array (
    0 => 'bool',
    'queue' => 'SysvMessageQueue',
  ),
  'msg_send' => 
  array (
    0 => 'bool',
    'queue' => 'SysvMessageQueue',
    'message_type' => 'int',
    'message' => 'mixed',
    'serialize=' => 'bool',
    'blocking=' => 'bool',
    '&w_error_code=' => 'int',
  ),
  'msg_set_queue' => 
  array (
    0 => 'bool',
    'queue' => 'SysvMessageQueue',
    'data' => 'array<array-key, mixed>',
  ),
  'msg_stat_queue' => 
  array (
    0 => 'array<array-key, mixed>',
    'queue' => 'SysvMessageQueue',
  ),
  'msgfmt_create' => 
  array (
    0 => 'MessageFormatter|null',
    'locale' => 'string',
    'pattern' => 'string',
  ),
  'msgfmt_format' => 
  array (
    0 => 'false|string',
    'formatter' => 'MessageFormatter',
    'values' => 'array<array-key, mixed>',
  ),
  'msgfmt_format_message' => 
  array (
    0 => 'false|string',
    'locale' => 'string',
    'pattern' => 'string',
    'values' => 'array<array-key, mixed>',
  ),
  'msgfmt_get_error_code' => 
  array (
    0 => 'int',
    'formatter' => 'MessageFormatter',
  ),
  'msgfmt_get_error_message' => 
  array (
    0 => 'string',
    'formatter' => 'MessageFormatter',
  ),
  'msgfmt_get_locale' => 
  array (
    0 => 'string',
    'formatter' => 'MessageFormatter',
  ),
  'msgfmt_get_pattern' => 
  array (
    0 => 'string',
    'formatter' => 'MessageFormatter',
  ),
  'msgfmt_parse' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'formatter' => 'MessageFormatter',
    'string' => 'string',
  ),
  'msgfmt_parse_message' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'locale' => 'string',
    'pattern' => 'string',
    'message' => 'string',
  ),
  'msgfmt_set_pattern' => 
  array (
    0 => 'bool',
    'formatter' => 'MessageFormatter',
    'pattern' => 'string',
  ),
  'msql_affected_rows' => 
  array (
    0 => 'int',
    'result' => 'resource',
  ),
  'msql_close' => 
  array (
    0 => 'bool',
    'link_identifier=' => 'null|resource',
  ),
  'msql_connect' => 
  array (
    0 => 'resource',
    'hostname=' => 'string',
  ),
  'msql_create_db' => 
  array (
    0 => 'bool',
    'database_name' => 'string',
    'link_identifier=' => 'null|resource',
  ),
  'msql_data_seek' => 
  array (
    0 => 'bool',
    'result' => 'resource',
    'row_number' => 'int',
  ),
  'msql_db_query' => 
  array (
    0 => 'resource',
    'database' => 'string',
    'query' => 'string',
    'link_identifier=' => 'null|resource',
  ),
  'msql_drop_db' => 
  array (
    0 => 'bool',
    'database_name' => 'string',
    'link_identifier=' => 'null|resource',
  ),
  'msql_error' => 
  array (
    0 => 'string',
  ),
  'msql_fetch_array' => 
  array (
    0 => 'array<array-key, mixed>',
    'result' => 'resource',
    'result_type=' => 'int',
  ),
  'msql_fetch_field' => 
  array (
    0 => 'object',
    'result' => 'resource',
    'field_offset=' => 'int',
  ),
  'msql_fetch_object' => 
  array (
    0 => 'object',
    'result' => 'resource',
  ),
  'msql_fetch_row' => 
  array (
    0 => 'array<array-key, mixed>',
    'result' => 'resource',
  ),
  'msql_field_flags' => 
  array (
    0 => 'string',
    'result' => 'resource',
    'field_offset' => 'int',
  ),
  'msql_field_len' => 
  array (
    0 => 'int',
    'result' => 'resource',
    'field_offset' => 'int',
  ),
  'msql_field_name' => 
  array (
    0 => 'string',
    'result' => 'resource',
    'field_offset' => 'int',
  ),
  'msql_field_seek' => 
  array (
    0 => 'bool',
    'result' => 'resource',
    'field_offset' => 'int',
  ),
  'msql_field_table' => 
  array (
    0 => 'int',
    'result' => 'resource',
    'field_offset' => 'int',
  ),
  'msql_field_type' => 
  array (
    0 => 'string',
    'result' => 'resource',
    'field_offset' => 'int',
  ),
  'msql_free_result' => 
  array (
    0 => 'bool',
    'result' => 'resource',
  ),
  'msql_list_dbs' => 
  array (
    0 => 'resource',
    'link_identifier=' => 'null|resource',
  ),
  'msql_list_fields' => 
  array (
    0 => 'resource',
    'database' => 'string',
    'tablename' => 'string',
    'link_identifier=' => 'null|resource',
  ),
  'msql_list_tables' => 
  array (
    0 => 'resource',
    'database' => 'string',
    'link_identifier=' => 'null|resource',
  ),
  'msql_num_fields' => 
  array (
    0 => 'int',
    'result' => 'resource',
  ),
  'msql_num_rows' => 
  array (
    0 => 'int',
    'query_identifier' => 'resource',
  ),
  'msql_pconnect' => 
  array (
    0 => 'resource',
    'hostname=' => 'string',
  ),
  'msql_query' => 
  array (
    0 => 'resource',
    'query' => 'string',
    'link_identifier=' => 'null|resource',
  ),
  'msql_result' => 
  array (
    0 => 'string',
    'result' => 'resource',
    'row' => 'int',
    'field=' => 'mixed',
  ),
  'msql_select_db' => 
  array (
    0 => 'bool',
    'database_name' => 'string',
    'link_identifier=' => 'null|resource',
  ),
  'mt_getrandmax' => 
  array (
    0 => 'int<1, max>',
  ),
  'mt_rand' => 
  array (
    0 => 'int',
    'min=' => 'int',
    'max=' => 'int',
  ),
  'mt_rand\'1' => 
  array (
    0 => 'int',
  ),
  'mt_srand' => 
  array (
    0 => 'void',
    'seed=' => 'int|null',
    'mode=' => 'int',
  ),
  'multipleiterator::__construct' => 
  array (
    0 => 'void',
    'flags=' => 'int',
  ),
  'multipleiterator::attachiterator' => 
  array (
    0 => 'void',
    'iterator' => 'Iterator',
    'info=' => 'int|null|string',
  ),
  'multipleiterator::containsiterator' => 
  array (
    0 => 'bool',
    'iterator' => 'Iterator',
  ),
  'multipleiterator::countiterators' => 
  array (
    0 => 'int',
  ),
  'multipleiterator::current' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'multipleiterator::detachiterator' => 
  array (
    0 => 'void',
    'iterator' => 'Iterator',
  ),
  'multipleiterator::getflags' => 
  array (
    0 => 'int',
  ),
  'multipleiterator::key' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'multipleiterator::next' => 
  array (
    0 => 'void',
  ),
  'multipleiterator::rewind' => 
  array (
    0 => 'void',
  ),
  'multipleiterator::setflags' => 
  array (
    0 => 'void',
    'flags' => 'int',
  ),
  'multipleiterator::valid' => 
  array (
    0 => 'bool',
  ),
  'mutex::create' => 
  array (
    0 => 'long',
    'lock=' => 'bool',
  ),
  'mutex::destroy' => 
  array (
    0 => 'bool',
    'mutex' => 'long',
  ),
  'mutex::lock' => 
  array (
    0 => 'bool',
    'mutex' => 'long',
  ),
  'mutex::trylock' => 
  array (
    0 => 'bool',
    'mutex' => 'long',
  ),
  'mutex::unlock' => 
  array (
    0 => 'bool',
    'mutex' => 'long',
    'destroy=' => 'bool',
  ),
  'mysql_xdevapi\\baseresult::getwarnings' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mysql_xdevapi\\baseresult::getwarningscount' => 
  array (
    0 => 'int',
  ),
  'mysql_xdevapi\\collection::add' => 
  array (
    0 => 'mysql_xdevapi\\CollectionAdd',
    'document' => 'mixed',
  ),
  'mysql_xdevapi\\collection::addorreplaceone' => 
  array (
    0 => 'mysql_xdevapi\\Result',
    'id' => 'string',
    'doc' => 'string',
  ),
  'mysql_xdevapi\\collection::count' => 
  array (
    0 => 'int',
  ),
  'mysql_xdevapi\\collection::createindex' => 
  array (
    0 => 'void',
    'index_name' => 'string',
    'index_desc_json' => 'string',
  ),
  'mysql_xdevapi\\collection::dropindex' => 
  array (
    0 => 'bool',
    'index_name' => 'string',
  ),
  'mysql_xdevapi\\collection::existsindatabase' => 
  array (
    0 => 'bool',
  ),
  'mysql_xdevapi\\collection::find' => 
  array (
    0 => 'mysql_xdevapi\\CollectionFind',
    'search_condition=' => 'string',
  ),
  'mysql_xdevapi\\collection::getname' => 
  array (
    0 => 'string',
  ),
  'mysql_xdevapi\\collection::getone' => 
  array (
    0 => 'Document',
    'id' => 'string',
  ),
  'mysql_xdevapi\\collection::getschema' => 
  array (
    0 => 'mysql_xdevapi\\schema',
  ),
  'mysql_xdevapi\\collection::getsession' => 
  array (
    0 => 'Session',
  ),
  'mysql_xdevapi\\collection::modify' => 
  array (
    0 => 'mysql_xdevapi\\CollectionModify',
    'search_condition' => 'string',
  ),
  'mysql_xdevapi\\collection::remove' => 
  array (
    0 => 'mysql_xdevapi\\CollectionRemove',
    'search_condition' => 'string',
  ),
  'mysql_xdevapi\\collection::removeone' => 
  array (
    0 => 'mysql_xdevapi\\Result',
    'id' => 'string',
  ),
  'mysql_xdevapi\\collection::replaceone' => 
  array (
    0 => 'mysql_xdevapi\\Result',
    'id' => 'string',
    'doc' => 'string',
  ),
  'mysql_xdevapi\\collectionadd::execute' => 
  array (
    0 => 'mysql_xdevapi\\Result',
  ),
  'mysql_xdevapi\\collectionfind::bind' => 
  array (
    0 => 'mysql_xdevapi\\CollectionFind',
    'placeholder_values' => 'array<array-key, mixed>',
  ),
  'mysql_xdevapi\\collectionfind::execute' => 
  array (
    0 => 'mysql_xdevapi\\DocResult',
  ),
  'mysql_xdevapi\\collectionfind::fields' => 
  array (
    0 => 'mysql_xdevapi\\CollectionFind',
    'projection' => 'string',
  ),
  'mysql_xdevapi\\collectionfind::groupby' => 
  array (
    0 => 'mysql_xdevapi\\CollectionFind',
    'sort_expr' => 'string',
  ),
  'mysql_xdevapi\\collectionfind::having' => 
  array (
    0 => 'mysql_xdevapi\\CollectionFind',
    'sort_expr' => 'string',
  ),
  'mysql_xdevapi\\collectionfind::limit' => 
  array (
    0 => 'mysql_xdevapi\\CollectionFind',
    'rows' => 'int',
  ),
  'mysql_xdevapi\\collectionfind::lockexclusive' => 
  array (
    0 => 'mysql_xdevapi\\CollectionFind',
    'lock_waiting_option=' => 'int',
  ),
  'mysql_xdevapi\\collectionfind::lockshared' => 
  array (
    0 => 'mysql_xdevapi\\CollectionFind',
    'lock_waiting_option=' => 'int',
  ),
  'mysql_xdevapi\\collectionfind::offset' => 
  array (
    0 => 'mysql_xdevapi\\CollectionFind',
    'position' => 'int',
  ),
  'mysql_xdevapi\\collectionfind::sort' => 
  array (
    0 => 'mysql_xdevapi\\CollectionFind',
    'sort_expr' => 'string',
  ),
  'mysql_xdevapi\\collectionmodify::arrayappend' => 
  array (
    0 => 'mysql_xdevapi\\CollectionModify',
    'collection_field' => 'string',
    'expression_or_literal' => 'string',
  ),
  'mysql_xdevapi\\collectionmodify::arrayinsert' => 
  array (
    0 => 'mysql_xdevapi\\CollectionModify',
    'collection_field' => 'string',
    'expression_or_literal' => 'string',
  ),
  'mysql_xdevapi\\collectionmodify::bind' => 
  array (
    0 => 'mysql_xdevapi\\CollectionModify',
    'placeholder_values' => 'array<array-key, mixed>',
  ),
  'mysql_xdevapi\\collectionmodify::execute' => 
  array (
    0 => 'mysql_xdevapi\\Result',
  ),
  'mysql_xdevapi\\collectionmodify::limit' => 
  array (
    0 => 'mysql_xdevapi\\CollectionModify',
    'rows' => 'int',
  ),
  'mysql_xdevapi\\collectionmodify::patch' => 
  array (
    0 => 'mysql_xdevapi\\CollectionModify',
    'document' => 'string',
  ),
  'mysql_xdevapi\\collectionmodify::replace' => 
  array (
    0 => 'mysql_xdevapi\\CollectionModify',
    'collection_field' => 'string',
    'expression_or_literal' => 'string',
  ),
  'mysql_xdevapi\\collectionmodify::set' => 
  array (
    0 => 'mysql_xdevapi\\CollectionModify',
    'collection_field' => 'string',
    'expression_or_literal' => 'string',
  ),
  'mysql_xdevapi\\collectionmodify::skip' => 
  array (
    0 => 'mysql_xdevapi\\CollectionModify',
    'position' => 'int',
  ),
  'mysql_xdevapi\\collectionmodify::sort' => 
  array (
    0 => 'mysql_xdevapi\\CollectionModify',
    'sort_expr' => 'string',
  ),
  'mysql_xdevapi\\collectionmodify::unset' => 
  array (
    0 => 'mysql_xdevapi\\CollectionModify',
    'fields' => 'array<array-key, mixed>',
  ),
  'mysql_xdevapi\\collectionremove::bind' => 
  array (
    0 => 'mysql_xdevapi\\CollectionRemove',
    'placeholder_values' => 'array<array-key, mixed>',
  ),
  'mysql_xdevapi\\collectionremove::execute' => 
  array (
    0 => 'mysql_xdevapi\\Result',
  ),
  'mysql_xdevapi\\collectionremove::limit' => 
  array (
    0 => 'mysql_xdevapi\\CollectionRemove',
    'rows' => 'int',
  ),
  'mysql_xdevapi\\collectionremove::sort' => 
  array (
    0 => 'mysql_xdevapi\\CollectionRemove',
    'sort_expr' => 'string',
  ),
  'mysql_xdevapi\\columnresult::getcharactersetname' => 
  array (
    0 => 'string',
  ),
  'mysql_xdevapi\\columnresult::getcollationname' => 
  array (
    0 => 'string',
  ),
  'mysql_xdevapi\\columnresult::getcolumnlabel' => 
  array (
    0 => 'string',
  ),
  'mysql_xdevapi\\columnresult::getcolumnname' => 
  array (
    0 => 'string',
  ),
  'mysql_xdevapi\\columnresult::getfractionaldigits' => 
  array (
    0 => 'int',
  ),
  'mysql_xdevapi\\columnresult::getlength' => 
  array (
    0 => 'int',
  ),
  'mysql_xdevapi\\columnresult::getschemaname' => 
  array (
    0 => 'string',
  ),
  'mysql_xdevapi\\columnresult::gettablelabel' => 
  array (
    0 => 'string',
  ),
  'mysql_xdevapi\\columnresult::gettablename' => 
  array (
    0 => 'string',
  ),
  'mysql_xdevapi\\columnresult::gettype' => 
  array (
    0 => 'int',
  ),
  'mysql_xdevapi\\columnresult::isnumbersigned' => 
  array (
    0 => 'int',
  ),
  'mysql_xdevapi\\columnresult::ispadded' => 
  array (
    0 => 'int',
  ),
  'mysql_xdevapi\\crudoperationbindable::bind' => 
  array (
    0 => 'mysql_xdevapi\\CrudOperationBindable',
    'placeholder_values' => 'array<array-key, mixed>',
  ),
  'mysql_xdevapi\\crudoperationlimitable::limit' => 
  array (
    0 => 'mysql_xdevapi\\CrudOperationLimitable',
    'rows' => 'int',
  ),
  'mysql_xdevapi\\crudoperationskippable::skip' => 
  array (
    0 => 'mysql_xdevapi\\CrudOperationSkippable',
    'skip' => 'int',
  ),
  'mysql_xdevapi\\crudoperationsortable::sort' => 
  array (
    0 => 'mysql_xdevapi\\CrudOperationSortable',
    'sort_expr' => 'string',
  ),
  'mysql_xdevapi\\databaseobject::existsindatabase' => 
  array (
    0 => 'bool',
  ),
  'mysql_xdevapi\\databaseobject::getname' => 
  array (
    0 => 'string',
  ),
  'mysql_xdevapi\\databaseobject::getsession' => 
  array (
    0 => 'mysql_xdevapi\\Session',
  ),
  'mysql_xdevapi\\docresult::fetchall' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mysql_xdevapi\\docresult::fetchone' => 
  array (
    0 => 'object',
  ),
  'mysql_xdevapi\\docresult::getwarnings' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mysql_xdevapi\\docresult::getwarningscount' => 
  array (
    0 => 'int',
  ),
  'mysql_xdevapi\\executable::execute' => 
  array (
    0 => 'mysql_xdevapi\\Result',
  ),
  'mysql_xdevapi\\getsession' => 
  array (
    0 => 'mysql_xdevapi\\Session',
    'uri' => 'string',
  ),
  'mysql_xdevapi\\result::getautoincrementvalue' => 
  array (
    0 => 'int',
  ),
  'mysql_xdevapi\\result::getgeneratedids' => 
  array (
    0 => 'ArrayOfInt',
  ),
  'mysql_xdevapi\\result::getwarnings' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mysql_xdevapi\\result::getwarningscount' => 
  array (
    0 => 'int',
  ),
  'mysql_xdevapi\\rowresult::fetchall' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mysql_xdevapi\\rowresult::fetchone' => 
  array (
    0 => 'object',
  ),
  'mysql_xdevapi\\rowresult::getcolumncount' => 
  array (
    0 => 'int',
  ),
  'mysql_xdevapi\\rowresult::getcolumnnames' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mysql_xdevapi\\rowresult::getcolumns' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mysql_xdevapi\\rowresult::getwarnings' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mysql_xdevapi\\rowresult::getwarningscount' => 
  array (
    0 => 'int',
  ),
  'mysql_xdevapi\\schema::createcollection' => 
  array (
    0 => 'mysql_xdevapi\\Collection',
    'name' => 'string',
  ),
  'mysql_xdevapi\\schema::dropcollection' => 
  array (
    0 => 'bool',
    'collection_name' => 'string',
  ),
  'mysql_xdevapi\\schema::existsindatabase' => 
  array (
    0 => 'bool',
  ),
  'mysql_xdevapi\\schema::getcollection' => 
  array (
    0 => 'mysql_xdevapi\\Collection',
    'name' => 'string',
  ),
  'mysql_xdevapi\\schema::getcollectionastable' => 
  array (
    0 => 'mysql_xdevapi\\Table',
    'name' => 'string',
  ),
  'mysql_xdevapi\\schema::getcollections' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mysql_xdevapi\\schema::getname' => 
  array (
    0 => 'string',
  ),
  'mysql_xdevapi\\schema::getsession' => 
  array (
    0 => 'mysql_xdevapi\\Session',
  ),
  'mysql_xdevapi\\schema::gettable' => 
  array (
    0 => 'mysql_xdevapi\\Table',
    'name' => 'string',
  ),
  'mysql_xdevapi\\schema::gettables' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mysql_xdevapi\\schemaobject::getschema' => 
  array (
    0 => 'mysql_xdevapi\\Schema',
  ),
  'mysql_xdevapi\\session::close' => 
  array (
    0 => 'bool',
  ),
  'mysql_xdevapi\\session::commit' => 
  array (
    0 => 'object',
  ),
  'mysql_xdevapi\\session::createschema' => 
  array (
    0 => 'mysql_xdevapi\\Schema',
    'schema_name' => 'string',
  ),
  'mysql_xdevapi\\session::dropschema' => 
  array (
    0 => 'bool',
    'schema_name' => 'string',
  ),
  'mysql_xdevapi\\session::executesql' => 
  array (
    0 => 'object',
    'statement' => 'string',
  ),
  'mysql_xdevapi\\session::generateuuid' => 
  array (
    0 => 'string',
  ),
  'mysql_xdevapi\\session::getclientid' => 
  array (
    0 => 'int',
  ),
  'mysql_xdevapi\\session::getschema' => 
  array (
    0 => 'mysql_xdevapi\\Schema',
    'schema_name' => 'string',
  ),
  'mysql_xdevapi\\session::getschemas' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mysql_xdevapi\\session::getserverversion' => 
  array (
    0 => 'int',
  ),
  'mysql_xdevapi\\session::killclient' => 
  array (
    0 => 'object',
    'client_id' => 'int',
  ),
  'mysql_xdevapi\\session::listclients' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mysql_xdevapi\\session::quotename' => 
  array (
    0 => 'string',
    'name' => 'string',
  ),
  'mysql_xdevapi\\session::releasesavepoint' => 
  array (
    0 => 'void',
    'name' => 'string',
  ),
  'mysql_xdevapi\\session::rollback' => 
  array (
    0 => 'void',
  ),
  'mysql_xdevapi\\session::rollbackto' => 
  array (
    0 => 'void',
    'name' => 'string',
  ),
  'mysql_xdevapi\\session::setsavepoint' => 
  array (
    0 => 'string',
    'name=' => 'string',
  ),
  'mysql_xdevapi\\session::sql' => 
  array (
    0 => 'mysql_xdevapi\\SqlStatement',
    'query' => 'string',
  ),
  'mysql_xdevapi\\session::starttransaction' => 
  array (
    0 => 'void',
  ),
  'mysql_xdevapi\\sqlstatement::bind' => 
  array (
    0 => 'mysql_xdevapi\\SqlStatement',
    'param' => 'string',
  ),
  'mysql_xdevapi\\sqlstatement::execute' => 
  array (
    0 => 'mysql_xdevapi\\Result',
  ),
  'mysql_xdevapi\\sqlstatement::getnextresult' => 
  array (
    0 => 'mysql_xdevapi\\Result',
  ),
  'mysql_xdevapi\\sqlstatement::getresult' => 
  array (
    0 => 'mysql_xdevapi\\Result',
  ),
  'mysql_xdevapi\\sqlstatement::hasmoreresults' => 
  array (
    0 => 'bool',
  ),
  'mysql_xdevapi\\sqlstatementresult::fetchall' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mysql_xdevapi\\sqlstatementresult::fetchone' => 
  array (
    0 => 'object',
  ),
  'mysql_xdevapi\\sqlstatementresult::getaffecteditemscount' => 
  array (
    0 => 'int',
  ),
  'mysql_xdevapi\\sqlstatementresult::getcolumncount' => 
  array (
    0 => 'int',
  ),
  'mysql_xdevapi\\sqlstatementresult::getcolumnnames' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mysql_xdevapi\\sqlstatementresult::getcolumns' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mysql_xdevapi\\sqlstatementresult::getgeneratedids' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mysql_xdevapi\\sqlstatementresult::getlastinsertid' => 
  array (
    0 => 'string',
  ),
  'mysql_xdevapi\\sqlstatementresult::getwarnings' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mysql_xdevapi\\sqlstatementresult::getwarningscount' => 
  array (
    0 => 'int',
  ),
  'mysql_xdevapi\\sqlstatementresult::hasdata' => 
  array (
    0 => 'bool',
  ),
  'mysql_xdevapi\\sqlstatementresult::nextresult' => 
  array (
    0 => 'mysql_xdevapi\\Result',
  ),
  'mysql_xdevapi\\statement::getnextresult' => 
  array (
    0 => 'mysql_xdevapi\\Result',
  ),
  'mysql_xdevapi\\statement::getresult' => 
  array (
    0 => 'mysql_xdevapi\\Result',
  ),
  'mysql_xdevapi\\statement::hasmoreresults' => 
  array (
    0 => 'bool',
  ),
  'mysql_xdevapi\\table::count' => 
  array (
    0 => 'int',
  ),
  'mysql_xdevapi\\table::delete' => 
  array (
    0 => 'mysql_xdevapi\\TableDelete',
  ),
  'mysql_xdevapi\\table::existsindatabase' => 
  array (
    0 => 'bool',
  ),
  'mysql_xdevapi\\table::getname' => 
  array (
    0 => 'string',
  ),
  'mysql_xdevapi\\table::getschema' => 
  array (
    0 => 'mysql_xdevapi\\Schema',
  ),
  'mysql_xdevapi\\table::getsession' => 
  array (
    0 => 'mysql_xdevapi\\Session',
  ),
  'mysql_xdevapi\\table::insert' => 
  array (
    0 => 'mysql_xdevapi\\TableInsert',
    'columns' => 'mixed',
    '...args=' => 'mixed',
  ),
  'mysql_xdevapi\\table::isview' => 
  array (
    0 => 'bool',
  ),
  'mysql_xdevapi\\table::select' => 
  array (
    0 => 'mysql_xdevapi\\TableSelect',
    'columns' => 'mixed',
    '...args=' => 'mixed',
  ),
  'mysql_xdevapi\\table::update' => 
  array (
    0 => 'mysql_xdevapi\\TableUpdate',
  ),
  'mysql_xdevapi\\tabledelete::bind' => 
  array (
    0 => 'mysql_xdevapi\\TableDelete',
    'placeholder_values' => 'array<array-key, mixed>',
  ),
  'mysql_xdevapi\\tabledelete::execute' => 
  array (
    0 => 'mysql_xdevapi\\Result',
  ),
  'mysql_xdevapi\\tabledelete::limit' => 
  array (
    0 => 'mysql_xdevapi\\TableDelete',
    'rows' => 'int',
  ),
  'mysql_xdevapi\\tabledelete::offset' => 
  array (
    0 => 'mysql_xdevapi\\TableDelete',
    'position' => 'int',
  ),
  'mysql_xdevapi\\tabledelete::orderby' => 
  array (
    0 => 'mysql_xdevapi\\TableDelete',
    'orderby_expr' => 'string',
  ),
  'mysql_xdevapi\\tabledelete::where' => 
  array (
    0 => 'mysql_xdevapi\\TableDelete',
    'where_expr' => 'string',
  ),
  'mysql_xdevapi\\tableinsert::execute' => 
  array (
    0 => 'mysql_xdevapi\\Result',
  ),
  'mysql_xdevapi\\tableinsert::values' => 
  array (
    0 => 'mysql_xdevapi\\TableInsert',
    'row_values' => 'array<array-key, mixed>',
  ),
  'mysql_xdevapi\\tableselect::bind' => 
  array (
    0 => 'mysql_xdevapi\\TableSelect',
    'placeholder_values' => 'array<array-key, mixed>',
  ),
  'mysql_xdevapi\\tableselect::execute' => 
  array (
    0 => 'mysql_xdevapi\\RowResult',
  ),
  'mysql_xdevapi\\tableselect::groupby' => 
  array (
    0 => 'mysql_xdevapi\\TableSelect',
    'sort_expr' => 'mixed',
  ),
  'mysql_xdevapi\\tableselect::having' => 
  array (
    0 => 'mysql_xdevapi\\TableSelect',
    'sort_expr' => 'string',
  ),
  'mysql_xdevapi\\tableselect::limit' => 
  array (
    0 => 'mysql_xdevapi\\TableSelect',
    'rows' => 'int',
  ),
  'mysql_xdevapi\\tableselect::lockexclusive' => 
  array (
    0 => 'mysql_xdevapi\\TableSelect',
    'lock_waiting_option=' => 'int',
  ),
  'mysql_xdevapi\\tableselect::lockshared' => 
  array (
    0 => 'mysql_xdevapi\\TableSelect',
    'lock_waiting_option=' => 'int',
  ),
  'mysql_xdevapi\\tableselect::offset' => 
  array (
    0 => 'mysql_xdevapi\\TableSelect',
    'position' => 'int',
  ),
  'mysql_xdevapi\\tableselect::orderby' => 
  array (
    0 => 'mysql_xdevapi\\TableSelect',
    'sort_expr' => 'mixed',
    '...args=' => 'mixed',
  ),
  'mysql_xdevapi\\tableselect::where' => 
  array (
    0 => 'mysql_xdevapi\\TableSelect',
    'where_expr' => 'string',
  ),
  'mysql_xdevapi\\tableupdate::bind' => 
  array (
    0 => 'mysql_xdevapi\\TableUpdate',
    'placeholder_values' => 'array<array-key, mixed>',
  ),
  'mysql_xdevapi\\tableupdate::execute' => 
  array (
    0 => 'mysql_xdevapi\\TableUpdate',
  ),
  'mysql_xdevapi\\tableupdate::limit' => 
  array (
    0 => 'mysql_xdevapi\\TableUpdate',
    'rows' => 'int',
  ),
  'mysql_xdevapi\\tableupdate::orderby' => 
  array (
    0 => 'mysql_xdevapi\\TableUpdate',
    'orderby_expr' => 'mixed',
    '...args=' => 'mixed',
  ),
  'mysql_xdevapi\\tableupdate::set' => 
  array (
    0 => 'mysql_xdevapi\\TableUpdate',
    'table_field' => 'string',
    'expression_or_literal' => 'string',
  ),
  'mysql_xdevapi\\tableupdate::where' => 
  array (
    0 => 'mysql_xdevapi\\TableUpdate',
    'where_expr' => 'string',
  ),
  'mysqli::__construct' => 
  array (
    0 => 'void',
    'hostname=' => 'null|string',
    'username=' => 'null|string',
    'password=' => 'null|string',
    'database=' => 'null|string',
    'port=' => 'int|null',
    'socket=' => 'null|string',
  ),
  'mysqli::autocommit' => 
  array (
    0 => 'bool',
    'enable' => 'bool',
  ),
  'mysqli::begin_transaction' => 
  array (
    0 => 'bool',
    'flags=' => 'int',
    'name=' => 'null|string',
  ),
  'mysqli::change_user' => 
  array (
    0 => 'bool',
    'username' => 'string',
    'password' => 'string',
    'database' => 'null|string',
  ),
  'mysqli::character_set_name' => 
  array (
    0 => 'string',
  ),
  'mysqli::close' => 
  array (
    0 => 'true',
  ),
  'mysqli::commit' => 
  array (
    0 => 'bool',
    'flags=' => 'int',
    'name=' => 'null|string',
  ),
  'mysqli::connect' => 
  array (
    0 => 'bool',
    'hostname=' => 'null|string',
    'username=' => 'null|string',
    'password=' => 'null|string',
    'database=' => 'null|string',
    'port=' => 'int|null',
    'socket=' => 'null|string',
  ),
  'mysqli::debug' => 
  array (
    0 => 'true',
    'options' => 'string',
  ),
  'mysqli::dump_debug_info' => 
  array (
    0 => 'bool',
  ),
  'mysqli::escape_string' => 
  array (
    0 => 'string',
    'string' => 'string',
  ),
  'mysqli::execute_query' => 
  array (
    0 => 'bool|mysqli_result',
    'query' => 'non-empty-string',
    'params=' => 'list<mixed>|null',
  ),
  'mysqli::get_charset' => 
  array (
    0 => 'object',
  ),
  'mysqli::get_client_info' => 
  array (
    0 => 'string',
  ),
  'mysqli::get_connection_stats' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mysqli::get_warnings' => 
  array (
    0 => 'mysqli_warning',
  ),
  'mysqli::init' => 
  array (
    0 => 'false|null',
  ),
  'mysqli::kill' => 
  array (
    0 => 'bool',
    'process_id' => 'int',
  ),
  'mysqli::more_results' => 
  array (
    0 => 'bool',
  ),
  'mysqli::multi_query' => 
  array (
    0 => 'bool',
    'query' => 'string',
  ),
  'mysqli::next_result' => 
  array (
    0 => 'bool',
  ),
  'mysqli::options' => 
  array (
    0 => 'bool',
    'option' => 'int',
    'value' => 'int|string',
  ),
  'mysqli::ping' => 
  array (
    0 => 'bool',
  ),
  'mysqli::poll' => 
  array (
    0 => 'false|int',
    '&w_read' => 'array<array-key, mixed>|null',
    '&w_error' => 'array<array-key, mixed>|null',
    '&w_reject' => 'array<array-key, mixed>',
    'seconds' => 'int',
    'microseconds=' => 'int',
  ),
  'mysqli::prepare' => 
  array (
    0 => 'false|mysqli_stmt',
    'query' => 'string',
  ),
  'mysqli::query' => 
  array (
    0 => 'bool|mysqli_result',
    'query' => 'string',
    'result_mode=' => 'int',
  ),
  'mysqli::real_connect' => 
  array (
    0 => 'bool',
    'hostname=' => 'null|string',
    'username=' => 'null|string',
    'password=' => 'null|string',
    'database=' => 'null|string',
    'port=' => 'int|null',
    'socket=' => 'null|string',
    'flags=' => 'int',
  ),
  'mysqli::real_escape_string' => 
  array (
    0 => 'string',
    'string' => 'string',
  ),
  'mysqli::real_query' => 
  array (
    0 => 'bool',
    'query' => 'string',
  ),
  'mysqli::reap_async_query' => 
  array (
    0 => 'false|mysqli_result',
  ),
  'mysqli::refresh' => 
  array (
    0 => 'bool',
    'flags' => 'int',
  ),
  'mysqli::release_savepoint' => 
  array (
    0 => 'bool',
    'name' => 'string',
  ),
  'mysqli::rollback' => 
  array (
    0 => 'bool',
    'flags=' => 'int',
    'name=' => 'null|string',
  ),
  'mysqli::savepoint' => 
  array (
    0 => 'bool',
    'name' => 'string',
  ),
  'mysqli::select_db' => 
  array (
    0 => 'bool',
    'database' => 'string',
  ),
  'mysqli::set_charset' => 
  array (
    0 => 'bool',
    'charset' => 'string',
  ),
  'mysqli::set_opt' => 
  array (
    0 => 'bool',
    'option' => 'int',
    'value' => 'int|string',
  ),
  'mysqli::ssl_set' => 
  array (
    0 => 'true',
    'key' => 'null|string',
    'certificate' => 'null|string',
    'ca_certificate' => 'null|string',
    'ca_path' => 'null|string',
    'cipher_algos' => 'null|string',
  ),
  'mysqli::stat' => 
  array (
    0 => 'false|string',
  ),
  'mysqli::stmt_init' => 
  array (
    0 => 'mysqli_stmt',
  ),
  'mysqli::store_result' => 
  array (
    0 => 'false|mysqli_result',
    'mode=' => 'int',
  ),
  'mysqli::thread_safe' => 
  array (
    0 => 'bool',
  ),
  'mysqli::use_result' => 
  array (
    0 => 'false|mysqli_result',
  ),
  'mysqli_affected_rows' => 
  array (
    0 => 'int<-1, max>|numeric-string',
    'mysql' => 'mysqli',
  ),
  'mysqli_autocommit' => 
  array (
    0 => 'bool',
    'mysql' => 'mysqli',
    'enable' => 'bool',
  ),
  'mysqli_begin_transaction' => 
  array (
    0 => 'bool',
    'mysql' => 'mysqli',
    'flags=' => 'int',
    'name=' => 'null|string',
  ),
  'mysqli_change_user' => 
  array (
    0 => 'bool',
    'mysql' => 'mysqli',
    'username' => 'string',
    'password' => 'string',
    'database' => 'null|string',
  ),
  'mysqli_character_set_name' => 
  array (
    0 => 'string',
    'mysql' => 'mysqli',
  ),
  'mysqli_close' => 
  array (
    0 => 'true',
    'mysql' => 'mysqli',
  ),
  'mysqli_commit' => 
  array (
    0 => 'bool',
    'mysql' => 'mysqli',
    'flags=' => 'int',
    'name=' => 'null|string',
  ),
  'mysqli_connect' => 
  array (
    0 => 'false|mysqli',
    'hostname=' => 'null|string',
    'username=' => 'null|string',
    'password=' => 'null|string',
    'database=' => 'null|string',
    'port=' => 'int|null',
    'socket=' => 'null|string',
  ),
  'mysqli_connect_errno' => 
  array (
    0 => 'int',
  ),
  'mysqli_connect_error' => 
  array (
    0 => 'null|string',
  ),
  'mysqli_data_seek' => 
  array (
    0 => 'bool',
    'result' => 'mysqli_result',
    'offset' => 'int',
  ),
  'mysqli_debug' => 
  array (
    0 => 'true',
    'options' => 'string',
  ),
  'mysqli_disable_reads_from_master' => 
  array (
    0 => 'bool',
    'link' => 'mysqli',
  ),
  'mysqli_disable_rpl_parse' => 
  array (
    0 => 'bool',
    'link' => 'mysqli',
  ),
  'mysqli_dump_debug_info' => 
  array (
    0 => 'bool',
    'mysql' => 'mysqli',
  ),
  'mysqli_embedded_server_end' => 
  array (
    0 => 'void',
  ),
  'mysqli_embedded_server_start' => 
  array (
    0 => 'bool',
    'start' => 'int',
    'arguments' => 'array<array-key, mixed>',
    'groups' => 'array<array-key, mixed>',
  ),
  'mysqli_enable_reads_from_master' => 
  array (
    0 => 'bool',
    'link' => 'mysqli',
  ),
  'mysqli_enable_rpl_parse' => 
  array (
    0 => 'bool',
    'link' => 'mysqli',
  ),
  'mysqli_errno' => 
  array (
    0 => 'int',
    'mysql' => 'mysqli',
  ),
  'mysqli_error' => 
  array (
    0 => 'string',
    'mysql' => 'mysqli',
  ),
  'mysqli_error_list' => 
  array (
    0 => 'array<array-key, mixed>',
    'mysql' => 'mysqli',
  ),
  'mysqli_escape_string' => 
  array (
    0 => 'string',
    'mysql' => 'mysqli',
    'string' => 'string',
  ),
  'mysqli_execute' => 
  array (
    0 => 'bool',
    'statement' => 'mysqli_stmt',
    'params=' => 'list<mixed>|null',
  ),
  'mysqli_execute_query' => 
  array (
    0 => 'bool|mysqli_result',
    'mysql' => 'mysqli',
    'query' => 'non-empty-string',
    'params=' => 'list<mixed>|null',
  ),
  'mysqli_fetch_all' => 
  array (
    0 => 'list<array<array-key, float|int|null|string>>',
    'result' => 'mysqli_result',
    'mode=' => '3',
  ),
  'mysqli_fetch_all\'1' => 
  array (
    0 => 'list<array<string, float|int|null|string>>',
    'result' => 'mysqli_result',
    'mode=' => '1',
  ),
  'mysqli_fetch_all\'2' => 
  array (
    0 => 'list<list<float|int|null|string>>',
    'result' => 'mysqli_result',
    'mode=' => '2',
  ),
  'mysqli_fetch_array' => 
  array (
    0 => 'array<array-key, float|int|null|string>|false|null',
    'result' => 'mysqli_result',
    'mode=' => '3',
  ),
  'mysqli_fetch_array\'1' => 
  array (
    0 => 'array<string, float|int|null|string>|false|null',
    'result' => 'mysqli_result',
    'mode=' => '1',
  ),
  'mysqli_fetch_array\'2' => 
  array (
    0 => 'false|list<float|int|null|string>|null',
    'result' => 'mysqli_result',
    'mode=' => '2',
  ),
  'mysqli_fetch_assoc' => 
  array (
    0 => 'array<string, float|int|null|string>|false|null',
    'result' => 'mysqli_result',
  ),
  'mysqli_fetch_column' => 
  array (
    0 => 'false|float|int|null|string',
    'result' => 'mysqli_result',
    'column=' => 'int',
  ),
  'mysqli_fetch_field' => 
  array (
    0 => 'false|object{name:string, orgname:string, table:string, orgtable:string, max_length:0, length:int, charsetnr:int, flags:int, type:int, decimals:int, db:string, def:\'\', catalog:\'def\'}',
    'result' => 'mysqli_result',
  ),
  'mysqli_fetch_field_direct' => 
  array (
    0 => 'false|object{name:string, orgname:string, table:string, orgtable:string, max_length:0, length:int, charsetnr:int, flags:int, type:int, decimals:int, db:string, def:\'\', catalog:\'def\'}',
    'result' => 'mysqli_result',
    'index' => 'int',
  ),
  'mysqli_fetch_fields' => 
  array (
    0 => 'list<object{name:string, orgname:string, table:string, orgtable:string, max_length:0, length:int, charsetnr:int, flags:int, type:int, decimals:int, db:string, def:\'\', catalog:\'def\'}>',
    'result' => 'mysqli_result',
  ),
  'mysqli_fetch_lengths' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'result' => 'mysqli_result',
  ),
  'mysqli_fetch_object' => 
  array (
    0 => 'false|null|object',
    'result' => 'mysqli_result',
    'class=' => 'string',
    'constructor_args=' => 'array<array-key, mixed>',
  ),
  'mysqli_fetch_row' => 
  array (
    0 => 'false|list<float|int|null|string>|null',
    'result' => 'mysqli_result',
  ),
  'mysqli_field_count' => 
  array (
    0 => 'int',
    'mysql' => 'mysqli',
  ),
  'mysqli_field_seek' => 
  array (
    0 => 'true',
    'result' => 'mysqli_result',
    'index' => 'int',
  ),
  'mysqli_field_tell' => 
  array (
    0 => 'int',
    'result' => 'mysqli_result',
  ),
  'mysqli_free_result' => 
  array (
    0 => 'void',
    'result' => 'mysqli_result',
  ),
  'mysqli_get_cache_stats' => 
  array (
    0 => 'array<array-key, mixed>|false',
  ),
  'mysqli_get_charset' => 
  array (
    0 => 'null|object',
    'mysql' => 'mysqli',
  ),
  'mysqli_get_client_info' => 
  array (
    0 => 'string',
    'mysql=' => 'mysqli|null',
  ),
  'mysqli_get_client_stats' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mysqli_get_client_version' => 
  array (
    0 => 'int',
  ),
  'mysqli_get_connection_stats' => 
  array (
    0 => 'array<array-key, mixed>',
    'mysql' => 'mysqli',
  ),
  'mysqli_get_host_info' => 
  array (
    0 => 'string',
    'mysql' => 'mysqli',
  ),
  'mysqli_get_links_stats' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mysqli_get_proto_info' => 
  array (
    0 => 'int',
    'mysql' => 'mysqli',
  ),
  'mysqli_get_server_info' => 
  array (
    0 => 'string',
    'mysql' => 'mysqli',
  ),
  'mysqli_get_server_version' => 
  array (
    0 => 'int',
    'mysql' => 'mysqli',
  ),
  'mysqli_get_warnings' => 
  array (
    0 => 'mysqli_warning',
    'mysql' => 'mysqli',
  ),
  'mysqli_info' => 
  array (
    0 => 'null|string',
    'mysql' => 'mysqli',
  ),
  'mysqli_init' => 
  array (
    0 => 'false|mysqli',
  ),
  'mysqli_insert_id' => 
  array (
    0 => 'int|string',
    'mysql' => 'mysqli',
  ),
  'mysqli_kill' => 
  array (
    0 => 'bool',
    'mysql' => 'mysqli',
    'process_id' => 'int',
  ),
  'mysqli_link_construct' => 
  array (
    0 => 'object',
  ),
  'mysqli_master_query' => 
  array (
    0 => 'bool',
    'link' => 'mysqli',
    'query' => 'string',
  ),
  'mysqli_more_results' => 
  array (
    0 => 'bool',
    'mysql' => 'mysqli',
  ),
  'mysqli_multi_query' => 
  array (
    0 => 'bool',
    'mysql' => 'mysqli',
    'query' => 'string',
  ),
  'mysqli_next_result' => 
  array (
    0 => 'bool',
    'mysql' => 'mysqli',
  ),
  'mysqli_num_fields' => 
  array (
    0 => 'int',
    'result' => 'mysqli_result',
  ),
  'mysqli_num_rows' => 
  array (
    0 => 'int<0, max>|numeric-string',
    'result' => 'mysqli_result',
  ),
  'mysqli_options' => 
  array (
    0 => 'bool',
    'mysql' => 'mysqli',
    'option' => 'int',
    'value' => 'int|string',
  ),
  'mysqli_ping' => 
  array (
    0 => 'bool',
    'mysql' => 'mysqli',
  ),
  'mysqli_poll' => 
  array (
    0 => 'false|int',
    '&w_read' => 'array<array-key, mixed>|null',
    '&w_error' => 'array<array-key, mixed>|null',
    '&w_reject' => 'array<array-key, mixed>',
    'seconds' => 'int',
    'microseconds=' => 'int',
  ),
  'mysqli_prepare' => 
  array (
    0 => 'false|mysqli_stmt',
    'mysql' => 'mysqli',
    'query' => 'string',
  ),
  'mysqli_query' => 
  array (
    0 => 'bool|mysqli_result',
    'mysql' => 'mysqli',
    'query' => 'string',
    'result_mode=' => 'int',
  ),
  'mysqli_real_connect' => 
  array (
    0 => 'bool',
    'mysql' => 'mysqli',
    'hostname=' => 'null|string',
    'username=' => 'null|string',
    'password=' => 'null|string',
    'database=' => 'null|string',
    'port=' => 'int|null',
    'socket=' => 'null|string',
    'flags=' => 'int',
  ),
  'mysqli_real_escape_string' => 
  array (
    0 => 'string',
    'mysql' => 'mysqli',
    'string' => 'string',
  ),
  'mysqli_real_query' => 
  array (
    0 => 'bool',
    'mysql' => 'mysqli',
    'query' => 'string',
  ),
  'mysqli_reap_async_query' => 
  array (
    0 => 'false|mysqli_result',
    'mysql' => 'mysqli',
  ),
  'mysqli_refresh' => 
  array (
    0 => 'bool',
    'mysql' => 'mysqli',
    'flags' => 'int',
  ),
  'mysqli_release_savepoint' => 
  array (
    0 => 'bool',
    'mysql' => 'mysqli',
    'name' => 'string',
  ),
  'mysqli_report' => 
  array (
    0 => 'bool',
    'flags' => 'int',
  ),
  'mysqli_result::__construct' => 
  array (
    0 => 'void',
    'mysql' => 'mysqli',
    'result_mode=' => 'int',
  ),
  'mysqli_result::close' => 
  array (
    0 => 'void',
  ),
  'mysqli_result::data_seek' => 
  array (
    0 => 'bool',
    'offset' => 'int',
  ),
  'mysqli_result::fetch_all' => 
  array (
    0 => 'list<array<array-key, float|int|null|string>>',
    'mode=' => '3',
  ),
  'mysqli_result::fetch_all\'1' => 
  array (
    0 => 'list<array<string, float|int|null|string>>',
    'mode=' => '1',
  ),
  'mysqli_result::fetch_all\'2' => 
  array (
    0 => 'list<list<float|int|null|string>>',
    'mode=' => '2',
  ),
  'mysqli_result::fetch_array' => 
  array (
    0 => 'array<array-key, float|int|null|string>|false|null',
    'mode=' => '3',
  ),
  'mysqli_result::fetch_array\'1' => 
  array (
    0 => 'array<string, float|int|null|string>|false|null',
    'mode=' => '1',
  ),
  'mysqli_result::fetch_array\'2' => 
  array (
    0 => 'false|list<float|int|null|string>|null',
    'mode=' => '2',
  ),
  'mysqli_result::fetch_assoc' => 
  array (
    0 => 'array<string, float|int|null|string>|false|null',
  ),
  'mysqli_result::fetch_column' => 
  array (
    0 => 'false|float|int|null|string',
    'column=' => 'int',
  ),
  'mysqli_result::fetch_field' => 
  array (
    0 => 'false|object{name:string, orgname:string, table:string, orgtable:string, max_length:0, length:int, charsetnr:int, flags:int, type:int, decimals:int, db:string, def:\'\', catalog:\'def\'}',
  ),
  'mysqli_result::fetch_field_direct' => 
  array (
    0 => 'false|object{name:string, orgname:string, table:string, orgtable:string, max_length:0, length:int, charsetnr:int, flags:int, type:int, decimals:int, db:string, def:\'\', catalog:\'def\'}',
    'index' => 'int',
  ),
  'mysqli_result::fetch_fields' => 
  array (
    0 => 'list<object{name:string, orgname:string, table:string, orgtable:string, max_length:0, length:int, charsetnr:int, flags:int, type:int, decimals:int, db:string, def:\'\', catalog:\'def\'}>',
  ),
  'mysqli_result::fetch_object' => 
  array (
    0 => 'false|null|object',
    'class=' => 'string',
    'constructor_args=' => 'array<array-key, mixed>',
  ),
  'mysqli_result::fetch_row' => 
  array (
    0 => 'false|list<float|int|null|string>|null',
  ),
  'mysqli_result::field_seek' => 
  array (
    0 => 'true',
    'index' => 'int',
  ),
  'mysqli_result::free' => 
  array (
    0 => 'void',
  ),
  'mysqli_result::free_result' => 
  array (
    0 => 'void',
  ),
  'mysqli_rollback' => 
  array (
    0 => 'bool',
    'mysql' => 'mysqli',
    'flags=' => 'int',
    'name=' => 'null|string',
  ),
  'mysqli_rpl_parse_enabled' => 
  array (
    0 => 'int',
    'link' => 'mysqli',
  ),
  'mysqli_rpl_probe' => 
  array (
    0 => 'bool',
    'link' => 'mysqli',
  ),
  'mysqli_rpl_query_type' => 
  array (
    0 => 'int',
    'link' => 'mysqli',
    'query' => 'string',
  ),
  'mysqli_savepoint' => 
  array (
    0 => 'bool',
    'mysql' => 'mysqli',
    'name' => 'string',
  ),
  'mysqli_savepoint_libmysql' => 
  array (
    0 => 'bool',
  ),
  'mysqli_select_db' => 
  array (
    0 => 'bool',
    'mysql' => 'mysqli',
    'database' => 'string',
  ),
  'mysqli_send_query' => 
  array (
    0 => 'bool',
    'link' => 'mysqli',
    'query' => 'string',
  ),
  'mysqli_set_charset' => 
  array (
    0 => 'bool',
    'mysql' => 'mysqli',
    'charset' => 'string',
  ),
  'mysqli_set_local_infile_default' => 
  array (
    0 => 'void',
    'link' => 'mysqli',
  ),
  'mysqli_set_local_infile_handler' => 
  array (
    0 => 'bool',
    'link' => 'mysqli',
    'read_func' => 'callable',
  ),
  'mysqli_set_opt' => 
  array (
    0 => 'bool',
    'mysql' => 'mysqli',
    'option' => 'int',
    'value' => 'int|string',
  ),
  'mysqli_slave_query' => 
  array (
    0 => 'bool',
    'link' => 'mysqli',
    'query' => 'string',
  ),
  'mysqli_sqlstate' => 
  array (
    0 => 'string',
    'mysql' => 'mysqli',
  ),
  'mysqli_ssl_set' => 
  array (
    0 => 'true',
    'mysql' => 'mysqli',
    'key' => 'null|string',
    'certificate' => 'null|string',
    'ca_certificate' => 'null|string',
    'ca_path' => 'null|string',
    'cipher_algos' => 'null|string',
  ),
  'mysqli_stat' => 
  array (
    0 => 'false|string',
    'mysql' => 'mysqli',
  ),
  'mysqli_stmt::__construct' => 
  array (
    0 => 'void',
    'mysql' => 'mysqli',
    'query=' => 'null|string',
  ),
  'mysqli_stmt::attr_get' => 
  array (
    0 => 'int',
    'attribute' => 'int',
  ),
  'mysqli_stmt::attr_set' => 
  array (
    0 => 'bool',
    'attribute' => 'int',
    'value' => 'int',
  ),
  'mysqli_stmt::bind_param' => 
  array (
    0 => 'bool',
    'types' => 'string',
    '&var' => 'mixed',
    '&...vars=' => 'mixed',
  ),
  'mysqli_stmt::bind_result' => 
  array (
    0 => 'bool',
    '&w_var1' => 'mixed',
    '&...w_vars=' => 'mixed',
  ),
  'mysqli_stmt::close' => 
  array (
    0 => 'true',
  ),
  'mysqli_stmt::data_seek' => 
  array (
    0 => 'void',
    'offset' => 'int',
  ),
  'mysqli_stmt::execute' => 
  array (
    0 => 'bool',
    'params=' => 'list<mixed>|null',
  ),
  'mysqli_stmt::fetch' => 
  array (
    0 => 'bool|null',
  ),
  'mysqli_stmt::free_result' => 
  array (
    0 => 'void',
  ),
  'mysqli_stmt::get_result' => 
  array (
    0 => 'false|mysqli_result',
  ),
  'mysqli_stmt::get_warnings' => 
  array (
    0 => 'object',
  ),
  'mysqli_stmt::more_results' => 
  array (
    0 => 'bool',
  ),
  'mysqli_stmt::next_result' => 
  array (
    0 => 'bool',
  ),
  'mysqli_stmt::num_rows' => 
  array (
    0 => 'int<0, max>|numeric-string',
  ),
  'mysqli_stmt::prepare' => 
  array (
    0 => 'bool',
    'query' => 'string',
  ),
  'mysqli_stmt::reset' => 
  array (
    0 => 'bool',
  ),
  'mysqli_stmt::result_metadata' => 
  array (
    0 => 'false|mysqli_result',
  ),
  'mysqli_stmt::send_long_data' => 
  array (
    0 => 'bool',
    'param_num' => 'int',
    'data' => 'string',
  ),
  'mysqli_stmt::store_result' => 
  array (
    0 => 'bool',
  ),
  'mysqli_stmt_affected_rows' => 
  array (
    0 => 'int<-1, max>|numeric-string',
    'statement' => 'mysqli_stmt',
  ),
  'mysqli_stmt_attr_get' => 
  array (
    0 => 'int',
    'statement' => 'mysqli_stmt',
    'attribute' => 'int',
  ),
  'mysqli_stmt_attr_set' => 
  array (
    0 => 'bool',
    'statement' => 'mysqli_stmt',
    'attribute' => 'int',
    'value' => 'int',
  ),
  'mysqli_stmt_bind_param' => 
  array (
    0 => 'bool',
    'statement' => 'mysqli_stmt',
    'types' => 'string',
    '&var' => 'mixed',
    '&...vars=' => 'mixed',
  ),
  'mysqli_stmt_bind_result' => 
  array (
    0 => 'bool',
    'statement' => 'mysqli_stmt',
    '&w_var1' => 'mixed',
    '&...w_vars=' => 'mixed',
  ),
  'mysqli_stmt_close' => 
  array (
    0 => 'true',
    'statement' => 'mysqli_stmt',
  ),
  'mysqli_stmt_data_seek' => 
  array (
    0 => 'void',
    'statement' => 'mysqli_stmt',
    'offset' => 'int',
  ),
  'mysqli_stmt_errno' => 
  array (
    0 => 'int',
    'statement' => 'mysqli_stmt',
  ),
  'mysqli_stmt_error' => 
  array (
    0 => 'string',
    'statement' => 'mysqli_stmt',
  ),
  'mysqli_stmt_error_list' => 
  array (
    0 => 'array<array-key, mixed>',
    'statement' => 'mysqli_stmt',
  ),
  'mysqli_stmt_execute' => 
  array (
    0 => 'bool',
    'statement' => 'mysqli_stmt',
    'params=' => 'list<mixed>|null',
  ),
  'mysqli_stmt_fetch' => 
  array (
    0 => 'bool|null',
    'statement' => 'mysqli_stmt',
  ),
  'mysqli_stmt_field_count' => 
  array (
    0 => 'int',
    'statement' => 'mysqli_stmt',
  ),
  'mysqli_stmt_free_result' => 
  array (
    0 => 'void',
    'statement' => 'mysqli_stmt',
  ),
  'mysqli_stmt_get_result' => 
  array (
    0 => 'false|mysqli_result',
    'statement' => 'mysqli_stmt',
  ),
  'mysqli_stmt_get_warnings' => 
  array (
    0 => 'object',
    'statement' => 'mysqli_stmt',
  ),
  'mysqli_stmt_init' => 
  array (
    0 => 'mysqli_stmt',
    'mysql' => 'mysqli',
  ),
  'mysqli_stmt_insert_id' => 
  array (
    0 => 'mixed',
    'statement' => 'mysqli_stmt',
  ),
  'mysqli_stmt_more_results' => 
  array (
    0 => 'bool',
    'statement' => 'mysqli_stmt',
  ),
  'mysqli_stmt_next_result' => 
  array (
    0 => 'bool',
    'statement' => 'mysqli_stmt',
  ),
  'mysqli_stmt_num_rows' => 
  array (
    0 => 'int',
    'statement' => 'mysqli_stmt',
  ),
  'mysqli_stmt_param_count' => 
  array (
    0 => 'int',
    'statement' => 'mysqli_stmt',
  ),
  'mysqli_stmt_prepare' => 
  array (
    0 => 'bool',
    'statement' => 'mysqli_stmt',
    'query' => 'string',
  ),
  'mysqli_stmt_reset' => 
  array (
    0 => 'bool',
    'statement' => 'mysqli_stmt',
  ),
  'mysqli_stmt_result_metadata' => 
  array (
    0 => 'false|mysqli_result',
    'statement' => 'mysqli_stmt',
  ),
  'mysqli_stmt_send_long_data' => 
  array (
    0 => 'bool',
    'statement' => 'mysqli_stmt',
    'param_num' => 'int',
    'data' => 'string',
  ),
  'mysqli_stmt_sqlstate' => 
  array (
    0 => 'string',
    'statement' => 'mysqli_stmt',
  ),
  'mysqli_stmt_store_result' => 
  array (
    0 => 'bool',
    'statement' => 'mysqli_stmt',
  ),
  'mysqli_store_result' => 
  array (
    0 => 'false|mysqli_result',
    'mysql' => 'mysqli',
    'mode=' => 'int',
  ),
  'mysqli_thread_id' => 
  array (
    0 => 'int',
    'mysql' => 'mysqli',
  ),
  'mysqli_thread_safe' => 
  array (
    0 => 'bool',
  ),
  'mysqli_use_result' => 
  array (
    0 => 'false|mysqli_result',
    'mysql' => 'mysqli',
  ),
  'mysqli_warning::__construct' => 
  array (
    0 => 'void',
  ),
  'mysqli_warning::next' => 
  array (
    0 => 'bool',
  ),
  'mysqli_warning_count' => 
  array (
    0 => 'int',
    'mysql' => 'mysqli',
  ),
  'mysqlnd_memcache_get_config' => 
  array (
    0 => 'array<array-key, mixed>',
    'connection' => 'mixed',
  ),
  'mysqlnd_memcache_set' => 
  array (
    0 => 'bool',
    'mysql_connection' => 'mixed',
    'memcache_connection=' => 'Memcached',
    'pattern=' => 'string',
    'callback=' => 'callable',
  ),
  'mysqlnd_ms_dump_servers' => 
  array (
    0 => 'array<array-key, mixed>',
    'connection' => 'mixed',
  ),
  'mysqlnd_ms_fabric_select_global' => 
  array (
    0 => 'array<array-key, mixed>',
    'connection' => 'mixed',
    'table_name' => 'mixed',
  ),
  'mysqlnd_ms_fabric_select_shard' => 
  array (
    0 => 'array<array-key, mixed>',
    'connection' => 'mixed',
    'table_name' => 'mixed',
    'shard_key' => 'mixed',
  ),
  'mysqlnd_ms_get_last_gtid' => 
  array (
    0 => 'string',
    'connection' => 'mixed',
  ),
  'mysqlnd_ms_get_last_used_connection' => 
  array (
    0 => 'array<array-key, mixed>',
    'connection' => 'mixed',
  ),
  'mysqlnd_ms_get_stats' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mysqlnd_ms_match_wild' => 
  array (
    0 => 'bool',
    'table_name' => 'string',
    'wildcard' => 'string',
  ),
  'mysqlnd_ms_query_is_select' => 
  array (
    0 => 'int',
    'query' => 'string',
  ),
  'mysqlnd_ms_set_qos' => 
  array (
    0 => 'bool',
    'connection' => 'mixed',
    'service_level' => 'int',
    'service_level_option=' => 'int',
    'option_value=' => 'mixed',
  ),
  'mysqlnd_ms_set_user_pick_server' => 
  array (
    0 => 'bool',
    'function' => 'string',
  ),
  'mysqlnd_ms_xa_begin' => 
  array (
    0 => 'int',
    'connection' => 'mixed',
    'gtrid' => 'string',
    'timeout=' => 'int',
  ),
  'mysqlnd_ms_xa_commit' => 
  array (
    0 => 'int',
    'connection' => 'mixed',
    'gtrid' => 'string',
  ),
  'mysqlnd_ms_xa_gc' => 
  array (
    0 => 'int',
    'connection' => 'mixed',
    'gtrid=' => 'string',
    'ignore_max_retries=' => 'bool',
  ),
  'mysqlnd_ms_xa_rollback' => 
  array (
    0 => 'int',
    'connection' => 'mixed',
    'gtrid' => 'string',
  ),
  'mysqlnd_qc_change_handler' => 
  array (
    0 => 'bool',
    'handler' => 'mixed',
  ),
  'mysqlnd_qc_clear_cache' => 
  array (
    0 => 'bool',
  ),
  'mysqlnd_qc_get_available_handlers' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mysqlnd_qc_get_cache_info' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mysqlnd_qc_get_core_stats' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mysqlnd_qc_get_handler' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mysqlnd_qc_get_normalized_query_trace_log' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mysqlnd_qc_get_query_trace_log' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mysqlnd_qc_set_cache_condition' => 
  array (
    0 => 'bool',
    'condition_type' => 'int',
    'condition' => 'mixed',
    'condition_option' => 'mixed',
  ),
  'mysqlnd_qc_set_is_select' => 
  array (
    0 => 'mixed',
    'callback' => 'string',
  ),
  'mysqlnd_qc_set_storage_handler' => 
  array (
    0 => 'bool',
    'handler' => 'string',
  ),
  'mysqlnd_qc_set_user_handlers' => 
  array (
    0 => 'bool',
    'get_hash' => 'string',
    'find_query_in_cache' => 'string',
    'return_to_cache' => 'string',
    'add_query_to_cache_if_not_exists' => 'string',
    'query_is_select' => 'string',
    'update_query_run_time_stats' => 'string',
    'get_stats' => 'string',
    'clear_cache' => 'string',
  ),
  'mysqlnd_uh_convert_to_mysqlnd' => 
  array (
    0 => 'resource',
    '&rw_mysql_connection' => 'mysqli',
  ),
  'mysqlnd_uh_set_connection_proxy' => 
  array (
    0 => 'bool',
    '&rw_connection_proxy' => 'MysqlndUhConnection',
    '&rw_mysqli_connection=' => 'mysqli',
  ),
  'mysqlnd_uh_set_statement_proxy' => 
  array (
    0 => 'bool',
    '&rw_statement_proxy' => 'MysqlndUhStatement',
  ),
  'mysqlnduhconnection::__construct' => 
  array (
    0 => 'void',
  ),
  'mysqlnduhconnection::changeuser' => 
  array (
    0 => 'bool',
    'connection' => 'mysqlnd_connection',
    'user' => 'string',
    'password' => 'string',
    'database' => 'string',
    'silent' => 'bool',
    'passwd_len' => 'int',
  ),
  'mysqlnduhconnection::charsetname' => 
  array (
    0 => 'string',
    'connection' => 'mysqlnd_connection',
  ),
  'mysqlnduhconnection::close' => 
  array (
    0 => 'bool',
    'connection' => 'mysqlnd_connection',
    'close_type' => 'int',
  ),
  'mysqlnduhconnection::connect' => 
  array (
    0 => 'bool',
    'connection' => 'mysqlnd_connection',
    'host' => 'string',
    'use' => 'string',
    'password' => 'string',
    'database' => 'string',
    'port' => 'int',
    'socket' => 'string',
    'mysql_flags' => 'int',
  ),
  'mysqlnduhconnection::endpsession' => 
  array (
    0 => 'bool',
    'connection' => 'mysqlnd_connection',
  ),
  'mysqlnduhconnection::escapestring' => 
  array (
    0 => 'string',
    'connection' => 'mysqlnd_connection',
    'escape_string' => 'string',
  ),
  'mysqlnduhconnection::getaffectedrows' => 
  array (
    0 => 'int',
    'connection' => 'mysqlnd_connection',
  ),
  'mysqlnduhconnection::geterrornumber' => 
  array (
    0 => 'int',
    'connection' => 'mysqlnd_connection',
  ),
  'mysqlnduhconnection::geterrorstring' => 
  array (
    0 => 'string',
    'connection' => 'mysqlnd_connection',
  ),
  'mysqlnduhconnection::getfieldcount' => 
  array (
    0 => 'int',
    'connection' => 'mysqlnd_connection',
  ),
  'mysqlnduhconnection::gethostinformation' => 
  array (
    0 => 'string',
    'connection' => 'mysqlnd_connection',
  ),
  'mysqlnduhconnection::getlastinsertid' => 
  array (
    0 => 'int',
    'connection' => 'mysqlnd_connection',
  ),
  'mysqlnduhconnection::getlastmessage' => 
  array (
    0 => 'void',
    'connection' => 'mysqlnd_connection',
  ),
  'mysqlnduhconnection::getprotocolinformation' => 
  array (
    0 => 'string',
    'connection' => 'mysqlnd_connection',
  ),
  'mysqlnduhconnection::getserverinformation' => 
  array (
    0 => 'string',
    'connection' => 'mysqlnd_connection',
  ),
  'mysqlnduhconnection::getserverstatistics' => 
  array (
    0 => 'string',
    'connection' => 'mysqlnd_connection',
  ),
  'mysqlnduhconnection::getserverversion' => 
  array (
    0 => 'int',
    'connection' => 'mysqlnd_connection',
  ),
  'mysqlnduhconnection::getsqlstate' => 
  array (
    0 => 'string',
    'connection' => 'mysqlnd_connection',
  ),
  'mysqlnduhconnection::getstatistics' => 
  array (
    0 => 'array<array-key, mixed>',
    'connection' => 'mysqlnd_connection',
  ),
  'mysqlnduhconnection::getthreadid' => 
  array (
    0 => 'int',
    'connection' => 'mysqlnd_connection',
  ),
  'mysqlnduhconnection::getwarningcount' => 
  array (
    0 => 'int',
    'connection' => 'mysqlnd_connection',
  ),
  'mysqlnduhconnection::init' => 
  array (
    0 => 'bool',
    'connection' => 'mysqlnd_connection',
  ),
  'mysqlnduhconnection::killconnection' => 
  array (
    0 => 'bool',
    'connection' => 'mysqlnd_connection',
    'pid' => 'int',
  ),
  'mysqlnduhconnection::listfields' => 
  array (
    0 => 'array<array-key, mixed>',
    'connection' => 'mysqlnd_connection',
    'table' => 'string',
    'achtung_wild' => 'string',
  ),
  'mysqlnduhconnection::listmethod' => 
  array (
    0 => 'void',
    'connection' => 'mysqlnd_connection',
    'query' => 'string',
    'achtung_wild' => 'string',
    'par1' => 'string',
  ),
  'mysqlnduhconnection::moreresults' => 
  array (
    0 => 'bool',
    'connection' => 'mysqlnd_connection',
  ),
  'mysqlnduhconnection::nextresult' => 
  array (
    0 => 'bool',
    'connection' => 'mysqlnd_connection',
  ),
  'mysqlnduhconnection::ping' => 
  array (
    0 => 'bool',
    'connection' => 'mysqlnd_connection',
  ),
  'mysqlnduhconnection::query' => 
  array (
    0 => 'bool',
    'connection' => 'mysqlnd_connection',
    'query' => 'string',
  ),
  'mysqlnduhconnection::queryreadresultsetheader' => 
  array (
    0 => 'bool',
    'connection' => 'mysqlnd_connection',
    'mysqlnd_stmt' => 'mysqlnd_statement',
  ),
  'mysqlnduhconnection::reapquery' => 
  array (
    0 => 'bool',
    'connection' => 'mysqlnd_connection',
  ),
  'mysqlnduhconnection::refreshserver' => 
  array (
    0 => 'bool',
    'connection' => 'mysqlnd_connection',
    'options' => 'int',
  ),
  'mysqlnduhconnection::restartpsession' => 
  array (
    0 => 'bool',
    'connection' => 'mysqlnd_connection',
  ),
  'mysqlnduhconnection::selectdb' => 
  array (
    0 => 'bool',
    'connection' => 'mysqlnd_connection',
    'database' => 'string',
  ),
  'mysqlnduhconnection::sendclose' => 
  array (
    0 => 'bool',
    'connection' => 'mysqlnd_connection',
  ),
  'mysqlnduhconnection::sendquery' => 
  array (
    0 => 'bool',
    'connection' => 'mysqlnd_connection',
    'query' => 'string',
  ),
  'mysqlnduhconnection::serverdumpdebuginformation' => 
  array (
    0 => 'bool',
    'connection' => 'mysqlnd_connection',
  ),
  'mysqlnduhconnection::setautocommit' => 
  array (
    0 => 'bool',
    'connection' => 'mysqlnd_connection',
    'mode' => 'int',
  ),
  'mysqlnduhconnection::setcharset' => 
  array (
    0 => 'bool',
    'connection' => 'mysqlnd_connection',
    'charset' => 'string',
  ),
  'mysqlnduhconnection::setclientoption' => 
  array (
    0 => 'bool',
    'connection' => 'mysqlnd_connection',
    'option' => 'int',
    'value' => 'int',
  ),
  'mysqlnduhconnection::setserveroption' => 
  array (
    0 => 'void',
    'connection' => 'mysqlnd_connection',
    'option' => 'int',
  ),
  'mysqlnduhconnection::shutdownserver' => 
  array (
    0 => 'void',
    'MYSQLND_UH_RES_MYSQLND_NAME' => 'string',
    'level' => 'string',
  ),
  'mysqlnduhconnection::simplecommand' => 
  array (
    0 => 'bool',
    'connection' => 'mysqlnd_connection',
    'command' => 'int',
    'arg' => 'string',
    'ok_packet' => 'int',
    'silent' => 'bool',
    'ignore_upsert_status' => 'bool',
  ),
  'mysqlnduhconnection::simplecommandhandleresponse' => 
  array (
    0 => 'bool',
    'connection' => 'mysqlnd_connection',
    'ok_packet' => 'int',
    'silent' => 'bool',
    'command' => 'int',
    'ignore_upsert_status' => 'bool',
  ),
  'mysqlnduhconnection::sslset' => 
  array (
    0 => 'bool',
    'connection' => 'mysqlnd_connection',
    'key' => 'string',
    'cert' => 'string',
    'ca' => 'string',
    'capath' => 'string',
    'cipher' => 'string',
  ),
  'mysqlnduhconnection::stmtinit' => 
  array (
    0 => 'resource',
    'connection' => 'mysqlnd_connection',
  ),
  'mysqlnduhconnection::storeresult' => 
  array (
    0 => 'resource',
    'connection' => 'mysqlnd_connection',
  ),
  'mysqlnduhconnection::txcommit' => 
  array (
    0 => 'bool',
    'connection' => 'mysqlnd_connection',
  ),
  'mysqlnduhconnection::txrollback' => 
  array (
    0 => 'bool',
    'connection' => 'mysqlnd_connection',
  ),
  'mysqlnduhconnection::useresult' => 
  array (
    0 => 'resource',
    'connection' => 'mysqlnd_connection',
  ),
  'mysqlnduhpreparedstatement::__construct' => 
  array (
    0 => 'void',
  ),
  'mysqlnduhpreparedstatement::execute' => 
  array (
    0 => 'bool',
    'statement' => 'mysqlnd_prepared_statement',
  ),
  'mysqlnduhpreparedstatement::prepare' => 
  array (
    0 => 'bool',
    'statement' => 'mysqlnd_prepared_statement',
    'query' => 'string',
  ),
  'natcasesort' => 
  array (
    0 => 'true',
    '&array' => 'array<array-key, mixed>',
  ),
  'natsort' => 
  array (
    0 => 'true',
    '&array' => 'array<array-key, mixed>',
  ),
  'net_get_interfaces' => 
  array (
    0 => 'array<string, array<string, mixed>>|false',
  ),
  'newrelic_add_custom_parameter' => 
  array (
    0 => 'bool',
    'key' => 'string',
    'value' => 'scalar',
  ),
  'newrelic_add_custom_tracer' => 
  array (
    0 => 'bool',
    'function_name' => 'string',
  ),
  'newrelic_background_job' => 
  array (
    0 => 'void',
    'flag=' => 'bool',
  ),
  'newrelic_capture_params' => 
  array (
    0 => 'void',
    'enable=' => 'bool',
  ),
  'newrelic_custom_metric' => 
  array (
    0 => 'bool',
    'metric_name' => 'string',
    'value' => 'float',
  ),
  'newrelic_disable_autorum' => 
  array (
    0 => 'true',
  ),
  'newrelic_end_of_transaction' => 
  array (
    0 => 'void',
  ),
  'newrelic_end_transaction' => 
  array (
    0 => 'bool',
    'ignore=' => 'bool',
  ),
  'newrelic_get_browser_timing_footer' => 
  array (
    0 => 'string',
    'include_tags=' => 'bool',
  ),
  'newrelic_get_browser_timing_header' => 
  array (
    0 => 'string',
    'include_tags=' => 'bool',
  ),
  'newrelic_ignore_apdex' => 
  array (
    0 => 'void',
  ),
  'newrelic_ignore_transaction' => 
  array (
    0 => 'void',
  ),
  'newrelic_name_transaction' => 
  array (
    0 => 'bool',
    'name' => 'string',
  ),
  'newrelic_notice_error' => 
  array (
    0 => 'void',
    'message' => 'string',
    'exception=' => 'Exception|Throwable',
  ),
  'newrelic_notice_error\'1' => 
  array (
    0 => 'void',
    'unused_1' => 'string',
    'message' => 'string',
    'unused_2' => 'string',
    'unused_3' => 'int',
    'unused_4=' => 'mixed',
  ),
  'newrelic_record_custom_event' => 
  array (
    0 => 'void',
    'name' => 'string',
    'attributes' => 'array<array-key, mixed>',
  ),
  'newrelic_record_datastore_segment' => 
  array (
    0 => 'mixed',
    'func' => 'callable',
    'parameters' => 'array<array-key, mixed>',
  ),
  'newrelic_set_appname' => 
  array (
    0 => 'bool',
    'name' => 'string',
    'license=' => 'string',
    'xmit=' => 'bool',
  ),
  'newrelic_set_user_attributes' => 
  array (
    0 => 'bool',
    'user' => 'string',
    'account' => 'string',
    'product' => 'string',
  ),
  'newrelic_start_transaction' => 
  array (
    0 => 'bool',
    'appname' => 'string',
    'license=' => 'string',
  ),
  'next' => 
  array (
    0 => 'mixed',
    '&r_array' => 'array<array-key, mixed>',
  ),
  'ngettext' => 
  array (
    0 => 'string',
    'singular' => 'string',
    'plural' => 'string',
    'count' => 'int',
  ),
  'nl2br' => 
  array (
    0 => 'string',
    'string' => 'string',
    'use_xhtml=' => 'bool',
  ),
  'nl_langinfo' => 
  array (
    0 => 'false|string',
    'item' => 'int',
  ),
  'norewinditerator::getinneriterator' => 
  array (
    0 => 'Iterator|null',
  ),
  'norewinditerator::next' => 
  array (
    0 => 'void',
  ),
  'norewinditerator::rewind' => 
  array (
    0 => 'void',
  ),
  'norewinditerator::valid' => 
  array (
    0 => 'bool',
  ),
  'normalizer::getrawdecomposition' => 
  array (
    0 => 'null|string',
    'string' => 'string',
    'form=' => 'int',
  ),
  'normalizer::isnormalized' => 
  array (
    0 => 'bool',
    'string' => 'string',
    'form=' => 'int',
  ),
  'normalizer::normalize' => 
  array (
    0 => 'false|string',
    'string' => 'string',
    'form=' => 'int',
  ),
  'normalizer_get_raw_decomposition' => 
  array (
    0 => 'null|string',
    'string' => 'string',
    'form=' => 'int',
  ),
  'normalizer_is_normalized' => 
  array (
    0 => 'bool',
    'string' => 'string',
    'form=' => 'int',
  ),
  'normalizer_normalize' => 
  array (
    0 => 'false|string',
    'string' => 'string',
    'form=' => 'int',
  ),
  'notes_body' => 
  array (
    0 => 'array<array-key, mixed>',
    'server' => 'string',
    'mailbox' => 'string',
    'msg_number' => 'int',
  ),
  'notes_copy_db' => 
  array (
    0 => 'bool',
    'from_database_name' => 'string',
    'to_database_name' => 'string',
  ),
  'notes_create_db' => 
  array (
    0 => 'bool',
    'database_name' => 'string',
  ),
  'notes_create_note' => 
  array (
    0 => 'bool',
    'database_name' => 'string',
    'form_name' => 'string',
  ),
  'notes_drop_db' => 
  array (
    0 => 'bool',
    'database_name' => 'string',
  ),
  'notes_find_note' => 
  array (
    0 => 'int',
    'database_name' => 'string',
    'name' => 'string',
    'type=' => 'string',
  ),
  'notes_header_info' => 
  array (
    0 => 'object',
    'server' => 'string',
    'mailbox' => 'string',
    'msg_number' => 'int',
  ),
  'notes_list_msgs' => 
  array (
    0 => 'bool',
    'db' => 'string',
  ),
  'notes_mark_read' => 
  array (
    0 => 'bool',
    'database_name' => 'string',
    'user_name' => 'string',
    'note_id' => 'string',
  ),
  'notes_mark_unread' => 
  array (
    0 => 'bool',
    'database_name' => 'string',
    'user_name' => 'string',
    'note_id' => 'string',
  ),
  'notes_nav_create' => 
  array (
    0 => 'bool',
    'database_name' => 'string',
    'name' => 'string',
  ),
  'notes_search' => 
  array (
    0 => 'array<array-key, mixed>',
    'database_name' => 'string',
    'keywords' => 'string',
  ),
  'notes_unread' => 
  array (
    0 => 'array<array-key, mixed>',
    'database_name' => 'string',
    'user_name' => 'string',
  ),
  'notes_version' => 
  array (
    0 => 'float',
    'database_name' => 'string',
  ),
  'nsapi_request_headers' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'nsapi_response_headers' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'nsapi_virtual' => 
  array (
    0 => 'bool',
    'uri' => 'string',
  ),
  'nthmac' => 
  array (
    0 => 'string',
    'clent' => 'string',
    'data' => 'string',
  ),
  'number_format' => 
  array (
    0 => 'string',
    'num' => 'float',
    'decimals=' => 'int',
    'decimal_separator=' => 'null|string',
    'thousands_separator=' => 'null|string',
  ),
  'numberformatter::__construct' => 
  array (
    0 => 'void',
    'locale' => 'string',
    'style' => 'int',
    'pattern=' => 'null|string',
  ),
  'numberformatter::create' => 
  array (
    0 => 'NumberFormatter|null',
    'locale' => 'string',
    'style' => 'int',
    'pattern=' => 'null|string',
  ),
  'numberformatter::format' => 
  array (
    0 => 'false|string',
    'num' => 'float|int',
    'type=' => 'int',
  ),
  'numberformatter::formatcurrency' => 
  array (
    0 => 'false|string',
    'amount' => 'float',
    'currency' => 'string',
  ),
  'numberformatter::getattribute' => 
  array (
    0 => 'false|float|int',
    'attribute' => 'int',
  ),
  'numberformatter::geterrorcode' => 
  array (
    0 => 'int',
  ),
  'numberformatter::geterrormessage' => 
  array (
    0 => 'string',
  ),
  'numberformatter::getlocale' => 
  array (
    0 => 'string',
    'type=' => 'int',
  ),
  'numberformatter::getpattern' => 
  array (
    0 => 'false|string',
  ),
  'numberformatter::getsymbol' => 
  array (
    0 => 'false|string',
    'symbol' => 'int',
  ),
  'numberformatter::gettextattribute' => 
  array (
    0 => 'false|string',
    'attribute' => 'int',
  ),
  'numberformatter::parse' => 
  array (
    0 => 'false|float|int',
    'string' => 'string',
    'type=' => 'int',
    '&offset=' => 'int',
  ),
  'numberformatter::parsecurrency' => 
  array (
    0 => 'false|float',
    'string' => 'string',
    '&w_currency' => 'string',
    '&offset=' => 'int',
  ),
  'numberformatter::setattribute' => 
  array (
    0 => 'bool',
    'attribute' => 'int',
    'value' => 'float|int',
  ),
  'numberformatter::setpattern' => 
  array (
    0 => 'bool',
    'pattern' => 'string',
  ),
  'numberformatter::setsymbol' => 
  array (
    0 => 'bool',
    'symbol' => 'int',
    'value' => 'string',
  ),
  'numberformatter::settextattribute' => 
  array (
    0 => 'bool',
    'attribute' => 'int',
    'value' => 'string',
  ),
  'numfmt_create' => 
  array (
    0 => 'NumberFormatter|null',
    'locale' => 'string',
    'style' => 'int',
    'pattern=' => 'null|string',
  ),
  'numfmt_format' => 
  array (
    0 => 'false|string',
    'formatter' => 'NumberFormatter',
    'num' => 'float|int',
    'type=' => 'int',
  ),
  'numfmt_format_currency' => 
  array (
    0 => 'false|string',
    'formatter' => 'NumberFormatter',
    'amount' => 'float',
    'currency' => 'string',
  ),
  'numfmt_get_attribute' => 
  array (
    0 => 'false|float|int',
    'formatter' => 'NumberFormatter',
    'attribute' => 'int',
  ),
  'numfmt_get_error_code' => 
  array (
    0 => 'int',
    'formatter' => 'NumberFormatter',
  ),
  'numfmt_get_error_message' => 
  array (
    0 => 'string',
    'formatter' => 'NumberFormatter',
  ),
  'numfmt_get_locale' => 
  array (
    0 => 'string',
    'formatter' => 'NumberFormatter',
    'type=' => 'int',
  ),
  'numfmt_get_pattern' => 
  array (
    0 => 'false|string',
    'formatter' => 'NumberFormatter',
  ),
  'numfmt_get_symbol' => 
  array (
    0 => 'false|string',
    'formatter' => 'NumberFormatter',
    'symbol' => 'int',
  ),
  'numfmt_get_text_attribute' => 
  array (
    0 => 'false|string',
    'formatter' => 'NumberFormatter',
    'attribute' => 'int',
  ),
  'numfmt_parse' => 
  array (
    0 => 'false|float|int',
    'formatter' => 'NumberFormatter',
    'string' => 'string',
    'type=' => 'int',
    '&offset=' => 'int',
  ),
  'numfmt_parse_currency' => 
  array (
    0 => 'false|float',
    'formatter' => 'NumberFormatter',
    'string' => 'string',
    '&w_currency' => 'string',
    '&offset=' => 'int',
  ),
  'numfmt_set_attribute' => 
  array (
    0 => 'bool',
    'formatter' => 'NumberFormatter',
    'attribute' => 'int',
    'value' => 'float|int',
  ),
  'numfmt_set_pattern' => 
  array (
    0 => 'bool',
    'formatter' => 'NumberFormatter',
    'pattern' => 'string',
  ),
  'numfmt_set_symbol' => 
  array (
    0 => 'bool',
    'formatter' => 'NumberFormatter',
    'symbol' => 'int',
    'value' => 'string',
  ),
  'numfmt_set_text_attribute' => 
  array (
    0 => 'bool',
    'formatter' => 'NumberFormatter',
    'attribute' => 'int',
    'value' => 'string',
  ),
  'oauth::__construct' => 
  array (
    0 => 'void',
    'consumer_key' => 'string',
    'consumer_secret' => 'string',
    'signature_method=' => 'string',
    'auth_type=' => 'int',
  ),
  'oauth::disabledebug' => 
  array (
    0 => 'bool',
  ),
  'oauth::disableredirects' => 
  array (
    0 => 'bool',
  ),
  'oauth::disablesslchecks' => 
  array (
    0 => 'bool',
  ),
  'oauth::enabledebug' => 
  array (
    0 => 'bool',
  ),
  'oauth::enableredirects' => 
  array (
    0 => 'bool',
  ),
  'oauth::enablesslchecks' => 
  array (
    0 => 'bool',
  ),
  'oauth::fetch' => 
  array (
    0 => 'mixed',
    'protected_resource_url' => 'string',
    'extra_parameters=' => 'array<array-key, mixed>',
    'http_method=' => 'string',
    'http_headers=' => 'array<array-key, mixed>',
  ),
  'oauth::generatesignature' => 
  array (
    0 => 'string',
    'http_method' => 'string',
    'url' => 'string',
    'extra_parameters=' => 'mixed',
  ),
  'oauth::getaccesstoken' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'access_token_url' => 'string',
    'auth_session_handle=' => 'string',
    'verifier_token=' => 'string',
    'http_method=' => 'string',
  ),
  'oauth::getcapath' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'oauth::getlastresponse' => 
  array (
    0 => 'string',
  ),
  'oauth::getlastresponseheaders' => 
  array (
    0 => 'false|string',
  ),
  'oauth::getlastresponseinfo' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'oauth::getrequestheader' => 
  array (
    0 => 'false|string',
    'http_method' => 'string',
    'url' => 'string',
    'extra_parameters=' => 'mixed',
  ),
  'oauth::getrequesttoken' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'request_token_url' => 'string',
    'callback_url=' => 'string',
    'http_method=' => 'string',
  ),
  'oauth::setauthtype' => 
  array (
    0 => 'bool',
    'auth_type' => 'int',
  ),
  'oauth::setcapath' => 
  array (
    0 => 'mixed',
    'ca_path=' => 'string',
    'ca_info=' => 'string',
  ),
  'oauth::setnonce' => 
  array (
    0 => 'mixed',
    'nonce' => 'string',
  ),
  'oauth::setrequestengine' => 
  array (
    0 => 'void',
    'reqengine' => 'int',
  ),
  'oauth::setrsacertificate' => 
  array (
    0 => 'mixed',
    'cert' => 'string',
  ),
  'oauth::setsslchecks' => 
  array (
    0 => 'bool',
    'sslcheck' => 'int',
  ),
  'oauth::settimeout' => 
  array (
    0 => 'void',
    'timeout' => 'int',
  ),
  'oauth::settimestamp' => 
  array (
    0 => 'mixed',
    'timestamp' => 'string',
  ),
  'oauth::settoken' => 
  array (
    0 => 'bool',
    'token' => 'string',
    'token_secret' => 'string',
  ),
  'oauth::setversion' => 
  array (
    0 => 'bool',
    'version' => 'string',
  ),
  'oauth_get_sbs' => 
  array (
    0 => 'string',
    'http_method' => 'string',
    'uri' => 'string',
    'parameters' => 'array<array-key, mixed>',
  ),
  'oauth_urlencode' => 
  array (
    0 => 'string',
    'uri' => 'string',
  ),
  'oauthprovider::__construct' => 
  array (
    0 => 'void',
    'params_array=' => 'array<array-key, mixed>',
  ),
  'oauthprovider::addrequiredparameter' => 
  array (
    0 => 'bool',
    'req_params' => 'string',
  ),
  'oauthprovider::callconsumerhandler' => 
  array (
    0 => 'void',
  ),
  'oauthprovider::calltimestampnoncehandler' => 
  array (
    0 => 'void',
  ),
  'oauthprovider::calltokenhandler' => 
  array (
    0 => 'void',
  ),
  'oauthprovider::checkoauthrequest' => 
  array (
    0 => 'void',
    'uri=' => 'string',
    'method=' => 'string',
  ),
  'oauthprovider::consumerhandler' => 
  array (
    0 => 'void',
    'callback_function' => 'callable',
  ),
  'oauthprovider::generatetoken' => 
  array (
    0 => 'string',
    'size' => 'int',
    'strong=' => 'bool',
  ),
  'oauthprovider::is2leggedendpoint' => 
  array (
    0 => 'void',
    'params_array' => 'mixed',
  ),
  'oauthprovider::isrequesttokenendpoint' => 
  array (
    0 => 'void',
    'will_issue_request_token' => 'bool',
  ),
  'oauthprovider::removerequiredparameter' => 
  array (
    0 => 'bool',
    'req_params' => 'string',
  ),
  'oauthprovider::reportproblem' => 
  array (
    0 => 'string',
    'oauthexception' => 'string',
    'send_headers=' => 'bool',
  ),
  'oauthprovider::setparam' => 
  array (
    0 => 'bool',
    'param_key' => 'string',
    'param_val=' => 'mixed',
  ),
  'oauthprovider::setrequesttokenpath' => 
  array (
    0 => 'bool',
    'path' => 'string',
  ),
  'oauthprovider::timestampnoncehandler' => 
  array (
    0 => 'void',
    'callback_function' => 'callable',
  ),
  'oauthprovider::tokenhandler' => 
  array (
    0 => 'void',
    'callback_function' => 'callable',
  ),
  'ob_clean' => 
  array (
    0 => 'bool',
  ),
  'ob_deflatehandler' => 
  array (
    0 => 'string',
    'data' => 'string',
    'mode' => 'int',
  ),
  'ob_end_clean' => 
  array (
    0 => 'bool',
  ),
  'ob_end_flush' => 
  array (
    0 => 'bool',
  ),
  'ob_etaghandler' => 
  array (
    0 => 'string',
    'data' => 'string',
    'mode' => 'int',
  ),
  'ob_flush' => 
  array (
    0 => 'bool',
  ),
  'ob_get_clean' => 
  array (
    0 => 'false|string',
  ),
  'ob_get_contents' => 
  array (
    0 => 'false|string',
  ),
  'ob_get_flush' => 
  array (
    0 => 'false|string',
  ),
  'ob_get_length' => 
  array (
    0 => 'false|int',
  ),
  'ob_get_level' => 
  array (
    0 => 'int',
  ),
  'ob_get_status' => 
  array (
    0 => 'array<array-key, mixed>',
    'full_status=' => 'bool',
  ),
  'ob_gzhandler' => 
  array (
    0 => 'false|string',
    'data' => 'string',
    'flags' => 'int',
  ),
  'ob_iconv_handler' => 
  array (
    0 => 'string',
    'contents' => 'string',
    'status' => 'int',
  ),
  'ob_implicit_flush' => 
  array (
    0 => 'void',
    'enable=' => 'bool',
  ),
  'ob_inflatehandler' => 
  array (
    0 => 'string',
    'data' => 'string',
    'mode' => 'int',
  ),
  'ob_list_handlers' => 
  array (
    0 => 'list<string>',
  ),
  'ob_start' => 
  array (
    0 => 'bool',
    'callback=' => 'array<array-key, mixed>|callable|null|string',
    'chunk_size=' => 'int',
    'flags=' => 'int',
  ),
  'ob_tidyhandler' => 
  array (
    0 => 'string',
    'input' => 'string',
    'mode=' => 'int',
  ),
  'oci_bind_array_by_name' => 
  array (
    0 => 'bool',
    'statement' => 'resource',
    'param' => 'string',
    '&rw_var' => 'array<array-key, mixed>',
    'max_array_length' => 'int',
    'max_item_length=' => 'int',
    'type=' => 'int',
  ),
  'oci_bind_by_name' => 
  array (
    0 => 'bool',
    'statement' => 'resource',
    'param' => 'string',
    '&rw_var' => 'mixed',
    'max_length=' => 'int',
    'type=' => 'int',
  ),
  'oci_cancel' => 
  array (
    0 => 'bool',
    'statement' => 'resource',
  ),
  'oci_client_version' => 
  array (
    0 => 'string',
  ),
  'oci_close' => 
  array (
    0 => 'bool',
    'connection' => 'resource',
  ),
  'oci_collection_append' => 
  array (
    0 => 'bool',
    'collection' => 'string',
  ),
  'oci_collection_assign' => 
  array (
    0 => 'bool',
    'to' => 'object',
  ),
  'oci_collection_element_assign' => 
  array (
    0 => 'bool',
    'collection' => 'int',
    'index' => 'string',
  ),
  'oci_collection_element_get' => 
  array (
    0 => 'string',
    'collection' => 'int',
  ),
  'oci_collection_max' => 
  array (
    0 => 'int',
  ),
  'oci_collection_size' => 
  array (
    0 => 'int',
  ),
  'oci_collection_trim' => 
  array (
    0 => 'bool',
    'collection' => 'int',
  ),
  'oci_commit' => 
  array (
    0 => 'bool',
    'connection' => 'resource',
  ),
  'oci_connect' => 
  array (
    0 => 'false|resource',
    'username' => 'string',
    'password' => 'string',
    'connection_string=' => 'string',
    'encoding=' => 'string',
    'session_mode=' => 'int',
  ),
  'oci_define_by_name' => 
  array (
    0 => 'bool',
    'statement' => 'resource',
    'column' => 'string',
    '&w_var' => 'mixed',
    'type=' => 'int',
  ),
  'oci_error' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'connection_or_statement=' => 'resource',
  ),
  'oci_execute' => 
  array (
    0 => 'bool',
    'statement' => 'resource',
    'mode=' => 'int',
  ),
  'oci_fetch' => 
  array (
    0 => 'bool',
    'statement' => 'resource',
  ),
  'oci_fetch_all' => 
  array (
    0 => 'false|int',
    'statement' => 'resource',
    '&w_output' => 'array<array-key, mixed>',
    'offset=' => 'int',
    'limit=' => 'int',
    'flags=' => 'int',
  ),
  'oci_fetch_array' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'statement' => 'resource',
    'mode=' => 'int',
  ),
  'oci_fetch_assoc' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'statement' => 'resource',
  ),
  'oci_fetch_object' => 
  array (
    0 => 'false|object',
    'statement' => 'resource',
  ),
  'oci_fetch_row' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'statement' => 'resource',
  ),
  'oci_field_is_null' => 
  array (
    0 => 'bool',
    'statement' => 'resource',
    'column' => 'mixed',
  ),
  'oci_field_name' => 
  array (
    0 => 'false|string',
    'statement' => 'resource',
    'column' => 'mixed',
  ),
  'oci_field_precision' => 
  array (
    0 => 'false|int',
    'statement' => 'resource',
    'column' => 'mixed',
  ),
  'oci_field_scale' => 
  array (
    0 => 'false|int',
    'statement' => 'resource',
    'column' => 'mixed',
  ),
  'oci_field_size' => 
  array (
    0 => 'false|int',
    'statement' => 'resource',
    'column' => 'mixed',
  ),
  'oci_field_type' => 
  array (
    0 => 'false|mixed',
    'statement' => 'resource',
    'column' => 'mixed',
  ),
  'oci_field_type_raw' => 
  array (
    0 => 'false|int',
    'statement' => 'resource',
    'column' => 'mixed',
  ),
  'oci_free_collection' => 
  array (
    0 => 'bool',
  ),
  'oci_free_cursor' => 
  array (
    0 => 'bool',
    'statement' => 'resource',
  ),
  'oci_free_descriptor' => 
  array (
    0 => 'bool',
  ),
  'oci_free_statement' => 
  array (
    0 => 'bool',
    'statement' => 'resource',
  ),
  'oci_get_implicit' => 
  array (
    0 => 'bool',
    'stmt' => 'mixed',
  ),
  'oci_get_implicit_resultset' => 
  array (
    0 => 'false|resource',
    'statement' => 'resource',
  ),
  'oci_internal_debug' => 
  array (
    0 => 'void',
    'onoff' => 'bool',
  ),
  'oci_lob_append' => 
  array (
    0 => 'bool',
    'to' => 'object',
  ),
  'oci_lob_close' => 
  array (
    0 => 'bool',
  ),
  'oci_lob_copy' => 
  array (
    0 => 'bool',
    'to' => 'OCILob',
    'from' => 'OCILob',
    'length=' => 'int',
  ),
  'oci_lob_eof' => 
  array (
    0 => 'bool',
  ),
  'oci_lob_erase' => 
  array (
    0 => 'int',
    'lob' => 'int',
    'offset' => 'int',
  ),
  'oci_lob_export' => 
  array (
    0 => 'bool',
    'lob' => 'string',
    'filename' => 'int',
    'offset' => 'int',
  ),
  'oci_lob_flush' => 
  array (
    0 => 'bool',
    'lob' => 'int',
  ),
  'oci_lob_import' => 
  array (
    0 => 'bool',
    'lob' => 'string',
  ),
  'oci_lob_is_equal' => 
  array (
    0 => 'bool',
    'lob1' => 'OCILob',
    'lob2' => 'OCILob',
  ),
  'oci_lob_load' => 
  array (
    0 => 'string',
  ),
  'oci_lob_read' => 
  array (
    0 => 'string',
    'lob' => 'int',
  ),
  'oci_lob_rewind' => 
  array (
    0 => 'bool',
  ),
  'oci_lob_save' => 
  array (
    0 => 'bool',
    'lob' => 'string',
    'data' => 'int',
  ),
  'oci_lob_seek' => 
  array (
    0 => 'bool',
    'lob' => 'int',
    'offset' => 'int',
  ),
  'oci_lob_size' => 
  array (
    0 => 'int',
  ),
  'oci_lob_tell' => 
  array (
    0 => 'int',
  ),
  'oci_lob_truncate' => 
  array (
    0 => 'bool',
    'lob' => 'int',
  ),
  'oci_lob_write' => 
  array (
    0 => 'int',
    'lob' => 'string',
    'data' => 'int',
  ),
  'oci_lob_write_temporary' => 
  array (
    0 => 'bool',
    'value' => 'string',
    'lob_type' => 'int',
  ),
  'oci_new_collection' => 
  array (
    0 => 'OCICollection|false',
    'connection' => 'resource',
    'type_name' => 'string',
    'schema=' => 'string',
  ),
  'oci_new_connect' => 
  array (
    0 => 'false|resource',
    'username' => 'string',
    'password' => 'string',
    'connection_string=' => 'string',
    'encoding=' => 'string',
    'session_mode=' => 'int',
  ),
  'oci_new_cursor' => 
  array (
    0 => 'false|resource',
    'connection' => 'resource',
  ),
  'oci_new_descriptor' => 
  array (
    0 => 'OCILob|false',
    'connection' => 'resource',
    'type=' => 'int',
  ),
  'oci_num_fields' => 
  array (
    0 => 'false|int',
    'statement' => 'resource',
  ),
  'oci_num_rows' => 
  array (
    0 => 'false|int',
    'statement' => 'resource',
  ),
  'oci_parse' => 
  array (
    0 => 'false|resource',
    'connection' => 'resource',
    'sql' => 'string',
  ),
  'oci_password_change' => 
  array (
    0 => 'bool',
    'connection' => 'resource',
    'username' => 'string',
    'old_password' => 'string',
    'new_password' => 'string',
  ),
  'oci_pconnect' => 
  array (
    0 => 'false|resource',
    'username' => 'string',
    'password' => 'string',
    'connection_string=' => 'string',
    'encoding=' => 'string',
    'session_mode=' => 'int',
  ),
  'oci_register_taf_callback' => 
  array (
    0 => 'bool',
    'connection' => 'resource',
    'callback=' => 'callable',
  ),
  'oci_result' => 
  array (
    0 => 'false|mixed',
    'statement' => 'resource',
    'column' => 'mixed',
  ),
  'oci_rollback' => 
  array (
    0 => 'bool',
    'connection' => 'resource',
  ),
  'oci_server_version' => 
  array (
    0 => 'false|string',
    'connection' => 'resource',
  ),
  'oci_set_action' => 
  array (
    0 => 'bool',
    'connection' => 'resource',
    'action' => 'string',
  ),
  'oci_set_call_timeout' => 
  array (
    0 => 'bool',
    'connection' => 'resource',
    'timeout' => 'int',
  ),
  'oci_set_client_identifier' => 
  array (
    0 => 'bool',
    'connection' => 'resource',
    'client_id' => 'string',
  ),
  'oci_set_client_info' => 
  array (
    0 => 'bool',
    'connection' => 'resource',
    'client_info' => 'string',
  ),
  'oci_set_db_operation' => 
  array (
    0 => 'bool',
    'connection' => 'resource',
    'action' => 'string',
  ),
  'oci_set_edition' => 
  array (
    0 => 'bool',
    'edition' => 'string',
  ),
  'oci_set_module_name' => 
  array (
    0 => 'bool',
    'connection' => 'resource',
    'name' => 'string',
  ),
  'oci_set_prefetch' => 
  array (
    0 => 'bool',
    'statement' => 'resource',
    'rows' => 'int',
  ),
  'oci_statement_type' => 
  array (
    0 => 'false|string',
    'statement' => 'resource',
  ),
  'oci_unregister_taf_callback' => 
  array (
    0 => 'bool',
    'connection' => 'resource',
  ),
  'ocicollection::append' => 
  array (
    0 => 'bool',
    'value' => 'mixed',
  ),
  'ocicollection::assign' => 
  array (
    0 => 'bool',
    'from' => 'OCI_Collection',
  ),
  'ocicollection::assignelem' => 
  array (
    0 => 'bool',
    'index' => 'int',
    'value' => 'mixed',
  ),
  'ocicollection::free' => 
  array (
    0 => 'bool',
  ),
  'ocicollection::getelem' => 
  array (
    0 => 'mixed',
    'index' => 'int',
  ),
  'ocicollection::max' => 
  array (
    0 => 'false|int',
  ),
  'ocicollection::size' => 
  array (
    0 => 'false|int',
  ),
  'ocicollection::trim' => 
  array (
    0 => 'bool',
    'num' => 'int',
  ),
  'ocifetchinto' => 
  array (
    0 => 'bool|int',
    'statement' => 'resource',
    '&w_result' => 'array<array-key, mixed>',
    'mode=' => 'int',
  ),
  'ocigetbufferinglob' => 
  array (
    0 => 'bool',
  ),
  'ocilob::append' => 
  array (
    0 => 'bool',
    'lob_from' => 'OCILob',
  ),
  'ocilob::close' => 
  array (
    0 => 'bool',
  ),
  'ocilob::eof' => 
  array (
    0 => 'bool',
  ),
  'ocilob::erase' => 
  array (
    0 => 'false|int',
    'offset=' => 'int',
    'length=' => 'int',
  ),
  'ocilob::export' => 
  array (
    0 => 'bool',
    'filename' => 'string',
    'start=' => 'int',
    'length=' => 'int',
  ),
  'ocilob::flush' => 
  array (
    0 => 'bool',
    'flag=' => 'int',
  ),
  'ocilob::free' => 
  array (
    0 => 'bool',
  ),
  'ocilob::getbuffering' => 
  array (
    0 => 'bool',
  ),
  'ocilob::import' => 
  array (
    0 => 'bool',
    'filename' => 'string',
  ),
  'ocilob::load' => 
  array (
    0 => 'false|string',
  ),
  'ocilob::read' => 
  array (
    0 => 'false|string',
    'length' => 'int',
  ),
  'ocilob::rewind' => 
  array (
    0 => 'bool',
  ),
  'ocilob::save' => 
  array (
    0 => 'bool',
    'data' => 'string',
    'offset=' => 'int',
  ),
  'ocilob::savefile' => 
  array (
    0 => 'bool',
    'filename' => 'mixed',
  ),
  'ocilob::seek' => 
  array (
    0 => 'bool',
    'offset' => 'int',
    'whence=' => 'int',
  ),
  'ocilob::setbuffering' => 
  array (
    0 => 'bool',
    'on_off' => 'bool',
  ),
  'ocilob::size' => 
  array (
    0 => 'false|int',
  ),
  'ocilob::tell' => 
  array (
    0 => 'false|int',
  ),
  'ocilob::truncate' => 
  array (
    0 => 'bool',
    'length=' => 'int',
  ),
  'ocilob::write' => 
  array (
    0 => 'false|int',
    'data' => 'string',
    'length=' => 'int',
  ),
  'ocilob::writetemporary' => 
  array (
    0 => 'bool',
    'data' => 'string',
    'lob_type=' => 'int',
  ),
  'ocilob::writetofile' => 
  array (
    0 => 'bool',
    'filename' => 'mixed',
    'start' => 'mixed',
    'length' => 'mixed',
  ),
  'ocisetbufferinglob' => 
  array (
    0 => 'bool',
    'lob' => 'bool',
  ),
  'octdec' => 
  array (
    0 => 'float|int',
    'octal_string' => 'string',
  ),
  'odbc_autocommit' => 
  array (
    0 => 'bool|int',
    'odbc' => 'resource',
    'enable=' => 'bool',
  ),
  'odbc_binmode' => 
  array (
    0 => 'bool',
    'statement' => 'resource',
    'mode' => 'int',
  ),
  'odbc_close' => 
  array (
    0 => 'void',
    'odbc' => 'resource',
  ),
  'odbc_close_all' => 
  array (
    0 => 'void',
  ),
  'odbc_columnprivileges' => 
  array (
    0 => 'false|resource',
    'odbc' => 'resource',
    'catalog' => 'null|string',
    'schema' => 'string',
    'table' => 'string',
    'column' => 'string',
  ),
  'odbc_columns' => 
  array (
    0 => 'false|resource',
    'odbc' => 'resource',
    'catalog=' => 'null|string',
    'schema=' => 'null|string',
    'table=' => 'null|string',
    'column=' => 'null|string',
  ),
  'odbc_commit' => 
  array (
    0 => 'bool',
    'odbc' => 'resource',
  ),
  'odbc_connect' => 
  array (
    0 => 'false|resource',
    'dsn' => 'string',
    'user' => 'string',
    'password' => 'string',
    'cursor_option=' => 'int',
  ),
  'odbc_cursor' => 
  array (
    0 => 'string',
    'statement' => 'resource',
  ),
  'odbc_data_source' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'odbc' => 'resource',
    'fetch_type' => 'int',
  ),
  'odbc_do' => 
  array (
    0 => 'resource',
    'odbc' => 'resource',
    'query' => 'string',
  ),
  'odbc_error' => 
  array (
    0 => 'string',
    'odbc=' => 'resource',
  ),
  'odbc_errormsg' => 
  array (
    0 => 'string',
    'odbc=' => 'resource',
  ),
  'odbc_exec' => 
  array (
    0 => 'resource',
    'odbc' => 'resource',
    'query' => 'string',
  ),
  'odbc_execute' => 
  array (
    0 => 'bool',
    'statement' => 'resource',
    'params=' => 'array<array-key, mixed>',
  ),
  'odbc_fetch_array' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'statement' => 'resource',
    'row=' => 'int',
  ),
  'odbc_fetch_into' => 
  array (
    0 => 'int',
    'statement' => 'resource',
    '&w_array' => 'array<array-key, mixed>',
    'row=' => 'int',
  ),
  'odbc_fetch_object' => 
  array (
    0 => 'false|stdClass',
    'statement' => 'resource',
    'row=' => 'int',
  ),
  'odbc_fetch_row' => 
  array (
    0 => 'bool',
    'statement' => 'resource',
    'row=' => 'int|null',
  ),
  'odbc_field_len' => 
  array (
    0 => 'false|int',
    'statement' => 'resource',
    'field' => 'int',
  ),
  'odbc_field_name' => 
  array (
    0 => 'false|string',
    'statement' => 'resource',
    'field' => 'int',
  ),
  'odbc_field_num' => 
  array (
    0 => 'false|int',
    'statement' => 'resource',
    'field' => 'string',
  ),
  'odbc_field_precision' => 
  array (
    0 => 'int',
    'statement' => 'resource',
    'field' => 'int',
  ),
  'odbc_field_scale' => 
  array (
    0 => 'false|int',
    'statement' => 'resource',
    'field' => 'int',
  ),
  'odbc_field_type' => 
  array (
    0 => 'false|string',
    'statement' => 'resource',
    'field' => 'int',
  ),
  'odbc_foreignkeys' => 
  array (
    0 => 'false|resource',
    'odbc' => 'resource',
    'pk_catalog' => 'null|string',
    'pk_schema' => 'string',
    'pk_table' => 'string',
    'fk_catalog' => 'string',
    'fk_schema' => 'string',
    'fk_table' => 'string',
  ),
  'odbc_free_result' => 
  array (
    0 => 'bool',
    'statement' => 'resource',
  ),
  'odbc_gettypeinfo' => 
  array (
    0 => 'resource',
    'odbc' => 'resource',
    'data_type=' => 'int',
  ),
  'odbc_longreadlen' => 
  array (
    0 => 'bool',
    'statement' => 'resource',
    'length' => 'int',
  ),
  'odbc_next_result' => 
  array (
    0 => 'bool',
    'statement' => 'resource',
  ),
  'odbc_num_fields' => 
  array (
    0 => 'int',
    'statement' => 'resource',
  ),
  'odbc_num_rows' => 
  array (
    0 => 'int',
    'statement' => 'resource',
  ),
  'odbc_pconnect' => 
  array (
    0 => 'false|resource',
    'dsn' => 'string',
    'user' => 'string',
    'password' => 'string',
    'cursor_option=' => 'int',
  ),
  'odbc_prepare' => 
  array (
    0 => 'false|resource',
    'odbc' => 'resource',
    'query' => 'string',
  ),
  'odbc_primarykeys' => 
  array (
    0 => 'false|resource',
    'odbc' => 'resource',
    'catalog' => 'null|string',
    'schema' => 'string',
    'table' => 'string',
  ),
  'odbc_procedurecolumns' => 
  array (
    0 => 'false|resource',
    'odbc' => 'resource',
    'catalog=' => 'null|string',
    'schema=' => 'null|string',
    'procedure=' => 'null|string',
    'column=' => 'null|string',
  ),
  'odbc_procedures' => 
  array (
    0 => 'false|resource',
    'odbc' => 'resource',
    'catalog=' => 'null|string',
    'schema=' => 'null|string',
    'procedure=' => 'null|string',
  ),
  'odbc_result' => 
  array (
    0 => 'bool|null|string',
    'statement' => 'resource',
    'field' => 'int|string',
  ),
  'odbc_result_all' => 
  array (
    0 => 'false|int',
    'statement' => 'resource',
    'format=' => 'string',
  ),
  'odbc_rollback' => 
  array (
    0 => 'bool',
    'odbc' => 'resource',
  ),
  'odbc_setoption' => 
  array (
    0 => 'bool',
    'odbc' => 'resource',
    'which' => 'int',
    'option' => 'int',
    'value' => 'int',
  ),
  'odbc_specialcolumns' => 
  array (
    0 => 'false|resource',
    'odbc' => 'resource',
    'type' => 'int',
    'catalog' => 'null|string',
    'schema' => 'string',
    'table' => 'string',
    'scope' => 'int',
    'nullable' => 'int',
  ),
  'odbc_statistics' => 
  array (
    0 => 'false|resource',
    'odbc' => 'resource',
    'catalog' => 'null|string',
    'schema' => 'string',
    'table' => 'string',
    'unique' => 'int',
    'accuracy' => 'int',
  ),
  'odbc_tableprivileges' => 
  array (
    0 => 'false|resource',
    'odbc' => 'resource',
    'catalog' => 'null|string',
    'schema' => 'string',
    'table' => 'string',
  ),
  'odbc_tables' => 
  array (
    0 => 'false|resource',
    'odbc' => 'resource',
    'catalog=' => 'null|string',
    'schema=' => 'null|string',
    'table=' => 'null|string',
    'types=' => 'null|string',
  ),
  'opcache_compile_file' => 
  array (
    0 => 'bool',
    'filename' => 'string',
  ),
  'opcache_get_configuration' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'opcache_get_status' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'include_scripts=' => 'bool',
  ),
  'opcache_invalidate' => 
  array (
    0 => 'bool',
    'filename' => 'string',
    'force=' => 'bool',
  ),
  'opcache_is_script_cached' => 
  array (
    0 => 'bool',
    'filename' => 'string',
  ),
  'opcache_reset' => 
  array (
    0 => 'bool',
  ),
  'openal_buffer_create' => 
  array (
    0 => 'resource',
  ),
  'openal_buffer_data' => 
  array (
    0 => 'bool',
    'buffer' => 'resource',
    'format' => 'int',
    'data' => 'string',
    'freq' => 'int',
  ),
  'openal_buffer_destroy' => 
  array (
    0 => 'bool',
    'buffer' => 'resource',
  ),
  'openal_buffer_get' => 
  array (
    0 => 'int',
    'buffer' => 'resource',
    'property' => 'int',
  ),
  'openal_buffer_loadwav' => 
  array (
    0 => 'bool',
    'buffer' => 'resource',
    'wavfile' => 'string',
  ),
  'openal_context_create' => 
  array (
    0 => 'resource',
    'device' => 'resource',
  ),
  'openal_context_current' => 
  array (
    0 => 'bool',
    'context' => 'resource',
  ),
  'openal_context_destroy' => 
  array (
    0 => 'bool',
    'context' => 'resource',
  ),
  'openal_context_process' => 
  array (
    0 => 'bool',
    'context' => 'resource',
  ),
  'openal_context_suspend' => 
  array (
    0 => 'bool',
    'context' => 'resource',
  ),
  'openal_device_close' => 
  array (
    0 => 'bool',
    'device' => 'resource',
  ),
  'openal_device_open' => 
  array (
    0 => 'false|resource',
    'device_desc=' => 'string',
  ),
  'openal_listener_get' => 
  array (
    0 => 'mixed',
    'property' => 'int',
  ),
  'openal_listener_set' => 
  array (
    0 => 'bool',
    'property' => 'int',
    'setting' => 'mixed',
  ),
  'openal_source_create' => 
  array (
    0 => 'resource',
  ),
  'openal_source_destroy' => 
  array (
    0 => 'bool',
    'source' => 'resource',
  ),
  'openal_source_get' => 
  array (
    0 => 'mixed',
    'source' => 'resource',
    'property' => 'int',
  ),
  'openal_source_pause' => 
  array (
    0 => 'bool',
    'source' => 'resource',
  ),
  'openal_source_play' => 
  array (
    0 => 'bool',
    'source' => 'resource',
  ),
  'openal_source_rewind' => 
  array (
    0 => 'bool',
    'source' => 'resource',
  ),
  'openal_source_set' => 
  array (
    0 => 'bool',
    'source' => 'resource',
    'property' => 'int',
    'setting' => 'mixed',
  ),
  'openal_source_stop' => 
  array (
    0 => 'bool',
    'source' => 'resource',
  ),
  'openal_stream' => 
  array (
    0 => 'resource',
    'source' => 'resource',
    'format' => 'int',
    'rate' => 'int',
  ),
  'opendir' => 
  array (
    0 => 'false|resource',
    'directory' => 'string',
    'context=' => 'resource',
  ),
  'openlog' => 
  array (
    0 => 'true',
    'prefix' => 'string',
    'flags' => 'int',
    'facility' => 'int',
  ),
  'openssl_cipher_iv_length' => 
  array (
    0 => 'false|int',
    'cipher_algo' => 'string',
  ),
  'openssl_cipher_key_length' => 
  array (
    0 => 'false|int<1, max>',
    'cipher_algo' => 'non-empty-string',
  ),
  'openssl_csr_export' => 
  array (
    0 => 'bool',
    'csr' => 'OpenSSLCertificateSigningRequest|string',
    '&w_output' => 'string',
    'no_text=' => 'bool',
  ),
  'openssl_csr_export_to_file' => 
  array (
    0 => 'bool',
    'csr' => 'OpenSSLCertificateSigningRequest|string',
    'output_filename' => 'string',
    'no_text=' => 'bool',
  ),
  'openssl_csr_get_public_key' => 
  array (
    0 => 'OpenSSLAsymmetricKey|false',
    'csr' => 'OpenSSLCertificateSigningRequest|string',
    'short_names=' => 'bool',
  ),
  'openssl_csr_get_subject' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'csr' => 'OpenSSLCertificateSigningRequest|string',
    'short_names=' => 'bool',
  ),
  'openssl_csr_new' => 
  array (
    0 => 'OpenSSLCertificateSigningRequest|false',
    'distinguished_names' => 'array<array-key, mixed>',
    '&w_private_key' => 'OpenSSLAsymmetricKey',
    'options=' => 'array<array-key, mixed>|null',
    'extra_attributes=' => 'array<array-key, mixed>|null',
  ),
  'openssl_csr_sign' => 
  array (
    0 => 'OpenSSLCertificate|false',
    'csr' => 'OpenSSLCertificateSigningRequest|string',
    'ca_certificate' => 'OpenSSLCertificate|null|string',
    'private_key' => 'OpenSSLAsymmetricKey|OpenSSLCertificate|list{OpenSSLAsymmetricKey|OpenSSLCertificate|string, string}|string',
    'days' => 'int',
    'options=' => 'array<array-key, mixed>|null',
    'serial=' => 'int',
    'serial_hex=' => 'null|string',
  ),
  'openssl_decrypt' => 
  array (
    0 => 'false|string',
    'data' => 'string',
    'cipher_algo' => 'string',
    'passphrase' => 'string',
    'options=' => 'int',
    'iv=' => 'string',
    'tag=' => 'null|string',
    'aad=' => 'string',
  ),
  'openssl_dh_compute_key' => 
  array (
    0 => 'false|string',
    'public_key' => 'string',
    'private_key' => 'OpenSSLAsymmetricKey',
  ),
  'openssl_digest' => 
  array (
    0 => 'false|string',
    'data' => 'string',
    'digest_algo' => 'string',
    'binary=' => 'bool',
  ),
  'openssl_encrypt' => 
  array (
    0 => 'false|string',
    'data' => 'string',
    'cipher_algo' => 'string',
    'passphrase' => 'string',
    'options=' => 'int',
    'iv=' => 'string',
    '&w_tag=' => 'string',
    'aad=' => 'string',
    'tag_length=' => 'int',
  ),
  'openssl_error_string' => 
  array (
    0 => 'false|string',
  ),
  'openssl_free_key' => 
  array (
    0 => 'void',
    'key' => 'OpenSSLAsymmetricKey',
  ),
  'openssl_get_cert_locations' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'openssl_get_cipher_methods' => 
  array (
    0 => 'array<array-key, mixed>',
    'aliases=' => 'bool',
  ),
  'openssl_get_curve_names' => 
  array (
    0 => 'list<string>',
  ),
  'openssl_get_md_methods' => 
  array (
    0 => 'array<array-key, mixed>',
    'aliases=' => 'bool',
  ),
  'openssl_get_privatekey' => 
  array (
    0 => 'OpenSSLAsymmetricKey|false',
    'private_key' => 'OpenSSLAsymmetricKey|OpenSSLCertificate|list{OpenSSLAsymmetricKey|OpenSSLCertificate|string, string}|string',
    'passphrase=' => 'null|string',
  ),
  'openssl_get_publickey' => 
  array (
    0 => 'OpenSSLAsymmetricKey|false',
    'public_key' => 'OpenSSLAsymmetricKey|OpenSSLCertificate|list{OpenSSLAsymmetricKey|OpenSSLCertificate|string, string}|string',
  ),
  'openssl_open' => 
  array (
    0 => 'bool',
    'data' => 'string',
    '&w_output' => 'string',
    'encrypted_key' => 'string',
    'private_key' => 'OpenSSLAsymmetricKey|OpenSSLCertificate|list{OpenSSLAsymmetricKey|OpenSSLCertificate|string, string}|string',
    'cipher_algo' => 'string',
    'iv=' => 'null|string',
  ),
  'openssl_pbkdf2' => 
  array (
    0 => 'false|string',
    'password' => 'string',
    'salt' => 'string',
    'key_length' => 'int',
    'iterations' => 'int',
    'digest_algo=' => 'string',
  ),
  'openssl_pkcs12_export' => 
  array (
    0 => 'bool',
    'certificate' => 'OpenSSLCertificate|string',
    '&w_output' => 'string',
    'private_key' => 'OpenSSLAsymmetricKey|OpenSSLCertificate|list{OpenSSLAsymmetricKey|OpenSSLCertificate|string, string}|string',
    'passphrase' => 'string',
    'options=' => 'array<array-key, mixed>',
  ),
  'openssl_pkcs12_export_to_file' => 
  array (
    0 => 'bool',
    'certificate' => 'OpenSSLCertificate|string',
    'output_filename' => 'string',
    'private_key' => 'OpenSSLAsymmetricKey|OpenSSLCertificate|list{OpenSSLAsymmetricKey|OpenSSLCertificate|string, string}|string',
    'passphrase' => 'string',
    'options=' => 'array<array-key, mixed>',
  ),
  'openssl_pkcs12_read' => 
  array (
    0 => 'bool',
    'pkcs12' => 'string',
    '&w_certificates' => 'array<array-key, mixed>',
    'passphrase' => 'string',
  ),
  'openssl_pkcs7_decrypt' => 
  array (
    0 => 'bool',
    'input_filename' => 'string',
    'output_filename' => 'string',
    'certificate' => 'OpenSSLCertificate|string',
    'private_key=' => 'OpenSSLAsymmetricKey|OpenSSLCertificate|list{OpenSSLAsymmetricKey|OpenSSLCertificate|string, string}|null|string',
  ),
  'openssl_pkcs7_encrypt' => 
  array (
    0 => 'bool',
    'input_filename' => 'string',
    'output_filename' => 'string',
    'certificate' => 'OpenSSLCertificate|list<OpenSSLCertificate|string>|string',
    'headers' => 'array<array-key, mixed>|null',
    'flags=' => 'int',
    'cipher_algo=' => 'int',
  ),
  'openssl_pkcs7_read' => 
  array (
    0 => 'bool',
    'data' => 'string',
    '&w_certificates' => 'array<array-key, mixed>',
  ),
  'openssl_pkcs7_sign' => 
  array (
    0 => 'bool',
    'input_filename' => 'string',
    'output_filename' => 'string',
    'certificate' => 'OpenSSLCertificate|string',
    'private_key' => 'OpenSSLAsymmetricKey|OpenSSLCertificate|list{OpenSSLAsymmetricKey|OpenSSLCertificate|string, string}|string',
    'headers' => 'array<array-key, mixed>|null',
    'flags=' => 'int',
    'untrusted_certificates_filename=' => 'null|string',
  ),
  'openssl_pkcs7_verify' => 
  array (
    0 => 'bool|int',
    'input_filename' => 'string',
    'flags' => 'int',
    'signers_certificates_filename=' => 'null|string',
    'ca_info=' => 'array<array-key, mixed>',
    'untrusted_certificates_filename=' => 'null|string',
    'content=' => 'null|string',
    'output_filename=' => 'null|string',
  ),
  'openssl_pkey_derive' => 
  array (
    0 => 'false|string',
    'public_key' => 'OpenSSLAsymmetricKey|OpenSSLCertificate|list{OpenSSLAsymmetricKey|OpenSSLCertificate|string, string}|string',
    'private_key' => 'OpenSSLAsymmetricKey|OpenSSLCertificate|list{OpenSSLAsymmetricKey|OpenSSLCertificate|string, string}|string',
    'key_length=' => 'int',
  ),
  'openssl_pkey_export' => 
  array (
    0 => 'bool',
    'key' => 'OpenSSLAsymmetricKey|OpenSSLCertificate|list{OpenSSLAsymmetricKey|OpenSSLCertificate|string, string}|string',
    '&w_output' => 'string',
    'passphrase=' => 'null|string',
    'options=' => 'array<array-key, mixed>|null',
  ),
  'openssl_pkey_export_to_file' => 
  array (
    0 => 'bool',
    'key' => 'OpenSSLAsymmetricKey|OpenSSLCertificate|list{OpenSSLAsymmetricKey|OpenSSLCertificate|string, string}|string',
    'output_filename' => 'string',
    'passphrase=' => 'null|string',
    'options=' => 'array<array-key, mixed>|null',
  ),
  'openssl_pkey_free' => 
  array (
    0 => 'void',
    'key' => 'OpenSSLAsymmetricKey',
  ),
  'openssl_pkey_get_details' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'key' => 'OpenSSLAsymmetricKey',
  ),
  'openssl_pkey_get_private' => 
  array (
    0 => 'OpenSSLAsymmetricKey|false',
    'private_key' => 'OpenSSLAsymmetricKey|OpenSSLCertificate|array<array-key, mixed>|string',
    'passphrase=' => 'null|string',
  ),
  'openssl_pkey_get_public' => 
  array (
    0 => 'OpenSSLAsymmetricKey|false',
    'public_key' => 'OpenSSLAsymmetricKey|OpenSSLCertificate|list{OpenSSLAsymmetricKey|OpenSSLCertificate|string, string}|string',
  ),
  'openssl_pkey_new' => 
  array (
    0 => 'OpenSSLAsymmetricKey|false',
    'options=' => 'array<array-key, mixed>|null',
  ),
  'openssl_private_decrypt' => 
  array (
    0 => 'bool',
    'data' => 'string',
    '&w_decrypted_data' => 'string',
    'private_key' => 'OpenSSLAsymmetricKey|OpenSSLCertificate|list{OpenSSLAsymmetricKey|OpenSSLCertificate|string, string}|string',
    'padding=' => 'int',
  ),
  'openssl_private_encrypt' => 
  array (
    0 => 'bool',
    'data' => 'string',
    '&w_encrypted_data' => 'string',
    'private_key' => 'OpenSSLAsymmetricKey|OpenSSLCertificate|list{OpenSSLAsymmetricKey|OpenSSLCertificate|string, string}|string',
    'padding=' => 'int',
  ),
  'openssl_public_decrypt' => 
  array (
    0 => 'bool',
    'data' => 'string',
    '&w_decrypted_data' => 'string',
    'public_key' => 'OpenSSLAsymmetricKey|OpenSSLCertificate|list{OpenSSLAsymmetricKey|OpenSSLCertificate|string, string}|string',
    'padding=' => 'int',
  ),
  'openssl_public_encrypt' => 
  array (
    0 => 'bool',
    'data' => 'string',
    '&w_encrypted_data' => 'string',
    'public_key' => 'OpenSSLAsymmetricKey|OpenSSLCertificate|list{OpenSSLAsymmetricKey|OpenSSLCertificate|string, string}|string',
    'padding=' => 'int',
  ),
  'openssl_random_pseudo_bytes' => 
  array (
    0 => 'string',
    'length' => 'int',
    '&w_strong_result=' => 'bool',
  ),
  'openssl_seal' => 
  array (
    0 => 'false|int',
    'data' => 'string',
    '&w_sealed_data' => 'string',
    '&w_encrypted_keys' => 'array<array-key, mixed>',
    'public_key' => 'list<OpenSSLAsymmetricKey>',
    'cipher_algo' => 'string',
    '&iv=' => 'string',
  ),
  'openssl_sign' => 
  array (
    0 => 'bool',
    'data' => 'string',
    '&w_signature' => 'string',
    'private_key' => 'OpenSSLAsymmetricKey|OpenSSLCertificate|list{OpenSSLAsymmetricKey|OpenSSLCertificate|string, string}|string',
    'algorithm=' => 'int|string',
  ),
  'openssl_spki_export' => 
  array (
    0 => 'false|string',
    'spki' => 'string',
  ),
  'openssl_spki_export_challenge' => 
  array (
    0 => 'false|string',
    'spki' => 'string',
  ),
  'openssl_spki_new' => 
  array (
    0 => 'false|string',
    'private_key' => 'OpenSSLAsymmetricKey',
    'challenge' => 'string',
    'digest_algo=' => 'int',
  ),
  'openssl_spki_verify' => 
  array (
    0 => 'bool',
    'spki' => 'string',
  ),
  'openssl_verify' => 
  array (
    0 => '-1|0|1|false',
    'data' => 'string',
    'signature' => 'string',
    'public_key' => 'OpenSSLAsymmetricKey|OpenSSLCertificate|list{OpenSSLAsymmetricKey|OpenSSLCertificate|string, string}|string',
    'algorithm=' => 'int|string',
  ),
  'openssl_x509_check_private_key' => 
  array (
    0 => 'bool',
    'certificate' => 'OpenSSLCertificate|string',
    'private_key' => 'OpenSSLAsymmetricKey|OpenSSLCertificate|list{OpenSSLAsymmetricKey|OpenSSLCertificate|string, string}|string',
  ),
  'openssl_x509_checkpurpose' => 
  array (
    0 => 'bool|int',
    'certificate' => 'OpenSSLCertificate|string',
    'purpose' => 'int',
    'ca_info=' => 'array<array-key, mixed>',
    'untrusted_certificates_file=' => 'null|string',
  ),
  'openssl_x509_export' => 
  array (
    0 => 'bool',
    'certificate' => 'OpenSSLCertificate|string',
    '&w_output' => 'string',
    'no_text=' => 'bool',
  ),
  'openssl_x509_export_to_file' => 
  array (
    0 => 'bool',
    'certificate' => 'OpenSSLCertificate|string',
    'output_filename' => 'string',
    'no_text=' => 'bool',
  ),
  'openssl_x509_fingerprint' => 
  array (
    0 => 'false|string',
    'certificate' => 'OpenSSLCertificate|string',
    'digest_algo=' => 'string',
    'binary=' => 'bool',
  ),
  'openssl_x509_free' => 
  array (
    0 => 'void',
    'certificate' => 'OpenSSLCertificate',
  ),
  'openssl_x509_parse' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'certificate' => 'OpenSSLCertificate|string',
    'short_names=' => 'bool',
  ),
  'openssl_x509_read' => 
  array (
    0 => 'OpenSSLCertificate|false',
    'certificate' => 'OpenSSLCertificate|string',
  ),
  'openssl_x509_verify' => 
  array (
    0 => 'int',
    'certificate' => 'OpenSSLCertificate|string',
    'public_key' => 'OpenSSLAsymmetricKey|OpenSSLCertificate|array<array-key, mixed>|string',
  ),
  'ord' => 
  array (
    0 => 'int<0, 255>',
    'character' => 'string',
  ),
  'outeriterator::current' => 
  array (
    0 => 'mixed',
  ),
  'outeriterator::getinneriterator' => 
  array (
    0 => 'Iterator',
  ),
  'outeriterator::key' => 
  array (
    0 => 'int|string',
  ),
  'outeriterator::next' => 
  array (
    0 => 'void',
  ),
  'outeriterator::rewind' => 
  array (
    0 => 'void',
  ),
  'outeriterator::valid' => 
  array (
    0 => 'bool',
  ),
  'outofboundsexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'string',
    'code=' => 'int',
    'previous=' => 'Throwable|null',
  ),
  'outofboundsexception::__tostring' => 
  array (
    0 => 'string',
  ),
  'outofboundsexception::getcode' => 
  array (
    0 => 'int',
  ),
  'outofboundsexception::getfile' => 
  array (
    0 => 'string',
  ),
  'outofboundsexception::getline' => 
  array (
    0 => 'int',
  ),
  'outofboundsexception::getmessage' => 
  array (
    0 => 'string',
  ),
  'outofboundsexception::getprevious' => 
  array (
    0 => 'Throwable|null',
  ),
  'outofboundsexception::gettrace' => 
  array (
    0 => 'list<array{args?: array<array-key, mixed>, class?: class-string, file?: string, function: string, line?: int, type?: \'->\'|\'::\'}>',
  ),
  'outofboundsexception::gettraceasstring' => 
  array (
    0 => 'string',
  ),
  'outofrangeexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'string',
    'code=' => 'int',
    'previous=' => 'Throwable|null',
  ),
  'outofrangeexception::__tostring' => 
  array (
    0 => 'string',
  ),
  'outofrangeexception::getcode' => 
  array (
    0 => 'int',
  ),
  'outofrangeexception::getfile' => 
  array (
    0 => 'string',
  ),
  'outofrangeexception::getline' => 
  array (
    0 => 'int',
  ),
  'outofrangeexception::getmessage' => 
  array (
    0 => 'string',
  ),
  'outofrangeexception::getprevious' => 
  array (
    0 => 'Throwable|null',
  ),
  'outofrangeexception::gettrace' => 
  array (
    0 => 'list<array{args?: array<array-key, mixed>, class?: class-string, file?: string, function: string, line?: int, type?: \'->\'|\'::\'}>',
  ),
  'outofrangeexception::gettraceasstring' => 
  array (
    0 => 'string',
  ),
  'output_add_rewrite_var' => 
  array (
    0 => 'bool',
    'name' => 'string',
    'value' => 'string',
  ),
  'output_cache_disable' => 
  array (
    0 => 'void',
  ),
  'output_cache_disable_compression' => 
  array (
    0 => 'void',
  ),
  'output_cache_exists' => 
  array (
    0 => 'bool',
    'key' => 'string',
    'lifetime' => 'int',
  ),
  'output_cache_fetch' => 
  array (
    0 => 'string',
    'key' => 'string',
    'function' => 'mixed',
    'lifetime' => 'int',
  ),
  'output_cache_get' => 
  array (
    0 => 'false|mixed',
    'key' => 'string',
    'lifetime' => 'int',
  ),
  'output_cache_output' => 
  array (
    0 => 'string',
    'key' => 'string',
    'function' => 'mixed',
    'lifetime' => 'int',
  ),
  'output_cache_put' => 
  array (
    0 => 'bool',
    'key' => 'string',
    'data' => 'mixed',
  ),
  'output_cache_remove' => 
  array (
    0 => 'bool',
    'filename' => 'mixed',
  ),
  'output_cache_remove_key' => 
  array (
    0 => 'bool',
    'key' => 'string',
  ),
  'output_cache_remove_url' => 
  array (
    0 => 'bool',
    'url' => 'string',
  ),
  'output_cache_stop' => 
  array (
    0 => 'void',
  ),
  'output_reset_rewrite_vars' => 
  array (
    0 => 'bool',
  ),
  'outputformatobj::getoption' => 
  array (
    0 => 'string',
    'property_name' => 'string',
  ),
  'outputformatobj::set' => 
  array (
    0 => 'int',
    'property_name' => 'string',
    'new_value' => 'mixed',
  ),
  'outputformatobj::setoption' => 
  array (
    0 => 'void',
    'property_name' => 'string',
    'new_value' => 'string',
  ),
  'outputformatobj::validate' => 
  array (
    0 => 'int',
  ),
  'overflowexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'string',
    'code=' => 'int',
    'previous=' => 'Throwable|null',
  ),
  'overflowexception::__tostring' => 
  array (
    0 => 'string',
  ),
  'overflowexception::getcode' => 
  array (
    0 => 'int',
  ),
  'overflowexception::getfile' => 
  array (
    0 => 'string',
  ),
  'overflowexception::getline' => 
  array (
    0 => 'int',
  ),
  'overflowexception::getmessage' => 
  array (
    0 => 'string',
  ),
  'overflowexception::getprevious' => 
  array (
    0 => 'Throwable|null',
  ),
  'overflowexception::gettrace' => 
  array (
    0 => 'list<array{args?: array<array-key, mixed>, class?: class-string, file?: string, function: string, line?: int, type?: \'->\'|\'::\'}>',
  ),
  'overflowexception::gettraceasstring' => 
  array (
    0 => 'string',
  ),
  'overload' => 
  array (
    0 => 'mixed',
    'class_name' => 'string',
  ),
  'override_function' => 
  array (
    0 => 'bool',
    'function_name' => 'string',
    'function_args' => 'string',
    'function_code' => 'string',
  ),
  'owsrequestobj::__construct' => 
  array (
    0 => 'void',
  ),
  'owsrequestobj::addparameter' => 
  array (
    0 => 'int',
    'name' => 'string',
    'value' => 'string',
  ),
  'owsrequestobj::getname' => 
  array (
    0 => 'string',
    'index' => 'int',
  ),
  'owsrequestobj::getvalue' => 
  array (
    0 => 'string',
    'index' => 'int',
  ),
  'owsrequestobj::getvaluebyname' => 
  array (
    0 => 'string',
    'name' => 'string',
  ),
  'owsrequestobj::loadparams' => 
  array (
    0 => 'int',
  ),
  'owsrequestobj::setparameter' => 
  array (
    0 => 'int',
    'name' => 'string',
    'value' => 'string',
  ),
  'pack' => 
  array (
    0 => 'string',
    'format' => 'string',
    '...values=' => 'mixed',
  ),
  'parallel\\future::done' => 
  array (
    0 => 'bool',
  ),
  'parallel\\future::select' => 
  array (
    0 => 'mixed',
    '&resolving' => 'array<array-key, parallel\\Future>',
    '&w_resolved' => 'array<array-key, parallel\\Future>',
    '&w_errored' => 'array<array-key, parallel\\Future>',
    '&w_timedout=' => 'array<array-key, parallel\\Future>',
    'timeout=' => 'int',
  ),
  'parallel\\future::value' => 
  array (
    0 => 'mixed',
    'timeout=' => 'int',
  ),
  'parallel\\runtime::__construct' => 
  array (
    0 => 'void',
    'arg' => 'array<array-key, mixed>|string',
  ),
  'parallel\\runtime::__construct\'1' => 
  array (
    0 => 'void',
    'bootstrap' => 'string',
    'configuration' => 'array<string, mixed>',
  ),
  'parallel\\runtime::close' => 
  array (
    0 => 'void',
  ),
  'parallel\\runtime::kill' => 
  array (
    0 => 'void',
  ),
  'parallel\\runtime::run' => 
  array (
    0 => 'null|parallel\\Future',
    'closure' => 'Closure',
    'args=' => 'array<array-key, mixed>',
  ),
  'parentiterator::accept' => 
  array (
    0 => 'bool',
  ),
  'parentiterator::getchildren' => 
  array (
    0 => 'ParentIterator|null',
  ),
  'parentiterator::haschildren' => 
  array (
    0 => 'bool',
  ),
  'parentiterator::next' => 
  array (
    0 => 'void',
  ),
  'parentiterator::rewind' => 
  array (
    0 => 'void',
  ),
  'parentiterator::valid' => 
  array (
    0 => 'bool',
  ),
  'parle\\lexer::advance' => 
  array (
    0 => 'void',
  ),
  'parle\\lexer::build' => 
  array (
    0 => 'void',
  ),
  'parle\\lexer::callout' => 
  array (
    0 => 'void',
    'id' => 'int',
    'callback' => 'callable',
  ),
  'parle\\lexer::consume' => 
  array (
    0 => 'void',
    'data' => 'string',
  ),
  'parle\\lexer::dump' => 
  array (
    0 => 'void',
  ),
  'parle\\lexer::gettoken' => 
  array (
    0 => 'Parle\\Token',
  ),
  'parle\\lexer::insertmacro' => 
  array (
    0 => 'void',
    'name' => 'string',
    'regex' => 'string',
  ),
  'parle\\lexer::push' => 
  array (
    0 => 'void',
    'regex' => 'string',
    'id' => 'int',
  ),
  'parle\\lexer::reset' => 
  array (
    0 => 'void',
    'pos' => 'int',
  ),
  'parle\\parser::advance' => 
  array (
    0 => 'void',
  ),
  'parle\\parser::build' => 
  array (
    0 => 'void',
  ),
  'parle\\parser::consume' => 
  array (
    0 => 'void',
    'data' => 'string',
    'lexer' => 'Parle\\Lexer',
  ),
  'parle\\parser::dump' => 
  array (
    0 => 'void',
  ),
  'parle\\parser::errorinfo' => 
  array (
    0 => 'Parle\\ErrorInfo',
  ),
  'parle\\parser::left' => 
  array (
    0 => 'void',
    'token' => 'string',
  ),
  'parle\\parser::nonassoc' => 
  array (
    0 => 'void',
    'token' => 'string',
  ),
  'parle\\parser::precedence' => 
  array (
    0 => 'void',
    'token' => 'string',
  ),
  'parle\\parser::push' => 
  array (
    0 => 'int',
    'name' => 'string',
    'rule' => 'string',
  ),
  'parle\\parser::reset' => 
  array (
    0 => 'void',
    'tokenId' => 'int',
  ),
  'parle\\parser::right' => 
  array (
    0 => 'void',
    'token' => 'string',
  ),
  'parle\\parser::sigil' => 
  array (
    0 => 'string',
    'idx' => 'array<array-key, mixed>',
  ),
  'parle\\parser::token' => 
  array (
    0 => 'void',
    'token' => 'string',
  ),
  'parle\\parser::tokenid' => 
  array (
    0 => 'int',
    'token' => 'string',
  ),
  'parle\\parser::trace' => 
  array (
    0 => 'string',
  ),
  'parle\\parser::validate' => 
  array (
    0 => 'bool',
    'data' => 'string',
    'lexer' => 'Parle\\Lexer',
  ),
  'parle\\rlexer::advance' => 
  array (
    0 => 'void',
  ),
  'parle\\rlexer::build' => 
  array (
    0 => 'void',
  ),
  'parle\\rlexer::callout' => 
  array (
    0 => 'void',
    'id' => 'int',
    'callback' => 'callable',
  ),
  'parle\\rlexer::consume' => 
  array (
    0 => 'void',
    'data' => 'string',
  ),
  'parle\\rlexer::dump' => 
  array (
    0 => 'void',
  ),
  'parle\\rlexer::gettoken' => 
  array (
    0 => 'Parle\\Token',
  ),
  'parle\\rlexer::insertmacro' => 
  array (
    0 => 'void',
    'name' => 'string',
    'regex' => 'string',
  ),
  'parle\\rlexer::push' => 
  array (
    0 => 'void',
    'state' => 'string',
    'regex' => 'string',
    'newState' => 'string',
  ),
  'parle\\rlexer::pushstate' => 
  array (
    0 => 'int',
    'state' => 'string',
  ),
  'parle\\rlexer::reset' => 
  array (
    0 => 'void',
    'pos' => 'int',
  ),
  'parle\\rparser::advance' => 
  array (
    0 => 'void',
  ),
  'parle\\rparser::build' => 
  array (
    0 => 'void',
  ),
  'parle\\rparser::consume' => 
  array (
    0 => 'void',
    'data' => 'string',
    'lexer' => 'Parle\\Lexer',
  ),
  'parle\\rparser::dump' => 
  array (
    0 => 'void',
  ),
  'parle\\rparser::errorinfo' => 
  array (
    0 => 'Parle\\ErrorInfo',
  ),
  'parle\\rparser::left' => 
  array (
    0 => 'void',
    'token' => 'string',
  ),
  'parle\\rparser::nonassoc' => 
  array (
    0 => 'void',
    'token' => 'string',
  ),
  'parle\\rparser::precedence' => 
  array (
    0 => 'void',
    'token' => 'string',
  ),
  'parle\\rparser::push' => 
  array (
    0 => 'int',
    'name' => 'string',
    'rule' => 'string',
  ),
  'parle\\rparser::reset' => 
  array (
    0 => 'void',
    'tokenId' => 'int',
  ),
  'parle\\rparser::right' => 
  array (
    0 => 'void',
    'token' => 'string',
  ),
  'parle\\rparser::sigil' => 
  array (
    0 => 'string',
    'idx' => 'array<array-key, mixed>',
  ),
  'parle\\rparser::token' => 
  array (
    0 => 'void',
    'token' => 'string',
  ),
  'parle\\rparser::tokenid' => 
  array (
    0 => 'int',
    'token' => 'string',
  ),
  'parle\\rparser::trace' => 
  array (
    0 => 'string',
  ),
  'parle\\rparser::validate' => 
  array (
    0 => 'bool',
    'data' => 'string',
    'lexer' => 'Parle\\Lexer',
  ),
  'parle\\stack::pop' => 
  array (
    0 => 'void',
  ),
  'parle\\stack::push' => 
  array (
    0 => 'void',
    'item' => 'mixed',
  ),
  'parse_ini_file' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'filename' => 'string',
    'process_sections=' => 'bool',
    'scanner_mode=' => 'int',
  ),
  'parse_ini_string' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'ini_string' => 'string',
    'process_sections=' => 'bool',
    'scanner_mode=' => 'int',
  ),
  'parse_str' => 
  array (
    0 => 'void',
    'string' => 'string',
    '&w_result' => 'array<array-key, mixed>',
  ),
  'parse_url' => 
  array (
    0 => 'array<array-key, mixed>|false|int|null|string',
    'url' => 'string',
    'component=' => 'int',
  ),
  'parseerror::__construct' => 
  array (
    0 => 'void',
    'message=' => 'string',
    'code=' => 'int',
    'previous=' => 'Throwable|null',
  ),
  'parseerror::__tostring' => 
  array (
    0 => 'string',
  ),
  'parseerror::getcode' => 
  array (
    0 => 'int',
  ),
  'parseerror::getfile' => 
  array (
    0 => 'string',
  ),
  'parseerror::getline' => 
  array (
    0 => 'int',
  ),
  'parseerror::getmessage' => 
  array (
    0 => 'string',
  ),
  'parseerror::getprevious' => 
  array (
    0 => 'Throwable|null',
  ),
  'parseerror::gettrace' => 
  array (
    0 => 'list<array{args?: array<array-key, mixed>, class?: class-string, file?: string, function: string, line?: int, type?: \'->\'|\'::\'}>',
  ),
  'parseerror::gettraceasstring' => 
  array (
    0 => 'string',
  ),
  'parsekit_compile_file' => 
  array (
    0 => 'array<array-key, mixed>',
    'filename' => 'string',
    'errors=' => 'array<array-key, mixed>',
    'options=' => 'int',
  ),
  'parsekit_compile_string' => 
  array (
    0 => 'array<array-key, mixed>',
    'phpcode' => 'string',
    'errors=' => 'array<array-key, mixed>',
    'options=' => 'int',
  ),
  'parsekit_func_arginfo' => 
  array (
    0 => 'array<array-key, mixed>',
    'function' => 'mixed',
  ),
  'passthru' => 
  array (
    0 => 'false|null',
    'command' => 'string',
    '&w_result_code=' => 'int',
  ),
  'password_get_info' => 
  array (
    0 => 'array<array-key, mixed>',
    'hash' => 'string',
  ),
  'password_hash' => 
  array (
    0 => 'string',
    'password' => 'string',
    'algo' => 'int|null|string',
    'options=' => 'array<array-key, mixed>',
  ),
  'password_make_salt' => 
  array (
    0 => 'bool',
    'password' => 'string',
    'hash' => 'string',
  ),
  'password_needs_rehash' => 
  array (
    0 => 'bool',
    'hash' => 'string',
    'algo' => 'int|null|string',
    'options=' => 'array<array-key, mixed>',
  ),
  'password_verify' => 
  array (
    0 => 'bool',
    'password' => 'string',
    'hash' => 'string',
  ),
  'pathinfo' => 
  array (
    0 => 'array<array-key, mixed>|string',
    'path' => 'string',
    'flags=' => 'int',
  ),
  'pclose' => 
  array (
    0 => 'int',
    'handle' => 'resource',
  ),
  'pcnlt_sigwaitinfo' => 
  array (
    0 => 'int',
    'set' => 'array<array-key, mixed>',
    '&w_siginfo' => 'array<array-key, mixed>',
  ),
  'pcntl_alarm' => 
  array (
    0 => 'int',
    'seconds' => 'int',
  ),
  'pcntl_async_signals' => 
  array (
    0 => 'bool',
    'enable=' => 'bool|null',
  ),
  'pcntl_errno' => 
  array (
    0 => 'int',
  ),
  'pcntl_exec' => 
  array (
    0 => 'false',
    'path' => 'string',
    'args=' => 'array<array-key, mixed>',
    'env_vars=' => 'array<array-key, mixed>',
  ),
  'pcntl_fork' => 
  array (
    0 => 'int',
  ),
  'pcntl_get_last_error' => 
  array (
    0 => 'int',
  ),
  'pcntl_getpriority' => 
  array (
    0 => 'int',
    'process_id=' => 'int|null',
    'mode=' => 'int',
  ),
  'pcntl_setpriority' => 
  array (
    0 => 'bool',
    'priority' => 'int',
    'process_id=' => 'int|null',
    'mode=' => 'int',
  ),
  'pcntl_signal' => 
  array (
    0 => 'bool',
    'signal' => 'int',
    'handler' => 'callable():void|callable(int):void|callable(int, array<array-key, mixed>):void|int',
    'restart_syscalls=' => 'bool',
  ),
  'pcntl_signal_dispatch' => 
  array (
    0 => 'bool',
  ),
  'pcntl_signal_get_handler' => 
  array (
    0 => 'int|string',
    'signal' => 'int',
  ),
  'pcntl_sigprocmask' => 
  array (
    0 => 'bool',
    'mode' => 'int',
    'signals' => 'array<array-key, mixed>',
    '&w_old_signals=' => 'array<array-key, mixed>',
  ),
  'pcntl_sigtimedwait' => 
  array (
    0 => 'int',
    'signals' => 'array<array-key, mixed>',
    '&w_info=' => 'array<array-key, mixed>',
    'seconds=' => 'int',
    'nanoseconds=' => 'int',
  ),
  'pcntl_sigwaitinfo' => 
  array (
    0 => 'int',
    'signals' => 'array<array-key, mixed>',
    '&w_info=' => 'array<array-key, mixed>',
  ),
  'pcntl_strerror' => 
  array (
    0 => 'string',
    'error_code' => 'int',
  ),
  'pcntl_wait' => 
  array (
    0 => 'int',
    '&w_status' => 'int',
    'flags=' => 'int',
    '&w_resource_usage=' => 'array<array-key, mixed>',
  ),
  'pcntl_waitpid' => 
  array (
    0 => 'int',
    'process_id' => 'int',
    '&w_status' => 'int',
    'flags=' => 'int',
    '&w_resource_usage=' => 'array<array-key, mixed>',
  ),
  'pcntl_wexitstatus' => 
  array (
    0 => 'int',
    'status' => 'int',
  ),
  'pcntl_wifexited' => 
  array (
    0 => 'bool',
    'status' => 'int',
  ),
  'pcntl_wifsignaled' => 
  array (
    0 => 'bool',
    'status' => 'int',
  ),
  'pcntl_wifstopped' => 
  array (
    0 => 'bool',
    'status' => 'int',
  ),
  'pcntl_wstopsig' => 
  array (
    0 => 'int',
    'status' => 'int',
  ),
  'pcntl_wtermsig' => 
  array (
    0 => 'int',
    'status' => 'int',
  ),
  'pdf_activate_item' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'id' => 'int',
  ),
  'pdf_add_launchlink' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'llx' => 'float',
    'lly' => 'float',
    'urx' => 'float',
    'ury' => 'float',
    'filename' => 'string',
  ),
  'pdf_add_locallink' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'lowerleftx' => 'float',
    'lowerlefty' => 'float',
    'upperrightx' => 'float',
    'upperrighty' => 'float',
    'page' => 'int',
    'dest' => 'string',
  ),
  'pdf_add_nameddest' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'name' => 'string',
    'optlist' => 'string',
  ),
  'pdf_add_note' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'llx' => 'float',
    'lly' => 'float',
    'urx' => 'float',
    'ury' => 'float',
    'contents' => 'string',
    'title' => 'string',
    'icon' => 'string',
    'open' => 'int',
  ),
  'pdf_add_pdflink' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'bottom_left_x' => 'float',
    'bottom_left_y' => 'float',
    'up_right_x' => 'float',
    'up_right_y' => 'float',
    'filename' => 'string',
    'page' => 'int',
    'dest' => 'string',
  ),
  'pdf_add_table_cell' => 
  array (
    0 => 'int',
    'pdfdoc' => 'resource',
    'table' => 'int',
    'column' => 'int',
    'row' => 'int',
    'text' => 'string',
    'optlist' => 'string',
  ),
  'pdf_add_textflow' => 
  array (
    0 => 'int',
    'pdfdoc' => 'resource',
    'textflow' => 'int',
    'text' => 'string',
    'optlist' => 'string',
  ),
  'pdf_add_thumbnail' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'image' => 'int',
  ),
  'pdf_add_weblink' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'lowerleftx' => 'float',
    'lowerlefty' => 'float',
    'upperrightx' => 'float',
    'upperrighty' => 'float',
    'url' => 'string',
  ),
  'pdf_arc' => 
  array (
    0 => 'bool',
    'p' => 'resource',
    'x' => 'float',
    'y' => 'float',
    'r' => 'float',
    'alpha' => 'float',
    'beta' => 'float',
  ),
  'pdf_arcn' => 
  array (
    0 => 'bool',
    'p' => 'resource',
    'x' => 'float',
    'y' => 'float',
    'r' => 'float',
    'alpha' => 'float',
    'beta' => 'float',
  ),
  'pdf_attach_file' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'llx' => 'float',
    'lly' => 'float',
    'urx' => 'float',
    'ury' => 'float',
    'filename' => 'string',
    'description' => 'string',
    'author' => 'string',
    'mimetype' => 'string',
    'icon' => 'string',
  ),
  'pdf_begin_document' => 
  array (
    0 => 'int',
    'pdfdoc' => 'resource',
    'filename' => 'string',
    'optlist' => 'string',
  ),
  'pdf_begin_font' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'filename' => 'string',
    'a' => 'float',
    'b' => 'float',
    'c' => 'float',
    'd' => 'float',
    'e' => 'float',
    'f' => 'float',
    'optlist' => 'string',
  ),
  'pdf_begin_glyph' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'glyphname' => 'string',
    'wx' => 'float',
    'llx' => 'float',
    'lly' => 'float',
    'urx' => 'float',
    'ury' => 'float',
  ),
  'pdf_begin_item' => 
  array (
    0 => 'int',
    'pdfdoc' => 'resource',
    'tag' => 'string',
    'optlist' => 'string',
  ),
  'pdf_begin_layer' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'layer' => 'int',
  ),
  'pdf_begin_page' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'width' => 'float',
    'height' => 'float',
  ),
  'pdf_begin_page_ext' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'width' => 'float',
    'height' => 'float',
    'optlist' => 'string',
  ),
  'pdf_begin_pattern' => 
  array (
    0 => 'int',
    'pdfdoc' => 'resource',
    'width' => 'float',
    'height' => 'float',
    'xstep' => 'float',
    'ystep' => 'float',
    'painttype' => 'int',
  ),
  'pdf_begin_template' => 
  array (
    0 => 'int',
    'pdfdoc' => 'resource',
    'width' => 'float',
    'height' => 'float',
  ),
  'pdf_begin_template_ext' => 
  array (
    0 => 'int',
    'pdfdoc' => 'resource',
    'width' => 'float',
    'height' => 'float',
    'optlist' => 'string',
  ),
  'pdf_circle' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'x' => 'float',
    'y' => 'float',
    'r' => 'float',
  ),
  'pdf_clip' => 
  array (
    0 => 'bool',
    'p' => 'resource',
  ),
  'pdf_close' => 
  array (
    0 => 'bool',
    'p' => 'resource',
  ),
  'pdf_close_image' => 
  array (
    0 => 'bool',
    'p' => 'resource',
    'image' => 'int',
  ),
  'pdf_close_pdi' => 
  array (
    0 => 'bool',
    'p' => 'resource',
    'doc' => 'int',
  ),
  'pdf_close_pdi_page' => 
  array (
    0 => 'bool',
    'p' => 'resource',
    'page' => 'int',
  ),
  'pdf_closepath' => 
  array (
    0 => 'bool',
    'p' => 'resource',
  ),
  'pdf_closepath_fill_stroke' => 
  array (
    0 => 'bool',
    'p' => 'resource',
  ),
  'pdf_closepath_stroke' => 
  array (
    0 => 'bool',
    'p' => 'resource',
  ),
  'pdf_concat' => 
  array (
    0 => 'bool',
    'p' => 'resource',
    'a' => 'float',
    'b' => 'float',
    'c' => 'float',
    'd' => 'float',
    'e' => 'float',
    'f' => 'float',
  ),
  'pdf_continue_text' => 
  array (
    0 => 'bool',
    'p' => 'resource',
    'text' => 'string',
  ),
  'pdf_create_3dview' => 
  array (
    0 => 'int',
    'pdfdoc' => 'resource',
    'username' => 'string',
    'optlist' => 'string',
  ),
  'pdf_create_action' => 
  array (
    0 => 'int',
    'pdfdoc' => 'resource',
    'type' => 'string',
    'optlist' => 'string',
  ),
  'pdf_create_annotation' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'llx' => 'float',
    'lly' => 'float',
    'urx' => 'float',
    'ury' => 'float',
    'type' => 'string',
    'optlist' => 'string',
  ),
  'pdf_create_bookmark' => 
  array (
    0 => 'int',
    'pdfdoc' => 'resource',
    'text' => 'string',
    'optlist' => 'string',
  ),
  'pdf_create_field' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'llx' => 'float',
    'lly' => 'float',
    'urx' => 'float',
    'ury' => 'float',
    'name' => 'string',
    'type' => 'string',
    'optlist' => 'string',
  ),
  'pdf_create_fieldgroup' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'name' => 'string',
    'optlist' => 'string',
  ),
  'pdf_create_gstate' => 
  array (
    0 => 'int',
    'pdfdoc' => 'resource',
    'optlist' => 'string',
  ),
  'pdf_create_pvf' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'filename' => 'string',
    'data' => 'string',
    'optlist' => 'string',
  ),
  'pdf_create_textflow' => 
  array (
    0 => 'int',
    'pdfdoc' => 'resource',
    'text' => 'string',
    'optlist' => 'string',
  ),
  'pdf_curveto' => 
  array (
    0 => 'bool',
    'p' => 'resource',
    'x1' => 'float',
    'y1' => 'float',
    'x2' => 'float',
    'y2' => 'float',
    'x3' => 'float',
    'y3' => 'float',
  ),
  'pdf_define_layer' => 
  array (
    0 => 'int',
    'pdfdoc' => 'resource',
    'name' => 'string',
    'optlist' => 'string',
  ),
  'pdf_delete' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
  ),
  'pdf_delete_pvf' => 
  array (
    0 => 'int',
    'pdfdoc' => 'resource',
    'filename' => 'string',
  ),
  'pdf_delete_table' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'table' => 'int',
    'optlist' => 'string',
  ),
  'pdf_delete_textflow' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'textflow' => 'int',
  ),
  'pdf_encoding_set_char' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'encoding' => 'string',
    'slot' => 'int',
    'glyphname' => 'string',
    'uv' => 'int',
  ),
  'pdf_end_document' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'optlist' => 'string',
  ),
  'pdf_end_font' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
  ),
  'pdf_end_glyph' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
  ),
  'pdf_end_item' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'id' => 'int',
  ),
  'pdf_end_layer' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
  ),
  'pdf_end_page' => 
  array (
    0 => 'bool',
    'p' => 'resource',
  ),
  'pdf_end_page_ext' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'optlist' => 'string',
  ),
  'pdf_end_pattern' => 
  array (
    0 => 'bool',
    'p' => 'resource',
  ),
  'pdf_end_template' => 
  array (
    0 => 'bool',
    'p' => 'resource',
  ),
  'pdf_endpath' => 
  array (
    0 => 'bool',
    'p' => 'resource',
  ),
  'pdf_fill' => 
  array (
    0 => 'bool',
    'p' => 'resource',
  ),
  'pdf_fill_imageblock' => 
  array (
    0 => 'int',
    'pdfdoc' => 'resource',
    'page' => 'int',
    'blockname' => 'string',
    'image' => 'int',
    'optlist' => 'string',
  ),
  'pdf_fill_pdfblock' => 
  array (
    0 => 'int',
    'pdfdoc' => 'resource',
    'page' => 'int',
    'blockname' => 'string',
    'contents' => 'int',
    'optlist' => 'string',
  ),
  'pdf_fill_stroke' => 
  array (
    0 => 'bool',
    'p' => 'resource',
  ),
  'pdf_fill_textblock' => 
  array (
    0 => 'int',
    'pdfdoc' => 'resource',
    'page' => 'int',
    'blockname' => 'string',
    'text' => 'string',
    'optlist' => 'string',
  ),
  'pdf_findfont' => 
  array (
    0 => 'int',
    'p' => 'resource',
    'fontname' => 'string',
    'encoding' => 'string',
    'embed' => 'int',
  ),
  'pdf_fit_image' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'image' => 'int',
    'x' => 'float',
    'y' => 'float',
    'optlist' => 'string',
  ),
  'pdf_fit_pdi_page' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'page' => 'int',
    'x' => 'float',
    'y' => 'float',
    'optlist' => 'string',
  ),
  'pdf_fit_table' => 
  array (
    0 => 'string',
    'pdfdoc' => 'resource',
    'table' => 'int',
    'llx' => 'float',
    'lly' => 'float',
    'urx' => 'float',
    'ury' => 'float',
    'optlist' => 'string',
  ),
  'pdf_fit_textflow' => 
  array (
    0 => 'string',
    'pdfdoc' => 'resource',
    'textflow' => 'int',
    'llx' => 'float',
    'lly' => 'float',
    'urx' => 'float',
    'ury' => 'float',
    'optlist' => 'string',
  ),
  'pdf_fit_textline' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'text' => 'string',
    'x' => 'float',
    'y' => 'float',
    'optlist' => 'string',
  ),
  'pdf_get_apiname' => 
  array (
    0 => 'string',
    'pdfdoc' => 'resource',
  ),
  'pdf_get_buffer' => 
  array (
    0 => 'string',
    'p' => 'resource',
  ),
  'pdf_get_errmsg' => 
  array (
    0 => 'string',
    'pdfdoc' => 'resource',
  ),
  'pdf_get_errnum' => 
  array (
    0 => 'int',
    'pdfdoc' => 'resource',
  ),
  'pdf_get_majorversion' => 
  array (
    0 => 'int',
  ),
  'pdf_get_minorversion' => 
  array (
    0 => 'int',
  ),
  'pdf_get_parameter' => 
  array (
    0 => 'string',
    'p' => 'resource',
    'key' => 'string',
    'modifier' => 'float',
  ),
  'pdf_get_pdi_parameter' => 
  array (
    0 => 'string',
    'p' => 'resource',
    'key' => 'string',
    'doc' => 'int',
    'page' => 'int',
    'reserved' => 'int',
  ),
  'pdf_get_pdi_value' => 
  array (
    0 => 'float',
    'p' => 'resource',
    'key' => 'string',
    'doc' => 'int',
    'page' => 'int',
    'reserved' => 'int',
  ),
  'pdf_get_value' => 
  array (
    0 => 'float',
    'p' => 'resource',
    'key' => 'string',
    'modifier' => 'float',
  ),
  'pdf_info_font' => 
  array (
    0 => 'float',
    'pdfdoc' => 'resource',
    'font' => 'int',
    'keyword' => 'string',
    'optlist' => 'string',
  ),
  'pdf_info_matchbox' => 
  array (
    0 => 'float',
    'pdfdoc' => 'resource',
    'boxname' => 'string',
    'num' => 'int',
    'keyword' => 'string',
  ),
  'pdf_info_table' => 
  array (
    0 => 'float',
    'pdfdoc' => 'resource',
    'table' => 'int',
    'keyword' => 'string',
  ),
  'pdf_info_textflow' => 
  array (
    0 => 'float',
    'pdfdoc' => 'resource',
    'textflow' => 'int',
    'keyword' => 'string',
  ),
  'pdf_info_textline' => 
  array (
    0 => 'float',
    'pdfdoc' => 'resource',
    'text' => 'string',
    'keyword' => 'string',
    'optlist' => 'string',
  ),
  'pdf_initgraphics' => 
  array (
    0 => 'bool',
    'p' => 'resource',
  ),
  'pdf_lineto' => 
  array (
    0 => 'bool',
    'p' => 'resource',
    'x' => 'float',
    'y' => 'float',
  ),
  'pdf_load_3ddata' => 
  array (
    0 => 'int',
    'pdfdoc' => 'resource',
    'filename' => 'string',
    'optlist' => 'string',
  ),
  'pdf_load_font' => 
  array (
    0 => 'int',
    'pdfdoc' => 'resource',
    'fontname' => 'string',
    'encoding' => 'string',
    'optlist' => 'string',
  ),
  'pdf_load_iccprofile' => 
  array (
    0 => 'int',
    'pdfdoc' => 'resource',
    'profilename' => 'string',
    'optlist' => 'string',
  ),
  'pdf_load_image' => 
  array (
    0 => 'int',
    'pdfdoc' => 'resource',
    'imagetype' => 'string',
    'filename' => 'string',
    'optlist' => 'string',
  ),
  'pdf_makespotcolor' => 
  array (
    0 => 'int',
    'p' => 'resource',
    'spotname' => 'string',
  ),
  'pdf_moveto' => 
  array (
    0 => 'bool',
    'p' => 'resource',
    'x' => 'float',
    'y' => 'float',
  ),
  'pdf_new' => 
  array (
    0 => 'resource',
  ),
  'pdf_open_ccitt' => 
  array (
    0 => 'int',
    'pdfdoc' => 'resource',
    'filename' => 'string',
    'width' => 'int',
    'height' => 'int',
    'bitreverse' => 'int',
    'k' => 'int',
    'blackls1' => 'int',
  ),
  'pdf_open_file' => 
  array (
    0 => 'bool',
    'p' => 'resource',
    'filename' => 'string',
  ),
  'pdf_open_image' => 
  array (
    0 => 'int',
    'p' => 'resource',
    'imagetype' => 'string',
    'source' => 'string',
    'data' => 'string',
    'length' => 'int',
    'width' => 'int',
    'height' => 'int',
    'components' => 'int',
    'bpc' => 'int',
    'params' => 'string',
  ),
  'pdf_open_image_file' => 
  array (
    0 => 'int',
    'p' => 'resource',
    'imagetype' => 'string',
    'filename' => 'string',
    'stringparam' => 'string',
    'intparam' => 'int',
  ),
  'pdf_open_memory_image' => 
  array (
    0 => 'int',
    'p' => 'resource',
    'image' => 'resource',
  ),
  'pdf_open_pdi' => 
  array (
    0 => 'int',
    'pdfdoc' => 'resource',
    'filename' => 'string',
    'optlist' => 'string',
    'length' => 'int',
  ),
  'pdf_open_pdi_document' => 
  array (
    0 => 'int',
    'p' => 'resource',
    'filename' => 'string',
    'optlist' => 'string',
  ),
  'pdf_open_pdi_page' => 
  array (
    0 => 'int',
    'p' => 'resource',
    'doc' => 'int',
    'pagenumber' => 'int',
    'optlist' => 'string',
  ),
  'pdf_pcos_get_number' => 
  array (
    0 => 'float',
    'p' => 'resource',
    'doc' => 'int',
    'path' => 'string',
  ),
  'pdf_pcos_get_stream' => 
  array (
    0 => 'string',
    'p' => 'resource',
    'doc' => 'int',
    'optlist' => 'string',
    'path' => 'string',
  ),
  'pdf_pcos_get_string' => 
  array (
    0 => 'string',
    'p' => 'resource',
    'doc' => 'int',
    'path' => 'string',
  ),
  'pdf_place_image' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'image' => 'int',
    'x' => 'float',
    'y' => 'float',
    'scale' => 'float',
  ),
  'pdf_place_pdi_page' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'page' => 'int',
    'x' => 'float',
    'y' => 'float',
    'sx' => 'float',
    'sy' => 'float',
  ),
  'pdf_process_pdi' => 
  array (
    0 => 'int',
    'pdfdoc' => 'resource',
    'doc' => 'int',
    'page' => 'int',
    'optlist' => 'string',
  ),
  'pdf_rect' => 
  array (
    0 => 'bool',
    'p' => 'resource',
    'x' => 'float',
    'y' => 'float',
    'width' => 'float',
    'height' => 'float',
  ),
  'pdf_restore' => 
  array (
    0 => 'bool',
    'p' => 'resource',
  ),
  'pdf_resume_page' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'optlist' => 'string',
  ),
  'pdf_rotate' => 
  array (
    0 => 'bool',
    'p' => 'resource',
    'phi' => 'float',
  ),
  'pdf_save' => 
  array (
    0 => 'bool',
    'p' => 'resource',
  ),
  'pdf_scale' => 
  array (
    0 => 'bool',
    'p' => 'resource',
    'sx' => 'float',
    'sy' => 'float',
  ),
  'pdf_set_border_color' => 
  array (
    0 => 'bool',
    'p' => 'resource',
    'red' => 'float',
    'green' => 'float',
    'blue' => 'float',
  ),
  'pdf_set_border_dash' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'black' => 'float',
    'white' => 'float',
  ),
  'pdf_set_border_style' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'style' => 'string',
    'width' => 'float',
  ),
  'pdf_set_gstate' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'gstate' => 'int',
  ),
  'pdf_set_info' => 
  array (
    0 => 'bool',
    'p' => 'resource',
    'key' => 'string',
    'value' => 'string',
  ),
  'pdf_set_layer_dependency' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'type' => 'string',
    'optlist' => 'string',
  ),
  'pdf_set_parameter' => 
  array (
    0 => 'bool',
    'p' => 'resource',
    'key' => 'string',
    'value' => 'string',
  ),
  'pdf_set_text_pos' => 
  array (
    0 => 'bool',
    'p' => 'resource',
    'x' => 'float',
    'y' => 'float',
  ),
  'pdf_set_value' => 
  array (
    0 => 'bool',
    'p' => 'resource',
    'key' => 'string',
    'value' => 'float',
  ),
  'pdf_setcolor' => 
  array (
    0 => 'bool',
    'p' => 'resource',
    'fstype' => 'string',
    'colorspace' => 'string',
    'c1' => 'float',
    'c2' => 'float',
    'c3' => 'float',
    'c4' => 'float',
  ),
  'pdf_setdash' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'b' => 'float',
    'w' => 'float',
  ),
  'pdf_setdashpattern' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'optlist' => 'string',
  ),
  'pdf_setflat' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'flatness' => 'float',
  ),
  'pdf_setfont' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'font' => 'int',
    'fontsize' => 'float',
  ),
  'pdf_setgray' => 
  array (
    0 => 'bool',
    'p' => 'resource',
    'g' => 'float',
  ),
  'pdf_setgray_fill' => 
  array (
    0 => 'bool',
    'p' => 'resource',
    'g' => 'float',
  ),
  'pdf_setgray_stroke' => 
  array (
    0 => 'bool',
    'p' => 'resource',
    'g' => 'float',
  ),
  'pdf_setlinecap' => 
  array (
    0 => 'bool',
    'p' => 'resource',
    'linecap' => 'int',
  ),
  'pdf_setlinejoin' => 
  array (
    0 => 'bool',
    'p' => 'resource',
    'value' => 'int',
  ),
  'pdf_setlinewidth' => 
  array (
    0 => 'bool',
    'p' => 'resource',
    'width' => 'float',
  ),
  'pdf_setmatrix' => 
  array (
    0 => 'bool',
    'p' => 'resource',
    'a' => 'float',
    'b' => 'float',
    'c' => 'float',
    'd' => 'float',
    'e' => 'float',
    'f' => 'float',
  ),
  'pdf_setmiterlimit' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'miter' => 'float',
  ),
  'pdf_setrgbcolor' => 
  array (
    0 => 'bool',
    'p' => 'resource',
    'red' => 'float',
    'green' => 'float',
    'blue' => 'float',
  ),
  'pdf_setrgbcolor_fill' => 
  array (
    0 => 'bool',
    'p' => 'resource',
    'red' => 'float',
    'green' => 'float',
    'blue' => 'float',
  ),
  'pdf_setrgbcolor_stroke' => 
  array (
    0 => 'bool',
    'p' => 'resource',
    'red' => 'float',
    'green' => 'float',
    'blue' => 'float',
  ),
  'pdf_shading' => 
  array (
    0 => 'int',
    'pdfdoc' => 'resource',
    'shtype' => 'string',
    'x0' => 'float',
    'y0' => 'float',
    'x1' => 'float',
    'y1' => 'float',
    'c1' => 'float',
    'c2' => 'float',
    'c3' => 'float',
    'c4' => 'float',
    'optlist' => 'string',
  ),
  'pdf_shading_pattern' => 
  array (
    0 => 'int',
    'pdfdoc' => 'resource',
    'shading' => 'int',
    'optlist' => 'string',
  ),
  'pdf_shfill' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'shading' => 'int',
  ),
  'pdf_show' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'text' => 'string',
  ),
  'pdf_show_boxed' => 
  array (
    0 => 'int',
    'p' => 'resource',
    'text' => 'string',
    'left' => 'float',
    'top' => 'float',
    'width' => 'float',
    'height' => 'float',
    'mode' => 'string',
    'feature' => 'string',
  ),
  'pdf_show_xy' => 
  array (
    0 => 'bool',
    'p' => 'resource',
    'text' => 'string',
    'x' => 'float',
    'y' => 'float',
  ),
  'pdf_skew' => 
  array (
    0 => 'bool',
    'p' => 'resource',
    'alpha' => 'float',
    'beta' => 'float',
  ),
  'pdf_stringwidth' => 
  array (
    0 => 'float',
    'p' => 'resource',
    'text' => 'string',
    'font' => 'int',
    'fontsize' => 'float',
  ),
  'pdf_stroke' => 
  array (
    0 => 'bool',
    'p' => 'resource',
  ),
  'pdf_suspend_page' => 
  array (
    0 => 'bool',
    'pdfdoc' => 'resource',
    'optlist' => 'string',
  ),
  'pdf_translate' => 
  array (
    0 => 'bool',
    'p' => 'resource',
    'tx' => 'float',
    'ty' => 'float',
  ),
  'pdf_utf16_to_utf8' => 
  array (
    0 => 'string',
    'pdfdoc' => 'resource',
    'utf16string' => 'string',
  ),
  'pdf_utf32_to_utf16' => 
  array (
    0 => 'string',
    'pdfdoc' => 'resource',
    'utf32string' => 'string',
    'ordering' => 'string',
  ),
  'pdf_utf8_to_utf16' => 
  array (
    0 => 'string',
    'pdfdoc' => 'resource',
    'utf8string' => 'string',
    'ordering' => 'string',
  ),
  'pdflib::activate_item' => 
  array (
    0 => 'bool',
    'id' => 'mixed',
  ),
  'pdflib::add_launchlink' => 
  array (
    0 => 'bool',
    'llx' => 'float',
    'lly' => 'float',
    'urx' => 'float',
    'ury' => 'float',
    'filename' => 'string',
  ),
  'pdflib::add_locallink' => 
  array (
    0 => 'bool',
    'lowerleftx' => 'float',
    'lowerlefty' => 'float',
    'upperrightx' => 'float',
    'upperrighty' => 'float',
    'page' => 'int',
    'dest' => 'string',
  ),
  'pdflib::add_nameddest' => 
  array (
    0 => 'bool',
    'name' => 'string',
    'optlist' => 'string',
  ),
  'pdflib::add_note' => 
  array (
    0 => 'bool',
    'llx' => 'float',
    'lly' => 'float',
    'urx' => 'float',
    'ury' => 'float',
    'contents' => 'string',
    'title' => 'string',
    'icon' => 'string',
    'open' => 'int',
  ),
  'pdflib::add_pdflink' => 
  array (
    0 => 'bool',
    'bottom_left_x' => 'float',
    'bottom_left_y' => 'float',
    'up_right_x' => 'float',
    'up_right_y' => 'float',
    'filename' => 'string',
    'page' => 'int',
    'dest' => 'string',
  ),
  'pdflib::add_table_cell' => 
  array (
    0 => 'int',
    'table' => 'int',
    'column' => 'int',
    'row' => 'int',
    'text' => 'string',
    'optlist' => 'string',
  ),
  'pdflib::add_textflow' => 
  array (
    0 => 'int',
    'textflow' => 'int',
    'text' => 'string',
    'optlist' => 'string',
  ),
  'pdflib::add_thumbnail' => 
  array (
    0 => 'bool',
    'image' => 'int',
  ),
  'pdflib::add_weblink' => 
  array (
    0 => 'bool',
    'lowerleftx' => 'float',
    'lowerlefty' => 'float',
    'upperrightx' => 'float',
    'upperrighty' => 'float',
    'url' => 'string',
  ),
  'pdflib::arc' => 
  array (
    0 => 'bool',
    'x' => 'float',
    'y' => 'float',
    'r' => 'float',
    'alpha' => 'float',
    'beta' => 'float',
  ),
  'pdflib::arcn' => 
  array (
    0 => 'bool',
    'x' => 'float',
    'y' => 'float',
    'r' => 'float',
    'alpha' => 'float',
    'beta' => 'float',
  ),
  'pdflib::attach_file' => 
  array (
    0 => 'bool',
    'llx' => 'float',
    'lly' => 'float',
    'urx' => 'float',
    'ury' => 'float',
    'filename' => 'string',
    'description' => 'string',
    'author' => 'string',
    'mimetype' => 'string',
    'icon' => 'string',
  ),
  'pdflib::begin_document' => 
  array (
    0 => 'int',
    'filename' => 'string',
    'optlist' => 'string',
  ),
  'pdflib::begin_font' => 
  array (
    0 => 'bool',
    'filename' => 'string',
    'a' => 'float',
    'b' => 'float',
    'c' => 'float',
    'd' => 'float',
    'e' => 'float',
    'f' => 'float',
    'optlist' => 'string',
  ),
  'pdflib::begin_glyph' => 
  array (
    0 => 'bool',
    'glyphname' => 'string',
    'wx' => 'float',
    'llx' => 'float',
    'lly' => 'float',
    'urx' => 'float',
    'ury' => 'float',
  ),
  'pdflib::begin_item' => 
  array (
    0 => 'int',
    'tag' => 'string',
    'optlist' => 'string',
  ),
  'pdflib::begin_layer' => 
  array (
    0 => 'bool',
    'layer' => 'int',
  ),
  'pdflib::begin_page' => 
  array (
    0 => 'bool',
    'width' => 'float',
    'height' => 'float',
  ),
  'pdflib::begin_page_ext' => 
  array (
    0 => 'bool',
    'width' => 'float',
    'height' => 'float',
    'optlist' => 'string',
  ),
  'pdflib::begin_pattern' => 
  array (
    0 => 'int',
    'width' => 'float',
    'height' => 'float',
    'xstep' => 'float',
    'ystep' => 'float',
    'painttype' => 'int',
  ),
  'pdflib::begin_template' => 
  array (
    0 => 'int',
    'width' => 'float',
    'height' => 'float',
  ),
  'pdflib::begin_template_ext' => 
  array (
    0 => 'int',
    'width' => 'float',
    'height' => 'float',
    'optlist' => 'string',
  ),
  'pdflib::circle' => 
  array (
    0 => 'bool',
    'x' => 'float',
    'y' => 'float',
    'r' => 'float',
  ),
  'pdflib::clip' => 
  array (
    0 => 'bool',
  ),
  'pdflib::close' => 
  array (
    0 => 'bool',
  ),
  'pdflib::close_image' => 
  array (
    0 => 'bool',
    'image' => 'int',
  ),
  'pdflib::close_pdi' => 
  array (
    0 => 'bool',
    'doc' => 'int',
  ),
  'pdflib::close_pdi_page' => 
  array (
    0 => 'bool',
    'page' => 'int',
  ),
  'pdflib::closepath' => 
  array (
    0 => 'bool',
  ),
  'pdflib::closepath_fill_stroke' => 
  array (
    0 => 'bool',
  ),
  'pdflib::closepath_stroke' => 
  array (
    0 => 'bool',
  ),
  'pdflib::concat' => 
  array (
    0 => 'bool',
    'a' => 'float',
    'b' => 'float',
    'c' => 'float',
    'd' => 'float',
    'e' => 'float',
    'f' => 'float',
  ),
  'pdflib::continue_text' => 
  array (
    0 => 'bool',
    'text' => 'string',
  ),
  'pdflib::create_3dview' => 
  array (
    0 => 'int',
    'username' => 'string',
    'optlist' => 'string',
  ),
  'pdflib::create_action' => 
  array (
    0 => 'int',
    'type' => 'string',
    'optlist' => 'string',
  ),
  'pdflib::create_annotation' => 
  array (
    0 => 'bool',
    'llx' => 'float',
    'lly' => 'float',
    'urx' => 'float',
    'ury' => 'float',
    'type' => 'string',
    'optlist' => 'string',
  ),
  'pdflib::create_bookmark' => 
  array (
    0 => 'int',
    'text' => 'string',
    'optlist' => 'string',
  ),
  'pdflib::create_field' => 
  array (
    0 => 'bool',
    'llx' => 'float',
    'lly' => 'float',
    'urx' => 'float',
    'ury' => 'float',
    'name' => 'string',
    'type' => 'string',
    'optlist' => 'string',
  ),
  'pdflib::create_fieldgroup' => 
  array (
    0 => 'bool',
    'name' => 'string',
    'optlist' => 'string',
  ),
  'pdflib::create_gstate' => 
  array (
    0 => 'int',
    'optlist' => 'string',
  ),
  'pdflib::create_pvf' => 
  array (
    0 => 'bool',
    'filename' => 'string',
    'data' => 'string',
    'optlist' => 'string',
  ),
  'pdflib::create_textflow' => 
  array (
    0 => 'int',
    'text' => 'string',
    'optlist' => 'string',
  ),
  'pdflib::curveto' => 
  array (
    0 => 'bool',
    'x1' => 'float',
    'y1' => 'float',
    'x2' => 'float',
    'y2' => 'float',
    'x3' => 'float',
    'y3' => 'float',
  ),
  'pdflib::define_layer' => 
  array (
    0 => 'int',
    'name' => 'string',
    'optlist' => 'string',
  ),
  'pdflib::delete' => 
  array (
    0 => 'bool',
  ),
  'pdflib::delete_pvf' => 
  array (
    0 => 'int',
    'filename' => 'string',
  ),
  'pdflib::delete_table' => 
  array (
    0 => 'bool',
    'table' => 'int',
    'optlist' => 'string',
  ),
  'pdflib::delete_textflow' => 
  array (
    0 => 'bool',
    'textflow' => 'int',
  ),
  'pdflib::encoding_set_char' => 
  array (
    0 => 'bool',
    'encoding' => 'string',
    'slot' => 'int',
    'glyphname' => 'string',
    'uv' => 'int',
  ),
  'pdflib::end_document' => 
  array (
    0 => 'bool',
    'optlist' => 'string',
  ),
  'pdflib::end_font' => 
  array (
    0 => 'bool',
  ),
  'pdflib::end_glyph' => 
  array (
    0 => 'bool',
  ),
  'pdflib::end_item' => 
  array (
    0 => 'bool',
    'id' => 'int',
  ),
  'pdflib::end_layer' => 
  array (
    0 => 'bool',
  ),
  'pdflib::end_page' => 
  array (
    0 => 'bool',
    'p' => 'mixed',
  ),
  'pdflib::end_page_ext' => 
  array (
    0 => 'bool',
    'optlist' => 'string',
  ),
  'pdflib::end_pattern' => 
  array (
    0 => 'bool',
    'p' => 'mixed',
  ),
  'pdflib::end_template' => 
  array (
    0 => 'bool',
    'p' => 'mixed',
  ),
  'pdflib::endpath' => 
  array (
    0 => 'bool',
    'p' => 'mixed',
  ),
  'pdflib::fill' => 
  array (
    0 => 'bool',
  ),
  'pdflib::fill_imageblock' => 
  array (
    0 => 'int',
    'page' => 'int',
    'blockname' => 'string',
    'image' => 'int',
    'optlist' => 'string',
  ),
  'pdflib::fill_pdfblock' => 
  array (
    0 => 'int',
    'page' => 'int',
    'blockname' => 'string',
    'contents' => 'int',
    'optlist' => 'string',
  ),
  'pdflib::fill_stroke' => 
  array (
    0 => 'bool',
  ),
  'pdflib::fill_textblock' => 
  array (
    0 => 'int',
    'page' => 'int',
    'blockname' => 'string',
    'text' => 'string',
    'optlist' => 'string',
  ),
  'pdflib::findfont' => 
  array (
    0 => 'int',
    'fontname' => 'string',
    'encoding' => 'string',
    'embed' => 'int',
  ),
  'pdflib::fit_image' => 
  array (
    0 => 'bool',
    'image' => 'int',
    'x' => 'float',
    'y' => 'float',
    'optlist' => 'string',
  ),
  'pdflib::fit_pdi_page' => 
  array (
    0 => 'bool',
    'page' => 'int',
    'x' => 'float',
    'y' => 'float',
    'optlist' => 'string',
  ),
  'pdflib::fit_table' => 
  array (
    0 => 'string',
    'table' => 'int',
    'llx' => 'float',
    'lly' => 'float',
    'urx' => 'float',
    'ury' => 'float',
    'optlist' => 'string',
  ),
  'pdflib::fit_textflow' => 
  array (
    0 => 'string',
    'textflow' => 'int',
    'llx' => 'float',
    'lly' => 'float',
    'urx' => 'float',
    'ury' => 'float',
    'optlist' => 'string',
  ),
  'pdflib::fit_textline' => 
  array (
    0 => 'bool',
    'text' => 'string',
    'x' => 'float',
    'y' => 'float',
    'optlist' => 'string',
  ),
  'pdflib::get_apiname' => 
  array (
    0 => 'string',
  ),
  'pdflib::get_buffer' => 
  array (
    0 => 'string',
  ),
  'pdflib::get_errmsg' => 
  array (
    0 => 'string',
  ),
  'pdflib::get_errnum' => 
  array (
    0 => 'int',
  ),
  'pdflib::get_majorversion' => 
  array (
    0 => 'int',
  ),
  'pdflib::get_minorversion' => 
  array (
    0 => 'int',
  ),
  'pdflib::get_parameter' => 
  array (
    0 => 'string',
    'key' => 'string',
    'modifier' => 'float',
  ),
  'pdflib::get_pdi_parameter' => 
  array (
    0 => 'string',
    'key' => 'string',
    'doc' => 'int',
    'page' => 'int',
    'reserved' => 'int',
  ),
  'pdflib::get_pdi_value' => 
  array (
    0 => 'float',
    'key' => 'string',
    'doc' => 'int',
    'page' => 'int',
    'reserved' => 'int',
  ),
  'pdflib::get_value' => 
  array (
    0 => 'float',
    'key' => 'string',
    'modifier' => 'float',
  ),
  'pdflib::info_font' => 
  array (
    0 => 'float',
    'font' => 'int',
    'keyword' => 'string',
    'optlist' => 'string',
  ),
  'pdflib::info_matchbox' => 
  array (
    0 => 'float',
    'boxname' => 'string',
    'num' => 'int',
    'keyword' => 'string',
  ),
  'pdflib::info_table' => 
  array (
    0 => 'float',
    'table' => 'int',
    'keyword' => 'string',
  ),
  'pdflib::info_textflow' => 
  array (
    0 => 'float',
    'textflow' => 'int',
    'keyword' => 'string',
  ),
  'pdflib::info_textline' => 
  array (
    0 => 'float',
    'text' => 'string',
    'keyword' => 'string',
    'optlist' => 'string',
  ),
  'pdflib::initgraphics' => 
  array (
    0 => 'bool',
  ),
  'pdflib::lineto' => 
  array (
    0 => 'bool',
    'x' => 'float',
    'y' => 'float',
  ),
  'pdflib::load_3ddata' => 
  array (
    0 => 'int',
    'filename' => 'string',
    'optlist' => 'string',
  ),
  'pdflib::load_font' => 
  array (
    0 => 'int',
    'fontname' => 'string',
    'encoding' => 'string',
    'optlist' => 'string',
  ),
  'pdflib::load_iccprofile' => 
  array (
    0 => 'int',
    'profilename' => 'string',
    'optlist' => 'string',
  ),
  'pdflib::load_image' => 
  array (
    0 => 'int',
    'imagetype' => 'string',
    'filename' => 'string',
    'optlist' => 'string',
  ),
  'pdflib::makespotcolor' => 
  array (
    0 => 'int',
    'spotname' => 'string',
  ),
  'pdflib::moveto' => 
  array (
    0 => 'bool',
    'x' => 'float',
    'y' => 'float',
  ),
  'pdflib::open_ccitt' => 
  array (
    0 => 'int',
    'filename' => 'string',
    'width' => 'int',
    'height' => 'int',
    'BitReverse' => 'int',
    'k' => 'int',
    'Blackls1' => 'int',
  ),
  'pdflib::open_file' => 
  array (
    0 => 'bool',
    'filename' => 'string',
  ),
  'pdflib::open_image' => 
  array (
    0 => 'int',
    'imagetype' => 'string',
    'source' => 'string',
    'data' => 'string',
    'length' => 'int',
    'width' => 'int',
    'height' => 'int',
    'components' => 'int',
    'bpc' => 'int',
    'params' => 'string',
  ),
  'pdflib::open_image_file' => 
  array (
    0 => 'int',
    'imagetype' => 'string',
    'filename' => 'string',
    'stringparam' => 'string',
    'intparam' => 'int',
  ),
  'pdflib::open_memory_image' => 
  array (
    0 => 'int',
    'image' => 'resource',
  ),
  'pdflib::open_pdi' => 
  array (
    0 => 'int',
    'filename' => 'string',
    'optlist' => 'string',
    'length' => 'int',
  ),
  'pdflib::open_pdi_document' => 
  array (
    0 => 'int',
    'filename' => 'string',
    'optlist' => 'string',
  ),
  'pdflib::open_pdi_page' => 
  array (
    0 => 'int',
    'doc' => 'int',
    'pagenumber' => 'int',
    'optlist' => 'string',
  ),
  'pdflib::pcos_get_number' => 
  array (
    0 => 'float',
    'doc' => 'int',
    'path' => 'string',
  ),
  'pdflib::pcos_get_stream' => 
  array (
    0 => 'string',
    'doc' => 'int',
    'optlist' => 'string',
    'path' => 'string',
  ),
  'pdflib::pcos_get_string' => 
  array (
    0 => 'string',
    'doc' => 'int',
    'path' => 'string',
  ),
  'pdflib::place_image' => 
  array (
    0 => 'bool',
    'image' => 'int',
    'x' => 'float',
    'y' => 'float',
    'scale' => 'float',
  ),
  'pdflib::place_pdi_page' => 
  array (
    0 => 'bool',
    'page' => 'int',
    'x' => 'float',
    'y' => 'float',
    'sx' => 'float',
    'sy' => 'float',
  ),
  'pdflib::process_pdi' => 
  array (
    0 => 'int',
    'doc' => 'int',
    'page' => 'int',
    'optlist' => 'string',
  ),
  'pdflib::rect' => 
  array (
    0 => 'bool',
    'x' => 'float',
    'y' => 'float',
    'width' => 'float',
    'height' => 'float',
  ),
  'pdflib::restore' => 
  array (
    0 => 'bool',
    'p' => 'mixed',
  ),
  'pdflib::resume_page' => 
  array (
    0 => 'bool',
    'optlist' => 'string',
  ),
  'pdflib::rotate' => 
  array (
    0 => 'bool',
    'phi' => 'float',
  ),
  'pdflib::save' => 
  array (
    0 => 'bool',
    'p' => 'mixed',
  ),
  'pdflib::scale' => 
  array (
    0 => 'bool',
    'sx' => 'float',
    'sy' => 'float',
  ),
  'pdflib::set_border_color' => 
  array (
    0 => 'bool',
    'red' => 'float',
    'green' => 'float',
    'blue' => 'float',
  ),
  'pdflib::set_border_dash' => 
  array (
    0 => 'bool',
    'black' => 'float',
    'white' => 'float',
  ),
  'pdflib::set_border_style' => 
  array (
    0 => 'bool',
    'style' => 'string',
    'width' => 'float',
  ),
  'pdflib::set_gstate' => 
  array (
    0 => 'bool',
    'gstate' => 'int',
  ),
  'pdflib::set_info' => 
  array (
    0 => 'bool',
    'key' => 'string',
    'value' => 'string',
  ),
  'pdflib::set_layer_dependency' => 
  array (
    0 => 'bool',
    'type' => 'string',
    'optlist' => 'string',
  ),
  'pdflib::set_parameter' => 
  array (
    0 => 'bool',
    'key' => 'string',
    'value' => 'string',
  ),
  'pdflib::set_text_pos' => 
  array (
    0 => 'bool',
    'x' => 'float',
    'y' => 'float',
  ),
  'pdflib::set_value' => 
  array (
    0 => 'bool',
    'key' => 'string',
    'value' => 'float',
  ),
  'pdflib::setcolor' => 
  array (
    0 => 'bool',
    'fstype' => 'string',
    'colorspace' => 'string',
    'c1' => 'float',
    'c2' => 'float',
    'c3' => 'float',
    'c4' => 'float',
  ),
  'pdflib::setdash' => 
  array (
    0 => 'bool',
    'b' => 'float',
    'w' => 'float',
  ),
  'pdflib::setdashpattern' => 
  array (
    0 => 'bool',
    'optlist' => 'string',
  ),
  'pdflib::setflat' => 
  array (
    0 => 'bool',
    'flatness' => 'float',
  ),
  'pdflib::setfont' => 
  array (
    0 => 'bool',
    'font' => 'int',
    'fontsize' => 'float',
  ),
  'pdflib::setgray' => 
  array (
    0 => 'bool',
    'g' => 'float',
  ),
  'pdflib::setgray_fill' => 
  array (
    0 => 'bool',
    'g' => 'float',
  ),
  'pdflib::setgray_stroke' => 
  array (
    0 => 'bool',
    'g' => 'float',
  ),
  'pdflib::setlinecap' => 
  array (
    0 => 'bool',
    'linecap' => 'int',
  ),
  'pdflib::setlinejoin' => 
  array (
    0 => 'bool',
    'value' => 'int',
  ),
  'pdflib::setlinewidth' => 
  array (
    0 => 'bool',
    'width' => 'float',
  ),
  'pdflib::setmatrix' => 
  array (
    0 => 'bool',
    'a' => 'float',
    'b' => 'float',
    'c' => 'float',
    'd' => 'float',
    'e' => 'float',
    'f' => 'float',
  ),
  'pdflib::setmiterlimit' => 
  array (
    0 => 'bool',
    'miter' => 'float',
  ),
  'pdflib::setrgbcolor' => 
  array (
    0 => 'bool',
    'red' => 'float',
    'green' => 'float',
    'blue' => 'float',
  ),
  'pdflib::setrgbcolor_fill' => 
  array (
    0 => 'bool',
    'red' => 'float',
    'green' => 'float',
    'blue' => 'float',
  ),
  'pdflib::setrgbcolor_stroke' => 
  array (
    0 => 'bool',
    'red' => 'float',
    'green' => 'float',
    'blue' => 'float',
  ),
  'pdflib::shading' => 
  array (
    0 => 'int',
    'shtype' => 'string',
    'x0' => 'float',
    'y0' => 'float',
    'x1' => 'float',
    'y1' => 'float',
    'c1' => 'float',
    'c2' => 'float',
    'c3' => 'float',
    'c4' => 'float',
    'optlist' => 'string',
  ),
  'pdflib::shading_pattern' => 
  array (
    0 => 'int',
    'shading' => 'int',
    'optlist' => 'string',
  ),
  'pdflib::shfill' => 
  array (
    0 => 'bool',
    'shading' => 'int',
  ),
  'pdflib::show' => 
  array (
    0 => 'bool',
    'text' => 'string',
  ),
  'pdflib::show_boxed' => 
  array (
    0 => 'int',
    'text' => 'string',
    'left' => 'float',
    'top' => 'float',
    'width' => 'float',
    'height' => 'float',
    'mode' => 'string',
    'feature' => 'string',
  ),
  'pdflib::show_xy' => 
  array (
    0 => 'bool',
    'text' => 'string',
    'x' => 'float',
    'y' => 'float',
  ),
  'pdflib::skew' => 
  array (
    0 => 'bool',
    'alpha' => 'float',
    'beta' => 'float',
  ),
  'pdflib::stringwidth' => 
  array (
    0 => 'float',
    'text' => 'string',
    'font' => 'int',
    'fontsize' => 'float',
  ),
  'pdflib::stroke' => 
  array (
    0 => 'bool',
    'p' => 'mixed',
  ),
  'pdflib::suspend_page' => 
  array (
    0 => 'bool',
    'optlist' => 'string',
  ),
  'pdflib::translate' => 
  array (
    0 => 'bool',
    'tx' => 'float',
    'ty' => 'float',
  ),
  'pdflib::utf16_to_utf8' => 
  array (
    0 => 'string',
    'utf16string' => 'string',
  ),
  'pdflib::utf32_to_utf16' => 
  array (
    0 => 'string',
    'utf32string' => 'string',
    'ordering' => 'string',
  ),
  'pdflib::utf8_to_utf16' => 
  array (
    0 => 'string',
    'utf8string' => 'string',
    'ordering' => 'string',
  ),
  'pdo::__construct' => 
  array (
    0 => 'void',
    'dsn' => 'string',
    'username=' => 'null|string',
    'password=' => 'null|string',
    'options=' => 'array<array-key, mixed>|null',
  ),
  'pdo::begintransaction' => 
  array (
    0 => 'bool',
  ),
  'pdo::commit' => 
  array (
    0 => 'bool',
  ),
  'pdo::cubrid_schema' => 
  array (
    0 => 'array<array-key, mixed>',
    'schema_type' => 'int',
    'table_name=' => 'string',
    'col_name=' => 'string',
  ),
  'pdo::errorcode' => 
  array (
    0 => 'null|string',
  ),
  'pdo::errorinfo' => 
  array (
    0 => 'array{0: null|string, 1: int|null, 2: null|string, 3?: mixed, 4?: mixed}',
  ),
  'pdo::exec' => 
  array (
    0 => 'false|int',
    'statement' => 'string',
  ),
  'pdo::getattribute' => 
  array (
    0 => 'mixed',
    'attribute' => 'int',
  ),
  'pdo::getavailabledrivers' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'pdo::intransaction' => 
  array (
    0 => 'bool',
  ),
  'pdo::lastinsertid' => 
  array (
    0 => 'string',
    'name=' => 'null|string',
  ),
  'pdo::pgsqlcopyfromarray' => 
  array (
    0 => 'bool',
    'table_name' => 'string',
    'rows' => 'array<array-key, mixed>',
    'delimiter' => 'string',
    'null_as' => 'string',
    'fields' => 'string',
  ),
  'pdo::pgsqlcopyfromfile' => 
  array (
    0 => 'bool',
    'table_name' => 'string',
    'filename' => 'string',
    'delimiter' => 'string',
    'null_as' => 'string',
    'fields' => 'string',
  ),
  'pdo::pgsqlcopytoarray' => 
  array (
    0 => 'array<array-key, mixed>',
    'table_name' => 'string',
    'delimiter' => 'string',
    'null_as' => 'string',
    'fields' => 'string',
  ),
  'pdo::pgsqlcopytofile' => 
  array (
    0 => 'bool',
    'table_name' => 'string',
    'filename' => 'string',
    'delimiter' => 'string',
    'null_as' => 'string',
    'fields' => 'string',
  ),
  'pdo::pgsqlgetnotify' => 
  array (
    0 => 'array{message: string, payload?: string, pid: int}|false',
    'result_type=' => 'PDO::FETCH_*',
    'ms_timeout=' => 'int',
  ),
  'pdo::pgsqlgetpid' => 
  array (
    0 => 'int',
  ),
  'pdo::pgsqllobcreate' => 
  array (
    0 => 'string',
  ),
  'pdo::pgsqllobopen' => 
  array (
    0 => 'resource',
    'oid' => 'string',
    'mode=' => 'string',
  ),
  'pdo::pgsqllobunlink' => 
  array (
    0 => 'bool',
    'oid' => 'string',
  ),
  'pdo::prepare' => 
  array (
    0 => 'PDOStatement|false',
    'query' => 'string',
    'options=' => 'array<array-key, mixed>',
  ),
  'pdo::query' => 
  array (
    0 => 'PDOStatement|false',
    'query' => 'string',
    'fetchMode=' => 'int|null',
    '...fetchModeArgs=' => 'mixed',
  ),
  'pdo::query\'1' => 
  array (
    0 => 'PDOStatement|false',
    'query' => 'string',
    'fetch_column' => 'int',
    'colno=' => 'int',
  ),
  'pdo::query\'2' => 
  array (
    0 => 'PDOStatement|false',
    'query' => 'string',
    'fetch_class' => 'int',
    'classname' => 'string',
    'constructorArgs' => 'array<array-key, mixed>',
  ),
  'pdo::query\'3' => 
  array (
    0 => 'PDOStatement|false',
    'query' => 'string',
    'fetch_into' => 'int',
    'object' => 'object',
  ),
  'pdo::quote' => 
  array (
    0 => 'false|string',
    'string' => 'string',
    'type=' => 'int',
  ),
  'pdo::rollback' => 
  array (
    0 => 'bool',
  ),
  'pdo::setattribute' => 
  array (
    0 => 'bool',
    'attribute' => 'int',
    'value' => 'mixed',
  ),
  'pdo::sqlitecreateaggregate' => 
  array (
    0 => 'bool',
    'function_name' => 'string',
    'step_func' => 'callable',
    'finalize_func' => 'callable',
    'num_args=' => 'int',
  ),
  'pdo::sqlitecreatecollation' => 
  array (
    0 => 'bool',
    'name' => 'string',
    'callback' => 'callable',
  ),
  'pdo::sqlitecreatefunction' => 
  array (
    0 => 'bool',
    'function_name' => 'string',
    'callback' => 'callable',
    'num_args=' => 'int',
  ),
  'pdo_drivers' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'pdoexception::getcode' => 
  array (
    0 => 'int|string',
  ),
  'pdoexception::getfile' => 
  array (
    0 => 'string',
  ),
  'pdoexception::getline' => 
  array (
    0 => 'int',
  ),
  'pdoexception::getmessage' => 
  array (
    0 => 'string',
  ),
  'pdoexception::getprevious' => 
  array (
    0 => 'Throwable|null',
  ),
  'pdoexception::gettrace' => 
  array (
    0 => 'list<array{args?: array<array-key, mixed>, class?: class-string, file?: string, function: string, line?: int, type?: \'->\'|\'::\'}>',
  ),
  'pdoexception::gettraceasstring' => 
  array (
    0 => 'string',
  ),
  'pdostatement::bindcolumn' => 
  array (
    0 => 'bool',
    'column' => 'int|string',
    '&var' => 'mixed',
    'type=' => 'int',
    'maxLength=' => 'int',
    'driverOptions=' => 'mixed',
  ),
  'pdostatement::bindparam' => 
  array (
    0 => 'bool',
    'param' => 'int|string',
    '&var' => 'mixed',
    'type=' => 'int',
    'maxLength=' => 'int',
    'driverOptions=' => 'mixed',
  ),
  'pdostatement::bindvalue' => 
  array (
    0 => 'bool',
    'param' => 'int|string',
    'value' => 'mixed',
    'type=' => 'int',
  ),
  'pdostatement::closecursor' => 
  array (
    0 => 'bool',
  ),
  'pdostatement::columncount' => 
  array (
    0 => 'int',
  ),
  'pdostatement::debugdumpparams' => 
  array (
    0 => 'bool|null',
  ),
  'pdostatement::errorcode' => 
  array (
    0 => 'null|string',
  ),
  'pdostatement::errorinfo' => 
  array (
    0 => 'array{0: null|string, 1: int|null, 2: null|string, 3?: mixed, 4?: mixed}',
  ),
  'pdostatement::execute' => 
  array (
    0 => 'bool',
    'params=' => 'array<array-key, mixed>|null',
  ),
  'pdostatement::fetch' => 
  array (
    0 => 'mixed',
    'mode=' => 'int',
    'cursorOrientation=' => 'int',
    'cursorOffset=' => 'int',
  ),
  'pdostatement::fetchall' => 
  array (
    0 => 'array<array-key, mixed>',
    'mode=' => 'int',
    '...args=' => 'mixed',
  ),
  'pdostatement::fetchcolumn' => 
  array (
    0 => 'mixed',
    'column=' => 'int',
  ),
  'pdostatement::fetchobject' => 
  array (
    0 => 'false|object',
    'class=' => 'class-string|null',
    'constructorArgs=' => 'array<array-key, mixed>',
  ),
  'pdostatement::getattribute' => 
  array (
    0 => 'mixed',
    'name' => 'int',
  ),
  'pdostatement::getcolumnmeta' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'column' => 'int',
  ),
  'pdostatement::nextrowset' => 
  array (
    0 => 'bool',
  ),
  'pdostatement::rowcount' => 
  array (
    0 => 'int',
  ),
  'pdostatement::setattribute' => 
  array (
    0 => 'bool',
    'attribute' => 'int',
    'value' => 'mixed',
  ),
  'pdostatement::setfetchmode' => 
  array (
    0 => 'true',
    'mode' => 'int',
    '...args=' => 'mixed',
  ),
  'pfsockopen' => 
  array (
    0 => 'false|resource',
    'hostname' => 'string',
    'port=' => 'int',
    '&w_error_code=' => 'int',
    '&w_error_message=' => 'string',
    'timeout=' => 'float|null',
  ),
  'pg_affected_rows' => 
  array (
    0 => 'int',
    'result' => 'PgSql\\Result',
  ),
  'pg_cancel_query' => 
  array (
    0 => 'bool',
    'connection' => 'PgSql\\Connection',
  ),
  'pg_client_encoding' => 
  array (
    0 => 'string',
    'connection=' => 'PgSql\\Connection|null',
  ),
  'pg_close' => 
  array (
    0 => 'true',
    'connection=' => 'PgSql\\Connection|null',
  ),
  'pg_connect' => 
  array (
    0 => 'PgSql\\Connection|false',
    'connection_string' => 'string',
    'flags=' => 'int',
  ),
  'pg_connect_poll' => 
  array (
    0 => 'int',
    'connection' => 'PgSql\\Connection',
  ),
  'pg_connection_busy' => 
  array (
    0 => 'bool',
    'connection' => 'PgSql\\Connection',
  ),
  'pg_connection_reset' => 
  array (
    0 => 'bool',
    'connection' => 'PgSql\\Connection',
  ),
  'pg_connection_status' => 
  array (
    0 => 'int',
    'connection' => 'PgSql\\Connection',
  ),
  'pg_consume_input' => 
  array (
    0 => 'bool',
    'connection' => 'PgSql\\Connection',
  ),
  'pg_convert' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'connection' => 'PgSql\\Connection',
    'table_name' => 'string',
    'values' => 'array<array-key, mixed>',
    'flags=' => 'int',
  ),
  'pg_copy_from' => 
  array (
    0 => 'bool',
    'connection' => 'PgSql\\Connection',
    'table_name' => 'string',
    'rows' => 'array<array-key, mixed>',
    'separator=' => 'string',
    'null_as=' => 'string',
  ),
  'pg_copy_to' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'connection' => 'PgSql\\Connection',
    'table_name' => 'string',
    'separator=' => 'string',
    'null_as=' => 'string',
  ),
  'pg_dbname' => 
  array (
    0 => 'string',
    'connection=' => 'PgSql\\Connection|null',
  ),
  'pg_delete' => 
  array (
    0 => 'bool|string',
    'connection' => 'PgSql\\Connection',
    'table_name' => 'string',
    'conditions' => 'array<array-key, mixed>',
    'flags=' => 'int',
  ),
  'pg_end_copy' => 
  array (
    0 => 'bool',
    'connection=' => 'PgSql\\Connection|null',
  ),
  'pg_escape_bytea' => 
  array (
    0 => 'string',
    'connection' => 'PgSql\\Connection',
    'string=' => 'string',
  ),
  'pg_escape_bytea\'1' => 
  array (
    0 => 'string',
    'connection' => 'string',
  ),
  'pg_escape_identifier' => 
  array (
    0 => 'false|string',
    'connection' => 'PgSql\\Connection',
    'string=' => 'string',
  ),
  'pg_escape_identifier\'1' => 
  array (
    0 => 'false|string',
    'connection' => 'string',
  ),
  'pg_escape_literal' => 
  array (
    0 => 'false|string',
    'connection' => 'PgSql\\Connection',
    'string=' => 'string',
  ),
  'pg_escape_literal\'1' => 
  array (
    0 => 'false|string',
    'connection' => 'string',
  ),
  'pg_escape_string' => 
  array (
    0 => 'string',
    'connection' => 'PgSql\\Connection',
    'string=' => 'string',
  ),
  'pg_escape_string\'1' => 
  array (
    0 => 'string',
    'connection' => 'string',
  ),
  'pg_exec' => 
  array (
    0 => 'PgSql\\Result|false',
    'connection' => 'PgSql\\Connection',
    'query=' => 'string',
  ),
  'pg_exec\'1' => 
  array (
    0 => 'PgSql\\Result|false',
    'connection' => 'string',
  ),
  'pg_execute' => 
  array (
    0 => 'PgSql\\Result|false',
    'connection' => 'PgSql\\Connection',
    'statement_name' => 'string',
    'params=' => 'array<array-key, mixed>',
  ),
  'pg_execute\'1' => 
  array (
    0 => 'PgSql\\Result|false',
    'connection' => 'string',
    'statement_name' => 'array<array-key, mixed>',
  ),
  'pg_fetch_all' => 
  array (
    0 => 'array<array-key, array<array-key, mixed>>',
    'result' => 'PgSql\\Result',
    'mode=' => 'int',
  ),
  'pg_fetch_all_columns' => 
  array (
    0 => 'array<array-key, mixed>',
    'result' => 'PgSql\\Result',
    'field=' => 'int',
  ),
  'pg_fetch_array' => 
  array (
    0 => 'array<array-key, null|string>|false',
    'result' => 'PgSql\\Result',
    'row=' => 'int|null',
    'mode=' => 'int',
  ),
  'pg_fetch_assoc' => 
  array (
    0 => 'array<string, mixed>|false',
    'result' => 'PgSql\\Result',
    'row=' => 'int|null',
  ),
  'pg_fetch_object' => 
  array (
    0 => 'false|object',
    'result' => 'PgSql\\Result',
    'row=' => 'int|null',
    'class=' => 'string',
    'constructor_args=' => 'array<array-key, mixed>',
  ),
  'pg_fetch_result' => 
  array (
    0 => 'false|null|string',
    'result' => 'PgSql\\Result',
    'row' => 'int|string',
    'field=' => 'int|string',
  ),
  'pg_fetch_result\'1' => 
  array (
    0 => 'false|null|string',
    'result' => 'PgSql\\Result',
    'row' => 'int|null',
    'field' => 'int|string',
  ),
  'pg_fetch_row' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'result' => 'PgSql\\Result',
    'row=' => 'int|null',
    'mode=' => 'int',
  ),
  'pg_field_is_null' => 
  array (
    0 => 'false|int',
    'result' => 'PgSql\\Result',
    'row' => 'int|string',
    'field=' => 'int|string',
  ),
  'pg_field_is_null\'1' => 
  array (
    0 => 'false|int',
    'result' => 'PgSql\\Result',
    'row' => 'int',
    'field' => 'int|string',
  ),
  'pg_field_name' => 
  array (
    0 => 'string',
    'result' => 'PgSql\\Result',
    'field' => 'int',
  ),
  'pg_field_num' => 
  array (
    0 => 'int',
    'result' => 'PgSql\\Result',
    'field' => 'string',
  ),
  'pg_field_prtlen' => 
  array (
    0 => 'false|int',
    'result' => 'PgSql\\Result',
    'row' => 'int|string',
    'field=' => 'int|string',
  ),
  'pg_field_prtlen\'1' => 
  array (
    0 => 'false|int',
    'result' => 'PgSql\\Result',
    'row' => 'int',
    'field' => 'int|string',
  ),
  'pg_field_size' => 
  array (
    0 => 'int',
    'result' => 'PgSql\\Result',
    'field' => 'int',
  ),
  'pg_field_table' => 
  array (
    0 => 'false|int|string',
    'result' => 'PgSql\\Result',
    'field' => 'int',
    'oid_only=' => 'bool',
  ),
  'pg_field_type' => 
  array (
    0 => 'string',
    'result' => 'PgSql\\Result',
    'field' => 'int',
  ),
  'pg_field_type_oid' => 
  array (
    0 => 'int|string',
    'result' => 'PgSql\\Result',
    'field' => 'int',
  ),
  'pg_flush' => 
  array (
    0 => 'bool|int',
    'connection' => 'PgSql\\Connection',
  ),
  'pg_free_result' => 
  array (
    0 => 'bool',
    'result' => 'PgSql\\Result',
  ),
  'pg_get_notify' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'connection' => 'PgSql\\Connection',
    'mode=' => 'int',
  ),
  'pg_get_pid' => 
  array (
    0 => 'int',
    'connection' => 'PgSql\\Connection',
  ),
  'pg_get_result' => 
  array (
    0 => 'PgSql\\Result|false',
    'connection' => 'PgSql\\Connection',
  ),
  'pg_host' => 
  array (
    0 => 'string',
    'connection=' => 'PgSql\\Connection|null',
  ),
  'pg_insert' => 
  array (
    0 => 'PgSql\\Result|false|string',
    'connection' => 'PgSql\\Connection',
    'table_name' => 'string',
    'values' => 'array<array-key, mixed>',
    'flags=' => 'int',
  ),
  'pg_last_error' => 
  array (
    0 => 'string',
    'connection=' => 'PgSql\\Connection|null',
  ),
  'pg_last_notice' => 
  array (
    0 => 'array<array-key, mixed>|bool|string',
    'connection' => 'PgSql\\Connection',
    'mode=' => 'int',
  ),
  'pg_last_oid' => 
  array (
    0 => 'false|int|string',
    'result' => 'PgSql\\Result',
  ),
  'pg_lo_close' => 
  array (
    0 => 'bool',
    'lob' => 'PgSql\\Lob',
  ),
  'pg_lo_create' => 
  array (
    0 => 'false|int|string',
    'connection=' => 'PgSql\\Connection',
    'oid=' => 'int|string',
  ),
  'pg_lo_export' => 
  array (
    0 => 'bool',
    'connection' => 'PgSql\\Connection',
    'oid=' => 'int|string',
    'filename=' => 'string',
  ),
  'pg_lo_export\'1' => 
  array (
    0 => 'bool',
    'connection' => 'int|string',
    'oid' => 'string',
  ),
  'pg_lo_import' => 
  array (
    0 => 'false|int|string',
    'connection' => 'PgSql\\Connection',
    'filename=' => 'string',
    'oid=' => 'int|string',
  ),
  'pg_lo_import\'1' => 
  array (
    0 => 'false|int|string',
    'connection' => 'string',
    'filename' => 'int|string',
  ),
  'pg_lo_open' => 
  array (
    0 => 'PgSql\\Lob|false',
    'connection' => 'PgSql\\Connection',
    'oid=' => 'int|string',
    'mode=' => 'string',
  ),
  'pg_lo_open\'1' => 
  array (
    0 => 'PgSql\\Lob|false',
    'connection' => 'int|string',
    'oid' => 'string',
  ),
  'pg_lo_read' => 
  array (
    0 => 'false|string',
    'lob' => 'PgSql\\Lob',
    'length=' => 'int',
  ),
  'pg_lo_read_all' => 
  array (
    0 => 'int',
    'lob' => 'PgSql\\Lob',
  ),
  'pg_lo_seek' => 
  array (
    0 => 'bool',
    'lob' => 'PgSql\\Lob',
    'offset' => 'int',
    'whence=' => 'int',
  ),
  'pg_lo_tell' => 
  array (
    0 => 'int',
    'lob' => 'PgSql\\Lob',
  ),
  'pg_lo_truncate' => 
  array (
    0 => 'bool',
    'lob' => 'PgSql\\Lob',
    'size' => 'int',
  ),
  'pg_lo_unlink' => 
  array (
    0 => 'bool',
    'connection' => 'PgSql\\Connection',
    'oid=' => 'int|string',
  ),
  'pg_lo_unlink\'1' => 
  array (
    0 => 'bool',
    'connection' => 'int|string',
  ),
  'pg_lo_write' => 
  array (
    0 => 'false|int',
    'lob' => 'PgSql\\Lob',
    'data' => 'string',
    'length=' => 'int|null',
  ),
  'pg_meta_data' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'connection' => 'PgSql\\Connection',
    'table_name' => 'string',
    'extended=' => 'bool',
  ),
  'pg_num_fields' => 
  array (
    0 => 'int',
    'result' => 'PgSql\\Result',
  ),
  'pg_num_rows' => 
  array (
    0 => 'int',
    'result' => 'PgSql\\Result',
  ),
  'pg_options' => 
  array (
    0 => 'string',
    'connection=' => 'PgSql\\Connection|null',
  ),
  'pg_parameter_status' => 
  array (
    0 => 'false|string',
    'connection' => 'PgSql\\Connection',
    'name=' => 'string',
  ),
  'pg_parameter_status\'1' => 
  array (
    0 => 'false|string',
    'connection' => 'string',
  ),
  'pg_pconnect' => 
  array (
    0 => 'PgSql\\Connection|false',
    'connection_string' => 'string',
    'flags=' => 'int',
  ),
  'pg_ping' => 
  array (
    0 => 'bool',
    'connection=' => 'PgSql\\Connection|null',
  ),
  'pg_port' => 
  array (
    0 => 'string',
    'connection=' => 'PgSql\\Connection|null',
  ),
  'pg_prepare' => 
  array (
    0 => 'PgSql\\Result|false',
    'connection' => 'PgSql\\Connection',
    'statement_name' => 'string',
    'query=' => 'string',
  ),
  'pg_prepare\'1' => 
  array (
    0 => 'PgSql\\Result|false',
    'connection' => 'string',
    'statement_name' => 'string',
  ),
  'pg_put_line' => 
  array (
    0 => 'bool',
    'connection' => 'PgSql\\Connection',
    'query=' => 'string',
  ),
  'pg_put_line\'1' => 
  array (
    0 => 'bool',
    'connection' => 'string',
  ),
  'pg_query' => 
  array (
    0 => 'PgSql\\Result|false',
    'connection' => 'PgSql\\Connection',
    'query=' => 'string',
  ),
  'pg_query\'1' => 
  array (
    0 => 'PgSql\\Result|false',
    'connection' => 'string',
  ),
  'pg_query_params' => 
  array (
    0 => 'PgSql\\Result|false',
    'connection' => 'PgSql\\Connection',
    'query' => 'string',
    'params=' => 'array<array-key, mixed>',
  ),
  'pg_query_params\'1' => 
  array (
    0 => 'PgSql\\Result|false',
    'connection' => 'string',
    'query' => 'array<array-key, mixed>',
  ),
  'pg_result_error' => 
  array (
    0 => 'false|string',
    'result' => 'PgSql\\Result',
  ),
  'pg_result_error_field' => 
  array (
    0 => 'false|null|string',
    'result' => 'PgSql\\Result',
    'field_code' => 'int',
  ),
  'pg_result_seek' => 
  array (
    0 => 'bool',
    'result' => 'PgSql\\Result',
    'row' => 'int',
  ),
  'pg_result_status' => 
  array (
    0 => 'int|string',
    'result' => 'PgSql\\Result',
    'mode=' => 'int',
  ),
  'pg_select' => 
  array (
    0 => 'array<array-key, mixed>|false|string',
    'connection' => 'PgSql\\Connection',
    'table_name' => 'string',
    'conditions=' => 'array<array-key, mixed>',
    'flags=' => 'int',
    'mode=' => 'int',
  ),
  'pg_send_execute' => 
  array (
    0 => 'bool|int',
    'connection' => 'PgSql\\Connection',
    'statement_name' => 'string',
    'params' => 'array<array-key, mixed>',
  ),
  'pg_send_prepare' => 
  array (
    0 => 'bool|int',
    'connection' => 'PgSql\\Connection',
    'statement_name' => 'string',
    'query' => 'string',
  ),
  'pg_send_query' => 
  array (
    0 => 'bool|int',
    'connection' => 'PgSql\\Connection',
    'query' => 'string',
  ),
  'pg_send_query_params' => 
  array (
    0 => 'bool|int',
    'connection' => 'PgSql\\Connection',
    'query' => 'string',
    'params' => 'array<array-key, mixed>',
  ),
  'pg_set_client_encoding' => 
  array (
    0 => 'int',
    'connection' => 'PgSql\\Connection',
    'encoding=' => 'string',
  ),
  'pg_set_client_encoding\'1' => 
  array (
    0 => 'int',
    'connection' => 'string',
  ),
  'pg_set_error_verbosity' => 
  array (
    0 => 'false|int',
    'connection' => 'PgSql\\Connection',
    'verbosity=' => 'int',
  ),
  'pg_set_error_verbosity\'1' => 
  array (
    0 => 'false|int',
    'connection' => 'int',
  ),
  'pg_socket' => 
  array (
    0 => 'false|resource',
    'connection' => 'PgSql\\Connection',
  ),
  'pg_trace' => 
  array (
    0 => 'bool',
    'filename' => 'string',
    'mode=' => 'string',
    'connection=' => 'PgSql\\Connection|null',
    'trace_mode=' => 'int',
  ),
  'pg_transaction_status' => 
  array (
    0 => 'int',
    'connection' => 'PgSql\\Connection',
  ),
  'pg_tty' => 
  array (
    0 => 'string',
    'connection=' => 'PgSql\\Connection|null',
  ),
  'pg_unescape_bytea' => 
  array (
    0 => 'string',
    'string' => 'string',
  ),
  'pg_untrace' => 
  array (
    0 => 'true',
    'connection=' => 'PgSql\\Connection|null',
  ),
  'pg_update' => 
  array (
    0 => 'bool|string',
    'connection' => 'PgSql\\Connection',
    'table_name' => 'string',
    'values' => 'array<array-key, mixed>',
    'conditions' => 'array<array-key, mixed>',
    'flags=' => 'int',
  ),
  'pg_version' => 
  array (
    0 => 'array<array-key, mixed>',
    'connection=' => 'PgSql\\Connection|null',
  ),
  'phar::__construct' => 
  array (
    0 => 'void',
    'filename' => 'string',
    'flags=' => 'int',
    'alias=' => 'null|string',
  ),
  'phar::addemptydir' => 
  array (
    0 => 'void',
    'directory' => 'string',
  ),
  'phar::addfile' => 
  array (
    0 => 'void',
    'filename' => 'string',
    'localName=' => 'null|string',
  ),
  'phar::addfromstring' => 
  array (
    0 => 'void',
    'localName' => 'string',
    'contents' => 'string',
  ),
  'phar::apiversion' => 
  array (
    0 => 'string',
  ),
  'phar::buildfromdirectory' => 
  array (
    0 => 'array<array-key, mixed>',
    'directory' => 'string',
    'pattern=' => 'string',
  ),
  'phar::buildfromiterator' => 
  array (
    0 => 'array<array-key, mixed>',
    'iterator' => 'Traversable',
    'baseDirectory=' => 'null|string',
  ),
  'phar::cancompress' => 
  array (
    0 => 'bool',
    'compression=' => 'int',
  ),
  'phar::canwrite' => 
  array (
    0 => 'bool',
  ),
  'phar::compress' => 
  array (
    0 => 'Phar|null',
    'compression' => 'int',
    'extension=' => 'null|string',
  ),
  'phar::compressfiles' => 
  array (
    0 => 'void',
    'compression' => 'int',
  ),
  'phar::converttodata' => 
  array (
    0 => 'PharData|null',
    'format=' => 'int|null',
    'compression=' => 'int|null',
    'extension=' => 'null|string',
  ),
  'phar::converttoexecutable' => 
  array (
    0 => 'Phar|null',
    'format=' => 'int|null',
    'compression=' => 'int|null',
    'extension=' => 'null|string',
  ),
  'phar::copy' => 
  array (
    0 => 'true',
    'from' => 'string',
    'to' => 'string',
  ),
  'phar::count' => 
  array (
    0 => 'int',
    'mode=' => 'int',
  ),
  'phar::createdefaultstub' => 
  array (
    0 => 'string',
    'index=' => 'null|string',
    'webIndex=' => 'null|string',
  ),
  'phar::decompress' => 
  array (
    0 => 'Phar|null',
    'extension=' => 'null|string',
  ),
  'phar::decompressfiles' => 
  array (
    0 => 'true',
  ),
  'phar::delete' => 
  array (
    0 => 'true',
    'localName' => 'string',
  ),
  'phar::delmetadata' => 
  array (
    0 => 'true',
  ),
  'phar::extractto' => 
  array (
    0 => 'bool',
    'directory' => 'string',
    'files=' => 'array<array-key, mixed>|null|string',
    'overwrite=' => 'bool',
  ),
  'phar::getalias' => 
  array (
    0 => 'null|string',
  ),
  'phar::getmodified' => 
  array (
    0 => 'bool',
  ),
  'phar::getpath' => 
  array (
    0 => 'string',
  ),
  'phar::getsignature' => 
  array (
    0 => 'array{hash: string, hash_type: string}',
  ),
  'phar::getstub' => 
  array (
    0 => 'string',
  ),
  'phar::getsupportedcompression' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'phar::getsupportedsignatures' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'phar::getversion' => 
  array (
    0 => 'string',
  ),
  'phar::hasmetadata' => 
  array (
    0 => 'bool',
  ),
  'phar::interceptfilefuncs' => 
  array (
    0 => 'void',
  ),
  'phar::isbuffering' => 
  array (
    0 => 'bool',
  ),
  'phar::iscompressed' => 
  array (
    0 => 'false|int',
  ),
  'phar::isfileformat' => 
  array (
    0 => 'bool',
    'format' => 'int',
  ),
  'phar::isvalidpharfilename' => 
  array (
    0 => 'bool',
    'filename' => 'string',
    'executable=' => 'bool',
  ),
  'phar::iswritable' => 
  array (
    0 => 'bool',
  ),
  'phar::loadphar' => 
  array (
    0 => 'bool',
    'filename' => 'string',
    'alias=' => 'null|string',
  ),
  'phar::mapphar' => 
  array (
    0 => 'bool',
    'alias=' => 'null|string',
    'offset=' => 'int',
  ),
  'phar::mount' => 
  array (
    0 => 'void',
    'pharPath' => 'string',
    'externalPath' => 'string',
  ),
  'phar::mungserver' => 
  array (
    0 => 'void',
    'variables' => 'list<string>',
  ),
  'phar::offsetexists' => 
  array (
    0 => 'bool',
    'localName' => 'string',
  ),
  'phar::offsetget' => 
  array (
    0 => 'PharFileInfo',
    'localName' => 'string',
  ),
  'phar::offsetset' => 
  array (
    0 => 'void',
    'localName' => 'string',
    'value' => 'resource|string',
  ),
  'phar::offsetunset' => 
  array (
    0 => 'void',
    'localName' => 'string',
  ),
  'phar::running' => 
  array (
    0 => 'string',
    'returnPhar=' => 'bool',
  ),
  'phar::setalias' => 
  array (
    0 => 'true',
    'alias' => 'string',
  ),
  'phar::setdefaultstub' => 
  array (
    0 => 'true',
    'index=' => 'null|string',
    'webIndex=' => 'null|string',
  ),
  'phar::setmetadata' => 
  array (
    0 => 'void',
    'metadata' => 'mixed',
  ),
  'phar::setsignaturealgorithm' => 
  array (
    0 => 'void',
    'algo' => 'int',
    'privateKey=' => 'null|string',
  ),
  'phar::setstub' => 
  array (
    0 => 'true',
    'stub' => 'string',
    'length=' => 'int',
  ),
  'phar::startbuffering' => 
  array (
    0 => 'void',
  ),
  'phar::stopbuffering' => 
  array (
    0 => 'void',
  ),
  'phar::unlinkarchive' => 
  array (
    0 => 'true',
    'filename' => 'string',
  ),
  'phar::webphar' => 
  array (
    0 => 'void',
    'alias=' => 'null|string',
    'index=' => 'null|string',
    'fileNotFoundScript=' => 'null|string',
    'mimeTypes=' => 'array<array-key, mixed>',
    'rewrite=' => 'callable|null',
  ),
  'phardata::__construct' => 
  array (
    0 => 'void',
    'filename' => 'string',
    'flags=' => 'int',
    'alias=' => 'null|string',
    'format=' => 'int',
  ),
  'phardata::addemptydir' => 
  array (
    0 => 'void',
    'directory' => 'string',
  ),
  'phardata::addfile' => 
  array (
    0 => 'void',
    'filename' => 'string',
    'localName=' => 'null|string',
  ),
  'phardata::addfromstring' => 
  array (
    0 => 'void',
    'localName' => 'string',
    'contents' => 'string',
  ),
  'phardata::buildfromdirectory' => 
  array (
    0 => 'array<array-key, mixed>',
    'directory' => 'string',
    'pattern=' => 'string',
  ),
  'phardata::buildfromiterator' => 
  array (
    0 => 'array<array-key, mixed>',
    'iterator' => 'Traversable',
    'baseDirectory=' => 'null|string',
  ),
  'phardata::compress' => 
  array (
    0 => 'PharData|null',
    'compression' => 'int',
    'extension=' => 'null|string',
  ),
  'phardata::compressfiles' => 
  array (
    0 => 'void',
    'compression' => 'int',
  ),
  'phardata::converttodata' => 
  array (
    0 => 'PharData|null',
    'format=' => 'int|null',
    'compression=' => 'int|null',
    'extension=' => 'null|string',
  ),
  'phardata::converttoexecutable' => 
  array (
    0 => 'Phar|null',
    'format=' => 'int|null',
    'compression=' => 'int|null',
    'extension=' => 'null|string',
  ),
  'phardata::copy' => 
  array (
    0 => 'true',
    'from' => 'string',
    'to' => 'string',
  ),
  'phardata::decompress' => 
  array (
    0 => 'PharData|null',
    'extension=' => 'null|string',
  ),
  'phardata::decompressfiles' => 
  array (
    0 => 'true',
  ),
  'phardata::delete' => 
  array (
    0 => 'true',
    'localName' => 'string',
  ),
  'phardata::delmetadata' => 
  array (
    0 => 'true',
  ),
  'phardata::extractto' => 
  array (
    0 => 'bool',
    'directory' => 'string',
    'files=' => 'array<array-key, mixed>|null|string',
    'overwrite=' => 'bool',
  ),
  'phardata::iswritable' => 
  array (
    0 => 'bool',
  ),
  'phardata::offsetexists' => 
  array (
    0 => 'bool',
    'localName' => 'string',
  ),
  'phardata::offsetget' => 
  array (
    0 => 'PharFileInfo',
    'localName' => 'string',
  ),
  'phardata::offsetset' => 
  array (
    0 => 'void',
    'localName' => 'string',
    'value' => 'string',
  ),
  'phardata::offsetunset' => 
  array (
    0 => 'void',
    'localName' => 'string',
  ),
  'phardata::setalias' => 
  array (
    0 => 'bool',
    'alias' => 'string',
  ),
  'phardata::setdefaultstub' => 
  array (
    0 => 'bool',
    'index=' => 'null|string',
    'webIndex=' => 'null|string',
  ),
  'phardata::setmetadata' => 
  array (
    0 => 'void',
    'metadata' => 'mixed',
  ),
  'phardata::setsignaturealgorithm' => 
  array (
    0 => 'void',
    'algo' => 'int',
    'privateKey=' => 'null|string',
  ),
  'phardata::setstub' => 
  array (
    0 => 'true',
    'stub' => 'string',
    'length=' => 'int',
  ),
  'pharfileinfo::__construct' => 
  array (
    0 => 'void',
    'filename' => 'string',
  ),
  'pharfileinfo::chmod' => 
  array (
    0 => 'void',
    'perms' => 'int',
  ),
  'pharfileinfo::compress' => 
  array (
    0 => 'true',
    'compression' => 'int',
  ),
  'pharfileinfo::decompress' => 
  array (
    0 => 'true',
  ),
  'pharfileinfo::delmetadata' => 
  array (
    0 => 'true',
  ),
  'pharfileinfo::getcompressedsize' => 
  array (
    0 => 'int',
  ),
  'pharfileinfo::getcontent' => 
  array (
    0 => 'string',
  ),
  'pharfileinfo::getcrc32' => 
  array (
    0 => 'int',
  ),
  'pharfileinfo::getpharflags' => 
  array (
    0 => 'int',
  ),
  'pharfileinfo::hasmetadata' => 
  array (
    0 => 'bool',
  ),
  'pharfileinfo::iscompressed' => 
  array (
    0 => 'bool',
    'compression=' => 'int|null',
  ),
  'pharfileinfo::iscrcchecked' => 
  array (
    0 => 'bool',
  ),
  'pharfileinfo::setmetadata' => 
  array (
    0 => 'void',
    'metadata' => 'mixed',
  ),
  'phdfs::__construct' => 
  array (
    0 => 'void',
    'ip' => 'string',
    'port' => 'string',
  ),
  'phdfs::__destruct' => 
  array (
    0 => 'void',
  ),
  'phdfs::connect' => 
  array (
    0 => 'bool',
  ),
  'phdfs::copy' => 
  array (
    0 => 'bool',
    'source_file' => 'string',
    'destination_file' => 'string',
  ),
  'phdfs::create_directory' => 
  array (
    0 => 'bool',
    'path' => 'string',
  ),
  'phdfs::delete' => 
  array (
    0 => 'bool',
    'path' => 'string',
  ),
  'phdfs::disconnect' => 
  array (
    0 => 'bool',
  ),
  'phdfs::exists' => 
  array (
    0 => 'bool',
    'path' => 'string',
  ),
  'phdfs::file_info' => 
  array (
    0 => 'array<array-key, mixed>',
    'path' => 'string',
  ),
  'phdfs::list_directory' => 
  array (
    0 => 'array<array-key, mixed>',
    'path' => 'string',
  ),
  'phdfs::read' => 
  array (
    0 => 'string',
    'path' => 'string',
    'length=' => 'string',
  ),
  'phdfs::rename' => 
  array (
    0 => 'bool',
    'old_path' => 'string',
    'new_path' => 'string',
  ),
  'phdfs::tell' => 
  array (
    0 => 'int',
    'path' => 'string',
  ),
  'phdfs::write' => 
  array (
    0 => 'bool',
    'path' => 'string',
    'buffer' => 'string',
    'mode=' => 'string',
  ),
  'php_check_syntax' => 
  array (
    0 => 'bool',
    'filename' => 'string',
    'error_message=' => 'string',
  ),
  'php_ini_loaded_file' => 
  array (
    0 => 'false|string',
  ),
  'php_ini_scanned_files' => 
  array (
    0 => 'false|string',
  ),
  'php_logo_guid' => 
  array (
    0 => 'string',
  ),
  'php_sapi_name' => 
  array (
    0 => 'string',
  ),
  'php_strip_whitespace' => 
  array (
    0 => 'string',
    'filename' => 'string',
  ),
  'php_uname' => 
  array (
    0 => 'string',
    'mode=' => 'string',
  ),
  'php_user_filter::filter' => 
  array (
    0 => 'int',
    'in' => 'resource',
    'out' => 'resource',
    '&consumed' => 'int',
    'closing' => 'bool',
  ),
  'php_user_filter::onclose' => 
  array (
    0 => 'void',
  ),
  'php_user_filter::oncreate' => 
  array (
    0 => 'bool',
  ),
  'phpcredits' => 
  array (
    0 => 'true',
    'flags=' => 'int',
  ),
  'phpdbg_break_file' => 
  array (
    0 => 'void',
    'file' => 'string',
    'line' => 'int',
  ),
  'phpdbg_break_function' => 
  array (
    0 => 'void',
    'function' => 'string',
  ),
  'phpdbg_break_method' => 
  array (
    0 => 'void',
    'class' => 'string',
    'method' => 'string',
  ),
  'phpdbg_break_next' => 
  array (
    0 => 'void',
  ),
  'phpdbg_clear' => 
  array (
    0 => 'void',
  ),
  'phpdbg_color' => 
  array (
    0 => 'void',
    'element' => 'int',
    'color' => 'string',
  ),
  'phpdbg_end_oplog' => 
  array (
    0 => 'array<array-key, mixed>',
    'options=' => 'array<array-key, mixed>',
  ),
  'phpdbg_exec' => 
  array (
    0 => 'mixed',
    'context=' => 'string',
  ),
  'phpdbg_get_executable' => 
  array (
    0 => 'array<array-key, mixed>',
    'options=' => 'array<array-key, mixed>',
  ),
  'phpdbg_prompt' => 
  array (
    0 => 'void',
    'string' => 'string',
  ),
  'phpdbg_start_oplog' => 
  array (
    0 => 'void',
  ),
  'phpinfo' => 
  array (
    0 => 'true',
    'flags=' => 'int',
  ),
  'phptoken::is' => 
  array (
    0 => 'bool',
    'kind' => 'array<array-key, int|string>|int|string',
  ),
  'phptoken::tokenize' => 
  array (
    0 => 'list<PhpToken>',
    'code' => 'string',
    'flags=' => 'int',
  ),
  'phpversion' => 
  array (
    0 => 'false|string',
    'extension=' => 'null|string',
  ),
  'pht\\atomicinteger::__construct' => 
  array (
    0 => 'void',
    'value=' => 'int',
  ),
  'pht\\atomicinteger::dec' => 
  array (
    0 => 'void',
  ),
  'pht\\atomicinteger::get' => 
  array (
    0 => 'int',
  ),
  'pht\\atomicinteger::inc' => 
  array (
    0 => 'void',
  ),
  'pht\\atomicinteger::lock' => 
  array (
    0 => 'void',
  ),
  'pht\\atomicinteger::set' => 
  array (
    0 => 'void',
    'value' => 'int',
  ),
  'pht\\atomicinteger::unlock' => 
  array (
    0 => 'void',
  ),
  'pht\\hashtable::lock' => 
  array (
    0 => 'void',
  ),
  'pht\\hashtable::size' => 
  array (
    0 => 'int',
  ),
  'pht\\hashtable::unlock' => 
  array (
    0 => 'void',
  ),
  'pht\\queue::front' => 
  array (
    0 => 'mixed',
  ),
  'pht\\queue::lock' => 
  array (
    0 => 'void',
  ),
  'pht\\queue::pop' => 
  array (
    0 => 'mixed',
  ),
  'pht\\queue::push' => 
  array (
    0 => 'void',
    'value' => 'mixed',
  ),
  'pht\\queue::size' => 
  array (
    0 => 'int',
  ),
  'pht\\queue::unlock' => 
  array (
    0 => 'void',
  ),
  'pht\\runnable::run' => 
  array (
    0 => 'void',
  ),
  'pht\\thread::addclasstask' => 
  array (
    0 => 'void',
    'className' => 'string',
    '...ctorArgs=' => 'mixed',
  ),
  'pht\\thread::addfiletask' => 
  array (
    0 => 'void',
    'fileName' => 'string',
    '...globals=' => 'mixed',
  ),
  'pht\\thread::addfunctiontask' => 
  array (
    0 => 'void',
    'func' => 'callable',
    '...funcArgs=' => 'mixed',
  ),
  'pht\\thread::join' => 
  array (
    0 => 'void',
  ),
  'pht\\thread::start' => 
  array (
    0 => 'void',
  ),
  'pht\\thread::taskcount' => 
  array (
    0 => 'int',
  ),
  'pht\\threaded::lock' => 
  array (
    0 => 'void',
  ),
  'pht\\threaded::unlock' => 
  array (
    0 => 'void',
  ),
  'pht\\vector::__construct' => 
  array (
    0 => 'void',
    'size=' => 'int',
    'value=' => 'mixed',
  ),
  'pht\\vector::deleteat' => 
  array (
    0 => 'void',
    'offset' => 'int',
  ),
  'pht\\vector::insertat' => 
  array (
    0 => 'void',
    'value' => 'mixed',
    'offset' => 'int',
  ),
  'pht\\vector::lock' => 
  array (
    0 => 'void',
  ),
  'pht\\vector::pop' => 
  array (
    0 => 'mixed',
  ),
  'pht\\vector::push' => 
  array (
    0 => 'void',
    'value' => 'mixed',
  ),
  'pht\\vector::resize' => 
  array (
    0 => 'void',
    'size' => 'int',
    'value=' => 'mixed',
  ),
  'pht\\vector::shift' => 
  array (
    0 => 'mixed',
  ),
  'pht\\vector::size' => 
  array (
    0 => 'int',
  ),
  'pht\\vector::unlock' => 
  array (
    0 => 'void',
  ),
  'pht\\vector::unshift' => 
  array (
    0 => 'void',
    'value' => 'mixed',
  ),
  'pht\\vector::updateat' => 
  array (
    0 => 'void',
    'value' => 'mixed',
    'offset' => 'int',
  ),
  'pi' => 
  array (
    0 => 'float',
  ),
  'pointobj::__construct' => 
  array (
    0 => 'void',
  ),
  'pointobj::distancetoline' => 
  array (
    0 => 'float',
    'p1' => 'pointObj',
    'p2' => 'pointObj',
  ),
  'pointobj::distancetopoint' => 
  array (
    0 => 'float',
    'poPoint' => 'pointObj',
  ),
  'pointobj::distancetoshape' => 
  array (
    0 => 'float',
    'shape' => 'shapeObj',
  ),
  'pointobj::draw' => 
  array (
    0 => 'int',
    'map' => 'mapObj',
    'layer' => 'layerObj',
    'img' => 'imageObj',
    'class_index' => 'int',
    'text' => 'string',
  ),
  'pointobj::ms_newpointobj' => 
  array (
    0 => 'pointObj',
  ),
  'pointobj::project' => 
  array (
    0 => 'int',
    'in' => 'projectionObj',
    'out' => 'projectionObj',
  ),
  'pointobj::setxy' => 
  array (
    0 => 'int',
    'x' => 'float',
    'y' => 'float',
    'm' => 'float',
  ),
  'pointobj::setxyz' => 
  array (
    0 => 'int',
    'x' => 'float',
    'y' => 'float',
    'z' => 'float',
    'm' => 'float',
  ),
  'pool::__construct' => 
  array (
    0 => 'void',
    'size' => 'int',
    'class' => 'string',
    'ctor=' => 'array<array-key, mixed>',
  ),
  'pool::collect' => 
  array (
    0 => 'int',
    'collector=' => 'callable',
  ),
  'pool::resize' => 
  array (
    0 => 'void',
    'size' => 'int',
  ),
  'pool::shutdown' => 
  array (
    0 => 'void',
  ),
  'pool::submit' => 
  array (
    0 => 'int',
    'task' => 'Threaded',
  ),
  'pool::submitto' => 
  array (
    0 => 'int',
    'worker' => 'int',
    'task' => 'Threaded',
  ),
  'popen' => 
  array (
    0 => 'false|resource',
    'command' => 'string',
    'mode' => 'string',
  ),
  'pos' => 
  array (
    0 => 'mixed',
    'array' => 'array<array-key, mixed>',
  ),
  'posix_access' => 
  array (
    0 => 'bool',
    'filename' => 'string',
    'flags=' => 'int',
  ),
  'posix_ctermid' => 
  array (
    0 => 'false|string',
  ),
  'posix_errno' => 
  array (
    0 => 'int',
  ),
  'posix_get_last_error' => 
  array (
    0 => 'int',
  ),
  'posix_getcwd' => 
  array (
    0 => 'false|string',
  ),
  'posix_getegid' => 
  array (
    0 => 'int',
  ),
  'posix_geteuid' => 
  array (
    0 => 'int',
  ),
  'posix_getgid' => 
  array (
    0 => 'int',
  ),
  'posix_getgrgid' => 
  array (
    0 => 'array{gid: int, members: list<string>, name: string, passwd: string}|false',
    'group_id' => 'int',
  ),
  'posix_getgrnam' => 
  array (
    0 => 'array{gid: int, members: list<string>, name: string, passwd: string}|false',
    'name' => 'string',
  ),
  'posix_getgroups' => 
  array (
    0 => 'false|list<int>',
  ),
  'posix_getlogin' => 
  array (
    0 => 'false|string',
  ),
  'posix_getpgid' => 
  array (
    0 => 'false|int',
    'process_id' => 'int',
  ),
  'posix_getpgrp' => 
  array (
    0 => 'int',
  ),
  'posix_getpid' => 
  array (
    0 => 'int',
  ),
  'posix_getppid' => 
  array (
    0 => 'int',
  ),
  'posix_getpwnam' => 
  array (
    0 => 'array{dir: string, gecos: string, gid: int, name: string, passwd: string, shell: string, uid: int}|false',
    'username' => 'string',
  ),
  'posix_getpwuid' => 
  array (
    0 => 'array{dir: string, gecos: string, gid: int, name: string, passwd: string, shell: string, uid: int}|false',
    'user_id' => 'int',
  ),
  'posix_getrlimit' => 
  array (
    0 => 'array{\'hard core\': string, \'hard cpu\': string, \'hard data\': string, \'hard filesize\': string, \'hard maxproc\': int, \'hard memlock\': int, \'hard openfiles\': int, \'hard rss\': string, \'hard stack\': string, \'hard totalmem\': string, \'soft core\': string, \'soft cpu\': string, \'soft data\': string, \'soft filesize\': string, \'soft maxproc\': int, \'soft memlock\': int, \'soft openfiles\': int, \'soft rss\': string, \'soft stack\': int, \'soft totalmem\': string}|false',
    'resource=' => 'int|null',
  ),
  'posix_getsid' => 
  array (
    0 => 'false|int',
    'process_id' => 'int',
  ),
  'posix_getuid' => 
  array (
    0 => 'int',
  ),
  'posix_initgroups' => 
  array (
    0 => 'bool',
    'username' => 'string',
    'group_id' => 'int',
  ),
  'posix_isatty' => 
  array (
    0 => 'bool',
    'file_descriptor' => 'int|resource',
  ),
  'posix_kill' => 
  array (
    0 => 'bool',
    'process_id' => 'int',
    'signal' => 'int',
  ),
  'posix_mkfifo' => 
  array (
    0 => 'bool',
    'filename' => 'string',
    'permissions' => 'int',
  ),
  'posix_mknod' => 
  array (
    0 => 'bool',
    'filename' => 'string',
    'flags' => 'int',
    'major=' => 'int',
    'minor=' => 'int',
  ),
  'posix_setegid' => 
  array (
    0 => 'bool',
    'group_id' => 'int',
  ),
  'posix_seteuid' => 
  array (
    0 => 'bool',
    'user_id' => 'int',
  ),
  'posix_setgid' => 
  array (
    0 => 'bool',
    'group_id' => 'int',
  ),
  'posix_setpgid' => 
  array (
    0 => 'bool',
    'process_id' => 'int',
    'process_group_id' => 'int',
  ),
  'posix_setrlimit' => 
  array (
    0 => 'bool',
    'resource' => 'int',
    'soft_limit' => 'int',
    'hard_limit' => 'int',
  ),
  'posix_setsid' => 
  array (
    0 => 'int',
  ),
  'posix_setuid' => 
  array (
    0 => 'bool',
    'user_id' => 'int',
  ),
  'posix_strerror' => 
  array (
    0 => 'string',
    'error_code' => 'int',
  ),
  'posix_times' => 
  array (
    0 => 'array{cstime: int, cutime: int, stime: int, ticks: int, utime: int}|false',
  ),
  'posix_ttyname' => 
  array (
    0 => 'false|string',
    'file_descriptor' => 'int|resource',
  ),
  'posix_uname' => 
  array (
    0 => 'array{domainname: string, machine: string, nodename: string, release: string, sysname: string, version: string}|false',
  ),
  'postal\\expand::expand_address' => 
  array (
    0 => 'array<array-key, string>',
    'address' => 'string',
    'options=' => 'array<string, mixed>',
  ),
  'postal\\parser::parse_address' => 
  array (
    0 => 'array<string, string>',
    'address' => 'string',
    'options=' => 'array<string, string>',
  ),
  'pow' => 
  array (
    0 => 'float|int',
    'num' => 'float|int',
    'exponent' => 'float|int',
  ),
  'preg_filter' => 
  array (
    0 => 'array<array-key, string>|null|string',
    'pattern' => 'array<array-key, string>|string',
    'replacement' => 'array<array-key, string>|string',
    'subject' => 'array<array-key, string>|string',
    'limit=' => 'int',
    '&w_count=' => 'int',
  ),
  'preg_grep' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'pattern' => 'string',
    'array' => 'array<array-key, mixed>',
    'flags=' => 'int',
  ),
  'preg_last_error' => 
  array (
    0 => 'int',
  ),
  'preg_match' => 
  array (
    0 => '0|1|false',
    'pattern' => 'string',
    'subject' => 'string',
    '&w_matches=' => 'array<array-key, string>',
    'flags=' => '0',
    'offset=' => 'int',
  ),
  'preg_match\'1' => 
  array (
    0 => '0|1|false',
    'pattern' => 'string',
    'subject' => 'string',
    '&w_matches=' => 'array<array-key, mixed>',
    'flags=' => 'int',
    'offset=' => 'int',
  ),
  'preg_match_all' => 
  array (
    0 => 'false|int<0, max>',
    'pattern' => 'string',
    'subject' => 'string',
    '&w_matches=' => 'array<array-key, mixed>',
    'flags=' => 'int',
    'offset=' => 'int',
  ),
  'preg_quote' => 
  array (
    0 => 'string',
    'str' => 'string',
    'delimiter=' => 'null|string',
  ),
  'preg_replace' => 
  array (
    0 => 'array<array-key, string>|null|string',
    'pattern' => 'array<array-key, mixed>|string',
    'replacement' => 'array<array-key, mixed>|string',
    'subject' => 'array<array-key, mixed>|string',
    'limit=' => 'int',
    '&w_count=' => 'int',
  ),
  'preg_replace_callback' => 
  array (
    0 => 'null|string',
    'pattern' => 'array<array-key, mixed>|string',
    'callback' => 'callable(array<array-key, string>):string',
    'subject' => 'string',
    'limit=' => 'int',
    '&w_count=' => 'int',
    'flags=' => 'int',
  ),
  'preg_replace_callback\'1' => 
  array (
    0 => 'array<array-key, string>|null',
    'pattern' => 'array<array-key, mixed>|string',
    'callback' => 'callable(array<array-key, string>):string',
    'subject' => 'array<array-key, string>',
    'limit=' => 'int',
    '&w_count=' => 'int',
    'flags=' => 'int',
  ),
  'preg_replace_callback_array' => 
  array (
    0 => 'null|string',
    'pattern' => 'array<string, callable(array<array-key, mixed>):string>',
    'subject' => 'string',
    'limit=' => 'int',
    '&w_count=' => 'int',
    'flags=' => 'int',
  ),
  'preg_replace_callback_array\'1' => 
  array (
    0 => 'array<array-key, string>|null',
    'pattern' => 'array<string, callable(array<array-key, mixed>):string>',
    'subject' => 'array<array-key, string>',
    'limit=' => 'int',
    '&w_count=' => 'int',
    'flags=' => 'int',
  ),
  'preg_split' => 
  array (
    0 => 'false|list<string>',
    'pattern' => 'string',
    'subject' => 'string',
    'limit=' => 'int',
    'flags=' => 'int',
  ),
  'preg_split\'1' => 
  array (
    0 => 'false|list<list<int|string>|string>',
    'pattern' => 'string',
    'subject' => 'string',
    'limit=' => 'int',
    'flags=' => 'int',
  ),
  'prev' => 
  array (
    0 => 'mixed',
    '&r_array' => 'array<array-key, mixed>',
  ),
  'print' => 
  array (
    0 => 'int',
    'arg' => 'string',
  ),
  'print_r' => 
  array (
    0 => 'string',
    'value' => 'mixed',
    'return=' => 'bool',
  ),
  'print_r\'1' => 
  array (
    0 => 'true',
    'value' => 'mixed',
    'return=' => 'bool',
  ),
  'printf' => 
  array (
    0 => 'int<0, max>',
    'format' => 'string',
    '...values=' => 'float|int|string',
  ),
  'proc_close' => 
  array (
    0 => 'int',
    'process' => 'resource',
  ),
  'proc_get_status' => 
  array (
    0 => 'array{command: string, exitcode: int, pid: int, running: bool, signaled: bool, stopped: bool, stopsig: int, termsig: int}',
    'process' => 'resource',
  ),
  'proc_nice' => 
  array (
    0 => 'bool',
    'priority' => 'int',
  ),
  'proc_open' => 
  array (
    0 => 'false|resource',
    'command' => 'array<array-key, mixed>|string',
    'descriptor_spec' => 'array<array-key, mixed>',
    '&pipes' => 'array<array-key, resource>',
    'cwd=' => 'null|string',
    'env_vars=' => 'array<array-key, mixed>|null',
    'options=' => 'array<array-key, mixed>|null',
  ),
  'proc_terminate' => 
  array (
    0 => 'bool',
    'process' => 'resource',
    'signal=' => 'int',
  ),
  'projectionobj::__construct' => 
  array (
    0 => 'void',
    'projectionString' => 'string',
  ),
  'projectionobj::getunits' => 
  array (
    0 => 'int',
  ),
  'projectionobj::ms_newprojectionobj' => 
  array (
    0 => 'projectionObj',
    'projectionString' => 'string',
  ),
  'property_exists' => 
  array (
    0 => 'bool',
    'object_or_class' => 'object|string',
    'property' => 'string',
  ),
  'ps_add_bookmark' => 
  array (
    0 => 'int',
    'psdoc' => 'resource',
    'text' => 'string',
    'parent=' => 'int',
    'open=' => 'int',
  ),
  'ps_add_launchlink' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
    'llx' => 'float',
    'lly' => 'float',
    'urx' => 'float',
    'ury' => 'float',
    'filename' => 'string',
  ),
  'ps_add_locallink' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
    'llx' => 'float',
    'lly' => 'float',
    'urx' => 'float',
    'ury' => 'float',
    'page' => 'int',
    'dest' => 'string',
  ),
  'ps_add_note' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
    'llx' => 'float',
    'lly' => 'float',
    'urx' => 'float',
    'ury' => 'float',
    'contents' => 'string',
    'title' => 'string',
    'icon' => 'string',
    'open' => 'int',
  ),
  'ps_add_pdflink' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
    'llx' => 'float',
    'lly' => 'float',
    'urx' => 'float',
    'ury' => 'float',
    'filename' => 'string',
    'page' => 'int',
    'dest' => 'string',
  ),
  'ps_add_weblink' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
    'llx' => 'float',
    'lly' => 'float',
    'urx' => 'float',
    'ury' => 'float',
    'url' => 'string',
  ),
  'ps_arc' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
    'x' => 'float',
    'y' => 'float',
    'radius' => 'float',
    'alpha' => 'float',
    'beta' => 'float',
  ),
  'ps_arcn' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
    'x' => 'float',
    'y' => 'float',
    'radius' => 'float',
    'alpha' => 'float',
    'beta' => 'float',
  ),
  'ps_begin_page' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
    'width' => 'float',
    'height' => 'float',
  ),
  'ps_begin_pattern' => 
  array (
    0 => 'int',
    'psdoc' => 'resource',
    'width' => 'float',
    'height' => 'float',
    'xstep' => 'float',
    'ystep' => 'float',
    'painttype' => 'int',
  ),
  'ps_begin_template' => 
  array (
    0 => 'int',
    'psdoc' => 'resource',
    'width' => 'float',
    'height' => 'float',
  ),
  'ps_circle' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
    'x' => 'float',
    'y' => 'float',
    'radius' => 'float',
  ),
  'ps_clip' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
  ),
  'ps_close' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
  ),
  'ps_close_image' => 
  array (
    0 => 'void',
    'psdoc' => 'resource',
    'imageid' => 'int',
  ),
  'ps_closepath' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
  ),
  'ps_closepath_stroke' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
  ),
  'ps_continue_text' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
    'text' => 'string',
  ),
  'ps_curveto' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
    'x1' => 'float',
    'y1' => 'float',
    'x2' => 'float',
    'y2' => 'float',
    'x3' => 'float',
    'y3' => 'float',
  ),
  'ps_delete' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
  ),
  'ps_end_page' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
  ),
  'ps_end_pattern' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
  ),
  'ps_end_template' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
  ),
  'ps_fill' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
  ),
  'ps_fill_stroke' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
  ),
  'ps_findfont' => 
  array (
    0 => 'int',
    'psdoc' => 'resource',
    'fontname' => 'string',
    'encoding' => 'string',
    'embed=' => 'bool',
  ),
  'ps_get_buffer' => 
  array (
    0 => 'string',
    'psdoc' => 'resource',
  ),
  'ps_get_parameter' => 
  array (
    0 => 'string',
    'psdoc' => 'resource',
    'name' => 'string',
    'modifier=' => 'float',
  ),
  'ps_get_value' => 
  array (
    0 => 'float',
    'psdoc' => 'resource',
    'name' => 'string',
    'modifier=' => 'float',
  ),
  'ps_hyphenate' => 
  array (
    0 => 'array<array-key, mixed>',
    'psdoc' => 'resource',
    'text' => 'string',
  ),
  'ps_include_file' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
    'file' => 'string',
  ),
  'ps_lineto' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
    'x' => 'float',
    'y' => 'float',
  ),
  'ps_makespotcolor' => 
  array (
    0 => 'int',
    'psdoc' => 'resource',
    'name' => 'string',
    'reserved=' => 'int',
  ),
  'ps_moveto' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
    'x' => 'float',
    'y' => 'float',
  ),
  'ps_new' => 
  array (
    0 => 'resource',
  ),
  'ps_open_file' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
    'filename=' => 'string',
  ),
  'ps_open_image' => 
  array (
    0 => 'int',
    'psdoc' => 'resource',
    'type' => 'string',
    'source' => 'string',
    'data' => 'string',
    'length' => 'int',
    'width' => 'int',
    'height' => 'int',
    'components' => 'int',
    'bpc' => 'int',
    'params' => 'string',
  ),
  'ps_open_image_file' => 
  array (
    0 => 'int',
    'psdoc' => 'resource',
    'type' => 'string',
    'filename' => 'string',
    'stringparam=' => 'string',
    'intparam=' => 'int',
  ),
  'ps_open_memory_image' => 
  array (
    0 => 'int',
    'psdoc' => 'resource',
    'gd' => 'int',
  ),
  'ps_place_image' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
    'imageid' => 'int',
    'x' => 'float',
    'y' => 'float',
    'scale' => 'float',
  ),
  'ps_rect' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
    'x' => 'float',
    'y' => 'float',
    'width' => 'float',
    'height' => 'float',
  ),
  'ps_restore' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
  ),
  'ps_rotate' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
    'rot' => 'float',
  ),
  'ps_save' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
  ),
  'ps_scale' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
    'x' => 'float',
    'y' => 'float',
  ),
  'ps_set_border_color' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
    'red' => 'float',
    'green' => 'float',
    'blue' => 'float',
  ),
  'ps_set_border_dash' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
    'black' => 'float',
    'white' => 'float',
  ),
  'ps_set_border_style' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
    'style' => 'string',
    'width' => 'float',
  ),
  'ps_set_info' => 
  array (
    0 => 'bool',
    'p' => 'resource',
    'key' => 'string',
    'value' => 'string',
  ),
  'ps_set_parameter' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
    'name' => 'string',
    'value' => 'string',
  ),
  'ps_set_text_pos' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
    'x' => 'float',
    'y' => 'float',
  ),
  'ps_set_value' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
    'name' => 'string',
    'value' => 'float',
  ),
  'ps_setcolor' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
    'type' => 'string',
    'colorspace' => 'string',
    'c1' => 'float',
    'c2' => 'float',
    'c3' => 'float',
    'c4' => 'float',
  ),
  'ps_setdash' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
    'on' => 'float',
    'off' => 'float',
  ),
  'ps_setflat' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
    'value' => 'float',
  ),
  'ps_setfont' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
    'fontid' => 'int',
    'size' => 'float',
  ),
  'ps_setgray' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
    'gray' => 'float',
  ),
  'ps_setlinecap' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
    'type' => 'int',
  ),
  'ps_setlinejoin' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
    'type' => 'int',
  ),
  'ps_setlinewidth' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
    'width' => 'float',
  ),
  'ps_setmiterlimit' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
    'value' => 'float',
  ),
  'ps_setoverprintmode' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
    'mode' => 'int',
  ),
  'ps_setpolydash' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
    'arr' => 'float',
  ),
  'ps_shading' => 
  array (
    0 => 'int',
    'psdoc' => 'resource',
    'type' => 'string',
    'x0' => 'float',
    'y0' => 'float',
    'x1' => 'float',
    'y1' => 'float',
    'c1' => 'float',
    'c2' => 'float',
    'c3' => 'float',
    'c4' => 'float',
    'optlist' => 'string',
  ),
  'ps_shading_pattern' => 
  array (
    0 => 'int',
    'psdoc' => 'resource',
    'shadingid' => 'int',
    'optlist' => 'string',
  ),
  'ps_shfill' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
    'shadingid' => 'int',
  ),
  'ps_show' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
    'text' => 'string',
  ),
  'ps_show2' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
    'text' => 'string',
    'length' => 'int',
  ),
  'ps_show_boxed' => 
  array (
    0 => 'int',
    'psdoc' => 'resource',
    'text' => 'string',
    'left' => 'float',
    'bottom' => 'float',
    'width' => 'float',
    'height' => 'float',
    'hmode' => 'string',
    'feature=' => 'string',
  ),
  'ps_show_xy' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
    'text' => 'string',
    'x' => 'float',
    'y' => 'float',
  ),
  'ps_show_xy2' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
    'text' => 'string',
    'length' => 'int',
    'xcoor' => 'float',
    'ycoor' => 'float',
  ),
  'ps_string_geometry' => 
  array (
    0 => 'array<array-key, mixed>',
    'psdoc' => 'resource',
    'text' => 'string',
    'fontid=' => 'int',
    'size=' => 'float',
  ),
  'ps_stringwidth' => 
  array (
    0 => 'float',
    'psdoc' => 'resource',
    'text' => 'string',
    'fontid=' => 'int',
    'size=' => 'float',
  ),
  'ps_stroke' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
  ),
  'ps_symbol' => 
  array (
    0 => 'bool',
    'psdoc' => 'resource',
    'ord' => 'int',
  ),
  'ps_symbol_name' => 
  array (
    0 => 'string',
    'psdoc' => 'resource',
    'ord' => 'int',
    'fontid=' => 'int',
  ),
  'ps_symbol_width' => 
  array (
    0 => 'float',
    'psdoc' => 'resource',