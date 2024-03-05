<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];
    require_once "connect.php";
}
$ststement = $conn->prepare("DELETE FROM students WHERE id =  $id ");
$ststement->execute();
header("refresh: 1; url= index.php");
?>