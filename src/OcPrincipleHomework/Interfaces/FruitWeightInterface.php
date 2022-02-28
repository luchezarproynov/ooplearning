<?php

namespace OOP\OcPrincipleHomework\Interfaces;

/**
 *
 * @author HR
 */
interface FruitWeightInterface
{
    public function isFruit(string $name): bool;
    
    public function getMass(): int;
}
