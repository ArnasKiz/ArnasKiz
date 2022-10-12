<?php

$countValues = [];
$array = [1, 2, 3, 4, 5, 1, 5, 4, 2, 1];

foreach ($array as $value) {
    $countedValue = 0;
    foreach ($array as $count) {
        if ($value == $count) {
            //count value
            $countedValue++;
        }
    }
    $countValues[$value] = $countedValue;
}

$mostRepeated = 'exe not found';
$timesRepeated = 0;

foreach ($countValues as $key => $counted) {
    if ($timesRepeated == 0 && $mostRepeated == 'exe not found') {
        $mostRepeated = $key;
        $timesRepeated = $counted;
    }

    if ($timesRepeated < $counted) {
        $mostRepeated = $key;
        $timesRepeated = $counted;
    }
}

echo "Most time repeated is " . $mostRepeated . '<br/>';
echo "Times: " . $timesRepeated;
