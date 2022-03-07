<?php


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

foreach ($weekTemperatures['dayTemps'] as $day => $temperature) {
    echo $day.'. '.'Day temp'.': '.$temperature.PHP_EOL;
    echo $day.'. '.'Night temp'.': '.$weekTemperatures['nightTemps'][$day].PHP_EOL;

    echo PHP_EOL;
}
