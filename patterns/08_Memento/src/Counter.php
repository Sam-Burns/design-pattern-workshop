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
        return ++$this->countedToSoFar;
    }

    /**
     * @return Memento
     */
    public function createMemento()
    {
        return new Memento($this->countedToSoFar);
    }

    /**
     * @param Memento $memento
     */
    public function setMemento(Memento $memento)
    {
        $this->countedToSoFar = $memento->getCountValue();
    }
}
