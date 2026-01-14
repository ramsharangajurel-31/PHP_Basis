<!-- 3. Decision Making: if-else and switch-case -->
 <?php
$marks = 85;

// if-else
if ($marks >= 90) {
    echo "Grade: A<br>";
} elseif ($marks >= 75) {
    echo "Grade: B<br>";
} elseif ($marks >= 60) {
    echo "Grade: C<br>";
} else {
    echo "Grade: F<br>";
}

// switch-case
$day = 3;
switch ($day) {
    case 1:
        echo "Monday<br>";
        break;
    case 2:
        echo "Tuesday<br>";
        break;
    case 3:
        echo "Wednesday<br>";
        break;
    default:
        echo "Another day<br>";
}
?>
