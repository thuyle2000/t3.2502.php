<?php
//demo array function
$names_1 = ["huy", "bao", "hieu", "ty","thinh","quang", "tri"];
$names_2 = ["trong", "ngoc", "tri", "loi", "tan","quang","anh","huy", "bao"];

// Print the original arrays
echo "Names 1: ";
print_r($names_1);

echo "Names 2: ";
print_r($names_2);

// Merge the two arrays
$merged_names = array_merge($names_1, $names_2);
// Print the merged array
echo "Merged Names: ";      
print_r($merged_names);


// intersection of two arrays
$common_names = array_intersect($names_1, $names_2);

// Print the common names
echo "Common Names: ";
print_r($common_names);

// Difference of two arrays
$unique_names_1 = array_diff($names_1, $names_2);
$unique_names_2 = array_diff($names_2, $names_1);

// Print the unique names
echo "Unique Names in Names 1: ";
print_r($unique_names_1);

echo "Unique Names in Names 2: ";
print_r($unique_names_2);   


//demo array filter
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// Filter even numbers
$even_numbers = array_filter($numbers, function($num) {
    return $num % 2 == 0;
});

// Print the even numbers
echo "Even Numbers: ";
print_r($even_numbers);

// filter by name

$filtered_names = array_filter($names_1, function($name) {
    return strpos($name, 'h') === 0; // Filter names starting with 'h'
});
// Print the filtered names
echo "Filtered Names: ";
print_r($filtered_names);


//demo array map
$numbers_squared = array_map(function($num) {
    return $num * $num; // Square each number
}, $numbers);
// Print the squared numbers
echo "Squared Numbers: ";
print_r($numbers_squared);

