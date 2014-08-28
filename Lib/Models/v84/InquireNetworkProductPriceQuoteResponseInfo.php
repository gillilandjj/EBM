<?php

class InquireNetworkProductPriceQuoteResponseInfo
{

  /**
   * 
   * @var ItemPriceInfo $SitePortListPrice
   * @access public
   */
  public $SitePortListPrice = null;

  /**
   * 
   * @var ItemPriceInfo $SiteAccessListPrice
   * @access public
   */
  public $SiteAccessListPrice = null;

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
   * @param ItemPriceInfo $SitePortListPrice
   * @param ItemPriceInfo $SiteAccessListPrice
   * @param additionalNotes $additionalNotes
   * @param ResponseInfo $Warning
   * @param ResponseInfo $Response
   * @access public
   */
  public function __construct($SitePortListPrice, $SiteAccessListPrice, $additionalNotes, $Warning, $Response)
  {
    $this->SitePortListPrice = $SitePortListPrice;
    $this->SiteAccessListPrice = $SiteAccessListPrice;
    $this->additionalNotes = $additionalNotes;
    $this->Warning = $Warning;
    $this->Response = $Response;
  }

}
