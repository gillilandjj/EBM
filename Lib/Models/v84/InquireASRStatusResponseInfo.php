<?php

class InquireASRStatusResponseInfo
{

  /**
   * 
   * @var orderNumber $orderNumber
   * @access public
   */
  public $orderNumber = null;

  /**
   * 
   * @var string $attCircuitId
   * @access public
   */
  public $attCircuitId = null;

  /**
   * 
   * @var completionReportedDate $completionReportedDate
   * @access public
   */
  public $completionReportedDate = null;

  /**
   * 
   * @var jeopardyCode $jeopardyCode
   * @access public
   */
  public $jeopardyCode = null;

  /**
   * 
   * @var customerDueDate $customerDueDate
   * @access public
   */
  public $customerDueDate = null;

  /**
   * 
   * @var dueDateCompletion $dueDateCompletion
   * @access public
   */
  public $dueDateCompletion = null;

  /**
   * 
   * @var dueDateScheduled $dueDateScheduled
   * @access public
   */
  public $dueDateScheduled = null;

  /**
   * 
   * @var expeditedIndicator $expeditedIndicator
   * @access public
   */
  public $expeditedIndicator = null;

  /**
   * 
   * @var originalDueDate $originalDueDate
   * @access public
   */
  public $originalDueDate = null;

  /**
   * 
   * @var recordIssueDate $recordIssueDate
   * @access public
   */
  public $recordIssueDate = null;

  /**
   * 
   * @var orderStatus $orderStatus
   * @access public
   */
  public $orderStatus = null;

  /**
   * 
   * @var ResponseInfo $Response
   * @access public
   */
  public $Response = null;

  /**
   * 
   * @param orderNumber $orderNumber
   * @param string $attCircuitId
   * @param completionReportedDate $completionReportedDate
   * @param jeopardyCode $jeopardyCode
   * @param customerDueDate $customerDueDate
   * @param dueDateCompletion $dueDateCompletion
   * @param dueDateScheduled $dueDateScheduled
   * @param expeditedIndicator $expeditedIndicator
   * @param originalDueDate $originalDueDate
   * @param recordIssueDate $recordIssueDate
   * @param orderStatus $orderStatus
   * @param ResponseInfo $Response
   * @access public
   */
  public function __construct($orderNumber, $attCircuitId, $completionReportedDate, $jeopardyCode, $customerDueDate, $dueDateCompletion, $dueDateScheduled, $expeditedIndicator, $originalDueDate, $recordIssueDate, $orderStatus, $Response)
  {
    $this->orderNumber = $orderNumber;
    $this->attCircuitId = $attCircuitId;
    $this->completionReportedDate = $completionReportedDate;
    $this->jeopardyCode = $jeopardyCode;
    $this->customerDueDate = $customerDueDate;
    $this->dueDateCompletion = $dueDateCompletion;
    $this->dueDateScheduled = $dueDateScheduled;
    $this->expeditedIndicator = $expeditedIndicator;
    $this->originalDueDate = $originalDueDate;
    $this->recordIssueDate = $recordIssueDate;
    $this->orderStatus = $orderStatus;
    $this->Response = $Response;
  }

}
