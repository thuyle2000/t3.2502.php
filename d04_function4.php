<?php   
declare(strict_types=1); // strict mode for type checking

// demo user-defined function

// ham tinh va tra ve giai thua cua mot so nguyen duong ,
// tham so mac dinh la 5 - version 2, co kha bao kieu du lieu tham so va gia tri tra ve
function factorial3(int $n=5): int|null {
    if ($n < 0) {
        return null;
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

$n = -2;
echo " >> factorial3($n): " . factorial3($n) . "\n";
$n = 6;

echo " >> factorial3($n): " . factorial3($n) . "\n";

echo " >> factorial3(): " . factorial3() . "\n";

echo " >> factorial3() + factorial3($n) = " . (factorial3()+factorial3($n)) . "\n";

// $n = 5.3456;
// echo " >> factorial2($n): " . factorial2($n) . "\n";

// $n = "6";
// echo " >> factorial2($n): " . factorial2($n) . "\n";  