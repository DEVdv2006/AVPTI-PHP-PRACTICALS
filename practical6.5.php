<?php

// Interface for swimming
interface Swimmer {
    public function swim();
}

// Interface for flying
interface Flyer {
    public function fly();
}

// Class implementing both interfaces
class Bird implements Swimmer, Flyer {
    public function swim() {
        echo "Bird swimming\n";
    }

    public function fly() {
        echo "Bird flying\n";
    }
}

// Instantiate Bird class
$bird = new Bird();
$bird->swim();
$bird->fly();

?>
