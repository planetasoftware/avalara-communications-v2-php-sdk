<?php

namespace PlanetaSoftware\Avalara\Communications\Model\Afc;

use \PlanetaSoftware\Avalara\Communications\Model\BaseModel;

/**
 * Line Item
 *  
 * This Model class represents the input data used by AFC to determine the each item on an invoice
 * and information indicating the way it should be processed for taxation.
 *
 * @author Oscar A <oscar@planetasoftware.com>
 */
class LineItem extends BaseModel {
    
    /**
     * Array to map attributes to class objects
     */
    const ATTRIBUTE_MAPPING = [
        'from' => \PlanetaSoftware\Avalara\Communications\Model\Afc\Location::class,
        'to' => \PlanetaSoftware\Avalara\Communications\Model\Afc\Location::class,
        'brdg' => \PlanetaSoftware\Avalara\Communications\Model\Afc\BridgeData::class,
        'opt' => \PlanetaSoftware\Avalara\Communications\Model\Afc\KeyValuePair::class,
    ];
    
    
    /**
     * @var SALE_TYPE_WHOLESALE wholesale
     */
    const SALE_TYPE_WHOLESALE = 0;
    /**
     * @var SALE_TYPE_RETAIL retail
     */
    const SALE_TYPE_RETAIL = 1;
    /**
     * SAU ONLY
     * @var SALE_TYPE_CONSUMED consumed
     */
    const SALE_TYPE_CONSUMED = 2;
    /**
     * SAU ONLY
     * @var SALE_TYPE_VENDOR vendor
     */
    const SALE_TYPE_VENDOR = 3;
    
    
    /**
     * @var ADJUSTMENT_METHOD_DEFAULT default
     */
    const ADJUSTMENT_METHOD_DEFAULT = 0;
    /**
     * @var ADJUSTMENT_METHOD_NOTFAVORABLE Least favorable rate to customer
     */
    const ADJUSTMENT_METHOD_NOTFAVORABLE = 1;
    /**
     * @var ADJUSTMENT_METHOD_FAVORABLE Most favorable rate to customer
     */
    const ADJUSTMENT_METHOD_FAVORABLE = 2;


    /**
     * Reference ID (LineNumber)
     * Reference Id for line item
     *
     * @var string
     */
    public $ref;

    /**
     * From Location
     * From/Origination location information
     *
     * @var \PlanetaSoftware\Avalara\Communications\Model\Afc\Location
     */
    public $from;

    /**
     * To Location
     * To/Destination location information
     *
     * @var \PlanetaSoftware\Avalara\Communications\Model\Afc\Location
     */
    public $to;

    /**
     * Charge
     *
     * @var number
     */
    public $chg;

    /**
     * Line count
     *
     * @var integer
     */
    public $line;

    /**
     * Locations
     * Number of locations
     *
     * @var integer
     */
    public $loc;

    /**
     * Minutes
     *
     * @var number
     */
    public $min;
    
    /**
     * SaleType
     * 0 = wholesale, 1 = retail, [SAU ONLY 2 = consumed, 3 = vendor use ]
     *
     * @see LineItem::SALE_TYPE_WHOLESALE
     * @see LineItem::SALE_TYPE_RETAIL
     * @see LineItem::SALE_TYPE_CONSUMED
     * @see LineItem::SALE_TYPE_VENDOR
     * @var integer
     */
    public $sale;

    /**
     * PrivateLineSplit
     * % of private line split A point (p2p)
     *
     * @var number
     */
    public $plsp;

    /**
     * TaxInclusive
     * Whether or not tax is inclusive
     * false = not tax inclusive, true = is tax inclusive
     *
     * @var boolean
     */
    public $incl;

    /**
     * ProRatedPct
     * % for pro-rated calculation of fixed taxes
     *
     * @var number
     */
    public $pror;

    /**
     * BridgeData
     * Bridge Conference specific settings
     *
     * @var \PlanetaSoftware\Avalara\Communications\Model\Afc\BridgeData
     */
    public $brdg;

    /**
     * TransactionType
     * Transaction Type (short)
     *
     * @var integer
     */
    public $tran;

    /**
     * ServiceType
     * 
     * Service Type (short)
     *
     * @var integer
     */
    public $serv;

    /**
     * Debit
     * 
     * Whether the transaction was made with debit card or not
     * false = not a debit card transaction, true = apply debit card logic to transaction
     *
     * @var boolean
     */
    public $dbt;

    /**
     * IsAdjustment
     * 
     * Whether or not the transaction is a credit
     * false = not a credit/adjustment, true = is a credit/adjustment
     *
     * @var boolean
     */
    public $adj;
    
    /**
     * AdjustmentMethod
     * 0 = Default, 1 = Least favorable rate to customer, 2 = Most favorable rate to customer
     *
     * @see LineItem::ADJUSTMENT_METHOD_DEFAULT
     * @see LineItem::ADJUSTMENT_METHOD_NOTFAVORABLE
     * @see LineItem::ADJUSTMENT_METHOD_FAVORABLE
     * @var integer
     */
    public $adjm;

    /**
     * DiscountType
     * Refer to manual for valid discount types and descriptions
     *
     * @var integer
     */
    public $disc;

    /**
     * OptionalFields
     * Optional fields for reporting
     *
     * @var \PlanetaSoftware\Avalara\Communications\Model\Afc\KeyValuePair[]
     */
    public $opt;

    /**
     *
     * @var integer
     */
    public $prop;

}
