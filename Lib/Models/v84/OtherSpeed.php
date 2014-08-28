<?php

class OtherSpeed
{

  /**
   * 
   * @var speed $speed
   * @access public
   */
  public $speed = null;

  /**
   * 
   * @var electricalOptical $electricalOptical
   * @access public
   */
  public $electricalOptical = null;

  /**
   * 
   * @var int $networkType
   * @access public
   */
  public $networkType = null;

  /**
   * 
   * @param speed $speed
   * @param electricalOptical $electricalOptical
   * @param int $networkType
   * @access public
   */
  public function __construct($speed, $electricalOptical, $networkType)
  {
    $this->speed = $speed;
    $this->electricalOptical = $electricalOptical;
    $this->networkType = $networkType;
  }

}
