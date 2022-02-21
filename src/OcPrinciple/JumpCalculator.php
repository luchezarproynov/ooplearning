<?php

namespace OOP\OcPrinciple;

use OOP\OcPrinciple\Interfaces\JumpCalculatorInterface;

/**
 * Description of JumpCalculator
 *
 * @author HR
 */
class JumpCalculator implements JumpCalculatorInterface
{
    private const JUMPERS = [
        \OOP\OcPrinciple\Ivan::class,
        \OOP\OcPrinciple\Dragan::class,
        \OOP\OcPrinciple\Petio::class,
        \OOP\OcPrinciple\Petkan::class,
        \OOP\OcPrinciple\Martin::class,
        \OOP\OcPrinciple\Sasho::class,
        \OOP\OcPrinciple\Slavi::class,
        \OOP\OcPrinciple\Stefan::class,
    ];
    
    public function estimatePersonJumpHeight(string $name): int
    {
        foreach (self::JUMPERS as $className) {
            $jumper = new $className();
            if ($jumper->isPerson($name)) {
                return $jumper->getJumpHeight();
            }
        }
        
        throw new \Exception('No such person.');
    }
}
