<?php
namespace DesignPatterns\Visitor\Visitor;

use DesignPatterns\Visitor\ListOfNumbers;
use DesignPatterns\Visitor\Visitor;

class PrimeDeleter implements Visitor
{
    /**
     * @param ListOfNumbers $listOfNumbers
     */
    public function visit(ListOfNumbers $listOfNumbers)
    {
        // @todo Implement Visitor Pattern
    }

    /**
     * @param int $possiblePrime
     * @return bool
     */
    private function isPrime($possiblePrime)
    {
        if ($possiblePrime == 1) {
            return false;
        }

        for ($possibleFactor = 2; $possibleFactor < $possiblePrime; $possibleFactor++) {
            if ($possiblePrime % $possibleFactor == 0) {
                return false;
            }
        }
        return true;
    }
}
