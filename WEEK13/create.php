<?php
session_start();
if(isset($_SERVER["REQUEST_METHOD"])){
    extract($_POST);
    $shapassword = password_hash($password, PASSWORD_DEFAULT);
    $param = Array(
        'u_name' => $u_name,
        'u_email' => $u_email,
        'password' => $shapassword,
        'created_at' => date("Y-m-d h:i:s"),
        'updated_at' => date("Y-m-d h:i:s"),
        'Status' => $Status
    );
    require_once 'connect.php';
    //เตรียมคำสั่ง SQL
    $ststement = $conn->prepare("INSERT INTO users(u_name, u_email, password, created_at, updated_at, Status)
                                            VALUES(:u_name, :u_email, :password, :created_at, :updated_at, :Status)");

    if($ststement->execute($param)){
        $_SESSION['success'] = "ลงทะเบียนสำเร็จ";
        header("Location: index.php");
    } else {
        $_SESSION['error'] = "ลงทะเบียนไม่สำเร็จ";
        header("Location: index.php");
    } 
} else {
    $_SESSION['error'] = "การส่งข้อมูลไม่ถูกต้อง";
    header("Location: index.php");
    exit();
}
