<?php
$sql = "SELECT * FROM students WHERE 1";
require_once "connect.php";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    echo "พบข้อมูล " . mysqli_num_rows($result) . "รายการ";
    $row = mysqli_fetch_array($result);
    echo'<pre>',print_r($row),'<pre><hr>';
    $row = mysqli_fetch_array($result);
    echo'<pre>',print_r($row),'<pre><hr>';
    $row = mysqli_fetch_array($result);
    echo'<pre>',print_r($row),'<pre><hr>';
    $row = mysqli_fetch_array($result);
    echo'ชื่อ : ' . $row[1].' '. $row["lastname"] . '<br>' . 'email : '. $row[3].'<hr><br><br><br><br>';
} else{
    echo "ไม่พลข้อมูล";
}
?>