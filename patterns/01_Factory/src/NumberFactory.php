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
        $odd = $intValue % 2 ;

        if ($odd)
            return new OddNumber($intValue);

        return new EvenNumber($intValue);

    }
}
