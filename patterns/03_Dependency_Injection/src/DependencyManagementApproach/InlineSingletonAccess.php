<?php
namespace DesignPatterns\DependencyInjection\DependencyManagementApproach;

use DesignPatterns\DependencyInjection\DependencyWithNastySideEffects;
use DesignPatterns\DependencyInjection\DependencyManagementApproach;

class InlineSingletonAccess implements DependencyManagementApproach
{
    /** @var DependencyWithNastySideEffects */
    private $dependency;

    public function retrieveDependencies()
    {
        $this->dependency = DependencyWithNastySideEffects::getInstance();
    }

    /**
     * @return bool
     */
    public function hasMockDependency()
    {
        return $this->dependency instanceof DependencyWithNastySideEffects;
    }
}
