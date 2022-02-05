<?php

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
    
    public function getVolume(): float
    {
        return $this->volume;
    }
    
    public function addDebit(GasDebit $debit): void
    {
        $this->debits[] = $debit;
    }
    
    public function removeDebit(GasDebit $debit): void
    {
        foreach ($this->debits as $key => $localDebit) {
            if ($debit === $localDebit) {
                unset($this->debits[$key]);
                array_values($this->debits);
                break;
            }
        }
    }
    
    public function getDebits(): array
    {
        return $this->debits;
    }
}

class GasDebit
{
    public \DateTime $dateTime;
    
    /**
     * Gas volume in litres.
     * @var float
     */
    public float $volume;
}


$gasTank = new GasTank(50);
$debit1 = new GasDebit();
$debit2 = new GasDebit();
$debit3 = new GasDebit();
$debit4 = new GasDebit();
$debit1->dateTime = new \DateTime('NOW');
$debit2->dateTime = new \DateTime('NOW');
$debit3->dateTime = new \DateTime('NOW');
$debit4->dateTime = new \DateTime('NOW');
$debit2->dateTime->add(new DateInterval('PT10M'));
$debit3->dateTime->add(new DateInterval('PT20M'));
$debit4->dateTime->add(new DateInterval('PT30M'));

$debit1->volume = 45;
$debit2->volume = 41;
$debit3->volume = 36;
$debit4->volume = 30;

$gasTank->addDebit($debit1);
$gasTank->addDebit($debit2);
$gasTank->addDebit($debit3);
$gasTank->addDebit($debit4);
print_r($gasTank);
$gasTank->removeDebit($debit3);
print_r($gasTank);

