<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legumos</title>
    <link rel="stylesheet" href="assets/main.css">
</head>

<body>
    <div class="container">

        <header id="banner"></header>

        <nav>
            <ul>
                <li><a href="ventes.php">Ventes</a></li>
                <li><a href="#">Nouvelle vente</a></li>
            </ul>
            <ul>
                <li><a href="index.php">Légumes</a></li>
                <li><a href="#">Nouveau légume</a></li>
            </ul>
        </nav>

        <main id="ventes" class="inner">
            <h1>Liste des ventes</h1>
            <table>
            <tr>
                    <th>Date</th>
                    <th>Légume</th>
                    <th>Variété</th>
                    <th>Quantité</th>
                    <th>Prix unitaire</th>
                    <th>Prix total</th>
                </tr>
                <tr>
                    <td>02/04/2020</td>
                    <td>Carotte</td>
                    <td>de Colmar</td>
                    <td class="right">14 kgs</td>
                    <td class="right">3.50 €</td>
                    <td class="right">49.00 €</td>
                </tr>
                <tr>
                    <td>02/04/2020</td>
                    <td>Chou</td>
                    <td>Frisé</td>
                    <td class="right">7 kgs</td>
                    <td class="right">4.00 €</td>
                    <td class="right">28.00 €</td>
                </tr>
                <tr>
                    <td>01/04/2020</td>
                    <td>Carotte</td>
                    <td>de Colmar</td>
                    <td class="right">5 kgs</td>
                    <td class="right">3.50 €</td>
                    <td class="right">17.50 €</td>
                </tr>
            </table>
        </main>

    </div>
</body>

</html>