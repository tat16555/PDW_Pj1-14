<?php
$sql = "SELECT * FROM students";
require_once "connect.php";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    echo "พบข้อมูล " . mysqli_num_rows($result) . "รายการ".'<br>';
    $cnt = 1;
    while($row = mysqli_fetch_assoc($result)){
        echo $cnt . ' ' . $row["firstname"].' '. $row["lastname"]. '<br>';
        $cnt++;
    }
} else{
    echo "ไม่พลข้อมูล";
}
?>