<?php

namespace PlanetaSoftware\Avalara\Communications\Model\Afc;

use \PlanetaSoftware\Avalara\Communications\Model\BaseModel;

/**
 * SummarizedTax
 * 
 * This Model class represents the output data returned with summarized tax information.
 *
 * @author Oscar A <oscar@planetasoftware.com>
 */
class SummarizedTax extends BaseModel {

    /**
     * MaxBase
     * Maximum base for tax bracket
     * 
     * @var double
     */
    public $max;

    /**
     * MinBase
     * Minimum base for tax bracket
     * 
     * @var double
     */
    public $min;

    /**
     * TotalCharge
     * Total charge amount for invoice
     * 
     * @var double
     */
    public $tchg;

    /**
     * @see Tax::$calc
     * @var integer
     */
    public $calc;

    /**
     * @see Tax::$cat
     * @var string
     */
    public $cat;

    /**
     * @see Tax::$cid
     * @var integer
     */
    public $cid;

    /**
     * @see Tax::$name
     * @var string
     */
    public $name;

    /**
     * @see Tax::$exm
     * @var double
     */
    public $exm;

    /**
     * @see Tax::$lns
     * @var integer
     */
    public $lns;

    /**
     * @see Tax::$pcd
     * @var integer
     */
    public $pcd;

    /**
     * @see Tax::$rate
     * @var double
     */
    public $rate;

    /**
     * @see Tax::$sur
     * @var boolean
     */
    public $sur;

    /**
     * @see Tax::$tax
     * @var double
     */
    public $tax;

    /**
     * @see Tax::$lvl
     * @var integer
     */
    public $lvl;

    /**
     * @see Tax::$tid
     * @var integer
     */
    public $tid;

}
