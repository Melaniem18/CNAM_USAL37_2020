<?php

require_once ("connexionPDO.php");

$motCle = "";
if (isset($_POST['motCle'])) {
  $motCle = $_POST['motCle'];
}

$sql = "SELECT code, nom, photo, mail FROM etudiant where nom like '%$motCle%'";
$result = $conn->query($sql);

/* if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
} */

$conn->null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="chercherEtudiant.php" method="post">
        Mot clé : <input type="text" name = "motCle" value = "<?php echo($motCle) ?>">
        <input type="submit" value="chercher">
    </form>
    <table border="1" width="80%">
        <tr>
            <th>CODE</th><th>NOM</th><th>PHOTO</th>
        </tr>
        <?php while($row = $result->fetch( PDO::FETCH_ASSOC )) { ?>
            <tr>
                <td><?php echo($row['code']) ?></td>
                <td><?php echo($row['nom']) ?></td>
                <td><img src="images/<?php echo($row['photo']) ?>"></td>
                <td><a href="supprimerEtudiant.php?code=<?php echo($row['code']) ?>">Supprimer</a></td>
                <td><a href="editerEtudiant.php?code=<?php echo($row['code']) ?>">Modifier</a></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>