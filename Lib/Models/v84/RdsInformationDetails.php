<?php

class RdsInformationDetails
{

  /**
   * 
   * @var InstallationDetails $InstallationDetails
   * @access public
   */
  public $InstallationDetails = null;

  /**
   * 
   * @var additionalInfoReq $additionalInfoReq
   * @access public
   */
  public $additionalInfoReq = null;

  /**
   * 
   * @var ContactDetails $ContactDetails
   * @access public
   */
  public $ContactDetails = null;

  /**
   * 
   * @var boolean $cosProductIndicator
   * @access public
   */
  public $cosProductIndicator = null;

  /**
   * 
   * @var AccessFeaturesOptions $AccessFeaturesOptions
   * @access public
   */
  public $AccessFeaturesOptions = null;

  /**
   * 
   * @var configureSiteStatus $configureSiteStatus
   * @access public
   */
  public $configureSiteStatus = null;

  /**
   * 
   * @var percentage $percentage
   * @access public
   */
  public $percentage = null;

  /**
   * 
   * @var SiteSelectionDetails $SiteSelectionDetails
   * @access public
   */
  public $SiteSelectionDetails = null;

  /**
   * 
   * @var AVPNPortDetails $AVPNPortDetails
   * @access public
   */
  public $AVPNPortDetails = null;

  /**
   * 
   * @var PortDetails $PortDetails
   * @access public
   */
  public $PortDetails = null;

  /**
   * 
   * @var UnmanagedRouterEquipmentDetails $UnmanagedRouterEquipmentDetails
   * @access public
   */
  public $UnmanagedRouterEquipmentDetails = null;

  /**
   * 
   * @var AttRouterShipDetails $AttRouterShipDetails
   * @access public
   */
  public $AttRouterShipDetails = null;

  /**
   * 
   * @var IpvInfo $Ipv4Details
   * @access public
   */
  public $Ipv4Details = null;

  /**
   * 
   * @var IpvInfo $Ipv6Details
   * @access public
   */
  public $Ipv6Details = null;

  /**
   * 
   * @var ClassOfServiceDetails $ClassOfServiceDetails
   * @access public
   */
  public $ClassOfServiceDetails = null;

  /**
   * 
   * @param InstallationDetails $InstallationDetails
   * @param additionalInfoReq $additionalInfoReq
   * @param ContactDetails $ContactDetails
   * @param boolean $cosProductIndicator
   * @param AccessFeaturesOptions $AccessFeaturesOptions
   * @param configureSiteStatus $configureSiteStatus
   * @param percentage $percentage
   * @param SiteSelectionDetails $SiteSelectionDetails
   * @param AVPNPortDetails $AVPNPortDetails
   * @param PortDetails $PortDetails
   * @param UnmanagedRouterEquipmentDetails $UnmanagedRouterEquipmentDetails
   * @param AttRouterShipDetails $AttRouterShipDetails
   * @param IpvInfo $Ipv4Details
   * @param IpvInfo $Ipv6Details
   * @param ClassOfServiceDetails $ClassOfServiceDetails
   * @access public
   */
  public function __construct($InstallationDetails, $additionalInfoReq, $ContactDetails, $cosProductIndicator, $AccessFeaturesOptions, $configureSiteStatus, $percentage, $SiteSelectionDetails, $AVPNPortDetails, $PortDetails, $UnmanagedRouterEquipmentDetails, $AttRouterShipDetails, $Ipv4Details, $Ipv6Details, $ClassOfServiceDetails)
  {
    $this->InstallationDetails = $InstallationDetails;
    $this->additionalInfoReq = $additionalInfoReq;
    $this->ContactDetails = $ContactDetails;
    $this->cosProductIndicator = $cosProductIndicator;
    $this->AccessFeaturesOptions = $AccessFeaturesOptions;
    $this->configureSiteStatus = $configureSiteStatus;
    $this->percentage = $percentage;
    $this->SiteSelectionDetails = $SiteSelectionDetails;
    $this->AVPNPortDetails = $AVPNPortDetails;
    $this->PortDetails = $PortDetails;
    $this->UnmanagedRouterEquipmentDetails = $UnmanagedRouterEquipmentDetails;
    $this->AttRouterShipDetails = $AttRouterShipDetails;
    $this->Ipv4Details = $Ipv4Details;
    $this->Ipv6Details = $Ipv6Details;
    $this->ClassOfServiceDetails = $ClassOfServiceDetails;
  }

}
