<?php
/*
L'âge de la retraite est fixé à 55 ans

SI l'âge fourni est supérieur à l'âge de la retraite
    afficher (echo) "vous êtes à la retraite depuis X années"

SINON SI l'âge fourni ($age) est inférieur à l'âge de la retraite ($retraite)
        SI l'âge est inférieur à 0 
            afficher "un peu jeune pour penser à la retraite !"
        SINON SI l'âge est inférieur à 18
            afficher "vous pas être né"
        SINON 
            afficher (echo) "Il vous reste X années  avant la retraite"
SINON 
    alors
    afficher (echo) "La retraite c'est cette année"

*/

$retraite = 55;

$age = 17;

$difference = $age - $retraite;
$difference2 = $retraite - $age;


if($age > $retraite) {
    echo "Vous êtes à la retraite depuis $difference années"; 
}
elseif($age < $retraite) {
    if($age < 18 && $age >0){
        echo "Un peu jeune pour penser à la retraite !";
    }elseif($age < 0){
        echo "Vous n'êtes pas né";
    }else{
        echo "Il vous reste $difference2 années avant d'être à la retraite";}
}
else{
    echo "La retraite c'est  cette année";
}

