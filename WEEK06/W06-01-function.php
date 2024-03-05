<?php
/**
 * User define function / Custom function
 */

//Function เเบบไม่มี Argument และ ไม่มีการคืนค่า (Return value)
function bmi(/**Arguments */){
    $weight = 80;
    $height = 170;
    
    $bmi = $weight/pow($height/100,2);

    echo "BMI = $bmi <br>";
}

bmi();
bmi();