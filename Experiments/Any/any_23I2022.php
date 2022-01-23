<?php

//$weekTemperatures= [];
//$weekTemperatures['Monday'] = 9;
//$weekTemperatures['Tuesday'] = 5;
//$weekTemperatures['Wednesday'] = 6;
//$weekTemperatures['Thursday'] = 8;
//$weekTemperatures['Friday'] = 4;
//$weekTemperatures['Saturday'] = 2;
//$weekTemperatures['Sunday'] = 1;
//
//foreach ($weekTemperatures as $day => $temperature) {
//    echo 'Day of the week: '.$day.' Temperature: '.$temperature.PHP_EOL;
//}






$weekTemperatures= [];
$dayTemps['Monday'] = 9;
$dayTemps['Tuesday'] = 5;
$dayTemps['Wednesday'] = 6;
$dayTemps['Thursday'] = 8;
$dayTemps['Friday'] = 4;
$dayTemps['Saturday'] = 2;
$dayTemps['Sunday'] = 1;
$nightTemps['Monday'] = 5;
$nightTemps['Tuesday'] = 2;
$nightTemps['Wednesday'] = 1;
$nightTemps['Thursday'] = 3;
$nightTemps['Friday'] = 1;
$nightTemps['Saturday'] = -1;
$nightTemps['Sunday'] = -4;
$weekTemperatures['dayTemps'] = $dayTemps;
$weekTemperatures['nightTemps'] = $nightTemps;

foreach ($weekTemperatures as $dayPart => $dayPartTemps) {
//    echo $dayPart.PHP_EOL;
    $dayPartStr = $dayPart === 'dayTemps' ? 'Day temp' : 'Night temp';
    foreach ($dayPartTemps as $day => $temperature) {
        echo 'Day of the week: '.$day.'. '.$dayPartStr.': '.$temperature.PHP_EOL;
    }
    echo PHP_EOL;
}