<?php

namespace PlanetaSoftware\Avalara\Communications\Model\Afc;

use \PlanetaSoftware\Avalara\Communications\Model\BaseModel;

/**
 * TaxExemption 
 *  
 * This Model class represents the input data used by AFC to represent Tax Exception information
 * that can be applied to an invoice.
 *
 * @author Oscar A <oscar@planetasoftware.com>
 */
class TaxExemption extends BaseModel{
    
    /**
     * Array to map attributes to class objects
     */
    const ATTRIBUTE_MAPPING = [
        'loc' => \PlanetaSoftware\Avalara\Communications\Model\Afc\Location::class,
    ];
    
    /**
     * Force
     * Force exemption to apply
     * 
     * false = apply level exemption allowed logic, true = ignore level exemption allowed logic
     *
     * @var boolean
     */
    public $frc; 

    /**
     * Location
     * Exemption location information
     *
     * @var \PlanetaSoftware\Avalara\Communications\Model\Afc\Location
     */
    public $loc;
    
    /**
     * TaxType
     * Tax Type for Tax Type Exemption
     *
     * @var integer
     */
    public $tpe;
    
    /**
     * TaxLevel
     * Tax Level for Tax Type Exemption
     *
     * @var integer
     */
    public $lvl;

    /**
     * TaxCategory
     * Tax Category for Tax Category Exemptions
     *
     * @var integer
     */
    public $cat;

    /**
     * Get force exemption
     * 
     * @return boolean
     */
    public function getIsForceExemption() {
        return $this->frc;
    }

    /**
     * Get location
     * 
     * @return \PlanetaSoftware\Avalara\Communications\Model\Afc\Location
     */
    public function getLocation() {
        return $this->loc;
    }

    /**
     * Get tax type
     * 
     * @return integer
     */
    public function getType() {
        return $this->tpe;
    }

    /**
     * Get tax level 
     * 
     * @return integer
     */
    public function getLevel() {
        return $this->lvl;
    }

    /**
     * Get tax category
     * 
     * @return string
     */
    public function getCategory() {
        return $this->cat;
    }       

    /**
     * Set force exemption
     *
     * @param boolean $frc
     * @return $this
     */
    public function setForceExemption(boolean $frc){
        $this->frc = $frc;
        return $this;
    }

    /**
     * Set location
     *
     * @param \PlanetaSoftware\Avalara\Communications\Model\Afc\Location $loc
     * @return $this
     */
    public function setLocation(\PlanetaSoftware\Avalara\Communications\Model\Afc\Location $loc){
        $this->loc = $loc;
        return $this;
    }

    /**
     * Set tax type
     *
     * @param integer $tpe
     * @return $this
     */
    public function setType(int $tpe){
        $this->tpe = $tpe;
        return $this;
    }

    /**
     * Set tax level
     *
     * @param integer $lvl
     * @return $this
     */
    public function setLevel(int $lvl){
        $this->lvl = $lvl;
        return $this;
    }

    /**
     * Set tax category
     *
     * @param string $cat
     * @return $this
     */
    public function setCategory(string $cat){
        $this->cat = $cat;
        return $this;
    }

}
