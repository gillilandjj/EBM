<?php

class SiteSelectionDetails
{

  /**
   * 
   * @var SpeedInfo $SpeedDetails
   * @access public
   */
  public $SpeedDetails = null;

  /**
   * 
   * @var SpeedProductTypeInfo $ProductTypeDetails
   * @access public
   */
  public $ProductTypeDetails = null;

  /**
   * 
   * @var NetworkSpeedDetails $NetworkSpeedDetails
   * @access public
   */
  public $NetworkSpeedDetails = null;

  /**
   * 
   * @param SpeedInfo $SpeedDetails
   * @param SpeedProductTypeInfo $ProductTypeDetails
   * @param NetworkSpeedDetails $NetworkSpeedDetails
   * @access public
   */
  public function __construct($SpeedDetails, $ProductTypeDetails, $NetworkSpeedDetails)
  {
    $this->SpeedDetails = $SpeedDetails;
    $this->ProductTypeDetails = $ProductTypeDetails;
    $this->NetworkSpeedDetails = $NetworkSpeedDetails;
  }

}
