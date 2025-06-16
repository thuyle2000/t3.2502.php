<?php
// Array in PHP (mang don gian)
$fruits = array("Apple", "Banana", "Cherry");
echo "Fruits: " . implode(" , ", $fruits) . "\n";

$students = ["Alice", "Bob", "Charlie","David"];
echo "Students: " . implode(", ", $students) . "\n\n";

// Associative Array (mang ket hop)
$person = array(
    "first_name" => "John",
    "last_name" => "Doe",
    "age" => 30
);


echo "Person: " . $person['first_name'] . " " . $person['last_name'] . ", Age: " . $person['age'] . "\n\n";

$employee = [
    "e01" => "Jane Smith",
    "e02" => "Developer",
    "e03" => "Tri Meo",
    "e04" => "Trong Nghia",
    "e05" => "Anh Sau"
];

echo "Employee List:\n";
foreach ($employee as $id => $name) {
    echo "ID: $id, Name: $name\n";
}


// Multidimensional Array (mang da chieu)
$employees = array(
    array("name" => "Alice", "position" => "Manager"),
    array("name" => "Bob", "position" => "Developer"),
    array("name" => "Charlie", "position" => "Designer")
);
foreach ($employees as $employee) {
    echo "Employee: " . $employee['name'] . ", Position: " . $employee['position'] . "\n";
}