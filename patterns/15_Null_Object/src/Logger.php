<?php
namespace DesignPatterns\NullObject;

interface Logger
{
    /**
     * @param $infoToLog
     */
    public function info($infoToLog);
}