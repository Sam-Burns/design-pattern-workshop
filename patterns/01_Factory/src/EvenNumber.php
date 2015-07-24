<?php
namespace DesignPatterns\Factory;

class EvenNumber implements Number
{
    /** @var int */
    private $valueAsInt;

    /**
     * @param int $valueAsInt
     */
    public function __construct($valueAsInt)
    {
        $this->valueAsInt = $valueAsInt;
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->valueAsInt;
    }
}
