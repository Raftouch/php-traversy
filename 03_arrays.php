<?php

// simple array
$numbers = [1, 44, 55, 13];
$fruits = array('apple', 'orange', 'pear');

var_dump($numbers);
var_dump($fruits);

echo $fruits[0]; //apple

// associative array --> i define an index myself

$colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'green'
];

echo $colors[4]; // blue

$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f',
];

echo $hex['red']; // #f00

$person = [
    'first_name' => 'Rafa',
    'last_name' => 'Nelkin',
    'email' => 'rafa@rafa.com'
];

echo $person['first_name']; // Rafa

// Array within an array
$people = [
    [
        'first_name' => 'Rafa',
        'last_name' => 'Nelkin',
        'email' => 'rafa@mail.com'
    ],
    [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'john@mail.com'
    ],
    [
        'first_name' => 'jane',
        'last_name' => 'Doe',
        'email' => 'jane@mail.com'
    ]
];

echo $people[1]['email']; // john@mail.com

// json encode & decode
var_dump(json_encode($people));