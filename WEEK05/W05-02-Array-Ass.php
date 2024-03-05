<?php
    
    // Asscociative Array ('Key' => value)
    $score = ['Niphon' =>50,'Iamphrom' =>80, 'Rain' =>75];
    $weight = array(
        'Niphon' =>50,
        'Iamphrom' => 45,
        'Rain' =>48
    );

    var_dump($score);
    echo '<br>';

    echo '<pre>' ,print_r($score), '</pre> <br>';
    echo '<br>';

    echo $weight['Niphon'];
    echo '<br>';

    
?>