<?php
namespace DesignPatterns\Decorator\Test;

use DesignPatterns\Decorator\DataGetter;
use DesignPatterns\Decorator\DataGetterBuilder;
use PHPUnit_Framework_TestCase as TestCase;

class DecoratorTest extends TestCase
{
    /** @var DataGetterBuilder */
    private $dataGetterBuilder;

    public function setUp()
    {
        $this->dataGetterBuilder = new DataGetterBuilder();
    }

    public function testDecoratorPatternClassesArrangedCorrectly()
    {
        //$this->markTestSkipped('Decorator Pattern not implemented yet');

        // ARRANGE
        $dataGetter = $this->dataGetterBuilder->buildDecoratorPatternObjectGraph();

        // ACT
        $results = $this->getResultsOfFirstAndSecondCall($dataGetter);

        // ASSERT
        $this->assertEquals('decorator',                      $results[0]);
        $this->assertEquals('decorator <- Came from cache!!', $results[1]);
    }

    public function testServiceWithNoCacheDecorator()
    {
        //$this->markTestSkipped('Decorator Pattern not implemented yet');

        // ARRANGE
        $dataGetter = $this->dataGetterBuilder->buildObjectGraphWithNoCacheDecorator();

        // ACT
        $results = $this->getResultsOfFirstAndSecondCall($dataGetter);

        // ASSERT
        $this->assertEquals('decorator', $results[0]);
        $this->assertEquals('decorator', $results[1]);
    }

    /**
     * @param DataGetter $dataGetter
     * @return string[]
     */
    private function getResultsOfFirstAndSecondCall(DataGetter $dataGetter)
    {
        return [
            $dataGetter->getNameOfDesignPattern(),
            $dataGetter->getNameOfDesignPattern()
        ];
    }
}
