<?php

class Calculator {

    public $firstNumber;
    public $secondNumber;
    public $calculation;

    public function __construct($firstNumber, $secondNumber, $calculation) {
        $this->firstNumber = $firstNumber;
        $this->secondNumber = $secondNumber;
        $this->calculation = $calculation;
    }

    public function calculate() {
        switch ($this->calculation) {
            case '+':
                $result = $this->firstNumber + $this->secondNumber;
                break;
            case '-':
                $result =  $this->firstNumber - $this->secondNumber;
                break;
            case '*':
                $result =  $this->firstNumber * $this->secondNumber;
                break;
            case '/':
                $result =  $this->firstNumber / $this->secondNumber;
                break;
            default:
                return 'Invalid operation';
        }
        return $result;
    }
}