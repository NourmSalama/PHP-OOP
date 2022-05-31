<?php

    include 'calc.php';

    $firstNumber = readline('Enter first number: ');

    $secondNumber = readline('Enter second number: ');
    $calculation = readline('what do you want to do? (+, -, x, :): ');

    $calculator = new Calculator($firstNumber, $secondNumber, $calculation);
    echo $calculator->checkInput($firstNumber, $secondNumber);
    echo $calculator->calculate() . PHP_EOL;