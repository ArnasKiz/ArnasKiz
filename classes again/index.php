<?php
require_once('./classes/Fruit.php');
require_once('./classes/Bar.php');

echo Fruit::$color . '</br>';
echo Fruit::getColor() . '</br>';
echo Fruit::calculateCarbs(50) . '</br>';

$fruit = new Fruit();
$fruit_two = new Fruit();

if ($fruit === $fruit_two) {
    echo 'Wow Fruit::class <br>';
} else {
    echo 'wut? <br>';
}

$bar = new Bar();

if ($bar instanceof Fruit) {
    echo 'Wow Fruit::class <br>';
} else {
    echo 'Not Fruit::class <br';
}
