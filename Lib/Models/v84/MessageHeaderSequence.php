<?php

class MessageHeaderSequence
{

  /**
   * 
   * @var string $sequenceNumber
   * @access public
   */
  public $sequenceNumber = null;

  /**
   * 
   * @var string $totalInSequence
   * @access public
   */
  public $totalInSequence = null;

  /**
   * 
   * @param string $sequenceNumber
   * @param string $totalInSequence
   * @access public
   */
  public function __construct($sequenceNumber, $totalInSequence)
  {
    $this->sequenceNumber = $sequenceNumber;
    $this->totalInSequence = $totalInSequence;
  }

}
