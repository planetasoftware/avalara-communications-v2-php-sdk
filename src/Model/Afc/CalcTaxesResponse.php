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
        'err' => \PlanetaSoftware\Avalara\Communications\Model\Afc\Error::class,
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
     * @var \PlanetaSoftware\Avalara\Communications\Model\Afc\Error[]
     */
    public $err = [];
}
