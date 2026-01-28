<?php
$array1 = [5, 2, 8, 1];
$array2 = [10, 12];

// foreach loop
echo "Original Array:<br>";
foreach ($array1 as $value) {
    echo $value . " ";
}

// sort()
sort($array1);
echo "<br><br>Sorted Array:<br>";
print_r($array1);

// count()
echo "<br><br>Total Elements: " . count($array1);

// merge()
$mergedArray = array_merge($array1, $array2);
echo "<br><br>Merged Array:<br>";
print_r($mergedArray);
?>
