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
                <li><a href="index.php?controller=ventes">Ventes</a></li>
                <li><a href="#">Nouvelle vente</a></li>
            </ul>
            <ul>
                <li><a href="index.php?controller=legumes">Légumes</a></li>
                <li><a href="#">Nouveau légume</a></li>
            </ul>
        </nav>

        <main id="legumes" class="inner">
            <?php
                require dirname(__DIR__).'/Router.php';
                $router = new Router();
            ?>
        </main>

    </div>
</body>

</html>