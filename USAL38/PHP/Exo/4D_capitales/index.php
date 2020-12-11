<?php

$pays = [
    "France" => "Paris" ."\n",
    "Belgique" => "Bruxelles" ."\n",
    "Allemagne" => "Berlin" ."\n",
    "Italie" => "Rome" ."\n",
    "Maroc" => "Rabat" ."\n",
    "Espagne" => "Madrid" ."\n",
    "Portugal" => "Lisbonne" ."\n",
    "Angleterre" => "Londres" ."\n"
];



// array_key_exists()
// empty()



function capitalCity(string $nom_pays)
{
    global $pays;
    if (array_key_exists($nom_pays, $pays)) {
       return $pays[$nom_pays];
    }
    else {
        return "Capitale inconnue" ."\n";
    }

}

$capitale = capitalCity("France"); // affiche Paris
echo $capitale;
echo capitalCity("Belgique"); // affiche Bruxelles
echo capitalCity("Suisse"); // affiche capitale inconnue
echo capitalCity("Allemagne");
echo capitalCity("Italie");
echo capitalCity("Maroc");
echo capitalCity("Espagne");
echo capitalCity("Portugal");
echo capitalCity("Angleterre");
