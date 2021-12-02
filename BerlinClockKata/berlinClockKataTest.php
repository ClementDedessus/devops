<?php
require "berlinClockKata.php";

use PHPUnit\Framework\TestCase;

class berlinClockKataTest extends TestCase
{
    public function testMinutes()
    {
        $minute = new berlinClockKata();
        $actual = $minute->minutes(0);
        $this->assertEquals("", $actual);
    }

    public function testFiveMinutes()
    {
        $minute = new berlinClockKata();
        $actual = $minute->fiveMinutes(0);
        $this->assertEquals("", $actual);
    }
    public function testHours()
    {
        $hour = new berlinClockKata();
        $actual = $hour->hours(0);
        $this->assertEquals("", $actual);
    }
    public function testFiveHours()
    {
        $hour = new berlinClockKata();
        $actual = $hour->fiveHours(1);
        $this->assertEquals("", $actual);
    }
    public function testSeconds()
    {
        $second = new berlinClockKata();
        $actual = $second->seconds(3);
        $this->assertEquals("0", $actual);
    }
    public  function testAllClock()
    {
        $second = new berlinClockKata();
        $actual = $second->heureEntiere(15,00,00);
        $this->assertEquals("111    1", $actual);
    }
}
