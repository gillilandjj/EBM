<?php

class ServiceEntityFaultInfo
{

  /**
   * 
   * @var string $reportingServiceEntity
   * @access public
   */
  public $reportingServiceEntity = null;

  /**
   * 
   * @var DateWithTimezoneInfo $faultDate
   * @access public
   */
  public $faultDate = null;

  /**
   * 
   * @var string $faultSequenceNumber
   * @access public
   */
  public $faultSequenceNumber = null;

  /**
   * 
   * @var string $faultLevel
   * @access public
   */
  public $faultLevel = null;

  /**
   * 
   * @var string $faultCode
   * @access public
   */
  public $faultCode = null;

  /**
   * 
   * @var string $faultDescription
   * @access public
   */
  public $faultDescription = null;

  /**
   * 
   * @var string $cingularErrorCode
   * @access public
   */
  public $cingularErrorCode = null;

  /**
   * 
   * @var string $cingularErrorDescription
   * @access public
   */
  public $cingularErrorDescription = null;

  /**
   * 
   * @var string $cingularErrorCategory
   * @access public
   */
  public $cingularErrorCategory = null;

  /**
   * 
   * @param string $reportingServiceEntity
   * @param DateWithTimezoneInfo $faultDate
   * @param string $faultSequenceNumber
   * @param string $faultLevel
   * @param string $faultCode
   * @param string $faultDescription
   * @param string $cingularErrorCode
   * @param string $cingularErrorDescription
   * @param string $cingularErrorCategory
   * @access public
   */
  public function __construct($reportingServiceEntity, $faultDate, $faultSequenceNumber, $faultLevel, $faultCode, $faultDescription, $cingularErrorCode, $cingularErrorDescription, $cingularErrorCategory)
  {
    $this->reportingServiceEntity = $reportingServiceEntity;
    $this->faultDate = $faultDate;
    $this->faultSequenceNumber = $faultSequenceNumber;
    $this->faultLevel = $faultLevel;
    $this->faultCode = $faultCode;
    $this->faultDescription = $faultDescription;
    $this->cingularErrorCode = $cingularErrorCode;
    $this->cingularErrorDescription = $cingularErrorDescription;
    $this->cingularErrorCategory = $cingularErrorCategory;
  }

}
