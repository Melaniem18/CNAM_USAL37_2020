<?php
// Création de la connexion à la base de données
require_once("connexionPDO.php");

// Récupération des paramètres de la request http
$login=$_POST['login'];
$password=$_POST['password'];

// Cryptage du mot de passe
$mdp_crypte = md5($password);

// Création de la prepared statement avec named parameters + bind
$stmt = $conn->prepare("select niveau from user where login = :login and password = :password");
$stmt->bindParam(':login', $login);
$stmt->bindParam(':password', $mdp_crypte);

// Exécution de la requête sql
$stmt->execute();

// Exécution de la requête sql sans bind préalable
//$stmt->execute([':login'=>$login, ':password'=>$mdp_crypte]);
//$stmt->execute(array(':login'=>$login, ':password'=>$mdp_crypte));

// Récupération du résultat(fetch) / mise en session de la données niveau / traitement de redirection
if($user=$stmt->fetch(PDO::FETCH_ASSOC)) {
    session_start();
    $_SESSION['NIVEAU'] = $user['niveau'];
    header("location:afficherEtudiant.php");
} else {
    header("location:index.php");
}


