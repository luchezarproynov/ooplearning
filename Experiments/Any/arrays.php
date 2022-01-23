<?php


$cart = [];
$cart[] = 13;
$cart[] = 14;
$cart[] = 14;

print_r($cart);

$car = [];
$car['model'] = 'Ford KA';
$car[-5] = 5;
$car['color'] = 'blue';
$car[] = 'red';
$car[] = 2;
$car[] = 33;
$car[] = 44;

ksort($car);

//unset($car[500]);//
//$newCar = array_values($car);
//print_r($car);
//print_r($newCar);


//$car2 = array_diff($car, [33, 44, 'peshka',]);
//$car2 = array_intersect($car, [33, 44, 'peshka',]);
//$car2 = array_merge($car, [33, 44, 'peshka',]);

//$car += [33, 44, 'peshka',];

print_r($car);