<?php

require_once './../../vendor/autoload.php';

use OOP\DoubleLinkedList\Node;


$head = new Node('she ti dumna glavuta');
$next1 = new Node('mi ni znam');
$head->setNextNode($next1);
$next2 = new Node('dvoika');
$next1->setNextNode($next2);
$next3 = new Node('bog dal 3');
$next2->setNextNode($next3);
$last = null;
$next3->setNextNode($last);

$currItem = $head;
while ($currItem !== null) {
    echo $currItem->getNodeValue().PHP_EOL;
    $currItem = $currItem->getNextNode();
    
}