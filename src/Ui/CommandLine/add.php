<?php

use Calculator\Domain\Calculator;

require 'vendor/autoload.php';

fwrite(STDOUT, "You have started the adding process in the calculator\n");
fwrite(STDOUT, "Enter the firs argument: \n");
$firsArgument = fgets(STDIN);
fwrite(STDOUT, "Enter the second argument: \n");
$secondArgument = fgets(STDIN);

$calculator = new Calculator();
$calculator->add(
    removeSpecialChars($firsArgument)
);
$calculator->add(
    removeSpecialChars($secondArgument)
);

fwrite(
    STDOUT,
    sprintf(
        "Adding result: %s \n",
        $calculator->getResult()
    )
);

function removeSpecialChars(mixed $value): string
{
    if (is_string($value)) {
        preg_replace('/[^A-Za-z0-9\.]/', '', $value);
    }

    throw new InvalidArgumentException();
}
