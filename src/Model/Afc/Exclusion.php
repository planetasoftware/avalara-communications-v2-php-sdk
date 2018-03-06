<?php
namespace PlanetaSoftware\Avalara\Communications\Model\Afc;

use \PlanetaSoftware\Avalara\Communications\Model\BaseModel;

/**
 * Description of CompanyData
 *
 * This Model class represents the input data used identify tax exclusion
 * of a country/state for the company
 *
 * @author Oscar A <oscar@planetasoftware.com>
 */
class Exclusion extends BaseModel{
    
    /**
     * Country
     * Country ISO for exclusion
     *
     * @var string
     */
    public $ctry;
    
    /**
     * State
     * State abbreviation for exclusion
     *
     * @var string
     */
    public $st;

    /**
     * Has Exclusion
     * true = enable exclusion, false = disable exclusion
     *
     * @var boolean
     */
    public $excl;
}
