<?php

class AvailableASECirSpeeds
{

  /**
   * 
   * @var speedName $speedName
   * @access public
   */
  public $speedName = null;

  /**
   * 
   * @var int $speedInMbps
   * @access public
   */
  public $speedInMbps = null;

  /**
   * 
   * @var SupportedCosList $SupportedCosList
   * @access public
   */
  public $SupportedCosList = null;

  /**
   * 
   * @param speedName $speedName
   * @param int $speedInMbps
   * @param SupportedCosList $SupportedCosList
   * @access public
   */
  public function __construct($speedName, $speedInMbps, $SupportedCosList)
  {
    $this->speedName = $speedName;
    $this->speedInMbps = $speedInMbps;
    $this->SupportedCosList = $SupportedCosList;
  }

}
