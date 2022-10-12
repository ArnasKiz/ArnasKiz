<?php

function addFiveWithReference($value): void
{
    $value += 5;
}
function addFive($value): void
{
    $value += 5;
}

$reference = 1;
$void = 2;
addFiveWithReference($reference);
addFive($void);
echo $reference . '<br>';
echo $void;
