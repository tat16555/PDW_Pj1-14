<?php
    echo "ตรวจสอบชื่อวันในสัปดาห์ ด้วย if <br>";
    // การใช้งานคำสั่ง
    $number = 1;
    $dayname = "";
    if($number===1){
        $dayname = "Sunday";
    }elseif($number===2){
        $dayname = "Monday";
    }elseif($number===3){
        $dayname = "Tuesday";
    }elseif($number===4){
        $dayname = "Wednesday";
    }elseif($number===5){
        $dayname = "Thursday";
    }elseif($number===6){
        $dayname = "Friday";
    }elseif($number===7){
        $dayname = "Saturday";
    }else{
        $dayname = 'Not defind';
    }
    // echo "To day is $dayname";
    $number = 4;
    switch($number){
        case 1: $dayname = 'Sunday'; break;
        case 2: $dayname = 'Monday'; break;
        case 3: $dayname = 'Tuesday'; break;
        case 4: $dayname = 'Wednesday'; break;
        case 5: $dayname = 'Thursday'; break;
        case 6: $dayname = 'Friday'; break;
        case 7: $dayname = 'Saturday'; break;
        default: $dayname = 'Not define';
    }
    echo "Number $number is $dayname <hr>";

    
    echo "ตรวจสอบชื่อวันในสัปดาห์ ด้วย Switch กับข้อมูลประเภท String <br>";
    $dd = 'sun';
    switch(strtoupper($dd)){
        case 'SUN': $dayname = 'Sunday'; break;
        case 'MON': $dayname = 'Monday'; break;
        case 'TUE': $dayname = 'Tuesday'; break;
        case 'WED': $dayname = 'Wednesday'; break;
        case 'THU': $dayname = 'Thursday'; break;
        case 'FRI': $dayname = 'Friday'; break;
        case 'SAT': $dayname = 'Saturday'; break;
        default:  $dayname = 'Not define';
    }
    echo "Number $dd is $dayname <hr>";
?>