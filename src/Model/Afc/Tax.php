<?php

namespace PlanetaSoftware\Avalara\Communications\Model\Afc;

use \PlanetaSoftware\Avalara\Communications\Model\BaseModel;

/**
 * Tax
 * 
 * This Model class represents the output data returned with tax value for an item line.
 *
 * @author Oscar A <oscar@planetasoftware.com>
 */
class Tax extends BaseModel {
    
    
    /**
     * @var CALCULATION_TYPE_RATE rate
     */
    const CALCULATION_TYPE_RATE = 1;
    /**
     * @var CALCULATION_TYPE_FIXED fixed
     */
    const CALCULATION_TYPE_FIXED = 2;
    /**
     * @var CALCULATION_TYPE_PERMINUTE per minute
     */
    const CALCULATION_TYPE_PERMINUTE = 3;
    /**
     * @var CALCULATION_TYPE_PERLINE per line
     */
    const CALCULATION_TYPE_PERLINE = 4;
    /**
     * @var CALCULATION_TYPE_SELFTAXING self taxing rate
     */
    const CALCULATION_TYPE_SELFTAXING = 5;
    /**
     * @var CALCULATION_TYPE_PERBRACKET per bracket
     */
    const CALCULATION_TYPE_PERBRACKET = 6;
    /**
     * @var CALCULATION_TYPE_TIER fixed on tier
     */
    const CALCULATION_TYPE_TIER = 7;
    
    
    /**
     * @var LEVEL_FEDERAL federal
     */
    const LEVEL_FEDERAL = 0;
    /**
     * @var LEVEL_STATE state
     */
    const LEVEL_STATE = 1;
    /**
     * @var LEVEL_COUNTY county
     */
    const LEVEL_COUNTY = 2;
    /**
     * @var LEVEL_CITY city
     */
    const LEVEL_CITY = 3;
    /**
     * @var LEVEL_UNINCORPORATED unincorporated
     */
    const LEVEL_UNINCORPORATED = 4;

    /**
     * Billable
     * Whether or not it is a standard billable tax
     * false = non-billable tax, true = standard billable tax
     * 
     * @var boolean
     */
    public $bill;

    /**
     * Compliance
     * Whether or not it is a standard compliance tax
     * false = non-compliance tax, true = standard compliance tax
     * 
     * @var boolean
     */
    public $cmpl;

    /**
     * TaxableMeasure
     * Taxable Measure applicable to tax
     * 
     * @var double
     */
    public $tm;

    /**
     * CalculationType
     * 1 = Rate, 2 = Fixed, 3 = PerMinute, 4 = PerLine, 5 = SelfTaxingRate, 6 = PerBracket, 7 = FixedOnTier
     * 
     * @see Tax::CALCULATION_TYPE_RATE
     * @see Tax::CALCULATION_TYPE_FIXED
     * @see Tax::CALCULATION_TYPE_PERMINUTE
     * @see Tax::CALCULATION_TYPE_PERLINE
     * @see Tax::CALCULATION_TYPE_SELFTAXING
     * @see Tax::CALCULATION_TYPE_PERBRACKET
     * @see Tax::CALCULATION_TYPE_TIER
     * @var integer
     */
    public $calc;

    /**
     * CategoryName
     * Tax Category Name
     * 
     * @var string
     */
    public $cat;

    /**
     * CategoryID
     * Tax Category Numerical ID
     * 
     * @var integer
     */
    public $cid;

    /**
     * Name
     * Tax Name
     * 
     * @var string
     */
    public $name;

    /**
     * ExemptSaleAmount
     * Exempt Sale Amount
     * 
     * @var double
     */
    public $exm;

    /**
     * Lines
     * Number of lines taxed
     * 
     * @var integer
     */
    public $lns;

    /**
     * Minutes
     * Number of minutes taxed
     * 
     * @var double
     */
    public $min;

    /**
     * PCode
     * PCode representing reporting tax jurisdiction
     * 
     * @var integer
     */
    public $pcd;

    /**
     * Rate
     * Applicable tax rate
     * 
     * @var double
     */
    public $rate;

    /**
     * Surcharge
     * Whether if surcharge rules apply
     * false = not a surcharge, true = surcharge rules apply
     * 
     * @var boolean
     */
    public $sur;

    /**
     * Amount
     * Tax Amount
     * 
     * @var double
     */
    public $tax;

    /**
     * Level
     * Tax Level 0 = Federal, 1 = State, 2 = County, 3 = City, 4 = Unincorporated 
     * 
     * @see Tax::LEVEL_FEDERAL = 0;
     * @see Tax::LEVEL_STATE = 1;
     * @see Tax::LEVEL_COUNTY = 2;
     * @see Tax::LEVEL_CITY = 3;
     * @see Tax::LEVEL_UNINCORPORATED = 4;
     * @var integer
     */
    public $lvl;

    /**
     * Type
     * Tax Type ID
     * 
     * @var integer
     */
    public $tid;

    /**
     * Get billable tax
     * 
     * @return boolean
     */
    public function getIsBillable() {
        return $this->bill;
    }

    /**
     * Get compliance tax
     * 
     * @return boolean
     */
    public function getIsCompliance() {
        return $this->cmpl;
    }

    /**
     * Get taxable measure
     * 
     * @return double
     */
    public function getTaxableMeasure() {
        return $this->tm;
    }

    /**
     * Get calculation
     * 
     * @return integer
     */
    public function getCalculation() {
        return $this->calc;
    }   

    /**
     * Get tax category
     * 
     * @return string
     */
    public function getCategory() {
        return $this->cat;
    }  

    /**
     * Get category id
     * 
     * @return integer
     */
    public function getCategoryId() {
        return $this->cid;
    }

    /**
     * Get tax name
     * 
     * @return string
     */
    public function getName() {
        return $this->name;
    }

     /**
     * Get exempt sale amount
     * 
     * @return double
     */
    public function getExemptSaleAmount() {
        return $this->exm;
    }

    /**
     * Get number of lines taxed
     * 
     * @return integer
     */
    public function getLinesTaxed() {
        return $this->lns;
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
     * Get PCode
     * 
     * @return integer
     */
    public function getPCode() {
        return $this->pcd;
    }

    /**
     * Get tax rate
     * 
     * @return double
     */
    public function getRate() {
        return $this->rate;
    }

    /**
     * Get surcharge
     * 
     * @return boolean
     */
    public function getIsSurcharge() {
        return $this->sur;
    }

    /**
     * Get tax 
     * 
     * @return double
     */
    public function getTax() {
        return $this->tax;
    }

    /**
     * Get tax level 
     * 
     * @return integer
     */
    public function getLevel() {
        return $this->lvl;
    }

    /**
     * Get tax type id 
     * 
     * @return integer
     */
    public function getTypeId() {
        return $this->tid;
    }

    /**
     * Set billable tax
     *
     * @param boolean $bill
     * @return $this
     */
    public function setBillable(boolean $bill){
        $this->bill = $bill;
        return $this;
    }

    /**
     * Set compliance tax
     *
     * @param boolean $cmpl
     * @return $this
     */
    public function setCompliance(boolean $cmpl){
        $this->cmpl = $cmpl;
        return $this;
    }

    /**
     * Set taxable measure
     *
     * @param double $tm
     * @return $this
     */
    public function setTaxableMeasure(double $tm){
        $this->tm = $tm;
        return $this;
    }

    /**
     * Set calculation
     *
     * @param integer $calc
     * @return $this
     */
    public function setCalculation(int $calc){
        $this->calc = $calc;
        return $this;
    }

    /**
     * Set tax category
     *
     * @param string $cat
     * @return $this
     */
    public function setCategory(string $cat){
        $this->cat = $cat;
        return $this;
    }

    /**
     * Set category id
     *
     * @param integer $cid
     * @return $this
     */
    public function setCategoryId(int $cid){
        $this->cid = $cid;
        return $this;
    } 

    /**
     * Set tax name
     *
     * @param string $name
     * @return $this
     */
    public function setName(string $name){
        $this->name = $name;
        return $this;
    }

    /**
     * Set tax name
     *
     * @param double $exm
     * @return $this
     */
    public function setExemptSaleAmount(double $exm){
        $this->exm = $exm;
        return $this;
    }

    /**
     * Set number of lines taxed
     *
     * @param integer $lns
     * @return $this
     */
    public function setLinesTaxed(int $lns){
        $this->lns = $lns;
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
     * Set PCode
     *
     * @param integer $pcd
     * @return $this
     */
    public function setPCode(int $pcd){
        $this->pcd = $pcd;
        return $this;
    }

    /**
     * Set tax rate
     *
     * @param double $rate
     * @return $this
     */
    public function setRate(double $rate){
        $this->rate = $rate;
        return $this;
    }

    /**
     * Set surcharge
     *
     * @param boolean $sur
     * @return $this
     */
    public function setSurcharge(boolean $sur){
        $this->sur = $sur;
        return $this;
    }

    /**
     * Set tax
     *
     * @param double $tax
     * @return $this
     */
    public function setTax(double $tax){
        $this->tax = $tax;
        return $this;
    }

    /**
     * Set tax level
     *
     * @param integer $lvl
     * @return $this
     */
    public function setLevel(int $lvl){
        $this->lvl = $lvl;
        return $this;
    }

    /**
     * Set tax type id
     *
     * @param integer $tid
     * @return $this
     */
    public function setTypeId(int $tid){
        $this->tid = $tid;
        return $this;
    }


}
