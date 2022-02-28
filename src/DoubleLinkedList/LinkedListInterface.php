<?php

namespace OOP\DoubleLinkedList;

/**
 *
 * @author HR
 */
interface LinkedListInterface
{
    public function getNodeValue(): string;
    public function setNodeValue(string $nodeValue): void;

    public function getNextNode(): ?self;
    public function setNextNode(?self $nextNode): void;
}
