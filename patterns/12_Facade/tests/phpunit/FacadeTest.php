<?php
namespace DesignPatterns\Facade\Test;

use DesignPatterns\Facade\Maths\Adder;
use DesignPatterns\Facade\Maths\Divider;
use DesignPatterns\Facade\Maths\Multiplier;
use DesignPatterns\Facade\Maths\Subtractor;
use DesignPatterns\Facade\MathsFacade;
use PHPUnit_Framework_TestCase as TestCase;

class FacadeTest extends TestCase
{
    /** @var MathsFacade */
    private $mathsFacade;

    public function setUp()
    {
        $this->mathsFacade = new MathsFacade(
            new Adder(),
            new Subtractor(),
            new Multiplier(),
            new Divider()
        );
    }

    public function testAdding()
    {
        $this->markTestSkipped('Facade Pattern not implemented yet');

        // ACT
        $result = $this->mathsFacade->add(1, 5);

        // ASSERT
        $this->assertEquals(6, $result);
    }

    public function testSubtracting()
    {
        $this->markTestSkipped('Facade Pattern not implemented yet');

        // ACT
        $result = $this->mathsFacade->sub(3, 2);

        // ASSERT
        $this->assertEquals(1, $result);
    }

    public function testMultiplying()
    {
        $this->markTestSkipped('Facade Pattern not implemented yet');

        // ACT
        $result = $this->mathsFacade->multiply(5, 2);

        // ASSERT
        $this->assertEquals(10, $result);
    }

    public function testDividing()
    {
        $this->markTestSkipped('Facade Pattern not implemented yet');

        // ACT
        $result = $this->mathsFacade->divide(6, 3);

        // ASSERT
        $this->assertEquals(2, $result);
    }
}
