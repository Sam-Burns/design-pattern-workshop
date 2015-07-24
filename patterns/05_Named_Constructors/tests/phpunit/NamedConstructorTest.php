<?php
namespace DesignPatterns\NamedConstructor\Test;

use DesignPatterns\NamedConstructor\Money;
use PHPUnit_Framework_TestCase as TestCase;

class NamedConstructorTest extends TestCase
{
    public function testConstructionFromString()
    {
        $this->markTestSkipped('Named Constructors not implemented yet');

        // ARRANGE
        $expectedFloatValue = 2.99;
        $expectedCurrencySymbol = '£';

        // ACT
        $result = Money::constructFromString('£2.99');

        // ASSERT
        $this->assertInstanceOf('\DesignPatterns\ValueObject\Money', $result);
        $this->assertEquals($expectedFloatValue, $result->getFloatValue());
        $this->assertEquals($expectedCurrencySymbol, $result->getCurrencySymbol());
    }

    public function testConstructionFromFloatValueInPounds()
    {
        $this->markTestSkipped('Named Constructors not implemented yet');

        // ARRANGE
        $expectedFloatValue = 2.99;
        $expectedCurrencySymbol = '£';

        // ACT
        $result = Money::constructFromFloatValueInPounds(2.99);

        // ASSERT
        $this->assertInstanceOf('\DesignPatterns\ValueObject\Money', $result);
        $this->assertEquals($expectedFloatValue, $result->getFloatValue());
        $this->assertEquals($expectedCurrencySymbol, $result->getCurrencySymbol());
    }
}
