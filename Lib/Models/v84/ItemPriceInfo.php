<?php

class ItemPriceInfo
{

  /**
   * 
   * @var listPriceMRC $listPriceMRC
   * @access public
   */
  public $listPriceMRC = null;

  /**
   * 
   * @var listPriceNRC $listPriceNRC
   * @access public
   */
  public $listPriceNRC = null;

  /**
   * 
   * @var listPriceMRCDiscount $listPriceMRCDiscount
   * @access public
   */
  public $listPriceMRCDiscount = null;

  /**
   * 
   * @var listPriceNRCDiscount $listPriceNRCDiscount
   * @access public
   */
  public $listPriceNRCDiscount = null;

  /**
   * 
   * @param listPriceMRC $listPriceMRC
   * @param listPriceNRC $listPriceNRC
   * @param listPriceMRCDiscount $listPriceMRCDiscount
   * @param listPriceNRCDiscount $listPriceNRCDiscount
   * @access public
   */
  public function __construct($listPriceMRC, $listPriceNRC, $listPriceMRCDiscount, $listPriceNRCDiscount)
  {
    $this->listPriceMRC = $listPriceMRC;
    $this->listPriceNRC = $listPriceNRC;
    $this->listPriceMRCDiscount = $listPriceMRCDiscount;
    $this->listPriceNRCDiscount = $listPriceNRCDiscount;
  }

}
