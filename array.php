<?php
require 'vendor/autoload.php';

use Predis\Client;

$redis = new Client();

$course = [
    'name'    => 'Mastaring PHP',
    'trainer' => 'Hasin Hayder',
    'fee'     => 5000
];

$redis->hmset('course', $course);

$redis->hset('course01', 'name', 'JavaScript');
$redis->hset('course01', 'trainer', 'Sumit Shaha');
$redis->hset('course01', 'fee', 5000);

echo $redis->hget('course01', 'trainer');
print_r($redis->hgetall('course01'));
print_r($redis->hgetall('course'));
print_r($redis->hmget('course', ['name', 'fee']));