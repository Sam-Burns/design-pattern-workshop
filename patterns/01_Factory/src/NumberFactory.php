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
        // Check if $intValue is even
        if ($intValue % 2 == 0) {
            // Return evenNumber class
            return new EvenNumber($intValue);
        } else {
            // Return oddNumber class
            return new OddNumber($intValue);
        }
    }
}
