<?php

namespace PlanetaSoftware\Avalara\Communications\Model\Afc;

use \PlanetaSoftware\Avalara\Communications\Model\BaseModel;

/**
 * Description of CompanyData
 *
 * This Model class represents the input data used identify the company information
 * responsible to collect the taxes
 *
 * @author Oscar A <oscar@planetasoftware.com>
 */
class CompanyData extends BaseModel{
    
    /**
     * Array to map attributes to class objects
     */
    const ATTRIBUTE_MAPPING = [
        'excl' => \PlanetaSoftware\Avalara\Communications\Model\Afc\Exclusion::class,
    ];
    
    /**
     * Business Class ILEC (Incumbent local exchange carrier)
     * 
     * @see https://en.wikipedia.org/wiki/Incumbent_local_exchange_carrier
     * @var BUSINESS_CLASS_ILEC Business Class ILEC
     */
    const BUSINESS_CLASS_ILEC = 0;
    /**
     * Business Class CLEC (Competitive local exchange carrier)
     * 
     * @see https://en.wikipedia.org/wiki/Competitive_local_exchange_carrier
     * @var BUSINESS_CLASS_CLEC Business Class CLEC
     */
    const BUSINESS_CLASS_CLEC = 0;
    
    /**
     * Service Class: Primary Local
     * 
     * @var SERVICE_CLASS_PRIMARY_LOCAL
     */
    const SERVICE_CLASS_PRIMARY_LOCAL = 0;
    /**
     * Service Class: Primary long distance
     * 
     * @var SERVICE_CLASS_PRIMARY_LONG_DISTANCE
     */
    const SERVICE_CLASS_PRIMARY_LONG_DISTANCE = 1;
    
    
    /**
     * BusinessClass
     * 0 = ILEC, 1 = CLEC
     * 
     * @see CompanyData::BUSINESS_CLASS_ILEC
     * @see CompanyData::BUSINESS_CLASS_CLEC
     * @var integer 
     */
    public $bscl = self::BUSINESS_CLASS_CLEC;
    
    /**
     * ServiceClass
     * 0 = Primary Local, 1 = Primary Long Distance
     * 
     * @see CompanyData::SERVICE_CLASS_PRIMARY_LOCAL
     * @see CompanyData::SERVICE_CLASS_PRIMARY_LONG_DISTANCE
     * @var integer
     */
    public $svcl = self::SERVICE_CLASS_PRIMARY_LOCAL;
    
    /**
     * Facilities
     * Whether or not the seller is based on facilities
     * true = seller is facilities based, false = seller is not facilities based
     *
     * @var boolean
     */
    public $fclt = false;
    
    /**
     * Franchise
     * Whether or not the seller has franchise agreement
     * true = seller has franchise agreement, false = franchise taxes do not apply to seller
     *
     * @var boolean
     */
    public $frch = false;
    
    /**
     * Regulated
     * Whether or not the seller is regulated
     * true = seller is regulated, false = seller is not regulated
     * 
     * @var boolean
     */
    public $reg = true;
    
    /**
     * Exclusion
     * List of exclusions to apply to transactions
     *
     * @var \PlanetaSoftware\Avalara\Communications\Model\Afc\Exclusion[]
     */
    public $excl = [];
    
    /**
     * CompanyIdentifier
     * 20 byte alpha-numeric reporting field for Company Identifier
     *
     * @var string
     */
    public $idnt;
    
    

}
