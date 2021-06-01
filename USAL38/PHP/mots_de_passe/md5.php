<?php 
function encrypterMD5($pass)
{
    echo md5($pass);
    echo "\n";
}

function encrypterSHA1($pass)
{
    echo sha1($pass);
    echo "\n";
}


$pass = "Tatayoyo";

encrypterMD5($pass);
encrypterMD5($pass);
encrypterSHA1($pass);
encrypterSHA1($pass);


$mdp1 = md5("azerty"); // provient du formulaire d'authentification

$mdp2 = md5("azerty");

