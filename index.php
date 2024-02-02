<?php

// $y = 12;

// function registerUser() {
//     global $y; // like this we can acces a global variable
//     echo $y;
//     echo 'user registered';
// }

// registerUser();

function registerUser($email) { // here $email is an argument
    echo $email . ' registered';
}

registerUser('Rafa'); // here 'Rafa' is a parameter

function sum($n1 = 4, $n2 = 5) {
    return $n1 + $n2;
} // = --> by default

// echo sum(3, 5);
// or 
// $number = sum(3, 5);
// echo $number;

echo sum();

// anonymous functions (functions that do not have a name)
$subtract = function($n1, $n2) {
    return $n1 - $n2;
};

echo $subtract(10, 5);

// arrow functions 
$multiply = fn($n1, $n2) => $n1 * $n2;
echo $multiply(9,7);
