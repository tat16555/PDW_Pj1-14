<?php
    // do - While loop

    $start = 1;
    $stop = 50;
    $counter = $start;
    do{
        echo $counter;
        if($counter < $stop){
            echo " | ";
        }
        $counter += 2;
    }
    while($counter <= $stop);
?>