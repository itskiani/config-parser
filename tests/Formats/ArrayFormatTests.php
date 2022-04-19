<?php

namespace ItsKiani\ConfigParser\Tests\Formats;

use ItsKiani\ConfigParser\Formats\FormattedWithArray;
use ItsKiani\ConfigParser\Tests\TestCase;

class ArrayFormatTests extends TestCase
{
    protected string $baseUrl = 'http://localhost:8800';
    protected object $arrayFormat;

    protected function setUp(): void
    {
        $this->arrayFormat = new FormattedWithArray([
            'app' => __DIR__.'/../Mocks/Config/app.php',
        ]);
    }

    public function tearDown(): void
    {
        unset($this->arrayFormat);
    }

    /**
     *
     * @test
     */
    public function parseArrayFormat()
    {
    }
}
