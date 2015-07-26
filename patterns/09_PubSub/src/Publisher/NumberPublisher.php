<?php
namespace DesignPatterns\PubSub\Publisher;

use DesignPatterns\PubSub\Message\PrimeNumberMessage;
use DesignPatterns\PubSub\Message\SquareNumberMessage;
use DesignPatterns\PubSub\Publisher;
use DesignPatterns\PubSub\EventBus;

class NumberPublisher implements Publisher
{
    /** @var EventBus */
    private $eventBus;

    /**
     * @param EventBus $eventBus
     */
    public function registerEventBus(EventBus $eventBus)
    {
        $this->eventBus = $eventBus;
    }

    /**
     * @param int $min
     * @param int $max
     */
    public function scanNumberRange($min, $max)
    {
        for ($numberBeingScanned = $min; $numberBeingScanned <= $max; $numberBeingScanned++) {

            if ($this->isPrime($numberBeingScanned)) {
                $primeMessage = new PrimeNumberMessage($numberBeingScanned);
                $this->eventBus->receivePublishedMessage($primeMessage);
            }

            if ($this->isSquare($numberBeingScanned)) {
                $squareMessage = new SquareNumberMessage($numberBeingScanned);
                $this->eventBus->receivePublishedMessage($squareMessage);
            }
        }
    }

    /**
     * @param int $possiblePrime
     * @return bool
     */
    private function isPrime($possiblePrime)
    {
        if ($possiblePrime == 1) {
            return false;
        }

        for ($possibleFactor = 2; $possibleFactor < $possiblePrime; $possibleFactor++) {
            if ($possiblePrime % $possibleFactor == 0) {
                return false;
            }
        }
        return true;
    }

    /**
     * @param int $possibleSquareNo
     * @return bool
     */
    private function isSquare($possibleSquareNo)
    {
        for ($possibleSquareRoot = 1; $possibleSquareRoot <= $possibleSquareNo; $possibleSquareRoot++) {
            if ($possibleSquareNo == $possibleSquareRoot * $possibleSquareRoot) {
                return true;
            }
        }
        return false;
    }
}
