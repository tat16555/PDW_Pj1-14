<?php
    // While loop

    $start = 1;
    $stop = 20;
    $counter = $start;
    while($counter <= $stop){
        echo $counter;
        if($counter < $stop){
            echo ' | ';
        }
        $counter++;
    }
?>