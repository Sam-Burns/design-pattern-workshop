<?php
namespace DesignPatterns\Builder;

use DesignPatterns\Builder\Pub\PubSign;
use DesignPatterns\Builder\Pub\Staff;
use DesignPatterns\Builder\Pub\Barman;

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
        $pub = new Pub($numberOfTables, $staff->getBarman());
        $pub->setPubsign($pubSign);

        return $pub;
    }
}
