<?php

declare(strict_types=1);

namespace Calculator\Test\Domain;

use Calculator\Domain\Calculator;
use PHPUnit\Framework\TestCase;

final class CalculatorTest extends TestCase
{
    public function testAdd(): void
    {
        // Given
        $calculator = new Calculator('1.06');

        // When
        $calculator->add(4.05);

        //Then
        self::assertEquals('5.11', $calculator->getResult());
    }
}
