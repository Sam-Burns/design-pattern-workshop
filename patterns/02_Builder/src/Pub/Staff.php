<?php
namespace DesignPatterns\Builder\Pub;

class Staff
{
    /** @var Barman */
    private $barman;

    /**
     * @param Barman $barman
     */
    public function __construct(Barman $barman)
    {
        $this->barman = $barman;
    }

    /**
     * @return Barman
     */
    public function getBarman()
    {
        return $this->barman;
    }
}
