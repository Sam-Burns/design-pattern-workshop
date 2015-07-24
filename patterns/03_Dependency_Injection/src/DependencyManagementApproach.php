<?php
namespace DesignPatterns\DependencyInjection;

interface DependencyManagementApproach
{
    /**
     * @return bool
     */
    public function hasMockDependency();
}
