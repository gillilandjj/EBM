<?php

class NetworkSitePriceRequest
{

  /**
   * 
   * @var region $region
   * @access public
   */
  public $region = null;

  /**
   * 
   * @var popCLLI $popCLLI
   * @access public
   */
  public $popCLLI = null;

  /**
   * 
   * @var swcCLLI $swcCLLI
   * @access public
   */
  public $swcCLLI = null;

  /**
   * 
   * @var lecName $lecName
   * @access public
   */
  public $lecName = null;

  /**
   * 
   * @var networkFriendlyName $networkFriendlyName
   * @access public
   */
  public $networkFriendlyName = null;

  /**
   * 
   * @var int $mileage
   * @access public
   */
  public $mileage = null;

  /**
   * 
   * @var interfaceType $interfaceType
   * @access public
   */
  public $interfaceType = null;

  /**
   * 
   * @param region $region
   * @param popCLLI $popCLLI
   * @param swcCLLI $swcCLLI
   * @param lecName $lecName
   * @param networkFriendlyName $networkFriendlyName
   * @param int $mileage
   * @param interfaceType $interfaceType
   * @access public
   */
  public function __construct($region, $popCLLI, $swcCLLI, $lecName, $networkFriendlyName, $mileage, $interfaceType)
  {
    $this->region = $region;
    $this->popCLLI = $popCLLI;
    $this->swcCLLI = $swcCLLI;
    $this->lecName = $lecName;
    $this->networkFriendlyName = $networkFriendlyName;
    $this->mileage = $mileage;
    $this->interfaceType = $interfaceType;
  }

}
