<?php
namespace DesignPatterns\Visitor;

class ListOfNumbers
{
    /** @var int[] */
    private $numbersNotDeleted;

    /**
     * @param int $min
     * @param int $max
     */
    public function __construct($min, $max)
    {
        for ($int = $min; $int <= $max; $int++) {
            $this->numbersNotDeleted[$int] = $int;
        }
    }

    /**
     * @param int $numberToDelete
     */
    public function deleteNumber($numberToDelete)
    {
        $this->numbersNotDeleted[$numberToDelete] = null;
    }

    /**
     * @return int[]
     */
    public function getNumbersNotYetDeleted()
    {
        $filteredArray = array_filter(
            $this->numbersNotDeleted,
            function ($number) {
                return $number !== null;
            }
        );
        return array_values($filteredArray);
    }
}
