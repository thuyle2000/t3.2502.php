<?php

//demo sort array
$numbers = [5, 2, 9, 1, 5, 6];
echo "\n Original numbers: ";  
foreach ($numbers as $num) {
    echo "$num ";
}

sort($numbers);
echo "\n Sorted numbers: ";
foreach ($numbers as $num) {
    echo "$num ";
}
echo "\n";


//demo sort array with string values
$names = ["John", "Alice", "Bob", "Charlie"];
echo "\n Original names: ";
foreach ($names as $name) {
    echo "$name ";
}
sort($names);
echo "\n Sorted names: ";
foreach ($names as $name) {
    echo "$name ";
}


