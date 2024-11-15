<?php
class MyClass {
    public function __construct() {
        echo "Constructor called <br>";
    }

    public function __destruct() {
        echo "Destructor called <br>";
    }
}

$obj = new MyClass();
echo "Doing something...<br>";
