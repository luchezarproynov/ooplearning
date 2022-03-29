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
    private ?Node $prevNode;

    public function __construct(string $nodeValue, Node $prevNode = null)
    {
        $this->nodeValue = $nodeValue;
        $this->prevNode = $prevNode;
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

    public function getPrevNode(): ?LinkedListInterface
    {
        return $this->prevNode;
    }

    public function setPrevNode(?LinkedListInterface $prevNode): void
    {
        $this->prevNode = $prevNode;
    }
}
