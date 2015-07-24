<?php
namespace DesignPatterns\Decorator\Caching;

interface CacheAdapter
{
    /**
     * @param string $key
     * @return string
     */
    public function getValueFromCache($key);

    /**
     * @param string $key
     * @param string $value
     */
    public function setValueInCache($key, $value);

    /**
     * @param string $key
     * @return boolean
     */
    public function cacheHasValue($key);
}
