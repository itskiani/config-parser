<?php

namespace ItsKiani\ConfigParser\Caching;

trait Cached
{
    protected array $cached;

    /**
     * @param $key
     * @param $val
     * @return mixed
     */
    protected function addIntoCache($key, $val)
    {
        $this->cached[$key] = $val;

        return $val;
    }


    /**
     * @param $key
     * @return bool
     */
    protected function existsInCache($key): bool
    {
        return isset($this->cache[$key]);
    }


    /**
     * @param $key
     * @return mixed
     */
    protected function inCache($key)
    {
        return $this->cache[$key];
    }
}
