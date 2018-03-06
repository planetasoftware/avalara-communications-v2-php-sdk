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
     * @var number
     */
    public $old;

    /**
     * NewFederalTam
     * New Federal TAM.  64.9% = 0.649 State = (1.0 - Federal TAM)
     *
     * @var number
     */
    public $new;

}
