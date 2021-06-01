<?php
require_once ("connexionPDO.php");

$code = $_GET['code'];
$sql = "delete from etudiant where code = $code";

if ($conn->query($sql) !== TRUE) {
    echo "Error deleting record: " . $conn->error;
  }

  $conn->null;

  // Redirect
  header("location:afficherEtudiant.php");

  // Forward
  //require_once ("afficherEtudiant.php");