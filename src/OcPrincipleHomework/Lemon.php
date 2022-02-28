<?php

namespace OOP\OcPrincipleHomework;

use OOP\OcPrincipleHomework\Interfaces\FruitWeightInterface;

/**
 * Description of Ivan
 *
 * @author HR
 */
class Lemon implements FruitWeightInterface
{
    private const NAME = 'Lemon';
    
    private const WEIGHT = 400;
    
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

