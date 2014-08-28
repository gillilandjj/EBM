<?php

class ServiceAvailabilityDetails
{

  /**
   * 
   * @var requestedSpeed $requestedSpeed
   * @access public
   */
  public $requestedSpeed = null;

  /**
   * 
   * @var Ethernet $Ethernet
   * @access public
   */
  public $Ethernet = null;

  /**
   * 
   * @var PrivateLine $PrivateLine
   * @access public
   */
  public $PrivateLine = null;

  /**
   * 
   * @param requestedSpeed $requestedSpeed
   * @param Ethernet $Ethernet
   * @param PrivateLine $PrivateLine
   * @access public
   */
  public function __construct($requestedSpeed, $Ethernet, $PrivateLine)
  {
    $this->requestedSpeed = $requestedSpeed;
    $this->Ethernet = $Ethernet;
    $this->PrivateLine = $PrivateLine;
  }

}
