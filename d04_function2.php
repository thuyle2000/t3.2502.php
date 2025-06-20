<?php   
// demo user-defined function

// ham tinh va tra ve giai thua cua mot so nguyen duong ,
// tham so mac dinh la 5
function factorial($n=5) {
    if ($n < 0) {
        return "Undefined for negative numbers";
    } elseif ($n == 0 || $n == 1) {
        return 1;
    } else {
        $result = 1;
        for ($i = 2; $i <= $n; $i++) {
            $result *= $i;
        }
        return $result;
    }
}

//test case
$n = 6;
echo " >> factorial($n): " . factorial($n) . "\n";

$n = -2;
echo " >> factorial($n): " . factorial($n) . "\n";

echo " >> factorial(): " . factorial() . "\n";

$n = 5.3456;
echo " >> factorial($n): " . factorial($n) . "\n";

$n = "abc";
echo " >> factorial($n): " . factorial($n) . "\n";  