<?php

class MyClass {
    public $data;

    public function __construct($data) {
        $this->data = $data;
    }
}

// Instantiate an object
$obj1 = new MyClass("Original Data");

// Clone the object
$obj2 = clone $obj1;

// Modify the data in the cloned object
$obj2->data = "Modified Data";

// Display data from both objects
echo "Original Object Data: " . $obj1->data . "\n"; // Outputs "Original Data"
echo "Cloned Object Data: " . $obj2->data . "\n";   // Outputs "Modified Data"

?>
