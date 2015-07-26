<?php
namespace DesignPatterns\PubSub;

class EventBus
{
    /** @var array */
    private $subscribers;

    public function __construct()
    {
        $this->subscribers = [
            Message::MESSAGE_TOPIC_PRIME  => [],
            Message::MESSAGE_TOPIC_SQUARE => [],
        ];
    }

    /**
     * @param Publisher $publisher
     */
    public function registerPublisher(Publisher $publisher)
    {
        $publisher->registerEventBus($this);
    }

    /**
     * @param string     $topic
     * @param Subscriber $subscriber
     */
    public function registerSubscriber($topic, Subscriber $subscriber)
    {
        $this->subscribers[$topic][] = $subscriber;
    }

    /**
     * @param Message $message
     */
    public function receivePublishedMessage(Message $message)
    {
        $topic = $message->getTopic();
        $body = $message->getBody();

        foreach ($this->subscribers[$topic] as $subscriber) {
            /** @var $subscriber Subscriber */
            $subscriber->receiveMessage($topic, $body);
        }
    }
}
