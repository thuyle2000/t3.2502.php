<?php

// String Manipulation in PHP
$originalString = "   Hello, World!   ";
echo "Original String: " . $originalString . "\n";
// Trim whitespace
$trimmedString = trim($originalString);

// Convert to uppercase
$upperString = strtoupper($trimmedString);
echo "Uppercase: " . $upperString . "\n";

// Convert to lowercase
$lowerString = strtolower($trimmedString);
echo "Lowercase: " . $lowerString . "\n";

// Get string length
$stringLength = strlen($trimmedString   );
echo "Length: " . $stringLength . "\n";

// Find a substring
$position = strpos($trimmedString, "World");
if ($position !== false) {
    echo "Found 'World' at position: " . $position . "\n";
} else {
    echo "'World' not found\n";
}

// Replace a substring
$replacedString = str_replace("World", "PHP", $trimmedString);
echo "Replaced String: " . $replacedString . "\n";

// Split a string into an array
$splitString = explode(", ", $trimmedString);   
echo "Split String: ";
print_r($splitString);