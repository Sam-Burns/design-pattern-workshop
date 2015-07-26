<?php
namespace DesignPatterns\Visitor;

interface Visitor
{
    /**
     * @param ListOfNumbers $listOfNumbers
     */
    public function visit(ListOfNumbers $listOfNumbers);
}
