<?php


class Fruit1
{
    
    /**
     * 
     * @param string $fruit
     * @return int - height in millimeters
     */
    public function getFruitWeight(string $fruit): int
    {
        if ('Orange' === $fruit) {
            return 300;
        }
        
        if ('Cherry' === $fruit) {
            return 37;
        }
        
        if ('Apple' === $fruit) {
            return 150;
        }
        
        if ('Lemon' === $fruit) {
            return 250;
        }
        
        if ('Strawberry' === $fruit) {
            return 15;
        }
        
        throw new \Exception('Too much weight');
    }
}

$fruit1 = new Fruit1();

$fruit = 'Stefan';
echo $fruit.' jumps '.$fruit->getFruitWeight().' mm.';
