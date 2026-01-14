<!-- 6. Arrays: Indexed, Associative, Multidimensional -->
 <?php
// Indexed array
$students = ["Ram", "Sita", "Gita"];
echo "Indexed Array: " . $students[1] . "<br>";

// Associative array
$student = [
    "name" => "Ram",
    "age" => 20,
    "grade" => "A"
];
echo "Associative Array: " . $student['name'] . ", " . $student['grade'] . "<br>";

// Multidimensional array
$studentInfo = [
    ["name" => "Ram", "age" => 20],
    ["name" => "Sita", "age" => 22]
];
echo "Multidimensional Array: " . $studentInfo[1]['name'] . "<br>";
?>
