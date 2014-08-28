<?php

class AccessPriceDetails
{

  /**
   * 
   * @var networkAcessSpeedType $networkAcessSpeedType
   * @access public
   */
  public $networkAcessSpeedType = null;

  /**
   * 
   * @var accessSpeedName $accessSpeedName
   * @access public
   */
  public $accessSpeedName = null;

  /**
   * 
   * @var ItemPriceInfo $PriceDetails
   * @access public
   */
  public $PriceDetails = null;

  /**
   * 
   * @var accessPricingNotes $accessPricingNotes
   * @access public
   */
  public $accessPricingNotes = null;

  /**
   * 
   * @var providerGroup $providerGroup
   * @access public
   */
  public $providerGroup = null;

  /**
   * 
   * @param networkAcessSpeedType $networkAcessSpeedType
   * @param accessSpeedName $accessSpeedName
   * @param ItemPriceInfo $PriceDetails
   * @param accessPricingNotes $accessPricingNotes
   * @param providerGroup $providerGroup
   * @access public
   */
  public function __construct($networkAcessSpeedType, $accessSpeedName, $PriceDetails, $accessPricingNotes, $providerGroup)
  {
    $this->networkAcessSpeedType = $networkAcessSpeedType;
    $this->accessSpeedName = $accessSpeedName;
    $this->PriceDetails = $PriceDetails;
    $this->accessPricingNotes = $accessPricingNotes;
    $this->providerGroup = $providerGroup;
  }

}
