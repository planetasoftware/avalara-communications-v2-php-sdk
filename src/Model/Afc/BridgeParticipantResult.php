<?php

namespace PlanetaSoftware\Avalara\Communications\Model\Afc;

use \PlanetaSoftware\Avalara\Communications\Model\BaseModel;

/**
 * LineItemResult
 * 
 * This Model class represents the output data used by AFC to identify the result 
 * for taxation on participants of a bridge conference.
 *
 * @author Oscar A <oscar@planetasoftware.com>
 */
class BridgeParticipantResult extends BaseModel {

    /**
     * Reference (Line Number)
     * Reference Id for participant
     * 
     * @var string
     */
    public $ref;

    /**
     * TransactionType
     * Transaction type used for participant
     * 
     * @var integer
     */
    public $tran;

    /**
     * ServiceType
     * Service type used for participant
     * 
     * @var integer
     */
    public $serv;

    /**
     * Taxes
     * List of taxes for participant
     * 
     * @var \PlanetaSoftware\Avalara\Communications\Model\Afc\Tax[]
     */
    public $txs = [];

    /**
     * Error
     * Error message related to participant processing
     *
     * @var string
     */
    public $err;

}
