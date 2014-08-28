<?php

class Service
{

  /**
   * 
   * @var name $name
   * @access public
   */
  public $name = null;

  /**
   * 
   * @var switchedDedicated $switchedDedicated
   * @access public
   */
  public $switchedDedicated = null;

  /**
   * 
   * @param name $name
   * @param switchedDedicated $switchedDedicated
   * @access public
   */
  public function __construct($name, $switchedDedicated)
  {
    $this->name = $name;
    $this->switchedDedicated = $switchedDedicated;
  }

}
