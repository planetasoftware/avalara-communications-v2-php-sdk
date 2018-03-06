<?php

namespace PlanetaSoftware\Avalara\Communications\Model\Afc;

use \PlanetaSoftware\Avalara\Communications\Model\BaseModel;

/**
 * KeyValuePair
 *  
 * This Model class represents the input data used by AFC to determine optional 
 * fields used for reporting.
 *
 * @author Oscar A <oscar@planetasoftware.com>
 */
class KeyValuePair extends BaseModel {

    /**
     * Key
     * Numeric value 1-10
     *
     * @var string
     */
    public $key;

    /**
     * Value
     * Alpha-numeric value up to 150 bytes
     * 
     * @var string
     */
    public $val;

}
