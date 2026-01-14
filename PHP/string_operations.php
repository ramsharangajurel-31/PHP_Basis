<!-- 5. String Operations -->
<?php
$text = "Hello, PHP World!";

// Length of string
echo "Length: " . strlen($text) . "<br>";

// Substring
echo "Substring: " . substr($text, 7, 3) . "<br>";

// String replacement
$newText = str_replace("PHP", "Programming", $text);
echo "Replaced string: " . $newText . "<br>";
?>
