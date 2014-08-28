<?php

class Ethernet
{

  /**
   * 
   * @var popCLLI $popCLLI
   * @access public
   */
  public $popCLLI = null;

  /**
   * 
   * @var ethernetAvailability $ethernetAvailability
   * @access public
   */
  public $ethernetAvailability = null;

  /**
   * 
   * @var int $lata
   * @access public
   */
  public $lata = null;

  /**
   * 
   * @var maxAvailableSpeed $maxAvailableSpeed
   * @access public
   */
  public $maxAvailableSpeed = null;

  /**
   * 
   * @var availableSpeed $availableSpeed
   * @access public
   */
  public $availableSpeed = null;

  /**
   * 
   * @var Service $Service
   * @access public
   */
  public $Service = null;

  /**
   * 
   * @var electricalOptical $electricalOptical
   * @access public
   */
  public $electricalOptical = null;

  /**
   * 
   * @var equipmentType $equipmentType
   * @access public
   */
  public $equipmentType = null;

  /**
   * 
   * @var int $mileage
   * @access public
   */
  public $mileage = null;

  /**
   * 
   * @var OtherSpeed $OtherSpeed
   * @access public
   */
  public $OtherSpeed = null;

  /**
   * 
   * @var ExistingConnectivity $ExistingConnectivity
   * @access public
   */
  public $ExistingConnectivity = null;

  /**
   * 
   * @param popCLLI $popCLLI
   * @param ethernetAvailability $ethernetAvailability
   * @param int $lata
   * @param maxAvailableSpeed $maxAvailableSpeed
   * @param availableSpeed $availableSpeed
   * @param Service $Service
   * @param electricalOptical $electricalOptical
   * @param equipmentType $equipmentType
   * @param int $mileage
   * @param OtherSpeed $OtherSpeed
   * @param ExistingConnectivity $ExistingConnectivity
   * @access public
   */
  public function __construct($popCLLI, $ethernetAvailability, $lata, $maxAvailableSpeed, $availableSpeed, $Service, $electricalOptical, $equipmentType, $mileage, $OtherSpeed, $ExistingConnectivity)
  {
    $this->popCLLI = $popCLLI;
    $this->ethernetAvailability = $ethernetAvailability;
    $this->lata = $lata;
    $this->maxAvailableSpeed = $maxAvailableSpeed;
    $this->availableSpeed = $availableSpeed;
    $this->Service = $Service;
    $this->electricalOptical = $electricalOptical;
    $this->equipmentType = $equipmentType;
    $this->mileage = $mileage;
    $this->OtherSpeed = $OtherSpeed;
    $this->ExistingConnectivity = $ExistingConnectivity;
  }

}
