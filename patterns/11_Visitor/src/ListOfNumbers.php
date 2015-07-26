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
            $this->numbersNotDeleted[] = $int;
        }
    }

    /**
     * @param int $numberToDelete
     */
    public function deleteNumber($numberToDelete)
    {
        unset($this->numbersNotDeleted[$numberToDelete]);
    }

    /**
     * @return int[]
     */
    public function getNumbersNotYetDeleted()
    {
        return array_values($this->numbersNotDeleted);
    }
}
