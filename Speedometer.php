<?php


class Speedometer
{
    const KM_MILES = 0.621;

    public static function convertKmToMiles(float $speed)
    {
        return self::KM_MILES * $speed;
    }
    public static function convertMilesToKm(float $speed)
    {
        return self::KM_MILES/$speed;
    }

}