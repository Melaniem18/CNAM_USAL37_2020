<?php 


$dsn = 'mysql:dbname=tata;charset=utf8;host=localhost;port=3306';
$pdo = new PDO($dsn, 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$start = microtime();

$sql = "INSERT INTO people VALUES (:id, 'aaa', '')";
$stmt = $pdo->prepare($sql);

for($i = 5; $i < 100000; $i++) 
{
    $stmt->execute([':id' => $i]);
}


$end = microtime();

echo ($end - $start);