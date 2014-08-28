<?php

class SubmitWirelineProvisioningOrderResponseInfo
{

  /**
   * 
   * @var orderId $orderId
   * @access public
   */
  public $orderId = null;

  /**
   * 
   * @var OrderProvisioningSitePriceDetails $OrderProvisioningSitePriceDetails
   * @access public
   */
  public $OrderProvisioningSitePriceDetails = null;

  /**
   * 
   * @var string $totalDiscount
   * @access public
   */
  public $totalDiscount = null;

  /**
   * 
   * @var string $totalPrice
   * @access public
   */
  public $totalPrice = null;

  /**
   * 
   * @var string $contractualLanguage
   * @access public
   */
  public $contractualLanguage = null;

  /**
   * 
   * @var ResponseInfo $Response
   * @access public
   */
  public $Response = null;

  /**
   * 
   * @param orderId $orderId
   * @param OrderProvisioningSitePriceDetails $OrderProvisioningSitePriceDetails
   * @param string $totalDiscount
   * @param string $totalPrice
   * @param string $contractualLanguage
   * @param ResponseInfo $Response
   * @access public
   */
  public function __construct($orderId, $OrderProvisioningSitePriceDetails, $totalDiscount, $totalPrice, $contractualLanguage, $Response)
  {
    $this->orderId = $orderId;
    $this->OrderProvisioningSitePriceDetails = $OrderProvisioningSitePriceDetails;
    $this->totalDiscount = $totalDiscount;
    $this->totalPrice = $totalPrice;
    $this->contractualLanguage = $contractualLanguage;
    $this->Response = $Response;
  }

}
