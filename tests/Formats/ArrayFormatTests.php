<?php

namespace ItsKiani\ConfigParser\Tests;

use ItsKiani\ConfigParser\Formats\FormattedWithArray;
use ItsKiani\ConfigParser\Tests\TestCase;

class ArrayFormatTests extends TestCase
{
    protected object $arrayFormat;

    protected function set_up()
    {
        $this->arrayFormat = new FormattedWithArray();
    }

    /**
     *
     * @test
     */
    public function parseArrayFormat()
    {

    }
}
