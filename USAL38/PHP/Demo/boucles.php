<?php
/**
 * TANT QUE $a est inférieur à 10
 */


while ($a <= 10){
    echo $a . "\n";
    $a++;
}

echo "FIN WHILE \n";

$a = 20;

do
{
    echo $a . "\n";
    $a++;
}
while ($a <= 10);

echo "FIN DO..WHILE \n";



$a = [
    0 => "Mike",
    1 => "Jon",
    2 => "Leo",
    3 => "Cindy",
    4 => "aaa",
    5 => "bbb",

];

$i = 0;
$nbElements = count($a);

while($i < $nbElements)
{
        echo $a[$i] . "\n";
        $i++;
}