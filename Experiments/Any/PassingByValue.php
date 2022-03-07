<?php

$array = [5, 6, 2, 1, 7, ];


echo end($array).PHP_EOL;
$array[array_key_last($array)] = 77;
echo end($array).PHP_EOL;
