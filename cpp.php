<?php 
session_start();
    if($_SESSION['email']==null){
        header("location: sorry.php");
    }
    $servername = "localhost";
    $username = "root";
    $password = "011011";
    $dbname = "CODELY";
    if(isset($_GET['id'])){
        $id=$_GET['id'];
    }
     $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
      $sql = "SELECT * FROM `video` WHERE `id`='$id' ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $link = $row['link'];
            $title = $row['title'];
        }
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
<?php include "navbar_logged.php" ?>

<div class="col-md-3"style="overflow-y:scroll; overflow-x:hidden; height:400px;" >
<nav class="menu">
  <ol class='menu__content'>
    <li class="menu-item"><a href="?id=1">Синтакс</a></li>
    <li class="menu-item"><a href="?id=2">Тэмдэгт мөр</a></li>
    <li class="menu-item"><a href="?id=4">Өгөгдлийн төрөл</a></li>
    <li class="menu-item"><a href="?id=3">Оператор болон операнд</a></li>
    <li class="menu-item">
      <a href="#0">Математик үйлдэл болон функц</a>
      <ol class="sub-menu">
        <li class="menu-item"><a href="#0">sqrt функц</a></li>
        <li class="menu-item"><a href="#0">round функц</a></li>
        <li class="menu-item"><a href="#0">log функц</a></li>
        <li class="menu-item"><a href="#0">pow функц</a></li>
      </ol>
    </li>
    <li class="menu-item"><a href="#0">Booleans</a></li>
    <li class="menu-item"><a href="#0">Нөхцөл шалгалт</a>
      <ol class="sub-menu">
        <li class="menu-item"><a href="#0">if нөхцөл шалгах</a></li>
        <li class="menu-item"><a href="#0">else if нөхцөл шалгах</a></li>
        <li class="menu-item"><a href="#0">Гурвалсан оператор</a></li>
      </ol>
    </li>
    <li class="menu-item"><a href="#0">Switch statement</a>
       <ol class="sub-menu">
        <li class="menu-item"><a href="#0">Break болон Continue</a></li>
      </ol>      
      </li>
  </ol>
</nav>
</div>
<div class="col-md-9">
    <h3 style="color:orange; text-align:center" ><?php echo($title);?></h3>
<div style="padding:56.16% 0 0 0;position:relative;"><iframe src="<?php echo($link); ?>" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="syntax"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
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
    <br>
    <br>
    <br>
  
<?php include "footer.php" ?>
</body>
</head>
