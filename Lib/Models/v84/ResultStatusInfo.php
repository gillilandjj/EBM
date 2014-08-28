<?php

class ResultStatusInfo
{

  /**
   * 
   * @var ResponseInfo $Response
   * @access public
   */
  public $Response = null;

  /**
   * 
   * @var ServiceProviderEntityInfo $ServiceProviderEntity
   * @access public
   */
  public $ServiceProviderEntity = null;

  /**
   * 
   * @param ResponseInfo $Response
   * @param ServiceProviderEntityInfo $ServiceProviderEntity
   * @access public
   */
  public function __construct($Response, $ServiceProviderEntity)
  {
    $this->Response = $Response;
    $this->ServiceProviderEntity = $ServiceProviderEntity;
  }

}
