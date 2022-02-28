<?php

require_once './../../vendor/autoload.php';

use OOP\OcPrinciple\Interfaces\JumpCalculatorInterface;
use OOP\OcPrinciple\JumpCalculator;

class Jumper
{
    private JumpCalculatorInterface $jumpCalculator;
    
    public function __construct(JumpCalculatorInterface $jumpCalculator)
    {
        $this->jumpCalculator = $jumpCalculator;
    }
    
    /**
     * 
     * @param string $name
     * @return int - height in millimeters
     */
    public function getPersonJumpHeight(string $name): int
    {
        return $this->jumpCalculator->estimatePersonJumpHeight($name);
    }
}

$calc = new JumpCalculator();
$jumper = new Jumper($calc);

$name = 'Stefan';
echo $name.' jumps '.$jumper->getPersonJumpHeight($name).' mm.';
