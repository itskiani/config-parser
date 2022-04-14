<?php

namespace ItsKiani\ConfigParser\Formats;

use ItsKiani\ConfigParser\Contracts\Parser;
use ItsKiani\ConfigParser\Exceptions\FileNotFoundException;

class FormattedWithArray implements Parser
{
    protected array $files;

    public function __construct(array $files)
    {
        $this->files = $files;
    }

    public function parse(): array
    {
        $parsed = [];

        foreach ($this->files as $key => $val){
            try {
                $parsed[$key] = $val;
            }catch (FileNotFoundException $e){
                echo $e->getMessage().' '.$e->getFile().' '.$e->getLine().PHP_EOL;
            }
        }

        return $parsed;
    }
}
