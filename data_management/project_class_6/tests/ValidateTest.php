<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase
{
    public function testEmail()
    {
        $email = Validate::email('i@rimorsoft.com');
        $this->assertTrue($email);
    }

    public function testUrl()
    {
        $url = Validate::url('https://www.platzi.com');
        $this->assertTrue($url);
    }

    public function testPassword()
    {
        $password = Validate::password('Lhau46584');
        $this->assertTrue($password);
    }
}
