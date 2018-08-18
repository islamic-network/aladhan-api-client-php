<?php

use AlAdhanApi\HijriGregorianCalendar;

class HijriTest extends PHPUnit\Framework\TestCase
{
    public function testRamadanYear()
    {
        $c = new HijriGregorianCalendar();
        $r = $c->currentIslamicYear();
        $this->assertEquals('1439', $r['data']);

    }

    public function testIslamicMonths()
    {
        $c = new HijriGregorianCalendar();
        $r = $c->islamicMonths();
        $this->assertEquals('12', count($r['data']));
    }
    
    public function testHijriHolidays()
    {
        $c = new HijriGregorianCalendar();
        $r = $c->hijriHolidays('9', '11');
        $this->assertEmpty($r['data']);
        $r = $c->hijriHolidays('9', '12');
        $this->assertEquals(2, count($r['data']));
    }

    public function testSpecialDays()
    {
        $c = new HijriGregorianCalendar();
        $r = $c->specialDays();
        $this->assertEquals('19', count($r['data']));
    }
}
