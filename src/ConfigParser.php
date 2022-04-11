<?php

namespace ItsKiani\ConfigParser;

use ItsKiani\ConfigParser\Caching\Cached;

class ConfigParser
{
    use Cached;

    protected array $processed;

    public function process($key){
        if($this->selection($key)){
            return $this->inCache($key);
        }

        return $this->addIntoCache(
            $key,
            $this->selection($key) ?? null
        );
    }

    protected function selection($key)
    {
        $filtered = $this->processed;

        foreach (explode('.', $key) as $part){
            if ($this->isExists($filtered, $part)){
                $filtered = $filtered[$part];
                continue;
            }
            return;
        }

        return $filtered;
    }

    protected function isExists(array $processed, $key) :bool
    {
        return array_key_exists($key, $processed);
    }

}
