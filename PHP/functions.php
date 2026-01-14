<!-- 4. User-defined Functions -->
<!-- Source Code: -->
<?php
// -----------------------------
// User-defined functions
// -----------------------------

// Function to calculate area of a rectangle
function areaRectangle($length, $width) {
    return $length * $width;
}

// Function to calculate area of a circle
function areaCircle($radius) {
    return 3.1416 * $radius * $radius;
}

// Function to calculate area of a triangle
function areaTriangle($base, $height) {
    return 0.5 * $base * $height;
}

// -----------------------------
// Using the functions
// -----------------------------
echo "<h3>Area Calculator</h3>";

// Rectangle
$length = 10;
$width = 5;
$rectArea = areaRectangle($length, $width);
echo "Rectangle (Length=$length, Width=$width) Area: $rectArea<br>";

// Circle
$radius = 7;
$circleArea = areaCircle($radius);
echo "Circle (Radius=$radius) Area: $circleArea<br>";

// Triangle
$base = 8;
$height = 6;
$triangleArea = areaTriangle($base, $height);
echo "Triangle (Base=$base, Height=$height) Area: $triangleArea<br><br>";

// -----------------------------
// Function reusability
// -----------------------------
echo "<strong>Reusing functions with new values:</strong><br>";

echo "Rectangle (Length=15, Width=4) Area: " . areaRectangle(15, 4) . "<br>";
echo "Circle (Radius=3) Area: " . areaCircle(3) . "<br>";
echo "Triangle (Base=12, Height=10) Area: " . areaTriangle(12, 10) . "<br>";

?>

