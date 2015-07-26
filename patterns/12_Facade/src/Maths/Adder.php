<?php
namespace DesignPatterns\Facade\Maths;

class Adder
{
    /**
     * @param int $int1
     * @param int $int2
     * @return int
     */
    public function add($int1, $int2)
    {
        return $int1 + $int2;
    }
}
