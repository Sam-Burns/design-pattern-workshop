<?php
namespace DesignPatterns\PubSub;

interface Publisher
{
    /**
     * @param EventBus $eventBus
     */
    public function registerEventBus(EventBus $eventBus);
}