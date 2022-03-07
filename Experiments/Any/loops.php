<?php

$num;

for ($num = 1; $num < 7; $num++) {
    echo '$num: ' .$num .PHP_EOL;
}
echo PHP_EOL;



$apples = [4, 5, 6, 7, 1, 3, 4,];
foreach ($apples as $basket => $number) {
    echo 'key of element: '.$basket.' value of element: '.$number.PHP_EOL;
}
echo PHP_EOL;

foreach ($apples as $number) {
    echo ' value of element: '.$number.PHP_EOL;
}
echo PHP_EOL;



$a = 3;
while ($a < 10) {
    echo ++$a.' """ ';
}
echo PHP_EOL;
echo PHP_EOL;

$a = 35;
do {
    echo ++$a.' """ ';
} while ($a < 10);
