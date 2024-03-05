<?php
/**
 * การสร้างฐานข้อมูล
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="isd16621n";

//สร้างการเชื่อมต่อ
$conn = mysqli_connect($servername,$username,$password,$dbname);

//ตรวจสอบการเชื่อมต่อ
if(!$conn){
    die('การเชื่อมต่อผิดพลาด' . mysqli_connect_error());
}
