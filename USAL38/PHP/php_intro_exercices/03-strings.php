<?php

function getMC2()
{
    return "Albert Einstein";
}

echo getMC2();

echo "\n";


$nom = "devoldère";
$prenom = "mickaël";

$getUsername = $prenom . $nom;

echo $getUsername;

echo "\n";

$nom = strtoupper($nom);

$getFullName = $prenom. " " .$nom; 

echo $getFullName;

echo "\n";

$askUser = "Bonjour " .$getFullName. ",". ' connaissez-vous ' .getMC2(). " ?";

echo $askUser;