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
require_once "connect.php";
if(isset($_GET["id"])){
    $statement = $conn->prepare("SELECT * FROM students WHERE id = :id");
    $statement->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
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
                <input type="text" class="form-control" name="firstname" id="firstname" value="<?php echo $row->firstname; ?>" required>
            </div>
            <div class="mb-3">
                <label for="lastname">นามสกุล : </label>
                <input type="text" class="form-control" name="lastname" id="lastname" value="<?php echo $row->lastname; ?>" required>
            </div>
            <div class="mb-3">
                <label for="email">E-mail : </label>
                <input type="email" class="form-control" name="email" id="email" value="<?php echo $row->email; ?>">
            </div>
            <input type="hidden" name="id" value="<?php echo $row->id; ?>">
            <br>
            <input type="submit" class="btn btn-success" value="บันทึกข้อมูล">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
