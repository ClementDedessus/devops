<?php

require "berlin_clock.php";

use PHPUnit\Framework\TestCase;

class berlin_clockTest extends TestCase
{
    public function testMinutes()
    {
        $minute = new berlin_clock();
        $actual = $minute->minutes(5);
        $this->assertEquals("RRRRR", $actual);
    }

    public function testFiveMinutes()
    {
        $minute = new berlin_clock();
        $actual = $minute->fiveMinutes(5);
        $this->assertEquals("R", $actual);
    }

    public function testHours()
    {
        $hour = new berlin_clock();
        $actual = $hour->hours(5);
        $this->assertEquals("RRRRR", $actual);
    }

    public function testFiveHours()
    {
        $hour = new berlin_clock();
        $actual = $hour->fiveHours(20);
        $this->assertEquals("RRRR", $actual);
    }

    public function testSeconds()
    {
        $second = new berlin_clock();
        $actual = $second->seconds(20);
        $this->assertEquals("ON", $actual);
    }
}