<?php
require_once "FizzBuzz.php";
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{

    public function testCountGiven1ShouldReturn1()
    {
        //Arrange
        $fizzBuzz = new FizzBuzz();
        //Act
        $actual = $fizzBuzz->count();

        //Assert
        $this -> assertEquals("1",$actual);
    }

    /*public function testDemo ()
    {
        $this->assertEquals(true, true);
    }*/


}