<?php
namespace DesignPatterns\NullObject\Logger;

use DesignPatterns\NullObject\Logger;

class NullLogger implements Logger
{
    /**
     * @param $infoToLog
     */
    public function info($infoToLog)
    {
    }
}
