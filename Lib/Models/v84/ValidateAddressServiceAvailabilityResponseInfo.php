<?php

class ValidateAddressServiceAvailabilityResponseInfo
{

  /**
   * 
   * @var AddressServiceAvailability $AddressServiceAvailability
   * @access public
   */
  public $AddressServiceAvailability = null;

  /**
   * 
   * @var ResponseInfo $Response
   * @access public
   */
  public $Response = null;

  /**
   * 
   * @param AddressServiceAvailability $AddressServiceAvailability
   * @param ResponseInfo $Response
   * @access public
   */
  public function __construct($AddressServiceAvailability, $Response)
  {
    $this->AddressServiceAvailability = $AddressServiceAvailability;
    $this->Response = $Response;
  }

}
