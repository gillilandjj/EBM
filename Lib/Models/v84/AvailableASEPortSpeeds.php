<?php

class AvailableASEPortSpeeds
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
   * @var supportedServiceArrangement $supportedServiceArrangement
   * @access public
   */
  public $supportedServiceArrangement = null;

  /**
   * 
   * @var SupportedCirSpeedXrefs $SupportedCirSpeedXrefs
   * @access public
   */
  public $SupportedCirSpeedXrefs = null;

  /**
   * 
   * @param speedName $speedName
   * @param int $speedInMbps
   * @param supportedServiceArrangement $supportedServiceArrangement
   * @param SupportedCirSpeedXrefs $SupportedCirSpeedXrefs
   * @access public
   */
  public function __construct($speedName, $speedInMbps, $supportedServiceArrangement, $SupportedCirSpeedXrefs)
  {
    $this->speedName = $speedName;
    $this->speedInMbps = $speedInMbps;
    $this->supportedServiceArrangement = $supportedServiceArrangement;
    $this->SupportedCirSpeedXrefs = $SupportedCirSpeedXrefs;
  }

}
