<?php

require_once ("verif_authentification.php");
require_once ("connexion.php");


$code = $_GET['code'];
$sql = "delete from etudiant where code = $code";

if ($conn->query($sql) !== TRUE) {
    echo "Error deleting record: " . $conn->error;
  }

  $conn->close();

  // Redirect
  header("location:afficher_etudiant.php");

  // Forward
  //require_once ("afficher_etudiant.php");