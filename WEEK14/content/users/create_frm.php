<?php 
session_start();
if (!isset($_SESSION['user_login'])) {
    $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
    header('location: ../login_fm/login_fm.php');
}
require_once("../../common/connect.php");
require_once("../../container/session/isset_user.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../asset/css/style.css">
    <title>เพิ่มข้อมูลนักศึกษา</title>
</head>
<body>
<?php require_once("../nav/nav.php"); ?>
<div class="container my-4">
    <h2 class="h2">เพิ่มข้อมูลสมาชิก<a class="btn btn-primary">เพิ่มข้อมูลนักศึกษา</a></h2><hr>
    <form action="create.php" method="post" name="create_frm" onsubmit="return chkPWD(this)">
        <div class="mb-2">
            <label for="floatingInput">ชื่อ-นามสกุล</label>
            <input type="text" class="form-control" name="u_name" id="u_name"required>
        </div>
        <div class="mb-2">
        <label for="floatingInput">E-mail : </label>
        <input type="email" class="form-control" name="u_email" id="u_email" required>
        </div>
        <div class="mb-2">
        <label for="floatingInput">password : </label>
        <input type="password" class="form-control" name="password" id="password"required>
        </div>
        <div class="mb-2">
        <label for="floatingInput">ยืนยันpassword : </label>
        <input type="password" class="form-control" name="c_password" id="c_password" required>
        </div>
        <div class="mb-2">
        <label for="floatingInput">สถานะการใช้งาน</label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="Status" id="flexRadioDefault1" value="true">
        <label class="form-check-label" for="flexRadioDefault1">
            เปิดการใช้งาน
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="Status" id="flexRadioDefault2" value="false">
        <label class="form-check-label" for="flexRadioDefault2">
           ปิดการใช้งาน</label>
        </div>
        <br>
        <input type="submit" class="btn btn-success" value="บันทึกข้อมูล">
    </form>
<div>
</body>
<script>
    function chkPWD(){
        let pwd = document.getElementById("password").value
        let cpwd= document.getElementById("c_password").value
        if(pwd!== cpwd){
            alert("กรุณายินยันรหัสผ่านให้ถูกต้อง")
            return false
        } else {
            create_frm.submit()
        }
    }
</script>
</html>
