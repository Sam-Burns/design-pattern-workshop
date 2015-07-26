<?php
namespace DesignPatterns\NullObject\Test;

use DesignPatterns\NullObject\ClassThatDoesLogging;
use DesignPatterns\NullObject\Logger\FileLogger;
use PHPUnit_Framework_TestCase as TestCase;

class NullObjectPatternTest extends TestCase
{
    public function testCreationOfObjectGraph()
    {
        $this->markTestSkipped('Null Object Pattern not implemented yet');

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
        $logger = new FileLogger();
        return new ClassThatDoesLogging($logger);
    }
}
