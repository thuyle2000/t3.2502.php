<?php
//demo named function, return type declaration.
declare(strict_types=1); // strict mode for type checking

//ham chia 2 so nguyen duong, tra ve ket qua la so nguyen
function divide(int $a=10, int $b=3): int {
    if ($b === 0) {
        throw new InvalidArgumentException("Ko the chia cho zero !");
    }
    return intdiv($a, $b);
}

//test case
try {
    $a = 12; $b =4;
    echo " >> divide($a, $b): " . divide($a, $b) . "\n";

    $a = 12; $b =5;
    echo " >> divide($a, $b): " . divide($a, $b) . "\n";

    echo " >> divide(): " . divide() . "\n";

    echo " >> divide(b:7, a:20): " . divide(b:7, a:20) . "\n";

    $a = 10; $b = 0;
    echo " >> divide($a, $b): " . divide($a, $b) . "\n"; // will throw exception



} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}