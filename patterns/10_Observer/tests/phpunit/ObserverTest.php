<?php
namespace DesignPatterns\Observer\Test;

use DesignPatterns\Observer\Observer\Follower;
use DesignPatterns\Observer\Tweeter;
use PHPUnit_Framework_TestCase as TestCase;

class ObserverTest extends TestCase
{
    public function testObserverPattern()
    {
        // ARRANGE
        $tweeter = new Tweeter();
        $follower = new Follower();
        $tweeter->registerObserver($follower);

        // ACT
        $tweeter->doTweet('Hello world!');
        $tweeter->doTweet('Here\'s a picture of my lunch.');

        // ASSERT
        $this->assertEquals(
            ['Hello world!', 'Here\'s a picture of my lunch.'],
            $follower->getTweetsOnWall()
        );
    }
}
