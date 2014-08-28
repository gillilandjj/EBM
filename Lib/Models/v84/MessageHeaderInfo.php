<?php

class MessageHeaderInfo
{

  /**
   * 
   * @var MessageHeaderTracking $TrackingMessageHeader
   * @access public
   */
  public $TrackingMessageHeader = null;

  /**
   * 
   * @var MessageHeaderSecurity $SecurityMessageHeader
   * @access public
   */
  public $SecurityMessageHeader = null;

  /**
   * 
   * @var MessageHeaderSequence $SequenceMessageHeader
   * @access public
   */
  public $SequenceMessageHeader = null;

  /**
   * 
   * @param MessageHeaderTracking $TrackingMessageHeader
   * @param MessageHeaderSecurity $SecurityMessageHeader
   * @param MessageHeaderSequence $SequenceMessageHeader
   * @access public
   */
  public function __construct($TrackingMessageHeader, $SecurityMessageHeader, $SequenceMessageHeader)
  {
    $this->TrackingMessageHeader = $TrackingMessageHeader;
    $this->SecurityMessageHeader = $SecurityMessageHeader;
    $this->SequenceMessageHeader = $SequenceMessageHeader;
  }

}
