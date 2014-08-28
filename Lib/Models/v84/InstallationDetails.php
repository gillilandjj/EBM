<?php

class InstallationDetails
{

  /**
   * 
   * @var customerPurchaseDate $customerPurchaseDate
   * @access public
   */
  public $customerPurchaseDate = null;

  /**
   * 
   * @var customerRequestDueDate $customerRequestDueDate
   * @access public
   */
  public $customerRequestDueDate = null;

  /**
   * 
   * @var int $siteInstallPriority
   * @access public
   */
  public $siteInstallPriority = null;

  /**
   * 
   * @var boolean $refuseEarlyServiceIndicator
   * @access public
   */
  public $refuseEarlyServiceIndicator = null;

  /**
   * 
   * @param customerPurchaseDate $customerPurchaseDate
   * @param customerRequestDueDate $customerRequestDueDate
   * @param int $siteInstallPriority
   * @param boolean $refuseEarlyServiceIndicator
   * @access public
   */
  public function __construct($customerPurchaseDate, $customerRequestDueDate, $siteInstallPriority, $refuseEarlyServiceIndicator)
  {
    $this->customerPurchaseDate = $customerPurchaseDate;
    $this->customerRequestDueDate = $customerRequestDueDate;
    $this->siteInstallPriority = $siteInstallPriority;
    $this->refuseEarlyServiceIndicator = $refuseEarlyServiceIndicator;
  }

}
