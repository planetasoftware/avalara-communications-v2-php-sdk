<?php

namespace PlanetaSoftware\Avalara\Communications\Model\Afc;

use \PlanetaSoftware\Avalara\Communications\Model\BaseModel;

/**
 * TaxExemption 
 *  
 * This Model class represents the input data used by AFC to represent Tax Exception information
 * that can be applied to an invoice.
 *
 * @author Oscar A <oscar@planetasoftware.com>
 */
class TaxExemption extends BaseModel{
    
    /**
     * Array to map attributes to class objects
     */
    const ATTRIBUTE_MAPPING = [
        'loc' => \PlanetaSoftware\Avalara\Communications\Model\Afc\Location::class,
    ];
    
    /**
     * Force
     * Force exemption to apply
     * 
     * false = apply level exemption allowed logic, true = ignore level exemption allowed logic
     *
     * @var boolean
     */
    public $frc; 

    /**
     * Location
     * Exemption location information
     *
     * @var \PlanetaSoftware\Avalara\Communications\Model\Afc\Location
     */
    public $loc;
    
    /**
     * TaxType
     * Tax Type for Tax Type Exemption
     *
     * @var integer
     */
    public $tpe;
    
    /**
     * TaxLevel
     * Tax Level for Tax Type Exemption
     *
     * @var integer
     */
    public $lvl;

    /**
     * TaxCategory
     * Tax Category for Tax Category Exemptions
     *
     * @var integer
     */
    public $cat;
}
