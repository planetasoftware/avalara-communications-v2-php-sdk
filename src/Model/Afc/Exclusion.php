<?php
namespace PlanetaSoftware\Avalara\Communications\Model\Afc;

use \PlanetaSoftware\Avalara\Communications\Model\BaseModel;

/**
 * Description of CompanyData
 *
 * This Model class represents the input data used identify tax exclusion
 * of a country/state for the company
 *
 * @author Oscar A <oscar@planetasoftware.com>
 */
class Exclusion extends BaseModel{
    
    /**
     * Country
     * Country ISO for exclusion
     *
     * @var string
     */
    public $ctry;
    
    /**
     * State
     * State abbreviation for exclusion
     *
     * @var string
     */
    public $st;

    /**
     * Has Exclusion
     * true = enable exclusion, false = disable exclusion
     *
     * @var boolean
     */
    public $excl;

    /**
     * Get Country
     * 
     * @return string
     */
    public function getCountry() {
        return $this->ctry;
    }

    /**
     * Get state
     * 
     * @return string
     */
    public function getState() {
        return $this->st;
    }

    /**
     * Get exlusion
     * 
     * @return boolean
     */
    public function getHasExclusion() {
        return $this->excl;
    }

    /**
     * Set country
     *
     * @param string $ctry
     * @return $this
     */
    public function setCountry(string $ctry){
        $this->ctry = $ctry;
        return $this;
    }

    /**
     * Set state
     *
     * @param string $st
     * @return $this
     */
    public function setState(string $st){
        $this->st = $st;
        return $this;
    }

    /**
     * Set exclusion
     *
     * @param boolean $excl
     * @return $this
     */
    public function setExclusion(boolean $excl){
        $this->excl = $excl;
        return $this;
    }
}
