<?php
$servername = "localhost";
$username = "root";
$password = "011011";
$dbname = "CODELY";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM user where email=$_POST['loginid']";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   if($row['password'==$_POST['loginpsw']]){
       $_SESSION['email']=$_POST['loginid'];
   }
  }
} else {
  echo "Та админд хандана уу";
}
$conn->close();
?> 