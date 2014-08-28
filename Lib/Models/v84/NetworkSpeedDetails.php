<?php

class NetworkSpeedDetails
{

  /**
   * 
   * @var boolean $managedPortIndicator
   * @access public
   */
  public $managedPortIndicator = null;

  /**
   * 
   * @var networkSpeedType $networkSpeedType
   * @access public
   */
  public $networkSpeedType = null;

  /**
   * 
   * @var SelectedAccessSpeedDetails $SelectedAccessSpeedDetails
   * @access public
   */
  public $SelectedAccessSpeedDetails = null;

  /**
   * 
   * @param boolean $managedPortIndicator
   * @param networkSpeedType $networkSpeedType
   * @param SelectedAccessSpeedDetails $SelectedAccessSpeedDetails
   * @access public
   */
  public function __construct($managedPortIndicator, $networkSpeedType, $SelectedAccessSpeedDetails)
  {
    $this->managedPortIndicator = $managedPortIndicator;
    $this->networkSpeedType = $networkSpeedType;
    $this->SelectedAccessSpeedDetails = $SelectedAccessSpeedDetails;
  }

}
