<?php

require 'vendor/autoload.php';
// require 'models/Auditeur.php';

use Cocur\Slugify\Slugify;

$slugify = new Slugify();

echo '<h1 style="color:darkblue;">Bonjour<h1>';

echo '<p>Mon super article qui mèle tout !<p>';

echo $slugify->slugify('Mon super article qui mèle tout !');

echo '<br>';

echo $slugify->slugify('Test !§%$*~é&');

$auditeur = new Cnam\Auditeur('Mel');