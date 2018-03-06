<?php


namespace PlanetaSoftware\Avalara\Communications\Model\Afc;

use \PlanetaSoftware\Avalara\Communications\Model\BaseModel;

/**
 * Invoice 
 *  
 * This Model class represents the input data used by AFC to group transactions that apply to the same customer.
 * AFC maintains a history of the transactions and applies the Steps, Brackets and/or Limits to entire group of transactions.
 *
 * @author Oscar A <oscar@planetasoftware.com>
 */
class Invoice extends BaseModel{
    
    /**
     * Array to map attributes to class objects
     */
    const ATTRIBUTE_MAPPING = [
        'bill' => \PlanetaSoftware\Avalara\Communications\Model\Afc\Location::class,
        'exms' => \PlanetaSoftware\Avalara\Communications\Model\Afc\TaxExemption::class,
        'itms' => \PlanetaSoftware\Avalara\Communications\Model\Afc\LineItem::class,
        'opt'  => \PlanetaSoftware\Avalara\Communications\Model\Common\KeyValuePair::class,
    ];
    
    /**
     * @var CUSTOMER_TYPE_RESIDENTIAL Customer type residential
     */
    const CUSTOMER_TYPE_RESIDENTIAL = 0;
    /**
     * @var CUSTOMER_TYPE_BUSINESS Customer type business
     */
    const CUSTOMER_TYPE_BUSINESS = 1;
    /**
     * @var CUSTOMER_TYPE_SENIOR Customer type senior citizen
     */
    const CUSTOMER_TYPE_SENIOR = 2;
    /**
     * @var CUSTOMER_TYPE_INDUSTRIAL Customer type industrial
     */
    const CUSTOMER_TYPE_INDUSTRIAL = 3;
    
    
    /**
     * DocumentCode
     * Unique document code to be applied to invoice for Commit
     *
     * @var string
     */
    public $doc;
    
    /**
     * Commit
     * false = uncommitted, true = committed
     *
     * @var boolean
     */
    public $cmmt;
    
    /**
     * Bill to Location
     * Bill to location information
     *
     * @var \PlanetaSoftware\Avalara\Communications\Model\Afc\Location
     */
    public $bill;
    
    /**
     * CustomerType
     * 0 = Residential, 1 = Business, 2 = Senior Citizen, 3 = Industrial
     *
     * @see Invoice::CUSTOMER_TYPE_RESIDENTIAL
     * @see Invoice::CUSTOMER_TYPE_BUSINESS
     * @see Invoice::CUSTOMER_TYPE_SENIOR
     * @see Invoice::CUSTOMER_TYPE_INDUSTRIAL
     * @var integer
     */
    public $cust = self::CUSTOMER_TYPE_RESIDENTIAL;
    
    /**
     * Lifeline
     * Whether or not customer is participant in the lifeline program for low income consumers
     * false = customer is not a lifeline participant, true = customer is a lifeline participant
     *
     * @see https://www.fcc.gov/general/lifeline-program-low-income-consumers
     * @var boolean
     */
    public $lfln;
    
    /**
     * Date
     * Date to be applied to invoice / transaction
     *
     * @var string
     */
    public $date;
    
    /**
     * Exemptions
     * List of exemptions to be applied to invoice
     *
     * @var \PlanetaSoftware\Avalara\Communications\Model\Afc\TaxExemption[]
     */
    public $exms = [];
    
    /**
     * LineItems
     * List of line items for invoice
     *
     * @var \PlanetaSoftware\Avalara\Communications\Model\Afc\LineItem[]
     */
    public $itms = [];
    
    /**
     * InvoiceMode
     * Whether line items are related and part of a single invoice
     * AFC maintains a history of the transactions and applies the Steps, Brackets and/or Limits to entire group of transactions.
     * false = line items are unrelated, true = line items are part of a single invoice
     *
     * For Example:
     *      suppose a jurisdiction charges a 10% sales on just the first $10 of an invoice. If two separate
     *      $6 transactions on the invoice are passed while not in Invoice Mode, two $0.60 tax charges would be
     *      erroneously totaled and a $1.20 tax would be generated. However, if these same transactions are passed
     *      while in Invoice Mode, the total tax charge would be correctly totaled and a $1.00 tax would be generated.
     * 
     * @var boolean
     */
    public $invm;
    
    /**
     * ReturnDetail
     * Whether to return line item level tax results
     * false = do not return line item level tax results, true = return line item level tax results
     *
     * @var boolean
     */
    public $dtl;
    
    /**
     * ReturnSummary
     * Whether to return summarized tax results
     * false = do not return summarized tax results, true = return summarized tax results
     *
     * @var boolean
     */
    public $summ;
    
    /**
     * OptionalFields
     * Optional fields for reporting
     *
     * @var \PlanetaSoftware\Avalara\Communications\Model\Common\KeyValuePair[]
     */
    public $opt = [];
}
