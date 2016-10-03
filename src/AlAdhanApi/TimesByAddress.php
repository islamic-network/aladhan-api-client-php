<?php
namespace AlAdhanApi;

use AlAdhanApi\Endpoints;
use AlAdhanApi\Methods;
use AlAdhanApi\LatitudeAdjustmentMethods;
use AlAdhanApi\Schools;
use AlAdhanApi\Client;

/**
 * Class Times
 * @package AlAdhanApi
 */

class TimesByAddress extends Client {

    /**
     * @param $city
     * @param $country
     * @param $state
     * @param $timestamp Integer Defaults to time()
     * @param int $method
     */
    public function __construct($address, $timestamp = null, $method = Methods::MAKKAH, $latitudeAdjustmentMethod = LatitudeAdjustmentMethods::ANGLE_BASED, $school = Schools::SHAFI)
    {
        parent::__construct();

        $this->setAddress($address);
        if ($timestamp === null) {
            $this->setTimestamp(time());
        }
        $this->setMethod($method);
        $this->setLatitudeAdjustmentMethod($latitudeAdjustmentMethod);
        $this->setSchool($school);

    }

    /**
     * @return mixed
     * @throws Exception
     * @throws \Exception
     */
    public function get()
    {
        try {
            $r = $this->connect(Endpoints::TIMINGS_ADDRESS. '/' . $this->timestamp, $this->getParams());

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
        $data['address'] = $this->address;
        $data['method'] = $this->method;
        $data['school'] = $this->school;
        $data['latitudeAdjustmentMethod'] = $this->latitudeAdjustmentMethod;
        
        return $data;
    }
    
}
