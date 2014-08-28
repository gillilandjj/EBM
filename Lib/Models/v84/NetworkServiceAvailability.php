<?php

class NetworkServiceAvailability
{

  /**
   * 
   * @var transportType $transportType
   * @access public
   */
  public $transportType = null;

  /**
   * 
   * @var SpeedInfo $Speed
   * @access public
   */
  public $Speed = null;

  /**
   * 
   * @var quantity $quantity
   * @access public
   */
  public $quantity = null;

  /**
   * 
   * @param transportType $transportType
   * @param SpeedInfo $Speed
   * @param quantity $quantity
   * @access public
   */
  public function __construct($transportType, $Speed, $quantity)
  {
    $this->transportType = $transportType;
    $this->Speed = $Speed;
    $this->quantity = $quantity;
  }

}
