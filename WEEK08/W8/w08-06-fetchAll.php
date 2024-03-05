<?php
$sql = "SELECT * FROM students WHERE 1";
require_once "connect.php";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    echo "พบข้อมูล " . mysqli_num_rows($result) . "รายการ";
    $row = mysqli_fetch_all($result,MYSQLI_BOTH);
    echo'<pre>',print_r($row),'<pre><hr>';
    echo $row[0][1] . ' ' . $row[0][2] . 'hr';
    echo $row[1][1] . ' ' . $row[1][2] . 'hr';
    echo $row[2][1] . ' ' . $row[2][2] . 'hr';
} else{
    echo "ไม่พลข้อมูล";
}
?>