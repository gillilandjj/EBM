<?php

class SubmitWirelineProvisioningOrderRequestInfo
{

  /**
   * 
   * @var productType $productType
   * @access public
   */
  public $productType = null;

  /**
   * 
   * @var serviceProviderContactEmail $serviceProviderContactEmail
   * @access public
   */
  public $serviceProviderContactEmail = null;

  /**
   * 
   * @var SiteInformationDetails $SiteInformationDetails
   * @access public
   */
  public $SiteInformationDetails = null;

  /**
   * 
   * @var EndCustomerDetails $EndCustomerDetails
   * @access public
   */
  public $EndCustomerDetails = null;

  /**
   * 
   * @var commitmentTerm $commitmentTerm
   * @access public
   */
  public $commitmentTerm = null;

  /**
   * 
   * @var status $status
   * @access public
   */
  public $status = null;

  /**
   * 
   * @param productType $productType
   * @param serviceProviderContactEmail $serviceProviderContactEmail
   * @param SiteInformationDetails $SiteInformationDetails
   * @param EndCustomerDetails $EndCustomerDetails
   * @param commitmentTerm $commitmentTerm
   * @param status $status
   * @access public
   */
  public function __construct($productType, $serviceProviderContactEmail, $SiteInformationDetails, $EndCustomerDetails, $commitmentTerm, $status)
  {
    $this->productType = $productType;
    $this->serviceProviderContactEmail = $serviceProviderContactEmail;
    $this->SiteInformationDetails = $SiteInformationDetails;
    $this->EndCustomerDetails = $EndCustomerDetails;
    $this->commitmentTerm = $commitmentTerm;
    $this->status = $status;
  }

}
