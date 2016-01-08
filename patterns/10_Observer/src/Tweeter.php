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
        $this->observers[] = $observer;
    }

    /**
     * @param string $tweetText
     */
    public function notifyObservers($tweetText)
    {
        foreach ($this->observers as $observer) {
            $observer->notify($tweetText);
        }
    }
}
