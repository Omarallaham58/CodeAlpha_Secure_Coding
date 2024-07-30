<?php
include_once("connection.php");

if(isset($_POST['createAccount'])){

    if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])){

        // $sql= "INSERT INTO account(username,password) VALUES(".$_POST['username'].",".$_POST['password'].");";
        $sql = "INSERT INTO account(username,password) VALUES(:username,:password);";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":username",$_POST['username']);
        $stmt->bindValue(":password",$_POST['password']);
       if($stmt->execute())
        // if($pdo->exec($sql))
        echo "<br><p style='color:green;'>Account added successfully!!!</p><br>";
    else echo "<br><p style='color:red;'>Account could not be added !! </p><br>";
    }
}



?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
</head>

    <h1>Create Account</h1>
    <form action="createAccount.php" method="post">

    Username: <input type="text" name="username">
    <br>
    Password: <input type="password" name="password">
    <br>
    <input type="submit" name="createAccount" value="OK">


    </form>
    <br>
    <a href="login.php">Back</a>
</body>
</html>