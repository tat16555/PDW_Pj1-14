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
    <title>User Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>User Profile</h2>
                <div class="card">
                    <div class="card-body">
                        <p><strong>User ID:</strong> <?php echo $row['u_id']; ?></p>
                        <p><strong>Name:</strong> <?php echo $row['u_name']; ?></p>
                        <p><strong>Email:</strong> <?php echo $row['u_email']; ?></p>
                        <p><strong>สร้างเมื่อ:</strong> <?php echo $row['Created_at']; ?></p>
                        <p><strong>Status:</strong> <?php echo ($row['Status'] == 'true') ? 'เปิดการใช้งาน' : 'ปิดการใช้งาน'; ?></p>
                    </div>
                </div>
                <br>
                <a href="../../index.php" class="btn btn-primary">กลับไปที่หน้าหลัก</a>
            </div>
        </div>
    </div>
</body>
</html>
