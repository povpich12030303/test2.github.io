<?php
if(isset($_SESSION['username'])){
    header("location: welcome.php");
    exit;

}
if (isset($_POST['username'])&& isset($_POST['pw'])){
    if ($_POST['username']==='Pich'&& $_POST['pw']==='pich'){
        header("location: welcome.php");
        exit;

    }else{
        $error ="Invalid usrer password";
    }
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
    <form action="" method="post">
        <input type="text" name="username">
        <input type="password" name="pw">
<button type="login" name="login">login</button>
    </form>
    
</body>
</html>