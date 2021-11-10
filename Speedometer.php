<?php

class Speedometer {
    public const MILES_CONVERSION = 1.60934;
    public const KM_CONVERSION = 0,621371;
    private int $miles;
    private int $km;

    public function getMiles(): int {
        return $this->miles;
    }
    public function setMiles(int $miles): void {
        $this->miles = $miles;
    }
    public function getKm(): int {
        return $this->km;
    }
    public function setKm(int $km): void {
        $this->km = $km;
    }

    public static function convertMilesToKm(int $miles, int $km) {
        return $miles * self::MILES_CONVERSION;
    }

    public static function convertKmToMiles(int $km, int $miles) {
        return $km * self::KM_CONVERSION;
    }
}