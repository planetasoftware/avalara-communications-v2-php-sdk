<?php
namespace PlanetaSoftware\Avalara\Communications\RequestBuilder;

/**
 * RequestBuilder
 * 
 * Abstract class to create a platform to create builders for each API request
 *
 * @author Oscar A <oscar@planetasoftware.com>
 */
abstract class RequestBuilder {
    
    /**
     * Http Client
     * @var \PlanetaSoftware\Avalara\Communications\Client
     */
    protected $client;
    
    /**
     * @var mixed request body
     */
    protected $request;
    
    /**
     * @var array request query
     */
    protected $query = [];


    /**
     * __construct
     * 
     * @param \PlanetaSoftware\Avalara\Communications\Client $client
     */
    public function __construct(\PlanetaSoftware\Avalara\Communications\Client  $client) {
        $this->client = $client;
    }
    
    /**
     * Create
     * 
     * Builds and creates a result for the request
     * 
     * @return mixed result object or array of result objects
     * 
     * @throws \GuzzleHttp\Exception\RequestException
     * @throws \GuzzleHttp\Exception\ClientException
     * @throws \GuzzleHttp\Exception\TransferException
     * @throws \Exception
     */
    public abstract function create();
   
}
