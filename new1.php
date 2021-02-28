<?php
session_start();
$_SESSION['name']="abc";
$_SESSION['pass']="123";
echo $_SESSION['name'];
header("location:new2.php");

?>