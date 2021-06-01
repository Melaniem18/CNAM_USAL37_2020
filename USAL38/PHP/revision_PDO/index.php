<?php 

/*
$dsn = 'mssql';
$dsn = 'pgsql';
$dsn = 'sqlite';*/

//$mysqli = new mysqli('', '', '', '');

$dsn = 'mysql:dbname=tata;charset=utf8;host=localhost;port=3306';
$pdo = new PDO($dsn, 'root', '', []);





$search = ' \' or 1=1; DELETE FROM people;'; // provient d'un formulaire


echo "SELECT * FROM people WHERE name='$search'";

$search = $pdo->quote($search);

$stmt = $pdo->query("SELECT * FROM people WHERE name='$search'");



while($result = $stmt->fetch()) { // toutes les lignes mais 1 par 1
    var_export($result);
}

//$result = $stmt->fetchAll(); // toutes les lignes d'un coup

var_export($result);




echo 'ok';
