<?php

use AlAdhanApi\Calendar;
use AlAdhanApi\CalendarByCity;

class CalendarTest extends PHPUnit_Framework_TestCase
{
    public function testCalendar()
    {
        $c = new Calendar(12, 2020, 'Europe/London', 51.45, 0.988);
        $r = $c->get();
        $this->assertEquals('30 Dec 2020', $r['data'][29]['date']['readable']);
    }
    
    public function testCalendarByCity()
    {
        $c = new CalendarByCity('Dubai', 'AE', 12, 2020);
        $r = $c->get();
        $this->assertEquals('30 Dec 2020', $r['data'][29]['date']['readable']);
    }
}