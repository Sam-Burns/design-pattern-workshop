<?php
namespace DesignPatterns\Decorator;

use DesignPatterns\Decorator\Caching\InMemoryCache;
use DesignPatterns\Decorator\DataGetter\DataFromFileGetter;
use DesignPatterns\Decorator\DataGetter\DataGetterCacheDecorator;

class DataGetterBuilder
{
    /**
     * @return DataGetter
     */
    public function buildDecoratorPatternObjectGraph()
    {
        return new DataGetterCacheDecorator(new DataFromFileGetter(), new InMemoryCache());
    }

    /**
     * @return DataGetter
     */
    public function buildObjectGraphWithNoCacheDecorator()
    {
        //return new DataGetterCacheDecorator(new DataFromFileGetter(), new DataGetterCacheDecorator());
        return new DataFromFileGetter();
    }
}
