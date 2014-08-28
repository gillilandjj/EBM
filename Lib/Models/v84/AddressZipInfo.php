<?php

class AddressZipInfo
{

  /**
   * 
   * @var ZipCodeInfo $zipCode
   * @access public
   */
  public $zipCode = null;

  /**
   * 
   * @var ZipCodeExtensionInfo $zipCodeExtension
   * @access public
   */
  public $zipCodeExtension = null;

  /**
   * 
   * @var zipGeoCode $zipGeoCode
   * @access public
   */
  public $zipGeoCode = null;

  /**
   * 
   * @param ZipCodeInfo $zipCode
   * @param ZipCodeExtensionInfo $zipCodeExtension
   * @param zipGeoCode $zipGeoCode
   * @access public
   */
  public function __construct($zipCode, $zipCodeExtension, $zipGeoCode)
  {
    $this->zipCode = $zipCode;
    $this->zipCodeExtension = $zipCodeExtension;
    $this->zipGeoCode = $zipGeoCode;
  }

}
