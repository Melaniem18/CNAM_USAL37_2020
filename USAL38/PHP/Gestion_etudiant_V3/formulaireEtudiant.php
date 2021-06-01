<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
<table border="1">
        <tr>
            <td>Code :</td>
            <td><?php echo($nom) ?></td>
        </tr>
        <tr>
            <td>Nom :</td>
            <td><?php echo($mail) ?></td>
        </tr>
        <tr>
            <td>Email :</td>
            <td><?php echo($mail) ?></td>
        </tr>
        <tr>
            <td>Photo :</td>
            <td><img src="/images/<?php echo($photo_nom) ?>"></td>
        </tr>
    </table>

</body>
</html>

<?php
require_once("connexionPDO.php");

$sql = "SELECT Code, Nom, Email,  FROM etudiant";
$result = $conn->query($sql);

?>