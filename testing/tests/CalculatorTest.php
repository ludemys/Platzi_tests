<?php

use PHPUnit\Framework\TestCase;

require_once realpath('.') . '/Calculator.php';
// use SebastianBergmann\Complexity\Calculator;

class CalculatorCase extends TestCase
{
    public function testAddWillReturnTheSumOfItsParameters()
    {
        $sut = new Calculator();

        $this->assertEquals($sut->add(5, 3), 8);
        $this->assertEquals($sut->add(5, 6), 11);
    }

    public function testSubstractWillReturnTheSubstractionOfItsParameters()
    {
        $sut = new Calculator();

        $this->assertEquals($sut->substract(6, 5), 1);
        $this->assertEquals($sut->substract(4, 15), -11);
    }

    public function testMultiplyWillReturnTheMultiplicationOfItsParameters()
    {
        $sut = new Calculator();

        $this->assertEquals($sut->multiply(6, 5), 30);
        $this->assertEquals($sut->multiply(4, 15), 60);
    }

    public function testDivideWillReturnTheDivisionOfItsParameters()
    {
        $sut = new Calculator();

        $this->assertEquals($sut->divide(6, 3), 2);
        $this->assertEquals($sut->divide(17, 2), 8.5);
    }
}
