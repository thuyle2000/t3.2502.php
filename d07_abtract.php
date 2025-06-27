<?php

include_once 'd06_object.php';
abstract class Shape {
    abstract public function area();

    public function describe(): string {
        return "This is a shape [" . get_class($this) . "] with an area of " . $this->area();
    }
}

class Rectangle extends Shape {
    public function __construct(private float $width, private float $height) {}

    public function area(): float {
        return $this->width * $this->height;
    }
}

class Circle extends Shape {
    public function __construct(private float $radius) {}

    public function area(): float {
        return pi() * $this->radius ** 2;
    }
}



//test case
$ds = [
    new Rectangle(5, 10),
    new Circle(7),
    new Person("John", 30, true), // Assuming Person is a class from d06_object.php
];

foreach ($ds as $item) {
    echo $item->describe() . PHP_EOL;
}




