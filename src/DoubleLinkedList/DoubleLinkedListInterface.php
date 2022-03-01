<?php

namespace OOP\DoubleLinkedList;

/**
 *
 * @author HR
 */
interface DoubleLinkedListInterface
{
    public function getNodeValue(): string;
    public function setNodeValue(string $nodeValue): void;

    public function getNextNode(): ?self;
    public function setNextNode(?self $nextNode): void;
    
    public function getPrevNode(): ?self;
    public function setPrevNode(?self $prevNode): void;
}