<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มข้อมูลนักศึกษา</title>
</head>
<body>
    <form action="create.php">
        <div>
            <span>ชื่อ : </span><br>
            <input type="text" name="firstname" required>
        </div>
        <div>
            <span>นามสกุล : </span><br>
            <input type="text" name="lastname" required>
        </div>
        <div>
            <span>E-mail : </span><br>
            <input type="text" name="email" required>
        </div>
        <br>
        <input type="submit" value="บันทึกข้อมูล">
    </form>
</body>
</html>