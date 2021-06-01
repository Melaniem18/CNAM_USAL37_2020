<?php 



class Connexion 
{

    static private PDO $pdo;

    static public function getConnexion() 
    {
        return new PDO('mysqlhost=localhost;dbname=gestion_etudiant', 'root', '');
    }
}