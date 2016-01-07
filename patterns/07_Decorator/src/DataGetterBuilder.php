<?php
namespace DesignPatterns\Decorator;

use DesignPatterns\Decorator\DataGetter\DataGetterCacheDecorator;
use DesignPatterns\Decorator\Caching\InMemoryCache;
use DesignPatterns\Decorator\DataGetter\DataFromFileGetter;

class DataGetterBuilder
{
    /**
     * @return DataGetter
     */
    public function buildDecoratorPatternObjectGraph()
    {
        $cacheAdapter = new InMemoryCache();

        $nextSource = new DataFromFileGetter();
        $dataGetter = new DataGetterCacheDecorator($nextSource, $cacheAdapter);
        return $dataGetter;
    }

    /**
     * @return DataGetter
     */
    public function buildObjectGraphWithNoCacheDecorator()
    {
        // @todo Implement
        $dataGetter = new DataFromFileGetter();
        return $dataGetter;
    }
}
