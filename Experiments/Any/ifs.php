<?php

for ($num = 1; $num < 27; $num++) {
    if ($num % 2 === 0) {
        echo '$num: '.$num.PHP_EOL;
    }
}
echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;



for ($num = 1; $num < 27; $num++) {
    $result = ($num % 2 === 1) ? $num : -$num;
    echo '$result: '.$result.PHP_EOL;
}
