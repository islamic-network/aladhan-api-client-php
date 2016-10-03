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

    /**
     * @param $city
     * @param $country
     * @param $state
     * @param $timestamp Integer Defaults to time()
     * @param int $method
     */
    public function __construct($city, $country, $month, $year, $state = null, $method = Methods::ISoNA)
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
            
        
    }

    /**
     * @return mixed
     * @throws Exception
     * @throws \Exception
     */
    public function get()
    {
        try {
            $r = $this->connect(Endpoints::CALENDAR_CITY, $this->getParams());

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
        
        return $data;
    }
    
}
