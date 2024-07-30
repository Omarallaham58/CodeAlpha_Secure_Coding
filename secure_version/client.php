<?php
session_start();
//print_r($_SESSION);
if($_SESSION['signed_in']==false) header("Location:login.php");

if(isset($_GET['logout'])){
    $_SESSION['signed_in'] = false;
    header("Location:login.php");
}

echo "CLIENT PAGE";


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <a href="client.php?logout=1">Log out</a>
</body>
</html>