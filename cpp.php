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

<div class="col-md-3 left" style="overflow-y:scroll; overflow-x:hidden; height:100%;" >
<nav class="menu">
  <ol class='menu__content'>
    <li class="menu-item"><a href="?id=1">BASIC CONCEPTS</a>
      <ol class="sub-menu">
      <li class="menu-item"><a href="?id=1">Syntax</a></li>
      <li class="menu-item"><a href="?id=4">Variable and Data type</a></li>
      <li class="menu-item"><a href="?id=3">auto keyword</a></li>
      <li class="menu-item"><a href="?id=2">Input Output</a></li>
      <li class="menu-item"><a href="?id=3">Operator and Operand</a></li>
      <li class="menu-item"><a href="?id=3">Operator Precedence</a></li>
      <li class="menu-item"><a href="?id=3">Assignment and Increment Operators</a></li>
      <li class="menu-item"><a href="?id=3">Example</a></li>
      </ol>
    </li>
    <li class="menu-item"><a href="?id=1">CONDITIONAL AND LOOPS</a>
      <ol class="sub-menu">
      <li class="menu-item"><a href="?id=1">if | else |  else if statement</a></li>
      <li class="menu-item"><a href="?id=4">While loop</a></li>
      <li class="menu-item"><a href="?id=3">For loop</a></li>
      <li class="menu-item"><a href="?id=2">Do while loop</a></li>
      <li class="menu-item"><a href="?id=3">Switch statement</a></li>
      <li class="menu-item"><a href="?id=3">Logical operators</a></li>
      <li class="menu-item"><a href="?id=3">Example</a></li>
      </ol>
    </li>
    <li class="menu-item"><a href="?id=1">ARRAYS AND POINTERS</a>
      <ol class="sub-menu">
      <li class="menu-item"><a href="?id=1">Arrays</a></li>
      <li class="menu-item"><a href="?id=4">Using arrays in loops</a></li>
      <li class="menu-item"><a href="?id=3">Pointers</a></li>
      <li class="menu-item"><a href="?id=2">Dynamic Memory</a></li>
      <li class="menu-item"><a href="?id=3">sizeof() Operaror</a></li>
      <li class="menu-item"><a href="?id=3">Example</a></li>
      </ol>
    </li>
    <li class="menu-item"><a href="?id=1">FUNCTIONS</a>
      <ol class="sub-menu">
      <li class="menu-item"><a href="?id=1">function introduction</a></li>
      <li class="menu-item"><a href="?id=4">Parameters and Arguments</a></li>
      <li class="menu-item"><a href="?id=2">lenght function</a></li>
      <li class="menu-item"><a href="?id=3">sqrt function</a></li>
      <li class="menu-item"><a href="?id=3">pow function</a></li>
      <li class="menu-item"><a href="?id=3">min and max function</a></li>
      <li class="menu-item"><a href="?id=3">Example</a></li>
      </ol>
    </li>
    <li class="menu-item"><a href="?id=1">Дасгалууд</a>
    <li class="menu-item"><a href="?id=1">Үг тоолох дасгал</a>
    <li class="menu-item"><a href="?id=1">Минутын зөрүү тооцоолох дасгал</a>
    <li class="menu-item"><a href="?id=1">Дөрвөн тооны их багыг тооцоолох дасгал</a>
    <li class="menu-item"><a href="?id=1">Анхны тоо тооцоолох дасгал</a>
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
