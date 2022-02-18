<?php

declare(strict_types=1);

namespace Calculator\Domain\Number;

use Calculator\Domain\Number\Exception\NumberValueException;

final class Number
{
    private string $value;

    public function __construct(mixed $value = 0)
    {
        if (is_numeric($value) === false) {
            throw new NumberValueException();
        }

        $this->value = (string) $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}