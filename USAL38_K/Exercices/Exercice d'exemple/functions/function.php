<?php

declare(strict_types=1);

function afficherMsg() {
    echo 'Bonjour <br>';
}

afficherMsg();
afficherMsg();

function afficherMsg2($nom){
    echo 'Bonjour' .$nom  . '<br>';
}

afficherMsg2(' Mélanie');

/*function addition($nb1, $nb2){
    return $nb1 + $nb2;
}

echo addition(2,3);*/

function addition(int $nb1, int $nb2){
    return $nb1 + $nb2;
}

echo addition(2,3);


