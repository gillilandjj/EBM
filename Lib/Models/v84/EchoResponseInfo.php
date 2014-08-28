<?php

class EchoResponseInfo
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
   * @var ResponseInfo $Response
   * @access public
   */
  public $Response = null;

  /**
   * 
   * @param string $serviceEntity
   * @param string $data
   * @param ResponseInfo $Response
   * @access public
   */
  public function __construct($serviceEntity, $data, $Response)
  {
    $this->serviceEntity = $serviceEntity;
    $this->data = $data;
    $this->Response = $Response;
  }

}
