<?php

use AlAdhanApi\HijriGregorianCalendar;

class HijriTest extends PHPUnit\Framework\TestCase
{
    public function testHtoG()
    {
        $c = new HijriGregorianCalendar();
        $json = '{"code":200,"status":"OK","data":{"gregorian":{"date":"22-09-1986","format":"DD-MM-YYYY","day":"22","weekday":{"en":"Monday"},"month":{"number":9,"en":"September"},"year":"1986","designation":{"abbreviated":"AD","expanded":"Anno Domini"}},"hijri":{"date":"17-01-1407","format":"DD-MM-YYYY","day":"17","weekday":{"en":"Al Athnayn","ar":"\u0627\u0644\u0627\u062b\u0646\u064a\u0646"},"month":{"number":1,"en":"Mu\u1e25arram","ar":"\u0645\u064f\u062d\u064e\u0631\u064e\u0651\u0645"},"year":"1407","designation":{"abbreviated":"AH","expanded":"Anno Hegirae"},"holidays":[]}}}';
        $this->assertEquals($c->hijriToGregorian('17-01-1407'), json_decode($json, true));
    }

    public function testGtoH()
    {
        $c = new HijriGregorianCalendar();
        $json = '
{"code":200,"status":"OK","data":{"hijri":{"date":"10-10-1437","format":"DD-MM-YYYY","day":"10","weekday":{"en":"Al Sabt","ar":"\u0627\u0644\u0633\u0628\u062a"},"month":{"number":10,"en":"Shaww\u0101l","ar":"\u0634\u064e\u0648\u0651\u0627\u0644"},"year":"1437","designation":{"abbreviated":"AH","expanded":"Anno Hegirae"},"holidays":[]},"gregorian":{"date":"16-07-2016","format":"DD-MM-YYYY","day":"16","weekday":{"en":"Saturday"},"month":{"number":7,"en":"July"},"year":"2016","designation":{"abbreviated":"AD","expanded":"Anno Domini"}}}}';
        $this->assertEquals($c->gregorianToHijri('16-07-2016'), json_decode($json, true));
    }

    public function testRamadanYear()
    {
        $c = new HijriGregorianCalendar();
        $r = $c->currentIslamicYear();
        $this->assertEquals('1438', $r['data']);

    }
}
