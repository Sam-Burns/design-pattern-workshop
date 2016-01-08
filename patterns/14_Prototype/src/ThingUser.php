<?php
namespace DesignPatterns\Prototype;

class ThingUser
{
    /** @var Thing */
    private $prototypeThing;

    /**
     * @param Thing $thing
     */
    public function __construct(Thing $thing)
    {
        $this->prototypeThing = $thing;
    }

    /**
     * @return int
     */
    public function getNumber1000()
    {
        $things = $this->getOneThousandThings();

        $total = 0;

        foreach ($things as $thing) {
            $total += $thing->getNumberOne();
        }

        return $total;
    }

    /**
     * @return Thing[]
     */
    private function getOneThousandThings()
    {
        $things = [];

        for($i=0; $i<1000; $i++) {
            $things[] = clone $this->prototypeThing;
        }

        return $things;
    }
}
