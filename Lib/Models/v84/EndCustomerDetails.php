<?php

class EndCustomerDetails
{

  /**
   * 
   * @var legalName $legalName
   * @access public
   */
  public $legalName = null;

  /**
   * 
   * @var addressLine1 $addressLine1
   * @access public
   */
  public $addressLine1 = null;

  /**
   * 
   * @var addressLine2 $addressLine2
   * @access public
   */
  public $addressLine2 = null;

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
   * @var AddressZipCodeInfo $zipCode
   * @access public
   */
  public $zipCode = null;

  /**
   * 
   * @var duns $duns
   * @access public
   */
  public $duns = null;

  /**
   * 
   * @var companyURL $companyURL
   * @access public
   */
  public $companyURL = null;

  /**
   * 
   * @param legalName $legalName
   * @param addressLine1 $addressLine1
   * @param addressLine2 $addressLine2
   * @param city $city
   * @param state $state
   * @param AddressZipCodeInfo $zipCode
   * @param duns $duns
   * @param companyURL $companyURL
   * @access public
   */
  public function __construct($legalName, $addressLine1, $addressLine2, $city, $state, $zipCode, $duns, $companyURL)
  {
    $this->legalName = $legalName;
    $this->addressLine1 = $addressLine1;
    $this->addressLine2 = $addressLine2;
    $this->city = $city;
    $this->state = $state;
    $this->zipCode = $zipCode;
    $this->duns = $duns;
    $this->companyURL = $companyURL;
  }

}
