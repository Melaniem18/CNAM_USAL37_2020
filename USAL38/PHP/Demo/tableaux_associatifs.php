<?php

$pays = [
    "France" => "Paris" ."\n",
    "Belgique" => "Bruxelles" ."\n"
];

var_export($pays);
echo "\n";

$pays_inverse = array_flip($pays);

var_export($pays_inverse);


$nom_pays = "France";


$capitale = $pays[$nom_pays];


echo $capitale;

echo $pays_inverse[$capitale];