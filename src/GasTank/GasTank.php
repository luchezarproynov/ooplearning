<?php

namespace OOP\GasTank;

use OOP\GasTank\GasDebit;

class GasTank
{
    /**
     * Gas tank total volume.
     * @var float
     */
    private float $volume;
    
    /**
     * 
     * @var array
     */
    private array $debits;
    
    public function __construct(float $volume)
    {
        $this->volume = $volume;
        $this->debits = [];
    }
    
    
    // OVERLOADING. Forbidden in PHP.
//    public function __construct(float $volume, array $debits)
//    {
//        $this->volume = $volume;
//        $this->debits = $debits;
//    }
    
//    Final declare a method whitch cannot be inherited.
    final public function getVolume(): float
    {
        return $this->volume;
    }
    
    public function addDebit(GasDebit $debit): void
    {
        $this->validateInputDebit($debit);
        $this->debits[] = $debit;
    }
    
    public function removeDebit(GasDebit $debit): void
    {
        foreach ($this->debits as $key => $localDebit) {
            if ($debit === $localDebit) {
                unset($this->debits[$key]);
                $this->debits = array_values($this->debits);
                break;
            }
        }
    }
    
    public function getDebits(): array
    {
        return $this->debits;
    }
    
    private function validateInputDebit(GasDebit $debit): void
    {
        if ($debit->volume > $this->volume) {
            throw new \Exception('Too big debit for the tank.');
        }
        
        if ($debit->volume < 0) {
            throw new \Exception('Can\'t add negative number of debit.');
        }
    }
}
