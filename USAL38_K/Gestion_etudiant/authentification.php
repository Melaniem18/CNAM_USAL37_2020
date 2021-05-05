<?php
require_once ("connexion.php");

$login = $_POST['login'];
$password = $_POST['password'];

$mdpCrypte = md5($password);

$sql = "SELECT niveau FROM user WHERE login ='$login' AND password='$mdpCrypte'";
$result = $conn->query($sql);
if ($user = $result->fetch_assoc()) {
    header("location:afficher_etudiant.php");
    session_start();
    $_SESSION['NIVEAU'] = $user['niveau'];
} else {
    header("location:index.php");
}


$conn->close();
