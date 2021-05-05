<?php

$Nombre1 = $_POST["Nbr1"];
$Nombre2 = $_POST["Nbr2"];
$Operation = $_POST["Ope"];
$result = 0;
$erreur = false;



switch ($Operation) {
    case 'Add':
        $result = $Nombre1 + $Nombre2;
        break;
    case 'Sous':
        $result = $Nombre1 - $Nombre2;
        break;
    case 'Multi':
        $result = $Nombre1 * $Nombre2;
        break;
    case 'Div':
        if ($Nombre2 != 0) {
            $result = $Nombre1 / $Nombre2;
        } else {
            echo "La divsion par 0 n'est pas autorisé <br>";
            $erreur = true;
        }
        break;
    default:
        echo 'Entrer des nombres';
}

if ($erreur == false) {
    echo "Le résultat est $result";
}
