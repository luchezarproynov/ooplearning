<?php

namespace OOP\GasTank;

use OOP\GasTank\GasTank;

/**
 * Description of VolvoGasTank
 *
 * @author HR
 */
class VolvoGasTank extends GasTank
{
    // OVERRIDING. Allowed in PHP.
    public function removeDebit(GasDebit $debit): void
    {
        parent::removeDebit($debit);
        echo 'child method';
    }
}
