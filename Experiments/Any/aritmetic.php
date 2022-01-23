<?php

$cats = 3;

$totalCats = $cats++;

$totalCats2 = $cats++;

echo $cats.' || '.$totalCats.' || '.$totalCats2.PHP_EOL;

echo '<br><br><br>';
echo ++$cats.' || '.$totalCats++.' || '.$totalCats2--.PHP_EOL;
echo '<br><br><br>';
echo $cats.' || '.$totalCats.' || '.$totalCats2.PHP_EOL;
echo '<br><br><br>';
echo $cats.' || '.$totalCats.' || '.$totalCats2.PHP_EOL;