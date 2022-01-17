<?php
session_start();
$_SESSION['username']="";
$_SESSION['email']="";
header("location: ./index.php");
?>
