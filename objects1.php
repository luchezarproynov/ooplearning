<?php


interface ColorInterface
{
    public function getColor(): string;
}



abstract class Fruit implements ColorInterface
{
    abstract public function getTaste(): string;
}

class Apple extends Fruit
{
    public function getTaste(): string
    {
        return 'sweet';
    }
    
    public function getColor(): string
    {
        return 'green';
    }
}


class Banana extends Fruit
{
    public function getTaste(): string
    {
        // Brakes Liskov principle.
        // !!!  never do it
        //throw new \Exception('deaznam');
        
        return 'sweet';
    }
    
    
    public function getColor(): string
    {
        return 'green';
    }
}


class Mango extends Fruit
{
    public function getTaste(): string
    {
        return 'sweat';
    }
    
    
    public function getColor(): string
    {
        return 'green';
    }
}


$banana = new Banana();
echo $banana->getTaste();
    
echo PHP_EOL;

$mango = new Mango();
echo $mango->getTaste().PHP_EOL;
echo $mango->getColor().PHP_EOL;
echo $mango->getColor().PHP_EOL;