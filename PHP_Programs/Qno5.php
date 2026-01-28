<?php
$str = "PHP Web Programming";

echo "Original String: $str<br>";
echo "Length: " . strlen($str) . "<br>";
echo "Substring: " . substr($str, 0, 3) . "<br>";
echo "Replaced String: " . str_replace("PHP", "Advanced PHP", $str);
?>
