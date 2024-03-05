<?php
session_start();
if (isset($_SESSION['username'])) {
    unset($_SESSION['username']);
    unset($_SESSION['usersname']);
    unset($_SESSION['email']);
    unset($_SESSION['point']);
    unset($_SESSION['phone']);
    $_SESSION['destroy'] = 'ลบ SESSION ที่สร้างแล้ว';
    header('refresh:1;url=. ');
} else {
    $_SESSION['No_destroy'] = 'ไม่ได้สร้าง SESSION!';
    header('refresh:1;url=. ');
}
?>
