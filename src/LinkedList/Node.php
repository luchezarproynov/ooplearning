<?php

namespace OOP\LinkedList;

use OOP\LinkedList\LinkedListInterface;

/**
 * Description of Node
 *
 * @author HR
 */
class Node implements LinkedListInterface
{
    private ?LinkedListInterface $nextNode;
    private string $nodeValue;

    public function __construct(string $nodeValue)
    {
        $this->nodeValue = $nodeValue;
    }
    
    public function getNextNode(): ?LinkedListInterface
    {
        return $this->nextNode;
    }
    
    public function setNextNode(?LinkedListInterface $nextNode): void
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
}
