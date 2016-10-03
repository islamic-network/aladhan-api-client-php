<?php
namespace AlAdhanApi;

/**
 * Class Location
 * @package AlAdhanApi
 */

class Location
{
    /**
     * @var \GuzzleHttp\Client
     */
    private $client;

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
     * @param $location
     * @throws Exception
     */
    public function __construct($location)
    {
        $this->client = new \GuzzleHttp\Client();

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
            $r = $this->connect(Endpoints::GOOGLE_GEOCODING, $this->getParams());
            $r2 = $r;
            if ($r2['status'] !== 'ZERO_RESULTS') {
                $this->latitude = $r2['results'][0]['geometry']['location']['lat'];
                $this->longitude = $r2['results'][0]['geometry']['location']['lng'];
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
        $data['sensor'] = false;
        $data['address'] = $this->location;

        return $data;
    }

    /**
     * @param $endpoint
     * @param array $data
     * @return \GuzzleHttp\Message\FutureResponse|\GuzzleHttp\Message\ResponseInterface|\GuzzleHttp\Ring\Future\FutureInterface|null
     * @throws \Exception
     */
    private function connect($endpoint, array $data)
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
