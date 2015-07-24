<?php
namespace DesignPatterns\Decorator\Caching;

class InMemoryCache implements CacheAdapter
{
    private $cachedData = [];

    /**
     * @param string $key
     * @return string
     */
    public function getValueFromCache($key)
    {
        return $this->cachedData[$key];
    }

    /**
     * @param string $key
     * @param string $value
     */
    public function setValueInCache($key, $value)
    {
        $this->cachedData[$key] = $value;
    }

    /**
     * @param string $key
     * @return boolean
     */
    public function cacheHasValue($key)
    {
        return isset($this->cachedData[$key]);
    }
}