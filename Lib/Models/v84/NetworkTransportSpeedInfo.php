<?php

class NetworkTransportSpeedInfo
{

  /**
   * 
   * @var networkTransportSpeedType $networkTransportSpeedType
   * @access public
   */
  public $networkTransportSpeedType = null;

  /**
   * 
   * @var productType $productType
   * @access public
   */
  public $productType = null;

  /**
   * 
   * @param networkTransportSpeedType $networkTransportSpeedType
   * @param productType $productType
   * @access public
   */
  public function __construct($networkTransportSpeedType, $productType)
  {
    $this->networkTransportSpeedType = $networkTransportSpeedType;
    $this->productType = $productType;
  }

}
