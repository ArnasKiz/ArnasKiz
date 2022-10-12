<?php

$arrays = [
    0 => [1, 2, 3, 4],
    1 => [5, 6, 7, 8]
];

foreach ($arrays as $array_key => $array){
    echo 'Array index: ' . $array_key . '<br/>'; 
    $values = '';
    foreach ($array as $value) {
        $values .= $value . ' ';
    }
    echo 'All Values: ' . $values . '<br/>'; 
} 