<?php
namespace DesignPatterns\Prototype;

class Thing
{
    /**
     * @var int
     */
    private static $loadingDelaySeconds = 0.1;

    public function __construct()
    {
        sleep(static::$loadingDelaySeconds);
    }

    /**
     * @return int
     */
    public function getNumberOne()
    {
        return 1;
    }
}
