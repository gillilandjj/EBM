<?php

class ValidateAddressServiceAvailabilityRequestInfo
{

  /**
   * 
   * @var mode $mode
   * @access public
   */
  public $mode = null;

  /**
   * 
   * @var boolean $nearMatchIndicator
   * @access public
   */
  public $nearMatchIndicator = null;

  /**
   * 
   * @var boolean $displayAllSpeeds
   * @access public
   */
  public $displayAllSpeeds = null;

  /**
   * 
   * @var AddressDetails $AddressDetails
   * @access public
   */
  public $AddressDetails = null;

  /**
   * 
   * @param mode $mode
   * @param boolean $nearMatchIndicator
   * @param boolean $displayAllSpeeds
   * @param AddressDetails $AddressDetails
   * @access public
   */
  public function __construct($mode, $nearMatchIndicator, $displayAllSpeeds, $AddressDetails)
  {
    $this->mode = $mode;
    $this->nearMatchIndicator = $nearMatchIndicator;
    $this->displayAllSpeeds = $displayAllSpeeds;
    $this->AddressDetails = $AddressDetails;
  }

}
