<?php
namespace DesignPatterns\PubSub\Subscriber;

use DesignPatterns\PubSub\Subscriber;

class SquareNumberSubscriber implements Subscriber
{
    /** @var int[] */
    private $squareNumbers = [];

    /**
     * @param string $topic
     * @param int    $body
     */
    public function receiveMessage($topic, $body)
    {
        $this->squareNumbers[] = $body;
    }

    /**
     * @return int[]
     */
    public function getAllSquareNumbers()
    {
        return $this->squareNumbers;
    }
}
