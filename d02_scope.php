<?php
// Variable Scope in PHP
$x = 10; // Global scope

echo " >> Outside functions : x = $x\n";

function f1() {
    global $x; // Accessing global variable
    $y = 20; // Local scope
   
    echo "Inside function f1(): x = $x, y = $y\n"; 
}
function f2() {
    global $x; // Accessing global variable
    $x += 2; // Modifying global variable
    echo "Inside function f2(): x = $x\n"; 
}

function f3() {
    $c1 = 0; // Local scope
    $c1++;

    static $c2 = 0; // Static variable
    $c2++;

    echo " * Inside function f3(): c1 = $c1, c2 = $c2\n"; 
}
f1();
f2();

foreach (range(1, 5) as $i) {
    f3();
}

echo " >> Finally, after function calls : x = $x\n";