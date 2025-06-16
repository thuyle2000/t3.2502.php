<?php
// Data Types in PHP

// 1. String
$fname = "John Doe";
$lname = "Smith";
$name = $fname . " " . $lname;
echo ">> Name: " . $name . "\n";
echo ">> Ho ten: $name \n";
echo '>> Ho ten: $name \n';

// 2. Integer
$age = 30;
echo "Age: " . $age . "\n";

// 3. Float
$salary = 55000.50;
echo "Salary: " . $salary . "\n";

// 4. Boolean
$isEmployed = true;
echo "Employed: " . ($isEmployed ? "Yes" : "No") . "\n";

