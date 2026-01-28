<?php
// Base class
class Employee {
    public $name;        // Accessible anywhere
    protected $salary;   // Accessible in class and child classes
    private $ssn;        // Accessible only inside this class

    public function __construct($name, $salary, $ssn) {
        $this->name = $name;
        $this->salary = $salary;
        $this->ssn = $ssn;
    }

    // Public method
    public function showInfo() {
        echo "Name: $this->name\n";
        echo "Salary: $this->salary\n";
        echo "SSN: $this->ssn\n";
    }

    // Protected method
    protected function getSalary() {
        return $this->salary;
    }

    // Private method
    private function getSSN() {
        return $this->ssn;
    }
}

// Child class
class Manager extends Employee {
    public $department;

    public function __construct($name, $salary, $ssn, $department) {
        parent::__construct($name, $salary, $ssn); // Call parent constructor
        $this->department = $department;
    }

    public function showManagerInfo() {
        echo "Manager Name: $this->name\n";          // Public accessible
        echo "Department: $this->department\n";
        echo "Salary (protected): " . $this->getSalary() . "\n"; // Protected accessible
        // echo $this->getSSN(); // Error: private not accessible
    }
}

// Create objects
$emp = new Employee("Ram", 50000, "123-45-6789");
$emp->showInfo();

echo "\n";

$mgr = new Manager("Sita", 80000, "987-65-4321", "IT");
$mgr->showManagerInfo();
?>
