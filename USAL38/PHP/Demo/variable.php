<?php
// déclaration et affectation de variables
$texte_bienvenue = "Bienvenue<br>";
$monentier = 5;
$decimal = 9.6;
$bool = false;

// affichage de mes variables
echo $texte_bienvenue;
echo $monentier;
echo "<br>";
echo $decimal;
echo "<br>";
echo $bool;

echo gettype($decimal);

// opérations
echo "<br>";
$x = 8;
$y = 7;
$z = $x + $y;
echo $z;
echo "<br>";

// constante
define("BLEU", "bleue");
echo BLEU;

?>