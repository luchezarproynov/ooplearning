<?php

namespace OOP\OcPrincipleHomework;

use OOP\OcPrincipleHomework\Interfaces\FruitWeightInterface;

/**
 * Description of Ivan
 *
 * @author HR
 */
class Orange implements FruitWeightInterface
{
    private const NAME = 'Orange';
    
    /**
     * Weight of single fruit in grams.
     */
    private const WEIGHT = 360;
    
    public function isFruit(string $name): bool
    {
        if (self::NAME === $name) {
            return true;
        }
        
        return false;
    }
    
    public function getMass(): int
    {
        return self::WEIGHT;
    }
}
