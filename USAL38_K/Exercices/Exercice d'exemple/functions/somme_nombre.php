<?php

function somme_nb($nb){
    $somme = 0;
    for($i=1; $i<=$nb; $i++){
        $somme = $somme + $i;
    }
    return $somme;
}

//echo somme_nb(56);


function somme_nb_pair($nb){
    $somme = 0;
    for($i=1; $i<=$nb; $i++){
        if($i%2 == 0)
        $somme = $somme + $i;
    }
    return $somme;
}

echo somme_nb_pair(56);