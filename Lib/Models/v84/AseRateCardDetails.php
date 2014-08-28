<?php

class AseRateCardDetails
{

  /**
   * 
   * @var commitmentTerm $commitmentTerm
   * @access public
   */
  public $commitmentTerm = null;

  /**
   * 
   * @var asePortSpeedPriceDetails $asePortSpeedPriceDetails
   * @access public
   */
  public $asePortSpeedPriceDetails = null;

  /**
   * 
   * @var aseCirSpeedPriceDetails $aseCirSpeedPriceDetails
   * @access public
   */
  public $aseCirSpeedPriceDetails = null;

  /**
   * 
   * @param commitmentTerm $commitmentTerm
   * @param asePortSpeedPriceDetails $asePortSpeedPriceDetails
   * @param aseCirSpeedPriceDetails $aseCirSpeedPriceDetails
   * @access public
   */
  public function __construct($commitmentTerm, $asePortSpeedPriceDetails, $aseCirSpeedPriceDetails)
  {
    $this->commitmentTerm = $commitmentTerm;
    $this->asePortSpeedPriceDetails = $asePortSpeedPriceDetails;
    $this->aseCirSpeedPriceDetails = $aseCirSpeedPriceDetails;
  }

}
