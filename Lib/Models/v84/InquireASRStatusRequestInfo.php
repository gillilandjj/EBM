<?php

class InquireASRStatusRequestInfo
{

  /**
   * 
   * @var PremiseIdInfo $siteId
   * @access public
   */
  public $siteId = null;

  /**
   * 
   * @var string $circuitId
   * @access public
   */
  public $circuitId = null;

  /**
   * 
   * @var string $attCircuitId
   * @access public
   */
  public $attCircuitId = null;

  /**
   * 
   * @param PremiseIdInfo $siteId
   * @param string $circuitId
   * @param string $attCircuitId
   * @access public
   */
  public function __construct($siteId, $circuitId, $attCircuitId)
  {
    $this->siteId = $siteId;
    $this->circuitId = $circuitId;
    $this->attCircuitId = $attCircuitId;
  }

}
