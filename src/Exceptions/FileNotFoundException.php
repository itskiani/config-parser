<?php

namespace ItsKiani\ConfigParser\Exceptions;

use Exception;

class FileNotFoundException extends Exception
{
    protected $message = 'Sorry! file not found';
}
