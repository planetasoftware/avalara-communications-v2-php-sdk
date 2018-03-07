<?php

namespace PlanetaSoftware\Avalara\Communications\Model\Geo;

use \PlanetaSoftware\Avalara\Communications\Model\Geo\Address;

/**
 * GeocodeRequest - AFC Geo Input Data 
 * 
 * 
 * This Model class represents the input data used by AFC Geo to geocode and address and identify the tax
 * jurisdiction. This includes the input address and additional parameters that control the options used to
 * locate the address. The address can be specified as a single line address with the street address and ZIP
 * code, a two line address with an array of two strings or by using the individual address components:
 * street address, city, state and ZIP code.
 *
 * @author Oscar A <oscar@planetasoftware.com>
 */
class GeocodeRequest extends Address{
    
    /**
     * @var string reference
     */
    public $ref;
    
    /**
     * CASS (Coding Accuracy Support System)
     * This flag indicates if CASS Certification should be performed.
     * 
     * @var boolean Whether or not to perform CASS Certification (Default is false)
     * 
     */
    public $cass = false;
    
    /**
     * Latitude
     *
     * @var double The latitude (in degrees) of the location.
     */
    public $lat;
    
    /**
     * Longitude
     *
     * @var double The longitude (in degrees) of the location.
     */
    public $long;

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
    public function getIsCass() {
        return $this->cass;
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
     * Set latitude
     *
     * @param double $lat
     * @return $this
     */
    public function setLatitude(double $lat){
        $this->lat = $lat;
        return $this;
    }

    /**
     * Set longitude
     *
     * @param double $long
     * @return $this
     */
    public function setLongitude(double $long){
        $this->long = $long;
        return $this;
    }
    
}
