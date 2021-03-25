<?php

$x = '5'; // global scope

function myTest() {
 // using x inside this function will generate an error
//  $v = 123;
global $x;
 echo "<p>Variable x inside function is: $x</p>";
}

// myTest();
// // echo $v;
// echo "<p>Variable x outside function is: $x</p>";

$x = 5;
$y = 10;
// function myTest() {
//  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
// }
// myTest();
echo $y; // outputs 15
