<?php

//demo sort array of objects

// Define an array of objects
// Each object represents a person with id, name, and age properties
$people = [
    (object)["id"=>"P01", "name" => "Trong", "age" => 25],
    (object)["id"=>"P03","name" => "Ngoc", "age" => 20],
    (object)["id"=>"P02","name" => "Thai", "age" => 22],
    (object)["id"=>"P06","name" => "Hung", "age" => 30],
    (object)["id"=>"P04","name" => "Quang", "age" => 18],
    (object)["id"=>"P05","name" => "Bao", "age" => 22],
];

// Display original array of objects
echo "Original people:\n";
foreach ($people as $p) {
    echo "\t {$p->id}: {$p->name} is {$p->age} years old.\n";
}


// user-defined function:  Sort by age
usort($people, function($a, $b) {
    return $a->age <=> $b->age;
});

// Display sorted results
echo "\nSorted people by age:\n";
foreach ($people as $p) {
    echo "\t {$p->id}: {$p->name} is {$p->age} years old.\n";
}


// user-defined function:  Sort by name
usort($people, function($a, $b) {
    return strcmp($a->name, $b->name);
});

// Display sorted results
echo "\nSorted people by name:\n";
foreach ($people as $p) {
    echo "\t {$p->id}: {$p->name} is {$p->age} years old.\n";
}
