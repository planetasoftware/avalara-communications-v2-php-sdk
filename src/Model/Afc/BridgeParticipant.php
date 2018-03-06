<?php

namespace PlanetaSoftware\Avalara\Communications\Model\Afc;

use \PlanetaSoftware\Avalara\Communications\Model\BaseModel;

/**
 * BridgeParticipant
 *  
 * This Model class represents the input data used by AFC to identify participants
 * of a bridge conference.
 *
 * @author Oscar A <oscar@planetasoftware.com>
 */
class BridgeParticipant extends BaseModel{
    
    /**
     * Array to map attributes to class objects
     */
    const ATTRIBUTE_MAPPING = [
        'loc' => \PlanetaSoftware\Avalara\Communications\Model\Afc\Location::class,
    ];
    
    /**
     * ReferenceID
     * Participant reference id
     *
     * @var string
     */
    public $ref;

    /**
     * Location
     * Participant location information
     *
     * @var \PlanetaSoftware\Avalara\Communications\Model\Afc\Location
     */
    public $loc;
}
