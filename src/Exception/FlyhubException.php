<?php

namespace Xenon\Flyhub\Exception;

use Exception;

class FlyhubException extends Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}