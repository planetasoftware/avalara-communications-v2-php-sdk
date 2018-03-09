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

    /**
     * Get document code
     * 
     * @return string
     */
    public function getDocumentCode() {
        return $this->doc;
    }

    /**
     * Get committed
     * 
     * @return boolean
     */
    public function getIsCommitted() {
        return $this->cmmt;
    }


    /**
     * Get optional fields list
     * 
     * @return \PlanetaSoftware\Avalara\Communications\Model\Common\KeyValuePair[]
     */
    public function getOptionalFieldList() {
        return $this->opt;
    }

    /**
     * Set document code
     *
     * @param string $doc
     * @return $this
     */
    public function setDocumentCode(string $doc){
        $this->doc = $doc;
        return $this;
    }

    /**
     * Set commit
     *
     * @param boolean $cmmt
     * @return $this
     */
    public function setCommitted(boolean $cmmt){
        $this->cmmt = $cmmt;
        return $this;
    }

    /**
     * Add new optinal field
     * 
     * @param \PlanetaSoftware\Avalara\Communications\Model\Common\KeyValuePair $optionalField
     * @return $this
     */
    public function addOptionalField(\PlanetaSoftware\Avalara\Communications\Model\Common\KeyValuePair $optionalField){
        $this->opt[] = $optionalField;
        return $this;
    }
}
