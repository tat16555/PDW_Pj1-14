
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h5>รายชื่อนักศึกษา</h5>
<?php
$sql = "SELECT * FROM students";
require_once "connect.php";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
    foreach($rows as $row){
        echo "<option value='$row[id]'> $row[firstname] $row[lastname] </option>";
    }
} else{
    echo "ไม่พลข้อมูล";
}
?>  
</body>
</html>
