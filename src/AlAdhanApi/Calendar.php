<?php
namespace AlAdhanApi;

use AlAdhanApi\Endpoints;
use AlAdhanApi\Methods;
use AlAdhanApi\Client;

class Calendar extends Client {
    
    public function __construct($month, $year, $timezone, $latitude, $longitude, $method = Methods::ISoNA)
    {
        parent::__construct();
        
        $this->setMonth($month);
        $this->setYear($year);
        $this->setTimezone($timezone);
        $this->setLatitude($latitude);
        $this->setLongitude($longitude);
        $this->setMethod($method);
            
        
    }
    
    public function get()
    {
        try {
            $r = $this->connect(Endpoints::CALENDAR, $this->loadParams());
            
            return $r->json();
        } catch (Exception $e) {
            throw new Exception('Connection failed: ' . $e->getMessage(), $e->getCode());
        }
    }
    
    private function loadParams()
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