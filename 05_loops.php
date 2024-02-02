<?php

/*
for loop syntax
for (initialize; condition; increment) {
    // code to be executed
}
*/

for ($x = 0; $x <= 10; $x++) {
    echo $x . '<br>';
}

/*
while loop syntax
while (condition) {
    // code to be executed
}
*/

$a = 5;

while ($a <= 10) {
    echo $a . '<br>';
    $a++;
}

/*
do while loop syntax
do {
    // code to be executed
} while (condition);
*/

$y = 6;
do {
    echo $y . '<br>';
    $y++;
} while ($y <= 5);
// 6 is executed anyway

/*
foreach loop syntax
foreach ($array as $value) {
    // code to be executed
} 
*/

$posts = ['first post', 'second post', 'third post'];

// for($x = 0; $x < count($posts); $x++) {
//     echo $posts[$x];
// }

// the same with foreach
foreach ($posts as $post) {
    echo $post . '<br>';
}
// first post / second post / third post
foreach ($posts as $index => $post) {
    // echo $index . ' - ' . $post . '<br>'; // 0, 1, 2
    echo $index + 1 . ' - ' . $post . '<br>'; // 1, 2, 3
}

$person = [
    'first_name' => 'Rafa',
    'last_name' => 'Nelkin',
    'email' => 'rafa@rafa.com'
];

foreach ($person as $key => $value) {
    echo "$key - $value<br>";
}
// first_name - Rafa / last_name - Nelkin / email - ..
