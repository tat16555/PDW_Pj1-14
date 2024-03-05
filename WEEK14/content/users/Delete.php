<?php
session_start();
if(isset($_GET["u_id"])){
    $u_id = $_GET["u_id"];
    require_once("../../common/connect.php");
    $ststement = $conn->prepare("DELETE FROM users WHERE u_id = $u_id");
    $ststement->execute();
    $_SESSION['success'] = "ลบสำเร็จ";
    header("Location: index.php"); 
} else {
    $_SESSION['error'] = "ลบไม่สำเร็จ";
    header("Location: index.php");
    exit();
}

?>