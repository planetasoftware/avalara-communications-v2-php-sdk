<?php

namespace PlanetaSoftware\Avalara\Communications\Model\Afc;

use \PlanetaSoftware\Avalara\Communications\Model\BaseModel;

/**
 * Error
 * 
 * This Model class represents the output error returned after an invalid request
 *
 * @author Oscar A <oscar@planetasoftware.com>
 */
class Error extends BaseModel {

    /**
     * Code
     * Numeric code associated with error
     *
     * @var integer
     */
    public $code;

    /**
     * Message
     * Message associated with error
     *
     * @var string
     */
    public $msg;

}
