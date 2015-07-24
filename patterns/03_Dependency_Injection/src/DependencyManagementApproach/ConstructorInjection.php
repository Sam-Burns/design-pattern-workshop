<?php
namespace DesignPatterns\DependencyInjection;

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
