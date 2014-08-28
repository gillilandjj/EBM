<?php

class OrderProvisioningSitePriceDetails
{

  /**
   * 
   * @var siteNumber $siteNumber
   * @access public
   */
  public $siteNumber = null;

  /**
   * 
   * @var ItemPriceInfo $SitePortListPrice
   * @access public
   */
  public $SitePortListPrice = null;

  /**
   * 
   * @var float $subTotalDiscount
   * @access public
   */
  public $subTotalDiscount = null;

  /**
   * 
   * @var float $subTotalPrice
   * @access public
   */
  public $subTotalPrice = null;

  /**
   * 
   * @var ItemPriceInfo $SiteAccessListPrice
   * @access public
   */
  public $SiteAccessListPrice = null;

  /**
   * 
   * @var ItemPriceInfo $CosPrice
   * @access public
   */
  public $CosPrice = null;

  /**
   * 
   * @var ItemPriceInfo $UnilinkPrice
   * @access public
   */
  public $UnilinkPrice = null;

  /**
   * 
   * @var float $installationPrice
   * @access public
   */
  public $installationPrice = null;

  /**
   * 
   * @param siteNumber $siteNumber
   * @param ItemPriceInfo $SitePortListPrice
   * @param float $subTotalDiscount
   * @param float $subTotalPrice
   * @param ItemPriceInfo $SiteAccessListPrice
   * @param ItemPriceInfo $CosPrice
   * @param ItemPriceInfo $UnilinkPrice
   * @param float $installationPrice
   * @access public
   */
  public function __construct($siteNumber, $SitePortListPrice, $subTotalDiscount, $subTotalPrice, $SiteAccessListPrice, $CosPrice, $UnilinkPrice, $installationPrice)
  {
    $this->siteNumber = $siteNumber;
    $this->SitePortListPrice = $SitePortListPrice;
    $this->subTotalDiscount = $subTotalDiscount;
    $this->subTotalPrice = $subTotalPrice;
    $this->SiteAccessListPrice = $SiteAccessListPrice;
    $this->CosPrice = $CosPrice;
    $this->UnilinkPrice = $UnilinkPrice;
    $this->installationPrice = $installationPrice;
  }

}
