<?php
// การสร้างตราง Table

// เตรียมคำสั่ง SQL
  $sql = "
  CREATE TABLE students (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";

  // เรียกไฟล์เชื่อต่อฐานข้อมูล
  require_once "connect.php";
  if(mysqli_query($conn,$sql)){
    echo "สร้างตรางเรียบร้อย";
  }else{
    echo "ไม่สามารถสร้างตรางได้";
  }
  
  mysqli_close($conn);