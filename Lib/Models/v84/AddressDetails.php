<?php

class AddressDetails
{

  /**
   * 
   * @var AddressMatchInfo $Address
   * @access public
   */
  public $Address = null;

  /**
   * 
   * @var NetworkServiceAvailability $ServiceAvailability
   * @access public
   */
  public $ServiceAvailability = null;

  /**
   * 
   * @param AddressMatchInfo $Address
   * @param NetworkServiceAvailability $ServiceAvailability
   * @access public
   */
  public function __construct($Address, $ServiceAvailability)
  {
    $this->Address = $Address;
    $this->ServiceAvailability = $ServiceAvailability;
  }

}
