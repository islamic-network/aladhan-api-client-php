<?php
namespace AlAdhanApi;

use AlAdhanApi\Endpoints;
use AlAdhanApi\Methods;
use AlAdhanApi\Client;

/**
 * Class Times
 * @package AlAdhanApi
 */

class CalendarByCity extends Client {

    private $hijri;

    /**
     * @param $city
     * @param $country
     * @param $state
     * @param $timestamp Integer Defaults to time()
     * @param int $method
     * @param bool $hijri - are you specifying a hijri month and/or year?
     */
    public function __construct($city, $country, $month, $year, $state = null, $method = Methods::ISoNA, $hijri = false, $adjustment = 0)
    {
        parent::__construct();

        $this->setCity($city);
        $this->setCountry($country);
        if ($state !== null) {
            $this->setState($state);
        }
        $this->setMonth($month);
        $this->setYear($year);
        $this->setMethod($method);
        $this->hijri = $hijri;
        $this->setAdjustment($adjustment);


    }

    /**
     * @return mixed
     * @throws Exception
     * @throws \Exception
     */
    public function get()
    {
        try {
            if ($this->hijri) {
                $r = $this->connect(Endpoints::HIJRI_CALENDAR_CITY, $this->getParams());
            } else {
                $r = $this->connect(Endpoints::CALENDAR_CITY, $this->getParams());
            }

            return $r;
        } catch (Exception $e) {
            throw new Exception('Connection failed: ' . $e->getMessage(), $e->getCode());
        }
    }

    /**
     * @return array
     */
    private function getParams()
    {
        $data = [];
        $data['city'] = $this->city;
        $data['country'] = $this->country;
        $data['method'] = $this->method;
        if ($this->state !== null || $this->state !== '') {
            $data['state'] = $this->state;
        }
        $data['month'] = $this->month;
        $data['year'] = $this->year;
        $data['adjustment'] = $this->adjustment;

        return $data;
    }

}
