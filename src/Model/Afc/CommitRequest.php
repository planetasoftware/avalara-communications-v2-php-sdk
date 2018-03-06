<?php

namespace PlanetaSoftware\Avalara\Communications\Model\Afc;

use \PlanetaSoftware\Avalara\Communications\Model\BaseModel;

/**
 * CommitRequest
 * 
 * This Model class represents the input data used by AFC to commit
 *
 * @author Oscar A <oscar@planetasoftware.com>
 */
class CommitRequest extends BaseModel{
    
    /**
     * Array to map attributes to class objects
     */
    const ATTRIBUTE_MAPPING = [
        'opt' => \PlanetaSoftware\Avalara\Communications\Model\Common\KeyValuePair::class,
    ];
    
    /**
     * DocumentCode
     * Unique document code to be applied for Commit
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
     * OptionalFields
     * Optional fields for reporting to be updated with commit
     *
     * @var \PlanetaSoftware\Avalara\Communications\Model\Common\KeyValuePair[]
     */
    public $opt = [];
}
