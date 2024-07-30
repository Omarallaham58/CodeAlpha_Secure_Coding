<?php
include_once("connection.php");
session_start();
if(isset($_SESSION['signed_in']))
if($_SESSION['signed_in']==true) header("Location:client.php");
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($pdo->query("SELECT * FROM account WHERE username='$username' AND password='$password'")->rowCount()==1){

        $_SESSION['signed_in']=true;
        header("Location:client.php");

    }

    else{
        echo "<br><p style='color:red;'>Wrong Credentials</p><br>";
    }
    

}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="login.php" method="post">

    Username: <input type="text" name="username">
    <br>
    Password: <input type="password" name="password">
    <br>
    <input type="submit" name="login" value="OK">



    </form>
    <br>
    <a href="createAccount.php">Create New Account</a>



    </form>
</body>
</html>