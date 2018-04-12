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
     * Array to map attributes to class objects
     */
    const ATTRIBUTE_MAPPING = [
       'txs' => \PlanetaSoftware\Avalara\Communications\Model\Afc\Tax::class
    ];

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

    /**
     * Get reference
     * 
     * @return string
     */
    public function getReference() {
        return $this->ref;
    }

    /**
     * Get transaction type
     * 
     * @return integer
     */
    public function getTransactionType() {
        return $this->tran;
    }

    /**
     * Get service type
     * 
     * @return integer
     */
    public function getServiceType() {
        return $this->serv;
    }

    /**
     * Get taxes
     * 
     * @return \PlanetaSoftware\Avalara\Communications\Model\Afc\Tax[]
     */
    public function getTaxList() {
        return $this->txs;
    }

    /**
     * Get error
     * 
     * @return string
     */
    public function getError() {
        return $this->err;
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
     * Set transaction type
     *
     * @param integer $transaction
     * @return $this
     */
    public function setTransactionType(int $tran){
        $this->tran = $tran;
        return $this;
    }

    /**
     * Set service type
     *
     * @param integer $serv
     * @return $this
     */
    public function setServiceType(int $serv){
        $this->serv = $serv;
        return $this;
    }

    /**
     * Add new Tax
     * 
     * @param \PlanetaSoftware\Avalara\Communications\Model\Afc\Tax $tax
     * @return $this
     */
    public function addTax(\PlanetaSoftware\Avalara\Communications\Model\Afc\Tax $tax){
        $this->txs[] = $tax;
        return $this;
    }

    /**
     * Set error
     *
     * @param string $err
     * @return $this
     */
    public function setError(string $err){
        $this->err = $err;
        return $this;
    }

}
