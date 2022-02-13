<?php

namespace OOP\Work;

use OOP\Work\Interfaces\DogInterface;

/**
 * Description of ChuHuaHuaClass
 *
 * @author HR
 */
class ChiHuaHua implements DogInterface
{
    public function work(): string
    {
        return 'lae';
    }
}