<?php
namespace DesignPatterns\Immutability\Test;

use DesignPatterns\Immutability\Money;
use PHPUnit_Framework_TestCase as TestCase;

class ImmutabilityTest extends TestCase
{
    public function testWithVatAdded()
    {

        // ARRANGE
        $money = Money::constructFromFloatValueInPounds(10.0);

        // ACT
        $moneyPlusVat = $money->withVatAdded();

        // ASSERT
        // Object was created
        $this->assertInstanceOf('\DesignPatterns\Immutability\Money', $moneyPlusVat);
        $this->assertEquals(12.0, $moneyPlusVat->getFloatValue());
        // Original object was not mutated
        $this->assertEquals(10.0, $money->getFloatValue());
    }
}
