<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Login form
 *
 * @package    LJAdmin
 * @author     Lieuwe Jan Eilander
 * @copyright  (c) 2010-2011 Lieuwe Jan Eilander
 */
abstract class Ljadmin_View_Admin_Auth_Login extends Ljadmin_View_Admin_Default {

  /**
   * Error to be shown when login fails
   * @var  string
   */
  public $error;

  /**
   * Entered username after login fails
   * @var  string
   */
  protected $_username;

  /**
   * Escape and return username
   *
   * @return  string
   */
  public function username()
  {
    return HTML::chars($this->_username);
  }

}
