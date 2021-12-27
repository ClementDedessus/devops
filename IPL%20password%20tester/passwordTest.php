<?php

require "password.php";

use PHPUnit\Framework\TestCase;

class passwordTest extends Testcase
{
    public function testPassWord()
    {
        $message = new password();
        $actual = $message->passwordVerif('Test01!?');
        $this->assertEquals('Parfait', $actual);
    }
}
