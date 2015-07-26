<?php
namespace DesignPatterns\Facade\Maths;

class Multiplier
{
    /**
     * @param int $int1
     * @param int $int2
     * @return int
     */
    public function multiply($int1, $int2)
    {
        return $int1 * $int2;
    }
}
