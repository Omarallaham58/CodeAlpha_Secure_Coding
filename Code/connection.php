<?php
$host="localhost";
$username="root";
$password="root@#$2003";

try{
    $pdo = new PDO("mysql:host=".$host.";port=3306;dbname=test_schema",$username,$password);
}catch(PDOException $e){

    die("Connection Failed: ".$e->getMessage());
}



?>