<?php
require 'vendor/autoload.php';
use Predis\Client;
$redis = new Client();

$redis->rpush('chatroom', 'sumy: great');

$length = $redis->llen('chatroom');

print_r($redis->lrange('chatroom', 0,$length));

