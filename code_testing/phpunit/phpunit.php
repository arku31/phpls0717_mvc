<?php
require("vendor/autoload.php");
require('index.php');

class TestDayGettingName extends PHPUnit_Framework_TestCase
{
    public function test_FirstDay()
    {
        $day = new DayOfTheWeek();
        $name = $day->getDayName(1);
        $this->assertTrue($name == "Понедельник");
    }

    public function test_SecondDay()
    {
        $day = new DayOfTheWeek();
        $name = $day->getDayName(2);
        $this->assertTrue($name == "Вторник");
    }


    public function test_ThirdDay()
    {
        $day = new DayOfTheWeek();
        $name = $day->getDayName(3);
        $this->assertTrue($name == "Среда");
    }

    public function test_FourthDay()
    {
        $day = new DayOfTheWeek();
        $name = $day->getDayName(4);
        $this->assertTrue($name == "Четверг");
    }


    public function test_FifthDay()
    {
        $day = new DayOfTheWeek();
        $name = $day->getDayName(5);
        $this->assertTrue($name == "Пятница");
    }


    public function test_SixDay()
    {
        $day = new DayOfTheWeek();
        $name = $day->getDayName(6);
        $this->assertTrue($name == "Суббота");
    }

    public function test_SevenDay()
    {
        $day = new DayOfTheWeek();
        $name = $day->getDayName(7);
        $this->assertTrue($name == "Воскресенье");
    }

    public function test_unknownDay()
    {
        $day = new DayOfTheWeek();
        $this->setExpectedException('Exception');
        $name = $day->getDayName(123);
    }


}