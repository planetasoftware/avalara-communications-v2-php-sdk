<?php

namespace PlanetaSoftware\Avalara\Communications\Model\Afc;

use \PlanetaSoftware\Avalara\Communications\Model\BaseModel;

/**
 * InvoiceResult
 * 
 * This Model class represents the output data returned for each Invoice where a tax
 * calculation was performed.
 *
 * @author Oscar A <oscar@planetasoftware.com>
 */
class InvoiceResult extends BaseModel{
    
    /**
     * Array to map attributes to class objects
     */
    const ATTRIBUTE_MAPPING = [
        'itms' => \PlanetaSoftware\Avalara\Communications\Model\Afc\LineItemResult::class,
        'summ' => \PlanetaSoftware\Avalara\Communications\Model\Afc\SummarizedTax::class,
        'err' => \PlanetaSoftware\Avalara\Communications\Model\Common\Error::class,
    ];
    
    /**
     * DocumentCode
     * Unique document code applied to invoice for Commit
     *
     * @var string
     */
    public $doc;
    
    /**
     * LineItems
     * List of line item tax results
     *
     * @var \PlanetaSoftware\Avalara\Communications\Model\Afc\LineItemResult[]
     */
    public $itms = [];
    
    /**
     * SummarizedTax
     * Summarized taxes for invoice
     *
     * @var \PlanetaSoftware\Avalara\Communications\Model\Afc\SummarizedTax[]
     */
    public $summ = [];
    
    /**
     * Error
     * Error message(s) related to invoice processing
     *
     * @var \PlanetaSoftware\Avalara\Communications\Model\Common\Error[]
     */
    public $err = [];
}
