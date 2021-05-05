<?php
require_once ("verif_authentification.php");
require_once ("connexion.php");

$code = $_POST['code'];
$nom = $_POST['nom'];
$mail = $_POST['mail'];
$photo_nom = $_FILES['photo']['name'];
$file_tmp_name = $_FILES['photo']['tmp_name'];
move_uploaded_file($file_tmp_name, "./image/$photo_nom");

$req = "update etudiant set nom = '$nom', mail = '$mail', photo = '$photo_nom' where code = $code";

$res = $conn->query($req);

header("location:afficher_etudiant.php");

?>