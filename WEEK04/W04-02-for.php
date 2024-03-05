<?php
    for($n=0;$n<10;$n++){
        echo "$n : ";
    }
    echo "<hr>";

    for($n=0;$n<=100;$n+=10){
        echo "$n :";
    }
    echo "<hr>";

    for($n=100;$n>=0;$n-=10){
        echo "$n :";
        if($n==50)
            break;
    }
    echo "<hr>";

    for($n=100;$n>=0;$n-=10){
        
        if($n==50)
            continue;
        echo "$n :";
    }
    echo "<hr>";    
?>