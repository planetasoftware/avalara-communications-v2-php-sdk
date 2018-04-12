<?php

namespace PlanetaSoftware\Avalara\Communications\Model\Afc;

use \PlanetaSoftware\Avalara\Communications\Model\BaseModel;

/**
 * CalcTaxesResponse - AFC Calculate Taxes Response
 * 
 * This Model class represents the input data returned by AFC CalcTaxes.
 *
 * @author Oscar A <oscar@planetasoftware.com>
 */
class CalcTaxesResponse extends BaseModel{
    
    /**
     * Array to map attributes to class objects
     */
    const ATTRIBUTE_MAPPING = [
        'inv' => \PlanetaSoftware\Avalara\Communications\Model\Afc\InvoiceResult::class,
        'err' => \PlanetaSoftware\Avalara\Communications\Model\Common\Error::class,
    ];
    
    /**
     * Invoices
     * List of invoices with tax results
     *
     * @var \PlanetaSoftware\Avalara\Communications\Model\Afc\InvoiceResult[]
     */
    public $inv = [];
    
    /**
     * Error
     * Error message(s) related to calculation request processing
     *
     * @var \PlanetaSoftware\Avalara\Communications\Model\Common\Error[]
     */
    public $err = [];

    /**
     * Get invoice result list
     * 
     * @return \PlanetaSoftware\Avalara\Communications\Model\Afc\InvoiceResult[]
     */
    public function getInvoiceResultList() {
        return $this->inv;
    }

    /**
     * Get error list
     * 
     * @return \PlanetaSoftware\Avalara\Communications\Model\Common\Error[]
     */
    public function getErrorList() {
        return $this->err;
    }

    /**
     * Add new invoice result
     * 
     * @param \PlanetaSoftware\Avalara\Communications\Model\Afc\InvoiceResult $invoiceResult
     * @return $this
     */
    public function addInvoiceResult(\PlanetaSoftware\Avalara\Communications\Model\Afc\Invoice $invoiceResult){
        $this->inv[] = $invoiceResult;
        return $this;
    }

    /**
     * Add new error
     * 
     * @param \PlanetaSoftware\Avalara\Communications\Model\Common\Error $error
     * @return $this
     */
    public function addError(\PlanetaSoftware\Avalara\Communications\Model\Common\Error $error){
        $this->err[] = $error;
        return $this;
    }




}
