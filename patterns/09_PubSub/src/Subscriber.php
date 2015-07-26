<?php
namespace DesignPatterns\PubSub;

interface Subscriber
{
    /**
     * @param string $topic
     * @param int    $body
     */
    public function receiveMessage($topic, $body);
}
