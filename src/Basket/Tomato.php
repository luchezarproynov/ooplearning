<?php

namespace OOP\Basket;

// Use Class variant 1
use OOP\Basket\Basket2\Apple;

class Tomato
{
    public int $count;
    
    public static function appleColor(): string
    {
        // Use Class variant 2
        return Apple::COLOR;
        
        // Use Class variant 3
        // return \OOP\Basket\Apple::COLOR;
    }
}