<?php

namespace PlanetaSoftware\Avalara\Communications\Model\Afc;

use \PlanetaSoftware\Avalara\Communications\Model\BaseModel;

/**
 * LineItemResult
 * 
 * This Model class represents the output data returned for each line item that belongs
 * to an invoice where a tax calculation was performed.
 *
 * @author Oscar A <oscar@planetasoftware.com>
 */
class LineItemResult extends BaseModel {
    
    /**
     * Array to map attributes to class objects
     */
    const ATTRIBUTE_MAPPING = [
        'txs' => \PlanetaSoftware\Avalara\Communications\Model\Afc\Tax::class,
        'brdg' => \PlanetaSoftware\Avalara\Communications\Model\Afc\BridgeParticipantResult::class,
        'err' => \PlanetaSoftware\Avalara\Communications\Model\Common\Error::class,
    ];

    /**
     * Reference ID (LineNumber)
     * Reference Id for line item
     *
     * @var string
     */
    public $ref;

    /**
     * BaseSaleAmount
     * Value for tax inclusive calls that represents the charge minus billable taxes
     *
     * @var double
     */
    public $base;

    /**
     * Taxes
     * List of taxes for line item
     *
     * @var \PlanetaSoftware\Avalara\Communications\Model\Afc\Tax[]
     */
    public $txs = [];

    /**
     * BridgeParticipantResult
     * List of bridge participant tax results
     *
     * @var \PlanetaSoftware\Avalara\Communications\Model\Afc\BridgeParticipantResult[]
     */
    public $brdg = [];

    /**
     * Errors
     * Error message(s) related to line item processing
     *
     * @var \PlanetaSoftware\Avalara\Communications\Model\Common\Error[]
     */
    public $err = [];

    /**
     * Get reference
     * 
     * @return string
     */
    public function getReference() {
        return $this->ref;
    }

    /**
     * Get base sale amount
     * 
     * @return double
     */
    public function getBaseSaleAmount() {
        return $this->base;
    }

    /**
     * Get taxes
     * 
     * @return \PlanetaSoftware\Avalara\Communications\Model\Afc\Tax[]
     */
    public function getTaxList() {
        return $this->txs;
    }

    /**
     * Get bridge participants result
     * 
     * @return \PlanetaSoftware\Avalara\Communications\Model\Afc\BridgeParticipantResult[]
     */
    public function getBridgeParticipantList() {
        return $this->brdg;
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
     * Set reference
     *
     * @param string $ref
     * @return $this
     */
    public function setReference(string $ref){
        $this->ref = $ref;
        return $this;
    }

    /**
     * Set base sale amount
     *
     * @param double $base
     * @return $this
     */
    public function setBaseSaleAmount(double $base){
        $this->base = $base;
        return $this;
    }

    /**
     * Add new Tax
     * 
     * @param \PlanetaSoftware\Avalara\Communications\Model\Afc\Tax $tax
     * @return $this
     */
    public function addTax(\PlanetaSoftware\Avalara\Communications\Model\Afc\Tax $tax){
        $this->txs[] = $tax;
        return $this;
    }

    /**
     * Add bridge participants result
     *
     * @param \PlanetaSoftware\Avalara\Communications\Model\Afc\BridgeParticipantResult $bridgeParticipant
     * @return $this
     */

    public function addBridgeParticipant(\PlanetaSoftware\Avalara\Communications\Model\Afc\BridgeParticipantResult $bridgeParticipant){
        $this->prts[] = $bridgeParticipant;
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
