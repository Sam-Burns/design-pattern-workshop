<?php
namespace DesignPatterns\PubSub\Test;

use DesignPatterns\PubSub\EventBus;
use DesignPatterns\PubSub\Message;
use DesignPatterns\PubSub\Publisher\NumberPublisher;
use DesignPatterns\PubSub\Subscriber\PrimeNumberSubscriber;
use DesignPatterns\PubSub\Subscriber\SquareNumberSubscriber;
use DesignPatterns\PubSub\Publisher;
use DesignPatterns\PubSub\Subscriber;
use PHPUnit_Framework_TestCase as TestCase;

class PubSubTest extends TestCase
{
    /**
     * @param EventBus     $eventBus
     * @param Publisher[]  $publishers
     * @param Subscriber[] $subscribers
     */
    private function registerPublishersAndSubscribers(EventBus $eventBus, $publishers, $subscribers)
    {
        // @todo Pub/Sub Pattern test not implemented yet
    }

    public function testPubSub()
    {
        $this->markTestSkipped('Pub/Sub Pattern tests not implemented yet');

        // ARRANGE

        // Create objects for design pattern
        $eventBus = new EventBus();

        $primeSubscriber = new PrimeNumberSubscriber();
        $squareSubscriber = new SquareNumberSubscriber();

        $numberPublisher = new NumberPublisher();

        // Register everything with the Event Bus
        $this->registerPublishersAndSubscribers($eventBus, [$numberPublisher], [$primeSubscriber, $squareSubscriber]);

        // ACT
        $numberPublisher->scanNumberRange(1, 100);

        // ASSERT
        $this->assertEquals(
            [1, 4, 9, 16, 25, 36, 49, 64, 81, 100],
            $squareSubscriber->getAllSquareNumbers()
        );

        $this->assertEquals(
            [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97],
            $primeSubscriber->getAllPrimeNumbers()
        );
    }
}
