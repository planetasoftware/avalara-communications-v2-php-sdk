<?php

namespace PlanetaSoftware\Avalara\Communications\Model\Afc;

use \PlanetaSoftware\Avalara\Communications\Model\BaseModel;

/**
 * TaxOverride
 * 
 * This Model class represents the input data used by AFC to change the rate of a tax in the AFC Engine.
 * 
 * WARNING: An override to exempt taxes OVERRIDES the tax information in Avalara’s tax research
 * database. This is not recommended for those that do not possess a full understanding of the tax
 * ramifications and liabilities when doing so.
 *
 * @author Oscar A <oscar@planetasoftware.com>
 */
class TaxOverride extends BaseModel {
    
    /**
     * Array to map attributes to class objects
     */
    const ATTRIBUTE_MAPPING = [
        'loc' => \PlanetaSoftware\Avalara\Communications\Model\Afc\Location::class,
        'brkt' => \PlanetaSoftware\Avalara\Communications\Model\Afc\TaxBracket::class,
    ];
    
    
    /**
     * @var SCOPE_COUNTRY override scope country
     */
    const SCOPE_COUNTRY = 0;
    /**
     * @var SCOPE_STATE override scope state
     */
    const SCOPE_STATE = 1;
    /**
     * @var SCOPE_COUNTY override scope county
     */
    const SCOPE_COUNTY = 2;
    /**
     * @var SCOPE_CITY override scope city
     */
    const SCOPE_CITY = 3;

    
    /**
     * @var LEVEL_FEDERAL Tax Level for override Federal
     */
    const LEVEL_FEDERAL = 0;
    /**
     * @var LEVEL_STATE Tax Level for override State
     */
    const LEVEL_STATE = 1;
    /**
     * @var LEVEL_COUNTY Tax Level for override County
     */
    const LEVEL_COUNTY = 2;
    /**
     * @var LEVEL_CITY Tax Level for override City
     */
    const LEVEL_CITY = 3;

    
    /**
     * Location
     * Override location information
     *
     * @var \PlanetaSoftware\Avalara\Communications\Model\Afc\Location
     */
    public $loc;

    /**
     * Scope
     * Scope for override  0 = Country, 1 = State, 2 = County, 3 = City
     *
     * @see TaxOverride::SCOPE_COUNTRY
     * @see TaxOverride::SCOPE_STATE
     * @see TaxOverride::SCOPE_COUNTY
     * @see TaxOverride::SCOPE_CITY
     * @var integer 
     */
    public $scp;

    /**
     * TaxType
     * Tax Type id for override
     *
     * @var integer 
     */
    public $tid;
    
    /**
     * TaxLevel
     * Tax Level for override  0 = Federal, 1 = State, 2 = County, 3 = City
     *
     * @var integer 
     */
    public $lvl;

    /**
     * LevelExemptible
     * Whether is level exemptible
     * false = not level exemptible, true = is level exemptible
     *
     * @var boolean
     */
    public $lvlExm;

    /**
     * TaxBrackets
     * List of tax brackets for override
     *
     * @var \PlanetaSoftware\Avalara\Communications\Model\Afc\TaxBracket[]
     */
    public $brkt;

}
