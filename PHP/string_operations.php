<!-- 5. String Operations -->
<?php
// -----------------------------
// String Operations in PHP
// -----------------------------

$text = "Hello, Ramsharan! Welcome to PHP Programming.";

// 1. Length of the string
$length = strlen($text); // strlen() returns the number of characters
echo "<strong>Original String:</strong> $text<br>";
echo "Length of the string: $length<br><br>";

// 2. Extracting substring
$substring1 = substr($text, 7, 9); // Start at index 7, length 9
$substring2 = substr($text, -16, 11); // Start 16 chars from end, length 11
echo "<strong>Substring Extraction:</strong><br>";
echo "Substring (index 7, length 9): $substring1<br>";
echo "Substring (16 from end, length 11): $substring2<br><br>";

// 3. String replacement
$replacedText = str_replace("PHP Programming", "Web Development", $text);
echo "<strong>String Replacement:</strong><br>";
echo "After replacement: $replacedText<br><br>";

// 4. Additional operations (optional)
echo "<strong>Additional String Operations:</strong><br>";
echo "Uppercase: " . strtoupper($text) . "<br>";
echo "Lowercase: " . strtolower($text) . "<br>";
echo "Word count: " . str_word_count($text) . "<br>";
?>

