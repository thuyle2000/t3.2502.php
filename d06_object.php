<?php
//demo ve lap trinh huong doi tuong
class Person {
    public $name;
    public $age;
    public $gender;

    // Constructor to initialize properties
    public function __construct($name="huy", $age=18, $gender=false) {
        $this->name = $name;
        $this->age = $age;  
        $this->gender = $gender;
    }


    // Method to greet the person
    public function greet() {
        return "Hello, my name is {$this->name}, I am {$this->age} years old";
    }

    // Method to check if the person is an adult
    public function isAdult() {
        return $this->age >= 18;
    }

    // Method to display person's information
    public function displayInfo() {
        $adultStatus = $this->isAdult() ? "an adult" : "not an adult";
        return "Name: {$this->name}, Age: {$this->age} [  $adultStatus ]";
    }

    public function __toString()
    {
        $gen = $this->gender?"male":"female";
        return "Name: {$this->name}, Age: {$this->age}, Gender: {$gen}";
    }

    // Destructor to clean up resources
    // This is called when the object is destroyed
    public function __destruct()
    {
        echo "Object of class [". get_class($this) ."] with name {$this->name} is being destroyed.\n";
    }

    use Displayable; // Use the Displayable trait
    

}



// tao lop con Student ke thua tu Person
class Student extends Person {
    public $studentID;
    public $major;
    public $gpa;

    // Constructor to initialize properties
    public function __construct($name, $age, $gender, $studentID=null, $major = null, $gpa = 3.0) {
        parent::__construct($name, $age, $gender); // Call the parent constructor
        $this->studentID = $studentID;
        $this->major = $major;
        $this->gpa = $gpa;
    }

    // Method to display student's information
    public function displayInfo() {
        return parent::displayInfo() . ", Student ID: {$this->studentID}";
    }

    public function __toString()
    {
        return parent::__toString() . ", Student ID: {$this->studentID}";
    }
}


// tao lop con Teacher ke thua tu Person
class Teacher extends Person {
    public $teacherID;
    public $experience;

    // Constructor to initialize properties
    public function __construct($fname, $age, $gender, $teacherID=null, $experience = null) {
        parent::__construct($fname, $age, $gender); // Call the parent constructor
        $this->teacherID = $teacherID;
        $this->experience = $experience;
    }

    // Method to display teacher's information
    public function displayInfo() {
        return parent::displayInfo() . ", Teacher ID: {$this->teacherID}, Experience: {$this->experience}";
    }

    public function __toString()
    {
        return parent::__toString() . ", Employee ID: {$this->teacherID}, Experience: {$this->experience}";
    }
}


class Laptop {

    // version php 7.x
    // public $brand;
    // public $model;
    // public $price;

    // // Constructor to initialize properties
    // public function __construct($brand=null, $model=null, $price=1000) {
    //     $this->brand = $brand;
    //     $this->model = $model;
    //     $this->price = $price;
    // }

    // version php 8.x
    public function __construct(public $brand=null, public $model=null, public $price=1000) {
        // Properties are automatically initialized
    }


    // Method to display laptop's information
    public function __toString()
    {
       return "Brand: {$this->brand}, Model: {$this->model}, Price: {$this->price}";
    }

    use Displayable;
}

// Example Trait
trait Displayable {
    public function print() {
        return " >> object of class [" . get_class($this) . "]" .$this ;
    }
}
