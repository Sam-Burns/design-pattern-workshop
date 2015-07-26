<?php
namespace DesignPatterns\Observer;

interface Observer
{
    /**
     * @param string $tweetText
     */
    public function notify($tweetText);
}
