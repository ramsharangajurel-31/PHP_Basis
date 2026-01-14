<?php
// Include the Employee class
require_once 'Employee.php';

// Create object of Employee class
$emp1 = new Employee("Ramsharan", 25, 50000, "Web Developer");

// Access methods
$emp1->displayEmployeeInfo(); // Display info (public and protected accessible)
echo "<br>";

// Access parent public method
$emp1->displayInfo(); // Can access public method of parent
echo "<br>";

// Access private method indirectly
$emp1->callSecret();
echo "<br>";

// Access protected method via child class
$emp1->accessProtectedMethod();
?>
