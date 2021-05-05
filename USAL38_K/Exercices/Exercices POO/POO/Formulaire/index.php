<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Bienvenue</title>
</head>

<body>
<p>
    <form action="hello.php" method="post">
        Nom : <input type="text" name="nom">
        Email : <input type="text" name="email">
        Photo : <input type="file" name="photo" id="photo" accept="image/png, image/jpeg">
        <input type="submit" value="Enregistrer">
    </form>
</p>
</body>

</html>