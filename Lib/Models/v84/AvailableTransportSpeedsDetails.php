<?php

class AvailableTransportSpeedsDetails
{

  /**
   * 
   * @var SpeedInfo $SpeedDetails
   * @access public
   */
  public $SpeedDetails = null;

  /**
   * 
   * @var NetworkTransportSpeedInfo $NetworkSpeedDetails
   * @access public
   */
  public $NetworkSpeedDetails = null;

  /**
   * 
   * @var LinkedAccessSpeedDetails $LinkedAccessSpeedDetails
   * @access public
   */
  public $LinkedAccessSpeedDetails = null;

  /**
   * 
   * @param SpeedInfo $SpeedDetails
   * @param NetworkTransportSpeedInfo $NetworkSpeedDetails
   * @param LinkedAccessSpeedDetails $LinkedAccessSpeedDetails
   * @access public
   */
  public function __construct($SpeedDetails, $NetworkSpeedDetails, $LinkedAccessSpeedDetails)
  {
    $this->SpeedDetails = $SpeedDetails;
    $this->NetworkSpeedDetails = $NetworkSpeedDetails;
    $this->LinkedAccessSpeedDetails = $LinkedAccessSpeedDetails;
  }

}
