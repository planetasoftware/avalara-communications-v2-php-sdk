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
        'err' => \PlanetaSoftware\Avalara\Communications\Model\Afc\Error::class,
    ];

    /**
     * Reference ID (LineNumber)
     * Reference Id for line item
     *
     * @var string
     */
    public $ref;

    /**
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
     * @var \PlanetaSoftware\Avalara\Communications\Model\Afc\Error[]
     */
    public $err = [];

}
