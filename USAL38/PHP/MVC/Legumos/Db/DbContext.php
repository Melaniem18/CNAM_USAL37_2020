<?php 

class DbContext 
{
    static private ?PDO $pdo = null;

    static public function getDb()
    {
        if(self::$pdo === null) {
            // créer la connexion PDO
            // self::$pdo = new PDO('chaine_de_connexion', 'utilisateur', 'mot_de_passe');

            $dsn = 'mysql:host=localhost;port=3306;dbname=db_legumos;charset=utf8';

            self::$pdo = new PDO($dsn, 'root', '');
            //var_export(self::$pdo);
        }

        return self::$pdo;
    }
}