<?php

session_start();
if($_SERVER["REQUEST_METHOD"] === "POST"){
  if($_POST['username'] ==='omar'){
    if($_POST['pass'] === '1234'){
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['pass'] = $_POST['pass'];
        $_SESSION['id']=1005;
     
      }

  }
  
}
  echo '<pre>';
  print_r($_SESSION);   
  echo '</pre>';


  if(isset($_SESSION['username'])){
    echo "welcome".$_SESSION['username'];
    ?>
     <a href="logout.php">logout</a>
    <?php
  }
  else{



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
        <input type="text" name="username" id="username">
         <input type="password" name="pass" id="">
        <input type="submit" value="Login">
    </form>

    
<?php }?>
   
</body>
</html>