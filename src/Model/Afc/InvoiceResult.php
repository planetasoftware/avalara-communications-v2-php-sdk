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

    /**
     * Total tax per all line items
     * The value of taxes that belong to all Line Items
     *
     * @var double
     */
    private $total_tax = 0;

    /**
     * Get document code
     * 
     * @return string
     */
    public function getDocumentCode() {
        return $this->doc;
    }

    /**
     * Get line item result list
     * 
     * @return \PlanetaSoftware\Avalara\Communications\Model\Afc\LineItemResult[]
     */
    public function getLineItemList() {
        return $this->itms;
    }

    /**
     * Get summarized tax list
     * 
     * @return \PlanetaSoftware\Avalara\Communications\Model\Afc\SummarizedTax[]
     */
    public function getSummarizedTaxList() {
        return $this->summ;
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
     * Set document code
     *
     * @param string $doc
     * @return $this
     */
    public function setDocumentCode(string $doc){
        $this->doc = $doc;
        return $this;
    }

    /**
     * Add new line item result
     * 
     * @param \PlanetaSoftware\Avalara\Communications\Model\Afc\LineItemResult $lineItem
     * @return $this
     */
    public function addLineItem(\PlanetaSoftware\Avalara\Communications\Model\Afc\LineItemResult $lineItem){
        $this->itms[] = $lineItem;
        return $this;
    }

    /**
     * Add new summarized tax
     * 
     * @param \PlanetaSoftware\Avalara\Communications\Model\Afc\SummarizedTax $summarizedTax
     * @return $this
     */
    public function addSummarizedTax(\PlanetaSoftware\Avalara\Communications\Model\Afc\SummarizedTax $summarizedTax){
        $this->summ[] = $summarizedTax;
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

    /**
     * Get total tax summarized
     * 
     * @return double
     */
    public function getTotalTaxSummarized() {

        
        foreach ($this->summ as $key => $value) {
           $this->total_tax += $value->getTax(true);
        }
        return $this->total_tax;
        
    }
}
