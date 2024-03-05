<?php
session_start();
unset($_SESSION["point"]);
unset($_SESSION["phone"]);
header('refresh:1;url=. ');
