<?php
namespace DesignPatterns\Decorator\Test;

use DesignPatterns\Decorator\DataGetter;
use DesignPatterns\Decorator\DataGetterBuilder;
use PHPUnit_Framework_TestCase as TestCase;

class DecoratorTest extends TestCase
{
    public function testDecoratorPatternClassesArrangedCorrectly()
    {
        $this->markTestSkipped('Decorator Pattern not implemented yet');

        // ARRANGE
        $dataGetterBuilder = new DataGetterBuilder();
        $dataGetter = $dataGetterBuilder->buildDecoratorPatternObjectGraph();

        // ACT
        $result1 = $dataGetter->getNameOfDesignPattern();
        $result2 = $dataGetter->getNameOfDesignPattern();

        // ASSERT
        $this->assertEquals('decorator',                      $result1);
        $this->assertEquals('decorator <- Came from cache!!', $result2);
    }
}
