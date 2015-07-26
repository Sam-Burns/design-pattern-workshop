<?php
namespace DesignPatterns\NullObject;

class ClassThatDoesLogging
{
    /** @var Logger */
    private $logger;

    /**
     * @param Logger $logger
     */
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function doSomethingAndLogIt()
    {
        $this->logger->info('Doing something');
    }
}
