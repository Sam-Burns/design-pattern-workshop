<?php
namespace DesignPatterns\Decorator\DataGetter;

use DesignPatterns\Decorator\Caching\CacheAdapter;
use DesignPatterns\Decorator\DataGetter;

class DataGetterCacheDecorator implements DataGetter
{
    /** @var DataGetter */
    private $nextSource;

    /** @var CacheAdapter */
    private $cacheAdapter;

    /**
     * @param DataGetter $nextSource
     * @param CacheAdapter $cacheAdapter
     */
    public function __construct(DataGetter $nextSource, CacheAdapter $cacheAdapter)
    {
        $this->nextSource = $nextSource;
        $this->cacheAdapter = $cacheAdapter;
    }

    /**
     * @return string
     */
    public function getNameOfDesignPattern()
    {
        if ($this->cacheAdapter->cacheHasValue('pattern-name')) {
            return $this->cacheAdapter->getValueFromCache('pattern-name') . ' <- Came from cache!!';
        } else {
            $data = $this->nextSource->getNameOfDesignPattern();
            $this->cacheAdapter->setValueInCache('pattern-name', $data);
            return $data;
        }
    }
}
