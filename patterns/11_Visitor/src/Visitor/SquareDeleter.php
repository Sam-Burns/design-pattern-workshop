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
        {
            $numbers = $listOfNumbers->getNumbersNotYetDeleted();

            foreach ($numbers as $number)
            {
                if($this->isSquare($number))
                    $listOfNumbers->deleteNumber($number);
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
