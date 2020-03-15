<?php 

$dsn = "mysql:host=localhost;dbname=leranconcepts";
$user = "root";
$passwd = "";

$pdo = new PDO($dsn, $user, $passwd);

// managing products 

$sth = $dbh->prepare("SELECT * product");
$sth->execute();

/* Fetch all of the remaining rows in the result set */
$result = $sth->fetchAll();
print_r($result);


?>