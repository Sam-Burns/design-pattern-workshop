<?php
namespace DesignPatterns\PubSub\Subscriber;

use DesignPatterns\PubSub\Subscriber;

class PrimeNumberSubscriber implements Subscriber
{
    /** @var int[] */
    private $primeNumbers = [];

    /**
     * @param string $topic
     * @param int    $body
     */
    public function receiveMessage($topic, $body)
    {
        $this->primeNumbers[] = $body;
    }

    /**
     * @return int[]
     */
    public function getAllPrimeNumbers()
    {
        return $this->primeNumbers;
    }
}
