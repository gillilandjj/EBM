<?php

class TotalServiceDetails
{

  /**
   * 
   * @var accessMethodType $accessMethodType
   * @access public
   */
  public $accessMethodType = null;

  /**
   * 
   * @var physicalInterface $physicalInterface
   * @access public
   */
  public $physicalInterface = null;

  /**
   * 
   * @var notesForAccessInstaller $notesForAccessInstaller
   * @access public
   */
  public $notesForAccessInstaller = null;

  /**
   * 
   * @var vpnConnectionPolicy $vpnConnectionPolicy
   * @access public
   */
  public $vpnConnectionPolicy = null;

  /**
   * 
   * @var accessProvider $accessProvider
   * @access public
   */
  public $accessProvider = null;

  /**
   * 
   * @param accessMethodType $accessMethodType
   * @param physicalInterface $physicalInterface
   * @param notesForAccessInstaller $notesForAccessInstaller
   * @param vpnConnectionPolicy $vpnConnectionPolicy
   * @param accessProvider $accessProvider
   * @access public
   */
  public function __construct($accessMethodType, $physicalInterface, $notesForAccessInstaller, $vpnConnectionPolicy, $accessProvider)
  {
    $this->accessMethodType = $accessMethodType;
    $this->physicalInterface = $physicalInterface;
    $this->notesForAccessInstaller = $notesForAccessInstaller;
    $this->vpnConnectionPolicy = $vpnConnectionPolicy;
    $this->accessProvider = $accessProvider;
  }

}
