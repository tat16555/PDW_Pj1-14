<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    extract($_POST);
    require_once("../../common/connect.php");
    // if ($password === $c_password) {
        $shapassword = password_hash($password, PASSWORD_DEFAULT);
        $param = array(
            'u_name' => $u_name,
            'u_email' => $u_email,
            'password' => $shapassword,
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
            'Status' => $Status
        );
        $stmt = $conn->prepare("SELECT u_email FROM users WHERE u_email = :u_email");
        $stmt->execute(array(":u_email" => $u_email));
        if ($stmt->rowCount() == 0) {
            $statement = $conn->prepare("INSERT INTO users(u_name, u_email, password, created_at, updated_at, Status) VALUES(:u_name, :u_email, :password, :created_at, :updated_at, :Status)");

            if ($statement->execute($param)) {
                $_SESSION['success'] = "ลงทะเบียนสำเร็จ";
                header("Location: index.php");
            } else {
                $_SESSION['error'] = "ลงทะเบียนไม่สำเร็จ";
                header("Location: index.php");
            }
        } else {
            $_SESSION['error'] = "emailนี้ถูกใช้แล้ว";
            header("Location: index.php");
            exit();
        }
    // } else {
    //     $_SESSION['error'] = "passwordไม่ถูกต้อง";
    //     header("Location: index.php");
    //     exit();
    // }
} else {
    $_SESSION['error'] = "การส่งข้อมูลไม่ถูกต้อง";
    header("Location: index.php");
    exit();
}
?>
