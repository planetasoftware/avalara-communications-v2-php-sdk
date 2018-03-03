<?php

namespace PlanetaSoftware\Avalara\Communications\RequestBuilder\Geo;

/**
 * Geocode Request builder
 *
 * @author Oscar A <oscar@planetasoftware.com>
 */
class Geocode extends \PlanetaSoftware\Avalara\Communications\RequestBuilder\RequestBuilder{
    
    
    /**
     * Add Geocode Request
     * 
     * Add a Geocode request to the array for the body request.
     * geo/Geocode endpoint accepts an array of GeocodeRequest objects to validate
     * one or many addresses
     * 
     * @param \PlanetaSoftware\Avalara\Communications\Model\Geo\GeocodeRequest $request
     * @return $this
     */
    public function addGeocodeRequest(\PlanetaSoftware\Avalara\Communications\Model\Geo\GeocodeRequest $request){
        $this->request[] = $request;
        return $this;
    }
    
    /**
     * Create
     * 
     * Builds and creates a result for the request.
     * 
     * @return array Array of GeocodeResult Models
     * 
     * @throws \GuzzleHttp\Exception\RequestException
     * @throws \GuzzleHttp\Exception\ClientException
     * @throws \GuzzleHttp\Exception\TransferException
     * @throws \Exception
     */
    public function create(){
        
        if(is_null($response = $this->client->post('geo/Geocode', $this->request))){
            throw new \Exception('response was empty');
        }
        
        $arrResponseList = json_decode($response, true);
        
        $arrResponseObjList = [];
        foreach($arrResponseList AS $arrResponse){
            $arrResponseObjList[] = \PlanetaSoftware\Avalara\Communications\Model\Geo\GeocodeResult::createFromArray($arrResponse);
        }
        return $arrResponseObjList;
    }
}
