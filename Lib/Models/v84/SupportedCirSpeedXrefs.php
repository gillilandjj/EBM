<?php

class SupportedCirSpeedXrefs
{

  /**
   * 
   * @var xrefedCirSpeedName $xrefedCirSpeedName
   * @access public
   */
  public $xrefedCirSpeedName = null;

  /**
   * 
   * @param xrefedCirSpeedName $xrefedCirSpeedName
   * @access public
   */
  public function __construct($xrefedCirSpeedName)
  {
    $this->xrefedCirSpeedName = $xrefedCirSpeedName;
  }

}
