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
    'number' => 'int',
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
    'number' => 'float',
  ),
  'acosh' => 
  array (
    0 => 'float',
    'number' => 'float',
  ),
  'addcslashes' => 
  array (
    0 => 'string',
    'str' => 'string',
    'charlist' => 'string',
  ),
  'addslashes' => 
  array (
    0 => 'string',
    'str' => 'string',
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
    0 => 'string',
  ),
  'amqpbasicproperties::getclusterid' => 
  array (
    0 => 'string',
  ),
  'amqpbasicproperties::getcontentencoding' => 
  array (
    0 => 'string',
  ),
  'amqpbasicproperties::getcontenttype' => 
  array (
    0 => 'string',
  ),
  'amqpbasicproperties::getcorrelationid' => 
  array (
    0 => 'string',
  ),
  'amqpbasicproperties::getdeliverymode' => 
  array (
    0 => 'int',
  ),
  'amqpbasicproperties::getexpiration' => 
  array (
    0 => 'string',
  ),
  'amqpbasicproperties::getheaders' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'amqpbasicproperties::getmessageid' => 
  array (
    0 => 'string',
  ),
  'amqpbasicproperties::getpriority' => 
  array (
    0 => 'int',
  ),
  'amqpbasicproperties::getreplyto' => 
  array (
    0 => 'string',
  ),
  'amqpbasicproperties::gettimestamp' => 
  array (
    0 => 'string',
  ),
  'amqpbasicproperties::gettype' => 
  array (
    0 => 'string',
  ),
  'amqpbasicproperties::getuserid' => 
  array (
    0 => 'string',
  ),
  'amqpchannel::__construct' => 
  array (
    0 => 'void',
    'amqp_connection' => 'AMQPConnection',
  ),
  'amqpchannel::basicrecover' => 
  array (
    0 => 'mixed',
    'requeue=' => 'bool',
  ),
  'amqpchannel::close' => 
  array (
    0 => 'mixed',
  ),
  'amqpchannel::committransaction' => 
  array (
    0 => 'bool',
  ),
  'amqpchannel::confirmselect' => 
  array (
    0 => 'mixed',
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
    0 => 'bool',
    'size' => 'int',
    'count' => 'int',
    'global=' => 'mixed',
  ),
  'amqpchannel::rollbacktransaction' => 
  array (
    0 => 'bool',
  ),
  'amqpchannel::setconfirmcallback' => 
  array (
    0 => 'mixed',
    'ack_callback' => 'callable|null',
    'nack_callback=' => 'callable|null',
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
    0 => 'bool',
    'count' => 'int',
  ),
  'amqpchannel::setprefetchsize' => 
  array (
    0 => 'bool',
    'size' => 'int',
  ),
  'amqpchannel::setreturncallback' => 
  array (
    0 => 'mixed',
    'return_callback' => 'callable|null',
  ),
  'amqpchannel::starttransaction' => 
  array (
    0 => 'bool',
  ),
  'amqpchannel::waitforbasicreturn' => 
  array (
    0 => 'mixed',
    'timeout=' => 'float',
  ),
  'amqpchannel::waitforconfirm' => 
  array (
    0 => 'mixed',
    'timeout=' => 'float',
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
    0 => 'bool',
  ),
  'amqpconnection::disconnect' => 
  array (
    0 => 'bool',
  ),
  'amqpconnection::getcacert' => 
  array (
    0 => 'string',
  ),
  'amqpconnection::getcert' => 
  array (
    0 => 'string',
  ),
  'amqpconnection::getconnectionname' => 
  array (
    0 => 'mixed',
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
    0 => 'string',
  ),
  'amqpconnection::getlogin' => 
  array (
    0 => 'string',
  ),
  'amqpconnection::getmaxchannels' => 
  array (
    0 => 'int|null',
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
    0 => 'bool|null',
  ),
  'amqpconnection::pconnect' => 
  array (
    0 => 'bool',
  ),
  'amqpconnection::pdisconnect' => 
  array (
    0 => 'bool',
  ),
  'amqpconnection::preconnect' => 
  array (
    0 => 'bool',
  ),
  'amqpconnection::reconnect' => 
  array (
    0 => 'bool',
  ),
  'amqpconnection::setcacert' => 
  array (
    0 => 'mixed',
    'cacert' => 'string',
  ),
  'amqpconnection::setcert' => 
  array (
    0 => 'mixed',
    'cert' => 'string',
  ),
  'amqpconnection::setconnectionname' => 
  array (
    0 => 'mixed',
    'connection_name' => 'mixed',
  ),
  'amqpconnection::sethost' => 
  array (
    0 => 'bool',
    'host' => 'string',
  ),
  'amqpconnection::setkey' => 
  array (
    0 => 'mixed',
    'key' => 'string',
  ),
  'amqpconnection::setlogin' => 
  array (
    0 => 'bool',
    'login' => 'string',
  ),
  'amqpconnection::setpassword' => 
  array (
    0 => 'bool',
    'password' => 'string',
  ),
  'amqpconnection::setport' => 
  array (
    0 => 'bool',
    'port' => 'int',
  ),
  'amqpconnection::setreadtimeout' => 
  array (
    0 => 'bool',
    'timeout' => 'int',
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
    0 => 'bool',
    'timeout' => 'int',
  ),
  'amqpconnection::setverify' => 
  array (
    0 => 'mixed',
    'verify' => 'bool',
  ),
  'amqpconnection::setvhost' => 
  array (
    0 => 'bool',
    'vhost' => 'string',
  ),
  'amqpconnection::setwritetimeout' => 
  array (
    0 => 'bool',
    'timeout' => 'int',
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
    0 => 'int',
  ),
  'amqpdecimal::getsignificand' => 
  array (
    0 => 'int',
  ),
  'amqpenvelope::__construct' => 
  array (
    0 => 'void',
  ),
  'amqpenvelope::getappid' => 
  array (
    0 => 'string',
  ),
  'amqpenvelope::getbody' => 
  array (
    0 => 'string',
  ),
  'amqpenvelope::getclusterid' => 
  array (
    0 => 'string',
  ),
  'amqpenvelope::getconsumertag' => 
  array (
    0 => 'string',
  ),
  'amqpenvelope::getcontentencoding' => 
  array (
    0 => 'string',
  ),
  'amqpenvelope::getcontenttype' => 
  array (
    0 => 'string',
  ),
  'amqpenvelope::getcorrelationid' => 
  array (
    0 => 'string',
  ),
  'amqpenvelope::getdeliverymode' => 
  array (
    0 => 'int',
  ),
  'amqpenvelope::getdeliverytag' => 
  array (
    0 => 'string',
  ),
  'amqpenvelope::getexchangename' => 
  array (
    0 => 'string',
  ),
  'amqpenvelope::getexpiration' => 
  array (
    0 => 'string',
  ),
  'amqpenvelope::getheader' => 
  array (
    0 => 'false|string',
    'name' => 'string',
  ),
  'amqpenvelope::getheaders' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'amqpenvelope::getmessageid' => 
  array (
    0 => 'string',
  ),
  'amqpenvelope::getpriority' => 
  array (
    0 => 'int',
  ),
  'amqpenvelope::getreplyto' => 
  array (
    0 => 'string',
  ),
  'amqpenvelope::getroutingkey' => 
  array (
    0 => 'string',
  ),
  'amqpenvelope::gettimestamp' => 
  array (
    0 => 'string',
  ),
  'amqpenvelope::gettype' => 
  array (
    0 => 'string',
  ),
  'amqpenvelope::getuserid' => 
  array (
    0 => 'string',
  ),
  'amqpenvelope::hasheader' => 
  array (
    0 => 'bool',
    'name' => 'string',
  ),
  'amqpenvelope::isredelivery' => 
  array (
    0 => 'bool',
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
    0 => 'bool',
    'exchange_name' => 'string',
    'routing_key' => 'string',
    'flags=' => 'array<array-key, mixed>',
  ),
  'amqpexchange::declare' => 
  array (
    0 => 'mixed',
  ),
  'amqpexchange::declareexchange' => 
  array (
    0 => 'bool',
  ),
  'amqpexchange::delete' => 
  array (
    0 => 'bool',
    'exchange_name=' => 'string',
    'flags=' => 'int',
  ),
  'amqpexchange::getargument' => 
  array (
    0 => 'false|int|string',
    'argument' => 'string',
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
    0 => 'string',
  ),
  'amqpexchange::gettype' => 
  array (
    0 => 'string',
  ),
  'amqpexchange::hasargument' => 
  array (
    0 => 'bool',
    'argument' => 'string',
  ),
  'amqpexchange::publish' => 
  array (
    0 => 'bool',
    'message' => 'string',
    'routing_key=' => 'string',
    'flags=' => 'int',
    'headers=' => 'array<array-key, mixed>',
  ),
  'amqpexchange::setargument' => 
  array (
    0 => 'bool',
    'key' => 'string',
    'value' => 'int|string',
  ),
  'amqpexchange::setarguments' => 
  array (
    0 => 'bool',
    'arguments' => 'array<array-key, mixed>',
  ),
  'amqpexchange::setflags' => 
  array (
    0 => 'bool',
    'flags' => 'int',
  ),
  'amqpexchange::setname' => 
  array (
    0 => 'bool',
    'exchange_name' => 'string',
  ),
  'amqpexchange::settype' => 
  array (
    0 => 'bool',
    'exchange_type' => 'string',
  ),
  'amqpexchange::unbind' => 
  array (
    0 => 'bool',
    'exchange_name' => 'string',
    'routing_key' => 'string',
    'flags=' => 'array<array-key, mixed>',
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
    0 => 'bool',
    'delivery_tag' => 'string',
    'flags=' => 'int',
  ),
  'amqpqueue::bind' => 
  array (
    0 => 'bool',
    'exchange_name' => 'string',
    'routing_key=' => 'string',
    'arguments=' => 'array<array-key, mixed>',
  ),
  'amqpqueue::cancel' => 
  array (
    0 => 'bool',
    'consumer_tag=' => 'string',
  ),
  'amqpqueue::consume' => 
  array (
    0 => 'void',
    'callback' => 'callable|null',
    'flags=' => 'int',
    'consumer_tag=' => 'string',
  ),
  'amqpqueue::declare' => 
  array (
    0 => 'mixed',
  ),
  'amqpqueue::declarequeue' => 
  array (
    0 => 'int',
  ),
  'amqpqueue::delete' => 
  array (
    0 => 'int',
    'flags=' => 'int',
  ),
  'amqpqueue::get' => 
  array (
    0 => 'AMQPEnvelope|false',
    'flags=' => 'int',
  ),
  'amqpqueue::getargument' => 
  array (
    0 => 'false|int|string',
    'argument' => 'string',
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
    0 => 'string',
  ),
  'amqpqueue::hasargument' => 
  array (
    0 => 'bool',
    'key' => 'string',
  ),
  'amqpqueue::nack' => 
  array (
    0 => 'bool',
    'delivery_tag' => 'string',
    'flags=' => 'int',
  ),
  'amqpqueue::purge' => 
  array (
    0 => 'bool',
  ),
  'amqpqueue::reject' => 
  array (
    0 => 'bool',
    'delivery_tag' => 'string',
    'flags=' => 'int',
  ),
  'amqpqueue::setargument' => 
  array (
    0 => 'bool',
    'key' => 'string',
    'value' => 'mixed',
  ),
  'amqpqueue::setarguments' => 
  array (
    0 => 'bool',
    'arguments' => 'array<array-key, mixed>',
  ),
  'amqpqueue::setflags' => 
  array (
    0 => 'bool',
    'flags' => 'int',
  ),
  'amqpqueue::setname' => 
  array (
    0 => 'bool',
    'queue_name' => 'string',
  ),
  'amqpqueue::unbind' => 
  array (
    0 => 'bool',
    'exchange_name' => 'string',
    'routing_key=' => 'string',
    'arguments=' => 'array<array-key, mixed>',
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
    'timestamp=' => 'string',
  ),
  'amqptimestamp::__tostring' => 
  array (
    0 => 'string',
  ),
  'amqptimestamp::gettimestamp' => 
  array (
    0 => 'string',
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
  'apcuiterator::current' => 
  array (
    0 => 'mixed',
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
  'appenditerator::__construct' => 
  array (
    0 => 'void',
  ),
  'appenditerator::append' => 
  array (
    0 => 'void',
    'iterator' => 'Iterator',
  ),
  'appenditerator::current' => 
  array (
    0 => 'mixed',
  ),
  'appenditerator::getarrayiterator' => 
  array (
    0 => 'ArrayIterator',
  ),
  'appenditerator::getinneriterator' => 
  array (
    0 => 'Iterator',
  ),
  'appenditerator::getiteratorindex' => 
  array (
    0 => 'int',
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
  'arithmeticerror::__clone' => 
  array (
    0 => 'void',
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
    'input' => 'array<array-key, mixed>',
    'case=' => 'int',
  ),
  'array_chunk' => 
  array (
    0 => 'list<array<array-key, array<array-key, mixed>>>',
    'arg' => 'array<array-key, mixed>',
    'size' => 'int',
    'preserve_keys=' => 'bool',
  ),
  'array_column' => 
  array (
    0 => 'array<array-key, mixed>',
    'arg' => 'array<array-key, mixed>',
    'column_key' => 'mixed',
    'index_key=' => 'mixed',
  ),
  'array_combine' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'keys' => 'array<array-key, int|string>',
    'values' => 'array<array-key, mixed>',
  ),
  'array_count_values' => 
  array (
    0 => 'array<array-key, int>',
    'arg' => 'array<array-key, int|string>',
  ),
  'array_diff' => 
  array (
    0 => 'array<array-key, mixed>',
    'arr1' => 'array<array-key, mixed>',
    '...arrays' => 'array<array-key, mixed>',
  ),
  'array_diff_assoc' => 
  array (
    0 => 'array<array-key, mixed>',
    'arr1' => 'array<array-key, mixed>',
    '...arrays' => 'array<array-key, mixed>',
  ),
  'array_diff_key' => 
  array (
    0 => 'array<array-key, mixed>',
    'arr1' => 'array<array-key, mixed>',
    '...arrays' => 'array<array-key, mixed>',
  ),
  'array_diff_uassoc' => 
  array (
    0 => 'array<array-key, mixed>',
    'arr1' => 'array<array-key, mixed>',
    'arr2' => 'array<array-key, mixed>',
    'callback_data_comp_func' => 'callable(mixed, mixed):int',
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
    'arr1' => 'array<array-key, mixed>',
    'arr2' => 'array<array-key, mixed>',
    'callback_key_comp_func' => 'callable(mixed, mixed):int',
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
    'start_key' => 'int',
    'num' => 'int',
    'val' => 'mixed',
  ),
  'array_fill_keys' => 
  array (
    0 => 'array<array-key, mixed>',
    'keys' => 'array<array-key, mixed>',
    'val' => 'mixed',
  ),
  'array_filter' => 
  array (
    0 => 'array<array-key, mixed>',
    'arg' => 'array<array-key, mixed>',
    'callback=' => 'callable(mixed, array-key=):mixed',
    'use_keys=' => 'int',
  ),
  'array_flip' => 
  array (
    0 => 'array<array-key, int|string>',
    'arg' => 'array<array-key, int|string>',
  ),
  'array_intersect' => 
  array (
    0 => 'array<array-key, mixed>',
    'arr1' => 'array<array-key, mixed>',
    '...arrays' => 'array<array-key, mixed>',
  ),
  'array_intersect_assoc' => 
  array (
    0 => 'array<array-key, mixed>',
    'arr1' => 'array<array-key, mixed>',
    '...arrays' => 'array<array-key, mixed>',
  ),
  'array_intersect_key' => 
  array (
    0 => 'array<array-key, mixed>',
    'arr1' => 'array<array-key, mixed>',
    '...arrays' => 'array<array-key, mixed>',
  ),
  'array_intersect_uassoc' => 
  array (
    0 => 'array<array-key, mixed>',
    'arr1' => 'array<array-key, mixed>',
    'arr2' => 'array<array-key, mixed>',
    'callback_key_compare_func' => 'callable(mixed, mixed):int',
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
    'arr1' => 'array<array-key, mixed>',
    'arr2' => 'array<array-key, mixed>',
    'callback_key_compare_func' => 'callable(mixed, mixed):int',
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
    'search' => 'array<array-key, mixed>|object',
  ),
  'array_keys' => 
  array (
    0 => 'list<int|string>',
    'arg' => 'array<array-key, mixed>',
    'search_value=' => 'mixed',
    'strict=' => 'bool',
  ),
  'array_map' => 
  array (
    0 => 'array<array-key, mixed>',
    'callback' => 'callable|null',
    '...arrays' => 'array<array-key, mixed>',
  ),
  'array_merge' => 
  array (
    0 => 'array<array-key, mixed>',
    'arr1' => 'array<array-key, mixed>',
    '...arrays' => 'array<array-key, mixed>',
  ),
  'array_merge_recursive' => 
  array (
    0 => 'array<array-key, mixed>',
    'arr1' => 'array<array-key, mixed>',
    '...arrays' => 'array<array-key, mixed>',
  ),
  'array_multisort' => 
  array (
    0 => 'bool',
    '&arr1' => 'array<array-key, mixed>',
    '&sort_order=' => 'array<array-key, mixed>|int',
    '&sort_flags=' => 'array<array-key, mixed>|int',
    '&...arr2=' => 'array<array-key, mixed>|int',
  ),
  'array_pad' => 
  array (
    0 => 'array<array-key, mixed>',
    'arg' => 'array<array-key, mixed>',
    'pad_size' => 'int',
    'pad_value' => 'mixed',
  ),
  'array_pop' => 
  array (
    0 => 'mixed',
    '&stack' => 'array<array-key, mixed>',
  ),
  'array_product' => 
  array (
    0 => 'float|int',
    'arg' => 'array<array-key, mixed>',
  ),
  'array_push' => 
  array (
    0 => 'int',
    '&stack' => 'array<array-key, mixed>',
    '...vars' => 'mixed',
  ),
  'array_rand' => 
  array (
    0 => 'array<int, int|string>|int|string',
    'arg' => 'non-empty-array<array-key, mixed>',
    'num_req=' => 'int',
  ),
  'array_rand\'1' => 
  array (
    0 => 'int|string',
    'array' => 'array<array-key, mixed>',
  ),
  'array_reduce' => 
  array (
    0 => 'mixed',
    'arg' => 'array<array-key, mixed>',
    'callback' => 'callable(mixed, mixed):mixed',
    'initial=' => 'mixed',
  ),
  'array_replace' => 
  array (
    0 => 'array<array-key, mixed>',
    'arr1' => 'array<array-key, mixed>',
    '...arrays' => 'array<array-key, mixed>',
  ),
  'array_replace_recursive' => 
  array (
    0 => 'array<array-key, mixed>',
    'arr1' => 'array<array-key, mixed>',
    '...arrays' => 'array<array-key, mixed>',
  ),
  'array_reverse' => 
  array (
    0 => 'array<array-key, mixed>',
    'input' => 'array<array-key, mixed>',
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
    '&stack' => 'array<array-key, mixed>',
  ),
  'array_slice' => 
  array (
    0 => 'array<array-key, mixed>',
    'arg' => 'array<array-key, mixed>',
    'offset' => 'int',
    'length=' => 'int|null',
    'preserve_keys=' => 'bool',
  ),
  'array_splice' => 
  array (
    0 => 'array<array-key, mixed>',
    '&arg' => 'array<array-key, mixed>',
    'offset' => 'int',
    'length=' => 'int',
    'replacement=' => 'array<array-key, mixed>|string',
  ),
  'array_sum' => 
  array (
    0 => 'float|int',
    'arg' => 'array<array-key, mixed>',
  ),
  'array_udiff' => 
  array (
    0 => 'array<array-key, mixed>',
    'arr1' => 'array<array-key, mixed>',
    'arr2' => 'array<array-key, mixed>',
    'callback_data_comp_func' => 'callable(mixed, mixed):int',
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
    'arr1' => 'array<array-key, mixed>',
    'arr2' => 'array<array-key, mixed>',
    'callback_key_comp_func' => 'callable(mixed, mixed):int',
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
    'arr1' => 'array<array-key, mixed>',
    'arr2' => 'array<array-key, mixed>',
    'callback_data_comp_func' => 'callable(mixed, mixed):int',
    'callback_key_comp_func' => 'callable(mixed, mixed):int',
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
    'arr1' => 'array<array-key, mixed>',
    'arr2' => 'array<array-key, mixed>',
    'callback_data_compare_func' => 'callable(mixed, mixed):int',
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
    'arr1' => 'array<array-key, mixed>',
    'arr2' => 'array<array-key, mixed>',
    'callback_data_compare_func' => 'callable(mixed, mixed):int',
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
    'arr1' => 'array<array-key, mixed>',
    'arr2' => 'array<array-key, mixed>',
    'callback_data_compare_func' => 'callable(mixed, mixed):int',
    'callback_key_compare_func' => 'callable(mixed, mixed):int',
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
    'arg' => 'array<array-key, mixed>',
    'flags=' => 'int',
  ),
  'array_unshift' => 
  array (
    0 => 'int',
    '&stack' => 'array<array-key, mixed>',
    '...vars' => 'mixed',
  ),
  'array_values' => 
  array (
    0 => 'list<mixed>',
    'arg' => 'array<array-key, mixed>',
  ),
  'array_walk' => 
  array (
    0 => 'bool',
    '&input' => 'array<array-key, mixed>',
    'funcname' => 'callable',
    'userdata=' => 'mixed',
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
    0 => 'bool',
    '&input' => 'array<array-key, mixed>',
    'funcname' => 'callable',
    'userdata=' => 'mixed',
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
    'ar_flags=' => 'int',
    'iterator_class=' => 'mixed',
  ),
  'arrayiterator::append' => 
  array (
    0 => 'void',
    'value' => 'mixed',
  ),
  'arrayiterator::asort' => 
  array (
    0 => 'true',
  ),
  'arrayiterator::count' => 
  array (
    0 => 'int',
  ),
  'arrayiterator::current' => 
  array (
    0 => 'mixed',
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
    'index' => 'int|string',
  ),
  'arrayiterator::offsetget' => 
  array (
    0 => 'mixed',
    'index' => 'int|string',
  ),
  'arrayiterator::offsetset' => 
  array (
    0 => 'void',
    'index' => 'int|null|string',
    'newval' => 'mixed',
  ),
  'arrayiterator::offsetunset' => 
  array (
    0 => 'void',
    'index' => 'int|string',
  ),
  'arrayiterator::rewind' => 
  array (
    0 => 'void',
  ),
  'arrayiterator::seek' => 
  array (
    0 => 'void',
    'position' => 'int',
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
    'cmp_function' => 'callable(mixed, mixed):int',
  ),
  'arrayiterator::uksort' => 
  array (
    0 => 'true',
    'cmp_function' => 'callable(mixed, mixed):int',
  ),
  'arrayiterator::unserialize' => 
  array (
    0 => 'void',
    'serialized' => 'string',
  ),
  'arrayiterator::valid' => 
  array (
    0 => 'bool',
  ),
  'arrayobject::__construct' => 
  array (
    0 => 'void',
    'array=' => 'array<array-key, mixed>|object',
    'ar_flags=' => 'int',
    'iterator_class=' => 'class-string',
  ),
  'arrayobject::append' => 
  array (
    0 => 'void',
    'value' => 'mixed',
  ),
  'arrayobject::asort' => 
  array (
    0 => 'true',
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
    'index' => 'int|string',
  ),
  'arrayobject::offsetget' => 
  array (
    0 => 'mixed|null',
    'index' => 'int|string',
  ),
  'arrayobject::offsetset' => 
  array (
    0 => 'void',
    'index' => 'int|null|string',
    'newval' => 'mixed',
  ),
  'arrayobject::offsetunset' => 
  array (
    0 => 'void',
    'index' => 'int|string',
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
    'cmp_function' => 'callable(mixed, mixed):int',
  ),
  'arrayobject::uksort' => 
  array (
    0 => 'true',
    'cmp_function' => 'callable(mixed, mixed):int',
  ),
  'arrayobject::unserialize' => 
  array (
    0 => 'void',
    'serialized' => 'string',
  ),
  'arsort' => 
  array (
    0 => 'true',
    '&arg' => 'array<array-key, mixed>',
    'sort_flags=' => 'int',
  ),
  'asin' => 
  array (
    0 => 'float',
    'number' => 'float',
  ),
  'asinh' => 
  array (
    0 => 'float',
    'number' => 'float',
  ),
  'asort' => 
  array (
    0 => 'true',
    '&arg' => 'array<array-key, mixed>',
    'sort_flags=' => 'int',
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
    'what' => 'int',
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
    'number' => 'float',
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
    'number' => 'float',
  ),
  'badfunctioncallexception::__clone' => 
  array (
    0 => 'void',
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
  'badfunctioncallexception::__wakeup' => 
  array (
    0 => 'mixed',
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
  'badmethodcallexception::__clone' => 
  array (
    0 => 'void',
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
  'badmethodcallexception::__wakeup' => 
  array (
    0 => 'mixed',
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
    'str' => 'string',
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
    'str' => 'string',
  ),
  'base_convert' => 
  array (
    0 => 'string',
    'number' => 'string',
    'frombase' => 'int',
    'tobase' => 'int',
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
    'left_operand' => 'numeric-string',
    'right_operand' => 'numeric-string',
    'scale=' => 'int',
  ),
  'bccomp' => 
  array (
    0 => 'int',
    'left_operand' => 'numeric-string',
    'right_operand' => 'numeric-string',
    'scale=' => 'int',
  ),
  'bcdiv' => 
  array (
    0 => 'numeric-string',
    'left_operand' => 'numeric-string',
    'right_operand' => 'numeric-string',
    'scale=' => 'int',
  ),
  'bcmod' => 
  array (
    0 => 'numeric-string',
    'left_operand' => 'numeric-string',
    'right_operand' => 'numeric-string',
  ),
  'bcmul' => 
  array (
    0 => 'numeric-string',
    'left_operand' => 'numeric-string',
    'right_operand' => 'numeric-string',
    'scale=' => 'int',
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
    'x' => 'numeric-string',
    'y' => 'numeric-string',
    'scale=' => 'int',
  ),
  'bcpowmod' => 
  array (
    0 => 'false|numeric-string',
    'x' => 'numeric-string',
    'y' => 'numeric-string',
    'mod' => 'numeric-string',
    'scale=' => 'int',
  ),
  'bcscale' => 
  array (
    0 => 'int',
    'scale' => 'int',
  ),
  'bcsqrt' => 
  array (
    0 => 'numeric-string',
    'operand' => 'numeric-string',
    'scale=' => 'int',
  ),
  'bcsub' => 
  array (
    0 => 'numeric-string',
    'left_operand' => 'numeric-string',
    'right_operand' => 'numeric-string',
    'scale=' => 'int',
  ),
  'bin2hex' => 
  array (
    0 => 'string',
    'data' => 'string',
  ),
  'bind_textdomain_codeset' => 
  array (
    0 => 'string',
    'domain' => 'string',
    'codeset' => 'string',
  ),
  'bindec' => 
  array (
    0 => 'float|int',
    'binary_number' => 'string',
  ),
  'bindtextdomain' => 
  array (
    0 => 'string',
    'domain' => 'string',
    'directory' => 'string',
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
    'var' => 'mixed',
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
    'use_less_memory=' => 'int',
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
    'length=' => 'int',
  ),
  'cachingiterator::__construct' => 
  array (
    0 => 'void',
    'iterator' => 'Iterator',
    'flags=' => 'mixed',
  ),
  'cachingiterator::__tostring' => 
  array (
    0 => 'string',
  ),
  'cachingiterator::count' => 
  array (
    0 => 'int',
  ),
  'cachingiterator::current' => 
  array (
    0 => 'mixed',
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
    0 => 'Iterator',
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
    'index' => 'string',
  ),
  'cachingiterator::offsetget' => 
  array (
    0 => 'mixed',
    'index' => 'string',
  ),
  'cachingiterator::offsetset' => 
  array (
    0 => 'void',
    'index' => 'string',
    'newval' => 'mixed',
  ),
  'cachingiterator::offsetunset' => 
  array (
    0 => 'void',
    'index' => 'string',
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
    'function_name' => 'callable',
    '...parameters=' => 'mixed',
  ),
  'call_user_func_array' => 
  array (
    0 => 'false|mixed',
    'function_name' => 'callable',
    'parameters' => 'list<mixed>',
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
  'callbackfilteriterator::current' => 
  array (
    0 => 'mixed',
  ),
  'callbackfilteriterator::getinneriterator' => 
  array (
    0 => 'Iterator',
  ),
  'callbackfilteriterator::key' => 
  array (
    0 => 'mixed',
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
    'number' => 'float|int',
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
    'host' => 'string',
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
    'mode' => 'int',
  ),
  'chop' => 
  array (
    0 => 'string',
    'str' => 'string',
    'character_mask=' => 'string',
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
  'chunk_split' => 
  array (
    0 => 'string',
    'str' => 'string',
    'chunklen=' => 'int',
    'ending=' => 'string',
  ),
  'class_alias' => 
  array (
    0 => 'bool',
    'user_class_name' => 'string',
    'alias_name' => 'string',
    'autoload=' => 'bool',
  ),
  'class_exists' => 
  array (
    0 => 'bool',
    'classname' => 'string',
    'autoload=' => 'bool',
  ),
  'class_implements' => 
  array (
    0 => 'array<interface-string, interface-string>|false',
    'what' => 'object|string',
    'autoload=' => 'bool',
  ),
  'class_parents' => 
  array (
    0 => 'array<class-string, class-string>|false',
    'instance' => 'object|string',
    'autoload=' => 'bool',
  ),
  'class_uses' => 
  array (
    0 => 'array<trait-string, trait-string>|false',
    'what' => 'object|string',
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
  'closedgeneratorexception::__clone' => 
  array (
    0 => 'void',
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
    0 => 'string',
  ),
  'closedgeneratorexception::__wakeup' => 
  array (
    0 => 'mixed',
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
    0 => 'Closure|null',
    'closure' => 'Closure',
    'newthis' => 'null|object',
    'newscope=' => 'null|object|string',
  ),
  'closure::bindto' => 
  array (
    0 => 'Closure|null',
    'newthis' => 'null|object',
    'newscope=' => 'null|object|string',
  ),
  'closure::call' => 
  array (
    0 => 'mixed',
    'newthis' => 'object',
    '...parameters=' => 'mixed',
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
  'co::gethostbyname' => 
  array (
    0 => 'mixed',
    'domain_name' => 'mixed',
    'family=' => 'mixed',
    'timeout=' => 'mixed',
  ),
  'co::getpcid' => 
  array (
    0 => 'mixed',
  ),
  'co::getuid' => 
  array (
    0 => 'mixed',
  ),
  'co::list' => 
  array (
    0 => 'mixed',
  ),
  'co::listcoroutines' => 
  array (
    0 => 'mixed',
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
  'co\\context::__construct' => 
  array (
    0 => 'void',
    'array=' => 'mixed',
    'ar_flags=' => 'mixed',
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
  'co\\http2\\client::__construct' => 
  array (
    0 => 'void',
    'host' => 'mixed',
    'port=' => 'mixed',
    'ssl=' => 'mixed',
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
  'co\\http\\client::getdefer' => 
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
    'finish=' => 'mixed',
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
  'co\\iterator::__construct' => 
  array (
    0 => 'void',
    'array=' => 'mixed',
    'ar_flags=' => 'mixed',
    'iterator_class=' => 'mixed',
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
    'server_config' => 'array<array-key, mixed>',
  ),
  'co\\mysql::escape' => 
  array (
    0 => 'mixed',
    'string' => 'mixed',
    'flags=' => 'mixed',
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
    'statement' => 'mixed',
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
  'co\\mysql\\statement::__destruct' => 
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
  ),
  'co\\mysql\\statement::fetchall' => 
  array (
    0 => 'mixed',
  ),
  'co\\mysql\\statement::nextresult' => 
  array (
    0 => 'mixed',
  ),
  'co\\postgresql::__construct' => 
  array (
    0 => 'void',
  ),
  'co\\postgresql::__destruct' => 
  array (
    0 => 'mixed',
  ),
  'co\\postgresql::affectedrows' => 
  array (
    0 => 'mixed',
    'result=' => 'mixed',
  ),
  'co\\postgresql::connect' => 
  array (
    0 => 'mixed',
    'conninfo' => 'mixed',
  ),
  'co\\postgresql::execute' => 
  array (
    0 => 'mixed',
    'stmtname' => 'mixed',
    'pv_param_arr' => 'mixed',
  ),
  'co\\postgresql::fetchall' => 
  array (
    0 => 'mixed',
    'result=' => 'mixed',
    'result_type=' => 'mixed',
  ),
  'co\\postgresql::fetcharray' => 
  array (
    0 => 'mixed',
    'result' => 'mixed',
    'row=' => 'mixed',
    'result_type=' => 'mixed',
  ),
  'co\\postgresql::fetchassoc' => 
  array (
    0 => 'mixed',
    'result' => 'mixed',
    'row=' => 'mixed',
  ),
  'co\\postgresql::fetchobject' => 
  array (
    0 => 'mixed',
    'result' => 'mixed',
    'row=' => 'mixed',
    'class_name=' => 'mixed',
    'l=' => 'mixed',
    'ctor_params=' => 'mixed',
  ),
  'co\\postgresql::fetchrow' => 
  array (
    0 => 'mixed',
    'result' => 'mixed',
    'row=' => 'mixed',
    'result_type=' => 'mixed',
  ),
  'co\\postgresql::metadata' => 
  array (
    0 => 'mixed',
    'table_name' => 'mixed',
  ),
  'co\\postgresql::numrows' => 
  array (
    0 => 'mixed',
    'result=' => 'mixed',
  ),
  'co\\postgresql::prepare' => 
  array (
    0 => 'mixed',
    'stmtname' => 'mixed',
    'query' => 'mixed',
  ),
  'co\\postgresql::query' => 
  array (
    0 => 'mixed',
    'query=' => 'mixed',
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
  'co\\socket::listen' => 
  array (
    0 => 'mixed',
    'backlog=' => 'mixed',
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
  'co\\socket::shutdown' => 
  array (
    0 => 'mixed',
    'how' => 'mixed',
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
  'collator::__construct' => 
  array (
    0 => 'void',
    'arg1' => 'string',
  ),
  'collator::asort' => 
  array (
    0 => 'bool',
    '&arr' => 'array<array-key, mixed>',
    'flags=' => 'int',
  ),
  'collator::compare' => 
  array (
    0 => 'false|int',
    'arg1' => 'string',
    'arg2' => 'string',
  ),
  'collator::create' => 
  array (
    0 => 'Collator|null',
    'arg1' => 'string',
  ),
  'collator::getattribute' => 
  array (
    0 => 'false|int',
    'arg1' => 'int',
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
    'arg1' => 'int',
  ),
  'collator::getsortkey' => 
  array (
    0 => 'false|string',
    'arg1' => 'string',
  ),
  'collator::getstrength' => 
  array (
    0 => 'false|int',
  ),
  'collator::setattribute' => 
  array (
    0 => 'bool',
    'arg1' => 'int',
    'arg2' => 'int',
  ),
  'collator::setstrength' => 
  array (
    0 => 'bool',
    'arg1' => 'int',
  ),
  'collator::sort' => 
  array (
    0 => 'bool',
    '&arr' => 'array<array-key, mixed>',
    'flags=' => 'int',
  ),
  'collator::sortwithsortkeys' => 
  array (
    0 => 'bool',
    '&arr' => 'array<array-key, mixed>',
  ),
  'collator_asort' => 
  array (
    0 => 'bool',
    'object' => 'collator',
    '&arr' => 'array<array-key, mixed>',
    'sort_flags=' => 'int',
  ),
  'collator_compare' => 
  array (
    0 => 'int',
    'object' => 'collator',
    'arg1' => 'string',
    'arg2' => 'string',
  ),
  'collator_create' => 
  array (
    0 => 'Collator|null',
    'arg1' => 'string',
  ),
  'collator_get_attribute' => 
  array (
    0 => 'false|int',
    'object' => 'collator',
    'arg1' => 'int',
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
    'arg1' => 'int',
  ),
  'collator_get_sort_key' => 
  array (
    0 => 'string',
    'object' => 'collator',
    'arg1' => 'string',
  ),
  'collator_get_strength' => 
  array (
    0 => 'false|int',
    'object' => 'collator',
  ),
  'collator_set_attribute' => 
  array (
    0 => 'bool',
    'object' => 'collator',
    'arg1' => 'int',
    'arg2' => 'int',
  ),
  'collator_set_strength' => 
  array (
    0 => 'bool',
    'object' => 'collator',
    'arg1' => 'int',
  ),
  'collator_sort' => 
  array (
    0 => 'bool',
    'object' => 'collator',
    '&arr' => 'array<array-key, mixed>',
    'sort_flags=' => 'int',
  ),
  'collator_sort_with_sort_keys' => 
  array (
    0 => 'bool',
    'coll' => 'collator',
    '&arr' => 'array<array-key, mixed>',
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
    'case_insensitive=' => 'bool',
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
    '...var_names' => 'array<array-key, mixed>|string',
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
    'const_name' => 'string',
  ),
  'convert_cyr_string' => 
  array (
    0 => 'string',
    'str' => 'string',
    'from' => 'string',
    'to' => 'string',
  ),
  'convert_uudecode' => 
  array (
    0 => 'string',
    'data' => 'string',
  ),
  'convert_uuencode' => 
  array (
    0 => 'string',
    'data' => 'string',
  ),
  'copy' => 
  array (
    0 => 'bool',
    'source_file' => 'string',
    'destination_file' => 'string',
    'context=' => 'resource',
  ),
  'cos' => 
  array (
    0 => 'float',
    'number' => 'float',
  ),
  'cosh' => 
  array (
    0 => 'float',
    'number' => 'float',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
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
  'couchbase\\analyticsquery::__construct' => 
  array (
    0 => 'void',
  ),
  'couchbase\\analyticsquery::fromstring' => 
  array (
    0 => 'Couchbase\\AnalyticsQuery',
    'statement' => 'string',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
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
    0 => 'array<array-key, mixed>',
  ),
  'couchbase\\booleansearchquery::__construct' => 
  array (
    0 => 'void',
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
  'couchbase\\bucket::collections' => 
  array (
    0 => 'Couchbase\\CollectionManager',
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
  'couchbase\\bucket::defaultcollection' => 
  array (
    0 => 'Couchbase\\Collection',
  ),
  'couchbase\\bucket::defaultscope' => 
  array (
    0 => 'Couchbase\\Scope',
  ),
  'couchbase\\bucket::diag' => 
  array (
    0 => 'array<array-key, mixed>',
    'reportId=' => 'string',
  ),
  'couchbase\\bucket::diagnostics' => 
  array (
    0 => 'mixed',
    'reportId' => 'mixed',
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
  'couchbase\\bucket::name' => 
  array (
    0 => 'string',
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
  'couchbase\\bucket::scope' => 
  array (
    0 => 'Couchbase\\Scope',
    'name' => 'string',
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
  'couchbase\\bucket::settranscoder' => 
  array (
    0 => 'mixed',
    'encoder' => 'callable',
    'decoder' => 'callable',
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
  'couchbase\\bucketmanager::__construct' => 
  array (
    0 => 'void',
  ),
  'couchbase\\bucketmanager::createbucket' => 
  array (
    0 => 'mixed',
    'settings' => 'Couchbase\\BucketSettings',
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
  'couchbase\\bucketmanager::removebucket' => 
  array (
    0 => 'mixed',
    'name' => 'string',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
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
  'couchbase\\cluster::bucket' => 
  array (
    0 => 'Couchbase\\Bucket',
    'name' => 'string',
  ),
  'couchbase\\cluster::buckets' => 
  array (
    0 => 'Couchbase\\BucketManager',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
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
    'boost' => 'float',
  ),
  'couchbase\\conjunctionsearchquery::every' => 
  array (
    0 => 'Couchbase\\ConjunctionSearchQuery',
    '...queries=' => 'Couchbase\\SearchQuery',
  ),
  'couchbase\\conjunctionsearchquery::jsonserialize' => 
  array (
    0 => 'array<array-key, mixed>',
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
    'start=' => 'int|string',
    'end=' => 'int|string',
  ),
  'couchbase\\daterangesearchfacet::jsonserialize' => 
  array (
    0 => 'array<array-key, mixed>',
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
    'end' => 'int|string',
    'inclusive=' => 'bool',
  ),
  'couchbase\\daterangesearchquery::field' => 
  array (
    0 => 'Couchbase\\DateRangeSearchQuery',
    'field' => 'string',
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
    0 => 'array<array-key, mixed>',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
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
    0 => 'array<array-key, mixed>',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
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
    0 => 'array<array-key, mixed>',
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
    0 => 'array<array-key, mixed>',
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
    0 => 'string',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
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
    0 => 'array<array-key, mixed>',
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
    0 => 'array<array-key, mixed>',
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
    0 => 'array<array-key, mixed>',
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
    0 => 'array<array-key, mixed>',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
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
    0 => 'array<array-key, mixed>',
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
    'field' => 'string',
  ),
  'couchbase\\numericrangesearchquery::jsonserialize' => 
  array (
    0 => 'array<array-key, mixed>',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
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
    0 => 'array<array-key, mixed>',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
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
    0 => 'array<array-key, mixed>',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
  ),
  'couchbase\\queryindex::condition' => 
  array (
    0 => 'string',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
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
    0 => 'array<array-key, mixed>',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
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
    0 => 'array<array-key, mixed>',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
  ),
  'couchbase\\role::bucket' => 
  array (
    0 => 'string',
  ),
  'couchbase\\role::collection' => 
  array (
    0 => 'string',
  ),
  'couchbase\\role::name' => 
  array (
    0 => 'string',
  ),
  'couchbase\\role::scope' => 
  array (
    0 => 'string',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
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
  'couchbase\\searchsortfield::score' => 
  array (
    0 => 'Couchbase\\SearchSortScore',
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
  'couchbase\\searchsortgeodistance::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\searchsortgeodistance::score' => 
  array (
    0 => 'Couchbase\\SearchSortScore',
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
  'couchbase\\searchsortid::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\searchsortid::score' => 
  array (
    0 => 'Couchbase\\SearchSortScore',
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
  'couchbase\\searchsortscore::jsonserialize' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\searchsortscore::score' => 
  array (
    0 => 'Couchbase\\SearchSortScore',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
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
    0 => 'array<array-key, mixed>',
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
    0 => 'array<array-key, mixed>',
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
    0 => 'array<array-key, mixed>',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
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
    0 => 'Couchbase\\object',
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
    0 => 'string',
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
  'couchbase\\viewrow::document' => 
  array (
    0 => 'mixed',
  ),
  'couchbase\\viewrow::id' => 
  array (
    0 => 'string',
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
    'var' => 'Countable|SimpleXMLElement|array<array-key, mixed>',
    'mode=' => 'int',
  ),
  'count_chars' => 
  array (
    0 => 'array<int, int>|false',
    'input' => 'string',
    'mode=' => '0|1|2',
  ),
  'count_chars\'1' => 
  array (
    0 => 'false|string',
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
    'str' => 'string',
  ),
  'create_function' => 
  array (
    0 => 'string',
    'args' => 'string',
    'code' => 'string',
  ),
  'crypt' => 
  array (
    0 => 'string',
    'str' => 'string',
    'salt=' => 'string',
  ),
  'ctype_alnum' => 
  array (
    0 => 'bool',
    'text' => 'int|string',
  ),
  'ctype_alpha' => 
  array (
    0 => 'bool',
    'text' => 'int|string',
  ),
  'ctype_cntrl' => 
  array (
    0 => 'bool',
    'text' => 'int|string',
  ),
  'ctype_digit' => 
  array (
    0 => 'bool',
    'text' => 'int|string',
  ),
  'ctype_graph' => 
  array (
    0 => 'bool',
    'text' => 'int|string',
  ),
  'ctype_lower' => 
  array (
    0 => 'bool',
    'text' => 'int|string',
  ),
  'ctype_print' => 
  array (
    0 => 'bool',
    'text' => 'int|string',
  ),
  'ctype_punct' => 
  array (
    0 => 'bool',
    'text' => 'int|string',
  ),
  'ctype_space' => 
  array (
    0 => 'bool',
    'text' => 'int|string',
  ),
  'ctype_upper' => 
  array (
    0 => 'bool',
    'text' => 'int|string',
  ),
  'ctype_xdigit' => 
  array (
    0 => 'bool',
    'text' => 'int|string',
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
    'ch' => 'resource',
  ),
  'curl_copy_handle' => 
  array (
    0 => 'false|resource',
    'ch' => 'resource',
  ),
  'curl_errno' => 
  array (
    0 => 'int',
    'ch' => 'resource',
  ),
  'curl_error' => 
  array (
    0 => 'string',
    'ch' => 'resource',
  ),
  'curl_escape' => 
  array (
    0 => 'false|string',
    'ch' => 'resource',
    'str' => 'string',
  ),
  'curl_exec' => 
  array (
    0 => 'bool|string',
    'ch' => 'resource',
  ),
  'curl_file_create' => 
  array (
    0 => 'CURLFile',
    'filename' => 'string',
    'mimetype=' => 'string',
    'postname=' => 'string',
  ),
  'curl_getinfo' => 
  array (
    0 => 'mixed',
    'ch' => 'resource',
    'option=' => 'int',
  ),
  'curl_init' => 
  array (
    0 => 'false|resource',
    'url=' => 'string',
  ),
  'curl_multi_add_handle' => 
  array (
    0 => 'int',
    'mh' => 'resource',
    'ch' => 'resource',
  ),
  'curl_multi_close' => 
  array (
    0 => 'void',
    'mh' => 'resource',
  ),
  'curl_multi_exec' => 
  array (
    0 => 'int',
    'mh' => 'resource',
    '&w_still_running=' => 'int',
  ),
  'curl_multi_getcontent' => 
  array (
    0 => 'string',
    'ch' => 'resource',
  ),
  'curl_multi_info_read' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'mh' => 'resource',
    '&w_msgs_in_queue=' => 'int',
  ),
  'curl_multi_init' => 
  array (
    0 => 'resource',
  ),
  'curl_multi_remove_handle' => 
  array (
    0 => 'int',
    'mh' => 'resource',
    'ch' => 'resource',
  ),
  'curl_multi_select' => 
  array (
    0 => 'int',
    'mh' => 'resource',
    'timeout=' => 'float',
  ),
  'curl_multi_setopt' => 
  array (
    0 => 'bool',
    'sh' => 'resource',
    'option' => 'int',
    'value' => 'mixed',
  ),
  'curl_multi_strerror' => 
  array (
    0 => 'null|string',
    'errornum' => 'int',
  ),
  'curl_pause' => 
  array (
    0 => 'int',
    'ch' => 'resource',
    'bitmask' => 'int',
  ),
  'curl_reset' => 
  array (
    0 => 'void',
    'ch' => 'resource',
  ),
  'curl_setopt' => 
  array (
    0 => 'bool',
    'ch' => 'resource',
    'option' => 'int',
    'value' => 'callable|mixed',
  ),
  'curl_setopt_array' => 
  array (
    0 => 'bool',
    'ch' => 'resource',
    'options' => 'array<array-key, mixed>',
  ),
  'curl_share_close' => 
  array (
    0 => 'void',
    'sh' => 'resource',
  ),
  'curl_share_init' => 
  array (
    0 => 'resource',
  ),
  'curl_share_setopt' => 
  array (
    0 => 'bool',
    'sh' => 'resource',
    'option' => 'int',
    'value' => 'mixed',
  ),
  'curl_strerror' => 
  array (
    0 => 'null|string',
    'errornum' => 'int',
  ),
  'curl_unescape' => 
  array (
    0 => 'false|string',
    'ch' => 'resource',
    'str' => 'string',
  ),
  'curl_version' => 
  array (
    0 => 'array<array-key, mixed>',
    'version=' => 'int',
  ),
  'curlfile::__construct' => 
  array (
    0 => 'void',
    'filename' => 'string',
    'mimetype=' => 'string',
    'postname=' => 'string',
  ),
  'curlfile::__wakeup' => 
  array (
    0 => 'mixed',
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
    'name' => 'string',
  ),
  'curlfile::setpostfilename' => 
  array (
    0 => 'void',
    'name' => 'string',
  ),
  'current' => 
  array (
    0 => 'false|mixed',
    'arg' => 'array<array-key, mixed>|object',
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
    'timestamp=' => 'int',
  ),
  'date_add' => 
  array (
    0 => 'DateTime|false',
    'object' => 'DateTime',
    'interval' => 'DateInterval',
  ),
  'date_create' => 
  array (
    0 => 'DateTime|false',
    'time=' => 'string',
    'object=' => 'DateTimeZone|null',
  ),
  'date_create_from_format' => 
  array (
    0 => 'DateTime|false',
    'format' => 'string',
    'time' => 'string',
    'object=' => 'DateTimeZone|null',
  ),
  'date_create_immutable' => 
  array (
    0 => 'DateTimeImmutable|false',
    'time=' => 'string',
    'object=' => 'DateTimeZone|null',
  ),
  'date_create_immutable_from_format' => 
  array (
    0 => 'DateTimeImmutable|false',
    'format' => 'string',
    'time' => 'string',
    'object=' => 'DateTimeZone|null',
  ),
  'date_date_set' => 
  array (
    0 => 'DateTime|false',
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
    'timezone_identifier' => 'non-empty-string',
  ),
  'date_diff' => 
  array (
    0 => 'DateInterval|false',
    'object' => 'DateTimeInterface',
    'object2' => 'DateTimeInterface',
    'absolute=' => 'bool',
  ),
  'date_format' => 
  array (
    0 => 'false|string',
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
    'time' => 'string',
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
    'day=' => 'int',
  ),
  'date_modify' => 
  array (
    0 => 'DateTime|false',
    'object' => 'DateTime',
    'modify' => 'string',
  ),
  'date_offset_get' => 
  array (
    0 => 'false|int',
    'object' => 'DateTimeInterface',
  ),
  'date_parse' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'date' => 'string',
  ),
  'date_parse_from_format' => 
  array (
    0 => 'array<array-key, mixed>',
    'format' => 'string',
    'date' => 'string',
  ),
  'date_sub' => 
  array (
    0 => 'DateTime|false',
    'object' => 'DateTime',
    'interval' => 'DateInterval',
  ),
  'date_sun_info' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'time' => 'int',
    'latitude' => 'float',
    'longitude' => 'float',
  ),
  'date_sunrise' => 
  array (
    0 => 'false|float|int|string',
    'time' => 'int',
    'format=' => 'int',
    'latitude=' => 'float',
    'longitude=' => 'float',
    'zenith=' => 'float',
    'gmt_offset=' => 'float',
  ),
  'date_sunset' => 
  array (
    0 => 'false|float|int|string',
    'time' => 'int',
    'format=' => 'int',
    'latitude=' => 'float',
    'longitude=' => 'float',
    'zenith=' => 'float',
    'gmt_offset=' => 'float',
  ),
  'date_time_set' => 
  array (
    0 => 'int',
    'object' => 'int',
    'hour' => 'int',
    'minute' => 'int',
    'second=' => 'int',
  ),
  'date_timestamp_get' => 
  array (
    0 => 'int',
    'object' => 'DateTimeInterface',
  ),
  'date_timestamp_set' => 
  array (
    0 => 'DateTime|false',
    'object' => 'DateTime',
    'unixtimestamp' => 'int',
  ),
  'date_timezone_get' => 
  array (
    0 => 'DateTimeZone|false',
    'object' => 'DateTimeInterface',
  ),
  'date_timezone_set' => 
  array (
    0 => 'DateTime|false',
    'object' => 'DateTime',
    'timezone' => 'DateTimeZone',
  ),
  'datefmt_create' => 
  array (
    0 => 'IntlDateFormatter|null',
    'locale' => 'null|string',
    'date_type' => 'int',
    'time_type' => 'int',
    'timezone_str=' => 'DateTimeZone|IntlTimeZone|null|string',
    'calendar=' => 'IntlCalendar|int|null',
    'pattern=' => 'string',
  ),
  'datefmt_format' => 
  array (
    0 => 'false|string',
    'args=' => 'IntlDateFormatter',
    'array=' => 'DateTime|IntlCalendar|array<array-key, mixed>|int',
  ),
  'datefmt_format_object' => 
  array (
    0 => 'false|string',
    'object' => 'object',
    'format=' => 'mixed',
    'locale=' => 'null|string',
  ),
  'datefmt_get_calendar' => 
  array (
    0 => 'int',
    'mf' => 'IntlDateFormatter',
  ),
  'datefmt_get_calendar_object' => 
  array (
    0 => 'IntlCalendar|false|null',
    'mf' => 'IntlDateFormatter',
  ),
  'datefmt_get_datetype' => 
  array (
    0 => 'int',
    'mf' => 'IntlDateFormatter',
  ),
  'datefmt_get_error_code' => 
  array (
    0 => 'int',
    'nf' => 'IntlDateFormatter',
  ),
  'datefmt_get_error_message' => 
  array (
    0 => 'string',
    'coll' => 'IntlDateFormatter',
  ),
  'datefmt_get_locale' => 
  array (
    0 => 'false|string',
    'mf' => 'IntlDateFormatter',
  ),
  'datefmt_get_pattern' => 
  array (
    0 => 'string',
    'mf' => 'IntlDateFormatter',
  ),
  'datefmt_get_timetype' => 
  array (
    0 => 'int',
    'mf' => 'IntlDateFormatter',
  ),
  'datefmt_get_timezone' => 
  array (
    0 => 'IntlTimeZone|false',
    'mf' => 'IntlDateFormatter',
  ),
  'datefmt_get_timezone_id' => 
  array (
    0 => 'false|string',
    'mf' => 'IntlDateFormatter',
  ),
  'datefmt_is_lenient' => 
  array (
    0 => 'bool',
    'mf' => 'IntlDateFormatter',
  ),
  'datefmt_localtime' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'formatter' => 'IntlDateFormatter',
    'string' => 'string',
    '&position=' => 'int',
  ),
  'datefmt_parse' => 
  array (
    0 => 'false|float|int',
    'formatter' => 'IntlDateFormatter',
    'string' => 'string',
    '&position=' => 'int',
  ),
  'datefmt_set_calendar' => 
  array (
    0 => 'bool',
    'mf' => 'IntlDateFormatter',
    'calendar' => 'IntlCalendar|int|null',
  ),
  'datefmt_set_lenient' => 
  array (
    0 => 'void',
    'mf' => 'IntlDateFormatter',
  ),
  'datefmt_set_pattern' => 
  array (
    0 => 'bool',
    'mf' => 'IntlDateFormatter',
    'pattern' => 'string',
  ),
  'datefmt_set_timezone' => 
  array (
    0 => 'false|null',
    'mf' => 'IntlDateFormatter',
    'timezone' => 'DateTimeZone|IntlTimeZone|null|string',
  ),
  'dateinterval::__construct' => 
  array (
    0 => 'void',
    'interval_spec' => 'string',
  ),
  'dateinterval::__set_state' => 
  array (
    0 => 'DateInterval',
  ),
  'dateinterval::__wakeup' => 
  array (
    0 => 'void',
  ),
  'dateinterval::createfromdatestring' => 
  array (
    0 => 'DateInterval|false',
    'time' => 'string',
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
    'interval' => 'DateInterval',
    'end' => 'int',
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
  'dateperiod::__set_state' => 
  array (
    0 => 'mixed',
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
    'time=' => 'string',
    'object=' => 'mixed',
  ),
  'datetime::__construct\'1' => 
  array (
    0 => 'void',
    'time' => 'null|string',
    'timezone' => 'DateTimeZone|null',
  ),
  'datetime::__set_state' => 
  array (
    0 => 'mixed',
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
    'time' => 'string',
    'object=' => 'DateTimeZone|null',
  ),
  'datetime::diff' => 
  array (
    0 => 'DateInterval',
    'object' => 'DateTimeInterface',
    'absolute=' => 'bool',
  ),
  'datetime::format' => 
  array (
    0 => 'false|string',
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
    0 => 'false|int',
  ),
  'datetime::gettimezone' => 
  array (
    0 => 'DateTimeZone|false',
  ),
  'datetime::modify' => 
  array (
    0 => 'false|static',
    'modify' => 'string',
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
    'day=' => 'int',
  ),
  'datetime::settime' => 
  array (
    0 => 'static',
    'hour' => 'int',
    'minute' => 'int',
    'second=' => 'int',
  ),
  'datetime::settimestamp' => 
  array (
    0 => 'static',
    'unixtimestamp' => 'int',
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
  'datetimeimmutable::__construct' => 
  array (
    0 => 'void',
    'time=' => 'mixed',
    'object=' => 'mixed',
  ),
  'datetimeimmutable::__set_state' => 
  array (
    0 => 'mixed',
  ),
  'datetimeimmutable::__wakeup' => 
  array (
    0 => 'void',
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
    'object=' => 'mixed',
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
    0 => 'array{error_count: int, errors: array<int, string>, warning_count: int, warnings: array<int, string>}|false',
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
    0 => 'false|int',
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
    0 => 'false|int',
    'object' => 'DateTimeInterface',
  ),
  'datetimezone::gettransitions' => 
  array (
    0 => 'false|list<array{abbr: string, isdst: bool, offset: int, time: string, ts: int}>',
    'timestamp_begin=' => 'int',
    'timestamp_end=' => 'int',
  ),
  'datetimezone::listabbreviations' => 
  array (
    0 => 'array<string, list<array{dst: bool, offset: int, timezone_id: null|string}>>',
  ),
  'datetimezone::listidentifiers' => 
  array (
    0 => 'false|list<string>',
    'what=' => 'int',
    'country=' => 'string',
  ),
  'db2_autocommit' => 
  array (
    0 => '0|1|bool',
    'connection' => 'resource',
    'value=' => '0|1',
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
    'resource' => 'resource',
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
    'handler=' => 'string',
    '...handler_params=' => 'string',
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
    'handler=' => 'string',
    '...handler_params=' => 'string',
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
  'debug_zval_dump' => 
  array (
    0 => 'void',
    'value' => 'mixed',
    '...values=' => 'mixed',
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
    'decimal_number' => 'int',
  ),
  'dechex' => 
  array (
    0 => 'string',
    'decimal_number' => 'int',
  ),
  'decoct' => 
  array (
    0 => 'string',
    'decimal_number' => 'int',
  ),
  'defer' => 
  array (
    0 => 'mixed',
    'callback' => 'callable',
  ),
  'define' => 
  array (
    0 => 'bool',
    'constant_name' => 'string',
    'value' => 'array<array-key, mixed>|null|scalar',
    'case_insensitive=' => 'bool',
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
    'resource' => 'resource',
    'add' => 'string',
    'flush_behavior=' => 'int',
  ),
  'deflate_init' => 
  array (
    0 => 'false|resource',
    'encoding' => 'int',
    'level=' => 'array<array-key, mixed>',
  ),
  'deg2rad' => 
  array (
    0 => 'float',
    'number' => 'float',
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
    'dir_handle=' => 'resource',
  ),
  'directory::read' => 
  array (
    0 => 'false|string',
    'dir_handle=' => 'resource',
  ),
  'directory::rewind' => 
  array (
    0 => 'void',
    'dir_handle=' => 'resource',
  ),
  'directoryiterator::__construct' => 
  array (
    0 => 'void',
    'path' => 'string',
  ),
  'directoryiterator::__tostring' => 
  array (
    0 => 'string',
  ),
  'directoryiterator::_bad_state_ex' => 
  array (
    0 => 'mixed',
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
    'class_name=' => 'class-string',
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
    'class_name=' => 'class-string',
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
    'open_mode=' => 'string',
    'use_include_path=' => 'bool',
    'context=' => 'resource',
  ),
  'directoryiterator::rewind' => 
  array (
    0 => 'void',
  ),
  'directoryiterator::seek' => 
  array (
    0 => 'void',
    'position' => 'int',
  ),
  'directoryiterator::setfileclass' => 
  array (
    0 => 'void',
    'class_name=' => 'class-string',
  ),
  'directoryiterator::setinfoclass' => 
  array (
    0 => 'void',
    'class_name=' => 'class-string',
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
    'path' => 'string',
  ),
  'disk_total_space' => 
  array (
    0 => 'false|float',
    'path' => 'string',
  ),
  'diskfreespace' => 
  array (
    0 => 'false|float',
    'path' => 'string',
  ),
  'display_disabled_function' => 
  array (
    0 => 'mixed',
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
    'host' => 'string',
    'type=' => 'string',
  ),
  'dns_get_mx' => 
  array (
    0 => 'bool',
    'hostname' => 'string',
    '&w_mxhosts' => 'array<array-key, mixed>',
    '&w_weight=' => 'array<array-key, mixed>',
  ),
  'dns_get_record' => 
  array (
    0 => 'false|list<array<array-key, mixed>>',
    'hostname' => 'string',
    'type=' => 'int',
    '&w_authns=' => 'array<array-key, mixed>|null',
    '&w_addtl=' => 'array<array-key, mixed>|null',
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
    0 => 'DOMElement|null',
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
  'domainexception::__clone' => 
  array (
    0 => 'void',
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
    0 => 'int',
  ),
  'domattr::getnodepath' => 
  array (
    0 => 'null|string',
  ),
  'domattr::getuserdata' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
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
    'newChild' => 'DOMNode',
    'refChild=' => 'DOMNode|null',
  ),
  'domattr::isdefaultnamespace' => 
  array (
    0 => 'bool',
    'namespaceURI' => 'string',
  ),
  'domattr::isequalnode' => 
  array (
    0 => 'mixed',
    'arg' => 'DOMNode',
  ),
  'domattr::isid' => 
  array (
    0 => 'bool',
  ),
  'domattr::issamenode' => 
  array (
    0 => 'bool',
    'other' => 'DOMNode',
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
    'namespaceURI' => 'string',
  ),
  'domattr::normalize' => 
  array (
    0 => 'void',
  ),
  'domattr::removechild' => 
  array (
    0 => 'DOMNode|false',
    'oldChild' => 'DOMNode',
  ),
  'domattr::replacechild' => 
  array (
    0 => 'DOMNode|false',
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
    'value' => 'string',
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
    0 => 'true',
    'arg' => 'string',
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
    0 => 'bool',
    'offset' => 'int',
    'count' => 'int',
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
    0 => 'bool',
    'offset' => 'int',
    'arg' => 'string',
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
    0 => 'bool',
    'offset' => 'int',
    'count' => 'int',
    'arg' => 'string',
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
    0 => 'string',
    'offset' => 'int',
    'count' => 'int',
  ),
  'domcomment::__construct' => 
  array (
    0 => 'void',
    'value=' => 'string',
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
    'version=' => 'string',
    'encoding=' => 'string',
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
    0 => 'DOMAttr|false',
    'name' => 'string',
  ),
  'domdocument::createattributens' => 
  array (
    0 => 'DOMAttr|false',
    'namespaceURI' => 'null|string',
    'qualifiedName' => 'string',
  ),
  'domdocument::createcdatasection' => 
  array (
    0 => 'DOMCDATASection|false',
    'data' => 'string',
  ),
  'domdocument::createcomment' => 
  array (
    0 => 'DOMComment|false',
    'data' => 'string',
  ),
  'domdocument::createdocumentfragment' => 
  array (
    0 => 'DOMDocumentFragment|false',
  ),
  'domdocument::createelement' => 
  array (
    0 => 'DOMElement|false',
    'tagName' => 'string',
    'value=' => 'string',
  ),
  'domdocument::createelementns' => 
  array (
    0 => 'DOMElement|false',
    'namespaceURI' => 'null|string',
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
    'data' => 'string',
  ),
  'domdocument::createtextnode' => 
  array (
    0 => 'DOMText|false',
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
    'tagName' => 'string',
  ),
  'domdocument::getelementsbytagnamens' => 
  array (
    0 => 'DOMNodeList',
    'namespaceURI' => 'string',
    'localName' => 'string',
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
    0 => 'DOMNode|false',
    'importedNode' => 'DOMNode',
    'deep' => 'bool',
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
    0 => 'DOMDocument|bool',
    'source' => 'string',
    'options=' => 'int',
  ),
  'domdocument::loadhtml' => 
  array (
    0 => 'DOMDocument|bool',
    'source' => 'non-empty-string',
    'options=' => 'int',
  ),
  'domdocument::loadhtmlfile' => 
  array (
    0 => 'DOMDocument|bool',
    'source' => 'string',
    'options=' => 'int',
  ),
  'domdocument::loadxml' => 
  array (
    0 => 'DOMDocument|bool',
    'source' => 'non-empty-string',
    'options=' => 'int',
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
    0 => 'void',
  ),
  'domdocument::registernodeclass' => 
  array (
    0 => 'bool',
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
    0 => 'false|int',
    'file' => 'string',
  ),
  'domdocument::savehtml' => 
  array (
    0 => 'false|string',
  ),
  'domdocument::savehtmlfile' => 
  array (
    0 => 'false|int',
    'file' => 'string',
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
  ),
  'domdocument::schemavalidatesource' => 
  array (
    0 => 'bool',
    'source' => 'string',
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
    0 => 'bool',
  ),
  'domdocument::xinclude' => 
  array (
    0 => 'int',
    'options=' => 'int',
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
    0 => 'bool',
    'data' => 'string',
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
    'name' => 'string',
    'value=' => 'null|string',
    'uri=' => 'string',
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
    0 => 'string',
    'name' => 'string',
  ),
  'domelement::getattributenode' => 
  array (
    0 => 'DOMAttr',
    'name' => 'string',
  ),
  'domelement::getattributenodens' => 
  array (
    0 => 'DOMAttr',
    'namespaceURI' => 'null|string',
    'localName' => 'string',
  ),
  'domelement::getattributens' => 
  array (
    0 => 'string',
    'namespaceURI' => 'null|string',
    'localName' => 'string',
  ),
  'domelement::getelementsbytagname' => 
  array (
    0 => 'DOMNodeList',
    'name' => 'string',
  ),
  'domelement::getelementsbytagnamens' => 
  array (
    0 => 'DOMNodeList',
    'namespaceURI' => 'null|string',
    'localName' => 'string',
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
    0 => 'bool',
    'name' => 'string',
  ),
  'domelement::hasattributens' => 
  array (
    0 => 'bool',
    'namespaceURI' => 'null|string',
    'localName' => 'string',
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
    0 => 'bool',
    'name' => 'string',
  ),
  'domelement::removeattributenode' => 
  array (
    0 => 'DOMAttr|false',
    'oldAttr' => 'DOMAttr',
  ),
  'domelement::removeattributens' => 
  array (
    0 => 'void',
    'namespaceURI' => 'null|string',
    'localName' => 'string',
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
    0 => 'DOMAttr|false',
    'name' => 'string',
    'value' => 'string',
  ),
  'domelement::setattributenode' => 
  array (
    0 => 'DOMAttr|null',
    'newAttr' => 'DOMAttr',
  ),
  'domelement::setattributenodens' => 
  array (
    0 => 'DOMAttr',
    'newAttr' => 'DOMAttr',
  ),
  'domelement::setattributens' => 
  array (
    0 => 'void',
    'namespaceURI' => 'null|string',
    'qualifiedName' => 'string',
    'value' => 'string',
  ),
  'domelement::setidattribute' => 
  array (
    0 => 'void',
    'name' => 'string',
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
    'namespaceURI' => 'string',
    'localName' => 'string',
    'isId' => 'bool',
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
    'name' => 'string',
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
  'domimplementation::__construct' => 
  array (
    0 => 'void',
  ),
  'domimplementation::createdocument' => 
  array (
    0 => 'DOMDocument|false',
    'namespaceURI' => 'string',
    'qualifiedName' => 'string',
    'docType' => 'DOMDocumentType',
  ),
  'domimplementation::createdocumenttype' => 
  array (
    0 => 'DOMDocumentType|false',
    'qualifiedName' => 'string',
    'publicId' => 'string',
    'systemId' => 'string',
  ),
  'domimplementation::getfeature' => 
  array (
    0 => 'mixed',
    'feature' => 'mixed',
    'version' => 'mixed',
  ),
  'domimplementation::hasfeature' => 
  array (
    0 => 'bool',
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
  'domnamednodemap::getnameditem' => 
  array (
    0 => 'DOMNode|null',
    'name' => 'string',
  ),
  'domnamednodemap::getnameditemns' => 
  array (
    0 => 'DOMNode|null',
    'namespaceURI=' => 'null|string',
    'localName=' => 'string',
  ),
  'domnamednodemap::item' => 
  array (
    0 => 'DOMNode|null',
    'index=' => 'int',
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
    0 => 'DOMNode|false',
    'newChild' => 'DOMNode',
  ),
  'domnode::c14n' => 
  array (
    0 => 'false|string',
    'exclusive=' => 'bool',
    'with_comments=' => 'bool',
    'xpath=' => 'array<array-key, mixed>|null',
    'ns_prefixes=' => 'array<array-key, mixed>|null',
  ),
  'domnode::c14nfile' => 
  array (
    0 => 'false|int',
    'uri' => 'string',
    'exclusive=' => 'bool',
    'with_comments=' => 'bool',
    'xpath=' => 'array<array-key, mixed>|null',
    'ns_prefixes=' => 'array<array-key, mixed>|null',
  ),
  'domnode::clonenode' => 
  array (
    0 => 'DOMNode',
    'deep=' => 'bool',
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
    0 => 'int',
  ),
  'domnode::getnodepath' => 
  array (
    0 => 'null|string',
  ),
  'domnode::getuserdata' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
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
    'newChild' => 'DOMNode',
    'refChild=' => 'DOMNode|null',
  ),
  'domnode::isdefaultnamespace' => 
  array (
    0 => 'bool',
    'namespaceURI' => 'string',
  ),
  'domnode::isequalnode' => 
  array (
    0 => 'mixed',
    'arg' => 'DOMNode',
  ),
  'domnode::issamenode' => 
  array (
    0 => 'bool',
    'other' => 'DOMNode',
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
    'namespaceURI' => 'string',
  ),
  'domnode::normalize' => 
  array (
    0 => 'void',
  ),
  'domnode::removechild' => 
  array (
    0 => 'DOMNode|false',
    'oldChild' => 'DOMNode',
  ),
  'domnode::replacechild' => 
  array (
    0 => 'DOMNode|false',
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
  'domnodelist::item' => 
  array (
    0 => 'DOMNode|null',
    'index' => 'int',
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
    'name' => 'string',
    'value=' => 'string',
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
    'value=' => 'string',
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
    0 => 'bool',
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
    0 => 'bool',
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
    0 => 'DOMText',
    'offset' => 'int',
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
  'domxpath::__construct' => 
  array (
    0 => 'void',
    'doc' => 'DOMDocument',
  ),
  'domxpath::evaluate' => 
  array (
    0 => 'mixed',
    'expr' => 'string',
    'context=' => 'DOMNode|null',
    'registerNodeNS=' => 'bool',
  ),
  'domxpath::query' => 
  array (
    0 => 'DOMNodeList|false',
    'expr' => 'string',
    'context=' => 'DOMNode|null',
    'registerNodeNS=' => 'bool',
  ),
  'domxpath::registernamespace' => 
  array (
    0 => 'bool',
    'prefix' => 'string',
    'uri' => 'string',
  ),
  'domxpath::registerphpfunctions' => 
  array (
    0 => 'void',
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
    'var' => 'mixed',
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
  'ds\\deque::__construct' => 
  array (
    0 => 'void',
    'values=' => 'mixed',
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
  'ds\\deque::capacity' => 
  array (
    0 => 'int',
  ),
  'ds\\deque::clear' => 
  array (
    0 => 'void',
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
    0 => 'void',
    'index' => 'int',
  ),
  'ds\\deque::getiterator' => 
  array (
    0 => 'Traversable|null',
  ),
  'ds\\deque::insert' => 
  array (
    0 => 'void',
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
    0 => 'array<array-key, mixed>',
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
    0 => 'void',
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
    0 => 'void',
  ),
  'ds\\deque::reversed' => 
  array (
    0 => 'Ds\\Sequence',
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
    0 => 'void',
    'comparator=' => 'callable|null',
  ),
  'ds\\deque::sorted' => 
  array (
    0 => 'Ds\\Sequence',
    'comparator=' => 'callable|null',
  ),
  'ds\\deque::sum' => 
  array (
    0 => 'float|int',
  ),
  'ds\\deque::toarray' => 
  array (
    0 => 'array<array-key, mixed>',
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
  'ds\\map::__construct' => 
  array (
    0 => 'void',
    'values=' => 'mixed',
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
  'ds\\map::capacity' => 
  array (
    0 => 'int',
  ),
  'ds\\map::clear' => 
  array (
    0 => 'void',
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
    0 => 'Traversable|null',
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
    0 => 'array<array-key, mixed>',
  ),
  'ds\\map::keys' => 
  array (
    0 => 'Ds\\Set',
  ),
  'ds\\map::ksort' => 
  array (
    0 => 'void',
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
    0 => 'void',
    'key' => 'mixed',
    'value' => 'mixed',
  ),
  'ds\\map::putall' => 
  array (
    0 => 'void',
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
    0 => 'void',
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
    0 => 'void',
    'comparator=' => 'callable|null',
  ),
  'ds\\map::sorted' => 
  array (
    0 => 'Ds\\Map',
    'comparator=' => 'callable|null',
  ),
  'ds\\map::sum' => 
  array (
    0 => 'float|int',
  ),
  'ds\\map::toarray' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'ds\\map::union' => 
  array (
    0 => 'Ds\\Map',
    'map' => 'Ds\\Map',
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
  'ds\\pair::clear' => 
  array (
    0 => 'void',
  ),
  'ds\\pair::copy' => 
  array (
    0 => 'Ds\\Pair',
  ),
  'ds\\pair::isempty' => 
  array (
    0 => 'bool',
  ),
  'ds\\pair::jsonserialize' => 
  array (
    0 => 'array<array-key, mixed>',
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
    0 => 'void',
    'capacity' => 'int',
  ),
  'ds\\priorityqueue::capacity' => 
  array (
    0 => 'int',
  ),
  'ds\\priorityqueue::clear' => 
  array (
    0 => 'void',
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
    0 => 'Traversable|null',
  ),
  'ds\\priorityqueue::isempty' => 
  array (
    0 => 'bool',
  ),
  'ds\\priorityqueue::jsonserialize' => 
  array (
    0 => 'array<array-key, mixed>',
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
    0 => 'void',
    'value' => 'mixed',
    'priority' => 'int',
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
    0 => 'void',
    'capacity' => 'int',
  ),
  'ds\\queue::capacity' => 
  array (
    0 => 'int',
  ),
  'ds\\queue::clear' => 
  array (
    0 => 'void',
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
    0 => 'Traversable|null',
  ),
  'ds\\queue::isempty' => 
  array (
    0 => 'bool',
  ),
  'ds\\queue::jsonserialize' => 
  array (
    0 => 'array<array-key, mixed>',
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
    0 => 'void',
    '...values=' => 'mixed',
  ),
  'ds\\queue::toarray' => 
  array (
    0 => 'array<array-key, mixed>',
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
  'ds\\set::__construct' => 
  array (
    0 => 'void',
    'values=' => 'mixed',
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
  'ds\\set::capacity' => 
  array (
    0 => 'int',
  ),
  'ds\\set::clear' => 
  array (
    0 => 'void',
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
    0 => 'Traversable|null',
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
    0 => 'string',
    'glue=' => 'string',
  ),
  'ds\\set::jsonserialize' => 
  array (
    0 => 'array<array-key, mixed>',
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
    0 => 'void',
    '...values=' => 'mixed',
  ),
  'ds\\set::reverse' => 
  array (
    0 => 'void',
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
    0 => 'void',
    'comparator=' => 'callable|null',
  ),
  'ds\\set::sorted' => 
  array (
    0 => 'Ds\\Set',
    'comparator=' => 'callable|null',
  ),
  'ds\\set::sum' => 
  array (
    0 => 'float|int',
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
    0 => 'void',
    'capacity' => 'int',
  ),
  'ds\\stack::capacity' => 
  array (
    0 => 'int',
  ),
  'ds\\stack::clear' => 
  array (
    0 => 'void',
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
    0 => 'Traversable|null',
  ),
  'ds\\stack::isempty' => 
  array (
    0 => 'bool',
  ),
  'ds\\stack::jsonserialize' => 
  array (
    0 => 'array<array-key, mixed>',
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
    0 => 'void',
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
    0 => 'void',
    'capacity' => 'int',
  ),
  'ds\\vector::apply' => 
  array (
    0 => 'void',
    'callback' => 'callable',
  ),
  'ds\\vector::capacity' => 
  array (
    0 => 'int',
  ),
  'ds\\vector::clear' => 
  array (
    0 => 'void',
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
    0 => 'Traversable|null',
  ),
  'ds\\vector::insert' => 
  array (
    0 => 'void',
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
    0 => 'array<array-key, mixed>',
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
    0 => 'void',
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
    0 => 'void',
  ),
  'ds\\vector::reversed' => 
  array (
    0 => 'Ds\\Sequence',
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
    0 => 'void',
    'comparator=' => 'callable|null',
  ),
  'ds\\vector::sorted' => 
  array (
    0 => 'Ds\\Sequence',
    'comparator=' => 'callable|null',
  ),
  'ds\\vector::sum' => 
  array (
    0 => 'float|int',
  ),
  'ds\\vector::toarray' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'ds\\vector::unshift' => 
  array (
    0 => 'void',
    '...values=' => 'mixed',
  ),
  'each' => 
  array (
    0 => 'array{0: int|string, 1: mixed, key: int|string, value: mixed}',
    '&r_arr' => 'array<array-key, mixed>',
  ),
  'easter_date' => 
  array (
    0 => 'int',
    'year=' => 'int',
    'mode=' => 'int',
  ),
  'easter_days' => 
  array (
    0 => 'int',
    'year=' => 'int',
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
    0 => 'array<array-key, mixed>|false',
    'broker' => 'resource',
  ),
  'enchant_broker_dict_exists' => 
  array (
    0 => 'bool',
    'broker' => 'resource',
    'tag' => 'string',
  ),
  'enchant_broker_free' => 
  array (
    0 => 'bool',
    'broker' => 'resource',
  ),
  'enchant_broker_free_dict' => 
  array (
    0 => 'bool',
    'dictionary' => 'resource',
  ),
  'enchant_broker_get_dict_path' => 
  array (
    0 => 'string',
    'broker' => 'resource',
    'type' => 'int',
  ),
  'enchant_broker_get_error' => 
  array (
    0 => 'false|string',
    'broker' => 'resource',
  ),
  'enchant_broker_init' => 
  array (
    0 => 'false|resource',
  ),
  'enchant_broker_list_dicts' => 
  array (
    0 => 'array<int, array{lang_tag: string, provider_desc: string, provider_file: string, provider_name: string}>|false',
    'broker' => 'resource',
  ),
  'enchant_broker_request_dict' => 
  array (
    0 => 'false|resource',
    'broker' => 'resource',
    'tag' => 'string',
  ),
  'enchant_broker_request_pwl_dict' => 
  array (
    0 => 'false|resource',
    'broker' => 'resource',
    'filename' => 'string',
  ),
  'enchant_broker_set_dict_path' => 
  array (
    0 => 'bool',
    'broker' => 'resource',
    'type' => 'int',
    'path' => 'string',
  ),
  'enchant_broker_set_ordering' => 
  array (
    0 => 'bool',
    'broker' => 'resource',
    'tag' => 'string',
    'ordering' => 'string',
  ),
  'enchant_dict_add_to_personal' => 
  array (
    0 => 'void',
    'dictionary' => 'resource',
    'word' => 'string',
  ),
  'enchant_dict_add_to_session' => 
  array (
    0 => 'void',
    'dictionary' => 'resource',
    'word' => 'string',
  ),
  'enchant_dict_check' => 
  array (
    0 => 'bool',
    'dictionary' => 'resource',
    'word' => 'string',
  ),
  'enchant_dict_describe' => 
  array (
    0 => 'array<array-key, mixed>',
    'dictionary' => 'resource',
  ),
  'enchant_dict_get_error' => 
  array (
    0 => 'string',
    'dictionary' => 'resource',
  ),
  'enchant_dict_is_in_session' => 
  array (
    0 => 'bool',
    'dictionary' => 'resource',
    'word' => 'string',
  ),
  'enchant_dict_quick_check' => 
  array (
    0 => 'bool',
    'dictionary' => 'resource',
    'word' => 'string',
    '&w_suggestions=' => 'array<int, string>',
  ),
  'enchant_dict_store_replacement' => 
  array (
    0 => 'void',
    'dictionary' => 'resource',
    'misspelled' => 'string',
    'correct' => 'string',
  ),
  'enchant_dict_suggest' => 
  array (
    0 => 'array<array-key, mixed>',
    'dictionary' => 'resource',
    'word' => 'string',
  ),
  'end' => 
  array (
    0 => 'false|mixed',
    '&r_arg' => 'array<array-key, mixed>|object',
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
  'error::__wakeup' => 
  array (
    0 => 'mixed',
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
    'destination=' => 'string',
    'extra_headers=' => 'string',
  ),
  'error_reporting' => 
  array (
    0 => 'int',
    'new_error_level=' => 'int',
  ),
  'errorexception::__clone' => 
  array (
    0 => 'void',
  ),
  'errorexception::__construct' => 
  array (
    0 => 'void',
    'message=' => 'string',
    'code=' => 'int',
    'severity=' => 'int',
    'filename=' => 'string',
    'lineno=' => 'int',
    'previous=' => 'Throwable|null',
  ),
  'errorexception::__tostring' => 
  array (
    0 => 'string',
  ),
  'errorexception::__wakeup' => 
  array (
    0 => 'mixed',
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
    0 => 'EvLoop',
  ),
  'evcheck::invoke' => 
  array (
    0 => 'void',
    'revents' => 'int',
  ),
  'evcheck::keepalive' => 
  array (
    0 => 'void',
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
    0 => 'EvLoop',
  ),
  'evchild::invoke' => 
  array (
    0 => 'void',
    'revents' => 'int',
  ),
  'evchild::keepalive' => 
  array (
    0 => 'void',
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
    'other' => 'object',
    'callback=' => 'callable',
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
    'other' => 'object',
    'callback=' => 'callable',
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
    0 => 'EvLoop',
  ),
  'evembed::invoke' => 
  array (
    0 => 'void',
    'revents' => 'int',
  ),
  'evembed::keepalive' => 
  array (
    0 => 'void',
    'value=' => 'bool',
  ),
  'evembed::set' => 
  array (
    0 => 'void',
    'other' => 'object',
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
  'event::removetimer' => 
  array (
    0 => 'mixed',
  ),
  'event::set' => 
  array (
    0 => 'bool',
    'base' => 'EventBase',
    'fd' => 'mixed',
    'what=' => 'int',
    'cb=' => 'callable',
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
    'cfg=' => 'EventConfig',
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
    0 => 'void',
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
  'eventbase::resume' => 
  array (
    0 => 'mixed',
  ),
  'eventbase::stop' => 
  array (
    0 => 'bool',
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
    0 => 'string',
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
    0 => 'string',
    'eol_style' => 'int',
  ),
  'eventbuffer::search' => 
  array (
    0 => 'mixed',
    'what' => 'string',
    'start=' => 'int',
    'end=' => 'int',
  ),
  'eventbuffer::searcheol' => 
  array (
    0 => 'mixed',
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
    0 => 'bool',
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
    'readcb=' => 'callable',
    'writecb=' => 'callable',
    'eventcb=' => 'callable',
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
    'dns_base' => 'EventDnsBase',
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
    0 => 'string',
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
    'readcb' => 'callable',
    'writecb' => 'callable',
    'eventcb' => 'callable',
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
  'eventbufferevent::sslfilter' => 
  array (
    0 => 'EventBufferEvent',
    'unused' => 'EventBase',
    'underlying' => 'EventBufferEvent',
    'ctx' => 'EventSslContext',
    'state' => 'int',
    'options=' => 'int',
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
    0 => 'bool',
    'method' => 'string',
  ),
  'eventconfig::requirefeatures' => 
  array (
    0 => 'bool',
    'feature' => 'int',
  ),
  'eventconfig::setflags' => 
  array (
    0 => 'mixed',
    'flags' => 'mixed',
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
    0 => 'bool',
    'ndots' => 'int',
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
    0 => 'void',
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
    0 => 'void',
    'path' => 'string',
    'cb' => 'string',
    'arg=' => 'string',
  ),
  'eventhttp::setdefaultcallback' => 
  array (
    0 => 'void',
    'cb' => 'string',
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
    'dns_base' => 'EventDnsBase',
    'address' => 'string',
    'port' => 'int',
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
    0 => 'bool',
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
    'max_size' => 'string',
  ),
  'eventhttpconnection::setmaxheaderssize' => 
  array (
    0 => 'void',
    'max_size' => 'string',
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
    0 => 'void',
    'key' => 'string',
    'type' => 'string',
  ),
  'eventhttprequest::free' => 
  array (
    0 => 'void',
  ),
  'eventhttprequest::getbufferevent' => 
  array (
    0 => 'EventBufferEvent',
  ),
  'eventhttprequest::getcommand' => 
  array (
    0 => 'void',
  ),
  'eventhttprequest::getconnection' => 
  array (
    0 => 'EventHttpConnection',
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
    0 => 'void',
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
    0 => 'void',
    'key' => 'string',
    'type' => 'string',
  ),
  'eventhttprequest::senderror' => 
  array (
    0 => 'void',
    'error' => 'int',
    'reason=' => 'string',
  ),
  'eventhttprequest::sendreply' => 
  array (
    0 => 'void',
    'code' => 'int',
    'reason' => 'string',
    'buf=' => 'EventBuffer',
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
    0 => 'bool',
  ),
  'eventlistener::enable' => 
  array (
    0 => 'bool',
  ),
  'eventlistener::free' => 
  array (
    0 => 'mixed',
  ),
  'eventlistener::getbase' => 
  array (
    0 => 'void',
  ),
  'eventlistener::getsocketname' => 
  array (
    0 => 'bool',
    '&w_address' => 'string',
    '&w_port=' => 'mixed',
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
    'cb' => 'string',
  ),
  'eventsslcontext::__construct' => 
  array (
    0 => 'void',
    'method' => 'string',
    'options' => 'string',
  ),
  'eventutil::__construct' => 
  array (
    0 => 'void',
  ),
  'eventutil::getlastsocketerrno' => 
  array (
    0 => 'int',
    'socket=' => 'mixed',
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
    0 => 'void',
  ),
  'evfork::__construct' => 
  array (
    0 => 'void',
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
    'callback' => 'callable',
    'data=' => 'string',
    'priority=' => 'string',
  ),
  'evfork::feed' => 
  array (
    0 => 'void',
    'revents' => 'int',
  ),
  'evfork::getloop' => 
  array (
    0 => 'EvLoop',
  ),
  'evfork::invoke' => 
  array (
    0 => 'void',
    'revents' => 'int',
  ),
  'evfork::keepalive' => 
  array (
    0 => 'void',
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
    0 => 'EvLoop',
  ),
  'evidle::invoke' => 
  array (
    0 => 'void',
    'revents' => 'int',
  ),
  'evidle::keepalive' => 
  array (
    0 => 'void',
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
    0 => 'EvLoop',
  ),
  'evio::invoke' => 
  array (
    0 => 'void',
    'revents' => 'int',
  ),
  'evio::keepalive' => 
  array (
    0 => 'void',
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
  'evloop::check' => 
  array (
    0 => 'EvCheck',
    'callback' => 'callable',
    'data=' => 'mixed',
    'priority=' => 'int',
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
    'interval' => 'string',
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
    0 => 'EvLoop',
  ),
  'evperiodic::invoke' => 
  array (
    0 => 'void',
    'revents' => 'int',
  ),
  'evperiodic::keepalive' => 
  array (
    0 => 'void',
    'value=' => 'bool',
  ),
  'evperiodic::set' => 
  array (
    0 => 'void',
    'offset' => 'float',
    'interval' => 'float',
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
    'priority=' => 'string',
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
    0 => 'EvLoop',
  ),
  'evprepare::invoke' => 
  array (
    0 => 'void',
    'revents' => 'int',
  ),
  'evprepare::keepalive' => 
  array (
    0 => 'void',
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
    0 => 'EvLoop',
  ),
  'evsignal::invoke' => 
  array (
    0 => 'void',
    'revents' => 'int',
  ),
  'evsignal::keepalive' => 
  array (
    0 => 'void',
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
    0 => 'EvLoop',
  ),
  'evstat::invoke' => 
  array (
    0 => 'void',
    'revents' => 'int',
  ),
  'evstat::keepalive' => 
  array (
    0 => 'void',
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
    0 => 'EvLoop',
  ),
  'evtimer::invoke' => 
  array (
    0 => 'void',
    'revents' => 'int',
  ),
  'evtimer::keepalive' => 
  array (
    0 => 'void',
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
  'evwatcher::__construct' => 
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
    0 => 'EvLoop',
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
  'exception::__wakeup' => 
  array (
    0 => 'mixed',
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
    '&w_return_value=' => 'int',
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
    'required_sections=' => 'string',
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
    'number' => 'float',
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
    0 => 'false|list<string>',
    'separator' => 'string',
    'str' => 'string',
    'limit=' => 'int',
  ),
  'expm1' => 
  array (
    0 => 'float',
    'number' => 'float',
  ),
  'extension_loaded' => 
  array (
    0 => 'bool',
    'extension_name' => 'string',
  ),
  'extract' => 
  array (
    0 => 'int',
    '&arg' => 'array<array-key, mixed>',
    'extract_type=' => 'int',
    'prefix=' => 'string',
  ),
  'ezmlm_hash' => 
  array (
    0 => 'int',
    'addr' => 'string',
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
    'fp' => 'resource',
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
    'fp' => 'resource',
  ),
  'fflush' => 
  array (
    0 => 'bool',
    'fp' => 'resource',
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
    'fp' => 'resource',
  ),
  'fgetcsv' => 
  array (
    0 => 'array{0?: null|string, ...<int<0, max>, string>}|false',
    'fp' => 'resource',
    'length=' => 'int',
    'delimiter=' => 'string',
    'enclosure=' => 'string',
    'escape=' => 'string',
  ),
  'fgets' => 
  array (
    0 => 'false|string',
    'fp' => 'resource',
    'length=' => 'int',
  ),
  'fgetss' => 
  array (
    0 => 'false|string',
    'fp' => 'resource',
    'length=' => 'int',
    'allowable_tags=' => 'string',
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
    'context=' => 'null|resource',
    'offset=' => 'int',
    'maxlen=' => 'int',
    'use_include_path=' => 'bool',
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
    'path' => 'string',
    'flags=' => 'int',
  ),
  'filesystemiterator::__tostring' => 
  array (
    0 => 'string',
  ),
  'filesystemiterator::_bad_state_ex' => 
  array (
    0 => 'mixed',
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
    'class_name=' => 'class-string',
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
    'class_name=' => 'class-string',
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
    'open_mode=' => 'string',
    'use_include_path=' => 'bool',
    'context=' => 'resource',
  ),
  'filesystemiterator::rewind' => 
  array (
    0 => 'void',
  ),
  'filesystemiterator::seek' => 
  array (
    0 => 'void',
    'position' => 'int',
  ),
  'filesystemiterator::setfileclass' => 
  array (
    0 => 'void',
    'class_name=' => 'class-string',
  ),
  'filesystemiterator::setflags' => 
  array (
    0 => 'void',
    'flags=' => 'int',
  ),
  'filesystemiterator::setinfoclass' => 
  array (
    0 => 'void',
    'class_name=' => 'class-string',
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
    'type' => '0|1|2|4|5',
    'variable_name' => 'string',
  ),
  'filter_id' => 
  array (
    0 => 'false|int',
    'filtername' => 'string',
  ),
  'filter_input' => 
  array (
    0 => 'false|mixed|null',
    'type' => '0|1|2|4|5',
    'variable_name' => 'string',
    'filter=' => 'int',
    'options=' => 'array<array-key, mixed>|int',
  ),
  'filter_input_array' => 
  array (
    0 => 'array<array-key, mixed>|false|null',
    'type' => '0|1|2|4|5',
    'definition=' => 'array<array-key, mixed>|int',
    'add_empty=' => 'bool',
  ),
  'filter_list' => 
  array (
    0 => 'non-empty-list<non-falsy-string>',
  ),
  'filter_var' => 
  array (
    0 => 'false|mixed',
    'variable' => 'mixed',
    'filter=' => 'int',
    'options=' => 'array<array-key, mixed>|int',
  ),
  'filter_var_array' => 
  array (
    0 => 'array<array-key, mixed>|false|null',
    'data' => 'array<array-key, mixed>',
    'definition=' => 'array<array-key, mixed>|int',
    'add_empty=' => 'bool',
  ),
  'filteriterator::__construct' => 
  array (
    0 => 'void',
    'iterator' => 'Iterator',
  ),
  'filteriterator::accept' => 
  array (
    0 => 'bool',
  ),
  'filteriterator::current' => 
  array (
    0 => 'mixed',
  ),
  'filteriterator::getinneriterator' => 
  array (
    0 => 'Iterator',
  ),
  'filteriterator::key' => 
  array (
    0 => 'mixed',
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
    'options=' => 'int',
    'context=' => 'null|resource',
  ),
  'finfo::file' => 
  array (
    0 => 'false|string',
    'filename' => 'string',
    'options=' => 'int',
    'context=' => 'null|resource',
  ),
  'finfo::finfo' => 
  array (
    0 => 'mixed',
    'options=' => 'mixed',
    'arg=' => 'mixed',
  ),
  'finfo::set_flags' => 
  array (
    0 => 'bool',
    'options' => 'int',
  ),
  'finfo_buffer' => 
  array (
    0 => 'false|string',
    'finfo' => 'resource',
    'string' => 'string',
    'options=' => 'int',
    'context=' => 'resource',
  ),
  'finfo_close' => 
  array (
    0 => 'bool',
    'finfo' => 'resource',
  ),
  'finfo_file' => 
  array (
    0 => 'false|string',
    'finfo' => 'resource',
    'filename' => 'string',
    'options=' => 'int',
    'context=' => 'resource',
  ),
  'finfo_open' => 
  array (
    0 => 'false|resource',
    'options=' => 'int',
    'arg=' => 'string',
  ),
  'finfo_set_flags' => 
  array (
    0 => 'bool',
    'finfo' => 'resource',
    'options' => 'int',
  ),
  'floatval' => 
  array (
    0 => 'float',
    'var' => 'mixed',
  ),
  'flock' => 
  array (
    0 => 'bool',
    'fp' => 'resource',
    'operation' => 'int',
    '&w_wouldblock=' => 'int',
  ),
  'floor' => 
  array (
    0 => 'float',
    'number' => 'float|int',
  ),
  'flush' => 
  array (
    0 => 'void',
  ),
  'fmod' => 
  array (
    0 => 'float',
    'x' => 'float',
    'y' => 'float',
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
    'function_name' => 'callable',
    '...parameters=' => 'mixed',
  ),
  'forward_static_call_array' => 
  array (
    0 => 'false|mixed',
    'function_name' => 'callable',
    'parameters' => 'list<mixed>',
  ),
  'fpassthru' => 
  array (
    0 => 'int',
    'fp' => 'resource',
  ),
  'fprintf' => 
  array (
    0 => 'int',
    'stream' => 'resource',
    'format' => 'string',
    '...args=' => 'float|int|string',
  ),
  'fputcsv' => 
  array (
    0 => 'false|int',
    'fp' => 'resource',
    'fields' => 'array<array-key, Stringable|null|scalar>',
    'delimiter=' => 'string',
    'enclosure=' => 'string',
    'escape_char=' => 'string',
  ),
  'fputs' => 
  array (
    0 => 'false|int',
    'fp' => 'resource',
    'str' => 'string',
    'length=' => 'int',
  ),
  'fread' => 
  array (
    0 => 'false|string',
    'fp' => 'resource',
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
    0 => 'list<mixed>',
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
    'fp' => 'resource',
    'offset' => 'int',
    'whence=' => 'int',
  ),
  'fsockopen' => 
  array (
    0 => 'false|resource',
    'hostname' => 'string',
    'port' => 'int',
    '&w_errno=' => 'int',
    '&w_errstr=' => 'string',
    'timeout=' => 'float',
  ),
  'fstat' => 
  array (
    0 => 'array{0: int, 10: int, 11: int, 12: int, 1: int, 2: int, 3: int, 4: int, 5: int, 6: int, 7: int, 8: int, 9: int, atime: int, blksize: int, blocks: int, ctime: int, dev: int, gid: int, ino: int, mode: int, mtime: int, nlink: int, rdev: int, size: int, uid: int}|false',
    'fp' => 'resource',
  ),
  'ftell' => 
  array (
    0 => 'false|int',
    'fp' => 'resource',
  ),
  'ftok' => 
  array (
    0 => 'int',
    'pathname' => 'string',
    'proj' => 'string',
  ),
  'ftp_alloc' => 
  array (
    0 => 'bool',
    'ftp' => 'resource',
    'size' => 'int',
    '&w_response=' => 'string',
  ),
  'ftp_cdup' => 
  array (
    0 => 'bool',
    'ftp' => 'resource',
  ),
  'ftp_chdir' => 
  array (
    0 => 'bool',
    'ftp' => 'resource',
    'directory' => 'string',
  ),
  'ftp_chmod' => 
  array (
    0 => 'false|int',
    'ftp' => 'resource',
    'mode' => 'int',
    'filename' => 'string',
  ),
  'ftp_close' => 
  array (
    0 => 'bool',
    'ftp' => 'resource',
  ),
  'ftp_connect' => 
  array (
    0 => 'false|resource',
    'host' => 'string',
    'port=' => 'int',
    'timeout=' => 'int',
  ),
  'ftp_delete' => 
  array (
    0 => 'bool',
    'ftp' => 'resource',
    'file' => 'string',
  ),
  'ftp_exec' => 
  array (
    0 => 'bool',
    'ftp' => 'resource',
    'command' => 'string',
  ),
  'ftp_fget' => 
  array (
    0 => 'bool',
    'ftp' => 'resource',
    'fp' => 'resource',
    'remote_file' => 'string',
    'mode' => 'int',
    'resumepos=' => 'int',
  ),
  'ftp_fput' => 
  array (
    0 => 'bool',
    'ftp' => 'resource',
    'remote_file' => 'string',
    'fp' => 'resource',
    'mode' => 'int',
    'startpos=' => 'int',
  ),
  'ftp_get' => 
  array (
    0 => 'bool',
    'ftp' => 'resource',
    'local_file' => 'string',
    'remote_file' => 'string',
    'mode' => 'int',
    'resume_pos=' => 'int',
  ),
  'ftp_get_option' => 
  array (
    0 => 'false|int',
    'ftp' => 'resource',
    'option' => 'int',
  ),
  'ftp_login' => 
  array (
    0 => 'bool',
    'ftp' => 'resource',
    'username' => 'string',
    'password' => 'string',
  ),
  'ftp_mdtm' => 
  array (
    0 => 'int',
    'ftp' => 'resource',
    'filename' => 'string',
  ),
  'ftp_mkdir' => 
  array (
    0 => 'false|string',
    'ftp' => 'resource',
    'directory' => 'string',
  ),
  'ftp_mlsd' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'ftp' => 'resource',
    'directory' => 'string',
  ),
  'ftp_nb_continue' => 
  array (
    0 => 'int',
    'ftp' => 'resource',
  ),
  'ftp_nb_fget' => 
  array (
    0 => 'int',
    'ftp' => 'resource',
    'fp' => 'resource',
    'remote_file' => 'string',
    'mode' => 'int',
    'resumepos=' => 'int',
  ),
  'ftp_nb_fput' => 
  array (
    0 => 'int',
    'ftp' => 'resource',
    'remote_file' => 'string',
    'fp' => 'resource',
    'mode' => 'int',
    'startpos=' => 'int',
  ),
  'ftp_nb_get' => 
  array (
    0 => 'int',
    'ftp' => 'resource',
    'local_file' => 'string',
    'remote_file' => 'string',
    'mode' => 'int',
    'resume_pos=' => 'int',
  ),
  'ftp_nb_put' => 
  array (
    0 => 'int',
    'ftp' => 'resource',
    'remote_file' => 'string',
    'local_file' => 'string',
    'mode' => 'int',
    'startpos=' => 'int',
  ),
  'ftp_nlist' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'ftp' => 'resource',
    'directory' => 'string',
  ),
  'ftp_pasv' => 
  array (
    0 => 'bool',
    'ftp' => 'resource',
    'pasv' => 'bool',
  ),
  'ftp_put' => 
  array (
    0 => 'bool',
    'ftp' => 'resource',
    'remote_file' => 'string',
    'local_file' => 'string',
    'mode' => 'int',
    'startpos=' => 'int',
  ),
  'ftp_pwd' => 
  array (
    0 => 'false|string',
    'ftp' => 'resource',
  ),
  'ftp_quit' => 
  array (
    0 => 'bool',
    'ftp' => 'resource',
  ),
  'ftp_raw' => 
  array (
    0 => 'array<array-key, mixed>|null',
    'ftp' => 'resource',
    'command' => 'string',
  ),
  'ftp_rawlist' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'ftp' => 'resource',
    'directory' => 'string',
    'recursive=' => 'bool',
  ),
  'ftp_rename' => 
  array (
    0 => 'bool',
    'ftp' => 'resource',
    'src' => 'string',
    'dest' => 'string',
  ),
  'ftp_rmdir' => 
  array (
    0 => 'bool',
    'ftp' => 'resource',
    'directory' => 'string',
  ),
  'ftp_set_option' => 
  array (
    0 => 'bool',
    'ftp' => 'resource',
    'option' => 'int',
    'value' => 'mixed',
  ),
  'ftp_site' => 
  array (
    0 => 'bool',
    'ftp' => 'resource',
    'cmd' => 'string',
  ),
  'ftp_size' => 
  array (
    0 => 'int',
    'ftp' => 'resource',
    'filename' => 'string',
  ),
  'ftp_ssl_connect' => 
  array (
    0 => 'false|resource',
    'host' => 'string',
    'port=' => 'int',
    'timeout=' => 'int',
  ),
  'ftp_systype' => 
  array (
    0 => 'false|string',
    'ftp' => 'resource',
  ),
  'ftruncate' => 
  array (
    0 => 'bool',
    'fp' => 'resource',
    'size' => 'int',
  ),
  'func_get_arg' => 
  array (
    0 => 'false|mixed',
    'arg_num' => 'int',
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
    'function_name' => 'string',
  ),
  'fwrite' => 
  array (
    0 => 'false|int',
    'fp' => 'resource',
    'str' => 'string',
    'length=' => 'int',
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
    0 => 'void',
  ),
  'generator::rewind' => 
  array (
    0 => 'void',
  ),
  'generator::send' => 
  array (
    0 => 'mixed',
    'value' => 'mixed',
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
    'browser_name=' => 'null|string',
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
    0 => 'false|string',
    'option_name' => 'string',
  ),
  'get_class' => 
  array (
    0 => 'class-string',
    'object=' => 'object',
  ),
  'get_class_methods' => 
  array (
    0 => 'list<non-falsy-string>|null',
    'class' => 'mixed',
  ),
  'get_class_vars' => 
  array (
    0 => 'array<non-falsy-string, mixed>',
    'class_name' => 'string',
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
  ),
  'get_defined_vars' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'get_extension_funcs' => 
  array (
    0 => 'false|list<callable-string>',
    'extension_name' => 'string',
  ),
  'get_headers' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'url' => 'string',
    'format=' => 'int',
  ),
  'get_html_translation_table' => 
  array (
    0 => 'array<array-key, mixed>',
    'table=' => 'int',
    'quote_style=' => 'int',
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
  'get_magic_quotes_gpc' => 
  array (
    0 => 'false|int',
  ),
  'get_magic_quotes_runtime' => 
  array (
    0 => 'false|int',
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
    'obj' => 'object',
  ),
  'get_parent_class' => 
  array (
    0 => 'class-string|false',
    'object=' => 'mixed',
  ),
  'get_required_files' => 
  array (
    0 => 'list<string>',
  ),
  'get_resource_type' => 
  array (
    0 => 'string',
    'res' => 'resource',
  ),
  'get_resources' => 
  array (
    0 => 'array<int, resource>',
    'type=' => 'string',
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
    'timestamp=' => 'int',
  ),
  'getenv' => 
  array (
    0 => 'false|string',
    'varname' => 'string',
    'local_only=' => 'bool',
  ),
  'gethostbyaddr' => 
  array (
    0 => 'false|string',
    'ip_address' => 'string',
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
    'imagefile' => 'string',
    '&w_info=' => 'array<array-key, mixed>',
  ),
  'getimagesizefromstring' => 
  array (
    0 => 'array{0: int, 1: int, 2: int, 3: string, bits?: int, channels?: 3|4, mime: string}|false',
    'imagefile' => 'string',
    '&w_info=' => 'array<array-key, mixed>',
  ),
  'getlastmod' => 
  array (
    0 => 'false|int',
  ),
  'getmxrr' => 
  array (
    0 => 'bool',
    'hostname' => 'string',
    '&w_mxhosts' => 'array<int, string>',
    '&w_weight=' => 'array<int, int>',
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
    'options' => 'string',
    'opts=' => 'array<array-key, mixed>',
  ),
  'getprotobyname' => 
  array (
    0 => 'false|int',
    'name' => 'string',
  ),
  'getprotobynumber' => 
  array (
    0 => 'string',
    'proto' => 'int',
  ),
  'getrandmax' => 
  array (
    0 => 'int<1, max>',
  ),
  'getrusage' => 
  array (
    0 => 'array<array-key, mixed>',
    'who=' => 'int',
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
    'get_as_float=' => 'mixed',
  ),
  'gettimeofday\'1' => 
  array (
    0 => 'float',
    'as_float=' => 'true',
  ),
  'gettype' => 
  array (
    0 => 'string',
    'var' => 'mixed',
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
    'path' => 'string',
    'flags=' => 'int',
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
    'class_name=' => 'class-string',
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
    'class_name=' => 'class-string',
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
    'open_mode=' => 'string',
    'use_include_path=' => 'bool',
    'context=' => 'resource',
  ),
  'globiterator::rewind' => 
  array (
    0 => 'void',
  ),
  'globiterator::seek' => 
  array (
    0 => 'void',
    'position' => 'int',
  ),
  'globiterator::setfileclass' => 
  array (
    0 => 'void',
    'class_name=' => 'class-string',
  ),
  'globiterator::setflags' => 
  array (
    0 => 'void',
    'flags=' => 'int',
  ),
  'globiterator::setinfoclass' => 
  array (
    0 => 'void',
    'class_name=' => 'class-string',
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
    'timestamp=' => 'int',
  ),
  'gmmktime' => 
  array (
    0 => 'false|int',
    'hour=' => 'int',
    'min=' => 'int',
    'sec=' => 'int',
    'mon=' => 'int',
    'day=' => 'int',
    'year=' => 'int',
  ),
  'gmp_abs' => 
  array (
    0 => 'GMP',
    'a' => 'GMP|int|string',
  ),
  'gmp_add' => 
  array (
    0 => 'GMP',
    'a' => 'GMP|int|string',
    'b' => 'GMP|int|string',
  ),
  'gmp_and' => 
  array (
    0 => 'GMP',
    'a' => 'GMP|int|string',
    'b' => 'GMP|int|string',
  ),
  'gmp_clrbit' => 
  array (
    0 => 'void',
    'a' => 'GMP',
    'index' => 'int',
  ),
  'gmp_cmp' => 
  array (
    0 => 'int',
    'a' => 'GMP|int|string',
    'b' => 'GMP|int|string',
  ),
  'gmp_com' => 
  array (
    0 => 'GMP',
    'a' => 'GMP|int|string',
  ),
  'gmp_div' => 
  array (
    0 => 'GMP',
    'a' => 'GMP|int|string',
    'b' => 'GMP|int|string',
    'round=' => 'int',
  ),
  'gmp_div_q' => 
  array (
    0 => 'GMP',
    'a' => 'GMP|int|string',
    'b' => 'GMP|int|string',
    'round=' => 'int',
  ),
  'gmp_div_qr' => 
  array (
    0 => 'array{0: GMP, 1: GMP}',
    'a' => 'GMP|int|string',
    'b' => 'GMP|int|string',
    'round=' => 'int',
  ),
  'gmp_div_r' => 
  array (
    0 => 'GMP',
    'a' => 'GMP|int|string',
    'b' => 'GMP|int|string',
    'round=' => 'int',
  ),
  'gmp_divexact' => 
  array (
    0 => 'GMP',
    'a' => 'GMP|int|string',
    'b' => 'GMP|int|string',
  ),
  'gmp_export' => 
  array (
    0 => 'false|string',
    'gmpnumber' => 'GMP|int|string',
    'word_size=' => 'int',
    'options=' => 'int',
  ),
  'gmp_fact' => 
  array (
    0 => 'GMP',
    'a' => 'int',
  ),
  'gmp_gcd' => 
  array (
    0 => 'GMP',
    'a' => 'GMP|int|string',
    'b' => 'GMP|int|string',
  ),
  'gmp_gcdext' => 
  array (
    0 => 'array<string, GMP>',
    'a' => 'GMP|int|string',
    'b' => 'GMP|int|string',
  ),
  'gmp_hamdist' => 
  array (
    0 => 'int',
    'a' => 'GMP|int|string',
    'b' => 'GMP|int|string',
  ),
  'gmp_import' => 
  array (
    0 => 'GMP|false',
    'data' => 'string',
    'word_size=' => 'int',
    'options=' => 'int',
  ),
  'gmp_init' => 
  array (
    0 => 'GMP',
    'number' => 'int|string',
    'base=' => 'int',
  ),
  'gmp_intval' => 
  array (
    0 => 'int',
    'gmpnumber' => 'GMP|int|string',
  ),
  'gmp_invert' => 
  array (
    0 => 'GMP|false',
    'a' => 'GMP|int|string',
    'b' => 'GMP|int|string',
  ),
  'gmp_jacobi' => 
  array (
    0 => 'int',
    'a' => 'GMP|int|string',
    'b' => 'GMP|int|string',
  ),
  'gmp_legendre' => 
  array (
    0 => 'int',
    'a' => 'GMP|int|string',
    'b' => 'GMP|int|string',
  ),
  'gmp_mod' => 
  array (
    0 => 'GMP',
    'a' => 'GMP|int|string',
    'b' => 'GMP|int|string',
  ),
  'gmp_mul' => 
  array (
    0 => 'GMP',
    'a' => 'GMP|int|string',
    'b' => 'GMP|int|string',
  ),
  'gmp_neg' => 
  array (
    0 => 'GMP',
    'a' => 'GMP|int|string',
  ),
  'gmp_nextprime' => 
  array (
    0 => 'GMP',
    'a' => 'GMP|int|string',
  ),
  'gmp_or' => 
  array (
    0 => 'GMP',
    'a' => 'GMP|int|string',
    'b' => 'GMP|int|string',
  ),
  'gmp_perfect_square' => 
  array (
    0 => 'bool',
    'a' => 'GMP|int|string',
  ),
  'gmp_popcount' => 
  array (
    0 => 'int',
    'a' => 'GMP|int|string',
  ),
  'gmp_pow' => 
  array (
    0 => 'GMP',
    'base' => 'GMP|int|string',
    'exp' => 'int',
  ),
  'gmp_powm' => 
  array (
    0 => 'GMP',
    'base' => 'GMP|int|string',
    'exp' => 'GMP|int|string',
    'mod' => 'GMP|int|string',
  ),
  'gmp_prob_prime' => 
  array (
    0 => 'int',
    'a' => 'GMP|int|string',
    'reps=' => 'int',
  ),
  'gmp_random' => 
  array (
    0 => 'GMP',
    'limiter=' => 'int',
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
    'a' => 'GMP|int|string',
    'nth' => 'int',
  ),
  'gmp_rootrem' => 
  array (
    0 => 'array{0: GMP, 1: GMP}',
    'a' => 'GMP|int|string',
    'nth' => 'int',
  ),
  'gmp_scan0' => 
  array (
    0 => 'int',
    'a' => 'GMP|int|string',
    'start' => 'int',
  ),
  'gmp_scan1' => 
  array (
    0 => 'int',
    'a' => 'GMP|int|string',
    'start' => 'int',
  ),
  'gmp_setbit' => 
  array (
    0 => 'void',
    'a' => 'GMP',
    'index' => 'int',
    'set_clear=' => 'bool',
  ),
  'gmp_sign' => 
  array (
    0 => 'int',
    'a' => 'GMP|int|string',
  ),
  'gmp_sqrt' => 
  array (
    0 => 'GMP',
    'a' => 'GMP|int|string',
  ),
  'gmp_sqrtrem' => 
  array (
    0 => 'array{0: GMP, 1: GMP}',
    'a' => 'GMP|int|string',
  ),
  'gmp_strval' => 
  array (
    0 => 'numeric-string',
    'gmpnumber' => 'GMP|int|string',
    'base=' => 'int',
  ),
  'gmp_sub' => 
  array (
    0 => 'GMP',
    'a' => 'GMP|int|string',
    'b' => 'GMP|int|string',
  ),
  'gmp_testbit' => 
  array (
    0 => 'bool',
    'a' => 'GMP|int|string',
    'index' => 'int',
  ),
  'gmp_xor' => 
  array (
    0 => 'GMP',
    'a' => 'GMP|int|string',
    'b' => 'GMP|int|string',
  ),
  'gmstrftime' => 
  array (
    0 => 'false|string',
    'format' => 'string',
    'timestamp=' => 'int',
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
  'go' => 
  array (
    0 => 'mixed',
    'func' => 'callable',
    '...params=' => 'mixed',
  ),
  'gopher_parsedir' => 
  array (
    0 => 'array<array-key, mixed>',
    'dirent' => 'string',
  ),
  'grapheme_extract' => 
  array (
    0 => 'false|string',
    'arg1' => 'string',
    'arg2' => 'int',
    'arg3=' => 'int',
    'arg4=' => 'int',
    '&w_arg5=' => 'int',
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
    'before_needle=' => 'bool',
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
    'before_needle=' => 'bool',
  ),
  'grapheme_substr' => 
  array (
    0 => 'false|string',
    'string' => 'string',
    'start' => 'int',
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
  'grpc\\call::cancel' => 
  array (
    0 => 'mixed',
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
  'grpc\\channel::close' => 
  array (
    0 => 'mixed',
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
  'grpc\\timeval::sleepuntil' => 
  array (
    0 => 'mixed',
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
    'fp' => 'resource',
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
    'max_decoded_len=' => 'int',
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
    'fp' => 'resource',
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
    'fp' => 'resource',
  ),
  'gzgets' => 
  array (
    0 => 'false|string',
    'fp' => 'resource',
    'length=' => 'int',
  ),
  'gzgetss' => 
  array (
    0 => 'false|string',
    'fp' => 'resource',
    'length=' => 'int',
    'allowable_tags=' => 'string',
  ),
  'gzinflate' => 
  array (
    0 => 'false|string',
    'data' => 'string',
    'max_decoded_len=' => 'int',
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
    'fp' => 'resource',
  ),
  'gzputs' => 
  array (
    0 => 'false|int',
    'fp' => 'resource',
    'str' => 'string',
    'length=' => 'int',
  ),
  'gzread' => 
  array (
    0 => '0|string',
    'fp' => 'resource',
    'length' => 'int',
  ),
  'gzrewind' => 
  array (
    0 => 'bool',
    'fp' => 'resource',
  ),
  'gzseek' => 
  array (
    0 => 'int',
    'fp' => 'resource',
    'offset' => 'int',
    'whence=' => 'int',
  ),
  'gztell' => 
  array (
    0 => 'false|int',
    'fp' => 'resource',
  ),
  'gzuncompress' => 
  array (
    0 => 'false|string',
    'data' => 'string',
    'max_decoded_len=' => 'int',
  ),
  'gzwrite' => 
  array (
    0 => 'false|int',
    'fp' => 'resource',
    'str' => 'string',
    'length=' => 'int',
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
    0 => 'false|string',
    'algo' => 'string',
    'data' => 'string',
    'raw_output=' => 'bool',
  ),
  'hash_algos' => 
  array (
    0 => 'list<string>',
  ),
  'hash_copy' => 
  array (
    0 => 'resource',
    'context' => 'resource',
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
    'raw_output=' => 'bool',
  ),
  'hash_final' => 
  array (
    0 => 'non-empty-string',
    'context' => 'resource',
    'raw_output=' => 'bool',
  ),
  'hash_hmac' => 
  array (
    0 => 'false|non-empty-string',
    'algo' => 'string',
    'data' => 'string',
    'key' => 'string',
    'raw_output=' => 'bool',
  ),
  'hash_hmac_file' => 
  array (
    0 => 'false|non-empty-string',
    'algo' => 'string',
    'filename' => 'string',
    'key' => 'string',
    'raw_output=' => 'bool',
  ),
  'hash_init' => 
  array (
    0 => 'resource',
    'algo' => 'string',
    'options=' => 'int',
    'key=' => 'string',
  ),
  'hash_pbkdf2' => 
  array (
    0 => 'non-empty-string',
    'algo' => 'string',
    'password' => 'string',
    'salt' => 'string',
    'iterations' => 'int',
    'length=' => 'int',
    'raw_output=' => 'bool',
  ),
  'hash_update' => 
  array (
    0 => 'bool',
    'context' => 'resource',
    'data' => 'string',
  ),
  'hash_update_file' => 
  array (
    0 => 'bool',
    'context=' => 'resource',
    'filename' => 'string',
  ),
  'hash_update_stream' => 
  array (
    0 => 'int',
    'context' => 'resource',
    'handle' => 'resource',
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
    'http_response_code=' => 'int',
  ),
  'header_register_callback' => 
  array (
    0 => 'bool',
    'callback' => 'callable():void',
  ),
  'header_remove' => 
  array (
    0 => 'void',
    'name=' => 'string',
  ),
  'headers_list' => 
  array (
    0 => 'list<string>',
  ),
  'headers_sent' => 
  array (
    0 => 'bool',
    '&w_file=' => 'string',
    '&w_line=' => 'int',
  ),
  'hebrev' => 
  array (
    0 => 'string',
    'str' => 'string',
    'max_chars_per_line=' => 'int',
  ),
  'hebrevc' => 
  array (
    0 => 'string',
    'str' => 'string',
    'max_chars_per_line=' => 'int',
  ),
  'hex2bin' => 
  array (
    0 => 'false|string',
    'data' => 'string',
  ),
  'hexdec' => 
  array (
    0 => 'float|int',
    'hexadecimal_number' => 'string',
  ),
  'highlight_file' => 
  array (
    0 => 'bool|string',
    'file_name' => 'string',
    'return=' => 'bool',
  ),
  'highlight_string' => 
  array (
    0 => 'bool|string',
    'string' => 'string',
    'return=' => 'bool',
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
    'quote_style=' => 'int',
    'encoding=' => 'string',
  ),
  'htmlentities' => 
  array (
    0 => 'string',
    'string' => 'string',
    'quote_style=' => 'int',
    'encoding=' => 'string',
    'double_encode=' => 'bool',
  ),
  'htmlspecialchars' => 
  array (
    0 => 'string',
    'string' => 'string',
    'quote_style=' => 'int',
    'encoding=' => 'null|string',
    'double_encode=' => 'bool',
  ),
  'htmlspecialchars_decode' => 
  array (
    0 => 'string',
    'string' => 'string',
    'quote_style=' => 'int',
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
    'formdata' => 'array<array-key, mixed>|object',
    'prefix=' => 'string',
    'arg_separator=' => 'null|string',
    'enc_type=' => 'int',
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
    'num1' => 'float',
    'num2' => 'float',
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
    'in_charset' => 'string',
    'out_charset' => 'string',
    'str' => 'string',
  ),
  'iconv_get_encoding' => 
  array (
    0 => 'array<array-key, mixed>|false|string',
    'type=' => 'string',
  ),
  'iconv_mime_decode' => 
  array (
    0 => 'false|string',
    'encoded_string' => 'string',
    'mode=' => 'int',
    'charset=' => 'string',
  ),
  'iconv_mime_decode_headers' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'headers' => 'string',
    'mode=' => 'int',
    'charset=' => 'string',
  ),
  'iconv_mime_encode' => 
  array (
    0 => 'false|string',
    'field_name' => 'string',
    'field_value' => 'string',
    'preference=' => 'array<array-key, mixed>',
  ),
  'iconv_set_encoding' => 
  array (
    0 => 'bool',
    'type' => 'string',
    'charset' => 'string',
  ),
  'iconv_strlen' => 
  array (
    0 => 'false|int<0, max>',
    'str' => 'string',
    'charset=' => 'string',
  ),
  'iconv_strpos' => 
  array (
    0 => 'false|int',
    'haystack' => 'string',
    'needle' => 'string',
    'offset=' => 'int',
    'charset=' => 'string',
  ),
  'iconv_strrpos' => 
  array (
    0 => 'false|int',
    'haystack' => 'string',
    'needle' => 'string',
    'charset=' => 'string',
  ),
  'iconv_substr' => 
  array (
    0 => 'false|string',
    'str' => 'string',
    'offset' => 'int',
    'length=' => 'int',
    'charset=' => 'string',
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
    'timestamp=' => 'int',
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
    'option=' => 'int',
    'variant=' => 'int',
    '&w_idn_info=' => 'array<array-key, mixed>',
  ),
  'idn_to_utf8' => 
  array (
    0 => 'false|string',
    'domain' => 'string',
    'option=' => 'int',
    'variant=' => 'int',
    '&w_idn_info=' => 'array<array-key, mixed>',
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
    'value=' => 'bool',
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
  'image2wbmp' => 
  array (
    0 => 'bool',
    'im' => 'resource',
    'filename=' => 'null|string',
    'threshold=' => 'int',
  ),
  'image_type_to_extension' => 
  array (
    0 => 'string',
    'imagetype' => 'int',
    'include_dot=' => 'bool',
  ),
  'image_type_to_mime_type' => 
  array (
    0 => 'string',
    'imagetype' => 'int',
  ),
  'imageaffine' => 
  array (
    0 => 'false|resource',
    'im' => 'resource',
    'affine' => 'array<array-key, mixed>',
    'clip=' => 'array<array-key, mixed>',
  ),
  'imageaffinematrixconcat' => 
  array (
    0 => 'array{0: float, 1: float, 2: float, 3: float, 4: float, 5: float}|false',
    'm1' => 'array<array-key, mixed>',
    'm2' => 'array<array-key, mixed>',
  ),
  'imageaffinematrixget' => 
  array (
    0 => 'array{0: float, 1: float, 2: float, 3: float, 4: float, 5: float}|false',
    'type' => 'int',
    'options=' => 'array<array-key, mixed>|float',
  ),
  'imagealphablending' => 
  array (
    0 => 'bool',
    'im' => 'resource',
    'blend' => 'bool',
  ),
  'imageantialias' => 
  array (
    0 => 'bool',
    'im' => 'resource',
    'on' => 'bool',
  ),
  'imagearc' => 
  array (
    0 => 'bool',
    'im' => 'resource',
    'cx' => 'int',
    'cy' => 'int',
    'w' => 'int',
    'h' => 'int',
    's' => 'int',
    'e' => 'int',
    'col' => 'int',
  ),
  'imagechar' => 
  array (
    0 => 'bool',
    'im' => 'resource',
    'font' => 'int',
    'x' => 'int',
    'y' => 'int',
    'c' => 'string',
    'col' => 'int',
  ),
  'imagecharup' => 
  array (
    0 => 'bool',
    'im' => 'resource',
    'font' => 'int',
    'x' => 'int',
    'y' => 'int',
    'c' => 'string',
    'col' => 'int',
  ),
  'imagecolorallocate' => 
  array (
    0 => 'false|int',
    'im' => 'resource',
    'red' => 'int',
    'green' => 'int',
    'blue' => 'int',
  ),
  'imagecolorallocatealpha' => 
  array (
    0 => 'false|int',
    'im' => 'resource',
    'red' => 'int',
    'green' => 'int',
    'blue' => 'int',
    'alpha' => 'int',
  ),
  'imagecolorat' => 
  array (
    0 => 'false|int',
    'im' => 'resource',
    'x' => 'int',
    'y' => 'int',
  ),
  'imagecolorclosest' => 
  array (
    0 => 'int',
    'im' => 'resource',
    'red' => 'int',
    'green' => 'int',
    'blue' => 'int',
  ),
  'imagecolorclosestalpha' => 
  array (
    0 => 'int',
    'im' => 'resource',
    'red' => 'int',
    'green' => 'int',
    'blue' => 'int',
    'alpha' => 'int',
  ),
  'imagecolorclosesthwb' => 
  array (
    0 => 'int',
    'im' => 'resource',
    'red' => 'int',
    'green' => 'int',
    'blue' => 'int',
  ),
  'imagecolordeallocate' => 
  array (
    0 => 'bool',
    'im' => 'resource',
    'index' => 'int',
  ),
  'imagecolorexact' => 
  array (
    0 => 'int',
    'im' => 'resource',
    'red' => 'int',
    'green' => 'int',
    'blue' => 'int',
  ),
  'imagecolorexactalpha' => 
  array (
    0 => 'int',
    'im' => 'resource',
    'red' => 'int',
    'green' => 'int',
    'blue' => 'int',
    'alpha' => 'int',
  ),
  'imagecolormatch' => 
  array (
    0 => 'bool',
    'im1' => 'resource',
    'im2' => 'resource',
  ),
  'imagecolorresolve' => 
  array (
    0 => 'int',
    'im' => 'resource',
    'red' => 'int',
    'green' => 'int',
    'blue' => 'int',
  ),
  'imagecolorresolvealpha' => 
  array (
    0 => 'int',
    'im' => 'resource',
    'red' => 'int',
    'green' => 'int',
    'blue' => 'int',
    'alpha' => 'int',
  ),
  'imagecolorset' => 
  array (
    0 => 'false|null',
    'im' => 'resource',
    'color' => 'int',
    'red' => 'int',
    'green' => 'int',
    'blue' => 'int',
    'alpha=' => 'int',
  ),
  'imagecolorsforindex' => 
  array (
    0 => 'array<array-key, mixed>',
    'im' => 'resource',
    'index' => 'int',
  ),
  'imagecolorstotal' => 
  array (
    0 => 'int',
    'im' => 'resource',
  ),
  'imagecolortransparent' => 
  array (
    0 => 'int',
    'im' => 'resource',
    'col=' => 'int',
  ),
  'imageconvolution' => 
  array (
    0 => 'bool',
    'im' => 'resource',
    'matrix3x3' => 'array<array-key, mixed>',
    'div' => 'float',
    'offset' => 'float',
  ),
  'imagecopy' => 
  array (
    0 => 'bool',
    'dst_im' => 'resource',
    'src_im' => 'resource',
    'dst_x' => 'int',
    'dst_y' => 'int',
    'src_x' => 'int',
    'src_y' => 'int',
    'src_w' => 'int',
    'src_h' => 'int',
  ),
  'imagecopymerge' => 
  array (
    0 => 'bool',
    'src_im' => 'resource',
    'dst_im' => 'resource',
    'dst_x' => 'int',
    'dst_y' => 'int',
    'src_x' => 'int',
    'src_y' => 'int',
    'src_w' => 'int',
    'src_h' => 'int',
    'pct' => 'int',
  ),
  'imagecopymergegray' => 
  array (
    0 => 'bool',
    'src_im' => 'resource',
    'dst_im' => 'resource',
    'dst_x' => 'int',
    'dst_y' => 'int',
    'src_x' => 'int',
    'src_y' => 'int',
    'src_w' => 'int',
    'src_h' => 'int',
    'pct' => 'int',
  ),
  'imagecopyresampled' => 
  array (
    0 => 'bool',
    'dst_im' => 'resource',
    'src_im' => 'resource',
    'dst_x' => 'int',
    'dst_y' => 'int',
    'src_x' => 'int',
    'src_y' => 'int',
    'dst_w' => 'int',
    'dst_h' => 'int',
    'src_w' => 'int',
    'src_h' => 'int',
  ),
  'imagecopyresized' => 
  array (
    0 => 'bool',
    'dst_im' => 'resource',
    'src_im' => 'resource',
    'dst_x' => 'int',
    'dst_y' => 'int',
    'src_x' => 'int',
    'src_y' => 'int',
    'dst_w' => 'int',
    'dst_h' => 'int',
    'src_w' => 'int',
    'src_h' => 'int',
  ),
  'imagecreate' => 
  array (
    0 => 'false|resource',
    'x_size' => 'int',
    'y_size' => 'int',
  ),
  'imagecreatefromgd' => 
  array (
    0 => 'false|resource',
    'filename' => 'string',
  ),
  'imagecreatefromgd2' => 
  array (
    0 => 'false|resource',
    'filename' => 'string',
  ),
  'imagecreatefromgd2part' => 
  array (
    0 => 'false|resource',
    'filename' => 'string',
    'srcX' => 'int',
    'srcY' => 'int',
    'width' => 'int',
    'height' => 'int',
  ),
  'imagecreatefromgif' => 
  array (
    0 => 'false|resource',
    'filename' => 'string',
  ),
  'imagecreatefromjpeg' => 
  array (
    0 => 'false|resource',
    'filename' => 'string',
  ),
  'imagecreatefrompng' => 
  array (
    0 => 'false|resource',
    'filename' => 'string',
  ),
  'imagecreatefromstring' => 
  array (
    0 => 'false|resource',
    'image' => 'string',
  ),
  'imagecreatefromwbmp' => 
  array (
    0 => 'false|resource',
    'filename' => 'string',
  ),
  'imagecreatefromwebp' => 
  array (
    0 => 'false|resource',
    'filename' => 'string',
  ),
  'imagecreatefromxbm' => 
  array (
    0 => 'false|resource',
    'filename' => 'string',
  ),
  'imagecreatefromxpm' => 
  array (
    0 => 'false|resource',
    'filename' => 'string',
  ),
  'imagecreatetruecolor' => 
  array (
    0 => 'false|resource',
    'x_size' => 'int',
    'y_size' => 'int',
  ),
  'imagecrop' => 
  array (
    0 => 'false|resource',
    'im' => 'resource',
    'rect' => 'array<array-key, mixed>',
  ),
  'imagecropauto' => 
  array (
    0 => 'false|resource',
    'im' => 'resource',
    'mode=' => 'int',
    'threshold=' => 'float',
    'color=' => 'int',
  ),
  'imagedashedline' => 
  array (
    0 => 'bool',
    'im' => 'resource',
    'x1' => 'int',
    'y1' => 'int',
    'x2' => 'int',
    'y2' => 'int',
    'col' => 'int',
  ),
  'imagedestroy' => 
  array (
    0 => 'bool',
    'im' => 'resource',
  ),
  'imageellipse' => 
  array (
    0 => 'bool',
    'im' => 'resource',
    'cx' => 'int',
    'cy' => 'int',
    'w' => 'int',
    'h' => 'int',
    'color' => 'int',
  ),
  'imagefill' => 
  array (
    0 => 'bool',
    'im' => 'resource',
    'x' => 'int',
    'y' => 'int',
    'col' => 'int',
  ),
  'imagefilledarc' => 
  array (
    0 => 'bool',
    'im' => 'resource',
    'cx' => 'int',
    'cy' => 'int',
    'w' => 'int',
    'h' => 'int',
    's' => 'int',
    'e' => 'int',
    'col' => 'int',
    'style' => 'int',
  ),
  'imagefilledellipse' => 
  array (
    0 => 'bool',
    'im' => 'resource',
    'cx' => 'int',
    'cy' => 'int',
    'w' => 'int',
    'h' => 'int',
    'color' => 'int',
  ),
  'imagefilledpolygon' => 
  array (
    0 => 'bool',
    'im' => 'resource',
    'points' => 'array<array-key, mixed>',
    'num_pos' => 'int',
    'col' => 'int',
  ),
  'imagefilledrectangle' => 
  array (
    0 => 'bool',
    'im' => 'resource',
    'x1' => 'int',
    'y1' => 'int',
    'x2' => 'int',
    'y2' => 'int',
    'col' => 'int',
  ),
  'imagefilltoborder' => 
  array (
    0 => 'bool',
    'im' => 'resource',
    'x' => 'int',
    'y' => 'int',
    'border' => 'int',
    'col' => 'int',
  ),
  'imagefilter' => 
  array (
    0 => 'bool',
    'im' => 'resource',
    'filtertype' => 'int',
    'arg1=' => 'array<array-key, mixed>|bool|float|int',
    'arg2=' => 'mixed',
    'arg3=' => 'mixed',
    'arg4=' => 'mixed',
  ),
  'imageflip' => 
  array (
    0 => 'bool',
    'im' => 'resource',
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
    'font_file' => 'string',
    'text' => 'string',
    'extrainfo=' => 'array<array-key, mixed>',
  ),
  'imagefttext' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'im' => 'resource',
    'size' => 'float',
    'angle' => 'float',
    'x' => 'int',
    'y' => 'int',
    'col' => 'int',
    'font_file' => 'string',
    'text' => 'string',
    'extrainfo=' => 'array<array-key, mixed>',
  ),
  'imagegammacorrect' => 
  array (
    0 => 'bool',
    'im' => 'resource',
    'inputgamma' => 'float',
    'outputgamma' => 'float',
  ),
  'imagegd' => 
  array (
    0 => 'bool',
    'im' => 'resource',
    'filename=' => 'null|resource|string',
  ),
  'imagegd2' => 
  array (
    0 => 'bool',
    'im' => 'resource',
    'filename=' => 'null|resource|string',
    'chunk_size=' => 'int',
    'type=' => 'int',
  ),
  'imagegif' => 
  array (
    0 => 'bool',
    'im' => 'resource',
    'filename=' => 'null|resource|string',
  ),
  'imagegrabscreen' => 
  array (
    0 => 'false|resource',
  ),
  'imagegrabwindow' => 
  array (
    0 => 'false|resource',
    'window_handle' => 'int',
    'client_area=' => 'int',
  ),
  'imageinterlace' => 
  array (
    0 => 'false|int',
    'im' => 'resource',
    'interlace=' => 'int',
  ),
  'imageistruecolor' => 
  array (
    0 => 'bool',
    'im' => 'resource',
  ),
  'imagejpeg' => 
  array (
    0 => 'bool',
    'im' => 'resource',
    'filename=' => 'null|resource|string',
    'quality=' => 'int',
  ),
  'imagelayereffect' => 
  array (
    0 => 'bool',
    'im' => 'resource',
    'effect' => 'int',
  ),
  'imageline' => 
  array (
    0 => 'bool',
    'im' => 'resource',
    'x1' => 'int',
    'y1' => 'int',
    'x2' => 'int',
    'y2' => 'int',
    'col' => 'int',
  ),
  'imageloadfont' => 
  array (
    0 => 'false|int',
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
  'imagepalettecopy' => 
  array (
    0 => 'void',
    'dst' => 'resource',
    'src' => 'resource',
  ),
  'imagepalettetotruecolor' => 
  array (
    0 => 'bool',
    'im' => 'resource',
  ),
  'imagepng' => 
  array (
    0 => 'bool',
    'im' => 'resource',
    'filename=' => 'null|resource|string',
    'quality=' => 'int',
    'filters=' => 'int',
  ),
  'imagepolygon' => 
  array (
    0 => 'bool',
    'im' => 'resource',
    'points' => 'array<array-key, mixed>',
    'num_pos' => 'int',
    'col' => 'int',
  ),
  'imagerectangle' => 
  array (
    0 => 'bool',
    'im' => 'resource',
    'x1' => 'int',
    'y1' => 'int',
    'x2' => 'int',
    'y2' => 'int',
    'col' => 'int',
  ),
  'imagerotate' => 
  array (
    0 => 'false|resource',
    'im' => 'resource',
    'angle' => 'float',
    'bgdcolor' => 'int',
    'ignoretransparent=' => 'int',
  ),
  'imagesavealpha' => 
  array (
    0 => 'bool',
    'im' => 'resource',
    'save' => 'bool',
  ),
  'imagescale' => 
  array (
    0 => 'false|resource',
    'im' => 'resource',
    'new_width' => 'int',
    'new_height=' => 'int',
    'mode=' => 'int',
  ),
  'imagesetbrush' => 
  array (
    0 => 'bool',
    'im' => 'resource',
    'brush' => 'resource',
  ),
  'imagesetinterpolation' => 
  array (
    0 => 'bool',
    'im' => 'resource',
    'method' => 'int',
  ),
  'imagesetpixel' => 
  array (
    0 => 'bool',
    'im' => 'resource',
    'x' => 'int',
    'y' => 'int',
    'col' => 'int',
  ),
  'imagesetstyle' => 
  array (
    0 => 'bool',
    'im' => 'resource',
    'styles' => 'non-empty-array<array-key, mixed>',
  ),
  'imagesetthickness' => 
  array (
    0 => 'bool',
    'im' => 'resource',
    'thickness' => 'int',
  ),
  'imagesettile' => 
  array (
    0 => 'bool',
    'im' => 'resource',
    'tile' => 'resource',
  ),
  'imagestring' => 
  array (
    0 => 'bool',
    'im' => 'resource',
    'font' => 'int',
    'x' => 'int',
    'y' => 'int',
    'str' => 'string',
    'col' => 'int',
  ),
  'imagestringup' => 
  array (
    0 => 'bool',
    'im' => 'resource',
    'font' => 'int',
    'x' => 'int',
    'y' => 'int',
    'str' => 'string',
    'col' => 'int',
  ),
  'imagesx' => 
  array (
    0 => 'int',
    'im' => 'resource',
  ),
  'imagesy' => 
  array (
    0 => 'int',
    'im' => 'resource',
  ),
  'imagetruecolortopalette' => 
  array (
    0 => 'bool',
    'im' => 'resource',
    'ditherFlag' => 'bool',
    'colorsWanted' => 'int',
  ),
  'imagettfbbox' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'size' => 'float',
    'angle' => 'float',
    'font_file' => 'string',
    'text' => 'string',
  ),
  'imagettftext' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'im' => 'resource',
    'size' => 'float',
    'angle' => 'float',
    'x' => 'int',
    'y' => 'int',
    'col' => 'int',
    'font_file' => 'string',
    'text' => 'string',
  ),
  'imagetypes' => 
  array (
    0 => 'int',
  ),
  'imagewbmp' => 
  array (
    0 => 'bool',
    'im' => 'resource',
    'filename=' => 'null|resource|string',
    'foreground=' => 'int',
  ),
  'imagewebp' => 
  array (
    0 => 'bool',
    'im' => 'resource',
    'filename=' => 'null|resource|string',
    'quality=' => 'int',
  ),
  'imagexbm' => 
  array (
    0 => 'bool',
    'im' => 'resource',
    'filename' => 'null|string',
    'foreground=' => 'int',
  ),
  'imagick::__construct' => 
  array (
    0 => 'void',
    'files=' => 'array<array-key, string>|string',
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
    'legacy=' => 'mixed',
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
  'imagick::addnoiseimagewithattenuate' => 
  array (
    0 => 'mixed',
    'noise' => 'mixed',
    'attenuate' => 'mixed',
    'channel=' => 'mixed',
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
    0 => 'bool',
    'channel=' => 'int',
  ),
  'imagick::autolevelimage' => 
  array (
    0 => 'void',
    'channel=' => 'string',
  ),
  'imagick::autoorient' => 
  array (
    0 => 'bool',
  ),
  'imagick::autoorientate' => 
  array (
    0 => 'mixed',
  ),
  'imagick::averageimages' => 
  array (
    0 => 'Imagick',
  ),
  'imagick::blackthresholdimage' => 
  array (
    0 => 'bool',
    'threshold_color' => 'mixed',
  ),
  'imagick::blueshiftimage' => 
  array (
    0 => 'void',
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
    'border_color' => 'mixed',
    'width' => 'int',
    'height' => 'int',
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
    0 => 'void',
    'brightness' => 'string',
    'contrast' => 'string',
    'channel=' => 'string',
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
  'imagick::channelfximage' => 
  array (
    0 => 'mixed',
    'expression' => 'mixed',
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
    0 => 'void',
    'channel=' => 'string',
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
    'inside' => 'string',
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
    'channel=' => 'float',
  ),
  'imagick::coalesceimages' => 
  array (
    0 => 'Imagick',
  ),
  'imagick::colordecisionlistimage' => 
  array (
    0 => 'mixed',
    'color_correction_collection' => 'mixed',
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
    'colorize_color' => 'mixed',
    'opacity_color' => 'mixed',
    'legacy=' => 'mixed',
  ),
  'imagick::colormatriximage' => 
  array (
    0 => 'void',
    'color_matrix' => 'string',
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
    'kernel' => 'array<array-key, mixed>',
    'channel=' => 'int',
  ),
  'imagick::count' => 
  array (
    0 => 'void',
    'mode=' => 'string',
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
    0 => 'void',
    'name' => 'string',
  ),
  'imagick::deleteoption' => 
  array (
    0 => 'mixed',
    'option' => 'mixed',
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
    0 => 'bool',
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
    'fill_color' => 'mixed',
    'fuzz' => 'float',
    'border_color' => 'mixed',
    'x' => 'int',
    'y' => 'int',
    'invert' => 'bool',
    'channel=' => 'int',
  ),
  'imagick::flopimage' => 
  array (
    0 => 'bool',
  ),
  'imagick::forwardfouriertransformimage' => 
  array (
    0 => 'void',
    'magnitude' => 'bool',
  ),
  'imagick::frameimage' => 
  array (
    0 => 'bool',
    'matte_color' => 'mixed',
    'width' => 'int',
    'height' => 'int',
    'inner_bevel' => 'int',
    'outer_bevel' => 'int',
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
    0 => 'string',
    'pattern=' => 'mixed',
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
    0 => 'false|string',
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
    0 => 'int',
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
    0 => 'int',
  ),
  'imagick::getimageartifact' => 
  array (
    0 => 'string',
    'artifact' => 'string',
  ),
  'imagick::getimageartifacts' => 
  array (
    0 => 'mixed',
    'pattern=' => 'mixed',
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
    0 => 'string',
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
  'imagick::getimagekurtosis' => 
  array (
    0 => 'mixed',
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
  'imagick::getimagemean' => 
  array (
    0 => 'mixed',
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
    0 => 'false|string',
    'name' => 'string',
  ),
  'imagick::getimagerange' => 
  array (
    0 => 'mixed',
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
  'imagick::getinterpolatemethod' => 
  array (
    0 => 'mixed',
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
  'imagick::getresolution' => 
  array (
    0 => 'mixed',
  ),
  'imagick::getresource' => 
  array (
    0 => 'int',
    'type' => 'int',
  ),
  'imagick::getresourcelimit' => 
  array (
    0 => 'int',
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
  'imagick::gettype' => 
  array (
    0 => 'mixed',
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
    0 => 'false|string',
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
  'imagick::implodeimagewithmethod' => 
  array (
    0 => 'mixed',
    'radius' => 'mixed',
    'pixel_interpolate_method' => 'mixed',
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
  'imagick::interpolativeresizeimage' => 
  array (
    0 => 'mixed',
    'columns' => 'mixed',
    'rows' => 'mixed',
    'interpolate' => 'mixed',
  ),
  'imagick::inversefouriertransformimage' => 
  array (
    0 => 'void',
    'complement' => 'Imagick',
    'magnitude' => 'string',
  ),
  'imagick::key' => 
  array (
    0 => 'int|string',
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
    0 => 'void',
    'morphology' => 'int',
    'iterations' => 'int',
    'kernel' => 'ImagickKernel',
    'channel=' => 'string',
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
    'background_color' => 'mixed',
    'format=' => 'string',
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
  'imagick::oilpaintimagewithsigma' => 
  array (
    0 => 'mixed',
    'radius' => 'mixed',
    'sigma' => 'mixed',
  ),
  'imagick::opaquepaintimage' => 
  array (
    0 => 'bool',
    'target_color' => 'mixed',
    'fill_color' => 'mixed',
    'fuzz' => 'float',
    'invert' => 'bool',
    'channel=' => 'int',
  ),
  'imagick::optimizeimagelayers' => 
  array (
    0 => 'bool',
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
    'filename=' => 'string',
  ),
  'imagick::polaroidimage' => 
  array (
    0 => 'bool',
    'settings' => 'ImagickDraw',
    'angle' => 'float',
  ),
  'imagick::polaroidwithtextandmethod' => 
  array (
    0 => 'mixed',
    'settings' => 'ImagickDraw',
    'angle' => 'mixed',
    'caption' => 'mixed',
    'method' => 'mixed',
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
    'profile' => 'string',
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
    'multiline=' => 'bool',
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
    'filename=' => 'string',
  ),
  'imagick::readimagefile' => 
  array (
    0 => 'bool',
    'filehandle' => 'resource',
    'filename=' => 'string',
  ),
  'imagick::readimages' => 
  array (
    0 => 'Imagick',
    'filenames' => 'string',
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
  'imagick::resetiterator' => 
  array (
    0 => 'mixed',
  ),
  'imagick::resizeimage' => 
  array (
    0 => 'bool',
    'columns' => 'int',
    'rows' => 'int',
    'filter' => 'int',
    'blur' => 'float',
    'bestfit=' => 'bool',
    'legacy=' => 'mixed',
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
    'background_color' => 'mixed',
    'degrees' => 'float',
  ),
  'imagick::rotationalblurimage' => 
  array (
    0 => 'void',
    'angle' => 'string',
    'channel=' => 'string',
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
    'legacy=' => 'mixed',
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
    0 => 'void',
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
    0 => 'int',
    'antialias' => 'bool',
  ),
  'imagick::setbackgroundcolor' => 
  array (
    0 => 'bool',
    'background_color' => 'mixed',
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
    'value' => 'string',
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
    'background_color' => 'mixed',
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
  ),
  'imagick::setimagebordercolor' => 
  array (
    0 => 'bool',
    'border_color' => 'mixed',
  ),
  'imagick::setimagechanneldepth' => 
  array (
    0 => 'bool',
    'channel' => 'int',
    'depth' => 'int',
  ),
  'imagick::setimagechannelmask' => 
  array (
    0 => 'mixed',
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
    'matte_color' => 'mixed',
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
  'imagick::setimageprogressmonitor' => 
  array (
    0 => 'mixed',
    'filename' => 'mixed',
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
  ),
  'imagick::setinterlacescheme' => 
  array (
    0 => 'bool',
    'interlace' => 'int',
  ),
  'imagick::setinterpolatemethod' => 
  array (
    0 => 'mixed',
    'method' => 'mixed',
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
  'imagick::setorientation' => 
  array (
    0 => 'mixed',
    'orientation' => 'mixed',
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
    0 => 'void',
    'callback' => 'callable',
  ),
  'imagick::setregistry' => 
  array (
    0 => 'void',
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
    'background_color' => 'mixed',
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
    'stack' => 'string',
    'offset' => 'string',
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
  'imagick::spreadimagewithmethod' => 
  array (
    0 => 'mixed',
    'radius' => 'mixed',
    'interpolate_method' => 'mixed',
  ),
  'imagick::statisticimage' => 
  array (
    0 => 'void',
    'type' => 'int',
    'width' => 'int',
    'height' => 'int',
    'channel=' => 'string',
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
    'threshold=' => 'mixed',
    'metric=' => 'mixed',
  ),
  'imagick::swirlimage' => 
  array (
    0 => 'bool',
    'degrees' => 'float',
  ),
  'imagick::swirlimagewithmethod' => 
  array (
    0 => 'mixed',
    'degrees' => 'mixed',
    'interpolate_method' => 'mixed',
  ),
  'imagick::textureimage' => 
  array (
    0 => 'bool',
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
    'columns' => 'int',
    'rows' => 'int',
    'bestfit=' => 'bool',
    'fill=' => 'bool',
    'legacy=' => 'bool',
  ),
  'imagick::tintimage' => 
  array (
    0 => 'bool',
    'tint_color' => 'mixed',
    'opacity_color' => 'mixed',
    'legacy=' => 'mixed',
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
    'target_color' => 'mixed',
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
  'imagick::waveimagewithmethod' => 
  array (
    0 => 'mixed',
    'amplitude' => 'mixed',
    'length' => 'mixed',
    'interpolate_method' => 'mixed',
  ),
  'imagick::whitethresholdimage' => 
  array (
    0 => 'bool',
    'threshold_color' => 'mixed',
  ),
  'imagick::writeimage' => 
  array (
    0 => 'bool',
    'filename=' => 'string',
  ),
  'imagick::writeimagefile' => 
  array (
    0 => 'bool',
    'filehandle' => 'resource',
    'format=' => 'mixed',
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
    'format=' => 'mixed',
  ),
  'imagickdraw::__construct' => 
  array (
    0 => 'void',
  ),
  'imagickdraw::affine' => 
  array (
    0 => 'bool',
    'affine' => 'array<string, float>',
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
    0 => 'false|string',
  ),
  'imagickdraw::getfontfamily' => 
  array (
    0 => 'false|string',
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
    0 => 'bool',
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
    0 => 'void',
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
    0 => 'void',
    'opacity' => 'float',
  ),
  'imagickdraw::setresolution' => 
  array (
    0 => 'void',
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
    'dashes' => 'list<float|int>',
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
    0 => 'void',
    'spacing' => 'float',
  ),
  'imagickdraw::settextinterwordspacing' => 
  array (
    0 => 'void',
    'spacing' => 'float',
  ),
  'imagickdraw::settextkerning' => 
  array (
    0 => 'void',
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
    0 => 'void',
    'kernel' => 'ImagickKernel',
  ),
  'imagickkernel::addunitykernel' => 
  array (
    0 => 'void',
    'scale' => 'mixed',
  ),
  'imagickkernel::frombuiltin' => 
  array (
    0 => 'ImagickKernel',
    'kernel' => 'string',
    'shape' => 'string',
  ),
  'imagickkernel::frommatrix' => 
  array (
    0 => 'ImagickKernel',
    'matrix' => 'list<list<float>>',
    'origin' => 'array<array-key, mixed>',
  ),
  'imagickkernel::getmatrix' => 
  array (
    0 => 'list<list<false|float>>',
  ),
  'imagickkernel::scale' => 
  array (
    0 => 'void',
    'scale' => 'mixed',
    'normalize_kernel=' => 'mixed',
  ),
  'imagickkernel::separate' => 
  array (
    0 => 'array<array-key, ImagickKernel>',
  ),
  'imagickkernel::seperate' => 
  array (
    0 => 'void',
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
    'color=' => 'string',
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
  'imagickpixel::getcolorquantum' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixel::getcolorvalue' => 
  array (
    0 => 'float',
    'color' => 'int',
  ),
  'imagickpixel::getcolorvaluequantum' => 
  array (
    0 => 'mixed',
    'color' => 'mixed',
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
    0 => 'bool',
    'color' => 'ImagickPixel',
    'fuzz' => 'float',
  ),
  'imagickpixel::ispixelsimilarquantum' => 
  array (
    0 => 'bool',
    'color' => 'string',
    'fuzz_quantum_range_scaled_by_square_root_of_three' => 'string',
  ),
  'imagickpixel::issimilar' => 
  array (
    0 => 'bool',
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
    0 => 'void',
    'color_count' => 'string',
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
    0 => 'void',
    'color' => 'int',
    'value' => 'mixed',
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
    0 => 'void',
    'index' => 'int',
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
    0 => 'bool',
  ),
  'imagickpixeliterator::current' => 
  array (
    0 => 'mixed',
  ),
  'imagickpixeliterator::destroy' => 
  array (
    0 => 'bool',
  ),
  'imagickpixeliterator::getcurrentiteratorrow' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'imagickpixeliterator::getiteratorrow' => 
  array (
    0 => 'int',
  ),
  'imagickpixeliterator::getnextiteratorrow' => 
  array (
    0 => 'array<array-key, mixed>',
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
    0 => 'array<array-key, mixed>',
  ),
  'imagickpixeliterator::key' => 
  array (
    0 => 'int|string',
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
    'imap' => 'resource',
    'folder' => 'string',
    'message' => 'string',
    'options=' => 'string',
    'internal_date=' => 'string',
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
    'imap' => 'resource',
    'message_num' => 'int',
    'flags=' => 'int',
  ),
  'imap_bodystruct' => 
  array (
    0 => 'false|stdClass',
    'imap' => 'resource',
    'message_num' => 'int',
    'section' => 'string',
  ),
  'imap_check' => 
  array (
    0 => 'false|stdClass',
    'imap' => 'resource',
  ),
  'imap_clearflag_full' => 
  array (
    0 => 'bool',
    'imap' => 'resource',
    'sequence' => 'string',
    'flag' => 'string',
    'options=' => 'int',
  ),
  'imap_close' => 
  array (
    0 => 'bool',
    'imap' => 'resource',
    'flags=' => 'int',
  ),
  'imap_create' => 
  array (
    0 => 'bool',
    'imap' => 'resource',
    'mailbox' => 'string',
  ),
  'imap_createmailbox' => 
  array (
    0 => 'bool',
    'imap' => 'resource',
    'mailbox' => 'string',
  ),
  'imap_delete' => 
  array (
    0 => 'bool',
    'imap' => 'resource',
    'message_nums' => 'string',
    'flags=' => 'int',
  ),
  'imap_deletemailbox' => 
  array (
    0 => 'bool',
    'imap' => 'resource',
    'mailbox' => 'string',
  ),
  'imap_errors' => 
  array (
    0 => 'array<array-key, mixed>|false',
  ),
  'imap_expunge' => 
  array (
    0 => 'bool',
    'imap' => 'resource',
  ),
  'imap_fetch_overview' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'imap' => 'resource',
    'sequence' => 'string',
    'flags=' => 'int',
  ),
  'imap_fetchbody' => 
  array (
    0 => 'false|string',
    'imap' => 'resource',
    'message_num' => 'int',
    'section' => 'string',
    'flags=' => 'int',
  ),
  'imap_fetchheader' => 
  array (
    0 => 'false|string',
    'imap' => 'resource',
    'message_num' => 'int',
    'flags=' => 'int',
  ),
  'imap_fetchmime' => 
  array (
    0 => 'false|string',
    'imap' => 'resource',
    'message_num' => 'int',
    'section' => 'string',
    'flags=' => 'int',
  ),
  'imap_fetchstructure' => 
  array (
    0 => 'false|stdClass',
    'imap' => 'resource',
    'message_num' => 'int',
    'flags=' => 'int',
  ),
  'imap_fetchtext' => 
  array (
    0 => 'false|string',
    'imap' => 'resource',
    'message_num' => 'int',
    'flags=' => 'int',
  ),
  'imap_gc' => 
  array (
    0 => 'bool',
    'imap' => 'resource',
    'flags' => 'int',
  ),
  'imap_get_quota' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'imap' => 'resource',
    'quota_root' => 'string',
  ),
  'imap_get_quotaroot' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'imap' => 'resource',
    'mailbox' => 'string',
  ),
  'imap_getacl' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'imap' => 'resource',
    'mailbox' => 'string',
  ),
  'imap_getmailboxes' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'imap' => 'resource',
    'reference' => 'string',
    'pattern' => 'string',
  ),
  'imap_getsubscribed' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'imap' => 'resource',
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
    'imap' => 'resource',
    'message_num' => 'int',
    'from_length=' => 'int',
    'subject_length=' => 'int',
    'default_host=' => 'null|string',
  ),
  'imap_headers' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'imap' => 'resource',
  ),
  'imap_last_error' => 
  array (
    0 => 'false|string',
  ),
  'imap_list' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'imap' => 'resource',
    'reference' => 'string',
    'pattern' => 'string',
  ),
  'imap_listmailbox' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'imap' => 'resource',
    'reference' => 'string',
    'pattern' => 'string',
  ),
  'imap_listscan' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'imap' => 'resource',
    'reference' => 'string',
    'pattern' => 'string',
    'content' => 'string',
  ),
  'imap_listsubscribed' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'imap' => 'resource',
    'reference' => 'string',
    'pattern' => 'string',
  ),
  'imap_lsub' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'imap' => 'resource',
    'reference' => 'string',
    'pattern' => 'string',
  ),
  'imap_mail' => 
  array (
    0 => 'bool',
    'to' => 'string',
    'subject' => 'string',
    'message' => 'string',
    'additional_headers=' => 'string',
    'cc=' => 'string',
    'bcc=' => 'string',
    'return_path=' => 'string',
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
    'imap' => 'resource',
    'message_nums' => 'string',
    'mailbox' => 'string',
    'flags=' => 'int',
  ),
  'imap_mail_move' => 
  array (
    0 => 'bool',
    'imap' => 'resource',
    'message_nums' => 'string',
    'mailbox' => 'string',
    'flags=' => 'int',
  ),
  'imap_mailboxmsginfo' => 
  array (
    0 => 'stdClass',
    'imap' => 'resource',
  ),
  'imap_mime_header_decode' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'string' => 'string',
  ),
  'imap_msgno' => 
  array (
    0 => 'int',
    'imap' => 'resource',
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
    'imap' => 'resource',
  ),
  'imap_num_recent' => 
  array (
    0 => 'int',
    'imap' => 'resource',
  ),
  'imap_open' => 
  array (
    0 => 'false|resource',
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
    'imap' => 'resource',
  ),
  'imap_qprint' => 
  array (
    0 => 'false|string',
    'string' => 'string',
  ),
  'imap_rename' => 
  array (
    0 => 'bool',
    'imap' => 'resource',
    'from' => 'string',
    'to' => 'string',
  ),
  'imap_renamemailbox' => 
  array (
    0 => 'bool',
    'imap' => 'resource',
    'from' => 'string',
    'to' => 'string',
  ),
  'imap_reopen' => 
  array (
    0 => 'bool',
    'imap' => 'resource',
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
    'imap' => 'resource',
    'file' => 'resource|string',
    'message_num' => 'int',
    'section=' => 'string',
    'flags=' => 'int',
  ),
  'imap_scan' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'imap' => 'resource',
    'reference' => 'string',
    'pattern' => 'string',
    'content' => 'string',
  ),
  'imap_scanmailbox' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'imap' => 'resource',
    'reference' => 'string',
    'pattern' => 'string',
    'content' => 'string',
  ),
  'imap_search' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'imap' => 'resource',
    'criteria' => 'string',
    'flags=' => 'int',
    'charset=' => 'string',
  ),
  'imap_set_quota' => 
  array (
    0 => 'bool',
    'imap' => 'resource',
    'quota_root' => 'string',
    'mailbox_size' => 'int',
  ),
  'imap_setacl' => 
  array (
    0 => 'bool',
    'imap' => 'resource',
    'mailbox' => 'string',
    'user_id' => 'string',
    'rights' => 'string',
  ),
  'imap_setflag_full' => 
  array (
    0 => 'bool',
    'imap' => 'resource',
    'sequence' => 'string',
    'flag' => 'string',
    'options=' => 'int',
  ),
  'imap_sort' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'imap' => 'resource',
    'criteria' => 'int',
    'reverse' => 'int',
    'flags=' => 'int',
    'search_criteria=' => 'string',
    'charset=' => 'string',
  ),
  'imap_status' => 
  array (
    0 => 'false|stdClass',
    'imap' => 'resource',
    'mailbox' => 'string',
    'flags' => 'int',
  ),
  'imap_subscribe' => 
  array (
    0 => 'bool',
    'imap' => 'resource',
    'mailbox' => 'string',
  ),
  'imap_thread' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'imap' => 'resource',
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
    'imap' => 'resource',
    'message_num' => 'int',
  ),
  'imap_undelete' => 
  array (
    0 => 'bool',
    'imap' => 'resource',
    'message_nums' => 'string',
    'flags=' => 'int',
  ),
  'imap_unsubscribe' => 
  array (
    0 => 'bool',
    'imap' => 'resource',
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
    'glue' => 'string',
    'pieces' => 'array<array-key, mixed>',
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
    'in_addr' => 'string',
  ),
  'inet_pton' => 
  array (
    0 => 'false|string',
    'ip_address' => 'string',
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
    0 => 'Iterator',
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
    'context' => 'resource',
    'encoded_data' => 'string',
    'flush_mode=' => 'int',
  ),
  'inflate_init' => 
  array (
    0 => 'false|resource',
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
    'varname' => 'string',
    'newvalue' => 'string',
  ),
  'ini_get' => 
  array (
    0 => 'false|string',
    'varname' => 'string',
  ),
  'ini_get_all' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'extension=' => 'null|string',
    'details=' => 'bool',
  ),
  'ini_restore' => 
  array (
    0 => 'void',
    'varname' => 'string',
  ),
  'ini_set' => 
  array (
    0 => 'false|string',
    'varname' => 'string',
    'newvalue' => 'string',
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
    'dividend' => 'int',
    'divisor' => 'int',
  ),
  'interface_exists' => 
  array (
    0 => 'bool',
    'classname' => 'string',
    'autoload=' => 'bool',
  ),
  'intl_error_name' => 
  array (
    0 => 'string',
    'arg1' => 'int',
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
    'arg1' => 'int',
  ),
  'intlbreakiterator::__construct' => 
  array (
    0 => 'void',
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
    'locale_type' => 'int',
  ),
  'intlbreakiterator::getpartsiterator' => 
  array (
    0 => 'IntlPartsIterator',
    'key_type=' => 'string',
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
    0 => 'bool|null',
    'text' => 'string',
  ),
  'intlcal_add' => 
  array (
    0 => 'bool',
    'calendar' => 'IntlCalendar',
    'field' => 'int',
    'amount' => 'int',
  ),
  'intlcal_after' => 
  array (
    0 => 'bool',
    'calendar' => 'IntlCalendar',
    'otherCalendar' => 'IntlCalendar',
  ),
  'intlcal_before' => 
  array (
    0 => 'bool',
    'calendar' => 'IntlCalendar',
    'otherCalendar' => 'IntlCalendar',
  ),
  'intlcal_clear' => 
  array (
    0 => 'bool',
    'calendar' => 'IntlCalendar',
    'field=' => 'int|null',
  ),
  'intlcal_create_instance' => 
  array (
    0 => 'IntlCalendar|null',
    'timeZone=' => 'mixed',
    'locale=' => 'null|string',
  ),
  'intlcal_equals' => 
  array (
    0 => 'bool',
    'calendar' => 'IntlCalendar',
    'otherCalendar' => 'IntlCalendar',
  ),
  'intlcal_field_difference' => 
  array (
    0 => 'false|int',
    'calendar' => 'IntlCalendar',
    'when' => 'float',
    'field' => 'int',
  ),
  'intlcal_from_date_time' => 
  array (
    0 => 'IntlCalendar|null',
    'dateTime' => 'DateTime|string',
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
    'key' => 'string',
    'locale' => 'string',
    'commonlyUsed' => 'bool',
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
    'localeType' => 'int',
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
    'otherCalendar' => 'IntlCalendar',
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
    'date=' => 'float|null',
  ),
  'intlcal_roll' => 
  array (
    0 => 'bool',
    'calendar' => 'IntlCalendar',
    'field' => 'int',
    'amountOrUpOrDown=' => 'mixed',
  ),
  'intlcal_set' => 
  array (
    0 => 'bool',
    'calendar' => 'IntlCalendar',
    'fieldOrYear' => 'int',
    'valueOrMonth' => 'int',
    'dayOfMonth=' => 'mixed',
    'hour=' => 'mixed',
    'minute=' => 'mixed',
    'second=' => 'mixed',
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
    0 => 'bool',
    'calendar' => 'IntlCalendar',
    'dayOfWeek' => 'int',
  ),
  'intlcal_set_lenient' => 
  array (
    0 => 'bool',
    'calendar' => 'IntlCalendar',
    'isLenient' => 'bool',
  ),
  'intlcal_set_minimal_days_in_first_week' => 
  array (
    0 => 'mixed',
    'calendar' => 'IntlCalendar',
    'numberOfDays' => 'mixed',
  ),
  'intlcal_set_repeated_wall_time_option' => 
  array (
    0 => 'true',
    'calendar' => 'IntlCalendar',
    'wallTimeOption' => 'int',
  ),
  'intlcal_set_skipped_wall_time_option' => 
  array (
    0 => 'true',
    'calendar' => 'IntlCalendar',
    'wallTimeOption' => 'int',
  ),
  'intlcal_set_time' => 
  array (
    0 => 'bool',
    'calendar' => 'IntlCalendar',
    'date' => 'float',
  ),
  'intlcal_set_time_zone' => 
  array (
    0 => 'bool',
    'calendar' => 'IntlCalendar',
    'timeZone' => 'mixed',
  ),
  'intlcal_to_date_time' => 
  array (
    0 => 'DateTime|false',
    'calendar' => 'IntlCalendar',
  ),
  'intlcalendar::__construct' => 
  array (
    0 => 'void',
  ),
  'intlcalendar::add' => 
  array (
    0 => 'bool',
    'field' => 'int',
    'amount' => 'int',
  ),
  'intlcalendar::after' => 
  array (
    0 => 'bool',
    'calendar' => 'IntlCalendar',
  ),
  'intlcalendar::before' => 
  array (
    0 => 'bool',
    'calendar' => 'IntlCalendar',
  ),
  'intlcalendar::clear' => 
  array (
    0 => 'bool',
    'field=' => 'int|null',
  ),
  'intlcalendar::createinstance' => 
  array (
    0 => 'IntlCalendar|null',
    'timeZone=' => 'DateTimeZone|IntlTimeZone|null|string',
    'locale=' => 'null|string',
  ),
  'intlcalendar::equals' => 
  array (
    0 => 'bool',
    'calendar' => 'IntlCalendar',
  ),
  'intlcalendar::fielddifference' => 
  array (
    0 => 'false|int',
    'when' => 'float',
    'field' => 'int',
  ),
  'intlcalendar::fromdatetime' => 
  array (
    0 => 'IntlCalendar|null',
    'dateTime' => 'DateTime|string',
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
    'key' => 'string',
    'locale' => 'string',
    'commonlyUsed' => 'bool',
  ),
  'intlcalendar::getleastmaximum' => 
  array (
    0 => 'int',
    'field' => 'int',
  ),
  'intlcalendar::getlocale' => 
  array (
    0 => 'false|string',
    'localeType' => 'int',
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
    'calendar' => 'IntlCalendar',
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
    'date=' => 'float|null',
  ),
  'intlcalendar::roll' => 
  array (
    0 => 'bool',
    'field' => 'int',
    'amountOrUpOrDown' => 'bool|int',
  ),
  'intlcalendar::set' => 
  array (
    0 => 'bool',
    'fieldOrYear' => 'int',
    'valueOrMonth' => 'int',
    'dayOfMonth=' => 'mixed',
    'hour=' => 'mixed',
    'minute=' => 'mixed',
    'second=' => 'mixed',
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
    0 => 'bool',
    'dayOfWeek' => 'int',
  ),
  'intlcalendar::setlenient' => 
  array (
    0 => 'true',
    'isLenient' => 'bool',
  ),
  'intlcalendar::setminimaldaysinfirstweek' => 
  array (
    0 => 'bool',
    'numberOfDays' => 'int',
  ),
  'intlcalendar::setrepeatedwalltimeoption' => 
  array (
    0 => 'true',
    'wallTimeOption' => 'int',
  ),
  'intlcalendar::setskippedwalltimeoption' => 
  array (
    0 => 'true',
    'wallTimeOption' => 'int',
  ),
  'intlcalendar::settime' => 
  array (
    0 => 'bool',
    'date' => 'float',
  ),
  'intlcalendar::settimezone' => 
  array (
    0 => 'bool',
    'timeZone' => 'DateTimeZone|IntlTimeZone|null|string',
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
    'characterName' => 'string',
    'nameChoice=' => 'int',
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
    'nameChoice=' => 'int',
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
    'radix=' => 'int',
  ),
  'intlchar::enumcharnames' => 
  array (
    0 => 'bool|null',
    'start' => 'int|string',
    'limit' => 'int|string',
    'callback' => 'callable(int, int, int):void',
    'nameChoice=' => 'int',
  ),
  'intlchar::enumchartypes' => 
  array (
    0 => 'void',
    'callback=' => 'callable(int, int, int):void',
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
    'radix=' => 'int',
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
    'nameChoice=' => 'int',
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
    'nameChoice=' => 'int',
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
  'intlcodepointbreakiterator::__construct' => 
  array (
    0 => 'void',
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
    'locale_type' => 'int',
  ),
  'intlcodepointbreakiterator::getpartsiterator' => 
  array (
    0 => 'IntlPartsIterator',
    'key_type=' => 'string',
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
    0 => 'bool|null',
    'text' => 'string',
  ),
  'intldateformatter::__construct' => 
  array (
    0 => 'void',
    'locale' => 'null|string',
    'datetype' => 'int|null',
    'timetype' => 'int|null',
    'timezone=' => 'DateTimeZone|IntlTimeZone|null|string',
    'calendar=' => 'IntlCalendar|int|null',
    'pattern=' => 'null|string',
  ),
  'intldateformatter::create' => 
  array (
    0 => 'IntlDateFormatter|null',
    'locale' => 'null|string',
    'datetype' => 'int|null',
    'timetype' => 'int|null',
    'timezone=' => 'DateTimeZone|IntlTimeZone|null|string',
    'calendar=' => 'IntlCalendar|int|null',
    'pattern=' => 'null|string',
  ),
  'intldateformatter::format' => 
  array (
    0 => 'false|string',
    'args=' => 'DateTime|IntlCalendar|array{0?: int, 1?: int, 2?: int, 3?: int, 4?: int, 5?: int, 6?: int, 7?: int, 8?: int, tm_hour?: int, tm_isdst?: int, tm_mday?: int, tm_min?: int, tm_mon?: int, tm_sec?: int, tm_wday?: int, tm_yday?: int, tm_year?: int}|float|int|string',
    'array=' => 'mixed',
  ),
  'intldateformatter::formatobject' => 
  array (
    0 => 'false|string',
    'object' => 'DateTime|IntlCalendar',
    'format=' => 'array{0: int, 1: int}|int|null|string',
    'locale=' => 'null|string',
  ),
  'intldateformatter::getcalendar' => 
  array (
    0 => 'int',
  ),
  'intldateformatter::getcalendarobject' => 
  array (
    0 => 'IntlCalendar',
  ),
  'intldateformatter::getdatetype' => 
  array (
    0 => 'int',
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
    0 => 'string',
  ),
  'intldateformatter::getpattern' => 
  array (
    0 => 'string',
  ),
  'intldateformatter::gettimetype' => 
  array (
    0 => 'int',
  ),
  'intldateformatter::gettimezone' => 
  array (
    0 => 'IntlTimeZone|false',
  ),
  'intldateformatter::gettimezoneid' => 
  array (
    0 => 'string',
  ),
  'intldateformatter::islenient' => 
  array (
    0 => 'bool',
  ),
  'intldateformatter::localtime' => 
  array (
    0 => 'array<array-key, mixed>',
    'string' => 'string',
    '&position=' => 'int',
  ),
  'intldateformatter::parse' => 
  array (
    0 => 'float|int',
    'string' => 'string',
    '&position=' => 'int',
  ),
  'intldateformatter::setcalendar' => 
  array (
    0 => 'bool',
    'which' => 'IntlCalendar|int|null',
  ),
  'intldateformatter::setlenient' => 
  array (
    0 => 'bool',
    'lenient' => 'bool',
  ),
  'intldateformatter::setpattern' => 
  array (
    0 => 'bool',
    'pattern' => 'string',
  ),
  'intldateformatter::settimezone' => 
  array (
    0 => 'false|null',
    'zone' => 'DateTimeZone|IntlTimeZone|null|string',
  ),
  'intlexception::__clone' => 
  array (
    0 => 'void',
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
    'timeZoneOrYear=' => 'DateTimeZone|IntlTimeZone|null|string',
    'localeOrMonth=' => 'int|null|string',
    'dayOfMonth=' => 'int',
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
    'date' => 'float',
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
    0 => 'bool',
    'field' => 'int',
    'amount' => 'int',
  ),
  'intlgregoriancalendar::after' => 
  array (
    0 => 'bool',
    'calendar' => 'IntlCalendar',
  ),
  'intlgregoriancalendar::before' => 
  array (
    0 => 'bool',
    'calendar' => 'IntlCalendar',
  ),
  'intlgregoriancalendar::clear' => 
  array (
    0 => 'bool',
    'field=' => 'int|null',
  ),
  'intlgregoriancalendar::createinstance' => 
  array (
    0 => 'IntlGregorianCalendar|null',
    'timeZone=' => 'DateTimeZone|IntlTimeZone|null|string',
    'locale=' => 'null|string',
  ),
  'intlgregoriancalendar::equals' => 
  array (
    0 => 'bool',
    'calendar' => 'IntlCalendar',
  ),
  'intlgregoriancalendar::fielddifference' => 
  array (
    0 => 'false|int',
    'when' => 'float',
    'field' => 'int',
  ),
  'intlgregoriancalendar::fromdatetime' => 
  array (
    0 => 'IntlCalendar|null',
    'dateTime' => 'DateTime|string',
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
    'key' => 'string',
    'locale' => 'string',
    'commonlyUsed' => 'bool',
  ),
  'intlgregoriancalendar::getleastmaximum' => 
  array (
    0 => 'int',
    'field' => 'int',
  ),
  'intlgregoriancalendar::getlocale' => 
  array (
    0 => 'false|string',
    'localeType' => 'int',
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
    'calendar' => 'IntlCalendar',
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
    'date=' => 'float|null',
  ),
  'intlgregoriancalendar::roll' => 
  array (
    0 => 'bool',
    'field' => 'int',
    'amountOrUpOrDown' => 'bool|int',
  ),
  'intlgregoriancalendar::set' => 
  array (
    0 => 'bool',
    'fieldOrYear' => 'int',
    'valueOrMonth' => 'int',
    'dayOfMonth=' => 'mixed',
    'hour=' => 'mixed',
    'minute=' => 'mixed',
    'second=' => 'mixed',
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
    0 => 'bool',
    'dayOfWeek' => 'int',
  ),
  'intlgregoriancalendar::setgregorianchange' => 
  array (
    0 => 'bool',
    'date' => 'float',
  ),
  'intlgregoriancalendar::setlenient' => 
  array (
    0 => 'true',
    'isLenient' => 'bool',
  ),
  'intlgregoriancalendar::setminimaldaysinfirstweek' => 
  array (
    0 => 'bool',
    'numberOfDays' => 'int',
  ),
  'intlgregoriancalendar::setrepeatedwalltimeoption' => 
  array (
    0 => 'true',
    'wallTimeOption' => 'int',
  ),
  'intlgregoriancalendar::setskippedwalltimeoption' => 
  array (
    0 => 'true',
    'wallTimeOption' => 'int',
  ),
  'intlgregoriancalendar::settime' => 
  array (
    0 => 'bool',
    'date' => 'float',
  ),
  'intlgregoriancalendar::settimezone' => 
  array (
    0 => 'bool',
    'timeZone' => 'DateTimeZone|IntlTimeZone|null|string',
  ),
  'intlgregoriancalendar::todatetime' => 
  array (
    0 => 'DateTime',
  ),
  'intliterator::__construct' => 
  array (
    0 => 'void',
  ),
  'intliterator::current' => 
  array (
    0 => 'mixed',
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
  'intlpartsiterator::current' => 
  array (
    0 => 'mixed',
  ),
  'intlpartsiterator::getbreakiterator' => 
  array (
    0 => 'IntlBreakIterator',
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
    'rules' => 'string',
    'areCompiled=' => 'bool',
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
    'locale_type' => 'int',
  ),
  'intlrulebasedbreakiterator::getpartsiterator' => 
  array (
    0 => 'IntlPartsIterator',
    'key_type=' => 'string',
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
    0 => 'bool|null',
    'text' => 'string',
  ),
  'intltimezone::__construct' => 
  array (
    0 => 'void',
  ),
  'intltimezone::countequivalentids' => 
  array (
    0 => 'false|int',
    'zoneId' => 'string',
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
    'zoneId' => 'string',
  ),
  'intltimezone::createtimezoneidenumeration' => 
  array (
    0 => 'IntlIterator|false',
    'zoneType' => 'int',
    'region=' => 'null|string',
    'rawOffset=' => 'int|null',
  ),
  'intltimezone::fromdatetimezone' => 
  array (
    0 => 'IntlTimeZone|null',
    'zoneId' => 'DateTimeZone',
  ),
  'intltimezone::getcanonicalid' => 
  array (
    0 => 'false|string',
    'zoneId' => 'string',
    '&w_isSystemID=' => 'bool',
  ),
  'intltimezone::getdisplayname' => 
  array (
    0 => 'false|string',
    'isDaylight=' => 'bool',
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
    'zoneId' => 'string',
    'index' => 'int',
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
  'intltimezone::getoffset' => 
  array (
    0 => 'bool',
    'date' => 'float',
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
    'zoneId' => 'string',
  ),
  'intltimezone::gettzdataversion' => 
  array (
    0 => 'string',
  ),
  'intltimezone::getunknown' => 
  array (
    0 => 'IntlTimeZone',
  ),
  'intltimezone::hassamerules' => 
  array (
    0 => 'bool',
    'otherTimeZone' => 'IntlTimeZone',
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
    'zoneId' => 'string',
  ),
  'intltz_create_default' => 
  array (
    0 => 'mixed',
  ),
  'intltz_create_enumeration' => 
  array (
    0 => 'IntlIterator|false',
    'countryOrRawOffset=' => 'IntlTimeZone|float|int|null|string',
  ),
  'intltz_create_time_zone' => 
  array (
    0 => 'IntlTimeZone|null',
    'zoneId' => 'string',
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
    0 => 'IntlTimeZone|null',
    'dateTimeZone' => 'DateTimeZone',
  ),
  'intltz_get_canonical_id' => 
  array (
    0 => 'false|string',
    'zoneId' => 'string',
    '&isSystemID=' => 'bool',
  ),
  'intltz_get_display_name' => 
  array (
    0 => 'false|string',
    'timeZone' => 'IntlTimeZone',
    'isDaylight=' => 'bool',
    'style=' => 'int',
    'locale=' => 'null|string',
  ),
  'intltz_get_dst_savings' => 
  array (
    0 => 'int',
    'timeZone' => 'IntlTimeZone',
  ),
  'intltz_get_equivalent_id' => 
  array (
    0 => 'string',
    'zoneId' => 'string',
    'index' => 'int',
  ),
  'intltz_get_error_code' => 
  array (
    0 => 'int',
    'timeZone' => 'IntlTimeZone',
  ),
  'intltz_get_error_message' => 
  array (
    0 => 'string',
    'timeZone' => 'IntlTimeZone',
  ),
  'intltz_get_gmt' => 
  array (
    0 => 'mixed',
  ),
  'intltz_get_id' => 
  array (
    0 => 'string',
    'timeZone' => 'IntlTimeZone',
  ),
  'intltz_get_offset' => 
  array (
    0 => 'bool',
    'timeZone' => 'IntlTimeZone',
    'date' => 'float',
    'local' => 'bool',
    '&rawOffset' => 'int',
    '&dstOffset' => 'int',
  ),
  'intltz_get_raw_offset' => 
  array (
    0 => 'int',
    'timeZone' => 'IntlTimeZone',
  ),
  'intltz_get_region' => 
  array (
    0 => 'mixed',
    'zoneId' => 'mixed',
  ),
  'intltz_get_tz_data_version' => 
  array (
    0 => 'string',
  ),
  'intltz_get_unknown' => 
  array (
    0 => 'mixed',
  ),
  'intltz_getgmt' => 
  array (
    0 => 'IntlTimeZone',
  ),
  'intltz_has_same_rules' => 
  array (
    0 => 'bool',
    'timeZone' => 'IntlTimeZone',
    'otherTimeZone=' => 'IntlTimeZone',
  ),
  'intltz_to_date_time_zone' => 
  array (
    0 => 'DateTimeZone',
    'timeZone' => 'IntlTimeZone',
  ),
  'intltz_use_daylight_time' => 
  array (
    0 => 'bool',
    'timeZone' => 'IntlTimeZone',
  ),
  'intlz_create_default' => 
  array (
    0 => 'IntlTimeZone',
  ),
  'intval' => 
  array (
    0 => 'int',
    'var' => 'mixed',
    'base=' => 'int',
  ),
  'invalidargumentexception::__clone' => 
  array (
    0 => 'void',
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
  'invalidargumentexception::__wakeup' => 
  array (
    0 => 'mixed',
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
    'ip_address' => 'string',
  ),
  'iptcembed' => 
  array (
    0 => 'bool|string',
    'iptcdata' => 'string',
    'jpeg_file_name' => 'string',
    'spool=' => 'int',
  ),
  'iptcparse' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'iptcdata' => 'string',
  ),
  'is_a' => 
  array (
    0 => 'bool',
    'object' => 'mixed',
    'class_name' => 'string',
    'allow_string=' => 'bool',
  ),
  'is_array' => 
  array (
    0 => 'bool',
    'var' => 'mixed',
  ),
  'is_bool' => 
  array (
    0 => 'bool',
    'var' => 'mixed',
  ),
  'is_callable' => 
  array (
    0 => 'bool',
    'var' => 'callable|mixed',
    'syntax_only=' => 'bool',
    '&w_callable_name=' => 'string',
  ),
  'is_dir' => 
  array (
    0 => 'bool',
    'filename' => 'string',
  ),
  'is_double' => 
  array (
    0 => 'bool',
    'var' => 'mixed',
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
    'val' => 'float',
  ),
  'is_float' => 
  array (
    0 => 'bool',
    'var' => 'mixed',
  ),
  'is_infinite' => 
  array (
    0 => 'bool',
    'val' => 'float',
  ),
  'is_int' => 
  array (
    0 => 'bool',
    'var' => 'mixed',
  ),
  'is_integer' => 
  array (
    0 => 'bool',
    'var' => 'mixed',
  ),
  'is_link' => 
  array (
    0 => 'bool',
    'filename' => 'string',
  ),
  'is_long' => 
  array (
    0 => 'bool',
    'var' => 'mixed',
  ),
  'is_nan' => 
  array (
    0 => 'bool',
    'val' => 'float',
  ),
  'is_null' => 
  array (
    0 => 'bool',
    'var' => 'mixed',
  ),
  'is_numeric' => 
  array (
    0 => 'bool',
    'value' => 'mixed',
  ),
  'is_object' => 
  array (
    0 => 'bool',
    'var' => 'mixed',
  ),
  'is_readable' => 
  array (
    0 => 'bool',
    'filename' => 'string',
  ),
  'is_real' => 
  array (
    0 => 'bool',
    'var' => 'mixed',
  ),
  'is_resource' => 
  array (
    0 => 'bool',
    'var' => 'mixed',
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
    'var' => 'mixed',
  ),
  'is_subclass_of' => 
  array (
    0 => 'bool',
    'object' => 'object|string',
    'class_name' => 'class-string',
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
    'path' => 'string',
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
    'function' => 'callable(mixed):bool',
    'args=' => 'array<array-key, mixed>|null',
  ),
  'iterator_count' => 
  array (
    0 => 'int<0, max>',
    'iterator' => 'Traversable',
  ),
  'iterator_to_array' => 
  array (
    0 => 'array<array-key, mixed>',
    'iterator' => 'Traversable',
    'use_keys=' => 'bool',
  ),
  'iteratoraggregate::getiterator' => 
  array (
    0 => 'Traversable',
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
    0 => 'Iterator',
  ),
  'iteratoriterator::key' => 
  array (
    0 => 'mixed',
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
    0 => 'false|int',
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
    'glue' => 'string',
    'pieces' => 'array<array-key, mixed>',
  ),
  'join\'1' => 
  array (
    0 => 'string',
    'separator' => 'array<array-key, mixed>',
  ),
  'jpeg2wbmp' => 
  array (
    0 => 'bool',
    'f_org' => 'string',
    'f_dest' => 'string',
    'd_height' => 'int',
    'd_width' => 'int',
    'd_threshold' => 'int',
  ),
  'json_decode' => 
  array (
    0 => 'mixed',
    'json' => 'string',
    'assoc=' => 'bool',
    'depth=' => 'int',
    'options=' => 'int',
  ),
  'json_encode' => 
  array (
    0 => 'false|non-empty-string',
    'value' => 'mixed',
    'options=' => 'int',
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
    'arg' => 'array<array-key, mixed>|object',
  ),
  'key_exists' => 
  array (
    0 => 'bool',
    'key' => 'int|string',
    'search' => 'array<array-key, mixed>',
  ),
  'krsort' => 
  array (
    0 => 'true',
    '&arg' => 'array<array-key, mixed>',
    'sort_flags=' => 'int',
  ),
  'ksort' => 
  array (
    0 => 'true',
    '&arg' => 'array<array-key, mixed>',
    'sort_flags=' => 'int',
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
    'str' => 'string',
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
    'ldap' => 'resource',
    'dn' => 'string',
    'entry' => 'array<array-key, mixed>',
    'controls=' => 'array<array-key, mixed>',
  ),
  'ldap_add_ext' => 
  array (
    0 => 'false|resource',
    'ldap' => 'resource',
    'dn' => 'string',
    'entry' => 'array<array-key, mixed>',
    'controls=' => 'array<array-key, mixed>',
  ),
  'ldap_bind' => 
  array (
    0 => 'bool',
    'ldap' => 'resource',
    'dn=' => 'null|string',
    'password=' => 'null|string',
  ),
  'ldap_bind_ext' => 
  array (
    0 => 'false|resource',
    'ldap' => 'resource',
    'dn=' => 'null|string',
    'password=' => 'null|string',
    'controls=' => 'array<array-key, mixed>',
  ),
  'ldap_close' => 
  array (
    0 => 'bool',
    'ldap' => 'resource',
  ),
  'ldap_compare' => 
  array (
    0 => 'bool|int',
    'ldap' => 'resource',
    'dn' => 'string',
    'attribute' => 'string',
    'value' => 'string',
  ),
  'ldap_connect' => 
  array (
    0 => 'false|resource',
    'uri=' => 'null|string',
    'port=' => 'int',
    'wallet=' => 'string',
    'password=' => 'string',
    'auth_mode=' => 'int',
  ),
  'ldap_control_paged_result' => 
  array (
    0 => 'bool',
    'link_identifier' => 'resource',
    'pagesize' => 'int',
    'iscritical=' => 'bool',
    'cookie=' => 'string',
  ),
  'ldap_control_paged_result_response' => 
  array (
    0 => 'bool',
    'link_identifier' => 'resource',
    'result_identifier' => 'resource',
    '&w_cookie' => 'string',
    '&w_estimated' => 'int',
  ),
  'ldap_count_entries' => 
  array (
    0 => 'int',
    'ldap' => 'resource',
    'result' => 'resource',
  ),
  'ldap_delete' => 
  array (
    0 => 'bool',
    'ldap' => 'resource',
    'dn' => 'string',
  ),
  'ldap_delete_ext' => 
  array (
    0 => 'false|resource',
    'ldap' => 'resource',
    'dn' => 'string',
    'controls=' => 'array<array-key, mixed>',
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
    'ldap' => 'resource',
  ),
  'ldap_error' => 
  array (
    0 => 'string',
    'ldap' => 'resource',
  ),
  'ldap_escape' => 
  array (
    0 => 'string',
    'value' => 'string',
    'ignore=' => 'string',
    'flags=' => 'int',
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
    'ldap' => 'resource',
    'entry' => 'resource',
  ),
  'ldap_first_entry' => 
  array (
    0 => 'false|resource',
    'ldap' => 'resource',
    'result' => 'resource',
  ),
  'ldap_first_reference' => 
  array (
    0 => 'false|resource',
    'ldap' => 'resource',
    'result' => 'resource',
  ),
  'ldap_free_result' => 
  array (
    0 => 'bool',
    'ldap' => 'resource',
  ),
  'ldap_get_attributes' => 
  array (
    0 => 'array<array-key, mixed>',
    'ldap' => 'resource',
    'entry' => 'resource',
  ),
  'ldap_get_dn' => 
  array (
    0 => 'false|string',
    'ldap' => 'resource',
    'entry' => 'resource',
  ),
  'ldap_get_entries' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'ldap' => 'resource',
    'result' => 'resource',
  ),
  'ldap_get_option' => 
  array (
    0 => 'bool',
    'ldap' => 'resource',
    'option' => 'int',
    '&w_value=' => 'array<array-key, mixed>|int|string',
  ),
  'ldap_get_values' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'ldap' => 'resource',
    'entry' => 'resource',
    'attribute' => 'string',
  ),
  'ldap_get_values_len' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'ldap' => 'resource',
    'entry' => 'resource',
    'attribute' => 'string',
  ),
  'ldap_list' => 
  array (
    0 => 'false|resource',
    'ldap' => 'array<array-key, mixed>|resource',
    'base' => 'array<array-key, mixed>|string',
    'filter' => 'array<array-key, mixed>|string',
    'attributes=' => 'array<array-key, mixed>',
    'attributes_only=' => 'int',
    'sizelimit=' => 'int',
    'timelimit=' => 'int',
    'deref=' => 'int',
  ),
  'ldap_mod_add' => 
  array (
    0 => 'bool',
    'ldap' => 'resource',
    'dn' => 'string',
    'entry' => 'array<array-key, mixed>',
  ),
  'ldap_mod_add_ext' => 
  array (
    0 => 'false|resource',
    'ldap' => 'resource',
    'dn' => 'string',
    'entry' => 'array<array-key, mixed>',
    'controls=' => 'array<array-key, mixed>',
  ),
  'ldap_mod_del' => 
  array (
    0 => 'bool',
    'ldap' => 'resource',
    'dn' => 'string',
    'entry' => 'array<array-key, mixed>',
  ),
  'ldap_mod_del_ext' => 
  array (
    0 => 'false|resource',
    'ldap' => 'resource',
    'dn' => 'string',
    'entry' => 'array<array-key, mixed>',
    'controls=' => 'array<array-key, mixed>',
  ),
  'ldap_mod_replace' => 
  array (
    0 => 'bool',
    'ldap' => 'resource',
    'dn' => 'string',
    'entry' => 'array<array-key, mixed>',
  ),
  'ldap_mod_replace_ext' => 
  array (
    0 => 'false|resource',
    'ldap' => 'resource',
    'dn' => 'string',
    'entry' => 'array<array-key, mixed>',
    'controls=' => 'array<array-key, mixed>',
  ),
  'ldap_modify' => 
  array (
    0 => 'bool',
    'ldap' => 'resource',
    'dn' => 'string',
    'entry' => 'array<array-key, mixed>',
  ),
  'ldap_modify_batch' => 
  array (
    0 => 'bool',
    'ldap' => 'resource',
    'dn' => 'string',
    'modifications_info' => 'array<array-key, mixed>',
  ),
  'ldap_next_attribute' => 
  array (
    0 => 'false|string',
    'ldap' => 'resource',
    'entry' => 'resource',
  ),
  'ldap_next_entry' => 
  array (
    0 => 'false|resource',
    'ldap' => 'resource',
    'entry' => 'resource',
  ),
  'ldap_next_reference' => 
  array (
    0 => 'false|resource',
    'ldap' => 'resource',
    'entry' => 'resource',
  ),
  'ldap_parse_reference' => 
  array (
    0 => 'bool',
    'ldap' => 'resource',
    'entry' => 'resource',
    '&w_referrals' => 'array<array-key, mixed>',
  ),
  'ldap_parse_result' => 
  array (
    0 => 'bool',
    'ldap' => 'resource',
    'result' => 'resource',
    '&w_error_code' => 'int',
    '&w_matched_dn=' => 'string',
    '&w_error_message=' => 'string',
    '&w_referrals=' => 'array<array-key, mixed>',
    '&w_controls=' => 'array<array-key, mixed>',
  ),
  'ldap_read' => 
  array (
    0 => 'false|resource',
    'ldap' => 'array<array-key, mixed>|resource',
    'base' => 'array<array-key, mixed>|string',
    'filter' => 'array<array-key, mixed>|string',
    'attributes=' => 'array<array-key, mixed>',
    'attributes_only=' => 'int',
    'sizelimit=' => 'int',
    'timelimit=' => 'int',
    'deref=' => 'int',
  ),
  'ldap_rename' => 
  array (
    0 => 'bool',
    'ldap' => 'resource',
    'dn' => 'string',
    'new_rdn' => 'string',
    'new_parent' => 'string',
    'delete_old_rdn' => 'bool',
  ),
  'ldap_rename_ext' => 
  array (
    0 => 'false|resource',
    'ldap' => 'resource',
    'dn' => 'string',
    'new_rdn' => 'string',
    'new_parent' => 'string',
    'delete_old_rdn' => 'bool',
    'controls=' => 'array<array-key, mixed>',
  ),
  'ldap_sasl_bind' => 
  array (
    0 => 'bool',
    'ldap' => 'resource',
    'dn=' => 'string',
    'password=' => 'string',
    'mech=' => 'string',
    'realm=' => 'string',
    'authc_id=' => 'string',
    'authz_id=' => 'string',
    'props=' => 'string',
  ),
  'ldap_search' => 
  array (
    0 => 'array<array-key, resource>|false|resource',
    'ldap' => 'array<array-key, resource>|resource',
    'base' => 'array<array-key, mixed>|string',
    'filter' => 'array<array-key, mixed>|string',
    'attributes=' => 'array<array-key, mixed>',
    'attributes_only=' => 'int',
    'sizelimit=' => 'int',
    'timelimit=' => 'int',
    'deref=' => 'int',
  ),
  'ldap_set_option' => 
  array (
    0 => 'bool',
    'ldap' => 'null|resource',
    'option' => 'int',
    'value' => 'mixed',
  ),
  'ldap_set_rebind_proc' => 
  array (
    0 => 'bool',
    'ldap' => 'resource',
    'callback' => 'callable',
  ),
  'ldap_sort' => 
  array (
    0 => 'bool',
    'link_identifier' => 'resource',
    'result_identifier' => 'resource',
    'sortfilter' => 'string',
  ),
  'ldap_start_tls' => 
  array (
    0 => 'bool',
    'ldap' => 'resource',
  ),
  'ldap_t61_to_8859' => 
  array (
    0 => 'string',
    'value' => 'string',
  ),
  'ldap_unbind' => 
  array (
    0 => 'bool',
    'ldap' => 'resource',
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
  'lengthexception::__clone' => 
  array (
    0 => 'void',
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
  'lengthexception::__wakeup' => 
  array (
    0 => 'mixed',
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
    'str1' => 'string',
    'str2' => 'string',
    'cost_ins=' => 'mixed',
    'cost_rep=' => 'mixed',
    'cost_del=' => 'mixed',
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
    'use_errors=' => 'bool',
  ),
  'limititerator::__construct' => 
  array (
    0 => 'void',
    'iterator' => 'Iterator',
    'offset=' => 'int',
    'count=' => 'int',
  ),
  'limititerator::current' => 
  array (
    0 => 'mixed',
  ),
  'limititerator::getinneriterator' => 
  array (
    0 => 'Iterator',
  ),
  'limititerator::getposition' => 
  array (
    0 => 'int',
  ),
  'limititerator::key' => 
  array (
    0 => 'mixed',
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
    'position' => 'int',
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
    'filename' => 'string',
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
    'langtag' => 'string',
    'locale' => 'string',
    'canonicalize=' => 'bool',
  ),
  'locale::getallvariants' => 
  array (
    0 => 'array<array-key, mixed>',
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
    'in_locale=' => 'string',
  ),
  'locale::getdisplayname' => 
  array (
    0 => 'string',
    'locale' => 'string',
    'in_locale=' => 'string',
  ),
  'locale::getdisplayregion' => 
  array (
    0 => 'string',
    'locale' => 'string',
    'in_locale=' => 'string',
  ),
  'locale::getdisplayscript' => 
  array (
    0 => 'string',
    'locale' => 'string',
    'in_locale=' => 'string',
  ),
  'locale::getdisplayvariant' => 
  array (
    0 => 'string',
    'locale' => 'string',
    'in_locale=' => 'string',
  ),
  'locale::getkeywords' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'locale' => 'string',
  ),
  'locale::getprimarylanguage' => 
  array (
    0 => 'string',
    'locale' => 'string',
  ),
  'locale::getregion' => 
  array (
    0 => 'string',
    'locale' => 'string',
  ),
  'locale::getscript' => 
  array (
    0 => 'string',
    'locale' => 'string',
  ),
  'locale::lookup' => 
  array (
    0 => 'null|string',
    'langtag' => 'array<array-key, mixed>',
    'locale' => 'string',
    'canonicalize=' => 'bool',
    'default=' => 'string',
  ),
  'locale::parselocale' => 
  array (
    0 => 'array<array-key, mixed>',
    'locale' => 'string',
  ),
  'locale::setdefault' => 
  array (
    0 => 'bool',
    'locale' => 'string',
  ),
  'locale_accept_from_http' => 
  array (
    0 => 'false|string',
    'arg1' => 'string',
  ),
  'locale_canonicalize' => 
  array (
    0 => 'null|string',
    'arg1' => 'string',
  ),
  'locale_compose' => 
  array (
    0 => 'false|string',
    'arg1' => 'array<array-key, mixed>',
  ),
  'locale_filter_matches' => 
  array (
    0 => 'bool|null',
    'langtag' => 'string',
    'locale' => 'string',
    'canonicalize=' => 'bool',
  ),
  'locale_get_all_variants' => 
  array (
    0 => 'array<array-key, mixed>|null',
    'arg1' => 'string',
  ),
  'locale_get_default' => 
  array (
    0 => 'string',
  ),
  'locale_get_display_language' => 
  array (
    0 => 'string',
    'locale' => 'string',
    'in_locale=' => 'string',
  ),
  'locale_get_display_name' => 
  array (
    0 => 'string',
    'locale' => 'string',
    'in_locale=' => 'string',
  ),
  'locale_get_display_region' => 
  array (
    0 => 'string',
    'locale' => 'string',
    'in_locale=' => 'string',
  ),
  'locale_get_display_script' => 
  array (
    0 => 'string',
    'locale' => 'string',
    'in_locale=' => 'string',
  ),
  'locale_get_display_variant' => 
  array (
    0 => 'string',
    'locale' => 'string',
    'in_locale=' => 'string',
  ),
  'locale_get_keywords' => 
  array (
    0 => 'array<array-key, mixed>|false|null',
    'arg1' => 'string',
  ),
  'locale_get_primary_language' => 
  array (
    0 => 'null|string',
    'arg1' => 'string',
  ),
  'locale_get_region' => 
  array (
    0 => 'null|string',
    'arg1' => 'string',
  ),
  'locale_get_script' => 
  array (
    0 => 'null|string',
    'arg1' => 'string',
  ),
  'locale_lookup' => 
  array (
    0 => 'null|string',
    'langtag' => 'array<array-key, mixed>',
    'locale' => 'string',
    'canonicalize=' => 'bool',
    'def=' => 'string',
  ),
  'locale_parse' => 
  array (
    0 => 'array<array-key, mixed>|null',
    'arg1' => 'string',
  ),
  'locale_set_default' => 
  array (
    0 => 'bool',
    'arg1' => 'string',
  ),
  'localeconv' => 
  array (
    0 => 'array<array-key, mixed>',
  ),
  'localtime' => 
  array (
    0 => 'array<array-key, mixed>',
    'timestamp=' => 'int',
    'associative_array=' => 'bool',
  ),
  'log' => 
  array (
    0 => 'float',
    'number' => 'float',
    'base=' => 'float',
  ),
  'log10' => 
  array (
    0 => 'float',
    'number' => 'float',
  ),
  'log1p' => 
  array (
    0 => 'float',
    'number' => 'float',
  ),
  'logicexception::__clone' => 
  array (
    0 => 'void',
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
  'logicexception::__wakeup' => 
  array (
    0 => 'mixed',
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
    'proper_address' => 'int',
  ),
  'lstat' => 
  array (
    0 => 'array{0: int, 10: int, 11: int, 12: int, 1: int, 2: int, 3: int, 4: int, 5: int, 6: int, 7: int, 8: int, 9: int, atime: int, blksize: int, blocks: int, ctime: int, dev: int, gid: int, ino: int, mode: int, mtime: int, nlink: int, rdev: int, size: int, uid: int}|false',
    'filename' => 'string',
  ),
  'ltrim' => 
  array (
    0 => 'string',
    'str' => 'string',
    'character_mask=' => 'string',
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
    'additional_parameters=' => 'string',
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
    'var=' => 'string',
    'encoding=' => 'string',
  ),
  'mb_convert_case' => 
  array (
    0 => 'string',
    'sourcestring' => 'string',
    'mode' => 'int',
    'encoding=' => 'string',
  ),
  'mb_convert_encoding' => 
  array (
    0 => 'false|string',
    'str' => 'string',
    'to' => 'string',
    'from=' => 'mixed',
  ),
  'mb_convert_kana' => 
  array (
    0 => 'string',
    'str' => 'string',
    'option=' => 'string',
    'encoding=' => 'string',
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
    0 => 'string',
    'string' => 'string',
  ),
  'mb_decode_numericentity' => 
  array (
    0 => 'string',
    'string' => 'string',
    'convmap' => 'array<array-key, mixed>',
    'encoding=' => 'string',
  ),
  'mb_detect_encoding' => 
  array (
    0 => 'false|string',
    'str' => 'string',
    'encoding_list=' => 'mixed',
    'strict=' => 'bool',
  ),
  'mb_detect_order' => 
  array (
    0 => 'bool|list<string>',
    'encoding=' => 'mixed',
  ),
  'mb_encode_mimeheader' => 
  array (
    0 => 'string',
    'str' => 'string',
    'charset=' => 'string',
    'transfer=' => 'string',
    'linefeed=' => 'string',
    'indent=' => 'int',
  ),
  'mb_encode_numericentity' => 
  array (
    0 => 'string',
    'string' => 'string',
    'convmap' => 'array<array-key, mixed>',
    'encoding=' => 'string',
    'is_hex=' => 'bool',
  ),
  'mb_encoding_aliases' => 
  array (
    0 => 'false|list<string>',
    'encoding' => 'string',
  ),
  'mb_ereg' => 
  array (
    0 => 'false|int',
    'pattern' => 'string',
    'string' => 'string',
    '&w_registers=' => 'array<array-key, mixed>|null',
  ),
  'mb_ereg_match' => 
  array (
    0 => 'bool',
    'pattern' => 'string',
    'string' => 'string',
    'option=' => 'string',
  ),
  'mb_ereg_replace' => 
  array (
    0 => 'false|string',
    'pattern' => 'string',
    'replacement' => 'string',
    'string' => 'string',
    'option=' => 'string',
  ),
  'mb_ereg_replace_callback' => 
  array (
    0 => 'false|null|string',
    'pattern' => 'string',
    'callback' => 'callable',
    'string' => 'string',
    'option=' => 'string',
  ),
  'mb_ereg_search' => 
  array (
    0 => 'bool',
    'pattern=' => 'string',
    'option=' => 'string',
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
    'pattern=' => 'string',
    'option=' => 'string',
  ),
  'mb_ereg_search_pos' => 
  array (
    0 => 'array<array-key, int>|false',
    'pattern=' => 'string',
    'option=' => 'string',
  ),
  'mb_ereg_search_regs' => 
  array (
    0 => 'array<array-key, string>|false',
    'pattern=' => 'string',
    'option=' => 'string',
  ),
  'mb_ereg_search_setpos' => 
  array (
    0 => 'bool',
    'position' => 'int',
  ),
  'mb_eregi' => 
  array (
    0 => 'false|int',
    'pattern' => 'string',
    'string' => 'string',
    '&w_registers=' => 'array<array-key, mixed>',
  ),
  'mb_eregi_replace' => 
  array (
    0 => 'false|string',
    'pattern' => 'string',
    'replacement' => 'string',
    'string' => 'string',
    'option=' => 'string',
  ),
  'mb_get_info' => 
  array (
    0 => 'array<array-key, mixed>|false|int|string',
    'type=' => 'string',
  ),
  'mb_http_input' => 
  array (
    0 => 'false|string',
    'type=' => 'string',
  ),
  'mb_http_output' => 
  array (
    0 => 'bool|string',
    'encoding=' => 'string',
  ),
  'mb_internal_encoding' => 
  array (
    0 => 'bool|string',
    'encoding=' => 'string',
  ),
  'mb_language' => 
  array (
    0 => 'bool|string',
    'language=' => 'string',
  ),
  'mb_list_encodings' => 
  array (
    0 => 'list<string>',
  ),
  'mb_output_handler' => 
  array (
    0 => 'string',
    'contents' => 'string',
    'status' => 'int',
  ),
  'mb_parse_str' => 
  array (
    0 => 'bool',
    'encoded_string' => 'string',
    '&w_result=' => 'array<array-key, mixed>',
  ),
  'mb_preferred_mime_name' => 
  array (
    0 => 'false|string',
    'encoding' => 'string',
  ),
  'mb_regex_encoding' => 
  array (
    0 => 'bool|string',
    'encoding=' => 'string',
  ),
  'mb_regex_set_options' => 
  array (
    0 => 'string',
    'options=' => 'string',
  ),
  'mb_send_mail' => 
  array (
    0 => 'bool',
    'to' => 'string',
    'subject' => 'string',
    'message' => 'string',
    'additional_headers=' => 'array<array-key, mixed>|string',
    'additional_parameters=' => 'string',
  ),
  'mb_split' => 
  array (
    0 => 'false|list<string>',
    'pattern' => 'string',
    'string' => 'string',
    'limit=' => 'int',
  ),
  'mb_strcut' => 
  array (
    0 => 'string',
    'str' => 'string',
    'start' => 'int',
    'length=' => 'int|null',
    'encoding=' => 'string',
  ),
  'mb_strimwidth' => 
  array (
    0 => 'string',
    'str' => 'string',
    'start' => 'int',
    'width' => 'int',
    'trimmarker=' => 'string',
    'encoding=' => 'string',
  ),
  'mb_stripos' => 
  array (
    0 => 'false|int',
    'haystack' => 'string',
    'needle' => 'string',
    'offset=' => 'int',
    'encoding=' => 'string',
  ),
  'mb_stristr' => 
  array (
    0 => 'false|string',
    'haystack' => 'string',
    'needle' => 'string',
    'part=' => 'bool',
    'encoding=' => 'string',
  ),
  'mb_strlen' => 
  array (
    0 => 'int<0, max>',
    'str' => 'string',
    'encoding=' => 'string',
  ),
  'mb_strpos' => 
  array (
    0 => 'false|int',
    'haystack' => 'string',
    'needle' => 'string',
    'offset=' => 'int',
    'encoding=' => 'string',
  ),
  'mb_strrchr' => 
  array (
    0 => 'false|string',
    'haystack' => 'string',
    'needle' => 'string',
    'part=' => 'bool',
    'encoding=' => 'string',
  ),
  'mb_strrichr' => 
  array (
    0 => 'false|string',
    'haystack' => 'string',
    'needle' => 'string',
    'part=' => 'bool',
    'encoding=' => 'string',
  ),
  'mb_strripos' => 
  array (
    0 => 'false|int',
    'haystack' => 'string',
    'needle' => 'string',
    'offset=' => 'int',
    'encoding=' => 'string',
  ),
  'mb_strrpos' => 
  array (
    0 => 'false|int',
    'haystack' => 'string',
    'needle' => 'string',
    'offset=' => 'int',
    'encoding=' => 'string',
  ),
  'mb_strstr' => 
  array (
    0 => 'false|string',
    'haystack' => 'string',
    'needle' => 'string',
    'part=' => 'bool',
    'encoding=' => 'string',
  ),
  'mb_strtolower' => 
  array (
    0 => 'lowercase-string',
    'sourcestring' => 'string',
    'encoding=' => 'string',
  ),
  'mb_strtoupper' => 
  array (
    0 => 'string',
    'sourcestring' => 'string',
    'encoding=' => 'string',
  ),
  'mb_strwidth' => 
  array (
    0 => 'int',
    'str' => 'string',
    'encoding=' => 'string',
  ),
  'mb_substitute_character' => 
  array (
    0 => 'bool|int|string',
    'substchar=' => 'mixed',
  ),
  'mb_substr' => 
  array (
    0 => 'string',
    'str' => 'string',
    'start' => 'int',
    'length=' => 'int|null',
    'encoding=' => 'string',
  ),
  'mb_substr_count' => 
  array (
    0 => 'int',
    'haystack' => 'string',
    'needle' => 'string',
    'encoding=' => 'string',
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
    'str' => 'string',
    'raw_output=' => 'bool',
  ),
  'md5_file' => 
  array (
    0 => 'false|non-falsy-string',
    'filename' => 'string',
    'raw_output=' => 'bool',
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
  'memcached::checkkey' => 
  array (
    0 => 'mixed',
    'key' => 'mixed',
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
    0 => 'MessageFormatter',
    'locale' => 'string',
    'pattern' => 'string',
  ),
  'messageformatter::format' => 
  array (
    0 => 'false|string',
    'args' => 'array<array-key, mixed>',
  ),
  'messageformatter::formatmessage' => 
  array (
    0 => 'false|string',
    'locale' => 'string',
    'pattern' => 'string',
    'args' => 'array<array-key, mixed>',
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
    'source' => 'string',
  ),
  'messageformatter::parsemessage' => 
  array (
    0 => 'array<array-key, mixed>|false',
    'locale' => 'string',
    'pattern' => 'string',
    'args' => 'string',
  ),
  'messageformatter::setpattern' => 
  array (
    0 => 'bool',
    'pattern' => 'string',
  ),
  'metaphone' => 
  array (
    0 => 'false|string',
    'text' => 'string',
    'phones=' => 'int',
  ),
  'method_exists' => 
  array (
    0 => 'bool',
    'object' => 'class-string|object',
    'method' => 'string',
  ),
  'mhash' => 
  array (
    0 => 'string',
    'hash' => 'int',
    'data' => 'string',
    'key=' => 'string',
  ),
  'mhash_count' => 
  array (
    0 => 'int',
  ),
  'mhash_get_block_size' => 
  array (
    0 => 'false|int',
    'hash' => 'int',
  ),
  'mhash_get_hash_name' => 
  array (
    0 => 'false|string',
    'hash' => 'int',
  ),
  'mhash_keygen_s2k' => 
  array (
    0 => 'false|string',
    'hash' => 'int',
    'input_password' => 'string',
    'salt' => 'string',
    'bytes' => 'int',
  ),
  'microtime' => 
  array (
    0 => 'string',
    'get_as_float=' => 'false',
  ),
  'microtime\'1' => 
  array (
    0 => 'float',
    'as_float=' => 'true',
  ),
  'mime_content_type' => 
  array (
    0 => 'false|string',
    'string' => 'resource|string',
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
    'pathname' => 'string',
    'mode=' => 'int',
    'recursive=' => 'bool',
    'context=' => 'resource',
  ),
  'mktime' => 
  array (
    0 => 'false|int',
    'hour=' => 'int',
    'min=' => 'int',
    'sec=' => 'int',
    'mon=' => 'int',
    'day=' => 'int',
    'year=' => 'int',
  ),
  'money_format' => 
  array (
    0 => 'string',
    'format' => 'string',
    'value' => 'float',
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
    'type' => 'int',
  ),
  'mongodb\\bson\\binary::__set_state' => 
  array (
    0 => 'mixed',
    'properties' => 'array<array-key, mixed>',
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
    'serialized' => 'string',
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
  'mongodb\\bson\\dbpointer::__construct' => 
  array (
    0 => 'void',
  ),
  'mongodb\\bson\\dbpointer::__tostring' => 
  array (
    0 => 'string',
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
    'serialized' => 'string',
  ),
  'mongodb\\bson\\decimal128::__construct' => 
  array (
    0 => 'void',
    'value' => 'string',
  ),
  'mongodb\\bson\\decimal128::__set_state' => 
  array (
    0 => 'mixed',
    'properties' => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\decimal128::__tostring' => 
  array (
    0 => 'string',
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
    'serialized' => 'string',
  ),
  'mongodb\\bson\\decimal128interface::__tostring' => 
  array (
    0 => 'string',
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
  ),
  'mongodb\\bson\\int64::__tostring' => 
  array (
    0 => 'string',
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
    'serialized' => 'string',
  ),
  'mongodb\\bson\\javascript::__construct' => 
  array (
    0 => 'void',
    'javascript' => 'string',
    'scope=' => 'array<array-key, mixed>|null|object',
  ),
  'mongodb\\bson\\javascript::__set_state' => 
  array (
    0 => 'mixed',
    'properties' => 'array<array-key, mixed>',
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
    'serialized' => 'string',
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
  'mongodb\\bson\\maxkey::__set_state' => 
  array (
    0 => 'mixed',
    'properties' => 'array<array-key, mixed>',
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
    'serialized' => 'string',
  ),
  'mongodb\\bson\\minkey::__set_state' => 
  array (
    0 => 'mixed',
    'properties' => 'array<array-key, mixed>',
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
    'serialized' => 'string',
  ),
  'mongodb\\bson\\objectid::__construct' => 
  array (
    0 => 'void',
    'id=' => 'null|string',
  ),
  'mongodb\\bson\\objectid::__set_state' => 
  array (
    0 => 'mixed',
    'properties' => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\objectid::__tostring' => 
  array (
    0 => 'string',
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
    'serialized' => 'string',
  ),
  'mongodb\\bson\\objectidinterface::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\objectidinterface::gettimestamp' => 
  array (
    0 => 'int',
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
  'mongodb\\bson\\regex::__set_state' => 
  array (
    0 => 'mixed',
    'properties' => 'array<array-key, mixed>',
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
    'serialized' => 'string',
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
  'mongodb\\bson\\symbol::__construct' => 
  array (
    0 => 'void',
  ),
  'mongodb\\bson\\symbol::__tostring' => 
  array (
    0 => 'string',
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
    'serialized' => 'string',
  ),
  'mongodb\\bson\\timestamp::__construct' => 
  array (
    0 => 'void',
    'increment' => 'int|string',
    'timestamp' => 'int|string',
  ),
  'mongodb\\bson\\timestamp::__set_state' => 
  array (
    0 => 'mixed',
    'properties' => 'array<array-key, mixed>',
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
    'serialized' => 'string',
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
    'typemap=' => 'array<array-key, mixed>',
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
  'mongodb\\bson\\undefined::__tostring' => 
  array (
    0 => 'string',
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
    'serialized' => 'string',
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
  'mongodb\\bson\\utcdatetime::__set_state' => 
  array (
    0 => 'mixed',
    'properties' => 'array<array-key, mixed>',
  ),
  'mongodb\\bson\\utcdatetime::__tostring' => 
  array (
    0 => 'string',
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
    'serialized' => 'string',
  ),
  'mongodb\\bson\\utcdatetimeinterface::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\bson\\utcdatetimeinterface::todatetime' => 
  array (
    0 => 'DateTime',
  ),
  'mongodb\\driver\\bulkwrite::__construct' => 
  array (
    0 => 'void',
    'options=' => 'array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\bulkwrite::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\bulkwrite::count' => 
  array (
    0 => 'int',
  ),
  'mongodb\\driver\\bulkwrite::delete' => 
  array (
    0 => 'void',
    'query' => 'array<array-key, mixed>|object',
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
    'query' => 'array<array-key, mixed>|object',
    'newObj' => 'array<array-key, mixed>|object',
    'updateOptions=' => 'array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\clientencryption::__construct' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\clientencryption::__wakeup' => 
  array (
    0 => 'mixed',
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
    'keyVaultClient' => 'MongoDB\\BSON\\BinaryInterface',
  ),
  'mongodb\\driver\\clientencryption::encrypt' => 
  array (
    0 => 'MongoDB\\BSON\\Binary',
    'value' => 'mixed',
    'options=' => 'array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\command::__construct' => 
  array (
    0 => 'void',
    'document' => 'array<array-key, mixed>|object',
    'options=' => 'array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\command::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\cursor::__construct' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\cursor::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\cursor::current' => 
  array (
    0 => 'array<array-key, mixed>|null|object',
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
  'mongodb\\driver\\cursorid::__tostring' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\cursorid::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\cursorid::serialize' => 
  array (
    0 => 'string',
  ),
  'mongodb\\driver\\cursorid::unserialize' => 
  array (
    0 => 'void',
    'serialized' => 'string',
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
    0 => 'string',
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
    0 => 'mixed',
    'label' => 'mixed',
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
    0 => 'string',
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
    0 => 'mixed',
  ),
  'mongodb\\driver\\exception\\bulkwriteexception::haserrorlabel' => 
  array (
    0 => 'mixed',
    'label' => 'mixed',
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
    0 => 'string',
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
    0 => 'mixed',
    'label' => 'mixed',
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
    0 => 'string',
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
    0 => 'mixed',
    'label' => 'mixed',
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
    0 => 'string',
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
    0 => 'mixed',
    'label' => 'mixed',
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
    0 => 'string',
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
    0 => 'mixed',
    'label' => 'mixed',
  ),
  'mongodb\\driver\\exception\\exception::__tostring' => 
  array (
    0 => 'string',
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
    0 => 'string',
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
    0 => 'mixed',
    'label' => 'mixed',
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
    0 => 'string',
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
    0 => 'string',
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
    0 => 'string',
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
    'label' => 'string',
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
    0 => 'string',
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
    0 => 'mixed',
    'label' => 'mixed',
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
    0 => 'string',
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
    0 => 'mixed',
    'label' => 'mixed',
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
    0 => 'string',
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
    0 => 'string',
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
    0 => 'mixed',
    'label' => 'mixed',
  ),
  'mongodb\\driver\\manager::__construct' => 
  array (
    0 => 'void',
    'uri=' => 'null|string',
    'options=' => 'array<array-key, mixed>',
    'driverOptions=' => 'array<array-key, mixed>',
  ),
  'mongodb\\driver\\manager::__wakeup' => 
  array (
    0 => 'mixed',
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
    'zbulk' => 'MongoDB\\Driver\\BulkWrite',
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
    'zquery' => 'MongoDB\\Driver\\Query',
    'options=' => 'MongoDB\\Driver\\ReadPreference|array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\manager::executereadcommand' => 
  array (
    0 => 'MongoDB\\Driver\\Cursor',
    'db' => 'string',
    'command' => 'MongoDB\\Driver\\Command',
    'options=' => 'array<array-key, mixed>',
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
    'options=' => 'array<array-key, mixed>',
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
  'mongodb\\driver\\manager::selectserver' => 
  array (
    0 => 'MongoDB\\Driver\\Server',
    'readPreference' => 'MongoDB\\Driver\\ReadPreference',
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
    0 => 'mixed',
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
  'mongodb\\driver\\monitoring\\commandstartedevent::__construct' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\monitoring\\commandstartedevent::__wakeup' => 
  array (
    0 => 'mixed',
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
  'mongodb\\driver\\monitoring\\commandsucceededevent::__construct' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\monitoring\\commandsucceededevent::__wakeup' => 
  array (
    0 => 'mixed',
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
    'options=' => 'array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\query::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\readconcern::__construct' => 
  array (
    0 => 'void',
    'level=' => 'null|string',
  ),
  'mongodb\\driver\\readconcern::__set_state' => 
  array (
    0 => 'mixed',
    'properties' => 'array<array-key, mixed>',
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
    'serialized' => 'string',
  ),
  'mongodb\\driver\\readpreference::__construct' => 
  array (
    0 => 'void',
    'mode' => 'int|string',
    'tagSets=' => 'array<array-key, mixed>|null',
    'options=' => 'array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\readpreference::__set_state' => 
  array (
    0 => 'mixed',
    'properties' => 'array<array-key, mixed>',
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
    'serialized' => 'string',
  ),
  'mongodb\\driver\\server::__construct' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\server::__wakeup' => 
  array (
    0 => 'mixed',
  ),
  'mongodb\\driver\\server::executebulkwrite' => 
  array (
    0 => 'MongoDB\\Driver\\WriteResult',
    'namespace' => 'string',
    'zbulk' => 'MongoDB\\Driver\\BulkWrite',
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
    'zquery' => 'MongoDB\\Driver\\Query',
    'options=' => 'MongoDB\\Driver\\ReadPreference|array<array-key, mixed>|null',
  ),
  'mongodb\\driver\\server::executereadcommand' => 
  array (
    0 => 'MongoDB\\Driver\\Cursor',
    'db' => 'string',
    'command' => 'MongoDB\\Driver\\Command',
    'options=' => 'array<array-key, mixed>',
  ),
  'mongodb\\driver\\server::executereadwritecommand' => 
  array (
    0 => 'MongoDB\\Driver\\Cursor',
    'db' => 'string',
    'command' => 'MongoDB\\Driver\\Command',
    'options=' => 'array<array-key, mixed>',
  ),
  'mongodb\\driver\\server::executewritecommand' => 
  array (
    0 => 'MongoDB\\Driver\\Cursor',
    'db' => 'string',
    'command' => 'MongoDB\\Driver\\Command',
    'options=' => 'array<array-key, mixed>',
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
  'mongodb\\driver\\session::__construct' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\session::__wakeup' => 
  array (
    0 => 'mixed',
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
    'timestamp' => 'MongoDB\\BSON\\TimestampInterface',
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
  'mongodb\\driver\\writeconcern::__set_state' => 
  array (
    0 => 'mixed',
    'properties' => 'array<array-key, mixed>',
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
    'serialized' => 'string',
  ),
  'mongodb\\driver\\writeconcernerror::__construct' => 
  array (
    0 => 'void',
  ),
  'mongodb\\driver\\writeconcernerror::__wakeup' => 
  array (
    0 => 'mixed',
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
    0 => 'mixed',
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
    0 => 'mixed',
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
  ),