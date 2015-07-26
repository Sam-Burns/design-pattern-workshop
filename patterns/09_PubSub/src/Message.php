<?php
namespace DesignPatterns\PubSub;

interface Message
{
    const MESSAGE_TOPIC_PRIME  = 'prime';
    const MESSAGE_TOPIC_SQUARE = 'square';

    /**
     * @return string
     */
    public function getTopic();

    /**
     * @return int
     */
    public function getBody();
}
