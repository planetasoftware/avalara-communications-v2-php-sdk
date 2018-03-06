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
}
