<?php

define("VILLE", "ville");
define("AUTOROUTE", "autoroute");

class Voiture
{

    public static $nb_voiture_crees = 0;
    private $marque;
    private $modele;
    private $vitesse_courante;


    public function __construct($marque, $modele)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->vitesse_courante = 0;
        self::$nb_voiture_crees++;
    }

    public function get_marque()
    {
        return $this->marque;
    }
    public function set_marque($marque)
    {
        $this->marque = $marque;
    }

    public function get_modele()
    {
        return $this->modele;
    }

    public function set_modele($modele)
    {
        $this->modele = $modele;
    }

    public function get_vitesse_courante()
    {
        return $this->vitesse_courante;
    }

    public function set_vitesse_courante($vitesse_courante)
    {
        $this->vitesse_courante = $vitesse_courante;
    }

    public function afficherVoiture()
    {
        echo 'Je suis une voiture de marque ' . $this->marque . ' et de modèle ' . $this->modele . '<br>';
        echo 'Je roule actuellement à ' . $this->vitesse_courante . ' km/h' . '<br>';
    }

    public function accelerer($acceleration, $type_route)
    {
        $nouvelle_vitesse = $this->vitesse_courante + $acceleration;

        if ($type_route == VILLE) {
            if ($nouvelle_vitesse <= 50) {
                $this->vitesse_courante = $nouvelle_vitesse;
            } else {
                // Excès de vitesse
                echo 'Attention la vitesse est limitée à 50 km/h <br>';
                $this->vitesse_courante = 50;
            }
        } elseif ($type_route == AUTOROUTE) {
            if ($nouvelle_vitesse <= 130) {
                $this->vitesse_courante = $nouvelle_vitesse;
            } else {
                // Excès de vitesse
                echo 'Attention la vitesse est limitée à 130 km/h <br>';
                $this->vitesse_courante = 130;
            }
        } else {
            echo 'Type de route inconnue !!! <br>';
        }
    }

    public function freiner()
    {
        echo "Je m'arrête <br>";
        $this->vitesse_courante = 0;
    }

    public function ralentir($vitesse)
    {
        $vitesse -= 2;
    }

    public function depasser($autre_voiture)
    {
        echo 'Je dépasse la voiture ' . $autre_voiture->get_modele() . '<br>';
        $autre_voiture->set_vitesse_courante($autre_voiture->get_vitesse_courante() - 10);
    }
}
