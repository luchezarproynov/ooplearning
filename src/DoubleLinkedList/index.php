<?php

require_once './../../vendor/autoload.php';

use OOP\DoubleLinkedList\Node;


$head = new Node('she ti dumna glavuta');
$next1 = new Node('mi ni znam');
$head->setNextNode($next1);
$head->setPrevNode(null);

$next2 = new Node('dvoika');
$next1->setNextNode($next2);
$next1->setPrevNode($head);

$tail = new Node('bog dal 3');
$next2->setNextNode($tail);
$next2->setPrevNode($next1);

$tail->setNextNode(null);
$tail->setPrevNode($next2);

$currItem = $tail;
while ($currItem !== null) {
    echo $currItem->getNodeValue().PHP_EOL;
    $currItem = $currItem->getPrevNode();
}

    echo $tail->getNumber();