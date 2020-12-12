<?php

$a = 5;
$b = 3;

$getSum = $a + $b;
echo $getSum;

echo "\n";

$getSub = $a - $b;
echo $getSub;

echo "\n";

$getSub = $b - $a;
echo $getSub;

echo "\n";

$c = 5.6;
$d = 3;

$getMulti = $c * $d;
echo $getMulti;

echo "\n";

$e = 5.6;
$f = -3.7;

$getMulti = $e * $f;
echo $getMulti;

echo "\n";

$g = 20;
$h = 3;

$getDiv = $g / $h;
$getDiv = number_format($getDiv, 2);
echo $getDiv;

echo "\n";

$i = 20;
$k = 0;

$getDiv = $i / $k;
if ($getDiv == 0) {
    return 0;
}

echo $getDiv;
