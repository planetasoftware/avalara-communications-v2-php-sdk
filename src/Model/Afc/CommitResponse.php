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

    /**
     * Get status request
     * 
     * @return boolean
     */
    public function getStatus() {
        return $this->ok;
    }

    /**
     * Get error list
     * 
     * @return \PlanetaSoftware\Avalara\Communications\Model\Common\Error[]
     */
    public function getErrorList() {
        return $this->err;
    }

    /**
     * Set status request
     *
     * @param boolean $ok
     * @return $this
     */
    public function setStatus(boolean $ok){
        $this->ok = $ok;
        return $this;
    }

    /**
     * Add new error
     * 
     * @param \PlanetaSoftware\Avalara\Communications\Model\Common\Error $error
     * @return $this
     */
    public function addError(\PlanetaSoftware\Avalara\Communications\Model\Common\Error $error){
        $this->err[] = $error;
        return $this;
    }
    
}
