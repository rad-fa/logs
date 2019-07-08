<?php

namespace App\Exceptions;

use Exception;

class CustomException extends Exception
{

    public $userId;

    public function __construct($userId, $message, $code, Exception $previous)
    {
        parent::__construct($message, $code, $previous);
        $this->userId = $userId;
    }
}
