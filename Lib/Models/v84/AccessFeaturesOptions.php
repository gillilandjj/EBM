<?php

class AccessFeaturesOptions
{

  /**
   * 
   * @var accessSpeed $accessSpeed
   * @access public
   */
  public $accessSpeed = null;

  /**
   * 
   * @var TotalServiceDetails $TotalServiceDetails
   * @access public
   */
  public $TotalServiceDetails = null;

  /**
   * 
   * @var provisionAccessArrangement $provisionAccessArrangement
   * @access public
   */
  public $provisionAccessArrangement = null;

  /**
   * 
   * @param accessSpeed $accessSpeed
   * @param TotalServiceDetails $TotalServiceDetails
   * @param provisionAccessArrangement $provisionAccessArrangement
   * @access public
   */
  public function __construct($accessSpeed, $TotalServiceDetails, $provisionAccessArrangement)
  {
    $this->accessSpeed = $accessSpeed;
    $this->TotalServiceDetails = $TotalServiceDetails;
    $this->provisionAccessArrangement = $provisionAccessArrangement;
  }

}
