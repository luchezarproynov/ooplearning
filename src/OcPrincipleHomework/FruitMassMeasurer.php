<?php

namespace OOP\OcPrincipleHomework;

use OOP\OcPrincipleHomework\Interfaces\FruitWeightInterface;
use OOP\OcPrincipleHomework\Interfaces\MassMeasuringInterface;

/**
 * Description of JumpCalculator
 *
 * @author HR
 */
class FruitMassMeasurer implements MassMeasuringInterface
{
    private const FRUITS = [
        \OOP\OcPrincipleHomework\Apple::class,
        \OOP\OcPrincipleHomework\Cherry::class,
        \OOP\OcPrincipleHomework\Lemon::class,
        \OOP\OcPrincipleHomework\Strawberry::class,
        \OOP\OcPrincipleHomework\Orange::class,
    ];
    
    public function getMass(string $name): int
    {
        foreach (self::FRUITS as $className) {
            $measurer = new $className();
            if (!$measurer instanceof FruitWeightInterface) {
                throw new \Exception('Not supported fruit weight instance.');
            }
            
            if ($measurer->isFruit($name)) {
                return $measurer->getMass();
            }
        }
        
        throw new \Exception('No such person.');
    }
}
