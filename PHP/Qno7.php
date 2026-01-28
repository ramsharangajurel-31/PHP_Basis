<?php
// Define two arrays
$fruits1 = ["Apple", "Banana", "Mango"];
$fruits2 = ["Orange", "Pineapple"];

// Using foreach to display elements of the first array
echo "Fruits in first array:\n";
foreach ($fruits1 as $fruit) {
    echo "- $fruit\n";
}

// Sort the first array alphabetically
sort($fruits1);
echo "\nFruits after sorting:\n";
foreach ($fruits1 as $fruit) {
    echo "- $fruit\n";
}

// Count elements in the array
$fruitCount = count($fruits1);
echo "\nNumber of fruits in first array: $fruitCount\n";

// Merge two arrays
$allFruits = array_merge($fruits1, $fruits2);
echo "\nAll fruits after merging arrays:\n";
foreach ($allFruits as $fruit) {
    echo "- $fruit\n";
}
?>
