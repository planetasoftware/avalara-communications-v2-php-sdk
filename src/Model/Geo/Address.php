<?php

namespace PlanetaSoftware\Avalara\Communications\Model\Geo;

use \PlanetaSoftware\Avalara\Communications\Model\BaseModel;

/**
 * Address - AFC Geo Output Address
 * 
 * 
 * This Model class represents the output data used by AFC Geo at the time of geocode and address and identify the tax
 * jurisdiction.
 * This Model the CASS certified address. Represented in a string array with as many lines of text as required by 
 * the standard way of printing the address on an envelope. 
 * The data in this Model is only returned if CASS validation has been enabled for the request.
 *
 * @author Oscar A <oscar@planetasoftware.com>
 */
class Address extends BaseModel{
    
    /**
     * Address Line
     * The street address line of the input address. 
     * This may also include the secondary unit if one exists for the address. 
     *
     * @var string The street address line of the input address.
     */
    public $addr;
    
    /**
     * City
     *
     * @var string The city part of the input address 
     */
    public $city;
    
    /**
     * State
     * 
     * @var string The state part of the input address
     */
    public $st;
    
    /**
     * Zip Code / Postal Code
     *
     * @var string The zip code part of the input address 
     */
    public $zip;
    
}
