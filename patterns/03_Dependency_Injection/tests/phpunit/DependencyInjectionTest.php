<?php
namespace DesignPatterns\DependencyInjection\Test;

use DesignPatterns\DependencyInjection\DependencyManagementApproach\ConstructorInjection;
use DesignPatterns\DependencyInjection\DependencyManagementApproach\SetterInjection;
use PHPUnit_Framework_TestCase as TestCase;
use PHPUnit_Framework_MockObject_MockObject as Mock;
use DesignPatterns\DependencyInjection\DependencyWithNastySideEffects;

class DependencyInjectionTest extends TestCase
{
    /** @var DependencyWithNastySideEffects|Mock */
    private $mockDependency;

    public function setUp()
    {
        $this->mockDependency = $this->getMock(
            '\DesignPatterns\DependencyInjection\DependencyWithNastySideEffects', [], [], '', false, false
        );
    }

    public function testClassWithConstructorInjection()
    {
        $object = new ConstructorInjection($this->mockDependency);

        $this->assertInstanceOf(
            '\DesignPatterns\DependencyInjection\DependencyManagementApproach\ConstructorInjection',
            $object
        );

        $this->assertTrue($object->hasMockDependency());
    }

    public function testClassWithSetterInjection()
    {
        $object = new SetterInjection();
        $object->setDependency($this->mockDependency);

        $this->assertInstanceOf(
            '\DesignPatterns\DependencyInjection\DependencyManagementApproach\SetterInjection',
            $object
        );

        $this->assertTrue($object->hasMockDependency());
    }

    public function testClassWithInlineInstantiation()
    {
        $this->assertTrue((bool)"Code is too unmaintainable!");

        // @todo If you can...

//        $this->assertInstanceOf(
//            '\DesignPatterns\DependencyInjection\DependencyManagementApproach\InlineInstantiation',
//            $object
//        );
//
//        $this->assertTrue($object->hasMockDependency());
    }

    public function testClassWithInlineSingletonAccess()
    {
        $this->assertTrue((bool)"Code is too unmaintainable!");

        // @todo If you can...

//        $this->assertInstanceOf(
//            '\DesignPatterns\DependencyInjection\DependencyManagementApproach\InlineSingletonAccess',
//            $object
//        );
//
//        $this->assertTrue($object->hasMockDependency());
    }
}
