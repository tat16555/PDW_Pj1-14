<?php
/**
 * การเพิ่มข้อมูลจากฟอร์ม
 */
if(isset($_REQUEST["firstname"])){
    $firstname = $_GET["firstname"];
    $lastname = $_GET["lastname"];
    $email = $_GET["email"];
    //เตรียมคำสั่ง SQL
    $sql = "INSERT INTO students(firstname,lastname,email)
            VALUES('$firstname','$lastname','$email')";
    
    //เรียกไฟล์เซื่อมต่อฐานข้อมูล
    require_once "connect.php";
    
    if(mysqli_query($conn,$sql)){
        echo "เพิ่มข้อมูลเรียบร้อยเรียบร้อย";
    }else{
        echo "ไม่สามารถเพิ่มข้อมูลได้";
    }
    
    mysqli_close($conn);
}