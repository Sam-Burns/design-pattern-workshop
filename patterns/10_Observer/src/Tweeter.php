<?php
namespace DesignPatterns\Observer;

class Tweeter
{
    /** @var Observer[] */
    private $observers;

    /**
     * @param $tweetText
     */
    public function doTweet($tweetText)
    {
        $this->notifyObservers($tweetText);
    }

    /**
     * @param Observer $observer
     */
    public function registerObserver(Observer $observer)
    {
        // @todo Implement Observer Pattern
    }

    /**
     * @param string $tweetText
     */
    public function notifyObservers($tweetText)
    {
        // @todo Implement Observer Pattern
    }
}
