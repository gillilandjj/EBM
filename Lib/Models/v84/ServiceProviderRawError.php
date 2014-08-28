<?php

class ServiceProviderRawError
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
   * @var BISError $BISError
   * @access public
   */
  public $BISError = null;

  /**
   * 
   * @param string $code
   * @param string $description
   * @param BISError $BISError
   * @access public
   */
  public function __construct($code, $description, $BISError)
  {
    $this->code = $code;
    $this->description = $description;
    $this->BISError = $BISError;
  }

}
