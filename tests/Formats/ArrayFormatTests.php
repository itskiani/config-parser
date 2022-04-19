<?php

namespace ItsKiani\ConfigParser\Tests\Formats;

use ItsKiani\ConfigParser\Formats\FormattedWithArray;
use ItsKiani\ConfigParser\Tests\TestCase;

class ArrayFormatTests extends TestCase
{
    protected object $arrayFormat;

    protected function set_up()
    {
        $this->arrayFormat = new FormattedWithArray([
            'app' => __DIR__.'/../Mocks/Config/app.php',
        ]);
    }

    /**
     *
     * @test
     */
    public function parseArrayFormat()
    {
    }
}
