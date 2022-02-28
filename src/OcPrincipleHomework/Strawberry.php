<?php

namespace OOP\OcPrincipleHomework;

use OOP\OcPrincipleHomework\Interfaces\FruitWeightInterface;

/**
 * Description of Ivan
 *
 * @author HR
 */
class Strawberry implements FruitWeightInterface
{
    private const NAME = 'Strawberry';
    
    private const WEIGHT = 60;
    
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

