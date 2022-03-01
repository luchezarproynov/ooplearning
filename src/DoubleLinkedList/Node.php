<?php

namespace OOP\DoubleLinkedList;

use OOP\DoubleLinkedList\DoubleLinkedListInterface;

/**
 * Description of Node
 *
 * @author HR
 */
class Node implements DoubleLinkedListInterface
{
    private ?DoubleLinkedListInterface $prevNode;
    private ?DoubleLinkedListInterface $nextNode;
    private string $nodeValue;

    public function __construct(string $nodeValue)
    {
        $this->nodeValue = $nodeValue;
    }
    
    public function getNextNode(): ?DoubleLinkedListInterface
    {
        return $this->nextNode;
    }
    
    public function setNextNode(?DoubleLinkedListInterface $nextNode): void
    {
        $this->nextNode = $nextNode;
    }
    
    public function getNodeValue(): string
    {
        return $this->nodeValue;
    }
    
    public function setNodeValue(string $nodeValue): void
    {
        $this->nodeValue = $nodeValue;
    }
    
    public function getPrevNode(): ?DoubleLinkedListInterface
    {
        return $this->prevNode;
    }
    
    public function setPrevNode(?DoubleLinkedListInterface $prevNode): void
    {
        $this->prevNode = $prevNode;
    }
    
    public function getNumber(): int
    {
        return 6.99;
    }
}
