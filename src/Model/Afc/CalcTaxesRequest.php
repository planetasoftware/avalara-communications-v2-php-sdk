<?php

namespace PlanetaSoftware\Avalara\Communications\Model\Afc;

use \PlanetaSoftware\Avalara\Communications\Model\BaseModel;

/**
 * CalcTaxesRequest - AFC Calculate Taxes Request
 * 
 * This Model class represents the input data used by AFC to Calculate and determine taxes.
 * CalcTaxesRequest object contains invoices to process and data required for performing tax calculations.
 *
 * @author Oscar A <oscar@planetasoftware.com>
 */
class CalcTaxesRequest extends BaseModel{
    
    /**
     * Array to map attributes to class objects
     */
    const ATTRIBUTE_MAPPING = [
        'cmpn' => \PlanetaSoftware\Avalara\Communications\Model\Afc\CompanyData::class,
        'inv' => \PlanetaSoftware\Avalara\Communications\Model\Afc\Invoice::class,
        'ovr' => \PlanetaSoftware\Avalara\Communications\Model\Afc\TaxOverride::class,
        'sovr' => \PlanetaSoftware\Avalara\Communications\Model\Afc\SafeHarborOverride::class,
    ];
    
    /**
     * Company Data
     * Company information to be applied to transactions
     * 
     * @var \PlanetaSoftware\Avalara\Communications\Model\Afc\CompanyData
     */
    public $cmpn;
    
    /**
     * Invoice Models
     * List of invoices to be processed
     * 
     *
     * @var \PlanetaSoftware\Avalara\Communications\Model\Afc\Invoice[]
     */
    public $inv = [];
    
    /**
     * Array of TaxOverride Models
     * List of tax rate/logic overrides to be applied for transactions
     * 
     * @var \PlanetaSoftware\Avalara\Communications\Model\Afc\TaxOverride[]
     */
    public $ovr = [];
    
    /**
     * Array of SafeHarborOverride Models
     * List of safe harbor overrides to be applied for transactions
     *
     * @var \PlanetaSoftware\Avalara\Communications\Model\Afc\SafeHarborOverride[]
     */
    public $sovr = [];

    /**
     * Get company data
     * 
     * @return \PlanetaSoftware\Avalara\Communications\Model\Afc\CompanyData
     */
    public function getCompanyData() {
        return $this->cmpn;
    }

    /**
     * Get invoice list
     * 
     * @return \PlanetaSoftware\Avalara\Communications\Model\Afc\Invoice[]
     */
    public function getInvoiceList() {
        return $this->inv;
    }

    /**
     * Get tax override list
     * 
     * @return \PlanetaSoftware\Avalara\Communications\Model\Afc\TaxOverride[]
     */
    public function getTaxOverrideList() {
        return $this->ovr;
    }

    /**
     * Get safe harbor override list
     * 
     * @return \PlanetaSoftware\Avalara\Communications\Model\Afc\SafeHarborOverride[]
     */
    public function getSafeHarborOverrideList() {
        return $this->sovr;
    }

    /**
     * Set company data
     *
     * @param \PlanetaSoftware\Avalara\Communications\Model\Afc\CompanyData $cmpn
     * @return $this
     */
    public function setCompanyData(\PlanetaSoftware\Avalara\Communications\Model\Afc\CompanyData $cmpn){
        $this->cmpn = $cmpn;
        return $this;
    }
      
    /**
     * Add new invoice
     * 
     * @param \PlanetaSoftware\Avalara\Communications\Model\Afc\Invoice $invoice
     * @return $this
     */
    public function addInvoice(\PlanetaSoftware\Avalara\Communications\Model\Afc\Invoice $invoice){
        $this->inv[] = $invoice;
        return $this;
    }

    /**
     * Add new Tax override
     * 
     * @param \PlanetaSoftware\Avalara\Communications\Model\Afc\TaxOverride $taxOverride
     * @return $this
     */
    public function addOverride(\PlanetaSoftware\Avalara\Communications\Model\Afc\TaxOverride $taxOverride){
        $this->ovr[] = $taxOverride;
        return $this;
    }
    
    /**
     * 
     * Add new SafeHarborOverride
     * 
     * @param \PlanetaSoftware\Avalara\Communications\Model\Afc\SafeHarborOverride $safeHarborOverride
     * @return $this
     */
    public function addSafeHarborOverride(\PlanetaSoftware\Avalara\Communications\Model\Afc\SafeHarborOverride $safeHarborOverride){
        $this->sovr = $safeHarborOverride;
        return $this;
    }
}
