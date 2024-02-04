<?php

$string = 'Hello World';
echo $string;


// string length
echo strlen($string); // 11

// find the 1st occurence of a substring
echo strpos($string, 'o'); // 4

// find the last occurence of a substring
echo strrpos($string, 'o'); // 7

// reverse a string
echo strrev($string);

// convert all characters to lowercase
echo strtolower($string);

// convert all characters to uppercase
echo strtoupper($string);

// uppercase the first character of each world
echo ucwords($string);

// replace
echo str_replace('World', 'Everyone', $string);

// return a portion of the string
echo substr($string, 0, 5);

// return a portion of the string starting from 5
echo substr($string, 5);

// starts with
if (str_starts_with($string, 'Hello')) {
    echo 'YES';
}

// ends with
if (str_ends_with($string, 'Hello')) {
    echo 'YES';
} else {
    echo 'NO';
}

// the brwoser parses <h1>
$string_2 = '<h1>Hello</h1>';
echo $string_2; // hello

// outputs javascript
$string_3 = '<script>alert(1)</script>';
// echo $string_3; // will output an alert
echo htmlspecialchars($string_3);

// formatted strings --> good when you have users providing data
printf('%s likes to %s', 'Rafa', 'code'); // Rafa likes to code
printf('1+1=%d', 1 + 1); // 1+1=2
printf('1+1=%f', 1 + 1); // f --> float // ... 2.0000
