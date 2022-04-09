<?php

namespace ItsKiani\ConfigParser\Caching;

trait Cached
{
    protected array $cached;

    protected function addIntoCache($key, $val)
    {
        $this->cached[$key] = $val;
        return $val;
    }

    protected function existsInCache($key) :bool
    {
        return isset($this->cache[$key]);
    }


    protected function inCache($key)
    {
        return $this->cache[$key];
    }
}