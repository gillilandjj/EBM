<?php

class AVPNPortDetails
{

  /**
   * 
   * @var vpnConnectionPolicy $vpnConnectionPolicy
   * @access public
   */
  public $vpnConnectionPolicy = null;

  /**
   * 
   * @var vpnName $vpnName
   * @access public
   */
  public $vpnName = null;

  /**
   * 
   * @var vlanTagControl $vlanTagControl
   * @access public
   */
  public $vlanTagControl = null;

  /**
   * 
   * @var internetProtocol $internetProtocol
   * @access public
   */
  public $internetProtocol = null;

  /**
   * 
   * @var boolean $portUnilinkIndicator
   * @access public
   */
  public $portUnilinkIndicator = null;

  /**
   * 
   * @var int $vlanCount
   * @access public
   */
  public $vlanCount = null;

  /**
   * 
   * @var int $multicast
   * @access public
   */
  public $multicast = null;

  /**
   * 
   * @var vpnConnectionType $vpnConnectionType
   * @access public
   */
  public $vpnConnectionType = null;

  /**
   * 
   * @var LogicalChannelInformation $LogicalChannelInformation
   * @access public
   */
  public $LogicalChannelInformation = null;

  /**
   * 
   * @param vpnConnectionPolicy $vpnConnectionPolicy
   * @param vpnName $vpnName
   * @param vlanTagControl $vlanTagControl
   * @param internetProtocol $internetProtocol
   * @param boolean $portUnilinkIndicator
   * @param int $vlanCount
   * @param int $multicast
   * @param vpnConnectionType $vpnConnectionType
   * @param LogicalChannelInformation $LogicalChannelInformation
   * @access public
   */
  public function __construct($vpnConnectionPolicy, $vpnName, $vlanTagControl, $internetProtocol, $portUnilinkIndicator, $vlanCount, $multicast, $vpnConnectionType, $LogicalChannelInformation)
  {
    $this->vpnConnectionPolicy = $vpnConnectionPolicy;
    $this->vpnName = $vpnName;
    $this->vlanTagControl = $vlanTagControl;
    $this->internetProtocol = $internetProtocol;
    $this->portUnilinkIndicator = $portUnilinkIndicator;
    $this->vlanCount = $vlanCount;
    $this->multicast = $multicast;
    $this->vpnConnectionType = $vpnConnectionType;
    $this->LogicalChannelInformation = $LogicalChannelInformation;
  }

}
