<?php

class asePortSpeedPriceDetails
{

  /**
   * 
   * @var speedName $speedName
   * @access public
   */
  public $speedName = null;

  /**
   * 
   * @var int $speedInMbps
   * @access public
   */
  public $speedInMbps = null;

  /**
   * 
   * @var selectedServiceArrangement $selectedServiceArrangement
   * @access public
   */
  public $selectedServiceArrangement = null;

  /**
   * 
   * @var ItemPriceInfo $PriceDetails
   * @access public
   */
  public $PriceDetails = null;

  /**
   * 
   * @param speedName $speedName
   * @param int $speedInMbps
   * @param selectedServiceArrangement $selectedServiceArrangement
   * @param ItemPriceInfo $PriceDetails
   * @access public
   */
  public function __construct($speedName, $speedInMbps, $selectedServiceArrangement, $PriceDetails)
  {
    $this->speedName = $speedName;
    $this->speedInMbps = $speedInMbps;
    $this->selectedServiceArrangement = $selectedServiceArrangement;
    $this->PriceDetails = $PriceDetails;
  }

}
