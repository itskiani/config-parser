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


}
