<?php

namespace PlanetaSoftware\Avalara\Communications\Model\Afc;

use \PlanetaSoftware\Avalara\Communications\Model\BaseModel;

/**
 * BridgeData
 *  
 * This Model class represents the input data used by AFC for calculating tax for a
 * bridge conference with 1 to n participants.
 *
 * @author Oscar A <oscar@planetasoftware.com>
 */
class BridgeData extends BaseModel {
    
    /**
     * Array to map attributes to class objects
     */
    const ATTRIBUTE_MAPPING = [
        'prts' => \PlanetaSoftware\Avalara\Communications\Model\Afc\BridgeParticipant::class,
    ];

    /**
     * ProcessInvalidParticipant
     * Whether to continue processing on invalid participant
     * false = abort on invalid participant, true = continue processing on invalid participant
     *
     * @var boolean
     */
    public $proc;

    /**
     * ReturnParticipantTaxes
     * Whether to return array of individual participant taxes
     *
     * @var boolean
     */
    public $rtrn;

    /**
     * BridgeParticipant
     * List of bridge participants
     *
     * @var \PlanetaSoftware\Avalara\Communications\Model\Afc\BridgeParticipant[]
     */
    public $prts[];

    /**
     * Get process invalid participant
     * 
     * @return boolean
     */
    public function getIsProcessInvalidParticipant() {
        return $this->proc;
    }

    /**
     * Get return participant taxes
     * 
     * @return boolean
     */
    public function getIsReturnParticipantTaxes() {
        return $this->rtrn;
    }

    /**
     * Get bridge participants
     * 
     * @return \PlanetaSoftware\Avalara\Communications\Model\Afc\BridgeParticipant[]
     */
    public function getBridgeParticipants() {
        return $this->prts;
    }

    /**
     * Set process invalid participant
     *
     * @param boolean $proc
     * @return $this
     */
    public function setProcessInvalidParticipant(boolean $proc){
        $this->proc = $proc;
        return $this;
    }

    /**
     * Set return participant taxes
     *
     * @param boolean $rtrn
     * @return $this
     */
    public function setReturnParticipantTaxes(boolean $rtrn){
        $this->rtrn = $rtrn;
        return $this;
    }

    /**
     * Add bridge participants
     *
     * @param \PlanetaSoftware\Avalara\Communications\Model\Afc\BridgeParticipant $bridgeParticipant
     * @return $this
     */

    public function addBridgeParticipant(\PlanetaSoftware\Avalara\Communications\Model\Afc\BridgeParticipant $bridgeParticipant){
        $this->prts[] = $bridgeParticipant;
        return $this;
    }

}
