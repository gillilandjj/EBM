<?php

class IpvInfo
{

  /**
   * 
   * @var ipvCERAddress $ipvCERAddress
   * @access public
   */
  public $ipvCERAddress = null;

  /**
   * 
   * @var ipvPERAddress $ipvPERAddress
   * @access public
   */
  public $ipvPERAddress = null;

  /**
   * 
   * @var ipvSubnetMask $ipvSubnetMask
   * @access public
   */
  public $ipvSubnetMask = null;

  /**
   * 
   * @var int $autonomousSysNum
   * @access public
   */
  public $autonomousSysNum = null;

  /**
   * 
   * @var boolean $aSNOverrideIndicator
   * @access public
   */
  public $aSNOverrideIndicator = null;

  /**
   * 
   * @var boolean $restrictiveRoutingIndicator
   * @access public
   */
  public $restrictiveRoutingIndicator = null;

  /**
   * 
   * @var ipvRoutingProtocol $ipvRoutingProtocol
   * @access public
   */
  public $ipvRoutingProtocol = null;

  /**
   * 
   * @var int $lanBlocksNumber
   * @access public
   */
  public $lanBlocksNumber = null;

  /**
   * 
   * @var IpvLanInfo $IpvLanInfo
   * @access public
   */
  public $IpvLanInfo = null;

  /**
   * 
   * @var packetFilter $packetFilter
   * @access public
   */
  public $packetFilter = null;

  /**
   * 
   * @var BooleanTrueInfo $md5AuthenticationIndicator
   * @access public
   */
  public $md5AuthenticationIndicator = null;

  /**
   * 
   * @var Md5Password $Md5Password
   * @access public
   */
  public $Md5Password = null;

  /**
   * 
   * @var ipvRouteAdvertisements $ipvRouteAdvertisements
   * @access public
   */
  public $ipvRouteAdvertisements = null;

  /**
   * 
   * @param ipvCERAddress $ipvCERAddress
   * @param ipvPERAddress $ipvPERAddress
   * @param ipvSubnetMask $ipvSubnetMask
   * @param int $autonomousSysNum
   * @param boolean $aSNOverrideIndicator
   * @param boolean $restrictiveRoutingIndicator
   * @param ipvRoutingProtocol $ipvRoutingProtocol
   * @param int $lanBlocksNumber
   * @param IpvLanInfo $IpvLanInfo
   * @param packetFilter $packetFilter
   * @param BooleanTrueInfo $md5AuthenticationIndicator
   * @param Md5Password $Md5Password
   * @param ipvRouteAdvertisements $ipvRouteAdvertisements
   * @access public
   */
  public function __construct($ipvCERAddress, $ipvPERAddress, $ipvSubnetMask, $autonomousSysNum, $aSNOverrideIndicator, $restrictiveRoutingIndicator, $ipvRoutingProtocol, $lanBlocksNumber, $IpvLanInfo, $packetFilter, $md5AuthenticationIndicator, $Md5Password, $ipvRouteAdvertisements)
  {
    $this->ipvCERAddress = $ipvCERAddress;
    $this->ipvPERAddress = $ipvPERAddress;
    $this->ipvSubnetMask = $ipvSubnetMask;
    $this->autonomousSysNum = $autonomousSysNum;
    $this->aSNOverrideIndicator = $aSNOverrideIndicator;
    $this->restrictiveRoutingIndicator = $restrictiveRoutingIndicator;
    $this->ipvRoutingProtocol = $ipvRoutingProtocol;
    $this->lanBlocksNumber = $lanBlocksNumber;
    $this->IpvLanInfo = $IpvLanInfo;
    $this->packetFilter = $packetFilter;
    $this->md5AuthenticationIndicator = $md5AuthenticationIndicator;
    $this->Md5Password = $Md5Password;
    $this->ipvRouteAdvertisements = $ipvRouteAdvertisements;
  }

}
