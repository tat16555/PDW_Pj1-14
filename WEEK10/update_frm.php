<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>เพิ่มข้อมูลนักศึกษา</title>
</head>

<body>
    <?php
    if(isset($_GET["id"])){
        $sql = "SELECT * FROM students WHERE id = " . $_GET["id"];
        require_once "connect.php";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_object($result);
        }
        mysqli_close($conn);
    }  
    ?>

    <div class="container my-4">
        <form action="update.php" method="POST">
            <div class="mb-3">
                <label for="firstname">ชื่อ : </label>
                <input type="text" class="form-control" name="firstname" id="firstname" value="<?= $row->firstname ?>" required>
            </div>
            <div class="mb-3">
                <label for="lastname">นามสกุล : </label>
                <input type="text" class="form-control" name="lastname" id="lastname" value="<?=$row->lastname ?>" required>
            </div>
            <div class="mb-3">
                <label for="email">E-mail : </label>
                <input type="email" class="form-control" name="email" id="email" value="<?=$row->email ?>">
            </div>
            <input type="hidden" name="id" value="<?=$row->id ?>">
            <br>
            <input type="submit" class="btn btn-success" value="บันทึกข้อมูล">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
