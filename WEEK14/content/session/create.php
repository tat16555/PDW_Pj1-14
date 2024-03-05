<?php
session_start();
$_SESSION["username"] = "paitonn.j";
$email = "paitonn.j@rus.ac.th";
$_SESSION["email"] = $email;
$_SESSION["point"]=85;
header('refresh:1;url=. ');
