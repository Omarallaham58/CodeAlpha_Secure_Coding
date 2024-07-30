<?php
$host="YOUR_HOST_ADDRESS";
$username="YOUR_DB_USER_NAME";
$password="YOUR_DB_PASSWORD";

try{
    $pdo = new PDO("mysql:host=".$host.";port=3306;dbname=test_schema",$username,$password);
}catch(PDOException $e){

    die("Connection Failed: ".$e->getMessage());
}



?>
