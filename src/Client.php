<?php

namespace PlanetaSoftware\Avalara\Communications;

//use \GuzzleHttp\Client;

/**
 * Http Client to handle communications with Avalara Communications Rest API
 *
 * @author Oscar A <oscar@planetasoftware.com>
 */
class Client {
    
    /**
     * @var string Production URL for Avalara communications REST API V2
     */
    const URL_PRODUCTION = 'https://communicationsua.avalara.net/api/v2';
    /**
     * @var string Development URL for Avalara communications REST API V2
     */
    const URL_DEVELOPMENT = 'https://communicationsua.avalara.net/api/v2';
    
    
    /**
     * Http Guzzle Client
     *
     * @var \GuzzleHttp\Client
     */
    private $_client;
    
    /**
     *
     * @var string
     */
    private $_url;
    
    /**
     * @var string API Credentials
     */
    private $auth;
    
    public function __construct($environment = 'production'){
        
        $this->_url = ($environment === 'production')? self::URL_PRODUCTION : self::URL_DEVELOPMENT;
        
        $this->_client = new \GuzzleHttp\Client();
        
    }
    
    /**
     * Set Basic Authentication
     * 
     * @param string $username
     * @param string $password
     * @return $this
     */
    public function setBasicAuthentication($username, $password){
        $this->auth = "Basic ".base64_encode("$username:$password");
        return $this;
    }
    
    /**
     * Set Bearer Authentication
     * 
     * @param string $token
     * @return $this
     */
    public function setBearerAuthentication($token){
        $this->auth = "Bearer {$token}";
        return $this;
    }
    
    /**
     * POST API request
     * 
     * @param string $endpoint Endpoint to call
     * @param string $body
     * @param array $query
     * @return string|null json response content
     * 
     * @throws \GuzzleHttp\Exception\RequestException
     * @throws \GuzzleHttp\Exception\ClientException
     * @throws \GuzzleHttp\Exception\TransferException
     */
    public function post($endpoint, $body = null, $query = []){
        
        $options = [
            'query' => $query,
            'body'  => is_null($body)?null:((is_string($body))?$body:json_encode($body))
        ];
        
        return $this->request('POST', $endpoint, $options);
    }
    
    /**
     * GET API request
     * 
     * @param string $endpoint Endpoint to call
     * @param array $query
     * @return string|null json response content
     * 
     * @throws \GuzzleHttp\Exception\RequestException
     * @throws \GuzzleHttp\Exception\ClientException
     * @throws \GuzzleHttp\Exception\TransferException
     */
    public function get($endpoint, $query = []){
        $options = [
            'query' => $query,
            'body'  => null
        ];
        
        return $this->request('GET', $endpoint, $options);
    }


    /**
     * General API request
     * 
     * @param string $method Verb Method to call
     * @param string $endpoint Endpoint to call
     * @param array $options Additional Guzzle request options
     * @return string|null json response content
     * 
     * @throws \GuzzleHttp\Exception\RequestException
     * @throws \GuzzleHttp\Exception\ClientException
     * @throws \GuzzleHttp\Exception\TransferException
     */
    public function request($method, $endpoint, $options = []){
        
        $guzzleOptions = array_merge($options, [
            \GuzzleHttp\RequestOptions::HEADERS => [
                    'Accept'        => 'application/json',
                    'Content-Type'  => 'application/json',
                    'Authorization' => $this->auth
            ]
        ]);
        
        $response = $this->_client->request($method, "{$this->_url}/{$endpoint}", $guzzleOptions);

        $content = $response->getBody()->getContents();
        
        if(!empty($content)){
            return $content;
        }
        
        return null;
    }
}
