<?php

namespace PlanetaSoftware\Avalara\Communications\Model\Afc;

use \PlanetaSoftware\Avalara\Communications\Model\BaseModel;

/**
 * CommitRequest
 * 
 * This Model class represents the output data sent by AFC after commit
 *
 * @author Oscar A <oscar@planetasoftware.com>
 */
class CommitResponse extends BaseModel{
    
    /**
     * Array to map attributes to class objects
     */
    const ATTRIBUTE_MAPPING = [
        'err' => \PlanetaSoftware\Avalara\Communications\Model\Common\Error::class,
    ];
    
    /**
     * Status
     * false = request failed, true = request successful
     *
     * @var boolean 
     */
    public $ok;
    
    /**
     * Error
     * Error message(s) related to commit request
     *
     * @var \PlanetaSoftware\Avalara\Communications\Model\Common\Error[]
     */
    public $err;
    
}
