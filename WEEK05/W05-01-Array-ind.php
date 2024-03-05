<?php
    // One Dimension Aaray
    $name = ['Niphon','Iamphrom','Rain'];
    $height = array(160,170,165);
    var_dump($name);
    echo '<hr>';

    print_r($name);
    echo '<hr>';

    echo '<pre>',print_r($name),'</pre>';
    echo '<hr>';

    echo $name[1];
    echo $height[2];
    echo '<hr>';

    echo $name[1].':'. $height[2].'<br>';
        for($i=0; $i<count($name);$i++){
            echo $name[$i] . ':' . $height[$i] . ':' . '<br>';
        }
?>