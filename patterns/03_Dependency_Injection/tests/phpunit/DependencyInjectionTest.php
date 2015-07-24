<?php
namespace DesignPatterns\DependencyInjection\Test;

use PHPUnit_Framework_TestCase as TestCase;

class DependencyInjectionTest extends TestCase
{
    private $mockDependency;

    public function setUp()
    {
        $this->mockDependency = $this->getMock(
            '\DesignPatterns\DependencyInjection\DependencyWithNastySideEffects', [], [], '', false, false
        );
    }

    public function testClassWithConstructorInjection()
    {
        // @todo If you can...

//        $this->assertInstanceOf(
//            '\DesignPatterns\DependencyInjection\DependencyManagementApproach\ConstructorInjection',
//            $object
//        );
//
//        $this->assertTrue($object->hasMockDependency());
    }

    public function testClassWithSetterInjection()
    {
        // @todo If you can...

//        $this->assertInstanceOf(
//            '\DesignPatterns\DependencyInjection\DependencyManagementApproach\SetterInjection',
//            $object
//        );
//
//        $this->assertTrue($object->hasMockDependency());
    }

    public function testClassWithInlineInstantiation()
    {
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
        // @todo If you can...

//        $this->assertInstanceOf(
//            '\DesignPatterns\DependencyInjection\DependencyManagementApproach\InlineSingletonAccess',
//            $object
//        );
//
//        $this->assertTrue($object->hasMockDependency());
    }
}
