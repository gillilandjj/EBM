<?php

class MessageHeaderSecurity
{

  /**
   * 
   * @var string $userName
   * @access public
   */
  public $userName = null;

  /**
   * 
   * @var string $userPassword
   * @access public
   */
  public $userPassword = null;

  /**
   * 
   * @param string $userName
   * @param string $userPassword
   * @access public
   */
  public function __construct($userName, $userPassword)
  {
    $this->userName = $userName;
    $this->userPassword = $userPassword;
  }

}
