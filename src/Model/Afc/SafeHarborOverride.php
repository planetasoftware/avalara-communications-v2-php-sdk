<?php

namespace PlanetaSoftware\Avalara\Communications\Model\Afc;

use \PlanetaSoftware\Avalara\Communications\Model\BaseModel;

/**
 * CalcTaxesRequest - AFC Calculate Taxes Request
 * 
 * This Model class represents the input data used by AFC to override configuration settings
 * for Safe Harbor TAM Overrides
 *
 * @author Oscar A <oscar@planetasoftware.com>
 */
class SafeHarborOverride extends BaseModel {

    /**
     * SafeHarborType
     * 1 = Cellular, 2 = VoIP, 4 = Paging
     *
     * @var integer
     */
    public $sh;

    /**
     * OriginalFederalTam
     * Original Federal TAM.  64.9% = 0.649   State = (1.0 - Federal TAM)
     *
     * @var double
     */
    public $old;

    /**
     * NewFederalTam
     * New Federal TAM.  64.9% = 0.649 State = (1.0 - Federal TAM)
     *
     * @var double
     */
    public $new;

    /**
     * Get safe harbor type
     * 
     * @return integer
     */
    public function getSafeHarborType() {
        return $this->sh;
    }

    /**
     * Get original federal TAM
     * 
     * @return double
     */
    public function getOriginalFederalTam() {
        return $this->old;
    }

    /**
     * Get new federal TAM
     * 
     * @return double
     */
    public function getNewFederalTam() {
        return $this->new;
    }

    /**
     * Set safe harbor type
     *
     * @param integer $sh
     * @return $this
     */
    public function setSafeHarborType(int $sh){
        $this->sh = $sh;
        return $this;
    }

    /**
     * Set original federal TAM
     *
     * @param double $old
     * @return $this
     */
    public function setOriginalFederalTam(double $old){
        $this->old = $old;
        return $this;
    }

    /**
     * Set new federal TAM
     *
     * @param double $new
     * @return $this
     */
    public function setNewFederalTam(double $new){
        $this->new = $new;
        return $this;
    }

}
