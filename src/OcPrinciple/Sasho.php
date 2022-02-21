<?php

namespace OOP\OcPrinciple;

use OOP\OcPrinciple\Interfaces\JumpInteface;

/**
 * Description of Ivan
 *
 * @author HR
 */
class Sasho implements JumpInteface
{
    private const NAME = 'Sasho';
    
    private const JUMP_HEIGHT = 550;
    
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
