<?php
namespace AlAdhanApi;

use AlAdhanApi\Endpoints;
use AlAdhanApi\Methods;
use AlAdhanApi\Client;

class Times extends Client {
    
    public function __construct($timestamp, $timezone, $latitude, $longitude, $method = Methods::ISoNA)
    {
        parent::__construct();
        
        $this->setTimestamp($timestamp);
        $this->setTimezone($timezone);
        $this->setLatitude($latitude);
        $this->setLongitude($longitude);
        $this->setMethod($method);
            
        
    }
    
    public function get()
    {
        try {
            $r = $this->connect(Endpoints::TIMINGS . '/' . $this->timestamp, $this->loadParams());
            
            return $r->json();
        } catch (Exception $e) {
            throw new Exception('Connection failed: ' . $e->getMessage(), $e->getCode());
        }
    }
    
    private function loadParams()
    {
        $data = [];
        $data['longitude'] = $this->longitude;
        $data['latitude'] = $this->latitude;
        $data['timezonestring'] = $this->timezone;
        $data['method'] = $this->method;
        
        return $data;
    }
    
}