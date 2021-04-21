<?php 

require dirname(__DIR__).'/Models/Vegetables.php';

/**
 * Contrôleur des légumes
 * afficher les légumes
 * afficher un légume 
 * créer un légume
 * mettre à jour un légume
 * supprimer un légume
 */
class VegetablesController 
{
    /**
     * Constructeur de VegetablesController
     */
    public function __construct() 
    {
        //echo 'Je suis dans le constructeur de LegumesController<hr>';
    }

    /**
     * Exécuter le contrôleur 
     * Vérifie que l'action existe et l'invoque si tel est le cas.
     * @param Router $router le routeur
     */
    public function run(Router $router)
    {
        $action = $router->getAction();

        if(method_exists($this, $action)) {
            $this->$action();
        }
        else {
            echo 'action invalide';
        }
    }

    /**
     * Affiche tous les légumes
     */
    public function index() // afficher toutes les données
    {
        $model = new Vegetables();

        $vegetables = $model->readAll();

        $view = dirname(__DIR__).'/Views/legumes.php';

        require $view;
    }

    /**
     * Créer un nouveau légume
     * @todo implémenter la méthode dans le modèle Vegetables
     */
    public function create() 
    {
        $view = dirname(__DIR__).'/Views/legumes-create.php';

        require $view;
    }

    /**
     * Afficher un seul légume
     * @todo implémenter la méthode dans le modèle Vegetables
     */
    public function read() 
    {
        echo 'Je suis dans update de LegumesController';
    }

    public function update() 
    {
        echo 'Je suis dans update de LegumesController';
    }

    public function delete() 
    {
        echo 'Je suis dans delete de LegumesController';
    }
}