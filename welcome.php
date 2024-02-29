<?php
session_start();
if (!isset($_SESSION['username'])){
    header("location : login.php");
    exit;

}
echo "welcomet to :" . $_SESSION['username'] . "!";

?>
<a href="logout.php">logout</a>