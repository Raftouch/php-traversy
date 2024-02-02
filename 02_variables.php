<?php

$name = 'Rafa';
$age = 4;
$is_small = true;
$is_big = false;
$cash_on_hand = 20.75;

echo $name;
echo $age;
echo $is_small; // 1
echo $is_big; // nothing

var_dump($is_big);
var_dump($cash_on_hand);

echo $name . ' is ' . $age . ' years old';
echo "$name is $age years old";
echo "{$name} is {$age} years old";

echo 5 + 5;
echo '5' + '5';

$x = '5' + '5';
var_dump($x);

echo 10 - 5;
echo 10 % 3;

// for db credentials / constants that never change
define('HOST', 'localhost');
define('DB_NAME', 'dev_db');

echo HOST;