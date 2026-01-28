<?php
$marks = 76;

// if–else decision
if ($marks >= 90)
    $grade = "A";
elseif ($marks >= 75)
    $grade = "B";
elseif ($marks >= 60)
    $grade = "C";
else
    $grade = "Fail";

echo "Grade: $grade<br>";

// switch-case decision
switch ($grade) {
    case "A":
        echo "Excellent Performance";
        break;
    case "B":
        echo "Very Good";
        break;
    case "C":
        echo "Good";
        break;
    default:
        echo "Needs Improvement";
}
?>
