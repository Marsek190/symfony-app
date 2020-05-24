<?php
declare(strict_types=1);

namespace App\Exception;


use Throwable;

class WrongCollectionItem extends \OutOfBoundsException
{
    const MESSAGE = 'You are trying to set a wrong item into the collection!';

    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct(static::MESSAGE, $code, $previous);
    }
}