<?php
namespace DesignPatterns\DependencyInjection;

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
