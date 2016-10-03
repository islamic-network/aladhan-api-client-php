<?php 

use AlAdhanApi\Times;
use AlAdhanApi\TimesByCity;
use AlAdhanApi\TimesByAddress;

class TimesTest extends PHPUnit_Framework_TestCase
{
    public function testTimes()
    {
        $t = strtotime('2020-12-20');
        $c = new Times($t , 'Europe/London', 51.45, 0.988);
        $r = $c->get();
        $this->assertEquals($t, $r['data']['date']['timestamp']);
    }
    
    public function testTimesByCity()
    {
        $t = time();
        $c = new TimesByAddress('Dubai, United Arab Emirates');
        $r = $c->get();
        $this->assertEquals($t, $r['data']['date']['timestamp']);
    }
}
