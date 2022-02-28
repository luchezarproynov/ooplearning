<?php

namespace OOP\OcPrincipleHomework;

use OOP\OcPrincipleHomework\Interfaces\FruitWeightInterface;

/**
 * Description of Ivan
 *
 * @author HR
 */
class Cherry implements FruitWeightInterface
{
    private const NAME = 'Cherry';
    
    private const WEIGHT = 50;
    
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
