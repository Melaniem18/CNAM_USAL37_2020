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

        <main id="legumes" class="inner">
            <h1>Liste des légumes</h1>
            <table>
                <tr>
                    <th>Nom</th>
                    <th>Variété</th>
                    <th>Couleur</th>
                    <th>Durée Conservation</th>
                    <th>Frais</th>
                    <th>Actions</th>
                </tr>
                <tr>
                    <td>Chou</td>
                    <td>Frisé</td>
                    <td>vert</td>
                    <td>30</td>
                    <td>non</td>
                    <td class="center">Editer &middot; Supprimer</td>
                </tr>
                <tr>
                    <td>Poireau</td>
                    <td>Carlton</td>
                    <td>vert clair</td>
                    <td>20</td>
                    <td>non</td>
                    <td class="center">Editer &middot; Supprimer</td>
                </tr>
                <tr>
                    <td>Carotte</td>
                    <td>Nantaise </td>
                    <td>orange</td>
                    <td>90</td>
                    <td>non</td>
                    <td class="center">Editer &middot; Supprimer</td>
                </tr>
            </table>
        </main>

    </div>
</body>

</html>