<!-- 6. Arrays: Indexed, Associative, Multidimensional -->
 <?php
// -----------------------------
// 1. Indexed Array
// -----------------------------
$students = array("Ramsharan", "Sita", "John", "Anita");

echo "<h3>Indexed Array:</h3>";
echo "Students: <br>";
for ($i = 0; $i < count($students); $i++) {
    echo "Student " . ($i + 1) . ": " . $students[$i] . "<br>";
}
echo "<br>";

// -----------------------------
// 2. Associative Array
// -----------------------------
$studentInfo = array(
    "name" => "Ramsharan",
    "age" => 25,
    "grade" => "A",
    "course" => "Computer Science"
);

echo "<h3>Associative Array:</h3>";
foreach ($studentInfo as $key => $value) {
    echo ucfirst($key) . ": $value<br>";
}
echo "<br>";

// -----------------------------
// 3. Multidimensional Array
// -----------------------------
$allStudents = array(
    array(
        "name" => "Ramsharan",
        "age" => 25,
        "grade" => "A"
    ),
    array(
        "name" => "Sita",
        "age" => 23,
        "grade" => "B"
    ),
    array(
        "name" => "John",
        "age" => 24,
        "grade" => "A+"
    )
);

echo "<h3>Multidimensional Array:</h3>";
foreach ($allStudents as $index => $student) {
    echo "Student " . ($index + 1) . ":<br>";
    foreach ($student as $key => $value) {
        echo ucfirst($key) . ": $value<br>";
    }
    echo "<br>";
}

// -----------------------------
// Manipulating Arrays
// -----------------------------
echo "<h3>Manipulating Arrays:</h3>";

// Add a new student to indexed array
$students[] = "Ramesh";
echo "Added new student to indexed array: " . $students[count($students)-1] . "<br>";

// Update grade of Sita in multidimensional array
$allStudents[1]["grade"] = "A";
echo "Updated Sita's grade in multidimensional array: " . $allStudents[1]["grade"] . "<br>";

// Remove a student from indexed array
unset($students[2]); // removes John
echo "Removed student at index 2 from indexed array.<br>";

// Display updated indexed array
echo "Updated Students List:<br>";
print_r($students);
?>
