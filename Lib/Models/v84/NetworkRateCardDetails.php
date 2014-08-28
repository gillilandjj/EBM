<?php

class NetworkRateCardDetails
{

  /**
   * 
   * @var networkTransportSpeedType $networkTransportSpeedType
   * @access public
   */
  public $networkTransportSpeedType = null;

  /**
   * 
   * @var commitmentTerm $commitmentTerm
   * @access public
   */
  public $commitmentTerm = null;

  /**
   * 
   * @var transportSpeedName $transportSpeedName
   * @access public
   */
  public $transportSpeedName = null;

  /**
   * 
   * @var ItemPriceInfo $TransportPriceDetails
   * @access public
   */
  public $TransportPriceDetails = null;

  /**
   * 
   * @var AccessPriceDetails $AccessPriceDetails
   * @access public
   */
  public $AccessPriceDetails = null;

  /**
   * 
   * @param networkTransportSpeedType $networkTransportSpeedType
   * @param commitmentTerm $commitmentTerm
   * @param transportSpeedName $transportSpeedName
   * @param ItemPriceInfo $TransportPriceDetails
   * @param AccessPriceDetails $AccessPriceDetails
   * @access public
   */
  public function __construct($networkTransportSpeedType, $commitmentTerm, $transportSpeedName, $TransportPriceDetails, $AccessPriceDetails)
  {
    $this->networkTransportSpeedType = $networkTransportSpeedType;
    $this->commitmentTerm = $commitmentTerm;
    $this->transportSpeedName = $transportSpeedName;
    $this->TransportPriceDetails = $TransportPriceDetails;
    $this->AccessPriceDetails = $AccessPriceDetails;
  }

}
