<?php
namespace DesignPatterns\Memento\Counter;

use DesignPatterns\Memento\Counter;

class Caretaker
{
    /**
     * @param Counter $counter
     * @return string[]
     */
    public function doSomeCounting(Counter $counter)
    {
        $output = [];

        $output[] = $counter->getNextNumber(); // 1
        $output[] = $counter->getNextNumber(); // 2
        $output[] = $counter->getNextNumber(); // 3

        $memento = $counter->createMemento();

        $output[] = $counter->getNextNumber(); // 4
        $output[] = $counter->getNextNumber(); // 5

        $counter->setMemento($memento);

        $output[] = $counter->getNextNumber(); // 4
        $output[] = $counter->getNextNumber(); // 5
    }
}
