<?php

class BISError
{

  /**
   * 
   * @var string $code
   * @access public
   */
  public $code = null;

  /**
   * 
   * @var string $description
   * @access public
   */
  public $description = null;

  /**
   * 
   * @var string $origination
   * @access public
   */
  public $origination = null;

  /**
   * 
   * @var string $severity
   * @access public
   */
  public $severity = null;

  /**
   * 
   * @param string $code
   * @param string $description
   * @param string $origination
   * @param string $severity
   * @access public
   */
  public function __construct($code, $description, $origination, $severity)
  {
    $this->code = $code;
    $this->description = $description;
    $this->origination = $origination;
    $this->severity = $severity;
  }

}
