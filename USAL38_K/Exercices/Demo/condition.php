<?php

$nb = 10;
/*
if ($nb >= 0) {
    if ($nb == 0) {
        echo "Le nombre est nul";
    } else
        echo "Le nombre est positif";
} else {
    echo "Le nombre est négatif";
}
*/

if ($nb > 0) {
    echo "Le nombre est positif";
} elseif ($nb == 0) {
    echo "Le nombre est nul";
} else {
    echo "Le nombre est négatif";
}
