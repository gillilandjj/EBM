<?php

class LinkedAccessSpeedDetails
{

  /**
   * 
   * @var SpeedInfo $SpeedDetails
   * @access public
   */
  public $SpeedDetails = null;

  /**
   * 
   * @var NetworkAccessSpeedInfo $NetworkSpeedDetails
   * @access public
   */
  public $NetworkSpeedDetails = null;

  /**
   * 
   * @param SpeedInfo $SpeedDetails
   * @param NetworkAccessSpeedInfo $NetworkSpeedDetails
   * @access public
   */
  public function __construct($SpeedDetails, $NetworkSpeedDetails)
  {
    $this->SpeedDetails = $SpeedDetails;
    $this->NetworkSpeedDetails = $NetworkSpeedDetails;
  }

}
