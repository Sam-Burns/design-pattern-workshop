<?php
namespace DesignPatterns\NullObject\Test;

use DesignPatterns\NullObject\ClassThatDoesLogging;
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
        // @todo Alter this object graph
        $logger = new NullLogger();
        return new ClassThatDoesLogging($logger);
    }
}
