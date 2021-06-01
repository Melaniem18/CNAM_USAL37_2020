<?php

function encrypterPassword($pass)
{
    return password_hash($pass, PASSWORD_BCRYPT);
}
$mdpBdd = encrypterPassword($pass);


$pass = "azerty";

encrypterPassword($pass);
encrypterPassword($pass);
encrypterPassword($pass);


// if(password_verify($pass, ))