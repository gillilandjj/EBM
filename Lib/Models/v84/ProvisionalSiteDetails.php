<?php

class ProvisionalSiteDetails
{

  /**
   * 
   * @var siteNumber $siteNumber
   * @access public
   */
  public $siteNumber = null;

  /**
   * 
   * @var siteFriendlyName $siteFriendlyName
   * @access public
   */
  public $siteFriendlyName = null;

  /**
   * 
   * @var AddressDetails $AddressDetails
   * @access public
   */
  public $AddressDetails = null;

  /**
   * 
   * @var SiteSelectionDetails $SiteSelectionDetails
   * @access public
   */
  public $SiteSelectionDetails = null;

  /**
   * 
   * @var siteDescription $siteDescription
   * @access public
   */
  public $siteDescription = null;

  /**
   * 
   * @param siteNumber $siteNumber
   * @param siteFriendlyName $siteFriendlyName
   * @param AddressDetails $AddressDetails
   * @param SiteSelectionDetails $SiteSelectionDetails
   * @param siteDescription $siteDescription
   * @access public
   */
  public function __construct($siteNumber, $siteFriendlyName, $AddressDetails, $SiteSelectionDetails, $siteDescription)
  {
    $this->siteNumber = $siteNumber;
    $this->siteFriendlyName = $siteFriendlyName;
    $this->AddressDetails = $AddressDetails;
    $this->SiteSelectionDetails = $SiteSelectionDetails;
    $this->siteDescription = $siteDescription;
  }

}
