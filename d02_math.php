<?php
// Basic Math Operations in PHP
$a = 10;
$b = 5;
$c = -25;
echo "Basic Math Operations:\n";
echo "Numbers: a = $a, b = $b, c=$c\n";
echo " >> Addition: " . ($a + $b) . "\n";
echo " >> Subtraction: " . ($a - $b) . "\n";
echo " >> Multiplication: " . ($a * $b) . "\n";
echo " >> Division: " . ($a / $b) . "\n\n";

// Using Math Functions
echo " >> Square Root of $a: " . sqrt($a) . "\n";
echo " >> Power(a,2): " . pow($a, 2) . "\n";

echo " >> Absolute Value of [$c]: " . abs($c) . "\n";
echo " >> Maximum of a, b, c: " . max($a, $b, $c) . "\n";
echo " >> Minimum of a, b, c: " . min($a, $b, $c) . "\n";    