<?php // phpcs:ignoreFile

return array (
  '_array' => 
  array (
    0 => 'Swoole\\ArrayObject',
    'array=' => 'array<array-key, mixed>',
  ),
  '_mbstring' => 
  array (
    0 => 'Swoole\\MultibyteStringObject',
    'string=' => 'string',
  ),
  '_string' => 
  array (
    0 => 'Swoole\\StringObject',
    'string=' => 'string',
  ),
  'abs' => 
  array (
    0 => 'mixed',
    'number' => 'mixed',
  ),
  'acos' => 
  array (
    0 => 'mixed',
    'number' => 'mixed',
  ),
  'acosh' => 
  array (
    0 => 'mixed',
    'number' => 'mixed',
  ),
  'addcslashes' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
    'charlist' => 'mixed',
  ),
  'addslashes' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
  ),
  'amqpbasicproperties::__construct' => 
  array (
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
  ),
  'amqpbasicproperties::getappid' => 
  array (
    0 => 'mixed',
  ),
  'amqpbasicproperties::getclusterid' => 
  array (
    0 => 'mixed',
  ),
  'amqpbasicproperties::getcontentencoding' => 
  array (
    0 => 'mixed',
  ),
  'amqpbasicproperties::getcontenttype' => 
  array (
    0 => 'mixed',
  ),
  'amqpbasicproperties::getcorrelationid' => 
  array (
    0 => 'mixed',
  ),
  'amqpbasicproperties::getdeliverymode' => 
  array (
    0 => 'mixed',
  ),
  'amqpbasicproperties::getexpiration' => 
  array (
    0 => 'mixed',
  ),
  'amqpbasicproperties::getheaders' => 
  array (
    0 => 'mixed',
  ),
  'amqpbasicproperties::getmessageid' => 
  array (
    0 => 'mixed',
  ),
  'amqpbasicproperties::getpriority' => 
  array (
    0 => 'mixed',
  ),
  'amqpbasicproperties::getreplyto' => 
  array (
    0 => 'mixed',
  ),
  'amqpbasicproperties::gettimestamp' => 
  array (
    0 => 'mixed',
  ),
  'amqpbasicproperties::gettype' => 
  array (
    0 => 'mixed',
  ),
  'amqpbasicproperties::getuserid' => 
  array (
    0 => 'mixed',
  ),
  'amqpchannel::__construct' => 
  array (
    0 => 'void',
    'amqp_connection' => 'AMQPConnection',
  ),
  'amqpchannel::basicrecover' => 
  array (
    0 => 'mixed',
    'requeue=' => 'mixed',
  ),
  'amqpchannel::close' => 
  array (
    0 => 'mixed',
  ),
  'amqpchannel::committransaction' => 
  array (
    0 => 'mixed',
  ),
  'amqpchannel::confirmselect' => 
  array (
    0 => 'mixed',
  ),
  'amqpchannel::getchannelid' => 
  array (
    0 => 'mixed',
  ),
  'amqpchannel::getconnection' => 
  array (
    0 => 'mixed',
  ),
  'amqpchannel::getconsumers' => 
  array (
    0 => 'mixed',
  ),
  'amqpchannel::getglobalprefetchcount' => 
  array (
    0 => 'mixed',
  ),
  'amqpchannel::getglobalprefetchsize' => 
  array (
    0 => 'mixed',
  ),
  'amqpchannel::getprefetchcount' => 
  array (
    0 => 'mixed',
  ),
  'amqpchannel::getprefetchsize' => 
  array (
    0 => 'mixed',
  ),
  'amqpchannel::isconnected' => 
  array (
    0 => 'mixed',
  ),
  'amqpchannel::qos' => 
  array (
    0 => 'mixed',
    'size' => 'mixed',
    'count' => 'mixed',
    'global=' => 'mixed',
  ),
  'amqpchannel::rollbacktransaction' => 
  array (
    0 => 'mixed',
  ),
  'amqpchannel::setconfirmcallback' => 
  array (
    0 => 'mixed',
    'ack_callback' => 'mixed',
    'nack_callback=' => 'mixed',
  ),
  'amqpchannel::setglobalprefetchcount' => 
  array (
    0 => 'mixed',
    'count' => 'mixed',
  ),
  'amqpchannel::setglobalprefetchsize' => 
  array (
    0 => 'mixed',
    'size' => 'mixed',
  ),
  'amqpchannel::setprefetchcount' => 
  array (
    0 => 'mixed',
    'count' => 'mixed',
  ),
  'amqpchannel::setprefetchsize' => 
  array (
    0 => 'mixed',
    'size' => 'mixed',
  ),
  'amqpchannel::setreturncallback' => 
  array (
    0 => 'mixed',
    'return_callback' => 'mixed',
  ),
  'amqpchannel::starttransaction' => 
  array (
    0 => 'mixed',
  ),
  'amqpchannel::waitforbasicreturn' => 
  array (
    0 => 'mixed',
    'timeout=' => 'mixed',
  ),
  'amqpchannel::waitforconfirm' => 
  array (
    0 => 'mixed',
    'timeout=' => 'mixed',
  ),
  'amqpchannelexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'amqpchannelexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'amqpchannelexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'amqpchannelexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'amqpchannelexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'amqpchannelexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'amqpchannelexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'amqpchannelexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'amqpchannelexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'amqpchannelexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'amqpchannelexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'amqpconnection::__construct' => 
  array (
    0 => 'void',
    'credentials=' => 'array<array-key, mixed>',
  ),
  'amqpconnection::connect' => 
  array (
    0 => 'mixed',
  ),
  'amqpconnection::disconnect' => 
  array (
    0 => 'mixed',
  ),
  'amqpconnection::getcacert' => 
  array (
    0 => 'mixed',
  ),
  'amqpconnection::getcert' => 
  array (
    0 => 'mixed',
  ),
  'amqpconnection::getconnectionname' => 
  array (
    0 => 'mixed',
  ),
  'amqpconnection::getheartbeatinterval' => 
  array (
    0 => 'mixed',
  ),
  'amqpconnection::gethost' => 
  array (
    0 => 'mixed',
  ),
  'amqpconnection::getkey' => 
  array (
    0 => 'mixed',
  ),
  'amqpconnection::getlogin' => 
  array (
    0 => 'mixed',
  ),
  'amqpconnection::getmaxchannels' => 
  array (
    0 => 'mixed',
  ),
  'amqpconnection::getmaxframesize' => 
  array (
    0 => 'mixed',
  ),
  'amqpconnection::getpassword' => 
  array (
    0 => 'mixed',
  ),
  'amqpconnection::getport' => 
  array (
    0 => 'mixed',
  ),
  'amqpconnection::getreadtimeout' => 
  array (
    0 => 'mixed',
  ),
  'amqpconnection::getrpctimeout' => 
  array (
    0 => 'mixed',
  ),
  'amqpconnection::getsaslmethod' => 
  array (
    0 => 'mixed',
  ),
  'amqpconnection::gettimeout' => 
  array (
    0 => 'mixed',
  ),
  'amqpconnection::getusedchannels' => 
  array (
    0 => 'mixed',
  ),
  'amqpconnection::getverify' => 
  array (
    0 => 'mixed',
  ),
  'amqpconnection::getvhost' => 
  array (
    0 => 'mixed',
  ),
  'amqpconnection::getwritetimeout' => 
  array (
    0 => 'mixed',
  ),
  'amqpconnection::isconnected' => 
  array (
    0 => 'mixed',
  ),
  'amqpconnection::ispersistent' => 
  array (
    0 => 'mixed',
  ),
  'amqpconnection::pconnect' => 
  array (
    0 => 'mixed',
  ),
  'amqpconnection::pdisconnect' => 
  array (
    0 => 'mixed',
  ),
  'amqpconnection::preconnect' => 
  array (
    0 => 'mixed',
  ),
  'amqpconnection::reconnect' => 
  array (
    0 => 'mixed',
  ),
  'amqpconnection::setcacert' => 
  array (
    0 => 'mixed',
    'cacert' => 'mixed',
  ),
  'amqpconnection::setcert' => 
  array (
    0 => 'mixed',
    'cert' => 'mixed',
  ),
  'amqpconnection::setconnectionname' => 
  array (
    0 => 'mixed',
    'connection_name' => 'mixed',
  ),
  'amqpconnection::sethost' => 
  array (
    0 => 'mixed',
    'host' => 'mixed',
  ),
  'amqpconnection::setkey' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'amqpconnection::setlogin' => 
  array (
    0 => 'mixed',
    'login' => 'mixed',
  ),
  'amqpconnection::setpassword' => 
  array (
    0 => 'mixed',
    'password' => 'mixed',
  ),
  'amqpconnection::setport' => 
  array (
    0 => 'mixed',
    'port' => 'mixed',
  ),
  'amqpconnection::setreadtimeout' => 
  array (
    0 => 'mixed',
    'timeout' => 'mixed',
  ),
  'amqpconnection::setrpctimeout' => 
  array (
    0 => 'mixed',
    'timeout' => 'mixed',
  ),
  'amqpconnection::setsaslmethod' => 
  array (
    0 => 'mixed',
    'sasl_method' => 'mixed',
  ),
  'amqpconnection::settimeout' => 
  array (
    0 => 'mixed',
    'timeout' => 'mixed',
  ),
  'amqpconnection::setverify' => 
  array (
    0 => 'mixed',
    'verify' => 'mixed',
  ),
  'amqpconnection::setvhost' => 
  array (
    0 => 'mixed',
    'vhost' => 'mixed',
  ),
  'amqpconnection::setwritetimeout' => 
  array (
    0 => 'mixed',
    'timeout' => 'mixed',
  ),
  'amqpconnectionexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'amqpconnectionexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'amqpconnectionexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'amqpconnectionexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'amqpconnectionexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'amqpconnectionexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'amqpconnectionexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'amqpconnectionexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'amqpconnectionexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'amqpconnectionexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'amqpconnectionexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'amqpdecimal::__construct' => 
  array (
    0 => 'void',
    'exponent' => 'mixed',
    'significand' => 'mixed',
  ),
  'amqpdecimal::getexponent' => 
  array (
    0 => 'mixed',
  ),
  'amqpdecimal::getsignificand' => 
  array (
    0 => 'mixed',
  ),
  'amqpenvelope::__construct' => 
  array (
    0 => 'void',
  ),
  'amqpenvelope::getappid' => 
  array (
    0 => 'mixed',
  ),
  'amqpenvelope::getbody' => 
  array (
    0 => 'mixed',
  ),
  'amqpenvelope::getclusterid' => 
  array (
    0 => 'mixed',
  ),
  'amqpenvelope::getconsumertag' => 
  array (
    0 => 'mixed',
  ),
  'amqpenvelope::getcontentencoding' => 
  array (
    0 => 'mixed',
  ),
  'amqpenvelope::getcontenttype' => 
  array (
    0 => 'mixed',
  ),
  'amqpenvelope::getcorrelationid' => 
  array (
    0 => 'mixed',
  ),
  'amqpenvelope::getdeliverymode' => 
  array (
    0 => 'mixed',
  ),
  'amqpenvelope::getdeliverytag' => 
  array (
    0 => 'mixed',
  ),
  'amqpenvelope::getexchangename' => 
  array (
    0 => 'mixed',
  ),
  'amqpenvelope::getexpiration' => 
  array (
    0 => 'mixed',
  ),
  'amqpenvelope::getheader' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
  ),
  'amqpenvelope::getheaders' => 
  array (
    0 => 'mixed',
  ),
  'amqpenvelope::getmessageid' => 
  array (
    0 => 'mixed',
  ),
  'amqpenvelope::getpriority' => 
  array (
    0 => 'mixed',
  ),
  'amqpenvelope::getreplyto' => 
  array (
    0 => 'mixed',
  ),
  'amqpenvelope::getroutingkey' => 
  array (
    0 => 'mixed',
  ),
  'amqpenvelope::gettimestamp' => 
  array (
    0 => 'mixed',
  ),
  'amqpenvelope::gettype' => 
  array (
    0 => 'mixed',
  ),
  'amqpenvelope::getuserid' => 
  array (
    0 => 'mixed',
  ),
  'amqpenvelope::hasheader' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
  ),
  'amqpenvelope::isredelivery' => 
  array (
    0 => 'mixed',
  ),
  'amqpenvelopeexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'amqpenvelopeexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'amqpenvelopeexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'amqpenvelopeexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'amqpenvelopeexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'amqpenvelopeexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'amqpenvelopeexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'amqpenvelopeexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'amqpenvelopeexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'amqpenvelopeexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'amqpenvelopeexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'amqpexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'amqpexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'amqpexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'amqpexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'amqpexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'amqpexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'amqpexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'amqpexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'amqpexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'amqpexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'amqpexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'amqpexchange::__construct' => 
  array (
    0 => 'void',
    'amqp_channel' => 'AMQPChannel',
  ),
  'amqpexchange::bind' => 
  array (
    0 => 'mixed',
    'exchange_name' => 'mixed',
    'routing_key' => 'mixed',
    'flags=' => 'mixed',
  ),
  'amqpexchange::declare' => 
  array (
    0 => 'mixed',
  ),
  'amqpexchange::declareexchange' => 
  array (
    0 => 'mixed',
  ),
  'amqpexchange::delete' => 
  array (
    0 => 'mixed',
    'exchange_name=' => 'mixed',
    'flags=' => 'mixed',
  ),
  'amqpexchange::getargument' => 
  array (
    0 => 'mixed',
    'argument' => 'mixed',
  ),
  'amqpexchange::getarguments' => 
  array (
    0 => 'mixed',
  ),
  'amqpexchange::getchannel' => 
  array (
    0 => 'mixed',
  ),
  'amqpexchange::getconnection' => 
  array (
    0 => 'mixed',
  ),
  'amqpexchange::getflags' => 
  array (
    0 => 'mixed',
  ),
  'amqpexchange::getname' => 
  array (
    0 => 'mixed',
  ),
  'amqpexchange::gettype' => 
  array (
    0 => 'mixed',
  ),
  'amqpexchange::hasargument' => 
  array (
    0 => 'mixed',
    'argument' => 'mixed',
  ),
  'amqpexchange::publish' => 
  array (
    0 => 'mixed',
    'message' => 'mixed',
    'routing_key=' => 'mixed',
    'flags=' => 'mixed',
    'headers=' => 'array<array-key, mixed>',
  ),
  'amqpexchange::setargument' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'amqpexchange::setarguments' => 
  array (
    0 => 'mixed',
    'arguments' => 'array<array-key, mixed>',
  ),
  'amqpexchange::setflags' => 
  array (
    0 => 'mixed',
    'flags' => 'mixed',
  ),
  'amqpexchange::setname' => 
  array (
    0 => 'mixed',
    'exchange_name' => 'mixed',
  ),
  'amqpexchange::settype' => 
  array (
    0 => 'mixed',
    'exchange_type' => 'mixed',
  ),
  'amqpexchange::unbind' => 
  array (
    0 => 'mixed',
    'exchange_name' => 'mixed',
    'routing_key' => 'mixed',
    'flags=' => 'mixed',
  ),
  'amqpexchangeexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'amqpexchangeexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'amqpexchangeexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'amqpexchangeexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'amqpexchangeexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'amqpexchangeexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'amqpexchangeexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'amqpexchangeexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'amqpexchangeexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'amqpexchangeexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'amqpexchangeexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'amqpqueue::__construct' => 
  array (
    0 => 'void',
    'amqp_channel' => 'AMQPChannel',
  ),
  'amqpqueue::ack' => 
  array (
    0 => 'mixed',
    'delivery_tag' => 'mixed',
    'flags=' => 'mixed',
  ),
  'amqpqueue::bind' => 
  array (
    0 => 'mixed',
    'exchange_name' => 'mixed',
    'routing_key=' => 'mixed',
    'arguments=' => 'mixed',
  ),
  'amqpqueue::cancel' => 
  array (
    0 => 'mixed',
    'consumer_tag=' => 'mixed',
  ),
  'amqpqueue::consume' => 
  array (
    0 => 'mixed',
    'callback' => 'mixed',
    'flags=' => 'mixed',
    'consumer_tag=' => 'mixed',
  ),
  'amqpqueue::declare' => 
  array (
    0 => 'mixed',
  ),
  'amqpqueue::declarequeue' => 
  array (
    0 => 'mixed',
  ),
  'amqpqueue::delete' => 
  array (
    0 => 'mixed',
    'flags=' => 'mixed',
  ),
  'amqpqueue::get' => 
  array (
    0 => 'mixed',
    'flags=' => 'mixed',
  ),
  'amqpqueue::getargument' => 
  array (
    0 => 'mixed',
    'argument' => 'mixed',
  ),
  'amqpqueue::getarguments' => 
  array (
    0 => 'mixed',
  ),
  'amqpqueue::getchannel' => 
  array (
    0 => 'mixed',
  ),
  'amqpqueue::getconnection' => 
  array (
    0 => 'mixed',
  ),
  'amqpqueue::getconsumertag' => 
  array (
    0 => 'mixed',
  ),
  'amqpqueue::getflags' => 
  array (
    0 => 'mixed',
  ),
  'amqpqueue::getname' => 
  array (
    0 => 'mixed',
  ),
  'amqpqueue::hasargument' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'amqpqueue::nack' => 
  array (
    0 => 'mixed',
    'delivery_tag' => 'mixed',
    'flags=' => 'mixed',
  ),
  'amqpqueue::purge' => 
  array (
    0 => 'mixed',
  ),
  'amqpqueue::reject' => 
  array (
    0 => 'mixed',
    'delivery_tag' => 'mixed',
    'flags=' => 'mixed',
  ),
  'amqpqueue::setargument' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'amqpqueue::setarguments' => 
  array (
    0 => 'mixed',
    'arguments' => 'array<array-key, mixed>',
  ),
  'amqpqueue::setflags' => 
  array (
    0 => 'mixed',
    'flags' => 'mixed',
  ),
  'amqpqueue::setname' => 
  array (
    0 => 'mixed',
    'queue_name' => 'mixed',
  ),
  'amqpqueue::unbind' => 
  array (
    0 => 'mixed',
    'exchange_name' => 'mixed',
    'routing_key=' => 'mixed',
    'arguments=' => 'mixed',
  ),
  'amqpqueueexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'amqpqueueexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'amqpqueueexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'amqpqueueexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'amqpqueueexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'amqpqueueexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'amqpqueueexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'amqpqueueexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'amqpqueueexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'amqpqueueexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'amqpqueueexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'amqptimestamp::__construct' => 
  array (
    0 => 'void',
    'timestamp=' => 'mixed',
  ),
  'amqptimestamp::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'amqptimestamp::gettimestamp' => 
  array (
    0 => 'mixed',
  ),
  'amqpvalueexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'amqpvalueexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'amqpvalueexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'amqpvalueexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'amqpvalueexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'amqpvalueexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'amqpvalueexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'amqpvalueexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'amqpvalueexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'amqpvalueexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'amqpvalueexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'apcu_add' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value=' => 'mixed',
    'ttl=' => 'mixed',
  ),
  'apcu_cache_info' => 
  array (
    0 => 'mixed',
    'limited=' => 'mixed',
  ),
  'apcu_cas' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'old' => 'mixed',
    'new' => 'mixed',
  ),
  'apcu_clear_cache' => 
  array (
    0 => 'mixed',
  ),
  'apcu_dec' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'step=' => 'mixed',
    '&success=' => 'mixed',
    'ttl=' => 'mixed',
  ),
  'apcu_delete' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'apcu_enabled' => 
  array (
    0 => 'mixed',
  ),
  'apcu_entry' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'callback' => 'mixed',
    'ttl=' => 'mixed',
  ),
  'apcu_exists' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'apcu_fetch' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    '&success=' => 'mixed',
  ),
  'apcu_inc' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'step=' => 'mixed',
    '&success=' => 'mixed',
    'ttl=' => 'mixed',
  ),
  'apcu_key_info' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'apcu_sma_info' => 
  array (
    0 => 'mixed',
    'limited=' => 'mixed',
  ),
  'apcu_store' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value=' => 'mixed',
    'ttl=' => 'mixed',
  ),
  'apcuiterator::__construct' => 
  array (
    0 => 'void',
    'search=' => 'mixed',
    'format=' => 'mixed',
    'chunk_size=' => 'mixed',
    'list=' => 'mixed',
  ),
  'apcuiterator::current' => 
  array (
    0 => 'mixed',
  ),
  'apcuiterator::gettotalcount' => 
  array (
    0 => 'mixed',
  ),
  'apcuiterator::gettotalhits' => 
  array (
    0 => 'mixed',
  ),
  'apcuiterator::gettotalsize' => 
  array (
    0 => 'mixed',
  ),
  'apcuiterator::key' => 
  array (
    0 => 'mixed',
  ),
  'apcuiterator::next' => 
  array (
    0 => 'mixed',
  ),
  'apcuiterator::rewind' => 
  array (
    0 => 'mixed',
  ),
  'apcuiterator::valid' => 
  array (
    0 => 'mixed',
  ),
  'appenditerator::__construct' => 
  array (
    0 => 'void',
  ),
  'appenditerator::append' => 
  array (
    0 => 'mixed',
    'iterator' => 'Iterator',
  ),
  'appenditerator::current' => 
  array (
    0 => 'mixed',
  ),
  'appenditerator::getarrayiterator' => 
  array (
    0 => 'mixed',
  ),
  'appenditerator::getinneriterator' => 
  array (
    0 => 'mixed',
  ),
  'appenditerator::getiteratorindex' => 
  array (
    0 => 'mixed',
  ),
  'appenditerator::key' => 
  array (
    0 => 'mixed',
  ),
  'appenditerator::next' => 
  array (
    0 => 'mixed',
  ),
  'appenditerator::rewind' => 
  array (
    0 => 'mixed',
  ),
  'appenditerator::valid' => 
  array (
    0 => 'mixed',
  ),
  'argumentcounterror::__clone' => 
  array (
    0 => 'mixed',
  ),
  'argumentcounterror::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'argumentcounterror::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'argumentcounterror::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'argumentcounterror::getcode' => 
  array (
    0 => 'mixed',
  ),
  'argumentcounterror::getfile' => 
  array (
    0 => 'mixed',
  ),
  'argumentcounterror::getline' => 
  array (
    0 => 'mixed',
  ),
  'argumentcounterror::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'argumentcounterror::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'argumentcounterror::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'argumentcounterror::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'arithmeticerror::__clone' => 
  array (
    0 => 'mixed',
  ),
  'arithmeticerror::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'arithmeticerror::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'arithmeticerror::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'arithmeticerror::getcode' => 
  array (
    0 => 'mixed',
  ),
  'arithmeticerror::getfile' => 
  array (
    0 => 'mixed',
  ),
  'arithmeticerror::getline' => 
  array (
    0 => 'mixed',
  ),
  'arithmeticerror::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'arithmeticerror::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'arithmeticerror::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'arithmeticerror::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'array_change_key_case' => 
  array (
    0 => 'mixed',
    'input' => 'mixed',
    'case=' => 'mixed',
  ),
  'array_chunk' => 
  array (
    0 => 'mixed',
    'arg' => 'mixed',
    'size' => 'mixed',
    'preserve_keys=' => 'mixed',
  ),
  'array_column' => 
  array (
    0 => 'mixed',
    'arg' => 'mixed',
    'column_key' => 'mixed',
    'index_key=' => 'mixed',
  ),
  'array_combine' => 
  array (
    0 => 'mixed',
    'keys' => 'mixed',
    'values' => 'mixed',
  ),
  'array_count_values' => 
  array (
    0 => 'mixed',
    'arg' => 'mixed',
  ),
  'array_diff' => 
  array (
    0 => 'mixed',
    'arr1' => 'mixed',
    '...arrays' => 'mixed',
  ),
  'array_diff_assoc' => 
  array (
    0 => 'mixed',
    'arr1' => 'mixed',
    '...arrays' => 'mixed',
  ),
  'array_diff_key' => 
  array (
    0 => 'mixed',
    'arr1' => 'mixed',
    '...arrays' => 'mixed',
  ),
  'array_diff_uassoc' => 
  array (
    0 => 'mixed',
    'arr1' => 'mixed',
    'arr2' => 'mixed',
    'callback_data_comp_func' => 'mixed',
  ),
  'array_diff_ukey' => 
  array (
    0 => 'mixed',
    'arr1' => 'mixed',
    'arr2' => 'mixed',
    'callback_key_comp_func' => 'mixed',
  ),
  'array_fill' => 
  array (
    0 => 'mixed',
    'start_key' => 'mixed',
    'num' => 'mixed',
    'val' => 'mixed',
  ),
  'array_fill_keys' => 
  array (
    0 => 'mixed',
    'keys' => 'mixed',
    'val' => 'mixed',
  ),
  'array_filter' => 
  array (
    0 => 'mixed',
    'arg' => 'mixed',
    'callback=' => 'mixed',
    'use_keys=' => 'mixed',
  ),
  'array_flip' => 
  array (
    0 => 'mixed',
    'arg' => 'mixed',
  ),
  'array_intersect' => 
  array (
    0 => 'mixed',
    'arr1' => 'mixed',
    '...arrays' => 'mixed',
  ),
  'array_intersect_assoc' => 
  array (
    0 => 'mixed',
    'arr1' => 'mixed',
    '...arrays' => 'mixed',
  ),
  'array_intersect_key' => 
  array (
    0 => 'mixed',
    'arr1' => 'mixed',
    '...arrays' => 'mixed',
  ),
  'array_intersect_uassoc' => 
  array (
    0 => 'mixed',
    'arr1' => 'mixed',
    'arr2' => 'mixed',
    'callback_key_compare_func' => 'mixed',
  ),
  'array_intersect_ukey' => 
  array (
    0 => 'mixed',
    'arr1' => 'mixed',
    'arr2' => 'mixed',
    'callback_key_compare_func' => 'mixed',
  ),
  'array_key_exists' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'search' => 'mixed',
  ),
  'array_key_first' => 
  array (
    0 => 'mixed',
    'arg' => 'mixed',
  ),
  'array_key_last' => 
  array (
    0 => 'mixed',
    'arg' => 'mixed',
  ),
  'array_keys' => 
  array (
    0 => 'mixed',
    'arg' => 'mixed',
    'search_value=' => 'mixed',
    'strict=' => 'mixed',
  ),
  'array_map' => 
  array (
    0 => 'mixed',
    'callback' => 'mixed',
    '...arrays' => 'mixed',
  ),
  'array_merge' => 
  array (
    0 => 'mixed',
    'arr1' => 'mixed',
    '...arrays=' => 'mixed',
  ),
  'array_merge_recursive' => 
  array (
    0 => 'mixed',
    'arr1' => 'mixed',
    '...arrays=' => 'mixed',
  ),
  'array_multisort' => 
  array (
    0 => 'mixed',
    '&arr1' => 'mixed',
    '&sort_order=' => 'mixed',
    '&sort_flags=' => 'mixed',
    '...&arr2=' => 'mixed',
  ),
  'array_pad' => 
  array (
    0 => 'mixed',
    'arg' => 'mixed',
    'pad_size' => 'mixed',
    'pad_value' => 'mixed',
  ),
  'array_pop' => 
  array (
    0 => 'mixed',
    '&stack' => 'mixed',
  ),
  'array_product' => 
  array (
    0 => 'mixed',
    'arg' => 'mixed',
  ),
  'array_push' => 
  array (
    0 => 'mixed',
    '&stack' => 'mixed',
    '...vars=' => 'mixed',
  ),
  'array_rand' => 
  array (
    0 => 'mixed',
    'arg' => 'mixed',
    'num_req=' => 'mixed',
  ),
  'array_reduce' => 
  array (
    0 => 'mixed',
    'arg' => 'mixed',
    'callback' => 'mixed',
    'initial=' => 'mixed',
  ),
  'array_replace' => 
  array (
    0 => 'mixed',
    'arr1' => 'mixed',
    '...arrays=' => 'mixed',
  ),
  'array_replace_recursive' => 
  array (
    0 => 'mixed',
    'arr1' => 'mixed',
    '...arrays=' => 'mixed',
  ),
  'array_reverse' => 
  array (
    0 => 'mixed',
    'input' => 'mixed',
    'preserve_keys=' => 'mixed',
  ),
  'array_search' => 
  array (
    0 => 'mixed',
    'needle' => 'mixed',
    'haystack' => 'mixed',
    'strict=' => 'mixed',
  ),
  'array_shift' => 
  array (
    0 => 'mixed',
    '&stack' => 'mixed',
  ),
  'array_slice' => 
  array (
    0 => 'mixed',
    'arg' => 'mixed',
    'offset' => 'mixed',
    'length=' => 'mixed',
    'preserve_keys=' => 'mixed',
  ),
  'array_splice' => 
  array (
    0 => 'mixed',
    '&arg' => 'mixed',
    'offset' => 'mixed',
    'length=' => 'mixed',
    'replacement=' => 'mixed',
  ),
  'array_sum' => 
  array (
    0 => 'mixed',
    'arg' => 'mixed',
  ),
  'array_udiff' => 
  array (
    0 => 'mixed',
    'arr1' => 'mixed',
    'arr2' => 'mixed',
    'callback_data_comp_func' => 'mixed',
  ),
  'array_udiff_assoc' => 
  array (
    0 => 'mixed',
    'arr1' => 'mixed',
    'arr2' => 'mixed',
    'callback_key_comp_func' => 'mixed',
  ),
  'array_udiff_uassoc' => 
  array (
    0 => 'mixed',
    'arr1' => 'mixed',
    'arr2' => 'mixed',
    'callback_data_comp_func' => 'mixed',
    'callback_key_comp_func' => 'mixed',
  ),
  'array_uintersect' => 
  array (
    0 => 'mixed',
    'arr1' => 'mixed',
    'arr2' => 'mixed',
    'callback_data_compare_func' => 'mixed',
  ),
  'array_uintersect_assoc' => 
  array (
    0 => 'mixed',
    'arr1' => 'mixed',
    'arr2' => 'mixed',
    'callback_data_compare_func' => 'mixed',
  ),
  'array_uintersect_uassoc' => 
  array (
    0 => 'mixed',
    'arr1' => 'mixed',
    'arr2' => 'mixed',
    'callback_data_compare_func' => 'mixed',
    'callback_key_compare_func' => 'mixed',
  ),
  'array_unique' => 
  array (
    0 => 'mixed',
    'arg' => 'mixed',
    'flags=' => 'mixed',
  ),
  'array_unshift' => 
  array (
    0 => 'mixed',
    '&stack' => 'mixed',
    '...vars=' => 'mixed',
  ),
  'array_values' => 
  array (
    0 => 'mixed',
    'arg' => 'mixed',
  ),
  'array_walk' => 
  array (
    0 => 'mixed',
    '&input' => 'mixed',
    'funcname' => 'mixed',
    'userdata=' => 'mixed',
  ),
  'array_walk_recursive' => 
  array (
    0 => 'mixed',
    '&input' => 'mixed',
    'funcname' => 'mixed',
    'userdata=' => 'mixed',
  ),
  'arrayiterator::__construct' => 
  array (
    0 => 'void',
    'array=' => 'mixed',
    'ar_flags=' => 'mixed',
  ),
  'arrayiterator::append' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'arrayiterator::asort' => 
  array (
    0 => 'mixed',
  ),
  'arrayiterator::count' => 
  array (
    0 => 'mixed',
  ),
  'arrayiterator::current' => 
  array (
    0 => 'mixed',
  ),
  'arrayiterator::getarraycopy' => 
  array (
    0 => 'mixed',
  ),
  'arrayiterator::getflags' => 
  array (
    0 => 'mixed',
  ),
  'arrayiterator::key' => 
  array (
    0 => 'mixed',
  ),
  'arrayiterator::ksort' => 
  array (
    0 => 'mixed',
  ),
  'arrayiterator::natcasesort' => 
  array (
    0 => 'mixed',
  ),
  'arrayiterator::natsort' => 
  array (
    0 => 'mixed',
  ),
  'arrayiterator::next' => 
  array (
    0 => 'mixed',
  ),
  'arrayiterator::offsetexists' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'arrayiterator::offsetget' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'arrayiterator::offsetset' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
    'newval' => 'mixed',
  ),
  'arrayiterator::offsetunset' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'arrayiterator::rewind' => 
  array (
    0 => 'mixed',
  ),
  'arrayiterator::seek' => 
  array (
    0 => 'mixed',
    'position' => 'mixed',
  ),
  'arrayiterator::serialize' => 
  array (
    0 => 'mixed',
  ),
  'arrayiterator::setflags' => 
  array (
    0 => 'mixed',
    'flags' => 'mixed',
  ),
  'arrayiterator::uasort' => 
  array (
    0 => 'mixed',
    'cmp_function' => 'mixed',
  ),
  'arrayiterator::uksort' => 
  array (
    0 => 'mixed',
    'cmp_function' => 'mixed',
  ),
  'arrayiterator::unserialize' => 
  array (
    0 => 'mixed',
    'serialized' => 'mixed',
  ),
  'arrayiterator::valid' => 
  array (
    0 => 'mixed',
  ),
  'arrayobject::__construct' => 
  array (
    0 => 'void',
    'input=' => 'mixed',
    'flags=' => 'mixed',
    'iterator_class=' => 'mixed',
  ),
  'arrayobject::append' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'arrayobject::asort' => 
  array (
    0 => 'mixed',
  ),
  'arrayobject::count' => 
  array (
    0 => 'mixed',
  ),
  'arrayobject::exchangearray' => 
  array (
    0 => 'mixed',
    'array' => 'mixed',
  ),
  'arrayobject::getarraycopy' => 
  array (
    0 => 'mixed',
  ),
  'arrayobject::getflags' => 
  array (
    0 => 'mixed',
  ),
  'arrayobject::getiterator' => 
  array (
    0 => 'mixed',
  ),
  'arrayobject::getiteratorclass' => 
  array (
    0 => 'mixed',
  ),
  'arrayobject::ksort' => 
  array (
    0 => 'mixed',
  ),
  'arrayobject::natcasesort' => 
  array (
    0 => 'mixed',
  ),
  'arrayobject::natsort' => 
  array (
    0 => 'mixed',
  ),
  'arrayobject::offsetexists' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'arrayobject::offsetget' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'arrayobject::offsetset' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
    'newval' => 'mixed',
  ),
  'arrayobject::offsetunset' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'arrayobject::serialize' => 
  array (
    0 => 'mixed',
  ),
  'arrayobject::setflags' => 
  array (
    0 => 'mixed',
    'flags' => 'mixed',
  ),
  'arrayobject::setiteratorclass' => 
  array (
    0 => 'mixed',
    'iteratorClass' => 'mixed',
  ),
  'arrayobject::uasort' => 
  array (
    0 => 'mixed',
    'cmp_function' => 'mixed',
  ),
  'arrayobject::uksort' => 
  array (
    0 => 'mixed',
    'cmp_function' => 'mixed',
  ),
  'arrayobject::unserialize' => 
  array (
    0 => 'mixed',
    'serialized' => 'mixed',
  ),
  'arsort' => 
  array (
    0 => 'mixed',
    '&arg' => 'mixed',
    'sort_flags=' => 'mixed',
  ),
  'asin' => 
  array (
    0 => 'mixed',
    'number' => 'mixed',
  ),
  'asinh' => 
  array (
    0 => 'mixed',
    'number' => 'mixed',
  ),
  'asort' => 
  array (
    0 => 'mixed',
    '&arg' => 'mixed',
    'sort_flags=' => 'mixed',
  ),
  'assert' => 
  array (
    0 => 'mixed',
    'assertion' => 'mixed',
    'description=' => 'mixed',
  ),
  'assert_options' => 
  array (
    0 => 'mixed',
    'what' => 'mixed',
    'value=' => 'mixed',
  ),
  'assertionerror::__clone' => 
  array (
    0 => 'mixed',
  ),
  'assertionerror::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'assertionerror::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'assertionerror::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'assertionerror::getcode' => 
  array (
    0 => 'mixed',
  ),
  'assertionerror::getfile' => 
  array (
    0 => 'mixed',
  ),
  'assertionerror::getline' => 
  array (
    0 => 'mixed',
  ),
  'assertionerror::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'assertionerror::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'assertionerror::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'assertionerror::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'atan' => 
  array (
    0 => 'mixed',
    'number' => 'mixed',
  ),
  'atan2' => 
  array (
    0 => 'mixed',
    'y' => 'mixed',
    'x' => 'mixed',
  ),
  'atanh' => 
  array (
    0 => 'mixed',
    'number' => 'mixed',
  ),
  'badfunctioncallexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'badfunctioncallexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'badfunctioncallexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'badfunctioncallexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'badfunctioncallexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'badfunctioncallexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'badfunctioncallexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'badfunctioncallexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'badfunctioncallexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'badfunctioncallexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'badfunctioncallexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'badmethodcallexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'badmethodcallexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'badmethodcallexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'badmethodcallexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'badmethodcallexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'badmethodcallexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'badmethodcallexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'badmethodcallexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'badmethodcallexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'badmethodcallexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'badmethodcallexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'base64_decode' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
    'strict=' => 'mixed',
  ),
  'base64_encode' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
  ),
  'base_convert' => 
  array (
    0 => 'mixed',
    'number' => 'mixed',
    'frombase' => 'mixed',
    'tobase' => 'mixed',
  ),
  'basename' => 
  array (
    0 => 'mixed',
    'path' => 'mixed',
    'suffix=' => 'mixed',
  ),
  'bcadd' => 
  array (
    0 => 'mixed',
    'left_operand' => 'mixed',
    'right_operand' => 'mixed',
    'scale=' => 'mixed',
  ),
  'bccomp' => 
  array (
    0 => 'mixed',
    'left_operand' => 'mixed',
    'right_operand' => 'mixed',
    'scale=' => 'mixed',
  ),
  'bcdiv' => 
  array (
    0 => 'mixed',
    'left_operand' => 'mixed',
    'right_operand' => 'mixed',
    'scale=' => 'mixed',
  ),
  'bcmod' => 
  array (
    0 => 'mixed',
    'left_operand' => 'mixed',
    'right_operand' => 'mixed',
    'scale=' => 'mixed',
  ),
  'bcmul' => 
  array (
    0 => 'mixed',
    'left_operand' => 'mixed',
    'right_operand' => 'mixed',
    'scale=' => 'mixed',
  ),
  'bcpow' => 
  array (
    0 => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
    'scale=' => 'mixed',
  ),
  'bcpowmod' => 
  array (
    0 => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
    'mod' => 'mixed',
    'scale=' => 'mixed',
  ),
  'bcscale' => 
  array (
    0 => 'mixed',
    'scale=' => 'mixed',
  ),
  'bcsqrt' => 
  array (
    0 => 'mixed',
    'operand' => 'mixed',
    'scale=' => 'mixed',
  ),
  'bcsub' => 
  array (
    0 => 'mixed',
    'left_operand' => 'mixed',
    'right_operand' => 'mixed',
    'scale=' => 'mixed',
  ),
  'bin2hex' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
  ),
  'bindec' => 
  array (
    0 => 'mixed',
    'binary_number' => 'mixed',
  ),
  'boolval' => 
  array (
    0 => 'mixed',
    'var' => 'mixed',
  ),
  'cachingiterator::__construct' => 
  array (
    0 => 'void',
    'iterator' => 'Iterator',
    'flags=' => 'mixed',
  ),
  'cachingiterator::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'cachingiterator::count' => 
  array (
    0 => 'mixed',
  ),
  'cachingiterator::current' => 
  array (
    0 => 'mixed',
  ),
  'cachingiterator::getcache' => 
  array (
    0 => 'mixed',
  ),
  'cachingiterator::getflags' => 
  array (
    0 => 'mixed',
  ),
  'cachingiterator::getinneriterator' => 
  array (
    0 => 'mixed',
  ),
  'cachingiterator::hasnext' => 
  array (
    0 => 'mixed',
  ),
  'cachingiterator::key' => 
  array (
    0 => 'mixed',
  ),
  'cachingiterator::next' => 
  array (
    0 => 'mixed',
  ),
  'cachingiterator::offsetexists' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'cachingiterator::offsetget' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'cachingiterator::offsetset' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
    'newval' => 'mixed',
  ),
  'cachingiterator::offsetunset' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'cachingiterator::rewind' => 
  array (
    0 => 'mixed',
  ),
  'cachingiterator::setflags' => 
  array (
    0 => 'mixed',
    'flags' => 'mixed',
  ),
  'cachingiterator::valid' => 
  array (
    0 => 'mixed',
  ),
  'call_user_func' => 
  array (
    0 => 'mixed',
    'function_name' => 'mixed',
    '...parameters=' => 'mixed',
  ),
  'call_user_func_array' => 
  array (
    0 => 'mixed',
    'function_name' => 'mixed',
    'parameters' => 'mixed',
  ),
  'callbackfilteriterator::__construct' => 
  array (
    0 => 'void',
    'iterator' => 'Iterator',
    'callback' => 'mixed',
  ),
  'callbackfilteriterator::accept' => 
  array (
    0 => 'mixed',
  ),
  'callbackfilteriterator::current' => 
  array (
    0 => 'mixed',
  ),
  'callbackfilteriterator::getinneriterator' => 
  array (
    0 => 'mixed',
  ),
  'callbackfilteriterator::key' => 
  array (
    0 => 'mixed',
  ),
  'callbackfilteriterator::next' => 
  array (
    0 => 'mixed',
  ),
  'callbackfilteriterator::rewind' => 
  array (
    0 => 'mixed',
  ),
  'callbackfilteriterator::valid' => 
  array (
    0 => 'mixed',
  ),
  'ceil' => 
  array (
    0 => 'mixed',
    'number' => 'mixed',
  ),
  'chan::__construct' => 
  array (
    0 => 'void',
    'size=' => 'mixed',
  ),
  'chan::close' => 
  array (
    0 => 'mixed',
  ),
  'chan::isempty' => 
  array (
    0 => 'mixed',
  ),
  'chan::isfull' => 
  array (
    0 => 'mixed',
  ),
  'chan::length' => 
  array (
    0 => 'mixed',
  ),
  'chan::pop' => 
  array (
    0 => 'mixed',
    'timeout=' => 'mixed',
  ),
  'chan::push' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'chan::stats' => 
  array (
    0 => 'mixed',
  ),
  'chdir' => 
  array (
    0 => 'mixed',
    'directory' => 'mixed',
  ),
  'checkdate' => 
  array (
    0 => 'mixed',
    'month' => 'mixed',
    'day' => 'mixed',
    'year' => 'mixed',
  ),
  'checkdnsrr' => 
  array (
    0 => 'mixed',
    'host' => 'mixed',
    'type=' => 'mixed',
  ),
  'chgrp' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
    'group' => 'mixed',
  ),
  'chmod' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
    'mode' => 'mixed',
  ),
  'chop' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
    'character_mask=' => 'mixed',
  ),
  'chown' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
    'user' => 'mixed',
  ),
  'chr' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'chroot' => 
  array (
    0 => 'mixed',
    'directory' => 'mixed',
  ),
  'chunk_split' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
    'chunklen=' => 'mixed',
    'ending=' => 'mixed',
  ),
  'class_alias' => 
  array (
    0 => 'mixed',
    'user_class_name' => 'mixed',
    'alias_name' => 'mixed',
    'autoload=' => 'mixed',
  ),
  'class_exists' => 
  array (
    0 => 'mixed',
    'classname' => 'mixed',
    'autoload=' => 'mixed',
  ),
  'class_implements' => 
  array (
    0 => 'mixed',
    'what' => 'mixed',
    'autoload=' => 'mixed',
  ),
  'class_parents' => 
  array (
    0 => 'mixed',
    'instance' => 'mixed',
    'autoload=' => 'mixed',
  ),
  'class_uses' => 
  array (
    0 => 'mixed',
    'what' => 'mixed',
    'autoload=' => 'mixed',
  ),
  'clearstatcache' => 
  array (
    0 => 'mixed',
    'clear_realpath_cache=' => 'mixed',
    'filename=' => 'mixed',
  ),
  'cli_get_process_title' => 
  array (
    0 => 'mixed',
  ),
  'cli_set_process_title' => 
  array (
    0 => 'mixed',
    'title' => 'mixed',
  ),
  'closedgeneratorexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'closedgeneratorexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'closedgeneratorexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'closedgeneratorexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'closedgeneratorexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'closedgeneratorexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'closedgeneratorexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'closedgeneratorexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'closedgeneratorexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'closedgeneratorexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'closedgeneratorexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'closedir' => 
  array (
    0 => 'mixed',
    'dir_handle=' => 'mixed',
  ),
  'closelog' => 
  array (
    0 => 'mixed',
  ),
  'closure::__construct' => 
  array (
    0 => 'void',
  ),
  'closure::__invoke' => 
  array (
    0 => 'mixed',
    '...args=' => 'mixed',
  ),
  'closure::bind' => 
  array (
    0 => 'mixed',
    'closure' => 'mixed',
    'newthis' => 'mixed',
    'newscope=' => 'mixed',
  ),
  'closure::bindto' => 
  array (
    0 => 'mixed',
    'newthis' => 'mixed',
    'newscope=' => 'mixed',
  ),
  'closure::call' => 
  array (
    0 => 'mixed',
    'newthis' => 'mixed',
    '...parameters=' => 'mixed',
  ),
  'closure::fromcallable' => 
  array (
    0 => 'mixed',
    'callable' => 'mixed',
  ),
  'co::cancel' => 
  array (
    0 => 'mixed',
    'cid' => 'mixed',
  ),
  'co::create' => 
  array (
    0 => 'mixed',
    'func' => 'callable',
    '...params=' => 'mixed',
  ),
  'co::defer' => 
  array (
    0 => 'mixed',
    'callback' => 'mixed',
  ),
  'co::disablescheduler' => 
  array (
    0 => 'mixed',
  ),
  'co::dnslookup' => 
  array (
    0 => 'mixed',
    'domain_name' => 'mixed',
    'timeout=' => 'mixed',
    'type=' => 'mixed',
  ),
  'co::enablescheduler' => 
  array (
    0 => 'mixed',
  ),
  'co::exec' => 
  array (
    0 => 'mixed',
    'command' => 'mixed',
    'get_error_stream=' => 'mixed',
  ),
  'co::exists' => 
  array (
    0 => 'mixed',
    'cid' => 'mixed',
  ),
  'co::fgets' => 
  array (
    0 => 'mixed',
    'handle' => 'mixed',
  ),
  'co::fread' => 
  array (
    0 => 'mixed',
    'handle' => 'mixed',
    'length=' => 'mixed',
  ),
  'co::fwrite' => 
  array (
    0 => 'mixed',
    'handle' => 'mixed',
    'string' => 'mixed',
    'length=' => 'mixed',
  ),
  'co::getaddrinfo' => 
  array (
    0 => 'mixed',
    'hostname' => 'mixed',
    'family=' => 'mixed',
    'socktype=' => 'mixed',
    'protocol=' => 'mixed',
    'service=' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co::getbacktrace' => 
  array (
    0 => 'mixed',
    'cid=' => 'mixed',
    'options=' => 'mixed',
    'limit=' => 'mixed',
  ),
  'co::getcid' => 
  array (
    0 => 'mixed',
  ),
  'co::getcontext' => 
  array (
    0 => 'mixed',
    'cid=' => 'mixed',
  ),
  'co::getelapsed' => 
  array (
    0 => 'mixed',
    'cid=' => 'mixed',
  ),
  'co::gethostbyname' => 
  array (
    0 => 'mixed',
    'domain_name' => 'mixed',
    'family=' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co::getoptions' => 
  array (
    0 => 'mixed',
  ),
  'co::getpcid' => 
  array (
    0 => 'mixed',
    'cid=' => 'mixed',
  ),
  'co::getstackusage' => 
  array (
    0 => 'mixed',
    'cid=' => 'mixed',
  ),
  'co::getuid' => 
  array (
    0 => 'mixed',
  ),
  'co::iscanceled' => 
  array (
    0 => 'mixed',
  ),
  'co::join' => 
  array (
    0 => 'mixed',
    'cid_array' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co::list' => 
  array (
    0 => 'mixed',
  ),
  'co::listcoroutines' => 
  array (
    0 => 'mixed',
  ),
  'co::printbacktrace' => 
  array (
    0 => 'mixed',
    'cid=' => 'mixed',
    'options=' => 'mixed',
    'limit=' => 'mixed',
  ),
  'co::readfile' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'co::resume' => 
  array (
    0 => 'mixed',
    'cid' => 'mixed',
  ),
  'co::set' => 
  array (
    0 => 'mixed',
    'options' => 'mixed',
  ),
  'co::sleep' => 
  array (
    0 => 'mixed',
    'seconds' => 'mixed',
  ),
  'co::stats' => 
  array (
    0 => 'mixed',
  ),
  'co::statvfs' => 
  array (
    0 => 'mixed',
    'path' => 'mixed',
  ),
  'co::suspend' => 
  array (
    0 => 'mixed',
  ),
  'co::wait' => 
  array (
    0 => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co::waitevent' => 
  array (
    0 => 'mixed',
    'fd' => 'mixed',
    'events=' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co::waitpid' => 
  array (
    0 => 'mixed',
    'pid' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co::waitsignal' => 
  array (
    0 => 'mixed',
    'signo' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co::writefile' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
    'data' => 'mixed',
    'flags=' => 'mixed',
  ),
  'co::yield' => 
  array (
    0 => 'mixed',
  ),
  'co\\channel::__construct' => 
  array (
    0 => 'void',
    'size=' => 'mixed',
  ),
  'co\\channel::close' => 
  array (
    0 => 'mixed',
  ),
  'co\\channel::isempty' => 
  array (
    0 => 'mixed',
  ),
  'co\\channel::isfull' => 
  array (
    0 => 'mixed',
  ),
  'co\\channel::length' => 
  array (
    0 => 'mixed',
  ),
  'co\\channel::pop' => 
  array (
    0 => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co\\channel::push' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co\\channel::stats' => 
  array (
    0 => 'mixed',
  ),
  'co\\client::__construct' => 
  array (
    0 => 'void',
    'type' => 'mixed',
  ),
  'co\\client::__destruct' => 
  array (
    0 => 'mixed',
  ),
  'co\\client::close' => 
  array (
    0 => 'mixed',
  ),
  'co\\client::connect' => 
  array (
    0 => 'mixed',
    'host' => 'mixed',
    'port=' => 'mixed',
    'timeout=' => 'mixed',
    'sock_flag=' => 'mixed',
  ),
  'co\\client::enablessl' => 
  array (
    0 => 'mixed',
  ),
  'co\\client::exportsocket' => 
  array (
    0 => 'mixed',
  ),
  'co\\client::getpeercert' => 
  array (
    0 => 'mixed',
  ),
  'co\\client::getpeername' => 
  array (
    0 => 'mixed',
  ),
  'co\\client::getsockname' => 
  array (
    0 => 'mixed',
  ),
  'co\\client::isconnected' => 
  array (
    0 => 'mixed',
  ),
  'co\\client::peek' => 
  array (
    0 => 'mixed',
    'length=' => 'mixed',
  ),
  'co\\client::recv' => 
  array (
    0 => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co\\client::recvfrom' => 
  array (
    0 => 'mixed',
    'length' => 'mixed',
    '&address' => 'mixed',
    '&port=' => 'mixed',
  ),
  'co\\client::send' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
  ),
  'co\\client::sendfile' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
    'offset=' => 'mixed',
    'length=' => 'mixed',
  ),
  'co\\client::sendto' => 
  array (
    0 => 'mixed',
    'address' => 'mixed',
    'port' => 'mixed',
    'data' => 'mixed',
  ),
  'co\\client::set' => 
  array (
    0 => 'mixed',
    'settings' => 'array<array-key, mixed>',
  ),
  'co\\client::verifypeercert' => 
  array (
    0 => 'mixed',
  ),
  'co\\context::__construct' => 
  array (
    0 => 'void',
    'input=' => 'mixed',
    'flags=' => 'mixed',
    'iterator_class=' => 'mixed',
  ),
  'co\\context::append' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'co\\context::asort' => 
  array (
    0 => 'mixed',
  ),
  'co\\context::count' => 
  array (
    0 => 'mixed',
  ),
  'co\\context::exchangearray' => 
  array (
    0 => 'mixed',
    'array' => 'mixed',
  ),
  'co\\context::getarraycopy' => 
  array (
    0 => 'mixed',
  ),
  'co\\context::getflags' => 
  array (
    0 => 'mixed',
  ),
  'co\\context::getiterator' => 
  array (
    0 => 'mixed',
  ),
  'co\\context::getiteratorclass' => 
  array (
    0 => 'mixed',
  ),
  'co\\context::ksort' => 
  array (
    0 => 'mixed',
  ),
  'co\\context::natcasesort' => 
  array (
    0 => 'mixed',
  ),
  'co\\context::natsort' => 
  array (
    0 => 'mixed',
  ),
  'co\\context::offsetexists' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'co\\context::offsetget' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'co\\context::offsetset' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
    'newval' => 'mixed',
  ),
  'co\\context::offsetunset' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'co\\context::serialize' => 
  array (
    0 => 'mixed',
  ),
  'co\\context::setflags' => 
  array (
    0 => 'mixed',
    'flags' => 'mixed',
  ),
  'co\\context::setiteratorclass' => 
  array (
    0 => 'mixed',
    'iteratorClass' => 'mixed',
  ),
  'co\\context::uasort' => 
  array (
    0 => 'mixed',
    'cmp_function' => 'mixed',
  ),
  'co\\context::uksort' => 
  array (
    0 => 'mixed',
    'cmp_function' => 'mixed',
  ),
  'co\\context::unserialize' => 
  array (
    0 => 'mixed',
    'serialized' => 'mixed',
  ),
  'co\\coroutine\\curl\\exception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'co\\coroutine\\curl\\exception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'co\\coroutine\\curl\\exception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'co\\coroutine\\curl\\exception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'co\\coroutine\\curl\\exception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'co\\coroutine\\curl\\exception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'co\\coroutine\\curl\\exception::getline' => 
  array (
    0 => 'mixed',
  ),
  'co\\coroutine\\curl\\exception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'co\\coroutine\\curl\\exception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'co\\coroutine\\curl\\exception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'co\\coroutine\\curl\\exception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'co\\defer' => 
  array (
    0 => 'mixed',
    'fn' => 'callable',
  ),
  'co\\fastcgi\\client::__construct' => 
  array (
    0 => 'void',
    'host' => 'string',
    'port=' => 'int',
    'ssl=' => 'bool',
  ),
  'co\\fastcgi\\client::call' => 
  array (
    0 => 'string',
    'url' => 'string',
    'path' => 'string',
    'data=' => 'mixed',
    'timeout=' => 'float',
  ),
  'co\\fastcgi\\client::execute' => 
  array (
    0 => 'Swoole\\FastCGI\\Response',
    'request' => 'Swoole\\FastCGI\\Request',
    'timeout=' => 'float',
  ),
  'co\\fastcgi\\client::ioexception' => 
  array (
    0 => 'void',
    'errno=' => 'int|null',
  ),
  'co\\fastcgi\\client::parseurl' => 
  array (
    0 => 'array<array-key, mixed>',
    'url' => 'string',
  ),
  'co\\fastcgi\\client\\exception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'co\\fastcgi\\client\\exception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'co\\fastcgi\\client\\exception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'co\\fastcgi\\client\\exception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'co\\fastcgi\\client\\exception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'co\\fastcgi\\client\\exception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'co\\fastcgi\\client\\exception::getline' => 
  array (
    0 => 'mixed',
  ),
  'co\\fastcgi\\client\\exception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'co\\fastcgi\\client\\exception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'co\\fastcgi\\client\\exception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'co\\fastcgi\\client\\exception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'co\\fastcgi\\proxy::__construct' => 
  array (
    0 => 'void',
    'url' => 'string',
    'documentRoot=' => 'string',
  ),
  'co\\fastcgi\\proxy::getparam' => 
  array (
    0 => 'null|string',
    'name' => 'string',
  ),
  'co\\fastcgi\\proxy::getparams' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'co\\fastcgi\\proxy::pass' => 
  array (
    0 => 'void',
    'userRequest' => 'mixed',
    'userResponse' => 'mixed',
  ),
  'co\\fastcgi\\proxy::staticfilefiltrate' => 
  array (
    0 => 'bool',
    'request' => 'Swoole\\FastCGI\\HttpRequest',
    'userResponse' => 'mixed',
  ),
  'co\\fastcgi\\proxy::translaterequest' => 
  array (
    0 => 'Swoole\\FastCGI\\HttpRequest',
    'userRequest' => 'mixed',
  ),
  'co\\fastcgi\\proxy::translateresponse' => 
  array (
    0 => 'void',
    'response' => 'Swoole\\FastCGI\\HttpResponse',
    'userResponse' => 'mixed',
  ),
  'co\\fastcgi\\proxy::withaddedparams' => 
  array (
    0 => 'self',
    'params' => 'array<array-key, mixed>',
  ),
  'co\\fastcgi\\proxy::withhttps' => 
  array (
    0 => 'self',
    'https' => 'bool',
  ),
  'co\\fastcgi\\proxy::withindex' => 
  array (
    0 => 'self',
    'index' => 'string',
  ),
  'co\\fastcgi\\proxy::withoutparam' => 
  array (
    0 => 'self',
    'name' => 'string',
  ),
  'co\\fastcgi\\proxy::withparam' => 
  array (
    0 => 'self',
    'name' => 'string',
    'value' => 'string',
  ),
  'co\\fastcgi\\proxy::withparams' => 
  array (
    0 => 'self',
    'params' => 'array<array-key, mixed>',
  ),
  'co\\fastcgi\\proxy::withstaticfilefilter' => 
  array (
    0 => 'self',
    'filter' => 'callable|null',
  ),
  'co\\fastcgi\\proxy::withtimeout' => 
  array (
    0 => 'self',
    'timeout' => 'float',
  ),
  'co\\go' => 
  array (
    0 => 'mixed',
    'fn' => 'callable',
    '...args=' => 'mixed',
  ),
  'co\\http2\\client::__construct' => 
  array (
    0 => 'void',
    'host' => 'mixed',
    'port=' => 'mixed',
    'open_ssl=' => 'mixed',
  ),
  'co\\http2\\client::__destruct' => 
  array (
    0 => 'mixed',
  ),
  'co\\http2\\client::close' => 
  array (
    0 => 'mixed',
  ),
  'co\\http2\\client::connect' => 
  array (
    0 => 'mixed',
  ),
  'co\\http2\\client::goaway' => 
  array (
    0 => 'mixed',
    'error_code=' => 'mixed',
    'debug_data=' => 'mixed',
  ),
  'co\\http2\\client::isstreamexist' => 
  array (
    0 => 'mixed',
    'stream_id' => 'mixed',
  ),
  'co\\http2\\client::ping' => 
  array (
    0 => 'mixed',
  ),
  'co\\http2\\client::read' => 
  array (
    0 => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co\\http2\\client::recv' => 
  array (
    0 => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co\\http2\\client::send' => 
  array (
    0 => 'mixed',
    'request' => 'mixed',
  ),
  'co\\http2\\client::set' => 
  array (
    0 => 'mixed',
    'settings' => 'array<array-key, mixed>',
  ),
  'co\\http2\\client::stats' => 
  array (
    0 => 'mixed',
    'key=' => 'mixed',
  ),
  'co\\http2\\client::write' => 
  array (
    0 => 'mixed',
    'stream_id' => 'mixed',
    'data' => 'mixed',
    'end_stream=' => 'mixed',
  ),
  'co\\http2\\client\\exception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'co\\http2\\client\\exception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'co\\http2\\client\\exception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'co\\http2\\client\\exception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'co\\http2\\client\\exception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'co\\http2\\client\\exception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'co\\http2\\client\\exception::getline' => 
  array (
    0 => 'mixed',
  ),
  'co\\http2\\client\\exception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'co\\http2\\client\\exception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'co\\http2\\client\\exception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'co\\http2\\client\\exception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'co\\http\\client::__construct' => 
  array (
    0 => 'void',
    'host' => 'mixed',
    'port=' => 'mixed',
    'ssl=' => 'mixed',
  ),
  'co\\http\\client::__destruct' => 
  array (
    0 => 'mixed',
  ),
  'co\\http\\client::adddata' => 
  array (
    0 => 'mixed',
    'path' => 'mixed',
    'name' => 'mixed',
    'type=' => 'mixed',
    'filename=' => 'mixed',
  ),
  'co\\http\\client::addfile' => 
  array (
    0 => 'mixed',
    'path' => 'mixed',
    'name' => 'mixed',
    'type=' => 'mixed',
    'filename=' => 'mixed',
    'offset=' => 'mixed',
    'length=' => 'mixed',
  ),
  'co\\http\\client::close' => 
  array (
    0 => 'mixed',
  ),
  'co\\http\\client::download' => 
  array (
    0 => 'mixed',
    'path' => 'mixed',
    'file' => 'mixed',
    'offset=' => 'mixed',
  ),
  'co\\http\\client::execute' => 
  array (
    0 => 'mixed',
    'path' => 'mixed',
  ),
  'co\\http\\client::get' => 
  array (
    0 => 'mixed',
    'path' => 'mixed',
  ),
  'co\\http\\client::getbody' => 
  array (
    0 => 'mixed',
  ),
  'co\\http\\client::getcookies' => 
  array (
    0 => 'mixed',
  ),
  'co\\http\\client::getdefer' => 
  array (
    0 => 'mixed',
  ),
  'co\\http\\client::getheaderout' => 
  array (
    0 => 'mixed',
  ),
  'co\\http\\client::getheaders' => 
  array (
    0 => 'mixed',
  ),
  'co\\http\\client::getpeercert' => 
  array (
    0 => 'mixed',
  ),
  'co\\http\\client::getpeername' => 
  array (
    0 => 'mixed',
  ),
  'co\\http\\client::getsockname' => 
  array (
    0 => 'mixed',
  ),
  'co\\http\\client::getstatuscode' => 
  array (
    0 => 'mixed',
  ),
  'co\\http\\client::post' => 
  array (
    0 => 'mixed',
    'path' => 'mixed',
    'data' => 'mixed',
  ),
  'co\\http\\client::push' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
    'opcode=' => 'mixed',
    'flags=' => 'mixed',
  ),
  'co\\http\\client::recv' => 
  array (
    0 => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co\\http\\client::set' => 
  array (
    0 => 'mixed',
    'settings' => 'array<array-key, mixed>',
  ),
  'co\\http\\client::setbasicauth' => 
  array (
    0 => 'mixed',
    'username' => 'mixed',
    'password' => 'mixed',
  ),
  'co\\http\\client::setcookies' => 
  array (
    0 => 'mixed',
    'cookies' => 'array<array-key, mixed>',
  ),
  'co\\http\\client::setdata' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
  ),
  'co\\http\\client::setdefer' => 
  array (
    0 => 'mixed',
    'defer=' => 'mixed',
  ),
  'co\\http\\client::setheaders' => 
  array (
    0 => 'mixed',
    'headers' => 'array<array-key, mixed>',
  ),
  'co\\http\\client::setmethod' => 
  array (
    0 => 'mixed',
    'method' => 'mixed',
  ),
  'co\\http\\client::upgrade' => 
  array (
    0 => 'mixed',
    'path' => 'mixed',
  ),
  'co\\http\\client\\exception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'co\\http\\client\\exception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'co\\http\\client\\exception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'co\\http\\client\\exception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'co\\http\\client\\exception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'co\\http\\client\\exception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'co\\http\\client\\exception::getline' => 
  array (
    0 => 'mixed',
  ),
  'co\\http\\client\\exception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'co\\http\\client\\exception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'co\\http\\client\\exception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'co\\http\\client\\exception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'co\\http\\server::__construct' => 
  array (
    0 => 'void',
    'host' => 'mixed',
    'port=' => 'mixed',
    'ssl=' => 'mixed',
    'reuse_port=' => 'mixed',
  ),
  'co\\http\\server::__destruct' => 
  array (
    0 => 'mixed',
  ),
  'co\\http\\server::handle' => 
  array (
    0 => 'mixed',
    'pattern' => 'mixed',
    'callback' => 'callable',
  ),
  'co\\http\\server::onaccept' => 
  array (
    0 => 'mixed',
  ),
  'co\\http\\server::set' => 
  array (
    0 => 'mixed',
    'settings' => 'array<array-key, mixed>',
  ),
  'co\\http\\server::shutdown' => 
  array (
    0 => 'mixed',
  ),
  'co\\http\\server::start' => 
  array (
    0 => 'mixed',
  ),
  'co\\iterator::__construct' => 
  array (
    0 => 'void',
    'array=' => 'mixed',
    'ar_flags=' => 'mixed',
  ),
  'co\\iterator::append' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'co\\iterator::asort' => 
  array (
    0 => 'mixed',
  ),
  'co\\iterator::count' => 
  array (
    0 => 'mixed',
  ),
  'co\\iterator::current' => 
  array (
    0 => 'mixed',
  ),
  'co\\iterator::getarraycopy' => 
  array (
    0 => 'mixed',
  ),
  'co\\iterator::getflags' => 
  array (
    0 => 'mixed',
  ),
  'co\\iterator::key' => 
  array (
    0 => 'mixed',
  ),
  'co\\iterator::ksort' => 
  array (
    0 => 'mixed',
  ),
  'co\\iterator::natcasesort' => 
  array (
    0 => 'mixed',
  ),
  'co\\iterator::natsort' => 
  array (
    0 => 'mixed',
  ),
  'co\\iterator::next' => 
  array (
    0 => 'mixed',
  ),
  'co\\iterator::offsetexists' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'co\\iterator::offsetget' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'co\\iterator::offsetset' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
    'newval' => 'mixed',
  ),
  'co\\iterator::offsetunset' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'co\\iterator::rewind' => 
  array (
    0 => 'mixed',
  ),
  'co\\iterator::seek' => 
  array (
    0 => 'mixed',
    'position' => 'mixed',
  ),
  'co\\iterator::serialize' => 
  array (
    0 => 'mixed',
  ),
  'co\\iterator::setflags' => 
  array (
    0 => 'mixed',
    'flags' => 'mixed',
  ),
  'co\\iterator::uasort' => 
  array (
    0 => 'mixed',
    'cmp_function' => 'mixed',
  ),
  'co\\iterator::uksort' => 
  array (
    0 => 'mixed',
    'cmp_function' => 'mixed',
  ),
  'co\\iterator::unserialize' => 
  array (
    0 => 'mixed',
    'serialized' => 'mixed',
  ),
  'co\\iterator::valid' => 
  array (
    0 => 'mixed',
  ),
  'co\\mysql::__construct' => 
  array (
    0 => 'void',
  ),
  'co\\mysql::__destruct' => 
  array (
    0 => 'mixed',
  ),
  'co\\mysql::begin' => 
  array (
    0 => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co\\mysql::close' => 
  array (
    0 => 'mixed',
  ),
  'co\\mysql::commit' => 
  array (
    0 => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co\\mysql::connect' => 
  array (
    0 => 'mixed',
    'server_config=' => 'array<array-key, mixed>',
  ),
  'co\\mysql::escape' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    'flags=' => 'mixed',
  ),
  'co\\mysql::fetch' => 
  array (
    0 => 'mixed',
  ),
  'co\\mysql::fetchall' => 
  array (
    0 => 'mixed',
  ),
  'co\\mysql::getdefer' => 
  array (
    0 => 'mixed',
  ),
  'co\\mysql::nextresult' => 
  array (
    0 => 'mixed',
  ),
  'co\\mysql::prepare' => 
  array (
    0 => 'mixed',
    'query' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co\\mysql::query' => 
  array (
    0 => 'mixed',
    'sql' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co\\mysql::recv' => 
  array (
    0 => 'mixed',
  ),
  'co\\mysql::rollback' => 
  array (
    0 => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co\\mysql::setdefer' => 
  array (
    0 => 'mixed',
    'defer=' => 'mixed',
  ),
  'co\\mysql\\exception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'co\\mysql\\exception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'co\\mysql\\exception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'co\\mysql\\exception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'co\\mysql\\exception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'co\\mysql\\exception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'co\\mysql\\exception::getline' => 
  array (
    0 => 'mixed',
  ),
  'co\\mysql\\exception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'co\\mysql\\exception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'co\\mysql\\exception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'co\\mysql\\exception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'co\\mysql\\statement::close' => 
  array (
    0 => 'mixed',
  ),
  'co\\mysql\\statement::execute' => 
  array (
    0 => 'mixed',
    'params=' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co\\mysql\\statement::fetch' => 
  array (
    0 => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co\\mysql\\statement::fetchall' => 
  array (
    0 => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co\\mysql\\statement::nextresult' => 
  array (
    0 => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co\\mysql\\statement::recv' => 
  array (
    0 => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co\\redis::__construct' => 
  array (
    0 => 'void',
    'config=' => 'mixed',
  ),
  'co\\redis::__destruct' => 
  array (
    0 => 'mixed',
  ),
  'co\\redis::append' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'co\\redis::auth' => 
  array (
    0 => 'mixed',
    'password' => 'mixed',
  ),
  'co\\redis::bgrewriteaof' => 
  array (
    0 => 'mixed',
  ),
  'co\\redis::bgsave' => 
  array (
    0 => 'mixed',
  ),
  'co\\redis::bitcount' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'co\\redis::bitop' => 
  array (
    0 => 'mixed',
    'operation' => 'mixed',
    'ret_key' => 'mixed',
    'key' => 'mixed',
    'other_keys=' => 'mixed',
  ),
  'co\\redis::blpop' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'timeout_or_key' => 'mixed',
    'extra_args=' => 'mixed',
  ),
  'co\\redis::brpop' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'timeout_or_key' => 'mixed',
    'extra_args=' => 'mixed',
  ),
  'co\\redis::brpoplpush' => 
  array (
    0 => 'mixed',
    'src' => 'mixed',
    'dst' => 'mixed',
    'timeout' => 'mixed',
  ),
  'co\\redis::bzpopmax' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'timeout_or_key' => 'mixed',
    'extra_args=' => 'mixed',
  ),
  'co\\redis::bzpopmin' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'timeout_or_key' => 'mixed',
    'extra_args=' => 'mixed',
  ),
  'co\\redis::close' => 
  array (
    0 => 'mixed',
  ),
  'co\\redis::connect' => 
  array (
    0 => 'mixed',
    'host' => 'mixed',
    'port=' => 'mixed',
    'serialize=' => 'mixed',
  ),
  'co\\redis::dbsize' => 
  array (
    0 => 'mixed',
  ),
  'co\\redis::debug' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'co\\redis::decr' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'co\\redis::decrby' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'co\\redis::del' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'other_keys=' => 'mixed',
  ),
  'co\\redis::delete' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'other_keys=' => 'mixed',
  ),
  'co\\redis::dump' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'co\\redis::eval' => 
  array (
    0 => 'mixed',
    'script' => 'mixed',
    'args=' => 'mixed',
    'num_keys=' => 'mixed',
  ),
  'co\\redis::evalsha' => 
  array (
    0 => 'mixed',
    'script_sha' => 'mixed',
    'args=' => 'mixed',
    'num_keys=' => 'mixed',
  ),
  'co\\redis::exec' => 
  array (
    0 => 'mixed',
  ),
  'co\\redis::exists' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'other_keys=' => 'mixed',
  ),
  'co\\redis::expire' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'integer' => 'mixed',
  ),
  'co\\redis::expireat' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'timestamp' => 'mixed',
  ),
  'co\\redis::flushall' => 
  array (
    0 => 'mixed',
  ),
  'co\\redis::flushdb' => 
  array (
    0 => 'mixed',
  ),
  'co\\redis::get' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'co\\redis::getauth' => 
  array (
    0 => 'mixed',
  ),
  'co\\redis::getbit' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'offset' => 'mixed',
  ),
  'co\\redis::getdbnum' => 
  array (
    0 => 'mixed',
  ),
  'co\\redis::getdefer' => 
  array (
    0 => 'mixed',
  ),
  'co\\redis::getkeys' => 
  array (
    0 => 'mixed',
    'pattern' => 'mixed',
  ),
  'co\\redis::getoptions' => 
  array (
    0 => 'mixed',
  ),
  'co\\redis::getrange' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start' => 'mixed',
    'end' => 'mixed',
  ),
  'co\\redis::getset' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'co\\redis::hdel' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
    'other_members=' => 'mixed',
  ),
  'co\\redis::hexists' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
  ),
  'co\\redis::hget' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
  ),
  'co\\redis::hgetall' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'co\\redis::hincrby' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
    'value' => 'mixed',
  ),
  'co\\redis::hincrbyfloat' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
    'value' => 'mixed',
  ),
  'co\\redis::hkeys' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'co\\redis::hlen' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'co\\redis::hmget' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'keys' => 'mixed',
  ),
  'co\\redis::hmset' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'pairs' => 'mixed',
  ),
  'co\\redis::hset' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
    'value' => 'mixed',
  ),
  'co\\redis::hsetnx' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
    'value' => 'mixed',
  ),
  'co\\redis::hvals' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'co\\redis::incr' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'co\\redis::incrby' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'co\\redis::incrbyfloat' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'co\\redis::keys' => 
  array (
    0 => 'mixed',
    'pattern' => 'mixed',
  ),
  'co\\redis::lastsave' => 
  array (
    0 => 'mixed',
  ),
  'co\\redis::lget' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'index' => 'mixed',
  ),
  'co\\redis::lgetrange' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start' => 'mixed',
    'end' => 'mixed',
  ),
  'co\\redis::lindex' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'integer' => 'mixed',
  ),
  'co\\redis::linsert' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'position' => 'mixed',
    'pivot' => 'mixed',
    'value' => 'mixed',
  ),
  'co\\redis::listtrim' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start' => 'mixed',
    'stop' => 'mixed',
  ),
  'co\\redis::llen' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'co\\redis::lpop' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'co\\redis::lpush' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'co\\redis::lpushx' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'co\\redis::lrange' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start' => 'mixed',
    'end' => 'mixed',
  ),
  'co\\redis::lrem' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
    'count' => 'mixed',
  ),
  'co\\redis::lremove' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
    'count' => 'mixed',
  ),
  'co\\redis::lset' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'index' => 'mixed',
    'value' => 'mixed',
  ),
  'co\\redis::lsize' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'co\\redis::ltrim' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start' => 'mixed',
    'stop' => 'mixed',
  ),
  'co\\redis::mget' => 
  array (
    0 => 'mixed',
    'keys' => 'mixed',
  ),
  'co\\redis::move' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'dbindex' => 'mixed',
  ),
  'co\\redis::mset' => 
  array (
    0 => 'mixed',
    'pairs' => 'mixed',
  ),
  'co\\redis::msetnx' => 
  array (
    0 => 'mixed',
    'pairs' => 'mixed',
  ),
  'co\\redis::multi' => 
  array (
    0 => 'mixed',
  ),
  'co\\redis::persist' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'co\\redis::pexpire' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'timestamp' => 'mixed',
  ),
  'co\\redis::pexpireat' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'timestamp' => 'mixed',
  ),
  'co\\redis::pfadd' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'elements' => 'mixed',
  ),
  'co\\redis::pfcount' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'co\\redis::pfmerge' => 
  array (
    0 => 'mixed',
    'dstkey' => 'mixed',
    'keys' => 'mixed',
  ),
  'co\\redis::ping' => 
  array (
    0 => 'mixed',
  ),
  'co\\redis::psetex' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'expire' => 'mixed',
    'value' => 'mixed',
  ),
  'co\\redis::psubscribe' => 
  array (
    0 => 'mixed',
    'patterns' => 'mixed',
  ),
  'co\\redis::pttl' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'co\\redis::publish' => 
  array (
    0 => 'mixed',
    'channel' => 'mixed',
    'message' => 'mixed',
  ),
  'co\\redis::punsubscribe' => 
  array (
    0 => 'mixed',
    'patterns' => 'mixed',
  ),
  'co\\redis::randomkey' => 
  array (
    0 => 'mixed',
  ),
  'co\\redis::recv' => 
  array (
    0 => 'mixed',
  ),
  'co\\redis::rename' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'newkey' => 'mixed',
  ),
  'co\\redis::renamekey' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'newkey' => 'mixed',
  ),
  'co\\redis::renamenx' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'newkey' => 'mixed',
  ),
  'co\\redis::request' => 
  array (
    0 => 'mixed',
    'params' => 'array<array-key, mixed>',
  ),
  'co\\redis::restore' => 
  array (
    0 => 'mixed',
    'ttl' => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'co\\redis::role' => 
  array (
    0 => 'mixed',
  ),
  'co\\redis::rpop' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'co\\redis::rpoplpush' => 
  array (
    0 => 'mixed',
    'src' => 'mixed',
    'dst' => 'mixed',
  ),
  'co\\redis::rpush' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'co\\redis::rpushx' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'co\\redis::sadd' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'co\\redis::save' => 
  array (
    0 => 'mixed',
  ),
  'co\\redis::scard' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'co\\redis::scontains' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'co\\redis::script' => 
  array (
    0 => 'mixed',
    'cmd' => 'mixed',
    'args=' => 'mixed',
  ),
  'co\\redis::sdiff' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'other_keys=' => 'mixed',
  ),
  'co\\redis::sdiffstore' => 
  array (
    0 => 'mixed',
    'dst' => 'mixed',
    'key' => 'mixed',
    'other_keys=' => 'mixed',
  ),
  'co\\redis::select' => 
  array (
    0 => 'mixed',
    'dbindex' => 'mixed',
  ),
  'co\\redis::set' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
    'timeout=' => 'mixed',
    'opt=' => 'mixed',
  ),
  'co\\redis::setbit' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'offset' => 'mixed',
    'value' => 'mixed',
  ),
  'co\\redis::setdefer' => 
  array (
    0 => 'mixed',
    'defer' => 'mixed',
  ),
  'co\\redis::setex' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'expire' => 'mixed',
    'value' => 'mixed',
  ),
  'co\\redis::setnx' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'co\\redis::setoptions' => 
  array (
    0 => 'mixed',
    'options' => 'mixed',
  ),
  'co\\redis::setrange' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'offset' => 'mixed',
    'value' => 'mixed',
  ),
  'co\\redis::settimeout' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'timeout' => 'mixed',
  ),
  'co\\redis::sgetmembers' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'co\\redis::sinter' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'other_keys=' => 'mixed',
  ),
  'co\\redis::sinterstore' => 
  array (
    0 => 'mixed',
    'dst' => 'mixed',
    'key' => 'mixed',
    'other_keys=' => 'mixed',
  ),
  'co\\redis::sismember' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'co\\redis::smembers' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'co\\redis::smove' => 
  array (
    0 => 'mixed',
    'src' => 'mixed',
    'dst' => 'mixed',
    'value' => 'mixed',
  ),
  'co\\redis::spop' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'co\\redis::srandmember' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'count=' => 'mixed',
  ),
  'co\\redis::srem' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'co\\redis::sremove' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'co\\redis::ssize' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'co\\redis::strlen' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'co\\redis::subscribe' => 
  array (
    0 => 'mixed',
    'channels' => 'mixed',
  ),
  'co\\redis::sunion' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'other_keys=' => 'mixed',
  ),
  'co\\redis::sunionstore' => 
  array (
    0 => 'mixed',
    'dst' => 'mixed',
    'key' => 'mixed',
    'other_keys=' => 'mixed',
  ),
  'co\\redis::time' => 
  array (
    0 => 'mixed',
  ),
  'co\\redis::ttl' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'co\\redis::type' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'co\\redis::unsubscribe' => 
  array (
    0 => 'mixed',
    'channels' => 'mixed',
  ),
  'co\\redis::unwatch' => 
  array (
    0 => 'mixed',
  ),
  'co\\redis::watch' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'other_keys=' => 'mixed',
  ),
  'co\\redis::xack' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'group_name' => 'mixed',
    'id' => 'mixed',
  ),
  'co\\redis::xadd' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'id' => 'mixed',
    'pairs' => 'mixed',
    'options=' => 'mixed',
  ),
  'co\\redis::xautoclaim' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'group_name' => 'mixed',
    'consumer_name' => 'mixed',
    'min_idle_time' => 'mixed',
    'start' => 'mixed',
    'options=' => 'mixed',
  ),
  'co\\redis::xclaim' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'group_name' => 'mixed',
    'consumer_name' => 'mixed',
    'min_idle_time' => 'mixed',
    'id' => 'mixed',
    'options=' => 'mixed',
  ),
  'co\\redis::xdel' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'id' => 'mixed',
  ),
  'co\\redis::xgroupcreate' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'group_name' => 'mixed',
    'id' => 'mixed',
    'mkstream=' => 'mixed',
  ),
  'co\\redis::xgroupcreateconsumer' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'group_name' => 'mixed',
    'consumer_name' => 'mixed',
  ),
  'co\\redis::xgroupdelconsumer' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'group_name' => 'mixed',
    'consumer_name' => 'mixed',
  ),
  'co\\redis::xgroupdestroy' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'group_name' => 'mixed',
  ),
  'co\\redis::xgroupsetid' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'group_name' => 'mixed',
    'id' => 'mixed',
  ),
  'co\\redis::xinfoconsumers' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'group_name' => 'mixed',
  ),
  'co\\redis::xinfogroups' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'co\\redis::xinfostream' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'co\\redis::xlen' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'co\\redis::xpending' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'group_name' => 'mixed',
    'options=' => 'mixed',
  ),
  'co\\redis::xrange' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start' => 'mixed',
    'end' => 'mixed',
    'count=' => 'mixed',
  ),
  'co\\redis::xread' => 
  array (
    0 => 'mixed',
    'streams' => 'mixed',
    'options=' => 'mixed',
  ),
  'co\\redis::xreadgroup' => 
  array (
    0 => 'mixed',
    'group_name' => 'mixed',
    'consumer_name' => 'mixed',
    'streams' => 'mixed',
    'options=' => 'mixed',
  ),
  'co\\redis::xrevrange' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start' => 'mixed',
    'end' => 'mixed',
    'count=' => 'mixed',
  ),
  'co\\redis::xtrim' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'options=' => 'mixed',
  ),
  'co\\redis::zadd' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'score' => 'mixed',
    'value' => 'mixed',
  ),
  'co\\redis::zcard' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'co\\redis::zcount' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'min' => 'mixed',
    'max' => 'mixed',
  ),
  'co\\redis::zdelete' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
    'other_members=' => 'mixed',
  ),
  'co\\redis::zdeleterangebyrank' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start' => 'mixed',
    'end' => 'mixed',
  ),
  'co\\redis::zdeleterangebyscore' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'min' => 'mixed',
    'max' => 'mixed',
  ),
  'co\\redis::zincrby' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
    'member' => 'mixed',
  ),
  'co\\redis::zinter' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'keys' => 'mixed',
    'weights=' => 'mixed',
    'aggregate=' => 'mixed',
  ),
  'co\\redis::zinterstore' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'keys' => 'mixed',
    'weights=' => 'mixed',
    'aggregate=' => 'mixed',
  ),
  'co\\redis::zpopmax' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'count' => 'mixed',
  ),
  'co\\redis::zpopmin' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'count' => 'mixed',
  ),
  'co\\redis::zrange' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start' => 'mixed',
    'end' => 'mixed',
    'scores=' => 'mixed',
  ),
  'co\\redis::zrangebylex' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'min' => 'mixed',
    'max' => 'mixed',
    'offset=' => 'mixed',
    'limit=' => 'mixed',
  ),
  'co\\redis::zrangebyscore' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start' => 'mixed',
    'end' => 'mixed',
    'options=' => 'mixed',
  ),
  'co\\redis::zrank' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
  ),
  'co\\redis::zrem' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
    'other_members=' => 'mixed',
  ),
  'co\\redis::zremove' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
    'other_members=' => 'mixed',
  ),
  'co\\redis::zremrangebyrank' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'min' => 'mixed',
    'max' => 'mixed',
  ),
  'co\\redis::zremrangebyscore' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'min' => 'mixed',
    'max' => 'mixed',
  ),
  'co\\redis::zrevrange' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start' => 'mixed',
    'end' => 'mixed',
    'scores=' => 'mixed',
  ),
  'co\\redis::zrevrangebylex' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'min' => 'mixed',
    'max' => 'mixed',
    'offset=' => 'mixed',
    'limit=' => 'mixed',
  ),
  'co\\redis::zrevrangebyscore' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start' => 'mixed',
    'end' => 'mixed',
    'options=' => 'mixed',
  ),
  'co\\redis::zrevrank' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
  ),
  'co\\redis::zscore' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
  ),
  'co\\redis::zsize' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'co\\redis::zunion' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'keys' => 'mixed',
    'weights=' => 'mixed',
    'aggregate=' => 'mixed',
  ),
  'co\\redis::zunionstore' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'keys' => 'mixed',
    'weights=' => 'mixed',
    'aggregate=' => 'mixed',
  ),
  'co\\run' => 
  array (
    0 => 'mixed',
    'fn' => 'callable',
    '...args=' => 'mixed',
  ),
  'co\\scheduler::add' => 
  array (
    0 => 'mixed',
    'func' => 'callable',
    '...params=' => 'mixed',
  ),
  'co\\scheduler::getoptions' => 
  array (
    0 => 'mixed',
  ),
  'co\\scheduler::parallel' => 
  array (
    0 => 'mixed',
    'n' => 'mixed',
    'func=' => 'callable',
    '...params=' => 'mixed',
  ),
  'co\\scheduler::set' => 
  array (
    0 => 'mixed',
    'settings' => 'array<array-key, mixed>',
  ),
  'co\\scheduler::start' => 
  array (
    0 => 'mixed',
  ),
  'co\\server::__construct' => 
  array (
    0 => 'void',
    'host' => 'string',
    'port=' => 'int',
    'ssl=' => 'bool',
    'reuse_port=' => 'bool',
  ),
  'co\\server::handle' => 
  array (
    0 => 'void',
    'fn' => 'callable',
  ),
  'co\\server::set' => 
  array (
    0 => 'void',
    'setting' => 'array<array-key, mixed>',
  ),
  'co\\server::shutdown' => 
  array (
    0 => 'bool',
  ),
  'co\\server::start' => 
  array (
    0 => 'bool',
  ),
  'co\\server\\connection::__construct' => 
  array (
    0 => 'void',
    'conn' => 'Swoole\\Coroutine\\Socket',
  ),
  'co\\server\\connection::close' => 
  array (
    0 => 'bool',
  ),
  'co\\server\\connection::exportsocket' => 
  array (
    0 => 'Swoole\\Coroutine\\Socket',
  ),
  'co\\server\\connection::recv' => 
  array (
    0 => 'mixed',
    'timeout=' => 'float',
  ),
  'co\\server\\connection::send' => 
  array (
    0 => 'mixed',
    'data' => 'string',
  ),
  'co\\socket::__construct' => 
  array (
    0 => 'void',
    'domain' => 'mixed',
    'type' => 'mixed',
    'protocol=' => 'mixed',
  ),
  'co\\socket::accept' => 
  array (
    0 => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co\\socket::bind' => 
  array (
    0 => 'mixed',
    'address' => 'mixed',
    'port=' => 'mixed',
  ),
  'co\\socket::cancel' => 
  array (
    0 => 'mixed',
    'event=' => 'mixed',
  ),
  'co\\socket::checkliveness' => 
  array (
    0 => 'mixed',
  ),
  'co\\socket::close' => 
  array (
    0 => 'mixed',
  ),
  'co\\socket::connect' => 
  array (
    0 => 'mixed',
    'host' => 'mixed',
    'port=' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co\\socket::getoption' => 
  array (
    0 => 'mixed',
    'level' => 'mixed',
    'opt_name' => 'mixed',
  ),
  'co\\socket::getpeername' => 
  array (
    0 => 'mixed',
  ),
  'co\\socket::getsockname' => 
  array (
    0 => 'mixed',
  ),
  'co\\socket::isclosed' => 
  array (
    0 => 'mixed',
  ),
  'co\\socket::listen' => 
  array (
    0 => 'mixed',
    'backlog=' => 'mixed',
  ),
  'co\\socket::peek' => 
  array (
    0 => 'mixed',
    'length=' => 'mixed',
  ),
  'co\\socket::readvector' => 
  array (
    0 => 'mixed',
    'io_vector' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co\\socket::readvectorall' => 
  array (
    0 => 'mixed',
    'io_vector' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co\\socket::recv' => 
  array (
    0 => 'mixed',
    'length=' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co\\socket::recvall' => 
  array (
    0 => 'mixed',
    'length=' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co\\socket::recvfrom' => 
  array (
    0 => 'mixed',
    '&peername' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co\\socket::recvline' => 
  array (
    0 => 'mixed',
    'length=' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co\\socket::recvpacket' => 
  array (
    0 => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co\\socket::recvwithbuffer' => 
  array (
    0 => 'mixed',
    'length=' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co\\socket::send' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co\\socket::sendall' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co\\socket::sendfile' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
    'offset=' => 'mixed',
    'length=' => 'mixed',
  ),
  'co\\socket::sendto' => 
  array (
    0 => 'mixed',
    'addr' => 'mixed',
    'port' => 'mixed',
    'data' => 'mixed',
  ),
  'co\\socket::setoption' => 
  array (
    0 => 'mixed',
    'level' => 'mixed',
    'opt_name' => 'mixed',
    'opt_value' => 'mixed',
  ),
  'co\\socket::setprotocol' => 
  array (
    0 => 'mixed',
    'settings' => 'array<array-key, mixed>',
  ),
  'co\\socket::shutdown' => 
  array (
    0 => 'mixed',
    'how=' => 'mixed',
  ),
  'co\\socket::sslhandshake' => 
  array (
    0 => 'mixed',
  ),
  'co\\socket::writevector' => 
  array (
    0 => 'mixed',
    'io_vector' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co\\socket::writevectorall' => 
  array (
    0 => 'mixed',
    'io_vector' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co\\socket\\exception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'co\\socket\\exception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'co\\socket\\exception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'co\\socket\\exception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'co\\socket\\exception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'co\\socket\\exception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'co\\socket\\exception::getline' => 
  array (
    0 => 'mixed',
  ),
  'co\\socket\\exception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'co\\socket\\exception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'co\\socket\\exception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'co\\socket\\exception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'co\\system::dnslookup' => 
  array (
    0 => 'mixed',
    'domain_name' => 'mixed',
    'timeout=' => 'mixed',
    'type=' => 'mixed',
  ),
  'co\\system::exec' => 
  array (
    0 => 'mixed',
    'command' => 'mixed',
    'get_error_stream=' => 'mixed',
  ),
  'co\\system::fgets' => 
  array (
    0 => 'mixed',
    'handle' => 'mixed',
  ),
  'co\\system::fread' => 
  array (
    0 => 'mixed',
    'handle' => 'mixed',
    'length=' => 'mixed',
  ),
  'co\\system::fwrite' => 
  array (
    0 => 'mixed',
    'handle' => 'mixed',
    'string' => 'mixed',
    'length=' => 'mixed',
  ),
  'co\\system::getaddrinfo' => 
  array (
    0 => 'mixed',
    'hostname' => 'mixed',
    'family=' => 'mixed',
    'socktype=' => 'mixed',
    'protocol=' => 'mixed',
    'service=' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co\\system::gethostbyname' => 
  array (
    0 => 'mixed',
    'domain_name' => 'mixed',
    'family=' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co\\system::readfile' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'co\\system::sleep' => 
  array (
    0 => 'mixed',
    'seconds' => 'mixed',
  ),
  'co\\system::statvfs' => 
  array (
    0 => 'mixed',
    'path' => 'mixed',
  ),
  'co\\system::wait' => 
  array (
    0 => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co\\system::waitevent' => 
  array (
    0 => 'mixed',
    'fd' => 'mixed',
    'events=' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co\\system::waitpid' => 
  array (
    0 => 'mixed',
    'pid' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co\\system::waitsignal' => 
  array (
    0 => 'mixed',
    'signo' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co\\system::writefile' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
    'data' => 'mixed',
    'flags=' => 'mixed',
  ),
  'co\\waitgroup::__construct' => 
  array (
    0 => 'void',
    'delta=' => 'int',
  ),
  'co\\waitgroup::add' => 
  array (
    0 => 'void',
    'delta=' => 'int',
  ),
  'co\\waitgroup::count' => 
  array (
    0 => 'int',
  ),
  'co\\waitgroup::done' => 
  array (
    0 => 'void',
  ),
  'co\\waitgroup::wait' => 
  array (
    0 => 'bool',
    'timeout=' => 'float',
  ),
  'collator::__construct' => 
  array (
    0 => 'void',
    'arg1' => 'mixed',
  ),
  'collator::asort' => 
  array (
    0 => 'mixed',
    '&arr' => 'array<array-key, mixed>',
    'flags=' => 'mixed',
  ),
  'collator::compare' => 
  array (
    0 => 'mixed',
    'arg1' => 'mixed',
    'arg2' => 'mixed',
  ),
  'collator::create' => 
  array (
    0 => 'mixed',
    'arg1' => 'mixed',
  ),
  'collator::getattribute' => 
  array (
    0 => 'mixed',
    'arg1' => 'mixed',
  ),
  'collator::geterrorcode' => 
  array (
    0 => 'mixed',
  ),
  'collator::geterrormessage' => 
  array (
    0 => 'mixed',
  ),
  'collator::getlocale' => 
  array (
    0 => 'mixed',
    'arg1' => 'mixed',
  ),
  'collator::getsortkey' => 
  array (
    0 => 'mixed',
    'arg1' => 'mixed',
  ),
  'collator::getstrength' => 
  array (
    0 => 'mixed',
  ),
  'collator::setattribute' => 
  array (
    0 => 'mixed',
    'arg1' => 'mixed',
    'arg2' => 'mixed',
  ),
  'collator::setstrength' => 
  array (
    0 => 'mixed',
    'arg1' => 'mixed',
  ),
  'collator::sort' => 
  array (
    0 => 'mixed',
    '&arr' => 'array<array-key, mixed>',
    'flags=' => 'mixed',
  ),
  'collator::sortwithsortkeys' => 
  array (
    0 => 'mixed',
    '&arr' => 'array<array-key, mixed>',
  ),
  'collator_asort' => 
  array (
    0 => 'mixed',
    'object' => 'Collator',
    '&arr' => 'array<array-key, mixed>',
    'sort_flags=' => 'mixed',
  ),
  'collator_compare' => 
  array (
    0 => 'mixed',
    'object' => 'Collator',
    'arg1' => 'mixed',
    'arg2' => 'mixed',
  ),
  'collator_create' => 
  array (
    0 => 'mixed',
    'arg1' => 'mixed',
  ),
  'collator_get_attribute' => 
  array (
    0 => 'mixed',
    'object' => 'Collator',
    'arg1' => 'mixed',
  ),
  'collator_get_error_code' => 
  array (
    0 => 'mixed',
    'object' => 'Collator',
  ),
  'collator_get_error_message' => 
  array (
    0 => 'mixed',
    'object' => 'Collator',
  ),
  'collator_get_locale' => 
  array (
    0 => 'mixed',
    'object' => 'Collator',
    'arg1' => 'mixed',
  ),
  'collator_get_sort_key' => 
  array (
    0 => 'mixed',
    'object' => 'Collator',
    'arg1' => 'mixed',
  ),
  'collator_get_strength' => 
  array (
    0 => 'mixed',
    'object' => 'Collator',
  ),
  'collator_set_attribute' => 
  array (
    0 => 'mixed',
    'object' => 'Collator',
    'arg1' => 'mixed',
    'arg2' => 'mixed',
  ),
  'collator_set_strength' => 
  array (
    0 => 'mixed',
    'object' => 'Collator',
    'arg1' => 'mixed',
  ),
  'collator_sort' => 
  array (
    0 => 'mixed',
    'object' => 'Collator',
    '&arr' => 'array<array-key, mixed>',
    'sort_flags=' => 'mixed',
  ),
  'collator_sort_with_sort_keys' => 
  array (
    0 => 'mixed',
    'coll' => 'Collator',
    '&arr' => 'array<array-key, mixed>',
  ),
  'compact' => 
  array (
    0 => 'mixed',
    '...var_names' => 'mixed',
  ),
  'compileerror::__clone' => 
  array (
    0 => 'mixed',
  ),
  'compileerror::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'compileerror::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'compileerror::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'compileerror::getcode' => 
  array (
    0 => 'mixed',
  ),
  'compileerror::getfile' => 
  array (
    0 => 'mixed',
  ),
  'compileerror::getline' => 
  array (
    0 => 'mixed',
  ),
  'compileerror::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'compileerror::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'compileerror::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'compileerror::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'connection_aborted' => 
  array (
    0 => 'mixed',
  ),
  'connection_status' => 
  array (
    0 => 'mixed',
  ),
  'constant' => 
  array (
    0 => 'mixed',
    'const_name' => 'mixed',
  ),
  'convert_cyr_string' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
    'from' => 'mixed',
    'to' => 'mixed',
  ),
  'convert_uudecode' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
  ),
  'convert_uuencode' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
  ),
  'copy' => 
  array (
    0 => 'mixed',
    'source_file' => 'mixed',
    'destination_file' => 'mixed',
    'context=' => 'mixed',
  ),
  'cos' => 
  array (
    0 => 'mixed',
    'number' => 'mixed',
  ),
  'cosh' => 
  array (
    0 => 'mixed',
    'number' => 'mixed',
  ),
  'couchbase\\analyticsexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\analyticsexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\analyticsexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\analyticsexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\analyticsexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\analyticsexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\analyticsexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\analyticsexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\analyticsexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\analyticsexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\analyticsexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\analyticsexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\analyticsexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\analyticsindexmanager::connectlink' => 
  array (
    0 => 'mixed',
    'options=' => 'Couchbase\\ConnectAnalyticsLinkOptions|null',
  ),
  'couchbase\\analyticsindexmanager::createdataset' => 
  array (
    0 => 'mixed',
    'datasetName' => 'string',
    'bucketName' => 'string',
    'options=' => 'Couchbase\\CreateAnalyticsDatasetOptions|null',
  ),
  'couchbase\\analyticsindexmanager::createdataverse' => 
  array (
    0 => 'mixed',
    'dataverseName' => 'string',
    'options=' => 'Couchbase\\CreateAnalyticsDataverseOptions|null',
  ),
  'couchbase\\analyticsindexmanager::createindex' => 
  array (
    0 => 'mixed',
    'datasetName' => 'string',
    'indexName' => 'string',
    'fields' => 'array<array-key, mixed>',
    'options=' => 'Couchbase\\CreateAnalyticsIndexOptions|null',
  ),
  'couchbase\\analyticsindexmanager::createlink' => 
  array (
    0 => 'mixed',
    'link' => 'Couchbase\\AnalyticsLink',
    'options=' => 'Couchbase\\CreateAnalyticsLinkOptions|null',
  ),
  'couchbase\\analyticsindexmanager::disconnectlink' => 
  array (
    0 => 'mixed',
    'options=' => 'Couchbase\\DisconnectAnalyticsLinkOptions|null',
  ),
  'couchbase\\analyticsindexmanager::dropdataset' => 
  array (
    0 => 'mixed',
    'datasetName' => 'string',
    'options=' => 'Couchbase\\DropAnalyticsDatasetOptions|null',
  ),
  'couchbase\\analyticsindexmanager::dropdataverse' => 
  array (
    0 => 'mixed',
    'dataverseName' => 'string',
    'options=' => 'Couchbase\\DropAnalyticsDataverseOptions|null',
  ),
  'couchbase\\analyticsindexmanager::dropindex' => 
  array (
    0 => 'mixed',
    'datasetName' => 'string',
    'indexName' => 'string',
    'options=' => 'Couchbase\\DropAnalyticsIndexOptions|null',
  ),
  'couchbase\\analyticsindexmanager::droplink' => 
  array (
    0 => 'mixed',
    'linkName' => 'string',
    'dataverseName' => 'string',
    'options=' => 'Couchbase\\DropAnalyticsLinkOptions|null',
  ),
  'couchbase\\analyticsindexmanager::getalldatasets' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\analyticsindexmanager::getallindexes' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\analyticsindexmanager::getlinks' => 
  array (
    0 => 'mixed',
    'options=' => 'Couchbase\\GetAnalyticsLinksOptions|null',
  ),
  'couchbase\\analyticsindexmanager::getpendingmutations' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\analyticsindexmanager::replacelink' => 
  array (
    0 => 'mixed',
    'link' => 'Couchbase\\AnalyticsLink',
    'options=' => 'Couchbase\\ReplaceAnalyticsLinkOptions|null',
  ),
  'couchbase\\analyticsoptions::clientcontextid' => 
  array (
    0 => 'Couchbase\\AnalyticsOptions',
    'value' => 'string',
  ),
  'couchbase\\analyticsoptions::namedparameters' => 
  array (
    0 => 'Couchbase\\AnalyticsOptions',
    'pairs' => 'array<array-key, mixed>',
  ),
  'couchbase\\analyticsoptions::positionalparameters' => 
  array (
    0 => 'Couchbase\\AnalyticsOptions',
    'args' => 'array<array-key, mixed>',
  ),
  'couchbase\\analyticsoptions::priority' => 
  array (
    0 => 'Couchbase\\AnalyticsOptions',
    'urgent' => 'bool',
  ),
  'couchbase\\analyticsoptions::raw' => 
  array (
    0 => 'Couchbase\\AnalyticsOptions',
    'key' => 'string',
    'value' => 'mixed',
  ),
  'couchbase\\analyticsoptions::readonly' => 
  array (
    0 => 'Couchbase\\AnalyticsOptions',
    'arg' => 'bool',
  ),
  'couchbase\\analyticsoptions::scanconsistency' => 
  array (
    0 => 'Couchbase\\AnalyticsOptions',
    'arg' => 'string',
  ),
  'couchbase\\analyticsoptions::timeout' => 
  array (
    0 => 'Couchbase\\AnalyticsOptions',
    'arg' => 'int',
  ),
  'couchbase\\appendoptions::durabilitylevel' => 
  array (
    0 => 'Couchbase\\AppendOptions',
    'arg' => 'int',
  ),
  'couchbase\\appendoptions::timeout' => 
  array (
    0 => 'Couchbase\\AppendOptions',
    'arg' => 'int',
  ),
  'couchbase\\authenticationexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\authenticationexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\authenticationexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\authenticationexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\authenticationexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\authenticationexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\authenticationexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\authenticationexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\authenticationexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\authenticationexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\authenticationexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\authenticationexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\authenticationexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\azureblobexternalanalyticslink::accountkey' => 
  array (
    0 => 'Couchbase\\AzureBlobExternalAnalyticsLink',
    'accountKey' => 'string',
  ),
  'couchbase\\azureblobexternalanalyticslink::accountname' => 
  array (
    0 => 'Couchbase\\AzureBlobExternalAnalyticsLink',
    'accountName' => 'string',
  ),
  'couchbase\\azureblobexternalanalyticslink::blobendpoint' => 
  array (
    0 => 'Couchbase\\AzureBlobExternalAnalyticsLink',
    'blobEndpoint' => 'string',
  ),
  'couchbase\\azureblobexternalanalyticslink::connectionstring' => 
  array (
    0 => 'Couchbase\\AzureBlobExternalAnalyticsLink',
    'connectionString' => 'string',
  ),
  'couchbase\\azureblobexternalanalyticslink::dataverse' => 
  array (
    0 => 'Couchbase\\AzureBlobExternalAnalyticsLink',
    'dataverse' => 'string',
  ),
  'couchbase\\azureblobexternalanalyticslink::endpointsuffix' => 
  array (
    0 => 'Couchbase\\AzureBlobExternalAnalyticsLink',
    'suffix' => 'string',
  ),
  'couchbase\\azureblobexternalanalyticslink::name' => 
  array (
    0 => 'Couchbase\\AzureBlobExternalAnalyticsLink',
    'name' => 'string',
  ),
  'couchbase\\azureblobexternalanalyticslink::sharedaccesssignature' => 
  array (
    0 => 'Couchbase\\AzureBlobExternalAnalyticsLink',
    'signature' => 'string',
  ),
  'couchbase\\badinputexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\badinputexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\badinputexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\badinputexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\badinputexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\badinputexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\badinputexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\badinputexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\badinputexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\badinputexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\badinputexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\badinputexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\badinputexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\baseexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\baseexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\baseexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\baseexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\baseexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\baseexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\baseexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\baseexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\baseexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\baseexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\baseexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\baseexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\baseexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\binarycollection::append' => 
  array (
    0 => 'Couchbase\\MutationResult',
    'id' => 'string',
    'value' => 'string',
    'options=' => 'Couchbase\\AppendOptions|null',
  ),
  'couchbase\\binarycollection::decrement' => 
  array (
    0 => 'Couchbase\\CounterResult',
    'id' => 'string',
    'options=' => 'Couchbase\\DecrementOptions|null',
  ),
  'couchbase\\binarycollection::increment' => 
  array (
    0 => 'Couchbase\\CounterResult',
    'id' => 'string',
    'options=' => 'Couchbase\\IncrementOptions|null',
  ),
  'couchbase\\binarycollection::name' => 
  array (
    0 => 'string',
  ),
  'couchbase\\binarycollection::prepend' => 
  array (
    0 => 'Couchbase\\MutationResult',
    'id' => 'string',
    'value' => 'string',
    'options=' => 'Couchbase\\PrependOptions|null',
  ),
  'couchbase\\bindingsexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\bindingsexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\bindingsexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\bindingsexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\bindingsexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\bindingsexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\bindingsexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\bindingsexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\bindingsexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\bindingsexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\bindingsexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\bindingsexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\bindingsexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\booleanfieldsearchquery::__construct' => 
  array (
    0 => 'void',
    'arg' => 'bool',
  ),
  'couchbase\\booleanfieldsearchquery::boost' => 
  array (
    0 => 'Couchbase\\BooleanFieldSearchQuery',
    'boost' => 'float',
  ),
  'couchbase\\booleanfieldsearchquery::field' => 
  array (
    0 => 'Couchbase\\BooleanFieldSearchQuery',
    'field' => 'string',
  ),
  'couchbase\\booleanfieldsearchquery::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\booleansearchquery::__construct' => 
  array (
    0 => 'void',
  ),
  'couchbase\\booleansearchquery::boost' => 
  array (
    0 => 'Couchbase\\BooleanSearchQuery',
    'boost' => 'mixed',
  ),
  'couchbase\\booleansearchquery::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\booleansearchquery::must' => 
  array (
    0 => 'Couchbase\\BooleanSearchQuery',
    'query' => 'Couchbase\\ConjunctionSearchQuery',
  ),
  'couchbase\\booleansearchquery::mustnot' => 
  array (
    0 => 'Couchbase\\BooleanSearchQuery',
    'query' => 'Couchbase\\DisjunctionSearchQuery',
  ),
  'couchbase\\booleansearchquery::should' => 
  array (
    0 => 'Couchbase\\BooleanSearchQuery',
    'query' => 'Couchbase\\DisjunctionSearchQuery',
  ),
  'couchbase\\bucket::collections' => 
  array (
    0 => 'Couchbase\\CollectionManager',
  ),
  'couchbase\\bucket::defaultcollection' => 
  array (
    0 => 'Couchbase\\Collection',
  ),
  'couchbase\\bucket::defaultscope' => 
  array (
    0 => 'Couchbase\\Scope',
  ),
  'couchbase\\bucket::diagnostics' => 
  array (
    0 => 'mixed',
    'reportId' => 'mixed',
  ),
  'couchbase\\bucket::name' => 
  array (
    0 => 'string',
  ),
  'couchbase\\bucket::ping' => 
  array (
    0 => 'mixed',
    'services' => 'mixed',
    'reportId' => 'mixed',
  ),
  'couchbase\\bucket::scope' => 
  array (
    0 => 'Couchbase\\Scope',
    'name' => 'string',
  ),
  'couchbase\\bucket::settranscoder' => 
  array (
    0 => 'mixed',
    'encoder' => 'callable',
    'decoder' => 'callable',
  ),
  'couchbase\\bucket::viewindexes' => 
  array (
    0 => 'Couchbase\\ViewIndexManager',
  ),
  'couchbase\\bucket::viewquery' => 
  array (
    0 => 'Couchbase\\ViewResult',
    'designDoc' => 'string',
    'viewName' => 'string',
    'options=' => 'Couchbase\\ViewOptions|null',
  ),
  'couchbase\\bucketmanager::createbucket' => 
  array (
    0 => 'mixed',
    'settings' => 'Couchbase\\BucketSettings',
  ),
  'couchbase\\bucketmanager::flush' => 
  array (
    0 => 'mixed',
    'name' => 'string',
  ),
  'couchbase\\bucketmanager::getallbuckets' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\bucketmanager::getbucket' => 
  array (
    0 => 'Couchbase\\BucketSettings',
    'name' => 'string',
  ),
  'couchbase\\bucketmanager::removebucket' => 
  array (
    0 => 'mixed',
    'name' => 'string',
  ),
  'couchbase\\bucketmissingexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\bucketmissingexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\bucketmissingexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\bucketmissingexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\bucketmissingexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\bucketmissingexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\bucketmissingexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\bucketmissingexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\bucketmissingexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\bucketmissingexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\bucketmissingexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\bucketmissingexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\bucketmissingexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\bucketsettings::buckettype' => 
  array (
    0 => 'string',
  ),
  'couchbase\\bucketsettings::compressionmode' => 
  array (
    0 => 'string',
  ),
  'couchbase\\bucketsettings::enableflush' => 
  array (
    0 => 'Couchbase\\BucketSettings',
    'enable' => 'bool',
  ),
  'couchbase\\bucketsettings::enablereplicaindexes' => 
  array (
    0 => 'Couchbase\\BucketSettings',
    'enable' => 'bool',
  ),
  'couchbase\\bucketsettings::evictionpolicy' => 
  array (
    0 => 'string',
  ),
  'couchbase\\bucketsettings::flushenabled' => 
  array (
    0 => 'bool',
  ),
  'couchbase\\bucketsettings::maxttl' => 
  array (
    0 => 'int',
  ),
  'couchbase\\bucketsettings::minimaldurabilitylevel' => 
  array (
    0 => 'int',
  ),
  'couchbase\\bucketsettings::name' => 
  array (
    0 => 'string',
  ),
  'couchbase\\bucketsettings::numreplicas' => 
  array (
    0 => 'int',
  ),
  'couchbase\\bucketsettings::ramquotamb' => 
  array (
    0 => 'int',
  ),
  'couchbase\\bucketsettings::replicaindexes' => 
  array (
    0 => 'bool',
  ),
  'couchbase\\bucketsettings::setbuckettype' => 
  array (
    0 => 'Couchbase\\BucketSettings',
    'type' => 'string',
  ),
  'couchbase\\bucketsettings::setcompressionmode' => 
  array (
    0 => 'Couchbase\\BucketSettings',
    'mode' => 'string',
  ),
  'couchbase\\bucketsettings::setevictionpolicy' => 
  array (
    0 => 'Couchbase\\BucketSettings',
    'policy' => 'string',
  ),
  'couchbase\\bucketsettings::setmaxttl' => 
  array (
    0 => 'Couchbase\\BucketSettings',
    'ttlSeconds' => 'int',
  ),
  'couchbase\\bucketsettings::setminimaldurabilitylevel' => 
  array (
    0 => 'Couchbase\\BucketSettings',
    'durabilityLevel' => 'int',
  ),
  'couchbase\\bucketsettings::setname' => 
  array (
    0 => 'Couchbase\\BucketSettings',
    'name' => 'string',
  ),
  'couchbase\\bucketsettings::setnumreplicas' => 
  array (
    0 => 'Couchbase\\BucketSettings',
    'numReplicas' => 'int',
  ),
  'couchbase\\bucketsettings::setramquotamb' => 
  array (
    0 => 'Couchbase\\BucketSettings',
    'sizeInMb' => 'int',
  ),
  'couchbase\\bucketsettings::setstoragebackend' => 
  array (
    0 => 'Couchbase\\BucketSettings',
    'policy' => 'string',
  ),
  'couchbase\\bucketsettings::storagebackend' => 
  array (
    0 => 'string',
  ),
  'couchbase\\casmismatchexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\casmismatchexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\casmismatchexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\casmismatchexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\casmismatchexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\casmismatchexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\casmismatchexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\casmismatchexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\casmismatchexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\casmismatchexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\casmismatchexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\casmismatchexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\casmismatchexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\cluster::__construct' => 
  array (
    0 => 'void',
    'connstr' => 'string',
    'options' => 'Couchbase\\ClusterOptions',
  ),
  'couchbase\\cluster::analyticsindexes' => 
  array (
    0 => 'Couchbase\\AnalyticsIndexManager',
  ),
  'couchbase\\cluster::analyticsquery' => 
  array (
    0 => 'Couchbase\\AnalyticsResult',
    'statement' => 'string',
    'options=' => 'Couchbase\\AnalyticsOptions|null',
  ),
  'couchbase\\cluster::bucket' => 
  array (
    0 => 'Couchbase\\Bucket',
    'name' => 'string',
  ),
  'couchbase\\cluster::buckets' => 
  array (
    0 => 'Couchbase\\BucketManager',
  ),
  'couchbase\\cluster::query' => 
  array (
    0 => 'Couchbase\\QueryResult',
    'statement' => 'string',
    'options=' => 'Couchbase\\QueryOptions|null',
  ),
  'couchbase\\cluster::queryindexes' => 
  array (
    0 => 'Couchbase\\QueryIndexManager',
  ),
  'couchbase\\cluster::searchindexes' => 
  array (
    0 => 'Couchbase\\SearchIndexManager',
  ),
  'couchbase\\cluster::searchquery' => 
  array (
    0 => 'Couchbase\\SearchResult',
    'indexName' => 'string',
    'query' => 'Couchbase\\SearchQuery',
    'options=' => 'Couchbase\\SearchOptions|null',
  ),
  'couchbase\\cluster::users' => 
  array (
    0 => 'Couchbase\\UserManager',
  ),
  'couchbase\\clusteroptions::credentials' => 
  array (
    0 => 'Couchbase\\ClusterOptions',
    'username' => 'string',
    'password' => 'string',
  ),
  'couchbase\\collection::binary' => 
  array (
    0 => 'Couchbase\\BinaryCollection',
  ),
  'couchbase\\collection::exists' => 
  array (
    0 => 'Couchbase\\ExistsResult',
    'id' => 'string',
    'options=' => 'Couchbase\\ExistsOptions|null',
  ),
  'couchbase\\collection::get' => 
  array (
    0 => 'Couchbase\\GetResult',
    'id' => 'string',
    'options=' => 'Couchbase\\GetOptions|null',
  ),
  'couchbase\\collection::getallreplicas' => 
  array (
    0 => 'array<array-key, mixed>',
    'id' => 'string',
    'options=' => 'Couchbase\\GetAllReplicasOptions|null',
  ),
  'couchbase\\collection::getandlock' => 
  array (
    0 => 'Couchbase\\GetResult',
    'id' => 'string',
    'lockTime' => 'int',
    'options=' => 'Couchbase\\GetAndLockOptions|null',
  ),
  'couchbase\\collection::getandtouch' => 
  array (
    0 => 'Couchbase\\GetResult',
    'id' => 'string',
    'expiry' => 'int',
    'options=' => 'Couchbase\\GetAndTouchOptions|null',
  ),
  'couchbase\\collection::getanyreplica' => 
  array (
    0 => 'Couchbase\\GetReplicaResult',
    'id' => 'string',
    'options=' => 'Couchbase\\GetAnyReplicaOptions|null',
  ),
  'couchbase\\collection::getmulti' => 
  array (
    0 => 'array<array-key, mixed>',
    'ids' => 'array<array-key, mixed>',
    'options=' => 'Couchbase\\RemoveOptions|null',
  ),
  'couchbase\\collection::insert' => 
  array (
    0 => 'Couchbase\\MutationResult',
    'id' => 'string',
    'value' => 'mixed',
    'options=' => 'Couchbase\\InsertOptions|null',
  ),
  'couchbase\\collection::lookupin' => 
  array (
    0 => 'Couchbase\\LookupInResult',
    'id' => 'string',
    'specs' => 'array<array-key, mixed>',
    'options=' => 'Couchbase\\LookupInOptions|null',
  ),
  'couchbase\\collection::mutatein' => 
  array (
    0 => 'Couchbase\\MutateInResult',
    'id' => 'string',
    'specs' => 'array<array-key, mixed>',
    'options=' => 'Couchbase\\MutateInOptions|null',
  ),
  'couchbase\\collection::name' => 
  array (
    0 => 'string',
  ),
  'couchbase\\collection::remove' => 
  array (
    0 => 'Couchbase\\MutationResult',
    'id' => 'string',
    'options=' => 'Couchbase\\RemoveOptions|null',
  ),
  'couchbase\\collection::removemulti' => 
  array (
    0 => 'array<array-key, mixed>',
    'entries' => 'array<array-key, mixed>',
    'options=' => 'Couchbase\\RemoveOptions|null',
  ),
  'couchbase\\collection::replace' => 
  array (
    0 => 'Couchbase\\MutationResult',
    'id' => 'string',
    'value' => 'mixed',
    'options=' => 'Couchbase\\ReplaceOptions|null',
  ),
  'couchbase\\collection::touch' => 
  array (
    0 => 'Couchbase\\MutationResult',
    'id' => 'string',
    'expiry' => 'int',
    'options=' => 'Couchbase\\TouchOptions|null',
  ),
  'couchbase\\collection::unlock' => 
  array (
    0 => 'Couchbase\\Result',
    'id' => 'string',
    'cas' => 'string',
    'options=' => 'Couchbase\\UnlockOptions|null',
  ),
  'couchbase\\collection::upsert' => 
  array (
    0 => 'Couchbase\\MutationResult',
    'id' => 'string',
    'value' => 'mixed',
    'options=' => 'Couchbase\\UpsertOptions|null',
  ),
  'couchbase\\collection::upsertmulti' => 
  array (
    0 => 'array<array-key, mixed>',
    'entries' => 'array<array-key, mixed>',
    'options=' => 'Couchbase\\UpsertOptions|null',
  ),
  'couchbase\\collectionmanager::createcollection' => 
  array (
    0 => 'mixed',
    'collection' => 'Couchbase\\CollectionSpec',
  ),
  'couchbase\\collectionmanager::createscope' => 
  array (
    0 => 'mixed',
    'name' => 'string',
  ),
  'couchbase\\collectionmanager::dropcollection' => 
  array (
    0 => 'mixed',
    'collection' => 'Couchbase\\CollectionSpec',
  ),
  'couchbase\\collectionmanager::dropscope' => 
  array (
    0 => 'mixed',
    'name' => 'string',
  ),
  'couchbase\\collectionmanager::getallscopes' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\collectionmanager::getscope' => 
  array (
    0 => 'Couchbase\\ScopeSpec',
    'name' => 'string',
  ),
  'couchbase\\collectionmissingexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\collectionmissingexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\collectionmissingexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\collectionmissingexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\collectionmissingexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\collectionmissingexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\collectionmissingexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\collectionmissingexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\collectionmissingexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\collectionmissingexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\collectionmissingexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\collectionmissingexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\collectionmissingexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\collectionspec::name' => 
  array (
    0 => 'string',
  ),
  'couchbase\\collectionspec::scopename' => 
  array (
    0 => 'string',
  ),
  'couchbase\\collectionspec::setmaxexpiry' => 
  array (
    0 => 'Couchbase\\CollectionSpec',
    'ms' => 'int',
  ),
  'couchbase\\collectionspec::setname' => 
  array (
    0 => 'Couchbase\\CollectionSpec',
    'name' => 'string',
  ),
  'couchbase\\collectionspec::setscopename' => 
  array (
    0 => 'Couchbase\\CollectionSpec',
    'name' => 'string',
  ),
  'couchbase\\conjunctionsearchquery::__construct' => 
  array (
    0 => 'void',
    'queries' => 'array<array-key, mixed>',
  ),
  'couchbase\\conjunctionsearchquery::boost' => 
  array (
    0 => 'Couchbase\\ConjunctionSearchQuery',
    'boost' => 'mixed',
  ),
  'couchbase\\conjunctionsearchquery::every' => 
  array (
    0 => 'Couchbase\\ConjunctionSearchQuery',
    '...queries=' => 'Couchbase\\SearchQuery',
  ),
  'couchbase\\conjunctionsearchquery::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\connectanalyticslinkoptions::dataversename' => 
  array (
    0 => 'Couchbase\\ConnectAnalyticsLinkOptions',
    'dataverseName' => 'string',
  ),
  'couchbase\\connectanalyticslinkoptions::linkname' => 
  array (
    0 => 'Couchbase\\ConnectAnalyticsLinkOptions',
    'linkName' => 'Couchbase\\bstring',
  ),
  'couchbase\\coordinate::__construct' => 
  array (
    0 => 'void',
    'longitude' => 'float',
    'latitude' => 'float',
  ),
  'couchbase\\coordinate::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\couchbaseremoteanalyticslink::dataverse' => 
  array (
    0 => 'Couchbase\\CouchbaseRemoteAnalyticsLink',
    'dataverse' => 'string',
  ),
  'couchbase\\couchbaseremoteanalyticslink::encryption' => 
  array (
    0 => 'Couchbase\\CouchbaseRemoteAnalyticsLink',
    'settings' => 'Couchbase\\EncryptionSettings',
  ),
  'couchbase\\couchbaseremoteanalyticslink::hostname' => 
  array (
    0 => 'Couchbase\\CouchbaseRemoteAnalyticsLink',
    'hostname' => 'string',
  ),
  'couchbase\\couchbaseremoteanalyticslink::name' => 
  array (
    0 => 'Couchbase\\CouchbaseRemoteAnalyticsLink',
    'name' => 'string',
  ),
  'couchbase\\couchbaseremoteanalyticslink::password' => 
  array (
    0 => 'Couchbase\\CouchbaseRemoteAnalyticsLink',
    'password' => 'string',
  ),
  'couchbase\\couchbaseremoteanalyticslink::username' => 
  array (
    0 => 'Couchbase\\CouchbaseRemoteAnalyticsLink',
    'username' => 'string',
  ),
  'couchbase\\createanalyticsdatasetoptions::condition' => 
  array (
    0 => 'Couchbase\\CreateAnalyticsDatasetOptions',
    'condition' => 'string',
  ),
  'couchbase\\createanalyticsdatasetoptions::dataversename' => 
  array (
    0 => 'Couchbase\\CreateAnalyticsDatasetOptions',
    'dataverseName' => 'string',
  ),
  'couchbase\\createanalyticsdatasetoptions::ignoreifexists' => 
  array (
    0 => 'Couchbase\\CreateAnalyticsDatasetOptions',
    'shouldIgnore' => 'bool',
  ),
  'couchbase\\createanalyticsdataverseoptions::ignoreifexists' => 
  array (
    0 => 'Couchbase\\CreateAnalyticsDataverseOptions',
    'shouldIgnore' => 'bool',
  ),
  'couchbase\\createanalyticsindexoptions::dataversename' => 
  array (
    0 => 'Couchbase\\CreateAnalyticsIndexOptions',
    'dataverseName' => 'string',
  ),
  'couchbase\\createanalyticsindexoptions::ignoreifexists' => 
  array (
    0 => 'Couchbase\\CreateAnalyticsIndexOptions',
    'shouldIgnore' => 'bool',
  ),
  'couchbase\\createanalyticslinkoptions::timeout' => 
  array (
    0 => 'Couchbase\\CreateAnalyticsLinkOptions',
    'arg' => 'int',
  ),
  'couchbase\\createqueryindexoptions::condition' => 
  array (
    0 => 'Couchbase\\CreateQueryIndexOptions',
    'condition' => 'string',
  ),
  'couchbase\\createqueryindexoptions::deferred' => 
  array (
    0 => 'Couchbase\\CreateQueryIndexOptions',
    'isDeferred' => 'bool',
  ),
  'couchbase\\createqueryindexoptions::ignoreifexists' => 
  array (
    0 => 'Couchbase\\CreateQueryIndexOptions',
    'shouldIgnore' => 'bool',
  ),
  'couchbase\\createqueryindexoptions::numreplicas' => 
  array (
    0 => 'Couchbase\\CreateQueryIndexOptions',
    'number' => 'int',
  ),
  'couchbase\\createqueryprimaryindexoptions::deferred' => 
  array (
    0 => 'Couchbase\\CreateQueryPrimaryIndexOptions',
    'isDeferred' => 'bool',
  ),
  'couchbase\\createqueryprimaryindexoptions::ignoreifexists' => 
  array (
    0 => 'Couchbase\\CreateQueryPrimaryIndexOptions',
    'shouldIgnore' => 'bool',
  ),
  'couchbase\\createqueryprimaryindexoptions::indexname' => 
  array (
    0 => 'Couchbase\\CreateQueryPrimaryIndexOptions',
    'name' => 'string',
  ),
  'couchbase\\createqueryprimaryindexoptions::numreplicas' => 
  array (
    0 => 'Couchbase\\CreateQueryPrimaryIndexOptions',
    'number' => 'int',
  ),
  'couchbase\\daterangesearchfacet::__construct' => 
  array (
    0 => 'void',
    'field' => 'string',
    'limit' => 'int',
  ),
  'couchbase\\daterangesearchfacet::addrange' => 
  array (
    0 => 'Couchbase\\DateRangeSearchFacet',
    'name' => 'string',
    'start=' => 'mixed',
    'end=' => 'mixed',
  ),
  'couchbase\\daterangesearchfacet::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\daterangesearchquery::__construct' => 
  array (
    0 => 'void',
  ),
  'couchbase\\daterangesearchquery::boost' => 
  array (
    0 => 'Couchbase\\DateRangeSearchQuery',
    'boost' => 'float',
  ),
  'couchbase\\daterangesearchquery::datetimeparser' => 
  array (
    0 => 'Couchbase\\DateRangeSearchQuery',
    'dateTimeParser' => 'string',
  ),
  'couchbase\\daterangesearchquery::end' => 
  array (
    0 => 'Couchbase\\DateRangeSearchQuery',
    'end' => 'mixed',
    'inclusive=' => 'bool',
  ),
  'couchbase\\daterangesearchquery::field' => 
  array (
    0 => 'Couchbase\\DateRangeSearchQuery',
    'field' => 'string',
  ),
  'couchbase\\daterangesearchquery::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\daterangesearchquery::start' => 
  array (
    0 => 'Couchbase\\DateRangeSearchQuery',
    'start' => 'mixed',
    'inclusive=' => 'bool',
  ),
  'couchbase\\decrementoptions::delta' => 
  array (
    0 => 'Couchbase\\DecrementOptions',
    'arg' => 'int',
  ),
  'couchbase\\decrementoptions::durabilitylevel' => 
  array (
    0 => 'Couchbase\\DecrementOptions',
    'arg' => 'int',
  ),
  'couchbase\\decrementoptions::expiry' => 
  array (
    0 => 'Couchbase\\DecrementOptions',
    'arg' => 'Couchbase\\mixed',
  ),
  'couchbase\\decrementoptions::initial' => 
  array (
    0 => 'Couchbase\\DecrementOptions',
    'arg' => 'int',
  ),
  'couchbase\\decrementoptions::timeout' => 
  array (
    0 => 'Couchbase\\DecrementOptions',
    'arg' => 'int',
  ),
  'couchbase\\designdocument::name' => 
  array (
    0 => 'string',
  ),
  'couchbase\\designdocument::setname' => 
  array (
    0 => 'Couchbase\\DesignDocument',
    'name' => 'string',
  ),
  'couchbase\\designdocument::setviews' => 
  array (
    0 => 'Couchbase\\DesignDocument',
    'views' => 'array<array-key, mixed>',
  ),
  'couchbase\\designdocument::views' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\disconnectanalyticslinkoptions::dataversename' => 
  array (
    0 => 'Couchbase\\DisconnectAnalyticsLinkOptions',
    'dataverseName' => 'string',
  ),
  'couchbase\\disconnectanalyticslinkoptions::linkname' => 
  array (
    0 => 'Couchbase\\DisconnectAnalyticsLinkOptions',
    'linkName' => 'Couchbase\\bstring',
  ),
  'couchbase\\disjunctionsearchquery::__construct' => 
  array (
    0 => 'void',
    'queries' => 'array<array-key, mixed>',
  ),
  'couchbase\\disjunctionsearchquery::boost' => 
  array (
    0 => 'Couchbase\\DisjunctionSearchQuery',
    'boost' => 'float',
  ),
  'couchbase\\disjunctionsearchquery::either' => 
  array (
    0 => 'Couchbase\\DisjunctionSearchQuery',
    '...queries=' => 'Couchbase\\SearchQuery',
  ),
  'couchbase\\disjunctionsearchquery::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\disjunctionsearchquery::min' => 
  array (
    0 => 'Couchbase\\DisjunctionSearchQuery',
    'min' => 'int',
  ),
  'couchbase\\dmlfailureexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\dmlfailureexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\dmlfailureexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\dmlfailureexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\dmlfailureexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\dmlfailureexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\dmlfailureexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\dmlfailureexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\dmlfailureexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\dmlfailureexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\dmlfailureexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\dmlfailureexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\dmlfailureexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\docidsearchquery::__construct' => 
  array (
    0 => 'void',
  ),
  'couchbase\\docidsearchquery::boost' => 
  array (
    0 => 'Couchbase\\DocIdSearchQuery',
    'boost' => 'float',
  ),
  'couchbase\\docidsearchquery::docids' => 
  array (
    0 => 'Couchbase\\DocIdSearchQuery',
    '...documentIds=' => 'string',
  ),
  'couchbase\\docidsearchquery::field' => 
  array (
    0 => 'Couchbase\\DocIdSearchQuery',
    'field' => 'string',
  ),
  'couchbase\\docidsearchquery::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\documentnotfoundexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\documentnotfoundexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\documentnotfoundexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\documentnotfoundexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\documentnotfoundexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\documentnotfoundexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\documentnotfoundexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\documentnotfoundexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\documentnotfoundexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\documentnotfoundexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\documentnotfoundexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\documentnotfoundexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\documentnotfoundexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\dropanalyticsdatasetoptions::dataversename' => 
  array (
    0 => 'Couchbase\\DropAnalyticsDatasetOptions',
    'dataverseName' => 'string',
  ),
  'couchbase\\dropanalyticsdatasetoptions::ignoreifnotexists' => 
  array (
    0 => 'Couchbase\\DropAnalyticsDatasetOptions',
    'shouldIgnore' => 'bool',
  ),
  'couchbase\\dropanalyticsdataverseoptions::ignoreifnotexists' => 
  array (
    0 => 'Couchbase\\DropAnalyticsDataverseOptions',
    'shouldIgnore' => 'bool',
  ),
  'couchbase\\dropanalyticsindexoptions::dataversename' => 
  array (
    0 => 'Couchbase\\DropAnalyticsIndexOptions',
    'dataverseName' => 'string',
  ),
  'couchbase\\dropanalyticsindexoptions::ignoreifnotexists' => 
  array (
    0 => 'Couchbase\\DropAnalyticsIndexOptions',
    'shouldIgnore' => 'bool',
  ),
  'couchbase\\dropanalyticslinkoptions::timeout' => 
  array (
    0 => 'Couchbase\\DropAnalyticsLinkOptions',
    'arg' => 'int',
  ),
  'couchbase\\dropqueryindexoptions::ignoreifnotexists' => 
  array (
    0 => 'Couchbase\\DropQueryIndexOptions',
    'shouldIgnore' => 'bool',
  ),
  'couchbase\\dropqueryprimaryindexoptions::ignoreifnotexists' => 
  array (
    0 => 'Couchbase\\DropQueryPrimaryIndexOptions',
    'shouldIgnore' => 'bool',
  ),
  'couchbase\\dropqueryprimaryindexoptions::indexname' => 
  array (
    0 => 'Couchbase\\DropQueryPrimaryIndexOptions',
    'name' => 'string',
  ),
  'couchbase\\dropuseroptions::domainname' => 
  array (
    0 => 'Couchbase\\DropUserOptions',
    'name' => 'string',
  ),
  'couchbase\\durabilityexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\durabilityexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\durabilityexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\durabilityexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\durabilityexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\durabilityexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\durabilityexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\durabilityexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\durabilityexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\durabilityexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\durabilityexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\durabilityexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\durabilityexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\encryptionsettings::certificate' => 
  array (
    0 => 'mixed',
    'certificate' => 'string',
  ),
  'couchbase\\encryptionsettings::clientcertificate' => 
  array (
    0 => 'mixed',
    'certificate' => 'string',
  ),
  'couchbase\\encryptionsettings::clientkey' => 
  array (
    0 => 'mixed',
    'key' => 'string',
  ),
  'couchbase\\encryptionsettings::level' => 
  array (
    0 => 'mixed',
    'level' => 'string',
  ),
  'couchbase\\existsoptions::timeout' => 
  array (
    0 => 'Couchbase\\ExistsOptions',
    'arg' => 'int',
  ),
  'couchbase\\geoboundingboxsearchquery::__construct' => 
  array (
    0 => 'void',
    'top_left_longitude' => 'float',
    'top_left_latitude' => 'float',
    'buttom_right_longitude' => 'float',
    'buttom_right_latitude' => 'float',
  ),
  'couchbase\\geoboundingboxsearchquery::boost' => 
  array (
    0 => 'Couchbase\\GeoBoundingBoxSearchQuery',
    'boost' => 'float',
  ),
  'couchbase\\geoboundingboxsearchquery::field' => 
  array (
    0 => 'Couchbase\\GeoBoundingBoxSearchQuery',
    'field' => 'string',
  ),
  'couchbase\\geoboundingboxsearchquery::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\geodistancesearchquery::__construct' => 
  array (
    0 => 'void',
    'longitude' => 'float',
    'latitude' => 'float',
    'distance=' => 'null|string',
  ),
  'couchbase\\geodistancesearchquery::boost' => 
  array (
    0 => 'Couchbase\\GeoDistanceSearchQuery',
    'boost' => 'float',
  ),
  'couchbase\\geodistancesearchquery::field' => 
  array (
    0 => 'Couchbase\\GeoDistanceSearchQuery',
    'field' => 'string',
  ),
  'couchbase\\geodistancesearchquery::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\geopolygonquery::__construct' => 
  array (
    0 => 'void',
    'coordinates' => 'array<array-key, mixed>',
  ),
  'couchbase\\geopolygonquery::boost' => 
  array (
    0 => 'Couchbase\\GeoPolygonQuery',
    'boost' => 'float',
  ),
  'couchbase\\geopolygonquery::field' => 
  array (
    0 => 'Couchbase\\GeoPolygonQuery',
    'field' => 'string',
  ),
  'couchbase\\geopolygonquery::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\getallreplicasoptions::decoder' => 
  array (
    0 => 'Couchbase\\GetAllReplicasOptions',
    'arg' => 'callable',
  ),
  'couchbase\\getallreplicasoptions::timeout' => 
  array (
    0 => 'Couchbase\\GetAllReplicasOptions',
    'arg' => 'int',
  ),
  'couchbase\\getallusersoptions::domainname' => 
  array (
    0 => 'Couchbase\\GetAllUsersOptions',
    'name' => 'string',
  ),
  'couchbase\\getanalyticslinksoptions::dataverse' => 
  array (
    0 => 'Couchbase\\DropAnalyticsLinkOptions',
    'dataverse' => 'string',
  ),
  'couchbase\\getanalyticslinksoptions::linktype' => 
  array (
    0 => 'Couchbase\\DropAnalyticsLinkOptions',
    'type' => 'string',
  ),
  'couchbase\\getanalyticslinksoptions::name' => 
  array (
    0 => 'Couchbase\\DropAnalyticsLinkOptions',
    'name' => 'string',
  ),
  'couchbase\\getanalyticslinksoptions::timeout' => 
  array (
    0 => 'Couchbase\\DropAnalyticsLinkOptions',
    'arg' => 'int',
  ),
  'couchbase\\getandlockoptions::decoder' => 
  array (
    0 => 'Couchbase\\GetAndLockOptions',
    'arg' => 'callable',
  ),
  'couchbase\\getandlockoptions::timeout' => 
  array (
    0 => 'Couchbase\\GetAndLockOptions',
    'arg' => 'int',
  ),
  'couchbase\\getandtouchoptions::decoder' => 
  array (
    0 => 'Couchbase\\GetAndTouchOptions',
    'arg' => 'callable',
  ),
  'couchbase\\getandtouchoptions::timeout' => 
  array (
    0 => 'Couchbase\\GetAndTouchOptions',
    'arg' => 'int',
  ),
  'couchbase\\getanyreplicaoptions::decoder' => 
  array (
    0 => 'Couchbase\\GetAnyReplicaOptions',
    'arg' => 'callable',
  ),
  'couchbase\\getanyreplicaoptions::timeout' => 
  array (
    0 => 'Couchbase\\GetAnyReplicaOptions',
    'arg' => 'int',
  ),
  'couchbase\\getoptions::decoder' => 
  array (
    0 => 'Couchbase\\GetOptions',
    'arg' => 'callable',
  ),
  'couchbase\\getoptions::project' => 
  array (
    0 => 'Couchbase\\GetOptions',
    'arg' => 'array<array-key, mixed>',
  ),
  'couchbase\\getoptions::timeout' => 
  array (
    0 => 'Couchbase\\GetOptions',
    'arg' => 'int',
  ),
  'couchbase\\getoptions::withexpiry' => 
  array (
    0 => 'Couchbase\\GetOptions',
    'arg' => 'bool',
  ),
  'couchbase\\getuseroptions::domainname' => 
  array (
    0 => 'Couchbase\\GetUserOptions',
    'name' => 'string',
  ),
  'couchbase\\group::description' => 
  array (
    0 => 'string',
  ),
  'couchbase\\group::ldapgroupreference' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\group::name' => 
  array (
    0 => 'string',
  ),
  'couchbase\\group::roles' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\group::setdescription' => 
  array (
    0 => 'Couchbase\\Group',
    'description' => 'string',
  ),
  'couchbase\\group::setname' => 
  array (
    0 => 'Couchbase\\Group',
    'name' => 'string',
  ),
  'couchbase\\group::setroles' => 
  array (
    0 => 'Couchbase\\Group',
    'roles' => 'array<array-key, mixed>',
  ),
  'couchbase\\httpexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\httpexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\httpexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\httpexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\httpexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\httpexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\httpexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\httpexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\httpexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\httpexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\httpexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\httpexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\httpexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\incrementoptions::delta' => 
  array (
    0 => 'Couchbase\\IncrementOptions',
    'arg' => 'int',
  ),
  'couchbase\\incrementoptions::durabilitylevel' => 
  array (
    0 => 'Couchbase\\IncrementOptions',
    'arg' => 'int',
  ),
  'couchbase\\incrementoptions::expiry' => 
  array (
    0 => 'Couchbase\\IncrementOptions',
    'arg' => 'Couchbase\\mixed',
  ),
  'couchbase\\incrementoptions::initial' => 
  array (
    0 => 'Couchbase\\IncrementOptions',
    'arg' => 'int',
  ),
  'couchbase\\incrementoptions::timeout' => 
  array (
    0 => 'Couchbase\\IncrementOptions',
    'arg' => 'int',
  ),
  'couchbase\\indexfailureexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\indexfailureexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\indexfailureexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\indexfailureexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\indexfailureexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\indexfailureexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\indexfailureexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\indexfailureexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\indexfailureexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\indexfailureexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\indexfailureexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\indexfailureexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\indexfailureexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\indexnotfoundexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\indexnotfoundexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\indexnotfoundexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\indexnotfoundexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\indexnotfoundexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\indexnotfoundexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\indexnotfoundexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\indexnotfoundexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\indexnotfoundexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\indexnotfoundexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\indexnotfoundexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\indexnotfoundexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\indexnotfoundexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\insertoptions::durabilitylevel' => 
  array (
    0 => 'Couchbase\\InsertOptions',
    'arg' => 'int',
  ),
  'couchbase\\insertoptions::encoder' => 
  array (
    0 => 'Couchbase\\InsertOptions',
    'arg' => 'callable',
  ),
  'couchbase\\insertoptions::expiry' => 
  array (
    0 => 'Couchbase\\InsertOptions',
    'arg' => 'int',
  ),
  'couchbase\\insertoptions::timeout' => 
  array (
    0 => 'Couchbase\\InsertOptions',
    'arg' => 'int',
  ),
  'couchbase\\invalidconfigurationexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\invalidconfigurationexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\invalidconfigurationexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\invalidconfigurationexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\invalidconfigurationexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\invalidconfigurationexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\invalidconfigurationexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\invalidconfigurationexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\invalidconfigurationexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\invalidconfigurationexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\invalidconfigurationexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\invalidconfigurationexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\invalidconfigurationexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\invalidrangeexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\invalidrangeexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\invalidrangeexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\invalidrangeexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\invalidrangeexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\invalidrangeexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\invalidrangeexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\invalidrangeexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\invalidrangeexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\invalidrangeexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\invalidrangeexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\invalidrangeexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\invalidrangeexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\invalidstateexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\invalidstateexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\invalidstateexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\invalidstateexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\invalidstateexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\invalidstateexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\invalidstateexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\invalidstateexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\invalidstateexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\invalidstateexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\invalidstateexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\invalidstateexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\invalidstateexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\keydeletedexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keydeletedexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\keydeletedexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keydeletedexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keydeletedexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\keydeletedexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keydeletedexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keydeletedexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keydeletedexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keydeletedexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keydeletedexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keydeletedexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keydeletedexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\keyexistsexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keyexistsexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\keyexistsexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keyexistsexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keyexistsexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\keyexistsexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keyexistsexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keyexistsexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keyexistsexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keyexistsexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keyexistsexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keyexistsexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keyexistsexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\keylockedexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keylockedexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\keylockedexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keylockedexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keylockedexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\keylockedexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keylockedexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keylockedexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keylockedexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keylockedexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keylockedexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keylockedexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keylockedexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\keyspacenotfoundexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keyspacenotfoundexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\keyspacenotfoundexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keyspacenotfoundexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keyspacenotfoundexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\keyspacenotfoundexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keyspacenotfoundexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keyspacenotfoundexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keyspacenotfoundexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keyspacenotfoundexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keyspacenotfoundexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keyspacenotfoundexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keyspacenotfoundexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\keyvalueexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keyvalueexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\keyvalueexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keyvalueexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keyvalueexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\keyvalueexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keyvalueexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keyvalueexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keyvalueexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keyvalueexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keyvalueexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keyvalueexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\keyvalueexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\loggingmeter::flushinterval' => 
  array (
    0 => 'Couchbase\\LoggingMeter',
    'duration' => 'int',
  ),
  'couchbase\\loggingmeter::valuerecorder' => 
  array (
    0 => 'Couchbase\\ValueRecorder',
    'name' => 'string',
    'tags' => 'array<array-key, mixed>',
  ),
  'couchbase\\lookupcountspec::__construct' => 
  array (
    0 => 'void',
    'path' => 'string',
    'isXattr=' => 'bool',
  ),
  'couchbase\\lookupexistsspec::__construct' => 
  array (
    0 => 'void',
    'path' => 'string',
    'isXattr=' => 'bool',
  ),
  'couchbase\\lookupgetfullspec::__construct' => 
  array (
    0 => 'void',
  ),
  'couchbase\\lookupgetspec::__construct' => 
  array (
    0 => 'void',
    'path' => 'string',
    'isXattr=' => 'bool',
  ),
  'couchbase\\lookupinoptions::timeout' => 
  array (
    0 => 'Couchbase\\LookupInOptions',
    'arg' => 'int',
  ),
  'couchbase\\lookupinoptions::withexpiry' => 
  array (
    0 => 'Couchbase\\LookupInOptions',
    'arg' => 'bool',
  ),
  'couchbase\\matchallsearchquery::__construct' => 
  array (
    0 => 'void',
  ),
  'couchbase\\matchallsearchquery::boost' => 
  array (
    0 => 'Couchbase\\MatchAllSearchQuery',
    'boost' => 'float',
  ),
  'couchbase\\matchallsearchquery::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\matchnonesearchquery::__construct' => 
  array (
    0 => 'void',
  ),
  'couchbase\\matchnonesearchquery::boost' => 
  array (
    0 => 'Couchbase\\MatchNoneSearchQuery',
    'boost' => 'float',
  ),
  'couchbase\\matchnonesearchquery::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\matchphrasesearchquery::__construct' => 
  array (
    0 => 'void',
    'value' => 'string',
  ),
  'couchbase\\matchphrasesearchquery::analyzer' => 
  array (
    0 => 'Couchbase\\MatchPhraseSearchQuery',
    'analyzer' => 'string',
  ),
  'couchbase\\matchphrasesearchquery::boost' => 
  array (
    0 => 'Couchbase\\MatchPhraseSearchQuery',
    'boost' => 'float',
  ),
  'couchbase\\matchphrasesearchquery::field' => 
  array (
    0 => 'Couchbase\\MatchPhraseSearchQuery',
    'field' => 'string',
  ),
  'couchbase\\matchphrasesearchquery::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\matchsearchquery::__construct' => 
  array (
    0 => 'void',
    'value' => 'string',
  ),
  'couchbase\\matchsearchquery::analyzer' => 
  array (
    0 => 'Couchbase\\MatchSearchQuery',
    'analyzer' => 'string',
  ),
  'couchbase\\matchsearchquery::boost' => 
  array (
    0 => 'Couchbase\\MatchSearchQuery',
    'boost' => 'float',
  ),
  'couchbase\\matchsearchquery::field' => 
  array (
    0 => 'Couchbase\\MatchSearchQuery',
    'field' => 'string',
  ),
  'couchbase\\matchsearchquery::fuzziness' => 
  array (
    0 => 'Couchbase\\MatchSearchQuery',
    'fuzziness' => 'int',
  ),
  'couchbase\\matchsearchquery::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\matchsearchquery::prefixlength' => 
  array (
    0 => 'Couchbase\\MatchSearchQuery',
    'prefixLength' => 'int',
  ),
  'couchbase\\mutatearrayadduniquespec::__construct' => 
  array (
    0 => 'void',
    'path' => 'string',
    'value' => 'mixed',
    'isXattr' => 'bool',
    'createPath' => 'bool',
    'expandMacros' => 'bool',
  ),
  'couchbase\\mutatearrayappendspec::__construct' => 
  array (
    0 => 'void',
    'path' => 'string',
    'values' => 'array<array-key, mixed>',
    'isXattr' => 'bool',
    'createPath' => 'bool',
    'expandMacros' => 'bool',
  ),
  'couchbase\\mutatearrayinsertspec::__construct' => 
  array (
    0 => 'void',
    'path' => 'string',
    'values' => 'array<array-key, mixed>',
    'isXattr' => 'bool',
    'createPath' => 'bool',
    'expandMacros' => 'bool',
  ),
  'couchbase\\mutatearrayprependspec::__construct' => 
  array (
    0 => 'void',
    'path' => 'string',
    'values' => 'array<array-key, mixed>',
    'isXattr' => 'bool',
    'createPath' => 'bool',
    'expandMacros' => 'bool',
  ),
  'couchbase\\mutatecounterspec::__construct' => 
  array (
    0 => 'void',
    'path' => 'string',
    'delta' => 'int',
    'isXattr' => 'bool',
    'createPath' => 'bool',
  ),
  'couchbase\\mutateinoptions::cas' => 
  array (
    0 => 'Couchbase\\MutateInOptions',
    'arg' => 'string',
  ),
  'couchbase\\mutateinoptions::durabilitylevel' => 
  array (
    0 => 'Couchbase\\MutateInOptions',
    'arg' => 'int',
  ),
  'couchbase\\mutateinoptions::expiry' => 
  array (
    0 => 'Couchbase\\MutateInOptions',
    'arg' => 'Couchbase\\mixed',
  ),
  'couchbase\\mutateinoptions::preserveexpiry' => 
  array (
    0 => 'Couchbase\\MutateInOptions',
    'shouldPreserve' => 'bool',
  ),
  'couchbase\\mutateinoptions::storesemantics' => 
  array (
    0 => 'Couchbase\\MutateInOptions',
    'arg' => 'int',
  ),
  'couchbase\\mutateinoptions::timeout' => 
  array (
    0 => 'Couchbase\\MutateInOptions',
    'arg' => 'int',
  ),
  'couchbase\\mutateinsertspec::__construct' => 
  array (
    0 => 'void',
    'path' => 'string',
    'value' => 'mixed',
    'isXattr' => 'bool',
    'createPath' => 'bool',
    'expandMacros' => 'bool',
  ),
  'couchbase\\mutateremovespec::__construct' => 
  array (
    0 => 'void',
    'path' => 'string',
    'isXattr' => 'bool',
  ),
  'couchbase\\mutatereplacespec::__construct' => 
  array (
    0 => 'void',
    'path' => 'string',
    'value' => 'mixed',
    'isXattr' => 'bool',
  ),
  'couchbase\\mutateupsertspec::__construct' => 
  array (
    0 => 'void',
    'path' => 'string',
    'value' => 'mixed',
    'isXattr' => 'bool',
    'createPath' => 'bool',
    'expandMacros' => 'bool',
  ),
  'couchbase\\mutationstate::__construct' => 
  array (
    0 => 'void',
  ),
  'couchbase\\mutationstate::add' => 
  array (
    0 => 'Couchbase\\MutationState',
    'source' => 'Couchbase\\MutationResult',
  ),
  'couchbase\\networkexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\networkexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\networkexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\networkexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\networkexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\networkexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\networkexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\networkexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\networkexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\networkexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\networkexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\networkexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\networkexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\noopmeter::valuerecorder' => 
  array (
    0 => 'Couchbase\\ValueRecorder',
    'name' => 'string',
    'tags' => 'array<array-key, mixed>',
  ),
  'couchbase\\nooptracer::requestspan' => 
  array (
    0 => 'mixed',
    'name' => 'string',
    'parent=' => 'Couchbase\\RequestSpan|null',
  ),
  'couchbase\\numericrangesearchfacet::__construct' => 
  array (
    0 => 'void',
    'field' => 'string',
    'limit' => 'int',
  ),
  'couchbase\\numericrangesearchfacet::addrange' => 
  array (
    0 => 'Couchbase\\NumericRangeSearchFacet',
    'name' => 'string',
    'min=' => 'float|null',
    'max=' => 'float|null',
  ),
  'couchbase\\numericrangesearchfacet::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\numericrangesearchquery::__construct' => 
  array (
    0 => 'void',
  ),
  'couchbase\\numericrangesearchquery::boost' => 
  array (
    0 => 'Couchbase\\NumericRangeSearchQuery',
    'boost' => 'float',
  ),
  'couchbase\\numericrangesearchquery::field' => 
  array (
    0 => 'Couchbase\\NumericRangeSearchQuery',
    'field' => 'mixed',
  ),
  'couchbase\\numericrangesearchquery::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\numericrangesearchquery::max' => 
  array (
    0 => 'Couchbase\\NumericRangeSearchQuery',
    'max' => 'float',
    'inclusive=' => 'bool',
  ),
  'couchbase\\numericrangesearchquery::min' => 
  array (
    0 => 'Couchbase\\NumericRangeSearchQuery',
    'min' => 'float',
    'inclusive=' => 'bool',
  ),
  'couchbase\\origin::name' => 
  array (
    0 => 'string',
  ),
  'couchbase\\origin::type' => 
  array (
    0 => 'string',
  ),
  'couchbase\\parsingfailureexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\parsingfailureexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\parsingfailureexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\parsingfailureexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\parsingfailureexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\parsingfailureexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\parsingfailureexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\parsingfailureexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\parsingfailureexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\parsingfailureexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\parsingfailureexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\parsingfailureexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\parsingfailureexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\partialviewexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\partialviewexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\partialviewexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\partialviewexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\partialviewexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\partialviewexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\partialviewexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\partialviewexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\partialviewexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\partialviewexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\partialviewexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\partialviewexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\partialviewexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\pathexistsexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\pathexistsexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\pathexistsexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\pathexistsexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\pathexistsexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\pathexistsexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\pathexistsexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\pathexistsexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\pathexistsexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\pathexistsexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\pathexistsexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\pathexistsexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\pathexistsexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\pathnotfoundexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\pathnotfoundexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\pathnotfoundexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\pathnotfoundexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\pathnotfoundexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\pathnotfoundexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\pathnotfoundexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\pathnotfoundexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\pathnotfoundexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\pathnotfoundexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\pathnotfoundexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\pathnotfoundexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\pathnotfoundexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\phrasesearchquery::__construct' => 
  array (
    0 => 'void',
    '...terms=' => 'string',
  ),
  'couchbase\\phrasesearchquery::boost' => 
  array (
    0 => 'Couchbase\\PhraseSearchQuery',
    'boost' => 'float',
  ),
  'couchbase\\phrasesearchquery::field' => 
  array (
    0 => 'Couchbase\\PhraseSearchQuery',
    'field' => 'string',
  ),
  'couchbase\\phrasesearchquery::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\planningfailureexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\planningfailureexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\planningfailureexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\planningfailureexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\planningfailureexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\planningfailureexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\planningfailureexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\planningfailureexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\planningfailureexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\planningfailureexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\planningfailureexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\planningfailureexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\planningfailureexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\prefixsearchquery::__construct' => 
  array (
    0 => 'void',
    'prefix' => 'string',
  ),
  'couchbase\\prefixsearchquery::boost' => 
  array (
    0 => 'Couchbase\\PrefixSearchQuery',
    'boost' => 'float',
  ),
  'couchbase\\prefixsearchquery::field' => 
  array (
    0 => 'Couchbase\\PrefixSearchQuery',
    'field' => 'string',
  ),
  'couchbase\\prefixsearchquery::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\preparedstatementexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\preparedstatementexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\preparedstatementexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\preparedstatementexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\preparedstatementexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\preparedstatementexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\preparedstatementexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\preparedstatementexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\preparedstatementexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\preparedstatementexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\preparedstatementexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\preparedstatementexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\preparedstatementexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\prependoptions::durabilitylevel' => 
  array (
    0 => 'Couchbase\\PrependOptions',
    'arg' => 'int',
  ),
  'couchbase\\prependoptions::timeout' => 
  array (
    0 => 'Couchbase\\PrependOptions',
    'arg' => 'int',
  ),
  'couchbase\\queryerrorexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\queryerrorexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\queryerrorexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\queryerrorexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\queryerrorexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\queryerrorexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\queryerrorexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\queryerrorexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\queryerrorexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\queryerrorexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\queryerrorexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\queryerrorexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\queryerrorexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\queryexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\queryexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\queryexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\queryexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\queryexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\queryexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\queryexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\queryexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\queryexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\queryexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\queryexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\queryexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\queryexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\queryindex::condition' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\queryindex::indexkey' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\queryindex::isprimary' => 
  array (
    0 => 'bool',
  ),
  'couchbase\\queryindex::keyspace' => 
  array (
    0 => 'string',
  ),
  'couchbase\\queryindex::name' => 
  array (
    0 => 'string',
  ),
  'couchbase\\queryindex::state' => 
  array (
    0 => 'string',
  ),
  'couchbase\\queryindex::type' => 
  array (
    0 => 'string',
  ),
  'couchbase\\queryindexmanager::builddeferredindexes' => 
  array (
    0 => 'mixed',
    'bucketName' => 'string',
  ),
  'couchbase\\queryindexmanager::createindex' => 
  array (
    0 => 'mixed',
    'bucketName' => 'string',
    'indexName' => 'string',
    'fields' => 'array<array-key, mixed>',
    'options=' => 'Couchbase\\CreateQueryIndexOptions|null',
  ),
  'couchbase\\queryindexmanager::createprimaryindex' => 
  array (
    0 => 'mixed',
    'bucketName' => 'string',
    'options=' => 'Couchbase\\CreateQueryPrimaryIndexOptions|null',
  ),
  'couchbase\\queryindexmanager::dropindex' => 
  array (
    0 => 'mixed',
    'bucketName' => 'string',
    'indexName' => 'string',
    'options=' => 'Couchbase\\DropQueryIndexOptions|null',
  ),
  'couchbase\\queryindexmanager::dropprimaryindex' => 
  array (
    0 => 'mixed',
    'bucketName' => 'string',
    'options=' => 'Couchbase\\DropQueryPrimaryIndexOptions|null',
  ),
  'couchbase\\queryindexmanager::getallindexes' => 
  array (
    0 => 'array<array-key, mixed>',
    'bucketName' => 'string',
  ),
  'couchbase\\queryindexmanager::watchindexes' => 
  array (
    0 => 'mixed',
    'bucketName' => 'string',
    'indexNames' => 'array<array-key, mixed>',
    'timeout' => 'int',
    'options=' => 'Couchbase\\WatchQueryIndexesOptions|null',
  ),
  'couchbase\\queryoptions::adhoc' => 
  array (
    0 => 'Couchbase\\QueryOptions',
    'arg' => 'bool',
  ),
  'couchbase\\queryoptions::clientcontextid' => 
  array (
    0 => 'Couchbase\\QueryOptions',
    'arg' => 'string',
  ),
  'couchbase\\queryoptions::consistentwith' => 
  array (
    0 => 'Couchbase\\QueryOptions',
    'arg' => 'Couchbase\\MutationState',
  ),
  'couchbase\\queryoptions::flexindex' => 
  array (
    0 => 'Couchbase\\QueryOptions',
    'arg' => 'bool',
  ),
  'couchbase\\queryoptions::maxparallelism' => 
  array (
    0 => 'Couchbase\\QueryOptions',
    'arg' => 'int',
  ),
  'couchbase\\queryoptions::metrics' => 
  array (
    0 => 'Couchbase\\QueryOptions',
    'arg' => 'bool',
  ),
  'couchbase\\queryoptions::namedparameters' => 
  array (
    0 => 'Couchbase\\QueryOptions',
    'pairs' => 'array<array-key, mixed>',
  ),
  'couchbase\\queryoptions::pipelinebatch' => 
  array (
    0 => 'Couchbase\\QueryOptions',
    'arg' => 'int',
  ),
  'couchbase\\queryoptions::pipelinecap' => 
  array (
    0 => 'Couchbase\\QueryOptions',
    'arg' => 'int',
  ),
  'couchbase\\queryoptions::positionalparameters' => 
  array (
    0 => 'Couchbase\\QueryOptions',
    'args' => 'array<array-key, mixed>',
  ),
  'couchbase\\queryoptions::profile' => 
  array (
    0 => 'Couchbase\\QueryOptions',
    'arg' => 'int',
  ),
  'couchbase\\queryoptions::raw' => 
  array (
    0 => 'Couchbase\\QueryOptions',
    'key' => 'string',
    'value' => 'mixed',
  ),
  'couchbase\\queryoptions::readonly' => 
  array (
    0 => 'Couchbase\\QueryOptions',
    'arg' => 'bool',
  ),
  'couchbase\\queryoptions::scancap' => 
  array (
    0 => 'Couchbase\\QueryOptions',
    'arg' => 'int',
  ),
  'couchbase\\queryoptions::scanconsistency' => 
  array (
    0 => 'Couchbase\\QueryOptions',
    'arg' => 'int',
  ),
  'couchbase\\queryoptions::scopename' => 
  array (
    0 => 'Couchbase\\QueryOptions',
    'arg' => 'string',
  ),
  'couchbase\\queryoptions::scopequalifier' => 
  array (
    0 => 'Couchbase\\QueryOptions',
    'arg' => 'string',
  ),
  'couchbase\\queryoptions::timeout' => 
  array (
    0 => 'Couchbase\\QueryOptions',
    'arg' => 'int',
  ),
  'couchbase\\queryserviceexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\queryserviceexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\queryserviceexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\queryserviceexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\queryserviceexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\queryserviceexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\queryserviceexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\queryserviceexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\queryserviceexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\queryserviceexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\queryserviceexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\queryserviceexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\queryserviceexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\querystringsearchquery::__construct' => 
  array (
    0 => 'void',
    'query_string' => 'string',
  ),
  'couchbase\\querystringsearchquery::boost' => 
  array (
    0 => 'Couchbase\\QueryStringSearchQuery',
    'boost' => 'float',
  ),
  'couchbase\\querystringsearchquery::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\quotalimitedexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\quotalimitedexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\quotalimitedexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\quotalimitedexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\quotalimitedexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\quotalimitedexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\quotalimitedexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\quotalimitedexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\quotalimitedexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\quotalimitedexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\quotalimitedexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\quotalimitedexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\quotalimitedexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\ratelimitedexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\ratelimitedexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\ratelimitedexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\ratelimitedexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\ratelimitedexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\ratelimitedexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\ratelimitedexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\ratelimitedexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\ratelimitedexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\ratelimitedexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\ratelimitedexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\ratelimitedexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\ratelimitedexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\regexpsearchquery::__construct' => 
  array (
    0 => 'void',
    'regexp' => 'string',
  ),
  'couchbase\\regexpsearchquery::boost' => 
  array (
    0 => 'Couchbase\\RegexpSearchQuery',
    'boost' => 'float',
  ),
  'couchbase\\regexpsearchquery::field' => 
  array (
    0 => 'Couchbase\\RegexpSearchQuery',
    'field' => 'string',
  ),
  'couchbase\\regexpsearchquery::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\removeoptions::cas' => 
  array (
    0 => 'Couchbase\\RemoveOptions',
    'arg' => 'string',
  ),
  'couchbase\\removeoptions::durabilitylevel' => 
  array (
    0 => 'Couchbase\\RemoveOptions',
    'arg' => 'int',
  ),
  'couchbase\\removeoptions::timeout' => 
  array (
    0 => 'Couchbase\\RemoveOptions',
    'arg' => 'int',
  ),
  'couchbase\\replaceanalyticslinkoptions::timeout' => 
  array (
    0 => 'Couchbase\\ReplaceAnalyticsLinkOptions',
    'arg' => 'int',
  ),
  'couchbase\\replaceoptions::cas' => 
  array (
    0 => 'Couchbase\\ReplaceOptions',
    'arg' => 'string',
  ),
  'couchbase\\replaceoptions::durabilitylevel' => 
  array (
    0 => 'Couchbase\\ReplaceOptions',
    'arg' => 'int',
  ),
  'couchbase\\replaceoptions::encoder' => 
  array (
    0 => 'Couchbase\\ReplaceOptions',
    'arg' => 'callable',
  ),
  'couchbase\\replaceoptions::expiry' => 
  array (
    0 => 'Couchbase\\ReplaceOptions',
    'arg' => 'Couchbase\\mixed',
  ),
  'couchbase\\replaceoptions::preserveexpiry' => 
  array (
    0 => 'Couchbase\\ReplaceOptions',
    'shouldPreserve' => 'bool',
  ),
  'couchbase\\replaceoptions::timeout' => 
  array (
    0 => 'Couchbase\\ReplaceOptions',
    'arg' => 'int',
  ),
  'couchbase\\requestcanceledexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\requestcanceledexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\requestcanceledexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\requestcanceledexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\requestcanceledexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\requestcanceledexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\requestcanceledexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\requestcanceledexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\requestcanceledexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\requestcanceledexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\requestcanceledexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\requestcanceledexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\requestcanceledexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\role::bucket' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\role::collection' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\role::name' => 
  array (
    0 => 'string',
  ),
  'couchbase\\role::scope' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\role::setbucket' => 
  array (
    0 => 'Couchbase\\Role',
    'bucket' => 'string',
  ),
  'couchbase\\role::setcollection' => 
  array (
    0 => 'Couchbase\\Role',
    'bucket' => 'string',
  ),
  'couchbase\\role::setname' => 
  array (
    0 => 'Couchbase\\Role',
    'name' => 'string',
  ),
  'couchbase\\role::setscope' => 
  array (
    0 => 'Couchbase\\Role',
    'bucket' => 'string',
  ),
  'couchbase\\roleanddescription::description' => 
  array (
    0 => 'string',
  ),
  'couchbase\\roleanddescription::displayname' => 
  array (
    0 => 'string',
  ),
  'couchbase\\roleanddescription::role' => 
  array (
    0 => 'Couchbase\\Role',
  ),
  'couchbase\\roleandorigin::origins' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\roleandorigin::role' => 
  array (
    0 => 'Couchbase\\Role',
  ),
  'couchbase\\s3externalanalyticslink::accesskeyid' => 
  array (
    0 => 'Couchbase\\S3ExternalAnalyticsLink',
    'accessKeyId' => 'string',
  ),
  'couchbase\\s3externalanalyticslink::dataverse' => 
  array (
    0 => 'Couchbase\\S3ExternalAnalyticsLink',
    'dataverse' => 'string',
  ),
  'couchbase\\s3externalanalyticslink::name' => 
  array (
    0 => 'Couchbase\\S3ExternalAnalyticsLink',
    'name' => 'string',
  ),
  'couchbase\\s3externalanalyticslink::region' => 
  array (
    0 => 'Couchbase\\S3ExternalAnalyticsLink',
    'region' => 'string',
  ),
  'couchbase\\s3externalanalyticslink::secretaccesskey' => 
  array (
    0 => 'Couchbase\\S3ExternalAnalyticsLink',
    'secretAccessKey' => 'string',
  ),
  'couchbase\\s3externalanalyticslink::serviceendpoint' => 
  array (
    0 => 'Couchbase\\S3ExternalAnalyticsLink',
    'serviceEndpoint' => 'string',
  ),
  'couchbase\\s3externalanalyticslink::sessiontoken' => 
  array (
    0 => 'Couchbase\\S3ExternalAnalyticsLink',
    'sessionToken' => 'string',
  ),
  'couchbase\\scope::__construct' => 
  array (
    0 => 'void',
    'bucket' => 'Couchbase\\Bucket',
    'name' => 'string',
  ),
  'couchbase\\scope::analyticsquery' => 
  array (
    0 => 'Couchbase\\AnalyticsResult',
    'statement' => 'string',
    'options=' => 'Couchbase\\AnalyticsOptions|null',
  ),
  'couchbase\\scope::collection' => 
  array (
    0 => 'Couchbase\\Collection',
    'name' => 'string',
  ),
  'couchbase\\scope::name' => 
  array (
    0 => 'string',
  ),
  'couchbase\\scope::query' => 
  array (
    0 => 'Couchbase\\QueryResult',
    'statement' => 'string',
    'options=' => 'Couchbase\\QueryOptions|null',
  ),
  'couchbase\\scopemissingexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\scopemissingexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\scopemissingexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\scopemissingexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\scopemissingexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\scopemissingexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\scopemissingexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\scopemissingexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\scopemissingexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\scopemissingexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\scopemissingexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\scopemissingexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\scopemissingexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\scopespec::collections' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\scopespec::name' => 
  array (
    0 => 'string',
  ),
  'couchbase\\searchexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\searchexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\searchexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\searchexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\searchexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\searchexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\searchexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\searchexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\searchexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\searchexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\searchexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\searchexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\searchexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\searchindex::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\searchindex::params' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\searchindex::setparams' => 
  array (
    0 => 'Couchbase\\SearchIndex',
    'params' => 'string',
  ),
  'couchbase\\searchindex::setsourcename' => 
  array (
    0 => 'Couchbase\\SearchIndex',
    'params' => 'string',
  ),
  'couchbase\\searchindex::setsourceparams' => 
  array (
    0 => 'Couchbase\\SearchIndex',
    'params' => 'string',
  ),
  'couchbase\\searchindex::setsourcetype' => 
  array (
    0 => 'Couchbase\\SearchIndex',
    'type' => 'string',
  ),
  'couchbase\\searchindex::setsourceuuid' => 
  array (
    0 => 'Couchbase\\SearchIndex',
    'uuid' => 'string',
  ),
  'couchbase\\searchindex::settype' => 
  array (
    0 => 'Couchbase\\SearchIndex',
    'type' => 'string',
  ),
  'couchbase\\searchindex::setuuid' => 
  array (
    0 => 'Couchbase\\SearchIndex',
    'uuid' => 'string',
  ),
  'couchbase\\searchindex::sourcename' => 
  array (
    0 => 'string',
  ),
  'couchbase\\searchindex::sourceparams' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\searchindex::sourcetype' => 
  array (
    0 => 'string',
  ),
  'couchbase\\searchindex::sourceuuid' => 
  array (
    0 => 'string',
  ),
  'couchbase\\searchindex::type' => 
  array (
    0 => 'string',
  ),
  'couchbase\\searchindex::uuid' => 
  array (
    0 => 'string',
  ),
  'couchbase\\searchindexmanager::allowquerying' => 
  array (
    0 => 'mixed',
    'indexName' => 'string',
  ),
  'couchbase\\searchindexmanager::analyzedocument' => 
  array (
    0 => 'mixed',
    'indexName' => 'string',
    'document' => 'mixed',
  ),
  'couchbase\\searchindexmanager::disallowquerying' => 
  array (
    0 => 'mixed',
    'indexName' => 'string',
  ),
  'couchbase\\searchindexmanager::dropindex' => 
  array (
    0 => 'mixed',
    'name' => 'string',
  ),
  'couchbase\\searchindexmanager::freezeplan' => 
  array (
    0 => 'mixed',
    'indexName' => 'string',
  ),
  'couchbase\\searchindexmanager::getallindexes' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\searchindexmanager::getindex' => 
  array (
    0 => 'Couchbase\\SearchIndex',
    'name' => 'string',
  ),
  'couchbase\\searchindexmanager::getindexeddocumentscount' => 
  array (
    0 => 'int',
    'indexName' => 'string',
  ),
  'couchbase\\searchindexmanager::pauseingest' => 
  array (
    0 => 'mixed',
    'indexName' => 'string',
  ),
  'couchbase\\searchindexmanager::resumeingest' => 
  array (
    0 => 'mixed',
    'indexName' => 'string',
  ),
  'couchbase\\searchindexmanager::unfreezeplan' => 
  array (
    0 => 'mixed',
    'indexName' => 'string',
  ),
  'couchbase\\searchindexmanager::upsertindex' => 
  array (
    0 => 'mixed',
    'indexDefinition' => 'Couchbase\\SearchIndex',
  ),
  'couchbase\\searchoptions::collections' => 
  array (
    0 => 'Couchbase\\SearchOptions',
    'collectionNames' => 'array<array-key, mixed>',
  ),
  'couchbase\\searchoptions::consistentwith' => 
  array (
    0 => 'Couchbase\\SearchOptions',
    'index' => 'string',
    'state' => 'Couchbase\\MutationState',
  ),
  'couchbase\\searchoptions::disablescoring' => 
  array (
    0 => 'Couchbase\\SearchOptions',
    'disabled' => 'bool',
  ),
  'couchbase\\searchoptions::explain' => 
  array (
    0 => 'Couchbase\\SearchOptions',
    'explain' => 'bool',
  ),
  'couchbase\\searchoptions::facets' => 
  array (
    0 => 'Couchbase\\SearchOptions',
    'facets' => 'array<array-key, mixed>',
  ),
  'couchbase\\searchoptions::fields' => 
  array (
    0 => 'Couchbase\\SearchOptions',
    'fields' => 'array<array-key, mixed>',
  ),
  'couchbase\\searchoptions::highlight' => 
  array (
    0 => 'Couchbase\\SearchOptions',
    'style=' => 'null|string',
    'fields=' => 'array<array-key, mixed>|null',
  ),
  'couchbase\\searchoptions::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\searchoptions::limit' => 
  array (
    0 => 'Couchbase\\SearchOptions',
    'limit' => 'int',
  ),
  'couchbase\\searchoptions::skip' => 
  array (
    0 => 'Couchbase\\SearchOptions',
    'skip' => 'int',
  ),
  'couchbase\\searchoptions::sort' => 
  array (
    0 => 'Couchbase\\SearchOptions',
    'specs' => 'array<array-key, mixed>',
  ),
  'couchbase\\searchoptions::timeout' => 
  array (
    0 => 'Couchbase\\SearchOptions',
    'ms' => 'int',
  ),
  'couchbase\\searchsortfield::__construct' => 
  array (
    0 => 'void',
    'field' => 'string',
  ),
  'couchbase\\searchsortfield::descending' => 
  array (
    0 => 'Couchbase\\SearchSortField',
    'descending' => 'bool',
  ),
  'couchbase\\searchsortfield::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\searchsortfield::missing' => 
  array (
    0 => 'Couchbase\\SearchSortField',
    'missing' => 'string',
  ),
  'couchbase\\searchsortfield::mode' => 
  array (
    0 => 'Couchbase\\SearchSortField',
    'mode' => 'string',
  ),
  'couchbase\\searchsortfield::type' => 
  array (
    0 => 'Couchbase\\SearchSortField',
    'type' => 'string',
  ),
  'couchbase\\searchsortgeodistance::__construct' => 
  array (
    0 => 'void',
    'field' => 'string',
    'logitude' => 'float',
    'latitude' => 'float',
  ),
  'couchbase\\searchsortgeodistance::descending' => 
  array (
    0 => 'Couchbase\\SearchSortGeoDistance',
    'descending' => 'bool',
  ),
  'couchbase\\searchsortgeodistance::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\searchsortgeodistance::unit' => 
  array (
    0 => 'Couchbase\\SearchSortGeoDistance',
    'unit' => 'string',
  ),
  'couchbase\\searchsortid::__construct' => 
  array (
    0 => 'void',
  ),
  'couchbase\\searchsortid::descending' => 
  array (
    0 => 'Couchbase\\SearchSortId',
    'descending' => 'bool',
  ),
  'couchbase\\searchsortid::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\searchsortscore::__construct' => 
  array (
    0 => 'void',
  ),
  'couchbase\\searchsortscore::descending' => 
  array (
    0 => 'Couchbase\\SearchSortScore',
    'descending' => 'bool',
  ),
  'couchbase\\searchsortscore::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\servicemissingexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\servicemissingexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\servicemissingexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\servicemissingexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\servicemissingexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\servicemissingexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\servicemissingexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\servicemissingexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\servicemissingexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\servicemissingexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\servicemissingexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\servicemissingexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\servicemissingexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\subdocumentexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\subdocumentexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\subdocumentexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\subdocumentexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\subdocumentexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\subdocumentexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\subdocumentexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\subdocumentexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\subdocumentexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\subdocumentexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\subdocumentexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\subdocumentexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\subdocumentexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\tempfailexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\tempfailexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\tempfailexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\tempfailexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\tempfailexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\tempfailexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\tempfailexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\tempfailexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\tempfailexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\tempfailexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\tempfailexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\tempfailexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\tempfailexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\termrangesearchquery::__construct' => 
  array (
    0 => 'void',
  ),
  'couchbase\\termrangesearchquery::boost' => 
  array (
    0 => 'Couchbase\\TermRangeSearchQuery',
    'boost' => 'float',
  ),
  'couchbase\\termrangesearchquery::field' => 
  array (
    0 => 'Couchbase\\TermRangeSearchQuery',
    'field' => 'string',
  ),
  'couchbase\\termrangesearchquery::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\termrangesearchquery::max' => 
  array (
    0 => 'Couchbase\\TermRangeSearchQuery',
    'max' => 'string',
    'inclusive=' => 'bool',
  ),
  'couchbase\\termrangesearchquery::min' => 
  array (
    0 => 'Couchbase\\TermRangeSearchQuery',
    'min' => 'string',
    'inclusive=' => 'bool',
  ),
  'couchbase\\termsearchfacet::__construct' => 
  array (
    0 => 'void',
    'field' => 'string',
    'limit' => 'int',
  ),
  'couchbase\\termsearchfacet::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\termsearchquery::__construct' => 
  array (
    0 => 'void',
    'term' => 'string',
  ),
  'couchbase\\termsearchquery::boost' => 
  array (
    0 => 'Couchbase\\TermSearchQuery',
    'boost' => 'float',
  ),
  'couchbase\\termsearchquery::field' => 
  array (
    0 => 'Couchbase\\TermSearchQuery',
    'field' => 'string',
  ),
  'couchbase\\termsearchquery::fuzziness' => 
  array (
    0 => 'Couchbase\\TermSearchQuery',
    'fuzziness' => 'int',
  ),
  'couchbase\\termsearchquery::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\termsearchquery::prefixlength' => 
  array (
    0 => 'Couchbase\\TermSearchQuery',
    'prefixLength' => 'int',
  ),
  'couchbase\\thresholdloggingtracer::analyticsthreshold' => 
  array (
    0 => 'mixed',
    'duration' => 'int',
  ),
  'couchbase\\thresholdloggingtracer::emitinterval' => 
  array (
    0 => 'mixed',
    'duration' => 'int',
  ),
  'couchbase\\thresholdloggingtracer::kvthreshold' => 
  array (
    0 => 'mixed',
    'duration' => 'int',
  ),
  'couchbase\\thresholdloggingtracer::querythreshold' => 
  array (
    0 => 'mixed',
    'duration' => 'int',
  ),
  'couchbase\\thresholdloggingtracer::requestspan' => 
  array (
    0 => 'mixed',
    'name' => 'string',
    'parent=' => 'Couchbase\\RequestSpan|null',
  ),
  'couchbase\\thresholdloggingtracer::samplesize' => 
  array (
    0 => 'mixed',
    'size' => 'int',
  ),
  'couchbase\\thresholdloggingtracer::searchthreshold' => 
  array (
    0 => 'mixed',
    'duration' => 'int',
  ),
  'couchbase\\thresholdloggingtracer::viewsthreshold' => 
  array (
    0 => 'mixed',
    'duration' => 'int',
  ),
  'couchbase\\timeoutexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\timeoutexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\timeoutexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\timeoutexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\timeoutexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\timeoutexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\timeoutexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\timeoutexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\timeoutexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\timeoutexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\timeoutexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\timeoutexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\timeoutexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\touchoptions::timeout' => 
  array (
    0 => 'Couchbase\\TouchOptions',
    'arg' => 'int',
  ),
  'couchbase\\unlockoptions::timeout' => 
  array (
    0 => 'Couchbase\\UnlockOptions',
    'arg' => 'int',
  ),
  'couchbase\\upsertoptions::durabilitylevel' => 
  array (
    0 => 'Couchbase\\UpsertOptions',
    'arg' => 'int',
  ),
  'couchbase\\upsertoptions::encoder' => 
  array (
    0 => 'Couchbase\\UpsertOptions',
    'arg' => 'callable',
  ),
  'couchbase\\upsertoptions::expiry' => 
  array (
    0 => 'Couchbase\\UpsertOptions',
    'arg' => 'Couchbase\\mixed',
  ),
  'couchbase\\upsertoptions::preserveexpiry' => 
  array (
    0 => 'Couchbase\\UpsertOptions',
    'shouldPreserve' => 'bool',
  ),
  'couchbase\\upsertoptions::timeout' => 
  array (
    0 => 'Couchbase\\UpsertOptions',
    'arg' => 'int',
  ),
  'couchbase\\upsertuseroptions::domainname' => 
  array (
    0 => 'Couchbase\\DropUserOptions',
    'name' => 'string',
  ),
  'couchbase\\user::displayname' => 
  array (
    0 => 'string',
  ),
  'couchbase\\user::groups' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\user::roles' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\user::setdisplayname' => 
  array (
    0 => 'Couchbase\\User',
    'name' => 'string',
  ),
  'couchbase\\user::setgroups' => 
  array (
    0 => 'Couchbase\\User',
    'groups' => 'array<array-key, mixed>',
  ),
  'couchbase\\user::setpassword' => 
  array (
    0 => 'Couchbase\\User',
    'password' => 'string',
  ),
  'couchbase\\user::setroles' => 
  array (
    0 => 'Couchbase\\User',
    'roles' => 'array<array-key, mixed>',
  ),
  'couchbase\\user::setusername' => 
  array (
    0 => 'Couchbase\\User',
    'username' => 'string',
  ),
  'couchbase\\user::username' => 
  array (
    0 => 'string',
  ),
  'couchbase\\userandmetadata::domain' => 
  array (
    0 => 'string',
  ),
  'couchbase\\userandmetadata::effectiveroles' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\userandmetadata::externalgroups' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\userandmetadata::passwordchanged' => 
  array (
    0 => 'string',
  ),
  'couchbase\\userandmetadata::user' => 
  array (
    0 => 'Couchbase\\User',
  ),
  'couchbase\\usermanager::dropgroup' => 
  array (
    0 => 'mixed',
    'name' => 'string',
  ),
  'couchbase\\usermanager::dropuser' => 
  array (
    0 => 'mixed',
    'name' => 'string',
    'options=' => 'Couchbase\\DropUserOptions|null',
  ),
  'couchbase\\usermanager::getallgroups' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\usermanager::getallusers' => 
  array (
    0 => 'array<array-key, mixed>',
    'options=' => 'Couchbase\\GetAllUsersOptions|null',
  ),
  'couchbase\\usermanager::getgroup' => 
  array (
    0 => 'Couchbase\\Group',
    'name' => 'string',
  ),
  'couchbase\\usermanager::getroles' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\usermanager::getuser' => 
  array (
    0 => 'Couchbase\\UserAndMetadata',
    'name' => 'string',
    'options=' => 'Couchbase\\GetUserOptions|null',
  ),
  'couchbase\\usermanager::upsertgroup' => 
  array (
    0 => 'mixed',
    'group' => 'Couchbase\\Group',
  ),
  'couchbase\\usermanager::upsertuser' => 
  array (
    0 => 'mixed',
    'user' => 'Couchbase\\User',
    'options=' => 'Couchbase\\UpsertUserOptions|null',
  ),
  'couchbase\\valuetoobigexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\valuetoobigexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\valuetoobigexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\valuetoobigexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\valuetoobigexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\valuetoobigexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\valuetoobigexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\valuetoobigexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\valuetoobigexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\valuetoobigexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\valuetoobigexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\valuetoobigexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\valuetoobigexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\view::map' => 
  array (
    0 => 'string',
  ),
  'couchbase\\view::name' => 
  array (
    0 => 'string',
  ),
  'couchbase\\view::reduce' => 
  array (
    0 => 'string',
  ),
  'couchbase\\view::setmap' => 
  array (
    0 => 'Couchbase\\View',
    'mapJsCode' => 'string',
  ),
  'couchbase\\view::setname' => 
  array (
    0 => 'Couchbase\\View',
    'name' => 'string',
  ),
  'couchbase\\view::setreduce' => 
  array (
    0 => 'Couchbase\\View',
    'reduceJsCode' => 'string',
  ),
  'couchbase\\viewexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\viewexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'couchbase\\viewexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\viewexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\viewexception::context' => 
  array (
    0 => 'null|object',
  ),
  'couchbase\\viewexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\viewexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\viewexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\viewexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\viewexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\viewexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\viewexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\viewexception::ref' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\viewindexmanager::dropdesigndocument' => 
  array (
    0 => 'mixed',
    'name' => 'string',
  ),
  'couchbase\\viewindexmanager::getalldesigndocuments' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\viewindexmanager::getdesigndocument' => 
  array (
    0 => 'Couchbase\\DesignDocument',
    'name' => 'string',
  ),
  'couchbase\\viewindexmanager::upsertdesigndocument' => 
  array (
    0 => 'mixed',
    'document' => 'Couchbase\\DesignDocument',
  ),
  'couchbase\\viewoptions::group' => 
  array (
    0 => 'Couchbase\\ViewOptions',
    'arg' => 'bool',
  ),
  'couchbase\\viewoptions::grouplevel' => 
  array (
    0 => 'Couchbase\\ViewOptions',
    'arg' => 'int',
  ),
  'couchbase\\viewoptions::idrange' => 
  array (
    0 => 'Couchbase\\ViewOptions',
    'start' => 'mixed',
    'end' => 'mixed',
    'inclusiveEnd=' => 'mixed',
  ),
  'couchbase\\viewoptions::includedocuments' => 
  array (
    0 => 'Couchbase\\ViewOptions',
    'arg' => 'bool',
    'maxConcurrentDocuments=' => 'int',
  ),
  'couchbase\\viewoptions::key' => 
  array (
    0 => 'Couchbase\\ViewOptions',
    'arg' => 'mixed',
  ),
  'couchbase\\viewoptions::keys' => 
  array (
    0 => 'Couchbase\\ViewOptions',
    'args' => 'array<array-key, mixed>',
  ),
  'couchbase\\viewoptions::limit' => 
  array (
    0 => 'Couchbase\\ViewOptions',
    'arg' => 'int',
  ),
  'couchbase\\viewoptions::order' => 
  array (
    0 => 'Couchbase\\ViewOptions',
    'arg' => 'int',
  ),
  'couchbase\\viewoptions::range' => 
  array (
    0 => 'Couchbase\\ViewOptions',
    'start' => 'mixed',
    'end' => 'mixed',
    'inclusiveEnd=' => 'mixed',
  ),
  'couchbase\\viewoptions::raw' => 
  array (
    0 => 'Couchbase\\ViewOptions',
    'key' => 'string',
    'value' => 'mixed',
  ),
  'couchbase\\viewoptions::reduce' => 
  array (
    0 => 'Couchbase\\ViewOptions',
    'arg' => 'bool',
  ),
  'couchbase\\viewoptions::scanconsistency' => 
  array (
    0 => 'Couchbase\\ViewOptions',
    'arg' => 'int',
  ),
  'couchbase\\viewoptions::skip' => 
  array (
    0 => 'Couchbase\\ViewOptions',
    'arg' => 'int',
  ),
  'couchbase\\viewoptions::timeout' => 
  array (
    0 => 'Couchbase\\ViewOptions',
    'arg' => 'int',
  ),
  'couchbase\\viewrow::document' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\viewrow::id' => 
  array (
    0 => 'null|string',
  ),
  'couchbase\\viewrow::key' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\viewrow::value' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\watchqueryindexesoptions::watchprimary' => 
  array (
    0 => 'Couchbase\\WatchQueryIndexesOptions',
    'shouldWatch' => 'bool',
  ),
  'couchbase\\wildcardsearchquery::__construct' => 
  array (
    0 => 'void',
    'wildcard' => 'string',
  ),
  'couchbase\\wildcardsearchquery::boost' => 
  array (
    0 => 'Couchbase\\WildcardSearchQuery',
    'boost' => 'float',
  ),
  'couchbase\\wildcardsearchquery::field' => 
  array (
    0 => 'Couchbase\\WildcardSearchQuery',
    'field' => 'string',
  ),
  'couchbase\\wildcardsearchquery::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'count' => 
  array (
    0 => 'mixed',
    'var' => 'mixed',
    'mode=' => 'mixed',
  ),
  'count_chars' => 
  array (
    0 => 'mixed',
    'input' => 'mixed',
    'mode=' => 'mixed',
  ),
  'crc32' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
  ),
  'create_function' => 
  array (
    0 => 'mixed',
    'args' => 'mixed',
    'code' => 'mixed',
  ),
  'crypt' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
    'salt=' => 'mixed',
  ),
  'ctype_alnum' => 
  array (
    0 => 'mixed',
    'text' => 'mixed',
  ),
  'ctype_alpha' => 
  array (
    0 => 'mixed',
    'text' => 'mixed',
  ),
  'ctype_cntrl' => 
  array (
    0 => 'mixed',
    'text' => 'mixed',
  ),
  'ctype_digit' => 
  array (
    0 => 'mixed',
    'text' => 'mixed',
  ),
  'ctype_graph' => 
  array (
    0 => 'mixed',
    'text' => 'mixed',
  ),
  'ctype_lower' => 
  array (
    0 => 'mixed',
    'text' => 'mixed',
  ),
  'ctype_print' => 
  array (
    0 => 'mixed',
    'text' => 'mixed',
  ),
  'ctype_punct' => 
  array (
    0 => 'mixed',
    'text' => 'mixed',
  ),
  'ctype_space' => 
  array (
    0 => 'mixed',
    'text' => 'mixed',
  ),
  'ctype_upper' => 
  array (
    0 => 'mixed',
    'text' => 'mixed',
  ),
  'ctype_xdigit' => 
  array (
    0 => 'mixed',
    'text' => 'mixed',
  ),
  'curl_close' => 
  array (
    0 => 'mixed',
    'ch' => 'mixed',
  ),
  'curl_copy_handle' => 
  array (
    0 => 'mixed',
    'ch' => 'mixed',
  ),
  'curl_errno' => 
  array (
    0 => 'mixed',
    'ch' => 'mixed',
  ),
  'curl_error' => 
  array (
    0 => 'mixed',
    'ch' => 'mixed',
  ),
  'curl_escape' => 
  array (
    0 => 'mixed',
    'ch' => 'mixed',
    'str' => 'mixed',
  ),
  'curl_exec' => 
  array (
    0 => 'mixed',
    'ch' => 'mixed',
  ),
  'curl_file_create' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
    'mimetype=' => 'mixed',
    'postname=' => 'mixed',
  ),
  'curl_getinfo' => 
  array (
    0 => 'mixed',
    'ch' => 'mixed',
    'option=' => 'mixed',
  ),
  'curl_init' => 
  array (
    0 => 'mixed',
    'url=' => 'mixed',
  ),
  'curl_multi_add_handle' => 
  array (
    0 => 'mixed',
    'mh' => 'mixed',
    'ch' => 'mixed',
  ),
  'curl_multi_close' => 
  array (
    0 => 'mixed',
    'mh' => 'mixed',
  ),
  'curl_multi_errno' => 
  array (
    0 => 'mixed',
    'mh' => 'mixed',
  ),
  'curl_multi_exec' => 
  array (
    0 => 'mixed',
    'mh' => 'mixed',
    '&still_running=' => 'mixed',
  ),
  'curl_multi_getcontent' => 
  array (
    0 => 'mixed',
    'ch' => 'mixed',
  ),
  'curl_multi_info_read' => 
  array (
    0 => 'mixed',
    'mh' => 'mixed',
    '&msgs_in_queue=' => 'mixed',
  ),
  'curl_multi_init' => 
  array (
    0 => 'mixed',
  ),
  'curl_multi_remove_handle' => 
  array (
    0 => 'mixed',
    'mh' => 'mixed',
    'ch' => 'mixed',
  ),
  'curl_multi_select' => 
  array (
    0 => 'mixed',
    'mh' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'curl_multi_setopt' => 
  array (
    0 => 'mixed',
    'sh' => 'mixed',
    'option' => 'mixed',
    'value' => 'mixed',
  ),
  'curl_multi_strerror' => 
  array (
    0 => 'mixed',
    'errornum' => 'mixed',
  ),
  'curl_pause' => 
  array (
    0 => 'mixed',
    'ch' => 'mixed',
    'bitmask' => 'mixed',
  ),
  'curl_reset' => 
  array (
    0 => 'mixed',
    'ch' => 'mixed',
  ),
  'curl_setopt' => 
  array (
    0 => 'mixed',
    'ch' => 'mixed',
    'option' => 'mixed',
    'value' => 'mixed',
  ),
  'curl_setopt_array' => 
  array (
    0 => 'mixed',
    'ch' => 'mixed',
    'options' => 'array<array-key, mixed>',
  ),
  'curl_share_close' => 
  array (
    0 => 'mixed',
    'sh' => 'mixed',
  ),
  'curl_share_errno' => 
  array (
    0 => 'mixed',
    'sh' => 'mixed',
  ),
  'curl_share_init' => 
  array (
    0 => 'mixed',
  ),
  'curl_share_setopt' => 
  array (
    0 => 'mixed',
    'sh' => 'mixed',
    'option' => 'mixed',
    'value' => 'mixed',
  ),
  'curl_share_strerror' => 
  array (
    0 => 'mixed',
    'errornum' => 'mixed',
  ),
  'curl_strerror' => 
  array (
    0 => 'mixed',
    'errornum' => 'mixed',
  ),
  'curl_unescape' => 
  array (
    0 => 'mixed',
    'ch' => 'mixed',
    'str' => 'mixed',
  ),
  'curl_version' => 
  array (
    0 => 'mixed',
    'version=' => 'mixed',
  ),
  'curlfile::__construct' => 
  array (
    0 => 'void',
    'filename' => 'mixed',
    'mimetype=' => 'mixed',
    'postname=' => 'mixed',
  ),
  'curlfile::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'curlfile::getfilename' => 
  array (
    0 => 'mixed',
  ),
  'curlfile::getmimetype' => 
  array (
    0 => 'mixed',
  ),
  'curlfile::getpostfilename' => 
  array (
    0 => 'mixed',
  ),
  'curlfile::setmimetype' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
  ),
  'curlfile::setpostfilename' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
  ),
  'current' => 
  array (
    0 => 'mixed',
    'arg' => 'mixed',
  ),
  'date' => 
  array (
    0 => 'mixed',
    'format' => 'mixed',
    'timestamp=' => 'mixed',
  ),
  'date_add' => 
  array (
    0 => 'mixed',
    'object' => 'mixed',
    'interval' => 'mixed',
  ),
  'date_create' => 
  array (
    0 => 'mixed',
    'time=' => 'mixed',
    'timezone=' => 'mixed',
  ),
  'date_create_from_format' => 
  array (
    0 => 'mixed',
    'format' => 'mixed',
    'time' => 'mixed',
    'object=' => 'DateTimeZone|null',
  ),
  'date_create_immutable' => 
  array (
    0 => 'mixed',
    'time=' => 'mixed',
    'timezone=' => 'mixed',
  ),
  'date_create_immutable_from_format' => 
  array (
    0 => 'mixed',
    'format' => 'mixed',
    'time' => 'mixed',
    'object=' => 'DateTimeZone|null',
  ),
  'date_date_set' => 
  array (
    0 => 'mixed',
    'object' => 'mixed',
    'year' => 'mixed',
    'month' => 'mixed',
    'day' => 'mixed',
  ),
  'date_default_timezone_get' => 
  array (
    0 => 'mixed',
  ),
  'date_default_timezone_set' => 
  array (
    0 => 'mixed',
    'timezone_identifier' => 'mixed',
  ),
  'date_diff' => 
  array (
    0 => 'mixed',
    'object' => 'mixed',
    'object2' => 'mixed',
    'absolute=' => 'mixed',
  ),
  'date_format' => 
  array (
    0 => 'mixed',
    'object' => 'mixed',
    'format' => 'mixed',
  ),
  'date_get_last_errors' => 
  array (
    0 => 'mixed',
  ),
  'date_interval_create_from_date_string' => 
  array (
    0 => 'mixed',
    'time' => 'mixed',
  ),
  'date_interval_format' => 
  array (
    0 => 'mixed',
    'object' => 'mixed',
    'format' => 'mixed',
  ),
  'date_isodate_set' => 
  array (
    0 => 'mixed',
    'object' => 'mixed',
    'year' => 'mixed',
    'week' => 'mixed',
    'day=' => 'mixed',
  ),
  'date_modify' => 
  array (
    0 => 'mixed',
    'object' => 'mixed',
    'modify' => 'mixed',
  ),
  'date_offset_get' => 
  array (
    0 => 'mixed',
    'object' => 'mixed',
  ),
  'date_parse' => 
  array (
    0 => 'mixed',
    'date' => 'mixed',
  ),
  'date_parse_from_format' => 
  array (
    0 => 'mixed',
    'format' => 'mixed',
    'date' => 'mixed',
  ),
  'date_sub' => 
  array (
    0 => 'mixed',
    'object' => 'mixed',
    'interval' => 'mixed',
  ),
  'date_sun_info' => 
  array (
    0 => 'mixed',
    'time' => 'mixed',
    'latitude' => 'mixed',
    'longitude' => 'mixed',
  ),
  'date_sunrise' => 
  array (
    0 => 'mixed',
    'time' => 'mixed',
    'format=' => 'mixed',
    'latitude=' => 'mixed',
    'longitude=' => 'mixed',
    'zenith=' => 'mixed',
    'gmt_offset=' => 'mixed',
  ),
  'date_sunset' => 
  array (
    0 => 'mixed',
    'time' => 'mixed',
    'format=' => 'mixed',
    'latitude=' => 'mixed',
    'longitude=' => 'mixed',
    'zenith=' => 'mixed',
    'gmt_offset=' => 'mixed',
  ),
  'date_time_set' => 
  array (
    0 => 'int',
    'object' => 'int',
    'hour' => 'int',
    'minute' => 'int',
    'second=' => 'int',
    'microseconds=' => 'int',
  ),
  'date_timestamp_get' => 
  array (
    0 => 'mixed',
    'object' => 'mixed',
  ),
  'date_timestamp_set' => 
  array (
    0 => 'mixed',
    'object' => 'mixed',
    'unixtimestamp' => 'mixed',
  ),
  'date_timezone_get' => 
  array (
    0 => 'mixed',
    'object' => 'mixed',
  ),
  'date_timezone_set' => 
  array (
    0 => 'mixed',
    'object' => 'mixed',
    'timezone' => 'mixed',
  ),
  'datefmt_create' => 
  array (
    0 => 'mixed',
    'locale' => 'mixed',
    'date_type' => 'mixed',
    'time_type' => 'mixed',
    'timezone_str=' => 'mixed',
    'calendar=' => 'mixed',
    'pattern=' => 'mixed',
  ),
  'datefmt_format' => 
  array (
    0 => 'mixed',
    'args=' => 'mixed',
    'array=' => 'mixed',
  ),
  'datefmt_format_object' => 
  array (
    0 => 'mixed',
    'object' => 'mixed',
    'format=' => 'mixed',
    'locale=' => 'mixed',
  ),
  'datefmt_get_calendar' => 
  array (
    0 => 'mixed',
    'mf' => 'mixed',
  ),
  'datefmt_get_calendar_object' => 
  array (
    0 => 'mixed',
    'mf' => 'mixed',
  ),
  'datefmt_get_datetype' => 
  array (
    0 => 'mixed',
    'mf' => 'mixed',
  ),
  'datefmt_get_error_code' => 
  array (
    0 => 'mixed',
    'nf' => 'mixed',
  ),
  'datefmt_get_error_message' => 
  array (
    0 => 'mixed',
    'coll' => 'mixed',
  ),
  'datefmt_get_locale' => 
  array (
    0 => 'mixed',
    'mf' => 'mixed',
  ),
  'datefmt_get_pattern' => 
  array (
    0 => 'mixed',
    'mf' => 'mixed',
  ),
  'datefmt_get_timetype' => 
  array (
    0 => 'mixed',
    'mf' => 'mixed',
  ),
  'datefmt_get_timezone' => 
  array (
    0 => 'mixed',
    'mf' => 'mixed',
  ),
  'datefmt_get_timezone_id' => 
  array (
    0 => 'mixed',
    'mf' => 'mixed',
  ),
  'datefmt_is_lenient' => 
  array (
    0 => 'mixed',
    'mf' => 'mixed',
  ),
  'datefmt_localtime' => 
  array (
    0 => 'mixed',
    'formatter' => 'mixed',
    'string' => 'mixed',
    '&position=' => 'mixed',
  ),
  'datefmt_parse' => 
  array (
    0 => 'mixed',
    'formatter' => 'mixed',
    'string' => 'mixed',
    '&position=' => 'mixed',
  ),
  'datefmt_set_calendar' => 
  array (
    0 => 'mixed',
    'mf' => 'mixed',
    'calendar' => 'mixed',
  ),
  'datefmt_set_lenient' => 
  array (
    0 => 'mixed',
    'mf' => 'mixed',
  ),
  'datefmt_set_pattern' => 
  array (
    0 => 'mixed',
    'mf' => 'mixed',
    'pattern' => 'mixed',
  ),
  'datefmt_set_timezone' => 
  array (
    0 => 'mixed',
    'mf' => 'mixed',
    'timezone' => 'mixed',
  ),
  'dateinterval::__construct' => 
  array (
    0 => 'void',
    'interval_spec' => 'mixed',
  ),
  'dateinterval::__set_state' => 
  array (
    0 => 'mixed',
    'array' => 'array<array-key, mixed>',
  ),
  'dateinterval::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'dateinterval::createfromdatestring' => 
  array (
    0 => 'mixed',
    'time' => 'mixed',
  ),
  'dateinterval::format' => 
  array (
    0 => 'mixed',
    'format' => 'mixed',
  ),
  'dateperiod::__construct' => 
  array (
    0 => 'void',
    'start' => 'mixed',
    'interval' => 'mixed',
    'end' => 'mixed',
  ),
  'dateperiod::__set_state' => 
  array (
    0 => 'mixed',
    'array' => 'array<array-key, mixed>',
  ),
  'dateperiod::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'dateperiod::getdateinterval' => 
  array (
    0 => 'mixed',
  ),
  'dateperiod::getenddate' => 
  array (
    0 => 'mixed',
  ),
  'dateperiod::getrecurrences' => 
  array (
    0 => 'mixed',
  ),
  'dateperiod::getstartdate' => 
  array (
    0 => 'mixed',
  ),
  'datetime::__construct' => 
  array (
    0 => 'void',
    'time=' => 'mixed',
    'timezone=' => 'mixed',
  ),
  'datetime::__set_state' => 
  array (
    0 => 'mixed',
    'array' => 'array<array-key, mixed>',
  ),
  'datetime::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'datetime::add' => 
  array (
    0 => 'mixed',
    'interval' => 'mixed',
  ),
  'datetime::createfromformat' => 
  array (
    0 => 'mixed',
    'format' => 'mixed',
    'time' => 'mixed',
    'object=' => 'DateTimeZone|null',
  ),
  'datetime::createfromimmutable' => 
  array (
    0 => 'mixed',
    'DateTimeImmutable' => 'mixed',
  ),
  'datetime::diff' => 
  array (
    0 => 'mixed',
    'object' => 'mixed',
    'absolute=' => 'mixed',
  ),
  'datetime::format' => 
  array (
    0 => 'mixed',
    'format' => 'mixed',
  ),
  'datetime::getlasterrors' => 
  array (
    0 => 'mixed',
  ),
  'datetime::getoffset' => 
  array (
    0 => 'mixed',
  ),
  'datetime::gettimestamp' => 
  array (
    0 => 'mixed',
  ),
  'datetime::gettimezone' => 
  array (
    0 => 'mixed',
  ),
  'datetime::modify' => 
  array (
    0 => 'mixed',
    'modify' => 'mixed',
  ),
  'datetime::setdate' => 
  array (
    0 => 'mixed',
    'year' => 'mixed',
    'month' => 'mixed',
    'day' => 'mixed',
  ),
  'datetime::setisodate' => 
  array (
    0 => 'mixed',
    'year' => 'mixed',
    'week' => 'mixed',
    'day=' => 'mixed',
  ),
  'datetime::settime' => 
  array (
    0 => 'mixed',
    'hour' => 'mixed',
    'minute' => 'mixed',
    'second=' => 'mixed',
    'microseconds=' => 'mixed',
  ),
  'datetime::settimestamp' => 
  array (
    0 => 'mixed',
    'unixtimestamp' => 'mixed',
  ),
  'datetime::settimezone' => 
  array (
    0 => 'mixed',
    'timezone' => 'mixed',
  ),
  'datetime::sub' => 
  array (
    0 => 'mixed',
    'interval' => 'mixed',
  ),
  'datetimeimmutable::__construct' => 
  array (
    0 => 'void',
    'time=' => 'mixed',
    'timezone=' => 'mixed',
  ),
  'datetimeimmutable::__set_state' => 
  array (
    0 => 'mixed',
    'array' => 'array<array-key, mixed>',
  ),
  'datetimeimmutable::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'datetimeimmutable::add' => 
  array (
    0 => 'mixed',
    'interval' => 'mixed',
  ),
  'datetimeimmutable::createfromformat' => 
  array (
    0 => 'mixed',
    'format' => 'mixed',
    'time' => 'mixed',
    'object=' => 'DateTimeZone|null',
  ),
  'datetimeimmutable::createfrommutable' => 
  array (
    0 => 'mixed',
    'DateTime' => 'mixed',
  ),
  'datetimeimmutable::diff' => 
  array (
    0 => 'mixed',
    'object' => 'mixed',
    'absolute=' => 'mixed',
  ),
  'datetimeimmutable::format' => 
  array (
    0 => 'mixed',
    'format' => 'mixed',
  ),
  'datetimeimmutable::getlasterrors' => 
  array (
    0 => 'mixed',
  ),
  'datetimeimmutable::getoffset' => 
  array (
    0 => 'mixed',
  ),
  'datetimeimmutable::gettimestamp' => 
  array (
    0 => 'mixed',
  ),
  'datetimeimmutable::gettimezone' => 
  array (
    0 => 'mixed',
  ),
  'datetimeimmutable::modify' => 
  array (
    0 => 'mixed',
    'modify' => 'mixed',
  ),
  'datetimeimmutable::setdate' => 
  array (
    0 => 'mixed',
    'year' => 'mixed',
    'month' => 'mixed',
    'day' => 'mixed',
  ),
  'datetimeimmutable::setisodate' => 
  array (
    0 => 'mixed',
    'year' => 'mixed',
    'week' => 'mixed',
    'day=' => 'mixed',
  ),
  'datetimeimmutable::settime' => 
  array (
    0 => 'mixed',
    'hour' => 'mixed',
    'minute' => 'mixed',
    'second=' => 'mixed',
    'microseconds=' => 'mixed',
  ),
  'datetimeimmutable::settimestamp' => 
  array (
    0 => 'mixed',
    'unixtimestamp' => 'mixed',
  ),
  'datetimeimmutable::settimezone' => 
  array (
    0 => 'mixed',
    'timezone' => 'mixed',
  ),
  'datetimeimmutable::sub' => 
  array (
    0 => 'mixed',
    'interval' => 'mixed',
  ),
  'datetimezone::__construct' => 
  array (
    0 => 'void',
    'timezone' => 'mixed',
  ),
  'datetimezone::__set_state' => 
  array (
    0 => 'mixed',
    'array' => 'array<array-key, mixed>',
  ),
  'datetimezone::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'datetimezone::getlocation' => 
  array (
    0 => 'mixed',
  ),
  'datetimezone::getname' => 
  array (
    0 => 'mixed',
  ),
  'datetimezone::getoffset' => 
  array (
    0 => 'mixed',
    'object' => 'mixed',
  ),
  'datetimezone::gettransitions' => 
  array (
    0 => 'mixed',
    'timestamp_begin=' => 'mixed',
    'timestamp_end=' => 'mixed',
  ),
  'datetimezone::listabbreviations' => 
  array (
    0 => 'mixed',
  ),
  'datetimezone::listidentifiers' => 
  array (
    0 => 'mixed',
    'what=' => 'mixed',
    'country=' => 'mixed',
  ),
  'debug_backtrace' => 
  array (
    0 => 'mixed',
    'options=' => 'mixed',
    'limit=' => 'mixed',
  ),
  'debug_print_backtrace' => 
  array (
    0 => 'mixed',
    'options=' => 'mixed',
    'limit=' => 'mixed',
  ),
  'debug_zval_dump' => 
  array (
    0 => 'void',
    'value' => 'mixed',
    '...values=' => 'mixed',
  ),
  'decbin' => 
  array (
    0 => 'mixed',
    'decimal_number' => 'mixed',
  ),
  'dechex' => 
  array (
    0 => 'mixed',
    'decimal_number' => 'mixed',
  ),
  'decoct' => 
  array (
    0 => 'mixed',
    'decimal_number' => 'mixed',
  ),
  'defer' => 
  array (
    0 => 'mixed',
    'callback' => 'callable',
  ),
  'define' => 
  array (
    0 => 'mixed',
    'constant_name' => 'mixed',
    'value' => 'mixed',
    'case_insensitive=' => 'mixed',
  ),
  'defined' => 
  array (
    0 => 'mixed',
    'constant_name' => 'mixed',
  ),
  'deflate_add' => 
  array (
    0 => 'mixed',
    'resource' => 'mixed',
    'add' => 'mixed',
    'flush_behavior=' => 'mixed',
  ),
  'deflate_init' => 
  array (
    0 => 'mixed',
    'encoding' => 'mixed',
    'level=' => 'mixed',
  ),
  'deg2rad' => 
  array (
    0 => 'mixed',
    'number' => 'mixed',
  ),
  'dir' => 
  array (
    0 => 'mixed',
    'directory' => 'mixed',
    'context=' => 'mixed',
  ),
  'directory::close' => 
  array (
    0 => 'mixed',
    'dir_handle=' => 'mixed',
  ),
  'directory::read' => 
  array (
    0 => 'mixed',
    'dir_handle=' => 'mixed',
  ),
  'directory::rewind' => 
  array (
    0 => 'mixed',
    'dir_handle=' => 'mixed',
  ),
  'directoryiterator::__construct' => 
  array (
    0 => 'void',
    'path' => 'mixed',
  ),
  'directoryiterator::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'directoryiterator::_bad_state_ex' => 
  array (
    0 => 'mixed',
  ),
  'directoryiterator::current' => 
  array (
    0 => 'mixed',
  ),
  'directoryiterator::getatime' => 
  array (
    0 => 'mixed',
  ),
  'directoryiterator::getbasename' => 
  array (
    0 => 'mixed',
    'suffix=' => 'mixed',
  ),
  'directoryiterator::getctime' => 
  array (
    0 => 'mixed',
  ),
  'directoryiterator::getextension' => 
  array (
    0 => 'mixed',
  ),
  'directoryiterator::getfileinfo' => 
  array (
    0 => 'mixed',
    'class_name=' => 'mixed',
  ),
  'directoryiterator::getfilename' => 
  array (
    0 => 'mixed',
  ),
  'directoryiterator::getgroup' => 
  array (
    0 => 'mixed',
  ),
  'directoryiterator::getinode' => 
  array (
    0 => 'mixed',
  ),
  'directoryiterator::getlinktarget' => 
  array (
    0 => 'mixed',
  ),
  'directoryiterator::getmtime' => 
  array (
    0 => 'mixed',
  ),
  'directoryiterator::getowner' => 
  array (
    0 => 'mixed',
  ),
  'directoryiterator::getpath' => 
  array (
    0 => 'mixed',
  ),
  'directoryiterator::getpathinfo' => 
  array (
    0 => 'mixed',
    'class_name=' => 'mixed',
  ),
  'directoryiterator::getpathname' => 
  array (
    0 => 'mixed',
  ),
  'directoryiterator::getperms' => 
  array (
    0 => 'mixed',
  ),
  'directoryiterator::getrealpath' => 
  array (
    0 => 'mixed',
  ),
  'directoryiterator::getsize' => 
  array (
    0 => 'mixed',
  ),
  'directoryiterator::gettype' => 
  array (
    0 => 'mixed',
  ),
  'directoryiterator::isdir' => 
  array (
    0 => 'mixed',
  ),
  'directoryiterator::isdot' => 
  array (
    0 => 'mixed',
  ),
  'directoryiterator::isexecutable' => 
  array (
    0 => 'mixed',
  ),
  'directoryiterator::isfile' => 
  array (
    0 => 'mixed',
  ),
  'directoryiterator::islink' => 
  array (
    0 => 'mixed',
  ),
  'directoryiterator::isreadable' => 
  array (
    0 => 'mixed',
  ),
  'directoryiterator::iswritable' => 
  array (
    0 => 'mixed',
  ),
  'directoryiterator::key' => 
  array (
    0 => 'mixed',
  ),
  'directoryiterator::next' => 
  array (
    0 => 'mixed',
  ),
  'directoryiterator::openfile' => 
  array (
    0 => 'mixed',
    'open_mode=' => 'mixed',
    'use_include_path=' => 'mixed',
    'context=' => 'mixed',
  ),
  'directoryiterator::rewind' => 
  array (
    0 => 'mixed',
  ),
  'directoryiterator::seek' => 
  array (
    0 => 'mixed',
    'position' => 'mixed',
  ),
  'directoryiterator::setfileclass' => 
  array (
    0 => 'mixed',
    'class_name=' => 'mixed',
  ),
  'directoryiterator::setinfoclass' => 
  array (
    0 => 'mixed',
    'class_name=' => 'mixed',
  ),
  'directoryiterator::valid' => 
  array (
    0 => 'mixed',
  ),
  'dirname' => 
  array (
    0 => 'mixed',
    'path' => 'mixed',
    'levels=' => 'mixed',
  ),
  'disk_free_space' => 
  array (
    0 => 'mixed',
    'path' => 'mixed',
  ),
  'disk_total_space' => 
  array (
    0 => 'mixed',
    'path' => 'mixed',
  ),
  'diskfreespace' => 
  array (
    0 => 'mixed',
    'path' => 'mixed',
  ),
  'divisionbyzeroerror::__clone' => 
  array (
    0 => 'mixed',
  ),
  'divisionbyzeroerror::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'divisionbyzeroerror::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'divisionbyzeroerror::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'divisionbyzeroerror::getcode' => 
  array (
    0 => 'mixed',
  ),
  'divisionbyzeroerror::getfile' => 
  array (
    0 => 'mixed',
  ),
  'divisionbyzeroerror::getline' => 
  array (
    0 => 'mixed',
  ),
  'divisionbyzeroerror::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'divisionbyzeroerror::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'divisionbyzeroerror::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'divisionbyzeroerror::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'dl' => 
  array (
    0 => 'mixed',
    'extension_filename' => 'mixed',
  ),
  'dns_check_record' => 
  array (
    0 => 'mixed',
    'host' => 'mixed',
    'type=' => 'mixed',
  ),
  'dns_get_mx' => 
  array (
    0 => 'mixed',
    'hostname' => 'mixed',
    '&mxhosts' => 'mixed',
    '&weight=' => 'mixed',
  ),
  'dns_get_record' => 
  array (
    0 => 'mixed',
    'hostname' => 'mixed',
    'type=' => 'mixed',
    '&authns=' => 'array<array-key, mixed>|null',
    '&addtl=' => 'array<array-key, mixed>|null',
    'raw=' => 'mixed',
  ),
  'dom_import_simplexml' => 
  array (
    0 => 'mixed',
    'node' => 'mixed',
  ),
  'domainexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'domainexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'domainexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'domainexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'domainexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'domainexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'domainexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'domainexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'domainexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'domainexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'domainexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'domattr::__construct' => 
  array (
    0 => 'void',
    'name' => 'mixed',
    'value=' => 'mixed',
  ),
  'domattr::appendchild' => 
  array (
    0 => 'mixed',
    'newChild' => 'DOMNode',
  ),
  'domattr::c14n' => 
  array (
    0 => 'mixed',
    'exclusive=' => 'mixed',
    'with_comments=' => 'mixed',
    'xpath=' => 'array<array-key, mixed>|null',
    'ns_prefixes=' => 'array<array-key, mixed>|null',
  ),
  'domattr::c14nfile' => 
  array (
    0 => 'mixed',
    'uri' => 'mixed',
    'exclusive=' => 'mixed',
    'with_comments=' => 'mixed',
    'xpath=' => 'array<array-key, mixed>|null',
    'ns_prefixes=' => 'array<array-key, mixed>|null',
  ),
  'domattr::clonenode' => 
  array (
    0 => 'mixed',
    'deep=' => 'mixed',
  ),
  'domattr::comparedocumentposition' => 
  array (
    0 => 'mixed',
    'other' => 'DOMNode',
  ),
  'domattr::getfeature' => 
  array (
    0 => 'mixed',
    'feature' => 'mixed',
    'version' => 'mixed',
  ),
  'domattr::getlineno' => 
  array (
    0 => 'mixed',
  ),
  'domattr::getnodepath' => 
  array (
    0 => 'mixed',
  ),
  'domattr::getuserdata' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'domattr::hasattributes' => 
  array (
    0 => 'mixed',
  ),
  'domattr::haschildnodes' => 
  array (
    0 => 'mixed',
  ),
  'domattr::insertbefore' => 
  array (
    0 => 'mixed',
    'newChild' => 'DOMNode',
    'refChild=' => 'DOMNode|null',
  ),
  'domattr::isdefaultnamespace' => 
  array (
    0 => 'mixed',
    'namespaceURI' => 'mixed',
  ),
  'domattr::isequalnode' => 
  array (
    0 => 'mixed',
    'arg' => 'DOMNode',
  ),
  'domattr::isid' => 
  array (
    0 => 'mixed',
  ),
  'domattr::issamenode' => 
  array (
    0 => 'mixed',
    'other' => 'DOMNode',
  ),
  'domattr::issupported' => 
  array (
    0 => 'mixed',
    'feature' => 'mixed',
    'version' => 'mixed',
  ),
  'domattr::lookupnamespaceuri' => 
  array (
    0 => 'mixed',
    'prefix' => 'mixed',
  ),
  'domattr::lookupprefix' => 
  array (
    0 => 'mixed',
    'namespaceURI' => 'mixed',
  ),
  'domattr::normalize' => 
  array (
    0 => 'mixed',
  ),
  'domattr::removechild' => 
  array (
    0 => 'mixed',
    'oldChild' => 'DOMNode',
  ),
  'domattr::replacechild' => 
  array (
    0 => 'mixed',
    'newChild' => 'DOMNode',
    'oldChild' => 'DOMNode',
  ),
  'domattr::setuserdata' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'data' => 'mixed',
    'handler' => 'mixed',
  ),
  'domcdatasection::__construct' => 
  array (
    0 => 'void',
    'value' => 'mixed',
  ),
  'domcdatasection::appendchild' => 
  array (
    0 => 'mixed',
    'newChild' => 'DOMNode',
  ),
  'domcdatasection::appenddata' => 
  array (
    0 => 'mixed',
    'arg' => 'mixed',
  ),
  'domcdatasection::c14n' => 
  array (
    0 => 'mixed',
    'exclusive=' => 'mixed',
    'with_comments=' => 'mixed',
    'xpath=' => 'array<array-key, mixed>|null',
    'ns_prefixes=' => 'array<array-key, mixed>|null',
  ),
  'domcdatasection::c14nfile' => 
  array (
    0 => 'mixed',
    'uri' => 'mixed',
    'exclusive=' => 'mixed',
    'with_comments=' => 'mixed',
    'xpath=' => 'array<array-key, mixed>|null',
    'ns_prefixes=' => 'array<array-key, mixed>|null',
  ),
  'domcdatasection::clonenode' => 
  array (
    0 => 'mixed',
    'deep=' => 'mixed',
  ),
  'domcdatasection::comparedocumentposition' => 
  array (
    0 => 'mixed',
    'other' => 'DOMNode',
  ),
  'domcdatasection::deletedata' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
    'count' => 'mixed',
  ),
  'domcdatasection::getfeature' => 
  array (
    0 => 'mixed',
    'feature' => 'mixed',
    'version' => 'mixed',
  ),
  'domcdatasection::getlineno' => 
  array (
    0 => 'mixed',
  ),
  'domcdatasection::getnodepath' => 
  array (
    0 => 'mixed',
  ),
  'domcdatasection::getuserdata' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'domcdatasection::hasattributes' => 
  array (
    0 => 'mixed',
  ),
  'domcdatasection::haschildnodes' => 
  array (
    0 => 'mixed',
  ),
  'domcdatasection::insertbefore' => 
  array (
    0 => 'mixed',
    'newChild' => 'DOMNode',
    'refChild=' => 'DOMNode|null',
  ),
  'domcdatasection::insertdata' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
    'arg' => 'mixed',
  ),
  'domcdatasection::isdefaultnamespace' => 
  array (
    0 => 'mixed',
    'namespaceURI' => 'mixed',
  ),
  'domcdatasection::iselementcontentwhitespace' => 
  array (
    0 => 'mixed',
  ),
  'domcdatasection::isequalnode' => 
  array (
    0 => 'mixed',
    'arg' => 'DOMNode',
  ),
  'domcdatasection::issamenode' => 
  array (
    0 => 'mixed',
    'other' => 'DOMNode',
  ),
  'domcdatasection::issupported' => 
  array (
    0 => 'mixed',
    'feature' => 'mixed',
    'version' => 'mixed',
  ),
  'domcdatasection::iswhitespaceinelementcontent' => 
  array (
    0 => 'mixed',
  ),
  'domcdatasection::lookupnamespaceuri' => 
  array (
    0 => 'mixed',
    'prefix' => 'mixed',
  ),
  'domcdatasection::lookupprefix' => 
  array (
    0 => 'mixed',
    'namespaceURI' => 'mixed',
  ),
  'domcdatasection::normalize' => 
  array (
    0 => 'mixed',
  ),
  'domcdatasection::removechild' => 
  array (
    0 => 'mixed',
    'oldChild' => 'DOMNode',
  ),
  'domcdatasection::replacechild' => 
  array (
    0 => 'mixed',
    'newChild' => 'DOMNode',
    'oldChild' => 'DOMNode',
  ),
  'domcdatasection::replacedata' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
    'count' => 'mixed',
    'arg' => 'mixed',
  ),
  'domcdatasection::replacewholetext' => 
  array (
    0 => 'mixed',
    'content' => 'mixed',
  ),
  'domcdatasection::setuserdata' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'data' => 'mixed',
    'handler' => 'mixed',
  ),
  'domcdatasection::splittext' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
  ),
  'domcdatasection::substringdata' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
    'count' => 'mixed',
  ),
  'domcharacterdata::appendchild' => 
  array (
    0 => 'mixed',
    'newChild' => 'DOMNode',
  ),
  'domcharacterdata::appenddata' => 
  array (
    0 => 'mixed',
    'arg' => 'mixed',
  ),
  'domcharacterdata::c14n' => 
  array (
    0 => 'mixed',
    'exclusive=' => 'mixed',
    'with_comments=' => 'mixed',
    'xpath=' => 'array<array-key, mixed>|null',
    'ns_prefixes=' => 'array<array-key, mixed>|null',
  ),
  'domcharacterdata::c14nfile' => 
  array (
    0 => 'mixed',
    'uri' => 'mixed',
    'exclusive=' => 'mixed',
    'with_comments=' => 'mixed',
    'xpath=' => 'array<array-key, mixed>|null',
    'ns_prefixes=' => 'array<array-key, mixed>|null',
  ),
  'domcharacterdata::clonenode' => 
  array (
    0 => 'mixed',
    'deep=' => 'mixed',
  ),
  'domcharacterdata::comparedocumentposition' => 
  array (
    0 => 'mixed',
    'other' => 'DOMNode',
  ),
  'domcharacterdata::deletedata' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
    'count' => 'mixed',
  ),
  'domcharacterdata::getfeature' => 
  array (
    0 => 'mixed',
    'feature' => 'mixed',
    'version' => 'mixed',
  ),
  'domcharacterdata::getlineno' => 
  array (
    0 => 'mixed',
  ),
  'domcharacterdata::getnodepath' => 
  array (
    0 => 'mixed',
  ),
  'domcharacterdata::getuserdata' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'domcharacterdata::hasattributes' => 
  array (
    0 => 'mixed',
  ),
  'domcharacterdata::haschildnodes' => 
  array (
    0 => 'mixed',
  ),
  'domcharacterdata::insertbefore' => 
  array (
    0 => 'mixed',
    'newChild' => 'DOMNode',
    'refChild=' => 'DOMNode|null',
  ),
  'domcharacterdata::insertdata' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
    'arg' => 'mixed',
  ),
  'domcharacterdata::isdefaultnamespace' => 
  array (
    0 => 'mixed',
    'namespaceURI' => 'mixed',
  ),
  'domcharacterdata::isequalnode' => 
  array (
    0 => 'mixed',
    'arg' => 'DOMNode',
  ),
  'domcharacterdata::issamenode' => 
  array (
    0 => 'mixed',
    'other' => 'DOMNode',
  ),
  'domcharacterdata::issupported' => 
  array (
    0 => 'mixed',
    'feature' => 'mixed',
    'version' => 'mixed',
  ),
  'domcharacterdata::lookupnamespaceuri' => 
  array (
    0 => 'mixed',
    'prefix' => 'mixed',
  ),
  'domcharacterdata::lookupprefix' => 
  array (
    0 => 'mixed',
    'namespaceURI' => 'mixed',
  ),
  'domcharacterdata::normalize' => 
  array (
    0 => 'mixed',
  ),
  'domcharacterdata::removechild' => 
  array (
    0 => 'mixed',
    'oldChild' => 'DOMNode',
  ),
  'domcharacterdata::replacechild' => 
  array (
    0 => 'mixed',
    'newChild' => 'DOMNode',
    'oldChild' => 'DOMNode',
  ),
  'domcharacterdata::replacedata' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
    'count' => 'mixed',
    'arg' => 'mixed',
  ),
  'domcharacterdata::setuserdata' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'data' => 'mixed',
    'handler' => 'mixed',
  ),
  'domcharacterdata::substringdata' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
    'count' => 'mixed',
  ),
  'domcomment::__construct' => 
  array (
    0 => 'void',
    'value=' => 'mixed',
  ),
  'domcomment::appendchild' => 
  array (
    0 => 'mixed',
    'newChild' => 'DOMNode',
  ),
  'domcomment::appenddata' => 
  array (
    0 => 'mixed',
    'arg' => 'mixed',
  ),
  'domcomment::c14n' => 
  array (
    0 => 'mixed',
    'exclusive=' => 'mixed',
    'with_comments=' => 'mixed',
    'xpath=' => 'array<array-key, mixed>|null',
    'ns_prefixes=' => 'array<array-key, mixed>|null',
  ),
  'domcomment::c14nfile' => 
  array (
    0 => 'mixed',
    'uri' => 'mixed',
    'exclusive=' => 'mixed',
    'with_comments=' => 'mixed',
    'xpath=' => 'array<array-key, mixed>|null',
    'ns_prefixes=' => 'array<array-key, mixed>|null',
  ),
  'domcomment::clonenode' => 
  array (
    0 => 'mixed',
    'deep=' => 'mixed',
  ),
  'domcomment::comparedocumentposition' => 
  array (
    0 => 'mixed',
    'other' => 'DOMNode',
  ),
  'domcomment::deletedata' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
    'count' => 'mixed',
  ),
  'domcomment::getfeature' => 
  array (
    0 => 'mixed',
    'feature' => 'mixed',
    'version' => 'mixed',
  ),
  'domcomment::getlineno' => 
  array (
    0 => 'mixed',
  ),
  'domcomment::getnodepath' => 
  array (
    0 => 'mixed',
  ),
  'domcomment::getuserdata' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'domcomment::hasattributes' => 
  array (
    0 => 'mixed',
  ),
  'domcomment::haschildnodes' => 
  array (
    0 => 'mixed',
  ),
  'domcomment::insertbefore' => 
  array (
    0 => 'mixed',
    'newChild' => 'DOMNode',
    'refChild=' => 'DOMNode|null',
  ),
  'domcomment::insertdata' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
    'arg' => 'mixed',
  ),
  'domcomment::isdefaultnamespace' => 
  array (
    0 => 'mixed',
    'namespaceURI' => 'mixed',
  ),
  'domcomment::isequalnode' => 
  array (
    0 => 'mixed',
    'arg' => 'DOMNode',
  ),
  'domcomment::issamenode' => 
  array (
    0 => 'mixed',
    'other' => 'DOMNode',
  ),
  'domcomment::issupported' => 
  array (
    0 => 'mixed',
    'feature' => 'mixed',
    'version' => 'mixed',
  ),
  'domcomment::lookupnamespaceuri' => 
  array (
    0 => 'mixed',
    'prefix' => 'mixed',
  ),
  'domcomment::lookupprefix' => 
  array (
    0 => 'mixed',
    'namespaceURI' => 'mixed',
  ),
  'domcomment::normalize' => 
  array (
    0 => 'mixed',
  ),
  'domcomment::removechild' => 
  array (
    0 => 'mixed',
    'oldChild' => 'DOMNode',
  ),
  'domcomment::replacechild' => 
  array (
    0 => 'mixed',
    'newChild' => 'DOMNode',
    'oldChild' => 'DOMNode',
  ),
  'domcomment::replacedata' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
    'count' => 'mixed',
    'arg' => 'mixed',
  ),
  'domcomment::setuserdata' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'data' => 'mixed',
    'handler' => 'mixed',
  ),
  'domcomment::substringdata' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
    'count' => 'mixed',
  ),
  'domconfiguration::cansetparameter' => 
  array (
    0 => 'mixed',
    'name=' => 'mixed',
    'value=' => 'mixed',
  ),
  'domconfiguration::getparameter' => 
  array (
    0 => 'mixed',
    'name=' => 'mixed',
  ),
  'domconfiguration::setparameter' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
    'value' => 'mixed',
  ),
  'domdocument::__construct' => 
  array (
    0 => 'void',
    'version=' => 'mixed',
    'encoding=' => 'mixed',
  ),
  'domdocument::adoptnode' => 
  array (
    0 => 'mixed',
    'source' => 'DOMNode',
  ),
  'domdocument::appendchild' => 
  array (
    0 => 'mixed',
    'newChild' => 'DOMNode',
  ),
  'domdocument::c14n' => 
  array (
    0 => 'mixed',
    'exclusive=' => 'mixed',
    'with_comments=' => 'mixed',
    'xpath=' => 'array<array-key, mixed>|null',
    'ns_prefixes=' => 'array<array-key, mixed>|null',
  ),
  'domdocument::c14nfile' => 
  array (
    0 => 'mixed',
    'uri' => 'mixed',
    'exclusive=' => 'mixed',
    'with_comments=' => 'mixed',
    'xpath=' => 'array<array-key, mixed>|null',
    'ns_prefixes=' => 'array<array-key, mixed>|null',
  ),
  'domdocument::clonenode' => 
  array (
    0 => 'mixed',
    'deep=' => 'mixed',
  ),
  'domdocument::comparedocumentposition' => 
  array (
    0 => 'mixed',
    'other' => 'DOMNode',
  ),
  'domdocument::createattribute' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
  ),
  'domdocument::createattributens' => 
  array (
    0 => 'mixed',
    'namespaceURI' => 'mixed',
    'qualifiedName' => 'mixed',
  ),
  'domdocument::createcdatasection' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
  ),
  'domdocument::createcomment' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
  ),
  'domdocument::createdocumentfragment' => 
  array (
    0 => 'mixed',
  ),
  'domdocument::createelement' => 
  array (
    0 => 'mixed',
    'tagName' => 'mixed',
    'value=' => 'mixed',
  ),
  'domdocument::createelementns' => 
  array (
    0 => 'mixed',
    'namespaceURI' => 'mixed',
    'qualifiedName' => 'mixed',
    'value=' => 'mixed',
  ),
  'domdocument::createentityreference' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
  ),
  'domdocument::createprocessinginstruction' => 
  array (
    0 => 'mixed',
    'target' => 'mixed',
    'data' => 'mixed',
  ),
  'domdocument::createtextnode' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
  ),
  'domdocument::getelementbyid' => 
  array (
    0 => 'mixed',
    'elementId' => 'mixed',
  ),
  'domdocument::getelementsbytagname' => 
  array (
    0 => 'mixed',
    'tagName' => 'mixed',
  ),
  'domdocument::getelementsbytagnamens' => 
  array (
    0 => 'mixed',
    'namespaceURI' => 'mixed',
    'localName' => 'mixed',
  ),
  'domdocument::getfeature' => 
  array (
    0 => 'mixed',
    'feature' => 'mixed',
    'version' => 'mixed',
  ),
  'domdocument::getlineno' => 
  array (
    0 => 'mixed',
  ),
  'domdocument::getnodepath' => 
  array (
    0 => 'mixed',
  ),
  'domdocument::getuserdata' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'domdocument::hasattributes' => 
  array (
    0 => 'mixed',
  ),
  'domdocument::haschildnodes' => 
  array (
    0 => 'mixed',
  ),
  'domdocument::importnode' => 
  array (
    0 => 'mixed',
    'importedNode' => 'DOMNode',
    'deep' => 'mixed',
  ),
  'domdocument::insertbefore' => 
  array (
    0 => 'mixed',
    'newChild' => 'DOMNode',
    'refChild=' => 'DOMNode|null',
  ),
  'domdocument::isdefaultnamespace' => 
  array (
    0 => 'mixed',
    'namespaceURI' => 'mixed',
  ),
  'domdocument::isequalnode' => 
  array (
    0 => 'mixed',
    'arg' => 'DOMNode',
  ),
  'domdocument::issamenode' => 
  array (
    0 => 'mixed',
    'other' => 'DOMNode',
  ),
  'domdocument::issupported' => 
  array (
    0 => 'mixed',
    'feature' => 'mixed',
    'version' => 'mixed',
  ),
  'domdocument::load' => 
  array (
    0 => 'mixed',
    'source' => 'mixed',
    'options=' => 'mixed',
  ),
  'domdocument::loadhtml' => 
  array (
    0 => 'mixed',
    'source' => 'mixed',
    'options=' => 'mixed',
  ),
  'domdocument::loadhtmlfile' => 
  array (
    0 => 'mixed',
    'source' => 'mixed',
    'options=' => 'mixed',
  ),
  'domdocument::loadxml' => 
  array (
    0 => 'mixed',
    'source' => 'mixed',
    'options=' => 'mixed',
  ),
  'domdocument::lookupnamespaceuri' => 
  array (
    0 => 'mixed',
    'prefix' => 'mixed',
  ),
  'domdocument::lookupprefix' => 
  array (
    0 => 'mixed',
    'namespaceURI' => 'mixed',
  ),
  'domdocument::normalize' => 
  array (
    0 => 'mixed',
  ),
  'domdocument::normalizedocument' => 
  array (
    0 => 'mixed',
  ),
  'domdocument::registernodeclass' => 
  array (
    0 => 'mixed',
    'baseClass' => 'mixed',
    'extendedClass' => 'mixed',
  ),
  'domdocument::relaxngvalidate' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'domdocument::relaxngvalidatesource' => 
  array (
    0 => 'mixed',
    'source' => 'mixed',
  ),
  'domdocument::removechild' => 
  array (
    0 => 'mixed',
    'oldChild' => 'DOMNode',
  ),
  'domdocument::renamenode' => 
  array (
    0 => 'mixed',
    'node' => 'DOMNode',
    'namespaceURI' => 'mixed',
    'qualifiedName' => 'mixed',
  ),
  'domdocument::replacechild' => 
  array (
    0 => 'mixed',
    'newChild' => 'DOMNode',
    'oldChild' => 'DOMNode',
  ),
  'domdocument::save' => 
  array (
    0 => 'mixed',
    'file' => 'mixed',
  ),
  'domdocument::savehtml' => 
  array (
    0 => 'mixed',
  ),
  'domdocument::savehtmlfile' => 
  array (
    0 => 'mixed',
    'file' => 'mixed',
  ),
  'domdocument::savexml' => 
  array (
    0 => 'mixed',
    'node=' => 'DOMNode|null',
    'options=' => 'mixed',
  ),
  'domdocument::schemavalidate' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'domdocument::schemavalidatesource' => 
  array (
    0 => 'mixed',
    'source' => 'mixed',
  ),
  'domdocument::setuserdata' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'data' => 'mixed',
    'handler' => 'mixed',
  ),
  'domdocument::validate' => 
  array (
    0 => 'mixed',
  ),
  'domdocument::xinclude' => 
  array (
    0 => 'mixed',
    'options=' => 'mixed',
  ),
  'domdocumentfragment::__construct' => 
  array (
    0 => 'void',
  ),
  'domdocumentfragment::appendchild' => 
  array (
    0 => 'mixed',
    'newChild' => 'DOMNode',
  ),
  'domdocumentfragment::appendxml' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
  ),
  'domdocumentfragment::c14n' => 
  array (
    0 => 'mixed',
    'exclusive=' => 'mixed',
    'with_comments=' => 'mixed',
    'xpath=' => 'array<array-key, mixed>|null',
    'ns_prefixes=' => 'array<array-key, mixed>|null',
  ),
  'domdocumentfragment::c14nfile' => 
  array (
    0 => 'mixed',
    'uri' => 'mixed',
    'exclusive=' => 'mixed',
    'with_comments=' => 'mixed',
    'xpath=' => 'array<array-key, mixed>|null',
    'ns_prefixes=' => 'array<array-key, mixed>|null',
  ),
  'domdocumentfragment::clonenode' => 
  array (
    0 => 'mixed',
    'deep=' => 'mixed',
  ),
  'domdocumentfragment::comparedocumentposition' => 
  array (
    0 => 'mixed',
    'other' => 'DOMNode',
  ),
  'domdocumentfragment::getfeature' => 
  array (
    0 => 'mixed',
    'feature' => 'mixed',
    'version' => 'mixed',
  ),
  'domdocumentfragment::getlineno' => 
  array (
    0 => 'mixed',
  ),
  'domdocumentfragment::getnodepath' => 
  array (
    0 => 'mixed',
  ),
  'domdocumentfragment::getuserdata' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'domdocumentfragment::hasattributes' => 
  array (
    0 => 'mixed',
  ),
  'domdocumentfragment::haschildnodes' => 
  array (
    0 => 'mixed',
  ),
  'domdocumentfragment::insertbefore' => 
  array (
    0 => 'mixed',
    'newChild' => 'DOMNode',
    'refChild=' => 'DOMNode|null',
  ),
  'domdocumentfragment::isdefaultnamespace' => 
  array (
    0 => 'mixed',
    'namespaceURI' => 'mixed',
  ),
  'domdocumentfragment::isequalnode' => 
  array (
    0 => 'mixed',
    'arg' => 'DOMNode',
  ),
  'domdocumentfragment::issamenode' => 
  array (
    0 => 'mixed',
    'other' => 'DOMNode',
  ),
  'domdocumentfragment::issupported' => 
  array (
    0 => 'mixed',
    'feature' => 'mixed',
    'version' => 'mixed',
  ),
  'domdocumentfragment::lookupnamespaceuri' => 
  array (
    0 => 'mixed',
    'prefix' => 'mixed',
  ),
  'domdocumentfragment::lookupprefix' => 
  array (
    0 => 'mixed',
    'namespaceURI' => 'mixed',
  ),
  'domdocumentfragment::normalize' => 
  array (
    0 => 'mixed',
  ),
  'domdocumentfragment::removechild' => 
  array (
    0 => 'mixed',
    'oldChild' => 'DOMNode',
  ),
  'domdocumentfragment::replacechild' => 
  array (
    0 => 'mixed',
    'newChild' => 'DOMNode',
    'oldChild' => 'DOMNode',
  ),
  'domdocumentfragment::setuserdata' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'data' => 'mixed',
    'handler' => 'mixed',
  ),
  'domdocumenttype::appendchild' => 
  array (
    0 => 'mixed',
    'newChild' => 'DOMNode',
  ),
  'domdocumenttype::c14n' => 
  array (
    0 => 'mixed',
    'exclusive=' => 'mixed',
    'with_comments=' => 'mixed',
    'xpath=' => 'array<array-key, mixed>|null',
    'ns_prefixes=' => 'array<array-key, mixed>|null',
  ),
  'domdocumenttype::c14nfile' => 
  array (
    0 => 'mixed',
    'uri' => 'mixed',
    'exclusive=' => 'mixed',
    'with_comments=' => 'mixed',
    'xpath=' => 'array<array-key, mixed>|null',
    'ns_prefixes=' => 'array<array-key, mixed>|null',
  ),
  'domdocumenttype::clonenode' => 
  array (
    0 => 'mixed',
    'deep=' => 'mixed',
  ),
  'domdocumenttype::comparedocumentposition' => 
  array (
    0 => 'mixed',
    'other' => 'DOMNode',
  ),
  'domdocumenttype::getfeature' => 
  array (
    0 => 'mixed',
    'feature' => 'mixed',
    'version' => 'mixed',
  ),
  'domdocumenttype::getlineno' => 
  array (
    0 => 'mixed',
  ),
  'domdocumenttype::getnodepath' => 
  array (
    0 => 'mixed',
  ),
  'domdocumenttype::getuserdata' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'domdocumenttype::hasattributes' => 
  array (
    0 => 'mixed',
  ),
  'domdocumenttype::haschildnodes' => 
  array (
    0 => 'mixed',
  ),
  'domdocumenttype::insertbefore' => 
  array (
    0 => 'mixed',
    'newChild' => 'DOMNode',
    'refChild=' => 'DOMNode|null',
  ),
  'domdocumenttype::isdefaultnamespace' => 
  array (
    0 => 'mixed',
    'namespaceURI' => 'mixed',
  ),
  'domdocumenttype::isequalnode' => 
  array (
    0 => 'mixed',
    'arg' => 'DOMNode',
  ),
  'domdocumenttype::issamenode' => 
  array (
    0 => 'mixed',
    'other' => 'DOMNode',
  ),
  'domdocumenttype::issupported' => 
  array (
    0 => 'mixed',
    'feature' => 'mixed',
    'version' => 'mixed',
  ),
  'domdocumenttype::lookupnamespaceuri' => 
  array (
    0 => 'mixed',
    'prefix' => 'mixed',
  ),
  'domdocumenttype::lookupprefix' => 
  array (
    0 => 'mixed',
    'namespaceURI' => 'mixed',
  ),
  'domdocumenttype::normalize' => 
  array (
    0 => 'mixed',
  ),
  'domdocumenttype::removechild' => 
  array (
    0 => 'mixed',
    'oldChild' => 'DOMNode',
  ),
  'domdocumenttype::replacechild' => 
  array (
    0 => 'mixed',
    'newChild' => 'DOMNode',
    'oldChild' => 'DOMNode',
  ),
  'domdocumenttype::setuserdata' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'data' => 'mixed',
    'handler' => 'mixed',
  ),
  'domelement::__construct' => 
  array (
    0 => 'void',
    'name' => 'mixed',
    'value=' => 'mixed',
    'uri=' => 'mixed',
  ),
  'domelement::appendchild' => 
  array (
    0 => 'mixed',
    'newChild' => 'DOMNode',
  ),
  'domelement::c14n' => 
  array (
    0 => 'mixed',
    'exclusive=' => 'mixed',
    'with_comments=' => 'mixed',
    'xpath=' => 'array<array-key, mixed>|null',
    'ns_prefixes=' => 'array<array-key, mixed>|null',
  ),
  'domelement::c14nfile' => 
  array (
    0 => 'mixed',
    'uri' => 'mixed',
    'exclusive=' => 'mixed',
    'with_comments=' => 'mixed',
    'xpath=' => 'array<array-key, mixed>|null',
    'ns_prefixes=' => 'array<array-key, mixed>|null',
  ),
  'domelement::clonenode' => 
  array (
    0 => 'mixed',
    'deep=' => 'mixed',
  ),
  'domelement::comparedocumentposition' => 
  array (
    0 => 'mixed',
    'other' => 'DOMNode',
  ),
  'domelement::getattribute' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
  ),
  'domelement::getattributenode' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
  ),
  'domelement::getattributenodens' => 
  array (
    0 => 'mixed',
    'namespaceURI' => 'mixed',
    'localName' => 'mixed',
  ),
  'domelement::getattributens' => 
  array (
    0 => 'mixed',
    'namespaceURI' => 'mixed',
    'localName' => 'mixed',
  ),
  'domelement::getelementsbytagname' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
  ),
  'domelement::getelementsbytagnamens' => 
  array (
    0 => 'mixed',
    'namespaceURI' => 'mixed',
    'localName' => 'mixed',
  ),
  'domelement::getfeature' => 
  array (
    0 => 'mixed',
    'feature' => 'mixed',
    'version' => 'mixed',
  ),
  'domelement::getlineno' => 
  array (
    0 => 'mixed',
  ),
  'domelement::getnodepath' => 
  array (
    0 => 'mixed',
  ),
  'domelement::getuserdata' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'domelement::hasattribute' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
  ),
  'domelement::hasattributens' => 
  array (
    0 => 'mixed',
    'namespaceURI' => 'mixed',
    'localName' => 'mixed',
  ),
  'domelement::hasattributes' => 
  array (
    0 => 'mixed',
  ),
  'domelement::haschildnodes' => 
  array (
    0 => 'mixed',
  ),
  'domelement::insertbefore' => 
  array (
    0 => 'mixed',
    'newChild' => 'DOMNode',
    'refChild=' => 'DOMNode|null',
  ),
  'domelement::isdefaultnamespace' => 
  array (
    0 => 'mixed',
    'namespaceURI' => 'mixed',
  ),
  'domelement::isequalnode' => 
  array (
    0 => 'mixed',
    'arg' => 'DOMNode',
  ),
  'domelement::issamenode' => 
  array (
    0 => 'mixed',
    'other' => 'DOMNode',
  ),
  'domelement::issupported' => 
  array (
    0 => 'mixed',
    'feature' => 'mixed',
    'version' => 'mixed',
  ),
  'domelement::lookupnamespaceuri' => 
  array (
    0 => 'mixed',
    'prefix' => 'mixed',
  ),
  'domelement::lookupprefix' => 
  array (
    0 => 'mixed',
    'namespaceURI' => 'mixed',
  ),
  'domelement::normalize' => 
  array (
    0 => 'mixed',
  ),
  'domelement::removeattribute' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
  ),
  'domelement::removeattributenode' => 
  array (
    0 => 'mixed',
    'oldAttr' => 'DOMAttr',
  ),
  'domelement::removeattributens' => 
  array (
    0 => 'mixed',
    'namespaceURI' => 'mixed',
    'localName' => 'mixed',
  ),
  'domelement::removechild' => 
  array (
    0 => 'mixed',
    'oldChild' => 'DOMNode',
  ),
  'domelement::replacechild' => 
  array (
    0 => 'mixed',
    'newChild' => 'DOMNode',
    'oldChild' => 'DOMNode',
  ),
  'domelement::setattribute' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
    'value' => 'mixed',
  ),
  'domelement::setattributenode' => 
  array (
    0 => 'mixed',
    'newAttr' => 'DOMAttr',
  ),
  'domelement::setattributenodens' => 
  array (
    0 => 'mixed',
    'newAttr' => 'DOMAttr',
  ),
  'domelement::setattributens' => 
  array (
    0 => 'mixed',
    'namespaceURI' => 'mixed',
    'qualifiedName' => 'mixed',
    'value' => 'mixed',
  ),
  'domelement::setidattribute' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
    'isId' => 'mixed',
  ),
  'domelement::setidattributenode' => 
  array (
    0 => 'mixed',
    'attr' => 'DOMAttr',
    'isId' => 'mixed',
  ),
  'domelement::setidattributens' => 
  array (
    0 => 'mixed',
    'namespaceURI' => 'mixed',
    'localName' => 'mixed',
    'isId' => 'mixed',
  ),
  'domelement::setuserdata' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'data' => 'mixed',
    'handler' => 'mixed',
  ),
  'domentity::appendchild' => 
  array (
    0 => 'mixed',
    'newChild' => 'DOMNode',
  ),
  'domentity::c14n' => 
  array (
    0 => 'mixed',
    'exclusive=' => 'mixed',
    'with_comments=' => 'mixed',
    'xpath=' => 'array<array-key, mixed>|null',
    'ns_prefixes=' => 'array<array-key, mixed>|null',
  ),
  'domentity::c14nfile' => 
  array (
    0 => 'mixed',
    'uri' => 'mixed',
    'exclusive=' => 'mixed',
    'with_comments=' => 'mixed',
    'xpath=' => 'array<array-key, mixed>|null',
    'ns_prefixes=' => 'array<array-key, mixed>|null',
  ),
  'domentity::clonenode' => 
  array (
    0 => 'mixed',
    'deep=' => 'mixed',
  ),
  'domentity::comparedocumentposition' => 
  array (
    0 => 'mixed',
    'other' => 'DOMNode',
  ),
  'domentity::getfeature' => 
  array (
    0 => 'mixed',
    'feature' => 'mixed',
    'version' => 'mixed',
  ),
  'domentity::getlineno' => 
  array (
    0 => 'mixed',
  ),
  'domentity::getnodepath' => 
  array (
    0 => 'mixed',
  ),
  'domentity::getuserdata' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'domentity::hasattributes' => 
  array (
    0 => 'mixed',
  ),
  'domentity::haschildnodes' => 
  array (
    0 => 'mixed',
  ),
  'domentity::insertbefore' => 
  array (
    0 => 'mixed',
    'newChild' => 'DOMNode',
    'refChild=' => 'DOMNode|null',
  ),
  'domentity::isdefaultnamespace' => 
  array (
    0 => 'mixed',
    'namespaceURI' => 'mixed',
  ),
  'domentity::isequalnode' => 
  array (
    0 => 'mixed',
    'arg' => 'DOMNode',
  ),
  'domentity::issamenode' => 
  array (
    0 => 'mixed',
    'other' => 'DOMNode',
  ),
  'domentity::issupported' => 
  array (
    0 => 'mixed',
    'feature' => 'mixed',
    'version' => 'mixed',
  ),
  'domentity::lookupnamespaceuri' => 
  array (
    0 => 'mixed',
    'prefix' => 'mixed',
  ),
  'domentity::lookupprefix' => 
  array (
    0 => 'mixed',
    'namespaceURI' => 'mixed',
  ),
  'domentity::normalize' => 
  array (
    0 => 'mixed',
  ),
  'domentity::removechild' => 
  array (
    0 => 'mixed',
    'oldChild' => 'DOMNode',
  ),
  'domentity::replacechild' => 
  array (
    0 => 'mixed',
    'newChild' => 'DOMNode',
    'oldChild' => 'DOMNode',
  ),
  'domentity::setuserdata' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'data' => 'mixed',
    'handler' => 'mixed',
  ),
  'domentityreference::__construct' => 
  array (
    0 => 'void',
    'name' => 'mixed',
  ),
  'domentityreference::appendchild' => 
  array (
    0 => 'mixed',
    'newChild' => 'DOMNode',
  ),
  'domentityreference::c14n' => 
  array (
    0 => 'mixed',
    'exclusive=' => 'mixed',
    'with_comments=' => 'mixed',
    'xpath=' => 'array<array-key, mixed>|null',
    'ns_prefixes=' => 'array<array-key, mixed>|null',
  ),
  'domentityreference::c14nfile' => 
  array (
    0 => 'mixed',
    'uri' => 'mixed',
    'exclusive=' => 'mixed',
    'with_comments=' => 'mixed',
    'xpath=' => 'array<array-key, mixed>|null',
    'ns_prefixes=' => 'array<array-key, mixed>|null',
  ),
  'domentityreference::clonenode' => 
  array (
    0 => 'mixed',
    'deep=' => 'mixed',
  ),
  'domentityreference::comparedocumentposition' => 
  array (
    0 => 'mixed',
    'other' => 'DOMNode',
  ),
  'domentityreference::getfeature' => 
  array (
    0 => 'mixed',
    'feature' => 'mixed',
    'version' => 'mixed',
  ),
  'domentityreference::getlineno' => 
  array (
    0 => 'mixed',
  ),
  'domentityreference::getnodepath' => 
  array (
    0 => 'mixed',
  ),
  'domentityreference::getuserdata' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'domentityreference::hasattributes' => 
  array (
    0 => 'mixed',
  ),
  'domentityreference::haschildnodes' => 
  array (
    0 => 'mixed',
  ),
  'domentityreference::insertbefore' => 
  array (
    0 => 'mixed',
    'newChild' => 'DOMNode',
    'refChild=' => 'DOMNode|null',
  ),
  'domentityreference::isdefaultnamespace' => 
  array (
    0 => 'mixed',
    'namespaceURI' => 'mixed',
  ),
  'domentityreference::isequalnode' => 
  array (
    0 => 'mixed',
    'arg' => 'DOMNode',
  ),
  'domentityreference::issamenode' => 
  array (
    0 => 'mixed',
    'other' => 'DOMNode',
  ),
  'domentityreference::issupported' => 
  array (
    0 => 'mixed',
    'feature' => 'mixed',
    'version' => 'mixed',
  ),
  'domentityreference::lookupnamespaceuri' => 
  array (
    0 => 'mixed',
    'prefix' => 'mixed',
  ),
  'domentityreference::lookupprefix' => 
  array (
    0 => 'mixed',
    'namespaceURI' => 'mixed',
  ),
  'domentityreference::normalize' => 
  array (
    0 => 'mixed',
  ),
  'domentityreference::removechild' => 
  array (
    0 => 'mixed',
    'oldChild' => 'DOMNode',
  ),
  'domentityreference::replacechild' => 
  array (
    0 => 'mixed',
    'newChild' => 'DOMNode',
    'oldChild' => 'DOMNode',
  ),
  'domentityreference::setuserdata' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'data' => 'mixed',
    'handler' => 'mixed',
  ),
  'domerrorhandler::handleerror' => 
  array (
    0 => 'mixed',
    'error' => 'DOMDomError',
  ),
  'domexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'domexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'domexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'domexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'domexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'domexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'domexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'domexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'domexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'domexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'domexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'domimplementation::createdocument' => 
  array (
    0 => 'mixed',
    'namespaceURI' => 'mixed',
    'qualifiedName' => 'mixed',
    'docType' => 'DOMDocumentType',
  ),
  'domimplementation::createdocumenttype' => 
  array (
    0 => 'mixed',
    'qualifiedName' => 'mixed',
    'publicId' => 'mixed',
    'systemId' => 'mixed',
  ),
  'domimplementation::getfeature' => 
  array (
    0 => 'mixed',
    'feature' => 'mixed',
    'version' => 'mixed',
  ),
  'domimplementation::hasfeature' => 
  array (
    0 => 'mixed',
  ),
  'domimplementationlist::item' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'domimplementationsource::getdomimplementation' => 
  array (
    0 => 'mixed',
    'features' => 'mixed',
  ),
  'domimplementationsource::getdomimplementations' => 
  array (
    0 => 'mixed',
    'features' => 'mixed',
  ),
  'domnamednodemap::count' => 
  array (
    0 => 'mixed',
  ),
  'domnamednodemap::getnameditem' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
  ),
  'domnamednodemap::getnameditemns' => 
  array (
    0 => 'mixed',
    'namespaceURI=' => 'mixed',
    'localName=' => 'mixed',
  ),
  'domnamednodemap::item' => 
  array (
    0 => 'mixed',
    'index=' => 'mixed',
  ),
  'domnamednodemap::removenameditem' => 
  array (
    0 => 'mixed',
    'name=' => 'mixed',
  ),
  'domnamednodemap::removenameditemns' => 
  array (
    0 => 'mixed',
    'namespaceURI=' => 'mixed',
    'localName=' => 'mixed',
  ),
  'domnamednodemap::setnameditem' => 
  array (
    0 => 'mixed',
    'arg' => 'DOMNode',
  ),
  'domnamednodemap::setnameditemns' => 
  array (
    0 => 'mixed',
    'arg=' => 'DOMNode',
  ),
  'domnamelist::getname' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'domnamelist::getnamespaceuri' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'domnode::appendchild' => 
  array (
    0 => 'mixed',
    'newChild' => 'DOMNode',
  ),
  'domnode::c14n' => 
  array (
    0 => 'mixed',
    'exclusive=' => 'mixed',
    'with_comments=' => 'mixed',
    'xpath=' => 'array<array-key, mixed>|null',
    'ns_prefixes=' => 'array<array-key, mixed>|null',
  ),
  'domnode::c14nfile' => 
  array (
    0 => 'mixed',
    'uri' => 'mixed',
    'exclusive=' => 'mixed',
    'with_comments=' => 'mixed',
    'xpath=' => 'array<array-key, mixed>|null',
    'ns_prefixes=' => 'array<array-key, mixed>|null',
  ),
  'domnode::clonenode' => 
  array (
    0 => 'mixed',
    'deep=' => 'mixed',
  ),
  'domnode::comparedocumentposition' => 
  array (
    0 => 'mixed',
    'other' => 'DOMNode',
  ),
  'domnode::getfeature' => 
  array (
    0 => 'mixed',
    'feature' => 'mixed',
    'version' => 'mixed',
  ),
  'domnode::getlineno' => 
  array (
    0 => 'mixed',
  ),
  'domnode::getnodepath' => 
  array (
    0 => 'mixed',
  ),
  'domnode::getuserdata' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'domnode::hasattributes' => 
  array (
    0 => 'mixed',
  ),
  'domnode::haschildnodes' => 
  array (
    0 => 'mixed',
  ),
  'domnode::insertbefore' => 
  array (
    0 => 'mixed',
    'newChild' => 'DOMNode',
    'refChild=' => 'DOMNode|null',
  ),
  'domnode::isdefaultnamespace' => 
  array (
    0 => 'mixed',
    'namespaceURI' => 'mixed',
  ),
  'domnode::isequalnode' => 
  array (
    0 => 'mixed',
    'arg' => 'DOMNode',
  ),
  'domnode::issamenode' => 
  array (
    0 => 'mixed',
    'other' => 'DOMNode',
  ),
  'domnode::issupported' => 
  array (
    0 => 'mixed',
    'feature' => 'mixed',
    'version' => 'mixed',
  ),
  'domnode::lookupnamespaceuri' => 
  array (
    0 => 'mixed',
    'prefix' => 'mixed',
  ),
  'domnode::lookupprefix' => 
  array (
    0 => 'mixed',
    'namespaceURI' => 'mixed',
  ),
  'domnode::normalize' => 
  array (
    0 => 'mixed',
  ),
  'domnode::removechild' => 
  array (
    0 => 'mixed',
    'oldChild' => 'DOMNode',
  ),
  'domnode::replacechild' => 
  array (
    0 => 'mixed',
    'newChild' => 'DOMNode',
    'oldChild' => 'DOMNode',
  ),
  'domnode::setuserdata' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'data' => 'mixed',
    'handler' => 'mixed',
  ),
  'domnodelist::count' => 
  array (
    0 => 'mixed',
  ),
  'domnodelist::item' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'domnotation::appendchild' => 
  array (
    0 => 'mixed',
    'newChild' => 'DOMNode',
  ),
  'domnotation::c14n' => 
  array (
    0 => 'mixed',
    'exclusive=' => 'mixed',
    'with_comments=' => 'mixed',
    'xpath=' => 'array<array-key, mixed>|null',
    'ns_prefixes=' => 'array<array-key, mixed>|null',
  ),
  'domnotation::c14nfile' => 
  array (
    0 => 'mixed',
    'uri' => 'mixed',
    'exclusive=' => 'mixed',
    'with_comments=' => 'mixed',
    'xpath=' => 'array<array-key, mixed>|null',
    'ns_prefixes=' => 'array<array-key, mixed>|null',
  ),
  'domnotation::clonenode' => 
  array (
    0 => 'mixed',
    'deep=' => 'mixed',
  ),
  'domnotation::comparedocumentposition' => 
  array (
    0 => 'mixed',
    'other' => 'DOMNode',
  ),
  'domnotation::getfeature' => 
  array (
    0 => 'mixed',
    'feature' => 'mixed',
    'version' => 'mixed',
  ),
  'domnotation::getlineno' => 
  array (
    0 => 'mixed',
  ),
  'domnotation::getnodepath' => 
  array (
    0 => 'mixed',
  ),
  'domnotation::getuserdata' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'domnotation::hasattributes' => 
  array (
    0 => 'mixed',
  ),
  'domnotation::haschildnodes' => 
  array (
    0 => 'mixed',
  ),
  'domnotation::insertbefore' => 
  array (
    0 => 'mixed',
    'newChild' => 'DOMNode',
    'refChild=' => 'DOMNode|null',
  ),
  'domnotation::isdefaultnamespace' => 
  array (
    0 => 'mixed',
    'namespaceURI' => 'mixed',
  ),
  'domnotation::isequalnode' => 
  array (
    0 => 'mixed',
    'arg' => 'DOMNode',
  ),
  'domnotation::issamenode' => 
  array (
    0 => 'mixed',
    'other' => 'DOMNode',
  ),
  'domnotation::issupported' => 
  array (
    0 => 'mixed',
    'feature' => 'mixed',
    'version' => 'mixed',
  ),
  'domnotation::lookupnamespaceuri' => 
  array (
    0 => 'mixed',
    'prefix' => 'mixed',
  ),
  'domnotation::lookupprefix' => 
  array (
    0 => 'mixed',
    'namespaceURI' => 'mixed',
  ),
  'domnotation::normalize' => 
  array (
    0 => 'mixed',
  ),
  'domnotation::removechild' => 
  array (
    0 => 'mixed',
    'oldChild' => 'DOMNode',
  ),
  'domnotation::replacechild' => 
  array (
    0 => 'mixed',
    'newChild' => 'DOMNode',
    'oldChild' => 'DOMNode',
  ),
  'domnotation::setuserdata' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'data' => 'mixed',
    'handler' => 'mixed',
  ),
  'domprocessinginstruction::__construct' => 
  array (
    0 => 'void',
    'name' => 'mixed',
    'value=' => 'mixed',
  ),
  'domprocessinginstruction::appendchild' => 
  array (
    0 => 'mixed',
    'newChild' => 'DOMNode',
  ),
  'domprocessinginstruction::c14n' => 
  array (
    0 => 'mixed',
    'exclusive=' => 'mixed',
    'with_comments=' => 'mixed',
    'xpath=' => 'array<array-key, mixed>|null',
    'ns_prefixes=' => 'array<array-key, mixed>|null',
  ),
  'domprocessinginstruction::c14nfile' => 
  array (
    0 => 'mixed',
    'uri' => 'mixed',
    'exclusive=' => 'mixed',
    'with_comments=' => 'mixed',
    'xpath=' => 'array<array-key, mixed>|null',
    'ns_prefixes=' => 'array<array-key, mixed>|null',
  ),
  'domprocessinginstruction::clonenode' => 
  array (
    0 => 'mixed',
    'deep=' => 'mixed',
  ),
  'domprocessinginstruction::comparedocumentposition' => 
  array (
    0 => 'mixed',
    'other' => 'DOMNode',
  ),
  'domprocessinginstruction::getfeature' => 
  array (
    0 => 'mixed',
    'feature' => 'mixed',
    'version' => 'mixed',
  ),
  'domprocessinginstruction::getlineno' => 
  array (
    0 => 'mixed',
  ),
  'domprocessinginstruction::getnodepath' => 
  array (
    0 => 'mixed',
  ),
  'domprocessinginstruction::getuserdata' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'domprocessinginstruction::hasattributes' => 
  array (
    0 => 'mixed',
  ),
  'domprocessinginstruction::haschildnodes' => 
  array (
    0 => 'mixed',
  ),
  'domprocessinginstruction::insertbefore' => 
  array (
    0 => 'mixed',
    'newChild' => 'DOMNode',
    'refChild=' => 'DOMNode|null',
  ),
  'domprocessinginstruction::isdefaultnamespace' => 
  array (
    0 => 'mixed',
    'namespaceURI' => 'mixed',
  ),
  'domprocessinginstruction::isequalnode' => 
  array (
    0 => 'mixed',
    'arg' => 'DOMNode',
  ),
  'domprocessinginstruction::issamenode' => 
  array (
    0 => 'mixed',
    'other' => 'DOMNode',
  ),
  'domprocessinginstruction::issupported' => 
  array (
    0 => 'mixed',
    'feature' => 'mixed',
    'version' => 'mixed',
  ),
  'domprocessinginstruction::lookupnamespaceuri' => 
  array (
    0 => 'mixed',
    'prefix' => 'mixed',
  ),
  'domprocessinginstruction::lookupprefix' => 
  array (
    0 => 'mixed',
    'namespaceURI' => 'mixed',
  ),
  'domprocessinginstruction::normalize' => 
  array (
    0 => 'mixed',
  ),
  'domprocessinginstruction::removechild' => 
  array (
    0 => 'mixed',
    'oldChild' => 'DOMNode',
  ),
  'domprocessinginstruction::replacechild' => 
  array (
    0 => 'mixed',
    'newChild' => 'DOMNode',
    'oldChild' => 'DOMNode',
  ),
  'domprocessinginstruction::setuserdata' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'data' => 'mixed',
    'handler' => 'mixed',
  ),
  'domstringextend::findoffset16' => 
  array (
    0 => 'mixed',
    'offset32' => 'mixed',
  ),
  'domstringextend::findoffset32' => 
  array (
    0 => 'mixed',
    'offset16' => 'mixed',
  ),
  'domstringlist::item' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'domtext::__construct' => 
  array (
    0 => 'void',
    'value=' => 'mixed',
  ),
  'domtext::appendchild' => 
  array (
    0 => 'mixed',
    'newChild' => 'DOMNode',
  ),
  'domtext::appenddata' => 
  array (
    0 => 'mixed',
    'arg' => 'mixed',
  ),
  'domtext::c14n' => 
  array (
    0 => 'mixed',
    'exclusive=' => 'mixed',
    'with_comments=' => 'mixed',
    'xpath=' => 'array<array-key, mixed>|null',
    'ns_prefixes=' => 'array<array-key, mixed>|null',
  ),
  'domtext::c14nfile' => 
  array (
    0 => 'mixed',
    'uri' => 'mixed',
    'exclusive=' => 'mixed',
    'with_comments=' => 'mixed',
    'xpath=' => 'array<array-key, mixed>|null',
    'ns_prefixes=' => 'array<array-key, mixed>|null',
  ),
  'domtext::clonenode' => 
  array (
    0 => 'mixed',
    'deep=' => 'mixed',
  ),
  'domtext::comparedocumentposition' => 
  array (
    0 => 'mixed',
    'other' => 'DOMNode',
  ),
  'domtext::deletedata' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
    'count' => 'mixed',
  ),
  'domtext::getfeature' => 
  array (
    0 => 'mixed',
    'feature' => 'mixed',
    'version' => 'mixed',
  ),
  'domtext::getlineno' => 
  array (
    0 => 'mixed',
  ),
  'domtext::getnodepath' => 
  array (
    0 => 'mixed',
  ),
  'domtext::getuserdata' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'domtext::hasattributes' => 
  array (
    0 => 'mixed',
  ),
  'domtext::haschildnodes' => 
  array (
    0 => 'mixed',
  ),
  'domtext::insertbefore' => 
  array (
    0 => 'mixed',
    'newChild' => 'DOMNode',
    'refChild=' => 'DOMNode|null',
  ),
  'domtext::insertdata' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
    'arg' => 'mixed',
  ),
  'domtext::isdefaultnamespace' => 
  array (
    0 => 'mixed',
    'namespaceURI' => 'mixed',
  ),
  'domtext::iselementcontentwhitespace' => 
  array (
    0 => 'mixed',
  ),
  'domtext::isequalnode' => 
  array (
    0 => 'mixed',
    'arg' => 'DOMNode',
  ),
  'domtext::issamenode' => 
  array (
    0 => 'mixed',
    'other' => 'DOMNode',
  ),
  'domtext::issupported' => 
  array (
    0 => 'mixed',
    'feature' => 'mixed',
    'version' => 'mixed',
  ),
  'domtext::iswhitespaceinelementcontent' => 
  array (
    0 => 'mixed',
  ),
  'domtext::lookupnamespaceuri' => 
  array (
    0 => 'mixed',
    'prefix' => 'mixed',
  ),
  'domtext::lookupprefix' => 
  array (
    0 => 'mixed',
    'namespaceURI' => 'mixed',
  ),
  'domtext::normalize' => 
  array (
    0 => 'mixed',
  ),
  'domtext::removechild' => 
  array (
    0 => 'mixed',
    'oldChild' => 'DOMNode',
  ),
  'domtext::replacechild' => 
  array (
    0 => 'mixed',
    'newChild' => 'DOMNode',
    'oldChild' => 'DOMNode',
  ),
  'domtext::replacedata' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
    'count' => 'mixed',
    'arg' => 'mixed',
  ),
  'domtext::replacewholetext' => 
  array (
    0 => 'mixed',
    'content' => 'mixed',
  ),
  'domtext::setuserdata' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'data' => 'mixed',
    'handler' => 'mixed',
  ),
  'domtext::splittext' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
  ),
  'domtext::substringdata' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
    'count' => 'mixed',
  ),
  'domuserdatahandler::handle' => 
  array (
    0 => 'mixed',
  ),
  'domxpath::__construct' => 
  array (
    0 => 'void',
    'doc' => 'DOMDocument',
  ),
  'domxpath::evaluate' => 
  array (
    0 => 'mixed',
    'expr' => 'mixed',
    'context=' => 'DOMNode|null',
    'registerNodeNS=' => 'mixed',
  ),
  'domxpath::query' => 
  array (
    0 => 'mixed',
    'expr' => 'mixed',
    'context=' => 'DOMNode|null',
    'registerNodeNS=' => 'mixed',
  ),
  'domxpath::registernamespace' => 
  array (
    0 => 'mixed',
    'prefix' => 'mixed',
    'uri' => 'mixed',
  ),
  'domxpath::registerphpfunctions' => 
  array (
    0 => 'mixed',
  ),
  'doubleval' => 
  array (
    0 => 'mixed',
    'var' => 'mixed',
  ),
  'ds\\deque::__construct' => 
  array (
    0 => 'void',
    'values=' => 'mixed',
  ),
  'ds\\deque::allocate' => 
  array (
    0 => 'mixed',
    'capacity' => 'int',
  ),
  'ds\\deque::apply' => 
  array (
    0 => 'mixed',
    'callback' => 'callable',
  ),
  'ds\\deque::capacity' => 
  array (
    0 => 'int',
  ),
  'ds\\deque::clear' => 
  array (
    0 => 'mixed',
  ),
  'ds\\deque::contains' => 
  array (
    0 => 'bool',
    '...values=' => 'mixed',
  ),
  'ds\\deque::copy' => 
  array (
    0 => 'Ds\\Collection',
  ),
  'ds\\deque::count' => 
  array (
    0 => 'int',
  ),
  'ds\\deque::filter' => 
  array (
    0 => 'Ds\\Sequence',
    'callback=' => 'callable|null',
  ),
  'ds\\deque::find' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'ds\\deque::first' => 
  array (
    0 => 'mixed',
  ),
  'ds\\deque::get' => 
  array (
    0 => 'mixed',
    'index' => 'int',
  ),
  'ds\\deque::getiterator' => 
  array (
    0 => 'Traversable',
  ),
  'ds\\deque::insert' => 
  array (
    0 => 'mixed',
    'index' => 'int',
    '...values=' => 'mixed',
  ),
  'ds\\deque::isempty' => 
  array (
    0 => 'bool',
  ),
  'ds\\deque::join' => 
  array (
    0 => 'string',
    'glue=' => 'string',
  ),
  'ds\\deque::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'ds\\deque::last' => 
  array (
    0 => 'mixed',
  ),
  'ds\\deque::map' => 
  array (
    0 => 'Ds\\Sequence',
    'callback' => 'callable',
  ),
  'ds\\deque::merge' => 
  array (
    0 => 'Ds\\Sequence',
    'values' => 'mixed',
  ),
  'ds\\deque::offsetexists' => 
  array (
    0 => 'bool',
    'offset' => 'mixed',
  ),
  'ds\\deque::offsetget' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
  ),
  'ds\\deque::offsetset' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
    'value' => 'mixed',
  ),
  'ds\\deque::offsetunset' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
  ),
  'ds\\deque::pop' => 
  array (
    0 => 'mixed',
  ),
  'ds\\deque::push' => 
  array (
    0 => 'mixed',
    '...values=' => 'mixed',
  ),
  'ds\\deque::reduce' => 
  array (
    0 => 'mixed',
    'callback' => 'callable',
    'initial=' => 'mixed',
  ),
  'ds\\deque::remove' => 
  array (
    0 => 'mixed',
    'index' => 'int',
  ),
  'ds\\deque::reverse' => 
  array (
    0 => 'mixed',
  ),
  'ds\\deque::reversed' => 
  array (
    0 => 'Ds\\Sequence',
  ),
  'ds\\deque::rotate' => 
  array (
    0 => 'mixed',
    'rotations' => 'int',
  ),
  'ds\\deque::set' => 
  array (
    0 => 'mixed',
    'index' => 'int',
    'value' => 'mixed',
  ),
  'ds\\deque::shift' => 
  array (
    0 => 'mixed',
  ),
  'ds\\deque::slice' => 
  array (
    0 => 'Ds\\Sequence',
    'index' => 'int',
    'length=' => 'int|null',
  ),
  'ds\\deque::sort' => 
  array (
    0 => 'mixed',
    'comparator=' => 'callable|null',
  ),
  'ds\\deque::sorted' => 
  array (
    0 => 'Ds\\Sequence',
    'comparator=' => 'callable|null',
  ),
  'ds\\deque::sum' => 
  array (
    0 => 'mixed',
  ),
  'ds\\deque::toarray' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'ds\\deque::unshift' => 
  array (
    0 => 'mixed',
    '...values=' => 'mixed',
  ),
  'ds\\map::__construct' => 
  array (
    0 => 'void',
    'values=' => 'mixed',
  ),
  'ds\\map::allocate' => 
  array (
    0 => 'mixed',
    'capacity' => 'int',
  ),
  'ds\\map::apply' => 
  array (
    0 => 'mixed',
    'callback' => 'callable',
  ),
  'ds\\map::capacity' => 
  array (
    0 => 'int',
  ),
  'ds\\map::clear' => 
  array (
    0 => 'mixed',
  ),
  'ds\\map::copy' => 
  array (
    0 => 'Ds\\Collection',
  ),
  'ds\\map::count' => 
  array (
    0 => 'int',
  ),
  'ds\\map::diff' => 
  array (
    0 => 'Ds\\Map',
    'map' => 'Ds\\Map',
  ),
  'ds\\map::filter' => 
  array (
    0 => 'Ds\\Map',
    'callback=' => 'callable|null',
  ),
  'ds\\map::first' => 
  array (
    0 => 'Ds\\Pair',
  ),
  'ds\\map::get' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'default=' => 'mixed',
  ),
  'ds\\map::getiterator' => 
  array (
    0 => 'Traversable',
  ),
  'ds\\map::haskey' => 
  array (
    0 => 'bool',
    'key' => 'mixed',
  ),
  'ds\\map::hasvalue' => 
  array (
    0 => 'bool',
    'value' => 'mixed',
  ),
  'ds\\map::intersect' => 
  array (
    0 => 'Ds\\Map',
    'map' => 'Ds\\Map',
  ),
  'ds\\map::isempty' => 
  array (
    0 => 'bool',
  ),
  'ds\\map::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'ds\\map::keys' => 
  array (
    0 => 'Ds\\Set',
  ),
  'ds\\map::ksort' => 
  array (
    0 => 'mixed',
    'comparator=' => 'callable|null',
  ),
  'ds\\map::ksorted' => 
  array (
    0 => 'Ds\\Map',
    'comparator=' => 'callable|null',
  ),
  'ds\\map::last' => 
  array (
    0 => 'Ds\\Pair',
  ),
  'ds\\map::map' => 
  array (
    0 => 'Ds\\Map',
    'callback' => 'callable',
  ),
  'ds\\map::merge' => 
  array (
    0 => 'Ds\\Map',
    'values' => 'mixed',
  ),
  'ds\\map::offsetexists' => 
  array (
    0 => 'bool',
    'offset' => 'mixed',
  ),
  'ds\\map::offsetget' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
  ),
  'ds\\map::offsetset' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
    'value' => 'mixed',
  ),
  'ds\\map::offsetunset' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
  ),
  'ds\\map::pairs' => 
  array (
    0 => 'Ds\\Sequence',
  ),
  'ds\\map::put' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'ds\\map::putall' => 
  array (
    0 => 'mixed',
    'values' => 'mixed',
  ),
  'ds\\map::reduce' => 
  array (
    0 => 'mixed',
    'callback' => 'callable',
    'initial=' => 'mixed',
  ),
  'ds\\map::remove' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'default=' => 'mixed',
  ),
  'ds\\map::reverse' => 
  array (
    0 => 'mixed',
  ),
  'ds\\map::reversed' => 
  array (
    0 => 'Ds\\Map',
  ),
  'ds\\map::skip' => 
  array (
    0 => 'Ds\\Pair',
    'position' => 'int',
  ),
  'ds\\map::slice' => 
  array (
    0 => 'Ds\\Map',
    'index' => 'int',
    'length=' => 'int|null',
  ),
  'ds\\map::sort' => 
  array (
    0 => 'mixed',
    'comparator=' => 'callable|null',
  ),
  'ds\\map::sorted' => 
  array (
    0 => 'Ds\\Map',
    'comparator=' => 'callable|null',
  ),
  'ds\\map::sum' => 
  array (
    0 => 'mixed',
  ),
  'ds\\map::toarray' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'ds\\map::union' => 
  array (
    0 => 'Ds\\Map',
    'map' => 'mixed',
  ),
  'ds\\map::values' => 
  array (
    0 => 'Ds\\Sequence',
  ),
  'ds\\map::xor' => 
  array (
    0 => 'Ds\\Map',
    'map' => 'Ds\\Map',
  ),
  'ds\\pair::__construct' => 
  array (
    0 => 'void',
    'key=' => 'mixed',
    'value=' => 'mixed',
  ),
  'ds\\pair::copy' => 
  array (
    0 => 'Ds\\Pair',
  ),
  'ds\\pair::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'ds\\pair::toarray' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'ds\\priorityqueue::__construct' => 
  array (
    0 => 'void',
  ),
  'ds\\priorityqueue::allocate' => 
  array (
    0 => 'mixed',
    'capacity' => 'int',
  ),
  'ds\\priorityqueue::capacity' => 
  array (
    0 => 'int',
  ),
  'ds\\priorityqueue::clear' => 
  array (
    0 => 'mixed',
  ),
  'ds\\priorityqueue::copy' => 
  array (
    0 => 'Ds\\Collection',
  ),
  'ds\\priorityqueue::count' => 
  array (
    0 => 'int',
  ),
  'ds\\priorityqueue::getiterator' => 
  array (
    0 => 'Traversable',
  ),
  'ds\\priorityqueue::isempty' => 
  array (
    0 => 'bool',
  ),
  'ds\\priorityqueue::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'ds\\priorityqueue::peek' => 
  array (
    0 => 'mixed',
  ),
  'ds\\priorityqueue::pop' => 
  array (
    0 => 'mixed',
  ),
  'ds\\priorityqueue::push' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
    'priority' => 'mixed',
  ),
  'ds\\priorityqueue::toarray' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'ds\\queue::__construct' => 
  array (
    0 => 'void',
    'values=' => 'mixed',
  ),
  'ds\\queue::allocate' => 
  array (
    0 => 'mixed',
    'capacity' => 'int',
  ),
  'ds\\queue::capacity' => 
  array (
    0 => 'int',
  ),
  'ds\\queue::clear' => 
  array (
    0 => 'mixed',
  ),
  'ds\\queue::copy' => 
  array (
    0 => 'Ds\\Collection',
  ),
  'ds\\queue::count' => 
  array (
    0 => 'int',
  ),
  'ds\\queue::getiterator' => 
  array (
    0 => 'Traversable',
  ),
  'ds\\queue::isempty' => 
  array (
    0 => 'bool',
  ),
  'ds\\queue::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'ds\\queue::offsetexists' => 
  array (
    0 => 'bool',
    'offset' => 'mixed',
  ),
  'ds\\queue::offsetget' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
  ),
  'ds\\queue::offsetset' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
    'value' => 'mixed',
  ),
  'ds\\queue::offsetunset' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
  ),
  'ds\\queue::peek' => 
  array (
    0 => 'mixed',
  ),
  'ds\\queue::pop' => 
  array (
    0 => 'mixed',
  ),
  'ds\\queue::push' => 
  array (
    0 => 'mixed',
    '...values=' => 'mixed',
  ),
  'ds\\queue::toarray' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'ds\\set::__construct' => 
  array (
    0 => 'void',
    'values=' => 'mixed',
  ),
  'ds\\set::add' => 
  array (
    0 => 'mixed',
    '...values=' => 'mixed',
  ),
  'ds\\set::allocate' => 
  array (
    0 => 'mixed',
    'capacity' => 'int',
  ),
  'ds\\set::capacity' => 
  array (
    0 => 'int',
  ),
  'ds\\set::clear' => 
  array (
    0 => 'mixed',
  ),
  'ds\\set::contains' => 
  array (
    0 => 'bool',
    '...values=' => 'mixed',
  ),
  'ds\\set::copy' => 
  array (
    0 => 'Ds\\Collection',
  ),
  'ds\\set::count' => 
  array (
    0 => 'int',
  ),
  'ds\\set::diff' => 
  array (
    0 => 'Ds\\Set',
    'set' => 'Ds\\Set',
  ),
  'ds\\set::filter' => 
  array (
    0 => 'Ds\\Set',
    'predicate=' => 'callable|null',
  ),
  'ds\\set::first' => 
  array (
    0 => 'mixed',
  ),
  'ds\\set::get' => 
  array (
    0 => 'mixed',
    'index' => 'int',
  ),
  'ds\\set::getiterator' => 
  array (
    0 => 'Traversable',
  ),
  'ds\\set::intersect' => 
  array (
    0 => 'Ds\\Set',
    'set' => 'Ds\\Set',
  ),
  'ds\\set::isempty' => 
  array (
    0 => 'bool',
  ),
  'ds\\set::join' => 
  array (
    0 => 'mixed',
    'glue=' => 'string',
  ),
  'ds\\set::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'ds\\set::last' => 
  array (
    0 => 'mixed',
  ),
  'ds\\set::map' => 
  array (
    0 => 'Ds\\Set',
    'callback' => 'callable',
  ),
  'ds\\set::merge' => 
  array (
    0 => 'Ds\\Set',
    'values' => 'mixed',
  ),
  'ds\\set::offsetexists' => 
  array (
    0 => 'bool',
    'offset' => 'mixed',
  ),
  'ds\\set::offsetget' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
  ),
  'ds\\set::offsetset' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
    'value' => 'mixed',
  ),
  'ds\\set::offsetunset' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
  ),
  'ds\\set::reduce' => 
  array (
    0 => 'mixed',
    'callback' => 'callable',
    'initial=' => 'mixed',
  ),
  'ds\\set::remove' => 
  array (
    0 => 'mixed',
    '...values=' => 'mixed',
  ),
  'ds\\set::reverse' => 
  array (
    0 => 'mixed',
  ),
  'ds\\set::reversed' => 
  array (
    0 => 'Ds\\Set',
  ),
  'ds\\set::slice' => 
  array (
    0 => 'Ds\\Set',
    'index' => 'int',
    'length=' => 'int|null',
  ),
  'ds\\set::sort' => 
  array (
    0 => 'mixed',
    'comparator=' => 'callable|null',
  ),
  'ds\\set::sorted' => 
  array (
    0 => 'Ds\\Set',
    'comparator=' => 'callable|null',
  ),
  'ds\\set::sum' => 
  array (
    0 => 'mixed',
  ),
  'ds\\set::toarray' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'ds\\set::union' => 
  array (
    0 => 'Ds\\Set',
    'set' => 'Ds\\Set',
  ),
  'ds\\set::xor' => 
  array (
    0 => 'Ds\\Set',
    'set' => 'Ds\\Set',
  ),
  'ds\\stack::__construct' => 
  array (
    0 => 'void',
    'values=' => 'mixed',
  ),
  'ds\\stack::allocate' => 
  array (
    0 => 'mixed',
    'capacity' => 'int',
  ),
  'ds\\stack::capacity' => 
  array (
    0 => 'int',
  ),
  'ds\\stack::clear' => 
  array (
    0 => 'mixed',
  ),
  'ds\\stack::copy' => 
  array (
    0 => 'Ds\\Collection',
  ),
  'ds\\stack::count' => 
  array (
    0 => 'int',
  ),
  'ds\\stack::getiterator' => 
  array (
    0 => 'Traversable',
  ),
  'ds\\stack::isempty' => 
  array (
    0 => 'bool',
  ),
  'ds\\stack::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'ds\\stack::offsetexists' => 
  array (
    0 => 'bool',
    'offset' => 'mixed',
  ),
  'ds\\stack::offsetget' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
  ),
  'ds\\stack::offsetset' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
    'value' => 'mixed',
  ),
  'ds\\stack::offsetunset' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
  ),
  'ds\\stack::peek' => 
  array (
    0 => 'mixed',
  ),
  'ds\\stack::pop' => 
  array (
    0 => 'mixed',
  ),
  'ds\\stack::push' => 
  array (
    0 => 'mixed',
    '...values=' => 'mixed',
  ),
  'ds\\stack::toarray' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'ds\\vector::__construct' => 
  array (
    0 => 'void',
    'values=' => 'mixed',
  ),
  'ds\\vector::allocate' => 
  array (
    0 => 'mixed',
    'capacity' => 'int',
  ),
  'ds\\vector::apply' => 
  array (
    0 => 'mixed',
    'callback' => 'callable',
  ),
  'ds\\vector::capacity' => 
  array (
    0 => 'int',
  ),
  'ds\\vector::clear' => 
  array (
    0 => 'mixed',
  ),
  'ds\\vector::contains' => 
  array (
    0 => 'bool',
    '...values=' => 'mixed',
  ),
  'ds\\vector::copy' => 
  array (
    0 => 'Ds\\Collection',
  ),
  'ds\\vector::count' => 
  array (
    0 => 'int',
  ),
  'ds\\vector::filter' => 
  array (
    0 => 'Ds\\Sequence',
    'callback=' => 'callable|null',
  ),
  'ds\\vector::find' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'ds\\vector::first' => 
  array (
    0 => 'mixed',
  ),
  'ds\\vector::get' => 
  array (
    0 => 'mixed',
    'index' => 'int',
  ),
  'ds\\vector::getiterator' => 
  array (
    0 => 'Traversable',
  ),
  'ds\\vector::insert' => 
  array (
    0 => 'mixed',
    'index' => 'int',
    '...values=' => 'mixed',
  ),
  'ds\\vector::isempty' => 
  array (
    0 => 'bool',
  ),
  'ds\\vector::join' => 
  array (
    0 => 'string',
    'glue=' => 'string',
  ),
  'ds\\vector::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'ds\\vector::last' => 
  array (
    0 => 'mixed',
  ),
  'ds\\vector::map' => 
  array (
    0 => 'Ds\\Sequence',
    'callback' => 'callable',
  ),
  'ds\\vector::merge' => 
  array (
    0 => 'Ds\\Sequence',
    'values' => 'mixed',
  ),
  'ds\\vector::offsetexists' => 
  array (
    0 => 'bool',
    'offset' => 'mixed',
  ),
  'ds\\vector::offsetget' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
  ),
  'ds\\vector::offsetset' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
    'value' => 'mixed',
  ),
  'ds\\vector::offsetunset' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
  ),
  'ds\\vector::pop' => 
  array (
    0 => 'mixed',
  ),
  'ds\\vector::push' => 
  array (
    0 => 'mixed',
    '...values=' => 'mixed',
  ),
  'ds\\vector::reduce' => 
  array (
    0 => 'mixed',
    'callback' => 'callable',
    'initial=' => 'mixed',
  ),
  'ds\\vector::remove' => 
  array (
    0 => 'mixed',
    'index' => 'int',
  ),
  'ds\\vector::reverse' => 
  array (
    0 => 'mixed',
  ),
  'ds\\vector::reversed' => 
  array (
    0 => 'Ds\\Sequence',
  ),
  'ds\\vector::rotate' => 
  array (
    0 => 'mixed',
    'rotations' => 'int',
  ),
  'ds\\vector::set' => 
  array (
    0 => 'mixed',
    'index' => 'int',
    'value' => 'mixed',
  ),
  'ds\\vector::shift' => 
  array (
    0 => 'mixed',
  ),
  'ds\\vector::slice' => 
  array (
    0 => 'Ds\\Sequence',
    'index' => 'int',
    'length=' => 'int|null',
  ),
  'ds\\vector::sort' => 
  array (
    0 => 'mixed',
    'comparator=' => 'callable|null',
  ),
  'ds\\vector::sorted' => 
  array (
    0 => 'Ds\\Sequence',
    'comparator=' => 'callable|null',
  ),
  'ds\\vector::sum' => 
  array (
    0 => 'mixed',
  ),
  'ds\\vector::toarray' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'ds\\vector::unshift' => 
  array (
    0 => 'mixed',
    '...values=' => 'mixed',
  ),
  'each' => 
  array (
    0 => 'mixed',
    '&arr' => 'mixed',
  ),
  'emptyiterator::current' => 
  array (
    0 => 'mixed',
  ),
  'emptyiterator::key' => 
  array (
    0 => 'mixed',
  ),
  'emptyiterator::next' => 
  array (
    0 => 'mixed',
  ),
  'emptyiterator::rewind' => 
  array (
    0 => 'mixed',
  ),
  'emptyiterator::valid' => 
  array (
    0 => 'mixed',
  ),
  'end' => 
  array (
    0 => 'mixed',
    '&arg' => 'mixed',
  ),
  'error::__clone' => 
  array (
    0 => 'mixed',
  ),
  'error::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'error::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'error::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'error::getcode' => 
  array (
    0 => 'mixed',
  ),
  'error::getfile' => 
  array (
    0 => 'mixed',
  ),
  'error::getline' => 
  array (
    0 => 'mixed',
  ),
  'error::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'error::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'error::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'error::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'error_clear_last' => 
  array (
    0 => 'mixed',
  ),
  'error_get_last' => 
  array (
    0 => 'mixed',
  ),
  'error_log' => 
  array (
    0 => 'mixed',
    'message' => 'mixed',
    'message_type=' => 'mixed',
    'destination=' => 'mixed',
    'extra_headers=' => 'mixed',
  ),
  'error_reporting' => 
  array (
    0 => 'mixed',
    'new_error_level=' => 'mixed',
  ),
  'errorexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'errorexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'severity=' => 'mixed',
    'filename=' => 'mixed',
    'lineno=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'errorexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'errorexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'errorexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'errorexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'errorexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'errorexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'errorexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'errorexception::getseverity' => 
  array (
    0 => 'mixed',
  ),
  'errorexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'errorexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'escapeshellarg' => 
  array (
    0 => 'mixed',
    'arg' => 'mixed',
  ),
  'escapeshellcmd' => 
  array (
    0 => 'mixed',
    'command' => 'mixed',
  ),
  'ev::backend' => 
  array (
    0 => 'mixed',
  ),
  'ev::depth' => 
  array (
    0 => 'mixed',
  ),
  'ev::embeddablebackends' => 
  array (
    0 => 'mixed',
  ),
  'ev::feedsignal' => 
  array (
    0 => 'mixed',
    'signum' => 'mixed',
  ),
  'ev::feedsignalevent' => 
  array (
    0 => 'mixed',
    'signum' => 'mixed',
  ),
  'ev::iteration' => 
  array (
    0 => 'mixed',
  ),
  'ev::now' => 
  array (
    0 => 'mixed',
  ),
  'ev::nowupdate' => 
  array (
    0 => 'mixed',
  ),
  'ev::recommendedbackends' => 
  array (
    0 => 'mixed',
  ),
  'ev::resume' => 
  array (
    0 => 'mixed',
  ),
  'ev::run' => 
  array (
    0 => 'mixed',
    'flags=' => 'mixed',
  ),
  'ev::sleep' => 
  array (
    0 => 'mixed',
    'seconds' => 'mixed',
  ),
  'ev::stop' => 
  array (
    0 => 'mixed',
    'how=' => 'mixed',
  ),
  'ev::supportedbackends' => 
  array (
    0 => 'mixed',
  ),
  'ev::suspend' => 
  array (
    0 => 'mixed',
  ),
  'ev::time' => 
  array (
    0 => 'mixed',
  ),
  'ev::verify' => 
  array (
    0 => 'mixed',
  ),
  'evcheck::__construct' => 
  array (
    0 => 'void',
    'callback' => 'mixed',
    'data=' => 'mixed',
    'priority=' => 'mixed',
  ),
  'evcheck::clear' => 
  array (
    0 => 'mixed',
  ),
  'evcheck::createstopped' => 
  array (
    0 => 'mixed',
    'callback' => 'mixed',
    'data=' => 'mixed',
    'priority=' => 'mixed',
  ),
  'evcheck::feed' => 
  array (
    0 => 'mixed',
    'revents' => 'mixed',
  ),
  'evcheck::getloop' => 
  array (
    0 => 'mixed',
  ),
  'evcheck::invoke' => 
  array (
    0 => 'mixed',
    'revents' => 'mixed',
  ),
  'evcheck::keepalive' => 
  array (
    0 => 'mixed',
    'value=' => 'mixed',
  ),
  'evcheck::setcallback' => 
  array (
    0 => 'mixed',
    'callback' => 'mixed',
  ),
  'evcheck::start' => 
  array (
    0 => 'mixed',
  ),
  'evcheck::stop' => 
  array (
    0 => 'mixed',
  ),
  'evchild::__construct' => 
  array (
    0 => 'void',
    'pid' => 'mixed',
    'trace' => 'mixed',
    'callback' => 'mixed',
    'data=' => 'mixed',
    'priority=' => 'mixed',
  ),
  'evchild::clear' => 
  array (
    0 => 'mixed',
  ),
  'evchild::createstopped' => 
  array (
    0 => 'mixed',
    'pid' => 'mixed',
    'trace' => 'mixed',
    'callback' => 'mixed',
    'data=' => 'mixed',
    'priority=' => 'mixed',
  ),
  'evchild::feed' => 
  array (
    0 => 'mixed',
    'revents' => 'mixed',
  ),
  'evchild::getloop' => 
  array (
    0 => 'mixed',
  ),
  'evchild::invoke' => 
  array (
    0 => 'mixed',
    'revents' => 'mixed',
  ),
  'evchild::keepalive' => 
  array (
    0 => 'mixed',
    'value=' => 'mixed',
  ),
  'evchild::set' => 
  array (
    0 => 'mixed',
    'pid' => 'mixed',
    'trace' => 'mixed',
  ),
  'evchild::setcallback' => 
  array (
    0 => 'mixed',
    'callback' => 'mixed',
  ),
  'evchild::start' => 
  array (
    0 => 'mixed',
  ),
  'evchild::stop' => 
  array (
    0 => 'mixed',
  ),
  'evembed::__construct' => 
  array (
    0 => 'void',
    'other' => 'mixed',
    'callback=' => 'mixed',
    'data=' => 'mixed',
    'priority=' => 'mixed',
  ),
  'evembed::clear' => 
  array (
    0 => 'mixed',
  ),
  'evembed::createstopped' => 
  array (
    0 => 'mixed',
    'other' => 'mixed',
    'callback=' => 'mixed',
    'data=' => 'mixed',
    'priority=' => 'mixed',
  ),
  'evembed::feed' => 
  array (
    0 => 'mixed',
    'revents' => 'mixed',
  ),
  'evembed::getloop' => 
  array (
    0 => 'mixed',
  ),
  'evembed::invoke' => 
  array (
    0 => 'mixed',
    'revents' => 'mixed',
  ),
  'evembed::keepalive' => 
  array (
    0 => 'mixed',
    'value=' => 'mixed',
  ),
  'evembed::set' => 
  array (
    0 => 'mixed',
    'other' => 'mixed',
  ),
  'evembed::setcallback' => 
  array (
    0 => 'mixed',
    'callback' => 'mixed',
  ),
  'evembed::start' => 
  array (
    0 => 'mixed',
  ),
  'evembed::stop' => 
  array (
    0 => 'mixed',
  ),
  'evembed::sweep' => 
  array (
    0 => 'mixed',
  ),
  'event::__construct' => 
  array (
    0 => 'void',
    'base' => 'EventBase',
    'fd' => 'mixed',
    'what' => 'mixed',
    'cb' => 'mixed',
    'arg=' => 'mixed',
  ),
  'event::add' => 
  array (
    0 => 'mixed',
    'timeout=' => 'mixed',
  ),
  'event::addsignal' => 
  array (
    0 => 'mixed',
    'timeout=' => 'mixed',
  ),
  'event::addtimer' => 
  array (
    0 => 'mixed',
    'timeout=' => 'mixed',
  ),
  'event::del' => 
  array (
    0 => 'mixed',
  ),
  'event::delsignal' => 
  array (
    0 => 'mixed',
  ),
  'event::deltimer' => 
  array (
    0 => 'mixed',
  ),
  'event::free' => 
  array (
    0 => 'mixed',
  ),
  'event::getsupportedmethods' => 
  array (
    0 => 'mixed',
  ),
  'event::pending' => 
  array (
    0 => 'mixed',
    'flags' => 'mixed',
  ),
  'event::removetimer' => 
  array (
    0 => 'mixed',
  ),
  'event::set' => 
  array (
    0 => 'mixed',
    'base' => 'EventBase',
    'fd' => 'mixed',
    'what=' => 'mixed',
    'cb=' => 'mixed',
    'arg=' => 'mixed',
  ),
  'event::setpriority' => 
  array (
    0 => 'mixed',
    'priority' => 'mixed',
  ),
  'event::settimer' => 
  array (
    0 => 'mixed',
    'base' => 'EventBase',
    'cb' => 'mixed',
    'arg=' => 'mixed',
  ),
  'event::signal' => 
  array (
    0 => 'mixed',
    'base' => 'EventBase',
    'signum' => 'mixed',
    'cb' => 'mixed',
    'arg=' => 'mixed',
  ),
  'event::timer' => 
  array (
    0 => 'mixed',
    'base' => 'EventBase',
    'cb' => 'mixed',
    'arg=' => 'mixed',
  ),
  'eventbase::__construct' => 
  array (
    0 => 'void',
    'cfg=' => 'mixed',
  ),
  'eventbase::__sleep' => 
  array (
    0 => 'mixed',
  ),
  'eventbase::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'eventbase::dispatch' => 
  array (
    0 => 'mixed',
  ),
  'eventbase::exit' => 
  array (
    0 => 'mixed',
    'timeout=' => 'mixed',
  ),
  'eventbase::free' => 
  array (
    0 => 'mixed',
  ),
  'eventbase::getfeatures' => 
  array (
    0 => 'mixed',
  ),
  'eventbase::getmethod' => 
  array (
    0 => 'mixed',
  ),
  'eventbase::gettimeofdaycached' => 
  array (
    0 => 'mixed',
  ),
  'eventbase::gotexit' => 
  array (
    0 => 'mixed',
  ),
  'eventbase::gotstop' => 
  array (
    0 => 'mixed',
  ),
  'eventbase::loop' => 
  array (
    0 => 'mixed',
    'flags=' => 'mixed',
  ),
  'eventbase::priorityinit' => 
  array (
    0 => 'mixed',
    'n_priorities' => 'mixed',
  ),
  'eventbase::reinit' => 
  array (
    0 => 'mixed',
  ),
  'eventbase::resume' => 
  array (
    0 => 'mixed',
  ),
  'eventbase::stop' => 
  array (
    0 => 'mixed',
  ),
  'eventbase::updatecachetime' => 
  array (
    0 => 'mixed',
  ),
  'eventbuffer::__construct' => 
  array (
    0 => 'void',
  ),
  'eventbuffer::add' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
  ),
  'eventbuffer::addbuffer' => 
  array (
    0 => 'mixed',
    'buf' => 'mixed',
  ),
  'eventbuffer::appendfrom' => 
  array (
    0 => 'mixed',
    'buf' => 'mixed',
    'len' => 'mixed',
  ),
  'eventbuffer::copyout' => 
  array (
    0 => 'mixed',
    '&data' => 'mixed',
    'max_bytes' => 'mixed',
  ),
  'eventbuffer::drain' => 
  array (
    0 => 'mixed',
    'len' => 'mixed',
  ),
  'eventbuffer::enablelocking' => 
  array (
    0 => 'mixed',
  ),
  'eventbuffer::expand' => 
  array (
    0 => 'mixed',
    'len' => 'mixed',
  ),
  'eventbuffer::freeze' => 
  array (
    0 => 'mixed',
    'at_front' => 'mixed',
  ),
  'eventbuffer::lock' => 
  array (
    0 => 'mixed',
  ),
  'eventbuffer::prepend' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
  ),
  'eventbuffer::prependbuffer' => 
  array (
    0 => 'mixed',
    'buf' => 'mixed',
  ),
  'eventbuffer::pullup' => 
  array (
    0 => 'mixed',
    'size' => 'mixed',
  ),
  'eventbuffer::read' => 
  array (
    0 => 'mixed',
    'max_bytes' => 'mixed',
  ),
  'eventbuffer::readfrom' => 
  array (
    0 => 'mixed',
    'fd' => 'mixed',
    'howmuch=' => 'mixed',
  ),
  'eventbuffer::readline' => 
  array (
    0 => 'mixed',
    'eol_style' => 'mixed',
  ),
  'eventbuffer::search' => 
  array (
    0 => 'mixed',
    'what' => 'mixed',
    'start=' => 'mixed',
    'end=' => 'mixed',
  ),
  'eventbuffer::searcheol' => 
  array (
    0 => 'mixed',
    'start=' => 'mixed',
    'eol_style=' => 'mixed',
  ),
  'eventbuffer::substr' => 
  array (
    0 => 'mixed',
    'start' => 'mixed',
    'length=' => 'mixed',
  ),
  'eventbuffer::unfreeze' => 
  array (
    0 => 'mixed',
    'at_front' => 'mixed',
  ),
  'eventbuffer::unlock' => 
  array (
    0 => 'mixed',
  ),
  'eventbuffer::write' => 
  array (
    0 => 'mixed',
    'fd' => 'mixed',
    'howmuch=' => 'mixed',
  ),
  'eventbufferevent::__construct' => 
  array (
    0 => 'void',
    'base' => 'EventBase',
    'socket=' => 'mixed',
    'options=' => 'mixed',
    'readcb=' => 'mixed',
    'writecb=' => 'mixed',
    'eventcb=' => 'mixed',
  ),
  'eventbufferevent::close' => 
  array (
    0 => 'mixed',
  ),
  'eventbufferevent::connect' => 
  array (
    0 => 'mixed',
    'addr' => 'mixed',
  ),
  'eventbufferevent::connecthost' => 
  array (
    0 => 'mixed',
    'dns_base' => 'mixed',
    'hostname' => 'mixed',
    'port' => 'mixed',
    'family=' => 'mixed',
  ),
  'eventbufferevent::createpair' => 
  array (
    0 => 'mixed',
    'base' => 'EventBase',
    'options=' => 'mixed',
  ),
  'eventbufferevent::createsslfilter' => 
  array (
    0 => 'mixed',
    'underlying' => 'EventBufferEvent',
    'ctx' => 'EventSslContext',
    'state' => 'mixed',
    'options=' => 'mixed',
  ),
  'eventbufferevent::disable' => 
  array (
    0 => 'mixed',
    'events' => 'mixed',
  ),
  'eventbufferevent::enable' => 
  array (
    0 => 'mixed',
    'events' => 'mixed',
  ),
  'eventbufferevent::free' => 
  array (
    0 => 'mixed',
  ),
  'eventbufferevent::getdnserrorstring' => 
  array (
    0 => 'mixed',
  ),
  'eventbufferevent::getenabled' => 
  array (
    0 => 'mixed',
  ),
  'eventbufferevent::getinput' => 
  array (
    0 => 'mixed',
  ),
  'eventbufferevent::getoutput' => 
  array (
    0 => 'mixed',
  ),
  'eventbufferevent::read' => 
  array (
    0 => 'mixed',
    'size' => 'mixed',
  ),
  'eventbufferevent::readbuffer' => 
  array (
    0 => 'mixed',
    'buf' => 'mixed',
  ),
  'eventbufferevent::setcallbacks' => 
  array (
    0 => 'mixed',
    'readcb' => 'mixed',
    'writecb' => 'mixed',
    'eventcb' => 'mixed',
    'arg=' => 'mixed',
  ),
  'eventbufferevent::setpriority' => 
  array (
    0 => 'mixed',
    'priority' => 'mixed',
  ),
  'eventbufferevent::settimeouts' => 
  array (
    0 => 'mixed',
    'timeout_read' => 'mixed',
    'timeout_write' => 'mixed',
  ),
  'eventbufferevent::setwatermark' => 
  array (
    0 => 'mixed',
    'events' => 'mixed',
    'lowmark' => 'mixed',
    'highmark' => 'mixed',
  ),
  'eventbufferevent::sslerror' => 
  array (
    0 => 'mixed',
  ),
  'eventbufferevent::sslfilter' => 
  array (
    0 => 'mixed',
    'unused' => 'mixed',
    'underlying' => 'EventBufferEvent',
    'ctx' => 'EventSslContext',
    'state' => 'mixed',
    'options=' => 'mixed',
  ),
  'eventbufferevent::sslgetcipherinfo' => 
  array (
    0 => 'mixed',
  ),
  'eventbufferevent::sslgetciphername' => 
  array (
    0 => 'mixed',
  ),
  'eventbufferevent::sslgetcipherversion' => 
  array (
    0 => 'mixed',
  ),
  'eventbufferevent::sslgetprotocol' => 
  array (
    0 => 'mixed',
  ),
  'eventbufferevent::sslrenegotiate' => 
  array (
    0 => 'mixed',
  ),
  'eventbufferevent::sslsocket' => 
  array (
    0 => 'mixed',
    'base' => 'EventBase',
    'socket' => 'mixed',
    'ctx' => 'EventSslContext',
    'state' => 'mixed',
    'options=' => 'mixed',
  ),
  'eventbufferevent::write' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
  ),
  'eventbufferevent::writebuffer' => 
  array (
    0 => 'mixed',
    'buf' => 'mixed',
  ),
  'eventconfig::__construct' => 
  array (
    0 => 'void',
  ),
  'eventconfig::__sleep' => 
  array (
    0 => 'mixed',
  ),
  'eventconfig::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'eventconfig::avoidmethod' => 
  array (
    0 => 'mixed',
    'method' => 'mixed',
  ),
  'eventconfig::requirefeatures' => 
  array (
    0 => 'mixed',
    'feature' => 'mixed',
  ),
  'eventconfig::setflags' => 
  array (
    0 => 'mixed',
    'flags' => 'mixed',
  ),
  'eventconfig::setmaxdispatchinterval' => 
  array (
    0 => 'mixed',
    'max_interval' => 'mixed',
    'max_callbacks' => 'mixed',
    'min_priority' => 'mixed',
  ),
  'eventdnsbase::__construct' => 
  array (
    0 => 'void',
    'base' => 'EventBase',
    'initialize' => 'mixed',
  ),
  'eventdnsbase::addnameserverip' => 
  array (
    0 => 'mixed',
    'ip' => 'mixed',
  ),
  'eventdnsbase::addsearch' => 
  array (
    0 => 'mixed',
    'domain' => 'mixed',
  ),
  'eventdnsbase::clearsearch' => 
  array (
    0 => 'mixed',
  ),
  'eventdnsbase::countnameservers' => 
  array (
    0 => 'mixed',
  ),
  'eventdnsbase::loadhosts' => 
  array (
    0 => 'mixed',
    'hosts' => 'mixed',
  ),
  'eventdnsbase::parseresolvconf' => 
  array (
    0 => 'mixed',
    'flags' => 'mixed',
    'filename' => 'mixed',
  ),
  'eventdnsbase::setoption' => 
  array (
    0 => 'mixed',
    'option' => 'mixed',
    'value' => 'mixed',
  ),
  'eventdnsbase::setsearchndots' => 
  array (
    0 => 'mixed',
    'ndots' => 'mixed',
  ),
  'eventexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'eventexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'eventexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'eventexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'eventexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'eventexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'eventexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'eventexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'eventexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'eventexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'eventexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'eventhttp::__construct' => 
  array (
    0 => 'void',
    'base' => 'EventBase',
    'ctx=' => 'EventSslContext',
  ),
  'eventhttp::__sleep' => 
  array (
    0 => 'mixed',
  ),
  'eventhttp::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'eventhttp::accept' => 
  array (
    0 => 'mixed',
    'socket' => 'mixed',
  ),
  'eventhttp::addserveralias' => 
  array (
    0 => 'mixed',
    'alias' => 'mixed',
  ),
  'eventhttp::bind' => 
  array (
    0 => 'mixed',
    'address' => 'mixed',
    'port' => 'mixed',
  ),
  'eventhttp::removeserveralias' => 
  array (
    0 => 'mixed',
    'alias' => 'mixed',
  ),
  'eventhttp::setallowedmethods' => 
  array (
    0 => 'mixed',
    'methods' => 'mixed',
  ),
  'eventhttp::setcallback' => 
  array (
    0 => 'mixed',
    'path' => 'mixed',
    'cb' => 'mixed',
    'arg=' => 'mixed',
  ),
  'eventhttp::setdefaultcallback' => 
  array (
    0 => 'mixed',
    'cb' => 'mixed',
    'arg=' => 'mixed',
  ),
  'eventhttp::setmaxbodysize' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'eventhttp::setmaxheaderssize' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'eventhttp::settimeout' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'eventhttpconnection::__construct' => 
  array (
    0 => 'void',
    'base' => 'EventBase',
    'dns_base' => 'mixed',
    'address' => 'mixed',
    'port' => 'mixed',
    'ctx' => 'EventSslContext',
  ),
  'eventhttpconnection::__sleep' => 
  array (
    0 => 'mixed',
  ),
  'eventhttpconnection::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'eventhttpconnection::getbase' => 
  array (
    0 => 'mixed',
  ),
  'eventhttpconnection::getpeer' => 
  array (
    0 => 'mixed',
    '&address' => 'mixed',
    '&port' => 'mixed',
  ),
  'eventhttpconnection::makerequest' => 
  array (
    0 => 'mixed',
    'req' => 'mixed',
    'type' => 'mixed',
    'uri' => 'mixed',
  ),
  'eventhttpconnection::setclosecallback' => 
  array (
    0 => 'mixed',
    'callback' => 'mixed',
    'data=' => 'mixed',
  ),
  'eventhttpconnection::setlocaladdress' => 
  array (
    0 => 'mixed',
    'address' => 'mixed',
  ),
  'eventhttpconnection::setlocalport' => 
  array (
    0 => 'mixed',
    'port' => 'mixed',
  ),
  'eventhttpconnection::setmaxbodysize' => 
  array (
    0 => 'mixed',
    'max_size' => 'mixed',
  ),
  'eventhttpconnection::setmaxheaderssize' => 
  array (
    0 => 'mixed',
    'max_size' => 'mixed',
  ),
  'eventhttpconnection::setretries' => 
  array (
    0 => 'mixed',
    'retries' => 'mixed',
  ),
  'eventhttpconnection::settimeout' => 
  array (
    0 => 'mixed',
    'timeout' => 'mixed',
  ),
  'eventhttprequest::__construct' => 
  array (
    0 => 'void',
    'callback' => 'mixed',
    'data=' => 'mixed',
  ),
  'eventhttprequest::__sleep' => 
  array (
    0 => 'mixed',
  ),
  'eventhttprequest::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'eventhttprequest::addheader' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
    'type' => 'mixed',
  ),
  'eventhttprequest::cancel' => 
  array (
    0 => 'mixed',
  ),
  'eventhttprequest::clearheaders' => 
  array (
    0 => 'mixed',
  ),
  'eventhttprequest::closeconnection' => 
  array (
    0 => 'mixed',
  ),
  'eventhttprequest::findheader' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'type' => 'mixed',
  ),
  'eventhttprequest::free' => 
  array (
    0 => 'mixed',
  ),
  'eventhttprequest::getbufferevent' => 
  array (
    0 => 'mixed',
  ),
  'eventhttprequest::getcommand' => 
  array (
    0 => 'mixed',
  ),
  'eventhttprequest::getconnection' => 
  array (
    0 => 'mixed',
  ),
  'eventhttprequest::gethost' => 
  array (
    0 => 'mixed',
  ),
  'eventhttprequest::getinputbuffer' => 
  array (
    0 => 'mixed',
  ),
  'eventhttprequest::getinputheaders' => 
  array (
    0 => 'mixed',
  ),
  'eventhttprequest::getoutputbuffer' => 
  array (
    0 => 'mixed',
  ),
  'eventhttprequest::getoutputheaders' => 
  array (
    0 => 'mixed',
  ),
  'eventhttprequest::getresponsecode' => 
  array (
    0 => 'mixed',
  ),
  'eventhttprequest::geturi' => 
  array (
    0 => 'mixed',
  ),
  'eventhttprequest::removeheader' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'type' => 'mixed',
  ),
  'eventhttprequest::senderror' => 
  array (
    0 => 'mixed',
    'error' => 'mixed',
    'reason=' => 'mixed',
  ),
  'eventhttprequest::sendreply' => 
  array (
    0 => 'mixed',
    'code' => 'mixed',
    'reason' => 'mixed',
    'buf=' => 'mixed',
  ),
  'eventhttprequest::sendreplychunk' => 
  array (
    0 => 'mixed',
    'buf' => 'mixed',
  ),
  'eventhttprequest::sendreplyend' => 
  array (
    0 => 'mixed',
  ),
  'eventhttprequest::sendreplystart' => 
  array (
    0 => 'mixed',
    'code' => 'mixed',
    'reason' => 'mixed',
  ),
  'eventlistener::__construct' => 
  array (
    0 => 'void',
    'base' => 'EventBase',
    'cb' => 'mixed',
    'data' => 'mixed',
    'flags' => 'mixed',
    'backlog' => 'mixed',
    'target' => 'mixed',
  ),
  'eventlistener::__sleep' => 
  array (
    0 => 'mixed',
  ),
  'eventlistener::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'eventlistener::disable' => 
  array (
    0 => 'mixed',
  ),
  'eventlistener::enable' => 
  array (
    0 => 'mixed',
  ),
  'eventlistener::free' => 
  array (
    0 => 'mixed',
  ),
  'eventlistener::getbase' => 
  array (
    0 => 'mixed',
  ),
  'eventlistener::getsocketname' => 
  array (
    0 => 'mixed',
    '&address' => 'mixed',
    '&port=' => 'mixed',
  ),
  'eventlistener::setcallback' => 
  array (
    0 => 'mixed',
    'cb' => 'mixed',
    'arg=' => 'mixed',
  ),
  'eventlistener::seterrorcallback' => 
  array (
    0 => 'mixed',
    'cb' => 'mixed',
  ),
  'eventsslcontext::__construct' => 
  array (
    0 => 'void',
    'method' => 'mixed',
    'options' => 'mixed',
  ),
  'eventsslcontext::setmaxprotoversion' => 
  array (
    0 => 'mixed',
    'proto' => 'mixed',
  ),
  'eventsslcontext::setminprotoversion' => 
  array (
    0 => 'mixed',
    'proto' => 'mixed',
  ),
  'eventutil::__construct' => 
  array (
    0 => 'void',
  ),
  'eventutil::getlastsocketerrno' => 
  array (
    0 => 'mixed',
    'socket=' => 'mixed',
  ),
  'eventutil::getlastsocketerror' => 
  array (
    0 => 'mixed',
    'socket=' => 'mixed',
  ),
  'eventutil::getsocketfd' => 
  array (
    0 => 'mixed',
    'socket' => 'mixed',
  ),
  'eventutil::getsocketname' => 
  array (
    0 => 'mixed',
    'socket' => 'mixed',
    '&address' => 'mixed',
    '&port=' => 'mixed',
  ),
  'eventutil::setsocketoption' => 
  array (
    0 => 'mixed',
    'socket' => 'mixed',
    'level' => 'mixed',
    'optname' => 'mixed',
    'optval' => 'mixed',
  ),
  'eventutil::sslrandpoll' => 
  array (
    0 => 'mixed',
  ),
  'evfork::__construct' => 
  array (
    0 => 'void',
    'callback' => 'mixed',
    'data=' => 'mixed',
    'priority=' => 'mixed',
  ),
  'evfork::clear' => 
  array (
    0 => 'mixed',
  ),
  'evfork::createstopped' => 
  array (
    0 => 'mixed',
    'callback' => 'mixed',
    'data=' => 'mixed',
    'priority=' => 'mixed',
  ),
  'evfork::feed' => 
  array (
    0 => 'mixed',
    'revents' => 'mixed',
  ),
  'evfork::getloop' => 
  array (
    0 => 'mixed',
  ),
  'evfork::invoke' => 
  array (
    0 => 'mixed',
    'revents' => 'mixed',
  ),
  'evfork::keepalive' => 
  array (
    0 => 'mixed',
    'value=' => 'mixed',
  ),
  'evfork::setcallback' => 
  array (
    0 => 'mixed',
    'callback' => 'mixed',
  ),
  'evfork::start' => 
  array (
    0 => 'mixed',
  ),
  'evfork::stop' => 
  array (
    0 => 'mixed',
  ),
  'evidle::__construct' => 
  array (
    0 => 'void',
    'callback' => 'mixed',
    'data=' => 'mixed',
    'priority=' => 'mixed',
  ),
  'evidle::clear' => 
  array (
    0 => 'mixed',
  ),
  'evidle::createstopped' => 
  array (
    0 => 'mixed',
    'callback' => 'mixed',
    'data=' => 'mixed',
    'priority=' => 'mixed',
  ),
  'evidle::feed' => 
  array (
    0 => 'mixed',
    'revents' => 'mixed',
  ),
  'evidle::getloop' => 
  array (
    0 => 'mixed',
  ),
  'evidle::invoke' => 
  array (
    0 => 'mixed',
    'revents' => 'mixed',
  ),
  'evidle::keepalive' => 
  array (
    0 => 'mixed',
    'value=' => 'mixed',
  ),
  'evidle::setcallback' => 
  array (
    0 => 'mixed',
    'callback' => 'mixed',
  ),
  'evidle::start' => 
  array (
    0 => 'mixed',
  ),
  'evidle::stop' => 
  array (
    0 => 'mixed',
  ),
  'evio::__construct' => 
  array (
    0 => 'void',
    'fd' => 'mixed',
    'events' => 'mixed',
    'callback' => 'mixed',
    'data=' => 'mixed',
    'priority=' => 'mixed',
  ),
  'evio::clear' => 
  array (
    0 => 'mixed',
  ),
  'evio::createstopped' => 
  array (
    0 => 'mixed',
    'fd' => 'mixed',
    'events' => 'mixed',
    'callback' => 'mixed',
    'data=' => 'mixed',
    'priority=' => 'mixed',
  ),
  'evio::feed' => 
  array (
    0 => 'mixed',
    'revents' => 'mixed',
  ),
  'evio::getloop' => 
  array (
    0 => 'mixed',
  ),
  'evio::invoke' => 
  array (
    0 => 'mixed',
    'revents' => 'mixed',
  ),
  'evio::keepalive' => 
  array (
    0 => 'mixed',
    'value=' => 'mixed',
  ),
  'evio::set' => 
  array (
    0 => 'mixed',
    'fd' => 'mixed',
    'events' => 'mixed',
  ),
  'evio::setcallback' => 
  array (
    0 => 'mixed',
    'callback' => 'mixed',
  ),
  'evio::start' => 
  array (
    0 => 'mixed',
  ),
  'evio::stop' => 
  array (
    0 => 'mixed',
  ),
  'evloop::__construct' => 
  array (
    0 => 'void',
    'flags=' => 'mixed',
    'data=' => 'mixed',
    'io_interval=' => 'mixed',
    'timeout_interval=' => 'mixed',
  ),
  'evloop::backend' => 
  array (
    0 => 'mixed',
  ),
  'evloop::check' => 
  array (
    0 => 'EvCheck',
    'callback' => 'callable',
    'data=' => 'mixed',
    'priority=' => 'int',
  ),
  'evloop::child' => 
  array (
    0 => 'mixed',
    'pid' => 'mixed',
    'trace' => 'mixed',
    'callback' => 'mixed',
    'data=' => 'mixed',
    'priority=' => 'mixed',
  ),
  'evloop::defaultloop' => 
  array (
    0 => 'mixed',
    'flags=' => 'mixed',
    'data=' => 'mixed',
    'io_interval=' => 'mixed',
    'timeout_interval=' => 'mixed',
  ),
  'evloop::embed' => 
  array (
    0 => 'mixed',
    'callback' => 'callable',
    'data=' => 'mixed',
    'priority=' => 'int',
  ),
  'evloop::fork' => 
  array (
    0 => 'mixed',
    'callback' => 'callable',
    'data=' => 'mixed',
    'priority=' => 'int',
  ),
  'evloop::idle' => 
  array (
    0 => 'mixed',
    'callback' => 'mixed',
    'data=' => 'mixed',
    'priority=' => 'mixed',
  ),
  'evloop::invokepending' => 
  array (
    0 => 'mixed',
  ),
  'evloop::io' => 
  array (
    0 => 'mixed',
    'fd' => 'mixed',
    'events' => 'mixed',
    'callback' => 'mixed',
    'data=' => 'mixed',
    'priority=' => 'mixed',
  ),
  'evloop::loopfork' => 
  array (
    0 => 'mixed',
  ),
  'evloop::now' => 
  array (
    0 => 'mixed',
  ),
  'evloop::nowupdate' => 
  array (
    0 => 'mixed',
  ),
  'evloop::periodic' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
    'interval' => 'mixed',
    'callback' => 'mixed',
    'data=' => 'mixed',
    'priority=' => 'mixed',
  ),
  'evloop::prepare' => 
  array (
    0 => 'mixed',
    'callback' => 'callable',
    'data=' => 'mixed',
    'priority=' => 'int',
  ),
  'evloop::resume' => 
  array (
    0 => 'mixed',
  ),
  'evloop::run' => 
  array (
    0 => 'mixed',
    'flags=' => 'mixed',
  ),
  'evloop::signal' => 
  array (
    0 => 'mixed',
    'signum' => 'mixed',
    'callback' => 'mixed',
    'data=' => 'mixed',
    'priority=' => 'mixed',
  ),
  'evloop::stat' => 
  array (
    0 => 'mixed',
    'path' => 'mixed',
    'interval' => 'mixed',
    'callback' => 'mixed',
    'data=' => 'mixed',
    'priority=' => 'mixed',
  ),
  'evloop::stop' => 
  array (
    0 => 'mixed',
    'how=' => 'mixed',
  ),
  'evloop::suspend' => 
  array (
    0 => 'mixed',
  ),
  'evloop::timer' => 
  array (
    0 => 'mixed',
    'after' => 'mixed',
    'repeat' => 'mixed',
    'callback' => 'mixed',
    'data=' => 'mixed',
    'priority=' => 'mixed',
  ),
  'evloop::verify' => 
  array (
    0 => 'mixed',
  ),
  'evperiodic::__construct' => 
  array (
    0 => 'void',
    'offset' => 'mixed',
    'interval' => 'mixed',
    'reschedule_cb' => 'mixed',
    'callback' => 'mixed',
    'data=' => 'mixed',
    'priority=' => 'mixed',
  ),
  'evperiodic::again' => 
  array (
    0 => 'mixed',
  ),
  'evperiodic::at' => 
  array (
    0 => 'mixed',
  ),
  'evperiodic::clear' => 
  array (
    0 => 'mixed',
  ),
  'evperiodic::createstopped' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
    'interval' => 'mixed',
    'reschedule_cb' => 'mixed',
    'callback' => 'mixed',
    'data=' => 'mixed',
    'priority=' => 'mixed',
  ),
  'evperiodic::feed' => 
  array (
    0 => 'mixed',
    'revents' => 'mixed',
  ),
  'evperiodic::getloop' => 
  array (
    0 => 'mixed',
  ),
  'evperiodic::invoke' => 
  array (
    0 => 'mixed',
    'revents' => 'mixed',
  ),
  'evperiodic::keepalive' => 
  array (
    0 => 'mixed',
    'value=' => 'mixed',
  ),
  'evperiodic::set' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
    'interval' => 'mixed',
  ),
  'evperiodic::setcallback' => 
  array (
    0 => 'mixed',
    'callback' => 'mixed',
  ),
  'evperiodic::start' => 
  array (
    0 => 'mixed',
  ),
  'evperiodic::stop' => 
  array (
    0 => 'mixed',
  ),
  'evprepare::__construct' => 
  array (
    0 => 'void',
    'callback' => 'mixed',
    'data=' => 'mixed',
    'priority=' => 'mixed',
  ),
  'evprepare::clear' => 
  array (
    0 => 'mixed',
  ),
  'evprepare::createstopped' => 
  array (
    0 => 'mixed',
    'callback' => 'mixed',
    'data=' => 'mixed',
    'priority=' => 'mixed',
  ),
  'evprepare::feed' => 
  array (
    0 => 'mixed',
    'revents' => 'mixed',
  ),
  'evprepare::getloop' => 
  array (
    0 => 'mixed',
  ),
  'evprepare::invoke' => 
  array (
    0 => 'mixed',
    'revents' => 'mixed',
  ),
  'evprepare::keepalive' => 
  array (
    0 => 'mixed',
    'value=' => 'mixed',
  ),
  'evprepare::setcallback' => 
  array (
    0 => 'mixed',
    'callback' => 'mixed',
  ),
  'evprepare::start' => 
  array (
    0 => 'mixed',
  ),
  'evprepare::stop' => 
  array (
    0 => 'mixed',
  ),
  'evsignal::__construct' => 
  array (
    0 => 'void',
    'signum' => 'mixed',
    'callback' => 'mixed',
    'data=' => 'mixed',
    'priority=' => 'mixed',
  ),
  'evsignal::clear' => 
  array (
    0 => 'mixed',
  ),
  'evsignal::createstopped' => 
  array (
    0 => 'mixed',
    'signum' => 'mixed',
    'callback' => 'mixed',
    'data=' => 'mixed',
    'priority=' => 'mixed',
  ),
  'evsignal::feed' => 
  array (
    0 => 'mixed',
    'revents' => 'mixed',
  ),
  'evsignal::getloop' => 
  array (
    0 => 'mixed',
  ),
  'evsignal::invoke' => 
  array (
    0 => 'mixed',
    'revents' => 'mixed',
  ),
  'evsignal::keepalive' => 
  array (
    0 => 'mixed',
    'value=' => 'mixed',
  ),
  'evsignal::set' => 
  array (
    0 => 'mixed',
    'signum' => 'mixed',
  ),
  'evsignal::setcallback' => 
  array (
    0 => 'mixed',
    'callback' => 'mixed',
  ),
  'evsignal::start' => 
  array (
    0 => 'mixed',
  ),
  'evsignal::stop' => 
  array (
    0 => 'mixed',
  ),
  'evstat::__construct' => 
  array (
    0 => 'void',
    'path' => 'mixed',
    'interval' => 'mixed',
    'callback' => 'mixed',
    'data=' => 'mixed',
    'priority=' => 'mixed',
  ),
  'evstat::attr' => 
  array (
    0 => 'mixed',
  ),
  'evstat::clear' => 
  array (
    0 => 'mixed',
  ),
  'evstat::createstopped' => 
  array (
    0 => 'mixed',
    'path' => 'mixed',
    'interval' => 'mixed',
    'callback' => 'mixed',
    'data=' => 'mixed',
    'priority=' => 'mixed',
  ),
  'evstat::feed' => 
  array (
    0 => 'mixed',
    'revents' => 'mixed',
  ),
  'evstat::getloop' => 
  array (
    0 => 'mixed',
  ),
  'evstat::invoke' => 
  array (
    0 => 'mixed',
    'revents' => 'mixed',
  ),
  'evstat::keepalive' => 
  array (
    0 => 'mixed',
    'value=' => 'mixed',
  ),
  'evstat::prev' => 
  array (
    0 => 'mixed',
  ),
  'evstat::set' => 
  array (
    0 => 'mixed',
    'path' => 'mixed',
    'interval' => 'mixed',
  ),
  'evstat::setcallback' => 
  array (
    0 => 'mixed',
    'callback' => 'mixed',
  ),
  'evstat::start' => 
  array (
    0 => 'mixed',
  ),
  'evstat::stat' => 
  array (
    0 => 'mixed',
  ),
  'evstat::stop' => 
  array (
    0 => 'mixed',
  ),
  'evtimer::__construct' => 
  array (
    0 => 'void',
    'after' => 'mixed',
    'repeat' => 'mixed',
    'callback' => 'mixed',
    'data=' => 'mixed',
    'priority=' => 'mixed',
  ),
  'evtimer::again' => 
  array (
    0 => 'mixed',
  ),
  'evtimer::clear' => 
  array (
    0 => 'mixed',
  ),
  'evtimer::createstopped' => 
  array (
    0 => 'mixed',
    'after' => 'mixed',
    'repeat' => 'mixed',
    'callback' => 'mixed',
    'data=' => 'mixed',
    'priority=' => 'mixed',
  ),
  'evtimer::feed' => 
  array (
    0 => 'mixed',
    'revents' => 'mixed',
  ),
  'evtimer::getloop' => 
  array (
    0 => 'mixed',
  ),
  'evtimer::invoke' => 
  array (
    0 => 'mixed',
    'revents' => 'mixed',
  ),
  'evtimer::keepalive' => 
  array (
    0 => 'mixed',
    'value=' => 'mixed',
  ),
  'evtimer::set' => 
  array (
    0 => 'mixed',
    'after' => 'mixed',
    'repeat' => 'mixed',
  ),
  'evtimer::setcallback' => 
  array (
    0 => 'mixed',
    'callback' => 'mixed',
  ),
  'evtimer::start' => 
  array (
    0 => 'mixed',
  ),
  'evtimer::stop' => 
  array (
    0 => 'mixed',
  ),
  'evwatcher::__construct' => 
  array (
    0 => 'void',
  ),
  'evwatcher::clear' => 
  array (
    0 => 'mixed',
  ),
  'evwatcher::feed' => 
  array (
    0 => 'mixed',
    'revents' => 'mixed',
  ),
  'evwatcher::getloop' => 
  array (
    0 => 'mixed',
  ),
  'evwatcher::invoke' => 
  array (
    0 => 'mixed',
    'revents' => 'mixed',
  ),
  'evwatcher::keepalive' => 
  array (
    0 => 'mixed',
    'value=' => 'mixed',
  ),
  'evwatcher::setcallback' => 
  array (
    0 => 'mixed',
    'callback' => 'mixed',
  ),
  'evwatcher::start' => 
  array (
    0 => 'mixed',
  ),
  'evwatcher::stop' => 
  array (
    0 => 'mixed',
  ),
  'exception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'exception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'exception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'exception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'exception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'exception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'exception::getline' => 
  array (
    0 => 'mixed',
  ),
  'exception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'exception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'exception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'exception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'exec' => 
  array (
    0 => 'mixed',
    'command' => 'mixed',
    '&output=' => 'mixed',
    '&return_value=' => 'mixed',
  ),
  'exp' => 
  array (
    0 => 'mixed',
    'number' => 'mixed',
  ),
  'explode' => 
  array (
    0 => 'mixed',
    'separator' => 'mixed',
    'str' => 'mixed',
    'limit=' => 'mixed',
  ),
  'expm1' => 
  array (
    0 => 'mixed',
    'number' => 'mixed',
  ),
  'extension_loaded' => 
  array (
    0 => 'mixed',
    'extension_name' => 'mixed',
  ),
  'extract' => 
  array (
    0 => 'mixed',
    '&arg' => 'mixed',
    'extract_type=' => 'mixed',
    'prefix=' => 'mixed',
  ),
  'ezmlm_hash' => 
  array (
    0 => 'mixed',
    'addr' => 'mixed',
  ),
  'fclose' => 
  array (
    0 => 'mixed',
    'fp' => 'mixed',
  ),
  'feof' => 
  array (
    0 => 'mixed',
    'fp' => 'mixed',
  ),
  'fflush' => 
  array (
    0 => 'mixed',
    'fp' => 'mixed',
  ),
  'fgetc' => 
  array (
    0 => 'mixed',
    'fp' => 'mixed',
  ),
  'fgetcsv' => 
  array (
    0 => 'mixed',
    'fp' => 'mixed',
    'length=' => 'mixed',
    'delimiter=' => 'mixed',
    'enclosure=' => 'mixed',
    'escape=' => 'mixed',
  ),
  'fgets' => 
  array (
    0 => 'mixed',
    'fp' => 'mixed',
    'length=' => 'mixed',
  ),
  'fgetss' => 
  array (
    0 => 'mixed',
    'fp' => 'mixed',
    'length=' => 'mixed',
    'allowable_tags=' => 'mixed',
  ),
  'file' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
    'flags=' => 'mixed',
    'context=' => 'mixed',
  ),
  'file_exists' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'file_get_contents' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
    'context=' => 'mixed',
    'offset=' => 'mixed',
    'maxlen=' => 'mixed',
    'use_include_path=' => 'bool',
  ),
  'file_put_contents' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
    'data' => 'mixed',
    'flags=' => 'mixed',
    'context=' => 'mixed',
  ),
  'fileatime' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'filectime' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'filegroup' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'fileinode' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'filemtime' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'fileowner' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'fileperms' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'filesize' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'filesystemiterator::__construct' => 
  array (
    0 => 'void',
    'path' => 'mixed',
    'flags=' => 'mixed',
  ),
  'filesystemiterator::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'filesystemiterator::_bad_state_ex' => 
  array (
    0 => 'mixed',
  ),
  'filesystemiterator::current' => 
  array (
    0 => 'mixed',
  ),
  'filesystemiterator::getatime' => 
  array (
    0 => 'mixed',
  ),
  'filesystemiterator::getbasename' => 
  array (
    0 => 'mixed',
    'suffix=' => 'mixed',
  ),
  'filesystemiterator::getctime' => 
  array (
    0 => 'mixed',
  ),
  'filesystemiterator::getextension' => 
  array (
    0 => 'mixed',
  ),
  'filesystemiterator::getfileinfo' => 
  array (
    0 => 'mixed',
    'class_name=' => 'mixed',
  ),
  'filesystemiterator::getfilename' => 
  array (
    0 => 'mixed',
  ),
  'filesystemiterator::getflags' => 
  array (
    0 => 'mixed',
  ),
  'filesystemiterator::getgroup' => 
  array (
    0 => 'mixed',
  ),
  'filesystemiterator::getinode' => 
  array (
    0 => 'mixed',
  ),
  'filesystemiterator::getlinktarget' => 
  array (
    0 => 'mixed',
  ),
  'filesystemiterator::getmtime' => 
  array (
    0 => 'mixed',
  ),
  'filesystemiterator::getowner' => 
  array (
    0 => 'mixed',
  ),
  'filesystemiterator::getpath' => 
  array (
    0 => 'mixed',
  ),
  'filesystemiterator::getpathinfo' => 
  array (
    0 => 'mixed',
    'class_name=' => 'mixed',
  ),
  'filesystemiterator::getpathname' => 
  array (
    0 => 'mixed',
  ),
  'filesystemiterator::getperms' => 
  array (
    0 => 'mixed',
  ),
  'filesystemiterator::getrealpath' => 
  array (
    0 => 'mixed',
  ),
  'filesystemiterator::getsize' => 
  array (
    0 => 'mixed',
  ),
  'filesystemiterator::gettype' => 
  array (
    0 => 'mixed',
  ),
  'filesystemiterator::isdir' => 
  array (
    0 => 'mixed',
  ),
  'filesystemiterator::isdot' => 
  array (
    0 => 'mixed',
  ),
  'filesystemiterator::isexecutable' => 
  array (
    0 => 'mixed',
  ),
  'filesystemiterator::isfile' => 
  array (
    0 => 'mixed',
  ),
  'filesystemiterator::islink' => 
  array (
    0 => 'mixed',
  ),
  'filesystemiterator::isreadable' => 
  array (
    0 => 'mixed',
  ),
  'filesystemiterator::iswritable' => 
  array (
    0 => 'mixed',
  ),
  'filesystemiterator::key' => 
  array (
    0 => 'mixed',
  ),
  'filesystemiterator::next' => 
  array (
    0 => 'mixed',
  ),
  'filesystemiterator::openfile' => 
  array (
    0 => 'mixed',
    'open_mode=' => 'mixed',
    'use_include_path=' => 'mixed',
    'context=' => 'mixed',
  ),
  'filesystemiterator::rewind' => 
  array (
    0 => 'mixed',
  ),
  'filesystemiterator::seek' => 
  array (
    0 => 'mixed',
    'position' => 'mixed',
  ),
  'filesystemiterator::setfileclass' => 
  array (
    0 => 'mixed',
    'class_name=' => 'mixed',
  ),
  'filesystemiterator::setflags' => 
  array (
    0 => 'mixed',
    'flags=' => 'mixed',
  ),
  'filesystemiterator::setinfoclass' => 
  array (
    0 => 'mixed',
    'class_name=' => 'mixed',
  ),
  'filesystemiterator::valid' => 
  array (
    0 => 'mixed',
  ),
  'filetype' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'filter_has_var' => 
  array (
    0 => 'mixed',
    'type' => 'mixed',
    'variable_name' => 'mixed',
  ),
  'filter_id' => 
  array (
    0 => 'mixed',
    'filtername' => 'mixed',
  ),
  'filter_input' => 
  array (
    0 => 'mixed',
    'type' => 'mixed',
    'variable_name' => 'mixed',
    'filter=' => 'mixed',
    'options=' => 'mixed',
  ),
  'filter_input_array' => 
  array (
    0 => 'mixed',
    'type' => 'mixed',
    'definition=' => 'mixed',
    'add_empty=' => 'mixed',
  ),
  'filter_list' => 
  array (
    0 => 'mixed',
  ),
  'filter_var' => 
  array (
    0 => 'mixed',
    'variable' => 'mixed',
    'filter=' => 'mixed',
    'options=' => 'mixed',
  ),
  'filter_var_array' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
    'definition=' => 'mixed',
    'add_empty=' => 'mixed',
  ),
  'filteriterator::__construct' => 
  array (
    0 => 'void',
    'iterator' => 'Iterator',
  ),
  'filteriterator::accept' => 
  array (
    0 => 'mixed',
  ),
  'filteriterator::current' => 
  array (
    0 => 'mixed',
  ),
  'filteriterator::getinneriterator' => 
  array (
    0 => 'mixed',
  ),
  'filteriterator::key' => 
  array (
    0 => 'mixed',
  ),
  'filteriterator::next' => 
  array (
    0 => 'mixed',
  ),
  'filteriterator::rewind' => 
  array (
    0 => 'mixed',
  ),
  'filteriterator::valid' => 
  array (
    0 => 'mixed',
  ),
  'finfo::buffer' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    'options=' => 'mixed',
    'context=' => 'mixed',
  ),
  'finfo::file' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
    'options=' => 'mixed',
    'context=' => 'mixed',
  ),
  'finfo::finfo' => 
  array (
    0 => 'mixed',
    'options=' => 'mixed',
    'arg=' => 'mixed',
  ),
  'finfo::set_flags' => 
  array (
    0 => 'mixed',
    'options' => 'mixed',
  ),
  'finfo_buffer' => 
  array (
    0 => 'mixed',
    'finfo' => 'mixed',
    'string' => 'mixed',
    'options=' => 'mixed',
    'context=' => 'mixed',
  ),
  'finfo_close' => 
  array (
    0 => 'mixed',
    'finfo' => 'mixed',
  ),
  'finfo_file' => 
  array (
    0 => 'mixed',
    'finfo' => 'mixed',
    'filename' => 'mixed',
    'options=' => 'mixed',
    'context=' => 'mixed',
  ),
  'finfo_open' => 
  array (
    0 => 'mixed',
    'options=' => 'mixed',
    'arg=' => 'mixed',
  ),
  'finfo_set_flags' => 
  array (
    0 => 'mixed',
    'finfo' => 'mixed',
    'options' => 'mixed',
  ),
  'floatval' => 
  array (
    0 => 'mixed',
    'var' => 'mixed',
  ),
  'flock' => 
  array (
    0 => 'mixed',
    'fp' => 'mixed',
    'operation' => 'mixed',
    '&wouldblock=' => 'mixed',
  ),
  'floor' => 
  array (
    0 => 'mixed',
    'number' => 'mixed',
  ),
  'flush' => 
  array (
    0 => 'mixed',
  ),
  'fmod' => 
  array (
    0 => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
  ),
  'fnmatch' => 
  array (
    0 => 'mixed',
    'pattern' => 'mixed',
    'filename' => 'mixed',
    'flags=' => 'mixed',
  ),
  'fopen' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
    'mode' => 'mixed',
    'use_include_path=' => 'mixed',
    'context=' => 'mixed',
  ),
  'forward_static_call' => 
  array (
    0 => 'mixed',
    'function_name' => 'mixed',
    '...parameters=' => 'mixed',
  ),
  'forward_static_call_array' => 
  array (
    0 => 'mixed',
    'function_name' => 'mixed',
    'parameters' => 'mixed',
  ),
  'fpassthru' => 
  array (
    0 => 'mixed',
    'fp' => 'mixed',
  ),
  'fprintf' => 
  array (
    0 => 'mixed',
    'stream' => 'mixed',
    'format' => 'mixed',
    '...args=' => 'mixed',
  ),
  'fputcsv' => 
  array (
    0 => 'mixed',
    'fp' => 'mixed',
    'fields' => 'mixed',
    'delimiter=' => 'mixed',
    'enclosure=' => 'mixed',
    'escape_char=' => 'mixed',
  ),
  'fputs' => 
  array (
    0 => 'mixed',
    'fp' => 'mixed',
    'str' => 'mixed',
    'length=' => 'mixed',
  ),
  'fread' => 
  array (
    0 => 'mixed',
    'fp' => 'mixed',
    'length' => 'mixed',
  ),
  'fscanf' => 
  array (
    0 => 'mixed',
    'stream' => 'mixed',
    'format' => 'mixed',
    '...&vars=' => 'mixed',
  ),
  'fseek' => 
  array (
    0 => 'mixed',
    'fp' => 'mixed',
    'offset' => 'mixed',
    'whence=' => 'mixed',
  ),
  'fsockopen' => 
  array (
    0 => 'mixed',
    'hostname' => 'mixed',
    'port=' => 'mixed',
    '&errno=' => 'mixed',
    '&errstr=' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'fstat' => 
  array (
    0 => 'mixed',
    'fp' => 'mixed',
  ),
  'ftell' => 
  array (
    0 => 'mixed',
    'fp' => 'mixed',
  ),
  'ftok' => 
  array (
    0 => 'mixed',
    'pathname' => 'mixed',
    'proj' => 'mixed',
  ),
  'ftp_alloc' => 
  array (
    0 => 'mixed',
    'ftp' => 'mixed',
    'size' => 'mixed',
    '&response=' => 'mixed',
  ),
  'ftp_append' => 
  array (
    0 => 'mixed',
    'ftp' => 'mixed',
    'remote_file' => 'mixed',
    'local_file' => 'mixed',
    'mode=' => 'mixed',
  ),
  'ftp_cdup' => 
  array (
    0 => 'mixed',
    'ftp' => 'mixed',
  ),
  'ftp_chdir' => 
  array (
    0 => 'mixed',
    'ftp' => 'mixed',
    'directory' => 'mixed',
  ),
  'ftp_chmod' => 
  array (
    0 => 'mixed',
    'ftp' => 'mixed',
    'mode' => 'mixed',
    'filename' => 'mixed',
  ),
  'ftp_close' => 
  array (
    0 => 'mixed',
    'ftp' => 'mixed',
  ),
  'ftp_connect' => 
  array (
    0 => 'mixed',
    'host' => 'mixed',
    'port=' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'ftp_delete' => 
  array (
    0 => 'mixed',
    'ftp' => 'mixed',
    'file' => 'mixed',
  ),
  'ftp_exec' => 
  array (
    0 => 'mixed',
    'ftp' => 'mixed',
    'command' => 'mixed',
  ),
  'ftp_fget' => 
  array (
    0 => 'mixed',
    'ftp' => 'mixed',
    'fp' => 'mixed',
    'remote_file' => 'mixed',
    'mode=' => 'mixed',
    'resumepos=' => 'mixed',
  ),
  'ftp_fput' => 
  array (
    0 => 'mixed',
    'ftp' => 'mixed',
    'remote_file' => 'mixed',
    'fp' => 'mixed',
    'mode=' => 'mixed',
    'startpos=' => 'mixed',
  ),
  'ftp_get' => 
  array (
    0 => 'mixed',
    'ftp' => 'mixed',
    'local_file' => 'mixed',
    'remote_file' => 'mixed',
    'mode=' => 'mixed',
    'resume_pos=' => 'mixed',
  ),
  'ftp_get_option' => 
  array (
    0 => 'mixed',
    'ftp' => 'mixed',
    'option' => 'mixed',
  ),
  'ftp_login' => 
  array (
    0 => 'mixed',
    'ftp' => 'mixed',
    'username' => 'mixed',
    'password' => 'mixed',
  ),
  'ftp_mdtm' => 
  array (
    0 => 'mixed',
    'ftp' => 'mixed',
    'filename' => 'mixed',
  ),
  'ftp_mkdir' => 
  array (
    0 => 'mixed',
    'ftp' => 'mixed',
    'directory' => 'mixed',
  ),
  'ftp_mlsd' => 
  array (
    0 => 'mixed',
    'ftp' => 'mixed',
    'directory' => 'mixed',
  ),
  'ftp_nb_continue' => 
  array (
    0 => 'mixed',
    'ftp' => 'mixed',
  ),
  'ftp_nb_fget' => 
  array (
    0 => 'mixed',
    'ftp' => 'mixed',
    'fp' => 'mixed',
    'remote_file' => 'mixed',
    'mode=' => 'mixed',
    'resumepos=' => 'mixed',
  ),
  'ftp_nb_fput' => 
  array (
    0 => 'mixed',
    'ftp' => 'mixed',
    'remote_file' => 'mixed',
    'fp' => 'mixed',
    'mode=' => 'mixed',
    'startpos=' => 'mixed',
  ),
  'ftp_nb_get' => 
  array (
    0 => 'mixed',
    'ftp' => 'mixed',
    'local_file' => 'mixed',
    'remote_file' => 'mixed',
    'mode=' => 'mixed',
    'resume_pos=' => 'mixed',
  ),
  'ftp_nb_put' => 
  array (
    0 => 'mixed',
    'ftp' => 'mixed',
    'remote_file' => 'mixed',
    'local_file' => 'mixed',
    'mode=' => 'mixed',
    'startpos=' => 'mixed',
  ),
  'ftp_nlist' => 
  array (
    0 => 'mixed',
    'ftp' => 'mixed',
    'directory' => 'mixed',
  ),
  'ftp_pasv' => 
  array (
    0 => 'mixed',
    'ftp' => 'mixed',
    'pasv' => 'mixed',
  ),
  'ftp_put' => 
  array (
    0 => 'mixed',
    'ftp' => 'mixed',
    'remote_file' => 'mixed',
    'local_file' => 'mixed',
    'mode=' => 'mixed',
    'startpos=' => 'mixed',
  ),
  'ftp_pwd' => 
  array (
    0 => 'mixed',
    'ftp' => 'mixed',
  ),
  'ftp_quit' => 
  array (
    0 => 'mixed',
    'ftp' => 'mixed',
  ),
  'ftp_raw' => 
  array (
    0 => 'mixed',
    'ftp' => 'mixed',
    'command' => 'mixed',
  ),
  'ftp_rawlist' => 
  array (
    0 => 'mixed',
    'ftp' => 'mixed',
    'directory' => 'mixed',
    'recursive=' => 'mixed',
  ),
  'ftp_rename' => 
  array (
    0 => 'mixed',
    'ftp' => 'mixed',
    'src' => 'mixed',
    'dest' => 'mixed',
  ),
  'ftp_rmdir' => 
  array (
    0 => 'mixed',
    'ftp' => 'mixed',
    'directory' => 'mixed',
  ),
  'ftp_set_option' => 
  array (
    0 => 'mixed',
    'ftp' => 'mixed',
    'option' => 'mixed',
    'value' => 'mixed',
  ),
  'ftp_site' => 
  array (
    0 => 'mixed',
    'ftp' => 'mixed',
    'cmd' => 'mixed',
  ),
  'ftp_size' => 
  array (
    0 => 'mixed',
    'ftp' => 'mixed',
    'filename' => 'mixed',
  ),
  'ftp_ssl_connect' => 
  array (
    0 => 'mixed',
    'host' => 'mixed',
    'port=' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'ftp_systype' => 
  array (
    0 => 'mixed',
    'ftp' => 'mixed',
  ),
  'ftruncate' => 
  array (
    0 => 'mixed',
    'fp' => 'mixed',
    'size' => 'mixed',
  ),
  'func_get_arg' => 
  array (
    0 => 'mixed',
    'arg_num' => 'mixed',
  ),
  'func_get_args' => 
  array (
    0 => 'mixed',
  ),
  'func_num_args' => 
  array (
    0 => 'mixed',
  ),
  'function_exists' => 
  array (
    0 => 'mixed',
    'function_name' => 'mixed',
  ),
  'fwrite' => 
  array (
    0 => 'mixed',
    'fp' => 'mixed',
    'str' => 'mixed',
    'length=' => 'mixed',
  ),
  'gc_collect_cycles' => 
  array (
    0 => 'mixed',
  ),
  'gc_disable' => 
  array (
    0 => 'mixed',
  ),
  'gc_enable' => 
  array (
    0 => 'mixed',
  ),
  'gc_enabled' => 
  array (
    0 => 'mixed',
  ),
  'gc_mem_caches' => 
  array (
    0 => 'mixed',
  ),
  'gc_status' => 
  array (
    0 => 'mixed',
  ),
  'gd_info' => 
  array (
    0 => 'mixed',
  ),
  'generator::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'generator::current' => 
  array (
    0 => 'mixed',
  ),
  'generator::getreturn' => 
  array (
    0 => 'mixed',
  ),
  'generator::key' => 
  array (
    0 => 'mixed',
  ),
  'generator::next' => 
  array (
    0 => 'mixed',
  ),
  'generator::rewind' => 
  array (
    0 => 'mixed',
  ),
  'generator::send' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'generator::throw' => 
  array (
    0 => 'mixed',
    'exception' => 'mixed',
  ),
  'generator::valid' => 
  array (
    0 => 'mixed',
  ),
  'get_browser' => 
  array (
    0 => 'mixed',
    'browser_name=' => 'mixed',
    'return_array=' => 'mixed',
  ),
  'get_called_class' => 
  array (
    0 => 'mixed',
  ),
  'get_cfg_var' => 
  array (
    0 => 'mixed',
    'option_name' => 'mixed',
  ),
  'get_class' => 
  array (
    0 => 'mixed',
    'object=' => 'mixed',
  ),
  'get_class_methods' => 
  array (
    0 => 'mixed',
    'class' => 'mixed',
  ),
  'get_class_vars' => 
  array (
    0 => 'mixed',
    'class_name' => 'mixed',
  ),
  'get_current_user' => 
  array (
    0 => 'mixed',
  ),
  'get_declared_classes' => 
  array (
    0 => 'mixed',
  ),
  'get_declared_interfaces' => 
  array (
    0 => 'mixed',
  ),
  'get_declared_traits' => 
  array (
    0 => 'mixed',
  ),
  'get_defined_constants' => 
  array (
    0 => 'mixed',
    'categorize=' => 'mixed',
  ),
  'get_defined_functions' => 
  array (
    0 => 'mixed',
    'exclude_disabled=' => 'mixed',
  ),
  'get_defined_vars' => 
  array (
    0 => 'mixed',
  ),
  'get_extension_funcs' => 
  array (
    0 => 'mixed',
    'extension_name' => 'mixed',
  ),
  'get_headers' => 
  array (
    0 => 'mixed',
    'url' => 'mixed',
    'format=' => 'mixed',
    'context=' => 'mixed',
  ),
  'get_html_translation_table' => 
  array (
    0 => 'mixed',
    'table=' => 'mixed',
    'quote_style=' => 'mixed',
    'encoding=' => 'mixed',
  ),
  'get_include_path' => 
  array (
    0 => 'mixed',
  ),
  'get_included_files' => 
  array (
    0 => 'mixed',
  ),
  'get_loaded_extensions' => 
  array (
    0 => 'mixed',
    'zend_extensions=' => 'mixed',
  ),
  'get_magic_quotes_gpc' => 
  array (
    0 => 'mixed',
  ),
  'get_magic_quotes_runtime' => 
  array (
    0 => 'mixed',
  ),
  'get_meta_tags' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
    'use_include_path=' => 'mixed',
  ),
  'get_object_vars' => 
  array (
    0 => 'mixed',
    'obj' => 'mixed',
  ),
  'get_parent_class' => 
  array (
    0 => 'mixed',
    'object=' => 'mixed',
  ),
  'get_required_files' => 
  array (
    0 => 'mixed',
  ),
  'get_resource_type' => 
  array (
    0 => 'mixed',
    'res' => 'mixed',
  ),
  'get_resources' => 
  array (
    0 => 'mixed',
    'type=' => 'mixed',
  ),
  'getcwd' => 
  array (
    0 => 'mixed',
  ),
  'getdate' => 
  array (
    0 => 'mixed',
    'timestamp=' => 'mixed',
  ),
  'getenv' => 
  array (
    0 => 'mixed',
    'varname=' => 'mixed',
    'local_only=' => 'mixed',
  ),
  'gethostbyaddr' => 
  array (
    0 => 'mixed',
    'ip_address' => 'mixed',
  ),
  'gethostbyname' => 
  array (
    0 => 'mixed',
    'hostname' => 'mixed',
  ),
  'gethostbynamel' => 
  array (
    0 => 'mixed',
    'hostname' => 'mixed',
  ),
  'gethostname' => 
  array (
    0 => 'mixed',
  ),
  'getimagesize' => 
  array (
    0 => 'mixed',
    'imagefile' => 'mixed',
    '&info=' => 'mixed',
  ),
  'getimagesizefromstring' => 
  array (
    0 => 'mixed',
    'imagefile' => 'mixed',
    '&info=' => 'mixed',
  ),
  'getlastmod' => 
  array (
    0 => 'mixed',
  ),
  'getmxrr' => 
  array (
    0 => 'mixed',
    'hostname' => 'mixed',
    '&mxhosts' => 'mixed',
    '&weight=' => 'mixed',
  ),
  'getmygid' => 
  array (
    0 => 'mixed',
  ),
  'getmyinode' => 
  array (
    0 => 'mixed',
  ),
  'getmypid' => 
  array (
    0 => 'mixed',
  ),
  'getmyuid' => 
  array (
    0 => 'mixed',
  ),
  'getopt' => 
  array (
    0 => 'mixed',
    'options' => 'mixed',
    'opts=' => 'mixed',
    '&optind=' => 'mixed',
  ),
  'getprotobyname' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
  ),
  'getprotobynumber' => 
  array (
    0 => 'mixed',
    'proto' => 'mixed',
  ),
  'getrandmax' => 
  array (
    0 => 'mixed',
  ),
  'getrusage' => 
  array (
    0 => 'mixed',
    'who=' => 'mixed',
  ),
  'getservbyname' => 
  array (
    0 => 'mixed',
    'service' => 'mixed',
    'protocol' => 'mixed',
  ),
  'getservbyport' => 
  array (
    0 => 'mixed',
    'port' => 'mixed',
    'protocol' => 'mixed',
  ),
  'gettimeofday' => 
  array (
    0 => 'mixed',
    'get_as_float=' => 'mixed',
  ),
  'gettype' => 
  array (
    0 => 'mixed',
    'var' => 'mixed',
  ),
  'glob' => 
  array (
    0 => 'mixed',
    'pattern' => 'mixed',
    'flags=' => 'mixed',
  ),
  'globiterator::__construct' => 
  array (
    0 => 'void',
    'path' => 'mixed',
    'flags=' => 'mixed',
  ),
  'globiterator::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'globiterator::_bad_state_ex' => 
  array (
    0 => 'mixed',
  ),
  'globiterator::count' => 
  array (
    0 => 'mixed',
  ),
  'globiterator::current' => 
  array (
    0 => 'mixed',
  ),
  'globiterator::getatime' => 
  array (
    0 => 'mixed',
  ),
  'globiterator::getbasename' => 
  array (
    0 => 'mixed',
    'suffix=' => 'mixed',
  ),
  'globiterator::getctime' => 
  array (
    0 => 'mixed',
  ),
  'globiterator::getextension' => 
  array (
    0 => 'mixed',
  ),
  'globiterator::getfileinfo' => 
  array (
    0 => 'mixed',
    'class_name=' => 'mixed',
  ),
  'globiterator::getfilename' => 
  array (
    0 => 'mixed',
  ),
  'globiterator::getflags' => 
  array (
    0 => 'mixed',
  ),
  'globiterator::getgroup' => 
  array (
    0 => 'mixed',
  ),
  'globiterator::getinode' => 
  array (
    0 => 'mixed',
  ),
  'globiterator::getlinktarget' => 
  array (
    0 => 'mixed',
  ),
  'globiterator::getmtime' => 
  array (
    0 => 'mixed',
  ),
  'globiterator::getowner' => 
  array (
    0 => 'mixed',
  ),
  'globiterator::getpath' => 
  array (
    0 => 'mixed',
  ),
  'globiterator::getpathinfo' => 
  array (
    0 => 'mixed',
    'class_name=' => 'mixed',
  ),
  'globiterator::getpathname' => 
  array (
    0 => 'mixed',
  ),
  'globiterator::getperms' => 
  array (
    0 => 'mixed',
  ),
  'globiterator::getrealpath' => 
  array (
    0 => 'mixed',
  ),
  'globiterator::getsize' => 
  array (
    0 => 'mixed',
  ),
  'globiterator::gettype' => 
  array (
    0 => 'mixed',
  ),
  'globiterator::isdir' => 
  array (
    0 => 'mixed',
  ),
  'globiterator::isdot' => 
  array (
    0 => 'mixed',
  ),
  'globiterator::isexecutable' => 
  array (
    0 => 'mixed',
  ),
  'globiterator::isfile' => 
  array (
    0 => 'mixed',
  ),
  'globiterator::islink' => 
  array (
    0 => 'mixed',
  ),
  'globiterator::isreadable' => 
  array (
    0 => 'mixed',
  ),
  'globiterator::iswritable' => 
  array (
    0 => 'mixed',
  ),
  'globiterator::key' => 
  array (
    0 => 'mixed',
  ),
  'globiterator::next' => 
  array (
    0 => 'mixed',
  ),
  'globiterator::openfile' => 
  array (
    0 => 'mixed',
    'open_mode=' => 'mixed',
    'use_include_path=' => 'mixed',
    'context=' => 'mixed',
  ),
  'globiterator::rewind' => 
  array (
    0 => 'mixed',
  ),
  'globiterator::seek' => 
  array (
    0 => 'mixed',
    'position' => 'mixed',
  ),
  'globiterator::setfileclass' => 
  array (
    0 => 'mixed',
    'class_name=' => 'mixed',
  ),
  'globiterator::setflags' => 
  array (
    0 => 'mixed',
    'flags=' => 'mixed',
  ),
  'globiterator::setinfoclass' => 
  array (
    0 => 'mixed',
    'class_name=' => 'mixed',
  ),
  'globiterator::valid' => 
  array (
    0 => 'mixed',
  ),
  'gmdate' => 
  array (
    0 => 'mixed',
    'format' => 'mixed',
    'timestamp=' => 'mixed',
  ),
  'gmmktime' => 
  array (
    0 => 'mixed',
    'hour=' => 'mixed',
    'min=' => 'mixed',
    'sec=' => 'mixed',
    'mon=' => 'mixed',
    'day=' => 'mixed',
    'year=' => 'mixed',
  ),
  'gmp_abs' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
  ),
  'gmp_add' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
    'b' => 'mixed',
  ),
  'gmp_and' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
    'b' => 'mixed',
  ),
  'gmp_binomial' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
    'b' => 'mixed',
  ),
  'gmp_clrbit' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
    'index' => 'mixed',
  ),
  'gmp_cmp' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
    'b' => 'mixed',
  ),
  'gmp_com' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
  ),
  'gmp_div' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
    'b' => 'mixed',
    'round=' => 'mixed',
  ),
  'gmp_div_q' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
    'b' => 'mixed',
    'round=' => 'mixed',
  ),
  'gmp_div_qr' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
    'b' => 'mixed',
    'round=' => 'mixed',
  ),
  'gmp_div_r' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
    'b' => 'mixed',
    'round=' => 'mixed',
  ),
  'gmp_divexact' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
    'b' => 'mixed',
  ),
  'gmp_export' => 
  array (
    0 => 'mixed',
    'gmpnumber' => 'mixed',
    'word_size=' => 'mixed',
    'options=' => 'mixed',
  ),
  'gmp_fact' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
  ),
  'gmp_gcd' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
    'b' => 'mixed',
  ),
  'gmp_gcdext' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
    'b' => 'mixed',
  ),
  'gmp_hamdist' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
    'b' => 'mixed',
  ),
  'gmp_import' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
    'word_size=' => 'mixed',
    'options=' => 'mixed',
  ),
  'gmp_init' => 
  array (
    0 => 'mixed',
    'number' => 'mixed',
    'base=' => 'mixed',
  ),
  'gmp_intval' => 
  array (
    0 => 'mixed',
    'gmpnumber' => 'mixed',
  ),
  'gmp_invert' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
    'b' => 'mixed',
  ),
  'gmp_jacobi' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
    'b' => 'mixed',
  ),
  'gmp_kronecker' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
    'b' => 'mixed',
  ),
  'gmp_lcm' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
    'b' => 'mixed',
  ),
  'gmp_legendre' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
    'b' => 'mixed',
  ),
  'gmp_mod' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
    'b' => 'mixed',
  ),
  'gmp_mul' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
    'b' => 'mixed',
  ),
  'gmp_neg' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
  ),
  'gmp_nextprime' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
  ),
  'gmp_or' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
    'b' => 'mixed',
  ),
  'gmp_perfect_power' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
  ),
  'gmp_perfect_square' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
  ),
  'gmp_popcount' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
  ),
  'gmp_pow' => 
  array (
    0 => 'mixed',
    'base' => 'mixed',
    'exp' => 'mixed',
  ),
  'gmp_powm' => 
  array (
    0 => 'mixed',
    'base' => 'mixed',
    'exp' => 'mixed',
    'mod' => 'mixed',
  ),
  'gmp_prob_prime' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
    'reps=' => 'mixed',
  ),
  'gmp_random' => 
  array (
    0 => 'mixed',
    'limiter=' => 'mixed',
  ),
  'gmp_random_bits' => 
  array (
    0 => 'mixed',
    'bits' => 'mixed',
  ),
  'gmp_random_range' => 
  array (
    0 => 'mixed',
    'min' => 'mixed',
    'max' => 'mixed',
  ),
  'gmp_random_seed' => 
  array (
    0 => 'mixed',
    'seed' => 'mixed',
  ),
  'gmp_root' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
    'nth' => 'mixed',
  ),
  'gmp_rootrem' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
    'nth' => 'mixed',
  ),
  'gmp_scan0' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
    'start' => 'mixed',
  ),
  'gmp_scan1' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
    'start' => 'mixed',
  ),
  'gmp_setbit' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
    'index' => 'mixed',
    'set_clear=' => 'mixed',
  ),
  'gmp_sign' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
  ),
  'gmp_sqrt' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
  ),
  'gmp_sqrtrem' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
  ),
  'gmp_strval' => 
  array (
    0 => 'mixed',
    'gmpnumber' => 'mixed',
    'base=' => 'mixed',
  ),
  'gmp_sub' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
    'b' => 'mixed',
  ),
  'gmp_testbit' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
    'index' => 'mixed',
  ),
  'gmp_xor' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
    'b' => 'mixed',
  ),
  'gmstrftime' => 
  array (
    0 => 'mixed',
    'format' => 'mixed',
    'timestamp=' => 'mixed',
  ),
  'go' => 
  array (
    0 => 'mixed',
    'func' => 'callable',
  ),
  'grapheme_extract' => 
  array (
    0 => 'mixed',
    'arg1' => 'mixed',
    'arg2' => 'mixed',
    'arg3=' => 'mixed',
    'arg4=' => 'mixed',
    '&arg5=' => 'mixed',
  ),
  'grapheme_stripos' => 
  array (
    0 => 'mixed',
    'haystack' => 'mixed',
    'needle' => 'mixed',
    'offset=' => 'mixed',
  ),
  'grapheme_stristr' => 
  array (
    0 => 'mixed',
    'haystack' => 'mixed',
    'needle' => 'mixed',
    'before_needle=' => 'mixed',
  ),
  'grapheme_strlen' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
  ),
  'grapheme_strpos' => 
  array (
    0 => 'mixed',
    'haystack' => 'mixed',
    'needle' => 'mixed',
    'offset=' => 'mixed',
  ),
  'grapheme_strripos' => 
  array (
    0 => 'mixed',
    'haystack' => 'mixed',
    'needle' => 'mixed',
    'offset=' => 'mixed',
  ),
  'grapheme_strrpos' => 
  array (
    0 => 'mixed',
    'haystack' => 'mixed',
    'needle' => 'mixed',
    'offset=' => 'mixed',
  ),
  'grapheme_strstr' => 
  array (
    0 => 'mixed',
    'haystack' => 'mixed',
    'needle' => 'mixed',
    'before_needle=' => 'mixed',
  ),
  'grapheme_substr' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    'start' => 'mixed',
    'length=' => 'mixed',
  ),
  'grpc\\call::__construct' => 
  array (
    0 => 'void',
    'channel' => 'mixed',
    'method' => 'mixed',
    'deadline' => 'mixed',
    'host_override=' => 'mixed',
  ),
  'grpc\\call::cancel' => 
  array (
    0 => 'mixed',
  ),
  'grpc\\call::getpeer' => 
  array (
    0 => 'mixed',
  ),
  'grpc\\call::setcredentials' => 
  array (
    0 => 'mixed',
    'credentials' => 'mixed',
  ),
  'grpc\\call::startbatch' => 
  array (
    0 => 'mixed',
    'ops' => 'mixed',
  ),
  'grpc\\callcredentials::createcomposite' => 
  array (
    0 => 'mixed',
    'creds1' => 'mixed',
    'creds2' => 'mixed',
  ),
  'grpc\\callcredentials::createfromplugin' => 
  array (
    0 => 'mixed',
    'callback' => 'mixed',
  ),
  'grpc\\channel::__construct' => 
  array (
    0 => 'void',
    'target' => 'mixed',
    'args' => 'mixed',
  ),
  'grpc\\channel::close' => 
  array (
    0 => 'mixed',
  ),
  'grpc\\channel::getconnectivitystate' => 
  array (
    0 => 'mixed',
    'try_to_connect=' => 'mixed',
  ),
  'grpc\\channel::gettarget' => 
  array (
    0 => 'mixed',
  ),
  'grpc\\channel::watchconnectivitystate' => 
  array (
    0 => 'mixed',
    'last_state' => 'mixed',
    'deadline' => 'mixed',
  ),
  'grpc\\channelcredentials::createcomposite' => 
  array (
    0 => 'mixed',
    'channel_creds' => 'mixed',
    'call_creds' => 'mixed',
  ),
  'grpc\\channelcredentials::createdefault' => 
  array (
    0 => 'mixed',
  ),
  'grpc\\channelcredentials::createinsecure' => 
  array (
    0 => 'mixed',
  ),
  'grpc\\channelcredentials::createssl' => 
  array (
    0 => 'mixed',
    'pem_root_certs=' => 'mixed',
    'pem_private_key=' => 'mixed',
    'pem_cert_chain=' => 'mixed',
  ),
  'grpc\\channelcredentials::createxds' => 
  array (
    0 => 'mixed',
    'fallback_creds' => 'Grpc\\ChannelCredentials|null',
  ),
  'grpc\\channelcredentials::invalidatedefaultrootspem' => 
  array (
    0 => 'mixed',
  ),
  'grpc\\channelcredentials::isdefaultrootspemset' => 
  array (
    0 => 'mixed',
  ),
  'grpc\\channelcredentials::setdefaultrootspem' => 
  array (
    0 => 'mixed',
    'pem_roots' => 'mixed',
  ),
  'grpc\\server::__construct' => 
  array (
    0 => 'void',
    'args=' => 'mixed',
  ),
  'grpc\\server::addhttp2port' => 
  array (
    0 => 'mixed',
    'addr' => 'mixed',
  ),
  'grpc\\server::addsecurehttp2port' => 
  array (
    0 => 'mixed',
    'addr' => 'mixed',
    'server_creds' => 'mixed',
  ),
  'grpc\\server::requestcall' => 
  array (
    0 => 'mixed',
  ),
  'grpc\\server::start' => 
  array (
    0 => 'mixed',
  ),
  'grpc\\servercredentials::createssl' => 
  array (
    0 => 'mixed',
    'pem_root_certs' => 'mixed',
    'pem_private_key' => 'mixed',
    'pem_cert_chain' => 'mixed',
  ),
  'grpc\\timeval::__construct' => 
  array (
    0 => 'void',
    'microseconds' => 'mixed',
  ),
  'grpc\\timeval::add' => 
  array (
    0 => 'mixed',
    'timeval' => 'mixed',
  ),
  'grpc\\timeval::compare' => 
  array (
    0 => 'mixed',
    'a_timeval' => 'mixed',
    'b_timeval' => 'mixed',
  ),
  'grpc\\timeval::inffuture' => 
  array (
    0 => 'mixed',
  ),
  'grpc\\timeval::infpast' => 
  array (
    0 => 'mixed',
  ),
  'grpc\\timeval::now' => 
  array (
    0 => 'mixed',
  ),
  'grpc\\timeval::similar' => 
  array (
    0 => 'mixed',
    'a_timeval' => 'mixed',
    'b_timeval' => 'mixed',
    'threshold_timeval' => 'mixed',
  ),
  'grpc\\timeval::sleepuntil' => 
  array (
    0 => 'mixed',
  ),
  'grpc\\timeval::subtract' => 
  array (
    0 => 'mixed',
    'timeval' => 'mixed',
  ),
  'grpc\\timeval::zero' => 
  array (
    0 => 'mixed',
  ),
  'gzclose' => 
  array (
    0 => 'mixed',
    'fp' => 'mixed',
  ),
  'gzcompress' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
    'level=' => 'mixed',
    'encoding=' => 'mixed',
  ),
  'gzdecode' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
    'max_decoded_len=' => 'mixed',
  ),
  'gzdeflate' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
    'level=' => 'mixed',
    'encoding=' => 'mixed',
  ),
  'gzencode' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
    'level=' => 'mixed',
    'encoding=' => 'mixed',
  ),
  'gzeof' => 
  array (
    0 => 'mixed',
    'fp' => 'mixed',
  ),
  'gzfile' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
    'use_include_path=' => 'mixed',
  ),
  'gzgetc' => 
  array (
    0 => 'mixed',
    'fp' => 'mixed',
  ),
  'gzgets' => 
  array (
    0 => 'mixed',
    'fp' => 'mixed',
    'length=' => 'mixed',
  ),
  'gzgetss' => 
  array (
    0 => 'mixed',
    'fp' => 'mixed',
    'length=' => 'mixed',
    'allowable_tags=' => 'mixed',
  ),
  'gzinflate' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
    'max_decoded_len=' => 'mixed',
  ),
  'gzopen' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
    'mode' => 'mixed',
    'use_include_path=' => 'mixed',
  ),
  'gzpassthru' => 
  array (
    0 => 'mixed',
    'fp' => 'mixed',
  ),
  'gzputs' => 
  array (
    0 => 'mixed',
    'fp' => 'mixed',
    'str' => 'mixed',
    'length=' => 'mixed',
  ),
  'gzread' => 
  array (
    0 => 'mixed',
    'fp' => 'mixed',
    'length' => 'mixed',
  ),
  'gzrewind' => 
  array (
    0 => 'mixed',
    'fp' => 'mixed',
  ),
  'gzseek' => 
  array (
    0 => 'mixed',
    'fp' => 'mixed',
    'offset' => 'mixed',
    'whence=' => 'mixed',
  ),
  'gztell' => 
  array (
    0 => 'mixed',
    'fp' => 'mixed',
  ),
  'gzuncompress' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
    'max_decoded_len=' => 'mixed',
  ),
  'gzwrite' => 
  array (
    0 => 'mixed',
    'fp' => 'mixed',
    'str' => 'mixed',
    'length=' => 'mixed',
  ),
  'hash' => 
  array (
    0 => 'mixed',
    'algo' => 'mixed',
    'data' => 'mixed',
    'raw_output=' => 'mixed',
  ),
  'hash_algos' => 
  array (
    0 => 'mixed',
  ),
  'hash_copy' => 
  array (
    0 => 'mixed',
    'context' => 'mixed',
  ),
  'hash_equals' => 
  array (
    0 => 'mixed',
    'known_string' => 'mixed',
    'user_string' => 'mixed',
  ),
  'hash_file' => 
  array (
    0 => 'mixed',
    'algo' => 'mixed',
    'filename' => 'mixed',
    'raw_output=' => 'mixed',
  ),
  'hash_final' => 
  array (
    0 => 'mixed',
    'context' => 'mixed',
    'raw_output=' => 'mixed',
  ),
  'hash_hkdf' => 
  array (
    0 => 'mixed',
    'ikm' => 'mixed',
    'algo' => 'mixed',
    'length=' => 'mixed',
    'string=' => 'mixed',
    'salt=' => 'mixed',
  ),
  'hash_hmac' => 
  array (
    0 => 'mixed',
    'algo' => 'mixed',
    'data' => 'mixed',
    'key' => 'mixed',
    'raw_output=' => 'mixed',
  ),
  'hash_hmac_algos' => 
  array (
    0 => 'mixed',
  ),
  'hash_hmac_file' => 
  array (
    0 => 'mixed',
    'algo' => 'mixed',
    'filename' => 'mixed',
    'key' => 'mixed',
    'raw_output=' => 'mixed',
  ),
  'hash_init' => 
  array (
    0 => 'mixed',
    'algo' => 'mixed',
    'options=' => 'mixed',
    'key=' => 'mixed',
  ),
  'hash_pbkdf2' => 
  array (
    0 => 'mixed',
    'algo' => 'mixed',
    'password' => 'mixed',
    'salt' => 'mixed',
    'iterations' => 'mixed',
    'length=' => 'mixed',
    'raw_output=' => 'mixed',
  ),
  'hash_update' => 
  array (
    0 => 'mixed',
    'context' => 'mixed',
    'data' => 'mixed',
  ),
  'hash_update_file' => 
  array (
    0 => 'mixed',
    'context' => 'mixed',
    'filename' => 'mixed',
    'stream_context=' => 'mixed',
  ),
  'hash_update_stream' => 
  array (
    0 => 'mixed',
    'context' => 'mixed',
    'handle' => 'mixed',
    'length=' => 'mixed',
  ),
  'hashcontext::__construct' => 
  array (
    0 => 'void',
  ),
  'header' => 
  array (
    0 => 'mixed',
    'header' => 'mixed',
    'replace=' => 'mixed',
    'http_response_code=' => 'mixed',
  ),
  'header_register_callback' => 
  array (
    0 => 'mixed',
    'callback' => 'mixed',
  ),
  'header_remove' => 
  array (
    0 => 'mixed',
    'name=' => 'mixed',
  ),
  'headers_list' => 
  array (
    0 => 'mixed',
  ),
  'headers_sent' => 
  array (
    0 => 'mixed',
    '&file=' => 'mixed',
    '&line=' => 'mixed',
  ),
  'hebrev' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
    'max_chars_per_line=' => 'mixed',
  ),
  'hebrevc' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
    'max_chars_per_line=' => 'mixed',
  ),
  'hex2bin' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
  ),
  'hexdec' => 
  array (
    0 => 'mixed',
    'hexadecimal_number' => 'mixed',
  ),
  'highlight_file' => 
  array (
    0 => 'mixed',
    'file_name' => 'mixed',
    'return=' => 'mixed',
  ),
  'highlight_string' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    'return=' => 'mixed',
  ),
  'hrtime' => 
  array (
    0 => 'mixed',
    'get_as_number' => 'mixed',
  ),
  'html_entity_decode' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    'quote_style=' => 'mixed',
    'encoding=' => 'mixed',
  ),
  'htmlentities' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    'quote_style=' => 'mixed',
    'encoding=' => 'mixed',
    'double_encode=' => 'mixed',
  ),
  'htmlspecialchars' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    'quote_style=' => 'mixed',
    'encoding=' => 'mixed',
    'double_encode=' => 'mixed',
  ),
  'htmlspecialchars_decode' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    'quote_style=' => 'mixed',
  ),
  'http_build_query' => 
  array (
    0 => 'mixed',
    'formdata' => 'mixed',
    'prefix=' => 'mixed',
    'arg_separator=' => 'mixed',
    'enc_type=' => 'mixed',
  ),
  'http_response_code' => 
  array (
    0 => 'mixed',
    'response_code=' => 'mixed',
  ),
  'hypot' => 
  array (
    0 => 'mixed',
    'num1' => 'mixed',
    'num2' => 'mixed',
  ),
  'iconv' => 
  array (
    0 => 'mixed',
    'in_charset' => 'mixed',
    'out_charset' => 'mixed',
    'str' => 'mixed',
  ),
  'iconv_get_encoding' => 
  array (
    0 => 'mixed',
    'type=' => 'mixed',
  ),
  'iconv_mime_decode' => 
  array (
    0 => 'mixed',
    'encoded_string' => 'mixed',
    'mode=' => 'mixed',
    'charset=' => 'mixed',
  ),
  'iconv_mime_decode_headers' => 
  array (
    0 => 'mixed',
    'headers' => 'mixed',
    'mode=' => 'mixed',
    'charset=' => 'mixed',
  ),
  'iconv_mime_encode' => 
  array (
    0 => 'mixed',
    'field_name' => 'mixed',
    'field_value' => 'mixed',
    'preference=' => 'mixed',
  ),
  'iconv_set_encoding' => 
  array (
    0 => 'mixed',
    'type' => 'mixed',
    'charset' => 'mixed',
  ),
  'iconv_strlen' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
    'charset=' => 'mixed',
  ),
  'iconv_strpos' => 
  array (
    0 => 'mixed',
    'haystack' => 'mixed',
    'needle' => 'mixed',
    'offset=' => 'mixed',
    'charset=' => 'mixed',
  ),
  'iconv_strrpos' => 
  array (
    0 => 'mixed',
    'haystack' => 'mixed',
    'needle' => 'mixed',
    'charset=' => 'mixed',
  ),
  'iconv_substr' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
    'offset' => 'mixed',
    'length=' => 'mixed',
    'charset=' => 'mixed',
  ),
  'idate' => 
  array (
    0 => 'mixed',
    'format' => 'mixed',
    'timestamp=' => 'mixed',
  ),
  'idn_to_ascii' => 
  array (
    0 => 'mixed',
    'domain' => 'mixed',
    'option=' => 'mixed',
    'variant=' => 'mixed',
    '&idn_info=' => 'mixed',
  ),
  'idn_to_utf8' => 
  array (
    0 => 'mixed',
    'domain' => 'mixed',
    'option=' => 'mixed',
    'variant=' => 'mixed',
    '&idn_info=' => 'mixed',
  ),
  'igbinary_serialize' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'igbinary_unserialize' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
  ),
  'ignore_user_abort' => 
  array (
    0 => 'mixed',
    'value=' => 'mixed',
  ),
  'image2wbmp' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'filename=' => 'mixed',
    'foreground=' => 'mixed',
  ),
  'image_type_to_extension' => 
  array (
    0 => 'mixed',
    'imagetype' => 'mixed',
    'include_dot=' => 'mixed',
  ),
  'image_type_to_mime_type' => 
  array (
    0 => 'mixed',
    'imagetype' => 'mixed',
  ),
  'imageaffine' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'affine' => 'mixed',
    'clip=' => 'mixed',
  ),
  'imageaffinematrixconcat' => 
  array (
    0 => 'mixed',
    'm1' => 'mixed',
    'm2' => 'mixed',
  ),
  'imageaffinematrixget' => 
  array (
    0 => 'mixed',
    'type' => 'mixed',
    'options=' => 'mixed',
  ),
  'imagealphablending' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'blend' => 'mixed',
  ),
  'imageantialias' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'on' => 'mixed',
  ),
  'imagearc' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'cx' => 'mixed',
    'cy' => 'mixed',
    'w' => 'mixed',
    'h' => 'mixed',
    's' => 'mixed',
    'e' => 'mixed',
    'col' => 'mixed',
  ),
  'imagebmp' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'to=' => 'mixed',
    'compressed=' => 'mixed',
  ),
  'imagechar' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'font' => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
    'c' => 'mixed',
    'col' => 'mixed',
  ),
  'imagecharup' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'font' => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
    'c' => 'mixed',
    'col' => 'mixed',
  ),
  'imagecolorallocate' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'red' => 'mixed',
    'green' => 'mixed',
    'blue' => 'mixed',
  ),
  'imagecolorallocatealpha' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'red' => 'mixed',
    'green' => 'mixed',
    'blue' => 'mixed',
    'alpha' => 'mixed',
  ),
  'imagecolorat' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
  ),
  'imagecolorclosest' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'red' => 'mixed',
    'green' => 'mixed',
    'blue' => 'mixed',
  ),
  'imagecolorclosestalpha' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'red' => 'mixed',
    'green' => 'mixed',
    'blue' => 'mixed',
    'alpha' => 'mixed',
  ),
  'imagecolorclosesthwb' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'red' => 'mixed',
    'green' => 'mixed',
    'blue' => 'mixed',
  ),
  'imagecolordeallocate' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'index' => 'mixed',
  ),
  'imagecolorexact' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'red' => 'mixed',
    'green' => 'mixed',
    'blue' => 'mixed',
  ),
  'imagecolorexactalpha' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'red' => 'mixed',
    'green' => 'mixed',
    'blue' => 'mixed',
    'alpha' => 'mixed',
  ),
  'imagecolormatch' => 
  array (
    0 => 'mixed',
    'im1' => 'mixed',
    'im2' => 'mixed',
  ),
  'imagecolorresolve' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'red' => 'mixed',
    'green' => 'mixed',
    'blue' => 'mixed',
  ),
  'imagecolorresolvealpha' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'red' => 'mixed',
    'green' => 'mixed',
    'blue' => 'mixed',
    'alpha' => 'mixed',
  ),
  'imagecolorset' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'color' => 'mixed',
    'red' => 'mixed',
    'green' => 'mixed',
    'blue' => 'mixed',
    'alpha=' => 'mixed',
  ),
  'imagecolorsforindex' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'index' => 'mixed',
  ),
  'imagecolorstotal' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
  ),
  'imagecolortransparent' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'col=' => 'mixed',
  ),
  'imageconvolution' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'matrix3x3' => 'mixed',
    'div' => 'mixed',
    'offset' => 'mixed',
  ),
  'imagecopy' => 
  array (
    0 => 'mixed',
    'dst_im' => 'mixed',
    'src_im' => 'mixed',
    'dst_x' => 'mixed',
    'dst_y' => 'mixed',
    'src_x' => 'mixed',
    'src_y' => 'mixed',
    'src_w' => 'mixed',
    'src_h' => 'mixed',
  ),
  'imagecopymerge' => 
  array (
    0 => 'mixed',
    'src_im' => 'mixed',
    'dst_im' => 'mixed',
    'dst_x' => 'mixed',
    'dst_y' => 'mixed',
    'src_x' => 'mixed',
    'src_y' => 'mixed',
    'src_w' => 'mixed',
    'src_h' => 'mixed',
    'pct' => 'mixed',
  ),
  'imagecopymergegray' => 
  array (
    0 => 'mixed',
    'src_im' => 'mixed',
    'dst_im' => 'mixed',
    'dst_x' => 'mixed',
    'dst_y' => 'mixed',
    'src_x' => 'mixed',
    'src_y' => 'mixed',
    'src_w' => 'mixed',
    'src_h' => 'mixed',
    'pct' => 'mixed',
  ),
  'imagecopyresampled' => 
  array (
    0 => 'mixed',
    'dst_im' => 'mixed',
    'src_im' => 'mixed',
    'dst_x' => 'mixed',
    'dst_y' => 'mixed',
    'src_x' => 'mixed',
    'src_y' => 'mixed',
    'dst_w' => 'mixed',
    'dst_h' => 'mixed',
    'src_w' => 'mixed',
    'src_h' => 'mixed',
  ),
  'imagecopyresized' => 
  array (
    0 => 'mixed',
    'dst_im' => 'mixed',
    'src_im' => 'mixed',
    'dst_x' => 'mixed',
    'dst_y' => 'mixed',
    'src_x' => 'mixed',
    'src_y' => 'mixed',
    'dst_w' => 'mixed',
    'dst_h' => 'mixed',
    'src_w' => 'mixed',
    'src_h' => 'mixed',
  ),
  'imagecreate' => 
  array (
    0 => 'mixed',
    'x_size' => 'mixed',
    'y_size' => 'mixed',
  ),
  'imagecreatefrombmp' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'imagecreatefromgd' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'imagecreatefromgd2' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'imagecreatefromgd2part' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
    'srcX' => 'mixed',
    'srcY' => 'mixed',
    'width' => 'mixed',
    'height' => 'mixed',
  ),
  'imagecreatefromgif' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'imagecreatefromjpeg' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'imagecreatefrompng' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'imagecreatefromstring' => 
  array (
    0 => 'mixed',
    'image' => 'mixed',
  ),
  'imagecreatefromwbmp' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'imagecreatefromwebp' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'imagecreatefromxbm' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'imagecreatefromxpm' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'imagecreatetruecolor' => 
  array (
    0 => 'mixed',
    'x_size' => 'mixed',
    'y_size' => 'mixed',
  ),
  'imagecrop' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'rect' => 'mixed',
  ),
  'imagecropauto' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'mode=' => 'mixed',
    'threshold=' => 'mixed',
    'color=' => 'mixed',
  ),
  'imagedashedline' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'x1' => 'mixed',
    'y1' => 'mixed',
    'x2' => 'mixed',
    'y2' => 'mixed',
    'col' => 'mixed',
  ),
  'imagedestroy' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
  ),
  'imageellipse' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'cx' => 'mixed',
    'cy' => 'mixed',
    'w' => 'mixed',
    'h' => 'mixed',
    'color' => 'mixed',
  ),
  'imagefill' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
    'col' => 'mixed',
  ),
  'imagefilledarc' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'cx' => 'mixed',
    'cy' => 'mixed',
    'w' => 'mixed',
    'h' => 'mixed',
    's' => 'mixed',
    'e' => 'mixed',
    'col' => 'mixed',
    'style' => 'mixed',
  ),
  'imagefilledellipse' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'cx' => 'mixed',
    'cy' => 'mixed',
    'w' => 'mixed',
    'h' => 'mixed',
    'color' => 'mixed',
  ),
  'imagefilledpolygon' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'points' => 'mixed',
    'num_pos' => 'mixed',
    'col' => 'mixed',
  ),
  'imagefilledrectangle' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'x1' => 'mixed',
    'y1' => 'mixed',
    'x2' => 'mixed',
    'y2' => 'mixed',
    'col' => 'mixed',
  ),
  'imagefilltoborder' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
    'border' => 'mixed',
    'col' => 'mixed',
  ),
  'imagefilter' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'filtertype' => 'mixed',
    'arg1=' => 'mixed',
    'arg2=' => 'mixed',
    'arg3=' => 'mixed',
    'arg4=' => 'mixed',
  ),
  'imageflip' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'mode' => 'mixed',
  ),
  'imagefontheight' => 
  array (
    0 => 'mixed',
    'font' => 'mixed',
  ),
  'imagefontwidth' => 
  array (
    0 => 'mixed',
    'font' => 'mixed',
  ),
  'imageftbbox' => 
  array (
    0 => 'mixed',
    'size' => 'mixed',
    'angle' => 'mixed',
    'font_file' => 'mixed',
    'text' => 'mixed',
    'extrainfo=' => 'mixed',
  ),
  'imagefttext' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'size' => 'mixed',
    'angle' => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
    'col' => 'mixed',
    'font_file' => 'mixed',
    'text' => 'mixed',
    'extrainfo=' => 'mixed',
  ),
  'imagegammacorrect' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'inputgamma' => 'mixed',
    'outputgamma' => 'mixed',
  ),
  'imagegd' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'to=' => 'mixed',
  ),
  'imagegd2' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'to=' => 'mixed',
    'chunk_size=' => 'mixed',
    'type=' => 'mixed',
  ),
  'imagegetclip' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
  ),
  'imagegif' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'to=' => 'mixed',
  ),
  'imageinterlace' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'interlace=' => 'mixed',
  ),
  'imageistruecolor' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
  ),
  'imagejpeg' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'to=' => 'mixed',
    'quality=' => 'mixed',
  ),
  'imagelayereffect' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'effect' => 'mixed',
  ),
  'imageline' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'x1' => 'mixed',
    'y1' => 'mixed',
    'x2' => 'mixed',
    'y2' => 'mixed',
    'col' => 'mixed',
  ),
  'imageloadfont' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'imageopenpolygon' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'points' => 'mixed',
    'num_pos' => 'mixed',
    'col' => 'mixed',
  ),
  'imagepalettecopy' => 
  array (
    0 => 'mixed',
    'dst' => 'mixed',
    'src' => 'mixed',
  ),
  'imagepalettetotruecolor' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
  ),
  'imagepng' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'to=' => 'mixed',
    'quality=' => 'mixed',
    'filters=' => 'mixed',
  ),
  'imagepolygon' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'points' => 'mixed',
    'num_pos' => 'mixed',
    'col' => 'mixed',
  ),
  'imagerectangle' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'x1' => 'mixed',
    'y1' => 'mixed',
    'x2' => 'mixed',
    'y2' => 'mixed',
    'col' => 'mixed',
  ),
  'imageresolution' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'res_x=' => 'mixed',
    'res_y=' => 'mixed',
  ),
  'imagerotate' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'angle' => 'mixed',
    'bgdcolor' => 'mixed',
    'ignoretransparent=' => 'mixed',
  ),
  'imagesavealpha' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'save' => 'mixed',
  ),
  'imagescale' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'new_width' => 'mixed',
    'new_height=' => 'mixed',
    'mode=' => 'mixed',
  ),
  'imagesetbrush' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'brush' => 'mixed',
  ),
  'imagesetclip' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'x1' => 'mixed',
    'y1' => 'mixed',
    'x2' => 'mixed',
    'y2' => 'mixed',
  ),
  'imagesetinterpolation' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'method=' => 'mixed',
  ),
  'imagesetpixel' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
    'col' => 'mixed',
  ),
  'imagesetstyle' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'styles' => 'mixed',
  ),
  'imagesetthickness' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'thickness' => 'mixed',
  ),
  'imagesettile' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'tile' => 'mixed',
  ),
  'imagestring' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'font' => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
    'str' => 'mixed',
    'col' => 'mixed',
  ),
  'imagestringup' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'font' => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
    'str' => 'mixed',
    'col' => 'mixed',
  ),
  'imagesx' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
  ),
  'imagesy' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
  ),
  'imagetruecolortopalette' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'ditherFlag' => 'mixed',
    'colorsWanted' => 'mixed',
  ),
  'imagettfbbox' => 
  array (
    0 => 'mixed',
    'size' => 'mixed',
    'angle' => 'mixed',
    'font_file' => 'mixed',
    'text' => 'mixed',
  ),
  'imagettftext' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'size' => 'mixed',
    'angle' => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
    'col' => 'mixed',
    'font_file' => 'mixed',
    'text' => 'mixed',
  ),
  'imagetypes' => 
  array (
    0 => 'mixed',
  ),
  'imagewbmp' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'to=' => 'mixed',
    'foreground=' => 'mixed',
  ),
  'imagewebp' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'to=' => 'mixed',
    'quality=' => 'mixed',
  ),
  'imagexbm' => 
  array (
    0 => 'mixed',
    'im' => 'mixed',
    'filename' => 'mixed',
    'foreground=' => 'mixed',
  ),
  'imagick::__construct' => 
  array (
    0 => 'void',
    'files=' => 'mixed',
  ),
  'imagick::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'imagick::adaptiveblurimage' => 
  array (
    0 => 'mixed',
    'radius' => 'mixed',
    'sigma' => 'mixed',
    'channel=' => 'mixed',
  ),
  'imagick::adaptiveresizeimage' => 
  array (
    0 => 'mixed',
    'columns' => 'mixed',
    'rows' => 'mixed',
    'bestfit=' => 'mixed',
    'legacy=' => 'mixed',
  ),
  'imagick::adaptivesharpenimage' => 
  array (
    0 => 'mixed',
    'radius' => 'mixed',
    'sigma' => 'mixed',
    'channel=' => 'mixed',
  ),
  'imagick::adaptivethresholdimage' => 
  array (
    0 => 'mixed',
    'width' => 'mixed',
    'height' => 'mixed',
    'offset' => 'mixed',
  ),
  'imagick::addimage' => 
  array (
    0 => 'mixed',
    'image' => 'Imagick',
  ),
  'imagick::addnoiseimage' => 
  array (
    0 => 'mixed',
    'noise' => 'mixed',
    'channel=' => 'mixed',
  ),
  'imagick::addnoiseimagewithattenuate' => 
  array (
    0 => 'mixed',
    'noise' => 'mixed',
    'attenuate' => 'mixed',
    'channel=' => 'mixed',
  ),
  'imagick::affinetransformimage' => 
  array (
    0 => 'mixed',
    'settings' => 'ImagickDraw',
  ),
  'imagick::animateimages' => 
  array (
    0 => 'mixed',
    'x_server' => 'mixed',
  ),
  'imagick::annotateimage' => 
  array (
    0 => 'mixed',
    'settings' => 'ImagickDraw',
    'x' => 'mixed',
    'y' => 'mixed',
    'angle' => 'mixed',
    'text' => 'mixed',
  ),
  'imagick::appendimages' => 
  array (
    0 => 'mixed',
    'stack' => 'mixed',
  ),
  'imagick::autogammaimage' => 
  array (
    0 => 'mixed',
    'channel=' => 'mixed',
  ),
  'imagick::autolevelimage' => 
  array (
    0 => 'mixed',
    'channel=' => 'mixed',
  ),
  'imagick::autoorient' => 
  array (
    0 => 'mixed',
  ),
  'imagick::autoorientate' => 
  array (
    0 => 'mixed',
  ),
  'imagick::autothresholdimage' => 
  array (
    0 => 'mixed',
    'auto_threshold_method' => 'mixed',
  ),
  'imagick::averageimages' => 
  array (
    0 => 'mixed',
  ),
  'imagick::bilateralblurimage' => 
  array (
    0 => 'mixed',
    'radius' => 'mixed',
    'sigma' => 'mixed',
    'intensity_sigma' => 'mixed',
    'spatial_sigma' => 'mixed',
  ),
  'imagick::blackthresholdimage' => 
  array (
    0 => 'mixed',
    'threshold_color' => 'mixed',
  ),
  'imagick::blueshiftimage' => 
  array (
    0 => 'mixed',
    'factor=' => 'mixed',
  ),
  'imagick::blurimage' => 
  array (
    0 => 'mixed',
    'radius' => 'mixed',
    'sigma' => 'mixed',
    'channel=' => 'mixed',
  ),
  'imagick::borderimage' => 
  array (
    0 => 'mixed',
    'border_color' => 'mixed',
    'width' => 'mixed',
    'height' => 'mixed',
  ),
  'imagick::borderimagewithcomposite' => 
  array (
    0 => 'mixed',
    'border_color' => 'mixed',
    'width' => 'mixed',
    'height' => 'mixed',
    'composite' => 'mixed',
  ),
  'imagick::brightnesscontrastimage' => 
  array (
    0 => 'mixed',
    'brightness' => 'mixed',
    'contrast' => 'mixed',
    'channel=' => 'mixed',
  ),
  'imagick::calculatecrop' => 
  array (
    0 => 'mixed',
    'original_width' => 'mixed',
    'original_height' => 'mixed',
    'desired_width' => 'mixed',
    'desired_height' => 'mixed',
    'legacy=' => 'mixed',
  ),
  'imagick::cannyedgeimage' => 
  array (
    0 => 'mixed',
    'radius' => 'mixed',
    'sigma' => 'mixed',
    'lower_percent' => 'mixed',
    'upper_percent' => 'mixed',
  ),
  'imagick::channelfximage' => 
  array (
    0 => 'mixed',
    'expression' => 'mixed',
  ),
  'imagick::charcoalimage' => 
  array (
    0 => 'mixed',
    'radius' => 'mixed',
    'sigma' => 'mixed',
  ),
  'imagick::chopimage' => 
  array (
    0 => 'mixed',
    'width' => 'mixed',
    'height' => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
  ),
  'imagick::claheimage' => 
  array (
    0 => 'mixed',
    'width' => 'mixed',
    'height' => 'mixed',
    'number_bins' => 'mixed',
    'clip_limit' => 'mixed',
  ),
  'imagick::clampimage' => 
  array (
    0 => 'mixed',
    'channel=' => 'mixed',
  ),
  'imagick::clear' => 
  array (
    0 => 'mixed',
  ),
  'imagick::clipimage' => 
  array (
    0 => 'mixed',
  ),
  'imagick::clipimagepath' => 
  array (
    0 => 'mixed',
    'pathname' => 'mixed',
    'inside' => 'mixed',
  ),
  'imagick::clippathimage' => 
  array (
    0 => 'mixed',
    'pathname' => 'mixed',
    'inside' => 'mixed',
  ),
  'imagick::clone' => 
  array (
    0 => 'mixed',
  ),
  'imagick::clutimage' => 
  array (
    0 => 'mixed',
    'lookup_table' => 'Imagick',
    'channel=' => 'mixed',
  ),
  'imagick::coalesceimages' => 
  array (
    0 => 'mixed',
  ),
  'imagick::colordecisionlistimage' => 
  array (
    0 => 'mixed',
    'color_correction_collection' => 'mixed',
  ),
  'imagick::colorizeimage' => 
  array (
    0 => 'mixed',
    'colorize_color' => 'mixed',
    'opacity_color' => 'mixed',
    'legacy=' => 'mixed',
  ),
  'imagick::colormatriximage' => 
  array (
    0 => 'mixed',
    'color_matrix' => 'mixed',
  ),
  'imagick::colorthresholdimage' => 
  array (
    0 => 'mixed',
    'start_color' => 'mixed',
    'stop_color' => 'mixed',
  ),
  'imagick::combineimages' => 
  array (
    0 => 'mixed',
    'colorspace' => 'mixed',
  ),
  'imagick::commentimage' => 
  array (
    0 => 'mixed',
    'comment' => 'mixed',
  ),
  'imagick::compareimagechannels' => 
  array (
    0 => 'mixed',
    'reference' => 'Imagick',
    'channel' => 'mixed',
    'metric' => 'mixed',
  ),
  'imagick::compareimagelayers' => 
  array (
    0 => 'mixed',
    'metric' => 'mixed',
  ),
  'imagick::compareimages' => 
  array (
    0 => 'mixed',
    'reference' => 'Imagick',
    'metric' => 'mixed',
  ),
  'imagick::compleximages' => 
  array (
    0 => 'mixed',
    'complex_operator' => 'mixed',
  ),
  'imagick::compositeimage' => 
  array (
    0 => 'mixed',
    'composite_image' => 'Imagick',
    'composite' => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
    'channel=' => 'mixed',
  ),
  'imagick::compositeimagegravity' => 
  array (
    0 => 'mixed',
    'image' => 'Imagick',
    'composite_constant' => 'mixed',
    'gravity' => 'mixed',
  ),
  'imagick::contrastimage' => 
  array (
    0 => 'mixed',
    'sharpen' => 'mixed',
  ),
  'imagick::contraststretchimage' => 
  array (
    0 => 'mixed',
    'black_point' => 'mixed',
    'white_point' => 'mixed',
    'channel=' => 'mixed',
  ),
  'imagick::convolveimage' => 
  array (
    0 => 'mixed',
    'kernel' => 'mixed',
    'channel=' => 'mixed',
  ),
  'imagick::count' => 
  array (
    0 => 'mixed',
    'mode=' => 'mixed',
  ),
  'imagick::cropimage' => 
  array (
    0 => 'mixed',
    'width' => 'mixed',
    'height' => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
  ),
  'imagick::cropthumbnailimage' => 
  array (
    0 => 'mixed',
    'width' => 'mixed',
    'height' => 'mixed',
    'legacy=' => 'mixed',
  ),
  'imagick::current' => 
  array (
    0 => 'mixed',
  ),
  'imagick::cyclecolormapimage' => 
  array (
    0 => 'mixed',
    'displace' => 'mixed',
  ),
  'imagick::decipherimage' => 
  array (
    0 => 'mixed',
    'passphrase' => 'mixed',
  ),
  'imagick::deconstructimages' => 
  array (
    0 => 'mixed',
  ),
  'imagick::deleteimageartifact' => 
  array (
    0 => 'mixed',
    'artifact' => 'mixed',
  ),
  'imagick::deleteimageproperty' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
  ),
  'imagick::deleteoption' => 
  array (
    0 => 'mixed',
    'option' => 'mixed',
  ),
  'imagick::deskewimage' => 
  array (
    0 => 'mixed',
    'threshold' => 'mixed',
  ),
  'imagick::despeckleimage' => 
  array (
    0 => 'mixed',
  ),
  'imagick::destroy' => 
  array (
    0 => 'mixed',
  ),
  'imagick::displayimage' => 
  array (
    0 => 'mixed',
    'servername' => 'mixed',
  ),
  'imagick::displayimages' => 
  array (
    0 => 'mixed',
    'servername' => 'mixed',
  ),
  'imagick::distortimage' => 
  array (
    0 => 'mixed',
    'distortion' => 'mixed',
    'arguments' => 'mixed',
    'bestfit' => 'mixed',
  ),
  'imagick::drawimage' => 
  array (
    0 => 'mixed',
    'drawing' => 'ImagickDraw',
  ),
  'imagick::edgeimage' => 
  array (
    0 => 'mixed',
    'radius' => 'mixed',
  ),
  'imagick::embossimage' => 
  array (
    0 => 'mixed',
    'radius' => 'mixed',
    'sigma' => 'mixed',
  ),
  'imagick::encipherimage' => 
  array (
    0 => 'mixed',
    'passphrase' => 'mixed',
  ),
  'imagick::enhanceimage' => 
  array (
    0 => 'mixed',
  ),
  'imagick::equalizeimage' => 
  array (
    0 => 'mixed',
  ),
  'imagick::evaluateimage' => 
  array (
    0 => 'mixed',
    'evaluate' => 'mixed',
    'constant' => 'mixed',
    'channel=' => 'mixed',
  ),
  'imagick::evaluateimages' => 
  array (
    0 => 'mixed',
    'evaluate' => 'mixed',
  ),
  'imagick::exportimagepixels' => 
  array (
    0 => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
    'width' => 'mixed',
    'height' => 'mixed',
    'map' => 'mixed',
    'pixelstorage' => 'mixed',
  ),
  'imagick::extentimage' => 
  array (
    0 => 'mixed',
    'width' => 'mixed',
    'height' => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
  ),
  'imagick::flattenimages' => 
  array (
    0 => 'mixed',
  ),
  'imagick::flipimage' => 
  array (
    0 => 'mixed',
  ),
  'imagick::floodfillpaintimage' => 
  array (
    0 => 'mixed',
    'fill_color' => 'mixed',
    'fuzz' => 'mixed',
    'border_color' => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
    'invert' => 'mixed',
    'channel=' => 'mixed',
  ),
  'imagick::flopimage' => 
  array (
    0 => 'mixed',
  ),
  'imagick::forwardfouriertransformimage' => 
  array (
    0 => 'mixed',
    'magnitude' => 'mixed',
  ),
  'imagick::frameimage' => 
  array (
    0 => 'mixed',
    'matte_color' => 'mixed',
    'width' => 'mixed',
    'height' => 'mixed',
    'inner_bevel' => 'mixed',
    'outer_bevel' => 'mixed',
  ),
  'imagick::frameimagewithcomposite' => 
  array (
    0 => 'mixed',
    'matte_color' => 'mixed',
    'width' => 'mixed',
    'height' => 'mixed',
    'inner_bevel' => 'mixed',
    'outer_bevel' => 'mixed',
    'composite' => 'mixed',
  ),
  'imagick::functionimage' => 
  array (
    0 => 'mixed',
    'function' => 'mixed',
    'parameters' => 'mixed',
    'channel=' => 'mixed',
  ),
  'imagick::fximage' => 
  array (
    0 => 'mixed',
    'expression' => 'mixed',
    'channel=' => 'mixed',
  ),
  'imagick::gammaimage' => 
  array (
    0 => 'mixed',
    'gamma' => 'mixed',
    'channel=' => 'mixed',
  ),
  'imagick::gaussianblurimage' => 
  array (
    0 => 'mixed',
    'radius' => 'mixed',
    'sigma' => 'mixed',
    'channel=' => 'mixed',
  ),
  'imagick::getantialias' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getbackgroundcolor' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getcolorspace' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getcompression' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getcompressionquality' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getconfigureoptions' => 
  array (
    0 => 'mixed',
    'pattern=' => 'mixed',
  ),
  'imagick::getcopyright' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getfeatures' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getfilename' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getfont' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getformat' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getgravity' => 
  array (
    0 => 'mixed',
  ),
  'imagick::gethdrienabled' => 
  array (
    0 => 'mixed',
  ),
  'imagick::gethomeurl' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimage' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimagealphachannel' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimageartifact' => 
  array (
    0 => 'mixed',
    'artifact' => 'mixed',
  ),
  'imagick::getimageartifacts' => 
  array (
    0 => 'mixed',
    'pattern=' => 'mixed',
  ),
  'imagick::getimagebackgroundcolor' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimageblob' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimageblueprimary' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimagebordercolor' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimagechanneldepth' => 
  array (
    0 => 'mixed',
    'channel' => 'mixed',
  ),
  'imagick::getimagechanneldistortion' => 
  array (
    0 => 'mixed',
    'reference' => 'Imagick',
    'channel' => 'mixed',
    'metric' => 'mixed',
  ),
  'imagick::getimagechanneldistortions' => 
  array (
    0 => 'mixed',
    'reference_image' => 'Imagick',
    'metric' => 'mixed',
    'channel=' => 'mixed',
  ),
  'imagick::getimagechannelkurtosis' => 
  array (
    0 => 'mixed',
    'channel=' => 'mixed',
  ),
  'imagick::getimagechannelmean' => 
  array (
    0 => 'mixed',
    'channel' => 'mixed',
  ),
  'imagick::getimagechannelrange' => 
  array (
    0 => 'mixed',
    'channel' => 'mixed',
  ),
  'imagick::getimagechannelstatistics' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimagecolormapcolor' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'imagick::getimagecolors' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimagecolorspace' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimagecompose' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimagecompression' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimagecompressionquality' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimagedelay' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimagedepth' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimagedispose' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimagedistortion' => 
  array (
    0 => 'mixed',
    'reference' => 'Imagick',
    'metric' => 'mixed',
  ),
  'imagick::getimagefilename' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimageformat' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimagegamma' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimagegeometry' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimagegravity' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimagegreenprimary' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimageheight' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimagehistogram' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimageindex' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimageinterlacescheme' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimageinterpolatemethod' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimageiterations' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimagekurtosis' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimagelength' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimagemask' => 
  array (
    0 => 'mixed',
    'pixelmask' => 'mixed',
  ),
  'imagick::getimagemean' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimagemimetype' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimageorientation' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimagepage' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimagepixelcolor' => 
  array (
    0 => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
  ),
  'imagick::getimageprofile' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
  ),
  'imagick::getimageprofiles' => 
  array (
    0 => 'mixed',
    'pattern=' => 'mixed',
    'include_values=' => 'mixed',
  ),
  'imagick::getimageproperties' => 
  array (
    0 => 'mixed',
    'pattern=' => 'mixed',
    'include_values=' => 'mixed',
  ),
  'imagick::getimageproperty' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
  ),
  'imagick::getimagerange' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimageredprimary' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimageregion' => 
  array (
    0 => 'mixed',
    'width' => 'mixed',
    'height' => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
  ),
  'imagick::getimagerenderingintent' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimageresolution' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimagesblob' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimagescene' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimagesignature' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimagesize' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimagetickspersecond' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimagetotalinkdensity' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimagetype' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimageunits' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimagevirtualpixelmethod' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimagewhitepoint' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getimagewidth' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getinterlacescheme' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getinterpolatemethod' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getiteratorindex' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getnumberimages' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getoption' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'imagick::getoptions' => 
  array (
    0 => 'mixed',
    'pattern=' => 'mixed',
  ),
  'imagick::getorientation' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getpackagename' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getpage' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getpixeliterator' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getpixelregioniterator' => 
  array (
    0 => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
    'columns' => 'mixed',
    'rows' => 'mixed',
  ),
  'imagick::getpointsize' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getquantum' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getquantumdepth' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getquantumrange' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getregistry' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'imagick::getreleasedate' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getresolution' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getresource' => 
  array (
    0 => 'mixed',
    'type' => 'mixed',
  ),
  'imagick::getresourcelimit' => 
  array (
    0 => 'mixed',
    'type' => 'mixed',
  ),
  'imagick::getsamplingfactors' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getsize' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getsizeoffset' => 
  array (
    0 => 'mixed',
  ),
  'imagick::gettype' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getversion' => 
  array (
    0 => 'mixed',
  ),
  'imagick::haldclutimage' => 
  array (
    0 => 'mixed',
    'clut' => 'Imagick',
    'channel=' => 'mixed',
  ),
  'imagick::hasnextimage' => 
  array (
    0 => 'mixed',
  ),
  'imagick::haspreviousimage' => 
  array (
    0 => 'mixed',
  ),
  'imagick::houghlineimage' => 
  array (
    0 => 'mixed',
    'width' => 'mixed',
    'height' => 'mixed',
    'threshold' => 'mixed',
  ),
  'imagick::identifyformat' => 
  array (
    0 => 'mixed',
    'format' => 'mixed',
  ),
  'imagick::identifyimage' => 
  array (
    0 => 'mixed',
    'append_raw_output=' => 'mixed',
  ),
  'imagick::identifyimagetype' => 
  array (
    0 => 'mixed',
  ),
  'imagick::implodeimage' => 
  array (
    0 => 'mixed',
    'radius' => 'mixed',
  ),
  'imagick::implodeimagewithmethod' => 
  array (
    0 => 'mixed',
    'radius' => 'mixed',
    'pixel_interpolate_method' => 'mixed',
  ),
  'imagick::importimagepixels' => 
  array (
    0 => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
    'width' => 'mixed',
    'height' => 'mixed',
    'map' => 'mixed',
    'pixelstorage' => 'mixed',
    'pixels' => 'mixed',
  ),
  'imagick::interpolativeresizeimage' => 
  array (
    0 => 'mixed',
    'columns' => 'mixed',
    'rows' => 'mixed',
    'interpolate' => 'mixed',
  ),
  'imagick::inversefouriertransformimage' => 
  array (
    0 => 'mixed',
    'complement' => 'Imagick',
    'magnitude' => 'mixed',
  ),
  'imagick::key' => 
  array (
    0 => 'mixed',
  ),
  'imagick::kmeansimage' => 
  array (
    0 => 'mixed',
    'number_colors' => 'mixed',
    'max_iterations' => 'mixed',
    'tolerance' => 'mixed',
  ),
  'imagick::labelimage' => 
  array (
    0 => 'mixed',
    'label' => 'mixed',
  ),
  'imagick::levelimage' => 
  array (
    0 => 'mixed',
    'black_point' => 'mixed',
    'gamma' => 'mixed',
    'white_point' => 'mixed',
    'channel=' => 'mixed',
  ),
  'imagick::levelimagecolors' => 
  array (
    0 => 'mixed',
    'black_color' => 'mixed',
    'white_color' => 'mixed',
    'invert' => 'mixed',
  ),
  'imagick::levelizeimage' => 
  array (
    0 => 'mixed',
    'black_point' => 'mixed',
    'gamma' => 'mixed',
    'white_point' => 'mixed',
  ),
  'imagick::linearstretchimage' => 
  array (
    0 => 'mixed',
    'black_point' => 'mixed',
    'white_point' => 'mixed',
  ),
  'imagick::liquidrescaleimage' => 
  array (
    0 => 'mixed',
    'width' => 'mixed',
    'height' => 'mixed',
    'delta_x' => 'mixed',
    'rigidity' => 'mixed',
  ),
  'imagick::listregistry' => 
  array (
    0 => 'mixed',
  ),
  'imagick::localcontrastimage' => 
  array (
    0 => 'mixed',
    'radius' => 'mixed',
    'strength' => 'mixed',
  ),
  'imagick::magnifyimage' => 
  array (
    0 => 'mixed',
  ),
  'imagick::meanshiftimage' => 
  array (
    0 => 'mixed',
    'width' => 'mixed',
    'height' => 'mixed',
    'color_distance' => 'mixed',
  ),
  'imagick::mergeimagelayers' => 
  array (
    0 => 'mixed',
    'layermethod' => 'mixed',
  ),
  'imagick::minifyimage' => 
  array (
    0 => 'mixed',
  ),
  'imagick::modulateimage' => 
  array (
    0 => 'mixed',
    'brightness' => 'mixed',
    'saturation' => 'mixed',
    'hue' => 'mixed',
  ),
  'imagick::montageimage' => 
  array (
    0 => 'mixed',
    'settings' => 'ImagickDraw',
    'tile_geometry' => 'mixed',
    'thumbnail_geometry' => 'mixed',
    'monatgemode' => 'mixed',
    'frame' => 'mixed',
  ),
  'imagick::morphimages' => 
  array (
    0 => 'mixed',
    'number_frames' => 'mixed',
  ),
  'imagick::morphology' => 
  array (
    0 => 'mixed',
    'morphology' => 'mixed',
    'iterations' => 'mixed',
    'kernel' => 'ImagickKernel',
    'channel=' => 'mixed',
  ),
  'imagick::motionblurimage' => 
  array (
    0 => 'mixed',
    'radius' => 'mixed',
    'sigma' => 'mixed',
    'angle' => 'mixed',
    'channel=' => 'mixed',
  ),
  'imagick::negateimage' => 
  array (
    0 => 'mixed',
    'gray' => 'mixed',
    'channel=' => 'mixed',
  ),
  'imagick::newimage' => 
  array (
    0 => 'mixed',
    'columns' => 'mixed',
    'rows' => 'mixed',
    'background_color' => 'mixed',
    'format=' => 'mixed',
  ),
  'imagick::newpseudoimage' => 
  array (
    0 => 'mixed',
    'columns' => 'mixed',
    'rows' => 'mixed',
    'pseudo_format' => 'mixed',
  ),
  'imagick::next' => 
  array (
    0 => 'mixed',
  ),
  'imagick::nextimage' => 
  array (
    0 => 'mixed',
  ),
  'imagick::normalizeimage' => 
  array (
    0 => 'mixed',
    'channel=' => 'mixed',
  ),
  'imagick::oilpaintimage' => 
  array (
    0 => 'mixed',
    'radius' => 'mixed',
  ),
  'imagick::oilpaintimagewithsigma' => 
  array (
    0 => 'mixed',
    'radius' => 'mixed',
    'sigma' => 'mixed',
  ),
  'imagick::opaquepaintimage' => 
  array (
    0 => 'mixed',
    'target_color' => 'mixed',
    'fill_color' => 'mixed',
    'fuzz' => 'mixed',
    'invert' => 'mixed',
    'channel=' => 'mixed',
  ),
  'imagick::optimizeimagelayers' => 
  array (
    0 => 'mixed',
  ),
  'imagick::optimizeimagetransparency' => 
  array (
    0 => 'mixed',
  ),
  'imagick::orderedditherimage' => 
  array (
    0 => 'mixed',
    'dither_format' => 'mixed',
  ),
  'imagick::pingimage' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'imagick::pingimageblob' => 
  array (
    0 => 'mixed',
    'image' => 'mixed',
  ),
  'imagick::pingimagefile' => 
  array (
    0 => 'mixed',
    'filehandle' => 'mixed',
    'filename=' => 'mixed',
  ),
  'imagick::polaroidimage' => 
  array (
    0 => 'mixed',
    'settings' => 'ImagickDraw',
    'angle' => 'mixed',
  ),
  'imagick::polaroidwithtextandmethod' => 
  array (
    0 => 'mixed',
    'settings' => 'ImagickDraw',
    'angle' => 'mixed',
    'caption' => 'mixed',
    'method' => 'mixed',
  ),
  'imagick::polynomialimage' => 
  array (
    0 => 'mixed',
    'terms' => 'mixed',
  ),
  'imagick::posterizeimage' => 
  array (
    0 => 'mixed',
    'levels' => 'mixed',
    'dither' => 'mixed',
  ),
  'imagick::previewimages' => 
  array (
    0 => 'mixed',
    'preview' => 'mixed',
  ),
  'imagick::previousimage' => 
  array (
    0 => 'mixed',
  ),
  'imagick::profileimage' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
    'profile' => 'mixed',
  ),
  'imagick::quantizeimage' => 
  array (
    0 => 'mixed',
    'number_colors' => 'mixed',
    'colorspace' => 'mixed',
    'tree_depth' => 'mixed',
    'dither' => 'mixed',
    'measure_error' => 'mixed',
  ),
  'imagick::quantizeimages' => 
  array (
    0 => 'mixed',
    'number_colors' => 'mixed',
    'colorspace' => 'mixed',
    'tree_depth' => 'mixed',
    'dither' => 'mixed',
    'measure_error' => 'mixed',
  ),
  'imagick::queryfontmetrics' => 
  array (
    0 => 'mixed',
    'settings' => 'ImagickDraw',
    'text' => 'mixed',
    'multiline=' => 'mixed',
  ),
  'imagick::queryfonts' => 
  array (
    0 => 'mixed',
    'pattern=' => 'mixed',
  ),
  'imagick::queryformats' => 
  array (
    0 => 'mixed',
    'pattern=' => 'mixed',
  ),
  'imagick::raiseimage' => 
  array (
    0 => 'mixed',
    'width' => 'mixed',
    'height' => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
    'raise' => 'mixed',
  ),
  'imagick::randomthresholdimage' => 
  array (
    0 => 'mixed',
    'low' => 'mixed',
    'high' => 'mixed',
    'channel=' => 'mixed',
  ),
  'imagick::rangethresholdimage' => 
  array (
    0 => 'mixed',
    'low_black' => 'mixed',
    'low_white' => 'mixed',
    'high_white' => 'mixed',
    'high_black' => 'mixed',
  ),
  'imagick::readimage' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'imagick::readimageblob' => 
  array (
    0 => 'mixed',
    'image' => 'mixed',
    'filename=' => 'mixed',
  ),
  'imagick::readimagefile' => 
  array (
    0 => 'mixed',
    'filehandle' => 'mixed',
    'filename=' => 'mixed',
  ),
  'imagick::readimages' => 
  array (
    0 => 'mixed',
    'filenames' => 'mixed',
  ),
  'imagick::remapimage' => 
  array (
    0 => 'mixed',
    'replacement' => 'Imagick',
    'dither_method' => 'mixed',
  ),
  'imagick::removeimage' => 
  array (
    0 => 'mixed',
  ),
  'imagick::removeimageprofile' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
  ),
  'imagick::resampleimage' => 
  array (
    0 => 'mixed',
    'x_resolution' => 'mixed',
    'y_resolution' => 'mixed',
    'filter' => 'mixed',
    'blur' => 'mixed',
  ),
  'imagick::resetimagepage' => 
  array (
    0 => 'mixed',
    'page' => 'mixed',
  ),
  'imagick::resetiterator' => 
  array (
    0 => 'mixed',
  ),
  'imagick::resizeimage' => 
  array (
    0 => 'mixed',
    'columns' => 'mixed',
    'rows' => 'mixed',
    'filter' => 'mixed',
    'blur' => 'mixed',
    'bestfit=' => 'mixed',
    'legacy=' => 'mixed',
  ),
  'imagick::rewind' => 
  array (
    0 => 'mixed',
  ),
  'imagick::rollimage' => 
  array (
    0 => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
  ),
  'imagick::rotateimage' => 
  array (
    0 => 'mixed',
    'background_color' => 'mixed',
    'degrees' => 'mixed',
  ),
  'imagick::rotationalblurimage' => 
  array (
    0 => 'mixed',
    'angle' => 'mixed',
    'channel=' => 'mixed',
  ),
  'imagick::roundcorners' => 
  array (
    0 => 'mixed',
    'x_rounding' => 'mixed',
    'y_rounding' => 'mixed',
    'stroke_width=' => 'mixed',
    'displace=' => 'mixed',
    'size_correction=' => 'mixed',
  ),
  'imagick::roundcornersimage' => 
  array (
    0 => 'mixed',
    'x_rounding' => 'mixed',
    'y_rounding' => 'mixed',
    'stroke_width=' => 'mixed',
    'displace=' => 'mixed',
    'size_correction=' => 'mixed',
  ),
  'imagick::sampleimage' => 
  array (
    0 => 'mixed',
    'columns' => 'mixed',
    'rows' => 'mixed',
  ),
  'imagick::scaleimage' => 
  array (
    0 => 'mixed',
    'columns' => 'mixed',
    'rows' => 'mixed',
    'bestfit=' => 'mixed',
    'legacy=' => 'mixed',
  ),
  'imagick::segmentimage' => 
  array (
    0 => 'mixed',
    'colorspace' => 'mixed',
    'cluster_threshold' => 'mixed',
    'smooth_threshold' => 'mixed',
    'verbose=' => 'mixed',
  ),
  'imagick::selectiveblurimage' => 
  array (
    0 => 'mixed',
    'radius' => 'mixed',
    'sigma' => 'mixed',
    'threshold' => 'mixed',
    'channel=' => 'mixed',
  ),
  'imagick::separateimagechannel' => 
  array (
    0 => 'mixed',
    'channel' => 'mixed',
  ),
  'imagick::sepiatoneimage' => 
  array (
    0 => 'mixed',
    'threshold' => 'mixed',
  ),
  'imagick::setantialias' => 
  array (
    0 => 'mixed',
    'antialias' => 'mixed',
  ),
  'imagick::setbackgroundcolor' => 
  array (
    0 => 'mixed',
    'background_color' => 'mixed',
  ),
  'imagick::setcolorspace' => 
  array (
    0 => 'mixed',
    'colorspace' => 'mixed',
  ),
  'imagick::setcompression' => 
  array (
    0 => 'mixed',
    'compression' => 'mixed',
  ),
  'imagick::setcompressionquality' => 
  array (
    0 => 'mixed',
    'quality' => 'mixed',
  ),
  'imagick::setdepth' => 
  array (
    0 => 'mixed',
    'depth' => 'mixed',
  ),
  'imagick::setextract' => 
  array (
    0 => 'mixed',
    'geometry' => 'mixed',
  ),
  'imagick::setfilename' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'imagick::setfirstiterator' => 
  array (
    0 => 'mixed',
  ),
  'imagick::setfont' => 
  array (
    0 => 'mixed',
    'font' => 'mixed',
  ),
  'imagick::setformat' => 
  array (
    0 => 'mixed',
    'format' => 'mixed',
  ),
  'imagick::setgravity' => 
  array (
    0 => 'mixed',
    'gravity' => 'mixed',
  ),
  'imagick::setimage' => 
  array (
    0 => 'mixed',
    'image' => 'Imagick',
  ),
  'imagick::setimagealpha' => 
  array (
    0 => 'mixed',
    'alpha' => 'mixed',
  ),
  'imagick::setimagealphachannel' => 
  array (
    0 => 'mixed',
    'alphachannel' => 'mixed',
  ),
  'imagick::setimageartifact' => 
  array (
    0 => 'mixed',
    'artifact' => 'mixed',
    'value' => 'mixed',
  ),
  'imagick::setimagebackgroundcolor' => 
  array (
    0 => 'mixed',
    'background_color' => 'mixed',
  ),
  'imagick::setimageblueprimary' => 
  array (
    0 => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
  ),
  'imagick::setimagebordercolor' => 
  array (
    0 => 'mixed',
    'border_color' => 'mixed',
  ),
  'imagick::setimagechanneldepth' => 
  array (
    0 => 'mixed',
    'channel' => 'mixed',
    'depth' => 'mixed',
  ),
  'imagick::setimagechannelmask' => 
  array (
    0 => 'mixed',
    'channel' => 'mixed',
  ),
  'imagick::setimagecolormapcolor' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
    'color' => 'mixed',
  ),
  'imagick::setimagecolorspace' => 
  array (
    0 => 'mixed',
    'colorspace' => 'mixed',
  ),
  'imagick::setimagecompose' => 
  array (
    0 => 'mixed',
    'compose' => 'mixed',
  ),
  'imagick::setimagecompression' => 
  array (
    0 => 'mixed',
    'compression' => 'mixed',
  ),
  'imagick::setimagecompressionquality' => 
  array (
    0 => 'mixed',
    'quality' => 'mixed',
  ),
  'imagick::setimagedelay' => 
  array (
    0 => 'mixed',
    'delay' => 'mixed',
  ),
  'imagick::setimagedepth' => 
  array (
    0 => 'mixed',
    'depth' => 'mixed',
  ),
  'imagick::setimagedispose' => 
  array (
    0 => 'mixed',
    'dispose' => 'mixed',
  ),
  'imagick::setimageextent' => 
  array (
    0 => 'mixed',
    'columns' => 'mixed',
    'rows' => 'mixed',
  ),
  'imagick::setimagefilename' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'imagick::setimageformat' => 
  array (
    0 => 'mixed',
    'format' => 'mixed',
  ),
  'imagick::setimagegamma' => 
  array (
    0 => 'mixed',
    'gamma' => 'mixed',
  ),
  'imagick::setimagegravity' => 
  array (
    0 => 'mixed',
    'gravity' => 'mixed',
  ),
  'imagick::setimagegreenprimary' => 
  array (
    0 => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
  ),
  'imagick::setimageindex' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'imagick::setimageinterlacescheme' => 
  array (
    0 => 'mixed',
    'interlace' => 'mixed',
  ),
  'imagick::setimageinterpolatemethod' => 
  array (
    0 => 'mixed',
    'method' => 'mixed',
  ),
  'imagick::setimageiterations' => 
  array (
    0 => 'mixed',
    'iterations' => 'mixed',
  ),
  'imagick::setimagemask' => 
  array (
    0 => 'mixed',
    'clip_mask' => 'Imagick',
    'pixelmask' => 'mixed',
  ),
  'imagick::setimagematte' => 
  array (
    0 => 'mixed',
    'matte' => 'mixed',
  ),
  'imagick::setimagemattecolor' => 
  array (
    0 => 'mixed',
    'matte_color' => 'mixed',
  ),
  'imagick::setimageorientation' => 
  array (
    0 => 'mixed',
    'orientation' => 'mixed',
  ),
  'imagick::setimagepage' => 
  array (
    0 => 'mixed',
    'width' => 'mixed',
    'height' => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
  ),
  'imagick::setimagepixelcolor' => 
  array (
    0 => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
    'color' => 'mixed',
  ),
  'imagick::setimageprofile' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
    'profile' => 'mixed',
  ),
  'imagick::setimageprogressmonitor' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'imagick::setimageproperty' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
    'value' => 'mixed',
  ),
  'imagick::setimageredprimary' => 
  array (
    0 => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
  ),
  'imagick::setimagerenderingintent' => 
  array (
    0 => 'mixed',
    'rendering_intent' => 'mixed',
  ),
  'imagick::setimageresolution' => 
  array (
    0 => 'mixed',
    'x_resolution' => 'mixed',
    'y_resolution' => 'mixed',
  ),
  'imagick::setimagescene' => 
  array (
    0 => 'mixed',
    'scene' => 'mixed',
  ),
  'imagick::setimagetickspersecond' => 
  array (
    0 => 'mixed',
    'ticks_per_second' => 'mixed',
  ),
  'imagick::setimagetype' => 
  array (
    0 => 'mixed',
    'image_type' => 'mixed',
  ),
  'imagick::setimageunits' => 
  array (
    0 => 'mixed',
    'units' => 'mixed',
  ),
  'imagick::setimagevirtualpixelmethod' => 
  array (
    0 => 'mixed',
    'method' => 'mixed',
  ),
  'imagick::setimagewhitepoint' => 
  array (
    0 => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
  ),
  'imagick::setinterlacescheme' => 
  array (
    0 => 'mixed',
    'interlace' => 'mixed',
  ),
  'imagick::setinterpolatemethod' => 
  array (
    0 => 'mixed',
    'method' => 'mixed',
  ),
  'imagick::setiteratorindex' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'imagick::setlastiterator' => 
  array (
    0 => 'mixed',
  ),
  'imagick::setoption' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'imagick::setorientation' => 
  array (
    0 => 'mixed',
    'orientation' => 'mixed',
  ),
  'imagick::setpage' => 
  array (
    0 => 'mixed',
    'width' => 'mixed',
    'height' => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
  ),
  'imagick::setpointsize' => 
  array (
    0 => 'mixed',
    'point_size' => 'mixed',
  ),
  'imagick::setprogressmonitor' => 
  array (
    0 => 'mixed',
    'callback' => 'mixed',
  ),
  'imagick::setregistry' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'imagick::setresolution' => 
  array (
    0 => 'mixed',
    'x_resolution' => 'mixed',
    'y_resolution' => 'mixed',
  ),
  'imagick::setresourcelimit' => 
  array (
    0 => 'mixed',
    'type' => 'mixed',
    'limit' => 'mixed',
  ),
  'imagick::setsamplingfactors' => 
  array (
    0 => 'mixed',
    'factors' => 'mixed',
  ),
  'imagick::setseed' => 
  array (
    0 => 'mixed',
    'seed' => 'mixed',
  ),
  'imagick::setsize' => 
  array (
    0 => 'mixed',
    'columns' => 'mixed',
    'rows' => 'mixed',
  ),
  'imagick::setsizeoffset' => 
  array (
    0 => 'mixed',
    'columns' => 'mixed',
    'rows' => 'mixed',
    'offset' => 'mixed',
  ),
  'imagick::settype' => 
  array (
    0 => 'mixed',
    'imgtype' => 'mixed',
  ),
  'imagick::shadeimage' => 
  array (
    0 => 'mixed',
    'gray' => 'mixed',
    'azimuth' => 'mixed',
    'elevation' => 'mixed',
  ),
  'imagick::shadowimage' => 
  array (
    0 => 'mixed',
    'opacity' => 'mixed',
    'sigma' => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
  ),
  'imagick::sharpenimage' => 
  array (
    0 => 'mixed',
    'radius' => 'mixed',
    'sigma' => 'mixed',
    'channel=' => 'mixed',
  ),
  'imagick::shaveimage' => 
  array (
    0 => 'mixed',
    'columns' => 'mixed',
    'rows' => 'mixed',
  ),
  'imagick::shearimage' => 
  array (
    0 => 'mixed',
    'background_color' => 'mixed',
    'x_shear' => 'mixed',
    'y_shear' => 'mixed',
  ),
  'imagick::sigmoidalcontrastimage' => 
  array (
    0 => 'mixed',
    'sharpen' => 'mixed',
    'alpha' => 'mixed',
    'beta' => 'mixed',
    'channel=' => 'mixed',
  ),
  'imagick::similarityimage' => 
  array (
    0 => 'mixed',
    'image' => 'Imagick',
    '&offset=' => 'mixed',
    '&similarity=' => 'mixed',
    'threshold=' => 'mixed',
    'metric=' => 'mixed',
  ),
  'imagick::sketchimage' => 
  array (
    0 => 'mixed',
    'radius' => 'mixed',
    'sigma' => 'mixed',
    'angle' => 'mixed',
  ),
  'imagick::smushimages' => 
  array (
    0 => 'mixed',
    'stack' => 'mixed',
    'offset' => 'mixed',
  ),
  'imagick::solarizeimage' => 
  array (
    0 => 'mixed',
    'threshold' => 'mixed',
  ),
  'imagick::sparsecolorimage' => 
  array (
    0 => 'mixed',
    'sparsecolormethod' => 'mixed',
    'arguments' => 'mixed',
    'channel=' => 'mixed',
  ),
  'imagick::spliceimage' => 
  array (
    0 => 'mixed',
    'width' => 'mixed',
    'height' => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
  ),
  'imagick::spreadimage' => 
  array (
    0 => 'mixed',
    'radius' => 'mixed',
  ),
  'imagick::spreadimagewithmethod' => 
  array (
    0 => 'mixed',
    'radius' => 'mixed',
    'interpolate_method' => 'mixed',
  ),
  'imagick::statisticimage' => 
  array (
    0 => 'mixed',
    'type' => 'mixed',
    'width' => 'mixed',
    'height' => 'mixed',
    'channel=' => 'mixed',
  ),
  'imagick::steganoimage' => 
  array (
    0 => 'mixed',
    'watermark' => 'Imagick',
    'offset' => 'mixed',
  ),
  'imagick::stereoimage' => 
  array (
    0 => 'mixed',
    'offset_image' => 'Imagick',
  ),
  'imagick::stripimage' => 
  array (
    0 => 'mixed',
  ),
  'imagick::subimagematch' => 
  array (
    0 => 'mixed',
    'image' => 'Imagick',
    '&offset=' => 'mixed',
    '&similarity=' => 'mixed',
    'threshold=' => 'mixed',
    'metric=' => 'mixed',
  ),
  'imagick::swirlimage' => 
  array (
    0 => 'mixed',
    'degrees' => 'mixed',
  ),
  'imagick::swirlimagewithmethod' => 
  array (
    0 => 'mixed',
    'degrees' => 'mixed',
    'interpolate_method' => 'mixed',
  ),
  'imagick::textureimage' => 
  array (
    0 => 'mixed',
    'texture' => 'Imagick',
  ),
  'imagick::thresholdimage' => 
  array (
    0 => 'mixed',
    'threshold' => 'mixed',
    'channel=' => 'mixed',
  ),
  'imagick::thumbnailimage' => 
  array (
    0 => 'mixed',
    'columns' => 'mixed',
    'rows' => 'mixed',
    'bestfit=' => 'mixed',
    'fill=' => 'mixed',
    'legacy=' => 'mixed',
  ),
  'imagick::tintimage' => 
  array (
    0 => 'mixed',
    'tint_color' => 'mixed',
    'opacity_color' => 'mixed',
    'legacy=' => 'mixed',
  ),
  'imagick::transformimagecolorspace' => 
  array (
    0 => 'mixed',
    'colorspace' => 'mixed',
  ),
  'imagick::transparentpaintimage' => 
  array (
    0 => 'mixed',
    'target_color' => 'mixed',
    'alpha' => 'mixed',
    'fuzz' => 'mixed',
    'invert' => 'mixed',
  ),
  'imagick::transposeimage' => 
  array (
    0 => 'mixed',
  ),
  'imagick::transverseimage' => 
  array (
    0 => 'mixed',
  ),
  'imagick::trimimage' => 
  array (
    0 => 'mixed',
    'fuzz' => 'mixed',
  ),
  'imagick::uniqueimagecolors' => 
  array (
    0 => 'mixed',
  ),
  'imagick::unsharpmaskimage' => 
  array (
    0 => 'mixed',
    'radius' => 'mixed',
    'sigma' => 'mixed',
    'amount' => 'mixed',
    'threshold' => 'mixed',
    'channel=' => 'mixed',
  ),
  'imagick::valid' => 
  array (
    0 => 'mixed',
  ),
  'imagick::vignetteimage' => 
  array (
    0 => 'mixed',
    'black_point' => 'mixed',
    'white_point' => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
  ),
  'imagick::waveimage' => 
  array (
    0 => 'mixed',
    'amplitude' => 'mixed',
    'length' => 'mixed',
  ),
  'imagick::waveimagewithmethod' => 
  array (
    0 => 'mixed',
    'amplitude' => 'mixed',
    'length' => 'mixed',
    'interpolate_method' => 'mixed',
  ),
  'imagick::waveletdenoiseimage' => 
  array (
    0 => 'mixed',
    'threshold' => 'mixed',
    'softness' => 'mixed',
  ),
  'imagick::whitebalanceimage' => 
  array (
    0 => 'mixed',
  ),
  'imagick::whitethresholdimage' => 
  array (
    0 => 'mixed',
    'threshold_color' => 'mixed',
  ),
  'imagick::writeimage' => 
  array (
    0 => 'mixed',
    'filename=' => 'mixed',
  ),
  'imagick::writeimagefile' => 
  array (
    0 => 'mixed',
    'filehandle' => 'mixed',
    'format=' => 'mixed',
  ),
  'imagick::writeimages' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
    'adjoin' => 'mixed',
  ),
  'imagick::writeimagesfile' => 
  array (
    0 => 'mixed',
    'filehandle' => 'mixed',
    'format=' => 'mixed',
  ),
  'imagickdraw::__construct' => 
  array (
    0 => 'void',
  ),
  'imagickdraw::affine' => 
  array (
    0 => 'mixed',
    'affine' => 'mixed',
  ),
  'imagickdraw::alpha' => 
  array (
    0 => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
    'paint' => 'mixed',
  ),
  'imagickdraw::annotation' => 
  array (
    0 => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
    'text' => 'mixed',
  ),
  'imagickdraw::arc' => 
  array (
    0 => 'mixed',
    'start_x' => 'mixed',
    'start_y' => 'mixed',
    'end_x' => 'mixed',
    'end_y' => 'mixed',
    'start_angle' => 'mixed',
    'end_angle' => 'mixed',
  ),
  'imagickdraw::bezier' => 
  array (
    0 => 'mixed',
    'coordinates' => 'mixed',
  ),
  'imagickdraw::circle' => 
  array (
    0 => 'mixed',
    'origin_x' => 'mixed',
    'origin_y' => 'mixed',
    'perimeter_x' => 'mixed',
    'perimeter_y' => 'mixed',
  ),
  'imagickdraw::clear' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::clone' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::color' => 
  array (
    0 => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
    'paint' => 'mixed',
  ),
  'imagickdraw::comment' => 
  array (
    0 => 'mixed',
    'comment' => 'mixed',
  ),
  'imagickdraw::composite' => 
  array (
    0 => 'mixed',
    'composite' => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
    'width' => 'mixed',
    'height' => 'mixed',
    'image' => 'Imagick',
  ),
  'imagickdraw::destroy' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::ellipse' => 
  array (
    0 => 'mixed',
    'origin_x' => 'mixed',
    'origin_y' => 'mixed',
    'radius_x' => 'mixed',
    'radius_y' => 'mixed',
    'angle_start' => 'mixed',
    'angle_end' => 'mixed',
  ),
  'imagickdraw::getbordercolor' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::getclippath' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::getcliprule' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::getclipunits' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::getdensity' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::getfillcolor' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::getfillopacity' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::getfillrule' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::getfont' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::getfontfamily' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::getfontresolution' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::getfontsize' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::getfontstretch' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::getfontstyle' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::getfontweight' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::getgravity' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::getopacity' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::getstrokeantialias' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::getstrokecolor' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::getstrokedasharray' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::getstrokedashoffset' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::getstrokelinecap' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::getstrokelinejoin' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::getstrokemiterlimit' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::getstrokeopacity' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::getstrokewidth' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::gettextalignment' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::gettextantialias' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::gettextdecoration' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::gettextdirection' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::gettextencoding' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::gettextinterlinespacing' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::gettextinterwordspacing' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::gettextkerning' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::gettextundercolor' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::getvectorgraphics' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::line' => 
  array (
    0 => 'mixed',
    'start_x' => 'mixed',
    'start_y' => 'mixed',
    'end_x' => 'mixed',
    'end_y' => 'mixed',
  ),
  'imagickdraw::pathclose' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::pathcurvetoabsolute' => 
  array (
    0 => 'mixed',
    'x1' => 'mixed',
    'y1' => 'mixed',
    'x2' => 'mixed',
    'y2' => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
  ),
  'imagickdraw::pathcurvetoquadraticbezierabsolute' => 
  array (
    0 => 'mixed',
    'x1' => 'mixed',
    'y1' => 'mixed',
    'x_end' => 'mixed',
    'y' => 'mixed',
  ),
  'imagickdraw::pathcurvetoquadraticbezierrelative' => 
  array (
    0 => 'mixed',
    'x1' => 'mixed',
    'y1' => 'mixed',
    'x_end' => 'mixed',
    'y' => 'mixed',
  ),
  'imagickdraw::pathcurvetoquadraticbeziersmoothabsolute' => 
  array (
    0 => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
  ),
  'imagickdraw::pathcurvetoquadraticbeziersmoothrelative' => 
  array (
    0 => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
  ),
  'imagickdraw::pathcurvetorelative' => 
  array (
    0 => 'mixed',
    'x1' => 'mixed',
    'y1' => 'mixed',
    'x2' => 'mixed',
    'y2' => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
  ),
  'imagickdraw::pathcurvetosmoothabsolute' => 
  array (
    0 => 'mixed',
    'x2' => 'mixed',
    'y2' => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
  ),
  'imagickdraw::pathcurvetosmoothrelative' => 
  array (
    0 => 'mixed',
    'x2' => 'mixed',
    'y2' => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
  ),
  'imagickdraw::pathellipticarcabsolute' => 
  array (
    0 => 'mixed',
    'rx' => 'mixed',
    'ry' => 'mixed',
    'x_axis_rotation' => 'mixed',
    'large_arc' => 'mixed',
    'sweep' => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
  ),
  'imagickdraw::pathellipticarcrelative' => 
  array (
    0 => 'mixed',
    'rx' => 'mixed',
    'ry' => 'mixed',
    'x_axis_rotation' => 'mixed',
    'large_arc' => 'mixed',
    'sweep' => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
  ),
  'imagickdraw::pathfinish' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::pathlinetoabsolute' => 
  array (
    0 => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
  ),
  'imagickdraw::pathlinetohorizontalabsolute' => 
  array (
    0 => 'mixed',
    'x' => 'mixed',
  ),
  'imagickdraw::pathlinetohorizontalrelative' => 
  array (
    0 => 'mixed',
    'x' => 'mixed',
  ),
  'imagickdraw::pathlinetorelative' => 
  array (
    0 => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
  ),
  'imagickdraw::pathlinetoverticalabsolute' => 
  array (
    0 => 'mixed',
    'y' => 'mixed',
  ),
  'imagickdraw::pathlinetoverticalrelative' => 
  array (
    0 => 'mixed',
    'y' => 'mixed',
  ),
  'imagickdraw::pathmovetoabsolute' => 
  array (
    0 => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
  ),
  'imagickdraw::pathmovetorelative' => 
  array (
    0 => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
  ),
  'imagickdraw::pathstart' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::point' => 
  array (
    0 => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
  ),
  'imagickdraw::polygon' => 
  array (
    0 => 'mixed',
    'coordinates' => 'mixed',
  ),
  'imagickdraw::polyline' => 
  array (
    0 => 'mixed',
    'coordinates' => 'mixed',
  ),
  'imagickdraw::pop' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::popclippath' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::popdefs' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::poppattern' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::push' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::pushclippath' => 
  array (
    0 => 'mixed',
    'clip_mask_id' => 'mixed',
  ),
  'imagickdraw::pushdefs' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::pushpattern' => 
  array (
    0 => 'mixed',
    'pattern_id' => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
    'width' => 'mixed',
    'height' => 'mixed',
  ),
  'imagickdraw::rectangle' => 
  array (
    0 => 'mixed',
    'top_left_x' => 'mixed',
    'top_left_y' => 'mixed',
    'bottom_right_x' => 'mixed',
    'bottom_right_y' => 'mixed',
  ),
  'imagickdraw::render' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::resetvectorgraphics' => 
  array (
    0 => 'mixed',
  ),
  'imagickdraw::rotate' => 
  array (
    0 => 'mixed',
    'degrees' => 'mixed',
  ),
  'imagickdraw::roundrectangle' => 
  array (
    0 => 'mixed',
    'top_left_x' => 'mixed',
    'top_left_y' => 'mixed',
    'bottom_right_x' => 'mixed',
    'bottom_right_y' => 'mixed',
    'rounding_x' => 'mixed',
    'rounding_y' => 'mixed',
  ),
  'imagickdraw::scale' => 
  array (
    0 => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
  ),
  'imagickdraw::setbordercolor' => 
  array (
    0 => 'mixed',
    'color' => 'mixed',
  ),
  'imagickdraw::setclippath' => 
  array (
    0 => 'mixed',
    'clip_mask' => 'mixed',
  ),
  'imagickdraw::setcliprule' => 
  array (
    0 => 'mixed',
    'fillrule' => 'mixed',
  ),
  'imagickdraw::setclipunits' => 
  array (
    0 => 'mixed',
    'pathunits' => 'mixed',
  ),
  'imagickdraw::setdensity' => 
  array (
    0 => 'mixed',
    'density' => 'mixed',
  ),
  'imagickdraw::setfillalpha' => 
  array (
    0 => 'mixed',
    'alpha' => 'mixed',
  ),
  'imagickdraw::setfillcolor' => 
  array (
    0 => 'mixed',
    'fill_color' => 'mixed',
  ),
  'imagickdraw::setfillopacity' => 
  array (
    0 => 'mixed',
    'opacity' => 'mixed',
  ),
  'imagickdraw::setfillpatternurl' => 
  array (
    0 => 'mixed',
    'fill_url' => 'mixed',
  ),
  'imagickdraw::setfillrule' => 
  array (
    0 => 'mixed',
    'fillrule' => 'mixed',
  ),
  'imagickdraw::setfont' => 
  array (
    0 => 'mixed',
    'font_name' => 'mixed',
  ),
  'imagickdraw::setfontfamily' => 
  array (
    0 => 'mixed',
    'font_family' => 'mixed',
  ),
  'imagickdraw::setfontresolution' => 
  array (
    0 => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
  ),
  'imagickdraw::setfontsize' => 
  array (
    0 => 'mixed',
    'point_size' => 'mixed',
  ),
  'imagickdraw::setfontstretch' => 
  array (
    0 => 'mixed',
    'stretch' => 'mixed',
  ),
  'imagickdraw::setfontstyle' => 
  array (
    0 => 'mixed',
    'style' => 'mixed',
  ),
  'imagickdraw::setfontweight' => 
  array (
    0 => 'mixed',
    'weight' => 'mixed',
  ),
  'imagickdraw::setgravity' => 
  array (
    0 => 'mixed',
    'gravity' => 'mixed',
  ),
  'imagickdraw::setopacity' => 
  array (
    0 => 'mixed',
    'opacity' => 'mixed',
  ),
  'imagickdraw::setresolution' => 
  array (
    0 => 'mixed',
    'resolution_x' => 'mixed',
    'resolution_y' => 'mixed',
  ),
  'imagickdraw::setstrokealpha' => 
  array (
    0 => 'mixed',
    'alpha' => 'mixed',
  ),
  'imagickdraw::setstrokeantialias' => 
  array (
    0 => 'mixed',
    'enabled' => 'mixed',
  ),
  'imagickdraw::setstrokecolor' => 
  array (
    0 => 'mixed',
    'color' => 'mixed',
  ),
  'imagickdraw::setstrokedasharray' => 
  array (
    0 => 'mixed',
    'dashes' => 'mixed',
  ),
  'imagickdraw::setstrokedashoffset' => 
  array (
    0 => 'mixed',
    'dash_offset' => 'mixed',
  ),
  'imagickdraw::setstrokelinecap' => 
  array (
    0 => 'mixed',
    'linecap' => 'mixed',
  ),
  'imagickdraw::setstrokelinejoin' => 
  array (
    0 => 'mixed',
    'linejoin' => 'mixed',
  ),
  'imagickdraw::setstrokemiterlimit' => 
  array (
    0 => 'mixed',
    'miterlimit' => 'mixed',
  ),
  'imagickdraw::setstrokeopacity' => 
  array (
    0 => 'mixed',
    'opacity' => 'mixed',
  ),
  'imagickdraw::setstrokepatternurl' => 
  array (
    0 => 'mixed',
    'stroke_url' => 'mixed',
  ),
  'imagickdraw::setstrokewidth' => 
  array (
    0 => 'mixed',
    'width' => 'mixed',
  ),
  'imagickdraw::settextalignment' => 
  array (
    0 => 'mixed',
    'align' => 'mixed',
  ),
  'imagickdraw::settextantialias' => 
  array (
    0 => 'mixed',
    'antialias' => 'mixed',
  ),
  'imagickdraw::settextdecoration' => 
  array (
    0 => 'mixed',
    'decoration' => 'mixed',
  ),
  'imagickdraw::settextdirection' => 
  array (
    0 => 'mixed',
    'direction' => 'mixed',
  ),
  'imagickdraw::settextencoding' => 
  array (
    0 => 'mixed',
    'encoding' => 'mixed',
  ),
  'imagickdraw::settextinterlinespacing' => 
  array (
    0 => 'mixed',
    'spacing' => 'mixed',
  ),
  'imagickdraw::settextinterwordspacing' => 
  array (
    0 => 'mixed',
    'spacing' => 'mixed',
  ),
  'imagickdraw::settextkerning' => 
  array (
    0 => 'mixed',
    'kerning' => 'mixed',
  ),
  'imagickdraw::settextundercolor' => 
  array (
    0 => 'mixed',
    'under_color' => 'mixed',
  ),
  'imagickdraw::setvectorgraphics' => 
  array (
    0 => 'mixed',
    'xml' => 'mixed',
  ),
  'imagickdraw::setviewbox' => 
  array (
    0 => 'mixed',
    'left_x' => 'mixed',
    'top_y' => 'mixed',
    'right_x' => 'mixed',
    'bottom_y' => 'mixed',
  ),
  'imagickdraw::skewx' => 
  array (
    0 => 'mixed',
    'degrees' => 'mixed',
  ),
  'imagickdraw::skewy' => 
  array (
    0 => 'mixed',
    'degrees' => 'mixed',
  ),
  'imagickdraw::translate' => 
  array (
    0 => 'mixed',
    'x' => 'mixed',
    'y' => 'mixed',
  ),
  'imagickdrawexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'imagickdrawexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'imagickdrawexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'imagickdrawexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'imagickdrawexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'imagickdrawexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'imagickdrawexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'imagickdrawexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'imagickdrawexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'imagickdrawexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'imagickdrawexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'imagickexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'imagickexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'imagickexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'imagickexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'imagickexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'imagickexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'imagickexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'imagickexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'imagickexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'imagickexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'imagickexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'imagickkernel::addkernel' => 
  array (
    0 => 'mixed',
    'kernel' => 'ImagickKernel',
  ),
  'imagickkernel::addunitykernel' => 
  array (
    0 => 'mixed',
    'scale' => 'mixed',
  ),
  'imagickkernel::frombuiltin' => 
  array (
    0 => 'mixed',
    'kernel' => 'mixed',
    'shape' => 'mixed',
  ),
  'imagickkernel::frommatrix' => 
  array (
    0 => 'mixed',
    'matrix' => 'mixed',
    'origin' => 'mixed',
  ),
  'imagickkernel::getmatrix' => 
  array (
    0 => 'mixed',
  ),
  'imagickkernel::scale' => 
  array (
    0 => 'mixed',
    'scale' => 'mixed',
    'normalize_kernel=' => 'mixed',
  ),
  'imagickkernel::separate' => 
  array (
    0 => 'mixed',
  ),
  'imagickkernelexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'imagickkernelexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'imagickkernelexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'imagickkernelexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'imagickkernelexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'imagickkernelexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'imagickkernelexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'imagickkernelexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'imagickkernelexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'imagickkernelexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'imagickkernelexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixel::__construct' => 
  array (
    0 => 'void',
    'color=' => 'mixed',
  ),
  'imagickpixel::clear' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixel::destroy' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixel::getcolor' => 
  array (
    0 => 'mixed',
    'normalized=' => 'mixed',
  ),
  'imagickpixel::getcolorasstring' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixel::getcolorcount' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixel::getcolorquantum' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixel::getcolorvalue' => 
  array (
    0 => 'mixed',
    'color' => 'mixed',
  ),
  'imagickpixel::getcolorvaluequantum' => 
  array (
    0 => 'mixed',
    'color' => 'mixed',
  ),
  'imagickpixel::gethsl' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixel::getindex' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixel::ispixelsimilar' => 
  array (
    0 => 'mixed',
    'color' => 'mixed',
    'fuzz' => 'mixed',
  ),
  'imagickpixel::ispixelsimilarquantum' => 
  array (
    0 => 'mixed',
    'color' => 'mixed',
    'fuzz_quantum_range_scaled_by_square_root_of_three' => 'mixed',
  ),
  'imagickpixel::issimilar' => 
  array (
    0 => 'mixed',
    'color' => 'mixed',
    'fuzz_quantum_range_scaled_by_square_root_of_three' => 'mixed',
  ),
  'imagickpixel::setcolor' => 
  array (
    0 => 'mixed',
    'color' => 'mixed',
  ),
  'imagickpixel::setcolorcount' => 
  array (
    0 => 'mixed',
    'color_count' => 'mixed',
  ),
  'imagickpixel::setcolorfrompixel' => 
  array (
    0 => 'mixed',
    'pixel' => 'ImagickPixel',
  ),
  'imagickpixel::setcolorvalue' => 
  array (
    0 => 'mixed',
    'color' => 'mixed',
    'value' => 'mixed',
  ),
  'imagickpixel::setcolorvaluequantum' => 
  array (
    0 => 'mixed',
    'color' => 'mixed',
    'value' => 'mixed',
  ),
  'imagickpixel::sethsl' => 
  array (
    0 => 'mixed',
    'hue' => 'mixed',
    'saturation' => 'mixed',
    'luminosity' => 'mixed',
  ),
  'imagickpixel::setindex' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'imagickpixelexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixelexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'imagickpixelexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixelexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixelexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixelexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixelexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixelexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixelexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixelexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixelexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixeliterator::__construct' => 
  array (
    0 => 'void',
    'imagick' => 'Imagick',
  ),
  'imagickpixeliterator::clear' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixeliterator::current' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixeliterator::destroy' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixeliterator::getcurrentiteratorrow' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixeliterator::getiteratorrow' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixeliterator::getnextiteratorrow' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixeliterator::getpixeliterator' => 
  array (
    0 => 'mixed',
    'imagick' => 'Imagick',
  ),
  'imagickpixeliterator::getpixelregioniterator' => 
  array (
    0 => 'mixed',
    'imagick' => 'Imagick',
    'x' => 'mixed',
    'y' => 'mixed',
    'columns' => 'mixed',
    'rows' => 'mixed',
  ),
  'imagickpixeliterator::getpreviousiteratorrow' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixeliterator::key' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixeliterator::newpixeliterator' => 
  array (
    0 => 'mixed',
    'imagick' => 'Imagick',
  ),
  'imagickpixeliterator::newpixelregioniterator' => 
  array (
    0 => 'mixed',
    'imagick' => 'Imagick',
    'x' => 'mixed',
    'y' => 'mixed',
    'columns' => 'mixed',
    'rows' => 'mixed',
  ),
  'imagickpixeliterator::next' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixeliterator::resetiterator' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixeliterator::rewind' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixeliterator::setiteratorfirstrow' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixeliterator::setiteratorlastrow' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixeliterator::setiteratorrow' => 
  array (
    0 => 'mixed',
    'row' => 'mixed',
  ),
  'imagickpixeliterator::synciterator' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixeliterator::valid' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixeliteratorexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixeliteratorexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'imagickpixeliteratorexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixeliteratorexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixeliteratorexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixeliteratorexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixeliteratorexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixeliteratorexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixeliteratorexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixeliteratorexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixeliteratorexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'implode' => 
  array (
    0 => 'mixed',
    'glue' => 'mixed',
    'pieces' => 'mixed',
  ),
  'in_array' => 
  array (
    0 => 'mixed',
    'needle' => 'mixed',
    'haystack' => 'mixed',
    'strict=' => 'mixed',
  ),
  'inet_ntop' => 
  array (
    0 => 'mixed',
    'in_addr' => 'mixed',
  ),
  'inet_pton' => 
  array (
    0 => 'mixed',
    'ip_address' => 'mixed',
  ),
  'infiniteiterator::__construct' => 
  array (
    0 => 'void',
    'iterator' => 'Iterator',
  ),
  'infiniteiterator::current' => 
  array (
    0 => 'mixed',
  ),
  'infiniteiterator::getinneriterator' => 
  array (
    0 => 'mixed',
  ),
  'infiniteiterator::key' => 
  array (
    0 => 'mixed',
  ),
  'infiniteiterator::next' => 
  array (
    0 => 'mixed',
  ),
  'infiniteiterator::rewind' => 
  array (
    0 => 'mixed',
  ),
  'infiniteiterator::valid' => 
  array (
    0 => 'mixed',
  ),
  'inflate_add' => 
  array (
    0 => 'mixed',
    'context' => 'mixed',
    'encoded_data' => 'mixed',
    'flush_mode=' => 'mixed',
  ),
  'inflate_get_read_len' => 
  array (
    0 => 'mixed',
    'resource' => 'mixed',
  ),
  'inflate_get_status' => 
  array (
    0 => 'mixed',
    'resource' => 'mixed',
  ),
  'inflate_init' => 
  array (
    0 => 'mixed',
    'encoding' => 'mixed',
    'options=' => 'mixed',
  ),
  'ini_alter' => 
  array (
    0 => 'mixed',
    'varname' => 'mixed',
    'newvalue' => 'mixed',
  ),
  'ini_get' => 
  array (
    0 => 'mixed',
    'varname' => 'mixed',
  ),
  'ini_get_all' => 
  array (
    0 => 'mixed',
    'extension=' => 'mixed',
    'details=' => 'mixed',
  ),
  'ini_restore' => 
  array (
    0 => 'mixed',
    'varname' => 'mixed',
  ),
  'ini_set' => 
  array (
    0 => 'mixed',
    'varname' => 'mixed',
    'newvalue' => 'mixed',
  ),
  'intdiv' => 
  array (
    0 => 'mixed',
    'dividend' => 'mixed',
    'divisor' => 'mixed',
  ),
  'interface_exists' => 
  array (
    0 => 'mixed',
    'classname' => 'mixed',
    'autoload=' => 'mixed',
  ),
  'intl_error_name' => 
  array (
    0 => 'mixed',
    'arg1' => 'mixed',
  ),
  'intl_get_error_code' => 
  array (
    0 => 'mixed',
  ),
  'intl_get_error_message' => 
  array (
    0 => 'mixed',
  ),
  'intl_is_failure' => 
  array (
    0 => 'mixed',
    'arg1' => 'mixed',
  ),
  'intlbreakiterator::__construct' => 
  array (
    0 => 'void',
  ),
  'intlbreakiterator::createcharacterinstance' => 
  array (
    0 => 'mixed',
    'locale=' => 'mixed',
  ),
  'intlbreakiterator::createcodepointinstance' => 
  array (
    0 => 'mixed',
  ),
  'intlbreakiterator::createlineinstance' => 
  array (
    0 => 'mixed',
    'locale=' => 'mixed',
  ),
  'intlbreakiterator::createsentenceinstance' => 
  array (
    0 => 'mixed',
    'locale=' => 'mixed',
  ),
  'intlbreakiterator::createtitleinstance' => 
  array (
    0 => 'mixed',
    'locale=' => 'mixed',
  ),
  'intlbreakiterator::createwordinstance' => 
  array (
    0 => 'mixed',
    'locale=' => 'mixed',
  ),
  'intlbreakiterator::current' => 
  array (
    0 => 'mixed',
  ),
  'intlbreakiterator::first' => 
  array (
    0 => 'mixed',
  ),
  'intlbreakiterator::following' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
  ),
  'intlbreakiterator::geterrorcode' => 
  array (
    0 => 'mixed',
  ),
  'intlbreakiterator::geterrormessage' => 
  array (
    0 => 'mixed',
  ),
  'intlbreakiterator::getlocale' => 
  array (
    0 => 'mixed',
    'locale_type' => 'mixed',
  ),
  'intlbreakiterator::getpartsiterator' => 
  array (
    0 => 'mixed',
    'key_type=' => 'mixed',
  ),
  'intlbreakiterator::gettext' => 
  array (
    0 => 'mixed',
  ),
  'intlbreakiterator::isboundary' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
  ),
  'intlbreakiterator::last' => 
  array (
    0 => 'mixed',
  ),
  'intlbreakiterator::next' => 
  array (
    0 => 'mixed',
    'offset=' => 'mixed',
  ),
  'intlbreakiterator::preceding' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
  ),
  'intlbreakiterator::previous' => 
  array (
    0 => 'mixed',
  ),
  'intlbreakiterator::settext' => 
  array (
    0 => 'mixed',
    'text' => 'mixed',
  ),
  'intlcal_add' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
    'field' => 'mixed',
    'amount' => 'mixed',
  ),
  'intlcal_after' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
    'otherCalendar' => 'IntlCalendar',
  ),
  'intlcal_before' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
    'otherCalendar' => 'IntlCalendar',
  ),
  'intlcal_clear' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
    'field=' => 'mixed',
  ),
  'intlcal_create_instance' => 
  array (
    0 => 'mixed',
    'timeZone=' => 'mixed',
    'locale=' => 'mixed',
  ),
  'intlcal_equals' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
    'otherCalendar' => 'IntlCalendar',
  ),
  'intlcal_field_difference' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
    'when' => 'mixed',
    'field' => 'mixed',
  ),
  'intlcal_from_date_time' => 
  array (
    0 => 'mixed',
    'dateTime' => 'mixed',
  ),
  'intlcal_get' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
    'field' => 'mixed',
  ),
  'intlcal_get_actual_maximum' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
    'field' => 'mixed',
  ),
  'intlcal_get_actual_minimum' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
    'field' => 'mixed',
  ),
  'intlcal_get_available_locales' => 
  array (
    0 => 'mixed',
  ),
  'intlcal_get_day_of_week_type' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
    'dayOfWeek' => 'mixed',
  ),
  'intlcal_get_error_code' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
  ),
  'intlcal_get_error_message' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
  ),
  'intlcal_get_first_day_of_week' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
  ),
  'intlcal_get_greatest_minimum' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
    'field' => 'mixed',
  ),
  'intlcal_get_keyword_values_for_locale' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'locale' => 'mixed',
    'commonlyUsed' => 'mixed',
  ),
  'intlcal_get_least_maximum' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
    'field' => 'mixed',
  ),
  'intlcal_get_locale' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
    'localeType' => 'mixed',
  ),
  'intlcal_get_maximum' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
    'field' => 'mixed',
  ),
  'intlcal_get_minimal_days_in_first_week' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
  ),
  'intlcal_get_minimum' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
    'field' => 'mixed',
  ),
  'intlcal_get_now' => 
  array (
    0 => 'mixed',
  ),
  'intlcal_get_repeated_wall_time_option' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
  ),
  'intlcal_get_skipped_wall_time_option' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
  ),
  'intlcal_get_time' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
  ),
  'intlcal_get_time_zone' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
  ),
  'intlcal_get_type' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
  ),
  'intlcal_get_weekend_transition' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
    'dayOfWeek' => 'mixed',
  ),
  'intlcal_in_daylight_time' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
  ),
  'intlcal_is_equivalent_to' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
    'otherCalendar' => 'IntlCalendar',
  ),
  'intlcal_is_lenient' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
  ),
  'intlcal_is_set' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
    'field' => 'mixed',
  ),
  'intlcal_is_weekend' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
    'date=' => 'mixed',
  ),
  'intlcal_roll' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
    'field' => 'mixed',
    'amountOrUpOrDown=' => 'mixed',
  ),
  'intlcal_set' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
    'fieldOrYear' => 'mixed',
    'valueOrMonth' => 'mixed',
    'dayOfMonth=' => 'mixed',
    'hour=' => 'mixed',
    'minute=' => 'mixed',
    'second=' => 'mixed',
  ),
  'intlcal_set_first_day_of_week' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
    'dayOfWeek' => 'mixed',
  ),
  'intlcal_set_lenient' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
    'isLenient' => 'mixed',
  ),
  'intlcal_set_minimal_days_in_first_week' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
    'numberOfDays' => 'mixed',
  ),
  'intlcal_set_repeated_wall_time_option' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
    'wallTimeOption' => 'mixed',
  ),
  'intlcal_set_skipped_wall_time_option' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
    'wallTimeOption' => 'mixed',
  ),
  'intlcal_set_time' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
    'date' => 'mixed',
  ),
  'intlcal_set_time_zone' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
    'timeZone' => 'mixed',
  ),
  'intlcal_to_date_time' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
  ),
  'intlcalendar::__construct' => 
  array (
    0 => 'void',
  ),
  'intlcalendar::add' => 
  array (
    0 => 'mixed',
    'field' => 'mixed',
    'amount' => 'mixed',
  ),
  'intlcalendar::after' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
  ),
  'intlcalendar::before' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
  ),
  'intlcalendar::clear' => 
  array (
    0 => 'mixed',
    'field=' => 'mixed',
  ),
  'intlcalendar::createinstance' => 
  array (
    0 => 'mixed',
    'timeZone=' => 'mixed',
    'locale=' => 'mixed',
  ),
  'intlcalendar::equals' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
  ),
  'intlcalendar::fielddifference' => 
  array (
    0 => 'mixed',
    'when' => 'mixed',
    'field' => 'mixed',
  ),
  'intlcalendar::fromdatetime' => 
  array (
    0 => 'mixed',
    'dateTime' => 'mixed',
  ),
  'intlcalendar::get' => 
  array (
    0 => 'mixed',
    'field' => 'mixed',
  ),
  'intlcalendar::getactualmaximum' => 
  array (
    0 => 'mixed',
    'field' => 'mixed',
  ),
  'intlcalendar::getactualminimum' => 
  array (
    0 => 'mixed',
    'field' => 'mixed',
  ),
  'intlcalendar::getavailablelocales' => 
  array (
    0 => 'mixed',
  ),
  'intlcalendar::getdayofweektype' => 
  array (
    0 => 'mixed',
    'dayOfWeek' => 'mixed',
  ),
  'intlcalendar::geterrorcode' => 
  array (
    0 => 'mixed',
  ),
  'intlcalendar::geterrormessage' => 
  array (
    0 => 'mixed',
  ),
  'intlcalendar::getfirstdayofweek' => 
  array (
    0 => 'mixed',
  ),
  'intlcalendar::getgreatestminimum' => 
  array (
    0 => 'mixed',
    'field' => 'mixed',
  ),
  'intlcalendar::getkeywordvaluesforlocale' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'locale' => 'mixed',
    'commonlyUsed' => 'mixed',
  ),
  'intlcalendar::getleastmaximum' => 
  array (
    0 => 'mixed',
    'field' => 'mixed',
  ),
  'intlcalendar::getlocale' => 
  array (
    0 => 'mixed',
    'localeType' => 'mixed',
  ),
  'intlcalendar::getmaximum' => 
  array (
    0 => 'mixed',
    'field' => 'mixed',
  ),
  'intlcalendar::getminimaldaysinfirstweek' => 
  array (
    0 => 'mixed',
  ),
  'intlcalendar::getminimum' => 
  array (
    0 => 'mixed',
    'field' => 'mixed',
  ),
  'intlcalendar::getnow' => 
  array (
    0 => 'mixed',
  ),
  'intlcalendar::getrepeatedwalltimeoption' => 
  array (
    0 => 'mixed',
  ),
  'intlcalendar::getskippedwalltimeoption' => 
  array (
    0 => 'mixed',
  ),
  'intlcalendar::gettime' => 
  array (
    0 => 'mixed',
  ),
  'intlcalendar::gettimezone' => 
  array (
    0 => 'mixed',
  ),
  'intlcalendar::gettype' => 
  array (
    0 => 'mixed',
  ),
  'intlcalendar::getweekendtransition' => 
  array (
    0 => 'mixed',
    'dayOfWeek' => 'mixed',
  ),
  'intlcalendar::indaylighttime' => 
  array (
    0 => 'mixed',
  ),
  'intlcalendar::isequivalentto' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
  ),
  'intlcalendar::islenient' => 
  array (
    0 => 'mixed',
  ),
  'intlcalendar::isset' => 
  array (
    0 => 'mixed',
    'field' => 'mixed',
  ),
  'intlcalendar::isweekend' => 
  array (
    0 => 'mixed',
    'date=' => 'mixed',
  ),
  'intlcalendar::roll' => 
  array (
    0 => 'mixed',
    'field' => 'mixed',
    'amountOrUpOrDown' => 'mixed',
  ),
  'intlcalendar::set' => 
  array (
    0 => 'mixed',
    'fieldOrYear' => 'mixed',
    'valueOrMonth' => 'mixed',
    'dayOfMonth=' => 'mixed',
    'hour=' => 'mixed',
    'minute=' => 'mixed',
    'second=' => 'mixed',
  ),
  'intlcalendar::setfirstdayofweek' => 
  array (
    0 => 'mixed',
    'dayOfWeek' => 'mixed',
  ),
  'intlcalendar::setlenient' => 
  array (
    0 => 'mixed',
    'isLenient' => 'mixed',
  ),
  'intlcalendar::setminimaldaysinfirstweek' => 
  array (
    0 => 'mixed',
    'numberOfDays' => 'mixed',
  ),
  'intlcalendar::setrepeatedwalltimeoption' => 
  array (
    0 => 'mixed',
    'wallTimeOption' => 'mixed',
  ),
  'intlcalendar::setskippedwalltimeoption' => 
  array (
    0 => 'mixed',
    'wallTimeOption' => 'mixed',
  ),
  'intlcalendar::settime' => 
  array (
    0 => 'mixed',
    'date' => 'mixed',
  ),
  'intlcalendar::settimezone' => 
  array (
    0 => 'mixed',
    'timeZone' => 'mixed',
  ),
  'intlcalendar::todatetime' => 
  array (
    0 => 'mixed',
  ),
  'intlchar::charage' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'intlchar::chardigitvalue' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'intlchar::chardirection' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'intlchar::charfromname' => 
  array (
    0 => 'mixed',
    'characterName' => 'mixed',
    'nameChoice=' => 'mixed',
  ),
  'intlchar::charmirror' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'intlchar::charname' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
    'nameChoice=' => 'mixed',
  ),
  'intlchar::chartype' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'intlchar::chr' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'intlchar::digit' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
    'radix=' => 'mixed',
  ),
  'intlchar::enumcharnames' => 
  array (
    0 => 'mixed',
    'start' => 'mixed',
    'limit' => 'mixed',
    'callback' => 'mixed',
    'nameChoice=' => 'mixed',
  ),
  'intlchar::enumchartypes' => 
  array (
    0 => 'mixed',
    'callback=' => 'mixed',
  ),
  'intlchar::foldcase' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
    'options=' => 'mixed',
  ),
  'intlchar::fordigit' => 
  array (
    0 => 'mixed',
    'digit' => 'mixed',
    'radix=' => 'mixed',
  ),
  'intlchar::getbidipairedbracket' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'intlchar::getblockcode' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'intlchar::getcombiningclass' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'intlchar::getfc_nfkc_closure' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'intlchar::getintpropertymaxvalue' => 
  array (
    0 => 'mixed',
    'property' => 'mixed',
  ),
  'intlchar::getintpropertyminvalue' => 
  array (
    0 => 'mixed',
    'property' => 'mixed',
  ),
  'intlchar::getintpropertyvalue' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
    'property' => 'mixed',
  ),
  'intlchar::getnumericvalue' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'intlchar::getpropertyenum' => 
  array (
    0 => 'mixed',
    'alias' => 'mixed',
  ),
  'intlchar::getpropertyname' => 
  array (
    0 => 'mixed',
    'property' => 'mixed',
    'nameChoice=' => 'mixed',
  ),
  'intlchar::getpropertyvalueenum' => 
  array (
    0 => 'mixed',
    'property' => 'mixed',
    'name' => 'mixed',
  ),
  'intlchar::getpropertyvaluename' => 
  array (
    0 => 'mixed',
    'property' => 'mixed',
    'value' => 'mixed',
    'nameChoice=' => 'mixed',
  ),
  'intlchar::getunicodeversion' => 
  array (
    0 => 'mixed',
  ),
  'intlchar::hasbinaryproperty' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
    'property' => 'mixed',
  ),
  'intlchar::isalnum' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'intlchar::isalpha' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'intlchar::isbase' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'intlchar::isblank' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'intlchar::iscntrl' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'intlchar::isdefined' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'intlchar::isdigit' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'intlchar::isgraph' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'intlchar::isidignorable' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'intlchar::isidpart' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'intlchar::isidstart' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'intlchar::isisocontrol' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'intlchar::isjavaidpart' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'intlchar::isjavaidstart' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'intlchar::isjavaspacechar' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'intlchar::islower' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'intlchar::ismirrored' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'intlchar::isprint' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'intlchar::ispunct' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'intlchar::isspace' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'intlchar::istitle' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'intlchar::isualphabetic' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'intlchar::isulowercase' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'intlchar::isupper' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'intlchar::isuuppercase' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'intlchar::isuwhitespace' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'intlchar::iswhitespace' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'intlchar::isxdigit' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'intlchar::ord' => 
  array (
    0 => 'mixed',
    'character' => 'mixed',
  ),
  'intlchar::tolower' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'intlchar::totitle' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'intlchar::toupper' => 
  array (
    0 => 'mixed',
    'codepoint' => 'mixed',
  ),
  'intlcodepointbreakiterator::__construct' => 
  array (
    0 => 'void',
  ),
  'intlcodepointbreakiterator::createcharacterinstance' => 
  array (
    0 => 'mixed',
    'locale=' => 'mixed',
  ),
  'intlcodepointbreakiterator::createcodepointinstance' => 
  array (
    0 => 'mixed',
  ),
  'intlcodepointbreakiterator::createlineinstance' => 
  array (
    0 => 'mixed',
    'locale=' => 'mixed',
  ),
  'intlcodepointbreakiterator::createsentenceinstance' => 
  array (
    0 => 'mixed',
    'locale=' => 'mixed',
  ),
  'intlcodepointbreakiterator::createtitleinstance' => 
  array (
    0 => 'mixed',
    'locale=' => 'mixed',
  ),
  'intlcodepointbreakiterator::createwordinstance' => 
  array (
    0 => 'mixed',
    'locale=' => 'mixed',
  ),
  'intlcodepointbreakiterator::current' => 
  array (
    0 => 'mixed',
  ),
  'intlcodepointbreakiterator::first' => 
  array (
    0 => 'mixed',
  ),
  'intlcodepointbreakiterator::following' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
  ),
  'intlcodepointbreakiterator::geterrorcode' => 
  array (
    0 => 'mixed',
  ),
  'intlcodepointbreakiterator::geterrormessage' => 
  array (
    0 => 'mixed',
  ),
  'intlcodepointbreakiterator::getlastcodepoint' => 
  array (
    0 => 'mixed',
  ),
  'intlcodepointbreakiterator::getlocale' => 
  array (
    0 => 'mixed',
    'locale_type' => 'mixed',
  ),
  'intlcodepointbreakiterator::getpartsiterator' => 
  array (
    0 => 'mixed',
    'key_type=' => 'mixed',
  ),
  'intlcodepointbreakiterator::gettext' => 
  array (
    0 => 'mixed',
  ),
  'intlcodepointbreakiterator::isboundary' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
  ),
  'intlcodepointbreakiterator::last' => 
  array (
    0 => 'mixed',
  ),
  'intlcodepointbreakiterator::next' => 
  array (
    0 => 'mixed',
    'offset=' => 'mixed',
  ),
  'intlcodepointbreakiterator::preceding' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
  ),
  'intlcodepointbreakiterator::previous' => 
  array (
    0 => 'mixed',
  ),
  'intlcodepointbreakiterator::settext' => 
  array (
    0 => 'mixed',
    'text' => 'mixed',
  ),
  'intldateformatter::__construct' => 
  array (
    0 => 'void',
    'locale' => 'mixed',
    'datetype' => 'mixed',
    'timetype' => 'mixed',
    'timezone=' => 'mixed',
    'calendar=' => 'mixed',
    'pattern=' => 'mixed',
  ),
  'intldateformatter::create' => 
  array (
    0 => 'mixed',
    'locale' => 'mixed',
    'datetype' => 'mixed',
    'timetype' => 'mixed',
    'timezone=' => 'mixed',
    'calendar=' => 'mixed',
    'pattern=' => 'mixed',
  ),
  'intldateformatter::format' => 
  array (
    0 => 'mixed',
    'args=' => 'mixed',
    'array=' => 'mixed',
  ),
  'intldateformatter::formatobject' => 
  array (
    0 => 'mixed',
    'object' => 'mixed',
    'format=' => 'mixed',
    'locale=' => 'mixed',
  ),
  'intldateformatter::getcalendar' => 
  array (
    0 => 'mixed',
  ),
  'intldateformatter::getcalendarobject' => 
  array (
    0 => 'mixed',
  ),
  'intldateformatter::getdatetype' => 
  array (
    0 => 'mixed',
  ),
  'intldateformatter::geterrorcode' => 
  array (
    0 => 'mixed',
  ),
  'intldateformatter::geterrormessage' => 
  array (
    0 => 'mixed',
  ),
  'intldateformatter::getlocale' => 
  array (
    0 => 'mixed',
  ),
  'intldateformatter::getpattern' => 
  array (
    0 => 'mixed',
  ),
  'intldateformatter::gettimetype' => 
  array (
    0 => 'mixed',
  ),
  'intldateformatter::gettimezone' => 
  array (
    0 => 'mixed',
  ),
  'intldateformatter::gettimezoneid' => 
  array (
    0 => 'mixed',
  ),
  'intldateformatter::islenient' => 
  array (
    0 => 'mixed',
  ),
  'intldateformatter::localtime' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    '&position=' => 'mixed',
  ),
  'intldateformatter::parse' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    '&position=' => 'mixed',
  ),
  'intldateformatter::setcalendar' => 
  array (
    0 => 'mixed',
    'which' => 'mixed',
  ),
  'intldateformatter::setlenient' => 
  array (
    0 => 'mixed',
    'lenient' => 'mixed',
  ),
  'intldateformatter::setpattern' => 
  array (
    0 => 'mixed',
    'pattern' => 'mixed',
  ),
  'intldateformatter::settimezone' => 
  array (
    0 => 'mixed',
    'zone' => 'mixed',
  ),
  'intlexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'intlexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'intlexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'intlexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'intlexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'intlexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'intlexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'intlexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'intlexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'intlexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'intlexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'intlgregcal_create_instance' => 
  array (
    0 => 'mixed',
    'timeZoneOrYear=' => 'mixed',
    'localeOrMonth=' => 'mixed',
    'dayOfMonth=' => 'mixed',
    'hour=' => 'mixed',
    'minute=' => 'mixed',
    'second=' => 'mixed',
  ),
  'intlgregcal_get_gregorian_change' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlGregorianCalendar',
  ),
  'intlgregcal_is_leap_year' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlGregorianCalendar',
    'year' => 'mixed',
  ),
  'intlgregcal_set_gregorian_change' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlGregorianCalendar',
    'date' => 'mixed',
  ),
  'intlgregoriancalendar::__construct' => 
  array (
    0 => 'void',
    'timeZoneOrYear=' => 'mixed',
    'localeOrMonth=' => 'mixed',
    'dayOfMonth=' => 'mixed',
    'hour=' => 'mixed',
    'minute=' => 'mixed',
    'second=' => 'mixed',
  ),
  'intlgregoriancalendar::add' => 
  array (
    0 => 'mixed',
    'field' => 'mixed',
    'amount' => 'mixed',
  ),
  'intlgregoriancalendar::after' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
  ),
  'intlgregoriancalendar::before' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
  ),
  'intlgregoriancalendar::clear' => 
  array (
    0 => 'mixed',
    'field=' => 'mixed',
  ),
  'intlgregoriancalendar::createinstance' => 
  array (
    0 => 'mixed',
    'timeZone=' => 'mixed',
    'locale=' => 'mixed',
  ),
  'intlgregoriancalendar::equals' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
  ),
  'intlgregoriancalendar::fielddifference' => 
  array (
    0 => 'mixed',
    'when' => 'mixed',
    'field' => 'mixed',
  ),
  'intlgregoriancalendar::fromdatetime' => 
  array (
    0 => 'mixed',
    'dateTime' => 'mixed',
  ),
  'intlgregoriancalendar::get' => 
  array (
    0 => 'mixed',
    'field' => 'mixed',
  ),
  'intlgregoriancalendar::getactualmaximum' => 
  array (
    0 => 'mixed',
    'field' => 'mixed',
  ),
  'intlgregoriancalendar::getactualminimum' => 
  array (
    0 => 'mixed',
    'field' => 'mixed',
  ),
  'intlgregoriancalendar::getavailablelocales' => 
  array (
    0 => 'mixed',
  ),
  'intlgregoriancalendar::getdayofweektype' => 
  array (
    0 => 'mixed',
    'dayOfWeek' => 'mixed',
  ),
  'intlgregoriancalendar::geterrorcode' => 
  array (
    0 => 'mixed',
  ),
  'intlgregoriancalendar::geterrormessage' => 
  array (
    0 => 'mixed',
  ),
  'intlgregoriancalendar::getfirstdayofweek' => 
  array (
    0 => 'mixed',
  ),
  'intlgregoriancalendar::getgreatestminimum' => 
  array (
    0 => 'mixed',
    'field' => 'mixed',
  ),
  'intlgregoriancalendar::getgregorianchange' => 
  array (
    0 => 'mixed',
  ),
  'intlgregoriancalendar::getkeywordvaluesforlocale' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'locale' => 'mixed',
    'commonlyUsed' => 'mixed',
  ),
  'intlgregoriancalendar::getleastmaximum' => 
  array (
    0 => 'mixed',
    'field' => 'mixed',
  ),
  'intlgregoriancalendar::getlocale' => 
  array (
    0 => 'mixed',
    'localeType' => 'mixed',
  ),
  'intlgregoriancalendar::getmaximum' => 
  array (
    0 => 'mixed',
    'field' => 'mixed',
  ),
  'intlgregoriancalendar::getminimaldaysinfirstweek' => 
  array (
    0 => 'mixed',
  ),
  'intlgregoriancalendar::getminimum' => 
  array (
    0 => 'mixed',
    'field' => 'mixed',
  ),
  'intlgregoriancalendar::getnow' => 
  array (
    0 => 'mixed',
  ),
  'intlgregoriancalendar::getrepeatedwalltimeoption' => 
  array (
    0 => 'mixed',
  ),
  'intlgregoriancalendar::getskippedwalltimeoption' => 
  array (
    0 => 'mixed',
  ),
  'intlgregoriancalendar::gettime' => 
  array (
    0 => 'mixed',
  ),
  'intlgregoriancalendar::gettimezone' => 
  array (
    0 => 'mixed',
  ),
  'intlgregoriancalendar::gettype' => 
  array (
    0 => 'mixed',
  ),
  'intlgregoriancalendar::getweekendtransition' => 
  array (
    0 => 'mixed',
    'dayOfWeek' => 'mixed',
  ),
  'intlgregoriancalendar::indaylighttime' => 
  array (
    0 => 'mixed',
  ),
  'intlgregoriancalendar::isequivalentto' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
  ),
  'intlgregoriancalendar::isleapyear' => 
  array (
    0 => 'mixed',
    'year' => 'mixed',
  ),
  'intlgregoriancalendar::islenient' => 
  array (
    0 => 'mixed',
  ),
  'intlgregoriancalendar::isset' => 
  array (
    0 => 'mixed',
    'field' => 'mixed',
  ),
  'intlgregoriancalendar::isweekend' => 
  array (
    0 => 'mixed',
    'date=' => 'mixed',
  ),
  'intlgregoriancalendar::roll' => 
  array (
    0 => 'mixed',
    'field' => 'mixed',
    'amountOrUpOrDown' => 'mixed',
  ),
  'intlgregoriancalendar::set' => 
  array (
    0 => 'mixed',
    'fieldOrYear' => 'mixed',
    'valueOrMonth' => 'mixed',
    'dayOfMonth=' => 'mixed',
    'hour=' => 'mixed',
    'minute=' => 'mixed',
    'second=' => 'mixed',
  ),
  'intlgregoriancalendar::setfirstdayofweek' => 
  array (
    0 => 'mixed',
    'dayOfWeek' => 'mixed',
  ),
  'intlgregoriancalendar::setgregorianchange' => 
  array (
    0 => 'mixed',
    'date' => 'mixed',
  ),
  'intlgregoriancalendar::setlenient' => 
  array (
    0 => 'mixed',
    'isLenient' => 'mixed',
  ),
  'intlgregoriancalendar::setminimaldaysinfirstweek' => 
  array (
    0 => 'mixed',
    'numberOfDays' => 'mixed',
  ),
  'intlgregoriancalendar::setrepeatedwalltimeoption' => 
  array (
    0 => 'mixed',
    'wallTimeOption' => 'mixed',
  ),
  'intlgregoriancalendar::setskippedwalltimeoption' => 
  array (
    0 => 'mixed',
    'wallTimeOption' => 'mixed',
  ),
  'intlgregoriancalendar::settime' => 
  array (
    0 => 'mixed',
    'date' => 'mixed',
  ),
  'intlgregoriancalendar::settimezone' => 
  array (
    0 => 'mixed',
    'timeZone' => 'mixed',
  ),
  'intlgregoriancalendar::todatetime' => 
  array (
    0 => 'mixed',
  ),
  'intliterator::current' => 
  array (
    0 => 'mixed',
  ),
  'intliterator::key' => 
  array (
    0 => 'mixed',
  ),
  'intliterator::next' => 
  array (
    0 => 'mixed',
  ),
  'intliterator::rewind' => 
  array (
    0 => 'mixed',
  ),
  'intliterator::valid' => 
  array (
    0 => 'mixed',
  ),
  'intlpartsiterator::current' => 
  array (
    0 => 'mixed',
  ),
  'intlpartsiterator::getbreakiterator' => 
  array (
    0 => 'mixed',
  ),
  'intlpartsiterator::key' => 
  array (
    0 => 'mixed',
  ),
  'intlpartsiterator::next' => 
  array (
    0 => 'mixed',
  ),
  'intlpartsiterator::rewind' => 
  array (
    0 => 'mixed',
  ),
  'intlpartsiterator::valid' => 
  array (
    0 => 'mixed',
  ),
  'intlrulebasedbreakiterator::__construct' => 
  array (
    0 => 'void',
    'rules' => 'mixed',
    'areCompiled=' => 'mixed',
  ),
  'intlrulebasedbreakiterator::createcharacterinstance' => 
  array (
    0 => 'mixed',
    'locale=' => 'mixed',
  ),
  'intlrulebasedbreakiterator::createcodepointinstance' => 
  array (
    0 => 'mixed',
  ),
  'intlrulebasedbreakiterator::createlineinstance' => 
  array (
    0 => 'mixed',
    'locale=' => 'mixed',
  ),
  'intlrulebasedbreakiterator::createsentenceinstance' => 
  array (
    0 => 'mixed',
    'locale=' => 'mixed',
  ),
  'intlrulebasedbreakiterator::createtitleinstance' => 
  array (
    0 => 'mixed',
    'locale=' => 'mixed',
  ),
  'intlrulebasedbreakiterator::createwordinstance' => 
  array (
    0 => 'mixed',
    'locale=' => 'mixed',
  ),
  'intlrulebasedbreakiterator::current' => 
  array (
    0 => 'mixed',
  ),
  'intlrulebasedbreakiterator::first' => 
  array (
    0 => 'mixed',
  ),
  'intlrulebasedbreakiterator::following' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
  ),
  'intlrulebasedbreakiterator::getbinaryrules' => 
  array (
    0 => 'mixed',
  ),
  'intlrulebasedbreakiterator::geterrorcode' => 
  array (
    0 => 'mixed',
  ),
  'intlrulebasedbreakiterator::geterrormessage' => 
  array (
    0 => 'mixed',
  ),
  'intlrulebasedbreakiterator::getlocale' => 
  array (
    0 => 'mixed',
    'locale_type' => 'mixed',
  ),
  'intlrulebasedbreakiterator::getpartsiterator' => 
  array (
    0 => 'mixed',
    'key_type=' => 'mixed',
  ),
  'intlrulebasedbreakiterator::getrules' => 
  array (
    0 => 'mixed',
  ),
  'intlrulebasedbreakiterator::getrulestatus' => 
  array (
    0 => 'mixed',
  ),
  'intlrulebasedbreakiterator::getrulestatusvec' => 
  array (
    0 => 'mixed',
  ),
  'intlrulebasedbreakiterator::gettext' => 
  array (
    0 => 'mixed',
  ),
  'intlrulebasedbreakiterator::isboundary' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
  ),
  'intlrulebasedbreakiterator::last' => 
  array (
    0 => 'mixed',
  ),
  'intlrulebasedbreakiterator::next' => 
  array (
    0 => 'mixed',
    'offset=' => 'mixed',
  ),
  'intlrulebasedbreakiterator::preceding' => 
  array (
    0 => 'mixed',
    'offset' => 'mixed',
  ),
  'intlrulebasedbreakiterator::previous' => 
  array (
    0 => 'mixed',
  ),
  'intlrulebasedbreakiterator::settext' => 
  array (
    0 => 'mixed',
    'text' => 'mixed',
  ),
  'intltimezone::__construct' => 
  array (
    0 => 'void',
  ),
  'intltimezone::countequivalentids' => 
  array (
    0 => 'mixed',
    'zoneId' => 'mixed',
  ),
  'intltimezone::createdefault' => 
  array (
    0 => 'mixed',
  ),
  'intltimezone::createenumeration' => 
  array (
    0 => 'mixed',
    'countryOrRawOffset=' => 'mixed',
  ),
  'intltimezone::createtimezone' => 
  array (
    0 => 'mixed',
    'zoneId' => 'mixed',
  ),
  'intltimezone::createtimezoneidenumeration' => 
  array (
    0 => 'mixed',
    'zoneType' => 'mixed',
    'region=' => 'mixed',
    'rawOffset=' => 'mixed',
  ),
  'intltimezone::fromdatetimezone' => 
  array (
    0 => 'mixed',
    'zoneId' => 'mixed',
  ),
  'intltimezone::getcanonicalid' => 
  array (
    0 => 'mixed',
    'zoneId' => 'mixed',
    '&isSystemID=' => 'mixed',
  ),
  'intltimezone::getdisplayname' => 
  array (
    0 => 'mixed',
    'isDaylight=' => 'mixed',
    'style=' => 'mixed',
    'locale=' => 'mixed',
  ),
  'intltimezone::getdstsavings' => 
  array (
    0 => 'mixed',
  ),
  'intltimezone::getequivalentid' => 
  array (
    0 => 'mixed',
    'zoneId' => 'mixed',
    'index' => 'mixed',
  ),
  'intltimezone::geterrorcode' => 
  array (
    0 => 'mixed',
  ),
  'intltimezone::geterrormessage' => 
  array (
    0 => 'mixed',
  ),
  'intltimezone::getgmt' => 
  array (
    0 => 'mixed',
  ),
  'intltimezone::getid' => 
  array (
    0 => 'mixed',
  ),
  'intltimezone::getidforwindowsid' => 
  array (
    0 => 'mixed',
    'timezone' => 'mixed',
    'region=' => 'mixed',
  ),
  'intltimezone::getoffset' => 
  array (
    0 => 'mixed',
    'date' => 'mixed',
    'local' => 'mixed',
    '&rawOffset' => 'mixed',
    '&dstOffset' => 'mixed',
  ),
  'intltimezone::getrawoffset' => 
  array (
    0 => 'mixed',
  ),
  'intltimezone::getregion' => 
  array (
    0 => 'mixed',
    'zoneId' => 'mixed',
  ),
  'intltimezone::gettzdataversion' => 
  array (
    0 => 'mixed',
  ),
  'intltimezone::getunknown' => 
  array (
    0 => 'mixed',
  ),
  'intltimezone::getwindowsid' => 
  array (
    0 => 'mixed',
    'timezone' => 'mixed',
  ),
  'intltimezone::hassamerules' => 
  array (
    0 => 'mixed',
    'otherTimeZone' => 'IntlTimeZone',
  ),
  'intltimezone::todatetimezone' => 
  array (
    0 => 'mixed',
  ),
  'intltimezone::usedaylighttime' => 
  array (
    0 => 'mixed',
  ),
  'intltz_count_equivalent_ids' => 
  array (
    0 => 'mixed',
    'zoneId' => 'mixed',
  ),
  'intltz_create_default' => 
  array (
    0 => 'mixed',
  ),
  'intltz_create_enumeration' => 
  array (
    0 => 'mixed',
    'countryOrRawOffset=' => 'mixed',
  ),
  'intltz_create_time_zone' => 
  array (
    0 => 'mixed',
    'zoneId' => 'mixed',
  ),
  'intltz_create_time_zone_id_enumeration' => 
  array (
    0 => 'mixed',
    'zoneType' => 'mixed',
    'region=' => 'mixed',
    'rawOffset=' => 'mixed',
  ),
  'intltz_from_date_time_zone' => 
  array (
    0 => 'mixed',
    'dateTimeZone' => 'DateTimeZone',
  ),
  'intltz_get_canonical_id' => 
  array (
    0 => 'mixed',
    'zoneId' => 'mixed',
    '&isSystemID=' => 'mixed',
  ),
  'intltz_get_display_name' => 
  array (
    0 => 'mixed',
    'timeZone' => 'IntlTimeZone',
    'isDaylight=' => 'mixed',
    'style=' => 'mixed',
    'locale=' => 'mixed',
  ),
  'intltz_get_dst_savings' => 
  array (
    0 => 'mixed',
    'timeZone' => 'IntlTimeZone',
  ),
  'intltz_get_equivalent_id' => 
  array (
    0 => 'mixed',
    'zoneId' => 'mixed',
    'index' => 'mixed',
  ),
  'intltz_get_error_code' => 
  array (
    0 => 'mixed',
    'timeZone' => 'IntlTimeZone',
  ),
  'intltz_get_error_message' => 
  array (
    0 => 'mixed',
    'timeZone' => 'IntlTimeZone',
  ),
  'intltz_get_gmt' => 
  array (
    0 => 'mixed',
  ),
  'intltz_get_id' => 
  array (
    0 => 'mixed',
    'timeZone' => 'IntlTimeZone',
  ),
  'intltz_get_offset' => 
  array (
    0 => 'mixed',
    'timeZone' => 'IntlTimeZone',
    'date' => 'mixed',
    'local' => 'mixed',
    '&rawOffset' => 'mixed',
    '&dstOffset' => 'mixed',
  ),
  'intltz_get_raw_offset' => 
  array (
    0 => 'mixed',
    'timeZone' => 'IntlTimeZone',
  ),
  'intltz_get_region' => 
  array (
    0 => 'mixed',
    'zoneId' => 'mixed',
  ),
  'intltz_get_tz_data_version' => 
  array (
    0 => 'mixed',
  ),
  'intltz_get_unknown' => 
  array (
    0 => 'mixed',
  ),
  'intltz_has_same_rules' => 
  array (
    0 => 'mixed',
    'timeZone' => 'IntlTimeZone',
    'otherTimeZone=' => 'IntlTimeZone',
  ),
  'intltz_to_date_time_zone' => 
  array (
    0 => 'mixed',
    'timeZone' => 'IntlTimeZone',
  ),
  'intltz_use_daylight_time' => 
  array (
    0 => 'mixed',
    'timeZone' => 'IntlTimeZone',
  ),
  'intval' => 
  array (
    0 => 'mixed',
    'var' => 'mixed',
    'base=' => 'mixed',
  ),
  'invalidargumentexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'invalidargumentexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'invalidargumentexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'invalidargumentexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'invalidargumentexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'invalidargumentexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'invalidargumentexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'invalidargumentexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'invalidargumentexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'invalidargumentexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'invalidargumentexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'ip2long' => 
  array (
    0 => 'mixed',
    'ip_address' => 'mixed',
  ),
  'iptcembed' => 
  array (
    0 => 'mixed',
    'iptcdata' => 'mixed',
    'jpeg_file_name' => 'mixed',
    'spool=' => 'mixed',
  ),
  'iptcparse' => 
  array (
    0 => 'mixed',
    'iptcdata' => 'mixed',
  ),
  'is_a' => 
  array (
    0 => 'mixed',
    'object' => 'mixed',
    'class_name' => 'mixed',
    'allow_string=' => 'mixed',
  ),
  'is_array' => 
  array (
    0 => 'mixed',
    'var' => 'mixed',
  ),
  'is_bool' => 
  array (
    0 => 'mixed',
    'var' => 'mixed',
  ),
  'is_callable' => 
  array (
    0 => 'mixed',
    'var' => 'mixed',
    'syntax_only=' => 'mixed',
    '&callable_name=' => 'mixed',
  ),
  'is_countable' => 
  array (
    0 => 'mixed',
    'var' => 'mixed',
  ),
  'is_dir' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'is_double' => 
  array (
    0 => 'mixed',
    'var' => 'mixed',
  ),
  'is_executable' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'is_file' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'is_finite' => 
  array (
    0 => 'mixed',
    'val' => 'mixed',
  ),
  'is_float' => 
  array (
    0 => 'mixed',
    'var' => 'mixed',
  ),
  'is_infinite' => 
  array (
    0 => 'mixed',
    'val' => 'mixed',
  ),
  'is_int' => 
  array (
    0 => 'mixed',
    'var' => 'mixed',
  ),
  'is_integer' => 
  array (
    0 => 'mixed',
    'var' => 'mixed',
  ),
  'is_iterable' => 
  array (
    0 => 'mixed',
    'var' => 'mixed',
  ),
  'is_link' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'is_long' => 
  array (
    0 => 'mixed',
    'var' => 'mixed',
  ),
  'is_nan' => 
  array (
    0 => 'mixed',
    'val' => 'mixed',
  ),
  'is_null' => 
  array (
    0 => 'mixed',
    'var' => 'mixed',
  ),
  'is_numeric' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'is_object' => 
  array (
    0 => 'mixed',
    'var' => 'mixed',
  ),
  'is_readable' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'is_real' => 
  array (
    0 => 'mixed',
    'var' => 'mixed',
  ),
  'is_resource' => 
  array (
    0 => 'mixed',
    'var' => 'mixed',
  ),
  'is_scalar' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'is_soap_fault' => 
  array (
    0 => 'mixed',
    'object' => 'mixed',
  ),
  'is_string' => 
  array (
    0 => 'mixed',
    'var' => 'mixed',
  ),
  'is_subclass_of' => 
  array (
    0 => 'mixed',
    'object' => 'mixed',
    'class_name' => 'mixed',
    'allow_string=' => 'mixed',
  ),
  'is_uploaded_file' => 
  array (
    0 => 'mixed',
    'path' => 'mixed',
  ),
  'is_writable' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'is_writeable' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'iterator_apply' => 
  array (
    0 => 'mixed',
    'iterator' => 'Traversable',
    'function' => 'mixed',
    'args=' => 'array<array-key, mixed>|null',
  ),
  'iterator_count' => 
  array (
    0 => 'mixed',
    'iterator' => 'Traversable',
  ),
  'iterator_to_array' => 
  array (
    0 => 'mixed',
    'iterator' => 'Traversable',
    'use_keys=' => 'mixed',
  ),
  'iteratoriterator::__construct' => 
  array (
    0 => 'void',
    'iterator' => 'Traversable',
  ),
  'iteratoriterator::current' => 
  array (
    0 => 'mixed',
  ),
  'iteratoriterator::getinneriterator' => 
  array (
    0 => 'mixed',
  ),
  'iteratoriterator::key' => 
  array (
    0 => 'mixed',
  ),
  'iteratoriterator::next' => 
  array (
    0 => 'mixed',
  ),
  'iteratoriterator::rewind' => 
  array (
    0 => 'mixed',
  ),
  'iteratoriterator::valid' => 
  array (
    0 => 'mixed',
  ),
  'join' => 
  array (
    0 => 'mixed',
    'glue' => 'mixed',
    'pieces' => 'mixed',
  ),
  'jpeg2wbmp' => 
  array (
    0 => 'mixed',
    'f_org' => 'mixed',
    'f_dest' => 'mixed',
    'd_height' => 'mixed',
    'd_width' => 'mixed',
    'd_threshold' => 'mixed',
  ),
  'json_decode' => 
  array (
    0 => 'mixed',
    'json' => 'mixed',
    'assoc=' => 'mixed',
    'depth=' => 'mixed',
    'options=' => 'mixed',
  ),
  'json_encode' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
    'options=' => 'mixed',
    'depth=' => 'mixed',
  ),
  'json_last_error' => 
  array (
    0 => 'mixed',
  ),
  'json_last_error_msg' => 
  array (
    0 => 'mixed',
  ),
  'jsonexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'jsonexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'jsonexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'jsonexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'jsonexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'jsonexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'jsonexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'jsonexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'jsonexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'jsonexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'jsonexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'key' => 
  array (
    0 => 'mixed',
    'arg' => 'mixed',
  ),
  'key_exists' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'search' => 'mixed',
  ),
  'krsort' => 
  array (
    0 => 'mixed',
    '&arg' => 'mixed',
    'sort_flags=' => 'mixed',
  ),
  'ksort' => 
  array (
    0 => 'mixed',
    '&arg' => 'mixed',
    'sort_flags=' => 'mixed',
  ),
  'lcfirst' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
  ),
  'lcg_value' => 
  array (
    0 => 'mixed',
  ),
  'lchgrp' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
    'group' => 'mixed',
  ),
  'lchown' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
    'user' => 'mixed',
  ),
  'lengthexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'lengthexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'lengthexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'lengthexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'lengthexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'lengthexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'lengthexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'lengthexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'lengthexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'lengthexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'lengthexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'levenshtein' => 
  array (
    0 => 'mixed',
    'str1' => 'mixed',
    'str2' => 'mixed',
    'cost_ins=' => 'mixed',
    'cost_rep=' => 'mixed',
    'cost_del=' => 'mixed',
  ),
  'libxml_clear_errors' => 
  array (
    0 => 'mixed',
  ),
  'libxml_disable_entity_loader' => 
  array (
    0 => 'mixed',
    'disable=' => 'mixed',
  ),
  'libxml_get_errors' => 
  array (
    0 => 'mixed',
  ),
  'libxml_get_last_error' => 
  array (
    0 => 'mixed',
  ),
  'libxml_set_external_entity_loader' => 
  array (
    0 => 'mixed',
    'resolver_function' => 'mixed',
  ),
  'libxml_set_streams_context' => 
  array (
    0 => 'mixed',
    'context' => 'mixed',
  ),
  'libxml_use_internal_errors' => 
  array (
    0 => 'mixed',
    'use_errors=' => 'mixed',
  ),
  'limititerator::__construct' => 
  array (
    0 => 'void',
    'iterator' => 'Iterator',
    'offset=' => 'mixed',
    'count=' => 'mixed',
  ),
  'limititerator::current' => 
  array (
    0 => 'mixed',
  ),
  'limititerator::getinneriterator' => 
  array (
    0 => 'mixed',
  ),
  'limititerator::getposition' => 
  array (
    0 => 'mixed',
  ),
  'limititerator::key' => 
  array (
    0 => 'mixed',
  ),
  'limititerator::next' => 
  array (
    0 => 'mixed',
  ),
  'limititerator::rewind' => 
  array (
    0 => 'mixed',
  ),
  'limititerator::seek' => 
  array (
    0 => 'mixed',
    'position' => 'mixed',
  ),
  'limititerator::valid' => 
  array (
    0 => 'mixed',
  ),
  'link' => 
  array (
    0 => 'mixed',
    'target' => 'mixed',
    'link' => 'mixed',
  ),
  'linkinfo' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'locale::acceptfromhttp' => 
  array (
    0 => 'mixed',
    'header' => 'mixed',
  ),
  'locale::canonicalize' => 
  array (
    0 => 'mixed',
    'locale' => 'mixed',
  ),
  'locale::composelocale' => 
  array (
    0 => 'mixed',
    'subtags' => 'mixed',
  ),
  'locale::filtermatches' => 
  array (
    0 => 'mixed',
    'langtag' => 'mixed',
    'locale' => 'mixed',
    'canonicalize=' => 'mixed',
  ),
  'locale::getallvariants' => 
  array (
    0 => 'mixed',
    'locale' => 'mixed',
  ),
  'locale::getdefault' => 
  array (
    0 => 'mixed',
  ),
  'locale::getdisplaylanguage' => 
  array (
    0 => 'mixed',
    'locale' => 'mixed',
    'in_locale=' => 'mixed',
  ),
  'locale::getdisplayname' => 
  array (
    0 => 'mixed',
    'locale' => 'mixed',
    'in_locale=' => 'mixed',
  ),
  'locale::getdisplayregion' => 
  array (
    0 => 'mixed',
    'locale' => 'mixed',
    'in_locale=' => 'mixed',
  ),
  'locale::getdisplayscript' => 
  array (
    0 => 'mixed',
    'locale' => 'mixed',
    'in_locale=' => 'mixed',
  ),
  'locale::getdisplayvariant' => 
  array (
    0 => 'mixed',
    'locale' => 'mixed',
    'in_locale=' => 'mixed',
  ),
  'locale::getkeywords' => 
  array (
    0 => 'mixed',
    'locale' => 'mixed',
  ),
  'locale::getprimarylanguage' => 
  array (
    0 => 'mixed',
    'locale' => 'mixed',
  ),
  'locale::getregion' => 
  array (
    0 => 'mixed',
    'locale' => 'mixed',
  ),
  'locale::getscript' => 
  array (
    0 => 'mixed',
    'locale' => 'mixed',
  ),
  'locale::lookup' => 
  array (
    0 => 'mixed',
    'langtag' => 'mixed',
    'locale' => 'mixed',
    'canonicalize=' => 'mixed',
    'default=' => 'mixed',
  ),
  'locale::parselocale' => 
  array (
    0 => 'mixed',
    'locale' => 'mixed',
  ),
  'locale::setdefault' => 
  array (
    0 => 'mixed',
    'locale' => 'mixed',
  ),
  'locale_accept_from_http' => 
  array (
    0 => 'mixed',
    'arg1' => 'mixed',
  ),
  'locale_canonicalize' => 
  array (
    0 => 'mixed',
    'arg1' => 'mixed',
  ),
  'locale_compose' => 
  array (
    0 => 'mixed',
    'arg1' => 'mixed',
  ),
  'locale_filter_matches' => 
  array (
    0 => 'mixed',
    'langtag' => 'mixed',
    'locale' => 'mixed',
    'canonicalize=' => 'mixed',
  ),
  'locale_get_all_variants' => 
  array (
    0 => 'mixed',
    'arg1' => 'mixed',
  ),
  'locale_get_default' => 
  array (
    0 => 'mixed',
  ),
  'locale_get_display_language' => 
  array (
    0 => 'mixed',
    'locale' => 'mixed',
    'in_locale=' => 'mixed',
  ),
  'locale_get_display_name' => 
  array (
    0 => 'mixed',
    'locale' => 'mixed',
    'in_locale=' => 'mixed',
  ),
  'locale_get_display_region' => 
  array (
    0 => 'mixed',
    'locale' => 'mixed',
    'in_locale=' => 'mixed',
  ),
  'locale_get_display_script' => 
  array (
    0 => 'mixed',
    'locale' => 'mixed',
    'in_locale=' => 'mixed',
  ),
  'locale_get_display_variant' => 
  array (
    0 => 'mixed',
    'locale' => 'mixed',
    'in_locale=' => 'mixed',
  ),
  'locale_get_keywords' => 
  array (
    0 => 'mixed',
    'arg1' => 'mixed',
  ),
  'locale_get_primary_language' => 
  array (
    0 => 'mixed',
    'arg1' => 'mixed',
  ),
  'locale_get_region' => 
  array (
    0 => 'mixed',
    'arg1' => 'mixed',
  ),
  'locale_get_script' => 
  array (
    0 => 'mixed',
    'arg1' => 'mixed',
  ),
  'locale_lookup' => 
  array (
    0 => 'mixed',
    'langtag' => 'mixed',
    'locale' => 'mixed',
    'canonicalize=' => 'mixed',
    'def=' => 'mixed',
  ),
  'locale_parse' => 
  array (
    0 => 'mixed',
    'arg1' => 'mixed',
  ),
  'locale_set_default' => 
  array (
    0 => 'mixed',
    'arg1' => 'mixed',
  ),
  'localeconv' => 
  array (
    0 => 'mixed',
  ),
  'localtime' => 
  array (
    0 => 'mixed',
    'timestamp=' => 'mixed',
    'associative_array=' => 'mixed',
  ),
  'log' => 
  array (
    0 => 'mixed',
    'number' => 'mixed',
    'base=' => 'mixed',
  ),
  'log10' => 
  array (
    0 => 'mixed',
    'number' => 'mixed',
  ),
  'log1p' => 
  array (
    0 => 'mixed',
    'number' => 'mixed',
  ),
  'logicexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'logicexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'logicexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'logicexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'logicexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'logicexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'logicexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'logicexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'logicexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'logicexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'logicexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'long2ip' => 
  array (
    0 => 'mixed',
    'proper_address' => 'mixed',
  ),
  'lstat' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'ltrim' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
    'character_mask=' => 'mixed',
  ),
  'mail' => 
  array (
    0 => 'mixed',
    'to' => 'mixed',
    'subject' => 'mixed',
    'message' => 'mixed',
    'additional_headers=' => 'mixed',
    'additional_parameters=' => 'mixed',
  ),
  'max' => 
  array (
    0 => 'mixed',
    '...args' => 'mixed',
  ),
  'mb_check_encoding' => 
  array (
    0 => 'mixed',
    'var=' => 'mixed',
    'encoding=' => 'mixed',
  ),
  'mb_chr' => 
  array (
    0 => 'mixed',
    'cp' => 'mixed',
    'encoding=' => 'mixed',
  ),
  'mb_convert_case' => 
  array (
    0 => 'mixed',
    'sourcestring' => 'mixed',
    'mode' => 'mixed',
    'encoding=' => 'mixed',
  ),
  'mb_convert_encoding' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
    'to' => 'mixed',
    'from=' => 'mixed',
  ),
  'mb_convert_kana' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
    'option=' => 'mixed',
    'encoding=' => 'mixed',
  ),
  'mb_convert_variables' => 
  array (
    0 => 'false|string',
    'to_encoding' => 'string',
    'from_encoding' => 'array<array-key, mixed>|string',
    '&var' => 'array<array-key, mixed>|object|string',
    '...&vars=' => 'array<array-key, mixed>|object|string',
  ),
  'mb_decode_mimeheader' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
  ),
  'mb_decode_numericentity' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    'convmap' => 'mixed',
    'encoding=' => 'mixed',
    'is_hex=' => 'mixed',
  ),
  'mb_detect_encoding' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
    'encoding_list=' => 'mixed',
    'strict=' => 'mixed',
  ),
  'mb_detect_order' => 
  array (
    0 => 'mixed',
    'encoding=' => 'mixed',
  ),
  'mb_encode_mimeheader' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
    'charset=' => 'mixed',
    'transfer=' => 'mixed',
    'linefeed=' => 'mixed',
    'indent=' => 'mixed',
  ),
  'mb_encode_numericentity' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    'convmap' => 'mixed',
    'encoding=' => 'mixed',
    'is_hex=' => 'mixed',
  ),
  'mb_encoding_aliases' => 
  array (
    0 => 'mixed',
    'encoding' => 'mixed',
  ),
  'mb_ereg' => 
  array (
    0 => 'mixed',
    'pattern' => 'mixed',
    'string' => 'mixed',
    '&registers=' => 'mixed',
  ),
  'mb_ereg_match' => 
  array (
    0 => 'mixed',
    'pattern' => 'mixed',
    'string' => 'mixed',
    'option=' => 'mixed',
  ),
  'mb_ereg_replace' => 
  array (
    0 => 'mixed',
    'pattern' => 'mixed',
    'replacement' => 'mixed',
    'string' => 'mixed',
    'option=' => 'mixed',
  ),
  'mb_ereg_replace_callback' => 
  array (
    0 => 'mixed',
    'pattern' => 'mixed',
    'callback' => 'mixed',
    'string' => 'mixed',
    'option=' => 'mixed',
  ),
  'mb_ereg_search' => 
  array (
    0 => 'mixed',
    'pattern=' => 'mixed',
    'option=' => 'mixed',
  ),
  'mb_ereg_search_getpos' => 
  array (
    0 => 'mixed',
  ),
  'mb_ereg_search_getregs' => 
  array (
    0 => 'mixed',
  ),
  'mb_ereg_search_init' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    'pattern=' => 'mixed',
    'option=' => 'mixed',
  ),
  'mb_ereg_search_pos' => 
  array (
    0 => 'mixed',
    'pattern=' => 'mixed',
    'option=' => 'mixed',
  ),
  'mb_ereg_search_regs' => 
  array (
    0 => 'mixed',
    'pattern=' => 'mixed',
    'option=' => 'mixed',
  ),
  'mb_ereg_search_setpos' => 
  array (
    0 => 'mixed',
    'position' => 'mixed',
  ),
  'mb_eregi' => 
  array (
    0 => 'mixed',
    'pattern' => 'mixed',
    'string' => 'mixed',
    '&registers=' => 'mixed',
  ),
  'mb_eregi_replace' => 
  array (
    0 => 'mixed',
    'pattern' => 'mixed',
    'replacement' => 'mixed',
    'string' => 'mixed',
    'option=' => 'mixed',
  ),
  'mb_get_info' => 
  array (
    0 => 'mixed',
    'type=' => 'mixed',
  ),
  'mb_http_input' => 
  array (
    0 => 'mixed',
    'type=' => 'mixed',
  ),
  'mb_http_output' => 
  array (
    0 => 'mixed',
    'encoding=' => 'mixed',
  ),
  'mb_internal_encoding' => 
  array (
    0 => 'mixed',
    'encoding=' => 'mixed',
  ),
  'mb_language' => 
  array (
    0 => 'mixed',
    'language=' => 'mixed',
  ),
  'mb_list_encodings' => 
  array (
    0 => 'mixed',
  ),
  'mb_ord' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
    'encoding=' => 'mixed',
  ),
  'mb_output_handler' => 
  array (
    0 => 'mixed',
    'contents' => 'mixed',
    'status' => 'mixed',
  ),
  'mb_parse_str' => 
  array (
    0 => 'mixed',
    'encoded_string' => 'mixed',
    '&result=' => 'mixed',
  ),
  'mb_preferred_mime_name' => 
  array (
    0 => 'mixed',
    'encoding' => 'mixed',
  ),
  'mb_regex_encoding' => 
  array (
    0 => 'mixed',
    'encoding=' => 'mixed',
  ),
  'mb_regex_set_options' => 
  array (
    0 => 'mixed',
    'options=' => 'mixed',
  ),
  'mb_scrub' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
    'encoding=' => 'mixed',
  ),
  'mb_send_mail' => 
  array (
    0 => 'mixed',
    'to' => 'mixed',
    'subject' => 'mixed',
    'message' => 'mixed',
    'additional_headers=' => 'mixed',
    'additional_parameters=' => 'mixed',
  ),
  'mb_split' => 
  array (
    0 => 'mixed',
    'pattern' => 'mixed',
    'string' => 'mixed',
    'limit=' => 'mixed',
  ),
  'mb_strcut' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
    'start' => 'mixed',
    'length=' => 'mixed',
    'encoding=' => 'mixed',
  ),
  'mb_strimwidth' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
    'start' => 'mixed',
    'width' => 'mixed',
    'trimmarker=' => 'mixed',
    'encoding=' => 'mixed',
  ),
  'mb_stripos' => 
  array (
    0 => 'mixed',
    'haystack' => 'mixed',
    'needle' => 'mixed',
    'offset=' => 'mixed',
    'encoding=' => 'mixed',
  ),
  'mb_stristr' => 
  array (
    0 => 'mixed',
    'haystack' => 'mixed',
    'needle' => 'mixed',
    'part=' => 'mixed',
    'encoding=' => 'mixed',
  ),
  'mb_strlen' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
    'encoding=' => 'mixed',
  ),
  'mb_strpos' => 
  array (
    0 => 'mixed',
    'haystack' => 'mixed',
    'needle' => 'mixed',
    'offset=' => 'mixed',
    'encoding=' => 'mixed',
  ),
  'mb_strrchr' => 
  array (
    0 => 'mixed',
    'haystack' => 'mixed',
    'needle' => 'mixed',
    'part=' => 'mixed',
    'encoding=' => 'mixed',
  ),
  'mb_strrichr' => 
  array (
    0 => 'mixed',
    'haystack' => 'mixed',
    'needle' => 'mixed',
    'part=' => 'mixed',
    'encoding=' => 'mixed',
  ),
  'mb_strripos' => 
  array (
    0 => 'mixed',
    'haystack' => 'mixed',
    'needle' => 'mixed',
    'offset=' => 'mixed',
    'encoding=' => 'mixed',
  ),
  'mb_strrpos' => 
  array (
    0 => 'mixed',
    'haystack' => 'mixed',
    'needle' => 'mixed',
    'offset=' => 'mixed',
    'encoding=' => 'mixed',
  ),
  'mb_strstr' => 
  array (
    0 => 'mixed',
    'haystack' => 'mixed',
    'needle' => 'mixed',
    'part=' => 'mixed',
    'encoding=' => 'mixed',
  ),
  'mb_strtolower' => 
  array (
    0 => 'mixed',
    'sourcestring' => 'mixed',
    'encoding=' => 'mixed',
  ),
  'mb_strtoupper' => 
  array (
    0 => 'mixed',
    'sourcestring' => 'mixed',
    'encoding=' => 'mixed',
  ),
  'mb_strwidth' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
    'encoding=' => 'mixed',
  ),
  'mb_substitute_character' => 
  array (
    0 => 'mixed',
    'substchar=' => 'mixed',
  ),
  'mb_substr' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
    'start' => 'mixed',
    'length=' => 'mixed',
    'encoding=' => 'mixed',
  ),
  'mb_substr_count' => 
  array (
    0 => 'mixed',
    'haystack' => 'mixed',
    'needle' => 'mixed',
    'encoding=' => 'mixed',
  ),
  'mbereg' => 
  array (
    0 => 'mixed',
    'pattern' => 'mixed',
    'string' => 'mixed',
    '&registers=' => 'mixed',
  ),
  'mbereg_match' => 
  array (
    0 => 'mixed',
    'pattern' => 'mixed',
    'string' => 'mixed',
    'option=' => 'mixed',
  ),
  'mbereg_replace' => 
  array (
    0 => 'mixed',
    'pattern' => 'mixed',
    'replacement' => 'mixed',
    'string' => 'mixed',
    'option=' => 'mixed',
  ),
  'mbereg_search' => 
  array (
    0 => 'mixed',
    'pattern=' => 'mixed',
    'option=' => 'mixed',
  ),
  'mbereg_search_getpos' => 
  array (
    0 => 'mixed',
  ),
  'mbereg_search_getregs' => 
  array (
    0 => 'mixed',
  ),
  'mbereg_search_init' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    'pattern=' => 'mixed',
    'option=' => 'mixed',
  ),
  'mbereg_search_pos' => 
  array (
    0 => 'mixed',
    'pattern=' => 'mixed',
    'option=' => 'mixed',
  ),
  'mbereg_search_regs' => 
  array (
    0 => 'mixed',
    'pattern=' => 'mixed',
    'option=' => 'mixed',
  ),
  'mbereg_search_setpos' => 
  array (
    0 => 'mixed',
    'position' => 'mixed',
  ),
  'mberegi' => 
  array (
    0 => 'mixed',
    'pattern' => 'mixed',
    'string' => 'mixed',
    '&registers=' => 'mixed',
  ),
  'mberegi_replace' => 
  array (
    0 => 'mixed',
    'pattern' => 'mixed',
    'replacement' => 'mixed',
    'string' => 'mixed',
    'option=' => 'mixed',
  ),
  'mbregex_encoding' => 
  array (
    0 => 'mixed',
    'encoding=' => 'mixed',
  ),
  'mbsplit' => 
  array (
    0 => 'mixed',
    'pattern' => 'mixed',
    'string' => 'mixed',
    'limit=' => 'mixed',
  ),
  'md5' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
    'raw_output=' => 'mixed',
  ),
  'md5_file' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
    'raw_output=' => 'mixed',
  ),
  'memcached::__construct' => 
  array (
    0 => 'void',
    'persistent_id=' => 'mixed',
    'callback=' => 'mixed',
    'connection_str=' => 'mixed',
  ),
  'memcached::add' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
    'expiration=' => 'mixed',
  ),
  'memcached::addbykey' => 
  array (
    0 => 'mixed',
    'server_key' => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
    'expiration=' => 'mixed',
  ),
  'memcached::addserver' => 
  array (
    0 => 'mixed',
    'host' => 'mixed',
    'port' => 'mixed',
    'weight=' => 'mixed',
  ),
  'memcached::addservers' => 
  array (
    0 => 'mixed',
    'servers' => 'mixed',
  ),
  'memcached::append' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'memcached::appendbykey' => 
  array (
    0 => 'mixed',
    'server_key' => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'memcached::cas' => 
  array (
    0 => 'mixed',
    'cas_token' => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
    'expiration=' => 'mixed',
  ),
  'memcached::casbykey' => 
  array (
    0 => 'mixed',
    'cas_token' => 'mixed',
    'server_key' => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
    'expiration=' => 'mixed',
  ),
  'memcached::checkkey' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'memcached::decrement' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'offset=' => 'mixed',
    'initial_value=' => 'mixed',
    'expiry=' => 'mixed',
  ),
  'memcached::decrementbykey' => 
  array (
    0 => 'mixed',
    'server_key' => 'mixed',
    'key' => 'mixed',
    'offset=' => 'mixed',
    'initial_value=' => 'mixed',
    'expiry=' => 'mixed',
  ),
  'memcached::delete' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'time=' => 'mixed',
  ),
  'memcached::deletebykey' => 
  array (
    0 => 'mixed',
    'server_key' => 'mixed',
    'key' => 'mixed',
    'time=' => 'mixed',
  ),
  'memcached::deletemulti' => 
  array (
    0 => 'mixed',
    'keys' => 'mixed',
    'time=' => 'mixed',
  ),
  'memcached::deletemultibykey' => 
  array (
    0 => 'mixed',
    'server_key' => 'mixed',
    'keys' => 'mixed',
    'time=' => 'mixed',
  ),
  'memcached::fetch' => 
  array (
    0 => 'mixed',
  ),
  'memcached::fetchall' => 
  array (
    0 => 'mixed',
  ),
  'memcached::flush' => 
  array (
    0 => 'mixed',
    'delay=' => 'mixed',
  ),
  'memcached::flushbuffers' => 
  array (
    0 => 'mixed',
  ),
  'memcached::get' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'cache_cb=' => 'mixed',
    'get_flags=' => 'mixed',
  ),
  'memcached::getallkeys' => 
  array (
    0 => 'mixed',
  ),
  'memcached::getbykey' => 
  array (
    0 => 'mixed',
    'server_key' => 'mixed',
    'key' => 'mixed',
    'cache_cb=' => 'mixed',
    'get_flags=' => 'mixed',
  ),
  'memcached::getdelayed' => 
  array (
    0 => 'mixed',
    'keys' => 'mixed',
    'with_cas=' => 'mixed',
    'value_cb=' => 'mixed',
  ),
  'memcached::getdelayedbykey' => 
  array (
    0 => 'mixed',
    'server_key' => 'mixed',
    'keys' => 'mixed',
    'with_cas=' => 'mixed',
    'value_cb=' => 'mixed',
  ),
  'memcached::getlastdisconnectedserver' => 
  array (
    0 => 'mixed',
  ),
  'memcached::getlasterrorcode' => 
  array (
    0 => 'mixed',
  ),
  'memcached::getlasterrorerrno' => 
  array (
    0 => 'mixed',
  ),
  'memcached::getlasterrormessage' => 
  array (
    0 => 'mixed',
  ),
  'memcached::getmulti' => 
  array (
    0 => 'mixed',
    'keys' => 'mixed',
    'get_flags=' => 'mixed',
  ),
  'memcached::getmultibykey' => 
  array (
    0 => 'mixed',
    'server_key' => 'mixed',
    'keys' => 'mixed',
    'get_flags=' => 'mixed',
  ),
  'memcached::getoption' => 
  array (
    0 => 'mixed',
    'option' => 'mixed',
  ),
  'memcached::getresultcode' => 
  array (
    0 => 'mixed',
  ),
  'memcached::getresultmessage' => 
  array (
    0 => 'mixed',
  ),
  'memcached::getserverbykey' => 
  array (
    0 => 'mixed',
    'server_key' => 'mixed',
  ),
  'memcached::getserverlist' => 
  array (
    0 => 'mixed',
  ),
  'memcached::getstats' => 
  array (
    0 => 'mixed',
    'type=' => 'mixed',
  ),
  'memcached::getversion' => 
  array (
    0 => 'mixed',
  ),
  'memcached::increment' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'offset=' => 'mixed',
    'initial_value=' => 'mixed',
    'expiry=' => 'mixed',
  ),
  'memcached::incrementbykey' => 
  array (
    0 => 'mixed',
    'server_key' => 'mixed',
    'key' => 'mixed',
    'offset=' => 'mixed',
    'initial_value=' => 'mixed',
    'expiry=' => 'mixed',
  ),
  'memcached::ispersistent' => 
  array (
    0 => 'mixed',
  ),
  'memcached::ispristine' => 
  array (
    0 => 'mixed',
  ),
  'memcached::prepend' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'memcached::prependbykey' => 
  array (
    0 => 'mixed',
    'server_key' => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'memcached::quit' => 
  array (
    0 => 'mixed',
  ),
  'memcached::replace' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
    'expiration=' => 'mixed',
  ),
  'memcached::replacebykey' => 
  array (
    0 => 'mixed',
    'server_key' => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
    'expiration=' => 'mixed',
  ),
  'memcached::resetserverlist' => 
  array (
    0 => 'mixed',
  ),
  'memcached::set' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
    'expiration=' => 'mixed',
  ),
  'memcached::setbucket' => 
  array (
    0 => 'mixed',
    'host_map' => 'mixed',
    'forward_map' => 'mixed',
    'replicas' => 'mixed',
  ),
  'memcached::setbykey' => 
  array (
    0 => 'mixed',
    'server_key' => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
    'expiration=' => 'mixed',
  ),
  'memcached::setencodingkey' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'memcached::setmulti' => 
  array (
    0 => 'mixed',
    'items' => 'mixed',
    'expiration=' => 'mixed',
  ),
  'memcached::setmultibykey' => 
  array (
    0 => 'mixed',
    'server_key' => 'mixed',
    'items' => 'mixed',
    'expiration=' => 'mixed',
  ),
  'memcached::setoption' => 
  array (
    0 => 'mixed',
    'option' => 'mixed',
    'value' => 'mixed',
  ),
  'memcached::setoptions' => 
  array (
    0 => 'mixed',
    'options' => 'mixed',
  ),
  'memcached::setsaslauthdata' => 
  array (
    0 => 'mixed',
    'username' => 'mixed',
    'password' => 'mixed',
  ),
  'memcached::touch' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'expiration=' => 'mixed',
  ),
  'memcached::touchbykey' => 
  array (
    0 => 'mixed',
    'server_key' => 'mixed',
    'key' => 'mixed',
    'expiration=' => 'mixed',
  ),
  'memcachedexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'memcachedexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'memcachedexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'memcachedexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'memcachedexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'memcachedexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'memcachedexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'memcachedexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'memcachedexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'memcachedexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'memcachedexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'memory_get_peak_usage' => 
  array (
    0 => 'mixed',
    'real_usage=' => 'mixed',
  ),
  'memory_get_usage' => 
  array (
    0 => 'mixed',
    'real_usage=' => 'mixed',
  ),
  'messageformatter::__construct' => 
  array (
    0 => 'void',
    'locale' => 'mixed',
    'pattern' => 'mixed',
  ),
  'messageformatter::create' => 
  array (
    0 => 'mixed',
    'locale' => 'mixed',
    'pattern' => 'mixed',
  ),
  'messageformatter::format' => 
  array (
    0 => 'mixed',
    'args' => 'mixed',
  ),
  'messageformatter::formatmessage' => 
  array (
    0 => 'mixed',
    'locale' => 'mixed',
    'pattern' => 'mixed',
    'args' => 'mixed',
  ),
  'messageformatter::geterrorcode' => 
  array (
    0 => 'mixed',
  ),
  'messageformatter::geterrormessage' => 
  array (
    0 => 'mixed',
  ),
  'messageformatter::getlocale' => 
  array (
    0 => 'mixed',
  ),
  'messageformatter::getpattern' => 
  array (
    0 => 'mixed',
  ),
  'messageformatter::parse' => 
  array (
    0 => 'mixed',
    'source' => 'mixed',
  ),
  'messageformatter::parsemessage' => 
  array (
    0 => 'mixed',
    'locale' => 'mixed',
    'pattern' => 'mixed',
    'args' => 'mixed',
  ),
  'messageformatter::setpattern' => 
  array (
    0 => 'mixed',
    'pattern' => 'mixed',
  ),
  'metaphone' => 
  array (
    0 => 'mixed',
    'text' => 'mixed',
    'phones=' => 'mixed',
  ),
  'method_exists' => 
  array (
    0 => 'mixed',
    'object' => 'mixed',
    'method' => 'mixed',
  ),
  'mhash' => 
  array (
    0 => 'mixed',
    'hash' => 'mixed',
    'data' => 'mixed',
    'key=' => 'mixed',
  ),
  'mhash_count' => 
  array (
    0 => 'mixed',
  ),
  'mhash_get_block_size' => 
  array (
    0 => 'mixed',
    'hash' => 'mixed',
  ),
  'mhash_get_hash_name' => 
  array (
    0 => 'mixed',
    'hash' => 'mixed',
  ),
  'mhash_keygen_s2k' => 
  array (
    0 => 'mixed',
    'hash' => 'mixed',
    'input_password' => 'mixed',
    'salt' => 'mixed',
    'bytes' => 'mixed',
  ),
  'microtime' => 
  array (
    0 => 'mixed',
    'get_as_float=' => 'mixed',
  ),
  'mime_content_type' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
  ),
  'min' => 
  array (
    0 => 'mixed',
    '...args' => 'mixed',
  ),
  'mkdir' => 
  array (
    0 => 'mixed',
    'pathname' => 'mixed',
    'mode=' => 'mixed',
    'recursive=' => 'mixed',
    'context=' => 'mixed',
  ),
  'mktime' => 
  array (
    0 => 'mixed',
    'hour=' => 'mixed',
    'min=' => 'mixed',
    'sec=' => 'mixed',
    'mon=' => 'mixed',
    'day=' => 'mixed',
    'year=' => 'mixed',
  ),
  'money_format' => 
  array (
    0 => 'mixed',
    'format' => 'mixed',
    'value' => 'mixed',
  ),
  'mongodb\\bson\\binary::__construct' => 
  array (
    0 => 'void',
    'data' => 'string',
    'type=' => 'int',
  ),
  'mongodb\\bson\\binary::__serialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\binary::__set_state' => 
  array (
    0 => 'MongoDB\\BSON\\Binary',
    'properties' => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\binary::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\binary::__unserialize' => 
  array (
    0 => 'void',
    'data' => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\binary::getdata' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\binary::gettype' => 
  array (
    0 => 'int',
  ),
  'mongodb\\bson\\binary::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\bson\\binary::serialize' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\binary::unserialize' => 
  array (
    0 => 'void',
    'serialized' => 'mixed',
  ),
  'mongodb\\bson\\dbpointer::__construct' => 
  array (
    0 => 'void',
  ),
  'mongodb\\bson\\dbpointer::__serialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\dbpointer::__set_state' => 
  array (
    0 => 'MongoDB\\BSON\\DBPointer',
    'properties' => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\dbpointer::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\dbpointer::__unserialize' => 
  array (
    0 => 'void',
    'data' => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\dbpointer::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\bson\\dbpointer::serialize' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\dbpointer::unserialize' => 
  array (
    0 => 'void',
    'serialized' => 'mixed',
  ),
  'mongodb\\bson\\decimal128::__construct' => 
  array (
    0 => 'void',
    'value' => 'string',
  ),
  'mongodb\\bson\\decimal128::__serialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\decimal128::__set_state' => 
  array (
    0 => 'MongoDB\\BSON\\Decimal128',
    'properties' => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\decimal128::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\decimal128::__unserialize' => 
  array (
    0 => 'void',
    'data' => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\decimal128::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\bson\\decimal128::serialize' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\decimal128::unserialize' => 
  array (
    0 => 'void',
    'serialized' => 'mixed',
  ),
  'mongodb\\bson\\document::__construct' => 
  array (
    0 => 'void',
  ),
  'mongodb\\bson\\document::__serialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\document::__set_state' => 
  array (
    0 => 'MongoDB\\BSON\\Document',
    'properties' => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\document::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\document::__unserialize' => 
  array (
    0 => 'void',
    'data' => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\document::frombson' => 
  array (
    0 => 'MongoDB\\BSON\\Document',
    'bson' => 'string',
  ),
  'mongodb\\bson\\document::fromjson' => 
  array (
    0 => 'MongoDB\\BSON\\Document',
    'json' => 'string',
  ),
  'mongodb\\bson\\document::fromphp' => 
  array (
    0 => 'MongoDB\\BSON\\Document',
    'value' => 'mixed',
  ),
  'mongodb\\bson\\document::get' => 
  array (
    0 => 'mixed',
    'key' => 'string',
  ),
  'mongodb\\bson\\document::getiterator' => 
  array (
    0 => 'MongoDB\\BSON\\Iterator',
  ),
  'mongodb\\bson\\document::has' => 
  array (
    0 => 'bool',
    'key' => 'string',
  ),
  'mongodb\\bson\\document::serialize' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\document::tocanonicalextendedjson' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\document::tophp' => 
  array (
    0 => 'mixed',
    'typeMap=' => 'array<array-key, mixed>|null',
  ),
  'mongodb\\bson\\document::torelaxedextendedjson' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\document::unserialize' => 
  array (
    0 => 'void',
    'serialized' => 'mixed',
  ),
  'mongodb\\bson\\fromjson' => 
  array (
    0 => 'string',
    'json' => 'string',
  ),
  'mongodb\\bson\\fromphp' => 
  array (
    0 => 'string',
    'value' => 'mixed',
  ),
  'mongodb\\bson\\int64::__construct' => 
  array (
    0 => 'void',
    'value' => 'mixed',
  ),
  'mongodb\\bson\\int64::__serialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\int64::__set_state' => 
  array (
    0 => 'MongoDB\\BSON\\Int64',
    'properties' => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\int64::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\int64::__unserialize' => 
  array (
    0 => 'void',
    'data' => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\int64::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\bson\\int64::serialize' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\int64::unserialize' => 
  array (
    0 => 'void',
    'serialized' => 'mixed',
  ),
  'mongodb\\bson\\iterator::__construct' => 
  array (
    0 => 'void',
  ),
  'mongodb\\bson\\iterator::__wakeup' => 
  array (
    0 => 'void',
  ),
  'mongodb\\bson\\iterator::current' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\bson\\iterator::key' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\bson\\iterator::next' => 
  array (
    0 => 'void',
  ),
  'mongodb\\bson\\iterator::rewind' => 
  array (
    0 => 'void',
  ),
  'mongodb\\bson\\iterator::valid' => 
  array (
    0 => 'bool',
  ),
  'mongodb\\bson\\javascript::__construct' => 
  array (
    0 => 'void',
    'code' => 'string',
    'scope=' => 'mixed',
  ),
  'mongodb\\bson\\javascript::__serialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\javascript::__set_state' => 
  array (
    0 => 'MongoDB\\BSON\\Javascript',
    'properties' => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\javascript::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\javascript::__unserialize' => 
  array (
    0 => 'void',
    'data' => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\javascript::getcode' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\javascript::getscope' => 
  array (
    0 => 'null|object',
  ),
  'mongodb\\bson\\javascript::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\bson\\javascript::serialize' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\javascript::unserialize' => 
  array (
    0 => 'void',
    'serialized' => 'mixed',
  ),
  'mongodb\\bson\\maxkey::__serialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\maxkey::__set_state' => 
  array (
    0 => 'MongoDB\\BSON\\MaxKey',
    'properties' => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\maxkey::__unserialize' => 
  array (
    0 => 'void',
    'data' => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\maxkey::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\bson\\maxkey::serialize' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\maxkey::unserialize' => 
  array (
    0 => 'void',
    'serialized' => 'mixed',
  ),
  'mongodb\\bson\\minkey::__serialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\minkey::__set_state' => 
  array (
    0 => 'MongoDB\\BSON\\MinKey',
    'properties' => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\minkey::__unserialize' => 
  array (
    0 => 'void',
    'data' => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\minkey::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\bson\\minkey::serialize' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\minkey::unserialize' => 
  array (
    0 => 'void',
    'serialized' => 'mixed',
  ),
  'mongodb\\bson\\objectid::__construct' => 
  array (
    0 => 'void',
    'id=' => 'null|string',
  ),
  'mongodb\\bson\\objectid::__serialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\objectid::__set_state' => 
  array (
    0 => 'MongoDB\\BSON\\ObjectId',
    'properties' => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\objectid::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\objectid::__unserialize' => 
  array (
    0 => 'void',
    'data' => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\objectid::gettimestamp' => 
  array (
    0 => 'int',
  ),
  'mongodb\\bson\\objectid::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\bson\\objectid::serialize' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\objectid::unserialize' => 
  array (
    0 => 'void',
    'serialized' => 'mixed',
  ),
  'mongodb\\bson\\packedarray::__construct' => 
  array (
    0 => 'void',
  ),
  'mongodb\\bson\\packedarray::__serialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\packedarray::__set_state' => 
  array (
    0 => 'MongoDB\\BSON\\PackedArray',
    'properties' => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\packedarray::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\packedarray::__unserialize' => 
  array (
    0 => 'void',
    'data' => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\packedarray::fromphp' => 
  array (
    0 => 'MongoDB\\BSON\\PackedArray',
    'value' => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\packedarray::get' => 
  array (
    0 => 'mixed',
    'index' => 'int',
  ),
  'mongodb\\bson\\packedarray::getiterator' => 
  array (
    0 => 'MongoDB\\BSON\\Iterator',
  ),
  'mongodb\\bson\\packedarray::has' => 
  array (
    0 => 'bool',
    'index' => 'int',
  ),
  'mongodb\\bson\\packedarray::serialize' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\packedarray::tophp' => 
  array (
    0 => 'mixed',
    'typeMap=' => 'array<array-key, mixed>|null',
  ),
  'mongodb\\bson\\packedarray::unserialize' => 
  array (
    0 => 'void',
    'serialized' => 'mixed',
  ),
  'mongodb\\bson\\regex::__construct' => 
  array (
    0 => 'void',
    'pattern' => 'string',
    'flags=' => 'string',
  ),
  'mongodb\\bson\\regex::__serialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\regex::__set_state' => 
  array (
    0 => 'MongoDB\\BSON\\Regex',
    'properties' => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\regex::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\regex::__unserialize' => 
  array (
    0 => 'void',
    'data' => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\regex::getflags' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\regex::getpattern' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\regex::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\bson\\regex::serialize' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\regex::unserialize' => 
  array (
    0 => 'void',
    'serialized' => 'mixed',
  ),
  'mongodb\\bson\\symbol::__construct' => 
  array (
    0 => 'void',
  ),
  'mongodb\\bson\\symbol::__serialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\symbol::__set_state' => 
  array (
    0 => 'MongoDB\\BSON\\Symbol',
    'properties' => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\symbol::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\symbol::__unserialize' => 
  array (
    0 => 'void',
    'data' => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\symbol::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\bson\\symbol::serialize' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\symbol::unserialize' => 
  array (
    0 => 'void',
    'serialized' => 'mixed',
  ),
  'mongodb\\bson\\timestamp::__construct' => 
  array (
    0 => 'void',
    'increment' => 'mixed',
    'timestamp' => 'mixed',
  ),
  'mongodb\\bson\\timestamp::__serialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\timestamp::__set_state' => 
  array (
    0 => 'MongoDB\\BSON\\Timestamp',
    'properties' => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\timestamp::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\timestamp::__unserialize' => 
  array (
    0 => 'void',
    'data' => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\timestamp::getincrement' => 
  array (
    0 => 'int',
  ),
  'mongodb\\bson\\timestamp::gettimestamp' => 
  array (
    0 => 'int',
  ),
  'mongodb\\bson\\timestamp::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\bson\\timestamp::serialize' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\timestamp::unserialize' => 
  array (
    0 => 'void',
    'serialized' => 'mixed',
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
    0 => 'mixed',
    'bson' => 'string',
    'typemap=' => 'array<array-key, mixed>|null',
  ),
  'mongodb\\bson\\torelaxedextendedjson' => 
  array (
    0 => 'string',
    'bson' => 'string',
  ),
  'mongodb\\bson\\undefined::__construct' => 
  array (
    0 => 'void',
  ),
  'mongodb\\bson\\undefined::__serialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\undefined::__set_state' => 
  array (
    0 => 'MongoDB\\BSON\\Undefined',
    'properties' => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\undefined::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\undefined::__unserialize' => 
  array (
    0 => 'void',
    'data' => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\undefined::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\bson\\undefined::serialize' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\undefined::unserialize' => 
  array (
    0 => 'void',
    'serialized' => 'mixed',
  ),
  'mongodb\\bson\\utcdatetime::__construct' => 
  array (
    0 => 'void',
    'milliseconds=' => 'mixed',
  ),
  'mongodb\\bson\\utcdatetime::__serialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\utcdatetime::__set_state' => 
  array (
    0 => 'MongoDB\\BSON\\UTCDateTime',
    'properties' => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\utcdatetime::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\utcdatetime::__unserialize' => 
  array (
    0 => 'void',
    'data' => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\utcdatetime::jsonserialize' => 
  array (
    0 => 'mixed',
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
    'serialized' => 'mixed',
  ),
  'mongodb\\driver\\bulkwrite::__construct' => 
  array (
    0 => 'void',
    'options=' => 'array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\bulkwrite::__wakeup' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\bulkwrite::count' => 
  array (
    0 => 'int',
  ),
  'mongodb\\driver\\bulkwrite::delete' => 
  array (
    0 => 'void',
    'filter' => 'mixed',
    'deleteOptions=' => 'array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\bulkwrite::insert' => 
  array (
    0 => 'mixed',
    'document' => 'mixed',
  ),
  'mongodb\\driver\\bulkwrite::update' => 
  array (
    0 => 'void',
    'filter' => 'mixed',
    'newObj' => 'mixed',
    'updateOptions=' => 'array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\clientencryption::__construct' => 
  array (
    0 => 'void',
    'options' => 'array<array-key, mixed>',
  ),
  'mongodb\\driver\\clientencryption::__wakeup' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\clientencryption::addkeyaltname' => 
  array (
    0 => 'null|object',
    'keyId' => 'MongoDB\\BSON\\Binary',
    'keyAltName' => 'string',
  ),
  'mongodb\\driver\\clientencryption::createdatakey' => 
  array (
    0 => 'MongoDB\\BSON\\Binary',
    'kmsProvider' => 'string',
    'options=' => 'array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\clientencryption::decrypt' => 
  array (
    0 => 'mixed',
    'value' => 'MongoDB\\BSON\\Binary',
  ),
  'mongodb\\driver\\clientencryption::deletekey' => 
  array (
    0 => 'object',
    'keyId' => 'MongoDB\\BSON\\Binary',
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
    'expr' => 'mixed',
    'options=' => 'array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\clientencryption::getkey' => 
  array (
    0 => 'null|object',
    'keyId' => 'MongoDB\\BSON\\Binary',
  ),
  'mongodb\\driver\\clientencryption::getkeybyaltname' => 
  array (
    0 => 'null|object',
    'keyAltName' => 'string',
  ),
  'mongodb\\driver\\clientencryption::getkeys' => 
  array (
    0 => 'MongoDB\\Driver\\Cursor',
  ),
  'mongodb\\driver\\clientencryption::removekeyaltname' => 
  array (
    0 => 'null|object',
    'keyId' => 'MongoDB\\BSON\\Binary',
    'keyAltName' => 'string',
  ),
  'mongodb\\driver\\clientencryption::rewrapmanydatakey' => 
  array (
    0 => 'object',
    'filter' => 'mixed',
    'options=' => 'array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\command::__construct' => 
  array (
    0 => 'void',
    'document' => 'mixed',
    'commandOptions=' => 'array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\command::__wakeup' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\cursor::__construct' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\cursor::__wakeup' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\cursor::current' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\cursor::getid' => 
  array (
    0 => 'MongoDB\\Driver\\CursorId',
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
  'mongodb\\driver\\cursorid::__construct' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\cursorid::__serialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongodb\\driver\\cursorid::__set_state' => 
  array (
    0 => 'MongoDB\\Driver\\CursorId',
    'properties' => 'array<array-key, mixed>',
  ),
  'mongodb\\driver\\cursorid::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\cursorid::__unserialize' => 
  array (
    0 => 'void',
    'data' => 'array<array-key, mixed>',
  ),
  'mongodb\\driver\\cursorid::serialize' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\cursorid::unserialize' => 
  array (
    0 => 'void',
    'serialized' => 'mixed',
  ),
  'mongodb\\driver\\exception\\authenticationexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\authenticationexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'mongodb\\driver\\exception\\authenticationexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\authenticationexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\authenticationexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\authenticationexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\authenticationexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\authenticationexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\authenticationexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\authenticationexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\authenticationexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\authenticationexception::haserrorlabel' => 
  array (
    0 => 'bool',
    'errorLabel' => 'string',
  ),
  'mongodb\\driver\\exception\\bulkwriteexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\bulkwriteexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'mongodb\\driver\\exception\\bulkwriteexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\bulkwriteexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\bulkwriteexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\bulkwriteexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\bulkwriteexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\bulkwriteexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\bulkwriteexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\bulkwriteexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\bulkwriteexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\bulkwriteexception::getwriteresult' => 
  array (
    0 => 'MongoDB\\Driver\\WriteResult',
  ),
  'mongodb\\driver\\exception\\bulkwriteexception::haserrorlabel' => 
  array (
    0 => 'bool',
    'errorLabel' => 'string',
  ),
  'mongodb\\driver\\exception\\commandexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\commandexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'mongodb\\driver\\exception\\commandexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\commandexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\commandexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\commandexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\commandexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\commandexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\commandexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\commandexception::getresultdocument' => 
  array (
    0 => 'object',
  ),
  'mongodb\\driver\\exception\\commandexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\commandexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\commandexception::haserrorlabel' => 
  array (
    0 => 'bool',
    'errorLabel' => 'string',
  ),
  'mongodb\\driver\\exception\\connectionexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\connectionexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'mongodb\\driver\\exception\\connectionexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\connectionexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\connectionexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\connectionexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\connectionexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\connectionexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\connectionexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\connectionexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\connectionexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\connectionexception::haserrorlabel' => 
  array (
    0 => 'bool',
    'errorLabel' => 'string',
  ),
  'mongodb\\driver\\exception\\connectiontimeoutexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\connectiontimeoutexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'mongodb\\driver\\exception\\connectiontimeoutexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\connectiontimeoutexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\connectiontimeoutexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\connectiontimeoutexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\connectiontimeoutexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\connectiontimeoutexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\connectiontimeoutexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\connectiontimeoutexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\connectiontimeoutexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\connectiontimeoutexception::haserrorlabel' => 
  array (
    0 => 'bool',
    'errorLabel' => 'string',
  ),
  'mongodb\\driver\\exception\\encryptionexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\encryptionexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'mongodb\\driver\\exception\\encryptionexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\encryptionexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\encryptionexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\encryptionexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\encryptionexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\encryptionexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\encryptionexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\encryptionexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\encryptionexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\encryptionexception::haserrorlabel' => 
  array (
    0 => 'bool',
    'errorLabel' => 'string',
  ),
  'mongodb\\driver\\exception\\executiontimeoutexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\executiontimeoutexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'mongodb\\driver\\exception\\executiontimeoutexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\executiontimeoutexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\executiontimeoutexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\executiontimeoutexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\executiontimeoutexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\executiontimeoutexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\executiontimeoutexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\executiontimeoutexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\executiontimeoutexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\executiontimeoutexception::haserrorlabel' => 
  array (
    0 => 'bool',
    'errorLabel' => 'string',
  ),
  'mongodb\\driver\\exception\\invalidargumentexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\invalidargumentexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'mongodb\\driver\\exception\\invalidargumentexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\invalidargumentexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\invalidargumentexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\invalidargumentexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\invalidargumentexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\invalidargumentexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\invalidargumentexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\invalidargumentexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\invalidargumentexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\logicexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\logicexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'mongodb\\driver\\exception\\logicexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\logicexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\logicexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\logicexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\logicexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\logicexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\logicexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\logicexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\logicexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\runtimeexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\runtimeexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'mongodb\\driver\\exception\\runtimeexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\runtimeexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\runtimeexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\runtimeexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\runtimeexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\runtimeexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\runtimeexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\runtimeexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\runtimeexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\runtimeexception::haserrorlabel' => 
  array (
    0 => 'bool',
    'errorLabel' => 'string',
  ),
  'mongodb\\driver\\exception\\serverexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\serverexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'mongodb\\driver\\exception\\serverexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\serverexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\serverexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\serverexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\serverexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\serverexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\serverexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\serverexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\serverexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\serverexception::haserrorlabel' => 
  array (
    0 => 'bool',
    'errorLabel' => 'string',
  ),
  'mongodb\\driver\\exception\\sslconnectionexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\sslconnectionexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'mongodb\\driver\\exception\\sslconnectionexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\sslconnectionexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\sslconnectionexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\sslconnectionexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\sslconnectionexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\sslconnectionexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\sslconnectionexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\sslconnectionexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\sslconnectionexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\sslconnectionexception::haserrorlabel' => 
  array (
    0 => 'bool',
    'errorLabel' => 'string',
  ),
  'mongodb\\driver\\exception\\unexpectedvalueexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\unexpectedvalueexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'mongodb\\driver\\exception\\unexpectedvalueexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\unexpectedvalueexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\unexpectedvalueexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\unexpectedvalueexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\unexpectedvalueexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\unexpectedvalueexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\unexpectedvalueexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\unexpectedvalueexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\unexpectedvalueexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\writeexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\writeexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'mongodb\\driver\\exception\\writeexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\writeexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\writeexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\writeexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\writeexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\writeexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\writeexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\writeexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\writeexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\writeexception::getwriteresult' => 
  array (
    0 => 'MongoDB\\Driver\\WriteResult',
  ),
  'mongodb\\driver\\exception\\writeexception::haserrorlabel' => 
  array (
    0 => 'bool',
    'errorLabel' => 'string',
  ),
  'mongodb\\driver\\manager::__construct' => 
  array (
    0 => 'void',
    'uri=' => 'null|string',
    'uriOptions=' => 'array<array-key, mixed>|null',
    'driverOptions=' => 'array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\manager::__wakeup' => 
  array (
    0 => 'void',
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
    'options=' => 'mixed',
  ),
  'mongodb\\driver\\manager::executecommand' => 
  array (
    0 => 'MongoDB\\Driver\\Cursor',
    'db' => 'string',
    'command' => 'MongoDB\\Driver\\Command',
    'options=' => 'mixed',
  ),
  'mongodb\\driver\\manager::executequery' => 
  array (
    0 => 'MongoDB\\Driver\\Cursor',
    'namespace' => 'string',
    'query' => 'MongoDB\\Driver\\Query',
    'options=' => 'mixed',
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
    0 => 'mixed',
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
  'mongodb\\driver\\monitoring\\commandfailedevent::__construct' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\monitoring\\commandfailedevent::__wakeup' => 
  array (
    0 => 'void',
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
  'mongodb\\driver\\monitoring\\commandfailedevent::getserverconnectionid' => 
  array (
    0 => 'int|null',
  ),
  'mongodb\\driver\\monitoring\\commandfailedevent::getserviceid' => 
  array (
    0 => 'MongoDB\\BSON\\ObjectId|null',
  ),
  'mongodb\\driver\\monitoring\\commandstartedevent::__construct' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\monitoring\\commandstartedevent::__wakeup' => 
  array (
    0 => 'void',
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
  'mongodb\\driver\\monitoring\\commandstartedevent::getserverconnectionid' => 
  array (
    0 => 'int|null',
  ),
  'mongodb\\driver\\monitoring\\commandstartedevent::getserviceid' => 
  array (
    0 => 'MongoDB\\BSON\\ObjectId|null',
  ),
  'mongodb\\driver\\monitoring\\commandsucceededevent::__construct' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\monitoring\\commandsucceededevent::__wakeup' => 
  array (
    0 => 'void',
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
  'mongodb\\driver\\monitoring\\commandsucceededevent::getserverconnectionid' => 
  array (
    0 => 'int|null',
  ),
  'mongodb\\driver\\monitoring\\commandsucceededevent::getserviceid' => 
  array (
    0 => 'MongoDB\\BSON\\ObjectId|null',
  ),
  'mongodb\\driver\\monitoring\\removesubscriber' => 
  array (
    0 => 'void',
    'subscriber' => 'MongoDB\\Driver\\Monitoring\\Subscriber',
  ),
  'mongodb\\driver\\monitoring\\serverchangedevent::__construct' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\monitoring\\serverchangedevent::__wakeup' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\monitoring\\serverchangedevent::gethost' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\monitoring\\serverchangedevent::getnewdescription' => 
  array (
    0 => 'MongoDB\\Driver\\ServerDescription',
  ),
  'mongodb\\driver\\monitoring\\serverchangedevent::getport' => 
  array (
    0 => 'int',
  ),
  'mongodb\\driver\\monitoring\\serverchangedevent::getpreviousdescription' => 
  array (
    0 => 'MongoDB\\Driver\\ServerDescription',
  ),
  'mongodb\\driver\\monitoring\\serverchangedevent::gettopologyid' => 
  array (
    0 => 'MongoDB\\BSON\\ObjectId',
  ),
  'mongodb\\driver\\monitoring\\serverclosedevent::__construct' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\monitoring\\serverclosedevent::__wakeup' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\monitoring\\serverclosedevent::gethost' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\monitoring\\serverclosedevent::getport' => 
  array (
    0 => 'int',
  ),
  'mongodb\\driver\\monitoring\\serverclosedevent::gettopologyid' => 
  array (
    0 => 'MongoDB\\BSON\\ObjectId',
  ),
  'mongodb\\driver\\monitoring\\serverheartbeatfailedevent::__construct' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\monitoring\\serverheartbeatfailedevent::__wakeup' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\monitoring\\serverheartbeatfailedevent::getdurationmicros' => 
  array (
    0 => 'int',
  ),
  'mongodb\\driver\\monitoring\\serverheartbeatfailedevent::geterror' => 
  array (
    0 => 'Exception',
  ),
  'mongodb\\driver\\monitoring\\serverheartbeatfailedevent::gethost' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\monitoring\\serverheartbeatfailedevent::getport' => 
  array (
    0 => 'int',
  ),
  'mongodb\\driver\\monitoring\\serverheartbeatfailedevent::isawaited' => 
  array (
    0 => 'bool',
  ),
  'mongodb\\driver\\monitoring\\serverheartbeatstartedevent::__construct' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\monitoring\\serverheartbeatstartedevent::__wakeup' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\monitoring\\serverheartbeatstartedevent::gethost' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\monitoring\\serverheartbeatstartedevent::getport' => 
  array (
    0 => 'int',
  ),
  'mongodb\\driver\\monitoring\\serverheartbeatstartedevent::isawaited' => 
  array (
    0 => 'bool',
  ),
  'mongodb\\driver\\monitoring\\serverheartbeatsucceededevent::__construct' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\monitoring\\serverheartbeatsucceededevent::__wakeup' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\monitoring\\serverheartbeatsucceededevent::getdurationmicros' => 
  array (
    0 => 'int',
  ),
  'mongodb\\driver\\monitoring\\serverheartbeatsucceededevent::gethost' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\monitoring\\serverheartbeatsucceededevent::getport' => 
  array (
    0 => 'int',
  ),
  'mongodb\\driver\\monitoring\\serverheartbeatsucceededevent::getreply' => 
  array (
    0 => 'object',
  ),
  'mongodb\\driver\\monitoring\\serverheartbeatsucceededevent::isawaited' => 
  array (
    0 => 'bool',
  ),
  'mongodb\\driver\\monitoring\\serveropeningevent::__construct' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\monitoring\\serveropeningevent::__wakeup' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\monitoring\\serveropeningevent::gethost' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\monitoring\\serveropeningevent::getport' => 
  array (
    0 => 'int',
  ),
  'mongodb\\driver\\monitoring\\serveropeningevent::gettopologyid' => 
  array (
    0 => 'MongoDB\\BSON\\ObjectId',
  ),
  'mongodb\\driver\\monitoring\\topologychangedevent::__construct' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\monitoring\\topologychangedevent::__wakeup' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\monitoring\\topologychangedevent::getnewdescription' => 
  array (
    0 => 'MongoDB\\Driver\\TopologyDescription',
  ),
  'mongodb\\driver\\monitoring\\topologychangedevent::getpreviousdescription' => 
  array (
    0 => 'MongoDB\\Driver\\TopologyDescription',
  ),
  'mongodb\\driver\\monitoring\\topologychangedevent::gettopologyid' => 
  array (
    0 => 'MongoDB\\BSON\\ObjectId',
  ),
  'mongodb\\driver\\monitoring\\topologyclosedevent::__construct' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\monitoring\\topologyclosedevent::__wakeup' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\monitoring\\topologyclosedevent::gettopologyid' => 
  array (
    0 => 'MongoDB\\BSON\\ObjectId',
  ),
  'mongodb\\driver\\monitoring\\topologyopeningevent::__construct' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\monitoring\\topologyopeningevent::__wakeup' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\monitoring\\topologyopeningevent::gettopologyid' => 
  array (
    0 => 'MongoDB\\BSON\\ObjectId',
  ),
  'mongodb\\driver\\query::__construct' => 
  array (
    0 => 'void',
    'filter' => 'mixed',
    'queryOptions=' => 'array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\query::__wakeup' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\readconcern::__construct' => 
  array (
    0 => 'void',
    'level=' => 'null|string',
  ),
  'mongodb\\driver\\readconcern::__serialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongodb\\driver\\readconcern::__set_state' => 
  array (
    0 => 'MongoDB\\Driver\\ReadConcern',
    'properties' => 'array<array-key, mixed>',
  ),
  'mongodb\\driver\\readconcern::__unserialize' => 
  array (
    0 => 'void',
    'data' => 'array<array-key, mixed>',
  ),
  'mongodb\\driver\\readconcern::bsonserialize' => 
  array (
    0 => 'mixed',
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
    'serialized' => 'mixed',
  ),
  'mongodb\\driver\\readpreference::__construct' => 
  array (
    0 => 'void',
    'mode' => 'mixed',
    'tagSets=' => 'array<array-key, mixed>|null',
    'options=' => 'array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\readpreference::__serialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongodb\\driver\\readpreference::__set_state' => 
  array (
    0 => 'MongoDB\\Driver\\ReadPreference',
    'properties' => 'array<array-key, mixed>',
  ),
  'mongodb\\driver\\readpreference::__unserialize' => 
  array (
    0 => 'void',
    'data' => 'array<array-key, mixed>',
  ),
  'mongodb\\driver\\readpreference::bsonserialize' => 
  array (
    0 => 'mixed',
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
    'serialized' => 'mixed',
  ),
  'mongodb\\driver\\server::__construct' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\server::__wakeup' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\server::executebulkwrite' => 
  array (
    0 => 'MongoDB\\Driver\\WriteResult',
    'namespace' => 'string',
    'bulkWrite' => 'MongoDB\\Driver\\BulkWrite',
    'options=' => 'mixed',
  ),
  'mongodb\\driver\\server::executecommand' => 
  array (
    0 => 'MongoDB\\Driver\\Cursor',
    'db' => 'string',
    'command' => 'MongoDB\\Driver\\Command',
    'options=' => 'mixed',
  ),
  'mongodb\\driver\\server::executequery' => 
  array (
    0 => 'MongoDB\\Driver\\Cursor',
    'namespace' => 'string',
    'query' => 'MongoDB\\Driver\\Query',
    'options=' => 'mixed',
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
  'mongodb\\driver\\server::getserverdescription' => 
  array (
    0 => 'MongoDB\\Driver\\ServerDescription',
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
  'mongodb\\driver\\serverapi::__construct' => 
  array (
    0 => 'void',
    'version' => 'string',
    'strict=' => 'bool|null',
    'deprecationErrors=' => 'bool|null',
  ),
  'mongodb\\driver\\serverapi::__serialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongodb\\driver\\serverapi::__set_state' => 
  array (
    0 => 'MongoDB\\Driver\\ServerApi',
    'properties' => 'array<array-key, mixed>',
  ),
  'mongodb\\driver\\serverapi::__unserialize' => 
  array (
    0 => 'void',
    'data' => 'array<array-key, mixed>',
  ),
  'mongodb\\driver\\serverapi::bsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\serverapi::serialize' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\serverapi::unserialize' => 
  array (
    0 => 'void',
    'serialized' => 'mixed',
  ),
  'mongodb\\driver\\serverdescription::__construct' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\serverdescription::__wakeup' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\serverdescription::gethelloresponse' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongodb\\driver\\serverdescription::gethost' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\serverdescription::getlastupdatetime' => 
  array (
    0 => 'int',
  ),
  'mongodb\\driver\\serverdescription::getport' => 
  array (
    0 => 'int',
  ),
  'mongodb\\driver\\serverdescription::getroundtriptime' => 
  array (
    0 => 'int|null',
  ),
  'mongodb\\driver\\serverdescription::gettype' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\session::__construct' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\session::__wakeup' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\session::aborttransaction' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\session::advanceclustertime' => 
  array (
    0 => 'void',
    'clusterTime' => 'mixed',
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
  'mongodb\\driver\\session::isdirty' => 
  array (
    0 => 'bool',
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
  'mongodb\\driver\\topologydescription::__construct' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\topologydescription::__wakeup' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\topologydescription::getservers' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongodb\\driver\\topologydescription::gettype' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\topologydescription::hasreadableserver' => 
  array (
    0 => 'bool',
    'readPreference=' => 'MongoDB\\Driver\\ReadPreference|null',
  ),
  'mongodb\\driver\\topologydescription::haswritableserver' => 
  array (
    0 => 'bool',
  ),
  'mongodb\\driver\\writeconcern::__construct' => 
  array (
    0 => 'void',
    'w' => 'mixed',
    'wtimeout=' => 'int|null',
    'journal=' => 'bool|null',
  ),
  'mongodb\\driver\\writeconcern::__serialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'mongodb\\driver\\writeconcern::__set_state' => 
  array (
    0 => 'MongoDB\\Driver\\WriteConcern',
    'properties' => 'array<array-key, mixed>',
  ),
  'mongodb\\driver\\writeconcern::__unserialize' => 
  array (
    0 => 'void',
    'data' => 'array<array-key, mixed>',
  ),
  'mongodb\\driver\\writeconcern::bsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\writeconcern::getjournal' => 
  array (
    0 => 'bool|null',
  ),
  'mongodb\\driver\\writeconcern::getw' => 
  array (
    0 => 'mixed',
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
    'serialized' => 'mixed',
  ),
  'mongodb\\driver\\writeconcernerror::__construct' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\writeconcernerror::__wakeup' => 
  array (
    0 => 'void',
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
  'mongodb\\driver\\writeerror::__construct' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\writeerror::__wakeup' => 
  array (
    0 => 'void',
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
  'mongodb\\driver\\writeresult::__construct' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\writeresult::__wakeup' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\writeresult::getdeletedcount' => 
  array (
    0 => 'int|null',
  ),
  'mongodb\\driver\\writeresult::geterrorreplies' => 
  array (
    0 => 'array<array-key, mixed>',
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
  'move_uploaded_file' => 
  array (
    0 => 'mixed',
    'path' => 'mixed',
    'new_path' => 'mixed',
  ),
  'msgfmt_create' => 
  array (
    0 => 'mixed',
    'locale' => 'mixed',
    'pattern' => 'mixed',
  ),
  'msgfmt_format' => 
  array (
    0 => 'mixed',
    'nf' => 'mixed',
    'args' => 'mixed',
  ),
  'msgfmt_format_message' => 
  array (
    0 => 'mixed',
    'locale' => 'mixed',
    'pattern' => 'mixed',
    'args' => 'mixed',
  ),
  'msgfmt_get_error_code' => 
  array (
    0 => 'mixed',
    'nf' => 'mixed',
  ),
  'msgfmt_get_error_message' => 
  array (
    0 => 'mixed',
    'coll' => 'mixed',
  ),
  'msgfmt_get_locale' => 
  array (
    0 => 'mixed',
    'mf' => 'mixed',
  ),
  'msgfmt_get_pattern' => 
  array (
    0 => 'mixed',
    'mf' => 'mixed',
  ),
  'msgfmt_parse' => 
  array (
    0 => 'mixed',
    'nf' => 'mixed',
    'source' => 'mixed',
  ),
  'msgfmt_parse_message' => 
  array (
    0 => 'mixed',
    'locale' => 'mixed',
    'pattern' => 'mixed',
    'source' => 'mixed',
  ),
  'msgfmt_set_pattern' => 
  array (
    0 => 'mixed',
    'mf' => 'mixed',
    'pattern' => 'mixed',
  ),
  'mt_getrandmax' => 
  array (
    0 => 'mixed',
  ),
  'mt_rand' => 
  array (
    0 => 'mixed',
    'min=' => 'mixed',
    'max=' => 'mixed',
  ),
  'mt_srand' => 
  array (
    0 => 'mixed',
    'seed=' => 'mixed',
    'mode=' => 'mixed',
  ),
  'multipleiterator::__construct' => 
  array (
    0 => 'void',
    'flags' => 'mixed',
  ),
  'multipleiterator::attachiterator' => 
  array (
    0 => 'mixed',
    'iterator' => 'Iterator',
    'infos=' => 'mixed',
  ),
  'multipleiterator::containsiterator' => 
  array (
    0 => 'mixed',
    'iterator' => 'Iterator',
  ),
  'multipleiterator::countiterators' => 
  array (
    0 => 'mixed',
  ),
  'multipleiterator::current' => 
  array (
    0 => 'mixed',
  ),
  'multipleiterator::detachiterator' => 
  array (
    0 => 'mixed',
    'iterator' => 'Iterator',
  ),
  'multipleiterator::getflags' => 
  array (
    0 => 'mixed',
  ),
  'multipleiterator::key' => 
  array (
    0 => 'mixed',
  ),
  'multipleiterator::next' => 
  array (
    0 => 'mixed',
  ),
  'multipleiterator::rewind' => 
  array (
    0 => 'mixed',
  ),
  'multipleiterator::setflags' => 
  array (
    0 => 'mixed',
    'flags' => 'mixed',
  ),
  'multipleiterator::valid' => 
  array (
    0 => 'mixed',
  ),
  'natcasesort' => 
  array (
    0 => 'mixed',
    '&arg' => 'mixed',
  ),
  'natsort' => 
  array (
    0 => 'mixed',
    '&arg' => 'mixed',
  ),
  'net_get_interfaces' => 
  array (
    0 => 'mixed',
  ),
  'next' => 
  array (
    0 => 'mixed',
    '&arg' => 'mixed',
  ),
  'nl2br' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
    'is_xhtml=' => 'mixed',
  ),
  'nl_langinfo' => 
  array (
    0 => 'mixed',
    'item' => 'mixed',
  ),
  'norewinditerator::__construct' => 
  array (
    0 => 'void',
    'iterator' => 'Iterator',
  ),
  'norewinditerator::current' => 
  array (
    0 => 'mixed',
  ),
  'norewinditerator::getinneriterator' => 
  array (
    0 => 'mixed',
  ),
  'norewinditerator::key' => 
  array (
    0 => 'mixed',
  ),
  'norewinditerator::next' => 
  array (
    0 => 'mixed',
  ),
  'norewinditerator::rewind' => 
  array (
    0 => 'mixed',
  ),
  'norewinditerator::valid' => 
  array (
    0 => 'mixed',
  ),
  'normalizer::getrawdecomposition' => 
  array (
    0 => 'mixed',
    'input' => 'mixed',
  ),
  'normalizer::isnormalized' => 
  array (
    0 => 'mixed',
    'input' => 'mixed',
    'form=' => 'mixed',
  ),
  'normalizer::normalize' => 
  array (
    0 => 'mixed',
    'input' => 'mixed',
    'form=' => 'mixed',
  ),
  'normalizer_get_raw_decomposition' => 
  array (
    0 => 'mixed',
    'input' => 'mixed',
  ),
  'normalizer_is_normalized' => 
  array (
    0 => 'mixed',
    'input' => 'mixed',
    'form=' => 'mixed',
  ),
  'normalizer_normalize' => 
  array (
    0 => 'mixed',
    'input' => 'mixed',
    'form=' => 'mixed',
  ),
  'number_format' => 
  array (
    0 => 'mixed',
    'number' => 'mixed',
    'num_decimal_places=' => 'mixed',
    'dec_separator=' => 'mixed',
    'thousands_separator=' => 'mixed',
  ),
  'numberformatter::__construct' => 
  array (
    0 => 'void',
    'locale' => 'mixed',
    'style' => 'mixed',
    'pattern=' => 'mixed',
  ),
  'numberformatter::create' => 
  array (
    0 => 'mixed',
    'locale' => 'mixed',
    'style' => 'mixed',
    'pattern=' => 'mixed',
  ),
  'numberformatter::format' => 
  array (
    0 => 'mixed',
    'num' => 'mixed',
    'type=' => 'mixed',
  ),
  'numberformatter::formatcurrency' => 
  array (
    0 => 'mixed',
    'num' => 'mixed',
    'currency' => 'mixed',
  ),
  'numberformatter::getattribute' => 
  array (
    0 => 'mixed',
    'attr' => 'mixed',
  ),
  'numberformatter::geterrorcode' => 
  array (
    0 => 'mixed',
  ),
  'numberformatter::geterrormessage' => 
  array (
    0 => 'mixed',
  ),
  'numberformatter::getlocale' => 
  array (
    0 => 'mixed',
    'type=' => 'mixed',
  ),
  'numberformatter::getpattern' => 
  array (
    0 => 'mixed',
  ),
  'numberformatter::getsymbol' => 
  array (
    0 => 'mixed',
    'attr' => 'mixed',
  ),
  'numberformatter::gettextattribute' => 
  array (
    0 => 'mixed',
    'attr' => 'mixed',
  ),
  'numberformatter::parse' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    'type=' => 'mixed',
    '&position=' => 'mixed',
  ),
  'numberformatter::parsecurrency' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    '&currency' => 'mixed',
    '&position=' => 'mixed',
  ),
  'numberformatter::setattribute' => 
  array (
    0 => 'mixed',
    'attr' => 'mixed',
    'value' => 'mixed',
  ),
  'numberformatter::setpattern' => 
  array (
    0 => 'mixed',
    'pattern' => 'mixed',
  ),
  'numberformatter::setsymbol' => 
  array (
    0 => 'mixed',
    'attr' => 'mixed',
    'symbol' => 'mixed',
  ),
  'numberformatter::settextattribute' => 
  array (
    0 => 'mixed',
    'attr' => 'mixed',
    'value' => 'mixed',
  ),
  'numfmt_create' => 
  array (
    0 => 'mixed',
    'locale' => 'mixed',
    'style' => 'mixed',
    'pattern=' => 'mixed',
  ),
  'numfmt_format' => 
  array (
    0 => 'mixed',
    'nf' => 'mixed',
    'num' => 'mixed',
    'type=' => 'mixed',
  ),
  'numfmt_format_currency' => 
  array (
    0 => 'mixed',
    'nf' => 'mixed',
    'num' => 'mixed',
    'currency' => 'mixed',
  ),
  'numfmt_get_attribute' => 
  array (
    0 => 'mixed',
    'nf' => 'mixed',
    'attr' => 'mixed',
  ),
  'numfmt_get_error_code' => 
  array (
    0 => 'mixed',
    'nf' => 'mixed',
  ),
  'numfmt_get_error_message' => 
  array (
    0 => 'mixed',
    'nf' => 'mixed',
  ),
  'numfmt_get_locale' => 
  array (
    0 => 'mixed',
    'nf' => 'mixed',
    'type=' => 'mixed',
  ),
  'numfmt_get_pattern' => 
  array (
    0 => 'mixed',
    'nf' => 'mixed',
  ),
  'numfmt_get_symbol' => 
  array (
    0 => 'mixed',
    'nf' => 'mixed',
    'attr' => 'mixed',
  ),
  'numfmt_get_text_attribute' => 
  array (
    0 => 'mixed',
    'nf' => 'mixed',
    'attr' => 'mixed',
  ),
  'numfmt_parse' => 
  array (
    0 => 'mixed',
    'formatter' => 'mixed',
    'string' => 'mixed',
    'type=' => 'mixed',
    '&position=' => 'mixed',
  ),
  'numfmt_parse_currency' => 
  array (
    0 => 'mixed',
    'formatter' => 'mixed',
    'string' => 'mixed',
    '&currency' => 'mixed',
    '&position=' => 'mixed',
  ),
  'numfmt_set_attribute' => 
  array (
    0 => 'mixed',
    'nf' => 'mixed',
    'attr' => 'mixed',
    'value' => 'mixed',
  ),
  'numfmt_set_pattern' => 
  array (
    0 => 'mixed',
    'nf' => 'mixed',
    'pattern' => 'mixed',
  ),
  'numfmt_set_symbol' => 
  array (
    0 => 'mixed',
    'nf' => 'mixed',
    'attr' => 'mixed',
    'symbol' => 'mixed',
  ),
  'numfmt_set_text_attribute' => 
  array (
    0 => 'mixed',
    'nf' => 'mixed',
    'attr' => 'mixed',
    'value' => 'mixed',
  ),
  'ob_clean' => 
  array (
    0 => 'mixed',
  ),
  'ob_end_clean' => 
  array (
    0 => 'mixed',
  ),
  'ob_end_flush' => 
  array (
    0 => 'mixed',
  ),
  'ob_flush' => 
  array (
    0 => 'mixed',
  ),
  'ob_get_clean' => 
  array (
    0 => 'mixed',
  ),
  'ob_get_contents' => 
  array (
    0 => 'mixed',
  ),
  'ob_get_flush' => 
  array (
    0 => 'mixed',
  ),
  'ob_get_length' => 
  array (
    0 => 'mixed',
  ),
  'ob_get_level' => 
  array (
    0 => 'mixed',
  ),
  'ob_get_status' => 
  array (
    0 => 'mixed',
    'full_status=' => 'mixed',
  ),
  'ob_gzhandler' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
    'flags' => 'mixed',
  ),
  'ob_implicit_flush' => 
  array (
    0 => 'mixed',
    'flag=' => 'mixed',
  ),
  'ob_list_handlers' => 
  array (
    0 => 'mixed',
  ),
  'ob_start' => 
  array (
    0 => 'mixed',
    'user_function=' => 'mixed',
    'chunk_size=' => 'mixed',
    'flags=' => 'mixed',
  ),
  'octdec' => 
  array (
    0 => 'mixed',
    'octal_number' => 'mixed',
  ),
  'opcache_compile_file' => 
  array (
    0 => 'mixed',
    'file' => 'mixed',
  ),
  'opcache_get_configuration' => 
  array (
    0 => 'mixed',
  ),
  'opcache_get_status' => 
  array (
    0 => 'mixed',
    'fetch_scripts=' => 'mixed',
  ),
  'opcache_invalidate' => 
  array (
    0 => 'mixed',
    'script' => 'mixed',
    'force=' => 'mixed',
  ),
  'opcache_is_script_cached' => 
  array (
    0 => 'mixed',
    'script' => 'mixed',
  ),
  'opcache_reset' => 
  array (
    0 => 'mixed',
  ),
  'opendir' => 
  array (
    0 => 'mixed',
    'path' => 'mixed',
    'context=' => 'mixed',
  ),
  'openlog' => 
  array (
    0 => 'mixed',
    'ident' => 'mixed',
    'option' => 'mixed',
    'facility' => 'mixed',
  ),
  'openssl_cipher_iv_length' => 
  array (
    0 => 'mixed',
    'method' => 'mixed',
  ),
  'openssl_csr_export' => 
  array (
    0 => 'mixed',
    'csr' => 'mixed',
    '&out' => 'mixed',
    'notext=' => 'mixed',
  ),
  'openssl_csr_export_to_file' => 
  array (
    0 => 'mixed',
    'csr' => 'mixed',
    'outfilename' => 'mixed',
    'notext=' => 'mixed',
  ),
  'openssl_csr_get_public_key' => 
  array (
    0 => 'mixed',
    'csr' => 'mixed',
    'use_shortnames=' => 'mixed',
  ),
  'openssl_csr_get_subject' => 
  array (
    0 => 'mixed',
    'csr' => 'mixed',
    'use_shortnames=' => 'mixed',
  ),
  'openssl_csr_new' => 
  array (
    0 => 'mixed',
    'dn' => 'mixed',
    '&privkey' => 'mixed',
    'configargs=' => 'mixed',
    'extraattribs=' => 'mixed',
  ),
  'openssl_csr_sign' => 
  array (
    0 => 'mixed',
    'csr' => 'mixed',
    'x509' => 'mixed',
    'priv_key' => 'mixed',
    'days' => 'mixed',
    'config_args=' => 'mixed',
    'serial=' => 'mixed',
  ),
  'openssl_decrypt' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
    'method' => 'mixed',
    'password' => 'mixed',
    'options=' => 'mixed',
    'iv=' => 'mixed',
    'tag=' => 'mixed',
    'aad=' => 'mixed',
  ),
  'openssl_dh_compute_key' => 
  array (
    0 => 'mixed',
    'pub_key' => 'mixed',
    'dh_key' => 'mixed',
  ),
  'openssl_digest' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
    'method' => 'mixed',
    'raw_output=' => 'mixed',
  ),
  'openssl_encrypt' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
    'method' => 'mixed',
    'password' => 'mixed',
    'options=' => 'mixed',
    'iv=' => 'mixed',
    '&tag=' => 'mixed',
    'aad=' => 'mixed',
    'tag_length=' => 'mixed',
  ),
  'openssl_error_string' => 
  array (
    0 => 'mixed',
  ),
  'openssl_free_key' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'openssl_get_cert_locations' => 
  array (
    0 => 'mixed',
  ),
  'openssl_get_cipher_methods' => 
  array (
    0 => 'mixed',
    'aliases=' => 'mixed',
  ),
  'openssl_get_curve_names' => 
  array (
    0 => 'mixed',
  ),
  'openssl_get_md_methods' => 
  array (
    0 => 'mixed',
    'aliases=' => 'mixed',
  ),
  'openssl_get_privatekey' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'passphrase=' => 'mixed',
  ),
  'openssl_get_publickey' => 
  array (
    0 => 'mixed',
    'cert' => 'mixed',
  ),
  'openssl_open' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
    '&opendata' => 'mixed',
    'ekey' => 'mixed',
    'privkey' => 'mixed',
    'method=' => 'mixed',
    'iv=' => 'mixed',
  ),
  'openssl_pbkdf2' => 
  array (
    0 => 'mixed',
    'password' => 'mixed',
    'salt' => 'mixed',
    'key_length' => 'mixed',
    'iterations' => 'mixed',
    'digest_algorithm=' => 'mixed',
  ),
  'openssl_pkcs12_export' => 
  array (
    0 => 'mixed',
    'x509' => 'mixed',
    '&out' => 'mixed',
    'priv_key' => 'mixed',
    'pass' => 'mixed',
    'args=' => 'mixed',
  ),
  'openssl_pkcs12_export_to_file' => 
  array (
    0 => 'mixed',
    'x509' => 'mixed',
    'filename' => 'mixed',
    'priv_key' => 'mixed',
    'pass' => 'mixed',
    'args=' => 'mixed',
  ),
  'openssl_pkcs12_read' => 
  array (
    0 => 'mixed',
    'PKCS12' => 'mixed',
    '&certs' => 'mixed',
    'pass' => 'mixed',
  ),
  'openssl_pkcs7_decrypt' => 
  array (
    0 => 'mixed',
    'infilename' => 'mixed',
    'outfilename' => 'mixed',
    'recipcert' => 'mixed',
    'recipkey=' => 'mixed',
  ),
  'openssl_pkcs7_encrypt' => 
  array (
    0 => 'mixed',
    'infile' => 'mixed',
    'outfile' => 'mixed',
    'recipcerts' => 'mixed',
    'headers' => 'mixed',
    'flags=' => 'mixed',
    'cipher=' => 'mixed',
  ),
  'openssl_pkcs7_read' => 
  array (
    0 => 'mixed',
    'infilename' => 'mixed',
    '&certs' => 'mixed',
  ),
  'openssl_pkcs7_sign' => 
  array (
    0 => 'mixed',
    'infile' => 'mixed',
    'outfile' => 'mixed',
    'signcert' => 'mixed',
    'signkey' => 'mixed',
    'headers' => 'mixed',
    'flags=' => 'mixed',
    'extracertsfilename=' => 'mixed',
  ),
  'openssl_pkcs7_verify' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
    'flags' => 'mixed',
    'signerscerts=' => 'mixed',
    'cainfo=' => 'mixed',
    'extracerts=' => 'mixed',
    'content=' => 'mixed',
    'pk7=' => 'mixed',
  ),
  'openssl_pkey_derive' => 
  array (
    0 => 'mixed',
    'peer_pub_key' => 'mixed',
    'priv_key' => 'mixed',
    'keylen=' => 'mixed',
  ),
  'openssl_pkey_export' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    '&out' => 'mixed',
    'passphrase=' => 'mixed',
    'config_args=' => 'mixed',
  ),
  'openssl_pkey_export_to_file' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'outfilename' => 'mixed',
    'passphrase=' => 'mixed',
    'config_args=' => 'mixed',
  ),
  'openssl_pkey_free' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'openssl_pkey_get_details' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'openssl_pkey_get_private' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'passphrase=' => 'mixed',
  ),
  'openssl_pkey_get_public' => 
  array (
    0 => 'mixed',
    'cert' => 'mixed',
  ),
  'openssl_pkey_new' => 
  array (
    0 => 'mixed',
    'configargs=' => 'mixed',
  ),
  'openssl_private_decrypt' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
    '&crypted' => 'mixed',
    'key' => 'mixed',
    'padding=' => 'mixed',
  ),
  'openssl_private_encrypt' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
    '&crypted' => 'mixed',
    'key' => 'mixed',
    'padding=' => 'mixed',
  ),
  'openssl_public_decrypt' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
    '&crypted' => 'mixed',
    'key' => 'mixed',
    'padding=' => 'mixed',
  ),
  'openssl_public_encrypt' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
    '&crypted' => 'mixed',
    'key' => 'mixed',
    'padding=' => 'mixed',
  ),
  'openssl_random_pseudo_bytes' => 
  array (
    0 => 'mixed',
    'length' => 'mixed',
    '&result_is_strong=' => 'mixed',
  ),
  'openssl_seal' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
    '&sealdata' => 'mixed',
    '&ekeys' => 'mixed',
    'pubkeys' => 'mixed',
    'method=' => 'mixed',
    '&iv=' => 'mixed',
  ),
  'openssl_sign' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
    '&signature' => 'mixed',
    'key' => 'mixed',
    'method=' => 'mixed',
  ),
  'openssl_spki_export' => 
  array (
    0 => 'mixed',
    'spki' => 'mixed',
  ),
  'openssl_spki_export_challenge' => 
  array (
    0 => 'mixed',
    'spki' => 'mixed',
  ),
  'openssl_spki_new' => 
  array (
    0 => 'mixed',
    'privkey' => 'mixed',
    'challenge' => 'mixed',
    'algo=' => 'mixed',
  ),
  'openssl_spki_verify' => 
  array (
    0 => 'mixed',
    'spki' => 'mixed',
  ),
  'openssl_verify' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
    'signature' => 'mixed',
    'key' => 'mixed',
    'method=' => 'mixed',
  ),
  'openssl_x509_check_private_key' => 
  array (
    0 => 'mixed',
    'cert' => 'mixed',
    'key' => 'mixed',
  ),
  'openssl_x509_checkpurpose' => 
  array (
    0 => 'mixed',
    'x509cert' => 'mixed',
    'purpose' => 'mixed',
    'cainfo=' => 'mixed',
    'untrustedfile=' => 'mixed',
  ),
  'openssl_x509_export' => 
  array (
    0 => 'mixed',
    'x509' => 'mixed',
    '&out' => 'mixed',
    'notext=' => 'mixed',
  ),
  'openssl_x509_export_to_file' => 
  array (
    0 => 'mixed',
    'x509' => 'mixed',
    'outfilename' => 'mixed',
    'notext=' => 'mixed',
  ),
  'openssl_x509_fingerprint' => 
  array (
    0 => 'mixed',
    'x509' => 'mixed',
    'method=' => 'mixed',
    'raw_output=' => 'mixed',
  ),
  'openssl_x509_free' => 
  array (
    0 => 'mixed',
    'x509' => 'mixed',
  ),
  'openssl_x509_parse' => 
  array (
    0 => 'mixed',
    'x509' => 'mixed',
    'shortname=' => 'mixed',
  ),
  'openssl_x509_read' => 
  array (
    0 => 'mixed',
    'cert' => 'mixed',
  ),
  'ord' => 
  array (
    0 => 'mixed',
    'character' => 'mixed',
  ),
  'outofboundsexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'outofboundsexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'outofboundsexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'outofboundsexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'outofboundsexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'outofboundsexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'outofboundsexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'outofboundsexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'outofboundsexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'outofboundsexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'outofboundsexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'outofrangeexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'outofrangeexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'outofrangeexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'outofrangeexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'outofrangeexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'outofrangeexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'outofrangeexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'outofrangeexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'outofrangeexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'outofrangeexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'outofrangeexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'output_add_rewrite_var' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
    'value' => 'mixed',
  ),
  'output_reset_rewrite_vars' => 
  array (
    0 => 'mixed',
  ),
  'overflowexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'overflowexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'overflowexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'overflowexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'overflowexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'overflowexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'overflowexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'overflowexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'overflowexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'overflowexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'overflowexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'pack' => 
  array (
    0 => 'mixed',
    'format' => 'mixed',
    '...args' => 'mixed',
  ),
  'parentiterator::__construct' => 
  array (
    0 => 'void',
    'iterator' => 'RecursiveIterator',
  ),
  'parentiterator::accept' => 
  array (
    0 => 'mixed',
  ),
  'parentiterator::current' => 
  array (
    0 => 'mixed',
  ),
  'parentiterator::getchildren' => 
  array (
    0 => 'mixed',
  ),
  'parentiterator::getinneriterator' => 
  array (
    0 => 'mixed',
  ),
  'parentiterator::haschildren' => 
  array (
    0 => 'mixed',
  ),
  'parentiterator::key' => 
  array (
    0 => 'mixed',
  ),
  'parentiterator::next' => 
  array (
    0 => 'mixed',
  ),
  'parentiterator::rewind' => 
  array (
    0 => 'mixed',
  ),
  'parentiterator::valid' => 
  array (
    0 => 'mixed',
  ),
  'parse_ini_file' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
    'process_sections=' => 'mixed',
    'scanner_mode=' => 'mixed',
  ),
  'parse_ini_string' => 
  array (
    0 => 'mixed',
    'ini_string' => 'mixed',
    'process_sections=' => 'mixed',
    'scanner_mode=' => 'mixed',
  ),
  'parse_str' => 
  array (
    0 => 'mixed',
    'encoded_string' => 'mixed',
    '&result=' => 'mixed',
  ),
  'parse_url' => 
  array (
    0 => 'mixed',
    'url' => 'mixed',
    'component=' => 'mixed',
  ),
  'parseerror::__clone' => 
  array (
    0 => 'mixed',
  ),
  'parseerror::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'parseerror::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'parseerror::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'parseerror::getcode' => 
  array (
    0 => 'mixed',
  ),
  'parseerror::getfile' => 
  array (
    0 => 'mixed',
  ),
  'parseerror::getline' => 
  array (
    0 => 'mixed',
  ),
  'parseerror::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'parseerror::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'parseerror::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'parseerror::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'passthru' => 
  array (
    0 => 'mixed',
    'command' => 'mixed',
    '&return_value=' => 'mixed',
  ),
  'password_get_info' => 
  array (
    0 => 'mixed',
    'hash' => 'mixed',
  ),
  'password_hash' => 
  array (
    0 => 'mixed',
    'password' => 'mixed',
    'algo' => 'mixed',
    'options=' => 'mixed',
  ),
  'password_needs_rehash' => 
  array (
    0 => 'mixed',
    'hash' => 'mixed',
    'algo' => 'mixed',
    'options=' => 'mixed',
  ),
  'password_verify' => 
  array (
    0 => 'mixed',
    'password' => 'mixed',
    'hash' => 'mixed',
  ),
  'pathinfo' => 
  array (
    0 => 'mixed',
    'path' => 'mixed',
    'options=' => 'mixed',
  ),
  'pclose' => 
  array (
    0 => 'mixed',
    'fp' => 'mixed',
  ),
  'pcntl_alarm' => 
  array (
    0 => 'mixed',
    'seconds' => 'mixed',
  ),
  'pcntl_async_signals' => 
  array (
    0 => 'mixed',
    'on' => 'mixed',
  ),
  'pcntl_errno' => 
  array (
    0 => 'mixed',
  ),
  'pcntl_exec' => 
  array (
    0 => 'mixed',
    'path' => 'mixed',
    'args=' => 'mixed',
    'envs=' => 'mixed',
  ),
  'pcntl_fork' => 
  array (
    0 => 'mixed',
  ),
  'pcntl_get_last_error' => 
  array (
    0 => 'mixed',
  ),
  'pcntl_getpriority' => 
  array (
    0 => 'mixed',
    'pid=' => 'mixed',
    'process_identifier=' => 'mixed',
  ),
  'pcntl_setpriority' => 
  array (
    0 => 'mixed',
    'priority' => 'mixed',
    'pid=' => 'mixed',
    'process_identifier=' => 'mixed',
  ),
  'pcntl_signal' => 
  array (
    0 => 'mixed',
    'signo' => 'mixed',
    'handler' => 'mixed',
    'restart_syscalls=' => 'mixed',
  ),
  'pcntl_signal_dispatch' => 
  array (
    0 => 'mixed',
  ),
  'pcntl_signal_get_handler' => 
  array (
    0 => 'mixed',
    'signo' => 'mixed',
  ),
  'pcntl_sigprocmask' => 
  array (
    0 => 'mixed',
    'how' => 'mixed',
    'set' => 'mixed',
    '&oldset=' => 'mixed',
  ),
  'pcntl_sigtimedwait' => 
  array (
    0 => 'mixed',
    'set' => 'mixed',
    '&info=' => 'mixed',
    'seconds=' => 'mixed',
    'nanoseconds=' => 'mixed',
  ),
  'pcntl_sigwaitinfo' => 
  array (
    0 => 'mixed',
    'set' => 'mixed',
    '&info=' => 'mixed',
  ),
  'pcntl_strerror' => 
  array (
    0 => 'mixed',
    'errno' => 'mixed',
  ),
  'pcntl_wait' => 
  array (
    0 => 'mixed',
    '&status' => 'mixed',
    'options=' => 'mixed',
    '&rusage=' => 'mixed',
  ),
  'pcntl_waitpid' => 
  array (
    0 => 'mixed',
    'pid' => 'mixed',
    '&status' => 'mixed',
    'options=' => 'mixed',
    '&rusage=' => 'mixed',
  ),
  'pcntl_wexitstatus' => 
  array (
    0 => 'mixed',
    'status' => 'mixed',
  ),
  'pcntl_wifexited' => 
  array (
    0 => 'mixed',
    'status' => 'mixed',
  ),
  'pcntl_wifsignaled' => 
  array (
    0 => 'mixed',
    'status' => 'mixed',
  ),
  'pcntl_wifstopped' => 
  array (
    0 => 'mixed',
    'status' => 'mixed',
  ),
  'pcntl_wstopsig' => 
  array (
    0 => 'mixed',
    'status' => 'mixed',
  ),
  'pcntl_wtermsig' => 
  array (
    0 => 'mixed',
    'status' => 'mixed',
  ),
  'pdo::__construct' => 
  array (
    0 => 'void',
    'dsn' => 'mixed',
    'username=' => 'mixed',
    'passwd=' => 'mixed',
    'options=' => 'mixed',
  ),
  'pdo::__sleep' => 
  array (
    0 => 'mixed',
  ),
  'pdo::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'pdo::begintransaction' => 
  array (
    0 => 'mixed',
  ),
  'pdo::commit' => 
  array (
    0 => 'mixed',
  ),
  'pdo::errorcode' => 
  array (
    0 => 'mixed',
  ),
  'pdo::errorinfo' => 
  array (
    0 => 'mixed',
  ),
  'pdo::exec' => 
  array (
    0 => 'mixed',
    'query' => 'mixed',
  ),
  'pdo::getattribute' => 
  array (
    0 => 'mixed',
    'attribute' => 'mixed',
  ),
  'pdo::getavailabledrivers' => 
  array (
    0 => 'mixed',
  ),
  'pdo::intransaction' => 
  array (
    0 => 'mixed',
  ),
  'pdo::lastinsertid' => 
  array (
    0 => 'mixed',
    'seqname=' => 'mixed',
  ),
  'pdo::prepare' => 
  array (
    0 => 'mixed',
    'statement' => 'mixed',
    'options=' => 'mixed',
  ),
  'pdo::query' => 
  array (
    0 => 'mixed',
  ),
  'pdo::quote' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    'paramtype=' => 'mixed',
  ),
  'pdo::rollback' => 
  array (
    0 => 'mixed',
  ),
  'pdo::setattribute' => 
  array (
    0 => 'mixed',
    'attribute' => 'mixed',
    'value' => 'mixed',
  ),
  'pdo_drivers' => 
  array (
    0 => 'mixed',
  ),
  'pdoexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'pdoexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'pdoexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'pdoexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'pdoexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'pdoexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'pdoexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'pdoexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'pdoexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'pdoexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'pdoexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'pdostatement::__sleep' => 
  array (
    0 => 'mixed',
  ),
  'pdostatement::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'pdostatement::bindcolumn' => 
  array (
    0 => 'mixed',
    'column' => 'mixed',
    '&param' => 'mixed',
    'type=' => 'mixed',
    'maxlen=' => 'mixed',
    'driverdata=' => 'mixed',
  ),
  'pdostatement::bindparam' => 
  array (
    0 => 'mixed',
    'paramno' => 'mixed',
    '&param' => 'mixed',
    'type=' => 'mixed',
    'maxlen=' => 'mixed',
    'driverdata=' => 'mixed',
  ),
  'pdostatement::bindvalue' => 
  array (
    0 => 'mixed',
    'paramno' => 'mixed',
    'param' => 'mixed',
    'type=' => 'mixed',
  ),
  'pdostatement::closecursor' => 
  array (
    0 => 'mixed',
  ),
  'pdostatement::columncount' => 
  array (
    0 => 'mixed',
  ),
  'pdostatement::debugdumpparams' => 
  array (
    0 => 'mixed',
  ),
  'pdostatement::errorcode' => 
  array (
    0 => 'mixed',
  ),
  'pdostatement::errorinfo' => 
  array (
    0 => 'mixed',
  ),
  'pdostatement::execute' => 
  array (
    0 => 'mixed',
    'bound_input_params=' => 'mixed',
  ),
  'pdostatement::fetch' => 
  array (
    0 => 'mixed',
    'how=' => 'mixed',
    'orientation=' => 'mixed',
    'offset=' => 'mixed',
  ),
  'pdostatement::fetchall' => 
  array (
    0 => 'mixed',
    'how=' => 'mixed',
    'class_name=' => 'mixed',
    'ctor_args=' => 'mixed',
  ),
  'pdostatement::fetchcolumn' => 
  array (
    0 => 'mixed',
    'column_number=' => 'mixed',
  ),
  'pdostatement::fetchobject' => 
  array (
    0 => 'mixed',
    'class_name=' => 'mixed',
    'ctor_args=' => 'mixed',
  ),
  'pdostatement::getattribute' => 
  array (
    0 => 'mixed',
    'attribute' => 'mixed',
  ),
  'pdostatement::getcolumnmeta' => 
  array (
    0 => 'mixed',
    'column' => 'mixed',
  ),
  'pdostatement::nextrowset' => 
  array (
    0 => 'mixed',
  ),
  'pdostatement::rowcount' => 
  array (
    0 => 'mixed',
  ),
  'pdostatement::setattribute' => 
  array (
    0 => 'mixed',
    'attribute' => 'mixed',
    'value' => 'mixed',
  ),
  'pdostatement::setfetchmode' => 
  array (
    0 => 'mixed',
    'mode' => 'mixed',
    'params=' => 'mixed',
  ),
  'pfsockopen' => 
  array (
    0 => 'mixed',
    'hostname' => 'mixed',
    'port=' => 'mixed',
    '&errno=' => 'mixed',
    '&errstr=' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'pg_affected_rows' => 
  array (
    0 => 'mixed',
    'result' => 'mixed',
  ),
  'pg_cancel_query' => 
  array (
    0 => 'mixed',
    'connection' => 'mixed',
  ),
  'pg_client_encoding' => 
  array (
    0 => 'mixed',
    'connection=' => 'mixed',
  ),
  'pg_clientencoding' => 
  array (
    0 => 'mixed',
    'connection=' => 'mixed',
  ),
  'pg_close' => 
  array (
    0 => 'mixed',
    'connection=' => 'mixed',
  ),
  'pg_cmdtuples' => 
  array (
    0 => 'mixed',
    'result' => 'mixed',
  ),
  'pg_connect' => 
  array (
    0 => 'mixed',
    'connection_string' => 'mixed',
    'connect_type=' => 'mixed',
    'host=' => 'mixed',
    'port=' => 'mixed',
    'options=' => 'mixed',
    'tty=' => 'mixed',
    'database=' => 'mixed',
  ),
  'pg_connect_poll' => 
  array (
    0 => 'mixed',
    'connection=' => 'mixed',
  ),
  'pg_connection_busy' => 
  array (
    0 => 'mixed',
    'connection' => 'mixed',
  ),
  'pg_connection_reset' => 
  array (
    0 => 'mixed',
    'connection' => 'mixed',
  ),
  'pg_connection_status' => 
  array (
    0 => 'mixed',
    'connection' => 'mixed',
  ),
  'pg_consume_input' => 
  array (
    0 => 'mixed',
    'connection' => 'mixed',
  ),
  'pg_convert' => 
  array (
    0 => 'mixed',
    'db' => 'mixed',
    'table' => 'mixed',
    'values' => 'mixed',
    'options=' => 'mixed',
  ),
  'pg_copy_from' => 
  array (
    0 => 'mixed',
    'connection' => 'mixed',
    'table_name' => 'mixed',
    'rows' => 'mixed',
    'delimiter=' => 'mixed',
    'null_as=' => 'mixed',
  ),
  'pg_copy_to' => 
  array (
    0 => 'mixed',
    'connection' => 'mixed',
    'table_name' => 'mixed',
    'delimiter=' => 'mixed',
    'null_as=' => 'mixed',
  ),
  'pg_dbname' => 
  array (
    0 => 'mixed',
    'connection=' => 'mixed',
  ),
  'pg_delete' => 
  array (
    0 => 'mixed',
    'db' => 'mixed',
    'table' => 'mixed',
    'ids' => 'mixed',
    'options=' => 'mixed',
  ),
  'pg_end_copy' => 
  array (
    0 => 'mixed',
    'connection=' => 'mixed',
  ),
  'pg_errormessage' => 
  array (
    0 => 'mixed',
    'connection=' => 'mixed',
  ),
  'pg_escape_bytea' => 
  array (
    0 => 'mixed',
    'connection=' => 'mixed',
    'data=' => 'mixed',
  ),
  'pg_escape_identifier' => 
  array (
    0 => 'mixed',
    'connection=' => 'mixed',
    'data=' => 'mixed',
  ),
  'pg_escape_literal' => 
  array (
    0 => 'mixed',
    'connection=' => 'mixed',
    'data=' => 'mixed',
  ),
  'pg_escape_string' => 
  array (
    0 => 'mixed',
    'connection=' => 'mixed',
    'data=' => 'mixed',
  ),
  'pg_exec' => 
  array (
    0 => 'mixed',
    'connection=' => 'mixed',
    'query=' => 'mixed',
  ),
  'pg_execute' => 
  array (
    0 => 'mixed',
    'connection=' => 'mixed',
    'stmtname=' => 'mixed',
    'params=' => 'mixed',
  ),
  'pg_fetch_all' => 
  array (
    0 => 'mixed',
    'result' => 'mixed',
    'result_type=' => 'mixed',
  ),
  'pg_fetch_all_columns' => 
  array (
    0 => 'mixed',
    'result' => 'mixed',
    'column_number=' => 'mixed',
  ),
  'pg_fetch_array' => 
  array (
    0 => 'mixed',
    'result' => 'mixed',
    'row=' => 'mixed',
    'result_type=' => 'mixed',
  ),
  'pg_fetch_assoc' => 
  array (
    0 => 'mixed',
    'result' => 'mixed',
    'row=' => 'mixed',
  ),
  'pg_fetch_object' => 
  array (
    0 => 'mixed',
    'result' => 'mixed',
    'row=' => 'mixed',
    'class_name=' => 'mixed',
    'l=' => 'mixed',
    'ctor_params=' => 'mixed',
  ),
  'pg_fetch_result' => 
  array (
    0 => 'mixed',
    'result' => 'mixed',
    'row_number=' => 'mixed',
    'field_name=' => 'mixed',
  ),
  'pg_fetch_row' => 
  array (
    0 => 'mixed',
    'result' => 'mixed',
    'row=' => 'mixed',
    'result_type=' => 'mixed',
  ),
  'pg_field_is_null' => 
  array (
    0 => 'mixed',
    'result' => 'mixed',
    'row=' => 'mixed',
    'field_name_or_number=' => 'mixed',
  ),
  'pg_field_name' => 
  array (
    0 => 'mixed',
    'result' => 'mixed',
    'field_number' => 'mixed',
  ),
  'pg_field_num' => 
  array (
    0 => 'mixed',
    'result' => 'mixed',
    'field_name' => 'mixed',
  ),
  'pg_field_prtlen' => 
  array (
    0 => 'mixed',
    'result' => 'mixed',
    'row=' => 'mixed',
    'field_name_or_number=' => 'mixed',
  ),
  'pg_field_size' => 
  array (
    0 => 'mixed',
    'result' => 'mixed',
    'field_number' => 'mixed',
  ),
  'pg_field_table' => 
  array (
    0 => 'mixed',
    'result' => 'mixed',
    'field_number' => 'mixed',
    'oid_only=' => 'mixed',
  ),
  'pg_field_type' => 
  array (
    0 => 'mixed',
    'result' => 'mixed',
    'field_number' => 'mixed',
  ),
  'pg_field_type_oid' => 
  array (
    0 => 'mixed',
    'result' => 'mixed',
    'field_number' => 'mixed',
  ),
  'pg_fieldisnull' => 
  array (
    0 => 'mixed',
    'result' => 'mixed',
    'row=' => 'mixed',
    'field_name_or_number=' => 'mixed',
  ),
  'pg_fieldname' => 
  array (
    0 => 'mixed',
    'result' => 'mixed',
    'field_number' => 'mixed',
  ),
  'pg_fieldnum' => 
  array (
    0 => 'mixed',
    'result' => 'mixed',
    'field_name' => 'mixed',
  ),
  'pg_fieldprtlen' => 
  array (
    0 => 'mixed',
    'result' => 'mixed',
    'row=' => 'mixed',
    'field_name_or_number=' => 'mixed',
  ),
  'pg_fieldsize' => 
  array (
    0 => 'mixed',
    'result' => 'mixed',
    'field_number' => 'mixed',
  ),
  'pg_fieldtype' => 
  array (
    0 => 'mixed',
    'result' => 'mixed',
    'field_number' => 'mixed',
  ),
  'pg_flush' => 
  array (
    0 => 'mixed',
    'connection' => 'mixed',
  ),
  'pg_free_result' => 
  array (
    0 => 'mixed',
    'result' => 'mixed',
  ),
  'pg_freeresult' => 
  array (
    0 => 'mixed',
    'result' => 'mixed',
  ),
  'pg_get_notify' => 
  array (
    0 => 'mixed',
    'connection=' => 'mixed',
    'e=' => 'mixed',
  ),
  'pg_get_pid' => 
  array (
    0 => 'mixed',
    'connection=' => 'mixed',
  ),
  'pg_get_result' => 
  array (
    0 => 'mixed',
    'connection' => 'mixed',
  ),
  'pg_getlastoid' => 
  array (
    0 => 'mixed',
    'result' => 'mixed',
  ),
  'pg_host' => 
  array (
    0 => 'mixed',
    'connection=' => 'mixed',
  ),
  'pg_insert' => 
  array (
    0 => 'mixed',
    'db' => 'mixed',
    'table' => 'mixed',
    'values' => 'mixed',
    'options=' => 'mixed',
  ),
  'pg_last_error' => 
  array (
    0 => 'mixed',
    'connection=' => 'mixed',
  ),
  'pg_last_notice' => 
  array (
    0 => 'mixed',
    'connection' => 'mixed',
    'option=' => 'mixed',
  ),
  'pg_last_oid' => 
  array (
    0 => 'mixed',
    'result' => 'mixed',
  ),
  'pg_lo_close' => 
  array (
    0 => 'mixed',
    'large_object' => 'mixed',
  ),
  'pg_lo_create' => 
  array (
    0 => 'mixed',
    'connection=' => 'mixed',
    'large_object_id=' => 'mixed',
  ),
  'pg_lo_export' => 
  array (
    0 => 'mixed',
    'connection=' => 'mixed',
    'objoid=' => 'mixed',
    'filename=' => 'mixed',
  ),
  'pg_lo_import' => 
  array (
    0 => 'mixed',
    'connection=' => 'mixed',
    'filename=' => 'mixed',
    'large_object_oid=' => 'mixed',
  ),
  'pg_lo_open' => 
  array (
    0 => 'mixed',
    'connection=' => 'mixed',
    'large_object_oid=' => 'mixed',
    'mode=' => 'mixed',
  ),
  'pg_lo_read' => 
  array (
    0 => 'mixed',
    'large_object' => 'mixed',
    'len=' => 'mixed',
  ),
  'pg_lo_read_all' => 
  array (
    0 => 'mixed',
    'large_object' => 'mixed',
  ),
  'pg_lo_seek' => 
  array (
    0 => 'mixed',
    'large_object' => 'mixed',
    'offset' => 'mixed',
    'whence=' => 'mixed',
  ),
  'pg_lo_tell' => 
  array (
    0 => 'mixed',
    'large_object' => 'mixed',
  ),
  'pg_lo_truncate' => 
  array (
    0 => 'mixed',
    'large_object' => 'mixed',
    'size=' => 'mixed',
  ),
  'pg_lo_unlink' => 
  array (
    0 => 'mixed',
    'connection=' => 'mixed',
    'large_object_oid=' => 'mixed',
  ),
  'pg_lo_write' => 
  array (
    0 => 'mixed',
    'large_object' => 'mixed',
    'buf' => 'mixed',
    'len=' => 'mixed',
  ),
  'pg_loclose' => 
  array (
    0 => 'mixed',
    'large_object' => 'mixed',
  ),
  'pg_locreate' => 
  array (
    0 => 'mixed',
    'connection=' => 'mixed',
    'large_object_id=' => 'mixed',
  ),
  'pg_loexport' => 
  array (
    0 => 'mixed',
    'connection=' => 'mixed',
    'objoid=' => 'mixed',
    'filename=' => 'mixed',
  ),
  'pg_loimport' => 
  array (
    0 => 'mixed',
    'connection=' => 'mixed',
    'filename=' => 'mixed',
    'large_object_oid=' => 'mixed',
  ),
  'pg_loopen' => 
  array (
    0 => 'mixed',
    'connection=' => 'mixed',
    'large_object_oid=' => 'mixed',
    'mode=' => 'mixed',
  ),
  'pg_loread' => 
  array (
    0 => 'mixed',
    'large_object' => 'mixed',
    'len=' => 'mixed',
  ),
  'pg_loreadall' => 
  array (
    0 => 'mixed',
    'large_object' => 'mixed',
  ),
  'pg_lounlink' => 
  array (
    0 => 'mixed',
    'connection=' => 'mixed',
    'large_object_oid=' => 'mixed',
  ),
  'pg_lowrite' => 
  array (
    0 => 'mixed',
    'large_object' => 'mixed',
    'buf' => 'mixed',
    'len=' => 'mixed',
  ),
  'pg_meta_data' => 
  array (
    0 => 'mixed',
    'db' => 'mixed',
    'table' => 'mixed',
  ),
  'pg_num_fields' => 
  array (
    0 => 'mixed',
    'result' => 'mixed',
  ),
  'pg_num_rows' => 
  array (
    0 => 'mixed',
    'result' => 'mixed',
  ),
  'pg_numfields' => 
  array (
    0 => 'mixed',
    'result' => 'mixed',
  ),
  'pg_numrows' => 
  array (
    0 => 'mixed',
    'result' => 'mixed',
  ),
  'pg_options' => 
  array (
    0 => 'mixed',
    'connection=' => 'mixed',
  ),
  'pg_parameter_status' => 
  array (
    0 => 'mixed',
    'connection' => 'mixed',
    'param_name=' => 'mixed',
  ),
  'pg_pconnect' => 
  array (
    0 => 'mixed',
    'connection_string' => 'mixed',
    'host=' => 'mixed',
    'port=' => 'mixed',
    'options=' => 'mixed',
    'tty=' => 'mixed',
    'database=' => 'mixed',
  ),
  'pg_ping' => 
  array (
    0 => 'mixed',
    'connection=' => 'mixed',
  ),
  'pg_port' => 
  array (
    0 => 'mixed',
    'connection=' => 'mixed',
  ),
  'pg_prepare' => 
  array (
    0 => 'mixed',
    'connection=' => 'mixed',
    'stmtname=' => 'mixed',
    'query=' => 'mixed',
  ),
  'pg_put_line' => 
  array (
    0 => 'mixed',
    'connection=' => 'mixed',
    'query=' => 'mixed',
  ),
  'pg_query' => 
  array (
    0 => 'mixed',
    'connection=' => 'mixed',
    'query=' => 'mixed',
  ),
  'pg_query_params' => 
  array (
    0 => 'mixed',
    'connection=' => 'mixed',
    'query=' => 'mixed',
    'params=' => 'mixed',
  ),
  'pg_result' => 
  array (
    0 => 'mixed',
    'connection' => 'mixed',
  ),
  'pg_result_error' => 
  array (
    0 => 'mixed',
    'result' => 'mixed',
  ),
  'pg_result_error_field' => 
  array (
    0 => 'mixed',
    'result' => 'mixed',
    'fieldcode' => 'mixed',
  ),
  'pg_result_seek' => 
  array (
    0 => 'mixed',
    'result' => 'mixed',
    'offset' => 'mixed',
  ),
  'pg_result_status' => 
  array (
    0 => 'mixed',
    'result' => 'mixed',
    'result_type=' => 'mixed',
  ),
  'pg_select' => 
  array (
    0 => 'mixed',
    'db' => 'mixed',
    'table' => 'mixed',
    'ids' => 'mixed',
    'options=' => 'mixed',
    'result_type=' => 'mixed',
  ),
  'pg_send_execute' => 
  array (
    0 => 'mixed',
    'connection' => 'mixed',
    'stmtname' => 'mixed',
    'params' => 'mixed',
  ),
  'pg_send_prepare' => 
  array (
    0 => 'mixed',
    'connection' => 'mixed',
    'stmtname' => 'mixed',
    'query' => 'mixed',
  ),
  'pg_send_query' => 
  array (
    0 => 'mixed',
    'connection' => 'mixed',
    'query' => 'mixed',
  ),
  'pg_send_query_params' => 
  array (
    0 => 'mixed',
    'connection' => 'mixed',
    'query' => 'mixed',
    'params' => 'mixed',
  ),
  'pg_set_client_encoding' => 
  array (
    0 => 'mixed',
    'connection=' => 'mixed',
    'encoding=' => 'mixed',
  ),
  'pg_set_error_verbosity' => 
  array (
    0 => 'mixed',
    'connection=' => 'mixed',
    'verbosity=' => 'mixed',
  ),
  'pg_setclientencoding' => 
  array (
    0 => 'mixed',
    'connection=' => 'mixed',
    'encoding=' => 'mixed',
  ),
  'pg_socket' => 
  array (
    0 => 'mixed',
    'connection' => 'mixed',
  ),
  'pg_trace' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
    'mode=' => 'mixed',
    'connection=' => 'mixed',
  ),
  'pg_transaction_status' => 
  array (
    0 => 'mixed',
    'connection' => 'mixed',
  ),
  'pg_tty' => 
  array (
    0 => 'mixed',
    'connection=' => 'mixed',
  ),
  'pg_unescape_bytea' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
  ),
  'pg_untrace' => 
  array (
    0 => 'mixed',
    'connection=' => 'mixed',
  ),
  'pg_update' => 
  array (
    0 => 'mixed',
    'db' => 'mixed',
    'table' => 'mixed',
    'fields' => 'mixed',
    'ids' => 'mixed',
    'options=' => 'mixed',
  ),
  'pg_version' => 
  array (
    0 => 'mixed',
    'connection=' => 'mixed',
  ),
  'phar::__construct' => 
  array (
    0 => 'void',
    'filename' => 'mixed',
    'flags=' => 'mixed',
    'alias=' => 'mixed',
  ),
  'phar::__destruct' => 
  array (
    0 => 'mixed',
  ),
  'phar::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'phar::_bad_state_ex' => 
  array (
    0 => 'mixed',
  ),
  'phar::addemptydir' => 
  array (
    0 => 'mixed',
    'dirname=' => 'mixed',
  ),
  'phar::addfile' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
    'localname=' => 'mixed',
  ),
  'phar::addfromstring' => 
  array (
    0 => 'mixed',
    'localname' => 'mixed',
    'contents=' => 'mixed',
  ),
  'phar::apiversion' => 
  array (
    0 => 'mixed',
  ),
  'phar::buildfromdirectory' => 
  array (
    0 => 'mixed',
    'base_dir' => 'mixed',
    'regex=' => 'mixed',
  ),
  'phar::buildfromiterator' => 
  array (
    0 => 'mixed',
    'iterator' => 'mixed',
    'base_directory=' => 'mixed',
  ),
  'phar::cancompress' => 
  array (
    0 => 'mixed',
    'method=' => 'mixed',
  ),
  'phar::canwrite' => 
  array (
    0 => 'mixed',
  ),
  'phar::compress' => 
  array (
    0 => 'mixed',
    'compression_type' => 'mixed',
    'file_ext=' => 'mixed',
  ),
  'phar::compressfiles' => 
  array (
    0 => 'mixed',
    'compression_type' => 'mixed',
  ),
  'phar::converttodata' => 
  array (
    0 => 'mixed',
    'format=' => 'mixed',
    'compression_type=' => 'mixed',
    'file_ext=' => 'mixed',
  ),
  'phar::converttoexecutable' => 
  array (
    0 => 'mixed',
    'format=' => 'mixed',
    'compression_type=' => 'mixed',
    'file_ext=' => 'mixed',
  ),
  'phar::copy' => 
  array (
    0 => 'mixed',
    'newfile' => 'mixed',
    'oldfile' => 'mixed',
  ),
  'phar::count' => 
  array (
    0 => 'mixed',
  ),
  'phar::createdefaultstub' => 
  array (
    0 => 'mixed',
    'index=' => 'mixed',
    'webindex=' => 'mixed',
  ),
  'phar::current' => 
  array (
    0 => 'mixed',
  ),
  'phar::decompress' => 
  array (
    0 => 'mixed',
    'file_ext=' => 'mixed',
  ),
  'phar::decompressfiles' => 
  array (
    0 => 'mixed',
  ),
  'phar::delete' => 
  array (
    0 => 'mixed',
    'entry' => 'mixed',
  ),
  'phar::delmetadata' => 
  array (
    0 => 'mixed',
  ),
  'phar::extractto' => 
  array (
    0 => 'mixed',
    'pathto' => 'mixed',
    'files=' => 'mixed',
    'overwrite=' => 'mixed',
  ),
  'phar::getalias' => 
  array (
    0 => 'mixed',
  ),
  'phar::getatime' => 
  array (
    0 => 'mixed',
  ),
  'phar::getbasename' => 
  array (
    0 => 'mixed',
    'suffix=' => 'mixed',
  ),
  'phar::getchildren' => 
  array (
    0 => 'mixed',
  ),
  'phar::getctime' => 
  array (
    0 => 'mixed',
  ),
  'phar::getextension' => 
  array (
    0 => 'mixed',
  ),
  'phar::getfileinfo' => 
  array (
    0 => 'mixed',
    'class_name=' => 'mixed',
  ),
  'phar::getfilename' => 
  array (
    0 => 'mixed',
  ),
  'phar::getflags' => 
  array (
    0 => 'mixed',
  ),
  'phar::getgroup' => 
  array (
    0 => 'mixed',
  ),
  'phar::getinode' => 
  array (
    0 => 'mixed',
  ),
  'phar::getlinktarget' => 
  array (
    0 => 'mixed',
  ),
  'phar::getmetadata' => 
  array (
    0 => 'mixed',
  ),
  'phar::getmodified' => 
  array (
    0 => 'mixed',
  ),
  'phar::getmtime' => 
  array (
    0 => 'mixed',
  ),
  'phar::getowner' => 
  array (
    0 => 'mixed',
  ),
  'phar::getpath' => 
  array (
    0 => 'mixed',
  ),
  'phar::getpathinfo' => 
  array (
    0 => 'mixed',
    'class_name=' => 'mixed',
  ),
  'phar::getpathname' => 
  array (
    0 => 'mixed',
  ),
  'phar::getperms' => 
  array (
    0 => 'mixed',
  ),
  'phar::getrealpath' => 
  array (
    0 => 'mixed',
  ),
  'phar::getsignature' => 
  array (
    0 => 'mixed',
  ),
  'phar::getsize' => 
  array (
    0 => 'mixed',
  ),
  'phar::getstub' => 
  array (
    0 => 'mixed',
  ),
  'phar::getsubpath' => 
  array (
    0 => 'mixed',
  ),
  'phar::getsubpathname' => 
  array (
    0 => 'mixed',
  ),
  'phar::getsupportedcompression' => 
  array (
    0 => 'mixed',
  ),
  'phar::getsupportedsignatures' => 
  array (
    0 => 'mixed',
  ),
  'phar::gettype' => 
  array (
    0 => 'mixed',
  ),
  'phar::getversion' => 
  array (
    0 => 'mixed',
  ),
  'phar::haschildren' => 
  array (
    0 => 'mixed',
    'allow_links=' => 'mixed',
  ),
  'phar::hasmetadata' => 
  array (
    0 => 'mixed',
  ),
  'phar::interceptfilefuncs' => 
  array (
    0 => 'mixed',
  ),
  'phar::isbuffering' => 
  array (
    0 => 'mixed',
  ),
  'phar::iscompressed' => 
  array (
    0 => 'mixed',
  ),
  'phar::isdir' => 
  array (
    0 => 'mixed',
  ),
  'phar::isdot' => 
  array (
    0 => 'mixed',
  ),
  'phar::isexecutable' => 
  array (
    0 => 'mixed',
  ),
  'phar::isfile' => 
  array (
    0 => 'mixed',
  ),
  'phar::isfileformat' => 
  array (
    0 => 'mixed',
    'fileformat' => 'mixed',
  ),
  'phar::islink' => 
  array (
    0 => 'mixed',
  ),
  'phar::isreadable' => 
  array (
    0 => 'mixed',
  ),
  'phar::isvalidpharfilename' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
    'executable=' => 'mixed',
  ),
  'phar::iswritable' => 
  array (
    0 => 'mixed',
  ),
  'phar::key' => 
  array (
    0 => 'mixed',
  ),
  'phar::loadphar' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
    'alias=' => 'mixed',
  ),
  'phar::mapphar' => 
  array (
    0 => 'mixed',
    'alias=' => 'mixed',
    'offset=' => 'mixed',
  ),
  'phar::mount' => 
  array (
    0 => 'mixed',
    'inphar' => 'mixed',
    'externalfile' => 'mixed',
  ),
  'phar::mungserver' => 
  array (
    0 => 'mixed',
    'munglist' => 'mixed',
  ),
  'phar::next' => 
  array (
    0 => 'mixed',
  ),
  'phar::offsetexists' => 
  array (
    0 => 'mixed',
    'entry' => 'mixed',
  ),
  'phar::offsetget' => 
  array (
    0 => 'mixed',
    'entry' => 'mixed',
  ),
  'phar::offsetset' => 
  array (
    0 => 'mixed',
    'entry' => 'mixed',
    'value' => 'mixed',
  ),
  'phar::offsetunset' => 
  array (
    0 => 'mixed',
    'entry' => 'mixed',
  ),
  'phar::openfile' => 
  array (
    0 => 'mixed',
    'open_mode=' => 'mixed',
    'use_include_path=' => 'mixed',
    'context=' => 'mixed',
  ),
  'phar::rewind' => 
  array (
    0 => 'mixed',
  ),
  'phar::running' => 
  array (
    0 => 'mixed',
    'retphar=' => 'mixed',
  ),
  'phar::seek' => 
  array (
    0 => 'mixed',
    'position' => 'mixed',
  ),
  'phar::setalias' => 
  array (
    0 => 'mixed',
    'alias' => 'mixed',
  ),
  'phar::setdefaultstub' => 
  array (
    0 => 'mixed',
    'index=' => 'mixed',
    'webindex=' => 'mixed',
  ),
  'phar::setfileclass' => 
  array (
    0 => 'mixed',
    'class_name=' => 'mixed',
  ),
  'phar::setflags' => 
  array (
    0 => 'mixed',
    'flags=' => 'mixed',
  ),
  'phar::setinfoclass' => 
  array (
    0 => 'mixed',
    'class_name=' => 'mixed',
  ),
  'phar::setmetadata' => 
  array (
    0 => 'mixed',
    'metadata' => 'mixed',
  ),
  'phar::setsignaturealgorithm' => 
  array (
    0 => 'mixed',
    'algorithm' => 'mixed',
    'privatekey=' => 'mixed',
  ),
  'phar::setstub' => 
  array (
    0 => 'mixed',
    'newstub' => 'mixed',
    'maxlen=' => 'mixed',
  ),
  'phar::startbuffering' => 
  array (
    0 => 'mixed',
  ),
  'phar::stopbuffering' => 
  array (
    0 => 'mixed',
  ),
  'phar::unlinkarchive' => 
  array (
    0 => 'mixed',
    'archive' => 'mixed',
  ),
  'phar::valid' => 
  array (
    0 => 'mixed',
  ),
  'phar::webphar' => 
  array (
    0 => 'mixed',
    'alias=' => 'mixed',
    'index=' => 'mixed',
    'f404=' => 'mixed',
    'mimetypes=' => 'mixed',
    'rewrites=' => 'mixed',
  ),
  'phardata::__construct' => 
  array (
    0 => 'void',
    'filename' => 'mixed',
    'flags=' => 'mixed',
    'alias=' => 'mixed',
    'fileformat=' => 'mixed',
  ),
  'phardata::__destruct' => 
  array (
    0 => 'mixed',
  ),
  'phardata::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'phardata::_bad_state_ex' => 
  array (
    0 => 'mixed',
  ),
  'phardata::addemptydir' => 
  array (
    0 => 'mixed',
    'dirname=' => 'mixed',
  ),
  'phardata::addfile' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
    'localname=' => 'mixed',
  ),
  'phardata::addfromstring' => 
  array (
    0 => 'mixed',
    'localname' => 'mixed',
    'contents=' => 'mixed',
  ),
  'phardata::apiversion' => 
  array (
    0 => 'mixed',
  ),
  'phardata::buildfromdirectory' => 
  array (
    0 => 'mixed',
    'base_dir' => 'mixed',
    'regex=' => 'mixed',
  ),
  'phardata::buildfromiterator' => 
  array (
    0 => 'mixed',
    'iterator' => 'mixed',
    'base_directory=' => 'mixed',
  ),
  'phardata::cancompress' => 
  array (
    0 => 'mixed',
    'method=' => 'mixed',
  ),
  'phardata::canwrite' => 
  array (
    0 => 'mixed',
  ),
  'phardata::compress' => 
  array (
    0 => 'mixed',
    'compression_type' => 'mixed',
    'file_ext=' => 'mixed',
  ),
  'phardata::compressfiles' => 
  array (
    0 => 'mixed',
    'compression_type' => 'mixed',
  ),
  'phardata::converttodata' => 
  array (
    0 => 'mixed',
    'format=' => 'mixed',
    'compression_type=' => 'mixed',
    'file_ext=' => 'mixed',
  ),
  'phardata::converttoexecutable' => 
  array (
    0 => 'mixed',
    'format=' => 'mixed',
    'compression_type=' => 'mixed',
    'file_ext=' => 'mixed',
  ),
  'phardata::copy' => 
  array (
    0 => 'mixed',
    'newfile' => 'mixed',
    'oldfile' => 'mixed',
  ),
  'phardata::count' => 
  array (
    0 => 'mixed',
  ),
  'phardata::createdefaultstub' => 
  array (
    0 => 'mixed',
    'index=' => 'mixed',
    'webindex=' => 'mixed',
  ),
  'phardata::current' => 
  array (
    0 => 'mixed',
  ),
  'phardata::decompress' => 
  array (
    0 => 'mixed',
    'file_ext=' => 'mixed',
  ),
  'phardata::decompressfiles' => 
  array (
    0 => 'mixed',
  ),
  'phardata::delete' => 
  array (
    0 => 'mixed',
    'entry' => 'mixed',
  ),
  'phardata::delmetadata' => 
  array (
    0 => 'mixed',
  ),
  'phardata::extractto' => 
  array (
    0 => 'mixed',
    'pathto' => 'mixed',
    'files=' => 'mixed',
    'overwrite=' => 'mixed',
  ),
  'phardata::getalias' => 
  array (
    0 => 'mixed',
  ),
  'phardata::getatime' => 
  array (
    0 => 'mixed',
  ),
  'phardata::getbasename' => 
  array (
    0 => 'mixed',
    'suffix=' => 'mixed',
  ),
  'phardata::getchildren' => 
  array (
    0 => 'mixed',
  ),
  'phardata::getctime' => 
  array (
    0 => 'mixed',
  ),
  'phardata::getextension' => 
  array (
    0 => 'mixed',
  ),
  'phardata::getfileinfo' => 
  array (
    0 => 'mixed',
    'class_name=' => 'mixed',
  ),
  'phardata::getfilename' => 
  array (
    0 => 'mixed',
  ),
  'phardata::getflags' => 
  array (
    0 => 'mixed',
  ),
  'phardata::getgroup' => 
  array (
    0 => 'mixed',
  ),
  'phardata::getinode' => 
  array (
    0 => 'mixed',
  ),
  'phardata::getlinktarget' => 
  array (
    0 => 'mixed',
  ),
  'phardata::getmetadata' => 
  array (
    0 => 'mixed',
  ),
  'phardata::getmodified' => 
  array (
    0 => 'mixed',
  ),
  'phardata::getmtime' => 
  array (
    0 => 'mixed',
  ),
  'phardata::getowner' => 
  array (
    0 => 'mixed',
  ),
  'phardata::getpath' => 
  array (
    0 => 'mixed',
  ),
  'phardata::getpathinfo' => 
  array (
    0 => 'mixed',
    'class_name=' => 'mixed',
  ),
  'phardata::getpathname' => 
  array (
    0 => 'mixed',
  ),
  'phardata::getperms' => 
  array (
    0 => 'mixed',
  ),
  'phardata::getrealpath' => 
  array (
    0 => 'mixed',
  ),
  'phardata::getsignature' => 
  array (
    0 => 'mixed',
  ),
  'phardata::getsize' => 
  array (
    0 => 'mixed',
  ),
  'phardata::getstub' => 
  array (
    0 => 'mixed',
  ),
  'phardata::getsubpath' => 
  array (
    0 => 'mixed',
  ),
  'phardata::getsubpathname' => 
  array (
    0 => 'mixed',
  ),
  'phardata::getsupportedcompression' => 
  array (
    0 => 'mixed',
  ),
  'phardata::getsupportedsignatures' => 
  array (
    0 => 'mixed',
  ),
  'phardata::gettype' => 
  array (
    0 => 'mixed',
  ),
  'phardata::getversion' => 
  array (
    0 => 'mixed',
  ),
  'phardata::haschildren' => 
  array (
    0 => 'mixed',
    'allow_links=' => 'mixed',
  ),
  'phardata::hasmetadata' => 
  array (
    0 => 'mixed',
  ),
  'phardata::interceptfilefuncs' => 
  array (
    0 => 'mixed',
  ),
  'phardata::isbuffering' => 
  array (
    0 => 'mixed',
  ),
  'phardata::iscompressed' => 
  array (
    0 => 'mixed',
  ),
  'phardata::isdir' => 
  array (
    0 => 'mixed',
  ),
  'phardata::isdot' => 
  array (
    0 => 'mixed',
  ),
  'phardata::isexecutable' => 
  array (
    0 => 'mixed',
  ),
  'phardata::isfile' => 
  array (
    0 => 'mixed',
  ),
  'phardata::isfileformat' => 
  array (
    0 => 'mixed',
    'fileformat' => 'mixed',
  ),
  'phardata::islink' => 
  array (
    0 => 'mixed',
  ),
  'phardata::isreadable' => 
  array (
    0 => 'mixed',
  ),
  'phardata::isvalidpharfilename' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
    'executable=' => 'mixed',
  ),
  'phardata::iswritable' => 
  array (
    0 => 'mixed',
  ),
  'phardata::key' => 
  array (
    0 => 'mixed',
  ),
  'phardata::loadphar' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
    'alias=' => 'mixed',
  ),
  'phardata::mapphar' => 
  array (
    0 => 'mixed',
    'alias=' => 'mixed',
    'offset=' => 'mixed',
  ),
  'phardata::mount' => 
  array (
    0 => 'mixed',
    'inphar' => 'mixed',
    'externalfile' => 'mixed',
  ),
  'phardata::mungserver' => 
  array (
    0 => 'mixed',
    'munglist' => 'mixed',
  ),
  'phardata::next' => 
  array (
    0 => 'mixed',
  ),
  'phardata::offsetexists' => 
  array (
    0 => 'mixed',
    'entry' => 'mixed',
  ),
  'phardata::offsetget' => 
  array (
    0 => 'mixed',
    'entry' => 'mixed',
  ),
  'phardata::offsetset' => 
  array (
    0 => 'mixed',
    'entry' => 'mixed',
    'value' => 'mixed',
  ),
  'phardata::offsetunset' => 
  array (
    0 => 'mixed',
    'entry' => 'mixed',
  ),
  'phardata::openfile' => 
  array (
    0 => 'mixed',
    'open_mode=' => 'mixed',
    'use_include_path=' => 'mixed',
    'context=' => 'mixed',
  ),
  'phardata::rewind' => 
  array (
    0 => 'mixed',
  ),
  'phardata::running' => 
  array (
    0 => 'mixed',
    'retphar=' => 'mixed',
  ),
  'phardata::seek' => 
  array (
    0 => 'mixed',
    'position' => 'mixed',
  ),
  'phardata::setalias' => 
  array (
    0 => 'mixed',
    'alias' => 'mixed',
  ),
  'phardata::setdefaultstub' => 
  array (
    0 => 'mixed',
    'index=' => 'mixed',
    'webindex=' => 'mixed',
  ),
  'phardata::setfileclass' => 
  array (
    0 => 'mixed',
    'class_name=' => 'mixed',
  ),
  'phardata::setflags' => 
  array (
    0 => 'mixed',
    'flags=' => 'mixed',
  ),
  'phardata::setinfoclass' => 
  array (
    0 => 'mixed',
    'class_name=' => 'mixed',
  ),
  'phardata::setmetadata' => 
  array (
    0 => 'mixed',
    'metadata' => 'mixed',
  ),
  'phardata::setsignaturealgorithm' => 
  array (
    0 => 'mixed',
    'algorithm' => 'mixed',
    'privatekey=' => 'mixed',
  ),
  'phardata::setstub' => 
  array (
    0 => 'mixed',
    'newstub' => 'mixed',
    'maxlen=' => 'mixed',
  ),
  'phardata::startbuffering' => 
  array (
    0 => 'mixed',
  ),
  'phardata::stopbuffering' => 
  array (
    0 => 'mixed',
  ),
  'phardata::unlinkarchive' => 
  array (
    0 => 'mixed',
    'archive' => 'mixed',
  ),
  'phardata::valid' => 
  array (
    0 => 'mixed',
  ),
  'phardata::webphar' => 
  array (
    0 => 'mixed',
    'alias=' => 'mixed',
    'index=' => 'mixed',
    'f404=' => 'mixed',
    'mimetypes=' => 'mixed',
    'rewrites=' => 'mixed',
  ),
  'pharexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'pharexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'pharexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'pharexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'pharexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'pharexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'pharexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'pharexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'pharexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'pharexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'pharexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'pharfileinfo::__construct' => 
  array (
    0 => 'void',
    'filename' => 'mixed',
  ),
  'pharfileinfo::__destruct' => 
  array (
    0 => 'mixed',
  ),
  'pharfileinfo::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'pharfileinfo::_bad_state_ex' => 
  array (
    0 => 'mixed',
  ),
  'pharfileinfo::chmod' => 
  array (
    0 => 'mixed',
    'perms' => 'mixed',
  ),
  'pharfileinfo::compress' => 
  array (
    0 => 'mixed',
    'compression_type' => 'mixed',
  ),
  'pharfileinfo::decompress' => 
  array (
    0 => 'mixed',
  ),
  'pharfileinfo::delmetadata' => 
  array (
    0 => 'mixed',
  ),
  'pharfileinfo::getatime' => 
  array (
    0 => 'mixed',
  ),
  'pharfileinfo::getbasename' => 
  array (
    0 => 'mixed',
    'suffix=' => 'mixed',
  ),
  'pharfileinfo::getcompressedsize' => 
  array (
    0 => 'mixed',
  ),
  'pharfileinfo::getcontent' => 
  array (
    0 => 'mixed',
  ),
  'pharfileinfo::getcrc32' => 
  array (
    0 => 'mixed',
  ),
  'pharfileinfo::getctime' => 
  array (
    0 => 'mixed',
  ),
  'pharfileinfo::getextension' => 
  array (
    0 => 'mixed',
  ),
  'pharfileinfo::getfileinfo' => 
  array (
    0 => 'mixed',
    'class_name=' => 'mixed',
  ),
  'pharfileinfo::getfilename' => 
  array (
    0 => 'mixed',
  ),
  'pharfileinfo::getgroup' => 
  array (
    0 => 'mixed',
  ),
  'pharfileinfo::getinode' => 
  array (
    0 => 'mixed',
  ),
  'pharfileinfo::getlinktarget' => 
  array (
    0 => 'mixed',
  ),
  'pharfileinfo::getmetadata' => 
  array (
    0 => 'mixed',
  ),
  'pharfileinfo::getmtime' => 
  array (
    0 => 'mixed',
  ),
  'pharfileinfo::getowner' => 
  array (
    0 => 'mixed',
  ),
  'pharfileinfo::getpath' => 
  array (
    0 => 'mixed',
  ),
  'pharfileinfo::getpathinfo' => 
  array (
    0 => 'mixed',
    'class_name=' => 'mixed',
  ),
  'pharfileinfo::getpathname' => 
  array (
    0 => 'mixed',
  ),
  'pharfileinfo::getperms' => 
  array (
    0 => 'mixed',
  ),
  'pharfileinfo::getpharflags' => 
  array (
    0 => 'mixed',
  ),
  'pharfileinfo::getrealpath' => 
  array (
    0 => 'mixed',
  ),
  'pharfileinfo::getsize' => 
  array (
    0 => 'mixed',
  ),
  'pharfileinfo::gettype' => 
  array (
    0 => 'mixed',
  ),
  'pharfileinfo::hasmetadata' => 
  array (
    0 => 'mixed',
  ),
  'pharfileinfo::iscompressed' => 
  array (
    0 => 'mixed',
    'compression_type=' => 'mixed',
  ),
  'pharfileinfo::iscrcchecked' => 
  array (
    0 => 'mixed',
  ),
  'pharfileinfo::isdir' => 
  array (
    0 => 'mixed',
  ),
  'pharfileinfo::isexecutable' => 
  array (
    0 => 'mixed',
  ),
  'pharfileinfo::isfile' => 
  array (
    0 => 'mixed',
  ),
  'pharfileinfo::islink' => 
  array (
    0 => 'mixed',
  ),
  'pharfileinfo::isreadable' => 
  array (
    0 => 'mixed',
  ),
  'pharfileinfo::iswritable' => 
  array (
    0 => 'mixed',
  ),
  'pharfileinfo::openfile' => 
  array (
    0 => 'mixed',
    'open_mode=' => 'mixed',
    'use_include_path=' => 'mixed',
    'context=' => 'mixed',
  ),
  'pharfileinfo::setfileclass' => 
  array (
    0 => 'mixed',
    'class_name=' => 'mixed',
  ),
  'pharfileinfo::setinfoclass' => 
  array (
    0 => 'mixed',
    'class_name=' => 'mixed',
  ),
  'pharfileinfo::setmetadata' => 
  array (
    0 => 'mixed',
    'metadata' => 'mixed',
  ),
  'php_ini_loaded_file' => 
  array (
    0 => 'mixed',
  ),
  'php_ini_scanned_files' => 
  array (
    0 => 'mixed',
  ),
  'php_sapi_name' => 
  array (
    0 => 'mixed',
  ),
  'php_strip_whitespace' => 
  array (
    0 => 'mixed',
    'file_name' => 'mixed',
  ),
  'php_uname' => 
  array (
    0 => 'mixed',
    'mode=' => 'mixed',
  ),
  'php_user_filter::filter' => 
  array (
    0 => 'mixed',
    'in' => 'mixed',
    'out' => 'mixed',
    '&consumed' => 'mixed',
    'closing' => 'mixed',
  ),
  'php_user_filter::onclose' => 
  array (
    0 => 'mixed',
  ),
  'php_user_filter::oncreate' => 
  array (
    0 => 'mixed',
  ),
  'phpcredits' => 
  array (
    0 => 'mixed',
    'flag=' => 'mixed',
  ),
  'phpinfo' => 
  array (
    0 => 'mixed',
    'what=' => 'mixed',
  ),
  'phpversion' => 
  array (
    0 => 'mixed',
    'extension=' => 'mixed',
  ),
  'pi' => 
  array (
    0 => 'mixed',
  ),
  'png2wbmp' => 
  array (
    0 => 'mixed',
    'f_org' => 'mixed',
    'f_dest' => 'mixed',
    'd_height' => 'mixed',
    'd_width' => 'mixed',
    'd_threshold' => 'mixed',
  ),
  'popen' => 
  array (
    0 => 'mixed',
    'command' => 'mixed',
    'mode' => 'mixed',
  ),
  'pos' => 
  array (
    0 => 'mixed',
    'arg' => 'mixed',
  ),
  'posix_access' => 
  array (
    0 => 'mixed',
    'file' => 'mixed',
    'mode=' => 'mixed',
  ),
  'posix_ctermid' => 
  array (
    0 => 'mixed',
  ),
  'posix_errno' => 
  array (
    0 => 'mixed',
  ),
  'posix_get_last_error' => 
  array (
    0 => 'mixed',
  ),
  'posix_getcwd' => 
  array (
    0 => 'mixed',
  ),
  'posix_getegid' => 
  array (
    0 => 'mixed',
  ),
  'posix_geteuid' => 
  array (
    0 => 'mixed',
  ),
  'posix_getgid' => 
  array (
    0 => 'mixed',
  ),
  'posix_getgrgid' => 
  array (
    0 => 'mixed',
    'gid' => 'mixed',
  ),
  'posix_getgrnam' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
  ),
  'posix_getgroups' => 
  array (
    0 => 'mixed',
  ),
  'posix_getlogin' => 
  array (
    0 => 'mixed',
  ),
  'posix_getpgid' => 
  array (
    0 => 'mixed',
    'pid' => 'mixed',
  ),
  'posix_getpgrp' => 
  array (
    0 => 'mixed',
  ),
  'posix_getpid' => 
  array (
    0 => 'mixed',
  ),
  'posix_getppid' => 
  array (
    0 => 'mixed',
  ),
  'posix_getpwnam' => 
  array (
    0 => 'mixed',
    'username' => 'mixed',
  ),
  'posix_getpwuid' => 
  array (
    0 => 'mixed',
    'uid' => 'mixed',
  ),
  'posix_getrlimit' => 
  array (
    0 => 'mixed',
  ),
  'posix_getsid' => 
  array (
    0 => 'mixed',
    'pid' => 'mixed',
  ),
  'posix_getuid' => 
  array (
    0 => 'mixed',
  ),
  'posix_initgroups' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
    'base_group_id' => 'mixed',
  ),
  'posix_isatty' => 
  array (
    0 => 'mixed',
    'fd' => 'mixed',
  ),
  'posix_kill' => 
  array (
    0 => 'mixed',
    'pid' => 'mixed',
    'sig' => 'mixed',
  ),
  'posix_mkfifo' => 
  array (
    0 => 'mixed',
    'pathname' => 'mixed',
    'mode' => 'mixed',
  ),
  'posix_mknod' => 
  array (
    0 => 'mixed',
    'pathname' => 'mixed',
    'mode' => 'mixed',
    'major=' => 'mixed',
    'minor=' => 'mixed',
  ),
  'posix_setegid' => 
  array (
    0 => 'mixed',
    'gid' => 'mixed',
  ),
  'posix_seteuid' => 
  array (
    0 => 'mixed',
    'uid' => 'mixed',
  ),
  'posix_setgid' => 
  array (
    0 => 'mixed',
    'gid' => 'mixed',
  ),
  'posix_setpgid' => 
  array (
    0 => 'mixed',
    'pid' => 'mixed',
    'pgid' => 'mixed',
  ),
  'posix_setrlimit' => 
  array (
    0 => 'mixed',
    'resource' => 'mixed',
    'softlimit' => 'mixed',
    'hardlimit' => 'mixed',
  ),
  'posix_setsid' => 
  array (
    0 => 'mixed',
  ),
  'posix_setuid' => 
  array (
    0 => 'mixed',
    'uid' => 'mixed',
  ),
  'posix_strerror' => 
  array (
    0 => 'mixed',
    'errno' => 'mixed',
  ),
  'posix_times' => 
  array (
    0 => 'mixed',
  ),
  'posix_ttyname' => 
  array (
    0 => 'mixed',
    'fd' => 'mixed',
  ),
  'posix_uname' => 
  array (
    0 => 'mixed',
  ),
  'pow' => 
  array (
    0 => 'mixed',
    'base' => 'mixed',
    'exponent' => 'mixed',
  ),
  'preg_filter' => 
  array (
    0 => 'mixed',
    'regex' => 'mixed',
    'replace' => 'mixed',
    'subject' => 'mixed',
    'limit=' => 'mixed',
    '&count=' => 'mixed',
  ),
  'preg_grep' => 
  array (
    0 => 'mixed',
    'regex' => 'mixed',
    'input' => 'mixed',
    'flags=' => 'mixed',
  ),
  'preg_last_error' => 
  array (
    0 => 'mixed',
  ),
  'preg_match' => 
  array (
    0 => 'mixed',
    'pattern' => 'mixed',
    'subject' => 'mixed',
    '&subpatterns=' => 'mixed',
    'flags=' => 'mixed',
    'offset=' => 'mixed',
  ),
  'preg_match_all' => 
  array (
    0 => 'mixed',
    'pattern' => 'mixed',
    'subject' => 'mixed',
    '&subpatterns=' => 'mixed',
    'flags=' => 'mixed',
    'offset=' => 'mixed',
  ),
  'preg_quote' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
    'delim_char=' => 'mixed',
  ),
  'preg_replace' => 
  array (
    0 => 'mixed',
    'regex' => 'mixed',
    'replace' => 'mixed',
    'subject' => 'mixed',
    'limit=' => 'mixed',
    '&count=' => 'mixed',
  ),
  'preg_replace_callback' => 
  array (
    0 => 'mixed',
    'regex' => 'mixed',
    'callback' => 'mixed',
    'subject' => 'mixed',
    'limit=' => 'mixed',
    '&count=' => 'mixed',
  ),
  'preg_replace_callback_array' => 
  array (
    0 => 'mixed',
    'pattern' => 'mixed',
    'subject' => 'mixed',
    'limit=' => 'mixed',
    '&count=' => 'mixed',
  ),
  'preg_split' => 
  array (
    0 => 'mixed',
    'pattern' => 'mixed',
    'subject' => 'mixed',
    'limit=' => 'mixed',
    'flags=' => 'mixed',
  ),
  'prev' => 
  array (
    0 => 'mixed',
    '&arg' => 'mixed',
  ),
  'print_r' => 
  array (
    0 => 'mixed',
    'var' => 'mixed',
    'return=' => 'mixed',
  ),
  'printf' => 
  array (
    0 => 'mixed',
    'format' => 'mixed',
    '...args=' => 'mixed',
  ),
  'proc_close' => 
  array (
    0 => 'mixed',
    'process' => 'mixed',
  ),
  'proc_get_status' => 
  array (
    0 => 'mixed',
    'process' => 'mixed',
  ),
  'proc_nice' => 
  array (
    0 => 'mixed',
    'priority' => 'mixed',
  ),
  'proc_open' => 
  array (
    0 => 'mixed',
    'command' => 'mixed',
    'descriptorspec' => 'mixed',
    '&pipes' => 'mixed',
    'cwd=' => 'mixed',
    'env=' => 'mixed',
    'other_options=' => 'mixed',
  ),
  'proc_terminate' => 
  array (
    0 => 'mixed',
    'process' => 'mixed',
    'signal=' => 'mixed',
  ),
  'property_exists' => 
  array (
    0 => 'mixed',
    'object_or_class' => 'mixed',
    'property_name' => 'mixed',
  ),
  'putenv' => 
  array (
    0 => 'mixed',
    'setting' => 'mixed',
  ),
  'quoted_printable_decode' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
  ),
  'quoted_printable_encode' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
  ),
  'quotemeta' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
  ),
  'rad2deg' => 
  array (
    0 => 'mixed',
    'number' => 'mixed',
  ),
  'rand' => 
  array (
    0 => 'mixed',
    'min=' => 'mixed',
    'max=' => 'mixed',
  ),
  'random_bytes' => 
  array (
    0 => 'mixed',
    'length' => 'mixed',
  ),
  'random_int' => 
  array (
    0 => 'mixed',
    'min' => 'mixed',
    'max' => 'mixed',
  ),
  'range' => 
  array (
    0 => 'mixed',
    'low' => 'mixed',
    'high' => 'mixed',
    'step=' => 'mixed',
  ),
  'rangeexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'rangeexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'rangeexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'rangeexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'rangeexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'rangeexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'rangeexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'rangeexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'rangeexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'rangeexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'rangeexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'rawurldecode' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
  ),
  'rawurlencode' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
  ),
  'readdir' => 
  array (
    0 => 'mixed',
    'dir_handle=' => 'mixed',
  ),
  'readfile' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
    'flags=' => 'mixed',
    'context=' => 'mixed',
  ),
  'readgzfile' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
    'use_include_path=' => 'mixed',
  ),
  'readline' => 
  array (
    0 => 'mixed',
    'prompt=' => 'mixed',
  ),
  'readline_add_history' => 
  array (
    0 => 'mixed',
    'prompt' => 'mixed',
  ),
  'readline_callback_handler_install' => 
  array (
    0 => 'mixed',
    'prompt' => 'mixed',
    'callback' => 'mixed',
  ),
  'readline_callback_handler_remove' => 
  array (
    0 => 'mixed',
  ),
  'readline_callback_read_char' => 
  array (
    0 => 'mixed',
  ),
  'readline_clear_history' => 
  array (
    0 => 'mixed',
  ),
  'readline_completion_function' => 
  array (
    0 => 'mixed',
    'funcname' => 'mixed',
  ),
  'readline_info' => 
  array (
    0 => 'mixed',
    'varname=' => 'mixed',
    'newvalue=' => 'mixed',
  ),
  'readline_list_history' => 
  array (
    0 => 'mixed',
  ),
  'readline_on_new_line' => 
  array (
    0 => 'mixed',
  ),
  'readline_read_history' => 
  array (
    0 => 'mixed',
    'filename=' => 'mixed',
  ),
  'readline_redisplay' => 
  array (
    0 => 'mixed',
  ),
  'readline_write_history' => 
  array (
    0 => 'mixed',
    'filename=' => 'mixed',
  ),
  'readlink' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'realpath' => 
  array (
    0 => 'mixed',
    'path' => 'mixed',
  ),
  'realpath_cache_get' => 
  array (
    0 => 'mixed',
  ),
  'realpath_cache_size' => 
  array (
    0 => 'mixed',
  ),
  'recursivearrayiterator::__construct' => 
  array (
    0 => 'void',
    'array=' => 'mixed',
    'ar_flags=' => 'mixed',
  ),
  'recursivearrayiterator::append' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'recursivearrayiterator::asort' => 
  array (
    0 => 'mixed',
  ),
  'recursivearrayiterator::count' => 
  array (
    0 => 'mixed',
  ),
  'recursivearrayiterator::current' => 
  array (
    0 => 'mixed',
  ),
  'recursivearrayiterator::getarraycopy' => 
  array (
    0 => 'mixed',
  ),
  'recursivearrayiterator::getchildren' => 
  array (
    0 => 'mixed',
  ),
  'recursivearrayiterator::getflags' => 
  array (
    0 => 'mixed',
  ),
  'recursivearrayiterator::haschildren' => 
  array (
    0 => 'mixed',
  ),
  'recursivearrayiterator::key' => 
  array (
    0 => 'mixed',
  ),
  'recursivearrayiterator::ksort' => 
  array (
    0 => 'mixed',
  ),
  'recursivearrayiterator::natcasesort' => 
  array (
    0 => 'mixed',
  ),
  'recursivearrayiterator::natsort' => 
  array (
    0 => 'mixed',
  ),
  'recursivearrayiterator::next' => 
  array (
    0 => 'mixed',
  ),
  'recursivearrayiterator::offsetexists' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'recursivearrayiterator::offsetget' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'recursivearrayiterator::offsetset' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
    'newval' => 'mixed',
  ),
  'recursivearrayiterator::offsetunset' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'recursivearrayiterator::rewind' => 
  array (
    0 => 'mixed',
  ),
  'recursivearrayiterator::seek' => 
  array (
    0 => 'mixed',
    'position' => 'mixed',
  ),
  'recursivearrayiterator::serialize' => 
  array (
    0 => 'mixed',
  ),
  'recursivearrayiterator::setflags' => 
  array (
    0 => 'mixed',
    'flags' => 'mixed',
  ),
  'recursivearrayiterator::uasort' => 
  array (
    0 => 'mixed',
    'cmp_function' => 'mixed',
  ),
  'recursivearrayiterator::uksort' => 
  array (
    0 => 'mixed',
    'cmp_function' => 'mixed',
  ),
  'recursivearrayiterator::unserialize' => 
  array (
    0 => 'mixed',
    'serialized' => 'mixed',
  ),
  'recursivearrayiterator::valid' => 
  array (
    0 => 'mixed',
  ),
  'recursivecachingiterator::__construct' => 
  array (
    0 => 'void',
    'iterator' => 'Iterator',
    'flags=' => 'mixed',
  ),
  'recursivecachingiterator::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'recursivecachingiterator::count' => 
  array (
    0 => 'mixed',
  ),
  'recursivecachingiterator::current' => 
  array (
    0 => 'mixed',
  ),
  'recursivecachingiterator::getcache' => 
  array (
    0 => 'mixed',
  ),
  'recursivecachingiterator::getchildren' => 
  array (
    0 => 'mixed',
  ),
  'recursivecachingiterator::getflags' => 
  array (
    0 => 'mixed',
  ),
  'recursivecachingiterator::getinneriterator' => 
  array (
    0 => 'mixed',
  ),
  'recursivecachingiterator::haschildren' => 
  array (
    0 => 'mixed',
  ),
  'recursivecachingiterator::hasnext' => 
  array (
    0 => 'mixed',
  ),
  'recursivecachingiterator::key' => 
  array (
    0 => 'mixed',
  ),
  'recursivecachingiterator::next' => 
  array (
    0 => 'mixed',
  ),
  'recursivecachingiterator::offsetexists' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'recursivecachingiterator::offsetget' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'recursivecachingiterator::offsetset' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
    'newval' => 'mixed',
  ),
  'recursivecachingiterator::offsetunset' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'recursivecachingiterator::rewind' => 
  array (
    0 => 'mixed',
  ),
  'recursivecachingiterator::setflags' => 
  array (
    0 => 'mixed',
    'flags' => 'mixed',
  ),
  'recursivecachingiterator::valid' => 
  array (
    0 => 'mixed',
  ),
  'recursivecallbackfilteriterator::__construct' => 
  array (
    0 => 'void',
    'iterator' => 'RecursiveIterator',
    'callback' => 'mixed',
  ),
  'recursivecallbackfilteriterator::accept' => 
  array (
    0 => 'mixed',
  ),
  'recursivecallbackfilteriterator::current' => 
  array (
    0 => 'mixed',
  ),
  'recursivecallbackfilteriterator::getchildren' => 
  array (
    0 => 'mixed',
  ),
  'recursivecallbackfilteriterator::getinneriterator' => 
  array (
    0 => 'mixed',
  ),
  'recursivecallbackfilteriterator::haschildren' => 
  array (
    0 => 'mixed',
  ),
  'recursivecallbackfilteriterator::key' => 
  array (
    0 => 'mixed',
  ),
  'recursivecallbackfilteriterator::next' => 
  array (
    0 => 'mixed',
  ),
  'recursivecallbackfilteriterator::rewind' => 
  array (
    0 => 'mixed',
  ),
  'recursivecallbackfilteriterator::valid' => 
  array (
    0 => 'mixed',
  ),
  'recursivedirectoryiterator::__construct' => 
  array (
    0 => 'void',
    'path' => 'mixed',
    'flags=' => 'mixed',
  ),
  'recursivedirectoryiterator::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'recursivedirectoryiterator::_bad_state_ex' => 
  array (
    0 => 'mixed',
  ),
  'recursivedirectoryiterator::current' => 
  array (
    0 => 'mixed',
  ),
  'recursivedirectoryiterator::getatime' => 
  array (
    0 => 'mixed',
  ),
  'recursivedirectoryiterator::getbasename' => 
  array (
    0 => 'mixed',
    'suffix=' => 'mixed',
  ),
  'recursivedirectoryiterator::getchildren' => 
  array (
    0 => 'mixed',
  ),
  'recursivedirectoryiterator::getctime' => 
  array (
    0 => 'mixed',
  ),
  'recursivedirectoryiterator::getextension' => 
  array (
    0 => 'mixed',
  ),
  'recursivedirectoryiterator::getfileinfo' => 
  array (
    0 => 'mixed',
    'class_name=' => 'mixed',
  ),
  'recursivedirectoryiterator::getfilename' => 
  array (
    0 => 'mixed',
  ),
  'recursivedirectoryiterator::getflags' => 
  array (
    0 => 'mixed',
  ),
  'recursivedirectoryiterator::getgroup' => 
  array (
    0 => 'mixed',
  ),
  'recursivedirectoryiterator::getinode' => 
  array (
    0 => 'mixed',
  ),
  'recursivedirectoryiterator::getlinktarget' => 
  array (
    0 => 'mixed',
  ),
  'recursivedirectoryiterator::getmtime' => 
  array (
    0 => 'mixed',
  ),
  'recursivedirectoryiterator::getowner' => 
  array (
    0 => 'mixed',
  ),
  'recursivedirectoryiterator::getpath' => 
  array (
    0 => 'mixed',
  ),
  'recursivedirectoryiterator::getpathinfo' => 
  array (
    0 => 'mixed',
    'class_name=' => 'mixed',
  ),
  'recursivedirectoryiterator::getpathname' => 
  array (
    0 => 'mixed',
  ),
  'recursivedirectoryiterator::getperms' => 
  array (
    0 => 'mixed',
  ),
  'recursivedirectoryiterator::getrealpath' => 
  array (
    0 => 'mixed',
  ),
  'recursivedirectoryiterator::getsize' => 
  array (
    0 => 'mixed',
  ),
  'recursivedirectoryiterator::getsubpath' => 
  array (
    0 => 'mixed',
  ),
  'recursivedirectoryiterator::getsubpathname' => 
  array (
    0 => 'mixed',
  ),
  'recursivedirectoryiterator::gettype' => 
  array (
    0 => 'mixed',
  ),
  'recursivedirectoryiterator::haschildren' => 
  array (
    0 => 'mixed',
    'allow_links=' => 'mixed',
  ),
  'recursivedirectoryiterator::isdir' => 
  array (
    0 => 'mixed',
  ),
  'recursivedirectoryiterator::isdot' => 
  array (
    0 => 'mixed',
  ),
  'recursivedirectoryiterator::isexecutable' => 
  array (
    0 => 'mixed',
  ),
  'recursivedirectoryiterator::isfile' => 
  array (
    0 => 'mixed',
  ),
  'recursivedirectoryiterator::islink' => 
  array (
    0 => 'mixed',
  ),
  'recursivedirectoryiterator::isreadable' => 
  array (
    0 => 'mixed',
  ),
  'recursivedirectoryiterator::iswritable' => 
  array (
    0 => 'mixed',
  ),
  'recursivedirectoryiterator::key' => 
  array (
    0 => 'mixed',
  ),
  'recursivedirectoryiterator::next' => 
  array (
    0 => 'mixed',
  ),
  'recursivedirectoryiterator::openfile' => 
  array (
    0 => 'mixed',
    'open_mode=' => 'mixed',
    'use_include_path=' => 'mixed',
    'context=' => 'mixed',
  ),
  'recursivedirectoryiterator::rewind' => 
  array (
    0 => 'mixed',
  ),
  'recursivedirectoryiterator::seek' => 
  array (
    0 => 'mixed',
    'position' => 'mixed',
  ),
  'recursivedirectoryiterator::setfileclass' => 
  array (
    0 => 'mixed',
    'class_name=' => 'mixed',
  ),
  'recursivedirectoryiterator::setflags' => 
  array (
    0 => 'mixed',
    'flags=' => 'mixed',
  ),
  'recursivedirectoryiterator::setinfoclass' => 
  array (
    0 => 'mixed',
    'class_name=' => 'mixed',
  ),
  'recursivedirectoryiterator::valid' => 
  array (
    0 => 'mixed',
  ),
  'recursivefilteriterator::__construct' => 
  array (
    0 => 'void',
    'iterator' => 'RecursiveIterator',
  ),
  'recursivefilteriterator::accept' => 
  array (
    0 => 'mixed',
  ),
  'recursivefilteriterator::current' => 
  array (
    0 => 'mixed',
  ),
  'recursivefilteriterator::getchildren' => 
  array (
    0 => 'mixed',
  ),
  'recursivefilteriterator::getinneriterator' => 
  array (
    0 => 'mixed',
  ),
  'recursivefilteriterator::haschildren' => 
  array (
    0 => 'mixed',
  ),
  'recursivefilteriterator::key' => 
  array (
    0 => 'mixed',
  ),
  'recursivefilteriterator::next' => 
  array (
    0 => 'mixed',
  ),
  'recursivefilteriterator::rewind' => 
  array (
    0 => 'mixed',
  ),
  'recursivefilteriterator::valid' => 
  array (
    0 => 'mixed',
  ),
  'recursiveiteratoriterator::__construct' => 
  array (
    0 => 'void',
    'iterator' => 'Traversable',
    'mode=' => 'mixed',
    'flags=' => 'mixed',
  ),
  'recursiveiteratoriterator::beginchildren' => 
  array (
    0 => 'mixed',
  ),
  'recursiveiteratoriterator::beginiteration' => 
  array (
    0 => 'mixed',
  ),
  'recursiveiteratoriterator::callgetchildren' => 
  array (
    0 => 'mixed',
  ),
  'recursiveiteratoriterator::callhaschildren' => 
  array (
    0 => 'mixed',
  ),
  'recursiveiteratoriterator::current' => 
  array (
    0 => 'mixed',
  ),
  'recursiveiteratoriterator::endchildren' => 
  array (
    0 => 'mixed',
  ),
  'recursiveiteratoriterator::enditeration' => 
  array (
    0 => 'mixed',
  ),
  'recursiveiteratoriterator::getdepth' => 
  array (
    0 => 'mixed',
  ),
  'recursiveiteratoriterator::getinneriterator' => 
  array (
    0 => 'mixed',
  ),
  'recursiveiteratoriterator::getmaxdepth' => 
  array (
    0 => 'mixed',
  ),
  'recursiveiteratoriterator::getsubiterator' => 
  array (
    0 => 'mixed',
    'level=' => 'mixed',
  ),
  'recursiveiteratoriterator::key' => 
  array (
    0 => 'mixed',
  ),
  'recursiveiteratoriterator::next' => 
  array (
    0 => 'mixed',
  ),
  'recursiveiteratoriterator::nextelement' => 
  array (
    0 => 'mixed',
  ),
  'recursiveiteratoriterator::rewind' => 
  array (
    0 => 'mixed',
  ),
  'recursiveiteratoriterator::setmaxdepth' => 
  array (
    0 => 'mixed',
    'max_depth=' => 'mixed',
  ),
  'recursiveiteratoriterator::valid' => 
  array (
    0 => 'mixed',
  ),
  'recursiveregexiterator::__construct' => 
  array (
    0 => 'void',
    'iterator' => 'RecursiveIterator',
    'regex' => 'mixed',
    'mode=' => 'mixed',
    'flags=' => 'mixed',
    'preg_flags=' => 'mixed',
  ),
  'recursiveregexiterator::accept' => 
  array (
    0 => 'mixed',
  ),
  'recursiveregexiterator::current' => 
  array (
    0 => 'mixed',
  ),
  'recursiveregexiterator::getchildren' => 
  array (
    0 => 'mixed',
  ),
  'recursiveregexiterator::getflags' => 
  array (
    0 => 'mixed',
  ),
  'recursiveregexiterator::getinneriterator' => 
  array (
    0 => 'mixed',
  ),
  'recursiveregexiterator::getmode' => 
  array (
    0 => 'mixed',
  ),
  'recursiveregexiterator::getpregflags' => 
  array (
    0 => 'mixed',
  ),
  'recursiveregexiterator::getregex' => 
  array (
    0 => 'mixed',
  ),
  'recursiveregexiterator::haschildren' => 
  array (
    0 => 'mixed',
  ),
  'recursiveregexiterator::key' => 
  array (
    0 => 'mixed',
  ),
  'recursiveregexiterator::next' => 
  array (
    0 => 'mixed',
  ),
  'recursiveregexiterator::rewind' => 
  array (
    0 => 'mixed',
  ),
  'recursiveregexiterator::setflags' => 
  array (
    0 => 'mixed',
    'flags' => 'mixed',
  ),
  'recursiveregexiterator::setmode' => 
  array (
    0 => 'mixed',
    'mode' => 'mixed',
  ),
  'recursiveregexiterator::setpregflags' => 
  array (
    0 => 'mixed',
    'preg_flags' => 'mixed',
  ),
  'recursiveregexiterator::valid' => 
  array (
    0 => 'mixed',
  ),
  'recursivetreeiterator::__construct' => 
  array (
    0 => 'void',
    'iterator' => 'Traversable',
    'flags=' => 'mixed',
    'caching_it_flags=' => 'mixed',
    'mode=' => 'mixed',
  ),
  'recursivetreeiterator::beginchildren' => 
  array (
    0 => 'mixed',
  ),
  'recursivetreeiterator::beginiteration' => 
  array (
    0 => 'mixed',
  ),
  'recursivetreeiterator::callgetchildren' => 
  array (
    0 => 'mixed',
  ),
  'recursivetreeiterator::callhaschildren' => 
  array (
    0 => 'mixed',
  ),
  'recursivetreeiterator::current' => 
  array (
    0 => 'mixed',
  ),
  'recursivetreeiterator::endchildren' => 
  array (
    0 => 'mixed',
  ),
  'recursivetreeiterator::enditeration' => 
  array (
    0 => 'mixed',
  ),
  'recursivetreeiterator::getdepth' => 
  array (
    0 => 'mixed',
  ),
  'recursivetreeiterator::getentry' => 
  array (
    0 => 'mixed',
  ),
  'recursivetreeiterator::getinneriterator' => 
  array (
    0 => 'mixed',
  ),
  'recursivetreeiterator::getmaxdepth' => 
  array (
    0 => 'mixed',
  ),
  'recursivetreeiterator::getpostfix' => 
  array (
    0 => 'mixed',
  ),
  'recursivetreeiterator::getprefix' => 
  array (
    0 => 'mixed',
  ),
  'recursivetreeiterator::getsubiterator' => 
  array (
    0 => 'mixed',
    'level=' => 'mixed',
  ),
  'recursivetreeiterator::key' => 
  array (
    0 => 'mixed',
  ),
  'recursivetreeiterator::next' => 
  array (
    0 => 'mixed',
  ),
  'recursivetreeiterator::nextelement' => 
  array (
    0 => 'mixed',
  ),
  'recursivetreeiterator::rewind' => 
  array (
    0 => 'mixed',
  ),
  'recursivetreeiterator::setmaxdepth' => 
  array (
    0 => 'mixed',
    'max_depth=' => 'mixed',
  ),
  'recursivetreeiterator::setpostfix' => 
  array (
    0 => 'mixed',
    'postfix' => 'mixed',
  ),
  'recursivetreeiterator::setprefixpart' => 
  array (
    0 => 'mixed',
    'part' => 'mixed',
    'value' => 'mixed',
  ),
  'recursivetreeiterator::valid' => 
  array (
    0 => 'mixed',
  ),
  'redis::__construct' => 
  array (
    0 => 'void',
    'options=' => 'mixed',
  ),
  'redis::__destruct' => 
  array (
    0 => 'mixed',
  ),
  'redis::_compress' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'redis::_pack' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'redis::_prefix' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'redis::_serialize' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'redis::_uncompress' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'redis::_unpack' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'redis::_unserialize' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'redis::acl' => 
  array (
    0 => 'mixed',
    'subcmd' => 'mixed',
    '...args=' => 'mixed',
  ),
  'redis::append' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'redis::auth' => 
  array (
    0 => 'mixed',
    'credentials' => 'mixed',
  ),
  'redis::bgrewriteaof' => 
  array (
    0 => 'mixed',
  ),
  'redis::bgsave' => 
  array (
    0 => 'mixed',
  ),
  'redis::bitcount' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start=' => 'mixed',
    'end=' => 'mixed',
    'bybit=' => 'mixed',
  ),
  'redis::bitop' => 
  array (
    0 => 'mixed',
    'operation' => 'mixed',
    'deskey' => 'mixed',
    'srckey' => 'mixed',
    '...other_keys=' => 'mixed',
  ),
  'redis::bitpos' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'bit' => 'mixed',
    'start=' => 'mixed',
    'end=' => 'mixed',
    'bybit=' => 'mixed',
  ),
  'redis::blmove' => 
  array (
    0 => 'mixed',
    'src' => 'mixed',
    'dst' => 'mixed',
    'wherefrom' => 'mixed',
    'whereto' => 'mixed',
    'timeout' => 'mixed',
  ),
  'redis::blmpop' => 
  array (
    0 => 'mixed',
    'timeout' => 'mixed',
    'keys' => 'mixed',
    'from' => 'mixed',
    'count=' => 'mixed',
  ),
  'redis::blpop' => 
  array (
    0 => 'mixed',
    'key_or_keys' => 'mixed',
    'timeout_or_key' => 'mixed',
    '...extra_args=' => 'mixed',
  ),
  'redis::brpop' => 
  array (
    0 => 'mixed',
    'key_or_keys' => 'mixed',
    'timeout_or_key' => 'mixed',
    '...extra_args=' => 'mixed',
  ),
  'redis::brpoplpush' => 
  array (
    0 => 'mixed',
    'src' => 'mixed',
    'dst' => 'mixed',
    'timeout' => 'mixed',
  ),
  'redis::bzmpop' => 
  array (
    0 => 'mixed',
    'timeout' => 'mixed',
    'keys' => 'mixed',
    'from' => 'mixed',
    'count=' => 'mixed',
  ),
  'redis::bzpopmax' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'timeout_or_key' => 'mixed',
    '...extra_args=' => 'mixed',
  ),
  'redis::bzpopmin' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'timeout_or_key' => 'mixed',
    '...extra_args=' => 'mixed',
  ),
  'redis::clearlasterror' => 
  array (
    0 => 'mixed',
  ),
  'redis::cleartransferredbytes' => 
  array (
    0 => 'mixed',
  ),
  'redis::client' => 
  array (
    0 => 'mixed',
    'opt' => 'mixed',
    '...args=' => 'mixed',
  ),
  'redis::close' => 
  array (
    0 => 'mixed',
  ),
  'redis::command' => 
  array (
    0 => 'mixed',
    'opt=' => 'mixed',
    '...args=' => 'mixed',
  ),
  'redis::config' => 
  array (
    0 => 'mixed',
    'operation' => 'mixed',
    'key_or_settings=' => 'mixed',
    'value=' => 'mixed',
  ),
  'redis::connect' => 
  array (
    0 => 'mixed',
    'host' => 'mixed',
    'port=' => 'mixed',
    'timeout=' => 'mixed',
    'persistent_id=' => 'mixed',
    'retry_interval=' => 'mixed',
    'read_timeout=' => 'mixed',
    'context=' => 'mixed',
  ),
  'redis::copy' => 
  array (
    0 => 'mixed',
    'src' => 'mixed',
    'dst' => 'mixed',
    'options=' => 'mixed',
  ),
  'redis::dbsize' => 
  array (
    0 => 'mixed',
  ),
  'redis::debug' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'redis::decr' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'by=' => 'mixed',
  ),
  'redis::decrby' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'redis::del' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    '...other_keys=' => 'mixed',
  ),
  'redis::delete' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    '...other_keys=' => 'mixed',
  ),
  'redis::discard' => 
  array (
    0 => 'mixed',
  ),
  'redis::dump' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'redis::echo' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
  ),
  'redis::eval' => 
  array (
    0 => 'mixed',
    'script' => 'mixed',
    'args=' => 'mixed',
    'num_keys=' => 'mixed',
  ),
  'redis::eval_ro' => 
  array (
    0 => 'mixed',
    'script_sha' => 'mixed',
    'args=' => 'mixed',
    'num_keys=' => 'mixed',
  ),
  'redis::evalsha' => 
  array (
    0 => 'mixed',
    'sha1' => 'mixed',
    'args=' => 'mixed',
    'num_keys=' => 'mixed',
  ),
  'redis::evalsha_ro' => 
  array (
    0 => 'mixed',
    'sha1' => 'mixed',
    'args=' => 'mixed',
    'num_keys=' => 'mixed',
  ),
  'redis::exec' => 
  array (
    0 => 'mixed',
  ),
  'redis::exists' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    '...other_keys=' => 'mixed',
  ),
  'redis::expire' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'timeout' => 'mixed',
    'mode=' => 'mixed',
  ),
  'redis::expireat' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'timestamp' => 'mixed',
    'mode=' => 'mixed',
  ),
  'redis::expiretime' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'redis::failover' => 
  array (
    0 => 'mixed',
    'to=' => 'mixed',
    'abort=' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'redis::fcall' => 
  array (
    0 => 'mixed',
    'fn' => 'mixed',
    'keys=' => 'mixed',
    'args=' => 'mixed',
  ),
  'redis::fcall_ro' => 
  array (
    0 => 'mixed',
    'fn' => 'mixed',
    'keys=' => 'mixed',
    'args=' => 'mixed',
  ),
  'redis::flushall' => 
  array (
    0 => 'mixed',
    'sync=' => 'mixed',
  ),
  'redis::flushdb' => 
  array (
    0 => 'mixed',
    'sync=' => 'mixed',
  ),
  'redis::function' => 
  array (
    0 => 'mixed',
    'operation' => 'mixed',
    '...args=' => 'mixed',
  ),
  'redis::geoadd' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'lng' => 'mixed',
    'lat' => 'mixed',
    'member' => 'mixed',
    '...other_triples_and_options=' => 'mixed',
  ),
  'redis::geodist' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'src' => 'mixed',
    'dst' => 'mixed',
    'unit=' => 'mixed',
  ),
  'redis::geohash' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
    '...other_members=' => 'mixed',
  ),
  'redis::geopos' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
    '...other_members=' => 'mixed',
  ),
  'redis::georadius' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'lng' => 'mixed',
    'lat' => 'mixed',
    'radius' => 'mixed',
    'unit' => 'mixed',
    'options=' => 'mixed',
  ),
  'redis::georadius_ro' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'lng' => 'mixed',
    'lat' => 'mixed',
    'radius' => 'mixed',
    'unit' => 'mixed',
    'options=' => 'mixed',
  ),
  'redis::georadiusbymember' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
    'radius' => 'mixed',
    'unit' => 'mixed',
    'options=' => 'mixed',
  ),
  'redis::georadiusbymember_ro' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
    'radius' => 'mixed',
    'unit' => 'mixed',
    'options=' => 'mixed',
  ),
  'redis::geosearch' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'position' => 'mixed',
    'shape' => 'mixed',
    'unit' => 'mixed',
    'options=' => 'mixed',
  ),
  'redis::geosearchstore' => 
  array (
    0 => 'mixed',
    'dst' => 'mixed',
    'src' => 'mixed',
    'position' => 'mixed',
    'shape' => 'mixed',
    'unit' => 'mixed',
    'options=' => 'mixed',
  ),
  'redis::get' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'redis::getauth' => 
  array (
    0 => 'mixed',
  ),
  'redis::getbit' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'idx' => 'mixed',
  ),
  'redis::getdbnum' => 
  array (
    0 => 'mixed',
  ),
  'redis::getdel' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'redis::getex' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'options=' => 'mixed',
  ),
  'redis::gethost' => 
  array (
    0 => 'mixed',
  ),
  'redis::getlasterror' => 
  array (
    0 => 'mixed',
  ),
  'redis::getmode' => 
  array (
    0 => 'mixed',
  ),
  'redis::getoption' => 
  array (
    0 => 'mixed',
    'option' => 'mixed',
  ),
  'redis::getpersistentid' => 
  array (
    0 => 'mixed',
  ),
  'redis::getport' => 
  array (
    0 => 'mixed',
  ),
  'redis::getrange' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start' => 'mixed',
    'end' => 'mixed',
  ),
  'redis::getreadtimeout' => 
  array (
    0 => 'mixed',
  ),
  'redis::getset' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'redis::gettimeout' => 
  array (
    0 => 'mixed',
  ),
  'redis::gettransferredbytes' => 
  array (
    0 => 'mixed',
  ),
  'redis::hdel' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'field' => 'mixed',
    '...other_fields=' => 'mixed',
  ),
  'redis::hexists' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'field' => 'mixed',
  ),
  'redis::hget' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
  ),
  'redis::hgetall' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'redis::hincrby' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'field' => 'mixed',
    'value' => 'mixed',
  ),
  'redis::hincrbyfloat' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'field' => 'mixed',
    'value' => 'mixed',
  ),
  'redis::hkeys' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'redis::hlen' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'redis::hmget' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'fields' => 'mixed',
  ),
  'redis::hmset' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'fieldvals' => 'mixed',
  ),
  'redis::hrandfield' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'options=' => 'mixed',
  ),
  'redis::hscan' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    '&iterator' => 'mixed',
    'pattern=' => 'mixed',
    'count=' => 'mixed',
  ),
  'redis::hset' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
    'value' => 'mixed',
  ),
  'redis::hsetnx' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'field' => 'mixed',
    'value' => 'mixed',
  ),
  'redis::hstrlen' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'field' => 'mixed',
  ),
  'redis::hvals' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'redis::incr' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'by=' => 'mixed',
  ),
  'redis::incrby' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'redis::incrbyfloat' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'redis::info' => 
  array (
    0 => 'mixed',
    '...sections=' => 'mixed',
  ),
  'redis::isconnected' => 
  array (
    0 => 'mixed',
  ),
  'redis::keys' => 
  array (
    0 => 'mixed',
    'pattern' => 'mixed',
  ),
  'redis::lastsave' => 
  array (
    0 => 'mixed',
  ),
  'redis::lcs' => 
  array (
    0 => 'mixed',
    'key1' => 'mixed',
    'key2' => 'mixed',
    'options=' => 'mixed',
  ),
  'redis::lindex' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'index' => 'mixed',
  ),
  'redis::linsert' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'pos' => 'mixed',
    'pivot' => 'mixed',
    'value' => 'mixed',
  ),
  'redis::llen' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'redis::lmove' => 
  array (
    0 => 'mixed',
    'src' => 'mixed',
    'dst' => 'mixed',
    'wherefrom' => 'mixed',
    'whereto' => 'mixed',
  ),
  'redis::lmpop' => 
  array (
    0 => 'mixed',
    'keys' => 'mixed',
    'from' => 'mixed',
    'count=' => 'mixed',
  ),
  'redis::lpop' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'count=' => 'mixed',
  ),
  'redis::lpos' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
    'options=' => 'mixed',
  ),
  'redis::lpush' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    '...elements=' => 'mixed',
  ),
  'redis::lpushx' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'redis::lrange' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start' => 'mixed',
    'end' => 'mixed',
  ),
  'redis::lrem' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
    'count=' => 'mixed',
  ),
  'redis::lset' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'index' => 'mixed',
    'value' => 'mixed',
  ),
  'redis::ltrim' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start' => 'mixed',
    'end' => 'mixed',
  ),
  'redis::mget' => 
  array (
    0 => 'mixed',
    'keys' => 'mixed',
  ),
  'redis::migrate' => 
  array (
    0 => 'mixed',
    'host' => 'mixed',
    'port' => 'mixed',
    'key' => 'mixed',
    'dstdb' => 'mixed',
    'timeout' => 'mixed',
    'copy=' => 'mixed',
    'replace=' => 'mixed',
    'credentials=' => 'mixed',
  ),
  'redis::move' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'index' => 'mixed',
  ),
  'redis::mset' => 
  array (
    0 => 'mixed',
    'key_values' => 'mixed',
  ),
  'redis::msetnx' => 
  array (
    0 => 'mixed',
    'key_values' => 'mixed',
  ),
  'redis::multi' => 
  array (
    0 => 'mixed',
    'value=' => 'mixed',
  ),
  'redis::object' => 
  array (
    0 => 'mixed',
    'subcommand' => 'mixed',
    'key' => 'mixed',
  ),
  'redis::open' => 
  array (
    0 => 'mixed',
    'host' => 'mixed',
    'port=' => 'mixed',
    'timeout=' => 'mixed',
    'persistent_id=' => 'mixed',
    'retry_interval=' => 'mixed',
    'read_timeout=' => 'mixed',
    'context=' => 'mixed',
  ),
  'redis::pconnect' => 
  array (
    0 => 'mixed',
    'host' => 'mixed',
    'port=' => 'mixed',
    'timeout=' => 'mixed',
    'persistent_id=' => 'mixed',
    'retry_interval=' => 'mixed',
    'read_timeout=' => 'mixed',
    'context=' => 'mixed',
  ),
  'redis::persist' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'redis::pexpire' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'timeout' => 'mixed',
    'mode=' => 'mixed',
  ),
  'redis::pexpireat' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'timestamp' => 'mixed',
    'mode=' => 'mixed',
  ),
  'redis::pexpiretime' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'redis::pfadd' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'elements' => 'mixed',
  ),
  'redis::pfcount' => 
  array (
    0 => 'mixed',
    'key_or_keys' => 'mixed',
  ),
  'redis::pfmerge' => 
  array (
    0 => 'mixed',
    'dst' => 'mixed',
    'srckeys' => 'mixed',
  ),
  'redis::ping' => 
  array (
    0 => 'mixed',
    'message=' => 'mixed',
  ),
  'redis::pipeline' => 
  array (
    0 => 'mixed',
  ),
  'redis::popen' => 
  array (
    0 => 'mixed',
    'host' => 'mixed',
    'port=' => 'mixed',
    'timeout=' => 'mixed',
    'persistent_id=' => 'mixed',
    'retry_interval=' => 'mixed',
    'read_timeout=' => 'mixed',
    'context=' => 'mixed',
  ),
  'redis::psetex' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'expire' => 'mixed',
    'value' => 'mixed',
  ),
  'redis::psubscribe' => 
  array (
    0 => 'mixed',
    'patterns' => 'mixed',
    'cb' => 'mixed',
  ),
  'redis::pttl' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'redis::publish' => 
  array (
    0 => 'mixed',
    'channel' => 'mixed',
    'message' => 'mixed',
  ),
  'redis::pubsub' => 
  array (
    0 => 'mixed',
    'command' => 'mixed',
    'arg=' => 'mixed',
  ),
  'redis::punsubscribe' => 
  array (
    0 => 'mixed',
    'patterns' => 'mixed',
  ),
  'redis::randomkey' => 
  array (
    0 => 'mixed',
  ),
  'redis::rawcommand' => 
  array (
    0 => 'mixed',
    'command' => 'mixed',
    '...args=' => 'mixed',
  ),
  'redis::rename' => 
  array (
    0 => 'mixed',
    'old_name' => 'mixed',
    'new_name' => 'mixed',
  ),
  'redis::renamenx' => 
  array (
    0 => 'mixed',
    'key_src' => 'mixed',
    'key_dst' => 'mixed',
  ),
  'redis::replicaof' => 
  array (
    0 => 'mixed',
    'host=' => 'mixed',
    'port=' => 'mixed',
  ),
  'redis::reset' => 
  array (
    0 => 'mixed',
  ),
  'redis::restore' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'ttl' => 'mixed',
    'value' => 'mixed',
    'options=' => 'mixed',
  ),
  'redis::role' => 
  array (
    0 => 'mixed',
  ),
  'redis::rpop' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'count=' => 'mixed',
  ),
  'redis::rpoplpush' => 
  array (
    0 => 'mixed',
    'srckey' => 'mixed',
    'dstkey' => 'mixed',
  ),
  'redis::rpush' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    '...elements=' => 'mixed',
  ),
  'redis::rpushx' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'redis::sadd' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
    '...other_values=' => 'mixed',
  ),
  'redis::saddarray' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'values' => 'mixed',
  ),
  'redis::save' => 
  array (
    0 => 'mixed',
  ),
  'redis::scan' => 
  array (
    0 => 'mixed',
    '&iterator' => 'mixed',
    'pattern=' => 'mixed',
    'count=' => 'mixed',
    'type=' => 'mixed',
  ),
  'redis::scard' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'redis::script' => 
  array (
    0 => 'mixed',
    'command' => 'mixed',
    '...args=' => 'mixed',
  ),
  'redis::sdiff' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    '...other_keys=' => 'mixed',
  ),
  'redis::sdiffstore' => 
  array (
    0 => 'mixed',
    'dst' => 'mixed',
    'key' => 'mixed',
    '...other_keys=' => 'mixed',
  ),
  'redis::select' => 
  array (
    0 => 'mixed',
    'db' => 'mixed',
  ),
  'redis::set' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
    'options=' => 'mixed',
  ),
  'redis::setbit' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'idx' => 'mixed',
    'value' => 'mixed',
  ),
  'redis::setex' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'expire' => 'mixed',
    'value' => 'mixed',
  ),
  'redis::setnx' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'redis::setoption' => 
  array (
    0 => 'mixed',
    'option' => 'mixed',
    'value' => 'mixed',
  ),
  'redis::setrange' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'index' => 'mixed',
    'value' => 'mixed',
  ),
  'redis::sinter' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    '...other_keys=' => 'mixed',
  ),
  'redis::sintercard' => 
  array (
    0 => 'mixed',
    'keys' => 'mixed',
    'limit=' => 'mixed',
  ),
  'redis::sinterstore' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    '...other_keys=' => 'mixed',
  ),
  'redis::sismember' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'redis::slaveof' => 
  array (
    0 => 'mixed',
    'host=' => 'mixed',
    'port=' => 'mixed',
  ),
  'redis::slowlog' => 
  array (
    0 => 'mixed',
    'operation' => 'mixed',
    'length=' => 'mixed',
  ),
  'redis::smembers' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'redis::smismember' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
    '...other_members=' => 'mixed',
  ),
  'redis::smove' => 
  array (
    0 => 'mixed',
    'src' => 'mixed',
    'dst' => 'mixed',
    'value' => 'mixed',
  ),
  'redis::sort' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'options=' => 'mixed',
  ),
  'redis::sort_ro' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'options=' => 'mixed',
  ),
  'redis::sortasc' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'pattern=' => 'mixed',
    'get=' => 'mixed',
    'offset=' => 'mixed',
    'count=' => 'mixed',
    'store=' => 'mixed',
  ),
  'redis::sortascalpha' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'pattern=' => 'mixed',
    'get=' => 'mixed',
    'offset=' => 'mixed',
    'count=' => 'mixed',
    'store=' => 'mixed',
  ),
  'redis::sortdesc' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'pattern=' => 'mixed',
    'get=' => 'mixed',
    'offset=' => 'mixed',
    'count=' => 'mixed',
    'store=' => 'mixed',
  ),
  'redis::sortdescalpha' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'pattern=' => 'mixed',
    'get=' => 'mixed',
    'offset=' => 'mixed',
    'count=' => 'mixed',
    'store=' => 'mixed',
  ),
  'redis::spop' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'count=' => 'mixed',
  ),
  'redis::srandmember' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'count=' => 'mixed',
  ),
  'redis::srem' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
    '...other_values=' => 'mixed',
  ),
  'redis::sscan' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    '&iterator' => 'mixed',
    'pattern=' => 'mixed',
    'count=' => 'mixed',
  ),
  'redis::ssubscribe' => 
  array (
    0 => 'mixed',
    'channels' => 'mixed',
    'cb' => 'mixed',
  ),
  'redis::strlen' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'redis::subscribe' => 
  array (
    0 => 'mixed',
    'channels' => 'mixed',
    'cb' => 'mixed',
  ),
  'redis::sunion' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    '...other_keys=' => 'mixed',
  ),
  'redis::sunionstore' => 
  array (
    0 => 'mixed',
    'dst' => 'mixed',
    'key' => 'mixed',
    '...other_keys=' => 'mixed',
  ),
  'redis::sunsubscribe' => 
  array (
    0 => 'mixed',
    'channels' => 'mixed',
  ),
  'redis::swapdb' => 
  array (
    0 => 'mixed',
    'src' => 'mixed',
    'dst' => 'mixed',
  ),
  'redis::time' => 
  array (
    0 => 'mixed',
  ),
  'redis::touch' => 
  array (
    0 => 'mixed',
    'key_or_array' => 'mixed',
    '...more_keys=' => 'mixed',
  ),
  'redis::ttl' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'redis::type' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'redis::unlink' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    '...other_keys=' => 'mixed',
  ),
  'redis::unsubscribe' => 
  array (
    0 => 'mixed',
    'channels' => 'mixed',
  ),
  'redis::unwatch' => 
  array (
    0 => 'mixed',
  ),
  'redis::wait' => 
  array (
    0 => 'mixed',
    'numreplicas' => 'mixed',
    'timeout' => 'mixed',
  ),
  'redis::watch' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    '...other_keys=' => 'mixed',
  ),
  'redis::xack' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'group' => 'mixed',
    'ids' => 'mixed',
  ),
  'redis::xadd' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'id' => 'mixed',
    'values' => 'mixed',
    'maxlen=' => 'mixed',
    'approx=' => 'mixed',
    'nomkstream=' => 'mixed',
  ),
  'redis::xautoclaim' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'group' => 'mixed',
    'consumer' => 'mixed',
    'min_idle' => 'mixed',
    'start' => 'mixed',
    'count=' => 'mixed',
    'justid=' => 'mixed',
  ),
  'redis::xclaim' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'group' => 'mixed',
    'consumer' => 'mixed',
    'min_idle' => 'mixed',
    'ids' => 'mixed',
    'options' => 'mixed',
  ),
  'redis::xdel' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'ids' => 'mixed',
  ),
  'redis::xgroup' => 
  array (
    0 => 'mixed',
    'operation' => 'mixed',
    'key=' => 'mixed',
    'group=' => 'mixed',
    'id_or_consumer=' => 'mixed',
    'mkstream=' => 'mixed',
    'entries_read=' => 'mixed',
  ),
  'redis::xinfo' => 
  array (
    0 => 'mixed',
    'operation' => 'mixed',
    'arg1=' => 'mixed',
    'arg2=' => 'mixed',
    'count=' => 'mixed',
  ),
  'redis::xlen' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'redis::xpending' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'group' => 'mixed',
    'start=' => 'mixed',
    'end=' => 'mixed',
    'count=' => 'mixed',
    'consumer=' => 'mixed',
  ),
  'redis::xrange' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start' => 'mixed',
    'end' => 'mixed',
    'count=' => 'mixed',
  ),
  'redis::xread' => 
  array (
    0 => 'mixed',
    'streams' => 'mixed',
    'count=' => 'mixed',
    'block=' => 'mixed',
  ),
  'redis::xreadgroup' => 
  array (
    0 => 'mixed',
    'group' => 'mixed',
    'consumer' => 'mixed',
    'streams' => 'mixed',
    'count=' => 'mixed',
    'block=' => 'mixed',
  ),
  'redis::xrevrange' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'end' => 'mixed',
    'start' => 'mixed',
    'count=' => 'mixed',
  ),
  'redis::xtrim' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'threshold' => 'mixed',
    'approx=' => 'mixed',
    'minid=' => 'mixed',
    'limit=' => 'mixed',
  ),
  'redis::zadd' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'score_or_options' => 'mixed',
    '...more_scores_and_mems=' => 'mixed',
  ),
  'redis::zcard' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'redis::zcount' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start' => 'mixed',
    'end' => 'mixed',
  ),
  'redis::zdiff' => 
  array (
    0 => 'mixed',
    'keys' => 'mixed',
    'options=' => 'mixed',
  ),
  'redis::zdiffstore' => 
  array (
    0 => 'mixed',
    'dst' => 'mixed',
    'keys' => 'mixed',
  ),
  'redis::zincrby' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
    'member' => 'mixed',
  ),
  'redis::zinter' => 
  array (
    0 => 'mixed',
    'keys' => 'mixed',
    'weights=' => 'mixed',
    'options=' => 'mixed',
  ),
  'redis::zintercard' => 
  array (
    0 => 'mixed',
    'keys' => 'mixed',
    'limit=' => 'mixed',
  ),
  'redis::zinterstore' => 
  array (
    0 => 'mixed',
    'dst' => 'mixed',
    'keys' => 'mixed',
    'weights=' => 'mixed',
    'aggregate=' => 'mixed',
  ),
  'redis::zlexcount' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'min' => 'mixed',
    'max' => 'mixed',
  ),
  'redis::zmpop' => 
  array (
    0 => 'mixed',
    'keys' => 'mixed',
    'from' => 'mixed',
    'count=' => 'mixed',
  ),
  'redis::zmscore' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
    '...other_members=' => 'mixed',
  ),
  'redis::zpopmax' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'count=' => 'mixed',
  ),
  'redis::zpopmin' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'count=' => 'mixed',
  ),
  'redis::zrandmember' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'options=' => 'mixed',
  ),
  'redis::zrange' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start' => 'mixed',
    'end' => 'mixed',
    'options=' => 'mixed',
  ),
  'redis::zrangebylex' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'min' => 'mixed',
    'max' => 'mixed',
    'offset=' => 'mixed',
    'count=' => 'mixed',
  ),
  'redis::zrangebyscore' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start' => 'mixed',
    'end' => 'mixed',
    'options=' => 'mixed',
  ),
  'redis::zrangestore' => 
  array (
    0 => 'mixed',
    'dstkey' => 'mixed',
    'srckey' => 'mixed',
    'start' => 'mixed',
    'end' => 'mixed',
    'options=' => 'mixed',
  ),
  'redis::zrank' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
  ),
  'redis::zrem' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
    '...other_members=' => 'mixed',
  ),
  'redis::zremrangebylex' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'min' => 'mixed',
    'max' => 'mixed',
  ),
  'redis::zremrangebyrank' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start' => 'mixed',
    'end' => 'mixed',
  ),
  'redis::zremrangebyscore' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start' => 'mixed',
    'end' => 'mixed',
  ),
  'redis::zrevrange' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start' => 'mixed',
    'end' => 'mixed',
    'scores=' => 'mixed',
  ),
  'redis::zrevrangebylex' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'max' => 'mixed',
    'min' => 'mixed',
    'offset=' => 'mixed',
    'count=' => 'mixed',
  ),
  'redis::zrevrangebyscore' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'max' => 'mixed',
    'min' => 'mixed',
    'options=' => 'mixed',
  ),
  'redis::zrevrank' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
  ),
  'redis::zscan' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    '&iterator' => 'mixed',
    'pattern=' => 'mixed',
    'count=' => 'mixed',
  ),
  'redis::zscore' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
  ),
  'redis::zunion' => 
  array (
    0 => 'mixed',
    'keys' => 'mixed',
    'weights=' => 'mixed',
    'options=' => 'mixed',
  ),
  'redis::zunionstore' => 
  array (
    0 => 'mixed',
    'dst' => 'mixed',
    'keys' => 'mixed',
    'weights=' => 'mixed',
    'aggregate=' => 'mixed',
  ),
  'redisarray::__call' => 
  array (
    0 => 'mixed',
    'function_name' => 'mixed',
    'arguments' => 'mixed',
  ),
  'redisarray::__construct' => 
  array (
    0 => 'void',
    'name_or_hosts' => 'mixed',
    'options=' => 'mixed',
  ),
  'redisarray::_continuum' => 
  array (
    0 => 'mixed',
  ),
  'redisarray::_distributor' => 
  array (
    0 => 'mixed',
  ),
  'redisarray::_function' => 
  array (
    0 => 'mixed',
  ),
  'redisarray::_hosts' => 
  array (
    0 => 'mixed',
  ),
  'redisarray::_instance' => 
  array (
    0 => 'mixed',
    'host' => 'mixed',
  ),
  'redisarray::_rehash' => 
  array (
    0 => 'mixed',
    'fn=' => 'mixed',
  ),
  'redisarray::_target' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'redisarray::bgsave' => 
  array (
    0 => 'mixed',
  ),
  'redisarray::del' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    '...otherkeys=' => 'mixed',
  ),
  'redisarray::discard' => 
  array (
    0 => 'mixed',
  ),
  'redisarray::exec' => 
  array (
    0 => 'mixed',
  ),
  'redisarray::flushall' => 
  array (
    0 => 'mixed',
  ),
  'redisarray::flushdb' => 
  array (
    0 => 'mixed',
  ),
  'redisarray::getoption' => 
  array (
    0 => 'mixed',
    'opt' => 'mixed',
  ),
  'redisarray::hscan' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    '&iterator' => 'mixed',
    'pattern=' => 'mixed',
    'count=' => 'mixed',
  ),
  'redisarray::info' => 
  array (
    0 => 'mixed',
  ),
  'redisarray::keys' => 
  array (
    0 => 'mixed',
    'pattern' => 'mixed',
  ),
  'redisarray::mget' => 
  array (
    0 => 'mixed',
    'keys' => 'mixed',
  ),
  'redisarray::mset' => 
  array (
    0 => 'mixed',
    'pairs' => 'mixed',
  ),
  'redisarray::multi' => 
  array (
    0 => 'mixed',
    'host' => 'mixed',
    'mode=' => 'mixed',
  ),
  'redisarray::ping' => 
  array (
    0 => 'mixed',
  ),
  'redisarray::save' => 
  array (
    0 => 'mixed',
  ),
  'redisarray::scan' => 
  array (
    0 => 'mixed',
    '&iterator' => 'mixed',
    'node' => 'mixed',
    'pattern=' => 'mixed',
    'count=' => 'mixed',
  ),
  'redisarray::select' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'redisarray::setoption' => 
  array (
    0 => 'mixed',
    'opt' => 'mixed',
    'value' => 'mixed',
  ),
  'redisarray::sscan' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    '&iterator' => 'mixed',
    'pattern=' => 'mixed',
    'count=' => 'mixed',
  ),
  'redisarray::unlink' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    '...otherkeys=' => 'mixed',
  ),
  'redisarray::unwatch' => 
  array (
    0 => 'mixed',
  ),
  'redisarray::zscan' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    '&iterator' => 'mixed',
    'pattern=' => 'mixed',
    'count=' => 'mixed',
  ),
  'rediscluster::__construct' => 
  array (
    0 => 'void',
    'name' => 'mixed',
    'seeds=' => 'mixed',
    'timeout=' => 'mixed',
    'read_timeout=' => 'mixed',
    'persistent=' => 'mixed',
    'auth=' => 'mixed',
    'context=' => 'mixed',
  ),
  'rediscluster::_compress' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'rediscluster::_masters' => 
  array (
    0 => 'mixed',
  ),
  'rediscluster::_pack' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'rediscluster::_prefix' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'rediscluster::_redir' => 
  array (
    0 => 'mixed',
  ),
  'rediscluster::_serialize' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'rediscluster::_uncompress' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'rediscluster::_unpack' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'rediscluster::_unserialize' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'rediscluster::acl' => 
  array (
    0 => 'mixed',
    'key_or_address' => 'mixed',
    'subcmd' => 'mixed',
    '...args=' => 'mixed',
  ),
  'rediscluster::append' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'rediscluster::bgrewriteaof' => 
  array (
    0 => 'mixed',
    'key_or_address' => 'mixed',
  ),
  'rediscluster::bgsave' => 
  array (
    0 => 'mixed',
    'key_or_address' => 'mixed',
  ),
  'rediscluster::bitcount' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start=' => 'mixed',
    'end=' => 'mixed',
    'bybit=' => 'mixed',
  ),
  'rediscluster::bitop' => 
  array (
    0 => 'mixed',
    'operation' => 'mixed',
    'deskey' => 'mixed',
    'srckey' => 'mixed',
    '...otherkeys=' => 'mixed',
  ),
  'rediscluster::bitpos' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'bit' => 'mixed',
    'start=' => 'mixed',
    'end=' => 'mixed',
    'bybit=' => 'mixed',
  ),
  'rediscluster::blmove' => 
  array (
    0 => 'mixed',
    'src' => 'mixed',
    'dst' => 'mixed',
    'wherefrom' => 'mixed',
    'whereto' => 'mixed',
    'timeout' => 'mixed',
  ),
  'rediscluster::blmpop' => 
  array (
    0 => 'mixed',
    'timeout' => 'mixed',
    'keys' => 'mixed',
    'from' => 'mixed',
    'count=' => 'mixed',
  ),
  'rediscluster::blpop' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'timeout_or_key' => 'mixed',
    '...extra_args=' => 'mixed',
  ),
  'rediscluster::brpop' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'timeout_or_key' => 'mixed',
    '...extra_args=' => 'mixed',
  ),
  'rediscluster::brpoplpush' => 
  array (
    0 => 'mixed',
    'srckey' => 'mixed',
    'deskey' => 'mixed',
    'timeout' => 'mixed',
  ),
  'rediscluster::bzmpop' => 
  array (
    0 => 'mixed',
    'timeout' => 'mixed',
    'keys' => 'mixed',
    'from' => 'mixed',
    'count=' => 'mixed',
  ),
  'rediscluster::bzpopmax' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'timeout_or_key' => 'mixed',
    '...extra_args=' => 'mixed',
  ),
  'rediscluster::bzpopmin' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'timeout_or_key' => 'mixed',
    '...extra_args=' => 'mixed',
  ),
  'rediscluster::clearlasterror' => 
  array (
    0 => 'mixed',
  ),
  'rediscluster::cleartransferredbytes' => 
  array (
    0 => 'mixed',
  ),
  'rediscluster::client' => 
  array (
    0 => 'mixed',
    'key_or_address' => 'mixed',
    'subcommand' => 'mixed',
    'arg=' => 'mixed',
  ),
  'rediscluster::close' => 
  array (
    0 => 'mixed',
  ),
  'rediscluster::cluster' => 
  array (
    0 => 'mixed',
    'key_or_address' => 'mixed',
    'command' => 'mixed',
    '...extra_args=' => 'mixed',
  ),
  'rediscluster::command' => 
  array (
    0 => 'mixed',
    '...extra_args=' => 'mixed',
  ),
  'rediscluster::config' => 
  array (
    0 => 'mixed',
    'key_or_address' => 'mixed',
    'subcommand' => 'mixed',
    '...extra_args=' => 'mixed',
  ),
  'rediscluster::copy' => 
  array (
    0 => 'mixed',
    'src' => 'mixed',
    'dst' => 'mixed',
    'options=' => 'mixed',
  ),
  'rediscluster::dbsize' => 
  array (
    0 => 'mixed',
    'key_or_address' => 'mixed',
  ),
  'rediscluster::decr' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'by=' => 'mixed',
  ),
  'rediscluster::decrby' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'rediscluster::decrbyfloat' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'rediscluster::del' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    '...other_keys=' => 'mixed',
  ),
  'rediscluster::discard' => 
  array (
    0 => 'mixed',
  ),
  'rediscluster::dump' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'rediscluster::echo' => 
  array (
    0 => 'mixed',
    'key_or_address' => 'mixed',
    'msg' => 'mixed',
  ),
  'rediscluster::eval' => 
  array (
    0 => 'mixed',
    'script' => 'mixed',
    'args=' => 'mixed',
    'num_keys=' => 'mixed',
  ),
  'rediscluster::eval_ro' => 
  array (
    0 => 'mixed',
    'script' => 'mixed',
    'args=' => 'mixed',
    'num_keys=' => 'mixed',
  ),
  'rediscluster::evalsha' => 
  array (
    0 => 'mixed',
    'script_sha' => 'mixed',
    'args=' => 'mixed',
    'num_keys=' => 'mixed',
  ),
  'rediscluster::evalsha_ro' => 
  array (
    0 => 'mixed',
    'script_sha' => 'mixed',
    'args=' => 'mixed',
    'num_keys=' => 'mixed',
  ),
  'rediscluster::exec' => 
  array (
    0 => 'mixed',
  ),
  'rediscluster::exists' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    '...other_keys=' => 'mixed',
  ),
  'rediscluster::expire' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'timeout' => 'mixed',
    'mode=' => 'mixed',
  ),
  'rediscluster::expireat' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'timestamp' => 'mixed',
    'mode=' => 'mixed',
  ),
  'rediscluster::expiretime' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'rediscluster::flushall' => 
  array (
    0 => 'mixed',
    'key_or_address' => 'mixed',
    'async=' => 'mixed',
  ),
  'rediscluster::flushdb' => 
  array (
    0 => 'mixed',
    'key_or_address' => 'mixed',
    'async=' => 'mixed',
  ),
  'rediscluster::geoadd' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'lng' => 'mixed',
    'lat' => 'mixed',
    'member' => 'mixed',
    '...other_triples_and_options=' => 'mixed',
  ),
  'rediscluster::geodist' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'src' => 'mixed',
    'dest' => 'mixed',
    'unit=' => 'mixed',
  ),
  'rediscluster::geohash' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
    '...other_members=' => 'mixed',
  ),
  'rediscluster::geopos' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
    '...other_members=' => 'mixed',
  ),
  'rediscluster::georadius' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'lng' => 'mixed',
    'lat' => 'mixed',
    'radius' => 'mixed',
    'unit' => 'mixed',
    'options=' => 'mixed',
  ),
  'rediscluster::georadius_ro' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'lng' => 'mixed',
    'lat' => 'mixed',
    'radius' => 'mixed',
    'unit' => 'mixed',
    'options=' => 'mixed',
  ),
  'rediscluster::georadiusbymember' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
    'radius' => 'mixed',
    'unit' => 'mixed',
    'options=' => 'mixed',
  ),
  'rediscluster::georadiusbymember_ro' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
    'radius' => 'mixed',
    'unit' => 'mixed',
    'options=' => 'mixed',
  ),
  'rediscluster::geosearch' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'position' => 'mixed',
    'shape' => 'mixed',
    'unit' => 'mixed',
    'options=' => 'mixed',
  ),
  'rediscluster::geosearchstore' => 
  array (
    0 => 'mixed',
    'dst' => 'mixed',
    'src' => 'mixed',
    'position' => 'mixed',
    'shape' => 'mixed',
    'unit' => 'mixed',
    'options=' => 'mixed',
  ),
  'rediscluster::get' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'rediscluster::getbit' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'rediscluster::getlasterror' => 
  array (
    0 => 'mixed',
  ),
  'rediscluster::getmode' => 
  array (
    0 => 'mixed',
  ),
  'rediscluster::getoption' => 
  array (
    0 => 'mixed',
    'option' => 'mixed',
  ),
  'rediscluster::getrange' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start' => 'mixed',
    'end' => 'mixed',
  ),
  'rediscluster::getset' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'rediscluster::gettransferredbytes' => 
  array (
    0 => 'mixed',
  ),
  'rediscluster::hdel' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
    '...other_members=' => 'mixed',
  ),
  'rediscluster::hexists' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
  ),
  'rediscluster::hget' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
  ),
  'rediscluster::hgetall' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'rediscluster::hincrby' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
    'value' => 'mixed',
  ),
  'rediscluster::hincrbyfloat' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
    'value' => 'mixed',
  ),
  'rediscluster::hkeys' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'rediscluster::hlen' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'rediscluster::hmget' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'keys' => 'mixed',
  ),
  'rediscluster::hmset' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'key_values' => 'mixed',
  ),
  'rediscluster::hrandfield' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'options=' => 'mixed',
  ),
  'rediscluster::hscan' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    '&iterator' => 'mixed',
    'pattern=' => 'mixed',
    'count=' => 'mixed',
  ),
  'rediscluster::hset' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
    'value' => 'mixed',
  ),
  'rediscluster::hsetnx' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
    'value' => 'mixed',
  ),
  'rediscluster::hstrlen' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'field' => 'mixed',
  ),
  'rediscluster::hvals' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'rediscluster::incr' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'by=' => 'mixed',
  ),
  'rediscluster::incrby' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'rediscluster::incrbyfloat' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'rediscluster::info' => 
  array (
    0 => 'mixed',
    'key_or_address' => 'mixed',
    '...sections=' => 'mixed',
  ),
  'rediscluster::keys' => 
  array (
    0 => 'mixed',
    'pattern' => 'mixed',
  ),
  'rediscluster::lastsave' => 
  array (
    0 => 'mixed',
    'key_or_address' => 'mixed',
  ),
  'rediscluster::lcs' => 
  array (
    0 => 'mixed',
    'key1' => 'mixed',
    'key2' => 'mixed',
    'options=' => 'mixed',
  ),
  'rediscluster::lget' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'index' => 'mixed',
  ),
  'rediscluster::lindex' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'index' => 'mixed',
  ),
  'rediscluster::linsert' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'pos' => 'mixed',
    'pivot' => 'mixed',
    'value' => 'mixed',
  ),
  'rediscluster::llen' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'rediscluster::lmove' => 
  array (
    0 => 'mixed',
    'src' => 'mixed',
    'dst' => 'mixed',
    'wherefrom' => 'mixed',
    'whereto' => 'mixed',
  ),
  'rediscluster::lmpop' => 
  array (
    0 => 'mixed',
    'keys' => 'mixed',
    'from' => 'mixed',
    'count=' => 'mixed',
  ),
  'rediscluster::lpop' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'count=' => 'mixed',
  ),
  'rediscluster::lpos' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
    'options=' => 'mixed',
  ),
  'rediscluster::lpush' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
    '...other_values=' => 'mixed',
  ),
  'rediscluster::lpushx' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'rediscluster::lrange' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start' => 'mixed',
    'end' => 'mixed',
  ),
  'rediscluster::lrem' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
    'count=' => 'mixed',
  ),
  'rediscluster::lset' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'index' => 'mixed',
    'value' => 'mixed',
  ),
  'rediscluster::ltrim' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start' => 'mixed',
    'end' => 'mixed',
  ),
  'rediscluster::mget' => 
  array (
    0 => 'mixed',
    'keys' => 'mixed',
  ),
  'rediscluster::mset' => 
  array (
    0 => 'mixed',
    'key_values' => 'mixed',
  ),
  'rediscluster::msetnx' => 
  array (
    0 => 'mixed',
    'key_values' => 'mixed',
  ),
  'rediscluster::multi' => 
  array (
    0 => 'mixed',
    'value=' => 'mixed',
  ),
  'rediscluster::object' => 
  array (
    0 => 'mixed',
    'subcommand' => 'mixed',
    'key' => 'mixed',
  ),
  'rediscluster::persist' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'rediscluster::pexpire' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'timeout' => 'mixed',
    'mode=' => 'mixed',
  ),
  'rediscluster::pexpireat' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'timestamp' => 'mixed',
    'mode=' => 'mixed',
  ),
  'rediscluster::pexpiretime' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'rediscluster::pfadd' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'elements' => 'mixed',
  ),
  'rediscluster::pfcount' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'rediscluster::pfmerge' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'keys' => 'mixed',
  ),
  'rediscluster::ping' => 
  array (
    0 => 'mixed',
    'key_or_address' => 'mixed',
    'message=' => 'mixed',
  ),
  'rediscluster::psetex' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'timeout' => 'mixed',
    'value' => 'mixed',
  ),
  'rediscluster::psubscribe' => 
  array (
    0 => 'mixed',
    'patterns' => 'mixed',
    'callback' => 'mixed',
  ),
  'rediscluster::pttl' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'rediscluster::publish' => 
  array (
    0 => 'mixed',
    'channel' => 'mixed',
    'message' => 'mixed',
  ),
  'rediscluster::pubsub' => 
  array (
    0 => 'mixed',
    'key_or_address' => 'mixed',
    '...values=' => 'mixed',
  ),
  'rediscluster::punsubscribe' => 
  array (
    0 => 'mixed',
    'pattern' => 'mixed',
    '...other_patterns=' => 'mixed',
  ),
  'rediscluster::randomkey' => 
  array (
    0 => 'mixed',
    'key_or_address' => 'mixed',
  ),
  'rediscluster::rawcommand' => 
  array (
    0 => 'mixed',
    'key_or_address' => 'mixed',
    'command' => 'mixed',
    '...args=' => 'mixed',
  ),
  'rediscluster::rename' => 
  array (
    0 => 'mixed',
    'key_src' => 'mixed',
    'key_dst' => 'mixed',
  ),
  'rediscluster::renamenx' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'newkey' => 'mixed',
  ),
  'rediscluster::restore' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'timeout' => 'mixed',
    'value' => 'mixed',
    'options=' => 'mixed',
  ),
  'rediscluster::role' => 
  array (
    0 => 'mixed',
    'key_or_address' => 'mixed',
  ),
  'rediscluster::rpop' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'count=' => 'mixed',
  ),
  'rediscluster::rpoplpush' => 
  array (
    0 => 'mixed',
    'src' => 'mixed',
    'dst' => 'mixed',
  ),
  'rediscluster::rpush' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    '...elements=' => 'mixed',
  ),
  'rediscluster::rpushx' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'rediscluster::sadd' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
    '...other_values=' => 'mixed',
  ),
  'rediscluster::saddarray' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'values' => 'mixed',
  ),
  'rediscluster::save' => 
  array (
    0 => 'mixed',
    'key_or_address' => 'mixed',
  ),
  'rediscluster::scan' => 
  array (
    0 => 'mixed',
    '&iterator' => 'mixed',
    'key_or_address' => 'mixed',
    'pattern=' => 'mixed',
    'count=' => 'mixed',
  ),
  'rediscluster::scard' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'rediscluster::script' => 
  array (
    0 => 'mixed',
    'key_or_address' => 'mixed',
    '...args=' => 'mixed',
  ),
  'rediscluster::sdiff' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    '...other_keys=' => 'mixed',
  ),
  'rediscluster::sdiffstore' => 
  array (
    0 => 'mixed',
    'dst' => 'mixed',
    'key' => 'mixed',
    '...other_keys=' => 'mixed',
  ),
  'rediscluster::set' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
    'options=' => 'mixed',
  ),
  'rediscluster::setbit' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'offset' => 'mixed',
    'onoff' => 'mixed',
  ),
  'rediscluster::setex' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'expire' => 'mixed',
    'value' => 'mixed',
  ),
  'rediscluster::setnx' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'rediscluster::setoption' => 
  array (
    0 => 'mixed',
    'option' => 'mixed',
    'value' => 'mixed',
  ),
  'rediscluster::setrange' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'offset' => 'mixed',
    'value' => 'mixed',
  ),
  'rediscluster::sinter' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    '...other_keys=' => 'mixed',
  ),
  'rediscluster::sintercard' => 
  array (
    0 => 'mixed',
    'keys' => 'mixed',
    'limit=' => 'mixed',
  ),
  'rediscluster::sinterstore' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    '...other_keys=' => 'mixed',
  ),
  'rediscluster::sismember' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'rediscluster::slowlog' => 
  array (
    0 => 'mixed',
    'key_or_address' => 'mixed',
    '...args=' => 'mixed',
  ),
  'rediscluster::smembers' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'rediscluster::smismember' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
    '...other_members=' => 'mixed',
  ),
  'rediscluster::smove' => 
  array (
    0 => 'mixed',
    'src' => 'mixed',
    'dst' => 'mixed',
    'member' => 'mixed',
  ),
  'rediscluster::sort' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'options=' => 'mixed',
  ),
  'rediscluster::sort_ro' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'options=' => 'mixed',
  ),
  'rediscluster::spop' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'count=' => 'mixed',
  ),
  'rediscluster::srandmember' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'count=' => 'mixed',
  ),
  'rediscluster::srem' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
    '...other_values=' => 'mixed',
  ),
  'rediscluster::sscan' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    '&iterator' => 'mixed',
    'pattern=' => 'mixed',
    'count=' => 'mixed',
  ),
  'rediscluster::strlen' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'rediscluster::subscribe' => 
  array (
    0 => 'mixed',
    'channels' => 'mixed',
    'cb' => 'mixed',
  ),
  'rediscluster::sunion' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    '...other_keys=' => 'mixed',
  ),
  'rediscluster::sunionstore' => 
  array (
    0 => 'mixed',
    'dst' => 'mixed',
    'key' => 'mixed',
    '...other_keys=' => 'mixed',
  ),
  'rediscluster::time' => 
  array (
    0 => 'mixed',
    'key_or_address' => 'mixed',
  ),
  'rediscluster::touch' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    '...other_keys=' => 'mixed',
  ),
  'rediscluster::ttl' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'rediscluster::type' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'rediscluster::unlink' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    '...other_keys=' => 'mixed',
  ),
  'rediscluster::unsubscribe' => 
  array (
    0 => 'mixed',
    'channels' => 'mixed',
  ),
  'rediscluster::unwatch' => 
  array (
    0 => 'mixed',
  ),
  'rediscluster::watch' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    '...other_keys=' => 'mixed',
  ),
  'rediscluster::xack' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'group' => 'mixed',
    'ids' => 'mixed',
  ),
  'rediscluster::xadd' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'id' => 'mixed',
    'values' => 'mixed',
    'maxlen=' => 'mixed',
    'approx=' => 'mixed',
  ),
  'rediscluster::xautoclaim' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'group' => 'mixed',
    'consumer' => 'mixed',
    'min_idle' => 'mixed',
    'start' => 'mixed',
    'count=' => 'mixed',
    'justid=' => 'mixed',
  ),
  'rediscluster::xclaim' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'group' => 'mixed',
    'consumer' => 'mixed',
    'min_iddle' => 'mixed',
    'ids' => 'mixed',
    'options' => 'mixed',
  ),
  'rediscluster::xdel' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'ids' => 'mixed',
  ),
  'rediscluster::xgroup' => 
  array (
    0 => 'mixed',
    'operation' => 'mixed',
    'key=' => 'mixed',
    'group=' => 'mixed',
    'id_or_consumer=' => 'mixed',
    'mkstream=' => 'mixed',
    'entries_read=' => 'mixed',
  ),
  'rediscluster::xinfo' => 
  array (
    0 => 'mixed',
    'operation' => 'mixed',
    'arg1=' => 'mixed',
    'arg2=' => 'mixed',
    'count=' => 'mixed',
  ),
  'rediscluster::xlen' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'rediscluster::xpending' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'group' => 'mixed',
    'start=' => 'mixed',
    'end=' => 'mixed',
    'count=' => 'mixed',
    'consumer=' => 'mixed',
  ),
  'rediscluster::xrange' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start' => 'mixed',
    'end' => 'mixed',
    'count=' => 'mixed',
  ),
  'rediscluster::xread' => 
  array (
    0 => 'mixed',
    'streams' => 'mixed',
    'count=' => 'mixed',
    'block=' => 'mixed',
  ),
  'rediscluster::xreadgroup' => 
  array (
    0 => 'mixed',
    'group' => 'mixed',
    'consumer' => 'mixed',
    'streams' => 'mixed',
    'count=' => 'mixed',
    'block=' => 'mixed',
  ),
  'rediscluster::xrevrange' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start' => 'mixed',
    'end' => 'mixed',
    'count=' => 'mixed',
  ),
  'rediscluster::xtrim' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'maxlen' => 'mixed',
    'approx=' => 'mixed',
    'minid=' => 'mixed',
    'limit=' => 'mixed',
  ),
  'rediscluster::zadd' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'score_or_options' => 'mixed',
    '...more_scores_and_mems=' => 'mixed',
  ),
  'rediscluster::zcard' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'rediscluster::zcount' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start' => 'mixed',
    'end' => 'mixed',
  ),
  'rediscluster::zdiff' => 
  array (
    0 => 'mixed',
    'keys' => 'mixed',
    'options=' => 'mixed',
  ),
  'rediscluster::zdiffstore' => 
  array (
    0 => 'mixed',
    'dst' => 'mixed',
    'keys' => 'mixed',
  ),
  'rediscluster::zincrby' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
    'member' => 'mixed',
  ),
  'rediscluster::zinter' => 
  array (
    0 => 'mixed',
    'keys' => 'mixed',
    'weights=' => 'mixed',
    'options=' => 'mixed',
  ),
  'rediscluster::zintercard' => 
  array (
    0 => 'mixed',
    'keys' => 'mixed',
    'limit=' => 'mixed',
  ),
  'rediscluster::zinterstore' => 
  array (
    0 => 'mixed',
    'dst' => 'mixed',
    'keys' => 'mixed',
    'weights=' => 'mixed',
    'aggregate=' => 'mixed',
  ),
  'rediscluster::zlexcount' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'min' => 'mixed',
    'max' => 'mixed',
  ),
  'rediscluster::zmpop' => 
  array (
    0 => 'mixed',
    'keys' => 'mixed',
    'from' => 'mixed',
    'count=' => 'mixed',
  ),
  'rediscluster::zmscore' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
    '...other_members=' => 'mixed',
  ),
  'rediscluster::zpopmax' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value=' => 'mixed',
  ),
  'rediscluster::zpopmin' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value=' => 'mixed',
  ),
  'rediscluster::zrandmember' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'options=' => 'mixed',
  ),
  'rediscluster::zrange' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start' => 'mixed',
    'end' => 'mixed',
    'options=' => 'mixed',
  ),
  'rediscluster::zrangebylex' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'min' => 'mixed',
    'max' => 'mixed',
    'offset=' => 'mixed',
    'count=' => 'mixed',
  ),
  'rediscluster::zrangebyscore' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start' => 'mixed',
    'end' => 'mixed',
    'options=' => 'mixed',
  ),
  'rediscluster::zrangestore' => 
  array (
    0 => 'mixed',
    'dstkey' => 'mixed',
    'srckey' => 'mixed',
    'start' => 'mixed',
    'end' => 'mixed',
    'options=' => 'mixed',
  ),
  'rediscluster::zrank' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
  ),
  'rediscluster::zrem' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
    '...other_values=' => 'mixed',
  ),
  'rediscluster::zremrangebylex' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'min' => 'mixed',
    'max' => 'mixed',
  ),
  'rediscluster::zremrangebyrank' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'min' => 'mixed',
    'max' => 'mixed',
  ),
  'rediscluster::zremrangebyscore' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'min' => 'mixed',
    'max' => 'mixed',
  ),
  'rediscluster::zrevrange' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'min' => 'mixed',
    'max' => 'mixed',
    'options=' => 'mixed',
  ),
  'rediscluster::zrevrangebylex' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'min' => 'mixed',
    'max' => 'mixed',
    'options=' => 'mixed',
  ),
  'rediscluster::zrevrangebyscore' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'min' => 'mixed',
    'max' => 'mixed',
    'options=' => 'mixed',
  ),
  'rediscluster::zrevrank' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
  ),
  'rediscluster::zscan' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    '&iterator' => 'mixed',
    'pattern=' => 'mixed',
    'count=' => 'mixed',
  ),
  'rediscluster::zscore' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
  ),
  'rediscluster::zunion' => 
  array (
    0 => 'mixed',
    'keys' => 'mixed',
    'weights=' => 'mixed',
    'options=' => 'mixed',
  ),
  'rediscluster::zunionstore' => 
  array (
    0 => 'mixed',
    'dst' => 'mixed',
    'keys' => 'mixed',
    'weights=' => 'mixed',
    'aggregate=' => 'mixed',
  ),
  'redisclusterexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'redisclusterexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'redisclusterexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'redisclusterexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'redisclusterexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'redisclusterexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'redisclusterexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'redisclusterexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'redisclusterexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'redisclusterexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'redisclusterexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'redisexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'redisexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'redisexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'redisexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'redisexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'redisexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'redisexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'redisexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'redisexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'redisexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'redisexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'redissentinel::__construct' => 
  array (
    0 => 'void',
    'options=' => 'mixed',
  ),
  'redissentinel::ckquorum' => 
  array (
    0 => 'mixed',
    'master' => 'mixed',
  ),
  'redissentinel::failover' => 
  array (
    0 => 'mixed',
    'master' => 'mixed',
  ),
  'redissentinel::flushconfig' => 
  array (
    0 => 'mixed',
  ),
  'redissentinel::getmasteraddrbyname' => 
  array (
    0 => 'mixed',
    'master' => 'mixed',
  ),
  'redissentinel::master' => 
  array (
    0 => 'mixed',
    'master' => 'mixed',
  ),
  'redissentinel::masters' => 
  array (
    0 => 'mixed',
  ),
  'redissentinel::myid' => 
  array (
    0 => 'mixed',
  ),
  'redissentinel::ping' => 
  array (
    0 => 'mixed',
  ),
  'redissentinel::reset' => 
  array (
    0 => 'mixed',
    'pattern' => 'mixed',
  ),
  'redissentinel::sentinels' => 
  array (
    0 => 'mixed',
    'master' => 'mixed',
  ),
  'redissentinel::slaves' => 
  array (
    0 => 'mixed',
    'master' => 'mixed',
  ),
  'reflection::export' => 
  array (
    0 => 'mixed',
    'reflector' => 'Reflector',
    'return=' => 'mixed',
  ),
  'reflection::getmodifiernames' => 
  array (
    0 => 'mixed',
    'modifiers' => 'mixed',
  ),
  'reflectionclass::__clone' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclass::__construct' => 
  array (
    0 => 'void',
    'argument' => 'mixed',
  ),
  'reflectionclass::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclass::export' => 
  array (
    0 => 'mixed',
    'argument' => 'mixed',
    'return=' => 'mixed',
  ),
  'reflectionclass::getconstant' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
  ),
  'reflectionclass::getconstants' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclass::getconstructor' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclass::getdefaultproperties' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclass::getdoccomment' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclass::getendline' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclass::getextension' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclass::getextensionname' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclass::getfilename' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclass::getinterfacenames' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclass::getinterfaces' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclass::getmethod' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
  ),
  'reflectionclass::getmethods' => 
  array (
    0 => 'mixed',
    'filter=' => 'mixed',
  ),
  'reflectionclass::getmodifiers' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclass::getname' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclass::getnamespacename' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclass::getparentclass' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclass::getproperties' => 
  array (
    0 => 'mixed',
    'filter=' => 'mixed',
  ),
  'reflectionclass::getproperty' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
  ),
  'reflectionclass::getreflectionconstant' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
  ),
  'reflectionclass::getreflectionconstants' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclass::getshortname' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclass::getstartline' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclass::getstaticproperties' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclass::getstaticpropertyvalue' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
    'default=' => 'mixed',
  ),
  'reflectionclass::gettraitaliases' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclass::gettraitnames' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclass::gettraits' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclass::hasconstant' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
  ),
  'reflectionclass::hasmethod' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
  ),
  'reflectionclass::hasproperty' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
  ),
  'reflectionclass::implementsinterface' => 
  array (
    0 => 'mixed',
    'interface' => 'mixed',
  ),
  'reflectionclass::innamespace' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclass::isabstract' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclass::isanonymous' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclass::iscloneable' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclass::isfinal' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclass::isinstance' => 
  array (
    0 => 'mixed',
    'object' => 'mixed',
  ),
  'reflectionclass::isinstantiable' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclass::isinterface' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclass::isinternal' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclass::isiterable' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclass::isiterateable' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclass::issubclassof' => 
  array (
    0 => 'mixed',
    'class' => 'mixed',
  ),
  'reflectionclass::istrait' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclass::isuserdefined' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclass::newinstance' => 
  array (
    0 => 'mixed',
    'args' => 'mixed',
  ),
  'reflectionclass::newinstanceargs' => 
  array (
    0 => 'mixed',
    'args=' => 'array<array-key, mixed>',
  ),
  'reflectionclass::newinstancewithoutconstructor' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclass::setstaticpropertyvalue' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
    'value' => 'mixed',
  ),
  'reflectionclassconstant::__clone' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclassconstant::__construct' => 
  array (
    0 => 'void',
    'class' => 'mixed',
    'name' => 'mixed',
  ),
  'reflectionclassconstant::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclassconstant::export' => 
  array (
    0 => 'mixed',
    'class' => 'mixed',
    'name' => 'mixed',
    'return=' => 'mixed',
  ),
  'reflectionclassconstant::getdeclaringclass' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclassconstant::getdoccomment' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclassconstant::getmodifiers' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclassconstant::getname' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclassconstant::getvalue' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclassconstant::isprivate' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclassconstant::isprotected' => 
  array (
    0 => 'mixed',
  ),
  'reflectionclassconstant::ispublic' => 
  array (
    0 => 'mixed',
  ),
  'reflectionexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'reflectionexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'reflectionexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'reflectionexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'reflectionexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'reflectionexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'reflectionexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'reflectionexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'reflectionexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'reflectionexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'reflectionexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'reflectionextension::__clone' => 
  array (
    0 => 'mixed',
  ),
  'reflectionextension::__construct' => 
  array (
    0 => 'void',
    'name' => 'mixed',
  ),
  'reflectionextension::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'reflectionextension::export' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
    'return=' => 'mixed',
  ),
  'reflectionextension::getclasses' => 
  array (
    0 => 'mixed',
  ),
  'reflectionextension::getclassnames' => 
  array (
    0 => 'mixed',
  ),
  'reflectionextension::getconstants' => 
  array (
    0 => 'mixed',
  ),
  'reflectionextension::getdependencies' => 
  array (
    0 => 'mixed',
  ),
  'reflectionextension::getfunctions' => 
  array (
    0 => 'mixed',
  ),
  'reflectionextension::getinientries' => 
  array (
    0 => 'mixed',
  ),
  'reflectionextension::getname' => 
  array (
    0 => 'mixed',
  ),
  'reflectionextension::getversion' => 
  array (
    0 => 'mixed',
  ),
  'reflectionextension::info' => 
  array (
    0 => 'mixed',
  ),
  'reflectionextension::ispersistent' => 
  array (
    0 => 'mixed',
  ),
  'reflectionextension::istemporary' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunction::__clone' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunction::__construct' => 
  array (
    0 => 'void',
    'name' => 'mixed',
  ),
  'reflectionfunction::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunction::export' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
    'return=' => 'mixed',
  ),
  'reflectionfunction::getclosure' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunction::getclosurescopeclass' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunction::getclosurethis' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunction::getdoccomment' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunction::getendline' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunction::getextension' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunction::getextensionname' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunction::getfilename' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunction::getname' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunction::getnamespacename' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunction::getnumberofparameters' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunction::getnumberofrequiredparameters' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunction::getparameters' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunction::getreturntype' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunction::getshortname' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunction::getstartline' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunction::getstaticvariables' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunction::hasreturntype' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunction::innamespace' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunction::invoke' => 
  array (
    0 => 'mixed',
    'args=' => 'mixed',
  ),
  'reflectionfunction::invokeargs' => 
  array (
    0 => 'mixed',
    'args' => 'array<array-key, mixed>',
  ),
  'reflectionfunction::isclosure' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunction::isdeprecated' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunction::isdisabled' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunction::isgenerator' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunction::isinternal' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunction::isuserdefined' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunction::isvariadic' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunction::returnsreference' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunctionabstract::__clone' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunctionabstract::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunctionabstract::export' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunctionabstract::getclosurescopeclass' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunctionabstract::getclosurethis' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunctionabstract::getdoccomment' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunctionabstract::getendline' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunctionabstract::getextension' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunctionabstract::getextensionname' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunctionabstract::getfilename' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunctionabstract::getname' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunctionabstract::getnamespacename' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunctionabstract::getnumberofparameters' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunctionabstract::getnumberofrequiredparameters' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunctionabstract::getparameters' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunctionabstract::getreturntype' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunctionabstract::getshortname' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunctionabstract::getstartline' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunctionabstract::getstaticvariables' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunctionabstract::hasreturntype' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunctionabstract::innamespace' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunctionabstract::isclosure' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunctionabstract::isdeprecated' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunctionabstract::isgenerator' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunctionabstract::isinternal' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunctionabstract::isuserdefined' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunctionabstract::isvariadic' => 
  array (
    0 => 'mixed',
  ),
  'reflectionfunctionabstract::returnsreference' => 
  array (
    0 => 'mixed',
  ),
  'reflectiongenerator::__construct' => 
  array (
    0 => 'void',
    'generator' => 'mixed',
  ),
  'reflectiongenerator::getexecutingfile' => 
  array (
    0 => 'mixed',
  ),
  'reflectiongenerator::getexecutinggenerator' => 
  array (
    0 => 'mixed',
  ),
  'reflectiongenerator::getexecutingline' => 
  array (
    0 => 'mixed',
  ),
  'reflectiongenerator::getfunction' => 
  array (
    0 => 'mixed',
  ),
  'reflectiongenerator::getthis' => 
  array (
    0 => 'mixed',
  ),
  'reflectiongenerator::gettrace' => 
  array (
    0 => 'mixed',
    'options=' => 'mixed',
  ),
  'reflectionmethod::__clone' => 
  array (
    0 => 'mixed',
  ),
  'reflectionmethod::__construct' => 
  array (
    0 => 'void',
    'class_or_method' => 'mixed',
    'name=' => 'mixed',
  ),
  'reflectionmethod::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'reflectionmethod::export' => 
  array (
    0 => 'mixed',
    'class' => 'mixed',
    'name' => 'mixed',
    'return=' => 'mixed',
  ),
  'reflectionmethod::getclosure' => 
  array (
    0 => 'mixed',
    'object' => 'mixed',
  ),
  'reflectionmethod::getclosurescopeclass' => 
  array (
    0 => 'mixed',
  ),
  'reflectionmethod::getclosurethis' => 
  array (
    0 => 'mixed',
  ),
  'reflectionmethod::getdeclaringclass' => 
  array (
    0 => 'mixed',
  ),
  'reflectionmethod::getdoccomment' => 
  array (
    0 => 'mixed',
  ),
  'reflectionmethod::getendline' => 
  array (
    0 => 'mixed',
  ),
  'reflectionmethod::getextension' => 
  array (
    0 => 'mixed',
  ),
  'reflectionmethod::getextensionname' => 
  array (
    0 => 'mixed',
  ),
  'reflectionmethod::getfilename' => 
  array (
    0 => 'mixed',
  ),
  'reflectionmethod::getmodifiers' => 
  array (
    0 => 'mixed',
  ),
  'reflectionmethod::getname' => 
  array (
    0 => 'mixed',
  ),
  'reflectionmethod::getnamespacename' => 
  array (
    0 => 'mixed',
  ),
  'reflectionmethod::getnumberofparameters' => 
  array (
    0 => 'mixed',
  ),
  'reflectionmethod::getnumberofrequiredparameters' => 
  array (
    0 => 'mixed',
  ),
  'reflectionmethod::getparameters' => 
  array (
    0 => 'mixed',
  ),
  'reflectionmethod::getprototype' => 
  array (
    0 => 'mixed',
  ),
  'reflectionmethod::getreturntype' => 
  array (
    0 => 'mixed',
  ),
  'reflectionmethod::getshortname' => 
  array (
    0 => 'mixed',
  ),
  'reflectionmethod::getstartline' => 
  array (
    0 => 'mixed',
  ),
  'reflectionmethod::getstaticvariables' => 
  array (
    0 => 'mixed',
  ),
  'reflectionmethod::hasreturntype' => 
  array (
    0 => 'mixed',
  ),
  'reflectionmethod::innamespace' => 
  array (
    0 => 'mixed',
  ),
  'reflectionmethod::invoke' => 
  array (
    0 => 'mixed',
    'object' => 'mixed',
    'args' => 'mixed',
  ),
  'reflectionmethod::invokeargs' => 
  array (
    0 => 'mixed',
    'object' => 'mixed',
    'args' => 'array<array-key, mixed>',
  ),
  'reflectionmethod::isabstract' => 
  array (
    0 => 'mixed',
  ),
  'reflectionmethod::isclosure' => 
  array (
    0 => 'mixed',
  ),
  'reflectionmethod::isconstructor' => 
  array (
    0 => 'mixed',
  ),
  'reflectionmethod::isdeprecated' => 
  array (
    0 => 'mixed',
  ),
  'reflectionmethod::isdestructor' => 
  array (
    0 => 'mixed',
  ),
  'reflectionmethod::isfinal' => 
  array (
    0 => 'mixed',
  ),
  'reflectionmethod::isgenerator' => 
  array (
    0 => 'mixed',
  ),
  'reflectionmethod::isinternal' => 
  array (
    0 => 'mixed',
  ),
  'reflectionmethod::isprivate' => 
  array (
    0 => 'mixed',
  ),
  'reflectionmethod::isprotected' => 
  array (
    0 => 'mixed',
  ),
  'reflectionmethod::ispublic' => 
  array (
    0 => 'mixed',
  ),
  'reflectionmethod::isstatic' => 
  array (
    0 => 'mixed',
  ),
  'reflectionmethod::isuserdefined' => 
  array (
    0 => 'mixed',
  ),
  'reflectionmethod::isvariadic' => 
  array (
    0 => 'mixed',
  ),
  'reflectionmethod::returnsreference' => 
  array (
    0 => 'mixed',
  ),
  'reflectionmethod::setaccessible' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'reflectionnamedtype::__clone' => 
  array (
    0 => 'mixed',
  ),
  'reflectionnamedtype::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'reflectionnamedtype::allowsnull' => 
  array (
    0 => 'mixed',
  ),
  'reflectionnamedtype::getname' => 
  array (
    0 => 'mixed',
  ),
  'reflectionnamedtype::isbuiltin' => 
  array (
    0 => 'mixed',
  ),
  'reflectionobject::__clone' => 
  array (
    0 => 'mixed',
  ),
  'reflectionobject::__construct' => 
  array (
    0 => 'void',
    'argument' => 'mixed',
  ),
  'reflectionobject::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'reflectionobject::export' => 
  array (
    0 => 'mixed',
    'argument' => 'mixed',
    'return=' => 'mixed',
  ),
  'reflectionobject::getconstant' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
  ),
  'reflectionobject::getconstants' => 
  array (
    0 => 'mixed',
  ),
  'reflectionobject::getconstructor' => 
  array (
    0 => 'mixed',
  ),
  'reflectionobject::getdefaultproperties' => 
  array (
    0 => 'mixed',
  ),
  'reflectionobject::getdoccomment' => 
  array (
    0 => 'mixed',
  ),
  'reflectionobject::getendline' => 
  array (
    0 => 'mixed',
  ),
  'reflectionobject::getextension' => 
  array (
    0 => 'mixed',
  ),
  'reflectionobject::getextensionname' => 
  array (
    0 => 'mixed',
  ),
  'reflectionobject::getfilename' => 
  array (
    0 => 'mixed',
  ),
  'reflectionobject::getinterfacenames' => 
  array (
    0 => 'mixed',
  ),
  'reflectionobject::getinterfaces' => 
  array (
    0 => 'mixed',
  ),
  'reflectionobject::getmethod' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
  ),
  'reflectionobject::getmethods' => 
  array (
    0 => 'mixed',
    'filter=' => 'mixed',
  ),
  'reflectionobject::getmodifiers' => 
  array (
    0 => 'mixed',
  ),
  'reflectionobject::getname' => 
  array (
    0 => 'mixed',
  ),
  'reflectionobject::getnamespacename' => 
  array (
    0 => 'mixed',
  ),
  'reflectionobject::getparentclass' => 
  array (
    0 => 'mixed',
  ),
  'reflectionobject::getproperties' => 
  array (
    0 => 'mixed',
    'filter=' => 'mixed',
  ),
  'reflectionobject::getproperty' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
  ),
  'reflectionobject::getreflectionconstant' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
  ),
  'reflectionobject::getreflectionconstants' => 
  array (
    0 => 'mixed',
  ),
  'reflectionobject::getshortname' => 
  array (
    0 => 'mixed',
  ),
  'reflectionobject::getstartline' => 
  array (
    0 => 'mixed',
  ),
  'reflectionobject::getstaticproperties' => 
  array (
    0 => 'mixed',
  ),
  'reflectionobject::getstaticpropertyvalue' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
    'default=' => 'mixed',
  ),
  'reflectionobject::gettraitaliases' => 
  array (
    0 => 'mixed',
  ),
  'reflectionobject::gettraitnames' => 
  array (
    0 => 'mixed',
  ),
  'reflectionobject::gettraits' => 
  array (
    0 => 'mixed',
  ),
  'reflectionobject::hasconstant' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
  ),
  'reflectionobject::hasmethod' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
  ),
  'reflectionobject::hasproperty' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
  ),
  'reflectionobject::implementsinterface' => 
  array (
    0 => 'mixed',
    'interface' => 'mixed',
  ),
  'reflectionobject::innamespace' => 
  array (
    0 => 'mixed',
  ),
  'reflectionobject::isabstract' => 
  array (
    0 => 'mixed',
  ),
  'reflectionobject::isanonymous' => 
  array (
    0 => 'mixed',
  ),
  'reflectionobject::iscloneable' => 
  array (
    0 => 'mixed',
  ),
  'reflectionobject::isfinal' => 
  array (
    0 => 'mixed',
  ),
  'reflectionobject::isinstance' => 
  array (
    0 => 'mixed',
    'object' => 'mixed',
  ),
  'reflectionobject::isinstantiable' => 
  array (
    0 => 'mixed',
  ),
  'reflectionobject::isinterface' => 
  array (
    0 => 'mixed',
  ),
  'reflectionobject::isinternal' => 
  array (
    0 => 'mixed',
  ),
  'reflectionobject::isiterable' => 
  array (
    0 => 'mixed',
  ),
  'reflectionobject::isiterateable' => 
  array (
    0 => 'mixed',
  ),
  'reflectionobject::issubclassof' => 
  array (
    0 => 'mixed',
    'class' => 'mixed',
  ),
  'reflectionobject::istrait' => 
  array (
    0 => 'mixed',
  ),
  'reflectionobject::isuserdefined' => 
  array (
    0 => 'mixed',
  ),
  'reflectionobject::newinstance' => 
  array (
    0 => 'mixed',
    'args' => 'mixed',
  ),
  'reflectionobject::newinstanceargs' => 
  array (
    0 => 'mixed',
    'args=' => 'array<array-key, mixed>',
  ),
  'reflectionobject::newinstancewithoutconstructor' => 
  array (
    0 => 'mixed',
  ),
  'reflectionobject::setstaticpropertyvalue' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
    'value' => 'mixed',
  ),
  'reflectionparameter::__clone' => 
  array (
    0 => 'mixed',
  ),
  'reflectionparameter::__construct' => 
  array (
    0 => 'void',
    'function' => 'mixed',
    'parameter' => 'mixed',
  ),
  'reflectionparameter::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'reflectionparameter::allowsnull' => 
  array (
    0 => 'mixed',
  ),
  'reflectionparameter::canbepassedbyvalue' => 
  array (
    0 => 'mixed',
  ),
  'reflectionparameter::export' => 
  array (
    0 => 'mixed',
    'function' => 'mixed',
    'parameter' => 'mixed',
    'return=' => 'mixed',
  ),
  'reflectionparameter::getclass' => 
  array (
    0 => 'mixed',
  ),
  'reflectionparameter::getdeclaringclass' => 
  array (
    0 => 'mixed',
  ),
  'reflectionparameter::getdeclaringfunction' => 
  array (
    0 => 'mixed',
  ),
  'reflectionparameter::getdefaultvalue' => 
  array (
    0 => 'mixed',
  ),
  'reflectionparameter::getdefaultvalueconstantname' => 
  array (
    0 => 'mixed',
  ),
  'reflectionparameter::getname' => 
  array (
    0 => 'mixed',
  ),
  'reflectionparameter::getposition' => 
  array (
    0 => 'mixed',
  ),
  'reflectionparameter::gettype' => 
  array (
    0 => 'mixed',
  ),
  'reflectionparameter::hastype' => 
  array (
    0 => 'mixed',
  ),
  'reflectionparameter::isarray' => 
  array (
    0 => 'mixed',
  ),
  'reflectionparameter::iscallable' => 
  array (
    0 => 'mixed',
  ),
  'reflectionparameter::isdefaultvalueavailable' => 
  array (
    0 => 'mixed',
  ),
  'reflectionparameter::isdefaultvalueconstant' => 
  array (
    0 => 'mixed',
  ),
  'reflectionparameter::isoptional' => 
  array (
    0 => 'mixed',
  ),
  'reflectionparameter::ispassedbyreference' => 
  array (
    0 => 'mixed',
  ),
  'reflectionparameter::isvariadic' => 
  array (
    0 => 'mixed',
  ),
  'reflectionproperty::__clone' => 
  array (
    0 => 'mixed',
  ),
  'reflectionproperty::__construct' => 
  array (
    0 => 'void',
    'class' => 'mixed',
    'name' => 'mixed',
  ),
  'reflectionproperty::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'reflectionproperty::export' => 
  array (
    0 => 'mixed',
    'class' => 'mixed',
    'name' => 'mixed',
    'return=' => 'mixed',
  ),
  'reflectionproperty::getdeclaringclass' => 
  array (
    0 => 'mixed',
  ),
  'reflectionproperty::getdoccomment' => 
  array (
    0 => 'mixed',
  ),
  'reflectionproperty::getmodifiers' => 
  array (
    0 => 'mixed',
  ),
  'reflectionproperty::getname' => 
  array (
    0 => 'mixed',
  ),
  'reflectionproperty::getvalue' => 
  array (
    0 => 'mixed',
    'object=' => 'mixed',
  ),
  'reflectionproperty::isdefault' => 
  array (
    0 => 'mixed',
  ),
  'reflectionproperty::isprivate' => 
  array (
    0 => 'mixed',
  ),
  'reflectionproperty::isprotected' => 
  array (
    0 => 'mixed',
  ),
  'reflectionproperty::ispublic' => 
  array (
    0 => 'mixed',
  ),
  'reflectionproperty::isstatic' => 
  array (
    0 => 'mixed',
  ),
  'reflectionproperty::setaccessible' => 
  array (
    0 => 'mixed',
    'visible' => 'mixed',
  ),
  'reflectionproperty::setvalue' => 
  array (
    0 => 'mixed',
    'object' => 'mixed',
    'value=' => 'mixed',
  ),
  'reflectiontype::__clone' => 
  array (
    0 => 'mixed',
  ),
  'reflectiontype::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'reflectiontype::allowsnull' => 
  array (
    0 => 'mixed',
  ),
  'reflectiontype::isbuiltin' => 
  array (
    0 => 'mixed',
  ),
  'reflectionzendextension::__clone' => 
  array (
    0 => 'mixed',
  ),
  'reflectionzendextension::__construct' => 
  array (
    0 => 'void',
    'name' => 'mixed',
  ),
  'reflectionzendextension::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'reflectionzendextension::export' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
    'return=' => 'mixed',
  ),
  'reflectionzendextension::getauthor' => 
  array (
    0 => 'mixed',
  ),
  'reflectionzendextension::getcopyright' => 
  array (
    0 => 'mixed',
  ),
  'reflectionzendextension::getname' => 
  array (
    0 => 'mixed',
  ),
  'reflectionzendextension::geturl' => 
  array (
    0 => 'mixed',
  ),
  'reflectionzendextension::getversion' => 
  array (
    0 => 'mixed',
  ),
  'regexiterator::__construct' => 
  array (
    0 => 'void',
    'iterator' => 'Iterator',
    'regex' => 'mixed',
    'mode=' => 'mixed',
    'flags=' => 'mixed',
    'preg_flags=' => 'mixed',
  ),
  'regexiterator::accept' => 
  array (
    0 => 'mixed',
  ),
  'regexiterator::current' => 
  array (
    0 => 'mixed',
  ),
  'regexiterator::getflags' => 
  array (
    0 => 'mixed',
  ),
  'regexiterator::getinneriterator' => 
  array (
    0 => 'mixed',
  ),
  'regexiterator::getmode' => 
  array (
    0 => 'mixed',
  ),
  'regexiterator::getpregflags' => 
  array (
    0 => 'mixed',
  ),
  'regexiterator::getregex' => 
  array (
    0 => 'mixed',
  ),
  'regexiterator::key' => 
  array (
    0 => 'mixed',
  ),
  'regexiterator::next' => 
  array (
    0 => 'mixed',
  ),
  'regexiterator::rewind' => 
  array (
    0 => 'mixed',
  ),
  'regexiterator::setflags' => 
  array (
    0 => 'mixed',
    'flags' => 'mixed',
  ),
  'regexiterator::setmode' => 
  array (
    0 => 'mixed',
    'mode' => 'mixed',
  ),
  'regexiterator::setpregflags' => 
  array (
    0 => 'mixed',
    'preg_flags' => 'mixed',
  ),
  'regexiterator::valid' => 
  array (
    0 => 'mixed',
  ),
  'register_shutdown_function' => 
  array (
    0 => 'mixed',
    'function_name' => 'mixed',
    '...parameters=' => 'mixed',
  ),
  'register_tick_function' => 
  array (
    0 => 'mixed',
    'function_name' => 'mixed',
    '...parameters=' => 'mixed',
  ),
  'rename' => 
  array (
    0 => 'mixed',
    'old_name' => 'mixed',
    'new_name' => 'mixed',
    'context=' => 'mixed',
  ),
  'reset' => 
  array (
    0 => 'mixed',
    '&arg' => 'mixed',
  ),
  'resourcebundle::__construct' => 
  array (
    0 => 'void',
    'locale' => 'mixed',
    'bundlename' => 'mixed',
    'fallback=' => 'mixed',
  ),
  'resourcebundle::count' => 
  array (
    0 => 'mixed',
  ),
  'resourcebundle::create' => 
  array (
    0 => 'mixed',
    'locale' => 'mixed',
    'bundlename' => 'mixed',
    'fallback=' => 'mixed',
  ),
  'resourcebundle::get' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
    'fallback=' => 'mixed',
  ),
  'resourcebundle::geterrorcode' => 
  array (
    0 => 'mixed',
  ),
  'resourcebundle::geterrormessage' => 
  array (
    0 => 'mixed',
  ),
  'resourcebundle::getlocales' => 
  array (
    0 => 'mixed',
    'bundlename' => 'mixed',
  ),
  'resourcebundle_count' => 
  array (
    0 => 'mixed',
    'bundle' => 'mixed',
  ),
  'resourcebundle_create' => 
  array (
    0 => 'mixed',
    'locale' => 'mixed',
    'bundlename' => 'mixed',
    'fallback=' => 'mixed',
  ),
  'resourcebundle_get' => 
  array (
    0 => 'mixed',
    'bundle' => 'mixed',
    'index' => 'mixed',
    'fallback=' => 'mixed',
  ),
  'resourcebundle_get_error_code' => 
  array (
    0 => 'mixed',
    'bundle' => 'mixed',
  ),
  'resourcebundle_get_error_message' => 
  array (
    0 => 'mixed',
    'bundle' => 'mixed',
  ),
  'resourcebundle_locales' => 
  array (
    0 => 'mixed',
    'bundlename' => 'mixed',
  ),
  'restore_error_handler' => 
  array (
    0 => 'mixed',
  ),
  'restore_exception_handler' => 
  array (
    0 => 'mixed',
  ),
  'restore_include_path' => 
  array (
    0 => 'mixed',
  ),
  'rewind' => 
  array (
    0 => 'mixed',
    'fp' => 'mixed',
  ),
  'rewinddir' => 
  array (
    0 => 'mixed',
    'dir_handle=' => 'mixed',
  ),
  'rmdir' => 
  array (
    0 => 'mixed',
    'dirname' => 'mixed',
    'context=' => 'mixed',
  ),
  'round' => 
  array (
    0 => 'mixed',
    'number' => 'mixed',
    'precision=' => 'mixed',
    'mode=' => 'mixed',
  ),
  'rsort' => 
  array (
    0 => 'mixed',
    '&arg' => 'mixed',
    'sort_flags=' => 'mixed',
  ),
  'rtrim' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
    'character_mask=' => 'mixed',
  ),
  'runtimeexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'runtimeexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'runtimeexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'runtimeexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'runtimeexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'runtimeexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'runtimeexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'runtimeexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'runtimeexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'runtimeexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'runtimeexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'scandir' => 
  array (
    0 => 'mixed',
    'dir' => 'mixed',
    'sorting_order=' => 'mixed',
    'context=' => 'mixed',
  ),
  'serialize' => 
  array (
    0 => 'mixed',
    'var' => 'mixed',
  ),
  'session_abort' => 
  array (
    0 => 'mixed',
  ),
  'session_cache_expire' => 
  array (
    0 => 'mixed',
    'new_cache_expire=' => 'mixed',
  ),
  'session_cache_limiter' => 
  array (
    0 => 'mixed',
    'cache_limiter=' => 'mixed',
  ),
  'session_commit' => 
  array (
    0 => 'mixed',
  ),
  'session_create_id' => 
  array (
    0 => 'mixed',
    'prefix=' => 'mixed',
  ),
  'session_decode' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
  ),
  'session_destroy' => 
  array (
    0 => 'mixed',
  ),
  'session_encode' => 
  array (
    0 => 'mixed',
  ),
  'session_gc' => 
  array (
    0 => 'mixed',
  ),
  'session_get_cookie_params' => 
  array (
    0 => 'mixed',
  ),
  'session_id' => 
  array (
    0 => 'mixed',
    'id=' => 'mixed',
  ),
  'session_module_name' => 
  array (
    0 => 'mixed',
    'module=' => 'mixed',
  ),
  'session_name' => 
  array (
    0 => 'mixed',
    'name=' => 'mixed',
  ),
  'session_regenerate_id' => 
  array (
    0 => 'mixed',
    'delete_old_session=' => 'mixed',
  ),
  'session_register_shutdown' => 
  array (
    0 => 'mixed',
  ),
  'session_reset' => 
  array (
    0 => 'mixed',
  ),
  'session_save_path' => 
  array (
    0 => 'mixed',
    'path=' => 'mixed',
  ),
  'session_set_cookie_params' => 
  array (
    0 => 'mixed',
    'lifetime_or_options' => 'mixed',
    'path=' => 'mixed',
    'domain=' => 'mixed',
    'secure=' => 'mixed',
    'httponly=' => 'mixed',
  ),
  'session_set_save_handler' => 
  array (
    0 => 'mixed',
    'open' => 'mixed',
    'close=' => 'mixed',
    'read=' => 'mixed',
    'write=' => 'mixed',
    'destroy=' => 'mixed',
    'gc=' => 'mixed',
    'create_sid=' => 'mixed',
    'validate_sid=' => 'mixed',
    'update_timestamp=' => 'mixed',
  ),
  'session_start' => 
  array (
    0 => 'mixed',
    'options=' => 'mixed',
  ),
  'session_status' => 
  array (
    0 => 'mixed',
  ),
  'session_unset' => 
  array (
    0 => 'mixed',
  ),
  'session_write_close' => 
  array (
    0 => 'mixed',
  ),
  'sessionhandler::close' => 
  array (
    0 => 'mixed',
  ),
  'sessionhandler::create_sid' => 
  array (
    0 => 'mixed',
  ),
  'sessionhandler::destroy' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'sessionhandler::gc' => 
  array (
    0 => 'mixed',
    'maxlifetime' => 'mixed',
  ),
  'sessionhandler::open' => 
  array (
    0 => 'mixed',
    'save_path' => 'mixed',
    'session_name' => 'mixed',
  ),
  'sessionhandler::read' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'sessionhandler::write' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'val' => 'mixed',
  ),
  'set_error_handler' => 
  array (
    0 => 'mixed',
    'error_handler' => 'mixed',
    'error_types=' => 'mixed',
  ),
  'set_exception_handler' => 
  array (
    0 => 'mixed',
    'exception_handler' => 'mixed',
  ),
  'set_file_buffer' => 
  array (
    0 => 'mixed',
    'fp' => 'mixed',
    'buffer' => 'mixed',
  ),
  'set_include_path' => 
  array (
    0 => 'mixed',
    'new_include_path' => 'mixed',
  ),
  'set_time_limit' => 
  array (
    0 => 'mixed',
    'seconds' => 'mixed',
  ),
  'setcookie' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
    'value=' => 'mixed',
    'expires_or_options=' => 'mixed',
    'path=' => 'mixed',
    'domain=' => 'mixed',
    'secure=' => 'mixed',
    'httponly=' => 'mixed',
  ),
  'setlocale' => 
  array (
    0 => 'mixed',
    'category' => 'mixed',
    '...locales' => 'mixed',
  ),
  'setrawcookie' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
    'value=' => 'mixed',
    'expires_or_options=' => 'mixed',
    'path=' => 'mixed',
    'domain=' => 'mixed',
    'secure=' => 'mixed',
    'httponly=' => 'mixed',
  ),
  'settype' => 
  array (
    0 => 'mixed',
    '&var' => 'mixed',
    'type' => 'mixed',
  ),
  'sha1' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
    'raw_output=' => 'mixed',
  ),
  'sha1_file' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
    'raw_output=' => 'mixed',
  ),
  'shell_exec' => 
  array (
    0 => 'mixed',
    'cmd' => 'mixed',
  ),
  'show_source' => 
  array (
    0 => 'mixed',
    'file_name' => 'mixed',
    'return=' => 'mixed',
  ),
  'shuffle' => 
  array (
    0 => 'mixed',
    '&arg' => 'mixed',
  ),
  'similar_text' => 
  array (
    0 => 'mixed',
    'str1' => 'mixed',
    'str2' => 'mixed',
    '&percent=' => 'mixed',
  ),
  'simplexml_import_dom' => 
  array (
    0 => 'mixed',
    'node' => 'mixed',
    'class_name=' => 'mixed',
  ),
  'simplexml_load_file' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
    'class_name=' => 'mixed',
    'options=' => 'mixed',
    'ns=' => 'mixed',
    'is_prefix=' => 'mixed',
  ),
  'simplexml_load_string' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
    'class_name=' => 'mixed',
    'options=' => 'mixed',
    'ns=' => 'mixed',
    'is_prefix=' => 'mixed',
  ),
  'simplexmlelement::__construct' => 
  array (
    0 => 'void',
    'data' => 'mixed',
    'options=' => 'mixed',
    'data_is_url=' => 'mixed',
    'ns=' => 'mixed',
    'is_prefix=' => 'mixed',
  ),
  'simplexmlelement::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'simplexmlelement::addattribute' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
    'value=' => 'mixed',
    'ns=' => 'mixed',
  ),
  'simplexmlelement::addchild' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
    'value=' => 'mixed',
    'ns=' => 'mixed',
  ),
  'simplexmlelement::asxml' => 
  array (
    0 => 'mixed',
    'filename=' => 'mixed',
  ),
  'simplexmlelement::attributes' => 
  array (
    0 => 'mixed',
    'ns=' => 'mixed',
    'is_prefix=' => 'mixed',
  ),
  'simplexmlelement::children' => 
  array (
    0 => 'mixed',
    'ns=' => 'mixed',
    'is_prefix=' => 'mixed',
  ),
  'simplexmlelement::count' => 
  array (
    0 => 'mixed',
  ),
  'simplexmlelement::getdocnamespaces' => 
  array (
    0 => 'mixed',
    'recursve=' => 'mixed',
    'from_root=' => 'mixed',
  ),
  'simplexmlelement::getname' => 
  array (
    0 => 'mixed',
  ),
  'simplexmlelement::getnamespaces' => 
  array (
    0 => 'mixed',
    'recursve=' => 'mixed',
  ),
  'simplexmlelement::registerxpathnamespace' => 
  array (
    0 => 'mixed',
    'prefix' => 'mixed',
    'ns' => 'mixed',
  ),
  'simplexmlelement::savexml' => 
  array (
    0 => 'mixed',
    'filename=' => 'mixed',
  ),
  'simplexmlelement::xpath' => 
  array (
    0 => 'mixed',
    'path' => 'mixed',
  ),
  'simplexmliterator::__construct' => 
  array (
    0 => 'void',
    'data' => 'mixed',
    'options=' => 'mixed',
    'data_is_url=' => 'mixed',
    'ns=' => 'mixed',
    'is_prefix=' => 'mixed',
  ),
  'simplexmliterator::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'simplexmliterator::addattribute' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
    'value=' => 'mixed',
    'ns=' => 'mixed',
  ),
  'simplexmliterator::addchild' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
    'value=' => 'mixed',
    'ns=' => 'mixed',
  ),
  'simplexmliterator::asxml' => 
  array (
    0 => 'mixed',
    'filename=' => 'mixed',
  ),
  'simplexmliterator::attributes' => 
  array (
    0 => 'mixed',
    'ns=' => 'mixed',
    'is_prefix=' => 'mixed',
  ),
  'simplexmliterator::children' => 
  array (
    0 => 'mixed',
    'ns=' => 'mixed',
    'is_prefix=' => 'mixed',
  ),
  'simplexmliterator::count' => 
  array (
    0 => 'mixed',
  ),
  'simplexmliterator::current' => 
  array (
    0 => 'mixed',
  ),
  'simplexmliterator::getchildren' => 
  array (
    0 => 'mixed',
  ),
  'simplexmliterator::getdocnamespaces' => 
  array (
    0 => 'mixed',
    'recursve=' => 'mixed',
    'from_root=' => 'mixed',
  ),
  'simplexmliterator::getname' => 
  array (
    0 => 'mixed',
  ),
  'simplexmliterator::getnamespaces' => 
  array (
    0 => 'mixed',
    'recursve=' => 'mixed',
  ),
  'simplexmliterator::haschildren' => 
  array (
    0 => 'mixed',
  ),
  'simplexmliterator::key' => 
  array (
    0 => 'mixed',
  ),
  'simplexmliterator::next' => 
  array (
    0 => 'mixed',
  ),
  'simplexmliterator::registerxpathnamespace' => 
  array (
    0 => 'mixed',
    'prefix' => 'mixed',
    'ns' => 'mixed',
  ),
  'simplexmliterator::rewind' => 
  array (
    0 => 'mixed',
  ),
  'simplexmliterator::savexml' => 
  array (
    0 => 'mixed',
    'filename=' => 'mixed',
  ),
  'simplexmliterator::valid' => 
  array (
    0 => 'mixed',
  ),
  'simplexmliterator::xpath' => 
  array (
    0 => 'mixed',
    'path' => 'mixed',
  ),
  'sin' => 
  array (
    0 => 'mixed',
    'number' => 'mixed',
  ),
  'sinh' => 
  array (
    0 => 'mixed',
    'number' => 'mixed',
  ),
  'sizeof' => 
  array (
    0 => 'mixed',
    'var' => 'mixed',
    'mode=' => 'mixed',
  ),
  'sleep' => 
  array (
    0 => 'mixed',
    'seconds' => 'mixed',
  ),
  'soapclient::__call' => 
  array (
    0 => 'mixed',
    'function_name' => 'mixed',
    'arguments' => 'mixed',
  ),
  'soapclient::__dorequest' => 
  array (
    0 => 'mixed',
    'request' => 'mixed',
    'location' => 'mixed',
    'action' => 'mixed',
    'version' => 'mixed',
    'one_way=' => 'mixed',
  ),
  'soapclient::__getcookies' => 
  array (
    0 => 'mixed',
  ),
  'soapclient::__getfunctions' => 
  array (
    0 => 'mixed',
  ),
  'soapclient::__getlastrequest' => 
  array (
    0 => 'mixed',
  ),
  'soapclient::__getlastrequestheaders' => 
  array (
    0 => 'mixed',
  ),
  'soapclient::__getlastresponse' => 
  array (
    0 => 'mixed',
  ),
  'soapclient::__getlastresponseheaders' => 
  array (
    0 => 'mixed',
  ),
  'soapclient::__gettypes' => 
  array (
    0 => 'mixed',
  ),
  'soapclient::__setcookie' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
    'value=' => 'mixed',
  ),
  'soapclient::__setlocation' => 
  array (
    0 => 'mixed',
    'new_location=' => 'mixed',
  ),
  'soapclient::__setsoapheaders' => 
  array (
    0 => 'mixed',
    'soapheaders=' => 'mixed',
  ),
  'soapclient::__soapcall' => 
  array (
    0 => 'mixed',
    'function_name' => 'mixed',
    'arguments' => 'mixed',
    'options=' => 'mixed',
    'input_headers=' => 'mixed',
    '&output_headers=' => 'mixed',
  ),
  'soapclient::soapclient' => 
  array (
    0 => 'mixed',
    'wsdl' => 'mixed',
    'options=' => 'mixed',
  ),
  'soapfault::__clone' => 
  array (
    0 => 'mixed',
  ),
  'soapfault::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'soapfault::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'soapfault::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'soapfault::getcode' => 
  array (
    0 => 'mixed',
  ),
  'soapfault::getfile' => 
  array (
    0 => 'mixed',
  ),
  'soapfault::getline' => 
  array (
    0 => 'mixed',
  ),
  'soapfault::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'soapfault::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'soapfault::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'soapfault::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'soapfault::soapfault' => 
  array (
    0 => 'mixed',
    'faultcode' => 'mixed',
    'faultstring' => 'mixed',
    'faultactor=' => 'mixed',
    'detail=' => 'mixed',
    'faultname=' => 'mixed',
    'headerfault=' => 'mixed',
  ),
  'soapheader::soapheader' => 
  array (
    0 => 'mixed',
    'namespace' => 'mixed',
    'name' => 'mixed',
    'data=' => 'mixed',
    'mustunderstand=' => 'mixed',
    'actor=' => 'mixed',
  ),
  'soapparam::soapparam' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
    'name' => 'mixed',
  ),
  'soapserver::addfunction' => 
  array (
    0 => 'mixed',
    'functions' => 'mixed',
  ),
  'soapserver::addsoapheader' => 
  array (
    0 => 'mixed',
    'object' => 'mixed',
  ),
  'soapserver::fault' => 
  array (
    0 => 'mixed',
    'code' => 'mixed',
    'string' => 'mixed',
    'actor=' => 'mixed',
    'details=' => 'mixed',
    'name=' => 'mixed',
  ),
  'soapserver::getfunctions' => 
  array (
    0 => 'mixed',
  ),
  'soapserver::handle' => 
  array (
    0 => 'mixed',
    'soap_request=' => 'mixed',
  ),
  'soapserver::setclass' => 
  array (
    0 => 'mixed',
    'class_name' => 'mixed',
    '...args=' => 'mixed',
  ),
  'soapserver::setobject' => 
  array (
    0 => 'mixed',
    'object' => 'mixed',
  ),
  'soapserver::setpersistence' => 
  array (
    0 => 'mixed',
    'mode' => 'mixed',
  ),
  'soapserver::soapserver' => 
  array (
    0 => 'mixed',
    'wsdl' => 'mixed',
    'options=' => 'mixed',
  ),
  'soapvar::soapvar' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
    'encoding' => 'mixed',
    'type_name=' => 'mixed',
    'type_namespace=' => 'mixed',
    'node_name=' => 'mixed',
    'node_namespace=' => 'mixed',
  ),
  'socket_get_status' => 
  array (
    0 => 'mixed',
    'fp' => 'mixed',
  ),
  'socket_set_blocking' => 
  array (
    0 => 'mixed',
    'socket' => 'mixed',
    'mode' => 'mixed',
  ),
  'socket_set_timeout' => 
  array (
    0 => 'mixed',
    'stream' => 'mixed',
    'seconds' => 'mixed',
    'microseconds=' => 'mixed',
  ),
  'sodium_add' => 
  array (
    0 => 'mixed',
    '&string_1' => 'mixed',
    'string_2' => 'mixed',
  ),
  'sodium_base642bin' => 
  array (
    0 => 'mixed',
    'string_1' => 'mixed',
    'id' => 'mixed',
    'string_2=' => 'mixed',
  ),
  'sodium_bin2base64' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    'id' => 'mixed',
  ),
  'sodium_bin2hex' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
  ),
  'sodium_compare' => 
  array (
    0 => 'mixed',
    'string_1' => 'mixed',
    'string_2' => 'mixed',
  ),
  'sodium_crypto_aead_aes256gcm_is_available' => 
  array (
    0 => 'mixed',
  ),
  'sodium_crypto_aead_chacha20poly1305_decrypt' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    'ad' => 'mixed',
    'nonce' => 'mixed',
    'key' => 'mixed',
  ),
  'sodium_crypto_aead_chacha20poly1305_encrypt' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    'ad' => 'mixed',
    'nonce' => 'mixed',
    'key' => 'mixed',
  ),
  'sodium_crypto_aead_chacha20poly1305_ietf_decrypt' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    'ad' => 'mixed',
    'nonce' => 'mixed',
    'key' => 'mixed',
  ),
  'sodium_crypto_aead_chacha20poly1305_ietf_encrypt' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    'ad' => 'mixed',
    'nonce' => 'mixed',
    'key' => 'mixed',
  ),
  'sodium_crypto_aead_chacha20poly1305_ietf_keygen' => 
  array (
    0 => 'mixed',
  ),
  'sodium_crypto_aead_chacha20poly1305_keygen' => 
  array (
    0 => 'mixed',
  ),
  'sodium_crypto_aead_xchacha20poly1305_ietf_decrypt' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    'ad' => 'mixed',
    'nonce' => 'mixed',
    'key' => 'mixed',
  ),
  'sodium_crypto_aead_xchacha20poly1305_ietf_encrypt' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    'ad' => 'mixed',
    'nonce' => 'mixed',
    'key' => 'mixed',
  ),
  'sodium_crypto_aead_xchacha20poly1305_ietf_keygen' => 
  array (
    0 => 'mixed',
  ),
  'sodium_crypto_auth' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    'key' => 'mixed',
  ),
  'sodium_crypto_auth_keygen' => 
  array (
    0 => 'mixed',
  ),
  'sodium_crypto_auth_verify' => 
  array (
    0 => 'mixed',
    'signature' => 'mixed',
    'string' => 'mixed',
    'key' => 'mixed',
  ),
  'sodium_crypto_box' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    'nonce' => 'mixed',
    'key' => 'mixed',
  ),
  'sodium_crypto_box_keypair' => 
  array (
    0 => 'mixed',
  ),
  'sodium_crypto_box_keypair_from_secretkey_and_publickey' => 
  array (
    0 => 'mixed',
    'secret_key' => 'mixed',
    'public_key' => 'mixed',
  ),
  'sodium_crypto_box_open' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    'nonce' => 'mixed',
    'key' => 'mixed',
  ),
  'sodium_crypto_box_publickey' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'sodium_crypto_box_publickey_from_secretkey' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'sodium_crypto_box_seal' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    'key' => 'mixed',
  ),
  'sodium_crypto_box_seal_open' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    'key' => 'mixed',
  ),
  'sodium_crypto_box_secretkey' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'sodium_crypto_box_seed_keypair' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'sodium_crypto_generichash' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    'key=' => 'mixed',
    'length=' => 'mixed',
  ),
  'sodium_crypto_generichash_final' => 
  array (
    0 => 'mixed',
    '&state' => 'mixed',
    'length=' => 'mixed',
  ),
  'sodium_crypto_generichash_init' => 
  array (
    0 => 'mixed',
    'key=' => 'mixed',
    'length=' => 'mixed',
  ),
  'sodium_crypto_generichash_keygen' => 
  array (
    0 => 'mixed',
  ),
  'sodium_crypto_generichash_update' => 
  array (
    0 => 'mixed',
    '&state' => 'mixed',
    'string' => 'mixed',
  ),
  'sodium_crypto_kdf_derive_from_key' => 
  array (
    0 => 'mixed',
    'subkey_len' => 'mixed',
    'subkey_id' => 'mixed',
    'context' => 'mixed',
    'key' => 'mixed',
  ),
  'sodium_crypto_kdf_keygen' => 
  array (
    0 => 'mixed',
  ),
  'sodium_crypto_kx_client_session_keys' => 
  array (
    0 => 'mixed',
    'client_keypair' => 'mixed',
    'server_key' => 'mixed',
  ),
  'sodium_crypto_kx_keypair' => 
  array (
    0 => 'mixed',
  ),
  'sodium_crypto_kx_publickey' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'sodium_crypto_kx_secretkey' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'sodium_crypto_kx_seed_keypair' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
  ),
  'sodium_crypto_kx_server_session_keys' => 
  array (
    0 => 'mixed',
    'server_keypair' => 'mixed',
    'client_key' => 'mixed',
  ),
  'sodium_crypto_pwhash' => 
  array (
    0 => 'mixed',
    'length' => 'mixed',
    'password' => 'mixed',
    'salt' => 'mixed',
    'opslimit' => 'mixed',
    'memlimit' => 'mixed',
    'alg=' => 'mixed',
  ),
  'sodium_crypto_pwhash_scryptsalsa208sha256' => 
  array (
    0 => 'mixed',
    'length' => 'mixed',
    'password' => 'mixed',
    'salt' => 'mixed',
    'opslimit' => 'mixed',
    'memlimit' => 'mixed',
    'alg=' => 'mixed',
  ),
  'sodium_crypto_pwhash_scryptsalsa208sha256_str' => 
  array (
    0 => 'mixed',
    'password' => 'mixed',
    'opslimit' => 'mixed',
    'memlimit' => 'mixed',
  ),
  'sodium_crypto_pwhash_scryptsalsa208sha256_str_verify' => 
  array (
    0 => 'mixed',
    'hash' => 'mixed',
    'password' => 'mixed',
  ),
  'sodium_crypto_pwhash_str' => 
  array (
    0 => 'mixed',
    'password' => 'mixed',
    'opslimit' => 'mixed',
    'memlimit' => 'mixed',
  ),
  'sodium_crypto_pwhash_str_needs_rehash' => 
  array (
    0 => 'mixed',
    'password' => 'mixed',
    'opslimit' => 'mixed',
    'memlimit' => 'mixed',
  ),
  'sodium_crypto_pwhash_str_verify' => 
  array (
    0 => 'mixed',
    'hash' => 'mixed',
    'password' => 'mixed',
  ),
  'sodium_crypto_scalarmult' => 
  array (
    0 => 'mixed',
    'string_1' => 'mixed',
    'string_2' => 'mixed',
  ),
  'sodium_crypto_scalarmult_base' => 
  array (
    0 => 'mixed',
    'string_1' => 'mixed',
    'string_2' => 'mixed',
  ),
  'sodium_crypto_secretbox' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    'nonce' => 'mixed',
    'key' => 'mixed',
  ),
  'sodium_crypto_secretbox_keygen' => 
  array (
    0 => 'mixed',
  ),
  'sodium_crypto_secretbox_open' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    'nonce' => 'mixed',
    'key' => 'mixed',
  ),
  'sodium_crypto_secretstream_xchacha20poly1305_init_pull' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    'key' => 'mixed',
  ),
  'sodium_crypto_secretstream_xchacha20poly1305_init_push' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'sodium_crypto_secretstream_xchacha20poly1305_keygen' => 
  array (
    0 => 'mixed',
  ),
  'sodium_crypto_secretstream_xchacha20poly1305_pull' => 
  array (
    0 => 'mixed',
    '&state' => 'mixed',
    'string' => 'mixed',
    'string=' => 'mixed',
  ),
  'sodium_crypto_secretstream_xchacha20poly1305_push' => 
  array (
    0 => 'mixed',
    '&state' => 'mixed',
    'string' => 'mixed',
    'string=' => 'mixed',
    'long=' => 'mixed',
  ),
  'sodium_crypto_secretstream_xchacha20poly1305_rekey' => 
  array (
    0 => 'mixed',
    '&state' => 'mixed',
  ),
  'sodium_crypto_shorthash' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    'key' => 'mixed',
  ),
  'sodium_crypto_shorthash_keygen' => 
  array (
    0 => 'mixed',
  ),
  'sodium_crypto_sign' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    'keypair' => 'mixed',
  ),
  'sodium_crypto_sign_detached' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    'keypair' => 'mixed',
  ),
  'sodium_crypto_sign_ed25519_pk_to_curve25519' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'sodium_crypto_sign_ed25519_sk_to_curve25519' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'sodium_crypto_sign_keypair' => 
  array (
    0 => 'mixed',
  ),
  'sodium_crypto_sign_keypair_from_secretkey_and_publickey' => 
  array (
    0 => 'mixed',
    'secret_key' => 'mixed',
    'public_key' => 'mixed',
  ),
  'sodium_crypto_sign_open' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    'keypair' => 'mixed',
  ),
  'sodium_crypto_sign_publickey' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'sodium_crypto_sign_publickey_from_secretkey' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'sodium_crypto_sign_secretkey' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'sodium_crypto_sign_seed_keypair' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'sodium_crypto_sign_verify_detached' => 
  array (
    0 => 'mixed',
    'signature' => 'mixed',
    'string' => 'mixed',
    'key' => 'mixed',
  ),
  'sodium_crypto_stream' => 
  array (
    0 => 'mixed',
    'length' => 'mixed',
    'nonce' => 'mixed',
    'key' => 'mixed',
  ),
  'sodium_crypto_stream_keygen' => 
  array (
    0 => 'mixed',
  ),
  'sodium_crypto_stream_xor' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    'nonce' => 'mixed',
    'key' => 'mixed',
  ),
  'sodium_hex2bin' => 
  array (
    0 => 'mixed',
    'string_1' => 'mixed',
    'string_2=' => 'mixed',
  ),
  'sodium_increment' => 
  array (
    0 => 'mixed',
    '&string' => 'mixed',
  ),
  'sodium_memcmp' => 
  array (
    0 => 'mixed',
    'string_1' => 'mixed',
    'string_2' => 'mixed',
  ),
  'sodium_memzero' => 
  array (
    0 => 'mixed',
    '&reference' => 'mixed',
  ),
  'sodium_pad' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    'length' => 'mixed',
  ),
  'sodium_unpad' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    'length' => 'mixed',
  ),
  'sodiumexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'sodiumexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'sodiumexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'sodiumexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'sodiumexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'sodiumexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'sodiumexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'sodiumexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'sodiumexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'sodiumexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'sodiumexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'sort' => 
  array (
    0 => 'mixed',
    '&arg' => 'mixed',
    'sort_flags=' => 'mixed',
  ),
  'soundex' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
  ),
  'spl_autoload' => 
  array (
    0 => 'mixed',
    'class_name' => 'mixed',
    'file_extensions=' => 'mixed',
  ),
  'spl_autoload_call' => 
  array (
    0 => 'mixed',
    'class_name' => 'mixed',
  ),
  'spl_autoload_extensions' => 
  array (
    0 => 'mixed',
    'file_extensions=' => 'mixed',
  ),
  'spl_autoload_functions' => 
  array (
    0 => 'mixed',
  ),
  'spl_autoload_register' => 
  array (
    0 => 'mixed',
    'autoload_function=' => 'mixed',
    'throw=' => 'mixed',
    'prepend=' => 'mixed',
  ),
  'spl_autoload_unregister' => 
  array (
    0 => 'mixed',
    'autoload_function' => 'mixed',
  ),
  'spl_classes' => 
  array (
    0 => 'mixed',
  ),
  'spl_object_hash' => 
  array (
    0 => 'mixed',
    'obj' => 'mixed',
  ),
  'spl_object_id' => 
  array (
    0 => 'mixed',
    'obj' => 'mixed',
  ),
  'spldoublylinkedlist::add' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
    'newval' => 'mixed',
  ),
  'spldoublylinkedlist::bottom' => 
  array (
    0 => 'mixed',
  ),
  'spldoublylinkedlist::count' => 
  array (
    0 => 'mixed',
  ),
  'spldoublylinkedlist::current' => 
  array (
    0 => 'mixed',
  ),
  'spldoublylinkedlist::getiteratormode' => 
  array (
    0 => 'mixed',
  ),
  'spldoublylinkedlist::isempty' => 
  array (
    0 => 'mixed',
  ),
  'spldoublylinkedlist::key' => 
  array (
    0 => 'mixed',
  ),
  'spldoublylinkedlist::next' => 
  array (
    0 => 'mixed',
  ),
  'spldoublylinkedlist::offsetexists' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'spldoublylinkedlist::offsetget' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'spldoublylinkedlist::offsetset' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
    'newval' => 'mixed',
  ),
  'spldoublylinkedlist::offsetunset' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'spldoublylinkedlist::pop' => 
  array (
    0 => 'mixed',
  ),
  'spldoublylinkedlist::prev' => 
  array (
    0 => 'mixed',
  ),
  'spldoublylinkedlist::push' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'spldoublylinkedlist::rewind' => 
  array (
    0 => 'mixed',
  ),
  'spldoublylinkedlist::serialize' => 
  array (
    0 => 'mixed',
  ),
  'spldoublylinkedlist::setiteratormode' => 
  array (
    0 => 'mixed',
    'flags' => 'mixed',
  ),
  'spldoublylinkedlist::shift' => 
  array (
    0 => 'mixed',
  ),
  'spldoublylinkedlist::top' => 
  array (
    0 => 'mixed',
  ),
  'spldoublylinkedlist::unserialize' => 
  array (
    0 => 'mixed',
    'serialized' => 'mixed',
  ),
  'spldoublylinkedlist::unshift' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'spldoublylinkedlist::valid' => 
  array (
    0 => 'mixed',
  ),
  'splfileinfo::__construct' => 
  array (
    0 => 'void',
    'file_name' => 'mixed',
  ),
  'splfileinfo::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'splfileinfo::_bad_state_ex' => 
  array (
    0 => 'mixed',
  ),
  'splfileinfo::getatime' => 
  array (
    0 => 'mixed',
  ),
  'splfileinfo::getbasename' => 
  array (
    0 => 'mixed',
    'suffix=' => 'mixed',
  ),
  'splfileinfo::getctime' => 
  array (
    0 => 'mixed',
  ),
  'splfileinfo::getextension' => 
  array (
    0 => 'mixed',
  ),
  'splfileinfo::getfileinfo' => 
  array (
    0 => 'mixed',
    'class_name=' => 'mixed',
  ),
  'splfileinfo::getfilename' => 
  array (
    0 => 'mixed',
  ),
  'splfileinfo::getgroup' => 
  array (
    0 => 'mixed',
  ),
  'splfileinfo::getinode' => 
  array (
    0 => 'mixed',
  ),
  'splfileinfo::getlinktarget' => 
  array (
    0 => 'mixed',
  ),
  'splfileinfo::getmtime' => 
  array (
    0 => 'mixed',
  ),
  'splfileinfo::getowner' => 
  array (
    0 => 'mixed',
  ),
  'splfileinfo::getpath' => 
  array (
    0 => 'mixed',
  ),
  'splfileinfo::getpathinfo' => 
  array (
    0 => 'mixed',
    'class_name=' => 'mixed',
  ),
  'splfileinfo::getpathname' => 
  array (
    0 => 'mixed',
  ),
  'splfileinfo::getperms' => 
  array (
    0 => 'mixed',
  ),
  'splfileinfo::getrealpath' => 
  array (
    0 => 'mixed',
  ),
  'splfileinfo::getsize' => 
  array (
    0 => 'mixed',
  ),
  'splfileinfo::gettype' => 
  array (
    0 => 'mixed',
  ),
  'splfileinfo::isdir' => 
  array (
    0 => 'mixed',
  ),
  'splfileinfo::isexecutable' => 
  array (
    0 => 'mixed',
  ),
  'splfileinfo::isfile' => 
  array (
    0 => 'mixed',
  ),
  'splfileinfo::islink' => 
  array (
    0 => 'mixed',
  ),
  'splfileinfo::isreadable' => 
  array (
    0 => 'mixed',
  ),
  'splfileinfo::iswritable' => 
  array (
    0 => 'mixed',
  ),
  'splfileinfo::openfile' => 
  array (
    0 => 'mixed',
    'open_mode=' => 'mixed',
    'use_include_path=' => 'mixed',
    'context=' => 'mixed',
  ),
  'splfileinfo::setfileclass' => 
  array (
    0 => 'mixed',
    'class_name=' => 'mixed',
  ),
  'splfileinfo::setinfoclass' => 
  array (
    0 => 'mixed',
    'class_name=' => 'mixed',
  ),
  'splfileobject::__construct' => 
  array (
    0 => 'void',
    'file_name' => 'mixed',
    'open_mode=' => 'mixed',
    'use_include_path=' => 'mixed',
    'context=' => 'mixed',
  ),
  'splfileobject::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'splfileobject::_bad_state_ex' => 
  array (
    0 => 'mixed',
  ),
  'splfileobject::current' => 
  array (
    0 => 'mixed',
  ),
  'splfileobject::eof' => 
  array (
    0 => 'mixed',
  ),
  'splfileobject::fflush' => 
  array (
    0 => 'mixed',
  ),
  'splfileobject::fgetc' => 
  array (
    0 => 'mixed',
  ),
  'splfileobject::fgetcsv' => 
  array (
    0 => 'mixed',
    'delimiter=' => 'mixed',
    'enclosure=' => 'mixed',
    'escape=' => 'mixed',
  ),
  'splfileobject::fgets' => 
  array (
    0 => 'mixed',
  ),
  'splfileobject::fgetss' => 
  array (
    0 => 'mixed',
    'allowable_tags=' => 'mixed',
  ),
  'splfileobject::flock' => 
  array (
    0 => 'mixed',
    'operation' => 'mixed',
    '&wouldblock=' => 'mixed',
  ),
  'splfileobject::fpassthru' => 
  array (
    0 => 'mixed',
  ),
  'splfileobject::fputcsv' => 
  array (
    0 => 'mixed',
    'fields' => 'mixed',
    'delimiter=' => 'mixed',
    'enclosure=' => 'mixed',
    'escape=' => 'mixed',
  ),
  'splfileobject::fread' => 
  array (
    0 => 'mixed',
    'length' => 'mixed',
  ),
  'splfileobject::fscanf' => 
  array (
    0 => 'mixed',
    'format' => 'mixed',
    '...&vars=' => 'mixed',
  ),
  'splfileobject::fseek' => 
  array (
    0 => 'mixed',
    'pos' => 'mixed',
    'whence=' => 'mixed',
  ),
  'splfileobject::fstat' => 
  array (
    0 => 'mixed',
  ),
  'splfileobject::ftell' => 
  array (
    0 => 'mixed',
  ),
  'splfileobject::ftruncate' => 
  array (
    0 => 'mixed',
    'size' => 'mixed',
  ),
  'splfileobject::fwrite' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
    'length=' => 'mixed',
  ),
  'splfileobject::getatime' => 
  array (
    0 => 'mixed',
  ),
  'splfileobject::getbasename' => 
  array (
    0 => 'mixed',
    'suffix=' => 'mixed',
  ),
  'splfileobject::getchildren' => 
  array (
    0 => 'mixed',
  ),
  'splfileobject::getcsvcontrol' => 
  array (
    0 => 'mixed',
  ),
  'splfileobject::getctime' => 
  array (
    0 => 'mixed',
  ),
  'splfileobject::getcurrentline' => 
  array (
    0 => 'mixed',
  ),
  'splfileobject::getextension' => 
  array (
    0 => 'mixed',
  ),
  'splfileobject::getfileinfo' => 
  array (
    0 => 'mixed',
    'class_name=' => 'mixed',
  ),
  'splfileobject::getfilename' => 
  array (
    0 => 'mixed',
  ),
  'splfileobject::getflags' => 
  array (
    0 => 'mixed',
  ),
  'splfileobject::getgroup' => 
  array (
    0 => 'mixed',
  ),
  'splfileobject::getinode' => 
  array (
    0 => 'mixed',
  ),
  'splfileobject::getlinktarget' => 
  array (
    0 => 'mixed',
  ),
  'splfileobject::getmaxlinelen' => 
  array (
    0 => 'mixed',
  ),
  'splfileobject::getmtime' => 
  array (
    0 => 'mixed',
  ),
  'splfileobject::getowner' => 
  array (
    0 => 'mixed',
  ),
  'splfileobject::getpath' => 
  array (
    0 => 'mixed',
  ),
  'splfileobject::getpathinfo' => 
  array (
    0 => 'mixed',
    'class_name=' => 'mixed',
  ),
  'splfileobject::getpathname' => 
  array (
    0 => 'mixed',
  ),
  'splfileobject::getperms' => 
  array (
    0 => 'mixed',
  ),
  'splfileobject::getrealpath' => 
  array (
    0 => 'mixed',
  ),
  'splfileobject::getsize' => 
  array (
    0 => 'mixed',
  ),
  'splfileobject::gettype' => 
  array (
    0 => 'mixed',
  ),
  'splfileobject::haschildren' => 
  array (
    0 => 'mixed',
  ),
  'splfileobject::isdir' => 
  array (
    0 => 'mixed',
  ),
  'splfileobject::isexecutable' => 
  array (
    0 => 'mixed',
  ),
  'splfileobject::isfile' => 
  array (
    0 => 'mixed',
  ),
  'splfileobject::islink' => 
  array (
    0 => 'mixed',
  ),
  'splfileobject::isreadable' => 
  array (
    0 => 'mixed',
  ),
  'splfileobject::iswritable' => 
  array (
    0 => 'mixed',
  ),
  'splfileobject::key' => 
  array (
    0 => 'mixed',
  ),
  'splfileobject::next' => 
  array (
    0 => 'mixed',
  ),
  'splfileobject::openfile' => 
  array (
    0 => 'mixed',
    'open_mode=' => 'mixed',
    'use_include_path=' => 'mixed',
    'context=' => 'mixed',
  ),
  'splfileobject::rewind' => 
  array (
    0 => 'mixed',
  ),
  'splfileobject::seek' => 
  array (
    0 => 'mixed',
    'line_pos' => 'mixed',
  ),
  'splfileobject::setcsvcontrol' => 
  array (
    0 => 'mixed',
    'delimiter=' => 'mixed',
    'enclosure=' => 'mixed',
    'escape=' => 'mixed',
  ),
  'splfileobject::setfileclass' => 
  array (
    0 => 'mixed',
    'class_name=' => 'mixed',
  ),
  'splfileobject::setflags' => 
  array (
    0 => 'mixed',
    'flags' => 'mixed',
  ),
  'splfileobject::setinfoclass' => 
  array (
    0 => 'mixed',
    'class_name=' => 'mixed',
  ),
  'splfileobject::setmaxlinelen' => 
  array (
    0 => 'mixed',
    'max_len' => 'mixed',
  ),
  'splfileobject::valid' => 
  array (
    0 => 'mixed',
  ),
  'splfixedarray::__construct' => 
  array (
    0 => 'void',
    'size=' => 'mixed',
  ),
  'splfixedarray::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'splfixedarray::count' => 
  array (
    0 => 'mixed',
  ),
  'splfixedarray::current' => 
  array (
    0 => 'mixed',
  ),
  'splfixedarray::fromarray' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
    'save_indexes=' => 'mixed',
  ),
  'splfixedarray::getsize' => 
  array (
    0 => 'mixed',
  ),
  'splfixedarray::key' => 
  array (
    0 => 'mixed',
  ),
  'splfixedarray::next' => 
  array (
    0 => 'mixed',
  ),
  'splfixedarray::offsetexists' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'splfixedarray::offsetget' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'splfixedarray::offsetset' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
    'newval' => 'mixed',
  ),
  'splfixedarray::offsetunset' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'splfixedarray::rewind' => 
  array (
    0 => 'mixed',
  ),
  'splfixedarray::setsize' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'splfixedarray::toarray' => 
  array (
    0 => 'mixed',
  ),
  'splfixedarray::valid' => 
  array (
    0 => 'mixed',
  ),
  'splheap::compare' => 
  array (
    0 => 'mixed',
  ),
  'splheap::count' => 
  array (
    0 => 'mixed',
  ),
  'splheap::current' => 
  array (
    0 => 'mixed',
  ),
  'splheap::extract' => 
  array (
    0 => 'mixed',
  ),
  'splheap::insert' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'splheap::iscorrupted' => 
  array (
    0 => 'mixed',
  ),
  'splheap::isempty' => 
  array (
    0 => 'mixed',
  ),
  'splheap::key' => 
  array (
    0 => 'mixed',
  ),
  'splheap::next' => 
  array (
    0 => 'mixed',
  ),
  'splheap::recoverfromcorruption' => 
  array (
    0 => 'mixed',
  ),
  'splheap::rewind' => 
  array (
    0 => 'mixed',
  ),
  'splheap::top' => 
  array (
    0 => 'mixed',
  ),
  'splheap::valid' => 
  array (
    0 => 'mixed',
  ),
  'splmaxheap::compare' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
    'b' => 'mixed',
  ),
  'splmaxheap::count' => 
  array (
    0 => 'mixed',
  ),
  'splmaxheap::current' => 
  array (
    0 => 'mixed',
  ),
  'splmaxheap::extract' => 
  array (
    0 => 'mixed',
  ),
  'splmaxheap::insert' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'splmaxheap::iscorrupted' => 
  array (
    0 => 'mixed',
  ),
  'splmaxheap::isempty' => 
  array (
    0 => 'mixed',
  ),
  'splmaxheap::key' => 
  array (
    0 => 'mixed',
  ),
  'splmaxheap::next' => 
  array (
    0 => 'mixed',
  ),
  'splmaxheap::recoverfromcorruption' => 
  array (
    0 => 'mixed',
  ),
  'splmaxheap::rewind' => 
  array (
    0 => 'mixed',
  ),
  'splmaxheap::top' => 
  array (
    0 => 'mixed',
  ),
  'splmaxheap::valid' => 
  array (
    0 => 'mixed',
  ),
  'splminheap::compare' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
    'b' => 'mixed',
  ),
  'splminheap::count' => 
  array (
    0 => 'mixed',
  ),
  'splminheap::current' => 
  array (
    0 => 'mixed',
  ),
  'splminheap::extract' => 
  array (
    0 => 'mixed',
  ),
  'splminheap::insert' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'splminheap::iscorrupted' => 
  array (
    0 => 'mixed',
  ),
  'splminheap::isempty' => 
  array (
    0 => 'mixed',
  ),
  'splminheap::key' => 
  array (
    0 => 'mixed',
  ),
  'splminheap::next' => 
  array (
    0 => 'mixed',
  ),
  'splminheap::recoverfromcorruption' => 
  array (
    0 => 'mixed',
  ),
  'splminheap::rewind' => 
  array (
    0 => 'mixed',
  ),
  'splminheap::top' => 
  array (
    0 => 'mixed',
  ),
  'splminheap::valid' => 
  array (
    0 => 'mixed',
  ),
  'splobjectstorage::addall' => 
  array (
    0 => 'mixed',
    'object' => 'mixed',
  ),
  'splobjectstorage::attach' => 
  array (
    0 => 'mixed',
    'object' => 'mixed',
    'inf=' => 'mixed',
  ),
  'splobjectstorage::contains' => 
  array (
    0 => 'mixed',
    'object' => 'mixed',
  ),
  'splobjectstorage::count' => 
  array (
    0 => 'mixed',
  ),
  'splobjectstorage::current' => 
  array (
    0 => 'mixed',
  ),
  'splobjectstorage::detach' => 
  array (
    0 => 'mixed',
    'object' => 'mixed',
  ),
  'splobjectstorage::gethash' => 
  array (
    0 => 'mixed',
    'object' => 'mixed',
  ),
  'splobjectstorage::getinfo' => 
  array (
    0 => 'mixed',
  ),
  'splobjectstorage::key' => 
  array (
    0 => 'mixed',
  ),
  'splobjectstorage::next' => 
  array (
    0 => 'mixed',
  ),
  'splobjectstorage::offsetexists' => 
  array (
    0 => 'mixed',
    'object' => 'mixed',
  ),
  'splobjectstorage::offsetget' => 
  array (
    0 => 'mixed',
    'object' => 'mixed',
  ),
  'splobjectstorage::offsetset' => 
  array (
    0 => 'mixed',
    'object' => 'mixed',
    'inf=' => 'mixed',
  ),
  'splobjectstorage::offsetunset' => 
  array (
    0 => 'mixed',
    'object' => 'mixed',
  ),
  'splobjectstorage::removeall' => 
  array (
    0 => 'mixed',
    'object' => 'mixed',
  ),
  'splobjectstorage::removeallexcept' => 
  array (
    0 => 'mixed',
    'object' => 'mixed',
  ),
  'splobjectstorage::rewind' => 
  array (
    0 => 'mixed',
  ),
  'splobjectstorage::serialize' => 
  array (
    0 => 'mixed',
  ),
  'splobjectstorage::setinfo' => 
  array (
    0 => 'mixed',
    'info' => 'mixed',
  ),
  'splobjectstorage::unserialize' => 
  array (
    0 => 'mixed',
    'serialized' => 'mixed',
  ),
  'splobjectstorage::valid' => 
  array (
    0 => 'mixed',
  ),
  'splpriorityqueue::compare' => 
  array (
    0 => 'mixed',
    'a' => 'mixed',
    'b' => 'mixed',
  ),
  'splpriorityqueue::count' => 
  array (
    0 => 'mixed',
  ),
  'splpriorityqueue::current' => 
  array (
    0 => 'mixed',
  ),
  'splpriorityqueue::extract' => 
  array (
    0 => 'mixed',
  ),
  'splpriorityqueue::getextractflags' => 
  array (
    0 => 'mixed',
  ),
  'splpriorityqueue::insert' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
    'priority' => 'mixed',
  ),
  'splpriorityqueue::iscorrupted' => 
  array (
    0 => 'mixed',
  ),
  'splpriorityqueue::isempty' => 
  array (
    0 => 'mixed',
  ),
  'splpriorityqueue::key' => 
  array (
    0 => 'mixed',
  ),
  'splpriorityqueue::next' => 
  array (
    0 => 'mixed',
  ),
  'splpriorityqueue::recoverfromcorruption' => 
  array (
    0 => 'mixed',
  ),
  'splpriorityqueue::rewind' => 
  array (
    0 => 'mixed',
  ),
  'splpriorityqueue::setextractflags' => 
  array (
    0 => 'mixed',
    'flags' => 'mixed',
  ),
  'splpriorityqueue::top' => 
  array (
    0 => 'mixed',
  ),
  'splpriorityqueue::valid' => 
  array (
    0 => 'mixed',
  ),
  'splqueue::add' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
    'newval' => 'mixed',
  ),
  'splqueue::bottom' => 
  array (
    0 => 'mixed',
  ),
  'splqueue::count' => 
  array (
    0 => 'mixed',
  ),
  'splqueue::current' => 
  array (
    0 => 'mixed',
  ),
  'splqueue::dequeue' => 
  array (
    0 => 'mixed',
  ),
  'splqueue::enqueue' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'splqueue::getiteratormode' => 
  array (
    0 => 'mixed',
  ),
  'splqueue::isempty' => 
  array (
    0 => 'mixed',
  ),
  'splqueue::key' => 
  array (
    0 => 'mixed',
  ),
  'splqueue::next' => 
  array (
    0 => 'mixed',
  ),
  'splqueue::offsetexists' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'splqueue::offsetget' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'splqueue::offsetset' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
    'newval' => 'mixed',
  ),
  'splqueue::offsetunset' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'splqueue::pop' => 
  array (
    0 => 'mixed',
  ),
  'splqueue::prev' => 
  array (
    0 => 'mixed',
  ),
  'splqueue::push' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'splqueue::rewind' => 
  array (
    0 => 'mixed',
  ),
  'splqueue::serialize' => 
  array (
    0 => 'mixed',
  ),
  'splqueue::setiteratormode' => 
  array (
    0 => 'mixed',
    'flags' => 'mixed',
  ),
  'splqueue::shift' => 
  array (
    0 => 'mixed',
  ),
  'splqueue::top' => 
  array (
    0 => 'mixed',
  ),
  'splqueue::unserialize' => 
  array (
    0 => 'mixed',
    'serialized' => 'mixed',
  ),
  'splqueue::unshift' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'splqueue::valid' => 
  array (
    0 => 'mixed',
  ),
  'splstack::add' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
    'newval' => 'mixed',
  ),
  'splstack::bottom' => 
  array (
    0 => 'mixed',
  ),
  'splstack::count' => 
  array (
    0 => 'mixed',
  ),
  'splstack::current' => 
  array (
    0 => 'mixed',
  ),
  'splstack::getiteratormode' => 
  array (
    0 => 'mixed',
  ),
  'splstack::isempty' => 
  array (
    0 => 'mixed',
  ),
  'splstack::key' => 
  array (
    0 => 'mixed',
  ),
  'splstack::next' => 
  array (
    0 => 'mixed',
  ),
  'splstack::offsetexists' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'splstack::offsetget' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'splstack::offsetset' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
    'newval' => 'mixed',
  ),
  'splstack::offsetunset' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'splstack::pop' => 
  array (
    0 => 'mixed',
  ),
  'splstack::prev' => 
  array (
    0 => 'mixed',
  ),
  'splstack::push' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'splstack::rewind' => 
  array (
    0 => 'mixed',
  ),
  'splstack::serialize' => 
  array (
    0 => 'mixed',
  ),
  'splstack::setiteratormode' => 
  array (
    0 => 'mixed',
    'flags' => 'mixed',
  ),
  'splstack::shift' => 
  array (
    0 => 'mixed',
  ),
  'splstack::top' => 
  array (
    0 => 'mixed',
  ),
  'splstack::unserialize' => 
  array (
    0 => 'mixed',
    'serialized' => 'mixed',
  ),
  'splstack::unshift' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'splstack::valid' => 
  array (
    0 => 'mixed',
  ),
  'spltempfileobject::__construct' => 
  array (
    0 => 'void',
    'max_memory=' => 'mixed',
  ),
  'spltempfileobject::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'spltempfileobject::_bad_state_ex' => 
  array (
    0 => 'mixed',
  ),
  'spltempfileobject::current' => 
  array (
    0 => 'mixed',
  ),
  'spltempfileobject::eof' => 
  array (
    0 => 'mixed',
  ),
  'spltempfileobject::fflush' => 
  array (
    0 => 'mixed',
  ),
  'spltempfileobject::fgetc' => 
  array (
    0 => 'mixed',
  ),
  'spltempfileobject::fgetcsv' => 
  array (
    0 => 'mixed',
    'delimiter=' => 'mixed',
    'enclosure=' => 'mixed',
    'escape=' => 'mixed',
  ),
  'spltempfileobject::fgets' => 
  array (
    0 => 'mixed',
  ),
  'spltempfileobject::fgetss' => 
  array (
    0 => 'mixed',
    'allowable_tags=' => 'mixed',
  ),
  'spltempfileobject::flock' => 
  array (
    0 => 'mixed',
    'operation' => 'mixed',
    '&wouldblock=' => 'mixed',
  ),
  'spltempfileobject::fpassthru' => 
  array (
    0 => 'mixed',
  ),
  'spltempfileobject::fputcsv' => 
  array (
    0 => 'mixed',
    'fields' => 'mixed',
    'delimiter=' => 'mixed',
    'enclosure=' => 'mixed',
    'escape=' => 'mixed',
  ),
  'spltempfileobject::fread' => 
  array (
    0 => 'mixed',
    'length' => 'mixed',
  ),
  'spltempfileobject::fscanf' => 
  array (
    0 => 'mixed',
    'format' => 'mixed',
    '...&vars=' => 'mixed',
  ),
  'spltempfileobject::fseek' => 
  array (
    0 => 'mixed',
    'pos' => 'mixed',
    'whence=' => 'mixed',
  ),
  'spltempfileobject::fstat' => 
  array (
    0 => 'mixed',
  ),
  'spltempfileobject::ftell' => 
  array (
    0 => 'mixed',
  ),
  'spltempfileobject::ftruncate' => 
  array (
    0 => 'mixed',
    'size' => 'mixed',
  ),
  'spltempfileobject::fwrite' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
    'length=' => 'mixed',
  ),
  'spltempfileobject::getatime' => 
  array (
    0 => 'mixed',
  ),
  'spltempfileobject::getbasename' => 
  array (
    0 => 'mixed',
    'suffix=' => 'mixed',
  ),
  'spltempfileobject::getchildren' => 
  array (
    0 => 'mixed',
  ),
  'spltempfileobject::getcsvcontrol' => 
  array (
    0 => 'mixed',
  ),
  'spltempfileobject::getctime' => 
  array (
    0 => 'mixed',
  ),
  'spltempfileobject::getcurrentline' => 
  array (
    0 => 'mixed',
  ),
  'spltempfileobject::getextension' => 
  array (
    0 => 'mixed',
  ),
  'spltempfileobject::getfileinfo' => 
  array (
    0 => 'mixed',
    'class_name=' => 'mixed',
  ),
  'spltempfileobject::getfilename' => 
  array (
    0 => 'mixed',
  ),
  'spltempfileobject::getflags' => 
  array (
    0 => 'mixed',
  ),
  'spltempfileobject::getgroup' => 
  array (
    0 => 'mixed',
  ),
  'spltempfileobject::getinode' => 
  array (
    0 => 'mixed',
  ),
  'spltempfileobject::getlinktarget' => 
  array (
    0 => 'mixed',
  ),
  'spltempfileobject::getmaxlinelen' => 
  array (
    0 => 'mixed',
  ),
  'spltempfileobject::getmtime' => 
  array (
    0 => 'mixed',
  ),
  'spltempfileobject::getowner' => 
  array (
    0 => 'mixed',
  ),
  'spltempfileobject::getpath' => 
  array (
    0 => 'mixed',
  ),
  'spltempfileobject::getpathinfo' => 
  array (
    0 => 'mixed',
    'class_name=' => 'mixed',
  ),
  'spltempfileobject::getpathname' => 
  array (
    0 => 'mixed',
  ),
  'spltempfileobject::getperms' => 
  array (
    0 => 'mixed',
  ),
  'spltempfileobject::getrealpath' => 
  array (
    0 => 'mixed',
  ),
  'spltempfileobject::getsize' => 
  array (
    0 => 'mixed',
  ),
  'spltempfileobject::gettype' => 
  array (
    0 => 'mixed',
  ),
  'spltempfileobject::haschildren' => 
  array (
    0 => 'mixed',
  ),
  'spltempfileobject::isdir' => 
  array (
    0 => 'mixed',
  ),
  'spltempfileobject::isexecutable' => 
  array (
    0 => 'mixed',
  ),
  'spltempfileobject::isfile' => 
  array (
    0 => 'mixed',
  ),
  'spltempfileobject::islink' => 
  array (
    0 => 'mixed',
  ),
  'spltempfileobject::isreadable' => 
  array (
    0 => 'mixed',
  ),
  'spltempfileobject::iswritable' => 
  array (
    0 => 'mixed',
  ),
  'spltempfileobject::key' => 
  array (
    0 => 'mixed',
  ),
  'spltempfileobject::next' => 
  array (
    0 => 'mixed',
  ),
  'spltempfileobject::openfile' => 
  array (
    0 => 'mixed',
    'open_mode=' => 'mixed',
    'use_include_path=' => 'mixed',
    'context=' => 'mixed',
  ),
  'spltempfileobject::rewind' => 
  array (
    0 => 'mixed',
  ),
  'spltempfileobject::seek' => 
  array (
    0 => 'mixed',
    'line_pos' => 'mixed',
  ),
  'spltempfileobject::setcsvcontrol' => 
  array (
    0 => 'mixed',
    'delimiter=' => 'mixed',
    'enclosure=' => 'mixed',
    'escape=' => 'mixed',
  ),
  'spltempfileobject::setfileclass' => 
  array (
    0 => 'mixed',
    'class_name=' => 'mixed',
  ),
  'spltempfileobject::setflags' => 
  array (
    0 => 'mixed',
    'flags' => 'mixed',
  ),
  'spltempfileobject::setinfoclass' => 
  array (
    0 => 'mixed',
    'class_name=' => 'mixed',
  ),
  'spltempfileobject::setmaxlinelen' => 
  array (
    0 => 'mixed',
    'max_len' => 'mixed',
  ),
  'spltempfileobject::valid' => 
  array (
    0 => 'mixed',
  ),
  'spoofchecker::__construct' => 
  array (
    0 => 'void',
  ),
  'spoofchecker::areconfusable' => 
  array (
    0 => 'mixed',
    's1' => 'mixed',
    's2' => 'mixed',
    '&error=' => 'mixed',
  ),
  'spoofchecker::issuspicious' => 
  array (
    0 => 'mixed',
    'text' => 'mixed',
    '&error=' => 'mixed',
  ),
  'spoofchecker::setallowedlocales' => 
  array (
    0 => 'mixed',
    'locale_list' => 'mixed',
  ),
  'spoofchecker::setchecks' => 
  array (
    0 => 'mixed',
    'checks' => 'mixed',
  ),
  'spoofchecker::setrestrictionlevel' => 
  array (
    0 => 'mixed',
    'level' => 'mixed',
  ),
  'sprintf' => 
  array (
    0 => 'mixed',
    'format' => 'mixed',
    '...args=' => 'mixed',
  ),
  'sqlite3::__construct' => 
  array (
    0 => 'void',
    'filename' => 'mixed',
    'flags=' => 'mixed',
    'encryption_key=' => 'mixed',
  ),
  'sqlite3::busytimeout' => 
  array (
    0 => 'mixed',
    'ms' => 'mixed',
  ),
  'sqlite3::changes' => 
  array (
    0 => 'mixed',
  ),
  'sqlite3::close' => 
  array (
    0 => 'mixed',
  ),
  'sqlite3::createaggregate' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
    'step_callback' => 'mixed',
    'final_callback' => 'mixed',
    'argument_count=' => 'mixed',
  ),
  'sqlite3::createcollation' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
    'callback' => 'mixed',
  ),
  'sqlite3::createfunction' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
    'callback' => 'mixed',
    'argument_count=' => 'mixed',
    'flags=' => 'mixed',
  ),
  'sqlite3::enableexceptions' => 
  array (
    0 => 'mixed',
    'enableExceptions=' => 'mixed',
  ),
  'sqlite3::escapestring' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'sqlite3::exec' => 
  array (
    0 => 'mixed',
    'query' => 'mixed',
  ),
  'sqlite3::lasterrorcode' => 
  array (
    0 => 'mixed',
  ),
  'sqlite3::lasterrormsg' => 
  array (
    0 => 'mixed',
  ),
  'sqlite3::lastinsertrowid' => 
  array (
    0 => 'mixed',
  ),
  'sqlite3::loadextension' => 
  array (
    0 => 'mixed',
    'shared_library' => 'mixed',
  ),
  'sqlite3::open' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
    'flags=' => 'mixed',
    'encryption_key=' => 'mixed',
  ),
  'sqlite3::openblob' => 
  array (
    0 => 'mixed',
    'table' => 'mixed',
    'column' => 'mixed',
    'rowid' => 'mixed',
    'dbname=' => 'mixed',
    'flags=' => 'mixed',
  ),
  'sqlite3::prepare' => 
  array (
    0 => 'mixed',
    'query' => 'mixed',
  ),
  'sqlite3::query' => 
  array (
    0 => 'mixed',
    'query' => 'mixed',
  ),
  'sqlite3::querysingle' => 
  array (
    0 => 'mixed',
    'query' => 'mixed',
    'entire_row=' => 'mixed',
  ),
  'sqlite3::version' => 
  array (
    0 => 'mixed',
  ),
  'sqlite3result::__construct' => 
  array (
    0 => 'void',
  ),
  'sqlite3result::columnname' => 
  array (
    0 => 'mixed',
    'column_number' => 'mixed',
  ),
  'sqlite3result::columntype' => 
  array (
    0 => 'mixed',
    'column_number' => 'mixed',
  ),
  'sqlite3result::fetcharray' => 
  array (
    0 => 'mixed',
    'mode=' => 'mixed',
  ),
  'sqlite3result::finalize' => 
  array (
    0 => 'mixed',
  ),
  'sqlite3result::numcolumns' => 
  array (
    0 => 'mixed',
  ),
  'sqlite3result::reset' => 
  array (
    0 => 'mixed',
  ),
  'sqlite3stmt::__construct' => 
  array (
    0 => 'void',
    'sqlite3' => 'mixed',
  ),
  'sqlite3stmt::bindparam' => 
  array (
    0 => 'mixed',
    'param_number' => 'mixed',
    '&param' => 'mixed',
    'type=' => 'mixed',
  ),
  'sqlite3stmt::bindvalue' => 
  array (
    0 => 'mixed',
    'param_number' => 'mixed',
    'param' => 'mixed',
    'type=' => 'mixed',
  ),
  'sqlite3stmt::clear' => 
  array (
    0 => 'mixed',
  ),
  'sqlite3stmt::close' => 
  array (
    0 => 'mixed',
  ),
  'sqlite3stmt::execute' => 
  array (
    0 => 'mixed',
  ),
  'sqlite3stmt::paramcount' => 
  array (
    0 => 'mixed',
  ),
  'sqlite3stmt::readonly' => 
  array (
    0 => 'mixed',
  ),
  'sqlite3stmt::reset' => 
  array (
    0 => 'mixed',
  ),
  'sqrt' => 
  array (
    0 => 'mixed',
    'number' => 'mixed',
  ),
  'srand' => 
  array (
    0 => 'mixed',
    'seed=' => 'mixed',
    'mode=' => 'mixed',
  ),
  'sscanf' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
    'format' => 'mixed',
    '...&vars=' => 'mixed',
  ),
  'stat' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'str_getcsv' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    'delimiter=' => 'mixed',
    'enclosure=' => 'mixed',
    'escape=' => 'mixed',
  ),
  'str_ireplace' => 
  array (
    0 => 'mixed',
    'search' => 'mixed',
    'replace' => 'mixed',
    'subject' => 'mixed',
    '&replace_count=' => 'mixed',
  ),
  'str_pad' => 
  array (
    0 => 'mixed',
    'input' => 'mixed',
    'pad_length' => 'mixed',
    'pad_string=' => 'mixed',
    'pad_type=' => 'mixed',
  ),
  'str_repeat' => 
  array (
    0 => 'mixed',
    'input' => 'mixed',
    'mult' => 'mixed',
  ),
  'str_replace' => 
  array (
    0 => 'mixed',
    'search' => 'mixed',
    'replace' => 'mixed',
    'subject' => 'mixed',
    '&replace_count=' => 'mixed',
  ),
  'str_rot13' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
  ),
  'str_shuffle' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
  ),
  'str_split' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
    'split_length=' => 'mixed',
  ),
  'str_word_count' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
    'format=' => 'mixed',
    'charlist=' => 'mixed',
  ),
  'strcasecmp' => 
  array (
    0 => 'mixed',
    'str1' => 'mixed',
    'str2' => 'mixed',
  ),
  'strchr' => 
  array (
    0 => 'mixed',
    'haystack' => 'mixed',
    'needle' => 'mixed',
    'part=' => 'mixed',
  ),
  'strcmp' => 
  array (
    0 => 'mixed',
    'str1' => 'mixed',
    'str2' => 'mixed',
  ),
  'strcoll' => 
  array (
    0 => 'mixed',
    'str1' => 'mixed',
    'str2' => 'mixed',
  ),
  'strcspn' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
    'mask' => 'mixed',
    'start=' => 'mixed',
    'len=' => 'mixed',
  ),
  'stream_bucket_append' => 
  array (
    0 => 'mixed',
    'brigade' => 'mixed',
    'bucket' => 'mixed',
  ),
  'stream_bucket_make_writeable' => 
  array (
    0 => 'mixed',
    'brigade' => 'mixed',
  ),
  'stream_bucket_new' => 
  array (
    0 => 'mixed',
    'stream' => 'mixed',
    'buffer' => 'mixed',
  ),
  'stream_bucket_prepend' => 
  array (
    0 => 'mixed',
    'brigade' => 'mixed',
    'bucket' => 'mixed',
  ),
  'stream_context_create' => 
  array (
    0 => 'mixed',
    'options=' => 'mixed',
    'params=' => 'mixed',
  ),
  'stream_context_get_default' => 
  array (
    0 => 'mixed',
    'options=' => 'mixed',
  ),
  'stream_context_get_options' => 
  array (
    0 => 'mixed',
    'stream_or_context' => 'mixed',
  ),
  'stream_context_get_params' => 
  array (
    0 => 'mixed',
    'stream_or_context' => 'mixed',
  ),
  'stream_context_set_default' => 
  array (
    0 => 'mixed',
    'options' => 'mixed',
  ),
  'stream_context_set_option' => 
  array (
    0 => 'mixed',
    'stream_or_context' => 'mixed',
    'wrappername' => 'mixed',
    'optionname' => 'mixed',
    'value' => 'mixed',
  ),
  'stream_context_set_params' => 
  array (
    0 => 'mixed',
    'stream_or_context' => 'mixed',
    'options' => 'mixed',
  ),
  'stream_copy_to_stream' => 
  array (
    0 => 'mixed',
    'source' => 'mixed',
    'dest' => 'mixed',
    'maxlen=' => 'mixed',
    'pos=' => 'mixed',
  ),
  'stream_filter_append' => 
  array (
    0 => 'mixed',
    'stream' => 'mixed',
    'filtername' => 'mixed',
    'read_write=' => 'mixed',
    'filterparams=' => 'mixed',
  ),
  'stream_filter_prepend' => 
  array (
    0 => 'mixed',
    'stream' => 'mixed',
    'filtername' => 'mixed',
    'read_write=' => 'mixed',
    'filterparams=' => 'mixed',
  ),
  'stream_filter_register' => 
  array (
    0 => 'mixed',
    'filtername' => 'mixed',
    'classname' => 'mixed',
  ),
  'stream_filter_remove' => 
  array (
    0 => 'mixed',
    'stream_filter' => 'mixed',
  ),
  'stream_get_contents' => 
  array (
    0 => 'mixed',
    'source' => 'mixed',
    'maxlen=' => 'mixed',
    'offset=' => 'mixed',
  ),
  'stream_get_filters' => 
  array (
    0 => 'mixed',
  ),
  'stream_get_line' => 
  array (
    0 => 'mixed',
    'stream' => 'mixed',
    'maxlen' => 'mixed',
    'ending=' => 'mixed',
  ),
  'stream_get_meta_data' => 
  array (
    0 => 'mixed',
    'fp' => 'mixed',
  ),
  'stream_get_transports' => 
  array (
    0 => 'mixed',
  ),
  'stream_get_wrappers' => 
  array (
    0 => 'mixed',
  ),
  'stream_is_local' => 
  array (
    0 => 'mixed',
    'stream' => 'mixed',
  ),
  'stream_isatty' => 
  array (
    0 => 'mixed',
    'stream' => 'mixed',
  ),
  'stream_register_wrapper' => 
  array (
    0 => 'mixed',
    'protocol' => 'mixed',
    'classname' => 'mixed',
    'flags=' => 'mixed',
  ),
  'stream_resolve_include_path' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'stream_select' => 
  array (
    0 => 'mixed',
    '&read_streams' => 'mixed',
    '&write_streams' => 'mixed',
    '&except_streams' => 'mixed',
    'tv_sec' => 'mixed',
    'tv_usec=' => 'mixed',
  ),
  'stream_set_blocking' => 
  array (
    0 => 'mixed',
    'socket' => 'mixed',
    'mode' => 'mixed',
  ),
  'stream_set_chunk_size' => 
  array (
    0 => 'mixed',
    'fp' => 'mixed',
    'chunk_size' => 'mixed',
  ),
  'stream_set_read_buffer' => 
  array (
    0 => 'mixed',
    'fp' => 'mixed',
    'buffer' => 'mixed',
  ),
  'stream_set_timeout' => 
  array (
    0 => 'mixed',
    'stream' => 'mixed',
    'seconds' => 'mixed',
    'microseconds=' => 'mixed',
  ),
  'stream_set_write_buffer' => 
  array (
    0 => 'mixed',
    'fp' => 'mixed',
    'buffer' => 'mixed',
  ),
  'stream_socket_accept' => 
  array (
    0 => 'mixed',
    'serverstream' => 'mixed',
    'timeout=' => 'mixed',
    '&peername=' => 'mixed',
  ),
  'stream_socket_client' => 
  array (
    0 => 'mixed',
    'remoteaddress' => 'mixed',
    '&errcode=' => 'mixed',
    '&errstring=' => 'mixed',
    'timeout=' => 'mixed',
    'flags=' => 'mixed',
    'context=' => 'mixed',
  ),
  'stream_socket_enable_crypto' => 
  array (
    0 => 'mixed',
    'stream' => 'mixed',
    'enable' => 'mixed',
    'cryptokind=' => 'mixed',
    'sessionstream=' => 'mixed',
  ),
  'stream_socket_get_name' => 
  array (
    0 => 'mixed',
    'stream' => 'mixed',
    'want_peer' => 'mixed',
  ),
  'stream_socket_pair' => 
  array (
    0 => 'mixed',
    'domain' => 'mixed',
    'type' => 'mixed',
    'protocol' => 'mixed',
  ),
  'stream_socket_recvfrom' => 
  array (
    0 => 'mixed',
    'stream' => 'mixed',
    'amount' => 'mixed',
    'flags=' => 'mixed',
    '&remote_addr=' => 'mixed',
  ),
  'stream_socket_sendto' => 
  array (
    0 => 'mixed',
    'stream' => 'mixed',
    'data' => 'mixed',
    'flags=' => 'mixed',
    'target_addr=' => 'mixed',
  ),
  'stream_socket_server' => 
  array (
    0 => 'mixed',
    'localaddress' => 'mixed',
    '&errcode=' => 'mixed',
    '&errstring=' => 'mixed',
    'flags=' => 'mixed',
    'context=' => 'mixed',
  ),
  'stream_socket_shutdown' => 
  array (
    0 => 'mixed',
    'stream' => 'mixed',
    'how' => 'mixed',
  ),
  'stream_supports_lock' => 
  array (
    0 => 'mixed',
    'stream' => 'mixed',
  ),
  'stream_wrapper_register' => 
  array (
    0 => 'mixed',
    'protocol' => 'mixed',
    'classname' => 'mixed',
    'flags=' => 'mixed',
  ),
  'stream_wrapper_restore' => 
  array (
    0 => 'mixed',
    'protocol' => 'mixed',
  ),
  'stream_wrapper_unregister' => 
  array (
    0 => 'mixed',
    'protocol' => 'mixed',
  ),
  'strftime' => 
  array (
    0 => 'mixed',
    'format' => 'mixed',
    'timestamp=' => 'mixed',
  ),
  'strip_tags' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
    'allowable_tags=' => 'mixed',
  ),
  'stripcslashes' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
  ),
  'stripos' => 
  array (
    0 => 'mixed',
    'haystack' => 'mixed',
    'needle' => 'mixed',
    'offset=' => 'mixed',
  ),
  'stripslashes' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
  ),
  'stristr' => 
  array (
    0 => 'mixed',
    'haystack' => 'mixed',
    'needle' => 'mixed',
    'part=' => 'mixed',
  ),
  'strlen' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
  ),
  'strnatcasecmp' => 
  array (
    0 => 'mixed',
    's1' => 'mixed',
    's2' => 'mixed',
  ),
  'strnatcmp' => 
  array (
    0 => 'mixed',
    's1' => 'mixed',
    's2' => 'mixed',
  ),
  'strncasecmp' => 
  array (
    0 => 'mixed',
    'str1' => 'mixed',
    'str2' => 'mixed',
    'len' => 'mixed',
  ),
  'strncmp' => 
  array (
    0 => 'mixed',
    'str1' => 'mixed',
    'str2' => 'mixed',
    'len' => 'mixed',
  ),
  'strpbrk' => 
  array (
    0 => 'mixed',
    'haystack' => 'mixed',
    'char_list' => 'mixed',
  ),
  'strpos' => 
  array (
    0 => 'mixed',
    'haystack' => 'mixed',
    'needle' => 'mixed',
    'offset=' => 'mixed',
  ),
  'strptime' => 
  array (
    0 => 'mixed',
    'timestamp' => 'mixed',
    'format' => 'mixed',
  ),
  'strrchr' => 
  array (
    0 => 'mixed',
    'haystack' => 'mixed',
    'needle' => 'mixed',
  ),
  'strrev' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
  ),
  'strripos' => 
  array (
    0 => 'mixed',
    'haystack' => 'mixed',
    'needle' => 'mixed',
    'offset=' => 'mixed',
  ),
  'strrpos' => 
  array (
    0 => 'mixed',
    'haystack' => 'mixed',
    'needle' => 'mixed',
    'offset=' => 'mixed',
  ),
  'strspn' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
    'mask' => 'mixed',
    'start=' => 'mixed',
    'len=' => 'mixed',
  ),
  'strstr' => 
  array (
    0 => 'mixed',
    'haystack' => 'mixed',
    'needle' => 'mixed',
    'part=' => 'mixed',
  ),
  'strtok' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
    'token=' => 'mixed',
  ),
  'strtolower' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
  ),
  'strtotime' => 
  array (
    0 => 'mixed',
    'time' => 'mixed',
    'now=' => 'mixed',
  ),
  'strtoupper' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
  ),
  'strtr' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
    'from' => 'mixed',
    'to=' => 'mixed',
  ),
  'strval' => 
  array (
    0 => 'mixed',
    'var' => 'mixed',
  ),
  'substr' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
    'start' => 'mixed',
    'length=' => 'mixed',
  ),
  'substr_compare' => 
  array (
    0 => 'mixed',
    'main_str' => 'mixed',
    'str' => 'mixed',
    'offset' => 'mixed',
    'length=' => 'mixed',
    'case_sensitivity=' => 'mixed',
  ),
  'substr_count' => 
  array (
    0 => 'mixed',
    'haystack' => 'mixed',
    'needle' => 'mixed',
    'offset=' => 'mixed',
    'length=' => 'mixed',
  ),
  'substr_replace' => 
  array (
    0 => 'mixed',
    'str' => 'mixed',
    'replace' => 'mixed',
    'start' => 'mixed',
    'length=' => 'mixed',
  ),
  'swoole\\arrayobject::__construct' => 
  array (
    0 => 'void',
    'array=' => 'array<array-key, mixed>',
  ),
  'swoole\\arrayobject::__serialize' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'swoole\\arrayobject::__toarray' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'swoole\\arrayobject::__unserialize' => 
  array (
    0 => 'void',
    'data' => 'array<array-key, mixed>',
  ),
  'swoole\\arrayobject::append' => 
  array (
    0 => 'Swoole\\ArrayObject',
    '...values=' => 'mixed',
  ),
  'swoole\\arrayobject::arsort' => 
  array (
    0 => 'self',
    'sort_flags=' => 'int',
  ),
  'swoole\\arrayobject::asort' => 
  array (
    0 => 'self',
    'sort_flags=' => 'int',
  ),
  'swoole\\arrayobject::chunk' => 
  array (
    0 => 'self',
    'size' => 'int',
    'preserve_keys=' => 'bool',
  ),
  'swoole\\arrayobject::clear' => 
  array (
    0 => 'self',
  ),
  'swoole\\arrayobject::column' => 
  array (
    0 => 'self',
    'column_key' => 'mixed',
    'index=' => 'mixed',
  ),
  'swoole\\arrayobject::contains' => 
  array (
    0 => 'bool',
    'value' => 'mixed',
    'strict=' => 'bool',
  ),
  'swoole\\arrayobject::count' => 
  array (
    0 => 'int',
  ),
  'swoole\\arrayobject::current' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\arrayobject::delete' => 
  array (
    0 => 'self',
    'key' => 'mixed',
  ),
  'swoole\\arrayobject::detectarraytype' => 
  array (
    0 => 'self',
    'value' => 'array<array-key, mixed>',
  ),
  'swoole\\arrayobject::detectstringtype' => 
  array (
    0 => 'Swoole\\StringObject',
    'value' => 'string',
  ),
  'swoole\\arrayobject::detecttype' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'swoole\\arrayobject::each' => 
  array (
    0 => 'self',
    'fn' => 'callable',
  ),
  'swoole\\arrayobject::exists' => 
  array (
    0 => 'bool',
    'key' => 'mixed',
  ),
  'swoole\\arrayobject::filter' => 
  array (
    0 => 'self',
    'fn' => 'callable',
    'flag=' => 'int',
  ),
  'swoole\\arrayobject::first' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\arrayobject::firstkey' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\arrayobject::flip' => 
  array (
    0 => 'self',
  ),
  'swoole\\arrayobject::get' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'swoole\\arrayobject::getor' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'default=' => 'mixed',
  ),
  'swoole\\arrayobject::indexof' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
    'strict=' => 'bool',
  ),
  'swoole\\arrayobject::insert' => 
  array (
    0 => 'self',
    'offset' => 'int',
    'value' => 'mixed',
  ),
  'swoole\\arrayobject::isempty' => 
  array (
    0 => 'bool',
  ),
  'swoole\\arrayobject::join' => 
  array (
    0 => 'Swoole\\StringObject',
    'glue=' => 'string',
  ),
  'swoole\\arrayobject::key' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\arrayobject::keys' => 
  array (
    0 => 'self',
    '...args=' => 'mixed',
  ),
  'swoole\\arrayobject::krsort' => 
  array (
    0 => 'self',
    'sort_flags=' => 'int',
  ),
  'swoole\\arrayobject::ksort' => 
  array (
    0 => 'self',
    'sort_flags=' => 'int',
  ),
  'swoole\\arrayobject::last' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\arrayobject::lastindexof' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
    'strict=' => 'bool',
  ),
  'swoole\\arrayobject::lastkey' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\arrayobject::map' => 
  array (
    0 => 'self',
    'fn' => 'callable',
    '...args=' => 'mixed',
  ),
  'swoole\\arrayobject::natcasesort' => 
  array (
    0 => 'self',
  ),
  'swoole\\arrayobject::natsort' => 
  array (
    0 => 'self',
  ),
  'swoole\\arrayobject::next' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\arrayobject::offsetexists' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'swoole\\arrayobject::offsetget' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'swoole\\arrayobject::offsetset' => 
  array (
    0 => 'void',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'swoole\\arrayobject::offsetunset' => 
  array (
    0 => 'void',
    'key' => 'mixed',
  ),
  'swoole\\arrayobject::pop' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\arrayobject::popback' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\arrayobject::popfront' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\arrayobject::product' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\arrayobject::push' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'swoole\\arrayobject::pushback' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'swoole\\arrayobject::pushfront' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'swoole\\arrayobject::randomget' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\arrayobject::reduce' => 
  array (
    0 => 'mixed',
    'fn' => 'callable',
    'initial=' => 'mixed',
  ),
  'swoole\\arrayobject::remove' => 
  array (
    0 => 'self',
    'value' => 'mixed',
    'strict=' => 'bool',
    'loop=' => 'bool',
  ),
  'swoole\\arrayobject::reverse' => 
  array (
    0 => 'self',
    'preserve_keys=' => 'bool',
  ),
  'swoole\\arrayobject::rewind' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\arrayobject::rsort' => 
  array (
    0 => 'self',
    'sort_flags=' => 'int',
  ),
  'swoole\\arrayobject::search' => 
  array (
    0 => 'mixed',
    'needle' => 'mixed',
    'strict=' => 'bool',
  ),
  'swoole\\arrayobject::serialize' => 
  array (
    0 => 'Swoole\\StringObject',
  ),
  'swoole\\arrayobject::set' => 
  array (
    0 => 'self',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'swoole\\arrayobject::shuffle' => 
  array (
    0 => 'self',
  ),
  'swoole\\arrayobject::slice' => 
  array (
    0 => 'self',
    'offset' => 'mixed',
    'length=' => 'int|null',
    'preserve_keys=' => 'bool',
  ),
  'swoole\\arrayobject::sort' => 
  array (
    0 => 'self',
    'sort_flags=' => 'int',
  ),
  'swoole\\arrayobject::sum' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\arrayobject::toarray' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'swoole\\arrayobject::uasort' => 
  array (
    0 => 'self',
    'value_compare_func' => 'callable',
  ),
  'swoole\\arrayobject::uksort' => 
  array (
    0 => 'self',
    'value_compare_func' => 'callable',
  ),
  'swoole\\arrayobject::unique' => 
  array (
    0 => 'self',
    'sort_flags=' => 'int',
  ),
  'swoole\\arrayobject::unserialize' => 
  array (
    0 => 'self',
    'string' => 'mixed',
  ),
  'swoole\\arrayobject::usort' => 
  array (
    0 => 'self',
    'value_compare_func' => 'callable',
  ),
  'swoole\\arrayobject::valid' => 
  array (
    0 => 'bool',
  ),
  'swoole\\arrayobject::values' => 
  array (
    0 => 'self',
  ),
  'swoole\\atomic::__construct' => 
  array (
    0 => 'void',
    'value=' => 'mixed',
  ),
  'swoole\\atomic::add' => 
  array (
    0 => 'mixed',
    'add_value=' => 'mixed',
  ),
  'swoole\\atomic::cmpset' => 
  array (
    0 => 'mixed',
    'cmp_value' => 'mixed',
    'new_value' => 'mixed',
  ),
  'swoole\\atomic::get' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\atomic::set' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'swoole\\atomic::sub' => 
  array (
    0 => 'mixed',
    'sub_value=' => 'mixed',
  ),
  'swoole\\atomic::wait' => 
  array (
    0 => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\atomic::wakeup' => 
  array (
    0 => 'mixed',
    'count=' => 'mixed',
  ),
  'swoole\\atomic\\long::__construct' => 
  array (
    0 => 'void',
    'value=' => 'mixed',
  ),
  'swoole\\atomic\\long::add' => 
  array (
    0 => 'mixed',
    'add_value=' => 'mixed',
  ),
  'swoole\\atomic\\long::cmpset' => 
  array (
    0 => 'mixed',
    'cmp_value' => 'mixed',
    'new_value' => 'mixed',
  ),
  'swoole\\atomic\\long::get' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\atomic\\long::set' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'swoole\\atomic\\long::sub' => 
  array (
    0 => 'mixed',
    'sub_value=' => 'mixed',
  ),
  'swoole\\client::__construct' => 
  array (
    0 => 'void',
    'type' => 'mixed',
    'async=' => 'mixed',
    'id=' => 'mixed',
  ),
  'swoole\\client::__destruct' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\client::close' => 
  array (
    0 => 'mixed',
    'force=' => 'mixed',
  ),
  'swoole\\client::connect' => 
  array (
    0 => 'mixed',
    'host' => 'mixed',
    'port=' => 'mixed',
    'timeout=' => 'mixed',
    'sock_flag=' => 'mixed',
  ),
  'swoole\\client::enablessl' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\client::getpeercert' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\client::getpeername' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\client::getsockname' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\client::isconnected' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\client::recv' => 
  array (
    0 => 'mixed',
    'size=' => 'mixed',
    'flag=' => 'mixed',
  ),
  'swoole\\client::send' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
    'flag=' => 'mixed',
  ),
  'swoole\\client::sendfile' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
    'offset=' => 'mixed',
    'length=' => 'mixed',
  ),
  'swoole\\client::sendto' => 
  array (
    0 => 'mixed',
    'ip' => 'mixed',
    'port' => 'mixed',
    'data' => 'mixed',
  ),
  'swoole\\client::set' => 
  array (
    0 => 'mixed',
    'settings' => 'array<array-key, mixed>',
  ),
  'swoole\\client::shutdown' => 
  array (
    0 => 'mixed',
    'how' => 'mixed',
  ),
  'swoole\\client::verifypeercert' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\client\\exception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\client\\exception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'swoole\\client\\exception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\client\\exception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\client\\exception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\client\\exception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\client\\exception::getline' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\client\\exception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\client\\exception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\client\\exception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\client\\exception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\connection\\iterator::__construct' => 
  array (
    0 => 'void',
  ),
  'swoole\\connection\\iterator::__destruct' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\connection\\iterator::count' => 
  array (
    0 => 'int',
  ),
  'swoole\\connection\\iterator::current' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\connection\\iterator::key' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\connection\\iterator::next' => 
  array (
    0 => 'void',
  ),
  'swoole\\connection\\iterator::offsetexists' => 
  array (
    0 => 'bool',
    'fd' => 'mixed',
  ),
  'swoole\\connection\\iterator::offsetget' => 
  array (
    0 => 'mixed',
    'fd' => 'mixed',
  ),
  'swoole\\connection\\iterator::offsetset' => 
  array (
    0 => 'void',
    'fd' => 'mixed',
    'value' => 'mixed',
  ),
  'swoole\\connection\\iterator::offsetunset' => 
  array (
    0 => 'void',
    'fd' => 'mixed',
  ),
  'swoole\\connection\\iterator::rewind' => 
  array (
    0 => 'void',
  ),
  'swoole\\connection\\iterator::valid' => 
  array (
    0 => 'bool',
  ),
  'swoole\\connectionpool::__construct' => 
  array (
    0 => 'void',
    'constructor' => 'callable',
    'size=' => 'int',
    'proxy=' => 'null|string',
  ),
  'swoole\\connectionpool::close' => 
  array (
    0 => 'void',
  ),
  'swoole\\connectionpool::fill' => 
  array (
    0 => 'void',
  ),
  'swoole\\connectionpool::get' => 
  array (
    0 => 'mixed',
    'timeout=' => 'float',
  ),
  'swoole\\connectionpool::make' => 
  array (
    0 => 'void',
  ),
  'swoole\\connectionpool::put' => 
  array (
    0 => 'void',
    'connection' => 'mixed',
  ),
  'swoole\\coroutine::cancel' => 
  array (
    0 => 'mixed',
    'cid' => 'mixed',
  ),
  'swoole\\coroutine::create' => 
  array (
    0 => 'mixed',
    'func' => 'callable',
    '...params=' => 'mixed',
  ),
  'swoole\\coroutine::defer' => 
  array (
    0 => 'mixed',
    'callback' => 'mixed',
  ),
  'swoole\\coroutine::disablescheduler' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine::dnslookup' => 
  array (
    0 => 'mixed',
    'domain_name' => 'mixed',
    'timeout=' => 'mixed',
    'type=' => 'mixed',
  ),
  'swoole\\coroutine::enablescheduler' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine::exec' => 
  array (
    0 => 'mixed',
    'command' => 'mixed',
    'get_error_stream=' => 'mixed',
  ),
  'swoole\\coroutine::exists' => 
  array (
    0 => 'mixed',
    'cid' => 'mixed',
  ),
  'swoole\\coroutine::fgets' => 
  array (
    0 => 'mixed',
    'handle' => 'mixed',
  ),
  'swoole\\coroutine::fread' => 
  array (
    0 => 'mixed',
    'handle' => 'mixed',
    'length=' => 'mixed',
  ),
  'swoole\\coroutine::fwrite' => 
  array (
    0 => 'mixed',
    'handle' => 'mixed',
    'string' => 'mixed',
    'length=' => 'mixed',
  ),
  'swoole\\coroutine::getaddrinfo' => 
  array (
    0 => 'mixed',
    'hostname' => 'mixed',
    'family=' => 'mixed',
    'socktype=' => 'mixed',
    'protocol=' => 'mixed',
    'service=' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine::getbacktrace' => 
  array (
    0 => 'mixed',
    'cid=' => 'mixed',
    'options=' => 'mixed',
    'limit=' => 'mixed',
  ),
  'swoole\\coroutine::getcid' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine::getcontext' => 
  array (
    0 => 'mixed',
    'cid=' => 'mixed',
  ),
  'swoole\\coroutine::getelapsed' => 
  array (
    0 => 'mixed',
    'cid=' => 'mixed',
  ),
  'swoole\\coroutine::gethostbyname' => 
  array (
    0 => 'mixed',
    'domain_name' => 'mixed',
    'family=' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine::getoptions' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine::getpcid' => 
  array (
    0 => 'mixed',
    'cid=' => 'mixed',
  ),
  'swoole\\coroutine::getstackusage' => 
  array (
    0 => 'mixed',
    'cid=' => 'mixed',
  ),
  'swoole\\coroutine::getuid' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine::iscanceled' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine::join' => 
  array (
    0 => 'mixed',
    'cid_array' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine::list' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine::listcoroutines' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine::printbacktrace' => 
  array (
    0 => 'mixed',
    'cid=' => 'mixed',
    'options=' => 'mixed',
    'limit=' => 'mixed',
  ),
  'swoole\\coroutine::readfile' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'swoole\\coroutine::resume' => 
  array (
    0 => 'mixed',
    'cid' => 'mixed',
  ),
  'swoole\\coroutine::set' => 
  array (
    0 => 'mixed',
    'options' => 'mixed',
  ),
  'swoole\\coroutine::sleep' => 
  array (
    0 => 'mixed',
    'seconds' => 'mixed',
  ),
  'swoole\\coroutine::stats' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine::statvfs' => 
  array (
    0 => 'mixed',
    'path' => 'mixed',
  ),
  'swoole\\coroutine::suspend' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine::wait' => 
  array (
    0 => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine::waitevent' => 
  array (
    0 => 'mixed',
    'fd' => 'mixed',
    'events=' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine::waitpid' => 
  array (
    0 => 'mixed',
    'pid' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine::waitsignal' => 
  array (
    0 => 'mixed',
    'signo' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine::writefile' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
    'data' => 'mixed',
    'flags=' => 'mixed',
  ),
  'swoole\\coroutine::yield' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\barrier::__destruct' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\barrier::make' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\barrier::wait' => 
  array (
    0 => 'mixed',
    '&barrier' => 'Swoole\\Coroutine\\Barrier',
    'timeout=' => 'float',
  ),
  'swoole\\coroutine\\batch' => 
  array (
    0 => 'array<array-key, mixed>',
    'tasks' => 'array<array-key, mixed>',
    'timeout=' => 'float',
  ),
  'swoole\\coroutine\\channel::__construct' => 
  array (
    0 => 'void',
    'size=' => 'mixed',
  ),
  'swoole\\coroutine\\channel::close' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\channel::isempty' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\channel::isfull' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\channel::length' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\channel::pop' => 
  array (
    0 => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine\\channel::push' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine\\channel::stats' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\client::__construct' => 
  array (
    0 => 'void',
    'type' => 'mixed',
  ),
  'swoole\\coroutine\\client::__destruct' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\client::close' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\client::connect' => 
  array (
    0 => 'mixed',
    'host' => 'mixed',
    'port=' => 'mixed',
    'timeout=' => 'mixed',
    'sock_flag=' => 'mixed',
  ),
  'swoole\\coroutine\\client::enablessl' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\client::exportsocket' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\client::getpeercert' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\client::getpeername' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\client::getsockname' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\client::isconnected' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\client::peek' => 
  array (
    0 => 'mixed',
    'length=' => 'mixed',
  ),
  'swoole\\coroutine\\client::recv' => 
  array (
    0 => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine\\client::recvfrom' => 
  array (
    0 => 'mixed',
    'length' => 'mixed',
    '&address' => 'mixed',
    '&port=' => 'mixed',
  ),
  'swoole\\coroutine\\client::send' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
  ),
  'swoole\\coroutine\\client::sendfile' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
    'offset=' => 'mixed',
    'length=' => 'mixed',
  ),
  'swoole\\coroutine\\client::sendto' => 
  array (
    0 => 'mixed',
    'address' => 'mixed',
    'port' => 'mixed',
    'data' => 'mixed',
  ),
  'swoole\\coroutine\\client::set' => 
  array (
    0 => 'mixed',
    'settings' => 'array<array-key, mixed>',
  ),
  'swoole\\coroutine\\client::verifypeercert' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\context::__construct' => 
  array (
    0 => 'void',
    'input=' => 'mixed',
    'flags=' => 'mixed',
    'iterator_class=' => 'mixed',
  ),
  'swoole\\coroutine\\context::append' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'swoole\\coroutine\\context::asort' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\context::count' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\context::exchangearray' => 
  array (
    0 => 'mixed',
    'array' => 'mixed',
  ),
  'swoole\\coroutine\\context::getarraycopy' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\context::getflags' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\context::getiterator' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\context::getiteratorclass' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\context::ksort' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\context::natcasesort' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\context::natsort' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\context::offsetexists' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'swoole\\coroutine\\context::offsetget' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'swoole\\coroutine\\context::offsetset' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
    'newval' => 'mixed',
  ),
  'swoole\\coroutine\\context::offsetunset' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'swoole\\coroutine\\context::serialize' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\context::setflags' => 
  array (
    0 => 'mixed',
    'flags' => 'mixed',
  ),
  'swoole\\coroutine\\context::setiteratorclass' => 
  array (
    0 => 'mixed',
    'iteratorClass' => 'mixed',
  ),
  'swoole\\coroutine\\context::uasort' => 
  array (
    0 => 'mixed',
    'cmp_function' => 'mixed',
  ),
  'swoole\\coroutine\\context::uksort' => 
  array (
    0 => 'mixed',
    'cmp_function' => 'mixed',
  ),
  'swoole\\coroutine\\context::unserialize' => 
  array (
    0 => 'mixed',
    'serialized' => 'mixed',
  ),
  'swoole\\coroutine\\curl\\exception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\curl\\exception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'swoole\\coroutine\\curl\\exception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\curl\\exception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\curl\\exception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\curl\\exception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\curl\\exception::getline' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\curl\\exception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\curl\\exception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\curl\\exception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\curl\\exception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\deadlock_check' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\defer' => 
  array (
    0 => 'mixed',
    'fn' => 'callable',
  ),
  'swoole\\coroutine\\fastcgi\\client::__construct' => 
  array (
    0 => 'void',
    'host' => 'string',
    'port=' => 'int',
    'ssl=' => 'bool',
  ),
  'swoole\\coroutine\\fastcgi\\client::call' => 
  array (
    0 => 'string',
    'url' => 'string',
    'path' => 'string',
    'data=' => 'mixed',
    'timeout=' => 'float',
  ),
  'swoole\\coroutine\\fastcgi\\client::execute' => 
  array (
    0 => 'Swoole\\FastCGI\\Response',
    'request' => 'Swoole\\FastCGI\\Request',
    'timeout=' => 'float',
  ),
  'swoole\\coroutine\\fastcgi\\client::ioexception' => 
  array (
    0 => 'void',
    'errno=' => 'int|null',
  ),
  'swoole\\coroutine\\fastcgi\\client::parseurl' => 
  array (
    0 => 'array<array-key, mixed>',
    'url' => 'string',
  ),
  'swoole\\coroutine\\fastcgi\\client\\exception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\fastcgi\\client\\exception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'swoole\\coroutine\\fastcgi\\client\\exception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\fastcgi\\client\\exception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\fastcgi\\client\\exception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\fastcgi\\client\\exception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\fastcgi\\client\\exception::getline' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\fastcgi\\client\\exception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\fastcgi\\client\\exception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\fastcgi\\client\\exception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\fastcgi\\client\\exception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\fastcgi\\proxy::__construct' => 
  array (
    0 => 'void',
    'url' => 'string',
    'documentRoot=' => 'string',
  ),
  'swoole\\coroutine\\fastcgi\\proxy::getparam' => 
  array (
    0 => 'null|string',
    'name' => 'string',
  ),
  'swoole\\coroutine\\fastcgi\\proxy::getparams' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'swoole\\coroutine\\fastcgi\\proxy::pass' => 
  array (
    0 => 'void',
    'userRequest' => 'mixed',
    'userResponse' => 'mixed',
  ),
  'swoole\\coroutine\\fastcgi\\proxy::staticfilefiltrate' => 
  array (
    0 => 'bool',
    'request' => 'Swoole\\FastCGI\\HttpRequest',
    'userResponse' => 'mixed',
  ),
  'swoole\\coroutine\\fastcgi\\proxy::translaterequest' => 
  array (
    0 => 'Swoole\\FastCGI\\HttpRequest',
    'userRequest' => 'mixed',
  ),
  'swoole\\coroutine\\fastcgi\\proxy::translateresponse' => 
  array (
    0 => 'void',
    'response' => 'Swoole\\FastCGI\\HttpResponse',
    'userResponse' => 'mixed',
  ),
  'swoole\\coroutine\\fastcgi\\proxy::withaddedparams' => 
  array (
    0 => 'self',
    'params' => 'array<array-key, mixed>',
  ),
  'swoole\\coroutine\\fastcgi\\proxy::withhttps' => 
  array (
    0 => 'self',
    'https' => 'bool',
  ),
  'swoole\\coroutine\\fastcgi\\proxy::withindex' => 
  array (
    0 => 'self',
    'index' => 'string',
  ),
  'swoole\\coroutine\\fastcgi\\proxy::withoutparam' => 
  array (
    0 => 'self',
    'name' => 'string',
  ),
  'swoole\\coroutine\\fastcgi\\proxy::withparam' => 
  array (
    0 => 'self',
    'name' => 'string',
    'value' => 'string',
  ),
  'swoole\\coroutine\\fastcgi\\proxy::withparams' => 
  array (
    0 => 'self',
    'params' => 'array<array-key, mixed>',
  ),
  'swoole\\coroutine\\fastcgi\\proxy::withstaticfilefilter' => 
  array (
    0 => 'self',
    'filter' => 'callable|null',
  ),
  'swoole\\coroutine\\fastcgi\\proxy::withtimeout' => 
  array (
    0 => 'self',
    'timeout' => 'float',
  ),
  'swoole\\coroutine\\go' => 
  array (
    0 => 'mixed',
    'fn' => 'callable',
    '...args=' => 'mixed',
  ),
  'swoole\\coroutine\\http2\\client::__construct' => 
  array (
    0 => 'void',
    'host' => 'mixed',
    'port=' => 'mixed',
    'open_ssl=' => 'mixed',
  ),
  'swoole\\coroutine\\http2\\client::__destruct' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\http2\\client::close' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\http2\\client::connect' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\http2\\client::goaway' => 
  array (
    0 => 'mixed',
    'error_code=' => 'mixed',
    'debug_data=' => 'mixed',
  ),
  'swoole\\coroutine\\http2\\client::isstreamexist' => 
  array (
    0 => 'mixed',
    'stream_id' => 'mixed',
  ),
  'swoole\\coroutine\\http2\\client::ping' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\http2\\client::read' => 
  array (
    0 => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine\\http2\\client::recv' => 
  array (
    0 => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine\\http2\\client::send' => 
  array (
    0 => 'mixed',
    'request' => 'mixed',
  ),
  'swoole\\coroutine\\http2\\client::set' => 
  array (
    0 => 'mixed',
    'settings' => 'array<array-key, mixed>',
  ),
  'swoole\\coroutine\\http2\\client::stats' => 
  array (
    0 => 'mixed',
    'key=' => 'mixed',
  ),
  'swoole\\coroutine\\http2\\client::write' => 
  array (
    0 => 'mixed',
    'stream_id' => 'mixed',
    'data' => 'mixed',
    'end_stream=' => 'mixed',
  ),
  'swoole\\coroutine\\http2\\client\\exception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\http2\\client\\exception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'swoole\\coroutine\\http2\\client\\exception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\http2\\client\\exception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\http2\\client\\exception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\http2\\client\\exception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\http2\\client\\exception::getline' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\http2\\client\\exception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\http2\\client\\exception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\http2\\client\\exception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\http2\\client\\exception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\http\\client::__construct' => 
  array (
    0 => 'void',
    'host' => 'mixed',
    'port=' => 'mixed',
    'ssl=' => 'mixed',
  ),
  'swoole\\coroutine\\http\\client::__destruct' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\http\\client::adddata' => 
  array (
    0 => 'mixed',
    'path' => 'mixed',
    'name' => 'mixed',
    'type=' => 'mixed',
    'filename=' => 'mixed',
  ),
  'swoole\\coroutine\\http\\client::addfile' => 
  array (
    0 => 'mixed',
    'path' => 'mixed',
    'name' => 'mixed',
    'type=' => 'mixed',
    'filename=' => 'mixed',
    'offset=' => 'mixed',
    'length=' => 'mixed',
  ),
  'swoole\\coroutine\\http\\client::close' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\http\\client::download' => 
  array (
    0 => 'mixed',
    'path' => 'mixed',
    'file' => 'mixed',
    'offset=' => 'mixed',
  ),
  'swoole\\coroutine\\http\\client::execute' => 
  array (
    0 => 'mixed',
    'path' => 'mixed',
  ),
  'swoole\\coroutine\\http\\client::get' => 
  array (
    0 => 'mixed',
    'path' => 'mixed',
  ),
  'swoole\\coroutine\\http\\client::getbody' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\http\\client::getcookies' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\http\\client::getdefer' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\http\\client::getheaderout' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\http\\client::getheaders' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\http\\client::getpeercert' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\http\\client::getpeername' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\http\\client::getsockname' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\http\\client::getstatuscode' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\http\\client::post' => 
  array (
    0 => 'mixed',
    'path' => 'mixed',
    'data' => 'mixed',
  ),
  'swoole\\coroutine\\http\\client::push' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
    'opcode=' => 'mixed',
    'flags=' => 'mixed',
  ),
  'swoole\\coroutine\\http\\client::recv' => 
  array (
    0 => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine\\http\\client::set' => 
  array (
    0 => 'mixed',
    'settings' => 'array<array-key, mixed>',
  ),
  'swoole\\coroutine\\http\\client::setbasicauth' => 
  array (
    0 => 'mixed',
    'username' => 'mixed',
    'password' => 'mixed',
  ),
  'swoole\\coroutine\\http\\client::setcookies' => 
  array (
    0 => 'mixed',
    'cookies' => 'array<array-key, mixed>',
  ),
  'swoole\\coroutine\\http\\client::setdata' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
  ),
  'swoole\\coroutine\\http\\client::setdefer' => 
  array (
    0 => 'mixed',
    'defer=' => 'mixed',
  ),
  'swoole\\coroutine\\http\\client::setheaders' => 
  array (
    0 => 'mixed',
    'headers' => 'array<array-key, mixed>',
  ),
  'swoole\\coroutine\\http\\client::setmethod' => 
  array (
    0 => 'mixed',
    'method' => 'mixed',
  ),
  'swoole\\coroutine\\http\\client::upgrade' => 
  array (
    0 => 'mixed',
    'path' => 'mixed',
  ),
  'swoole\\coroutine\\http\\client\\exception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\http\\client\\exception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'swoole\\coroutine\\http\\client\\exception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\http\\client\\exception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\http\\client\\exception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\http\\client\\exception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\http\\client\\exception::getline' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\http\\client\\exception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\http\\client\\exception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\http\\client\\exception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\http\\client\\exception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\http\\clientproxy::__construct' => 
  array (
    0 => 'void',
    'body' => 'mixed',
    'statusCode' => 'mixed',
    'headers' => 'mixed',
    'cookies' => 'mixed',
  ),
  'swoole\\coroutine\\http\\clientproxy::getbody' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\http\\clientproxy::getcookies' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\http\\clientproxy::getheaders' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\http\\clientproxy::getstatuscode' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\http\\get' => 
  array (
    0 => 'Swoole\\Coroutine\\Http\\ClientProxy',
    'url' => 'string',
    'options=' => 'array<array-key, mixed>|null',
    'headers=' => 'array<array-key, mixed>|null',
    'cookies=' => 'array<array-key, mixed>|null',
  ),
  'swoole\\coroutine\\http\\post' => 
  array (
    0 => 'Swoole\\Coroutine\\Http\\ClientProxy',
    'url' => 'string',
    'data' => 'mixed',
    'options=' => 'array<array-key, mixed>|null',
    'headers=' => 'array<array-key, mixed>|null',
    'cookies=' => 'array<array-key, mixed>|null',
  ),
  'swoole\\coroutine\\http\\request' => 
  array (
    0 => 'Swoole\\Coroutine\\Http\\ClientProxy',
    'url' => 'string',
    'method' => 'string',
    'data=' => 'mixed',
    'options=' => 'array<array-key, mixed>|null',
    'headers=' => 'array<array-key, mixed>|null',
    'cookies=' => 'array<array-key, mixed>|null',
  ),
  'swoole\\coroutine\\http\\request_with_curl' => 
  array (
    0 => 'Swoole\\Coroutine\\Http\\ClientProxy',
    'url' => 'string',
    'method' => 'string',
    'data=' => 'mixed',
    'options=' => 'array<array-key, mixed>|null',
    'headers=' => 'array<array-key, mixed>|null',
    'cookies=' => 'array<array-key, mixed>|null',
  ),
  'swoole\\coroutine\\http\\request_with_http_client' => 
  array (
    0 => 'Swoole\\Coroutine\\Http\\ClientProxy',
    'url' => 'string',
    'method' => 'string',
    'data=' => 'mixed',
    'options=' => 'array<array-key, mixed>|null',
    'headers=' => 'array<array-key, mixed>|null',
    'cookies=' => 'array<array-key, mixed>|null',
  ),
  'swoole\\coroutine\\http\\request_with_stream' => 
  array (
    0 => 'Swoole\\Coroutine\\Http\\ClientProxy',
    'url' => 'string',
    'method' => 'string',
    'data=' => 'mixed',
    'options=' => 'array<array-key, mixed>|null',
    'headers=' => 'array<array-key, mixed>|null',
    'cookies=' => 'array<array-key, mixed>|null',
  ),
  'swoole\\coroutine\\http\\server::__construct' => 
  array (
    0 => 'void',
    'host' => 'mixed',
    'port=' => 'mixed',
    'ssl=' => 'mixed',
    'reuse_port=' => 'mixed',
  ),
  'swoole\\coroutine\\http\\server::__destruct' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\http\\server::handle' => 
  array (
    0 => 'mixed',
    'pattern' => 'mixed',
    'callback' => 'callable',
  ),
  'swoole\\coroutine\\http\\server::onaccept' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\http\\server::set' => 
  array (
    0 => 'mixed',
    'settings' => 'array<array-key, mixed>',
  ),
  'swoole\\coroutine\\http\\server::shutdown' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\http\\server::start' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\iterator::__construct' => 
  array (
    0 => 'void',
    'array=' => 'mixed',
    'ar_flags=' => 'mixed',
  ),
  'swoole\\coroutine\\iterator::append' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
  ),
  'swoole\\coroutine\\iterator::asort' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\iterator::count' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\iterator::current' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\iterator::getarraycopy' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\iterator::getflags' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\iterator::key' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\iterator::ksort' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\iterator::natcasesort' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\iterator::natsort' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\iterator::next' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\iterator::offsetexists' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'swoole\\coroutine\\iterator::offsetget' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'swoole\\coroutine\\iterator::offsetset' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
    'newval' => 'mixed',
  ),
  'swoole\\coroutine\\iterator::offsetunset' => 
  array (
    0 => 'mixed',
    'index' => 'mixed',
  ),
  'swoole\\coroutine\\iterator::rewind' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\iterator::seek' => 
  array (
    0 => 'mixed',
    'position' => 'mixed',
  ),
  'swoole\\coroutine\\iterator::serialize' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\iterator::setflags' => 
  array (
    0 => 'mixed',
    'flags' => 'mixed',
  ),
  'swoole\\coroutine\\iterator::uasort' => 
  array (
    0 => 'mixed',
    'cmp_function' => 'mixed',
  ),
  'swoole\\coroutine\\iterator::uksort' => 
  array (
    0 => 'mixed',
    'cmp_function' => 'mixed',
  ),
  'swoole\\coroutine\\iterator::unserialize' => 
  array (
    0 => 'mixed',
    'serialized' => 'mixed',
  ),
  'swoole\\coroutine\\iterator::valid' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\map' => 
  array (
    0 => 'array<array-key, mixed>',
    'list' => 'array<array-key, mixed>',
    'fn' => 'callable',
    'timeout=' => 'float',
  ),
  'swoole\\coroutine\\mysql::__construct' => 
  array (
    0 => 'void',
  ),
  'swoole\\coroutine\\mysql::__destruct' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\mysql::begin' => 
  array (
    0 => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine\\mysql::close' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\mysql::commit' => 
  array (
    0 => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine\\mysql::connect' => 
  array (
    0 => 'mixed',
    'server_config=' => 'array<array-key, mixed>',
  ),
  'swoole\\coroutine\\mysql::escape' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    'flags=' => 'mixed',
  ),
  'swoole\\coroutine\\mysql::fetch' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\mysql::fetchall' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\mysql::getdefer' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\mysql::nextresult' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\mysql::prepare' => 
  array (
    0 => 'mixed',
    'query' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine\\mysql::query' => 
  array (
    0 => 'mixed',
    'sql' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine\\mysql::recv' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\mysql::rollback' => 
  array (
    0 => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine\\mysql::setdefer' => 
  array (
    0 => 'mixed',
    'defer=' => 'mixed',
  ),
  'swoole\\coroutine\\mysql\\exception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\mysql\\exception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'swoole\\coroutine\\mysql\\exception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\mysql\\exception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\mysql\\exception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\mysql\\exception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\mysql\\exception::getline' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\mysql\\exception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\mysql\\exception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\mysql\\exception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\mysql\\exception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\mysql\\statement::close' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\mysql\\statement::execute' => 
  array (
    0 => 'mixed',
    'params=' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine\\mysql\\statement::fetch' => 
  array (
    0 => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine\\mysql\\statement::fetchall' => 
  array (
    0 => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine\\mysql\\statement::nextresult' => 
  array (
    0 => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine\\mysql\\statement::recv' => 
  array (
    0 => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine\\parallel' => 
  array (
    0 => 'void',
    'n' => 'int',
    'fn' => 'callable',
  ),
  'swoole\\coroutine\\redis::__construct' => 
  array (
    0 => 'void',
    'config=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::__destruct' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\redis::append' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'swoole\\coroutine\\redis::auth' => 
  array (
    0 => 'mixed',
    'password' => 'mixed',
  ),
  'swoole\\coroutine\\redis::bgrewriteaof' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\redis::bgsave' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\redis::bitcount' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'swoole\\coroutine\\redis::bitop' => 
  array (
    0 => 'mixed',
    'operation' => 'mixed',
    'ret_key' => 'mixed',
    'key' => 'mixed',
    'other_keys=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::blpop' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'timeout_or_key' => 'mixed',
    'extra_args=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::brpop' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'timeout_or_key' => 'mixed',
    'extra_args=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::brpoplpush' => 
  array (
    0 => 'mixed',
    'src' => 'mixed',
    'dst' => 'mixed',
    'timeout' => 'mixed',
  ),
  'swoole\\coroutine\\redis::bzpopmax' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'timeout_or_key' => 'mixed',
    'extra_args=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::bzpopmin' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'timeout_or_key' => 'mixed',
    'extra_args=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::close' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\redis::connect' => 
  array (
    0 => 'mixed',
    'host' => 'mixed',
    'port=' => 'mixed',
    'serialize=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::dbsize' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\redis::debug' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'swoole\\coroutine\\redis::decr' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'swoole\\coroutine\\redis::decrby' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'swoole\\coroutine\\redis::del' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'other_keys=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::delete' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'other_keys=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::dump' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'swoole\\coroutine\\redis::eval' => 
  array (
    0 => 'mixed',
    'script' => 'mixed',
    'args=' => 'mixed',
    'num_keys=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::evalsha' => 
  array (
    0 => 'mixed',
    'script_sha' => 'mixed',
    'args=' => 'mixed',
    'num_keys=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::exec' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\redis::exists' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'other_keys=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::expire' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'integer' => 'mixed',
  ),
  'swoole\\coroutine\\redis::expireat' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'timestamp' => 'mixed',
  ),
  'swoole\\coroutine\\redis::flushall' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\redis::flushdb' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\redis::get' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'swoole\\coroutine\\redis::getauth' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\redis::getbit' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'offset' => 'mixed',
  ),
  'swoole\\coroutine\\redis::getdbnum' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\redis::getdefer' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\redis::getkeys' => 
  array (
    0 => 'mixed',
    'pattern' => 'mixed',
  ),
  'swoole\\coroutine\\redis::getoptions' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\redis::getrange' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start' => 'mixed',
    'end' => 'mixed',
  ),
  'swoole\\coroutine\\redis::getset' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'swoole\\coroutine\\redis::hdel' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
    'other_members=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::hexists' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
  ),
  'swoole\\coroutine\\redis::hget' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
  ),
  'swoole\\coroutine\\redis::hgetall' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'swoole\\coroutine\\redis::hincrby' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
    'value' => 'mixed',
  ),
  'swoole\\coroutine\\redis::hincrbyfloat' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
    'value' => 'mixed',
  ),
  'swoole\\coroutine\\redis::hkeys' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'swoole\\coroutine\\redis::hlen' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'swoole\\coroutine\\redis::hmget' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'keys' => 'mixed',
  ),
  'swoole\\coroutine\\redis::hmset' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'pairs' => 'mixed',
  ),
  'swoole\\coroutine\\redis::hset' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
    'value' => 'mixed',
  ),
  'swoole\\coroutine\\redis::hsetnx' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
    'value' => 'mixed',
  ),
  'swoole\\coroutine\\redis::hvals' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'swoole\\coroutine\\redis::incr' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'swoole\\coroutine\\redis::incrby' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'swoole\\coroutine\\redis::incrbyfloat' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'swoole\\coroutine\\redis::keys' => 
  array (
    0 => 'mixed',
    'pattern' => 'mixed',
  ),
  'swoole\\coroutine\\redis::lastsave' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\redis::lget' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'index' => 'mixed',
  ),
  'swoole\\coroutine\\redis::lgetrange' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start' => 'mixed',
    'end' => 'mixed',
  ),
  'swoole\\coroutine\\redis::lindex' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'integer' => 'mixed',
  ),
  'swoole\\coroutine\\redis::linsert' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'position' => 'mixed',
    'pivot' => 'mixed',
    'value' => 'mixed',
  ),
  'swoole\\coroutine\\redis::listtrim' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start' => 'mixed',
    'stop' => 'mixed',
  ),
  'swoole\\coroutine\\redis::llen' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'swoole\\coroutine\\redis::lpop' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'swoole\\coroutine\\redis::lpush' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'swoole\\coroutine\\redis::lpushx' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'swoole\\coroutine\\redis::lrange' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start' => 'mixed',
    'end' => 'mixed',
  ),
  'swoole\\coroutine\\redis::lrem' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
    'count' => 'mixed',
  ),
  'swoole\\coroutine\\redis::lremove' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
    'count' => 'mixed',
  ),
  'swoole\\coroutine\\redis::lset' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'index' => 'mixed',
    'value' => 'mixed',
  ),
  'swoole\\coroutine\\redis::lsize' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'swoole\\coroutine\\redis::ltrim' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start' => 'mixed',
    'stop' => 'mixed',
  ),
  'swoole\\coroutine\\redis::mget' => 
  array (
    0 => 'mixed',
    'keys' => 'mixed',
  ),
  'swoole\\coroutine\\redis::move' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'dbindex' => 'mixed',
  ),
  'swoole\\coroutine\\redis::mset' => 
  array (
    0 => 'mixed',
    'pairs' => 'mixed',
  ),
  'swoole\\coroutine\\redis::msetnx' => 
  array (
    0 => 'mixed',
    'pairs' => 'mixed',
  ),
  'swoole\\coroutine\\redis::multi' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\redis::persist' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'swoole\\coroutine\\redis::pexpire' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'timestamp' => 'mixed',
  ),
  'swoole\\coroutine\\redis::pexpireat' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'timestamp' => 'mixed',
  ),
  'swoole\\coroutine\\redis::pfadd' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'elements' => 'mixed',
  ),
  'swoole\\coroutine\\redis::pfcount' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'swoole\\coroutine\\redis::pfmerge' => 
  array (
    0 => 'mixed',
    'dstkey' => 'mixed',
    'keys' => 'mixed',
  ),
  'swoole\\coroutine\\redis::ping' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\redis::psetex' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'expire' => 'mixed',
    'value' => 'mixed',
  ),
  'swoole\\coroutine\\redis::psubscribe' => 
  array (
    0 => 'mixed',
    'patterns' => 'mixed',
  ),
  'swoole\\coroutine\\redis::pttl' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'swoole\\coroutine\\redis::publish' => 
  array (
    0 => 'mixed',
    'channel' => 'mixed',
    'message' => 'mixed',
  ),
  'swoole\\coroutine\\redis::punsubscribe' => 
  array (
    0 => 'mixed',
    'patterns' => 'mixed',
  ),
  'swoole\\coroutine\\redis::randomkey' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\redis::recv' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\redis::rename' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'newkey' => 'mixed',
  ),
  'swoole\\coroutine\\redis::renamekey' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'newkey' => 'mixed',
  ),
  'swoole\\coroutine\\redis::renamenx' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'newkey' => 'mixed',
  ),
  'swoole\\coroutine\\redis::request' => 
  array (
    0 => 'mixed',
    'params' => 'array<array-key, mixed>',
  ),
  'swoole\\coroutine\\redis::restore' => 
  array (
    0 => 'mixed',
    'ttl' => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'swoole\\coroutine\\redis::role' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\redis::rpop' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'swoole\\coroutine\\redis::rpoplpush' => 
  array (
    0 => 'mixed',
    'src' => 'mixed',
    'dst' => 'mixed',
  ),
  'swoole\\coroutine\\redis::rpush' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'swoole\\coroutine\\redis::rpushx' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'swoole\\coroutine\\redis::sadd' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'swoole\\coroutine\\redis::save' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\redis::scard' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'swoole\\coroutine\\redis::scontains' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'swoole\\coroutine\\redis::script' => 
  array (
    0 => 'mixed',
    'cmd' => 'mixed',
    'args=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::sdiff' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'other_keys=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::sdiffstore' => 
  array (
    0 => 'mixed',
    'dst' => 'mixed',
    'key' => 'mixed',
    'other_keys=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::select' => 
  array (
    0 => 'mixed',
    'dbindex' => 'mixed',
  ),
  'swoole\\coroutine\\redis::set' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
    'timeout=' => 'mixed',
    'opt=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::setbit' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'offset' => 'mixed',
    'value' => 'mixed',
  ),
  'swoole\\coroutine\\redis::setdefer' => 
  array (
    0 => 'mixed',
    'defer' => 'mixed',
  ),
  'swoole\\coroutine\\redis::setex' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'expire' => 'mixed',
    'value' => 'mixed',
  ),
  'swoole\\coroutine\\redis::setnx' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'swoole\\coroutine\\redis::setoptions' => 
  array (
    0 => 'mixed',
    'options' => 'mixed',
  ),
  'swoole\\coroutine\\redis::setrange' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'offset' => 'mixed',
    'value' => 'mixed',
  ),
  'swoole\\coroutine\\redis::settimeout' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'timeout' => 'mixed',
  ),
  'swoole\\coroutine\\redis::sgetmembers' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'swoole\\coroutine\\redis::sinter' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'other_keys=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::sinterstore' => 
  array (
    0 => 'mixed',
    'dst' => 'mixed',
    'key' => 'mixed',
    'other_keys=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::sismember' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'swoole\\coroutine\\redis::smembers' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'swoole\\coroutine\\redis::smove' => 
  array (
    0 => 'mixed',
    'src' => 'mixed',
    'dst' => 'mixed',
    'value' => 'mixed',
  ),
  'swoole\\coroutine\\redis::spop' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'swoole\\coroutine\\redis::srandmember' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'count=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::srem' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'swoole\\coroutine\\redis::sremove' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'swoole\\coroutine\\redis::ssize' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'swoole\\coroutine\\redis::strlen' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'swoole\\coroutine\\redis::subscribe' => 
  array (
    0 => 'mixed',
    'channels' => 'mixed',
  ),
  'swoole\\coroutine\\redis::sunion' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'other_keys=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::sunionstore' => 
  array (
    0 => 'mixed',
    'dst' => 'mixed',
    'key' => 'mixed',
    'other_keys=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::time' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\redis::ttl' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'swoole\\coroutine\\redis::type' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'swoole\\coroutine\\redis::unsubscribe' => 
  array (
    0 => 'mixed',
    'channels' => 'mixed',
  ),
  'swoole\\coroutine\\redis::unwatch' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\redis::watch' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'other_keys=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::xack' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'group_name' => 'mixed',
    'id' => 'mixed',
  ),
  'swoole\\coroutine\\redis::xadd' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'id' => 'mixed',
    'pairs' => 'mixed',
    'options=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::xautoclaim' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'group_name' => 'mixed',
    'consumer_name' => 'mixed',
    'min_idle_time' => 'mixed',
    'start' => 'mixed',
    'options=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::xclaim' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'group_name' => 'mixed',
    'consumer_name' => 'mixed',
    'min_idle_time' => 'mixed',
    'id' => 'mixed',
    'options=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::xdel' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'id' => 'mixed',
  ),
  'swoole\\coroutine\\redis::xgroupcreate' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'group_name' => 'mixed',
    'id' => 'mixed',
    'mkstream=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::xgroupcreateconsumer' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'group_name' => 'mixed',
    'consumer_name' => 'mixed',
  ),
  'swoole\\coroutine\\redis::xgroupdelconsumer' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'group_name' => 'mixed',
    'consumer_name' => 'mixed',
  ),
  'swoole\\coroutine\\redis::xgroupdestroy' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'group_name' => 'mixed',
  ),
  'swoole\\coroutine\\redis::xgroupsetid' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'group_name' => 'mixed',
    'id' => 'mixed',
  ),
  'swoole\\coroutine\\redis::xinfoconsumers' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'group_name' => 'mixed',
  ),
  'swoole\\coroutine\\redis::xinfogroups' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'swoole\\coroutine\\redis::xinfostream' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'swoole\\coroutine\\redis::xlen' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'swoole\\coroutine\\redis::xpending' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'group_name' => 'mixed',
    'options=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::xrange' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start' => 'mixed',
    'end' => 'mixed',
    'count=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::xread' => 
  array (
    0 => 'mixed',
    'streams' => 'mixed',
    'options=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::xreadgroup' => 
  array (
    0 => 'mixed',
    'group_name' => 'mixed',
    'consumer_name' => 'mixed',
    'streams' => 'mixed',
    'options=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::xrevrange' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start' => 'mixed',
    'end' => 'mixed',
    'count=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::xtrim' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'options=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::zadd' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'score' => 'mixed',
    'value' => 'mixed',
  ),
  'swoole\\coroutine\\redis::zcard' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'swoole\\coroutine\\redis::zcount' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'min' => 'mixed',
    'max' => 'mixed',
  ),
  'swoole\\coroutine\\redis::zdelete' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
    'other_members=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::zdeleterangebyrank' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start' => 'mixed',
    'end' => 'mixed',
  ),
  'swoole\\coroutine\\redis::zdeleterangebyscore' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'min' => 'mixed',
    'max' => 'mixed',
  ),
  'swoole\\coroutine\\redis::zincrby' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
    'member' => 'mixed',
  ),
  'swoole\\coroutine\\redis::zinter' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'keys' => 'mixed',
    'weights=' => 'mixed',
    'aggregate=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::zinterstore' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'keys' => 'mixed',
    'weights=' => 'mixed',
    'aggregate=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::zpopmax' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'count' => 'mixed',
  ),
  'swoole\\coroutine\\redis::zpopmin' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'count' => 'mixed',
  ),
  'swoole\\coroutine\\redis::zrange' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start' => 'mixed',
    'end' => 'mixed',
    'scores=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::zrangebylex' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'min' => 'mixed',
    'max' => 'mixed',
    'offset=' => 'mixed',
    'limit=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::zrangebyscore' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start' => 'mixed',
    'end' => 'mixed',
    'options=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::zrank' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
  ),
  'swoole\\coroutine\\redis::zrem' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
    'other_members=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::zremove' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
    'other_members=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::zremrangebyrank' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'min' => 'mixed',
    'max' => 'mixed',
  ),
  'swoole\\coroutine\\redis::zremrangebyscore' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'min' => 'mixed',
    'max' => 'mixed',
  ),
  'swoole\\coroutine\\redis::zrevrange' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start' => 'mixed',
    'end' => 'mixed',
    'scores=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::zrevrangebylex' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'min' => 'mixed',
    'max' => 'mixed',
    'offset=' => 'mixed',
    'limit=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::zrevrangebyscore' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'start' => 'mixed',
    'end' => 'mixed',
    'options=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::zrevrank' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
  ),
  'swoole\\coroutine\\redis::zscore' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'member' => 'mixed',
  ),
  'swoole\\coroutine\\redis::zsize' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
  ),
  'swoole\\coroutine\\redis::zunion' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'keys' => 'mixed',
    'weights=' => 'mixed',
    'aggregate=' => 'mixed',
  ),
  'swoole\\coroutine\\redis::zunionstore' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'keys' => 'mixed',
    'weights=' => 'mixed',
    'aggregate=' => 'mixed',
  ),
  'swoole\\coroutine\\run' => 
  array (
    0 => 'mixed',
    'fn' => 'callable',
    '...args=' => 'mixed',
  ),
  'swoole\\coroutine\\scheduler::add' => 
  array (
    0 => 'mixed',
    'func' => 'callable',
    '...params=' => 'mixed',
  ),
  'swoole\\coroutine\\scheduler::getoptions' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\scheduler::parallel' => 
  array (
    0 => 'mixed',
    'n' => 'mixed',
    'func=' => 'callable',
    '...params=' => 'mixed',
  ),
  'swoole\\coroutine\\scheduler::set' => 
  array (
    0 => 'mixed',
    'settings' => 'array<array-key, mixed>',
  ),
  'swoole\\coroutine\\scheduler::start' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\server::__construct' => 
  array (
    0 => 'void',
    'host' => 'string',
    'port=' => 'int',
    'ssl=' => 'bool',
    'reuse_port=' => 'bool',
  ),
  'swoole\\coroutine\\server::handle' => 
  array (
    0 => 'void',
    'fn' => 'callable',
  ),
  'swoole\\coroutine\\server::set' => 
  array (
    0 => 'void',
    'setting' => 'array<array-key, mixed>',
  ),
  'swoole\\coroutine\\server::shutdown' => 
  array (
    0 => 'bool',
  ),
  'swoole\\coroutine\\server::start' => 
  array (
    0 => 'bool',
  ),
  'swoole\\coroutine\\server\\connection::__construct' => 
  array (
    0 => 'void',
    'conn' => 'Swoole\\Coroutine\\Socket',
  ),
  'swoole\\coroutine\\server\\connection::close' => 
  array (
    0 => 'bool',
  ),
  'swoole\\coroutine\\server\\connection::exportsocket' => 
  array (
    0 => 'Swoole\\Coroutine\\Socket',
  ),
  'swoole\\coroutine\\server\\connection::recv' => 
  array (
    0 => 'mixed',
    'timeout=' => 'float',
  ),
  'swoole\\coroutine\\server\\connection::send' => 
  array (
    0 => 'mixed',
    'data' => 'string',
  ),
  'swoole\\coroutine\\socket::__construct' => 
  array (
    0 => 'void',
    'domain' => 'mixed',
    'type' => 'mixed',
    'protocol=' => 'mixed',
  ),
  'swoole\\coroutine\\socket::accept' => 
  array (
    0 => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine\\socket::bind' => 
  array (
    0 => 'mixed',
    'address' => 'mixed',
    'port=' => 'mixed',
  ),
  'swoole\\coroutine\\socket::cancel' => 
  array (
    0 => 'mixed',
    'event=' => 'mixed',
  ),
  'swoole\\coroutine\\socket::checkliveness' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\socket::close' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\socket::connect' => 
  array (
    0 => 'mixed',
    'host' => 'mixed',
    'port=' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine\\socket::getoption' => 
  array (
    0 => 'mixed',
    'level' => 'mixed',
    'opt_name' => 'mixed',
  ),
  'swoole\\coroutine\\socket::getpeername' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\socket::getsockname' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\socket::isclosed' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\socket::listen' => 
  array (
    0 => 'mixed',
    'backlog=' => 'mixed',
  ),
  'swoole\\coroutine\\socket::peek' => 
  array (
    0 => 'mixed',
    'length=' => 'mixed',
  ),
  'swoole\\coroutine\\socket::readvector' => 
  array (
    0 => 'mixed',
    'io_vector' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine\\socket::readvectorall' => 
  array (
    0 => 'mixed',
    'io_vector' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine\\socket::recv' => 
  array (
    0 => 'mixed',
    'length=' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine\\socket::recvall' => 
  array (
    0 => 'mixed',
    'length=' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine\\socket::recvfrom' => 
  array (
    0 => 'mixed',
    '&peername' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine\\socket::recvline' => 
  array (
    0 => 'mixed',
    'length=' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine\\socket::recvpacket' => 
  array (
    0 => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine\\socket::recvwithbuffer' => 
  array (
    0 => 'mixed',
    'length=' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine\\socket::send' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine\\socket::sendall' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine\\socket::sendfile' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
    'offset=' => 'mixed',
    'length=' => 'mixed',
  ),
  'swoole\\coroutine\\socket::sendto' => 
  array (
    0 => 'mixed',
    'addr' => 'mixed',
    'port' => 'mixed',
    'data' => 'mixed',
  ),
  'swoole\\coroutine\\socket::setoption' => 
  array (
    0 => 'mixed',
    'level' => 'mixed',
    'opt_name' => 'mixed',
    'opt_value' => 'mixed',
  ),
  'swoole\\coroutine\\socket::setprotocol' => 
  array (
    0 => 'mixed',
    'settings' => 'array<array-key, mixed>',
  ),
  'swoole\\coroutine\\socket::shutdown' => 
  array (
    0 => 'mixed',
    'how=' => 'mixed',
  ),
  'swoole\\coroutine\\socket::sslhandshake' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\socket::writevector' => 
  array (
    0 => 'mixed',
    'io_vector' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine\\socket::writevectorall' => 
  array (
    0 => 'mixed',
    'io_vector' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine\\socket\\exception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\socket\\exception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'swoole\\coroutine\\socket\\exception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\socket\\exception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\socket\\exception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\socket\\exception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\socket\\exception::getline' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\socket\\exception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\socket\\exception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\socket\\exception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\socket\\exception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\coroutine\\system::dnslookup' => 
  array (
    0 => 'mixed',
    'domain_name' => 'mixed',
    'timeout=' => 'mixed',
    'type=' => 'mixed',
  ),
  'swoole\\coroutine\\system::exec' => 
  array (
    0 => 'mixed',
    'command' => 'mixed',
    'get_error_stream=' => 'mixed',
  ),
  'swoole\\coroutine\\system::fgets' => 
  array (
    0 => 'mixed',
    'handle' => 'mixed',
  ),
  'swoole\\coroutine\\system::fread' => 
  array (
    0 => 'mixed',
    'handle' => 'mixed',
    'length=' => 'mixed',
  ),
  'swoole\\coroutine\\system::fwrite' => 
  array (
    0 => 'mixed',
    'handle' => 'mixed',
    'string' => 'mixed',
    'length=' => 'mixed',
  ),
  'swoole\\coroutine\\system::getaddrinfo' => 
  array (
    0 => 'mixed',
    'hostname' => 'mixed',
    'family=' => 'mixed',
    'socktype=' => 'mixed',
    'protocol=' => 'mixed',
    'service=' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine\\system::gethostbyname' => 
  array (
    0 => 'mixed',
    'domain_name' => 'mixed',
    'family=' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine\\system::readfile' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
  ),
  'swoole\\coroutine\\system::sleep' => 
  array (
    0 => 'mixed',
    'seconds' => 'mixed',
  ),
  'swoole\\coroutine\\system::statvfs' => 
  array (
    0 => 'mixed',
    'path' => 'mixed',
  ),
  'swoole\\coroutine\\system::wait' => 
  array (
    0 => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine\\system::waitevent' => 
  array (
    0 => 'mixed',
    'fd' => 'mixed',
    'events=' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine\\system::waitpid' => 
  array (
    0 => 'mixed',
    'pid' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine\\system::waitsignal' => 
  array (
    0 => 'mixed',
    'signo' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\coroutine\\system::writefile' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
    'data' => 'mixed',
    'flags=' => 'mixed',
  ),
  'swoole\\coroutine\\waitgroup::__construct' => 
  array (
    0 => 'void',
    'delta=' => 'int',
  ),
  'swoole\\coroutine\\waitgroup::add' => 
  array (
    0 => 'void',
    'delta=' => 'int',
  ),
  'swoole\\coroutine\\waitgroup::count' => 
  array (
    0 => 'int',
  ),
  'swoole\\coroutine\\waitgroup::done' => 
  array (
    0 => 'void',
  ),
  'swoole\\coroutine\\waitgroup::wait' => 
  array (
    0 => 'bool',
    'timeout=' => 'float',
  ),
  'swoole\\curl\\exception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\curl\\exception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'swoole\\curl\\exception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\curl\\exception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\curl\\exception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\curl\\exception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\curl\\exception::getline' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\curl\\exception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\curl\\exception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\curl\\exception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\curl\\exception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\curl\\handler::__construct' => 
  array (
    0 => 'void',
    'url=' => 'string',
  ),
  'swoole\\curl\\handler::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\curl\\handler::close' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\curl\\handler::create' => 
  array (
    0 => 'void',
    'urlInfo=' => 'array<array-key, mixed>|null',
  ),
  'swoole\\curl\\handler::errno' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\curl\\handler::error' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\curl\\handler::exec' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\curl\\handler::execute' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\curl\\handler::getcontent' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\curl\\handler::getinfo' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\curl\\handler::getredirecturl' => 
  array (
    0 => 'array<array-key, mixed>',
    'location' => 'string',
  ),
  'swoole\\curl\\handler::geturl' => 
  array (
    0 => 'string',
  ),
  'swoole\\curl\\handler::hasheader' => 
  array (
    0 => 'bool',
    'headerName' => 'string',
  ),
  'swoole\\curl\\handler::isavailable' => 
  array (
    0 => 'bool',
  ),
  'swoole\\curl\\handler::reset' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\curl\\handler::seterror' => 
  array (
    0 => 'void',
    'code' => 'mixed',
    'msg=' => 'mixed',
  ),
  'swoole\\curl\\handler::setheader' => 
  array (
    0 => 'void',
    'headerName' => 'string',
    'value' => 'string',
  ),
  'swoole\\curl\\handler::setopt' => 
  array (
    0 => 'bool',
    'opt' => 'int',
    'value' => 'mixed',
  ),
  'swoole\\curl\\handler::setoption' => 
  array (
    0 => 'bool',
    'opt' => 'int',
    'value' => 'mixed',
  ),
  'swoole\\curl\\handler::setport' => 
  array (
    0 => 'void',
    'port' => 'int',
  ),
  'swoole\\curl\\handler::seturl' => 
  array (
    0 => 'bool',
    'url' => 'string',
    'setInfo=' => 'bool',
  ),
  'swoole\\curl\\handler::seturlinfo' => 
  array (
    0 => 'bool',
    'urlInfo' => 'array<array-key, mixed>',
  ),
  'swoole\\curl\\handler::unparseurl' => 
  array (
    0 => 'string',
    'parsedUrl' => 'array<array-key, mixed>',
  ),
  'swoole\\database\\mysqliconfig::getcharset' => 
  array (
    0 => 'string',
  ),
  'swoole\\database\\mysqliconfig::getdbname' => 
  array (
    0 => 'string',
  ),
  'swoole\\database\\mysqliconfig::gethost' => 
  array (
    0 => 'string',
  ),
  'swoole\\database\\mysqliconfig::getoptions' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'swoole\\database\\mysqliconfig::getpassword' => 
  array (
    0 => 'string',
  ),
  'swoole\\database\\mysqliconfig::getport' => 
  array (
    0 => 'int',
  ),
  'swoole\\database\\mysqliconfig::getunixsocket' => 
  array (
    0 => 'string',
  ),
  'swoole\\database\\mysqliconfig::getusername' => 
  array (
    0 => 'string',
  ),
  'swoole\\database\\mysqliconfig::withcharset' => 
  array (
    0 => 'self',
    'charset' => 'string',
  ),
  'swoole\\database\\mysqliconfig::withdbname' => 
  array (
    0 => 'self',
    'dbname' => 'string',
  ),
  'swoole\\database\\mysqliconfig::withhost' => 
  array (
    0 => 'self',
    'host' => 'mixed',
  ),
  'swoole\\database\\mysqliconfig::withoptions' => 
  array (
    0 => 'self',
    'options' => 'array<array-key, mixed>',
  ),
  'swoole\\database\\mysqliconfig::withpassword' => 
  array (
    0 => 'self',
    'password' => 'string',
  ),
  'swoole\\database\\mysqliconfig::withport' => 
  array (
    0 => 'self',
    'port' => 'int',
  ),
  'swoole\\database\\mysqliconfig::withunixsocket' => 
  array (
    0 => 'self',
    'unixSocket' => 'null|string',
  ),
  'swoole\\database\\mysqliconfig::withusername' => 
  array (
    0 => 'self',
    'username' => 'string',
  ),
  'swoole\\database\\mysqliexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\database\\mysqliexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'swoole\\database\\mysqliexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\database\\mysqliexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\database\\mysqliexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\database\\mysqliexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\database\\mysqliexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\database\\mysqliexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\database\\mysqliexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\database\\mysqliexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\database\\mysqliexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\database\\mysqlipool::__construct' => 
  array (
    0 => 'void',
    'config' => 'Swoole\\Database\\MysqliConfig',
    'size=' => 'int',
  ),
  'swoole\\database\\mysqlipool::close' => 
  array (
    0 => 'void',
  ),
  'swoole\\database\\mysqlipool::fill' => 
  array (
    0 => 'void',
  ),
  'swoole\\database\\mysqlipool::get' => 
  array (
    0 => 'mixed',
    'timeout=' => 'float',
  ),
  'swoole\\database\\mysqlipool::make' => 
  array (
    0 => 'void',
  ),
  'swoole\\database\\mysqlipool::put' => 
  array (
    0 => 'void',
    'connection' => 'mixed',
  ),
  'swoole\\database\\mysqliproxy::__call' => 
  array (
    0 => 'mixed',
    'name' => 'string',
    'arguments' => 'array<array-key, mixed>',
  ),
  'swoole\\database\\mysqliproxy::__clone' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\database\\mysqliproxy::__construct' => 
  array (
    0 => 'void',
    'constructor' => 'callable',
  ),
  'swoole\\database\\mysqliproxy::__get' => 
  array (
    0 => 'mixed',
    'name' => 'string',
  ),
  'swoole\\database\\mysqliproxy::__getobject' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\database\\mysqliproxy::__invoke' => 
  array (
    0 => 'mixed',
    '...arguments=' => 'mixed',
  ),
  'swoole\\database\\mysqliproxy::__isset' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
  ),
  'swoole\\database\\mysqliproxy::__set' => 
  array (
    0 => 'void',
    'name' => 'string',
    'value' => 'mixed',
  ),
  'swoole\\database\\mysqliproxy::__unset' => 
  array (
    0 => 'void',
    'name' => 'string',
  ),
  'swoole\\database\\mysqliproxy::change_user' => 
  array (
    0 => 'bool',
    'user' => 'string',
    'password' => 'string',
    'database' => 'string',
  ),
  'swoole\\database\\mysqliproxy::getround' => 
  array (
    0 => 'int',
  ),
  'swoole\\database\\mysqliproxy::options' => 
  array (
    0 => 'bool',
    'option' => 'int',
    'value' => 'mixed',
  ),
  'swoole\\database\\mysqliproxy::reconnect' => 
  array (
    0 => 'void',
  ),
  'swoole\\database\\mysqliproxy::set_charset' => 
  array (
    0 => 'bool',
    'charset' => 'string',
  ),
  'swoole\\database\\mysqliproxy::set_opt' => 
  array (
    0 => 'bool',
    'option' => 'int',
    'value' => 'mixed',
  ),
  'swoole\\database\\mysqlistatementproxy::__call' => 
  array (
    0 => 'mixed',
    'name' => 'string',
    'arguments' => 'array<array-key, mixed>',
  ),
  'swoole\\database\\mysqlistatementproxy::__clone' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\database\\mysqlistatementproxy::__construct' => 
  array (
    0 => 'void',
    'object' => 'mysqli_stmt',
    'queryString' => 'null|string',
    'parent' => 'Swoole\\Database\\MysqliProxy',
  ),
  'swoole\\database\\mysqlistatementproxy::__get' => 
  array (
    0 => 'mixed',
    'name' => 'string',
  ),
  'swoole\\database\\mysqlistatementproxy::__getobject' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\database\\mysqlistatementproxy::__invoke' => 
  array (
    0 => 'mixed',
    '...arguments=' => 'mixed',
  ),
  'swoole\\database\\mysqlistatementproxy::__isset' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
  ),
  'swoole\\database\\mysqlistatementproxy::__set' => 
  array (
    0 => 'void',
    'name' => 'string',
    'value' => 'mixed',
  ),
  'swoole\\database\\mysqlistatementproxy::__unset' => 
  array (
    0 => 'void',
    'name' => 'string',
  ),
  'swoole\\database\\mysqlistatementproxy::attr_set' => 
  array (
    0 => 'bool',
    'attr' => 'mixed',
    'mode' => 'mixed',
  ),
  'swoole\\database\\mysqlistatementproxy::bind_param' => 
  array (
    0 => 'bool',
    'types' => 'mixed',
    '...&arguments=' => 'mixed',
  ),
  'swoole\\database\\mysqlistatementproxy::bind_result' => 
  array (
    0 => 'bool',
    '...&arguments=' => 'mixed',
  ),
  'swoole\\database\\objectproxy::__call' => 
  array (
    0 => 'mixed',
    'name' => 'string',
    'arguments' => 'array<array-key, mixed>',
  ),
  'swoole\\database\\objectproxy::__clone' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\database\\objectproxy::__construct' => 
  array (
    0 => 'void',
    'object' => 'mixed',
  ),
  'swoole\\database\\objectproxy::__get' => 
  array (
    0 => 'mixed',
    'name' => 'string',
  ),
  'swoole\\database\\objectproxy::__getobject' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\database\\objectproxy::__invoke' => 
  array (
    0 => 'mixed',
    '...arguments=' => 'mixed',
  ),
  'swoole\\database\\objectproxy::__isset' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
  ),
  'swoole\\database\\objectproxy::__set' => 
  array (
    0 => 'void',
    'name' => 'string',
    'value' => 'mixed',
  ),
  'swoole\\database\\objectproxy::__unset' => 
  array (
    0 => 'void',
    'name' => 'string',
  ),
  'swoole\\database\\pdoconfig::getavailabledrivers' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\database\\pdoconfig::getcharset' => 
  array (
    0 => 'string',
  ),
  'swoole\\database\\pdoconfig::getdbname' => 
  array (
    0 => 'string',
  ),
  'swoole\\database\\pdoconfig::getdriver' => 
  array (
    0 => 'string',
  ),
  'swoole\\database\\pdoconfig::gethost' => 
  array (
    0 => 'string',
  ),
  'swoole\\database\\pdoconfig::getoptions' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'swoole\\database\\pdoconfig::getpassword' => 
  array (
    0 => 'string',
  ),
  'swoole\\database\\pdoconfig::getport' => 
  array (
    0 => 'int',
  ),
  'swoole\\database\\pdoconfig::getunixsocket' => 
  array (
    0 => 'string',
  ),
  'swoole\\database\\pdoconfig::getusername' => 
  array (
    0 => 'string',
  ),
  'swoole\\database\\pdoconfig::hasunixsocket' => 
  array (
    0 => 'bool',
  ),
  'swoole\\database\\pdoconfig::withcharset' => 
  array (
    0 => 'self',
    'charset' => 'string',
  ),
  'swoole\\database\\pdoconfig::withdbname' => 
  array (
    0 => 'self',
    'dbname' => 'string',
  ),
  'swoole\\database\\pdoconfig::withdriver' => 
  array (
    0 => 'self',
    'driver' => 'string',
  ),
  'swoole\\database\\pdoconfig::withhost' => 
  array (
    0 => 'self',
    'host' => 'mixed',
  ),
  'swoole\\database\\pdoconfig::withoptions' => 
  array (
    0 => 'self',
    'options' => 'array<array-key, mixed>',
  ),
  'swoole\\database\\pdoconfig::withpassword' => 
  array (
    0 => 'self',
    'password' => 'string',
  ),
  'swoole\\database\\pdoconfig::withport' => 
  array (
    0 => 'self',
    'port' => 'int',
  ),
  'swoole\\database\\pdoconfig::withunixsocket' => 
  array (
    0 => 'self',
    'unixSocket' => 'null|string',
  ),
  'swoole\\database\\pdoconfig::withusername' => 
  array (
    0 => 'self',
    'username' => 'string',
  ),
  'swoole\\database\\pdopool::__construct' => 
  array (
    0 => 'void',
    'config' => 'Swoole\\Database\\PDOConfig',
    'size=' => 'int',
  ),
  'swoole\\database\\pdopool::close' => 
  array (
    0 => 'void',
  ),
  'swoole\\database\\pdopool::fill' => 
  array (
    0 => 'void',
  ),
  'swoole\\database\\pdopool::get' => 
  array (
    0 => 'mixed',
    'timeout=' => 'float',
  ),
  'swoole\\database\\pdopool::make' => 
  array (
    0 => 'void',
  ),
  'swoole\\database\\pdopool::put' => 
  array (
    0 => 'void',
    'connection' => 'mixed',
  ),
  'swoole\\database\\pdoproxy::__call' => 
  array (
    0 => 'mixed',
    'name' => 'string',
    'arguments' => 'array<array-key, mixed>',
  ),
  'swoole\\database\\pdoproxy::__clone' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\database\\pdoproxy::__construct' => 
  array (
    0 => 'void',
    'constructor' => 'callable',
  ),
  'swoole\\database\\pdoproxy::__get' => 
  array (
    0 => 'mixed',
    'name' => 'string',
  ),
  'swoole\\database\\pdoproxy::__getobject' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\database\\pdoproxy::__invoke' => 
  array (
    0 => 'mixed',
    '...arguments=' => 'mixed',
  ),
  'swoole\\database\\pdoproxy::__isset' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
  ),
  'swoole\\database\\pdoproxy::__set' => 
  array (
    0 => 'void',
    'name' => 'string',
    'value' => 'mixed',
  ),
  'swoole\\database\\pdoproxy::__unset' => 
  array (
    0 => 'void',
    'name' => 'string',
  ),
  'swoole\\database\\pdoproxy::getround' => 
  array (
    0 => 'int',
  ),
  'swoole\\database\\pdoproxy::intransaction' => 
  array (
    0 => 'bool',
  ),
  'swoole\\database\\pdoproxy::reconnect' => 
  array (
    0 => 'void',
  ),
  'swoole\\database\\pdoproxy::setattribute' => 
  array (
    0 => 'bool',
    'attribute' => 'int',
    'value' => 'mixed',
  ),
  'swoole\\database\\pdostatementproxy::__call' => 
  array (
    0 => 'mixed',
    'name' => 'string',
    'arguments' => 'array<array-key, mixed>',
  ),
  'swoole\\database\\pdostatementproxy::__clone' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\database\\pdostatementproxy::__construct' => 
  array (
    0 => 'void',
    'object' => 'PDOStatement',
    'parent' => 'Swoole\\Database\\PDOProxy',
  ),
  'swoole\\database\\pdostatementproxy::__get' => 
  array (
    0 => 'mixed',
    'name' => 'string',
  ),
  'swoole\\database\\pdostatementproxy::__getobject' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\database\\pdostatementproxy::__invoke' => 
  array (
    0 => 'mixed',
    '...arguments=' => 'mixed',
  ),
  'swoole\\database\\pdostatementproxy::__isset' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
  ),
  'swoole\\database\\pdostatementproxy::__set' => 
  array (
    0 => 'void',
    'name' => 'string',
    'value' => 'mixed',
  ),
  'swoole\\database\\pdostatementproxy::__unset' => 
  array (
    0 => 'void',
    'name' => 'string',
  ),
  'swoole\\database\\pdostatementproxy::bindcolumn' => 
  array (
    0 => 'bool',
    'column' => 'mixed',
    '&param' => 'mixed',
    'type=' => 'mixed',
    'maxlen=' => 'mixed',
    'driverdata=' => 'mixed',
  ),
  'swoole\\database\\pdostatementproxy::bindparam' => 
  array (
    0 => 'bool',
    'parameter' => 'mixed',
    '&variable' => 'mixed',
    'data_type=' => 'mixed',
    'length=' => 'mixed',
    'driver_options=' => 'mixed',
  ),
  'swoole\\database\\pdostatementproxy::bindvalue' => 
  array (
    0 => 'bool',
    'parameter' => 'mixed',
    'value' => 'mixed',
    'data_type=' => 'mixed',
  ),
  'swoole\\database\\pdostatementproxy::setattribute' => 
  array (
    0 => 'bool',
    'attribute' => 'int',
    'value' => 'mixed',
  ),
  'swoole\\database\\pdostatementproxy::setfetchmode' => 
  array (
    0 => 'bool',
    'mode' => 'int',
    '...args=' => 'mixed',
  ),
  'swoole\\database\\redisconfig::getauth' => 
  array (
    0 => 'string',
  ),
  'swoole\\database\\redisconfig::getdbindex' => 
  array (
    0 => 'int',
  ),
  'swoole\\database\\redisconfig::gethost' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\database\\redisconfig::getport' => 
  array (
    0 => 'int',
  ),
  'swoole\\database\\redisconfig::getreadtimeout' => 
  array (
    0 => 'float',
  ),
  'swoole\\database\\redisconfig::getreserved' => 
  array (
    0 => 'string',
  ),
  'swoole\\database\\redisconfig::getretryinterval' => 
  array (
    0 => 'int',
  ),
  'swoole\\database\\redisconfig::gettimeout' => 
  array (
    0 => 'float',
  ),
  'swoole\\database\\redisconfig::withauth' => 
  array (
    0 => 'self',
    'auth' => 'string',
  ),
  'swoole\\database\\redisconfig::withdbindex' => 
  array (
    0 => 'self',
    'dbIndex' => 'int',
  ),
  'swoole\\database\\redisconfig::withhost' => 
  array (
    0 => 'self',
    'host' => 'mixed',
  ),
  'swoole\\database\\redisconfig::withport' => 
  array (
    0 => 'self',
    'port' => 'int',
  ),
  'swoole\\database\\redisconfig::withreadtimeout' => 
  array (
    0 => 'self',
    'read_timeout' => 'float',
  ),
  'swoole\\database\\redisconfig::withreserved' => 
  array (
    0 => 'self',
    'reserved' => 'string',
  ),
  'swoole\\database\\redisconfig::withretryinterval' => 
  array (
    0 => 'self',
    'retry_interval' => 'int',
  ),
  'swoole\\database\\redisconfig::withtimeout' => 
  array (
    0 => 'self',
    'timeout' => 'float',
  ),
  'swoole\\database\\redispool::__construct' => 
  array (
    0 => 'void',
    'config' => 'Swoole\\Database\\RedisConfig',
    'size=' => 'int',
  ),
  'swoole\\database\\redispool::close' => 
  array (
    0 => 'void',
  ),
  'swoole\\database\\redispool::fill' => 
  array (
    0 => 'void',
  ),
  'swoole\\database\\redispool::get' => 
  array (
    0 => 'mixed',
    'timeout=' => 'float',
  ),
  'swoole\\database\\redispool::make' => 
  array (
    0 => 'void',
  ),
  'swoole\\database\\redispool::put' => 
  array (
    0 => 'void',
    'connection' => 'mixed',
  ),
  'swoole\\error::__clone' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\error::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'swoole\\error::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\error::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\error::getcode' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\error::getfile' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\error::getline' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\error::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\error::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\error::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\error::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\event::add' => 
  array (
    0 => 'mixed',
    'fd' => 'mixed',
    'read_callback' => 'callable|null',
    'write_callback=' => 'callable|null',
    'events=' => 'mixed',
  ),
  'swoole\\event::cycle' => 
  array (
    0 => 'mixed',
    'callback' => 'callable|null',
    'before=' => 'mixed',
  ),
  'swoole\\event::defer' => 
  array (
    0 => 'mixed',
    'callback' => 'callable',
  ),
  'swoole\\event::del' => 
  array (
    0 => 'mixed',
    'fd' => 'mixed',
  ),
  'swoole\\event::dispatch' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\event::exit' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\event::isset' => 
  array (
    0 => 'mixed',
    'fd' => 'mixed',
    'events=' => 'mixed',
  ),
  'swoole\\event::rshutdown' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\event::set' => 
  array (
    0 => 'mixed',
    'fd' => 'mixed',
    'read_callback=' => 'callable|null',
    'write_callback=' => 'callable|null',
    'events=' => 'mixed',
  ),
  'swoole\\event::wait' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\event::write' => 
  array (
    0 => 'mixed',
    'fd' => 'mixed',
    'data' => 'mixed',
  ),
  'swoole\\exception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\exception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'swoole\\exception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\exception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\exception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\exception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\exception::getline' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\exception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\exception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\exception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\exception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\exception\\arraykeynotexists::__clone' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\exception\\arraykeynotexists::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'swoole\\exception\\arraykeynotexists::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\exception\\arraykeynotexists::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\exception\\arraykeynotexists::getcode' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\exception\\arraykeynotexists::getfile' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\exception\\arraykeynotexists::getline' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\exception\\arraykeynotexists::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\exception\\arraykeynotexists::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\exception\\arraykeynotexists::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\exception\\arraykeynotexists::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\exitexception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\exitexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'swoole\\exitexception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\exitexception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\exitexception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\exitexception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\exitexception::getflags' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\exitexception::getline' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\exitexception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\exitexception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\exitexception::getstatus' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\exitexception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\exitexception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\fastcgi\\frameparser::hasframe' => 
  array (
    0 => 'bool',
    'buffer' => 'string',
  ),
  'swoole\\fastcgi\\frameparser::parseframe' => 
  array (
    0 => 'Swoole\\FastCGI\\Record',
    '&buffer' => 'string',
  ),
  'swoole\\fastcgi\\httprequest::__tostring' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\httprequest::convertheadernametoparamname' => 
  array (
    0 => 'mixed',
    'name' => 'string',
  ),
  'swoole\\fastcgi\\httprequest::convertparamnametoheadername' => 
  array (
    0 => 'mixed',
    'name' => 'string',
  ),
  'swoole\\fastcgi\\httprequest::getbody' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\httprequest::getcontentlength' => 
  array (
    0 => 'int|null',
  ),
  'swoole\\fastcgi\\httprequest::getcontenttype' => 
  array (
    0 => 'null|string',
  ),
  'swoole\\fastcgi\\httprequest::getdocumentroot' => 
  array (
    0 => 'null|string',
  ),
  'swoole\\fastcgi\\httprequest::getdocumenturi' => 
  array (
    0 => 'null|string',
  ),
  'swoole\\fastcgi\\httprequest::geterror' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\httprequest::getgatewayinterface' => 
  array (
    0 => 'null|string',
  ),
  'swoole\\fastcgi\\httprequest::getheader' => 
  array (
    0 => 'null|string',
    'name' => 'string',
  ),
  'swoole\\fastcgi\\httprequest::getheaders' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'swoole\\fastcgi\\httprequest::getkeepconn' => 
  array (
    0 => 'bool',
  ),
  'swoole\\fastcgi\\httprequest::getmethod' => 
  array (
    0 => 'null|string',
  ),
  'swoole\\fastcgi\\httprequest::getparam' => 
  array (
    0 => 'null|string',
    'name' => 'string',
  ),
  'swoole\\fastcgi\\httprequest::getparams' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'swoole\\fastcgi\\httprequest::getquerystring' => 
  array (
    0 => 'null|string',
  ),
  'swoole\\fastcgi\\httprequest::getredirectstatus' => 
  array (
    0 => 'null|string',
  ),
  'swoole\\fastcgi\\httprequest::getremoteaddr' => 
  array (
    0 => 'null|string',
  ),
  'swoole\\fastcgi\\httprequest::getremoteport' => 
  array (
    0 => 'int|null',
  ),
  'swoole\\fastcgi\\httprequest::getrequesturi' => 
  array (
    0 => 'null|string',
  ),
  'swoole\\fastcgi\\httprequest::getscheme' => 
  array (
    0 => 'null|string',
  ),
  'swoole\\fastcgi\\httprequest::getscriptfilename' => 
  array (
    0 => 'null|string',
  ),
  'swoole\\fastcgi\\httprequest::getscriptname' => 
  array (
    0 => 'null|string',
  ),
  'swoole\\fastcgi\\httprequest::getserveraddr' => 
  array (
    0 => 'null|string',
  ),
  'swoole\\fastcgi\\httprequest::getservername' => 
  array (
    0 => 'null|string',
  ),
  'swoole\\fastcgi\\httprequest::getserverport' => 
  array (
    0 => 'int|null',
  ),
  'swoole\\fastcgi\\httprequest::getserverprotocol' => 
  array (
    0 => 'null|string',
  ),
  'swoole\\fastcgi\\httprequest::getserversoftware' => 
  array (
    0 => 'null|string',
  ),
  'swoole\\fastcgi\\httprequest::withaddedparams' => 
  array (
    0 => 'self',
    'params' => 'array<array-key, mixed>',
  ),
  'swoole\\fastcgi\\httprequest::withbody' => 
  array (
    0 => 'Swoole\\FastCGI\\Message',
    'body' => 'mixed',
  ),
  'swoole\\fastcgi\\httprequest::withcontentlength' => 
  array (
    0 => 'self',
    'contentLength' => 'int',
  ),
  'swoole\\fastcgi\\httprequest::withcontenttype' => 
  array (
    0 => 'self',
    'contentType' => 'string',
  ),
  'swoole\\fastcgi\\httprequest::withdocumentroot' => 
  array (
    0 => 'self',
    'documentRoot' => 'string',
  ),
  'swoole\\fastcgi\\httprequest::withdocumenturi' => 
  array (
    0 => 'self',
    'documentUri' => 'string',
  ),
  'swoole\\fastcgi\\httprequest::witherror' => 
  array (
    0 => 'self',
    'error' => 'string',
  ),
  'swoole\\fastcgi\\httprequest::withgatewayinterface' => 
  array (
    0 => 'self',
    'gatewayInterface' => 'string',
  ),
  'swoole\\fastcgi\\httprequest::withheader' => 
  array (
    0 => 'self',
    'name' => 'string',
    'value' => 'string',
  ),
  'swoole\\fastcgi\\httprequest::withheaders' => 
  array (
    0 => 'self',
    'headers' => 'array<array-key, mixed>',
  ),
  'swoole\\fastcgi\\httprequest::withkeepconn' => 
  array (
    0 => 'self',
    'keepConn' => 'bool',
  ),
  'swoole\\fastcgi\\httprequest::withmethod' => 
  array (
    0 => 'self',
    'method' => 'string',
  ),
  'swoole\\fastcgi\\httprequest::withoutcontentlength' => 
  array (
    0 => 'void',
  ),
  'swoole\\fastcgi\\httprequest::withoutcontenttype' => 
  array (
    0 => 'void',
  ),
  'swoole\\fastcgi\\httprequest::withoutdocumentroot' => 
  array (
    0 => 'void',
  ),
  'swoole\\fastcgi\\httprequest::withoutdocumenturi' => 
  array (
    0 => 'void',
  ),
  'swoole\\fastcgi\\httprequest::withoutgatewayinterface' => 
  array (
    0 => 'void',
  ),
  'swoole\\fastcgi\\httprequest::withoutheader' => 
  array (
    0 => 'void',
    'name' => 'string',
  ),
  'swoole\\fastcgi\\httprequest::withoutmethod' => 
  array (
    0 => 'void',
  ),
  'swoole\\fastcgi\\httprequest::withoutparam' => 
  array (
    0 => 'self',
    'name' => 'string',
  ),
  'swoole\\fastcgi\\httprequest::withoutquerystring' => 
  array (
    0 => 'void',
  ),
  'swoole\\fastcgi\\httprequest::withoutredirectstatus' => 
  array (
    0 => 'void',
  ),
  'swoole\\fastcgi\\httprequest::withoutremoteaddr' => 
  array (
    0 => 'void',
  ),
  'swoole\\fastcgi\\httprequest::withoutremoteport' => 
  array (
    0 => 'void',
  ),
  'swoole\\fastcgi\\httprequest::withoutrequesturi' => 
  array (
    0 => 'void',
  ),
  'swoole\\fastcgi\\httprequest::withoutscheme' => 
  array (
    0 => 'void',
  ),
  'swoole\\fastcgi\\httprequest::withoutscriptfilename' => 
  array (
    0 => 'void',
  ),
  'swoole\\fastcgi\\httprequest::withoutscriptname' => 
  array (
    0 => 'void',
  ),
  'swoole\\fastcgi\\httprequest::withoutserveraddr' => 
  array (
    0 => 'void',
  ),
  'swoole\\fastcgi\\httprequest::withoutservername' => 
  array (
    0 => 'void',
  ),
  'swoole\\fastcgi\\httprequest::withoutserverport' => 
  array (
    0 => 'void',
  ),
  'swoole\\fastcgi\\httprequest::withoutserverprotocol' => 
  array (
    0 => 'void',
  ),
  'swoole\\fastcgi\\httprequest::withoutserversoftware' => 
  array (
    0 => 'void',
  ),
  'swoole\\fastcgi\\httprequest::withparam' => 
  array (
    0 => 'self',
    'name' => 'string',
    'value' => 'string',
  ),
  'swoole\\fastcgi\\httprequest::withparams' => 
  array (
    0 => 'self',
    'params' => 'array<array-key, mixed>',
  ),
  'swoole\\fastcgi\\httprequest::withprotocolversion' => 
  array (
    0 => 'self',
    'protocolVersion' => 'string',
  ),
  'swoole\\fastcgi\\httprequest::withquery' => 
  array (
    0 => 'self',
    'query' => 'mixed',
  ),
  'swoole\\fastcgi\\httprequest::withquerystring' => 
  array (
    0 => 'self',
    'queryString' => 'string',
  ),
  'swoole\\fastcgi\\httprequest::withredirectstatus' => 
  array (
    0 => 'self',
    'redirectStatus' => 'string',
  ),
  'swoole\\fastcgi\\httprequest::withremoteaddr' => 
  array (
    0 => 'self',
    'remoteAddr' => 'string',
  ),
  'swoole\\fastcgi\\httprequest::withremoteport' => 
  array (
    0 => 'self',
    'remotePort' => 'int',
  ),
  'swoole\\fastcgi\\httprequest::withrequesturi' => 
  array (
    0 => 'self',
    'requestUri' => 'string',
  ),
  'swoole\\fastcgi\\httprequest::withscheme' => 
  array (
    0 => 'self',
    'scheme' => 'string',
  ),
  'swoole\\fastcgi\\httprequest::withscriptfilename' => 
  array (
    0 => 'self',
    'scriptFilename' => 'string',
  ),
  'swoole\\fastcgi\\httprequest::withscriptname' => 
  array (
    0 => 'self',
    'scriptName' => 'string',
  ),
  'swoole\\fastcgi\\httprequest::withserveraddr' => 
  array (
    0 => 'self',
    'serverAddr' => 'string',
  ),
  'swoole\\fastcgi\\httprequest::withservername' => 
  array (
    0 => 'self',
    'serverName' => 'string',
  ),
  'swoole\\fastcgi\\httprequest::withserverport' => 
  array (
    0 => 'self',
    'serverPort' => 'int',
  ),
  'swoole\\fastcgi\\httprequest::withserverprotocol' => 
  array (
    0 => 'self',
    'serverProtocol' => 'string',
  ),
  'swoole\\fastcgi\\httprequest::withserversoftware' => 
  array (
    0 => 'self',
    'serverSoftware' => 'string',
  ),
  'swoole\\fastcgi\\httprequest::withuri' => 
  array (
    0 => 'self',
    'uri' => 'string',
  ),
  'swoole\\fastcgi\\httpresponse::__construct' => 
  array (
    0 => 'void',
    'records=' => 'array<array-key, mixed>',
  ),
  'swoole\\fastcgi\\httpresponse::getbody' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\httpresponse::geterror' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\httpresponse::getheader' => 
  array (
    0 => 'null|string',
    'name' => 'string',
  ),
  'swoole\\fastcgi\\httpresponse::getheaders' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'swoole\\fastcgi\\httpresponse::getparam' => 
  array (
    0 => 'null|string',
    'name' => 'string',
  ),
  'swoole\\fastcgi\\httpresponse::getparams' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'swoole\\fastcgi\\httpresponse::getreasonphrase' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\httpresponse::getsetcookieheaderlines' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'swoole\\fastcgi\\httpresponse::getstatuscode' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\httpresponse::verify' => 
  array (
    0 => 'bool',
    'records' => 'array<array-key, mixed>',
  ),
  'swoole\\fastcgi\\httpresponse::withaddedparams' => 
  array (
    0 => 'self',
    'params' => 'array<array-key, mixed>',
  ),
  'swoole\\fastcgi\\httpresponse::withbody' => 
  array (
    0 => 'self',
    'body' => 'mixed',
  ),
  'swoole\\fastcgi\\httpresponse::witherror' => 
  array (
    0 => 'self',
    'error' => 'string',
  ),
  'swoole\\fastcgi\\httpresponse::withheader' => 
  array (
    0 => 'self',
    'name' => 'string',
    'value' => 'string',
  ),
  'swoole\\fastcgi\\httpresponse::withheaders' => 
  array (
    0 => 'self',
    'headers' => 'array<array-key, mixed>',
  ),
  'swoole\\fastcgi\\httpresponse::withoutparam' => 
  array (
    0 => 'self',
    'name' => 'string',
  ),
  'swoole\\fastcgi\\httpresponse::withparam' => 
  array (
    0 => 'self',
    'name' => 'string',
    'value' => 'string',
  ),
  'swoole\\fastcgi\\httpresponse::withparams' => 
  array (
    0 => 'self',
    'params' => 'array<array-key, mixed>',
  ),
  'swoole\\fastcgi\\httpresponse::withreasonphrase' => 
  array (
    0 => 'self',
    'reasonPhrase' => 'string',
  ),
  'swoole\\fastcgi\\httpresponse::withsetcookieheaderline' => 
  array (
    0 => 'self',
    'value' => 'string',
  ),
  'swoole\\fastcgi\\httpresponse::withstatuscode' => 
  array (
    0 => 'self',
    'statusCode' => 'int',
  ),
  'swoole\\fastcgi\\message::getbody' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\message::geterror' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\message::getparam' => 
  array (
    0 => 'null|string',
    'name' => 'string',
  ),
  'swoole\\fastcgi\\message::getparams' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'swoole\\fastcgi\\message::withaddedparams' => 
  array (
    0 => 'self',
    'params' => 'array<array-key, mixed>',
  ),
  'swoole\\fastcgi\\message::withbody' => 
  array (
    0 => 'self',
    'body' => 'mixed',
  ),
  'swoole\\fastcgi\\message::witherror' => 
  array (
    0 => 'self',
    'error' => 'string',
  ),
  'swoole\\fastcgi\\message::withoutparam' => 
  array (
    0 => 'self',
    'name' => 'string',
  ),
  'swoole\\fastcgi\\message::withparam' => 
  array (
    0 => 'self',
    'name' => 'string',
    'value' => 'string',
  ),
  'swoole\\fastcgi\\message::withparams' => 
  array (
    0 => 'self',
    'params' => 'array<array-key, mixed>',
  ),
  'swoole\\fastcgi\\record::__tostring' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\record::getcontentdata' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\record::getcontentlength' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record::getpaddinglength' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record::getrequestid' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record::gettype' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record::getversion' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record::packpayload' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\record::setcontentdata' => 
  array (
    0 => 'self',
    'data' => 'string',
  ),
  'swoole\\fastcgi\\record::setrequestid' => 
  array (
    0 => 'self',
    'requestId' => 'int',
  ),
  'swoole\\fastcgi\\record::unpack' => 
  array (
    0 => 'self',
    'data' => 'string',
  ),
  'swoole\\fastcgi\\record::unpackpayload' => 
  array (
    0 => 'void',
    'self' => 'mixed',
    'data' => 'string',
  ),
  'swoole\\fastcgi\\record\\abortrequest::__construct' => 
  array (
    0 => 'void',
    'requestId=' => 'int',
  ),
  'swoole\\fastcgi\\record\\abortrequest::__tostring' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\record\\abortrequest::getcontentdata' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\record\\abortrequest::getcontentlength' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\abortrequest::getpaddinglength' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\abortrequest::getrequestid' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\abortrequest::gettype' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\abortrequest::getversion' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\abortrequest::packpayload' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\record\\abortrequest::setcontentdata' => 
  array (
    0 => 'self',
    'data' => 'string',
  ),
  'swoole\\fastcgi\\record\\abortrequest::setrequestid' => 
  array (
    0 => 'self',
    'requestId' => 'int',
  ),
  'swoole\\fastcgi\\record\\abortrequest::unpack' => 
  array (
    0 => 'self',
    'data' => 'string',
  ),
  'swoole\\fastcgi\\record\\abortrequest::unpackpayload' => 
  array (
    0 => 'void',
    'self' => 'mixed',
    'data' => 'string',
  ),
  'swoole\\fastcgi\\record\\beginrequest::__construct' => 
  array (
    0 => 'void',
    'role=' => 'int',
    'flags=' => 'int',
    'reserved=' => 'string',
  ),
  'swoole\\fastcgi\\record\\beginrequest::__tostring' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\record\\beginrequest::getcontentdata' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\record\\beginrequest::getcontentlength' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\beginrequest::getflags' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\beginrequest::getpaddinglength' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\beginrequest::getrequestid' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\beginrequest::getrole' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\beginrequest::gettype' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\beginrequest::getversion' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\beginrequest::packpayload' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\record\\beginrequest::setcontentdata' => 
  array (
    0 => 'self',
    'data' => 'string',
  ),
  'swoole\\fastcgi\\record\\beginrequest::setrequestid' => 
  array (
    0 => 'self',
    'requestId' => 'int',
  ),
  'swoole\\fastcgi\\record\\beginrequest::unpack' => 
  array (
    0 => 'self',
    'data' => 'string',
  ),
  'swoole\\fastcgi\\record\\beginrequest::unpackpayload' => 
  array (
    0 => 'void',
    'self' => 'mixed',
    'data' => 'string',
  ),
  'swoole\\fastcgi\\record\\data::__construct' => 
  array (
    0 => 'void',
    'contentData=' => 'string',
  ),
  'swoole\\fastcgi\\record\\data::__tostring' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\record\\data::getcontentdata' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\record\\data::getcontentlength' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\data::getpaddinglength' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\data::getrequestid' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\data::gettype' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\data::getversion' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\data::packpayload' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\record\\data::setcontentdata' => 
  array (
    0 => 'self',
    'data' => 'string',
  ),
  'swoole\\fastcgi\\record\\data::setrequestid' => 
  array (
    0 => 'self',
    'requestId' => 'int',
  ),
  'swoole\\fastcgi\\record\\data::unpack' => 
  array (
    0 => 'self',
    'data' => 'string',
  ),
  'swoole\\fastcgi\\record\\data::unpackpayload' => 
  array (
    0 => 'void',
    'self' => 'mixed',
    'data' => 'string',
  ),
  'swoole\\fastcgi\\record\\endrequest::__construct' => 
  array (
    0 => 'void',
    'protocolStatus=' => 'int',
    'appStatus=' => 'int',
    'reserved=' => 'string',
  ),
  'swoole\\fastcgi\\record\\endrequest::__tostring' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\record\\endrequest::getappstatus' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\endrequest::getcontentdata' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\record\\endrequest::getcontentlength' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\endrequest::getpaddinglength' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\endrequest::getprotocolstatus' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\endrequest::getrequestid' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\endrequest::gettype' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\endrequest::getversion' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\endrequest::packpayload' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\record\\endrequest::setcontentdata' => 
  array (
    0 => 'self',
    'data' => 'string',
  ),
  'swoole\\fastcgi\\record\\endrequest::setrequestid' => 
  array (
    0 => 'self',
    'requestId' => 'int',
  ),
  'swoole\\fastcgi\\record\\endrequest::unpack' => 
  array (
    0 => 'self',
    'data' => 'string',
  ),
  'swoole\\fastcgi\\record\\endrequest::unpackpayload' => 
  array (
    0 => 'void',
    'self' => 'mixed',
    'data' => 'string',
  ),
  'swoole\\fastcgi\\record\\getvalues::__construct' => 
  array (
    0 => 'void',
    'keys=' => 'array<array-key, mixed>',
  ),
  'swoole\\fastcgi\\record\\getvalues::__tostring' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\record\\getvalues::getcontentdata' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\record\\getvalues::getcontentlength' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\getvalues::getpaddinglength' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\getvalues::getrequestid' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\getvalues::gettype' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\getvalues::getvalues' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'swoole\\fastcgi\\record\\getvalues::getversion' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\getvalues::packpayload' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\record\\getvalues::setcontentdata' => 
  array (
    0 => 'self',
    'data' => 'string',
  ),
  'swoole\\fastcgi\\record\\getvalues::setrequestid' => 
  array (
    0 => 'self',
    'requestId' => 'int',
  ),
  'swoole\\fastcgi\\record\\getvalues::unpack' => 
  array (
    0 => 'self',
    'data' => 'string',
  ),
  'swoole\\fastcgi\\record\\getvalues::unpackpayload' => 
  array (
    0 => 'void',
    'self' => 'mixed',
    'data' => 'string',
  ),
  'swoole\\fastcgi\\record\\getvaluesresult::__construct' => 
  array (
    0 => 'void',
    'values=' => 'array<array-key, mixed>',
  ),
  'swoole\\fastcgi\\record\\getvaluesresult::__tostring' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\record\\getvaluesresult::getcontentdata' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\record\\getvaluesresult::getcontentlength' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\getvaluesresult::getpaddinglength' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\getvaluesresult::getrequestid' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\getvaluesresult::gettype' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\getvaluesresult::getvalues' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'swoole\\fastcgi\\record\\getvaluesresult::getversion' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\getvaluesresult::packpayload' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\record\\getvaluesresult::setcontentdata' => 
  array (
    0 => 'self',
    'data' => 'string',
  ),
  'swoole\\fastcgi\\record\\getvaluesresult::setrequestid' => 
  array (
    0 => 'self',
    'requestId' => 'int',
  ),
  'swoole\\fastcgi\\record\\getvaluesresult::unpack' => 
  array (
    0 => 'self',
    'data' => 'string',
  ),
  'swoole\\fastcgi\\record\\getvaluesresult::unpackpayload' => 
  array (
    0 => 'void',
    'self' => 'mixed',
    'data' => 'string',
  ),
  'swoole\\fastcgi\\record\\params::__construct' => 
  array (
    0 => 'void',
    'values=' => 'array<array-key, mixed>',
  ),
  'swoole\\fastcgi\\record\\params::__tostring' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\record\\params::getcontentdata' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\record\\params::getcontentlength' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\params::getpaddinglength' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\params::getrequestid' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\params::gettype' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\params::getvalues' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'swoole\\fastcgi\\record\\params::getversion' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\params::packpayload' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\record\\params::setcontentdata' => 
  array (
    0 => 'self',
    'data' => 'string',
  ),
  'swoole\\fastcgi\\record\\params::setrequestid' => 
  array (
    0 => 'self',
    'requestId' => 'int',
  ),
  'swoole\\fastcgi\\record\\params::unpack' => 
  array (
    0 => 'self',
    'data' => 'string',
  ),
  'swoole\\fastcgi\\record\\params::unpackpayload' => 
  array (
    0 => 'void',
    'self' => 'mixed',
    'data' => 'string',
  ),
  'swoole\\fastcgi\\record\\stderr::__construct' => 
  array (
    0 => 'void',
    'contentData=' => 'string',
  ),
  'swoole\\fastcgi\\record\\stderr::__tostring' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\record\\stderr::getcontentdata' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\record\\stderr::getcontentlength' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\stderr::getpaddinglength' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\stderr::getrequestid' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\stderr::gettype' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\stderr::getversion' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\stderr::packpayload' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\record\\stderr::setcontentdata' => 
  array (
    0 => 'self',
    'data' => 'string',
  ),
  'swoole\\fastcgi\\record\\stderr::setrequestid' => 
  array (
    0 => 'self',
    'requestId' => 'int',
  ),
  'swoole\\fastcgi\\record\\stderr::unpack' => 
  array (
    0 => 'self',
    'data' => 'string',
  ),
  'swoole\\fastcgi\\record\\stderr::unpackpayload' => 
  array (
    0 => 'void',
    'self' => 'mixed',
    'data' => 'string',
  ),
  'swoole\\fastcgi\\record\\stdin::__construct' => 
  array (
    0 => 'void',
    'contentData=' => 'string',
  ),
  'swoole\\fastcgi\\record\\stdin::__tostring' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\record\\stdin::getcontentdata' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\record\\stdin::getcontentlength' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\stdin::getpaddinglength' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\stdin::getrequestid' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\stdin::gettype' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\stdin::getversion' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\stdin::packpayload' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\record\\stdin::setcontentdata' => 
  array (
    0 => 'self',
    'data' => 'string',
  ),
  'swoole\\fastcgi\\record\\stdin::setrequestid' => 
  array (
    0 => 'self',
    'requestId' => 'int',
  ),
  'swoole\\fastcgi\\record\\stdin::unpack' => 
  array (
    0 => 'self',
    'data' => 'string',
  ),
  'swoole\\fastcgi\\record\\stdin::unpackpayload' => 
  array (
    0 => 'void',
    'self' => 'mixed',
    'data' => 'string',
  ),
  'swoole\\fastcgi\\record\\stdout::__construct' => 
  array (
    0 => 'void',
    'contentData=' => 'string',
  ),
  'swoole\\fastcgi\\record\\stdout::__tostring' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\record\\stdout::getcontentdata' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\record\\stdout::getcontentlength' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\stdout::getpaddinglength' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\stdout::getrequestid' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\stdout::gettype' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\stdout::getversion' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\stdout::packpayload' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\record\\stdout::setcontentdata' => 
  array (
    0 => 'self',
    'data' => 'string',
  ),
  'swoole\\fastcgi\\record\\stdout::setrequestid' => 
  array (
    0 => 'self',
    'requestId' => 'int',
  ),
  'swoole\\fastcgi\\record\\stdout::unpack' => 
  array (
    0 => 'self',
    'data' => 'string',
  ),
  'swoole\\fastcgi\\record\\stdout::unpackpayload' => 
  array (
    0 => 'void',
    'self' => 'mixed',
    'data' => 'string',
  ),
  'swoole\\fastcgi\\record\\unknowntype::__construct' => 
  array (
    0 => 'void',
    'type=' => 'int',
    'reserved=' => 'string',
  ),
  'swoole\\fastcgi\\record\\unknowntype::__tostring' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\record\\unknowntype::getcontentdata' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\record\\unknowntype::getcontentlength' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\unknowntype::getpaddinglength' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\unknowntype::getrequestid' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\unknowntype::gettype' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\unknowntype::getunrecognizedtype' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\unknowntype::getversion' => 
  array (
    0 => 'int',
  ),
  'swoole\\fastcgi\\record\\unknowntype::packpayload' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\record\\unknowntype::setcontentdata' => 
  array (
    0 => 'self',
    'data' => 'string',
  ),
  'swoole\\fastcgi\\record\\unknowntype::setrequestid' => 
  array (
    0 => 'self',
    'requestId' => 'int',
  ),
  'swoole\\fastcgi\\record\\unknowntype::unpack' => 
  array (
    0 => 'self',
    'data' => 'string',
  ),
  'swoole\\fastcgi\\record\\unknowntype::unpackpayload' => 
  array (
    0 => 'void',
    'self' => 'mixed',
    'data' => 'string',
  ),
  'swoole\\fastcgi\\request::__tostring' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\request::getbody' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\request::geterror' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\request::getkeepconn' => 
  array (
    0 => 'bool',
  ),
  'swoole\\fastcgi\\request::getparam' => 
  array (
    0 => 'null|string',
    'name' => 'string',
  ),
  'swoole\\fastcgi\\request::getparams' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'swoole\\fastcgi\\request::withaddedparams' => 
  array (
    0 => 'self',
    'params' => 'array<array-key, mixed>',
  ),
  'swoole\\fastcgi\\request::withbody' => 
  array (
    0 => 'self',
    'body' => 'mixed',
  ),
  'swoole\\fastcgi\\request::witherror' => 
  array (
    0 => 'self',
    'error' => 'string',
  ),
  'swoole\\fastcgi\\request::withkeepconn' => 
  array (
    0 => 'self',
    'keepConn' => 'bool',
  ),
  'swoole\\fastcgi\\request::withoutparam' => 
  array (
    0 => 'self',
    'name' => 'string',
  ),
  'swoole\\fastcgi\\request::withparam' => 
  array (
    0 => 'self',
    'name' => 'string',
    'value' => 'string',
  ),
  'swoole\\fastcgi\\request::withparams' => 
  array (
    0 => 'self',
    'params' => 'array<array-key, mixed>',
  ),
  'swoole\\fastcgi\\response::__construct' => 
  array (
    0 => 'void',
    'records=' => 'array<array-key, mixed>',
  ),
  'swoole\\fastcgi\\response::getbody' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\response::geterror' => 
  array (
    0 => 'string',
  ),
  'swoole\\fastcgi\\response::getparam' => 
  array (
    0 => 'null|string',
    'name' => 'string',
  ),
  'swoole\\fastcgi\\response::getparams' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'swoole\\fastcgi\\response::verify' => 
  array (
    0 => 'bool',
    'records' => 'array<array-key, mixed>',
  ),
  'swoole\\fastcgi\\response::withaddedparams' => 
  array (
    0 => 'self',
    'params' => 'array<array-key, mixed>',
  ),
  'swoole\\fastcgi\\response::withbody' => 
  array (
    0 => 'self',
    'body' => 'mixed',
  ),
  'swoole\\fastcgi\\response::witherror' => 
  array (
    0 => 'self',
    'error' => 'string',
  ),
  'swoole\\fastcgi\\response::withoutparam' => 
  array (
    0 => 'self',
    'name' => 'string',
  ),
  'swoole\\fastcgi\\response::withparam' => 
  array (
    0 => 'self',
    'name' => 'string',
    'value' => 'string',
  ),
  'swoole\\fastcgi\\response::withparams' => 
  array (
    0 => 'self',
    'params' => 'array<array-key, mixed>',
  ),
  'swoole\\http\\request::__destruct' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\http\\request::create' => 
  array (
    0 => 'mixed',
    'options=' => 'mixed',
  ),
  'swoole\\http\\request::getcontent' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\http\\request::getdata' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\http\\request::getmethod' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\http\\request::iscompleted' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\http\\request::parse' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
  ),
  'swoole\\http\\request::rawcontent' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\http\\response::__destruct' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\http\\response::close' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\http\\response::cookie' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
    'value=' => 'mixed',
    'expires=' => 'mixed',
    'path=' => 'mixed',
    'domain=' => 'mixed',
    'secure=' => 'mixed',
    'httponly=' => 'mixed',
    'samesite=' => 'mixed',
    'priority=' => 'mixed',
  ),
  'swoole\\http\\response::create' => 
  array (
    0 => 'mixed',
    'server' => 'mixed',
    'fd=' => 'mixed',
  ),
  'swoole\\http\\response::detach' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\http\\response::end' => 
  array (
    0 => 'mixed',
    'content=' => 'mixed',
  ),
  'swoole\\http\\response::goaway' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\http\\response::header' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
    'format=' => 'mixed',
  ),
  'swoole\\http\\response::initheader' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\http\\response::iswritable' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\http\\response::ping' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\http\\response::push' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
    'opcode=' => 'mixed',
    'flags=' => 'mixed',
  ),
  'swoole\\http\\response::rawcookie' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
    'value=' => 'mixed',
    'expires=' => 'mixed',
    'path=' => 'mixed',
    'domain=' => 'mixed',
    'secure=' => 'mixed',
    'httponly=' => 'mixed',
    'samesite=' => 'mixed',
    'priority=' => 'mixed',
  ),
  'swoole\\http\\response::recv' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\http\\response::redirect' => 
  array (
    0 => 'mixed',
    'location' => 'mixed',
    'http_code=' => 'mixed',
  ),
  'swoole\\http\\response::sendfile' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
    'offset=' => 'mixed',
    'length=' => 'mixed',
  ),
  'swoole\\http\\response::setcookie' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
    'value=' => 'mixed',
    'expires=' => 'mixed',
    'path=' => 'mixed',
    'domain=' => 'mixed',
    'secure=' => 'mixed',
    'httponly=' => 'mixed',
    'samesite=' => 'mixed',
    'priority=' => 'mixed',
  ),
  'swoole\\http\\response::setheader' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
    'format=' => 'mixed',
  ),
  'swoole\\http\\response::setstatuscode' => 
  array (
    0 => 'mixed',
    'http_code' => 'mixed',
    'reason=' => 'mixed',
  ),
  'swoole\\http\\response::status' => 
  array (
    0 => 'mixed',
    'http_code' => 'mixed',
    'reason=' => 'mixed',
  ),
  'swoole\\http\\response::trailer' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'swoole\\http\\response::upgrade' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\http\\response::write' => 
  array (
    0 => 'mixed',
    'content' => 'mixed',
  ),
  'swoole\\http\\server::__construct' => 
  array (
    0 => 'void',
    'host' => 'mixed',
    'port=' => 'mixed',
    'mode=' => 'mixed',
    'sock_type=' => 'mixed',
  ),
  'swoole\\http\\server::__destruct' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\http\\server::addcommand' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
    'accepted_process_types' => 'mixed',
    'callback' => 'callable',
  ),
  'swoole\\http\\server::addlistener' => 
  array (
    0 => 'mixed',
    'host' => 'mixed',
    'port' => 'mixed',
    'sock_type' => 'mixed',
  ),
  'swoole\\http\\server::addprocess' => 
  array (
    0 => 'mixed',
    'process' => 'swoole_process',
  ),
  'swoole\\http\\server::after' => 
  array (
    0 => 'mixed',
    'ms' => 'mixed',
    'callback' => 'callable',
  ),
  'swoole\\http\\server::bind' => 
  array (
    0 => 'mixed',
    'fd' => 'mixed',
    'uid' => 'mixed',
  ),
  'swoole\\http\\server::cleartimer' => 
  array (
    0 => 'mixed',
    'timer_id' => 'mixed',
  ),
  'swoole\\http\\server::close' => 
  array (
    0 => 'mixed',
    'fd' => 'mixed',
    'reset=' => 'mixed',
  ),
  'swoole\\http\\server::command' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
    'process_id' => 'mixed',
    'process_type' => 'mixed',
    'data' => 'mixed',
    'json_encode=' => 'mixed',
  ),
  'swoole\\http\\server::confirm' => 
  array (
    0 => 'mixed',
    'fd' => 'mixed',
  ),
  'swoole\\http\\server::connection_info' => 
  array (
    0 => 'mixed',
    'fd' => 'mixed',
    'reactor_id=' => 'mixed',
  ),
  'swoole\\http\\server::connection_list' => 
  array (
    0 => 'mixed',
    'start_fd' => 'mixed',
    'find_count=' => 'mixed',
  ),
  'swoole\\http\\server::defer' => 
  array (
    0 => 'mixed',
    'callback' => 'callable',
  ),
  'swoole\\http\\server::exist' => 
  array (
    0 => 'mixed',
    'fd' => 'mixed',
  ),
  'swoole\\http\\server::exists' => 
  array (
    0 => 'mixed',
    'fd' => 'mixed',
  ),
  'swoole\\http\\server::finish' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
  ),
  'swoole\\http\\server::getcallback' => 
  array (
    0 => 'mixed',
    'event_name' => 'mixed',
  ),
  'swoole\\http\\server::getclientinfo' => 
  array (
    0 => 'mixed',
    'fd' => 'mixed',
    'reactor_id=' => 'mixed',
  ),
  'swoole\\http\\server::getclientlist' => 
  array (
    0 => 'mixed',
    'start_fd' => 'mixed',
    'find_count=' => 'mixed',
  ),
  'swoole\\http\\server::getlasterror' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\http\\server::getmanagerpid' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\http\\server::getmasterpid' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\http\\server::getworkerid' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\http\\server::getworkerpid' => 
  array (
    0 => 'mixed',
    'worker_id=' => 'mixed',
  ),
  'swoole\\http\\server::getworkerstatus' => 
  array (
    0 => 'mixed',
    'worker_id=' => 'mixed',
  ),
  'swoole\\http\\server::heartbeat' => 
  array (
    0 => 'mixed',
    'reactor_id' => 'mixed',
  ),
  'swoole\\http\\server::listen' => 
  array (
    0 => 'mixed',
    'host' => 'mixed',
    'port' => 'mixed',
    'sock_type' => 'mixed',
  ),
  'swoole\\http\\server::on' => 
  array (
    0 => 'mixed',
    'event_name' => 'mixed',
    'callback' => 'callable',
  ),
  'swoole\\http\\server::pause' => 
  array (
    0 => 'mixed',
    'fd' => 'mixed',
  ),
  'swoole\\http\\server::protect' => 
  array (
    0 => 'mixed',
    'fd' => 'mixed',
    'is_protected=' => 'mixed',
  ),
  'swoole\\http\\server::reload' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\http\\server::resume' => 
  array (
    0 => 'mixed',
    'fd' => 'mixed',
  ),
  'swoole\\http\\server::send' => 
  array (
    0 => 'mixed',
    'fd' => 'mixed',
    'send_data' => 'mixed',
    'server_socket=' => 'mixed',
  ),
  'swoole\\http\\server::sendfile' => 
  array (
    0 => 'mixed',
    'conn_fd' => 'mixed',
    'filename' => 'mixed',
    'offset=' => 'mixed',
    'length=' => 'mixed',
  ),
  'swoole\\http\\server::sendmessage' => 
  array (
    0 => 'mixed',
    'message' => 'mixed',
    'dst_worker_id' => 'mixed',
  ),
  'swoole\\http\\server::sendto' => 
  array (
    0 => 'mixed',
    'ip' => 'mixed',
    'port' => 'mixed',
    'send_data' => 'mixed',
    'server_socket=' => 'mixed',
  ),
  'swoole\\http\\server::sendwait' => 
  array (
    0 => 'mixed',
    'conn_fd' => 'mixed',
    'send_data' => 'mixed',
  ),
  'swoole\\http\\server::set' => 
  array (
    0 => 'mixed',
    'settings' => 'array<array-key, mixed>',
  ),
  'swoole\\http\\server::shutdown' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\http\\server::start' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\http\\server::stats' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\http\\server::stop' => 
  array (
    0 => 'mixed',
    'worker_id=' => 'mixed',
  ),
  'swoole\\http\\server::task' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
    'task_worker_index=' => 'mixed',
    'finish_callback=' => 'callable|null',
  ),
  'swoole\\http\\server::taskco' => 
  array (
    0 => 'mixed',
    'tasks' => 'array<array-key, mixed>',
    'timeout=' => 'mixed',
  ),
  'swoole\\http\\server::taskwait' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
    'timeout=' => 'mixed',
    'task_worker_index=' => 'mixed',
  ),
  'swoole\\http\\server::taskwaitmulti' => 
  array (
    0 => 'mixed',
    'tasks' => 'array<array-key, mixed>',
    'timeout=' => 'mixed',
  ),
  'swoole\\http\\server::tick' => 
  array (
    0 => 'mixed',
    'ms' => 'mixed',
    'callback' => 'callable',
  ),
  'swoole\\http\\status::getreasonphrase' => 
  array (
    0 => 'string',
    'value' => 'int',
  ),
  'swoole\\http\\status::getreasonphrases' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'swoole\\lock::__construct' => 
  array (
    0 => 'void',
    'type=' => 'mixed',
    'filename=' => 'mixed',
  ),
  'swoole\\lock::__destruct' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\lock::destroy' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\lock::lock' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\lock::lock_read' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\lock::lockwait' => 
  array (
    0 => 'mixed',
    'timeout=' => 'mixed',
  ),
  'swoole\\lock::trylock' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\lock::trylock_read' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\lock::unlock' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\multibytestringobject::__construct' => 
  array (
    0 => 'void',
    'string=' => 'string',
  ),
  'swoole\\multibytestringobject::__tostring' => 
  array (
    0 => 'string',
  ),
  'swoole\\multibytestringobject::append' => 
  array (
    0 => 'self',
    'str' => 'mixed',
  ),
  'swoole\\multibytestringobject::char' => 
  array (
    0 => 'string',
    'index' => 'int',
  ),
  'swoole\\multibytestringobject::chunk' => 
  array (
    0 => 'Swoole\\ArrayObject',
    'splitLength=' => 'int',
    'limit=' => 'int|null',
  ),
  'swoole\\multibytestringobject::chunksplit' => 
  array (
    0 => 'self',
    'chunkLength=' => 'int',
    'chunkEnd=' => 'string',
  ),
  'swoole\\multibytestringobject::contains' => 
  array (
    0 => 'bool',
    'subString' => 'string',
  ),
  'swoole\\multibytestringobject::detectarraytype' => 
  array (
    0 => 'Swoole\\ArrayObject',
    'value' => 'array<array-key, mixed>',
  ),
  'swoole\\multibytestringobject::endswith' => 
  array (
    0 => 'bool',
    'needle' => 'string',
  ),
  'swoole\\multibytestringobject::equals' => 
  array (
    0 => 'bool',
    'str' => 'mixed',
    'strict=' => 'bool',
  ),
  'swoole\\multibytestringobject::indexof' => 
  array (
    0 => 'mixed',
    'needle' => 'string',
    'offset=' => 'int',
    'encoding=' => 'null|string',
  ),
  'swoole\\multibytestringobject::ipos' => 
  array (
    0 => 'mixed',
    'needle' => 'string',
    'encoding=' => 'null|string',
  ),
  'swoole\\multibytestringobject::lastindexof' => 
  array (
    0 => 'mixed',
    'needle' => 'string',
    'offset=' => 'int',
    'encoding=' => 'null|string',
  ),
  'swoole\\multibytestringobject::length' => 
  array (
    0 => 'int',
  ),
  'swoole\\multibytestringobject::lower' => 
  array (
    0 => 'self',
  ),
  'swoole\\multibytestringobject::ltrim' => 
  array (
    0 => 'self',
  ),
  'swoole\\multibytestringobject::pos' => 
  array (
    0 => 'mixed',
    'needle' => 'string',
    'offset=' => 'int',
    'encoding=' => 'null|string',
  ),
  'swoole\\multibytestringobject::repeat' => 
  array (
    0 => 'self',
    'times' => 'int',
  ),
  'swoole\\multibytestringobject::replace' => 
  array (
    0 => 'self',
    'search' => 'string',
    'replace' => 'string',
    '&count=' => 'mixed',
  ),
  'swoole\\multibytestringobject::rpos' => 
  array (
    0 => 'mixed',
    'needle' => 'string',
    'offset=' => 'int',
    'encoding=' => 'null|string',
  ),
  'swoole\\multibytestringobject::rtrim' => 
  array (
    0 => 'self',
  ),
  'swoole\\multibytestringobject::split' => 
  array (
    0 => 'Swoole\\ArrayObject',
    'delimiter' => 'string',
    'limit=' => 'int',
  ),
  'swoole\\multibytestringobject::startswith' => 
  array (
    0 => 'bool',
    'needle' => 'string',
  ),
  'swoole\\multibytestringobject::substr' => 
  array (
    0 => 'mixed',
    'offset' => 'int',
    'length=' => 'int|null',
    'encoding=' => 'null|string',
  ),
  'swoole\\multibytestringobject::tostring' => 
  array (
    0 => 'string',
  ),
  'swoole\\multibytestringobject::trim' => 
  array (
    0 => 'self',
    'characters=' => 'mixed',
  ),
  'swoole\\multibytestringobject::upper' => 
  array (
    0 => 'self',
  ),
  'swoole\\nameresolver::__construct' => 
  array (
    0 => 'void',
    'url' => 'mixed',
    'prefix=' => 'mixed',
  ),
  'swoole\\nameresolver::checkresponse' => 
  array (
    0 => 'mixed',
    'r' => 'mixed',
    'url' => 'mixed',
  ),
  'swoole\\nameresolver::checkserverurl' => 
  array (
    0 => 'mixed',
    'url' => 'mixed',
  ),
  'swoole\\nameresolver::getcluster' => 
  array (
    0 => 'Swoole\\NameResolver\\Cluster|null',
    'name' => 'string',
  ),
  'swoole\\nameresolver::getfilter' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\nameresolver::hasfilter' => 
  array (
    0 => 'bool',
  ),
  'swoole\\nameresolver::join' => 
  array (
    0 => 'bool',
    'name' => 'string',
    'ip' => 'string',
    'port' => 'int',
    'options=' => 'array<array-key, mixed>',
  ),
  'swoole\\nameresolver::leave' => 
  array (
    0 => 'bool',
    'name' => 'string',
    'ip' => 'string',
    'port' => 'int',
  ),
  'swoole\\nameresolver::lookup' => 
  array (
    0 => 'mixed',
    'name' => 'string',
  ),
  'swoole\\nameresolver::withfilter' => 
  array (
    0 => 'self',
    'fn' => 'callable',
  ),
  'swoole\\nameresolver\\cluster::add' => 
  array (
    0 => 'void',
    'host' => 'string',
    'port' => 'int',
    'weight=' => 'int',
  ),
  'swoole\\nameresolver\\cluster::count' => 
  array (
    0 => 'int',
  ),
  'swoole\\nameresolver\\cluster::pop' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\nameresolver\\consul::__construct' => 
  array (
    0 => 'void',
    'url' => 'mixed',
    'prefix=' => 'mixed',
  ),
  'swoole\\nameresolver\\consul::checkresponse' => 
  array (
    0 => 'mixed',
    'r' => 'mixed',
    'url' => 'mixed',
  ),
  'swoole\\nameresolver\\consul::checkserverurl' => 
  array (
    0 => 'mixed',
    'url' => 'mixed',
  ),
  'swoole\\nameresolver\\consul::enablemaintenancemode' => 
  array (
    0 => 'bool',
    'name' => 'string',
    'ip' => 'string',
    'port' => 'int',
  ),
  'swoole\\nameresolver\\consul::getcluster' => 
  array (
    0 => 'Swoole\\NameResolver\\Cluster|null',
    'name' => 'string',
  ),
  'swoole\\nameresolver\\consul::getfilter' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\nameresolver\\consul::getserviceid' => 
  array (
    0 => 'string',
    'name' => 'string',
    'ip' => 'string',
    'port' => 'int',
  ),
  'swoole\\nameresolver\\consul::hasfilter' => 
  array (
    0 => 'bool',
  ),
  'swoole\\nameresolver\\consul::join' => 
  array (
    0 => 'bool',
    'name' => 'string',
    'ip' => 'string',
    'port' => 'int',
    'options=' => 'array<array-key, mixed>',
  ),
  'swoole\\nameresolver\\consul::leave' => 
  array (
    0 => 'bool',
    'name' => 'string',
    'ip' => 'string',
    'port' => 'int',
  ),
  'swoole\\nameresolver\\consul::lookup' => 
  array (
    0 => 'mixed',
    'name' => 'string',
  ),
  'swoole\\nameresolver\\consul::withfilter' => 
  array (
    0 => 'self',
    'fn' => 'callable',
  ),
  'swoole\\nameresolver\\exception::__clone' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\nameresolver\\exception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'mixed',
    'code=' => 'mixed',
    'previous=' => 'mixed',
  ),
  'swoole\\nameresolver\\exception::__tostring' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\nameresolver\\exception::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\nameresolver\\exception::getcode' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\nameresolver\\exception::getfile' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\nameresolver\\exception::getline' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\nameresolver\\exception::getmessage' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\nameresolver\\exception::getprevious' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\nameresolver\\exception::gettrace' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\nameresolver\\exception::gettraceasstring' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\nameresolver\\nacos::__construct' => 
  array (
    0 => 'void',
    'url' => 'mixed',
    'prefix=' => 'mixed',
  ),
  'swoole\\nameresolver\\nacos::checkresponse' => 
  array (
    0 => 'mixed',
    'r' => 'mixed',
    'url' => 'mixed',
  ),
  'swoole\\nameresolver\\nacos::checkserverurl' => 
  array (
    0 => 'mixed',
    'url' => 'mixed',
  ),
  'swoole\\nameresolver\\nacos::getcluster' => 
  array (
    0 => 'Swoole\\NameResolver\\Cluster|null',
    'name' => 'string',
  ),
  'swoole\\nameresolver\\nacos::getfilter' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\nameresolver\\nacos::hasfilter' => 
  array (
    0 => 'bool',
  ),
  'swoole\\nameresolver\\nacos::join' => 
  array (
    0 => 'bool',
    'name' => 'string',
    'ip' => 'string',
    'port' => 'int',
    'options=' => 'array<array-key, mixed>',
  ),
  'swoole\\nameresolver\\nacos::leave' => 
  array (
    0 => 'bool',
    'name' => 'string',
    'ip' => 'string',
    'port' => 'int',
  ),
  'swoole\\nameresolver\\nacos::lookup' => 
  array (
    0 => 'mixed',
    'name' => 'string',
  ),
  'swoole\\nameresolver\\nacos::withfilter' => 
  array (
    0 => 'self',
    'fn' => 'callable',
  ),
  'swoole\\nameresolver\\redis::__construct' => 
  array (
    0 => 'void',
    'url' => 'mixed',
    'prefix=' => 'mixed',
  ),
  'swoole\\nameresolver\\redis::checkresponse' => 
  array (
    0 => 'mixed',
    'r' => 'mixed',
    'url' => 'mixed',
  ),
  'swoole\\nameresolver\\redis::checkserverurl' => 
  array (
    0 => 'mixed',
    'url' => 'mixed',
  ),
  'swoole\\nameresolver\\redis::connect' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\nameresolver\\redis::getcluster' => 
  array (
    0 => 'Swoole\\NameResolver\\Cluster|null',
    'name' => 'string',
  ),
  'swoole\\nameresolver\\redis::getfilter' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\nameresolver\\redis::hasfilter' => 
  array (
    0 => 'bool',
  ),
  'swoole\\nameresolver\\redis::join' => 
  array (
    0 => 'bool',
    'name' => 'string',
    'ip' => 'string',
    'port' => 'int',
    'options=' => 'array<array-key, mixed>',
  ),
  'swoole\\nameresolver\\redis::leave' => 
  array (
    0 => 'bool',
    'name' => 'string',
    'ip' => 'string',
    'port' => 'int',
  ),
  'swoole\\nameresolver\\redis::lookup' => 
  array (
    0 => 'mixed',
    'name' => 'string',
  ),
  'swoole\\nameresolver\\redis::withfilter' => 
  array (
    0 => 'self',
    'fn' => 'callable',
  ),
  'swoole\\objectproxy::__call' => 
  array (
    0 => 'mixed',
    'name' => 'string',
    'arguments' => 'array<array-key, mixed>',
  ),
  'swoole\\objectproxy::__construct' => 
  array (
    0 => 'void',
    'object' => 'mixed',
  ),
  'swoole\\objectproxy::__get' => 
  array (
    0 => 'mixed',
    'name' => 'string',
  ),
  'swoole\\objectproxy::__getobject' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\objectproxy::__invoke' => 
  array (
    0 => 'mixed',
    '...arguments=' => 'mixed',
  ),
  'swoole\\objectproxy::__isset' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
  ),
  'swoole\\objectproxy::__set' => 
  array (
    0 => 'void',
    'name' => 'string',
    'value' => 'mixed',
  ),
  'swoole\\objectproxy::__unset' => 
  array (
    0 => 'void',
    'name' => 'string',
  ),
  'swoole\\process::__construct' => 
  array (
    0 => 'void',
    'callback' => 'callable',
    'redirect_stdin_and_stdout=' => 'mixed',
    'pipe_type=' => 'mixed',
    'enable_coroutine=' => 'mixed',
  ),
  'swoole\\process::__destruct' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\process::alarm' => 
  array (
    0 => 'mixed',
    'usec' => 'mixed',
    'type=' => 'mixed',
  ),
  'swoole\\process::close' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\process::daemon' => 
  array (
    0 => 'mixed',
    'nochdir=' => 'mixed',
    'noclose=' => 'mixed',
    'pipes=' => 'mixed',
  ),
  'swoole\\process::exec' => 
  array (
    0 => 'mixed',
    'exec_file' => 'mixed',
    'args' => 'mixed',
  ),
  'swoole\\process::exit' => 
  array (
    0 => 'mixed',
    'exit_code=' => 'mixed',
  ),
  'swoole\\process::exportsocket' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\process::freequeue' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\process::getpriority' => 
  array (
    0 => 'mixed',
    'which' => 'mixed',
  ),
  'swoole\\process::kill' => 
  array (
    0 => 'mixed',
    'pid' => 'mixed',
    'signal_no=' => 'mixed',
  ),
  'swoole\\process::name' => 
  array (
    0 => 'mixed',
    'process_name' => 'mixed',
  ),
  'swoole\\process::pop' => 
  array (
    0 => 'mixed',
    'size=' => 'mixed',
  ),
  'swoole\\process::push' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
  ),
  'swoole\\process::read' => 
  array (
    0 => 'mixed',
    'size=' => 'mixed',
  ),
  'swoole\\process::set' => 
  array (
    0 => 'mixed',
    'settings' => 'array<array-key, mixed>',
  ),
  'swoole\\process::setblocking' => 
  array (
    0 => 'mixed',
    'blocking' => 'mixed',
  ),
  'swoole\\process::setpriority' => 
  array (
    0 => 'mixed',
    'which' => 'mixed',
    'priority' => 'mixed',
  ),
  'swoole\\process::settimeout' => 
  array (
    0 => 'mixed',
    'seconds' => 'mixed',
  ),
  'swoole\\process::signal' => 
  array (
    0 => 'mixed',
    'signal_no' => 'mixed',
    'callback' => 'mixed',
  ),
  'swoole\\process::start' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\process::statqueue' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\process::usequeue' => 
  array (
    0 => 'mixed',
    'key=' => 'mixed',
    'mode=' => 'mixed',
    'capacity=' => 'mixed',
  ),
  'swoole\\process::wait' => 
  array (
    0 => 'mixed',
    'blocking=' => 'mixed',
  ),
  'swoole\\process::write' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
  ),
  'swoole\\process\\manager::__construct' => 
  array (
    0 => 'void',
    'ipcType=' => 'int',
    'msgQueueKey=' => 'int',
  ),
  'swoole\\process\\manager::add' => 
  array (
    0 => 'self',
    'func' => 'callable',
    'enableCoroutine=' => 'bool',
  ),
  'swoole\\process\\manager::addbatch' => 
  array (
    0 => 'self',
    'workerNum' => 'int',
    'func' => 'callable',
    'enableCoroutine=' => 'bool',
  ),
  'swoole\\process\\manager::getipctype' => 
  array (
    0 => 'int',
  ),
  'swoole\\process\\manager::getmsgqueuekey' => 
  array (
    0 => 'int',
  ),
  'swoole\\process\\manager::setipctype' => 
  array (
    0 => 'self',
    'ipcType' => 'int',
  ),
  'swoole\\process\\manager::setmsgqueuekey' => 
  array (
    0 => 'self',
    'msgQueueKey' => 'int',
  ),
  'swoole\\process\\manager::start' => 
  array (
    0 => 'void',
  ),
  'swoole\\process\\pool::__construct' => 
  array (
    0 => 'void',
    'worker_num' => 'mixed',
    'ipc_type=' => 'mixed',
    'msgqueue_key=' => 'mixed',
    'enable_coroutine=' => 'mixed',
  ),
  'swoole\\process\\pool::__destruct' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\process\\pool::detach' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\process\\pool::getprocess' => 
  array (
    0 => 'mixed',
    'worker_id=' => 'mixed',
  ),
  'swoole\\process\\pool::listen' => 
  array (
    0 => 'mixed',
    'host' => 'mixed',
    'port=' => 'mixed',
    'backlog=' => 'mixed',
  ),
  'swoole\\process\\pool::on' => 
  array (
    0 => 'mixed',
    'event_name' => 'mixed',
    'callback' => 'callable',
  ),
  'swoole\\process\\pool::set' => 
  array (
    0 => 'mixed',
    'settings' => 'array<array-key, mixed>',
  ),
  'swoole\\process\\pool::shutdown' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\process\\pool::start' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\process\\pool::stop' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\process\\pool::write' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
  ),
  'swoole\\process\\processmanager::__construct' => 
  array (
    0 => 'void',
    'ipcType=' => 'int',
    'msgQueueKey=' => 'int',
  ),
  'swoole\\process\\processmanager::add' => 
  array (
    0 => 'self',
    'func' => 'callable',
    'enableCoroutine=' => 'bool',
  ),
  'swoole\\process\\processmanager::addbatch' => 
  array (
    0 => 'self',
    'workerNum' => 'int',
    'func' => 'callable',
    'enableCoroutine=' => 'bool',
  ),
  'swoole\\process\\processmanager::getipctype' => 
  array (
    0 => 'int',
  ),
  'swoole\\process\\processmanager::getmsgqueuekey' => 
  array (
    0 => 'int',
  ),
  'swoole\\process\\processmanager::setipctype' => 
  array (
    0 => 'self',
    'ipcType' => 'int',
  ),
  'swoole\\process\\processmanager::setmsgqueuekey' => 
  array (
    0 => 'self',
    'msgQueueKey' => 'int',
  ),
  'swoole\\process\\processmanager::start' => 
  array (
    0 => 'void',
  ),
  'swoole\\redis\\server::__construct' => 
  array (
    0 => 'void',
    'host' => 'mixed',
    'port=' => 'mixed',
    'mode=' => 'mixed',
    'sock_type=' => 'mixed',
  ),
  'swoole\\redis\\server::__destruct' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\redis\\server::addcommand' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
    'accepted_process_types' => 'mixed',
    'callback' => 'callable',
  ),
  'swoole\\redis\\server::addlistener' => 
  array (
    0 => 'mixed',
    'host' => 'mixed',
    'port' => 'mixed',
    'sock_type' => 'mixed',
  ),
  'swoole\\redis\\server::addprocess' => 
  array (
    0 => 'mixed',
    'process' => 'swoole_process',
  ),
  'swoole\\redis\\server::after' => 
  array (
    0 => 'mixed',
    'ms' => 'mixed',
    'callback' => 'callable',
  ),
  'swoole\\redis\\server::bind' => 
  array (
    0 => 'mixed',
    'fd' => 'mixed',
    'uid' => 'mixed',
  ),
  'swoole\\redis\\server::cleartimer' => 
  array (
    0 => 'mixed',
    'timer_id' => 'mixed',
  ),
  'swoole\\redis\\server::close' => 
  array (
    0 => 'mixed',
    'fd' => 'mixed',
    'reset=' => 'mixed',
  ),
  'swoole\\redis\\server::command' => 
  array (
    0 => 'mixed',
    'name' => 'mixed',
    'process_id' => 'mixed',
    'process_type' => 'mixed',
    'data' => 'mixed',
    'json_encode=' => 'mixed',
  ),
  'swoole\\redis\\server::confirm' => 
  array (
    0 => 'mixed',
    'fd' => 'mixed',
  ),
  'swoole\\redis\\server::connection_info' => 
  array (
    0 => 'mixed',
    'fd' => 'mixed',
    'reactor_id=' => 'mixed',
  ),
  'swoole\\redis\\server::connection_list' => 
  array (
    0 => 'mixed',
    'start_fd' => 'mixed',
    'find_count=' => 'mixed',
  ),
  'swoole\\redis\\server::defer' => 
  array (
    0 => 'mixed',
    'callback' => 'callable',
  ),
  'swoole\\redis\\server::exist' => 
  array (
    0 => 'mixed',
    'fd' => 'mixed',
  ),
  'swoole\\redis\\server::exists' => 
  array (
    0 => 'mixed',
    'fd' => 'mixed',
  ),
  'swoole\\redis\\server::finish' => 
  array (
    0 => 'mixed',
    'data' => 'mixed',
  ),
  'swoole\\redis\\server::format' => 
  array (
    0 => 'mixed',
    'type' => 'mixed',
    'value=' => 'mixed',
  ),
  'swoole\\redis\\server::getcallback' => 
  array (
    0 => 'mixed',
    'event_name' => 'mixed',
  ),
  'swoole\\redis\\server::getclientinfo' => 
  array (
    0 => 'mixed',
    'fd' => 'mixed',
    'reactor_id=' => 'mixed',
  ),
  'swoole\\redis\\server::getclientlist' => 
  array (
    0 => 'mixed',
    'start_fd' => 'mixed',
    'find_count=' => 'mixed',
  ),
  'swoole\\redis\\server::gethandler' => 
  array (
    0 => 'mixed',
    'command' => 'mixed',
  ),
  'swoole\\redis\\server::getlasterror' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\redis\\server::getmanagerpid' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\redis\\server::getmasterpid' => 
  array (
    0 => 'mixed',
  ),
  'swoole\\redis\\server::getworkerid' => 
  array (