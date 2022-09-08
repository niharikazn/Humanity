<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "humanity";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$name=$_POST['name'];
$phone=$_POST['phone'];
$city=$_POST['city'];
$state=$_POST['state'];
$pin=$_POST['pincode'];
$blood=$_POST['blood'];
$sql = "INSERT INTO `donates`( `name`, `phone`, `city`, `state`, `pincode`, `blood`)
VALUES ('$name', '$phone', '$city','$state','$pin','$blood')";

if ($conn->query($sql) === TRUE) {
     header("Location:thankyou.html");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>