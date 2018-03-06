<?php

namespace PlanetaSoftware\Avalara\Communications\Model\Afc;

use \PlanetaSoftware\Avalara\Communications\Model\BaseModel;

/**
 * Tax
 * 
 * This Model class represents the output data returned with tax value for an item line.
 *
 * @author Oscar A <oscar@planetasoftware.com>
 */
class Tax extends BaseModel {
    
    
    /**
     * @var CALCULATION_TYPE_RATE rate
     */
    const CALCULATION_TYPE_RATE = 1;
    /**
     * @var CALCULATION_TYPE_FIXED fixed
     */
    const CALCULATION_TYPE_FIXED = 2;
    /**
     * @var CALCULATION_TYPE_PERMINUTE per minute
     */
    const CALCULATION_TYPE_PERMINUTE = 3;
    /**
     * @var CALCULATION_TYPE_PERLINE per line
     */
    const CALCULATION_TYPE_PERLINE = 4;
    /**
     * @var CALCULATION_TYPE_SELFTAXING self taxing rate
     */
    const CALCULATION_TYPE_SELFTAXING = 5;
    /**
     * @var CALCULATION_TYPE_PERBRACKET per bracket
     */
    const CALCULATION_TYPE_PERBRACKET = 6;
    /**
     * @var CALCULATION_TYPE_TIER fixed on tier
     */
    const CALCULATION_TYPE_TIER = 7;
    
    
    /**
     * @var LEVEL_FEDERAL federal
     */
    const LEVEL_FEDERAL = 0;
    /**
     * @var LEVEL_STATE state
     */
    const LEVEL_STATE = 1;
    /**
     * @var LEVEL_COUNTY county
     */
    const LEVEL_COUNTY = 2;
    /**
     * @var LEVEL_CITY city
     */
    const LEVEL_CITY = 3;
    /**
     * @var LEVEL_UNINCORPORATED unincorporated
     */
    const LEVEL_UNINCORPORATED = 4;

    /**
     * Billable
     * Whether or not it is a standard billable tax
     * false = non-billable tax, true = standard billable tax
     * 
     * @var boolean
     */
    public $bill;

    /**
     * Compliance
     * Whether or not it is a standard compliance tax
     * false = non-compliance tax, true = standard compliance tax
     * 
     * @var boolean
     */
    public $cmpl;

    /**
     * TaxableMeasure
     * Taxable Measure applicable to tax
     * 
     * @var double
     */
    public $tm;

    /**
     * CalculationType
     * 1 = Rate, 2 = Fixed, 3 = PerMinute, 4 = PerLine, 5 = SelfTaxingRate, 6 = PerBracket, 7 = FixedOnTier
     * 
     * @see Tax::CALCULATION_TYPE_RATE
     * @see Tax::CALCULATION_TYPE_FIXED
     * @see Tax::CALCULATION_TYPE_PERMINUTE
     * @see Tax::CALCULATION_TYPE_PERLINE
     * @see Tax::CALCULATION_TYPE_SELFTAXING
     * @see Tax::CALCULATION_TYPE_PERBRACKET
     * @see Tax::CALCULATION_TYPE_TIER
     * @var integer
     */
    public $calc;

    /**
     * CategoryName
     * Tax Category Name
     * 
     * @var string
     */
    public $cat;

    /**
     * CategoryID
     * Tax Category Numerical ID
     * 
     * @var integer
     */
    public $cid;

    /**
     * Name
     * Tax Name
     * 
     * @var string
     */
    public $name;

    /**
     * ExemptSaleAmount
     * Exempt Sale Amount
     * 
     * @var double
     */
    public $exm;

    /**
     * Lines
     * Number of lines taxed
     * 
     * @var integer
     */
    public $lns;

    /**
     * Minutes
     * Number of minutes taxed
     * 
     * @var double
     */
    public $min;

    /**
     * PCode
     * PCode representing reporting tax jurisdiction
     * 
     * @var integer
     */
    public $pcd;

    /**
     * Rate
     * Applicable tax rate
     * 
     * @var double
     */
    public $rate;

    /**
     * Surcharge
     * Whether if surcharge rules apply
     * false = not a surcharge, true = surcharge rules apply
     * 
     * @var boolean
     */
    public $sur;

    /**
     * Amount
     * Tax Amount
     * 
     * @var double
     */
    public $tax;

    /**
     * Level
     * Tax Level 0 = Federal, 1 = State, 2 = County, 3 = City, 4 = Unincorporated 
     * 
     * @see Tax::LEVEL_FEDERAL = 0;
     * @see Tax::LEVEL_STATE = 1;
     * @see Tax::LEVEL_COUNTY = 2;
     * @see Tax::LEVEL_CITY = 3;
     * @see Tax::LEVEL_UNINCORPORATED = 4;
     * @var integer
     */
    public $lvl;

    /**
     * Type
     * Tax Type ID
     * 
     * @var integer
     */
    public $tid;

}
