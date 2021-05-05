<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
<div>
    <form action="calcul.php" method="post">
        <p> Nombre 1 : <input type="number" name="Nbr1"> </p>
        <p> Nombre 2 : <input type="number" name="Nbr2"> </p>
        <p> Opération : <select name="Ope" id="Ope">
                <option value="Add">Addition</option>
                <option value="Sous">Soustraction</option>
                <option value="Multi">Multiplication</option>
                <option value="Div">Division</option>
            </select>
            <input type="submit" value="Calculer">
        </p>
    </form>
    </div>
</body>

</html>