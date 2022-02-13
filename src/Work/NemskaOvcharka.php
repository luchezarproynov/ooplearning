<?php

namespace OOP\Work;

use OOP\Work\Interfaces\DogInterface;

/**
 * Description of NemskaOvcharkaClass
 *
 * @author HR
 */
class NemskaOvcharka implements DogInterface
{
    public function work(): string
    {
        return 'igrae';
    }
}
