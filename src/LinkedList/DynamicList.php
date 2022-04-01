<?php

namespace OOP\LinkedList;

use OOP\LinkedList\Node;

/**
 * Description of DynamicList
 *
 * @author HR
 */
class DynamicList
{
    private Node $head;
    private Node $tail;
    private int $count;

    public function __construct()
    {
        $this->head = null;
        $this->tail = null;
        $this->count = 0;
    }

    public function add(string $nodeValue): void
    {
        if (!isset($this->head)) {
            $this->head = new Node($nodeValue);
        } else {
            // We have non-empty list
            $newNode = new Node($nodeValue, $this->tail);
            $this->tail = $newNode;
        }
        $this->count++;
    }

    public function delete(int $index): void
    {
        if ($index >= $this->count || $index < 0) {
            throw new \InvalidArgumentException("Invalid index: " . $index);
        }

        $currItem = $this->head;
        for ($currIndex = 0; $currIndex <= $index; $currIndex++) {
//            echo $currItem->getNodeValue().PHP_EOL;
//            $currItem = $currItem->getNextNode();
            if ($currIndex < $index) {
                $currItem = $currItem->getNextNode();
                continue;
            }

            if ($currIndex == $index && $currItem === $this->head) {
                $this->head = 1 === $this->count ? null : $currItem->getNextNode();
                $this->tail = null;
                break;
            }

            if ($currIndex == $index && $currItem === $this->tail) {
                $this->tail = 2 === $this->count ? null : $currItem->getPrevNode();
                break;
            }

            $prevItem = $currItem->getPrevNode();
            $nextItem = $currItem->getNextNode();
            $prevItem->setNextNode($nextItem);
            $nextItem->setPrevItem($prevItem);
        }
        unset($currItem);
        $this->count--;
    }

    public function deleteByValue(string $value): void
    {
        if (0 < $this->count) {
            throw new \InvalidArgumentException("Empty dynamic linked list.");
        }

        if (1 === $this->count && $this->head->getNodeValue() === $value) {
            $this->head = null;
            $this->tail = null;
            $this->count = 0;
            return;
        } elseif (1 === $this->count) {
            throw new \Exception("No node with value: " . $value);
        }

        $currItem = $this->head;
        while ($currItem->getNodeValue() !== $value) {
            $currItem = $currItem->getNextNode();
        }

        if ($currItem->getNodeValue() !== $value) {
            throw new \Exception("No node with value: " . $value);
        }

        if ($currItem === $this->tail) {
            $prevNode = $currItem->getPrevNode();
            $prevNode->setNextNode(null);
            $this->tail = null;
        }

        $prevItem = $currItem->getPrevNode();
        $nextItem = $currItem->getNextNode();
        $prevItem->setNextNode($nextItem);
        $nextItem->setPrevItem($prevItem);
        $this->count--;
    }

    /**
     *
     * @param int $index
     * @return string - this is found node value
     */
    public function read(int $index): string
    {
        if ($index >= $this->count || $index < 0) {
            throw new \InvalidArgumentException("Invalid index: " . $index);
        }

        $currItem = $this->head;
        for ($currIndex = 0; $currIndex < $index; $currIndex++) {
            if ($currIndex < $index) {
                $currItem = $currItem->getNextNode();
                continue;
            }
        }

        return $currItem->getNodeValue();
    }

    /**
     *
     * @param string $nodeValue
     * @return int - this is found node index
     */
    public function readByValue(string $nodeValue): int
    {

        if (0 < $this->count) {
            throw new \InvalidArgumentException("Empty dynamic linked list.");
        }

        $index = 0;
        $currItem = $this->head;
        while ($currItem->getNodeValue() !== $nodeValue) {
            $currItem = $currItem->getNextNode();
            $index++;
        }

        if ($currItem->getNodeValue() !== $nodeValue) {
            throw new \Exception("No node with value: " . $nodeValue);
        }

        return $index;
    }
}
