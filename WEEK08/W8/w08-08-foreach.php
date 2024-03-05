<?php
$sql = "SELECT * FROM students";
require_once "connect.php";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    echo "พบข้อมูล " . mysqli_num_rows($result) . "รายการ<hr>";

    $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
    foreach($rows as $row){
        echo $row["firstname"] .' '. $row["lastname"].'<br>';
    }
} else{
    echo "ไม่พลข้อมูล";
}
?>