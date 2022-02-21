<?php

namespace OOP\OcPrinciple;

use OOP\OcPrinciple\Interfaces\JumpInteface;

/**
 * Description of Ivan
 *
 * @author HR
 */
class Slavi implements JumpInteface
{
    private const NAME = 'Slavi';
    
    private const JUMP_HEIGHT = 440;
    
    public function isPerson(string $name): bool
    {
        if (self::NAME === $name) {
            return true;
        }
        
        return false;
    }
    
    public function getJumpHeight(): int
    {
        return self::JUMP_HEIGHT;
    }
}
