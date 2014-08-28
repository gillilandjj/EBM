<?php

class EchoRequestInfo
{

  /**
   * 
   * @var string $serviceEntity
   * @access public
   */
  public $serviceEntity = null;

  /**
   * 
   * @var string $data
   * @access public
   */
  public $data = null;

  /**
   * 
   * @param string $serviceEntity
   * @param string $data
   * @access public
   */
  public function __construct($serviceEntity, $data)
  {
    $this->serviceEntity = $serviceEntity;
    $this->data = $data;
  }

}
