<?php
require 'vendor/autoload.php';

use Predis\Client;

$redis = new Client();

//set the data in redis Key Value
// $redis->set('name', 'Faruq Hossen');

// Set data in radis with expire time
// $redis->set('email', 'faruqhossen30@gmail.com', 'Ex', 30);

// Set data in radis with Aarray Value
// NB: You can not store arry in redis - use json_encode() for store and use json_decode() for show.
$redis->set('welcome', json_encode(['name' => 'Faruq Hossen', 'email' => 'faruqhossen30@gmail.com', 'district' => 'Jhenaidah']));
print_r(json_decode($redis->get('welcome'), true));

// Delete radis key value
// $redis->del('key');



