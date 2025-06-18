<?php   
// Regular Expressions in PHP
$pattern = '/(\w+)/'; // Match words
$subject = "Hello World! Welcome to PHP Regex.";
preg_match_all($pattern, $subject, $matches);
print_r($matches);
// Output: Array ( [0] => Array ( [0] => Hello [1] => World [2] => Welcome [3] => to [4] => PHP [5] => Regex ) )

$pattern = '/\d+/'; // Match digits
$subject = "There are 2 apples and 13 oranges.";
preg_match_all($pattern, $subject, $matches);
print_r($matches);
// Output: Array ( [0] => Array ( [0] => 2 [1] => 13 ) )

$subject = "Email me at example@example.COM, or at TRI@GMAIL.com";
$pattern = '/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/'; // Match email addresses
preg_match_all($pattern, $subject, $matches);
print_r($matches);