<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "011011";
$dbname = "CODELY";
$email = $_POST['loginid'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `user` WHERE `email`= '$email' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      if(isset($row['password'])){
        if($row['password']==$_POST['loginpsw']){
            $_SESSION['email']=$email;
            $_SESSION['username']=$row['username'];
            header("location: logon.php");
        }
      }
  }
} else {
    header("location: sorry.php");
}
$conn->close();
?> 