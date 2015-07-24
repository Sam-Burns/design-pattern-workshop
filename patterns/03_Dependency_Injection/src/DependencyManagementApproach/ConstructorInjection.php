<?php
namespace DesignPatterns\DependencyInjection\DependencyManagementApproach;

use DesignPatterns\DependencyInjection\DependencyWithNastySideEffects;
use DesignPatterns\DependencyInjection\DependencyManagementApproach;

class ConstructorInjection implements DependencyManagementApproach
{
    /** @var DependencyWithNastySideEffects */
    private $dependency;

    /**
     * @param DependencyWithNastySideEffects $dependency
     */
    public function __construct(DependencyWithNastySideEffects $dependency)
    {
        $this->dependency = $dependency;
    }

    /**
     * @return bool
     */
    public function hasMockDependency()
    {
        return $this->dependency instanceof DependencyWithNastySideEffects;
    }
}
