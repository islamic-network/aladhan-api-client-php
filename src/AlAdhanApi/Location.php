<?php
namespace AlAdhanApi;

/**
 * Class Location
 * @package AlAdhanApi
 */

class Location extends Client
{

    /**
     * @var
     */
    public $location;

    /**
     * @var
     */
    public $latitude;

    /**
     * @var
     */
    public $longitude;

    /**
     * @var
     */
    public $timezone;

    /**
     * @param $location
     * @throws Exception
     */
    public function __construct($location)
    {
        parent::__construct();

        $this->location = $location;

        $this->get();
    }

    /**
     * @throws Exception
     * @throws \Exception
     */
    public function get()
    {
        try {
            $r = $this->connect(Endpoints::INFO_ADDRESS, $this->getParams());
            $r2 = json_decode($r);
            if ($r2->status === 'OK') {
                $this->latitude = $r2->data->latitude;
                $this->longitude = $r2->data->longitude;
                $this->timezone = $r2->data->timezone;
            }
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
        $data['address'] = $this->location;

        return $data;
    }

    /**
     * @param $endpoint
     * @param array $data
     * @return \GuzzleHttp\Message\FutureResponse|\GuzzleHttp\Message\ResponseInterface|\GuzzleHttp\Ring\Future\FutureInterface|null
     * @throws \Exception
     */
    protected function connect($endpoint, array $data)
    {
        try {
            $request = $this->client->get(
                $endpoint,
                [
                    'headers' => ['Content-Type' => 'application/text'],
                    'query' => $data,
                    'verify' => false
                ]
            );

            return (string) $request->getBody();
        } catch(\Exception $e) {
            // Write to PHP log.
            throw new \Exception($e->getMessage(), $e->getCode());
        }
    }

}
