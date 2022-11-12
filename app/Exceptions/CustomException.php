<?php

namespace App\Exceptions;

/**
 * Class CustomException.
 *
 * @author Imtiaz Rahi
 * @since 2022-11-13
 * @see https://www.php.net/manual/en/language.exceptions.extending.php
 * @see https://www.educba.com/php-custom-exception/
 */
class CustomException extends \Exception
{

    public function __construct($message, $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function __toString()
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}
