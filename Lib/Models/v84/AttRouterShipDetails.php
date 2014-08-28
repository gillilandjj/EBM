<?php

class AttRouterShipDetails
{

  /**
   * 
   * @var firstName $firstName
   * @access public
   */
  public $firstName = null;

  /**
   * 
   * @var lastName $lastName
   * @access public
   */
  public $lastName = null;

  /**
   * 
   * @var address1 $address1
   * @access public
   */
  public $address1 = null;

  /**
   * 
   * @var int $floorNumber
   * @access public
   */
  public $floorNumber = null;

  /**
   * 
   * @var int $roomNumber
   * @access public
   */
  public $roomNumber = null;

  /**
   * 
   * @var city $city
   * @access public
   */
  public $city = null;

  /**
   * 
   * @var state $state
   * @access public
   */
  public $state = null;

  /**
   * 
   * @var postalcode $postalcode
   * @access public
   */
  public $postalcode = null;

  /**
   * 
   * @var businessTelephoneNumber $businessTelephoneNumber
   * @access public
   */
  public $businessTelephoneNumber = null;

  /**
   * 
   * @param firstName $firstName
   * @param lastName $lastName
   * @param address1 $address1
   * @param int $floorNumber
   * @param int $roomNumber
   * @param city $city
   * @param state $state
   * @param postalcode $postalcode
   * @param businessTelephoneNumber $businessTelephoneNumber
   * @access public
   */
  public function __construct($firstName, $lastName, $address1, $floorNumber, $roomNumber, $city, $state, $postalcode, $businessTelephoneNumber)
  {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->address1 = $address1;
    $this->floorNumber = $floorNumber;
    $this->roomNumber = $roomNumber;
    $this->city = $city;
    $this->state = $state;
    $this->postalcode = $postalcode;
    $this->businessTelephoneNumber = $businessTelephoneNumber;
  }

}
