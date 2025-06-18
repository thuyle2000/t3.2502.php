<?php
//demo sort and associate array
$fruits = [
    "apple" => 300,
    "banana" => 12,
    "orange" => 200,
    "grape" => 40
];
// Display original array
echo "Original fruits:\n";
foreach ($fruits as $fruit => $price) {
    echo "\t$fruit: $price VND\n";
}

// Sort by keys (fruit names)
ksort($fruits);
// Display sorted array by keys     
echo "\nSorted fruits by name:\n";
foreach ($fruits as $fruit => $price) {
    echo "\t$fruit: $price VND\n";
}

// Sort by values (prices)
asort($fruits);
// Display sorted array by values
echo "\nSorted fruits by price:\n";
foreach ($fruits as $fruit => $price) {
    echo "\t$fruit: $price VND\n";
}

// Sort by values (prices) in descending order
arsort($fruits);
// Display sorted array by values
echo "\nSorted fruits by price (descending):\n";
foreach ($fruits as $fruit => $price) {
    echo "\t$fruit: $price VND\n";
}   