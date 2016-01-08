<?php

use AlAdhanApi\Location;

class LocationTest extends PHPUnit_Framework_TestCase
{
    public function testLocation()
    {
        $c = new Location('Sultanahmet Mosque, Istanbul, Turkey');
        $this->assertEquals('41.0066041', $c->latitude);
        $this->assertEquals('28.9762674', $c->longitude);
    }
}