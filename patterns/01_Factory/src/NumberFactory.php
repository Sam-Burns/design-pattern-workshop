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
        if ($intValue % 2 == 0) {
            $object = new EvenNumber($intValue);
        } else {
            $object = new OddNumber($intValue);
        }
        return $object;
    }
}
