<?php
// 1. Create two arrays
$fruits = array("Apple", "Banana", "Orange", "Mango");
$vegetables = array("Carrot", "Broccoli", "Spinach");

// 2. Using foreach loop to display fruits
echo "List of Fruits:\n";
foreach ($fruits as $fruit) {
    echo "- $fruit\n";
}

echo "\n";

// 3. Count the number of elements in fruits array
$fruitCount = count($fruits);
echo "Total number of fruits: $fruitCount\n\n";

// 4. Sort the fruits array alphabetically
sort($fruits);
echo "Fruits after sorting:\n";
foreach ($fruits as $fruit) {
    echo "- $fruit\n";
}

echo "\n";

// 5. Merge fruits and vegetables arrays
$allItems = array_merge($fruits, $vegetables);
echo "All items (fruits + vegetables):\n";
foreach ($allItems as $item) {
    echo "- $item\n";
}
?>
