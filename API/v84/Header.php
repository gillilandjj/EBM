<?php
  require_once('../../Lib/Models/v84/CingularWirelessCSIService.php');
  ini_set("soap.wsdl_cache_enabled", 0);
  header('Content-Type: application/json');

  /**
   * Get request parameters
   */
  function GET($key, $default = null) {
    return isset($_GET[$key]) ? $_GET[$key] : $default;
  }

  /**
   * Create a tracking header with the minimum required data
   *
   * @return MessageHeaderTracking
   */
  function createTrackingHeader() {
    $infrastructureVersion = null;
    $originalInfrastructureVersion = null;
    $applicationName = null;
    $version = 'v84';
    $originalVersion = null;
    $messageId = 'XXXXXXXXX: 5645646545648';
    $originatorId = null;
    $responseTo = null;
    $returnURL = null;
    $timeToLive = 30000;
    $conversationId = null;
    $routingRegionOverride = null;
    $dateTimeStamp = '2014-05-09T10:28:49Z';
    $uniqueTransactionId = null;

    return new MessageHeaderTracking($infrastructureVersion, $originalInfrastructureVersion, $applicationName, $version, $originalVersion, $messageId, $originatorId, $responseTo, $returnURL, $timeToLive, $conversationId, $routingRegionOverride, $dateTimeStamp, $uniqueTransactionId);
  }

  /**
   * Create a security header with the minimum required data
   *
   * @return MessageHeaderSecurity
   */
  function createSecurityHeader() {
    $userName = 'XXXXXX';
    $userPassword = 'XXXXXX';
    return new MessageHeaderSecurity($userName, $userPassword);
  }
  
  /**
   * Create a sequence header with the minimum required data
   *
   * @return MessageHeaderSequence
   */
  function createSequenceHeader() {
    $sequenceNumber = 1;
    $totalInSequence = 1;
    return new MessageHeaderSequence($sequenceNumber, $totalInSequence);
  }

  /**
   * Create a header with the minimum required data
   *
   * @return SOAPHeader
   */
  function createHeader() {

    $messageHeader = new MessageHeaderInfo(createTrackingHeader(), createSecurityHeader(), createSequenceHeader());

    $header = new SOAPHeader('http://csi.cingular.com/CSI/Namespaces/Types/Public/MessageHeader.xsd', 'MessageHeader', $messageHeader);

    return $header;
  }

?>
