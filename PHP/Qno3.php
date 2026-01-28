<!-- 3. Decision Making: if-else and switch-case -->
 <?php
// -----------------------------
// Example: Grading System
// -----------------------------

$studentName = "Ramsharan";
$marks = 82; // Marks out of 100

echo "<h3>Student: $studentName</h3>";
echo "Marks: $marks<br><br>";

// -----------------------------
// 1. Using if–else
// -----------------------------
echo "<strong>Grade using if–else:</strong><br>";

if ($marks >= 90 && $marks <= 100) {
    $grade = "A+";
} elseif ($marks >= 80 && $marks < 90) {
    $grade = "A";
} elseif ($marks >= 70 && $marks < 80) {
    $grade = "B";
} elseif ($marks >= 60 && $marks < 70) {
    $grade = "C";
} elseif ($marks >= 50 && $marks < 60) {
    $grade = "D";
} else {
    $grade = "F";
}

echo "Grade: $grade<br><br>";

// -----------------------------
// 2. Using switch-case
// -----------------------------
echo "<strong>Grade using switch-case:</strong><br>";

// Convert marks into a "tens" value for switch
$tens = (int)($marks / 10);

switch ($tens) {
    case 10:
    case 9:
        $gradeSwitch = "A+";
        break;
    case 8:
        $gradeSwitch = "A";
        break;
    case 7:
        $gradeSwitch = "B";
        break;
    case 6:
        $gradeSwitch = "C";
        break;
    case 5:
        $gradeSwitch = "D";
        break;
    default:
        $gradeSwitch = "F";
}

echo "Grade: $gradeSwitch<br>";
?>
