<?php
$sql = "SELECT * FROM students WHERE 1";
require_once "connect.php";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    echo "พบข้อมูล " . mysqli_num_rows($result) . "รายการ";
} else{
    echo "ไม่พลข้อมูล";
}
?>