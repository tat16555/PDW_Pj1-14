<?php
/**
 * การสร้างฐานข้อมูล
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "isd16621n";

//สร้างการเซื่อมต่อ
$conn = mysqli_connect($servername, $username, $password, $dbname);

//ตรวจสอบการเซื่อมต่อ
if (!$conn) {
    die('การเซื่อมต่อผิดพลาด' . mysqli_connect_error());
}
