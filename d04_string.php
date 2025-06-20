<?php
// String manipulation demo

printf("input string: ");
// Read input from the user
$input_string = trim(fgets(STDIN));
$repeat_string = str_repeat($input_string, 5);
// Print the repeated string
echo "Repeated String: $repeat_string\n";


$text = "Hello, World!";
$upper_text = strtoupper($text);
$lower_text = strtolower($text);
$replaced_text = str_replace("World", "PHP", $text);
$length_text = strlen($text);


// Print the results
echo "Original Text: $text\n";
echo "Length of Text: $length_text characters\n";
echo "Uppercase Text: $upper_text\n";
echo "Lowercase Text: $lower_text\n";
echo "Replaced Text: $replaced_text\n";

