<?php
include_once("connection.php");
session_start();
if(isset($_SESSION['signed_in']))
if($_SESSION['signed_in']==true) header("Location:client.php");
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = hash('sha256',$_POST['password']);
    $sql = "SELECT * FROM account_secure WHERE username=:username AND password=:password;";
    $res=$pdo->prepare($sql);
    $res->bindValue(":username",$username);
    $res->bindValue(":password",$password);
    $res->execute();
    if($res->rowCount()==1){
        $row=$res->fetch(PDO::FETCH_ASSOC);
        $account['id']=$row['id'];
        $account['username']=$row['username'];
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

    Username: <input type="text" name="username" minlength="4" maxlength="40" required>
    <br>
    Password: <input type="password" name="password" minlength="4" maxlength="40" required>
    <br>
    <input type="submit" name="login" value="OK">


    </form>
    <br>
    <a href="createAccount.php">Create New Account</a>


    
</body>
</html>