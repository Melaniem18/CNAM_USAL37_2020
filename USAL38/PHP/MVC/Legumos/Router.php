<?php

class Router
{
    private $controller;

    public function __construct()
    {
        $controller = $this->secure($_GET['controller']);
        $action = $this->secure($_GET['action']);
        $id = $this->secure($_GET['id']);

        $controller = mb_convert_case($controller, MB_CASE_TITLE) . 'Controller'; // LegumesController

        $path = __DIR__ . '/Controllers/' . $controller . '.php';

        // echo $path;

        if (is_file($path)) {
            require $path;
            $this->$controller = new $controller;
        } else {
            echo 'Erreur 404';
        }
    }

    public function secure(string $data){
        $data = strip_tags($data); // supprimer les balises HTML
        $data = basename($data, '.php'); // supprime toute notion de chemin
        return $data;
    }
}
