<?php
namespace DesignPatterns\Facade;

use DesignPatterns\Facade\Maths\Adder;
use DesignPatterns\Facade\Maths\Divider;
use DesignPatterns\Facade\Maths\Multiplier;
use DesignPatterns\Facade\Maths\Subtractor;

class MathsFacade
{
    /** @var Adder */
    private $adder;

    /** @var Subtractor */
    private $subtractor;

    /** @var Multiplier */
    private $multiplier;

    /** @var Divider */
    private $divider;

    /**
     * @param Adder      $adder
     * @param Subtractor $subtractor
     * @param Multiplier $multiplier
     * @param Divider    $divider
     */
    public function __construct(Adder $adder, Subtractor $subtractor, Multiplier $multiplier, Divider $divider)
    {
        $this->adder = $adder;
        $this->subtractor = $subtractor;
        $this->multiplier = $multiplier;
        $this->divider = $divider;
    }

    /**
     * @param int $int1
     * @param int $int2
     * @return int
     */
    public function add($int1, $int2)
    {
        // @todo Implement Facade Pattern
    }

    /**
     * @param int $int1
     * @param int $int2
     * @return int
     */
    public function subtract($int1, $int2)
    {
        // @todo Implement Facade Pattern
    }

    /**
     * @param int $int1
     * @param int $int2
     * @return int
     */
    public function multiply($int1, $int2)
    {
        // @todo Implement Facade Pattern
    }

    /**
     * @param int $int1
     * @param int $int2
     * @return float
     */
    public function divide($int1, $int2)
    {
        // @todo Implement Facade Pattern
    }
}
