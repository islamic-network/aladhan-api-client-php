<?php
namespace AlAdhanApi;

use AlAdhanApi\Endpoints;
use AlAdhanApi\Methods;


class Client {
    
    protected $client;
    protected $latitude;
    protected $longitude;
    protected $location;
    protected $timezone;
    protected $method;
    protected $timestamp;
    protected $month;
    protected $year;
    
    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }
    
    public function setLatitude($latitude) {
        $this->latitude = $latitude;
    }
    
    public function setLongitude($longitude) {
        $this->longitude = $longitude;
        
    }
    
    public function setLocation($location) {
        $this->location = $location;
        
    }
    
    public function setTimezone($timezone) {
        $this->timezone = $timezone;
        
    }
    
    public function setMethod($method) {
        $this->method = $method;
    }
    
    public function setTimestamp($timestamp) {
        $this->timestamp = $timestamp;
    }
    
    public function setMonth($month) {
        $this->month = $month;
    }
    
    public function setYear($year) {
        $this->year = $year;
    }
    
    protected function connect($endpoint, array $data)
    {
        try {
            return $this->client->get(
                $endpoint,
                [
                    'headers' => ['Content-Type' => 'application/text'],
                    'body' => json_encode($data, JSON_UNESCAPED_SLASHES),
                    'verify' => false
                ]
            );
        } catch(\Exception $e) {
            // Write to PHP log.
            throw new \Exception($e->getMessage(), $e->getCode());
        }
    }
                              
                              
    
    
}