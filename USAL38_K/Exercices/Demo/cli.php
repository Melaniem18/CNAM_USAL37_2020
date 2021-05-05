<?php
    // Création d'une constante
    define("SPACE", " ");

    // Caractère d'echappement
    echo "Vous êtes connecté au \"CNAM\" \n"; 

    // Demande d'informations à l'utilisateur et affichage du résultat
    $nom = readline("Quel est votre nom ?");
    echo "Bienvenue" . SPACE . $nom . "\n";

    $age = readline("Quel est votre age ?");
    echo "Votre age :" . SPACE . $age;
?>