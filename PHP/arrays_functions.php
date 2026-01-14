<!-- 7. Foreach Loop and Array Functions
  -->
<?php
$numbers = [5, 2, 8, 1];

// Using foreach loop to display elements
foreach ($numbers as $num) {
    echo $num . " ";
}
echo "<br>";

// Sorting array
sort($numbers);
echo "Sorted: " . implode(", ", $numbers) . "<br>";

// Counting elements
echo "Count: " . count($numbers) . "<br>";

// Merging arrays
$moreNumbers = [10, 20];
$merged = array_merge($numbers, $moreNumbers);
echo "Merged: " . implode(", ", $merged) . "<br>";
?>
