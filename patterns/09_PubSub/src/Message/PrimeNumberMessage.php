<?php
namespace DesignPatterns\PubSub\Message;

use DesignPatterns\PubSub\Message;

class PrimeNumberMessage implements Message
{
    /** @var int */
    private $body;

    /**
     * @param $body
     */
    public function __construct($body)
    {
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getTopic()
    {
        return Message::MESSAGE_TOPIC_PRIME;
    }

    /**
     * @return int
     */
    public function getBody()
    {
        return $this->body;
    }
}
