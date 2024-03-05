<?php
// การเพิ่มข้อมูลในตราง table

// เตรียมคำสั่ง SQL
  $sql = "INSERT INTO students(firstname, lastname, email)
          VALUES('Niphon', 'Iamphrom', 'Niphon@gmail.com')";

  // เรียกไฟล์เชื่อต่อฐานข้อมูล
  require_once "connect.php";
  if(mysqli_query($conn,$sql)){
    echo "เพิ่มข้อมูลเรียบร้อย";
  }else{
    echo "ไม่สามารถเพิ่มข้อมูลได้";
  }
  
  mysqli_close($conn);