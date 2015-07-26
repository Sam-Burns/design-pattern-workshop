<?php
namespace DesignPatterns\Prototype\Test;

use DesignPatterns\Prototype\Thing;
use DesignPatterns\Prototype\ThingUser;
use PHPUnit_Framework_TestCase as TestCase;

class PrototypeTest extends TestCase
{
    public function testPrototypePattern()
    {
        $this->markTestSkipped('Prototype Pattern not implemented yet');

        // ARRANGE
        $prototypeThing = new Thing();
        $thingUser = new ThingUser($prototypeThing);

        // ACT
        $startTime = microtime(true);
        $result = $thingUser->getNumber1000();
        $millisecondsTaken = microtime(true) - $startTime;

        // ASSERT
        $this->assertEquals(1000, $result);
        $this->assertLessThan(1000, $millisecondsTaken);
    }
}
