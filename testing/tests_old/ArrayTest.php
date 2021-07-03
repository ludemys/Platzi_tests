<?php

use PHPUnit\Framework\TestCase;

class ArrayTest extends TestCase
{
    public function testPushAndPop()
    {
        $array = [];
        $this->assertSame(count($array), 0);

        array_push($array, 'foo');
        $this->assertSame(count($array), 1);

        array_pop($array);
        $this->assertSame(count($array), 0);
    }
}
