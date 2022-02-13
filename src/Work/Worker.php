<?php

namespace OOP\Work;

use OOP\Work\Interfaces\DogInterface;

/**
 * Description of Worker
 *
 * @author HR
 */
class Worker
{
    private array $dogs;
    
    public function __construct()
    {
        $this->dogs = [];
    }
    
    public function addDog(DogInterface $dogObj): void
    {
        $this->dogs[get_class($dogObj)] = $dogObj->work();
    }
    
    public function getDogs(): array
    {
        return $this->dogs;
    }
    
    public function printWorkTypes(): void
    {
        foreach ($this->dogs as $dogName => $workType) {
            echo $dogName.': '.$workType.PHP_EOL.PHP_EOL;
        }
    }
}