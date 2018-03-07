<?php

namespace PlanetaSoftware\Avalara\Communications\Model\Common;

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

    /**
     * Get key
     * 
     * @return string
     */
    public function getKey() {
        return $this->key;
    }

    /**
     * Get value
     * 
     * @return string
     */
    public function getValue() {
        return $this->val;
    }

    /**
     * Set key
     *
     * @param string $key
     * @return $this
     */
    public function setKey(string $key){
        $this->key = $key;
        return $this;
    }

    /**
     * Set value
     *
     * @param string $val
     * @return $this
     */
    public function setValue(string $val){
        $this->val = $val;
        return $this;
    }


}
