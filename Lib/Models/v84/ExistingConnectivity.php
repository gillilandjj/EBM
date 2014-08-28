<?php

class ExistingConnectivity
{

  /**
   * 
   * @var copperFiber $copperFiber
   * @access public
   */
  public $copperFiber = null;

  /**
   * 
   * @var currentMaxSpeed $currentMaxSpeed
   * @access public
   */
  public $currentMaxSpeed = null;

  /**
   * 
   * @param copperFiber $copperFiber
   * @param currentMaxSpeed $currentMaxSpeed
   * @access public
   */
  public function __construct($copperFiber, $currentMaxSpeed)
  {
    $this->copperFiber = $copperFiber;
    $this->currentMaxSpeed = $currentMaxSpeed;
  }

}
