<?php
// การสร้างฐานข้อมูล
$servername = "localhost";
$username = "root";
$password = "";


// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";

// การสร้างฐานข้อมูล
$sql = "CREATE DATABASE ISD16621N";
if(mysqli_query($conn,$sql)){
  echo "สร้างฐานข้อมูลเรียบร้อยแล้ว";
}else{
  echo "ไม่สามารถสร้างฐานข้อมูลได้" . mysqli_error($conn);
}

mysqli_close($conn);















?>