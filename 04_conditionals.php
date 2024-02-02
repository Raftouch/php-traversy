<?php

/*
<
>
<= less than or equal to
>= greater than or equal to
== equal to
=== identical to
!= not equal to
!== not identical to
*/

$age = 10;

if ($age >= 18) {
    echo 'you are old enough to vote';
} else {
    echo 'too young to vote';
}

$t = date('F j H:i:s'); // February 2 14:56:25

echo $t;

$greeting = date('H');

if ($greeting < 12) {
    echo 'Good Morning Mate';
} else if ($greeting < 17) {
    echo 'Good afternoon';
} else {
    echo 'Good evening';
}
// Good afternoon (as 14h)

$posts = ['first post'];

/*
if(empty($posts)) {
    echo 'No posts';
} else {
    echo 'Number of posts: ' . count($posts);
}
*/

echo empty($posts) ? 'No posts' : 'Total number of posts: ' . count($posts);

/*
if(!empty($posts)) {
    echo $posts[0];
}
*/

/*
$firstPost = empty($posts) ? 'No posts' : $posts[0];
echo $firstPost;
*/

$firstPost = $posts[0] ?? null;
echo $firstPost;

$favColor = 'yellow';

switch ($favColor) {
    case 'red':
        echo 'Your fav color is red';
        break;
    case 'blue':
        echo 'Your fav color is blue';
        break;
    case 'green':
        echo 'Your fav color is green';
        break;
    default:
        echo 'Your fav color is not red, green or blue';
}
