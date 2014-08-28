<?php

class SelectedAccessSpeedDetails
{

  /**
   * 
   * @var SpeedInfo $AccessSpeedDetails
   * @access public
   */
  public $AccessSpeedDetails = null;

  /**
   * 
   * @var SpeedProductTypeInfo $ProductTypeDetails
   * @access public
   */
  public $ProductTypeDetails = null;

  /**
   * 
   * @var accessSpeedType $accessSpeedType
   * @access public
   */
  public $accessSpeedType = null;

  /**
   * 
   * @param SpeedInfo $AccessSpeedDetails
   * @param SpeedProductTypeInfo $ProductTypeDetails
   * @param accessSpeedType $accessSpeedType
   * @access public
   */
  public function __construct($AccessSpeedDetails, $ProductTypeDetails, $accessSpeedType)
  {
    $this->AccessSpeedDetails = $AccessSpeedDetails;
    $this->ProductTypeDetails = $ProductTypeDetails;
    $this->accessSpeedType = $accessSpeedType;
  }

}
