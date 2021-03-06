<?php

const ADDITION = '+';
const SUBTRACTION = '-';
const MULTIPLICATION = '*';
const DIVISION = '/';
class Calculator
{
    public function calculate($firstOperand, $secondOperand, $operator): int
    {
        switch ($operator) {
            case 'ADDITION':
                return $firstOperand + $secondOperand;
            case 'SUBTRACTION':
                return $firstOperand - $secondOperand;
            case 'MULTIPLICATION':
                return $firstOperand * $secondOperand;
            case 'DIVISION':
                if ($secondOperand != 0) {
                    return $firstOperand / $secondOperand;
                } else {
                    return "Can not divide by ";
                }
            default:
                return "Unsupported operation";
        }
    }
}
