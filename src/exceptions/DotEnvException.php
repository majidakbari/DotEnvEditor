<?php

namespace makbari\DotEnvEditor\exceptions;

/**
 * Class DotEnvException
 * @package makbari\DotEnvEditor\exceptions
 */
class DotEnvException extends \Exception
{
    /**
     * DotEnvException constructor.
     * @param string $message
     * @param int $code
     * @param \Exception|NULL $previous
     */
    public function __construct($message, $code, \Exception $previous = NULL)
    {
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return __CLASS__ . ":[{$this->code}]: {$this->message}\n";
    }
}
