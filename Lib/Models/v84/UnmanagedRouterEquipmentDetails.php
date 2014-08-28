<?php

class UnmanagedRouterEquipmentDetails
{

  /**
   * 
   * @var routerType $routerType
   * @access public
   */
  public $routerType = null;

  /**
   * 
   * @var vendor $vendor
   * @access public
   */
  public $vendor = null;

  /**
   * 
   * @var model $model
   * @access public
   */
  public $model = null;

  /**
   * 
   * @var routerClass $routerClass
   * @access public
   */
  public $routerClass = null;

  /**
   * 
   * @var version $version
   * @access public
   */
  public $version = null;

  /**
   * 
   * @param routerType $routerType
   * @param vendor $vendor
   * @param model $model
   * @param routerClass $routerClass
   * @param version $version
   * @access public
   */
  public function __construct($routerType, $vendor, $model, $routerClass, $version)
  {
    $this->routerType = $routerType;
    $this->vendor = $vendor;
    $this->model = $model;
    $this->routerClass = $routerClass;
    $this->version = $version;
  }

}
