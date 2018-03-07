<?php

namespace PlanetaSoftware\Avalara\Communications\Model\Common;

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

    /**
     * Get code
     * 
     * @return integer
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Get message
     * 
     * @return string
     */
    public function getMessage() {
        return $this->msg;
    }

    /**
     * Set code
     *
     * @param integer $code
     * @return $this
     */
    public function setCode(int $code){
        $this->code = $code;
        return $this;
    }

     /**
     * Set message
     *
     * @param string $msg
     * @return $this
     */
    public function setMessage(string $msg){
        $this->msg = $msg;
        return $this;
    }



}
