<!-- 12. Write a PHP program to demonstrate exception handling using try, catch, and -->
<!-- finally. -->
<?php
// Function that divides two numbers
function divide($numerator, $denominator) {
    if ($denominator == 0) {
        // Throw an exception if denominator is zero
        throw new Exception("Error: Division by zero is not allowed.");
    }
    return $numerator / $denominator;
}

try {
    // Code that may throw an exception
    $a = 10;
    $b = 0; // Try changing this to 2 to see normal behavior
    $result = divide($a, $b);
    echo "Result: $result\n";
} 
catch (Exception $e) {
    // This block executes if an exception is thrown
    echo "Caught exception: " . $e->getMessage() . "\n";
} 
finally {
    // This block always executes
    echo "Execution of try-catch-finally block is complete.\n";
}
?>
