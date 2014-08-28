<?php

class SpeedProductTypeInfo
{

  /**
   * 
   * @var id $id
   * @access public
   */
  public $id = null;

  /**
   * 
   * @var productType $productType
   * @access public
   */
  public $productType = null;

  /**
   * 
   * @param id $id
   * @param productType $productType
   * @access public
   */
  public function __construct($id, $productType)
  {
    $this->id = $id;
    $this->productType = $productType;
  }

}
