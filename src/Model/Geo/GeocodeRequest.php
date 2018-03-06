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
    
}
