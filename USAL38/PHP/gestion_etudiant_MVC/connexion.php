<?php

$servername = "localhost";
$dbname = "gestion_etudiant";
$port = 3308;

$username = "root";

$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
   // echo "Connection successful";
}

