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
    <title>Session Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../asset/css/style.css">
</head>
<body>
    <?php require_once("../nav/nav.php"); ?>
    <?php
    if (!isset($_SESSION['user_login'])) {
        $_SESSION['error_login'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: ../../index.php');
    }
    ?>
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

        <h3>Cookie Management</h3>
        <ul class="list-group mt-3">
            <li class="list-group-item"><a href="create.php" class="text-decoration-none">Create cookie</a></li>
            <li class="list-group-item"><a href="show.php" class="text-decoration-none">Show cookie</a></li>
            <li class="list-group-item"><a href="update.php" class="text-decoration-none">Update cookie</a></li>
            <li class="list-group-item"><a href="delete.php" class="text-decoration-none">Delete cookie</a></li>
        </ul>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
