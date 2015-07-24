<?php
namespace DesignPatterns\Factory;

class NumberFactory
{
    /**
     * @param int $intValue
     * @return Number
     */
    public function getNumberObjectForIntValue($intValue)
    {
        if ($intValue % 2) {
            return new OddNumber($intValue);
        } else {
            return new EvenNumber($intValue);
        }
    }
}
