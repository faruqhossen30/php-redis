<?php
require 'vendor/autoload.php';
use Predis\Client;

$redis = new Client();

// $redis->set('number', 5);
// $redis->incr('number'); // Increase 1+
// $redis->incrby('number', 5); // Increase customnumber
// $redis->decr('number'); // Decrease 1+
// $redis->decrby('number', 5); // Decrease customnumber

echo $redis->get('number');