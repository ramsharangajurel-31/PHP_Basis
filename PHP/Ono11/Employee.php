<?php
// Include the Person class
require_once 'Person.php';

// Child class: Employee
class Employee extends Person {
    public $position;

    // Constructor
    public function __construct($name, $age, $salary, $position) {
        parent::__construct($name, $age, $salary); // Call parent constructor
        $this->position = $position;
    }

    // Child class method
    public function displayEmployeeInfo() {
        echo "<strong>Employee Info:</strong><br>";
        echo "Name: {$this->name}<br>";       // Public: accessible
        echo "Position: {$this->position}<br>";

        // Protected property accessible in child class
        echo "Age (protected): {$this->age}<br>";

        // Private property is NOT accessible in child class
        // echo "Salary: {$this->salary}<br>"; // This will cause an error
    }

    // Accessing protected method from parent
    public function accessProtectedMethod() {
        $this->showAge(); // Works because showAge() is protected
    }
}
?>
