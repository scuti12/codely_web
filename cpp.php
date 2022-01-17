<?php 
session_start();
    if($_SESSION['email']==null){
        header("location: sorry.php");
    }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>C++ | Codely</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <body>
<?php include "navbar_logged.php" ?>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
            <div class="col-3">
            <nav class ="navbar bg-dark">
            <ul class ="nav navbar-nav">
            <li class ="nav-item">
            <a class ="nav-link" href="#"> Home </a>
            </li>
            <li class ="nav-item">
            <a class ="nav-link" href="#"> Services </a>
            </li>
            <li class ="nav-item">
            <a class ="nav-link" href="#"> Contact </a>
            </li>
            <li class ="nav-item">
            <a class ="nav-link" href="#"> Blogs </a>
            </li>
            </ul>
            </nav>
            </div>
            <div class="col-9">
            <div class="container">
            The Web Content in detail.
            </div>
            <div class =”container”>
            <p> The vertical menu can place the left or right side of the web pages. <br> But the default vertical menu placed on the left side. </P>
            </div>
            </div>
            </div>
            </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
<?php include "footer.php" ?>
</body>
</head>