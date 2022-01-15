<?php

require_once 'vendor/autoload.php';

use OOP\Basket\SweetBanana as Banana;
use OOP\Basket\Basket2\Apple;
use OOP\Basket\Tomato;

$appleObj = new Apple();
$bananaObj = new Banana();
$tomatoObj = new Tomato();

$bananaFullyQualifiedClassName = Banana::class;

// echo $bananaFullyQualifiedClassName.PHP_EOL;

$appleObj->count = 5;
$bananaObj->count = 3;
$tomatoObj->count = 7;

/* echo '<pre>';
print_r($appleObj);
print_r($bananaObj);
print_r($tomatoObj);
echo '</pre>'; */

$potatoCount = 77;
// passing by value
$count = $potatoCount;
$count += 8;

// echo $potatoCount. ' """" '.$count;

// passing by refference
$appleObj2 = $appleObj;

// standard cloning
$appleObj2 = clone($appleObj);
$appleObj2->count += 8;

//var_dump($appleObj);
//var_dump($appleObj2);

//echo Tomato::appleColor();

// cloning throght serialization
$serializedTomato = serialize($tomatoObj);
//echo $serializedTomato;
$tomatoObj2 = unserialize($serializedTomato);

var_dump($tomatoObj);
var_dump($tomatoObj2);