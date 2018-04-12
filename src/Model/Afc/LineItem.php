<?php

namespace PlanetaSoftware\Avalara\Communications\Model\Afc;

use \PlanetaSoftware\Avalara\Communications\Model\BaseModel;

/**
 * Line Item
 *  
 * This Model class represents the input data used by AFC to determine the each item on an invoice
 * and information indicating the way it should be processed for taxation.
 *
 * @author Oscar A <oscar@planetasoftware.com>
 */
class LineItem extends BaseModel {
    
    /**
     * Array to map attributes to class objects
     */
    const ATTRIBUTE_MAPPING = [
        'from' => \PlanetaSoftware\Avalara\Communications\Model\Afc\Location::class,
        'to' => \PlanetaSoftware\Avalara\Communications\Model\Afc\Location::class,
        'brdg' => \PlanetaSoftware\Avalara\Communications\Model\Afc\BridgeData::class,
        'opt' => \PlanetaSoftware\Avalara\Communications\Model\Common\KeyValuePair::class,
    ];
    
    
    /**
     * @var SALE_TYPE_WHOLESALE wholesale
     */
    const SALE_TYPE_WHOLESALE = 0;
    /**
     * @var SALE_TYPE_RETAIL retail
     */
    const SALE_TYPE_RETAIL = 1;
    /**
     * SAU ONLY
     * @var SALE_TYPE_CONSUMED consumed
     */
    const SALE_TYPE_CONSUMED = 2;
    /**
     * SAU ONLY
     * @var SALE_TYPE_VENDOR vendor
     */
    const SALE_TYPE_VENDOR = 3;
    
    
    /**
     * @var ADJUSTMENT_METHOD_DEFAULT default
     */
    const ADJUSTMENT_METHOD_DEFAULT = 0;
    /**
     * @var ADJUSTMENT_METHOD_NOTFAVORABLE Least favorable rate to customer
     */
    const ADJUSTMENT_METHOD_NOTFAVORABLE = 1;
    /**
     * @var ADJUSTMENT_METHOD_FAVORABLE Most favorable rate to customer
     */
    const ADJUSTMENT_METHOD_FAVORABLE = 2;


    /**
     * Reference ID (LineNumber)
     * Reference Id for line item
     *
     * @var string
     */
    public $ref;

    /**
     * From Location
     * From/Origination location information
     *
     * @var \PlanetaSoftware\Avalara\Communications\Model\Afc\Location
     */
    public $from;

    /**
     * To Location
     * To/Destination location information
     *
     * @var \PlanetaSoftware\Avalara\Communications\Model\Afc\Location
     */
    public $to;

    /**
     * Charge
     *
     * @var double
     */
    public $chg;

    /**
     * Line count
     *
     * @var integer
     */
    public $line;

    /**
     * Locations
     * Number of locations
     *
     * @var integer
     */
    public $loc;

    /**
     * Minutes
     *
     * @var double
     */
    public $min;
    
    /**
     * SaleType
     * 0 = wholesale, 1 = retail, [SAU ONLY 2 = consumed, 3 = vendor use ]
     *
     * @see LineItem::SALE_TYPE_WHOLESALE
     * @see LineItem::SALE_TYPE_RETAIL
     * @see LineItem::SALE_TYPE_CONSUMED
     * @see LineItem::SALE_TYPE_VENDOR
     * @var integer
     */
    public $sale;

    /**
     * PrivateLineSplit
     * % of private line split A point (p2p)
     *
     * @var double
     */
    public $plsp;

    /**
     * TaxInclusive
     * Whether or not tax is inclusive
     * false = not tax inclusive, true = is tax inclusive
     *
     * @var boolean
     */
    public $incl;

    /**
     * ProRatedPct
     * % for pro-rated calculation of fixed taxes
     *
     * @var double
     */
    public $pror;

    /**
     * BridgeData
     * Bridge Conference specific settings
     *
     * @var \PlanetaSoftware\Avalara\Communications\Model\Afc\BridgeData
     */
    public $brdg;

    /**
     * TransactionType
     * Transaction Type (short)
     *
     * @var integer
     */
    public $tran;

    /**
     * ServiceType
     * 
     * Service Type (short)
     *
     * @var integer
     */
    public $serv;

    /**
     * Debit
     * 
     * Whether the transaction was made with debit card or not
     * false = not a debit card transaction, true = apply debit card logic to transaction
     *
     * @var boolean
     */
    public $dbt;

    /**
     * IsAdjustment
     * 
     * Whether or not the transaction is a credit
     * false = not a credit/adjustment, true = is a credit/adjustment
     *
     * @var boolean
     */
    public $adj;
    
    /**
     * AdjustmentMethod
     * 0 = Default, 1 = Least favorable rate to customer, 2 = Most favorable rate to customer
     *
     * @see LineItem::ADJUSTMENT_METHOD_DEFAULT
     * @see LineItem::ADJUSTMENT_METHOD_NOTFAVORABLE
     * @see LineItem::ADJUSTMENT_METHOD_FAVORABLE
     * @var integer
     */
    public $adjm;

    /**
     * DiscountType
     * Refer to manual for valid discount types and descriptions
     *
     * @var integer
     */
    public $disc;

    /**
     * OptionalFields
     * Optional fields for reporting
     *
     * @var \PlanetaSoftware\Avalara\Communications\Model\Common\KeyValuePair[]
     */
    public $opt;

    /**
     * AttributeProperty
     * Attribute property used for supported Sales and Use t/s pairs
     *
     * @var integer
     */
    public $prop;

    /**
     * Get reference
     * 
     * @return string
     */
    public function getReference() {
        return $this->ref;
    }

    /**
     * Get from / origin location
     * 
     * @return \PlanetaSoftware\Avalara\Communications\Model\Afc\Location
     */
    public function getFromLocation() {
        return $this->from;
    }

    /**
     * Get to / destination location
     * 
     * @return \PlanetaSoftware\Avalara\Communications\Model\Afc\Location
     */
    public function getToLocation() {
        return $this->to;
    }

    /**
     * Get charge
     * 
     * @return double
     */
    public function getCharge() {
        return $this->chg;
    }

    

    /**
     * Get line count
     * 
     * @return integer
     */
    public function getLine() {
        return $this->line;
    }

    /**
     * Get location
     * 
     * @return integer
     */
    public function getLocation() {
        return $this->loc;
    }

    /**
     * Get minutes
     * 
     * @return double
     */
    public function getMinutes() {
        return $this->min;
    }

    /**
     * Get sale type
     * 
     * @return integer
     */
    public function getSaleType() {
        return $this->sale;
    }

    /**
     * Get private line split
     * 
     * @return double
     */
    public function getPrivateLineSplit() {
        return $this->plsp;
    }

    /**
     * Get tax inclusive
     * 
     * @return boolean
     */
    public function getIsTaxInclusive() {
        return $this->incl;
    }

    /**
     * Get pro-rated calculation
     * 
     * @return double
     */
    public function getProRated() {
        return $this->pror;
    }

     /**
     * Get bridge data
     * 
     * @return \PlanetaSoftware\Avalara\Communications\Model\Afc\BridgeData
     */
    public function getBridgeData() {
        return $this->brdg;
    }

    /**
     * Get transaction type
     * 
     * @return integer
     */
    public function getTransactionType() {
        return $this->tran;
    }

    /**
     * Get service type
     * 
     * @return integer
     */
    public function getServiceType() {
        return $this->serv;
    }

    /**
     * Get debit card transaction
     * 
     * @return boolean
     */
    public function getIsDebitCardTransaction() {
        return $this->dbt;
    }

    /**
     * Get adjustment
     * 
     * @return boolean
     */
    public function getIsAdjustment() {
        return $this->adj;
    }

    /**
     * Get adjustment method
     * 
     * @return integer
     */
    public function getAdjustmentMethod() {
        return $this->adjm;
    }

    /**
     * Get discount type
     * 
     * @return integer
     */
    public function getDiscountType() {
        return $this->disc;
    }

    /**
     * Get optional field
     * 
     * @return \PlanetaSoftware\Avalara\Communications\Model\Common\KeyValuePair[]
     */
    public function getOptionalField() {
        return $this->opt;
    }

    /**
     * Get property
     * 
     * @return integer
     */
    public function getProperty() {
        return $this->prop;
    }

    /**
     * Set reference
     *
     * @param string $ref
     * @return $this
     */
    public function setReference(string $ref){
        $this->ref = $ref;
        return $this;
    }

    /**
     * Set from location
     *
     * @param \PlanetaSoftware\Avalara\Communications\Model\Afc\Location $loc
     * @return $this
     */
    public function setFromLocation(\PlanetaSoftware\Avalara\Communications\Model\Afc\Location $loc){
        $this->from = $loc;
        return $this;
    }

    /**
     * Set to / destination location
     *
     * @param \PlanetaSoftware\Avalara\Communications\Model\Afc\Location $loc
     * @return $this
     */
    public function setToLocation(\PlanetaSoftware\Avalara\Communications\Model\Afc\Location $loc){
        $this->to = $loc;
        return $this;
    }

    /**
     * Set charge
     *
     * @param double $chg
     * @return $this
     */
    public function setCharge(double $chg){
        $this->chg = $chg;
        return $this;
    }

    /**
     * Set line count
     *
     * @param integer $line
     * @return $this
     */
    public function setLine(int $line){
        $this->line = $line;
        return $this;
    }

    /**
     * Set location
     *
     * @param integer $loc
     * @return $this
     */
    public function setLocation(int $loc){
        $this->loc = $loc;
        return $this;
    }

    /**
     * Set minutes
     *
     * @param double $min
     * @return $this
     */
    public function setMinutes(double $min){
        $this->min = $min;
        return $this;
    }

    /**
     * Set sale type
     *
     * @param integer $sale
     * @return $this
     */
    public function setSaleType(int $sale){
        $this->sale = $sale;
        return $this;
    }

    /**
     * Set private line split
     *
     * @param double $plsp
     * @return $this
     */
    public function setPrivateLineSplit(double $plsp){
        $this->plsp = $plsp;
        return $this;
    }

    /**
     * Set tax inclusive
     *
     * @param boolean $incl
     * @return $this
     */
    public function setTaxInclusive(boolean $incl){
        $this->incl = $incl;
        return $this;
    }

    /**
     * Set pro-rated calculation
     *
     * @param double $pror
     * @return $this
     */
    public function setProRated(double $pror){
        $this->pror = $pror;
        return $this;
    }

    /**
     * Set bridge data
     *
     * @param \PlanetaSoftware\Avalara\Communications\Model\Afc\BridgeData $bridgeData
     * @return $this
     */
    public function SetBridgeData(\PlanetaSoftware\Avalara\Communications\Model\Afc\BridgeData $bridgeData){
        $this->brdg = $bridgeData;
        return $this;
    }

    /**
     * Set transaction type
     *
     * @param integer $transaction
     * @return $this
     */
    public function setTransactionType(int $tran){
        $this->tran = $tran;
        return $this;
    }

    /**
     * Set service type
     *
     * @param integer $serv
     * @return $this
     */
    public function setServiceType(int $serv){
        $this->serv = $serv;
        return $this;
    }

    /**
     * Set debit card transaction
     *
     * @param boolean $dbt
     * @return $this
     */
    public function setDebitCardTransaction(boolean $dbt){
        $this->dbt = $dbt;
        return $this;
    }

    /**
     * Set adjustment
     *
     * @param boolean $adj
     * @return $this
     */
    public function setAdjustment(boolean $adj){
        $this->adj = $adj;
        return $this;
    }

    /**
     * Set adjustment method
     *
     * @param integer $adjm
     * @return $this
     */
    public function setAdjustmentMethod(int $adjm){
        $this->adjm = $adjm;
        return $this;
    }

    /**
     * Set discount type
     *
     * @param integer $disc
     * @return $this
     */
    public function setDiscountType(int $disc){
        $this->disc = $disc;
        return $this;
    }

    /**
     * Set optinal field
     * 
     * @param \PlanetaSoftware\Avalara\Communications\Model\Common\KeyValuePair $optionalField
     * @return $this
     */
    public function SetOptionalField(\PlanetaSoftware\Avalara\Communications\Model\Common\KeyValuePair $optionalField){
        $this->opt = $optionalField;
        return $this;
    }

    /**
     * Set property
     *
     * @param integer $prop
     * @return $this
     */
    public function setProperty(int $prop){
        $this->prop = $prop;
        return $this;
    }


}
