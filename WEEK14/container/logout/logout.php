<?php 
session_start();
if(isset($_SESSION['user_login'])) {
    unset($_SESSION['user_login']);
    unset($_SESSION['user_id']);
    unset($_SESSION['user_name']);
    $_SESSION['user_logout'] = 'คุณออกจากระบบแล้ว';
}
header('location: ../../index.php');
exit(); 
?>
