<?php

class aseCirSpeedPriceDetails
{

  /**
   * 
   * @var speedName $speedName
   * @access public
   */
  public $speedName = null;

  /**
   * 
   * @var selectedCosType $selectedCosType
   * @access public
   */
  public $selectedCosType = null;

  /**
   * 
   * @var selectedCosPackageName $selectedCosPackageName
   * @access public
   */
  public $selectedCosPackageName = null;

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
   * @param selectedCosType $selectedCosType
   * @param selectedCosPackageName $selectedCosPackageName
   * @param selectedServiceArrangement $selectedServiceArrangement
   * @param ItemPriceInfo $PriceDetails
   * @access public
   */
  public function __construct($speedName, $selectedCosType, $selectedCosPackageName, $selectedServiceArrangement, $PriceDetails)
  {
    $this->speedName = $speedName;
    $this->selectedCosType = $selectedCosType;
    $this->selectedCosPackageName = $selectedCosPackageName;
    $this->selectedServiceArrangement = $selectedServiceArrangement;
    $this->PriceDetails = $PriceDetails;
  }

}
