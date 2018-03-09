<?php

namespace PlanetaSoftware\Avalara\Communications\Model\Afc;

use \PlanetaSoftware\Avalara\Communications\Model\BaseModel;

/**
 * TaxOverride
 * 
 * This Model class represents the input data used by AFC to define the tax bracket of an override
 * 
 * @author Oscar A <oscar@planetasoftware.com>
 */
class TaxBracket extends BaseModel{
    
    /**
     * Rate
     * Tax rate for tax bracket
     *
     * @var double
     */
    public $rate;
    
    /**
     * MaxBase
     * Maximum base for tax bracket
     *
     * @var double
     */
    public $mas;

    /**
     * Get tax rate for tax bracket
     * 
     * @return double
     */
    public function getRate() {
        return $this->rate;
    }

    /**
     * Get maximum base for tax bracket
     * 
     * @return double
     */
    public function getMaxBase() {
        return $this->mas;
    }    

    /**
     * Set tax rate for tax bracket
     *
     * @param double $rate 
     * @return $this
     */
    public function setRate(double $rate){
        $this->rate = $rate;
        return $this;
    }

    /**
     * Set minimum base for tax bracket
     *
     * @param double $mas
     * @return $this
     */
    public function setMaxBase(double $mas){
        $this->mas = $mas;
        return $this;
    }

}
