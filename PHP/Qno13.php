<?php
$filename = "example.txt";

// 1. Create and write data to the file (overwrite if exists)
file_put_contents($filename, "Hello, this is the first line.\n");
echo "File created and data written successfully.\n";

// 2. Append data to the file
file_put_contents($filename, "This line is appended.\n", FILE_APPEND);
echo "Data appended successfully.\n";

// 3. Read and display file content
$content = file_get_contents($filename);
echo "\nFile content:\n";
echo $content;

// 4. Alternative: Using fopen, fwrite, fclose
$file = fopen("example2.txt", "w"); // w = write mode, overwrites file
fwrite($file, "Using fopen to write this line.\n");
fclose($file);
echo "\nCreated another file using fopen.\n";

// 5. Append using fopen
$file = fopen("example2.txt", "a"); // a = append mode
fwrite($file, "Appending this line using fopen.\n");
fclose($file);
echo "Data appended successfully using fopen.\n";

// 6. Read using fopen
$file = fopen("example2.txt", "r");
echo "\nContent of example2.txt:\n";
while (!feof($file)) {
    echo fgets($file);
}
fclose($file);
?>
