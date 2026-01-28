<?php
// Indexed Array
$students = ["Shilpy Rauniyar", "Shyam", "Sita"];

echo "Indexed Array:<br>";
foreach ($students as $name) {
    echo $name . "<br>";
}

// Associative Array
$student = [
    "name" => "Shilpy Rauniyar",
    "age" => 20,
    "grade" => "A"
];

echo "<br>Associative Array:<br>";
foreach ($student as $key => $value) {
    echo "$key : $value <br>";
}

// Multidimensional Array
$studentsInfo = [
    ["name" => "Shilpy Rauniyar", "age" => 20],
    ["name" => "Sita", "age" => 21]
];

echo "<br>Multidimensional Array:<br>";
foreach ($studentsInfo as $stu) {
    echo "Name: {$stu['name']} | Age: {$stu['age']}<br>";
}
?>
