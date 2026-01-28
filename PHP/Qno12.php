<?php
function divide($num1, $num2) {
    if ($num2 == 0) {
        throw new Exception("Division by zero error!"); // Throw exception
    }
    return $num1 / $num2;
}

try {
    echo "Result: " . divide(10, 2) . "\n"; // Valid division
    echo "Result: " . divide(5, 0) . "\n";  // Will throw exception
} 
catch (Exception $e) {
    echo "Caught exception: " . $e->getMessage() . "\n";
} 
finally {
    echo "Execution completed.\n";
}
?>
