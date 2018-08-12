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
    public function hijriToGregorian($date, $adjustment = 0)
    {
        try {
            $r = $this->connect(Endpoints::HIJRI_TO_GREGORIAN_DATE, ['date' => $date, 'adjustment' => $adjustment]);

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
    public function gregorianToHijri($date, $adjustment = 0)
    {
        try {
            $r = $this->connect(Endpoints::GREGORIAN_TO_HIJRI_DATE, ['date' => $date, 'adjustment' => $adjustment]);

            return $r;
        } catch (Exception $e) {
            throw new Exception('Connection failed: ' . $e->getMessage(), $e->getCode());
        }
    }

    public function gregorianToHijriCalendar($m, $y, $adjustment = 0)
    {
        try {
            $r = $this->connect(Endpoints::GREGORIAN_TO_HIJRI_CALENDAR. '/'. $m . '/' . $y, ['adjustment' => $adjustment]);

            return $r;
        } catch (Exception $e) {
            throw new Exception('Connection failed: ' . $e->getMessage(), $e->getCode());
        }
    }

    public function hijriToGregorianCalendar($m, $y, $adjustment = 0)
    {
        try {
            $r = $this->connect(Endpoints::HIJRI_TO_GREGORIAN_CALENDAR. '/'. $m . '/' . $y, ['adjustment' => $adjustment]);

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

    public function hijriHolidays($day, $month)
    {
        try {
            $r = $this->connect(Endpoints::HIJRI_HOLIDAYS . '/'. $day . '/' . $month, []);

            return $r;
        } catch (Exception $e) {
            throw new Exception('Connection failed: ' . $e->getMessage(), $e->getCode());
        }
    
    }

    public function specialDays()
    {
        try {
            $r = $this->connect(Endpoints::SPECIAL_DAYS, []);

            return $r;
        } catch (Exception $e) {
            throw new Exception('Connection failed: ' . $e->getMessage(), $e->getCode());
        }
    
    }

    public function islamicMonths()
    {
        try {
            $r = $this->connect(Endpoints::ISLAMIC_MONTHS, []);

            return $r;
        } catch (Exception $e) {
            throw new Exception('Connection failed: ' . $e->getMessage(), $e->getCode());
        }
    
    }

}
