<?php
/**Associative Array กับ foreach */
$point = array("A"=>4,"B"=>3,"C"=>2,"D"=>1,"F"=>0);
$score = [
            'Paitoon'=>50,
            'Mongkol'=>60,
            'Kanyanee'=>55
        ];
echo '<hr>';

// การใช้คำสั่ง Foreach
foreach($score as $scr){
    echo $scr . '|';
}
echo 'hr';

// การอ่าน key
foreach($score as $key => $value){
    echo "Name : $key | Score $value <br>";
}