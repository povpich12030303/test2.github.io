<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request</title>
    <style>
      
        form{
            width:350px;
            border:2px solid blue;
            border-radius: 8px;
            padding: 10px 20px;
        }
        .mybtn{
            background-color: red;
            color:#fff;
            padding: 8px 15px;
            border:none;
            cursor: pointer;
            border-radius: 8px;
        }
    </style>
</head>
<body>
  

    <center>
        <form method="post" 
    action="<?php echo $_SERVER['PHP_SELF'];?>">
    
    Name: <input type="text" name="fname"><br><br>
    Email: <input type="text" name="email"><br><br>
    Password: <input type="password" name="password"><br><br>
    age: <input type="number" name="age"><br>
    addred: <input type="text" name="addred"><br>
    hello: <input type="text" name="hello"><br>




    <input class="mybtn"type="submit">
    </form>
    </center>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_REQUEST['fname'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $age = $_REQUEST['age'];
    $addred = $_REQUEST['addred'];
    $hello = $_REQUEST['hello'];
    if (empty($name)) {
    echo "Name is empty";
    } else {
    echo $name . "<br>";
    }
    if (empty($email)) {
    echo "Email is empty";
    } else {
    echo $email . "<br>";
    }
    if (empty($password)) {
    echo "Password is empty";
    } else {
    echo $password . "<br>";
    }
    if (empty($age)){
        echo "age is empty";
      } else {
        echo $age . "<br>";
      }
      if (empty($addred)){
        echo "addred id empty";
      }else {
            echo $addred . "<br>";
          }
          if (empty($hello)){
            echo $hello;
          }else{
            echo $hello . "<br>";
          }

        
      
  }
    ?>
</body>
</html>