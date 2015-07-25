<?php
namespace DesignPatterns\Memento;

use DesignPatterns\Memento\Counter\Memento;

class Counter
{
    /** @var int */
    private $countedToSoFar = 0;

    /**
     * @return int
     */
    public function getNextNumber()
    {
        // @todo Memento Pattern not implemented yet
    }

    /**
     * @return Memento
     */
    public function createMemento()
    {
        // @todo Memento Pattern not implemented yet
    }

    /**
     * @param Memento $memento
     */
    public function setMemento(Memento $memento)
    {
        // @todo Memento Pattern not implemented yet
    }
}
