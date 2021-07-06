<?php

class Calculator
{
    /**
     * Add will return the sum of its parameters
     * @param int $n1
     * @param int $n2
     */
    public function add($n1, $n2): int
    {
        return ($n1 + $n2);
    }

    /**
     * Substract will return the substraction of its parameters
     * @param int $n1
     * @param int $n2
     */
    public function substract($n1, $n2): int
    {
        return ($n1 - $n2);
    }

    /**
     * Multiply will return the multiplication of its parameters
     * @param int $n1
     * @param int $n2
     */
    public function multiply($n1, $n2): int
    {
        return ($n1 * $n2);
    }

    /**
     * Divide will return the division of its parameters
     * @param int $n1
     * @param int $n2
     * 
     * @return float
     */
    public function divide($n1, $n2): float
    {
        return ($n1 / $n2);
    }
}
