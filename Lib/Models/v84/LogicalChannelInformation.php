<?php

class LogicalChannelInformation
{

  /**
   * 
   * @var vlanspeedSelected $vlanspeedSelected
   * @access public
   */
  public $vlanspeedSelected = null;

  /**
   * 
   * @var vpnName $vpnName
   * @access public
   */
  public $vpnName = null;

  /**
   * 
   * @var vLanCERAddress $vLanCERAddress
   * @access public
   */
  public $vLanCERAddress = null;

  /**
   * 
   * @var vLanPERAddress $vLanPERAddress
   * @access public
   */
  public $vLanPERAddress = null;

  /**
   * 
   * @var vLanSubnetMask $vLanSubnetMask
   * @access public
   */
  public $vLanSubnetMask = null;

  /**
   * 
   * @var boolean $enableMulticastIndicator
   * @access public
   */
  public $enableMulticastIndicator = null;

  /**
   * 
   * @var boolean $bVoIPIndicator
   * @access public
   */
  public $bVoIPIndicator = null;

  /**
   * 
   * @var boolean $bVoIPCompressedIndicator
   * @access public
   */
  public $bVoIPCompressedIndicator = null;

  /**
   * 
   * @param vlanspeedSelected $vlanspeedSelected
   * @param vpnName $vpnName
   * @param vLanCERAddress $vLanCERAddress
   * @param vLanPERAddress $vLanPERAddress
   * @param vLanSubnetMask $vLanSubnetMask
   * @param boolean $enableMulticastIndicator
   * @param boolean $bVoIPIndicator
   * @param boolean $bVoIPCompressedIndicator
   * @access public
   */
  public function __construct($vlanspeedSelected, $vpnName, $vLanCERAddress, $vLanPERAddress, $vLanSubnetMask, $enableMulticastIndicator, $bVoIPIndicator, $bVoIPCompressedIndicator)
  {
    $this->vlanspeedSelected = $vlanspeedSelected;
    $this->vpnName = $vpnName;
    $this->vLanCERAddress = $vLanCERAddress;
    $this->vLanPERAddress = $vLanPERAddress;
    $this->vLanSubnetMask = $vLanSubnetMask;
    $this->enableMulticastIndicator = $enableMulticastIndicator;
    $this->bVoIPIndicator = $bVoIPIndicator;
    $this->bVoIPCompressedIndicator = $bVoIPCompressedIndicator;
  }

}
