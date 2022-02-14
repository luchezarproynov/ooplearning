<?php

namespace OOP\GasTank;

trait DebitCalculator
{
    protected function calculateUsedGas(float $distance, float $usedFuelPer100Km): float
    {
        if (0 > $distance || 0 > $usedFuelPer100Km) {
            throw new \Exception('Distance and fuel concuption cannot be negative.');
        }
        
        $result = $distance * $usedFuelPer100Km;
        $result /= 100;
        
        return round($result, 3);
    }
}