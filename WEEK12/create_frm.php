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
<div class="container my-4">
    <h2 class="h2">เพิ่มข้อมูลสมาชิก<a class="btn btn-primary">เพิ่มข้อมูลนักศึกษา</a></h2>
    <form action="create.php">
        <div class="mb-3">
        <label for="floatingInput">ชื่อ : </label>
        <input type="text" class="form-control" name="firstname" id="firstname" required>
        </div>
        <div class="mb-3">
        <label for="floatingInput">นามสกุล : </label>
        <input type="text" class="form-control" name="lastname" id="lastname" required>
        </div>
        <div class="mb-3">
        <label for="floatingInput">E-mail : </label>
        <input type="email" class="form-control" name="email" id="email" required>
        </div>
        <br>
        <input type="submit" class="btn btn-success" value="บันทึกข้อมูล">
    </form>
<div>
</body>
</html>
