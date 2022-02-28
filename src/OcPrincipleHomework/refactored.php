<?php


namespace OOP\OcPrincipleHomework;

require_once './../../vendor/autoload.php';

use OOP\OcPrincipleHomework\Interfaces\MassMeasuringInterface;
use OOP\OcPrincipleHomework\FruitMassMeasurer;

class Fruit
{
    private MassMeasuringInterface $measurer;
    
    public function __construct(MassMeasuringInterface $measurer)
    {
        $this->measurer = $measurer;
    }
    
    /**
     * 
     * @param string $name
     * @return int - height in millimeters
     */
    public function getMass(string $name): int
    {
        return $this->measurer->getMass($name);
    }
}

$measurer = new FruitMassMeasurer();
$fruit = new Fruit($measurer);

$name = 'Cherry';
echo $name.' Weights '.$fruit->getMass($name).' g.';
