<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase
{
    public function testEmail()
    {
        $email = Validate::email('i@rimorsoft.com');
        $this->assertTrue($email);
        // $email = Validate::email('i@@rimorsoft.com');
        // $this->assertTrue($email);
    }
}
