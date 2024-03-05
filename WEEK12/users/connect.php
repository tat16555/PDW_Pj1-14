<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "isd16621n";

try {
  // สร้าง PDO เชื่อมต่อกับฐานข้อมูล
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->exec("set names utf8");
} catch(PDOException $e) {
  // แสดงผลข้อความแสดงข้อผิดพลาดหากการเชื่อมต่อล้มเหลว
  echo "Connection failed: " . $e->getMessage();
}
?>
