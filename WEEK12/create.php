<?php
 require_once 'connect.php';

if(isset($_REQUEST["firstname"])){
    $param = Array(
        'firstname' => $_GET["firstname"],
        'lastname' => $_GET["lastname"],
        'email' => $_GET["email"],
    );
    //เตรียมคำสั่ง SQL
    $ststement = $conn->prepare("INSERT INTO students(firstname,lastname,email)
    VALUES(:firstname, :lastname, :email)");

    if($ststement->execute($param)){
        header("Location: index.php");
    } else {
        echo "เพิ่มไม่สำเร็จ<a href='index.php'>ข้อมูลสมาชิก</a> ";
    } 
}
