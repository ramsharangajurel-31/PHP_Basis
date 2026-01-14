<!-- 4. User-defined Functions -->
<!-- Source Code: -->
<?php
function addNumbers($a, $b) {
    return $a + $b;
}

function greetUser($name) {
    return "Hello, $name!";
}

echo addNumbers(10, 20) . "<br>";
echo addNumbers(5, 15) . "<br>";
echo greetUser("Ramsharan") . "<br>";
echo greetUser("Manish") . "<br>";
?>
