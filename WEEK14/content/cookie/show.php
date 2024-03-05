<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <?php
                session_start();

                if (!empty($_SESSION)) {
                    echo '<div class="card">
                            <div class="card-header">Session Data</div>
                            <div class="card-body">
                                <pre>' . htmlspecialchars(print_r($_COOKIE, true)) . '</pre>
                            </div>
                        </div>';
                } else {
                    echo '<div class="alert alert-warning" role="alert">ไม่พบข้อมูลใน COOKIE</div>';
                }
                ?>
                <br>
                <a href="index.php" class="btn btn-primary">กลับไปที่หน้าหลัก</a>
            </div>
        </div>
    </div>
</body>
</html>
