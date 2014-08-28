<?php

class SiteInformationDetails
{

  /**
   * 
   * @var ProvisionalSiteDetails $ProvisionalSiteDetails
   * @access public
   */
  public $ProvisionalSiteDetails = null;

  /**
   * 
   * @var boolean $cosProductIndicator
   * @access public
   */
  public $cosProductIndicator = null;

  /**
   * 
   * @var NetworkSitePriceRequest $NetworkSitePriceRequest
   * @access public
   */
  public $NetworkSitePriceRequest = null;

  /**
   * 
   * @var RdsInformationDetails $RdsInformationDetails
   * @access public
   */
  public $RdsInformationDetails = null;

  /**
   * 
   * @var BooleanTrueInfo $unilinkIndicator
   * @access public
   */
  public $unilinkIndicator = null;

  /**
   * 
   * @param ProvisionalSiteDetails $ProvisionalSiteDetails
   * @param boolean $cosProductIndicator
   * @param NetworkSitePriceRequest $NetworkSitePriceRequest
   * @param RdsInformationDetails $RdsInformationDetails
   * @param BooleanTrueInfo $unilinkIndicator
   * @access public
   */
  public function __construct($ProvisionalSiteDetails, $cosProductIndicator, $NetworkSitePriceRequest, $RdsInformationDetails, $unilinkIndicator)
  {
    $this->ProvisionalSiteDetails = $ProvisionalSiteDetails;
    $this->cosProductIndicator = $cosProductIndicator;
    $this->NetworkSitePriceRequest = $NetworkSitePriceRequest;
    $this->RdsInformationDetails = $RdsInformationDetails;
    $this->unilinkIndicator = $unilinkIndicator;
  }

}
