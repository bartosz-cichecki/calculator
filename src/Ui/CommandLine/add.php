<?php

require 'vendor/autoload.php';

use Calculator\Domain\Calculator;

fwrite(STDOUT, "You have started the adding process in the calculator\n");
fwrite(STDOUT, "Enter the firs argument: \n");
$firsArgument = fgets(STDIN);
fwrite(STDOUT, "Enter the second argument: \n");
$secondArgument = fgets(STDIN);

$calculator = new Calculator();
$calculator->add($secondArgument);

fwrite(
    STDOUT,
    sprintf(
        "Adding result: %s \n",
        $calculator->getResult()
    )
);
