<?php
namespace DesignPatterns\Factory\Test;

use DesignPatterns\Builder\Pub\Barman;
use DesignPatterns\Builder\Pub\PubSign;
use DesignPatterns\Builder\Pub\Staff;
use DesignPatterns\Builder\PubBuilder;
use PHPUnit_Framework_TestCase as TestCase;

class BuilderPatternTest extends TestCase
{
    public function testGettingPub()
    {
        $this->markTestSkipped('Builder pattern not implemented yet');

        // ARRANGE
        $pubBuilder = new PubBuilder();

        $barman = new Barman();
        $staff = new Staff($barman);
        $pubSign = new PubSign();
        $numberOfTables = 2;

        // ACT
        $result = $pubBuilder->buildPub($staff, $numberOfTables, $pubSign);

        // ASSERT
        $this->assertTrue($result->hasTablesSignAndBarman());
    }
}
