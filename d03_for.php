<?php

//demo for loop
for ($i = 1; $i <= 5; $i++) {
    echo "No. $i \n";
}

//demo for loop with array
echo "\n For Loop - Array Example:\n";
$fruits = ["Apple", "Banana", "Cherry", "Date", "Elderberry"];
for ($i = 0; $i < count($fruits); $i++) {
    echo "Fruit #$i: " . $fruits[$i] . "\n";
}

//demo for loop with associative array
echo "\n Foreach - Associative Array Example:\n";
$colors = ["a" => "Red", "b" => "Green", "c" => "Blue"];
foreach ($colors as $key => $value) {
    echo "Color $key is $value.\n";
}