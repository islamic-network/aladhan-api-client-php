<?php 
use AlAdhanApi\Times;

class TimesTest extends PHPUnit_Framework_TestCase
{
    public function testTimes()
    {
        $t = strtotime('2020-12-20');
        $c = new Times($t , 'Europe/London', 51.45, 0.988);
        $r = $c->get();
        $this->assertEquals($t, $r['data']['date']['timestamp']);
    }
}