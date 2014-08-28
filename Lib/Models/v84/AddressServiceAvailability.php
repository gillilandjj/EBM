<?php

class AddressServiceAvailability
{

  /**
   * 
   * @var AddressMatchInfo $RequestedAddressDetails
   * @access public
   */
  public $RequestedAddressDetails = null;

  /**
   * 
   * @var AddressMatchInfo $AddressMatchDetails
   * @access public
   */
  public $AddressMatchDetails = null;

  /**
   * 
   * @var AddressGeocodeCoordinatesInfo $Geocode
   * @access public
   */
  public $Geocode = null;

  /**
   * 
   * @var addressMatchCode $addressMatchCode
   * @access public
   */
  public $addressMatchCode = null;

  /**
   * 
   * @var lecName $lecName
   * @access public
   */
  public $lecName = null;

  /**
   * 
   * @var region $region
   * @access public
   */
  public $region = null;

  /**
   * 
   * @var swcClli $swcClli
   * @access public
   */
  public $swcClli = null;

  /**
   * 
   * @var locationClli $locationClli
   * @access public
   */
  public $locationClli = null;

  /**
   * 
   * @var ServiceAvailabilityDetails $ServiceAvailabilityDetails
   * @access public
   */
  public $ServiceAvailabilityDetails = null;

  /**
   * 
   * @var int $statusCode
   * @access public
   */
  public $statusCode = null;

  /**
   * 
   * @var statusMessage $statusMessage
   * @access public
   */
  public $statusMessage = null;

  /**
   * 
   * @param AddressMatchInfo $RequestedAddressDetails
   * @param AddressMatchInfo $AddressMatchDetails
   * @param AddressGeocodeCoordinatesInfo $Geocode
   * @param addressMatchCode $addressMatchCode
   * @param lecName $lecName
   * @param region $region
   * @param swcClli $swcClli
   * @param locationClli $locationClli
   * @param ServiceAvailabilityDetails $ServiceAvailabilityDetails
   * @param int $statusCode
   * @param statusMessage $statusMessage
   * @access public
   */
  public function __construct($RequestedAddressDetails, $AddressMatchDetails, $Geocode, $addressMatchCode, $lecName, $region, $swcClli, $locationClli, $ServiceAvailabilityDetails, $statusCode, $statusMessage)
  {
    $this->RequestedAddressDetails = $RequestedAddressDetails;
    $this->AddressMatchDetails = $AddressMatchDetails;
    $this->Geocode = $Geocode;
    $this->addressMatchCode = $addressMatchCode;
    $this->lecName = $lecName;
    $this->region = $region;
    $this->swcClli = $swcClli;
    $this->locationClli = $locationClli;
    $this->ServiceAvailabilityDetails = $ServiceAvailabilityDetails;
    $this->statusCode = $statusCode;
    $this->statusMessage = $statusMessage;
  }

}
