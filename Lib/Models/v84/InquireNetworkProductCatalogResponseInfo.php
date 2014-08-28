<?php

class InquireNetworkProductCatalogResponseInfo
{

  /**
   * 
   * @var AvailableTransportSpeedsDetails $AvailableTransportSpeedsDetails
   * @access public
   */
  public $AvailableTransportSpeedsDetails = null;

  /**
   * 
   * @var AvailableASEPortSpeeds $AvailableASEPortSpeeds
   * @access public
   */
  public $AvailableASEPortSpeeds = null;

  /**
   * 
   * @var AvailableASECirSpeeds $AvailableASECirSpeeds
   * @access public
   */
  public $AvailableASECirSpeeds = null;

  /**
   * 
   * @var additionalNotes $additionalNotes
   * @access public
   */
  public $additionalNotes = null;

  /**
   * 
   * @var ResponseInfo $Warning
   * @access public
   */
  public $Warning = null;

  /**
   * 
   * @var ResponseInfo $Response
   * @access public
   */
  public $Response = null;

  /**
   * 
   * @param AvailableTransportSpeedsDetails $AvailableTransportSpeedsDetails
   * @param AvailableASEPortSpeeds $AvailableASEPortSpeeds
   * @param AvailableASECirSpeeds $AvailableASECirSpeeds
   * @param additionalNotes $additionalNotes
   * @param ResponseInfo $Warning
   * @param ResponseInfo $Response
   * @access public
   */
  public function __construct($AvailableTransportSpeedsDetails, $AvailableASEPortSpeeds, $AvailableASECirSpeeds, $additionalNotes, $Warning, $Response)
  {
    $this->AvailableTransportSpeedsDetails = $AvailableTransportSpeedsDetails;
    $this->AvailableASEPortSpeeds = $AvailableASEPortSpeeds;
    $this->AvailableASECirSpeeds = $AvailableASECirSpeeds;
    $this->additionalNotes = $additionalNotes;
    $this->Warning = $Warning;
    $this->Response = $Response;
  }

}
