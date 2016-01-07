<?php
namespace DesignPatterns\Factory\Test;

use DesignPatterns\Factory\NumberFactory;
use PHPUnit_Framework_TestCase as TestCase;

class FactoryPatternTest extends TestCase
{
    /** @var  NumberFactory */
    private $numberFactory;

    public function setUp()
    {
        $this->numberFactory = new NumberFactory();
    }

    public function testGettingEvenNumber()
    {
        // ARRANGE
        $numberAsInt = 2;

        // ACT
        $result = $this->numberFactory->getNumberObjectForIntValue($numberAsInt);

        // ASSERT
        $this->assertInstanceOf('\DesignPatterns\Factory\EvenNumber', $result);
        $this->assertEquals(2, $result->getValue());
    }

    public function testGettingOddNumber()
    {
        // ARRANGE
        $numberAsInt = 1;

        // ACT
        $result = $this->numberFactory->getNumberObjectForIntValue($numberAsInt);

        // ASSERT
        $this->assertInstanceOf('\DesignPatterns\Factory\OddNumber', $result);
        $this->assertEquals(1, $result->getValue());
    }
}
