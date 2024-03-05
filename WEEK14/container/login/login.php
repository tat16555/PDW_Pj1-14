<?php
session_start();
require_once '../../common/connect.php';
if (isset($_POST['u_email'])) {
    $u_email = $_POST['u_email'];
    $password = $_POST['password'];
            $check_data = $conn->prepare("SELECT * FROM users WHERE u_email = :u_email");
            $check_data->bindParam(":u_email", $u_email);
            $check_data->execute();
            $row = $check_data->fetch(PDO::FETCH_ASSOC);
            if ($check_data->rowCount() > 0) {
                if (password_verify($password, $row['password'])) {
                    if ($row['Status'] == 'true') {
                        $_SESSION['user_login'] = $row['u_id'];
                        $_SESSION['user_id'] = $row['u_id'];
                        $_SESSION['user_name'] = $row['u_name']; 
                        $_SESSION['success'] = 'เข้าสู่ระบบสำเร็จ';
                        header("location: ../../content/users/index.php");
                        exit();
                    } else {
                        $_SESSION['error'] = 'id นี้ถูกพักการใช้งาน';
                    }
                } else {
                    $_SESSION['error'] = 'รหัสผ่านผิด';
                }
            } else {
                $_SESSION['error'] = 'ไม่พบผู้ใช้ในระบบ';
            }
    // Redirect back to the sign-in page
    header("location: ../../index.php");
    exit();
}

?>
