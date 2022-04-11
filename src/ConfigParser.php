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

}
