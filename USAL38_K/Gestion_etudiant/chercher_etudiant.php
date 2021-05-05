<?php
require_once ("verif_authentification.php");
require_once ("connexion.php");

$motCle = "";
if (isset($_POST['motCle'])) {
  $motCle = $_POST['motCle'];
}

$sql = "SELECT code, nom, photo, mail FROM etudiant where nom like '%$motCle%'";
$result = $conn->query($sql);

$conn->close();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chercher étudiant</title>
</head>

<body>

    <form action="chercher_etudiant.php" method="post">
        <label for="search">Mots-clés :</label>
        <input type="search" id="search" name="motCle" aria-label="Search">
        <button>Rechercher</button>
    </form>

    <table border="1" width="80%">
        <tr>
            <th>CODE</th>
            <th>NOM</th>
            <th>PHOTO</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo ($row['code']) ?></td>
                <td><?php echo ($row['nom']) ?></td>
                <td><img src="image/<?php echo ($row['photo']) ?>"></td>
                <td><a href="supprimer_etudiant.php?code=<?php echo ($row['code']) ?>">Supprimer</a></td>
                <td><a href="editer_etudiant.php?code=<?php echo ($row['code']) ?>">Modifier</a></td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>