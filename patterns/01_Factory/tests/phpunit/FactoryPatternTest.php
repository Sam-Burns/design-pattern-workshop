<?php
namespace DesignPatterns\Factory\Test;

use DesignPatterns\Factory\NumberFactory;
use PHPUnit_Framework_TestCase as TestCase;

class FactoryPatternTest extends TestCase
{
    public function testGettingEvenNumber()
    {
        // ARRANGE
        $numberFactory = new NumberFactory();
        $numberAsInt = 2;

        // ACT
        $result = $numberFactory->getNumberObjectForIntValue($numberAsInt);

        // ASSERT
        $this->assertInstanceOf('\DesignPatterns\Factory\EvenNumber', $result);
        $this->assertEquals(2, $result->getValue());
    }

    public function testGettingOddNumber()
    {
        // ARRANGE
        $numberFactory = new NumberFactory();
        $numberAsInt = 1;

        // ACT
        $result = $numberFactory->getNumberObjectForIntValue($numberAsInt);

        // ASSERT
        $this->assertInstanceOf('\DesignPatterns\Factory\OddNumber', $result);
        $this->assertEquals(1, $result->getValue());
    }
}
