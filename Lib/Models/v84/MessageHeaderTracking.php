<?php

class MessageHeaderTracking
{

  /**
   * 
   * @var string $infrastructureVersion
   * @access public
   */
  public $infrastructureVersion = null;

  /**
   * 
   * @var string $originalInfrastructureVersion
   * @access public
   */
  public $originalInfrastructureVersion = null;

  /**
   * 
   * @var applicationName $applicationName
   * @access public
   */
  public $applicationName = null;

  /**
   * 
   * @var string $version
   * @access public
   */
  public $version = null;

  /**
   * 
   * @var string $originalVersion
   * @access public
   */
  public $originalVersion = null;

  /**
   * 
   * @var string $messageId
   * @access public
   */
  public $messageId = null;

  /**
   * 
   * @var string $originatorId
   * @access public
   */
  public $originatorId = null;

  /**
   * 
   * @var string $responseTo
   * @access public
   */
  public $responseTo = null;

  /**
   * 
   * @var string $returnURL
   * @access public
   */
  public $returnURL = null;

  /**
   * 
   * @var int $timeToLive
   * @access public
   */
  public $timeToLive = null;

  /**
   * 
   * @var string $conversationId
   * @access public
   */
  public $conversationId = null;

  /**
   * 
   * @var string $routingRegionOverride
   * @access public
   */
  public $routingRegionOverride = null;

  /**
   * 
   * @var DateTimeWithTimezoneInfo $dateTimeStamp
   * @access public
   */
  public $dateTimeStamp = null;

  /**
   * 
   * @var string $uniqueTransactionId
   * @access public
   */
  public $uniqueTransactionId = null;

  /**
   * 
   * @param string $infrastructureVersion
   * @param string $originalInfrastructureVersion
   * @param applicationName $applicationName
   * @param string $version
   * @param string $originalVersion
   * @param string $messageId
   * @param string $originatorId
   * @param string $responseTo
   * @param string $returnURL
   * @param int $timeToLive
   * @param string $conversationId
   * @param string $routingRegionOverride
   * @param DateTimeWithTimezoneInfo $dateTimeStamp
   * @param string $uniqueTransactionId
   * @access public
   */
  public function __construct($infrastructureVersion, $originalInfrastructureVersion, $applicationName, $version, $originalVersion, $messageId, $originatorId, $responseTo, $returnURL, $timeToLive, $conversationId, $routingRegionOverride, $dateTimeStamp, $uniqueTransactionId)
  {
    $this->infrastructureVersion = $infrastructureVersion;
    $this->originalInfrastructureVersion = $originalInfrastructureVersion;
    $this->applicationName = $applicationName;
    $this->version = $version;
    $this->originalVersion = $originalVersion;
    $this->messageId = $messageId;
    $this->originatorId = $originatorId;
    $this->responseTo = $responseTo;
    $this->returnURL = $returnURL;
    $this->timeToLive = $timeToLive;
    $this->conversationId = $conversationId;
    $this->routingRegionOverride = $routingRegionOverride;
    $this->dateTimeStamp = $dateTimeStamp;
    $this->uniqueTransactionId = $uniqueTransactionId;
  }

}
