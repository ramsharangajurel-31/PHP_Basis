<!-- 7. Foreach Loop and Array Functions
  -->
<?php
// -----------------------------
// Example: Using foreach and array functions
// -----------------------------

// Indexed arrays
$groupA = array("Ramsharan", "Sita", "John");
$groupB = array("Anita", "Ramesh", "Kiran");

echo "<h3>Original Group A:</h3>";
foreach ($groupA as $student) {
    echo $student . "<br>";
}

// -----------------------------
// 1. Count number of elements
// -----------------------------
echo "<br>Total students in Group A: " . count($groupA) . "<br>";

// -----------------------------
// 2. Sort array alphabetically
// -----------------------------
sort($groupA); // Sorts in ascending order

echo "<br>Group A after sorting:<br>";
foreach ($groupA as $student) {
    echo $student . "<br>";
}

// -----------------------------
// 3. Merge two arrays
// -----------------------------
$allStudents = array_merge($groupA, $groupB);

echo "<br>Merged Groups (Group A + Group B):<br>";
foreach ($allStudents as $student) {
    echo $student . "<br>";
}

// -----------------------------
// 4. Count total students in merged array
// -----------------------------
echo "<br>Total students in merged group: " . count($allStudents) . "<br>";

// -----------------------------
// 5. Reverse array (optional)
// -----------------------------
$reversed = array_reverse($allStudents);
echo "<br>Reversed Merged Group:<br>";
foreach ($reversed as $student) {
    echo $student . "<br>";
}
?>
