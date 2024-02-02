<?php
echo 'hello123';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo 123 ?></h1>
    <h2><?= 123 ?></h1>
</body>
</html>

<?php
// echo - Output strings, numbers, html, ...
echo 123, 'Hello', 10.5;

// print - Works like echo, but can only take in a single argument
print 123;

// php view chrome extension
// print_r() - Print single values and array
print_r([1,2,3]);

// var_dump() - returns more info like data type and length
var_dump('Hello');
var_dump(true);

// var_export() - Similar to var_dump(). Outputs a string representation of a variable
var_export('Hello');

?>