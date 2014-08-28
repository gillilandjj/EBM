<?php

class NetworkAccessSpeedInfo
{

  /**
   * 
   * @var networkAcessSpeedType $networkAcessSpeedType
   * @access public
   */
  public $networkAcessSpeedType = null;

  /**
   * 
   * @var productType $productType
   * @access public
   */
  public $productType = null;

  /**
   * 
   * @param networkAcessSpeedType $networkAcessSpeedType
   * @param productType $productType
   * @access public
   */
  public function __construct($networkAcessSpeedType, $productType)
  {
    $this->networkAcessSpeedType = $networkAcessSpeedType;
    $this->productType = $productType;
  }

}
