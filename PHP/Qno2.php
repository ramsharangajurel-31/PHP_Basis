<!-- 2. Variables, Constants, Data Types, and Operators -->
<?php
// -----------------------------
// 1. Variables
// -----------------------------
$name = "Ramsharan"; // string
$age = 25;           // integer
$height = 5.8;       // float
$isStudent = true;   // boolean

echo "<h3>Variables:</h3>";
echo "Name: $name<br>";
echo "Age: $age<br>";
echo "Height: $height<br>";
echo "Is Student? " . ($isStudent ? "Yes" : "No") . "<br><br>";

// -----------------------------
// 2. Constants
// -----------------------------
define("SCHOOL", "Sunrise Academy"); // constant
const COUNTRY = "Nepal";

echo "<h3>Constants:</h3>";
echo "School: " . SCHOOL . "<br>";
echo "Country: " . COUNTRY . "<br><br>";

// -----------------------------
// 3. Data Types
// -----------------------------
$fruits = array("Apple", "Banana", "Mango"); // array
$emptyValue = null;                          // null

echo "<h3>Data Types:</h3>";
echo "Fruits: ";
print_r($fruits);
echo "<br>";
echo "Empty Value: ";
var_dump($emptyValue); // shows type and value
echo "<br><br>";

// -----------------------------
// 4. Operators
// -----------------------------
$num1 = 10;
$num2 = 5;

echo "<h3>Operators:</h3>";

// Arithmetic Operators
echo "Addition: " . ($num1 + $num2) . "<br>";
echo "Subtraction: " . ($num1 - $num2) . "<br>";
echo "Multiplication: " . ($num1 * $num2) . "<br>";
echo "Division: " . ($num1 / $num2) . "<br>";
echo "Modulus: " . ($num1 % $num2) . "<br><br>";

// Assignment Operators
$num3 = 20;
$num3 += 5; // equivalent to $num3 = $num3 + 5
echo "Assignment (num3 += 5): $num3<br><br>";

// Comparison Operators
echo "Is num1 equal to num2? " . ($num1 == $num2 ? "Yes" : "No") . "<br>";
echo "Is num1 greater than num2? " . ($num1 > $num2 ? "Yes" : "No") . "<br><br>";

// Logical Operators
$isAdult = true;
$hasPermission = false;

echo "Logical AND (isAdult && hasPermission): " . (($isAdult && $hasPermission) ? "Yes" : "No") . "<br>";
echo "Logical OR (isAdult || hasPermission): " . (($isAdult || $hasPermission) ? "Yes" : "No") . "<br>";
echo "Logical NOT (!isAdult): " . (! $isAdult ? "Yes" : "No") . "<br>";
?>
