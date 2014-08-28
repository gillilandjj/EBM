<?php

class ContactDetails
{

  /**
   * 
   * @var primaryFirstName $primaryFirstName
   * @access public
   */
  public $primaryFirstName = null;

  /**
   * 
   * @var primaryLastName $primaryLastName
   * @access public
   */
  public $primaryLastName = null;

  /**
   * 
   * @var primaryEmail $primaryEmail
   * @access public
   */
  public $primaryEmail = null;

  /**
   * 
   * @var TelephoneNumberInfo $primaryPhoneNumber
   * @access public
   */
  public $primaryPhoneNumber = null;

  /**
   * 
   * @var TelephoneNumberInfo $primaryCellNumber
   * @access public
   */
  public $primaryCellNumber = null;

  /**
   * 
   * @var alternateFirstName $alternateFirstName
   * @access public
   */
  public $alternateFirstName = null;

  /**
   * 
   * @var TelephoneNumberInfo $alternateTelePhoneNumber
   * @access public
   */
  public $alternateTelePhoneNumber = null;

  /**
   * 
   * @var TelephoneNumberInfo $alternateCellNumber
   * @access public
   */
  public $alternateCellNumber = null;

  /**
   * 
   * @var alternateLastName $alternateLastName
   * @access public
   */
  public $alternateLastName = null;

  /**
   * 
   * @var alternateEmail $alternateEmail
   * @access public
   */
  public $alternateEmail = null;

  /**
   * 
   * @param primaryFirstName $primaryFirstName
   * @param primaryLastName $primaryLastName
   * @param primaryEmail $primaryEmail
   * @param TelephoneNumberInfo $primaryPhoneNumber
   * @param TelephoneNumberInfo $primaryCellNumber
   * @param alternateFirstName $alternateFirstName
   * @param TelephoneNumberInfo $alternateTelePhoneNumber
   * @param TelephoneNumberInfo $alternateCellNumber
   * @param alternateLastName $alternateLastName
   * @param alternateEmail $alternateEmail
   * @access public
   */
  public function __construct($primaryFirstName, $primaryLastName, $primaryEmail, $primaryPhoneNumber, $primaryCellNumber, $alternateFirstName, $alternateTelePhoneNumber, $alternateCellNumber, $alternateLastName, $alternateEmail)
  {
    $this->primaryFirstName = $primaryFirstName;
    $this->primaryLastName = $primaryLastName;
    $this->primaryEmail = $primaryEmail;
    $this->primaryPhoneNumber = $primaryPhoneNumber;
    $this->primaryCellNumber = $primaryCellNumber;
    $this->alternateFirstName = $alternateFirstName;
    $this->alternateTelePhoneNumber = $alternateTelePhoneNumber;
    $this->alternateCellNumber = $alternateCellNumber;
    $this->alternateLastName = $alternateLastName;
    $this->alternateEmail = $alternateEmail;
  }

}
