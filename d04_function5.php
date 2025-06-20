<?php
//demo user-defined function, reference parameter.
declare(strict_types=1); // strict mode for type checking

//ham hoan doi gia tri cua 2 tham so.
function swap(int $a, int $b): void {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

//test case
$a = 5; $b = 26;
echo "Before swap(a,b): a = $a, b = $b\n";
swap($a, $b);
echo "After swap(a,b): a = $a, b = $b\n";

//ham hoan doi gia tri cua 2 tham so, tham so truyen tham chieu.
function swap_ref(int &$a, int &$b): void {
    $temp = $a;
    $a = $b;
    $b = $temp;
}
//test case
$a = 5; $b = 26;
echo "Before swap_ref(a,b): a = $a, b = $b\n";
swap_ref($a, $b);
echo "After swap_ref(a,b): a = $a, b = $b\n";