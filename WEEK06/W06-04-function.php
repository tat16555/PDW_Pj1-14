<?php
/**
 *  User define function / Custom function
 */

 //Function เเบบ Argument และ มีการคืนค่า (Return value)
 function bmi($weight=0,$height=0){
    if($weight>0 ||$weight>0){
        $bmi = $weight/pow($height/100,2);
        return $bmi;
    }
 }
 echo 'BMI=' . bmi(80,130);