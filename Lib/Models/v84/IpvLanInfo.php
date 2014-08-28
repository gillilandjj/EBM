<?php

class IpvLanInfo
{

  /**
   * 
   * @var boolean $lanATTCustomerIndicator
   * @access public
   */
  public $lanATTCustomerIndicator = null;

  /**
   * 
   * @var lanIpAddress $lanIpAddress
   * @access public
   */
  public $lanIpAddress = null;

  /**
   * 
   * @var lanlength $lanlength
   * @access public
   */
  public $lanlength = null;

  /**
   * 
   * @param boolean $lanATTCustomerIndicator
   * @param lanIpAddress $lanIpAddress
   * @param lanlength $lanlength
   * @access public
   */
  public function __construct($lanATTCustomerIndicator, $lanIpAddress, $lanlength)
  {
    $this->lanATTCustomerIndicator = $lanATTCustomerIndicator;
    $this->lanIpAddress = $lanIpAddress;
    $this->lanlength = $lanlength;
  }

}
