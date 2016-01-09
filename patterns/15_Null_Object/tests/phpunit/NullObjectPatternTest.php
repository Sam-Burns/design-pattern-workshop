<?php
namespace DesignPatterns\NullObject\Test;

use DesignPatterns\NullObject\ClassThatDoesLogging;
use DesignPatterns\NullObject\Logger\FileLogger;
use DesignPatterns\NullObject\Logger\NullLogger;
use PHPUnit_Framework_TestCase as TestCase;

class NullObjectPatternTest extends TestCase
{
    public function testCreationOfObjectGraph()
    {
        // ARRANGE
        $classThatDoesLogging = $this->getClassThatDoesLogging();

        // ACT
        $classThatDoesLogging->doSomethingAndLogIt();

        // ASSERT
        // Got this far without error
    }

    /**
     * @return ClassThatDoesLogging
     */
    private function getClassThatDoesLogging()
    {
        // Altered the object graph
        //$logger = new FileLogger();
        $logger = new NullLogger();
        
        return new ClassThatDoesLogging($logger);
    }
}
