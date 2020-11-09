<?php

class Speedometer
{
    private const MILESENKM = 1.609;
    private const KMENMILES = 0.621;

    public static function changeMilesEnKm($miles)
    {
        return $miles * self::MILESENKM;
    }

    public static function changeKmEnMiles($km)
    {
        return $km * self::KMENMILES;
    }
}