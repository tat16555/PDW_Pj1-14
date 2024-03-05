<?php
session_start();
$_SESSION["usersname"] = "ptjnb";
$email = "ptjj@rus.ac.th";
$_SESSION["email"] = "email";
$_SESSION["point"] = 10;
$_SESSION["phone"] = 1234567890;
header('refresh:1;url=. ');
