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
}
