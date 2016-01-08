<?php
namespace DesignPatterns\Visitor\Test;

use DesignPatterns\Visitor\ListOfNumbers;
use DesignPatterns\Visitor\Visitor\PrimeDeleter;
use DesignPatterns\Visitor\Visitor\SquareDeleter;
use DesignPatterns\Visitor\Visitor;
use PHPUnit_Framework_TestCase as TestCase;

class VisitorTest extends TestCase
{
    public function testVisitorPattern()
    {
        // ARRANGE
        $subject = new ListOfNumbers(1, 20);
        $visitors = [new PrimeDeleter(), new SquareDeleter()];

        // ACT
        foreach ($visitors as $visitor) {
            /** @var $visitor Visitor */
            $visitor->visit($subject);
        }

        // ASSERT
        $this->assertEquals(
            [6, 8, 10, 12, 14, 15, 18, 20],
            $subject->getNumbersNotYetDeleted()
        );
    }
}
