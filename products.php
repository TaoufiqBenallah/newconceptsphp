<?php 

$dsn = "mysql:host=localhost;dbname=leranconcepts";
$user = "root";
$passwd = "";

$pdo = new PDO($dsn, $user, $passwd);

// managing products 

$sth = $pdo->prepare("SELECT * FROM product");
$sth->execute();

$result = $sth->fetchAll();

header('Content-Type: application/json');
echo json_encode($result);


?>