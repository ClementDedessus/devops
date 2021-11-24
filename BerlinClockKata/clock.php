<?php

use PHPUnit\Framework\TestCase;

class berlin_clock
{
    public function minutes(int $number): string
    {
        $minute = '';
        for ($i = 1; $i <= $number; $i++) {
            $minute .= 'R';
        }
        return $minute;
    }
    public function fiveMinutes(int $number): string
    {
        $result=$number/5;
        $minute = '';
        for ($i = 1; $i <= $result; $i++) {
            $minute .= 'R';
        }
        return $minute;
    }
    public function hours(int $number): string
    {
        $hour='';
        for ($i = 1; $i <= $number; $i++) {
            $hour .= 'R';
        }
        return $hour;
    }
    public function fiveHours(int $number): string
    {
        $result=$number/5;
        $hour = '';
        for ($i = 1; $i <= $result; $i++) {
            $hour .= 'R';
        }
        return $hour;
    }
    public function seconds(int $number): string
    {
        $sec = 'OFF';
        if($number%2==0){$sec='ON';}
        return $sec;
    }
}