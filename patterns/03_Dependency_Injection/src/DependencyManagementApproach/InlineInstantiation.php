<?php
namespace DesignPatterns\DependencyInjection\DependencyManagementApproach;

use DesignPatterns\DependencyInjection\DependencyWithNastySideEffects;
use DesignPatterns\DependencyInjection\DependencyManagementApproach;

class InlineInstantiation implements DependencyManagementApproach
{
    /** @var DependencyWithNastySideEffects */
    private $dependency;

    public function retrieveDependencies()
    {
        $this->dependency = new DependencyWithNastySideEffects();
    }

    /**
     * @return bool
     */
    public function hasMockDependency()
    {
        return $this->dependency instanceof DependencyWithNastySideEffects;
    }
}
