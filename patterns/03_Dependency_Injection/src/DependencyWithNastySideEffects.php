<?php
namespace DesignPatterns\DependencyInjection;

class DependencyWithNastySideEffects
{
    public function __construct()
    {
        echo "Trying to connect to a DB that doesn't exist on dev...\n";
        exit;
    }

    /**
     * @return DependencyWithNastySideEffects
     */
    public static function getInstance()
    {
        return new self();
    }
}
