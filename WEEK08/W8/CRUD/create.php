<?php
/**
 * การเพิ่มข้อมูล (Insert Data)
 */
if(isset($_REQUEST["firstname"])){
    $firstname = $_GET["firstname"];
    $lastname = $_GET["lastname"];
    $email = $_GET["email"];

    //เตรียมคำสั่ง SQL
    $sql = "INSERT INTO students(firstname, lastname, email) VALUES($firstname,$lastname,$email)";
//เรียกไฟล์เชื่อมต่อฐานข้อมูล
require_once "../connect.php";
if(mysqli_query($conn,$sql)){
    echo "เพิ่มข้อมูลเรียบร้อย";
}else{
    echo "เพิ่มข้อมูลผิดพลาด";
}
mysqli_close($conn);
}

