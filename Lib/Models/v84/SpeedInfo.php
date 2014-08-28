<?php

class SpeedInfo
{

  /**
   * 
   * @var speedName $speedName
   * @access public
   */
  public $speedName = null;

  /**
   * 
   * @var speedPhysicalValue $speedPhysicalValue
   * @access public
   */
  public $speedPhysicalValue = null;

  /**
   * 
   * @var speedUnit $speedUnit
   * @access public
   */
  public $speedUnit = null;

  /**
   * 
   * @param speedName $speedName
   * @param speedPhysicalValue $speedPhysicalValue
   * @param speedUnit $speedUnit
   * @access public
   */
  public function __construct($speedName, $speedPhysicalValue, $speedUnit)
  {
    $this->speedName = $speedName;
    $this->speedPhysicalValue = $speedPhysicalValue;
    $this->speedUnit = $speedUnit;
  }

}
