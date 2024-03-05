<?php
$servername = "localhost";
$username = "root";
$password = "";
$bdname = "ISD16621N";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>