<?php
namespace DesignPatterns\Memento\Test;

use DesignPatterns\Memento\Counter;
use DesignPatterns\Memento\Counter\Caretaker;
use PHPUnit_Framework_TestCase as TestCase;

class MementoTest extends TestCase
{
    public function testMementoPattern()
    {
        // ARRANGE
        $caretaker = new Caretaker();
        $counter = new Counter();

        // ACT
        $results = $caretaker->doSomeCounting($counter);

        // ASSERT
        $this->assertEquals(
            [1, 2, 3, 4, 5, 4, 5],
            $results
        );
    }
}
