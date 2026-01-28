<?php
function addNumbers($a, $b) {
    return $a + $b;
}

function calculatePercentage($obtained, $total) {
    return ($obtained / $total) * 100;
}

echo "Addition: " . addNumbers(10, 20) . "<br>";
echo "Percentage: " . calculatePercentage(420, 500) . "%";
?>
