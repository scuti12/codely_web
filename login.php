<?php
$servername = "localhost";
$username = "root";
$password = "011011";
$dbname = "CODELY";
print_r($_POST['loginid']);
$email = $_POST['loginid'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `password` FROM `user` WHERE `email`= '$email' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      print_r($row);
      if(isset($row['password'])){
          $_SESSION['email'] = $email;
          header("location: index.php");
      }
  }
} else {
  echo "Та админд хандана уу";
}
$conn->close();
?> 