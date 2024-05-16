<?php

// Define a simple abstract class
abstract class Shape {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    // Abstract method to calculate area
    abstract public function calculateArea();
}

// Concrete class implementing the abstract class
class Circle extends Shape {
    private $radius;

    public function __construct($name, $radius) {
        parent::__construct($name);
        $this->radius = $radius;
    }

    // Implementing the abstract method to calculate area for Circle
    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }
}

// Instantiate Circle class
$circle = new Circle("Circle", 5);
echo "Area of the circle: " . $circle->calculateArea() . "\n";

?>
