<?php 


$pass1 = password_hash('azerty', PASSWORD_BCRYPT);
$pass2 = password_hash('azerty', PASSWORD_BCRYPT);
$pass3 = password_hash('azerty', PASSWORD_BCRYPT);


echo $pass1 . "\n";
echo $pass2 . "\n";
echo $pass3 . "\n";

if(password_verify('azerty', $pass1)) {
    echo 'valide';
}
else {
    echo 'invalide';
}