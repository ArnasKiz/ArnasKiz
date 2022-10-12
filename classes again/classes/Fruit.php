<?php

class Fruit
{
    public static $color = 'WHITE';

    public static function getColor()
    {
        return self::$color;
    }

    public static function calculateCarbs(int $weight)
    {
        return $weight / (pi() * 0.1);
    }
}
