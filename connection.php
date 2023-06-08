<?php
$servername = "localhost";
$username = "root";
$password = "";
$db  = "HMS";
//Create connection
$conn = new mysqli($servername, $username, $password,$db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
// echo "<br>";
// //Create database
// $sql = "CREATE DATABASE HMS";
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } 
// else {
//   echo "Error creating database: " . $conn->error;
// }
// $conn->close();
?>