<?php

namespace ItsKiani\ConfigParser\Tests;

use ItsKiani\ConfigParser\Formats\FormattedWithArray;

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
