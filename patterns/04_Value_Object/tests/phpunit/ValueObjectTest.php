<?php
namespace DesignPatterns\ValueObject\Test;

use DesignPatterns\ValueObject\Money;
use PHPUnit_Framework_TestCase as TestCase;

class ValueObjectTest extends TestCase
{
    /** @var Money */
    private $amountOfMoney;

    public function setUp()
    {
        $this->amountOfMoney = new Money(2.99, '£');
    }

    public function testGetCurrencySymbol()
    {
        // ACT
        $result = $this->amountOfMoney->getCurrencySymbol();

        // ASSERT
        $this->assertEquals('£', $result);
    }

    public function testGetFloatValue()
    {

        // ACT
        $result = $this->amountOfMoney->getFloatValue();

        // ASSERT
        $this->assertEquals(2.99, $result);
    }

    public function testToString()
    {
        $this->markTestSkipped('Value Object not implemented yet');

        // ACT
        $result = (string) $this->amountOfMoney;

        // ASSERT
        $this->assertEquals('£2.99', $result);
    }
}
