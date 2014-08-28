<?php

class InquireNetworkProductPriceQuoteRequestInfo
{

  /**
   * 
   * @var NetworkSitePriceRequestDetails $NetworkSitePriceRequestDetails
   * @access public
   */
  public $NetworkSitePriceRequestDetails = null;

  /**
   * 
   * @param NetworkSitePriceRequestDetails $NetworkSitePriceRequestDetails
   * @access public
   */
  public function __construct($NetworkSitePriceRequestDetails)
  {
    $this->NetworkSitePriceRequestDetails = $NetworkSitePriceRequestDetails;
  }

}
