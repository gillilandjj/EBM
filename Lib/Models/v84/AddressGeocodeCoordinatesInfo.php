<?php

class AddressGeocodeCoordinatesInfo
{

  /**
   * 
   * @var LatitudeInfo $latitude
   * @access public
   */
  public $latitude = null;

  /**
   * 
   * @var LongitudeInfo $longitude
   * @access public
   */
  public $longitude = null;

  /**
   * 
   * @param LatitudeInfo $latitude
   * @param LongitudeInfo $longitude
   * @access public
   */
  public function __construct($latitude, $longitude)
  {
    $this->latitude = $latitude;
    $this->longitude = $longitude;
  }

}
