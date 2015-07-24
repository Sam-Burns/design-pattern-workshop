<?php
namespace DesignPatterns\Builder;

use DesignPatterns\Builder\Pub\PubSign;
use DesignPatterns\Builder\Pub\Staff;

class PubBuilder
{
    /**
     * @param Staff   $staff
     * @param int     $numberOfTables
     * @param PubSign $pubSign
     * @return Pub
     */
    public function buildPub(Staff $staff, $numberOfTables, PubSign $pubSign)
    {
        // @todo
    }
}
