<?php

class Jumper
{
    
    /**
     * 
     * @param string $name
     * @return int - height in millimeters
     */
    public function getPersonJumpHeight(string $name): int
    {
        if ('Ivan' === $name) {
            return 500;
        }
        
        if ('Dragan' === $name) {
            return 520;
        }
        
        if ('Petkan' === $name) {
            return 550;
        }
        
        if ('Stoyan' === $name) {
            return 430;
        }
        
        if ('Martin' === $name) {
            return 360;
        }
        
        if ('Stefan' === $name) {
            return 500;
        }
        
        throw new \Exception('No such person.');
    }
}

$jumper = new Jumper();

$name = 'Stefan';
echo $name.' jumps '.$jumper->getPersonJumpHeight($name).' mm.';