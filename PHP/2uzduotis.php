<?php


$array = [8, 2, 3, 4, 5, 6, 7, 1, 9];
$reversed = [];
$size = 0;


foreach ($array as $value) {
    $size++;
}

for ($i = $size - 1; $i >= 0; $i--) {
    $reversed[] = $array[$i];
}

$number = '';
foreach ($reversed as $key => $value) {
    $number .= $value . ', ';
    if ($key != $size - 1) {
        $numbers = ', ';
    }
}
echo $number;
