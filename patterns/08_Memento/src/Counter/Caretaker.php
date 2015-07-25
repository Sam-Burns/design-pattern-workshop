<?php
namespace DesignPatterns\Memento\Counter;

use DesignPatterns\Memento\Counter;

class Caretaker
{
    /**
     * @param Counter $counter
     * @return int[]
     */
    public function doSomeCounting(Counter $counter)
    {
        $output = [];

        // Get some numbers
        $output[] = $counter->getNextNumber(); // 1
        $output[] = $counter->getNextNumber(); // 2
        $output[] = $counter->getNextNumber(); // 3

        // Save state
        $memento = $counter->createMemento();

        try {

            // Get some more numbers
            $output[] = $counter->getNextNumber(); // 4
            $output[] = $counter->getNextNumber(); // 5

            // Error condition
            throw new \Exception();

        } catch (\Exception $exception) {

            // Revert to saved state
            $counter->setMemento($memento);

            // Get some more numbers
            $output[] = $counter->getNextNumber(); // 4
            $output[] = $counter->getNextNumber(); // 5
        }

        return $output;
    }
}
