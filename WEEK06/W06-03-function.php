<?php
/**
 * User define fuction / Custom function
 */

 //Function แบบไม่มี Argument และ มีการคืนค่า (Return value)
 function bmi() {
    $weight=70; $height=180;
    $bmi = $weight/pow($height/100,2);

    return $bmi;
 }
 echo 'BMI ='.bmi();