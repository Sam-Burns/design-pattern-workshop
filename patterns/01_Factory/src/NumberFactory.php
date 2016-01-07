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
        // @todo
        if ($intValue %2 === 0) {
            return new EvenNumber($intValue);
        } else {
            return new OddNumber($intValue);
        }
    }
}
