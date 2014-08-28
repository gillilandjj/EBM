<?php

class PrivateLine
{

  /**
   * 
   * @var popCLLI $popCLLI
   * @access public
   */
  public $popCLLI = null;

  /**
   * 
   * @var speed $speed
   * @access public
   */
  public $speed = null;

  /**
   * 
   * @var int $spareQuantity
   * @access public
   */
  public $spareQuantity = null;

  /**
   * 
   * @var int $mileage
   * @access public
   */
  public $mileage = null;

  /**
   * 
   * @param popCLLI $popCLLI
   * @param speed $speed
   * @param int $spareQuantity
   * @param int $mileage
   * @access public
   */
  public function __construct($popCLLI, $speed, $spareQuantity, $mileage)
  {
    $this->popCLLI = $popCLLI;
    $this->speed = $speed;
    $this->spareQuantity = $spareQuantity;
    $this->mileage = $mileage;
  }

}
