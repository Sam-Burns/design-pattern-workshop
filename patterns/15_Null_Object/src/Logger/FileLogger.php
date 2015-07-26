<?php
namespace DesignPatterns\NullObject\Logger;

use DesignPatterns\NullObject\Logger;

class FileLogger implements Logger
{
    /**
     * @param $infoToLog
     */
    public function info($infoToLog)
    {
        echo 'Arg!!';
        exit;
    }
}
