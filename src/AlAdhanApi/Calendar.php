<?php
namespace AlAdhanApi;

use AlAdhanApi\Endpoints;
use AlAdhanApi\Methods;
use AlAdhanApi\Client;

/**
 * Class Calendar
 * @package AlAdhanApi
 */

class Calendar extends Client {

    private $hijri;

    /**
     * @param $month
     * @param $year
     * @param $timezone
     * @param $latitude
     * @param $longitude
     * @param int $method
     * @param bool $hijri - are you specifying a hijri month and/or year?
     */
    public function __construct($month, $year, $timezone, $latitude, $longitude, $method = Methods::ISoNA, $hijri = false)
    {
        parent::__construct();

        $this->setMonth($month);
        $this->setYear($year);
        $this->setTimezone($timezone);
        $this->setLatitude($latitude);
        $this->setLongitude($longitude);
        $this->setMethod($method);
        $this->hijri = $hijri;


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
                $r = $this->connect(Endpoints::HIJRI_CALENDAR, $this->getParams());
            } else {
                $r = $this->connect(Endpoints::CALENDAR, $this->getParams());
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
        $data['month'] = $this->month;
        $data['year'] = $this->year;
        $data['longitude'] = $this->longitude;
        $data['latitude'] = $this->latitude;
        $data['timezonestring'] = $this->timezone;
        $data['method'] = $this->method;

        return $data;
    }

}
