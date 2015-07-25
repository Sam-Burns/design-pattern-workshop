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
        $cacheAdapter = new InMemoryCache();
        $dataFromFileGetter = new DataFromFileGetter();
        $dataGetterCacheDecorator = new DataGetterCacheDecorator($dataFromFileGetter, $cacheAdapter);
        return $dataGetterCacheDecorator;
    }

    /**
     * @return DataGetter
     */
    public function buildObjectGraphWithNoCacheDecorator()
    {
        return new DataFromFileGetter();
    }
}
