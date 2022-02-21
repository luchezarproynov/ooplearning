<?php

namespace OOP\OcPrinciple;

use OOP\OcPrinciple\Interfaces\JumpInteface;

/**
 * Description of Ivan
 *
 * @author HR
 */
class Ivan implements JumpInteface
{
    private const NAME = 'Ivan';
    
    private const JUMP_HEIGHT = 500;
    
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
