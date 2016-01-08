<?php
namespace DesignPatterns\NullObject\Logger;

use DesignPatterns\NullObject\Logger;

class NullLogger implements Logger
{
    public function info($infoToLog)
    {
    }
}
