<?php

require_once './../../vendor/autoload.php';

use OOP\OcPrinciple\JumpCalculator;

$calc = new JumpCalculator();

$name = 'Ivan';
$name = 'Stefan';
$name = 'Dragan';
$name = 'Petkan';
echo $name.' jumps '.$calc->estimatePersonJumpHeight($name).' mm.';