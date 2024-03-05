<?php

if(isset($_GET["id"])){
    $id = $_GET["id"];
    require_once "connect.php";
}

$result = $conn->prepare("DELETE FROM students WHERE id =  $id ");
$result->execute();

header("refresh: 1; url= index.php");
?>