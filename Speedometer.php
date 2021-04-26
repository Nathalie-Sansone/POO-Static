<?php

class Speedometer

{
    public const ONE_MILE = 0.621;

    public static function convertKmToMiles(int $km): float
    {
        return $km * self::ONE_MILE;
    }
}
