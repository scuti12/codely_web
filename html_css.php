<?php 
session_start();
    if(!isset($_SESSION['email'])){
        header("location: sorry.php");
    }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HTML and CSS | Codely</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <body>
<?php include "navbar.php" ?>
<iframe src="https://player.vimeo.com/video/665952245?h=a862e31fae" width="640" height="564" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
<?php include "footer.php" ?>

</body>
</head>