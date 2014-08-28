<?php

class PortDetails
{

  /**
   * 
   * @var boolean $hasTestingRouterIndicator
   * @access public
   */
  public $hasTestingRouterIndicator = null;

  /**
   * 
   * @var tagControl $tagControl
   * @access public
   */
  public $tagControl = null;

  /**
   * 
   * @var ipAddress $ipAddress
   * @access public
   */
  public $ipAddress = null;

  /**
   * 
   * @var boolean $attHostedDNSIndicator
   * @access public
   */
  public $attHostedDNSIndicator = null;

  /**
   * 
   * @var domainURL $domainURL
   * @access public
   */
  public $domainURL = null;

  /**
   * 
   * @var internetProtocol $internetProtocol
   * @access public
   */
  public $internetProtocol = null;

  /**
   * 
   * @var boolean $migrateIPIndicator
   * @access public
   */
  public $migrateIPIndicator = null;

  /**
   * 
   * @var string $migratingIPs
   * @access public
   */
  public $migratingIPs = null;

  /**
   * 
   * @param boolean $hasTestingRouterIndicator
   * @param tagControl $tagControl
   * @param ipAddress $ipAddress
   * @param boolean $attHostedDNSIndicator
   * @param domainURL $domainURL
   * @param internetProtocol $internetProtocol
   * @param boolean $migrateIPIndicator
   * @param string $migratingIPs
   * @access public
   */
  public function __construct($hasTestingRouterIndicator, $tagControl, $ipAddress, $attHostedDNSIndicator, $domainURL, $internetProtocol, $migrateIPIndicator, $migratingIPs)
  {
    $this->hasTestingRouterIndicator = $hasTestingRouterIndicator;
    $this->tagControl = $tagControl;
    $this->ipAddress = $ipAddress;
    $this->attHostedDNSIndicator = $attHostedDNSIndicator;
    $this->domainURL = $domainURL;
    $this->internetProtocol = $internetProtocol;
    $this->migrateIPIndicator = $migrateIPIndicator;
    $this->migratingIPs = $migratingIPs;
  }

}
