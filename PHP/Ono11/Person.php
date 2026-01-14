<?php
// Base class: Person
class Person {
    // Access modifiers
    public $name;         // Can be accessed anywhere
    protected $age;       // Can be accessed in this class and child classes
    private $salary;      // Can only be accessed in this class

    // Constructor
    public function __construct($name, $age, $salary) {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    // Public method
    public function displayInfo() {
        echo "Name: {$this->name}<br>";
        echo "Age: {$this->age}<br>";
        echo "Salary: {$this->salary}<br>";
    }

    // Private method
    private function secret() {
        echo "This is a private method.<br>";
    }

    // Protected method
    protected function showAge() {
        echo "Protected Age: {$this->age}<br>";
    }

    // Public method to access private method
    public function callSecret() {
        $this->secret(); // Access private method inside class
    }
}
?>
