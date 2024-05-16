<?php

// Parent class
class Animal1 {
    public function makeSound() {
        echo "Animal sound\n";
    }
}

// Child class overriding the makeSound method
class Dog extends Animal1 {
    public function makeSound() {
        echo "Woof!\n";
    }
}

// Instantiate Dog class
$dog = new Dog();
$dog->makeSound(); // Outputs "Woof!"

?>
