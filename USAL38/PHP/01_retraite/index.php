<?php
/*
L'âge de la retraite est fixé à 55 ans

SI l'âge fourni ($age) est supérieur à l'âge de la retraite ($retraite)
    alors
    afficher (echo) "vous êtes à la retraite depuis X années"

SINON SI l'âge fourni ($age) est inférieur à l'âge de la retraite ($retraite)
    alors   
    afficher (echo) "Il vous reste X années  avant la retraite"

SINON 
    alors
    afficher (echo) "La retraite c'est cette année"


*/

$retraite = 55;

$age = 53;


if ($age > $retraite) {
    $difference = $age - $retraite;
    echo "vous êtes à la retraite depuis $difference années";
} else if ($age < $retraite) {
    if ($age < 0) {
        echo "Vous pas être né";
    } else if ($age < 18) {
        echo "Un peu jeune pour penser à la retraite !";
    } else {
        $difference2 = $retraite - $age;
        echo  "Il vous reste $difference2 années avant la retraite";
    }
} else {
    echo "La retraite c'est cette année";
}
