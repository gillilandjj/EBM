<?php

class NetworkSitePriceRequestDetails
{

  /**
   * 
   * @var popClli $popClli
   * @access public
   */
  public $popClli = null;

  /**
   * 
   * @var swcClli $swcClli
   * @access public
   */
  public $swcClli = null;

  /**
   * 
   * @var lecName $lecName
   * @access public
   */
  public $lecName = null;

  /**
   * 
   * @var int $mileage
   * @access public
   */
  public $mileage = null;

  /**
   * 
   * @var commitmentTerm $commitmentTerm
   * @access public
   */
  public $commitmentTerm = null;

  /**
   * 
   * @var SiteSelectionDetails $SiteSelectionDetails
   * @access public
   */
  public $SiteSelectionDetails = null;

  /**
   * 
   * @var region $region
   * @access public
   */
  public $region = null;

  /**
   * 
   * @var interfaceType $interfaceType
   * @access public
   */
  public $interfaceType = null;

  /**
   * 
   * @param popClli $popClli
   * @param swcClli $swcClli
   * @param lecName $lecName
   * @param int $mileage
   * @param commitmentTerm $commitmentTerm
   * @param SiteSelectionDetails $SiteSelectionDetails
   * @param region $region
   * @param interfaceType $interfaceType
   * @access public
   */
  public function __construct($popClli, $swcClli, $lecName, $mileage, $commitmentTerm, $SiteSelectionDetails, $region, $interfaceType)
  {
    $this->popClli = $popClli;
    $this->swcClli = $swcClli;
    $this->lecName = $lecName;
    $this->mileage = $mileage;
    $this->commitmentTerm = $commitmentTerm;
    $this->SiteSelectionDetails = $SiteSelectionDetails;
    $this->region = $region;
    $this->interfaceType = $interfaceType;
  }

}
