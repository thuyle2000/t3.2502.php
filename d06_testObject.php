<?php
require_once 'd06_object.php';

// Create a new Person object
$person1 = new Person("Huy Tran", 30, false);
$person2 = new Person("Quang Vo", 17, true);
$person3 = new Person();

// Display the person's information
echo $person1->displayInfo() . "\n"; // Name: Alice, Age: 30 [  an adult ]
echo $person2->displayInfo() . "\n"; // Name: Bob, Age: 17 [  not an adult ]
echo $person3->print() . "\n"; // Name: Bob, Age: 17 [  not an adult ]


// Greet the person
echo $person1->greet() . "\n"; // Hello, my name is Alice, I am 30 years old
echo $person2->greet() . "\n"; // Hello, my name is Bob, I am 17 years old


// tao doi tuong Student
$s1 = new Student("Huy Tran", 30, false, "S12345", "Computer Science", 3.5);
$s2 = new Student("Quang Vo", 17, true, "S54321", "Mathematics", 3.8);

// Display the student's information
echo $s1->displayInfo() . "\n"; // Name: Huy Tran,
echo $s2 . "\n\n"; // Name : Quang Vo

// tao doi tuong Teacher
$t1 = new Teacher(fname:"Tan Tang", age:48, gender:true, teacherID: "T12345", experience:5);

// Display the teacher's information
echo $t1->print() . "\n"; // Name: Tan Tang, Age: 48 [  an adult ]

// Greet the teacher
echo $t1->greet() . "\n\n"; // Hello, my name is Tan



// tao doi tuong Laptop
$laptop1 = new Laptop("Dell XPS 13", "Intel Core i7", 16);
$laptop2 = new Laptop("MacBook Pro", "Apple M1", 8);

// Display the laptop's information
echo $laptop1->print() . "\n"; // Brand: Dell XPS 13, Model: Intel Core i7, Price: 1600
echo $laptop2->print() . "\n"; // Brand: MacBook Pro, Model: Apple M1, Price: 1200