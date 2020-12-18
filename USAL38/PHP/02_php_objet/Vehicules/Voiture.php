<?php 

namespace Vehicules;


class Voiture 
{
    private string $marque = "Peugeot";

    private string $modele = "207";

    public function getMarque()
    {
        return $this->marque;
    }

    public function setMarque(string $nouvelleMarque)
    {
        $longueur = strlen($nouvelleMarque);

        if($longueur >= 2) {
            $this->marque = $nouvelleMarque;
        }
        else {
            throw new \Exception("Nom trop court !");
        }
    }
    public function setModele(string $nouveauModele)
    {
            $longueur = strlen($nouveauModele);
            if($longueur >= 2) {
                $this->modele = $nouveauModele;
            }
            else {
                throw new \Exception("");
            }
    }
    }

 // fin de la classe Voiture  
