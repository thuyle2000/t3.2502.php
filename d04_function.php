<?php

//demo buildin function
$x1 = "Hello";
$x2 = 124.89;
$x3 = 101;
$x4 = false;
$x5 = ["PHP", "Python", "JavaScript"];

// Print the type of each variable
echo "x1 = $x1, Type of x1: " . gettype($x1) . "\n";  
echo "x2 = $x2, Type of x2: " . gettype($x2) . "\n";
echo "x3 = $x3, Type of x3: " . gettype($x3) . "\n";
echo "x4 = $x4, Type of x4: " . gettype($x4) . "\n";

var_dump($x5); // Using var_dump to show more details about the variable
echo "Type of x5: " . gettype($x5) . "\n";