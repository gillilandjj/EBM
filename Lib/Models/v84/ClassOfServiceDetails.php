<?php

class ClassOfServiceDetails
{

  /**
   * 
   * @var cosProfile $cosProfile
   * @access public
   */
  public $cosProfile = null;

  /**
   * 
   * @var int $cosRealtimePercent
   * @access public
   */
  public $cosRealtimePercent = null;

  /**
   * 
   * @param cosProfile $cosProfile
   * @param int $cosRealtimePercent
   * @access public
   */
  public function __construct($cosProfile, $cosRealtimePercent)
  {
    $this->cosProfile = $cosProfile;
    $this->cosRealtimePercent = $cosRealtimePercent;
  }

}
