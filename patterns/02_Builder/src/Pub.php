<?php
namespace DesignPatterns\Builder;

use DesignPatterns\Builder\Pub\Barman;
use DesignPatterns\Builder\Pub\PubSign;

class Pub
{
    /** @var int */
    private $numberOfTables;

    /** @var PubSign */
    private $pubSign;

    /** @var Barman */
    private $barman;

    /**
     * @param $numberOfTables
     * @param Barman  $barman
     */
    public function __construct($numberOfTables, Barman $barman)
    {
        $this->numberOfTables = $numberOfTables;
        $this->barman = $barman;
    }

    /**
     * @param PubSign $pubSign
     */
    public function setPubsign(PubSign $pubSign)
    {
        $this->pubSign = $pubSign;
    }

    /**
     * @return bool
     */
    public function hasTablesSignAndBarman()
    {
        return
            $this->pubSign instanceof PubSign &&
            $this->barman instanceof Barman &&
            $this->numberOfTables
        ;
    }
}
