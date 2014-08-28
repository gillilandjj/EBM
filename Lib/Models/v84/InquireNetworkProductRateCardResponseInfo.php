<?php

class InquireNetworkProductRateCardResponseInfo
{

  /**
   * 
   * @var NetworkRateCardDetails $NetworkRateCardDetails
   * @access public
   */
  public $NetworkRateCardDetails = null;

  /**
   * 
   * @var AseRateCardDetails $AseRateCardDetails
   * @access public
   */
  public $AseRateCardDetails = null;

  /**
   * 
   * @var additionalNotes $additionalNotes
   * @access public
   */
  public $additionalNotes = null;

  /**
   * 
   * @var ResponseInfo $Warning
   * @access public
   */
  public $Warning = null;

  /**
   * 
   * @var ResponseInfo $Response
   * @access public
   */
  public $Response = null;

  /**
   * 
   * @param NetworkRateCardDetails $NetworkRateCardDetails
   * @param AseRateCardDetails $AseRateCardDetails
   * @param additionalNotes $additionalNotes
   * @param ResponseInfo $Warning
   * @param ResponseInfo $Response
   * @access public
   */
  public function __construct($NetworkRateCardDetails, $AseRateCardDetails, $additionalNotes, $Warning, $Response)
  {
    $this->NetworkRateCardDetails = $NetworkRateCardDetails;
    $this->AseRateCardDetails = $AseRateCardDetails;
    $this->additionalNotes = $additionalNotes;
    $this->Warning = $Warning;
    $this->Response = $Response;
  }

}
