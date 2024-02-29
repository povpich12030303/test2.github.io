<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="form.css" />

    <title>Document</title>
  </head>
  <body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
      <div class="login-box">
        <div class="user-box">
          <input type="text" name="user"  /><br>
         Username
        </div>
        <div class="user-box">
          <input type="password" name="pw"  /><br>
          Password
        </div>
      <input type="submit"> 
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      $username = $_REQUEST['user'];
      $pw = $_REQUEST['pw'];

      if (empty($username)) {
        echo "Username is empty";
        } else {
        echo $username . "<br>";
        }    
        if (empty($pw)) {
          echo "Password is empty";
          } else {
          echo $pw . "<br>";
          }
    
    
    }
    
    
    
    ?>






  </body>
</html>
