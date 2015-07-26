<?php
namespace DesignPatterns\Observer\Observer;

use DesignPatterns\Observer\Observer;

class Follower implements Observer
{
    /** @var string[] */
    private $tweetsOnWall = [];

    /**
     * @param string $tweetText
     */
    public function notify($tweetText)
    {
        $this->tweetsOnWall[] = $tweetText;
    }

    /**
     * @return string[]
     */
    public function getTweetsOnWall()
    {
        return $this->tweetsOnWall;
    }
}
