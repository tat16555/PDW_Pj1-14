<?php
/**
 * การเชื่อมต่อฐานข้อมูล
 */
$hostname = "localhost";
$username = "root";
$password = "";
$dbName = "isd16621n";

//สร้างการเชื่อมต่อ
$conn = mysqli_connect($hostname,$username,$password,$dbName);

//ตรวจสอบการทำงาน
if(!$conn){
    die('การเชื่อมต่อล้มเหลว' .mysqli_connect_error());
}

