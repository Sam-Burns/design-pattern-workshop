<?php
namespace DesignPatterns\Facade\Maths;

class Subtractor
{
    /**
     * @param int $int1
     * @param int $int2
     * @return int
     */
    public function subtract($int1, $int2)
    {
        return $int1 - $int2;
    }
}
