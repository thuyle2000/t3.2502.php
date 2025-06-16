<?php
class Person {
    // Properties (thuoc tinh) of the class
    public $first_name;
    public $last_name;
    public $age;

    // Constructor (ham khoi tao) to initialize the properties
    public function __construct($first_name="tan", $last_name="tang duy", $age=10) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
    }

    // Method (phuong thuc) to display person's information 
    public function displayInfo() {
        echo "Name: " . $this->getFullName() . "\n";
        echo "Age: " . $this->age . "\n";
    }

    // Method to get full name
    public function getFullName() {
        return $this->last_name . " " . $this->first_name;
    }
}

// Create an instance of the Person class
$p1 = new Person("John", "Doe", 30);
$p1->displayInfo(); 

$p2 = new Person();
$p2->displayInfo();