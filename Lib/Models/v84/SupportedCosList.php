<?php

class SupportedCosList
{

  /**
   * 
   * @var cosPackageName $cosPackageName
   * @access public
   */
  public $cosPackageName = null;

  /**
   * 
   * @var cosPackageType $cosPackageType
   * @access public
   */
  public $cosPackageType = null;

  /**
   * 
   * @var supportedServiceArrangement $supportedServiceArrangement
   * @access public
   */
  public $supportedServiceArrangement = null;

  /**
   * 
   * @var cosProfileIds $cosProfileIds
   * @access public
   */
  public $cosProfileIds = null;

  /**
   * 
   * @param cosPackageName $cosPackageName
   * @param cosPackageType $cosPackageType
   * @param supportedServiceArrangement $supportedServiceArrangement
   * @param cosProfileIds $cosProfileIds
   * @access public
   */
  public function __construct($cosPackageName, $cosPackageType, $supportedServiceArrangement, $cosProfileIds)
  {
    $this->cosPackageName = $cosPackageName;
    $this->cosPackageType = $cosPackageType;
    $this->supportedServiceArrangement = $supportedServiceArrangement;
    $this->cosProfileIds = $cosProfileIds;
  }

}
