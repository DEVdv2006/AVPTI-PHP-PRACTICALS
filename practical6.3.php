<?php

class MyClass {
    private $privateAttribute;

    public function __construct($initialValue) {
        $this->privateAttribute = $initialValue;
    }

    public function __get($name) {
        
            return $this->$name;
        
    }

    public function __set($name, $value) {
        
            $this->$name = $value;
       
    }
}

$obj = new MyClass("Initial Value");

// Access private attribute directly (will cause an error)
// echo $obj->privateAttribute;

// Access private attribute using __get()
echo $obj->__get("privateAttribute") . "\n";

// Set private attribute using __set()
$obj->__set("privateAttribute", "New Value");

// Access private attribute after setting
echo $obj->__get("privateAttribute") . "\n";
?>
