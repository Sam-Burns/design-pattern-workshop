<?php
namespace DesignPatterns\Visitor\Visitor;

use DesignPatterns\Visitor\ListOfNumbers;
use DesignPatterns\Visitor\Visitor;

class SquareDeleter implements Visitor
{
    /**
     * @param ListOfNumbers $listOfNumbers
     */
    public function visit(ListOfNumbers $listOfNumbers)
    {
        foreach ($listOfNumbers->getNumbersNotYetDeleted() as $numberNotYetDeleted) {
            if ($this->isSquare($numberNotYetDeleted)) {
                $listOfNumbers->deleteNumber($numberNotYetDeleted);
            }
        }
    }

    /**
     * @param int $possibleSquareNo
     * @return bool
     */
    private function isSquare($possibleSquareNo)
    {
        for ($possibleSquareRoot = 1; $possibleSquareRoot <= $possibleSquareNo; $possibleSquareRoot++) {
            if ($possibleSquareNo == $possibleSquareRoot * $possibleSquareRoot) {
                return true;
            }
        }
        return false;
    }
}
