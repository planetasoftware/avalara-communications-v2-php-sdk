<?php

namespace PlanetaSoftware\Avalara\Communications\RequestBuilder\Afc;

/**
 * CalcTaxes Request builder
 *
 * @property \PlanetaSoftware\Avalara\Communications\Model\Afc\CalcTaxesRequest() $request CalcTaxesRequest
 * @author Oscar A <oscar@planetasoftware.com>
 */ 
class CalcTaxes extends \PlanetaSoftware\Avalara\Communications\RequestBuilder\RequestBuilder{
    
    
    /**
     * Construct
     * 
     * @param \PlanetaSoftware\Avalara\Communications\Client $client
     */
    public function __construct(\PlanetaSoftware\Avalara\Communications\Client $client) {
        parent::__construct($client);
        
        $this->request = new \PlanetaSoftware\Avalara\Communications\Model\Afc\CalcTaxesRequest();
    }
    
    /**
     * Set Company
     * 
     * @param \PlanetaSoftware\Avalara\Communications\Model\Afc\CompanyData $company
     * @return $this
     */
    public function setCompany(\PlanetaSoftware\Avalara\Communications\Model\Afc\CompanyData $company){
        $this->request->cmpn = $company;
        return $this;
    }
    
    /**
     * Add Invoice
     * Add invoice to CalcTaxesRequest
     * 
     * @param \PlanetaSoftware\Avalara\Communications\Model\Afc\Invoice $invoice
     * @return $this
     */
    public function addInvoice(\PlanetaSoftware\Avalara\Communications\Model\Afc\Invoice $invoice){
        $this->request->addInvoice($invoice);
        return $this;
    }
    
    /**
     * Add Tax Override
     * 
     * @param \PlanetaSoftware\Avalara\Communications\Model\Afc\TaxOverride $override
     * @return $this
     */
    public function addTaxOverride(\PlanetaSoftware\Avalara\Communications\Model\Afc\TaxOverride $override){
        $this->request->addOverride($override);
        return $this;
    }
    
    /**
     * Add Safe Harbor Override
     * 
     * @param \PlanetaSoftware\Avalara\Communications\Model\Afc\SafeHarborOverride $safeHarborOverride
     * @return $this
     */
    public function addSafeHarborOverride(\PlanetaSoftware\Avalara\Communications\Model\Afc\SafeHarborOverride $safeHarborOverride){
        $this->request->addSafeHarborOverride($safeHarborOverride);
        return $this;
    }
    
    /**
     * Create
     * 
     * Builds and creates a result for the request.
     * 
     * @return \PlanetaSoftware\Avalara\Communications\Model\Afc\CalcTaxesResponse
     * 
     * @throws \GuzzleHttp\Exception\RequestException
     * @throws \GuzzleHttp\Exception\ClientException
     * @throws \GuzzleHttp\Exception\TransferException
     * @throws \Exception
     */
    public function create() {
        
        if(is_null($response = $this->client->post('afc/CalcTaxes', $this->request))){
            throw new \Exception('response was empty');
        }
        
        return \PlanetaSoftware\Avalara\Communications\Model\Afc\CalcTaxesResponse::createFromArray(json_decode($response, true));
    }

}
