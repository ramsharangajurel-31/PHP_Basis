<?php
$filename = "data.txt";

// CREATE & WRITE to file
$file = fopen($filename, "w");
fwrite($file, "Hello, this is file handling in PHP.\n");
fclose($file);

echo "File created and data written successfully.<br>";

// APPEND data to file
$file = fopen($filename, "a");
fwrite($file, "This line is appended to the file.\n");
fclose($file);

echo "Data appended successfully.<br><br>";

// READ file data
$file = fopen($filename, "r");
echo "File Contents:<br>";
while (!feof($file)) {
    echo fgets($file) . "<br>";
}
fclose($file);
?>
