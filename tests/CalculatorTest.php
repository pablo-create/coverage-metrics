<?php
declare(strict_types=1);

require_once 'src/Calculator.php';

class CalculatorTest extends \PHPUnit\Framework\TestCase
{
    public function testAddition()
    {
        $calculator = new Calculator();

        $result = $calculator->addition(3, 2);

        $this->assertSame(5, $result);
    }

    public function testSubtraction()
    {
        $calculator = new Calculator();

        $result = $calculator->subtraction(3, 2);

        $this->assertSame(1, $result);
    }

    public function testDivision()
    {
        $calculator = new Calculator();

        $result = $calculator->division(10, 5);

        $this->assertSame(2, $result);
    }
}