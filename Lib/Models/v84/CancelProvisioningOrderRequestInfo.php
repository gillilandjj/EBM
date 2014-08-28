<?php

class CancelProvisioningOrderRequestInfo
{

  /**
   * 
   * @var orderId $orderId
   * @access public
   */
  public $orderId = null;

  /**
   * 
   * @param orderId $orderId
   * @access public
   */
  public function __construct($orderId)
  {
    $this->orderId = $orderId;
  }

}
