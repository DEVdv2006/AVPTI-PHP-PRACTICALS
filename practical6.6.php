<?php

// Parent class
class Vehicle {
    public function drive() {
        echo "Driving a vehicle\n";
    }
}

// Child class inheriting from Vehicle
class Car extends Vehicle {
    public function honk() {
        echo "Car honking\n";
    }
}

// Grandchild class inheriting from Car
class SportsCar extends Car {
    public function race() {
        echo "Sports car racing\n";
    }
}

// Instantiate SportsCar class
$sportsCar = new SportsCar();
$sportsCar->drive(); // Accessing method from the parent class
$sportsCar->honk();  // Accessing method from the immediate parent class
$sportsCar->race();  // Accessing method from the current class

?>
