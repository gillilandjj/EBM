<?php

class AddressMatchInfo
{

  /**
   * 
   * @var AddressLineInfo $street
   * @access public
   */
  public $street = null;

  /**
   * 
   * @var AddressCityInfo $city
   * @access public
   */
  public $city = null;

  /**
   * 
   * @var AddressCountyDescriptionInfo $county
   * @access public
   */
  public $county = null;

  /**
   * 
   * @var AddressUrbanizationInfo $urbanization
   * @access public
   */
  public $urbanization = null;

  /**
   * 
   * @var AddressStateInfo $state
   * @access public
   */
  public $state = null;

  /**
   * 
   * @var AddressZipInfo $Zip
   * @access public
   */
  public $Zip = null;

  /**
   * 
   * @var AddressCountryInfo $Country
   * @access public
   */
  public $Country = null;

  /**
   * 
   * @param AddressLineInfo $street
   * @param AddressCityInfo $city
   * @param AddressCountyDescriptionInfo $county
   * @param AddressUrbanizationInfo $urbanization
   * @param AddressStateInfo $state
   * @param AddressZipInfo $Zip
   * @param AddressCountryInfo $Country
   * @access public
   */
  public function __construct($street, $city, $county, $urbanization, $state, $Zip, $Country)
  {
    $this->street = $street;
    $this->city = $city;
    $this->county = $county;
    $this->urbanization = $urbanization;
    $this->state = $state;
    $this->Zip = $Zip;
    $this->Country = $Country;
  }

}
