<?php

declare(strict_types=1);

namespace Calculator\Domain\Number\Exception;

final class NumberValueException extends \Exception
{
    public function __construct()
    {
        parent::__construct('Number value must be numeric.');
    }
}
