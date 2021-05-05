<?php
require_once ("verif_authentification.php");
require_once ("connexion.php");


$nom = $_POST['nom'];
$mail = $_POST['email'];
$photo_nom = $_FILES['photo']['name'];
$file_tmp_name = $_FILES['photo']['tmp_name'];
move_uploaded_file($file_tmp_name, "./image/$photo_nom");

$req = "insert into etudiant(nom,mail,photo) values ('$nom','$mail','$photo_nom')";

if ($conn->query($req) === TRUE) {
    //echo "New record created successfully";
} else {
    echo "Error: " . $req . "<br>" . $conn->error;
}

$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Nom :</td>
            <td><?php echo($nom) ?></td>
        </tr>
        <tr>
            <td>Mail :</td>
            <td><?php echo($mail) ?></td>
        </tr>
        <tr>
            <td>Photo :</td>
            <td><img src="image/<?php echo($photo_nom) ?>"></td>
        </tr>
    </table>
    <a href="afficher_etudiant.php">Afficher les étudiants</a>
</body>
</html>