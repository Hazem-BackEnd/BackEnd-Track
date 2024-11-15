<?php
class Singleton {
    private static $instance = null; // Holds the single instance
    private function __construct() {
        // prevents direct instantiation
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }

    public function someMethod() {
        echo "Singleton method called!";
    }
}

// Usage
$singleton = Singleton::getInstance();
$singleton->someMethod();

