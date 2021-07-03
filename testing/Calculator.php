<?php

class Calculator
{
    public function add($n1, $n2): int
    {
        return ($n1 + $n2);
    }

    public function substract($n1, $n2): int
    {
        return ($n1 - $n2);
    }

    public function multiply($n1, $n2): int
    {
        return ($n1 * $n2);
    }

    public function divide($n1, $n2): float
    {
        return ($n1 / $n2);
    }
}
