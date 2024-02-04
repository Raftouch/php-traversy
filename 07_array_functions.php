<?php

// built-in php functions

$fruits = ['apple', 'banana', 'orange'];

// get length
echo count($fruits); // 3

// search for value in array
var_dump(in_array('apple', $fruits)); // bool(true)

// add to array

$fruits[] = 'grape'; // 1st method
array_push($fruits, 'blueberry', 'strawberry'); // 2nd method

// add to the beginning
array_unshift($fruits, 'mango');


// remove from the end of array
array_pop($fruits);

// remove from the beginning of array
array_shift($fruits);

// remove a specific index
// unset($fruits[2]); // removes also and index --> 0, 1, 3, 4

// split into chunks
$chunked_array = array_chunk($fruits, 3);

print_r($chunked_array); // 0, 1, 2 - 0, 1 --> 2 chunks of an initial array
// print_r($fruits);

$array_1 = [1, 2, 3];
$array_2 = [4, 5, 6];

// same result -->
$array_3 = array_merge($array_1, $array_2);
$array_4 = [...$array_1, ...$array_2];

print_r($array_4);

$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];

$c = array_combine($a, $b);
print_r($c);

$keys = array_keys($c);
print_r($keys);

// flip an array (key becomes value, value becomes key)
$flipped = array_flip($c);
print_r($flipped);

$numbers = range(1, 4);
print_r($numbers);

// map
$new_numbers = array_map(function ($number) {
    return "Nr {$number}";
}, $numbers);

print_r($new_numbers);

// filter
$lessThan2 = array_filter($numbers, fn ($number) => $number <= 2);
print_r($lessThan2);

// reduce (add together)
// here : $carry starts at 0
$sum = array_reduce($numbers, fn ($carry, $number) => $carry + $number);
var_dump($sum); // int(10)