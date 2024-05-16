<?php

// Parent class
class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function makeSound() {
        echo "Animal sound\n";
    }
}

// Child class inheriting from Animal
class Dog extends Animal {
    public function makeSound() {
        echo "Woof!\n";
    }
}

// Instantiate Animal class
$animal = new Animal("Generic Animal");
echo "Animal name: " . $animal->getName() . "\n";
$animal->makeSound();

// Instantiate Dog class
$dog = new Dog("Buddy");
echo "Dog name: " . $dog->getName() . "\n";
$dog->makeSound();
?>
