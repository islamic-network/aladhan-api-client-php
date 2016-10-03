<?php
namespace AlAdhanApi;

use AlAdhanApi\Endpoints;
use AlAdhanApi\Methods;
use AlAdhanApi\Client;

/**
 * Class Times
 * @package AlAdhanApi
 */

class Times extends Client {

    /**
     * @param $timestamp
     * @param $timezone
     * @param $latitude
     * @param $longitude
     * @param int $method
     */
    public function __construct($timestamp, $timezone, $latitude, $longitude, $method = Methods::ISoNA)
    {
        parent::__construct();
        
        $this->setTimestamp($timestamp);
        $this->setTimezone($timezone);
        $this->setLatitude($latitude);
        $this->setLongitude($longitude);
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
            $r = $this->connect(Endpoints::TIMINGS . '/' . $this->timestamp, $this->getParams());

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
        $data['longitude'] = $this->longitude;
        $data['latitude'] = $this->latitude;
        $data['timezonestring'] = $this->timezone;
        $data['method'] = $this->method;
        
        return $data;
    }
    
}
