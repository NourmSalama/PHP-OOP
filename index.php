<?php

    $firstNumber = readline('Enter first number: ');
    $secondNumber = readline('Enter second number: ');
    $calculation = readline('Enter calculation: ');

    $calculator = new Calculator($firstNumber, $secondNumber, $calculation);
    echo $calculator->calculate();