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
    <link rel="stylesheet" href="../asset/css/style.csss">
    <title>เพิ่มข้อมูลนักศึกษา</title>
</head>

<body>
<?php require_once("../nav/nav.php"); ?>
<?php
if(isset($_GET["u_id"])){
    $statement = $conn->prepare("SELECT * FROM users WHERE u_id = :u_id");
    $statement->bindParam(':u_id', $_GET['u_id'], PDO::PARAM_INT);
    $statement->execute();
    if($statement->rowCount()){
        $row = $statement->fetch(PDO::FETCH_OBJ);
    }
}
?>
    <div class="container my-4">
        <form action="update.php" method="POST">
            <div class="mb-3">
                <label for="firstname">ชื่อ : </label>
                <input type="text" class="form-control" name="u_name" id="u_name" value="<?php echo $row->u_name; ?>" required>
            </div>
            <div class="mb-3">
                <label for="lastname">Email : </label>
                <input type="email" class="form-control" name="u_email" id="u_email" value="<?php echo $row->u_email; ?>" required>
            </div>
            <div class="mb-2">
            <label for="floatingInput">สถานะการใช้งาน</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="Status" id="flexRadioDefault1" value="true" 
                <?php echo ($row->Status == 'true') ? 'checked' : ''; ?>>
                <label class="form-check-label" for="flexRadioDefault1">
                    เปิดการใช้งาน
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="Status" id="flexRadioDefault2" value="false" 
                <?php echo ($row->Status == 'false') ? 'checked' : ''; ?>>
                <label class="form-check-label" for="flexRadioDefault2">
                    ปิดการใช้งาน
                </label>
            </div>
            <input type="hidden" name="u_id" value="<?php echo $row->u_id; ?>">
            <br>
            <input type="submit" class="btn btn-success" value="บันทึกข้อมูล">
        </form>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
