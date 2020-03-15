<?php 

// managing panels : getList true ou false, addToPanel true or false, removeFromPanel true or false

var_dump($_GET["getList"]);

if($_GET["getList"] === "true"){
    echo "yo";
    $dsn = "mysql:host=localhost;dbname=leranconcepts";
    $user = "root";
    $passwd = "";

    $pdo = new PDO($dsn, $user, $passwd);

    // get products ids from panel

    $sth = $pdo->prepare("SELECT * FROM panel");
    $sth->execute();

    $result = $sth->fetchAll(PDO::FETCH_OBJ);

    header('Content-Type: application/json');
    echo json_encode($result);

}else if($_GET["addToPanel"] === "true"){

}
else if($_GET["removeFromPanel"] === "true"){
    
}

?>