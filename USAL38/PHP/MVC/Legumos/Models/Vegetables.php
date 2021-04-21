<?php 

require dirname(__DIR__).'/Db/DbContext.php';

class Vegetables 
{
    private PDO $pdo;

    public function __construct() 
    {
        $this->pdo = DbContext::getDb();
    }

    public function readAll() 
    {
        $sql = "SELECT * FROM Vegetables;";

        $stmt = $this->pdo->query($sql);

        return $stmt->fetchAll();
    }

    public function create() 
    {

    }

    
}