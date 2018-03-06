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
    public $prts;

}
