<?php
namespace DesignPatterns\Facade\Maths;

class Divider
{
    /**
     * @param int $int1
     * @param int $int2
     * @return float
     */
    public function divide($int1, $int2)
    {
        return (float) $int1 / (float) $int2;
    }
}
