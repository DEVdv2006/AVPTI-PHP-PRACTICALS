<?php

class Calculator {
    public function add($a, $b = null) {
        if ($b === null) {
            return $a;
        } else {
            return $a + $b;
        }
    }
}

// Instantiate Calculator class
$calc = new Calculator();

// Call add method with one argument
echo $calc->add(5) . "\n"; // Outputs 5

// Call add method with two arguments
echo $calc->add(3, 4) . "\n"; // Outputs 7

?>
