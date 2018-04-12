<?php

namespace PlanetaSoftware\Avalara\Communications\Model\Afc;

use \PlanetaSoftware\Avalara\Communications\Model\BaseModel;

/**
 * SummarizedTax
 * 
 * This Model class represents the output data returned with summarized tax information.
 *
 * @author Oscar A <oscar@planetasoftware.com>
 */
class SummarizedTax extends BaseModel {

    /**
     * MaxBase
     * Maximum base for tax bracket
     * 
     * @var double
     */
    public $max;

    /**
     * MinBase
     * Minimum base for tax bracket
     * 
     * @var double
     */
    public $min;

    /**
     * TotalCharge
     * Total charge amount for invoice
     * 
     * @var double
     */
    public $tchg;

    /**
     * @see Tax::$calc
     * @var integer
     */
    public $calc;

    /**
     * @see Tax::$cat
     * @var string
     */
    public $cat;

    /**
     * @see Tax::$cid
     * @var integer
     */
    public $cid;

    /**
     * @see Tax::$name
     * @var string
     */
    public $name;

    /**
     * @see Tax::$exm
     * @var double
     */
    public $exm;

    /**
     * @see Tax::$lns
     * @var integer
     */
    public $lns;

    /**
     * @see Tax::$pcd
     * @var integer
     */
    public $pcd;

    /**
     * @see Tax::$rate
     * @var double
     */
    public $rate;

    /**
     * @see Tax::$sur
     * @var boolean
     */
    public $sur;

    /**
     * @see Tax::$tax
     * @var double
     */
    public $tax;

    /**
     * @see Tax::$lvl
     * @var integer
     */
    public $lvl;

    /**
     * @see Tax::$tid
     * @var integer
     */
    public $tid;

    /**
     * Get maximum base for tax bracket
     * 
     * @return double
     */
    public function getMaxBase() {
        return $this->max;
    }

    /**
     * Get minimum base for tax bracket
     * 
     * @return double
     */
    public function getMinBase() {
        return $this->min;
    }

    /**
     * Get total charge
     * 
     * @return double
     */
    public function getTotalCharge() {
        return $this->tchg;
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
     * Get category
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
     * Get level 
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
    public function getTaxTypeId() {
        return $this->tid;
    }

    /**
     * Set minimum base for tax bracket
     *
     * @param double $max
     * @return $this
     */
    public function setMaxBase(double $max){
        $this->max = $max;
        return $this;
    }

    /**
     * Set minimum base for tax bracket
     *
     * @param double $min
     * @return $this
     */
    public function setMinBase(double $min){
        $this->min = $min;
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
     * Set category
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
     * Set level
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
    public function setTaxTypeId(int $tid){
        $this->tid = $tid;
        return $this;
    }

}
