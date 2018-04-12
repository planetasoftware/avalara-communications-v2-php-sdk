<?php


namespace PlanetaSoftware\Avalara\Communications\Model\Afc;

use \PlanetaSoftware\Avalara\Communications\Model\BaseModel;

/**
 * Invoice 
 *  
 * This Model class represents the input data used by AFC to group transactions that apply to the same customer.
 * AFC maintains a history of the transactions and applies the Steps, Brackets and/or Limits to entire group of transactions.
 *
 * @author Oscar A <oscar@planetasoftware.com>
 */
class Invoice extends BaseModel{
    
    /**
     * Array to map attributes to class objects
     */
    const ATTRIBUTE_MAPPING = [
        'bill' => \PlanetaSoftware\Avalara\Communications\Model\Afc\Location::class,
        'exms' => \PlanetaSoftware\Avalara\Communications\Model\Afc\TaxExemption::class,
        'itms' => \PlanetaSoftware\Avalara\Communications\Model\Afc\LineItem::class,
        'opt'  => \PlanetaSoftware\Avalara\Communications\Model\Common\KeyValuePair::class,
    ];
    
    /**
     * @var CUSTOMER_TYPE_RESIDENTIAL Customer type residential
     */
    const CUSTOMER_TYPE_RESIDENTIAL = 0;
    /**
     * @var CUSTOMER_TYPE_BUSINESS Customer type business
     */
    const CUSTOMER_TYPE_BUSINESS = 1;
    /**
     * @var CUSTOMER_TYPE_SENIOR Customer type senior citizen
     */
    const CUSTOMER_TYPE_SENIOR = 2;
    /**
     * @var CUSTOMER_TYPE_INDUSTRIAL Customer type industrial
     */
    const CUSTOMER_TYPE_INDUSTRIAL = 3;
    
    
    /**
     * DocumentCode
     * Unique document code to be applied to invoice for Commit
     *
     * @var string
     */
    public $doc;
    
    /**
     * Commit
     * false = uncommitted, true = committed
     *
     * @var boolean
     */
    public $cmmt;
    
    /**
     * Bill to Location
     * Bill to location information
     *
     * @var \PlanetaSoftware\Avalara\Communications\Model\Afc\Location
     */
    public $bill;
    
    /**
     * CustomerType
     * 0 = Residential, 1 = Business, 2 = Senior Citizen, 3 = Industrial
     *
     * @see Invoice::CUSTOMER_TYPE_RESIDENTIAL
     * @see Invoice::CUSTOMER_TYPE_BUSINESS
     * @see Invoice::CUSTOMER_TYPE_SENIOR
     * @see Invoice::CUSTOMER_TYPE_INDUSTRIAL
     * @var integer
     */
    public $cust = self::CUSTOMER_TYPE_RESIDENTIAL;
    
    /**
     * Lifeline
     * Whether or not customer is participant in the lifeline program for low income consumers
     * false = customer is not a lifeline participant, true = customer is a lifeline participant
     *
     * @see https://www.fcc.gov/general/lifeline-program-low-income-consumers
     * @var boolean
     */
    public $lfln;
    
    /**
     * Date
     * Date to be applied to invoice / transaction
     *
     * @var string
     */
    public $date;
    
    /**
     * Exemptions
     * List of exemptions to be applied to invoice
     *
     * @var \PlanetaSoftware\Avalara\Communications\Model\Afc\TaxExemption[]
     */
    public $exms = [];
    
    /**
     * LineItems
     * List of line items for invoice
     *
     * @var \PlanetaSoftware\Avalara\Communications\Model\Afc\LineItem[]
     */
    public $itms = [];
    
    /**
     * InvoiceMode
     * Whether line items are related and part of a single invoice
     * AFC maintains a history of the transactions and applies the Steps, Brackets and/or Limits to entire group of transactions.
     * false = line items are unrelated, true = line items are part of a single invoice
     *
     * For Example:
     *      suppose a jurisdiction charges a 10% sales on just the first $10 of an invoice. If two separate
     *      $6 transactions on the invoice are passed while not in Invoice Mode, two $0.60 tax charges would be
     *      erroneously totaled and a $1.20 tax would be generated. However, if these same transactions are passed
     *      while in Invoice Mode, the total tax charge would be correctly totaled and a $1.00 tax would be generated.
     * 
     * @var boolean
     */
    public $invm;
    
    /**
     * ReturnDetail
     * Whether to return line item level tax results
     * false = do not return line item level tax results, true = return line item level tax results
     *
     * @var boolean
     */
    public $dtl;
    
    /**
     * ReturnSummary
     * Whether to return summarized tax results
     * false = do not return summarized tax results, true = return summarized tax results
     *
     * @var boolean
     */
    public $summ;
    
    /**
     * OptionalFields
     * Optional fields for reporting
     *
     * @var \PlanetaSoftware\Avalara\Communications\Model\Common\KeyValuePair[]
     */
    public $opt = [];

    /**
     * Get document code
     * 
     * @return string
     */
    public function getDocumentCode() {
        return $this->doc;
    }

    /**
     * Get committed
     * 
     * @return boolean
     */
    public function getIsCommitted() {
        return $this->cmmt;
    }

    /**
     * Get bill to location
     * 
     * @return \PlanetaSoftware\Avalara\Communications\Model\Afc\Location
     */
    public function getBillToLocation() {
        return $this->bill;
    }

    /**
     * Get customer type
     * 
     * @return integer
     */
    public function getCustomerType() {
        return $this->cust;
    }

    /**
     * Get lifeline
     * 
     * @return boolean
     */
    public function getIsCustomerLifeline() {
        return $this->lfln;
    }

    /**
     * Get date
     * 
     * @return string
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Get tax exemptions list
     * 
     * @return \PlanetaSoftware\Avalara\Communications\Model\Afc\TaxExemption[]
     */
    public function getTaxExemptionList() {
        return $this->exms;
    }

    /**
     * Get line item list
     * 
     * @return \PlanetaSoftware\Avalara\Communications\Model\Afc\LineItem[]
     */
    public function getLineItemList() {
        return $this->itms;
    }

    /**
     * Get invoice mode
     * 
     * @return boolean
     */
    public function getInvoiceMode() {
        return $this->invm;
    }

    /**
     * Get return detail
     * 
     * @return boolean
     */
    public function getIsReturnDetail() {
        return $this->dtl;
    }

    /**
     * Get return summary
     * 
     * @return boolean
     */
    public function getIsReturnSummary() {
        return $this->summ;
    }

    /**
     * Get optional fields list
     * 
     * @return \PlanetaSoftware\Avalara\Communications\Model\Common\KeyValuePair[]
     */
    public function getOptionalFieldList() {
        return $this->opt;
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
     * Set commit
     *
     * @param boolean $cmmt
     * @return $this
     */
    public function setCommitted(boolean $cmmt){
        $this->cmmt = $cmmt;
        return $this;
    }

    /**
     * Set bill to location
     *
     * @param \PlanetaSoftware\Avalara\Communications\Model\Afc\Location $bill
     * @return $this
     */
    public function setBillToLocation(\PlanetaSoftware\Avalara\Communications\Model\Afc\Location $bill){
        $this->bill = $bill;
        return $this;
    }

    /**
     * Set customer type
     *
     * @param integer $cust
     * @return $this
     */
    public function setCustomerType(int $cust){
        $this->cust = $cust;
        return $this;
    }

    /**
     * Set lifeline
     *
     * @param boolean $lfln
     * @return $this
     */
    public function setCustomerLifeline(boolean $lfln){
        $this->lfln = $lfln;
        return $this;
    }

    /**
     * Set date
     *
     * @param string $date
     * @return $this
     */
    public function setDate(boolean $date){
        $this->date = $date;
        return $this;
    }

    /**
     * Add new tax exemption
     * 
     * @param \PlanetaSoftware\Avalara\Communications\Model\Afc\TaxExemption $taxExexmption
     * @return $this
     */
    public function addTaxExemption(\PlanetaSoftware\Avalara\Communications\Model\Afc\TaxExemption $taxExexmption){
        $this->exms[] = $taxExexmption;
        return $this;
    }

    /**
     * Add new line item
     * 
     * @param \PlanetaSoftware\Avalara\Communications\Model\Afc\LineItem $lineItem
     * @return $this
     */
    public function addLineItem(\PlanetaSoftware\Avalara\Communications\Model\Afc\LineItem $lineItem){
        $this->itms[] = $lineItem;
        return $this;
    }

    /**
     * Set invoice mode
     *
     * @param boolean $invm
     * @return $this
     */
    public function setInvoiceMode(boolean $invm){
        $this->invm = $invm;
        return $this;
    }

    /**
     * Set return detail
     *
     * @param boolean $dtl
     * @return $this
     */
    public function setReturnDetail(boolean $dtl){
        $this->dtl = $dtl;
        return $this;
    }

    /**
     * Set return detail
     *
     * @param boolean $summ
     * @return $this
     */
    public function setReturnSummary(boolean $summ){
        $this->summ = $summ;
        return $this;
    }

}
