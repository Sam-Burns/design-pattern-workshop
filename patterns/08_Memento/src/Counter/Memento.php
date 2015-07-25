<?php
namespace DesignPatterns\Memento\Counter;

class Memento
{
    /** @var int */
    private $countedToSoFar = 0;

    /**
     * @param int $countedToSoFar
     */
    public function __construct($countedToSoFar)
    {
        $this->countedToSoFar = $countedToSoFar;
    }

    /**
     * @return int
     */
    public function getCountValue()
    {
        return $this->countedToSoFar;
    }
}
