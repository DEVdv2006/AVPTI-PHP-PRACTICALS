<?php

// Define a simple interface
interface Shape {
    public function calculateArea();
}

// Implement the interface in a class
class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }
}

// Instantiate Circle class
$circle = new Circle(5);
echo "Area of the circle: " . $circle->calculateArea() . "\n";

?>
