<?php
declare(strict_types=1);

class Calculator
{
    public function addition(int $arg1, int $arg2)
    {
        return $arg1 + $arg2;
    }

    public function subtraction(int $arg1, int $arg2)
    {
        return $arg1 - $arg2;
    }

    public function division(int $arg1, int $arg2)
    {
        if ($arg2 === 0) {
            throw new Exception('Exception division by zero!');
        }
        return $arg1 / $arg2;
    }

    public function multiplication(int $arg1, int $arg2)
    {
        return $arg1 * $arg2;
    }
}