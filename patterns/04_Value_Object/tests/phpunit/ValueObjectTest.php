<?php
namespace DesignPatterns\ValueObject\Test;

use DesignPatterns\ValueObject\Money;
use PHPUnit_Framework_TestCase as TestCase;

class ValueObjectTest extends TestCase
{
    public function testConstructionFromString()
    {
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

    public function testToString()
    {
        // ARRANGE
        $money = Money::constructFromFloatValueInPounds(2.99001);

        // ACT
        $result = (string) $money;

        // ASSERT
        $this->assertEquals('£2.99', $result);
    }

    public function testWithVatAdded()
    {
        $money = Money::constructFromFloatValueInPounds(10.0);

        $moneyPlusVat = $money->withVatAdded();

        $this->assertEquals(10.0, $money->getFloatValue());
        $this->assertEquals(12.0, $moneyPlusVat->getFloatValue());
    }
}
