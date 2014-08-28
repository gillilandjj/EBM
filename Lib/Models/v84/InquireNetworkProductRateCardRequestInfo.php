<?php

class InquireNetworkProductRateCardRequestInfo
{

  /**
   * 
   * @var product $product
   * @access public
   */
  public $product = null;

  /**
   * 
   * @var additionalNotes $additionalNotes
   * @access public
   */
  public $additionalNotes = null;

  /**
   * 
   * @param product $product
   * @param additionalNotes $additionalNotes
   * @access public
   */
  public function __construct($product, $additionalNotes)
  {
    $this->product = $product;
    $this->additionalNotes = $additionalNotes;
  }

}
