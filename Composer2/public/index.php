<?php

require "../vendor/autoload.php"; 
use App\Hello;

$hi = new Hello();

echo "\n" . $hi->talk() . "\n";

