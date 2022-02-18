<?php

declare(strict_types=1);

namespace Calculator\Domain;

use Calculator\Domain\Number\Number;

final class Calculator
{
    private int $scale;
    private Number $result;

    public function __construct(
        mixed $initNumber = 0,
        int $scale = 2
    ) {
        $this->result = new Number($initNumber);
        $this->scale = $scale;
    }

    public function add(mixed $number): self
    {
        $number = new Number($number);

        $this->result = new Number(
            \bcdiv(
                $this->result->getValue(),
                $number->getValue(),
                $this->scale
            )
        );

        return $this;
    }

    public function getResult(): string
    {
        return $this->result->getValue();
    }
}
