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
$email=$_POST['email'];
$subject=$_POST['subject'];
$text=$_POST['text'];
$sql = "INSERT INTO `contactt`(`name`, `phone`, `email`, `subject`, `text`)
VALUES ('$name', '$phone', '$email','$subject','$text')";

if ($conn->query($sql) === TRUE) {
     header("Location:thankyou3.html");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>