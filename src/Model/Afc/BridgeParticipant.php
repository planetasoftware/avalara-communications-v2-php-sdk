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

    /**
     * Get reference
     * 
     * @return string
     */
    public function getReference() {
        return $this->ref;
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
     * Set location
     *
     * @param \PlanetaSoftware\Avalara\Communications\Model\Afc\Location $loc
     * @return $this
     */
    public function setLocation(\PlanetaSoftware\Avalara\Communications\Model\Afc\Location $loc){
        $this->loc = $loc;
        return $this;
    }
}
