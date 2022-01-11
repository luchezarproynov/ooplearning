<?php

// Throws a "PHP Warning:  include(): Failed opening 'nonexisting.php'.".
// include 'nonexisting.php';

// Throws an "PHP Fatal error:  require(): Failed opening required 'nonexisting.php' ".
// require 'nonexisting.php';

// !! A good practice is if we use require instead of include.

include 'Estimation.php';
// !! A class cannot be declared twice!
// include 'Estimation.php';
$randomMethod = Estimation::randomInt();

$randomNum = include 'random.php';
// !! We cannot call a php file which returns a value with include-require_once twice.
// It returns allways 1.
$randomNum2 = include 'random.php';

echo 'randomMethod: '.$randomMethod.PHP_EOL;
echo 'randomNum: '.$randomNum.PHP_EOL;
echo 'randomNum2: '.$randomNum2.PHP_EOL;