<?php

namespace PlanetaSoftware\Avalara\Communications\Model\Afc;

use \PlanetaSoftware\Avalara\Communications\Model\Geo\Address;

/**
 * Location 
 *  
 * This Model class represents the input data used by AFC to describe tax related location information.
 *
 * @author Oscar A <oscar@planetasoftware.com>
 */
class Location extends Address{
    
    /**
     * County
     * County for BillTo Address
     *
     * @var string
     */
    public $cnty;
    
    /**
     * Country
     * Country ISO for BillTo Address
     *
     * @var string
     */
    public $ctry;
    
    /**
     * Incorporated
     * Incorporated flag for BillTo location
     *
     * @var boolean
     */
    public $int;
    
    /**
     * Geocode
     * false = do not use geo lookup, true = use geo lookup
     *
     * @var boolean
     */
    public $geo;
    
    /**
     * PCode
     * PCode for BillTo location
     *
     * @var integer
     */
    public $pcd;
    
    /**
     * NpaNxx
     * NpaNxx for BillTo location
     *
     * @var integer
     */
    public $npa;
    
    /**
     * FipsCode
     * Fips code for BillTo location
     *
     * @var string
     */
    public $fips;

    /**
     * Get county
     * 
     * @return string
     */
    public function getCounty() {
        return $this->cnty;
    }

    /**
     * Get country
     * 
     * @return string
     */
    public function getCountry() {
        return $this->ctry;
    }
    
    /**
     * Get incorporated
     * 
     * @return boolean
     */
    public function getIsIncorporated() {
        return $this->int;
    }

    /**
     * Get geo code
     * 
     * @return boolean
     */
    public function getHasGeoCode() {
        return $this->geo;
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
     * Get NpaNxx for BillTo location
     * 
     * @return integer
     */
    public function getNpaNxx() {
        return $this->npa;
    }

    /**
     * Get FIPS Code
     * 
     * @return string
     */
    public function getFips() {
        return $this->fips;
    }

    /**
     * Set county
     *
     * @param string $cnty
     * @return $this
     */
    public function setCounty(string $cnty){
        $this->cnty = $cnty;
        return $this;
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
     * Set incorporated
     *
     * @param boolean $int
     * @return $this
     */
    public function setIncorporated(boolean $int){
        $this->int = $int;
        return $this;
    }

    /**
     * Set geo code
     *
     * @param boolean $geo
     * @return $this
     */
    public function setGeoCode(boolean $geo){
        $this->geo = $geo;
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
     * Set NpaNxx for BillTo location
     *
     * @param integer $npa
     * @return $this
     */
    public function setNpaNxx(int $npa){
        $this->npa = $npa;
        return $this;
    }

    /**
     * Set FIPS Code
     *
     * @param string $fips
     * @return $this
     */
    public function setFips(string $fips){
        $this->fips = $fips;
        return $this;
    }
}
