<?php

require_once '../../vendor/autoload.php';

use OOP\Work\ChiHuaHua;
use OOP\Work\NemskaOvcharka;
use OOP\Work\Worker;

$dog1 = new ChiHuaHua();
$dog2 = new NemskaOvcharka();

$bachkator = new Worker();
$bachkator->addDog($dog1);
$bachkator->addDog($dog2);
$bachkator->printWorkTypes();