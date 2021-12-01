<?php

use PHPUnit\Framework\TestCase;

class berlinClockKata
{
    public function minutes(int $number): string
    {
        $minute = '';
        for ($i = 1; $i <= $number; $i++) {
            $minute .= '1';
        }
        return $minute;
        
    }
    public function fiveMinutes(int $number): string
    {
        $result = $number / 5;
        $minute = '';
        for ($i = 1; $i <= $result; $i++) {
            $minute .= '1';
        }
        return $minute;
    }
}