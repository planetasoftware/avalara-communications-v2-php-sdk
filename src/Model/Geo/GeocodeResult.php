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
    
}
