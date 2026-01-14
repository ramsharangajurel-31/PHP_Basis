<!-- 13. Write a PHP script to create, read, write, and append data to a file. -->
 <?php
$filename = "file_demo.txt";

// 1️⃣ Create a file and write data to it
$file = fopen($filename, "w"); // "w" = write mode (creates file if it doesn't exist)
if ($file) {
    fwrite($file, "Hello, this is the first line.\n");
    fwrite($file, "This is the second line.\n");
    fclose($file); // Close the file
    echo "File created and data written successfully.\n\n";
} else {
    echo "Failed to create the file.\n";
}

// 2️⃣ Read the file
echo "Reading file contents:\n";
$file = fopen($filename, "r"); // "r" = read mode
if ($file) {
    while (!feof($file)) { // Loop until end of file
        $line = fgets($file);
        echo $line;
    }
    fclose($file);
    echo "\n";
} else {
    echo "Failed to open the file for reading.\n";
}

// 3️⃣ Append data to the file
$file = fopen($filename, "a"); // "a" = append mode
if ($file) {
    fwrite($file, "This is an appended line.\n");
    fclose($file);
    echo "Data appended successfully.\n\n";
} else {
    echo "Failed to open the file for appending.\n";
}

// 4️⃣ Read again to see appended data
echo "Reading file after appending:\n";
$file = fopen($filename, "r");
if ($file) {
    while (!feof($file)) {
        $line = fgets($file);
        echo $line;
    }
    fclose($file);
} else {
    echo "Failed to read the file.\n";
}
?>
