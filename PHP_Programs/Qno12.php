<?php
function divide($a, $b) {
    if ($b == 0) {
        throw new Exception("Division by zero is not allowed");
    }
    return $a / $b;
}

try {
    echo "Result: " . divide(10, 0);
}
catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
finally {
    echo "<br>Program execution completed";
}
?>
