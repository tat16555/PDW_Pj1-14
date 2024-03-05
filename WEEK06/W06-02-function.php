<?php
/**
 *  User define function /Custom function
 */

 //Function เเบบที Arfument และ ไท่ทีการคืนค่า (Return value)
 function bmi($weight=0,$height=0){

    $bmi = $weight/pow($height/100,2);

    echo "BMI = $bmi <br>";
 }
 bmi(70,180);