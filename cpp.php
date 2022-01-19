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
  <meta name="description" content="Codely MN | learn easily">
  <meta name="keywords" content="Programm developer and Web developer">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/style_nav.css">
  <body>
<!-- <?php include "navbar_logged.php" ?> -->
<!-- <iframe src="https://player.vimeo.com/video/666458985?h=3b6a6dc5da" width="640" height="564" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
<iframe src="https://player.vimeo.com/video/666458822?h=3af095bd2e" width="640" height="564" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
<iframe src="https://player.vimeo.com/video/666458868?h=e2d094859e" width="640" height="564" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
<iframe src="https://player.vimeo.com/video/666458920?h=833f10826e" width="640" height="564" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe> -->
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <div class="row">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"><span>CodeLy</span></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href=""></a></li>
          <li><a href="index.php">КУРСУУД</a></li>
          <li><a href="#" data-target="" ><?php session_start(); echo(strtoupper($_SESSION['username'])) ?></a></li>
          <li><a href="logout.php">ГАРАХ</a></li>
        </ul>
      </div>
      </div>
    </div>
  </nav>
  <div class="col-4">
   <nav class="menu">
  <ol class='menu__content'>
    <li class="menu-item"><a href="#0">Home</a></li>
    <li class="menu-item"><a href="#0">About</a></li>
    <li class="menu-item">
      <a href="#0">Widgets</a>
      <ol class="sub-menu">
        <li class="menu-item"><a href="#0">Big Widgets</a></li>
        <li class="menu-item"><a href="#0">Bigger Widgets</a></li>
        <li class="menu-item"><a href="#0">Huge Widgets</a></li>
      </ol>
    </li>
    <li class="menu-item">
      <a href="#0">Kabobs</a>
      <ol class="sub-menu">
        <li class="menu-item"><a href="#0">Shishkabobs</a></li>
        <li class="menu-item"><a href="#0">BBQ kabobs</a></li>
        <li class="menu-item"><a href="#0">Summer kabobs</a></li>
      </ol>
    </li>
    <li class="menu-item"><a href="#0">Contact</a></li>
  </ol>
</nav>
</div>
<div class="col-8">
<iframe src="https://player.vimeo.com/video/666458985?h=3b6a6dc5da" width="640" height="564" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
</div> <div class="col-4">
   <nav class="menu">
  <ol class='menu__content'>
    <li class="menu-item"><a href="#0">Home</a></li>
    <li class="menu-item"><a href="#0">About</a></li>
    <li class="menu-item">
      <a href="#0">Widgets</a>
      <ol class="sub-menu">
        <li class="menu-item"><a href="#0">Big Widgets</a></li>
        <li class="menu-item"><a href="#0">Bigger Widgets</a></li>
        <li class="menu-item"><a href="#0">Huge Widgets</a></li>
      </ol>
    </li>
    <li class="menu-item">
      <a href="#0">Kabobs</a>
      <ol class="sub-menu">
        <li class="menu-item"><a href="#0">Shishkabobs</a></li>
        <li class="menu-item"><a href="#0">BBQ kabobs</a></li>
        <li class="menu-item"><a href="#0">Summer kabobs</a></li>
      </ol>
    </li>
    <li class="menu-item"><a href="#0">Contact</a></li>
  </ol>
</nav>
</div>
<div class="col-8">
<iframe src="https://player.vimeo.com/video/666458985?h=3b6a6dc5da" width="640" height="564" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
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
<?php include "footer.php" ?>
</body>
</head>