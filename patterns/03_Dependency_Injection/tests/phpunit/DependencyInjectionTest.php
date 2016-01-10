<?php
namespace DesignPatterns\DependencyInjection\Test;

use DesignPatterns\DependencyInjection\DependencyManagementApproach\ConstructorInjection;
use DesignPatterns\DependencyInjection\DependencyManagementApproach\InlineInstantiation;
use DesignPatterns\DependencyInjection\DependencyManagementApproach\InlineSingletonAccess;
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

        $this->assertInstanceOf(
            '\DesignPatterns\DependencyInjection\DependencyManagementApproach\SetterInjection',
            $object
        );
        $object->setDependency($this->mockDependency);

        $this->assertTrue($object->hasMockDependency());
    }

    public function testClassWithInlineInstantiation()
    {
        // @todo If you can...

        $this->markTestSkipped('DI exercise not implemented');

        $object = new InlineInstantiation();
        $object->retrieveDependencies();



        $this->assertInstanceOf(
            '\DesignPatterns\DependencyInjection\DependencyManagementApproach\InlineInstantiation',
            $object
        );

        $this->assertTrue($object->hasMockDependency());
    }

    public function testClassWithInlineSingletonAccess()
    {
        // @todo If you can...

        $this->markTestSkipped('DI exercise not implemented');

        $object = new InlineSingletonAccess();
        $object->retrieveDependencies();


        $this->assertInstanceOf(
            '\DesignPatterns\DependencyInjection\DependencyManagementApproach\InlineSingletonAccess',
            $object
        );

        $this->assertTrue($object->hasMockDependency());
    }
}
