<?php


namespace PlanetaSoftware\Avalara\Communications\Model\Geo;

use \PlanetaSoftware\Avalara\Communications\Model\BaseModel;


/**
 * GeocodeResult - AFC Geo Output Data
 * 
 * 
 * This section describes the output data returned by AFC Geo after an address has been geocoded.
 *
 * @author Oscar A <oscar@planetasoftware.com>
 */
class GeocodeResult extends BaseModel{
    
    /**
     * Array to map attributes to class objects
     */
    const ATTRIBUTE_MAPPING = [
        'cass' => \PlanetaSoftware\Avalara\Communications\Model\Geo\Address::class
    ];


    /**
     * @var string reference
     */
    public $ref;
    
    /**
     * CASS (Coding Accuracy Support System) Response
     *
     * @var \PlanetaSoftware\Avalara\Communications\Model\Geo\Address Address - AFC Geo Output Address
     */
    public $cass;
    
    /**
     * Census Block
     * This data can be used with external data sources to obtain additional demographic data about the location. 
     *
     * @var integer The Census Block
     */
    public $cBlk;
    
    /**
     * Census Tract
     *  This data can be used with external data sources to obtain additional demographic data about the location
     *
     * @var integer The Census Tract
     */
    public $cTrc;
    
    /**
     * County
     * The name of the county the location is located within. 
     *
     * @var string County
     */
    public $cnty;
    
    /**
     * FeatureID
     * The Geographic Names Information System (GNIS) feature id is a unique, 
     * permanent geographic feature identifier assigned by the U.S. Board on Geographic Names.
     *
     * @var integer FeatureID
     */
    public $feat;
    
    /**
     * FIPS Code
     * The FIPS Code for this location expressed as a String. FIPS codes are 10 digit numbers in the format of 
     * SSCCCPPPPP where SS = State Code , CCC = County Code and PPPPP = Place Code. It will be the string 
     * implementation of whatever is in the FIPS Code property. 
     *
     * @var string FIPS Code
     */
    public $fips;
    
    /**
     * Incorporated
     * Indicates if the location is in an incorporated area. 
     * True if the location is in an incorporated area; False if the location is in an unincorporated area.
     *
     * @var boolean Whether it is incorporated or not
     */
    public $inc;
    
    /**
     * Tax Jurisdiction Name
     * This is the name of the jurisdiction identified by the PCode property.
     *
     * @var string The jurisdiction name
     */
    public $jur;
    
    /**
     * Latitude
     *
     * @var double The latitude (in degrees) of this location.
     */
    public $lat;
    
    /**
     * Longitude
     *
     * @var double The longitude (in degrees) of this location.
     */
    public $long;
    
    /**
     * PCode
     * The PCode that should be used when calculating taxes using AFC. 
     * This PCode may be a county, city or special tax jurisdiction. 
     *
     * @var integer PCode
     */
    public $pcd;
    
    /**
     * Score
     * Returns the score of the match. 
     * The score indicates the likelihood that the address returned is a correct 
     * match for the input data. A value between 0.0 and 1.0
     *
     * @var double score
     */
    public $scr;
    
    /**
     * Error
     *
     * @var string error
     */
    public $err;

   /**
     * Get reference
     * 
     * @return string
     */
    public function getReference() {
        return $this->ref;
    }

    /**
     * Get CASS (Coding Accuracy Support System)
     * 
     * @return boolean
     */
    public function getIsCodingAccuracy() {
        return $this->cass;
    }

    /**
     * Get Census Block
     * 
     * @return integer
     */
    public function getCensusBlock() {
        return $this->cBlk;
    }
    
    /**
     * Get Census Tract
     * 
     * @return integer
     */
    public function getCensusTract() {
        return $this->cTrc;
    }

    /**
     * Get County
     * 
     * @return string
     */
    public function getCounty() {
        return $this->cnty;
    }

    /**
     * Get Feature id
     * 
     * @return integer
     */
    public function getFeature() {
        return $this->feat;
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
     * Get Incorporated
     * 
     * @return boolean
     */
    public function getIsIncorporated() {
        return $this->inc;
    }

    /**
     * Get Jurisdiction
     * 
     * @return string
     */
    public function getJurisdiction() {
        return $this->jur;
    }

    /**
     * Get latitude
     * 
     * @return double
     */
    public function getLatitude() {
        return $this->lat;
    }

    /**
     * Get longitude
     * 
     * @return double
     */
    public function getLongitude() {
        return $this->long;
    }

    /**
     * Get PCode
     * 
     * @return integer
     */
    public function getPcode() {
        return $this->pcd;
    }

    /**
     * Get score
     * 
     * @return double
     */
    public function getScore() {
        return $this->scr;
    }

    /**
     * Get error
     * 
     * @return string
     */
    public function getError() {
        return $this->err;
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
     * Set CASS (Coding Accuracy Support System)
     *
     * @param boolean $cass
     * @return $this
     */
    public function setCass(boolean $cass){
        $this->cass = $cass;
        return $this;
    }

    /**
     * Set census block
     *
     * @param integer $cBlk
     * @return $this
     */
    public function setCensusBlock(int $cBlk){
        $this->cBlk = $cBlk;
        return $this;
    }

    /**
     * Set census tract
     *
     * @param integer $cBlk
     * @return $this
     */
    public function setCensusTract(int $cTrc){
        $this->cTrc = $cTrc;
        return $this;
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
     * Set feature id
     *
     * @param integer $feat
     * @return $this
     */
    public function setFeature(int $feat){
        $this->feat = $feat;
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

    /**
     * Set incorporated
     *
     * @param boolean $inc
     * @return $this
     */
    public function setIncorporated(boolean $inc){
        $this->inc = $inc;
        return $this;
    }

    /**
     * Set jurisdiction
     *
     * @param string $jur
     * @return $this
     */
    public function setJurisdiction(string $jur){
        $this->jur = $jur;
        return $this;
    }

    /**
     * Set latitude
     *
     * @param double $lat
     * @return $this
     */
    public function setLatitude(boolean $lat){
        $this->lat = $lat;
        return $this;
    }

    /**
     * Set longitude
     *
     * @param double $long
     * @return $this
     */
    public function setLongitude(boolean $long){
        $this->long = $long;
        return $this;
    }

    /**
     * Set PCode
     *
     * @param integer $pcd
     * @return $this
     */
    public function setPcode(int $pcd){
        $this->pcd = $pcd;
        return $this;
    }

    /**
     * Set score
     *
     * @param double $scr
     * @return $this
     */
    public function setScore(double $scr){
        $this->scr = $scr;
        return $this;
    }

    /**
     * Set error
     *
     * @param string $err
     * @return $this
     */
    public function setError(double $err){
        $this->err = $err;
        return $this;
    }
}