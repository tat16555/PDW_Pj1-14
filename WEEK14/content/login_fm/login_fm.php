<?php 
session_start();
require_once("../../common/connect.php");
require_once("../../container/session/isset_user.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="">
    <link href="css/mobiscroll.javascript.min.css" rel="stylesheet">
</head>
<body>
<?php require_once("../nav/nav.php"); ?>
<div class="container my-5">
    <?php if(isset($_SESSION['success'])): ?>
        <div class="alert alert-success" role="alert">
            <?php echo $_SESSION['success']; ?>
        </div>
        <?php unset($_SESSION['success']); ?>
    <?php endif; ?>
    <?php if(isset($_SESSION['error'])): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_SESSION['error']; ?>
        </div>
        <?php unset($_SESSION['error']); ?>
    <?php endif; ?>
    <?php if(isset($_SESSION['error_login'])): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_SESSION['error_login']; ?>
            </div>
            <?php unset($_SESSION['error_login']); ?>
        <?php endif; ?>
    
    <div class="container mt-3">
        <form action="../../container/login/login.php" method="POST">
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Username : </label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="u_email" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Password : </label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" required>
                </div>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
                <a href="../index.php" class="btn btn-success">หน้าหลัก</a>
            </div>
        </form>
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+ENXzXod1iqOf1KEFfxtuAv/yy6XzoUp5tbulvM" crossorigin="anonymous"></script>
</html>