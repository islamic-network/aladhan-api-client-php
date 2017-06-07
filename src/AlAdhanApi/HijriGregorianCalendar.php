<?php
namespace AlAdhanApi;

use AlAdhanApi\Endpoints;
use AlAdhanApi\Methods;
use AlAdhanApi\Client;

/**
 * Class HijriGregorianCalendar
 * @package AlAdhanApi
 */

class HijriGregorianCalendar extends Client {

    public function __construct()
    {
        parent::__construct();

    }

    /**
     * @var $date DD-MM-YYYY
     * @return mixed
     * @throws Exception
     * @throws \Exception
     */
    public function hijriToGregorian($date)
    {
        try {
            $r = $this->connect(Endpoints::HIJRI_TO_GREGORIAN_DATE, ['date' => $date]);

            return $r;
        } catch (Exception $e) {
            throw new Exception('Connection failed: ' . $e->getMessage(), $e->getCode());
        }
    }

    /**
     * @var $date DD-MM-YYYY
     * @return mixed
     * @throws Exception
     * @throws \Exception
     */
    public function gregorianToHijri($date)
    {
        try {
            $r = $this->connect(Endpoints::GREGORIAN_TO_HIJRI_DATE, ['date' => $date]);

            return $r;
        } catch (Exception $e) {
            throw new Exception('Connection failed: ' . $e->getMessage(), $e->getCode());
        }
    }

    public function gregorianToHijriCalendar($m, $Y)
    {
        try {
            $r = $this->connect(Endpoints::GREGORIAN_TO_HIJRI_CALENDAR. '/'. $m . '/', $y, []);

            return $r;
        } catch (Exception $e) {
            throw new Exception('Connection failed: ' . $e->getMessage(), $e->getCode());
        }
    }

    public function hijriToGregorianCalendar($m, $Y)
    {
        try {
            $r = $this->connect(Endpoints::HIJRI_TO_GREGORIAN_CALENDAR. '/'. $m . '/', $y, []);

            return $r;
        } catch (Exception $e) {
            throw new Exception('Connection failed: ' . $e->getMessage(), $e->getCode());
        }
    }

    public function nextHijriHoliday()
    {
        try {
            $r = $this->connect(Endpoints::NEXT_HIJRI_HOLIDAY, []);

            return $r;
        } catch (Exception $e) {
            throw new Exception('Connection failed: ' . $e->getMessage(), $e->getCode());
        }
    }

    public function currentIslamicYear()
    {
        try {
            $r = $this->connect(Endpoints::CURRENT_ISLAMIC_YEAR, []);

            return $r;
        } catch (Exception $e) {
            throw new Exception('Connection failed: ' . $e->getMessage(), $e->getCode());
        }
    }

    public function currentIslamicMonth()
    {
        try {
            $r = $this->connect(Endpoints::CURRENT_ISLAMIC_MONTH, []);

            return $r;
        } catch (Exception $e) {
            throw new Exception('Connection failed: ' . $e->getMessage(), $e->getCode());
        }
    }

    public function islamicYearFromGregorianForRamadan($y)
    {
        try {
            $r = $this->connect(Endpoints::RAMADAN_ISLAMIC_YEAR_FROM_GREGORIAN . '/'. $y, []);

            return $r;
        } catch (Exception $e) {
            throw new Exception('Connection failed: ' . $e->getMessage(), $e->getCode());
        }
    }


}
