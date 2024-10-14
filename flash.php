<?php

session_start();

if($_SERVER["REQUEST_METHOD"] === "POST"){
    if($_POST["username"] === "omar"){
        if($_POST["pass"] === "1234"){
          $_SESSION['username']=$_POST['username'];
          $_SESSION['pass']=$_POST['pass'];
          $_SESSION['message']="welcome ".$_SESSION['username'];
}
    }
}

if(isset($_SESSION['username'])){
print_r($_SESSION['message']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <form action="" method="POST">
    <input type="text" name="username">
    <input type="password" name="pass">
    <input type="submit" value="login">
   </form>

    
</body>
</html>