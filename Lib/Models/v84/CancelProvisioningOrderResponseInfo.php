<?php

class CancelProvisioningOrderResponseInfo
{

  /**
   * 
   * @var DateTimeWithTimezoneInfo $responseTime
   * @access public
   */
  public $responseTime = null;

  /**
   * 
   * @var additionalMessage $additionalMessage
   * @access public
   */
  public $additionalMessage = null;

  /**
   * 
   * @var ResponseInfo $Response
   * @access public
   */
  public $Response = null;

  /**
   * 
   * @param DateTimeWithTimezoneInfo $responseTime
   * @param additionalMessage $additionalMessage
   * @param ResponseInfo $Response
   * @access public
   */
  public function __construct($responseTime, $additionalMessage, $Response)
  {
    $this->responseTime = $responseTime;
    $this->additionalMessage = $additionalMessage;
    $this->Response = $Response;
  }

}
