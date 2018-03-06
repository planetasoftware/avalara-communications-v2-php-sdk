<?php

namespace PlanetaSoftware\Avalara\Communications\RequestBuilder\Afc;

/**
 * Commit Request builder
 *
 * @property \PlanetaSoftware\Avalara\Communications\Model\Afc\CommitRequest $request CalcTaxesRequest
 * @author Oscar A <oscar@planetasoftware.com>
 */ 
class Commit extends \PlanetaSoftware\Avalara\Communications\RequestBuilder\RequestBuilder{
    
    /**
     * Set Commit Request Model
     * 
     * @param \PlanetaSoftware\Avalara\Communications\Model\Afc\CommitRequest $request
     * @return $this
     */
    public function setCommitRequest(\PlanetaSoftware\Avalara\Communications\Model\Afc\CommitRequest $request){
        $this->request = $request;
        return $this;
    }
    
    /**
     * Create
     * 
     * Builds and creates a result for the request.
     * 
     * @return \PlanetaSoftware\Avalara\Communications\Model\Afc\CommitResponse
     * 
     * @throws \GuzzleHttp\Exception\RequestException
     * @throws \GuzzleHttp\Exception\ClientException
     * @throws \GuzzleHttp\Exception\TransferException
     * @throws \Exception
     */
    public function create() {
        
        if(is_null($response = $this->client->post('afc/Commit', $this->request))){
            throw new \Exception('response was empty');
        }
        
        return \PlanetaSoftware\Avalara\Communications\Model\Afc\CommitResponse::createFromArray(json_decode($response));
    }
}
